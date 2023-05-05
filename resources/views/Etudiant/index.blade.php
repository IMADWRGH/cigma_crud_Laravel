@extends('master.base')
@section('contenu')
    <center>
    <h1>La liste des etudiants</h1>
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
   
@endsection