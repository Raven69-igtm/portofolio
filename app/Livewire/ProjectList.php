<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;

class ProjectList extends Component
{
    public $search = '';

    public function render()
    {
        // 1. DATA PROJECT KAMU
        $allProjects = [
            [
                'name' => 'SkillSwap Project',
                'html_url' => 'http://skillswap-karya-saya.rf.gd',
                'description' => 'Platform barter keahlian (Skills Marketplace) fitur lengkap dengan Login, Register, dan CRUD System berbasis Laravel 12.',
                'stargazers_count' => 15,
                'language' => 'Laravel',
                'manual' => true // Featured
            ],
            [
                'name' => 'projek_akhir',
                'html_url' => 'https://github.com/mrafiabi123-crypto/projek_akhir',
                'description' => 'Aplikasi manajemen tugas akhir mahasiswa dengan fitur notifikasi realtime dan dashboard admin.',
                'stargazers_count' => 5,
                'language' => 'PHP'
            ],
            [
                'name' => 'project-umkm',
                'html_url' => 'https://github.com/mrafiabi123-crypto/project-umkm',
                'description' => 'Website profil dan katalog produk untuk membantu digitalisasi UMKM lokal di Indonesia.',
                'stargazers_count' => 3,
                'language' => 'Blade'
            ],
            [
                'name' => 'Sistem Penjualan Kedai Santi', // Ganti nama yang bagus
                'html_url' => 'https://pameran-jti.polije.ac.id/product/526/sistem-penjualan-kedai-santi',
                'description' => 'Sistem Point of Sale (POS) sederhana untuk kasir kedai makan, lengkap dengan laporan harian.',
                'stargazers_count' => 4,
                'language' => 'Laravel',
            ],
            [
                'name' => 'skillswap_karya',
                'html_url' => 'https://github.com/mrafiabi123-crypto/skillswap_karya',
                'description' => 'Repository backend untuk sistem SkillSwap yang menangani API dan database logic.',
                'stargazers_count' => 8,
                'language' => 'PHP'
            ],
            [
                'name' => 'Personal Portfolio',
                'html_url' => '#',
                'description' => 'Website portofolio interaktif yang Anda lihat sekarang, dibangun dengan Laravel 12 dan Tailwind CSS.',
                'stargazers_count' => 10,
                'language' => 'Tailwind'
            ],
            [
                'name' => 'E-Commerce Starter',
                'html_url' => '#',
                'description' => 'Template dasar toko online dengan fitur keranjang belanja dan checkout payment gateway.',
                'stargazers_count' => 6,
                'language' => 'JavaScript'
            ],
            [
                'name' => 'Sistem Absensi',
                'html_url' => '#',
                'description' => 'Aplikasi pencatatan kehadiran karyawan berbasis QR Code dan Geolocation.',
                'stargazers_count' => 7,
                'language' => 'Laravel'
            ],
        ];

        // 2. LOGIKA PERBAIKAN (Agar muncul semua saat kosong)
        if (empty($this->search)) {
            // JIKA KOSONG: Tampilkan Semua
            $projects = $allProjects;
        } else {
            // JIKA ISI: Baru di-filter
            $projects = collect($allProjects)->filter(function ($item) {
                return Str::contains(strtolower($item['name']), strtolower($this->search)) || 
                       Str::contains(strtolower($item['description']), strtolower($this->search)) ||
                       Str::contains(strtolower($item['language']), strtolower($this->search));
            })->all();
        }

        return view('livewire.project-list', [
            'projects' => $projects
        ]);
    }
}