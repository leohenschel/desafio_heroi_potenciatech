<?php

if(!isset($_SESSION[""])){
    session_start();    
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finin Sportgear</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- topo do site !-->

    <div class="header">
        <p class="logo">Finin Sportgear</p>
        <div class="cart"><i class="fa fa-shopping-cart"></i>
            <p>0</p>
        </div>
    </div>

    <!-- fim do topo !-->

    <!-- inicio do conteudo !-->

    <div class="container">

        <!-- linha produtos do site !-->
        <div class="linha-produtos">
            <!-- inico dos produtos !-->
            <form action="" method="post"> <!-- metodo para enviar o item para o carrinho, falta configurar !-->
                <div class="corpoProduto">
                    <div class="imgProduto">
                        <img src="assets/img/pdt1.jpg" alt="" class="produtoMiniatura">
                    </div>
                    <div class="titulo">
                        <p>Camiseta Under Armour Treino Left</p>
                        <h2>R$ 119,90</h2>
                        <input type="hidden" name="id_produto" value="">
                        <input type="hidden" name="valor" value="">
                        <button type="submit" class="button" name="addcarrinho">Adicionar ao carrinho</button>
                    </div>
                </div>
            </form>
            <!-- fim produto !-->
            <!-- inico dos produtos !-->
            <form action="" method="post">
                <div class="corpoProduto">
                    <div class="imgProduto">
                        <img src="assets/img/pdt2.jpg" alt="" class="produtoMiniatura">
                    </div>
                    <div class="titulo">
                        <p>Chuteira Nike Phantom GX Elite DF FG</p>
                        <h2>R$ 529,90</h2>
                        <input type="hidden" name="id_produto" value="">
                        <input type="hidden" name="valor" value="">
                        <button type="submit" class="button" name="addcarrinho">Adicionar ao carrinho</button>
                    </div>
                </div>
            </form>
            <!-- fim produto !-->

            <!-- inico dos produtos !-->
            <form action="" method="post">
                <div class="corpoProduto">
                    <div class="imgProduto">
                        <img src="assets/img/pdt3.jpg" alt="" class="produtoMiniatura">
                    </div>
                    <div class="titulo">
                        <p>Camisa Termica Compressão Umbro Grapic Pro</p>
                        <h2>R$ 149,90</h2>
                        <input type="hidden" name="id_produto" value="">
                        <input type="hidden" name="valor" value="">
                        <button type="submit" class="button" name="addcarrinho">Adicionar ao carrinho</button>
                    </div>
                </div>
            </form>
            <!-- fim produto !-->

            <!-- inico dos produtos !-->
            <form action="" method="post">
                <div class="corpoProduto">
                    <div class="imgProduto">
                        <img src="assets/img/pdt4.jpg" alt="" class="produtoMiniatura">
                    </div>
                    <div class="titulo">
                        <p>Bola de Campo Puma Cage Ball</p>
                        <h2>R$ 169,90</h2>
                        <input type="hidden" name="id_produto" value="">
                        <input type="hidden" name="valor" value="">
                        <button type="submit" class="button" name="addcarrinho">Adicionar ao carrinho</button>
                    </div>
                </div>
            </form>
            <!-- fim produto !-->

        </div>
        <!--  fim linha  produtos do site !-->

        <!-- inicio barra lateral do site !-->

        <div class="barra-lateral">

            <div class="topoCarrinho">
                <p>Meu carrinho</p>
            </div>

            <!-- inicio produto carrinho !-->

            <div class="item-carrinho">
                <div class="linha-da-imagem">
                    <img src="assets/img/pdt1.jpg" alt="" class="img-carrinho">
                </div>
                <p>-</p>
                <h2>-</h2>
                <form action="" method="post"> <!-- para excluir do carrinho, falta realizar o apontamento com a action!-->
                    <input type="hidden" name="id_produto" value="">
                    <button type="submit" style="border:none; background:none;"> <i class="fa fa-trash-o"></i></button>
                </form>

            </div>

            <!-- fim produto carrinho !-->

            <div class="item-carrinho-vazio">Seu carrinho está vazio.</div>
            <div class="rodape">
                <h3>Total</h3>
                <h2>R$</h2>
            </div>

        </div>

        <!--  fim barra lateral do site !-->
    </div>

    <!-- fim do conteudo !-->

</body>

</html>