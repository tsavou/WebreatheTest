@extends('layout')


@section('content')
    <a href="{{ route('modules.index') }}" class="btn btn-dark">
        Retour </a>



    <div class="container bg-body-tertiary rounded">

        <div class="text-center mb-5">
            <h1 class="fw-bold text-uppercase ">{{ $module->name }}</h1>
            <p>installé le : {{ date('d/m/Y', strtotime($module->installation_date)) }}</p>
            <p>{{ $module->details }}</p>
        </div>

        <div class="d-flex justify-content-center align-items-center gap-5 my-5 ">
            <div class="card bg-body-tertiary text-white" data-bs-theme="dark">
                <div class="card-body text-center">

                    <p>
                        <span
                            class="badge {{ $module->status ? 'bg-success' : 'bg-danger' }}">{{ $module->status ? 'Actif' : 'Inactif' }}
                        </span>
                        depuis :
                    </p>
                    <h3>
                        {{ $duration->format('%H h %i min %s s') }}
                    </h3>
                </div>
            </div>

            <div class="card bg-body-tertiary text-white" data-bs-theme="dark">
                <div class="card-body text-center">

                    <p>Nombre de données envoyées :</p>
                    <h3>
                        {{ $nbMesures }}
                    </h3>
                </div>
            </div>

            <div class="text-center mt-3">
                <button class="btn btn-dark" onclick="refreshPage()">Actualiser</button>
            </div>

        </div>

        <div class="w-75 mx-auto my-5">

            <canvas id="myChart" aria-label="chart" role="img">
            </canvas>

        </div>



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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>

    <script>
        function refreshPage() {
            location.reload();
        }

        const labels = [];
        const data = [];


        @foreach ($mesures as $mesure)
            labels.push('{{ date('H:i:s', strtotime($mesure->date_mesure)) }}');
            data.push({{ $mesure->valeur_mesuree }});
        @endforeach




        const canvas = document.getElementById('myChart');



        const myChart = new Chart(canvas, {
            type: 'line',
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
            data: {
                labels: labels,
                datasets: [{
                    label: '{{ $module->type_mesure }}',
                    data: data,
                    borderWidth: 2,
                    borderColor: 'rgb(75, 192, 192)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    tension: 0.4

                }]
            }
        })
    </script>
@endSection
