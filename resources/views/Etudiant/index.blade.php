@extends('master.base')
@section('contenu')
    <center>
    <h1>La liste des etudiants</h1>
    <div class="form-group m-2 p-4">
      <label for="search">Search :</label>
      <input type="search"  id="search" class="col-3" placeholder="Search..">
    </div>
    <table width='100%' class="table">
        <tr >
            <th>ID</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Note</th>
            <th colspan="3">Option</th>
           
        </tr>
      @foreach ($etudiants as $data)
          <tr>
          <th>{{$data->id}}</th>
          <th>{{$data->nom}}</th>
          <th>{{$data->prenom}}</th>
          <th>{{$data->note}}</th>
           <th><a href="/etudiants/{{$data->id}}/edit">Edit</a></th>
            <th><a href="/etudiants/{{$data->id}}">Show</a></th>
            <th>
                <form action="/etudiants/{{$data->id}}" method="post">
                    @csrf
                    @method('DELETE')
                <input type="submit" value="Delete"></form>
            </th>
        </tr>
      @endforeach
    </table>
<h3>    <a href="etudiants/create">Ajouter</a>
</h3>
</center>
   <script>
$(document).ready(function(){

 fetch_etudiant_data();

 function fetch_etudiant_data(query='')
 {
    $.ajax({
   url:"{{route('search.doctor')}}",
   method:"GET",
   data:{'query':query},
   dataType:'json',
   success:function(data)})
 }
  $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_etudiant_data(query);
 });
 


 });
</script>
@endsection