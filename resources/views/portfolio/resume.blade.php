@extends('layouts.app')
@section('title', 'Lebenslauf – Nick Nagorny')

@section('content')
<h1 class="text-3xl font-bold mb-6">Lebenslauf</h1>
<div class="rounded-2xl border border-zinc-200/60 dark:border-zinc-800/60 overflow-hidden">
  <iframe src="{{ asset('storage/resume.pdf') }}" class="w-full h-[80vh]" title="Lebenslauf"></iframe>
</div>
@endsection
