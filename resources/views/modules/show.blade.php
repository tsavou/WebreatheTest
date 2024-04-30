@extends('layout')


@section('content')

<div>

    <h1>{{ $module->name }}</h1>

    <p>{{ $module->details }}</p>

    <p>Date d'installation : {{ $module->installation_date }}</p>

    <p>{{ $nbMesures }} données envoyées</p>

    <p>{{$mesures}}</p>


        @foreach ($mesures as $mesure)

        <table>
            <tr>
                <th>Date</th>
                <th>Valeur</th>
            </tr>

            <tr>
                <td>{{ $mesure->date_mesure }}</td>
                <td>{{ $mesure->valeur_mesuree }}</td>
            </tr>

        </table>
        @endforeach

</div>


@endSection
