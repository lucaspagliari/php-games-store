<!-- here we put a creation form for a game -->
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
            <div class="form-container game-form-container">
                <form action="../../api/registerGame.php" method="post">
                    <h1>Meu Anuncio</h1>
                    <input type="text" placeholder="Nome do Jogo" name="nome" required>
                    <input type="text" placeholder="Produtor (a)" name="producer" required>
                    <input type="text" name="register" value="true" style="display: none"> 
                    <button type="submit" >Cadastre-se</button>
                </form>
            </div>
            </div>
        </div>
</body>
<script src="../js/form.js"></script>
</html>

   <!--Minha copia é digital 
                    <input type="checkbox" placeholder ="Digital" name="digital" value = '1'>-->
                    