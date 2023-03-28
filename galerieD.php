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
    <link rel="stylesheet" href="galerieD.css">
    <title>Atelier de soudure - Club Robotique</title>
    <link rel="icon" type="image/x-icon" href="assets/Logo_transparent.png">
</head>

<body>
    <?php include('navbar.html'); ?>

    <main>
        <div class="titrePart">
            <h1 class="titreH">Atelier de soudure</h1>
        </div>

        <div class="carrousel">
            <div class="slider">
                <div class="slide">
                    <div id="slide1" class="blurry-bg"></div>
                    <img src="./assets/Atelier_soudure/tom.jpg" alt="tom qui soude pour la prmeière fois" />
                </div>
                <div class="slide">
                    <div id="slide2" class="blurry-bg"></div>
                    <img src="./assets/Atelier_soudure/elodie.jpg" alt="élodie soude, maewenn et eloïc regarde" />
                </div>
                <div class="slide">
                    <div id="slide3" class="blurry-bg"></div>
                    <img src="./assets/Atelier_soudure/justine.jpg" alt="justine en train de se préparer à souder" />
                </div>
                <div class="slide">
                    <div id="slide4" class="blurry-bg"></div>
                    <img src="./assets/Atelier_soudure/soudure_sumobot.jpg" alt="soudure pour un sumobot" />
                </div>
                <button class="btn btn-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                <button class="btn btn-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                <span class="photos-counter">0/0</span>
            </div>

            <div class="gallery">
                <div class="minia selected">
                    <img src="./assets/Atelier_soudure/tom.jpg" alt="tom qui soude pour la prmeière fois" />
                </div>
                <div class="minia">
                    <img src="./assets/Atelier_soudure/elodie.jpg" alt="élodie soude, maewenn et eloïc regarde" />
                </div>
                <div class="minia">
                    <img src="./assets/Atelier_soudure/justine.jpg" alt="justine en train de se préparer à souder" />
                </div>
                <div class="minia">
                    <img src="./assets/Atelier_soudure/soudure_sumobot.jpg" alt="soudure pour un sumobot" />
                </div>
            </div>
        </div>

        <HR WIDTH="35%">

        <div class="container-video">
            <video controls class="yt">
                <source src="./assets/galerieA/sumobot.mp4" />
            </video>
            <!-- <iframe class="yt" src="https://www.youtube.com/embed/QCqxOzKNFks"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
            </iframe> -->
        </div>

        <HR WIDTH="35%">

        <div class="fullscreen"></div>
    </main>


    <?php include('footer.html'); ?>
</body>

<script src="carrousel.js"></script>
</html>