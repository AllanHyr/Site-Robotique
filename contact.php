<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Public+Sans&family=Raleway&family=Work+Sans&display=swap">
    <title>Document</title>
</head>

<?php include('navbar.html'); ?>

<body>

    <div class="horizontal" id="all">
        <div class="verticale map" id="carte">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2646.6872868503433!2d-4.4146477844832175!3d48.44334127924898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4816b079f2289ea7%3A0xf5b14f10982347f4!2s230%20Rue%20Rolland%20Garros%2C%2029490%20Guipavas!5e0!3m2!1sfr!2sfr!4v1675671912604!5m2!1sfr!2sfr"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="verticale boites" id="formulaire">

            <p class="txt" id="txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tincidunt ipsum ac
                volutpat ornare. Morbi vel hendrerit justo. Sed efficitur faucibus pharetra. Nunc dictum ligula lectus,
                eu placerat eros tincidunt suscipit.</p>


            <div class="verticale donnees">
                <form action="" method="get" class="all form-example">

                    <div class="horizontal form-example">
                        <input class="nom" placeholder="Nom" type="text" name="lastname" id="lastname" required>
                        <input class="prenom" placeholder="Prénom" type="texte" name="name" id="name" required>
                    </div>

                    <div class="horizontal form-example-mail">
                        <input class="mail" placeholder="Mail" type="email" name="email" id="email" required>
                    </div>

                    <div class="texte">
                        <label for="message"></label>
                        <textarea class="texte" placeholder="Ecris ton message" id="message" name="message" rows="5"
                            cols="70"></textarea>
                    </div>

                    <div class="form-example envoyer">
                        <input type="submit" value="envoyer">
                    </div>
                </form>
            </div>

        </div>
    </div>


    <div class="horizontal contact" id="all">
        <div class="email-bloc">
            <i class="fa fa-envelope" aria-hidden="true" id="envelope-icone"></i>
            <h3 class="boite" id="envelope">Lorem ipsum dolor sit amet, consectetur a</h3>
        </div>
        <div class="adresse-bloc">
            <i class="fa fa-map-marker" aria-hidden="true" id="point-map"></i>
            <h3 class="boite" id="adresse">Lorem ipsum dolor sit amet, consectetur</h3>
        </div>
        <div class="telephone-bloc">
            <i class="fa fa-phone" aria-hidden="true" id="telephone"></i>
            <h3 class="boite" id="tel">02 25 26 36 15</h3>
        </div>
    </div>
</body>
<?php include('footer.html'); ?>
</body>

</html>