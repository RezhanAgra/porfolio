@props([
    'title' => 'Alif Getar Ramadhan | Web Programmer',
    'description' => 'Portofolio Alif Getar Ramadhan, Web Programmer PHP Laravel dari Makassar, Sulawesi Selatan.',
])

<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $description }}">

    <title>{{ $title }}</title>

    @fonts

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 font-sans text-slate-700 antialiased">

    <x-navbar />

    <main>
        {{ $slot }}

        <x-contact-section />
    </main>

    <footer class="border-t border-slate-200 bg-white px-4 py-8 sm:px-6">
        <div class="mx-auto flex max-w-6xl flex-col items-center justify-between gap-4 text-sm text-slate-500 sm:flex-row">
            <div class="flex items-center gap-2">
                <span class="grid size-8 place-items-center rounded-lg bg-gradient-to-br from-blue-600 to-indigo-600 text-xs font-bold text-white">AGR</span>
                <span>&copy; {{ date('Y') }} Alif Getar Ramadhan</span>
            </div>
            <p>Dibuat dengan Laravel &amp; Tailwind CSS</p>
        </div>
    </footer>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            const isOpen = mobileMenu.classList.toggle('hidden') === false;
            menuToggle.setAttribute('aria-expanded', isOpen);
        });

        mobileMenu.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => mobileMenu.classList.add('hidden'));
        });
    </script>
</body>
</html>
