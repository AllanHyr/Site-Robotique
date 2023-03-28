<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf8">
    <title>Galerie - Club Robotique</title>
    <link rel="icon" type="image/x-icon" href="assets/Logo_transparent.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="galeries.css">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,400;0,600;1,400&family=Roboto&family=Work+Sans&display=swap"
        rel="stylesheet">
</head>

<body class="galCont">
    <?php include('navbar.html'); ?>
    <main>
        <div class="titreGal">
            <h1 class="titreH">Galeries</h1>
        </div>
        <div class="bigBlockGal">
            <div class="blockGal">
                <div class="imageGal"><img class="imgGal" src="assets/mainRobot.avif" alt="test image"></div>
                <div class="miniBlockGal">
                    <a href="galerieA.php" class="boutonGal">Galerie</a>
                    <p class="projT">Projet Claptrap</p>
                    <a class="boutonGal" href="projetA.php">Projet</a>
                </div>
            </div>
            <div class="blockGal">
                <div class="imageGal"><img class="imgGal" src="assets/peurRobot.webp" alt="test image"></div>
                <div class="miniBlockGal">
                    <a href="#" class="boutonGal">Galerie</a>
                    <p class="projT">Projet B</p>
                    <a class="boutonGal" href="#">Projet</a>
                </div>
            </div>
        </div>
        <HR class="barreGal" WIDTH="35%">
        <div class="bigBlockGal">
            <div class="blockGal">
                <div class="imageGal"><img class="imgGal" src="assets/reflexionRobot.jpg" alt="test image"></div>
                <div class="miniBlockGal">
                    <a href="#" class="boutonGal">Galerie</a>
                    <p class="projT">Projet C</p>
                    <a class="boutonGal" href="#">Projet</a>
                </div>
            </div>
        </div>
    </main>
    <?php include('footer.html'); ?>
</body>