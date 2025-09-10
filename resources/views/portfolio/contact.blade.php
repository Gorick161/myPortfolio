@extends('layouts.app')
@section('title', 'Kontakt – Nick Nagorny')

@section('content')
<h1 class="text-3xl font-bold mb-6">Kontakt</h1>

<div class="grid md:grid-cols-2 gap-8">
  <div class="rounded-2xl border border-zinc-200/60 dark:border-zinc-800/60 p-6">
    <p class="text-zinc-600 dark:text-zinc-400">Ich freue mich über Ihre Nachricht.</p>
    <ul class="mt-4 space-y-2 text-sm">
      <li>📧 <a class="underline" href="mailto:nicknagorny@yahoo.de">nicknagorny@yahoo.de</a></li>
      <li>🐙 <a class="underline" target="_blank" href="https://github.com/Gorick1337">github.com/Gorick1337</a></li>
      <li>💼 <a class="underline" target="_blank" href="#">LinkedIn</a></li>
    </ul>
  </div>

  <form method="POST" action="#" class="rounded-2xl border border-zinc-200/60 dark:border-zinc-800/60 p-6 space-y-4">
    @csrf
    <div>
      <label class="block text-sm mb-1">Name</label>
      <input name="name" class="w-full rounded-xl border border-zinc-300/70 dark:border-zinc-700/70 bg-white/70 dark:bg-zinc-900/70 px-3 py-2">
    </div>
    <div>
      <label class="block text-sm mb-1">E-Mail</label>
      <input type="email" name="email" class="w-full rounded-xl border border-zinc-300/70 dark:border-zinc-700/70 bg-white/70 dark:bg-zinc-900/70 px-3 py-2">
    </div>
    <div>
      <label class="block text-sm mb-1">Nachricht</label>
      <textarea name="message" rows="5" class="w-full rounded-xl border border-zinc-300/70 dark:border-zinc-700/70 bg-white/70 dark:bg-zinc-900/70 px-3 py-2"></textarea>
    </div>
    <button class="px-5 py-2 rounded-xl bg-sky-600 text-white hover:bg-sky-700">Senden</button>
  </form>
</div>
@endsection
