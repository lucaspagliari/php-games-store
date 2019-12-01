<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/profile.css">
</head>
<body>
    <nav id="nav-app"></nav>
    <div class="user-profile">
        <div class="profile-card">
            <h1 class="profile-card__title">Bart Veneman</h1>
            <p class="profile-card__subtitle">bartveneman</p><img class="profile-card__avatar"
                src="https://gravatar.com/avatar/56d18ba2b0bf189436499b0f215b5e29?s=100" alt="Avatar for Bart Veneman">
        </div>
    </div>
    <div class="profile-projects">
            <h2>Seus Anúncios </h2>
            <ol class="cards">
                <li><a class="card" href="">
                    <h4 class="card__title">Very long ttitle that wraps on new lines</h4>
                    <p class="card__meta">Updated
                        <time>4 hours ago</time>
                    </p>
                </a></li>
            </ol>
        </div>
    
    <?php
        session_start();

        $nome = $_SESSION['nome'];
        $email = $_SESSION['email'];
        
        $text = "
        ss
        ";

        echo $text;

    ?>
    

    <script src="../js/navbar.js"></script>
</body>
</html>