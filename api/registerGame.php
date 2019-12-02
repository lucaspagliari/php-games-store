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

        $sql = "SELECT * FROM Jogos ORDER BY id DESCLIMIT 1";
        $result = mysqli_query($conn, $sql);
        foreach ($result as $row) {
            $id = $row["id"];
        }
        $target_dir = "../front/img/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        header("Location: ../front/forms/anuncio.php?message=game_created");

    }

    } else {  

        header('Location: ../front/app/announceForm.php?error=bad_input');
  
    }
    

?>
