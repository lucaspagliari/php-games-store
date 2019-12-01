<?php

require 'conection.php';


if (isset($_POST['register'])) {
    $nome = $_POST['nome'];
    $ano = $_POST['ano'];
    $produtora = $_POST['produtora'];
    $descricao = $_POST['descricao'];      

    if (!empty($nome) && !empty($produtora) && !empty($ano) ) {  

        $sql = "INSERT INTO Jogos (nome, produtora, ano, descricao)
        VALUES ('$nome', '$produtora', '$ano', '$descricao')";
        $result = mysqli_query($conn, $sql);
        header("Location: ../front/forms/anuncio.php?message=game_created");
        
    }

    } else {  

        header('Location: ../front/app/announceForm.php?error=bad_input');
  
    }


?>
