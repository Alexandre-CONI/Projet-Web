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
            <label name="info"><label>
            {{ Form::open(['url'=>'inscription']) }}
            <ul class="entre MotListe">

                <li>{!! Form::label('Prenom', 'Prénom') !!}
                {!! Form::text('Prenom', '', array('required' => 'required')) !!}</li>

                <li>{!! Form::label('Nom', 'Nom') !!}
                {!! Form::text('Nom', '', array('required' => 'required')) !!}</li>

                <li>{!! Form::label('Pass', 'Mot de passe') !!}
                {!! Form::password('Pass', array('required' => 'required')) !!}</li>

                <li>{!! Form::label('Pass2', 'Confirmation') !!}
                {!! Form::password('Pass2', array('required' => 'required')) !!}</li>
                @if ($errors->has('cpassword'))<p style="color:red;">les mots de passe ne correspondent pas.</p>@endif

                <li>{!! Form::label('Email', 'Email') !!}
                {!! Form::email('Email', '', array('required' => 'required')) !!}</li>

                <li>{!! Form::label('Promotion', 'Promotion') !!}
                {!! Form::radio('Promo', 'ei', true) !!} EI<br>
                {!! Form::radio('Promo', 'exia') !!} EXIA
                {!! Form::select('Studies',['A1'=>'A1','A2'=>'A2','A3'=>'A3','A4'=>'A4','A5'=>'A5'],'A1') !!}</li>

                <li>{!! Form::label('Birthday', 'Date de naissance') !!}
                {!! Form::date('Birthday', '', array('required' => 'required')) !!}</li>

                <li>{!! Form::submit("M'inscire") !!}</li>
            </ul>
            {!! Form::close() !!}
        </div>
    </div>
    <div id="condition" class="row">
        <div class="col-md-offset-5 col-md-4">
           <p id="cond"> En cliquant sur "M'inscrire", vous acceptez nos Conditions et indiquez que vous avez lu notre Politique
            d’utilisation des données.
           </p>
        </div>
    </div>

@stop