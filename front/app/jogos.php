<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Jogos</title>
    <link rel="stylesheet" href="../css/jogos.css">
    <link rel="stylesheet" href="../css/navbar.css">
</head>

<body>
<?php   
        session_start();
        $logado = isset($_SESSION['logado']) ? $_SESSION['logado'] : FALSE;
        if (!$logado) {
            header("Location: ../forms/login.php?message=no_user_loggedin");
        }
?>
    <!-- dynamic navbar -->
    <nav id="nav-app"></nav>
    <div class="main">
        <h1 class="main-title">Lista de Jogos</h1>
        <ul class="cards">
            <?php
                require "../../api/conection.php";

                $result = mysqli_query($conn, "SELECT * FROM Jogos ORDER BY id DESC");
                foreach ($result as $row) {
                    $id = $row["id"];
                    $nome = $row["nome"];
                    $produtora = $row["produtora"];
                    $ano = $row["ano"];

                    $text = "
                    <form  class='cards_item' action='detalhado.php' method='post'>
                        <div class='card'>
                            <div class='card_image'>
                                <img src='../img/$id.png'>
                            </div>
                            <div class='card_content'>
                                <h2 class='card_title'>$nome</h2>
                                <p class='card_text'>lançado em $ano por $produtora</p>
                                <input class='hide' type='number' name='jogoid' value='$id'>
                                <button type='submit' class='btn card_btn'>Ver Detalhes</button>
                            </div>
                        </div>
                    </form>";
                    echo $text;
                }
            ?>
        
        
        </ul>
    </div>
    
    <script src="../js/navbar.js"></script>
</body>

</html>