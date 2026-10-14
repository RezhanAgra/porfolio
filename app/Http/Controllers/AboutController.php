<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AboutController extends Controller
{
    /**
     * Display the about page.
     */
    public function index(): View
    {
        return view('about', [
            'stats' => [
                ['value' => '3+', 'label' => 'Tahun Pengalaman'],
                ['value' => '20+', 'label' => 'Project Selesai'],
                ['value' => '15+', 'label' => 'Klien Puas'],
            ],
            'skillGroups' => $this->skillGroups(),
            'services' => $this->services(),
            'experiences' => $this->experiences(),
        ]);
    }

    /**
     * Technical skills grouped by area, with a proficiency percentage.
     *
     * @return array<int, array{title: string, skills: array<int, array{name: string, level: int}>}>
     */
    private function skillGroups(): array
    {
        return [
            [
                'title' => 'Backend',
                'skills' => [
                    ['name' => 'PHP', 'level' => 90],
                    ['name' => 'Laravel', 'level' => 90],
                    ['name' => 'MySQL', 'level' => 80],
                    ['name' => 'REST API', 'level' => 85],
                ],
            ],
            [
                'title' => 'Frontend',
                'skills' => [
                    ['name' => 'Blade', 'level' => 90],
                    ['name' => 'Tailwind CSS', 'level' => 85],
                    ['name' => 'JavaScript', 'level' => 70],
                    ['name' => 'HTML & CSS', 'level' => 90],
                ],
            ],
        ];
    }

    /**
     * Services offered to clients.
     *
     * @return array<int, array{title: string, description: string, icon: string}>
     */
    private function services(): array
    {
        return [
            [
                'title' => 'Pengembangan Web App',
                'description' => 'Membangun aplikasi web custom sesuai kebutuhan bisnis, dari sistem informasi hingga dashboard admin.',
                'icon' => 'M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5',
            ],
            [
                'title' => 'Website Company Profile',
                'description' => 'Website profesional yang cepat, responsif, dan SEO-friendly untuk memperkuat citra usaha Anda.',
                'icon' => 'M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418',
            ],
            [
                'title' => 'API & Integrasi',
                'description' => 'Merancang REST API dan mengintegrasikan layanan pihak ketiga seperti payment gateway dan notifikasi.',
                'icon' => 'M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244',
            ],
        ];
    }

    /**
     * Work and learning history, newest first.
     *
     * @return array<int, array{period: string, role: string, place: string, description: string}>
     */
    private function experiences(): array
    {
        return [
            [
                'period' => '2024 - Sekarang',
                'role' => 'Freelance Web Programmer',
                'place' => 'Makassar',
                'description' => 'Mengerjakan berbagai project website dan aplikasi web berbasis Laravel untuk UMKM, sekolah, dan instansi.',
            ],
            [
                'period' => '2023 - 2024',
                'role' => 'Junior Web Developer',
                'place' => 'Software House, Makassar',
                'description' => 'Mengembangkan fitur aplikasi internal, memperbaiki bug, dan menulis automated test untuk aplikasi Laravel.',
            ],
            [
                'period' => '2022 - 2023',
                'role' => 'Belajar & Project Mandiri',
                'place' => 'Sulawesi Selatan',
                'description' => 'Mendalami PHP, Laravel, dan database melalui kursus online serta membangun project pribadi.',
            ],
        ];
    }
}
