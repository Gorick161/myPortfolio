<header class="sticky top-0 z-50 border-b border-zinc-200/70 dark:border-zinc-800/70 bg-white/70 dark:bg-zinc-950/70 backdrop-blur">
  <div class="max-w-6xl mx-auto px-4 md:px-6 h-14 flex items-center justify-between">
    <a href="{{ route('home') }}" class="font-semibold tracking-tight">Nick Nagorny</a>
    <nav class="hidden md:flex items-center gap-6 text-sm">
      <a class="hover:underline" href="{{ route('projects') }}">Projekte</a>
      <a class="hover:underline" href="{{ route('experience') }}">Erfahrung</a>
      <a class="hover:underline" href="{{ route('resume') }}">Lebenslauf</a>
      <a class="hover:underline" href="{{ route('contact') }}">Kontakt</a>
    </nav>
    <div class="flex items-center gap-3">
      <button onclick="toggleTheme()" class="px-3 py-1 rounded-xl border border-zinc-300/60 dark:border-zinc-700/60 text-xs">Dark</button>
      <a href="https://github.com/Gorick1337" target="_blank" class="text-xs underline">GitHub</a>
    </div>
  </div>
</header>
