@extends('layouts.app')
@section('title', 'Projekte – Nick Nagorny')

@section('content')
<h1 class="text-3xl font-bold mb-6">Projekte</h1>

@php
$projects = [
  [
    'name'=>'Design-Service (B.Sc.)',
    'detail'=>'Microservice für Design-Tokens: Quarkus, REST, Auth, Angular-Frontend, GitHub Actions (CI).',
    'tech'=>['Quarkus','Angular','REST','CI/CD'],
    'links'=>['Code'=>'#','Demo'=>'#']
  ],
  [
    'name'=>'YourCardCollection',
    'detail'=>'Laravel-App: Auth/CRUD, Suche, vorbereitet für TCG-API, sauberes UI.',
    'tech'=>['Laravel','Blade','MySQL','Tailwind'],
    'links'=>['Code'=>'https://github.com/Gorick1337','Demo'=>'#']
  ],
  [
    'name'=>'Portfolio',
    'detail'=>'Dieses Portfolio: Laravel 12 + Tailwind v4, dark mode, starke Performance.',
    'tech'=>['Laravel','Tailwind v4','Vite/CLI'],
    'links'=>['Code'=>'#','Demo'=>'#']
  ],
];
@endphp

<div class="grid md:grid-cols-2 gap-6">
  @foreach($projects as $p)
    <article class="rounded-2xl border border-zinc-200/60 dark:border-zinc-800/60 p-6 bg-white/70 dark:bg-zinc-950/70 backdrop-blur">
      <div class="flex items-start justify-between gap-4">
        <h2 class="text-xl font-semibold">{{ $p['name'] }}</h2>
        <div class="text-sm flex gap-3">
          @foreach($p['links'] as $label => $href)
            <a href="{{ $href }}" target="_blank" class="underline">{{ $label }}</a>
          @endforeach
        </div>
      </div>
      <p class="mt-2 text-zinc-600 dark:text-zinc-400">{{ $p['detail'] }}</p>
      <div class="mt-4 flex flex-wrap gap-2 text-xs">
        @foreach($p['tech'] as $t)
          <span class="px-2 py-1 rounded-full border border-zinc-300/70 dark:border-zinc-700/70">{{ $t }}</span>
        @endforeach
      </div>
    </article>
  @endforeach
</div>
@endsection
