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
            <!-- REGISTRAR JOGO -->
            <div class="form-container sign-up-container">
                <form action="../../api/registerGame.php" method="post">
                <h1>Sobre o Jogo</h1>
                    <input type="text" placeholder="Nome do Jogo" name="nome" required>
                    <input type="text" placeholder="Produtor (a)" name="produtora" required> 
                    <input type="text" placeholder="Ano de Lançamento" name="ano" required> 
                    <input type="text" name="register" value="true" style="display: none"><br>
                    <button type="submit" >Registrar</button>
                </form>
            </div>
            <!-- TELA DE ANUNCIO -->
            <div class="form-container sign-in-container">
                <form action="../../api/registerAnnounce.php" method="post">
                    <h1>Seu Anúncio</h1>
                    <input type="text" placeholder="Titulo" name="titulo" required>
                    <input type="text" placeholder="Valor do Produto" name="valor" required>
                    <select name ="jogo">
                    <option value="jogo1">Jogo 1</option>
                    <option value="jogo2">Jogo 2</option>
                    <option value="jogo3">Jogo 3</option>
                    </select>
                    <input type="text" placeholder="Descricao" name="descricao" required>
                    <input type="text" name="register" value="true" style="display: none"><br>
                    <button type="submit">Anunciar</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Anunciando</h1>
                        <p>Deseja voltar à tela de anúncio?</p>
                        <button class="fantasma" id="signIn">Anunciar</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Não tem o jogo Necessário?</h1>
                        <p>Registre agora o produto que você deseja.</p>
                        <button class="fantasma" id="signUp">Registrar Jogo</button>
                    </div>
                </div>
            </div>
        </div>
</body>
<script src="../js/form.js"></script>
</html>