<!DOCTYPE html>
@extends('master.base')
@section('contenu')
<center>
    <h1>Information Étudiant</h1>
    <form action="/etudiants/{{$etudiant->id}}" method="post">
        @csrf
        @method('PUT')
        <label for="nom">Nom :</label>
        <input type="text" name="nom" value="{{$etudiant->nom}}"><br><br>
        <label for="prenom">Prenom :</label>
        <input type="text" name="prenom" value="{{$etudiant->prenom}}"><br><br>
        <label for="note">Note :</label>
        <input type="text" name="note" value="{{$etudiant->note}}"><br><br>
        <input type="submit" value="Modifier">
        <input type="reset" value="Annuler">
    </form>
    </center>
    @endsection

