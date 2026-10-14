<x-layout title="Tentang Saya | Alif Getar Ramadhan">
    {{-- Hero --}}
    <section class="relative isolate overflow-hidden bg-gradient-to-b from-blue-50 via-white to-slate-50 px-4 pt-36 pb-20 sm:px-6">
        <div class="absolute inset-0 -z-10 bg-[linear-gradient(to_right,#3b82f612_1px,transparent_1px),linear-gradient(to_bottom,#3b82f612_1px,transparent_1px)] bg-[size:48px_48px] [mask-image:radial-gradient(ellipse_at_center,black_40%,transparent_75%)]"></div>
        <div class="absolute -top-32 left-1/2 -z-10 size-[36rem] -translate-x-1/2 rounded-full bg-blue-400/25 blur-3xl"></div>
        <div class="absolute -right-24 bottom-0 -z-10 size-80 rounded-full bg-indigo-400/20 blur-3xl"></div>

        <div class="mx-auto flex max-w-3xl flex-col items-center text-center">
            <div class="relative">
                <div class="absolute -inset-2 rounded-full bg-gradient-to-br from-blue-500 to-indigo-500 opacity-30 blur-lg"></div>
                <div class="relative grid size-32 place-items-center rounded-full border-4 border-white bg-gradient-to-br from-blue-600 to-indigo-600 text-4xl font-bold tracking-wider text-white shadow-xl">
                    AGR
                </div>
            </div>

            <p class="mt-8 text-sm font-semibold tracking-widest text-blue-600 uppercase">Tentang Saya</p>
            <h1 class="mt-3 text-4xl font-bold tracking-tight text-slate-900 sm:text-5xl">
                Kenalan dengan <span class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">Alif</span>
            </h1>
            <p class="mt-6 max-w-2xl text-base leading-relaxed text-slate-600 sm:text-lg">
                Saya Alif Getar Ramadhan, web programmer dari Makassar, Sulawesi Selatan.
                Saya membangun aplikasi web dengan PHP dan Laravel, mulai dari sistem informasi, toko online,
                hingga REST API. Bagi saya, kode yang baik adalah kode yang rapi, aman, dan mudah dikembangkan.
            </p>

            <dl class="mt-12 grid w-full grid-cols-3 gap-4">
                @foreach ($stats as $stat)
                    <div class="flex flex-col rounded-2xl border border-slate-200 bg-white/80 px-4 py-6 shadow-sm">
                        <dt class="order-2 mt-1 text-xs font-medium text-slate-500 sm:text-sm">{{ $stat['label'] }}</dt>
                        <dd class="text-3xl font-bold text-blue-600 sm:text-4xl">{{ $stat['value'] }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </section>

    {{-- Skills --}}
    <section class="px-4 py-24 sm:px-6">
        <div class="mx-auto max-w-6xl">
            <div class="mx-auto max-w-2xl text-center">
                <p class="text-sm font-semibold tracking-widest text-blue-600 uppercase">Keahlian</p>
                <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Tech Stack Saya</h2>
                <p class="mt-4 text-slate-600">Teknologi yang saya gunakan sehari-hari untuk membangun aplikasi web.</p>
            </div>

            <div class="mt-14 grid gap-6 md:grid-cols-2">
                @foreach ($skillGroups as $group)
                    <div class="rounded-2xl border border-slate-200 bg-white p-8 shadow-sm">
                        <h3 class="text-lg font-semibold text-slate-900">{{ $group['title'] }}</h3>

                        <ul class="mt-6 flex flex-col gap-5">
                            @foreach ($group['skills'] as $skill)
                                <li>
                                    <div class="flex justify-between text-sm font-medium">
                                        <span class="text-slate-700">{{ $skill['name'] }}</span>
                                        <span class="text-blue-600">{{ $skill['level'] }}%</span>
                                    </div>
                                    <div class="mt-2 h-2 overflow-hidden rounded-full bg-blue-50">
                                        <div class="h-full rounded-full bg-gradient-to-r from-blue-500 to-indigo-500" style="width: {{ $skill['level'] }}%"></div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section class="bg-white px-4 py-24 sm:px-6">
        <div class="mx-auto max-w-6xl">
            <div class="mx-auto max-w-2xl text-center">
                <p class="text-sm font-semibold tracking-widest text-blue-600 uppercase">Layanan</p>
                <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Apa yang Bisa Saya Bantu</h2>
            </div>

            <div class="mt-14 grid gap-6 md:grid-cols-3">
                @foreach ($services as $service)
                    <article class="group rounded-2xl border border-slate-200 bg-slate-50 p-8 transition duration-300 hover:-translate-y-1 hover:border-blue-200 hover:bg-white hover:shadow-xl hover:shadow-blue-600/10">
                        <div class="grid size-12 place-items-center rounded-xl bg-gradient-to-br from-blue-600 to-indigo-600 text-white shadow-lg shadow-blue-600/25">
                            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.6" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $service['icon'] }}" />
                            </svg>
                        </div>
                        <h3 class="mt-6 text-lg font-semibold text-slate-900">{{ $service['title'] }}</h3>
                        <p class="mt-2 text-sm leading-relaxed text-slate-600">{{ $service['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Experience --}}
    <section class="px-4 py-24 sm:px-6">
        <div class="mx-auto max-w-3xl">
            <div class="text-center">
                <p class="text-sm font-semibold tracking-widest text-blue-600 uppercase">Perjalanan</p>
                <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Pengalaman</h2>
            </div>

            <ol class="relative mt-14 flex flex-col gap-10 border-l-2 border-blue-100 pl-8">
                @foreach ($experiences as $experience)
                    <li class="relative">
                        <span class="absolute top-1.5 -left-[2.6rem] size-4 rounded-full border-4 border-white bg-blue-600 shadow ring-4 ring-blue-100"></span>
                        <span class="inline-block rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-700">{{ $experience['period'] }}</span>
                        <h3 class="mt-3 text-lg font-semibold text-slate-900">{{ $experience['role'] }}</h3>
                        <p class="text-sm font-medium text-slate-500">{{ $experience['place'] }}</p>
                        <p class="mt-2 text-sm leading-relaxed text-slate-600">{{ $experience['description'] }}</p>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>
</x-layout>
