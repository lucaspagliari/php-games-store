<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/detalhado.css">
    <link rel="stylesheet" href="../css/navbar.css">
</head>
<body>
    <?php   
        require '../../api/conection.php';

            $id = $_POST['jogoid'];
            $result = mysqli_query($conn, "SELECT * FROM `jogos` WHERE `id` = '$id'");
            foreach ($result as $row) {
                $id = $row["id"];
                $nome = $row["nome"];
                $produtora = $row["produtora"];
                $ano = $row["ano"];
                $descricao = $row["descricao"];
            }
    ?>
    <nav id="nav-app"></nav>
    <div class="container">
        <div class="product-container main-product-container">
            <div class="product-left-container">
                <img src="<?php echo "../img/$id.png" ?>" alt="" height="400px" width="542px" />
            </div>
            <div class="product-col-container">
                <h1 class="product-page"><?php echo $nome ?></h1>
                Ano: <?php echo $ano ?><br>
                Produtora: <?php echo $produtora ?><br>
                <br>
                <h3>Anuncios sobre este produto:</h3> 
                        <a  class="anuncio" href="./confirmar.php">
                    <?php 
                    $result1 = mysqli_query($conn, "SELECT * FROM `anuncios` WHERE `id` = '$id' ");
                    foreach ($result1 as $row) {
                        $titulo = $row["titulo"];
                        $valor = $row["valor"];
                        echo " <div>$titulo</div> <div>R$$valor</div>";
                    }?> 
                        <img src="../img/shopping-cart.svg" height="20px">
                    </a>
            </div>
        </div>
        <br clear="all" />
        <div class="product-container">
            <div class="product-left-container">
                <h1 class="product-page">Sobre o Jogo</h1>
                <p class="product-body">
               <h2 class="product-page"> <?php echo $descricao ?></h2>
                </p>
            </div>
        </div>
        <br clear="all" />
    </div>
    <script src="../js/navbar.js"></script>

</body>
</html>