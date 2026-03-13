{{-- resources/views/home.blade.php --}}
<x-layouts.app title="Juha Halmu">
    {{-- HERO --}}
    <section class="animate-in-1 py-16 max-sm:py-10">
        <div class="max-w-2xl">
            <h1 class="font-display font-300 text-[clamp(2.4rem,5vw,3.8rem)] leading-[1.15] tracking-tight text-stone-800">
                Rakennan <em class="text-pine italic">backend-sovelluksia</em>, kuvaan <em class="text-amber italic">anamorfisella</em> linssillä ja
                tutkin dataa.
            </h1>
            <p class="mt-6 max-w-lg text-base leading-relaxed text-stone-500">Juha Halmu — itseoppinut kehittäjä Helsingistä. Yli 10 vuotta Elixiriä ja BEAM-ekosysteemiä. Ylioppilas, datanomi, lähihoitaja. Melkein onnistunut sijoittaja.</p>
        </div>
    </section>
    <div class="h-px bg-stone-200"></div>

    {{-- TWO-COL ABOUT + PROJECTS --}}
    <section class="animate-in-2 grid grid-cols-[1fr_1.2fr] gap-16 py-14 max-md:grid-cols-1 max-md:gap-8">
        <div>
            <h2 class="font-display font-400 mb-4 text-2xl tracking-tight">Mitä <em class="text-pine italic">teen</em> </h2>
            <p class="text-sm leading-relaxed text-stone-600">Elixir ja Phoenix LiveView ovat jokapäiväisiä työkavereita. Rakennan sovelluksia BEAM-alustalla — tällä hetkellä tuotannossa on henkilökohtainen blogi-alusta Orangedinos ja portfoliotyökalu dividends-o-matic. Uusin kiinnostus on Gleam.</p>
            <p class="mt-3 text-sm leading-relaxed text-stone-600">Kuvaan Fujifilm X-T5:llä ja Sirui 35mm anamorfisella linssillä. Elokuvamainen bokeh. Automaattiset desqueeze-työnkulut macOS:lla. Sukututkimus, genetiikka ja markkinadata vievät loput ajasta.</p>
        </div>

        <div class="space-y-3">
            @foreach ($projects as $project)
                @if ($project['url'])
                    <a
                        href="{{ $project['url'] }}"
                        target="_blank"
                        rel="noopener"
                        class="group hover:border-pine/30 block rounded-lg border border-stone-200 bg-white p-5 no-underline transition-all hover:shadow-sm"
                    >


                @else
                    <div class="rounded-lg border border-stone-200 bg-white p-5">
                @endif
                <div class="mb-1.5 flex items-center justify-between">
                    <span class="font-display text-base font-600 text-stone-800 {{ $project['url'] ? 'group-hover:text-pine transition' : '' }}">
                        {{ $project['name'] }}
                    </span>
                    <span
                        class="font-mono text-[0.6rem] uppercase tracking-wider px-2 py-0.5 rounded
                                {{ $project['status'] === 'Live' ? 'bg-pine-light text-pine' : 'bg-amber-light text-amber' }}"
                    >
                        {{ $project['status'] }}
                    </span>
                </div>
                <p class="text-xs leading-relaxed text-stone-500">{{ $project['description'] }}</p>
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
    <section class="animate-in-3 py-8">
        <div class="flex flex-wrap gap-1.5">
            @foreach ($tags as $tag)
                <span
                    class="text-xs font-medium px-3 py-1.5 rounded-md
                    {{ $tag['style'] === 'pine'
                        ? 'bg-pine-light text-pine'
                        : ($tag['style'] === 'amber'
                            ? 'bg-amber-light text-amber'
                            : 'bg-stone-100 text-stone-600') }}"
                >
                    {{ $tag['name'] }}
                </span>
            @endforeach
        </div>
    </section>

    <div class="h-px bg-stone-200"></div>

    {{-- KOLME SUUNTAA --}}
    <section class="py-14">
        <h2 class="font-editorial mb-6 text-2xl font-normal tracking-tight">Kolme <em class="text-pine italic">suuntaa</em></h2>
        <div class="mx-auto max-w-[820px]">
            <div class="grid grid-cols-3 gap-px overflow-hidden rounded-md border border-stone-200 bg-stone-200 max-sm:grid-cols-1">
                @foreach ($directions as $i => $dir)
                    <div class="bg-[#fafaf8] p-7">
                        <div class="font-editorial mb-4 text-[2rem] leading-none font-bold text-stone-200">
                            {{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div
                        >
                        <h3 class="font-editorial mb-2 text-[1.05rem] font-normal">{{ $dir['title'] }}</h3>
                        <p class="text-xs leading-relaxed text-stone-500">{{ $dir['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="h-px bg-stone-200"></div>

    {{-- KALUSTO & YMPÄRISTÖ --}}
    <section class="py-14">
        <h2 class="font-editorial mb-6 text-2xl font-normal tracking-tight">Kalusto & <em class="text-pine italic">ympäristö</em></h2>
        <div class="grid grid-cols-2 gap-10 max-sm:grid-cols-1">
            @foreach ($gear as $group)
                <div>
                    <h4 class="mb-3 border-b border-stone-200 pb-2 text-[0.6rem] font-semibold tracking-[0.14em] text-stone-400 uppercase">
                        {{ $group['label'] }}</h4
                    >
                    @foreach ($group['items'] as $key => $value)
                        <div class="flex items-baseline justify-between py-2 text-sm">
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
        <blockquote class="font-display mx-auto max-w-lg text-xl leading-relaxed text-stone-500 italic">
            "Niin tai näin, aina menee väärinpäin."
        </blockquote>
        <cite class="mt-3 block text-xs tracking-wide text-stone-400 not-italic">— Bluesky-profiili</cite>
    </section>

    <div class="h-px bg-stone-200"></div>

    {{-- KIRJOITUKSIA --}}
    <section class="py-14">
        <h2 class="font-editorial mb-6 text-2xl font-normal tracking-tight">Kirjoituksia</h2>
        <div class="space-y-0">
            @foreach ($posts as $post)
                <a
                    href="{{ $post['url'] }}"
                    class="group grid grid-cols-[90px_1fr] gap-4 {{ !$loop->last ? 'border-b border-stone-200' : '' }} py-4 no-underline hover:bg-stone-100/50 transition -mx-3 px-3 rounded max-sm:grid-cols-1 max-sm:gap-1"
                >
                    <span class="text-amber pt-1 font-mono text-xs">{{ $post['date'] }}</span>
                    <div>
                        <span class="font-display font-600 group-hover:text-pine text-base text-stone-800 transition">{{ $post['title'] }}</span>
                        <p class="mt-1 text-xs leading-relaxed text-stone-500">{{ $post['excerpt'] }}</p>
                        @if (!empty($post['tags']))
                            <div class="mt-2 flex gap-1.5">
                                @foreach ($post['tags'] as $tag)
                                    <span class="rounded bg-stone-100 px-2 py-0.5 text-[0.6rem] font-medium text-stone-500">{{ $tag }}</span>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </a>
            @endforeach
        </div>

        {{-- PAGINATION --}}
        <div class="mt-8 flex items-center justify-between border-t border-stone-200 pt-4">
            <span class="text-xs text-stone-300 select-none">← Uudemmat</span>
            <span class="text-xs text-stone-400">Sivu 1</span>
            <a href="#" class="hover:text-pine text-xs text-stone-500 no-underline transition">Vanhemmat →</a>
        </div>
    </section>

    <div class="h-px bg-stone-200"></div>

    {{-- KUVAKARUSELLI --}}
    <section class="py-14">
        <h2 class="font-editorial mb-6 text-2xl font-normal tracking-tight">Uusimmat <em class="text-pine italic">kuvat</em></h2>
        <div class="relative">
            <div id="carousel" class="scrollbar-hide flex snap-x snap-mandatory gap-3 overflow-x-auto pb-4">
                @foreach ($photos as $photo)
                    <button
                        class="carousel-item group relative h-[187px] w-[280px] shrink-0 cursor-pointer snap-start overflow-hidden rounded-lg border-0 bg-transparent p-0"
                        onclick="this.querySelector('.overlay').classList.toggle('opacity-0')"
                    >
                        <img src="{{ $photo['src'] }}" alt="{{ $photo['alt'] }}" class="h-full w-full object-cover" />
                        <div class="overlay bg-pine/40 absolute inset-0 mix-blend-multiply transition-opacity duration-500 group-hover:opacity-20">
                        </div>
                    </button>
                @endforeach
            </div>

            <button
                onclick="document.getElementById('carousel').scrollBy({ left: -300, behavior: 'smooth' })"
                class="hover:text-pine hover:border-pine/30 absolute top-1/2 left-0 flex h-8 w-8 -translate-x-3 -translate-y-1/2 items-center justify-center rounded-full border border-stone-200 bg-white/90 text-sm text-stone-500 shadow-sm transition max-sm:hidden"
                >←</button
            >
            <button
                onclick="document.getElementById('carousel').scrollBy({ left: 300, behavior: 'smooth' })"
                class="hover:text-pine hover:border-pine/30 absolute top-1/2 right-0 flex h-8 w-8 translate-x-3 -translate-y-1/2 items-center justify-center rounded-full border border-stone-200 bg-white/90 text-sm text-stone-500 shadow-sm transition max-sm:hidden"
                >→</button
            >
        </div>
        <p class="mt-3 text-xs text-stone-400">Paina kuvaa nähdäksesi väreissä</p>
    </section>
</x-layouts.app>
