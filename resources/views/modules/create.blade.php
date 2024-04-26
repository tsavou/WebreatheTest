<div>
    <h1>Ajouter un module</h1>

    <form action="{{ route('modules.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">Nom du module</label>
            <input type="text" name="name" id="name">
        </div>

        <div>
            <label for="installation_date">Date d'installation :</label>
            <input type="date" name="installation_date" id="installation_date">
        </div>
        <div>
            <label for="details">Détails :</label>
            <textarea name="details" id="details" rows="4"></textarea>
        </div>
        <button type="submit">Enregistrer</button>
    </form>


</div>
