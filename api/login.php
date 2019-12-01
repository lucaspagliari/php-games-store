<?php

require 'conection.php';
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sql = "SELECT * FROM Usuarios WHERE email='$email' AND senha='$senha'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) != 0) {
            foreach ($result as $row) {

                session_start();
                $_SESSION['logado'] = TRUE;             
                $_SESSION['nome'] = $row['nome'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['cpf'] = $row['cpf'];
                header('Location: ../front/index.php');
            }   
        } else {
            header('Location: ../front/app/form.php?error=user_not_found');
        }
        mysqli_close($conn);
    } else {    
        header('Location: ../index.php?error=email_field');
    }
}

?>
