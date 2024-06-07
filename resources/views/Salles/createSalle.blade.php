

<h1>Ajouter une nouvelle salle de classe</h1>

<form action="{{ route('salles.store') }}" method="POST">
    @csrf

    <div>
        <label for="nom">Nom salle :</label>
        <input type="text" id="nom" name="nom" required>
    </div>

    <div>
        <label for="capacite">Capacité :</label>
        <input type="number" id="capacite" name="capacite" required>
    </div>

    <div>
        <label for="Mutualisation">Mutualisation :</label>
        <input type="text" id="Mutualisation" name="Mutualisation" required>
    </div>
    <div>
        <label for="Emplacement">Emplacement :</label>
        <input type="text" id="Emplacement" name="Emplacement" required>
    </div>

    <button type="submit">Ajouter</button>
</form>
