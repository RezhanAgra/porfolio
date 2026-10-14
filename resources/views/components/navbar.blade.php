@php
    $menuItems = [
        ['label' => 'Home', 'href' => route('home'), 'isActive' => request()->routeIs('home')],
        ['label' => 'About', 'href' => route('about'), 'isActive' => request()->routeIs('about')],
        ['label' => 'Contact', 'href' => '#contact', 'isActive' => false],
    ];
@endphp

<header class="fixed inset-x-0 top-0 z-50 border-b border-slate-200/70 bg-white/80 backdrop-blur-md">
    <nav class="mx-auto flex max-w-6xl items-center justify-between px-4 py-4 sm:px-6">
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <span class="grid size-10 place-items-center rounded-xl bg-gradient-to-br from-blue-600 to-indigo-600 text-sm font-bold tracking-wider text-white shadow-lg shadow-blue-600/30">
                AGR
            </span>
            <span class="hidden font-semibold text-slate-900 sm:block">Alif Getar Ramadhan</span>
        </a>

        <ul class="hidden items-center gap-8 text-sm font-medium md:flex">
            @foreach ($menuItems as $item)
                <li>
                    <a href="{{ $item['href'] }}" @class(['transition', 'text-blue-600' => $item['isActive'], 'text-slate-600 hover:text-blue-600' => ! $item['isActive']]) @if ($item['isActive']) aria-current="page" @endif>
                        {{ $item['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>

        <a href="#contact" class="hidden rounded-full bg-blue-600 px-5 py-2.5 text-sm font-semibold text-white shadow-md shadow-blue-600/25 transition hover:bg-blue-700 md:inline-block">
            Hubungi Saya
        </a>

        <button type="button" id="menu-toggle" class="rounded-lg p-2 text-slate-700 hover:bg-slate-100 md:hidden" aria-label="Buka menu" aria-expanded="false" aria-controls="mobile-menu">
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </nav>

    <div id="mobile-menu" class="hidden border-t border-slate-200 bg-white md:hidden">
        <ul class="flex flex-col gap-1 px-4 py-3 text-sm font-medium">
            @foreach ($menuItems as $item)
                <li>
                    <a href="{{ $item['href'] }}" @class(['block rounded-lg px-3 py-2', 'bg-blue-50 text-blue-600' => $item['isActive'], 'text-slate-600 hover:bg-slate-50' => ! $item['isActive']])>
                        {{ $item['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</header>
