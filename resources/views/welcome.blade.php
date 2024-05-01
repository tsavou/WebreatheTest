@extends('layout')

@section('content')

    <h1 class="text-center my-5">Bienvenue sur notre système de monitoring IoT !</h1>

    <p class="text-center my-5">Notre système de monitoring IoT est conçu pour vous permettre de surveiller en temps réel l'état de fonctionnement de vos modules connectés à internet </p>

    <p>Enregistrez facilement de <a href="{{ route('modules.create') }}" class="btn btn-dark">nouveaux modules IoT</a> pour les intégrer à votre système de monitoring.</p>

    <p>Pour voir les modules enregistrés, <a href="{{ route('modules.index') }}" class="btn btn-dark">cliquez ici</a></p>

    <p> Pour chaque module, visualisez instantanément l'état de fonctionnement de vos modules, y compris les valeurs mesurées en temps réel, la durée de fonctionnement et le nombre de données envoyées. Analysez l'historique des données de vos modules à l'aide de graphiques interactifs pour détecter les tendances et les variations.</p>

@endsection
