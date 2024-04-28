@extends('layout')


@section('content')

<div>
    <h1>Liste des modules</h1>

    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Détails</th>
                <th>Date d'installation</th>
                <th>Statut</th>
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
                    <td>{{ date('d/m/Y', strtotime($module->installation_date)) }}</td>
                    <td>
                        @if ($module->status)
                            <span class="badge bg-success">Actif</span>
                        @else
                            <span class="badge bg-danger">Inactif</span>
                        @endif

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
