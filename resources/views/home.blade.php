<x-layout>
    {{-- Hero --}}
    <section class="relative isolate flex min-h-screen items-center overflow-hidden bg-gradient-to-b from-blue-50 via-white to-slate-50 px-4 pt-28 pb-20 sm:px-6">
        <div class="absolute inset-0 -z-10 bg-[linear-gradient(to_right,#3b82f612_1px,transparent_1px),linear-gradient(to_bottom,#3b82f612_1px,transparent_1px)] bg-[size:48px_48px] [mask-image:radial-gradient(ellipse_at_center,black_40%,transparent_75%)]"></div>
        <div class="absolute -top-32 left-1/2 -z-10 size-[36rem] -translate-x-1/2 rounded-full bg-blue-400/25 blur-3xl"></div>
        <div class="absolute -right-24 bottom-0 -z-10 size-80 rounded-full bg-indigo-400/20 blur-3xl"></div>
        <div class="absolute -left-24 top-1/2 -z-10 size-72 rounded-full bg-sky-300/25 blur-3xl"></div>

        <div class="mx-auto flex max-w-3xl flex-col items-center text-center">
            <span class="inline-flex items-center gap-2 rounded-full border border-blue-200 bg-white/70 px-4 py-1.5 text-sm font-medium text-blue-700 shadow-sm">
                <span class="relative flex size-2">
                    <span class="absolute inline-flex size-full animate-ping rounded-full bg-blue-500 opacity-75"></span>
                    <span class="relative inline-flex size-2 rounded-full bg-blue-600"></span>
                </span>
                Tersedia untuk project baru
            </span>

            <p class="mt-8 text-lg text-slate-500">Halo, saya</p>
            <h1 class="mt-2 text-4xl font-bold tracking-tight text-slate-900 sm:text-6xl">
                Alif Getar <span class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">Ramadhan</span>
            </h1>
            <p class="mt-4 text-xl font-semibold text-blue-600 sm:text-2xl">Web Programmer &middot; PHP Laravel</p>

            <p class="mt-6 max-w-2xl text-base leading-relaxed text-slate-600 sm:text-lg">
                Web programmer asal Makassar, Sulawesi Selatan yang berfokus membangun aplikasi web
                yang cepat, aman, dan mudah dikelola menggunakan PHP dan Laravel.
                Saya senang mengubah kebutuhan bisnis menjadi solusi digital yang rapi dan fungsional.
            </p>

            <ul class="mt-8 flex flex-wrap justify-center gap-2">
                @foreach ($skills as $skill)
                    <li class="rounded-full border border-slate-200 bg-white px-4 py-1.5 text-sm font-medium text-slate-700 shadow-sm">{{ $skill }}</li>
                @endforeach
            </ul>

            <div class="mt-10 flex flex-col gap-3 sm:flex-row">
                <a href="#projects" class="rounded-full bg-blue-600 px-7 py-3 text-sm font-semibold text-white shadow-lg shadow-blue-600/30 transition hover:-translate-y-0.5 hover:bg-blue-700">
                    Lihat Project
                </a>
                <a href="#contact" class="rounded-full border border-slate-300 bg-white px-7 py-3 text-sm font-semibold text-slate-700 transition hover:-translate-y-0.5 hover:border-blue-600 hover:text-blue-600">
                    Hubungi Saya
                </a>
            </div>

            <p class="mt-10 flex items-center gap-2 text-sm text-slate-500">
                <svg class="size-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                </svg>
                Makassar, Sulawesi Selatan
            </p>
        </div>
    </section>

    {{-- Projects --}}
    <section id="projects" class="scroll-mt-20 px-4 py-24 sm:px-6">
        <div class="mx-auto max-w-6xl">
            <div class="mx-auto max-w-2xl text-center">
                <p class="text-sm font-semibold tracking-widest text-blue-600 uppercase">Portofolio</p>
                <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Project Pilihan</h2>
                <p class="mt-4 text-slate-600">Beberapa project web yang pernah saya kerjakan, dibangun dengan Laravel dan Blade.</p>
            </div>

            <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($projects as $project)
                    <article class="group flex flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-600/10">
                        <div class="relative grid h-44 place-items-center overflow-hidden bg-gradient-to-br {{ $project['gradient'] }}">
                            <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,rgba(255,255,255,0.25),transparent_50%)]"></div>
                            <svg class="relative size-16 text-white/90 transition duration-300 group-hover:scale-110" fill="none" viewBox="0 0 24 24" stroke-width="1.3" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $project['icon'] }}" />
                            </svg>
                        </div>

                        <div class="flex flex-1 flex-col p-6">
                            <p class="text-xs font-semibold tracking-wider text-blue-600 uppercase">{{ $project['category'] }}</p>
                            <h3 class="mt-2 text-lg font-semibold text-slate-900">{{ $project['title'] }}</h3>
                            <p class="mt-2 flex-1 text-sm leading-relaxed text-slate-600">{{ $project['description'] }}</p>

                            <ul class="mt-5 flex flex-wrap gap-2">
                                @foreach ($project['stack'] as $tech)
                                    <li class="rounded-md bg-blue-50 px-2.5 py-1 text-xs font-medium text-blue-700">{{ $tech }}</li>
                                @endforeach
                            </ul>

                            <a href="#" class="mt-6 inline-flex items-center gap-1.5 text-sm font-semibold text-blue-600 transition hover:gap-2.5">
                                Lihat Detail
                                <svg class="size-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
