<?php

include('conexao.php'); //incluindo a pagina de conexão com o bd 


//verificar se as variaveis estao preenchidas e tambem verificar o email e a senha 
if (isset($_POST['nome']) || isset($_POST['senha'])) { //se existe email e senha  faz a condição para conexao


    if (strlen($_POST['nome']) == 0) {
        echo "Preencha seu usuário";
    } elseif (strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $nome = $mysqli->real_escape_string($_POST['nome']); //metodo para apagar as strings evitando vazamento de dados por sql injection
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE nome = '$nome' AND senha = '$senha'"; //selecionando todos os campos da tabela nomes
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error); // caso der erro, será apresentado 

        $quantidade = $sql_query->num_rows; // obtem o numero de linhas com resultados

        if ($quantidade == 1) { // se a quantidade for igual a um, o login será executado
            $nome = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $nome['id'];
            $_SESSION['name'] = $nome['nome'];

            header("Location: index.php");
        } else {
            echo "Falha ao logar, usuário ou senha incorretos";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/stylelogin.css"> 
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
    <div class="main-login">
        <div class="left-login">
            <h1>Acesse sua conta</h1>
            <h1>Finin Sportgear</h1>
          <img src="assets/img/logo.svg" class="left-login-image" alt="Logo"> !
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>Login</h1>
                    <div class="textfield">
                        <label for="nome">Usuário</label>
                        <input type="text" name="nome" placeholder="Usuário">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Digite sua senha">
                    </div>
                    <button class="btn-login" type="submit">Login</button>
                
            </div>
        </div>
        </form>
</body>

</html>