<?php

require 'conection.php';


if (isset($_POST['register'])) {
    // tab usuario
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    // tab endereco
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    

    if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($nome) && !empty($senha) && !empty($cpf)) {
        
        for ($i=0; $i < 3; $i++) { 
            $cpf = str_replace(".","",$cpf);
        }        
        $cpf = str_replace("-","",$cpf);

        $result = mysqli_query($conn, "SELECT * FROM Usuarios WHERE cpf='$cpf'");
        $result2 = mysqli_query($conn, "SELECT * FROM Usuarios WHERE email='$email'");
        
        if (mysqli_num_rows($result) != 0) {
            header("Location: ../front/app/form.php?error=cpf_already_registred");
        
        } else if (mysqli_num_rows($result2) != 0) {
            header("Location: ../front/app/form.php?error=email_already_registred");

        } else {
         
        //fazer check?
        
            $sql = "INSERT INTO Enderecos (rua, numero, bairro, cep) 
            VALUES ('$rua', '$numero', '$bairro', '$cep')";
    
            $result = mysqli_query($conn, $sql);       

            $sql = "INSERT INTO Usuarios (cpf, nome, email, senha) 
                VALUES ('$cpf', '$nome', '$email', '$senha')";
            
            $result = mysqli_query($conn, $sql);        
            header("Location: ../front/app/form.php?message=user_created");      
            
        }
  

    } else {    
        header('Location: ../front/app/form.php?error=email_invalid');
    }
}

?>
