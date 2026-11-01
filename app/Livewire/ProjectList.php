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
                'html_url' => 'https://github.com/Raven69-igtm/skillswap_karya',
                'description' => 'Platform barter keahlian (Skills Marketplace) fitur lengkap dengan Login, Register, dan CRUD System berbasis Laravel 12.',
                'stargazers_count' => 15,
                'language' => 'Laravel',
                'manual' => true // Featured
            ],
            [
                'name' => 'projek_akhir',
                'html_url' => 'https://github.com/Raven69-igtm/projek_akhir',
                'description' => 'Aplikasi manajemen tugas akhir mahasiswa dengan fitur notifikasi realtime dan dashboard admin.',
                'stargazers_count' => 5,
                'language' => 'PHP'
            ],
            [
                'name' => 'project-umkm',
                'html_url' => 'https://github.com/Raven69-igtm/project-umkm',
                'description' => 'Website profil dan katalog produk untuk membantu digitalisasi UMKM lokal di Indonesia.',
                'stargazers_count' => 3,
                'language' => 'Blade'
            ],
            [
                'name' => 'Sistem Penjualan Kedai Santi',
                'html_url' => 'https://github.com/Raven69-igtm/sistem_penjualan_kedai_santi',
                'description' => 'Sistem Point of Sale (POS) sederhana untuk kasir kedai makan, lengkap dengan laporan harian.',
                'stargazers_count' => 4,
                'language' => 'Laravel',
            ],
            [
                'name' => 'si-akademik',
                'html_url' => 'https://github.com/Raven69-igtm/si-akademik',
                'description' => 'Sistem informasi akademik kampus untuk manajemen perkuliahan, KRS, dan administrasi perkuliahan.',
                'stargazers_count' => 8,
                'language' => 'PHP'
            ],
            [
                'name' => 'Sentra Mobile & Web',
                'html_url' => 'https://github.com/Raven69-igtm/sentra-mobile',
                'description' => 'Aplikasi multiplatform Flutter/Dart terintegrasi dengan arsitektur web modern untuk tim Sentra.',
                'stargazers_count' => 10,
                'language' => 'Dart'
            ],
            [
                'name' => 'Deteksi Jalan Berlubang (AI)',
                'html_url' => 'https://github.com/Raven69-igtm/deteksi_jalan_berlubang',
                'description' => 'Computer vision & machine learning model untuk mendeteksi kontur dan kerusakan jalan berlubang secara presisi.',
                'stargazers_count' => 7,
                'language' => 'Python'
            ],
            [
                'name' => 'Personal Portfolio',
                'html_url' => 'https://github.com/Raven69-igtm/portofolio',
                'description' => 'Website portofolio interaktif yang Anda lihat sekarang, dibangun dengan Laravel 12 dan Tailwind CSS.',
                'stargazers_count' => 12,
                'language' => 'Tailwind'
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