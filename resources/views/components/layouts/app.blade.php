{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Juha Halmu' }}</title>
    <meta name="application-name" content="{{ config('app.name') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="{{ $description ?? 'Juha Halmu — backend-kehittäjä, valokuvaaja, Helsingistä.' }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,300;0,6..72,400;0,6..72,600;1,6..72,300;1,6..72,400&family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,700;1,9..144,400&family=Geist:wght@300;400;500;600&family=Geist+Mono:wght@400&display=swap"
        rel="stylesheet"
    />
    @vite (['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-body bg-stone-50 text-stone-900 antialiased">
    {{-- HEADER --}}
    <nav class="animate-in mx-auto flex max-w-[960px] items-center justify-between px-6 pt-8 pb-6">
        <a href="{{ route('home') }}" class="font-display font-600 text-xl tracking-tight text-stone-900 no-underline">JH</a>
        <span class="flex items-center gap-2 text-xs text-stone-500">
            Helsinki, Kallio — 60°10′N 24°56′E
            {{-- Säädata: korvaa myöhemmin livefeedillä --}}
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none">
                <circle cx="12" cy="12" r="5" fill="#f0b429" />
                <g stroke="#f0b429" stroke-width="2" stroke-linecap="round">
                    <line x1="12" y1="1" x2="12" y2="3" />
                    <line x1="12" y1="21" x2="12" y2="23" />
                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64" />
                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78" />
                    <line x1="1" y1="12" x2="3" y2="12" />
                    <line x1="21" y1="12" x2="23" y2="12" />
                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36" />
                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22" />
                </g>
            </svg>
            −2°C
        </span>
    </nav>

    <main class="mx-auto max-w-[960px] px-6"> {{ $slot }} </main>

    {{-- FOOTER --}}
    <footer class="mx-auto max-w-[960px] border-t border-stone-200 px-6 py-8">
        <div class="flex items-baseline justify-between text-xs text-stone-400 max-sm:flex-col max-sm:gap-2">
            <span>&copy; {{ date('Y') }} Juha Halmu · Helsinki</span>
            <a href="/rss.xml" class="hover:text-amber flex items-center gap-1.5 text-stone-400 no-underline transition">
                <svg class="h-3 w-3" viewBox="0 0 24 24" fill="currentColor">
                    <circle cx="6.18" cy="17.82" r="2.18" />
                    <path
                        d="M4 4.44v2.83c7.03 0 12.73 5.7 12.73 12.73h2.83c0-8.59-6.97-15.56-15.56-15.56zm0 5.66v2.83c3.9 0 7.07 3.17 7.07 7.07h2.83c0-5.47-4.43-9.9-9.9-9.9z"
                    />
                </svg>
                RSS
            </a>
            <div class="flex items-center gap-4">
                <a href="#" class="hover:text-pine text-stone-400 no-underline transition">Yhteydenotto</a>
                <span class="text-stone-300">/</span>
                <a href="#" class="hover:text-pine text-stone-400 no-underline transition">Galleria</a>
                <span class="text-stone-300">/</span>
                <a href="#" class="hover:text-pine text-stone-400 no-underline transition">Töihin?</a>
            </div>
        </div>
    </footer>
</body>
</html>
