<!-- resources/views/salles/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Salles de Classe</title>
</head>
<body>
    <h1>Liste des Salles de Classe</h1>

    <ul>
        <h4> nous utilisons une boucle foreach pour parcourir chaque salle de classe récupérée</h4>
        @foreach($salles as $salle)
            <li>{{ $salle->nom }} - Capacité: {{ $salle->capacite }} - >Mutualisation: {{ $salle->Bloc }} - Emplacement: {{ $salle->site }}</li>
        @endforeach
    </ul>
</body>
</html>
