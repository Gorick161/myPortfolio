@extends('layouts.app')
@section('title', 'Erfahrung – Nick Nagorny')

@section('content')
<h1 class="text-3xl font-bold mb-6">Berufserfahrung</h1>

@php
$items = [
  ['company'=>'active logistics GmbH','role'=>'Werkstudent Softwareentwicklung','period'=>'12/2023 – 11/2024','bullets'=>[
    'Mitarbeit an Webanwendungen (Laravel/Angular).',
    'Code Reviews, Testing, Clean Code.'
  ]],
  ['company'=>'active logistics GmbH','role'=>'Praktikant Softwareentwicklung','period'=>'09/2023 – 12/2023','bullets'=>[
    'Onboarding in moderne Web-Stacks & Prozesse.'
  ]],
];
@endphp

<div class="grid gap-6">
  @foreach($items as $it)
    <article class="rounded-2xl border border-zinc-200/60 dark:border-zinc-800/60 p-6">
      <div class="flex items-baseline justify-between gap-4">
        <h2 class="text-xl font-semibold">{{ $it['company'] }}</h2>
        <span class="text-sm text-zinc-600 dark:text-zinc-400">{{ $it['period'] }}</span>
      </div>
      <p class="mt-1 text-zinc-700 dark:text-zinc-300">{{ $it['role'] }}</p>
      <ul class="mt-3 list-disc list-inside text-sm text-zinc-600 dark:text-zinc-400">
        @foreach($it['bullets'] as $b)
          <li>{{ $b }}</li>
        @endforeach
      </ul>
    </article>
  @endforeach
</div>
@endsection
