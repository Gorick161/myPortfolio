<!DOCTYPE html>
<html lang="de" class="h-full bg-gray-50 text-gray-900 dark:bg-gray-900 dark:text-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Nick Nagorny – Portfolio') }}</title>
    <link rel="stylesheet" href="{{ asset('build/tailwind.css') }}">
</head>
<body class="min-h-screen flex flex-col font-sans">

    {{-- Navigation --}}
    <header class="bg-white/70 dark:bg-gray-800/70 backdrop-blur-md border-b border-gray-200 dark:border-gray-700 sticky top-0 z-50">
        <div class="max-w-5xl mx-auto px-4 py-3 flex justify-between items-center">
            <a href="{{ route('home') }}" class="font-bold text-lg">Nick Nagorny</a>
            <nav class="space-x-6">
                <a href="{{ route('home') }}" class="hover:underline">Start</a>
                <a href="{{ route('projects') }}" class="hover:underline">Projekte</a>
                <a href="{{ route('resume') }}" class="hover:underline">Lebenslauf</a>
                <a href="{{ route('contact') }}" class="hover:underline">Kontakt</a>
            </nav>
        </div>
    </header>

    {{-- Seiteninhalt --}}
    <main class="flex-1 max-w-5xl mx-auto px-4 py-8">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-gray-100 dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 py-4 text-center text-sm">
        © {{ date('Y') }} Nick Nagorny – Alle Rechte vorbehalten
    </footer>
</body>
</html>