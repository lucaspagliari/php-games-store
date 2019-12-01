<?php

require 'conection.php';


if (isset($_POST['register'])) {
    $nome = $_POST['nome'];
    $produtora = $_POST['produtora'];
    $ano = $_POST['ano'];    

    if (!empty($nome) && !empty($produtora) && !empty($ano) ) {  

        $sql = "INSERT INTO Jogos (nome, produtora, ano)
        VALUES ('$nome', '$produtora', '$ano')";
        $result = mysqli_query($conn, $sql);
        header("Location: ../front/app/announceForm.php?message=game_created");
        
    }

    } else {  

        header('Location: ../front/app/announceForm.php?error=bad_input');
  
    }


?>
