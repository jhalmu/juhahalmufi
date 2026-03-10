{{-- resources/views/home.blade.php --}}
<x-layouts.app title="Juha Halmu">

    {{-- HERO --}}
    <section class="py-16 max-sm:py-10 animate-in-1">
        <div class="max-w-2xl">
            <h1
                class="font-display text-[clamp(2.4rem,5vw,3.8rem)] font-300 leading-[1.15] tracking-tight text-stone-800">
                Rakennan <em class="italic text-pine">backend-sovelluksia</em>, kuvaan
                <em class="italic text-amber">anamorfisella</em> linssillä ja tutkin dataa.
            </h1>
            <p class="mt-6 text-base text-stone-500 max-w-lg leading-relaxed">
                Juha Halmu — itseoppinut kehittäjä Helsingistä. Yli 10 vuotta Elixiriä ja BEAM-ekosysteemiä.
                Ylioppilas, datanomi, lähihoitaja. Melkein onnistunut sijoittaja.
            </p>
        </div>
    </section>
    <div class="h-px bg-stone-200"></div>

    {{-- TWO-COL ABOUT + PROJECTS --}}
    <section class="py-14 grid grid-cols-[1fr_1.2fr] gap-16 max-md:grid-cols-1 max-md:gap-8 animate-in-2">
        <div>
            <h2 class="font-display text-2xl font-400 tracking-tight mb-4">Mitä <em class="italic text-pine">teen</em>
            </h2>
            <p class="text-sm text-stone-600 leading-relaxed">
                Elixir ja Phoenix LiveView ovat jokapäiväisiä työkavereita. Rakennan sovelluksia BEAM-alustalla —
                tällä hetkellä tuotannossa on henkilökohtainen blogi-alusta Orangedinos ja portfoliotyökalu
                dividends-o-matic. Uusin kiinnostus on Gleam.
            </p>
            <p class="text-sm text-stone-600 leading-relaxed mt-3">
                Kuvaan Fujifilm X-T5:llä ja Sirui 35mm anamorfisella linssillä. Elokuvamainen bokeh.
                Automaattiset desqueeze-työnkulut macOS:lla. Sukututkimus, genetiikka ja markkinadata
                vievät loput ajasta.
            </p>
        </div>

        <div class="space-y-3">
            @foreach ($projects as $project)
                @if ($project['url'])
                    <a href="{{ $project['url'] }}" target="_blank" rel="noopener"
                        class="group block bg-white border border-stone-200 rounded-lg p-5 no-underline hover:border-pine/30 hover:shadow-sm transition-all">
                    @else
                        <div class="bg-white border border-stone-200 rounded-lg p-5">
                @endif
                <div class="flex items-center justify-between mb-1.5">
                    <span
                        class="font-display text-base font-600 text-stone-800 {{ $project['url'] ? 'group-hover:text-pine transition' : '' }}">
                        {{ $project['name'] }}
                    </span>
                    <span
                        class="font-mono text-[0.6rem] uppercase tracking-wider px-2 py-0.5 rounded
                                {{ $project['status'] === 'Live' ? 'bg-pine-light text-pine' : 'bg-amber-light text-amber' }}">
                        {{ $project['status'] }}
                    </span>
                </div>
                <p class="text-xs text-stone-500 leading-relaxed">{{ $project['description'] }}</p>
                @if ($project['url'])
                    </a>
                @else
        </div>
        @endif
        @endforeach
        </div>
    </section>

    <div class="h-px bg-stone-200"></div>

    {{-- TAGS --}}
    <section class="py-8 animate-in-3">
        <div class="flex flex-wrap gap-1.5">
            @foreach ($tags as $tag)
                <span
                    class="text-xs font-medium px-3 py-1.5 rounded-md
                    {{ $tag['style'] === 'pine'
                        ? 'bg-pine-light text-pine'
                        : ($tag['style'] === 'amber'
                            ? 'bg-amber-light text-amber'
                            : 'bg-stone-100 text-stone-600') }}">
                    {{ $tag['name'] }}
                </span>
            @endforeach
        </div>
    </section>

    <div class="h-px bg-stone-200"></div>

    {{-- KOLME SUUNTAA --}}
    <section class="py-14">
        <h2 class="font-editorial text-2xl font-normal tracking-tight mb-6">Kolme <em
                class="italic text-pine">suuntaa</em></h2>
        <div class="max-w-[820px] mx-auto">
            <div
                class="grid grid-cols-3 max-sm:grid-cols-1 gap-px bg-stone-200 border border-stone-200 rounded-md overflow-hidden">
                @foreach ($directions as $i => $dir)
                    <div class="bg-[#fafaf8] p-7">
                        <div class="font-editorial text-[2rem] font-bold text-stone-200 leading-none mb-4">
                            {{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
                        <h3 class="font-editorial text-[1.05rem] font-normal mb-2">{{ $dir['title'] }}</h3>
                        <p class="text-xs text-stone-500 leading-relaxed">{{ $dir['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="h-px bg-stone-200"></div>

    {{-- KALUSTO & YMPÄRISTÖ --}}
    <section class="py-14">
        <h2 class="font-editorial text-2xl font-normal tracking-tight mb-6">Kalusto & <em
                class="italic text-pine">ympäristö</em></h2>
        <div class="grid grid-cols-2 gap-10 max-sm:grid-cols-1">
            @foreach ($gear as $group)
                <div>
                    <h4
                        class="text-[0.6rem] font-semibold uppercase tracking-[0.14em] text-stone-400 mb-3 pb-2 border-b border-stone-200">
                        {{ $group['label'] }}</h4>
                    @foreach ($group['items'] as $key => $value)
                        <div class="flex justify-between items-baseline py-2 text-sm">
                            <span class="text-stone-500">{{ $key }}</span>
                            <span class="font-display font-400">{{ $value }}</span>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>

    <div class="h-px bg-stone-200"></div>

    {{-- SITAATTI --}}
    <section class="py-12 text-center">
        <blockquote class="font-display italic text-xl text-stone-500 max-w-lg mx-auto leading-relaxed">
            "Niin tai näin, aina menee väärinpäin."
        </blockquote>
        <cite class="block mt-3 not-italic text-xs text-stone-400 tracking-wide">— Bluesky-profiili</cite>
    </section>

    <div class="h-px bg-stone-200"></div>

    {{-- KIRJOITUKSIA --}}
    <section class="py-14">
        <h2 class="font-editorial text-2xl font-normal tracking-tight mb-6">Kirjoituksia</h2>
        <div class="space-y-0">
            @foreach ($posts as $post)
                <a href="{{ $post['url'] }}"
                    class="group grid grid-cols-[90px_1fr] gap-4 {{ !$loop->last ? 'border-b border-stone-200' : '' }} py-4 no-underline hover:bg-stone-100/50 transition -mx-3 px-3 rounded max-sm:grid-cols-1 max-sm:gap-1">
                    <span class="font-mono text-xs text-amber pt-1">{{ $post['date'] }}</span>
                    <div>
                        <span
                            class="font-display text-base font-600 text-stone-800 group-hover:text-pine transition">{{ $post['title'] }}</span>
                        <p class="text-xs text-stone-500 mt-1 leading-relaxed">{{ $post['excerpt'] }}</p>
                        @if (!empty($post['tags']))
                            <div class="flex gap-1.5 mt-2">
                                @foreach ($post['tags'] as $tag)
                                    <span
                                        class="text-[0.6rem] font-medium px-2 py-0.5 rounded bg-stone-100 text-stone-500">{{ $tag }}</span>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </a>
            @endforeach
        </div>

        {{-- PAGINATION --}}
        <div class="flex items-center justify-between mt-8 pt-4 border-t border-stone-200">
            <span class="text-xs text-stone-300 select-none">← Uudemmat</span>
            <span class="text-xs text-stone-400">Sivu 1</span>
            <a href="#" class="text-xs text-stone-500 hover:text-pine transition no-underline">Vanhemmat →</a>
        </div>
    </section>

    <div class="h-px bg-stone-200"></div>

    {{-- KUVAKARUSELLI --}}
    <section class="py-14">
        <h2 class="font-editorial text-2xl font-normal tracking-tight mb-6">Uusimmat <em
                class="italic text-pine">kuvat</em></h2>
        <div class="relative">
            <div id="carousel" class="flex gap-3 overflow-x-auto pb-4 snap-x snap-mandatory scrollbar-hide">
                @foreach ($photos as $photo)
                    <button
                        class="carousel-item group relative snap-start shrink-0 w-[280px] h-[187px] rounded-lg overflow-hidden cursor-pointer border-0 p-0 bg-transparent"
                        onclick="this.querySelector('.overlay').classList.toggle('opacity-0')">
                        <img src="{{ $photo['src'] }}" alt="{{ $photo['alt'] }}" class="w-full h-full object-cover">
                        <div
                            class="overlay absolute inset-0 bg-pine/40 mix-blend-multiply transition-opacity duration-500 group-hover:opacity-20">
                        </div>
                    </button>
                @endforeach
            </div>

            <button onclick="document.getElementById('carousel').scrollBy({left:-300,behavior:'smooth'})"
                class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-3 w-8 h-8 rounded-full bg-white/90 border border-stone-200 text-stone-500 hover:text-pine hover:border-pine/30 transition flex items-center justify-center text-sm shadow-sm max-sm:hidden">←</button>
            <button onclick="document.getElementById('carousel').scrollBy({left:300,behavior:'smooth'})"
                class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-3 w-8 h-8 rounded-full bg-white/90 border border-stone-200 text-stone-500 hover:text-pine hover:border-pine/30 transition flex items-center justify-center text-sm shadow-sm max-sm:hidden">→</button>
        </div>
        <p class="text-xs text-stone-400 mt-3">Paina kuvaa nähdäksesi väreissä</p>
    </section>

</x-layouts.app>
