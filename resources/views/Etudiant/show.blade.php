<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cigma</title>
</head>
<body>
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
</body>
</html>