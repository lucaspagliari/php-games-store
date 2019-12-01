<?php

require 'conection.php';


if (isset($_POST['register'])) {
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    if ($_POST['digital'] == '1'){
        $digital = 1;
    }
    else{
        $digital = 0;
    }
    if (!empty($nome) && !empty($valor)) {
        
        $valor = str_replace("R$","",$valor);
        $valor = str_replace(",",".",$valor);
        $valor = floatval($valor);
        
        $sql = "INSERT INTO Jogos (nome, valor, digital)
        VALUES ('$nome', '$valor', '$digital')";
        $result = mysqli_query($conn, $sql);
        header("Location: ../front/app/gameForm.php?message=game_created");
        }
    } else {    
        header('Location: ../front/app/gameForm.php?error=bad_input');
    }


?>
