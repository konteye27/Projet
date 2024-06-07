

<h1>Ajouter un nouveau bloc</h1>

<form action="{{ route('blocs.store') }}" method="POST">
    @csrf

    <div>
        <label for="nom">Nom du bloc :</label>
        <input type="text" id="nom" name="nom" required>
    </div>

    <div>
        <label for="site">Site :</label>
        <input type="text" id="site" name="site" required>
    </div>

    <button type="submit">Ajouter</button>
</form>
