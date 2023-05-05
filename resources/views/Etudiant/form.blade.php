@extends('master.base')
@section('contenu')

    <h1 class="mt-2 d-flex justify-content-center">Ajouter un etudiant</h1>
 <div class="form-group m-4">
    <form action="/etudiants" method="post">
        @csrf
        <label class="p-2"  for="nom">Nom :</label>
        <input class="form-control m-4" type="text" name="nom">
        <label class="p-2"  for="prenom">Prenom :</label>
        <input class="form-control m-4" type="text" name="prenom">
        <label class="p-2"  for="note">Note :</label>
        <input class="form-control m-4" type="text" name="note">
      <div class="d-flex justify-content-center p-4 "> 
          <input  class="m-2 p-4 rounded-pill " type="submit" value="Ajouter">
        <input  class="m-2 p-4 rounded-pill" type="reset" value="Annuler">
      </div>
    </form>
     </div>
    @endsection
      