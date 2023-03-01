<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Membres - Club Robotique</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="assets/Logo_transparent.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="membres_club.css">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans&family=Roboto&display=swap" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body class="membreCont">
    <?php include('navbar.html'); ?>
    <main class="flex align-items flex-column">
        <div class="width-80">
            <div class="titreMembre">
                <h1 class="titreH">Membres Club</h1>
            </div>
            <div class="verticale">
                <div class="horizontal first-presentation" id="first">
                    <div class="box">
                        <H3>Equipe</H3>
                        <p class="membreTxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nunc
                        purus, scelerisque et lorem a, vulputate luctus arcu. Nunc massa diam, egestas ut elementum at,
                        posuere non lacus.</p>
                    </div>
                    <div class="ImageMembre">
                        <img class="imgMembre" src="assets/equipe.jpeg" alt="membres">
                    </div>
                </div>

                <div class="horizontal background" id="second">
                    <div class="ImageMembre">
                        <img class="imgMembre" src="assets/directeur.jpeg" alt="membres">
                    </div>
                    <div class="box">
                        <H3>Direction</H3>
                        <p class="membreTxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nunc
                        purus, scelerisque et lorem a, vulputate luctus arcu. Nunc massa diam, egestas ut elementum at,
                        posuere non lacus.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include('footer.html'); ?>
</body>

</html>