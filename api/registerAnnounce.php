<?php

require 'conection.php';


if (isset($_POST['register'])) {
    $today = date("d.m.y");
    $titulo = $_POST['titulo'];
    $valor = $_POST['valor'];
    $descricao = $_POST['descricao'];
    $jogo = "Jogo 2";
    $usuario = "test@gmail.com";

    if (!empty($titulo) && !empty($valor) && !empty($descricao) && !empty($jogo)) {
        
        $valor = str_replace("R$","",$valor);
        $valor = str_replace(",",".",$valor);
        $valor = floatval($valor);
        
        $result = mysqli_query($conn, "SELECT * FROM `jogos` WHERE `nome` = '$jogo'");
        $result2 = mysqli_query($conn, "SELECT * FROM `Usuarios` WHERE `email` = '$usuario'");
       
        if (mysqli_num_rows($result) == 0) {
            header("Location: ../front/app/form.php?error=cpf_already_registred");
        
        } else if (mysqli_num_rows($result2) == 0) {
            header("Location: ../front/app/form.php?error=email_already_registred");

        } else {

        foreach ($result as $row) {
                $id = $row["id"];
                $nome = $row["nome"];
                $produtora = $row["produtora"];
                $ano = $row["ano"];}
        $id = $row["id"];
       
        foreach ($result2 as $row) {
            $id = $row["cpf"];
            $nome = $row["nome"];
            $produtora = $row["senha"];
            $ano = $row["email"];}
        $cpf = $row["cpf"];

        $sql = "INSERT INTO Anuncios (titulo , descricao , valor , cpf , id , data)
        VALUES ('$titulo', '$descricao' , '$valor' , '$id' , '$cpf' , '$today')";
        $result3 = mysqli_query($conn, $sql);
        header("Location: ../front/app/gameForm.php?message=game_created");
        }
    } else {    
        header('Location: ../front/app/gameForm.php?error=bad_input');
    }
}
?>
