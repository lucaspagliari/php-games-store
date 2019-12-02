<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/navbar.css">

    <title>Document</title>
</head>
<body>
    <?php
    
        require "../../api/conection.php";
        $id = $_POST['anunid'];
        session_start();
        $cpf = $_SESSION['cpf'];
        $result = mysqli_query($conn, "SELECT * FROM `enderecos` WHERE `cpf` = '$cpf' ");
        foreach ($result as $row) {
            $rua = $row["rua"];
            $numero = $row["numero"];
            $bairro = $row["bairro"];
            $cep = $row["cep"];
        }

        $result2 = mysqli_query($conn, "DELETE FROM `anuncios` WHERE `anuncios`.`idanuncio` = '$id'");

    ?>

    <nav id="nav-app"></nav>
    <script src="../js/navbar.js"></script>
    <br>
    <h2 align = "center">Compra confirmada! <br>
    Seu produto chegará em alguns dias no endereço:<br><font color="#fbac0b">
        <?php echo $rua . " " . $numero . " " . $bairro . " - " . $cep
         ?>
    </font> </h2>

</body>
</html>