<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/detalhado.css">
    <link rel="stylesheet" href="../css/navbar.css">

</head>
<body>
    <?php   
        require '../../api/conection.php';
        if (isset($_POST['jogoid'])) {
            $jogo_id = $_POST['jogoid'];
            $result = mysqli_query($conn, "SELECT * FROM Jogos WHERE 'id' = '$jogo_id'");
            foreach ($result as $row) {
                $nome = $row['nome'];
            }
        }
    ?>
    <!-- dynamic navbar -->
    <nav class="nav-app"></nav>
    <div class="container">
        <div class="product-container main-product-container">
            <div class="product-left-container">
                <img src="http://www.lyostore.net/sites/default/files/galeria/x-mini_rave_capsule_speaker_charging_port__tuner.jpg"
                    alt="" width="540" />
                image
            </div>
            <div class="product-col-container">
                <p class="product-info-meta">Seção de Detalhes</p>
                <h1 class="product-page"><?php $nome ?>aaa</h1>
                <p><br />
                    Minihögtalare med mycket bra ljud för PC/smart phone och inbyggd radio. Perfekt att ha med på
                    semestern, i parken eller på uteplatsen en varm sommarkväll.
                </p>
                
            </div>
        </div>
        <br clear="all" />
        <div class="product-container">
            <div class="product-left-container">
                <h2 class="product-page">Detaljer</h2>
                <p class="product-body">
                    Mini høyttaler med meget godt lyd for PC/mobil/smart med innbygd FM-radio. Perfekt at ha med på
                    hytten, tur, i teltet, parken eller bare på uteplassen. Høyttaleren kan brukes sammen med alle
                    enheter som har mini-jack utgang (3,5 mm) så som Smartphone, PC, Nettbrett, etc. X-mini Rave har et
                    innebygd oppladbart batteri med en kapasitet på opptil 6 timer når batteriet et fulladet.
                    Høyttaleren lades med den medfølgende USB-kabelen. ?BuddyJack? for sammenkobling av flere
                    høyttalere. X-Mini har tidligere vunnet de prestisjefylte prisene Red Dot Design
                </p>
            </div>
            <div class="product-col-container">
                Col
            </div>
        </div>
        <br clear="all" />
    </div>
    
    <script src="../js/navbar.js"></script>
</body>
</html>