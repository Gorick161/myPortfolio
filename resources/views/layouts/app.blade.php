<!doctype html>
<html lang="de" class="h-full antialiased">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title','Nick Nagorny – Portfolio')</title>
  <meta name="description" content="Full-Stack Portfolio von Nick Nagorny – Laravel, Angular, Quarkus.">
  <link rel="stylesheet" href="{{ asset('build/tailwind.css') }}">
  <script>
    (()=>{const s=localStorage.getItem('theme');
      if(s==='dark'||(!s&&window.matchMedia('(prefers-color-scheme: dark)').matches))
        document.documentElement.classList.add('dark');
      window.toggleTheme=()=>{const d=document.documentElement.classList.toggle('dark');localStorage.setItem('theme',d?'dark':'light');};
    })();
  </script>
</head>
<body class="min-h-screen bg-white text-zinc-900 dark:bg-zinc-950 dark:text-zinc-100 font-sans">
  {{-- Decorative background --}}
  <div class="pointer-events-none fixed inset-0 -z-10">
    <div class="absolute inset-0 bg-gradient-to-br from-sky-100 via-fuchsia-50 to-transparent dark:from-sky-950/40 dark:via-fuchsia-950/10"></div>
    <div class="absolute inset-0 bg-grid opacity-60 dark:opacity-30"></div>
    <div class="noise absolute inset-0"></div>
  </div>

  {{-- NAV --}}
  <header class="sticky top-0 z-50">
    <div class="mx-auto max-w-7xl px-4 md:px-6 py-3">
      <div class="glass ring-gradient rounded-2xl px-4 py-3 flex items-center justify-between">
        <a href="{{ route('home') }}" class="flex items-center gap-2">
          <div class="size-8 rounded-xl bg-gradient-to-br from-sky-500 to-fuchsia-500"></div>
          <span class="font-semibold tracking-tight">Nick Nagorny</span>
        </a>
        <nav class="hidden md:flex items-center gap-6 text-sm">
          <a href="{{ route('projects') }}" class="hover:underline">Projekte</a>
          <a href="{{ route('experience') }}" class="hover:underline">Erfahrung</a>
          <a href="{{ route('resume') }}" class="hover:underline">Lebenslauf</a>
          <a href="{{ route('contact') }}" class="hover:underline">Kontakt</a>
        </nav>
        <div class="flex items-center gap-2">
          <button onclick="toggleTheme()" class="btn-outline text-xs">Dark</button>
          <a href="https://github.com/Gorick1337" target="_blank" class="btn-outline text-xs">GitHub</a>
        </div>
      </div>
    </div>
  </header>

  {{-- CONTENT --}}
  <main class="mx-auto max-w-7xl px-4 md:px-6 py-10 md:py-14">
    @yield('content')
  </main>

  {{-- FOOTER --}}
  <footer class="border-t border-zinc-200/70 dark:border-zinc-800/70">
    <div class="max-w-7xl mx-auto px-4 md:px-6 py-10 text-sm text-zinc-600 dark:text-zinc-400">
      © {{ date('Y') }} Nick Nagorny • <a class="underline" href="mailto:nicknagorny@yahoo.de">nicknagorny@yahoo.de</a>
    </div>
  </footer>
</body>
</html>
