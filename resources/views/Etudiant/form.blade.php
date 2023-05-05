<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cigma</title>
</head>
<body><center>
    <h1>Ajouter un etudiant</h1>
    <form action="/etudiants" method="post">
        @csrf
        <label for="nom">Nom :</label>
        <input type="text" name="nom"><br><br>
        <label for="prenom">Prenom :</label>
        <input type="text" name="prenom"><br><br>
        <label for="note">Note :</label>
        <input type="text" name="note"><br><br>
        <input type="submit" value="Ajouter">
        <input type="reset" value="Annuler">
    </form>
    </center>
</body>
</html>