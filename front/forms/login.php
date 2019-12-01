<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/form.css">
    <title>Loja de Game</title>
</head>
<body>
        <div class="container" id="container">
            <!-- REGISTER -->
            <div class="form-container sign-up-container">
                <form action="../../api/registerUser.php" method="post">
                    <h1>Crie uma conta</h1>
                    <input type="text" placeholder="Nome" name="nome" required>
                    <input type="email" placeholder="Email" name="email" required>
                    <input type="password" placeholder="Senha" name="senha" required>
                    <input type="text" placeholder="CPF"  id="cpf" name="cpf" maxlength="11" required>
                    <input type="text" placeholder="Rua" name="rua" required>
                    <input type="text" placeholder="Numero" name="numero" required>
                    <input type="text" placeholder="Bairro" name="bairro" required>
                    <input type="text" placeholder="CEP" name="cep" required>
                    <input type="text" name="register" value="true" style="display: none">
                    <button type="submit" >Cadastre-se</button>
                </form>
            </div>
            <!-- LOGIN -->
            <div class="form-container sign-in-container">
                <form action="../../api/login.php" method="post">
                <h1>Entrar</h1>
                    <input type="text" name="login" value="true" style="display: none">
                    <input type="email" placeholder="Email" name="email" required>
                    <input type="password" placeholder="Senha" name="senha" required>
                    <button type="submit">Entrar</button>
                    <?php
                        $error = isset($_GET['error']) ? $_GET['error'] : '';
                        if ($error == 'user_not_found') {
                            echo '<h3>Usuário não encontrado!</h3>';
                        }
                    ?>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Seja bem vindo de volta!</h1>
                        <p>Para continuar conectado insira seu login</p>
                        <button class="fantasma" id="signIn">Entrar</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Olá, jogador!</h1>
                        <p>Insira os seus dados e comece uma jornada conosco</p>
                        <button class="fantasma" id="signUp">Cadastre-se</button>
                    </div>
                </div>
            </div>
        </div>
</body>
<script src="../js/form.js"></script>
</html>