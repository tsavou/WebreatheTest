@extends('layout')


@section('content')
    <div>

        <h1>{{ $module->name }}</h1>

        <p>{{ $module->details }}</p>

        <p>Date d'installation : {{ $module->installation_date }}</p>

        <p>{{ $nbMesures }} données envoyées</p>


            <span class="badge {{ $module->status ? 'bg-success' : 'bg-danger' }}">{{ $module->status ? 'Actif' : 'Inactif' }}</span> depuis {{ $duration->format('%H h %i min %s s') }}


        <table class="table table-striped table-dark">
            <tr>
                <th>Date</th>
                <th>Heure</th>
                <th>{{ $module->type_mesure }}</th>
            </tr>
            @foreach ($mesures as $mesure)
                <tr>
                    <td>{{ date('d/m/Y', strtotime($mesure->date_mesure)) }}</td>
                    <td>{{ date('H:i:s', strtotime($mesure->date_mesure)) }}</td>
                    <td>{{ $mesure->valeur_mesuree }}</td>
                </tr>
            @endforeach
        </table>


    </div>
@endSection
