@extends('template')

@section('head')
    <link href="/../Projet-Web/public/css/styles-Inscription.css" rel="stylesheet">
    <title>Inscription</title>
@stop

@section('contenu')
    <div id="H2" class="row">
        <div class="col-md-offset-5 col-md-2 Inscrire">
            <h2 id="Inscrire">S'inscrire</h2>
        </div>

    </div>
    <div id="Formulaire" class="row">

        <div class="col-md-offset-3 col-md-2">
            <img id="img" src="/../Projet-Web/public/img/img.png" alt="img">
            <button id="ajoute">Ajouter un avatar</button>
        </div>

        <div class="col-md-2">
            <ul class="MotListe">
                <li>Prénom</li>
                <li>Nom de famille</li>
                <li>Numéro de mobile</li>
                <li>Mot de passe</li>
                <li>Confirmation</li>
                <li>Email</li>
                <li>Promotion</li>
                <li>Date de Naissance</li>
            </ul>
        </div>

        <div class="col-md-2">
            <ul class="entre">
                <li><input type="text" name="Prénom"></li>
                <li><input type="text" name="Nom"></li>
                <li><input type="text" name="Tel"></li>
                <li><input type="text" name="MDP"></li>
                <li><input type="text" name="Conf"></li>
                <li><input type="text" name="Email"></li>
                <li>
                    <input type="radio" name="Promo" value="EI"> EI
                    <input type="radio" name="Promo" value="EXIA"> EXIA
                    <select class="liste">
                        <option value="A1">A1</option>
                        <option value="A2">A2</option>
                        <option value="A3">A3</option>
                        <option value="A4">A4</option>
                        <option value="A5">A5</option>
                    </select>
                </li>
                <li><input id="date" type="date" name="bday"></li>
            </ul>
        </div>

    </div>
    <div id="condition" class="row">
        <div class="col-md-offset-5 col-md-4">
           <p id="cond"> En cliquant sur Inscription, vous acceptez nos Conditions et indiquez que vous avez lu notre Politique
            d’utilisation des données.
           </p>
        </div>
    </div>

    <div id="Accepter" class="row">
        <div class="col-md-offset-5 col-md-2">
        <button id="insription">S'inscrire</button>
        </div>
    </div>
@stop
