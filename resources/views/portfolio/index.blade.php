@extends('layouts.app')

@section('content')
<section class="text-center space-y-6">
    <h1 class="text-4xl font-bold">Hallo, ich bin Nick 👋</h1>
    <p class="text-lg text-gray-600 dark:text-gray-400">
        Wirtschaftsinformatiker & Full-Stack Developer – spezialisiert auf Laravel, Angular & Quarkus.
    </p>
    <a href="{{ route('projects') }}" class="px-6 py-3 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700">
        Meine Projekte ansehen
    </a>
</section>
@endsection
