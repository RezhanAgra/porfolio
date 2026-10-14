<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display the portfolio home page.
     */
    public function index(): View
    {
        return view('home', [
            'skills' => ['PHP', 'Laravel', 'Blade', 'MySQL', 'Tailwind CSS', 'REST API'],
            'projects' => $this->projects(),
        ]);
    }

    /**
     * Dummy web programming projects shown on the home page.
     *
     * @return array<int, array{title: string, category: string, description: string, stack: array<int, string>, gradient: string, icon: string}>
     */
    private function projects(): array
    {
        return [
            [
                'title' => 'Sistem Informasi Akademik',
                'category' => 'Web Application',
                'description' => 'Aplikasi pengelolaan data siswa, nilai, jadwal pelajaran, dan rapor online untuk sekolah dengan multi-role user.',
                'stack' => ['Laravel', 'MySQL', 'Tailwind CSS'],
                'gradient' => 'from-blue-500 to-indigo-600',
                'icon' => 'M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342',
            ],
            [
                'title' => 'Toko Online UMKM Makassar',
                'category' => 'E-Commerce',
                'description' => 'Platform e-commerce untuk UMKM lokal dengan keranjang belanja, checkout, payment gateway, dan dashboard penjual.',
                'stack' => ['Laravel', 'Blade', 'Midtrans'],
                'gradient' => 'from-sky-400 to-blue-600',
                'icon' => 'M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z',
            ],
            [
                'title' => 'Aplikasi Kasir (POS)',
                'category' => 'Web Application',
                'description' => 'Sistem point of sale untuk transaksi penjualan, manajemen stok barang, dan laporan keuangan harian hingga bulanan.',
                'stack' => ['Laravel', 'MySQL', 'Chart.js'],
                'gradient' => 'from-cyan-500 to-blue-500',
                'icon' => 'M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z',
            ],
            [
                'title' => 'Portal Berita Sulsel',
                'category' => 'Content Management',
                'description' => 'Portal berita dengan CMS untuk redaksi, kategori artikel, pencarian, komentar, dan optimasi SEO.',
                'stack' => ['Laravel', 'Blade', 'MySQL'],
                'gradient' => 'from-indigo-500 to-blue-700',
                'icon' => 'M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z',
            ],
            [
                'title' => 'Booking Lapangan Futsal',
                'category' => 'Reservation System',
                'description' => 'Sistem reservasi lapangan secara online dengan jadwal real-time, konfirmasi pembayaran, dan notifikasi email.',
                'stack' => ['Laravel', 'Tailwind CSS', 'Mail'],
                'gradient' => 'from-blue-600 to-sky-500',
                'icon' => 'M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5',
            ],
            [
                'title' => 'REST API Inventaris',
                'category' => 'Backend API',
                'description' => 'RESTful API untuk manajemen inventaris kantor dengan autentikasi token, dokumentasi endpoint, dan pengujian otomatis.',
                'stack' => ['Laravel', 'Sanctum', 'Pest'],
                'gradient' => 'from-blue-700 to-indigo-500',
                'icon' => 'M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5',
            ],
        ];
    }
}
