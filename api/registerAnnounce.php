<?php

require 'conection.php';


if (isset($_POST['register'])) {
    $titulo = $_POST['titulo'];
    $valor = $_POST['valor'];
    $descricao = $_POST['descricao'];
    $jogo = $_POST['jogo'];
    $email = "admin@gmail.com";

    if (!empty($titulo) && !empty($valor) && !empty($descricao) && !empty($jogo)) {
        
        $valor = str_replace("R$","",$valor);
        $valor = str_replace(",",".",$valor);
        $valor = floatval($valor);
        $result1 = mysqli_query($conn, "SELECT email FROM `Usuarios` WHERE `email` = '$email'");
        $result2 = mysqli_query($conn, "SELECT id FROM `jogos` WHERE `id` = '$jogo'");

        if (mysqli_num_rows($result1) == 0) {
            header("Location: ../front/forms/anuncio.php?message=no_user_loggedin");
        
        } else if (mysqli_num_rows($result2) == 0) {
            header("Location: ../front/forms/anuncio.php?message=no_game_found");

        } else {

        $sql = "INSERT INTO Anuncios (titulo , descricao , valor , cpf , id)
        VALUES ('$titulo', '$descricao' , '$valor' , (SELECT cpf from usuarios WHERE email='$email') , (SELECT id from Jogos WHERE nome='$jogo'))";
        $result3 = mysqli_query($conn, $sql);
        header("Location: ../front/forms/anuncio.php?message=game_created");
        }
    } else {    
        header('Location: ../front/forms/anuncio.php?error=bad_input');
    }
}
?>
