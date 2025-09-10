@extends('layouts.app')
@section('title','Nick Nagorny – Full-Stack Portfolio')

@section('content')
{{-- HERO --}}
<section class="grid lg:grid-cols-12 gap-10 items-center">
  <div class="lg:col-span-7">
    <p class="text-xs uppercase tracking-[0.25em] text-zinc-500 dark:text-zinc-400">Full-Stack Developer</p>
    <h1 class="mt-3 text-4xl md:text-6xl font-extrabold leading-[1.05] gr-text">
      Ich baue schnelle, elegante Web-Apps mit Laravel, Angular & Quarkus.
    </h1>
    <p class="mt-6 text-lg text-zinc-600 dark:text-zinc-400 max-w-prose">
      Fokus auf DX/UX, Performance, Clean Architecture & CI/CD – bereit für Impact.
    </p>
    <div class="mt-8 flex flex-wrap gap-3">
      <a href="{{ route('projects') }}" class="btn-primary shine">Projekte ansehen</a>
      <a href="{{ route('resume') }}" class="btn-outline">Lebenslauf</a>
    </div>
    <div class="mt-8 flex flex-wrap gap-2">
      <span class="chip">Laravel</span><span class="chip">Angular</span><span class="chip">Quarkus</span>
      <span class="chip">Tailwind v4</span><span class="chip">CI/CD</span>
    </div>
  </div>

  <div class="lg:col-span-5">
    <div class="relative tilt">
      <div class="tilt-up card ring-gradient aspect-[4/3] flex items-center justify-center">
        {{-- Platz für Bild/Mockup --}}
        <svg viewBox="0 0 200 140" class="w-4/5 opacity-70">
          <defs>
            <linearGradient id="g" x1="0" y1="0" x2="1" y2="1">
              <stop offset="0" stop-color="#22d3ee"/><stop offset="1" stop-color="#a855f7"/>
            </linearGradient>
          </defs>
          <rect width="200" height="140" rx="16" fill="url(#g)"/>
          <rect x="14" y="14" width="172" height="24" rx="6" fill="white" opacity=".85"/>
          <rect x="14" y="50" width="110" height="10" rx="5" fill="white" opacity=".65"/>
          <rect x="14" y="66" width="150" height="10" rx="5" fill="white" opacity=".5"/>
          <rect x="14" y="100" width="80" height="12" rx="6" fill="white" opacity=".75"/>
        </svg>
      </div>
    </div>
  </div>
</section>

{{-- PROJECTS PREVIEW --}}
<section class="mt-16 md:mt-24">
  <div class="flex items-end justify-between">
    <h2 class="text-2xl md:text-3xl font-bold">Ausgewählte Projekte</h2>
    <a href="{{ route('projects') }}" class="text-sky-600 dark:text-sky-400 underline">Alle ansehen →</a>
  </div>

  <div class="mt-8 grid md:grid-cols-2 xl:grid-cols-3 gap-6">
    @foreach([
      ['name'=>'Design-Service (B.Sc.)','desc'=>'Quarkus + Angular: Design-Token Microservice, CI via Actions.','tags'=>['Quarkus','Angular','REST','CI/CD']],
      ['name'=>'YourCardCollection','desc'=>'Laravel-App für Pokémon-Cards: Auth, CRUD, Suche, TCG-API ready.','tags'=>['Laravel','Blade','MySQL','Tailwind']],
      ['name'=>'Dieses Portfolio','desc'=>'Laravel 12 + Tailwind v4, Glass UI, Gradient-Text, Motion.','tags'=>['Laravel','Tailwind v4','A11y']],
    ] as $p)
      <article class="card ring-gradient shine">
        <h3 class="text-lg font-semibold">{{ $p['name'] }}</h3>
        <p class="mt-2 text-sm text-zinc-600 dark:text-zinc-400">{{ $p['desc'] }}</p>
        <div class="mt-4 flex flex-wrap gap-2 text-xs">
          @foreach($p['tags'] as $t)
            <span class="chip">{{ $t }}</span>
          @endforeach
        </div>
      </article>
    @endforeach
  </div>
</section>

{{-- SKILLS --}}
<section class="mt-16 md:mt-24">
  <h2 class="text-2xl md:text-3xl font-bold">Skills</h2>
  <div class="mt-8 grid md:grid-cols-3 gap-6">
    @foreach([
      ['title'=>'Backend','items'=>['PHP (Laravel)','Java (Quarkus)','REST','SQL']],
      ['title'=>'Frontend','items'=>['TypeScript','Angular','Blade','Tailwind v4']],
      ['title'=>'Ops & Quality','items'=>['Git','Testing','CI/CD','Docker (dev)']],
    ] as $g)
      <div class="card">
        <h3 class="font-medium">{{ $g['title'] }}</h3>
        <div class="mt-3 flex flex-wrap gap-2">
          @foreach($g['items'] as $s)<span class="chip">{{ $s }}</span>@endforeach
        </div>
      </div>
    @endforeach
  </div>
</section>
@endsection
