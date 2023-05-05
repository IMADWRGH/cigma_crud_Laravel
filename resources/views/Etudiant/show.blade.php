@extends('master.base')
@section('contenu')
    <center>
        <h1>INFORMATIONS ÉTUDIANT</h1>
        <ul style="list-style: none">
            <li>Id : {{$etudiant->id}}</li>
            <li>Nom : {{$etudiant->nom}}</li>
            <li>Prenom : {{$etudiant->prenom}}</li>
            <li>Note : {{$etudiant->note}}</li>
        </ul>
        <h3><a href="/etudiants">Retour de la liste</a></h3>
    </center>
@endsection