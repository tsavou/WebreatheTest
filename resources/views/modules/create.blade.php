@extends('layout')


@section('content')
    <h1 class="text-center my-5">Ajouter un module</h1>
    <div class="container my-5 p-5 bg-body-tertiary rounded text-white" data-bs-theme="dark">


        <form action="{{ route('modules.store') }}" method="POST" class="row g-3 px-5">
            @csrf

            <div class="col-md-4">
                <label for="name" class="form-label">Nom du module</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Entrez le nom du module"
                    required>
            </div>

            <div class="col-md-4">
                <label for="type_mesure" class="form-label">Nom du module</label>
                <input type="text" class="form-control" name="type_mesure" id="type_mesure" placeholder="Que mesurez-vous ?"
                    required>
            </div>

            <div class="col-md-4">
                <label for="installation_date" class="form-label">Date d'installation :</label>
                <input type="date" class="form-control" name="installation_date" id="installation_date" required>
            </div>

            <div class="col-12">
                <label for="details" class="form-label">Détails :</label>
                <textarea class="form-control" name="details" id="details" rows="4" placeholder="Décrivez le module"></textarea>
            </div>

            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Ajouter</button>
            </div>
        </form>
    </div>
@endSection
