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

    <form action="./detalhado.php" method="post">
    <?php
        require "../../api/conection.php";
        session_start();

        $nome = $_SESSION['nome'];
        $email = $_SESSION['email'];
        $cpf = $_SESSION['cpf'];
        
        $text = "
        <div class='user-profile'>
            <div class='profile-card'>
                <h1 class='profile-card__title'>$nome</h1>
                <p class='profile-card__subtitle'>$email</p><img class='profile-card__avatar'
                    src='https://gravatar.com/avatar/56d18ba2b0bf189436499b0f215b5e29?s=100' alt='Avatar for Bart Veneman'>
            </div>
        </div>
        <div class='profile-projects '>
            <ol class='cards'>";

        $result = mysqli_query($conn, "SELECT * FROM Anuncios WHERE cpf='$cpf'");
        
            try {
                foreach ($result as $row) {
                    $jogo_id = $row["id"];
                    $titulo = $row["titulo"];
                    $descricao = $row["descricao"];
                    $valor = $row["valor"];
    
                    $text .= "
                        <li><a class='card' >
                            <input class='hide' name='jogoid' type='text' value='$jogo_id'>
                            <h4 class='card__title'>$titulo</h4>
                            <p class='card__meta'>$valor
                            <time>$descricao</time>
                            </p>
                            <button type='submit' class='btn card_btn'>Ver Jogo</button>
                            </a></li>";
                }
            } catch (Throwable $th) {
                $text .= "<div class='profile-projects'>
                    <ol class='cards'>
                    <p class='card__meta'>Sem Anúncios</p>";
            }
         
        echo $text . "</ol></div>";

    ?>
    </form>
    <script src="../js/navbar.js"></script>
</body>
</html>