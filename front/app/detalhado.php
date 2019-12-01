<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/detalhado.css">
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
    <div class="container">
        <div class="product-container main-product-container">
            <div class="product-left-container">
                <img src="https://img.ibxk.com.br/2018/06/15/15153912597117.jpg"
                    alt="" height="450px" />
            </div>
            <div class="product-col-container">
                <h1 class="product-page"><?php echo $nome ?></h1>
                Ano: <?php echo $ano ?><br>
                Produtora: <?php echo $produtora ?><br>
                <h3>Anuncios sobre este produto: </h3>                
            </div>
        </div>
        <br clear="all" />
        <div class="product-container">
            <div class="product-left-container">
                <h1 class="product-page">Sobre o Jogo</h1>
                <p class="product-body">
                <?php echo $descricao ?>
                </p>
            </div>
        </div>
        <br clear="all" />
    </div>
</body>
</html>