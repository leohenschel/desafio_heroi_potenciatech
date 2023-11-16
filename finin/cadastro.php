<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/stylecadastro.css">
    <title>Finin SportGear Cadastro</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="assets/img/imgcadastro.svg">
        </div>
        <div class="form">
            <form action="#">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se <br> Finin Sportgear</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="index.php">Entrar</a></button>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Primeiro nome</label>
                        <input id="firstname" type="text" name="firstname" placeholder="Digite seu nome" required>
                    </div>

                    <div class="input-box">
                        <label for="lastname">Sobrenome nome</label>
                        <input id="lastname" type="text" name="lastname" placeholder="Digite seu sobrenome" required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>
                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="number" type="tel" name="number" placeholder="(XX) XXXXX-XXXX" required>
                    </div>
                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
                    </div>
                    <div class="input-box">
                        <label for="confirmPassword">Confirme sua senha</label>
                        <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Confirme sua senha" required>
                    </div>
                </div>
                <div class="gender-inputs">
                    <div class="gender-title"></div>
                    <h6>Gênero</h6>
                </div>

                <div class="gender-group">
                    <div class="gender-input">
                        <input type="radio" id="female" name="gender">
                        <label for="female">Feminino</label>
                    </div>

                    <div class="gender-input">
                        <input type="radio" id="male" name="gender">
                        <label for="male">Masculino</label>
                    </div>

                    <div class="gender-input">
                        <input type="radio" id="others" name="gender">
                        <label for="others">Outros</label>
                    </div>

                    <div class="gender-input">
                        <input type="radio" id="none" name="gender">
                        <label for="none">Prefiro não dizer</label>
                    </div>
                </div>

            <div class="continue-button">
                <button><a href="#">Continuar</a></button>
            </div>
            </form>
        </div>
    </div>

</body>

</html>