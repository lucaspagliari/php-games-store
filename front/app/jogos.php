<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/jogos-style.css">
</head>

<body>
    <div class="main">
        <h1 class="main-title">Game List</h1>

        <ul class="cards">
        <?php
            
            require "../../api/conection.php";

            $result = mysqli_query($conn, "SELECT * FROM Jogos ORDER BY id DESC");
            foreach ($result as $row) {
                $id = $row["id"];
                $nome = $row["nome"];
                $produtora = $row["produtora"];
                $ano = $row["ano"];

                $text = "
                <li class='cards_item'>
                    <div class='card'>
                        <div class='card_image'>
                            <img src='../img/$id.png'>
                        </div>
                        <div class='card_content'>
                            <h2 class='card_title'>$nome</h2>
                            <p class='card_text'>lançado em $ano por $produtora</p>
                            <button class='btn card_btn'>Comprar</button>
                        </div>
                    </div>
                </li>";

                echo $text;

           }
        ?>
        
        
            
        </ul>
    </div>

</body>

</html>