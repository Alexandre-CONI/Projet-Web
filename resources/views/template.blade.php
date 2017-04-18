<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link href="/../Projet-Web/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/../Projet-Web/public/css/styles-template.css" rel="stylesheet">
    @yield('head')
</head>

<body>
<div class="container-fluid">
    <div id="rouge" class="row">
        <div class="col-md-offset-8 col-md-2 logo">
            <img id="facebook" src="/../Projet-Web/public/img/facebook.png" alt="facebook">
            <img id="twitter" src="/../Projet-Web/public/img/twitter.png" alt="twitter">
            <img id="contact" src="/../Projet-Web/public/img/contact.png" alt="contact">
            <img id="youtube" src="/../Projet-Web/public/img/youtube.png" alt="youtube">
        </div>

    </div>
    <div id="blanc" class="row">
        <div class="col-md-offset-3 col-md-1">
            <img id="logo" src="/../Projet-Web/public/img/logo.png" alt="logo">
        </div>
        <div class="col-md-4">
            <h1 id="titre">BDE EXIA CESI</h1>
            <nav id="menu">
                <a href="/Accueil/">Accueil</a> |
                <a href="/Activités/">Activités</a> |
                <a href="/Boutique/">Boutique</a> |
                <a href="/Galerie/">Galerie</a>
            </nav>
        </div>
        <div class="col-md-1 button">
            <button type="button">Inscription</button>
            <button type="button">connexion</button>
        </div>
        <div class="col-md-1">
            <img id="tete" src="/../Projet-Web/public/img/tete.png" alt="tete">
        </div>
    </div>


    <div id="Contenu" class="row">

            @yield('contenu')

    </div>


    <div id="footblanc" class="row">
        <div class="col-md-offset-3 col-md-6 CESI">
            <img id="CESIEN" src="/../Projet-Web/public/img/CESIEN.png" alt="CESIEN">
            <img id="CESIEI" src="/../Projet-Web/public/img/CESIEI.png" alt="CESIEI">
            <img id="CESIAL" src="/../Projet-Web/public/img/CESIAL.png" alt="CESIAL">
            <img id="CESIENT" src="/../Projet-Web/public/img/CESIENT.png" alt="CESIENT">
            <img id="CESICE" src="/../Projet-Web/public/img/CESICE.png" alt="CESICE">
            <img id="CESIALU" src="/../Projet-Web/public/img/CESIALU.png" alt="CESIALU">
            <nav id="menu">
                <a href="https://exia.cesi.fr/mentions-legales/">Mention légales</a> |
                <a href="https://exia.cesi.fr/plan-site/">Plan du site</a>
            </nav>
        </div>
    </div>
</div>
</body>
</html>