@extends('layouts.app')

@section('content')
<h2 class="text-3xl font-bold mb-6">Projekte</h2>

<div class="grid md:grid-cols-2 gap-6">
    <div class="p-6 rounded-xl shadow glass">
        <h3 class="font-semibold text-xl">Design-Service (Bachelorarbeit)</h3>
        <p class="text-gray-600 dark:text-gray-400 mt-2">
            Entwicklung eines Microservices (Quarkus-Backend + Angular-Frontend) für zentrales Design-Management.
        </p>
    </div>
    <div class="p-6 rounded-xl shadow glass">
        <h3 class="font-semibold text-xl">YourCardCollection</h3>
        <p class="text-gray-600 dark:text-gray-400 mt-2">
            Laravel-App zur Verwaltung einer Pokémon-Sammlung mit API-Anbindung & Preisabfrage.
        </p>
    </div>
    <div class="p-6 rounded-xl shadow glass">
        <h3 class="font-semibold text-xl">Portfolio-Website</h3>
        <p class="text-gray-600 dark:text-gray-400 mt-2">
            Minimalistisches Laravel + Tailwind-Portfolio, inspiriert von Sharon Yi.
        </p>
    </div>
</div>
@endsection
