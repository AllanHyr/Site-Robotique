<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans&family=Raleway&family=Work+Sans&display=swap">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="galerieA.css">
    <title>Galerie Jeu d'arcade - Club Robotique</title>
    <link rel="icon" type="image/x-icon" href="assets/Logo_transparent.png">
</head>

<body>
    <?php include('navbar.html'); ?>

    <main>
        <!-- div pour le titre de la galerie -->
        <div class="titrePart">
            <h1 class="titreH">Galerie Jeu d'arcade</h1>
        </div>
        <!-- div pour le carrousel a image -->
        <div class="carrousel">
            <!-- div avec les grandes images    -->
            <div class="slider">
                <!-- div image -->
                <div class="slide">
                    <div id="slide1" class="blurry-bg"></div>
                    <img src="./assets/jeuArcade/projet.jpg" alt="Travail heureux">
                </div>
                <!-- div image -->
                <div class="slide">
                    <div id="slide2" class="blurry-bg"></div>
                    <img src="./assets/jeuArcade/reflexion.jpg" alt="Une équipe qui refléchit">
                </div>
                <!-- div image -->
                <div class="slide">
                    <div id="slide3" class="blurry-bg"></div>
                    <img src="./assets/jeuArcade/imageGroupe.jpg" alt="Travail de groupe">
                </div>
                <!-- div image -->
                <div class="slide">
                    <div id="slide4" class="blurry-bg"></div>
                    <img src="./assets/jeuArcade/reflexion.jpg" alt="Une équipe qui refléchit">
                </div>
                    <!-- boutton pour slide -->
                <button class="btn btn-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                <button class="btn btn-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                <span class="photos-counter">0/0</span>
            </div>
            <!-- div avec les images en dessous du carrousel -->
            <div class="gallery">
                <div class="minia selected">
                    <img src="./assets/jeuArcade/arcade.jpg" alt="Equipe heureuse">
                </div>
                <div class="minia">
                    <img src="./assets/jeuArcade/imageGroupe.jpg" alt="Travail de groupe">
                </div>
                <div class="minia">
                    <img src="./assets/jeuArcade/reflexion.jpg" alt="Une équipe qui refléchit">
                </div>
                <div class="minia">
                    <img src="./assets/jeuArcade/projet.jpg" alt="Travail heureux">
                </div>
            </div>
        </div>

        <!-- <HR WIDTH="35%"> -->

        <div class="container-video">
            <!-- <video controls class="yt">
                <source src="./assets/galerieA/sumobot.mp4" />
            </video> -->
            <!-- <iframe class="yt" src="https://www.youtube.com/embed/QCqxOzKNFks"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
            </iframe> -->
        </div>

        <HR WIDTH="35%">
         <!-- div avec la vidéo -->
        <div class="fullscreen"></div>
    </main>


    <?php include('footer.html'); ?>
</body>

<script src="carrousel.js"></script>
</html>