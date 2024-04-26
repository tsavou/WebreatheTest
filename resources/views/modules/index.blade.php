<div>
    <h1>Liste des modules</h1>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Détails</th>
                <th>Date d'installation</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($modules as $module)
                <tr>
                    <td>
                        <a href="{{ route('modules.show', $module->id) }}">
                            {{ $module->name }}
                        </a>
                        
                    </td>
                    <td>{{ $module->details }}</td>
                    <td>{{ $module->installation_date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
