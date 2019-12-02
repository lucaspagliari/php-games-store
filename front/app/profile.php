<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/profile.css">
</head>
<body>
    <nav id="nav-app"></nav>

    <?php
        require "../../api/conection.php";
        
        session_start();
        $logado = isset($_SESSION['logado']) ? $_SESSION['logado'] : FALSE;
        if (!$logado) {
            header("Location: ../forms/login.php?message=no_user_loggedin");
        }

        $nome = $_SESSION['nome'];
        $email = $_SESSION['email'];
        $cpf = $_SESSION['cpf'];
        
        $text = "
        <div class='user-profile'>
            <div class='profile-card'>
                <h1 class='profile-card__title'>$nome</h1>
                <p class='profile-card__subtitle'>$email</p><img class='profile-card__avatar'
                    src='../img/user.png' alt='Avatar for Bart Veneman'>
            </div>
        </div>";
        echo $text;
    ?>
    <div class='profile-projects '>
            <ol class='cards'>
    <?php   
        $result = mysqli_query($conn, "SELECT * FROM Anuncios WHERE cpf='$cpf'");
        if (mysqli_num_rows($result) != 0) {
            foreach ($result as $row) {
                $jogo_id = $row["id"];
                $titulo = $row["titulo"];
                $descricao = $row["descricao"];
                $valor = $row["valor"];

                $text = "
                    <li>
                        <form class='card' action='./detalhado.php' method='post'>
                            <input class='hide' name='jogoid' type='text' value='$jogo_id'>
                            <h4 class='card__title'>$titulo</h4>
                            <p class='card__meta'>$valor</p>
                            <p>$descricao</p>
                            <button type='submit' class='btn card_btn'>Ver Jogo</button>
                        </form>
                    </li>";
                echo $text;   
            }
        } else {
            $text = "
            <li>
                <form class='card' action='../forms/anuncio.php' method='post'>
                    <p class='card__meta'>Nenhum anúncio foi feito ainda...</p>
                    <h4 class='card__title'></h4>
                    <p></p>
                    <button type='submit' class='btn card_btn'>Fazer Anúncio</button>
                </form>
            </li>";
            echo $text;
        }
    ?>
    </ol></div>
    <script src="../js/navbar.js"></script>
</body>
</html>