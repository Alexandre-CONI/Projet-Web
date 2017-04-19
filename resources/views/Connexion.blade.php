@extends('template')

@section('head')
    <link href="/../Projet-Web/public/css/styles-Connexion.css" rel="stylesheet">
    <title>Connexion</title>
@stop

@section('contenu')
    <div id="H2" class="row">
        <div class="col-md-offset-5 col-md-2 Inscrire">
            <h2 id="TitreConnexion">Connexion</h2>
        </div>
    </div>

        <div id="Formulaire" class="row">
            <div class="col-md-offset-4 col-md-2">
                <ul class="MotListe">
                    <li>Mail</li>
                    <li>Mot de passe</li>
                </ul>
            </div>

            <div class="col-md-2">
                <ul class="entre">
                    <li><input type="text" name="Prénom"></li>
                    <li><input type="text" name="Nom"></li>
                </ul>
            </div>
        </div>
        <div id="Inscrire" class="row">
            <div class="col-md-offset-5 col-md-2">
                <button id="insription">S'inscrire</button>
            </div>
        </div>
    <div id="Connecter" class="row">
        <div class="col-md-offset-5 col-md-2">
            <button id="Connexion" >Se Connecter</button>
        </div>
    </div>
@stop
