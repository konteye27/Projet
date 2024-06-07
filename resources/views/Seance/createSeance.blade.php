

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une nouvelle séance</title>
</head>
<body>
    <h1>Ajouter une nouvelle séance</h1>

    <form action="{{ route('seances.store') }}" method="POST">
        @csrf

        <div>
            <label for="date">Date :</label>
            <input type="date" id="date" name="date" required>
        </div>

        <div>
            <label for="jour">Jour :</label>
            <input type="text" id="jour" name="jour" required>
        </div>

        <div>
            <label for="heure_debut">Heure de début :</label>
            <input type="time" id="heure_debut" name="heure_debut" required>
        </div>

        <div>
            <label for="heure_fin">Heure de fin :</label>
            <input type="time" id="heure_fin" name="heure_fin" required>
        </div>

        <div>
            <label for="salle_id">Salle de classe :</label>
            <select id="salle_id" name="salle_id" required>
                @foreach($salles as $salle)
                    <option value="{{ $salle->id }}">{{ $salle->nom }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
