<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{
    // =================================================================
    // DATABASE PROJECT MANUAL (Cara Pro untuk Portofolio Stabil)
    // =================================================================
    private function getMyProjects()
    {
        return [
            // Project 1 (Utama)
            [
                'name' => 'SkillSwap Project',
                'html_url' => 'https://github.com/Raven69-igtm/skillswap_karya',
                'description' => 'Platform barter keahlian (Skills Marketplace) fitur lengkap dengan Login, Register, dan CRUD System berbasis Laravel 12.',
                'stargazers_count' => 15,
                'language' => 'Laravel',
                'manual' => true // Label Featured
            ],
            // Project 2
            [
                'name' => 'projek_akhir',
                'html_url' => 'https://github.com/Raven69-igtm/projek_akhir',
                'description' => 'Aplikasi manajemen tugas akhir mahasiswa dengan fitur notifikasi realtime dan dashboard admin.',
                'stargazers_count' => 5,
                'language' => 'PHP'
            ],
            // Project 3
            [
                'name' => 'project-umkm',
                'html_url' => 'https://github.com/Raven69-igtm/project-umkm',
                'description' => 'Website profil dan katalog produk untuk membantu digitalisasi UMKM lokal di Indonesia.',
                'stargazers_count' => 3,
                'language' => 'Blade'
            ],
            // Project 4
            [
                'name' => 'sistem penjualan kedai santi',
                'html_url' => 'https://github.com/Raven69-igtm/sistem_penjualan_kedai_santi',
                'description' => 'Sistem Point of Sale (POS) sederhana untuk kasir kedai makan, lengkap dengan laporan harian.',
                'stargazers_count' => 4,
                'language' => 'Laravel'
            ],
            // Project 5
            [
                'name' => 'si-akademik',
                'html_url' => 'https://github.com/Raven69-igtm/si-akademik',
                'description' => 'Sistem informasi akademik kampus untuk manajemen perkuliahan, KRS, dan administrasi perkuliahan.',
                'stargazers_count' => 8,
                'language' => 'PHP'
            ],
            // Project 6
            [
                'name' => 'Sentra Mobile & Web',
                'html_url' => 'https://github.com/Raven69-igtm/sentra-mobile',
                'description' => 'Aplikasi multiplatform Flutter/Dart terintegrasi dengan arsitektur web modern untuk tim Sentra.',
                'stargazers_count' => 10,
                'language' => 'Dart'
            ],
            // Project 7
            [
                'name' => 'Deteksi Jalan Berlubang (AI)',
                'html_url' => 'https://github.com/Raven69-igtm/deteksi_jalan_berlubang',
                'description' => 'Computer vision & machine learning model untuk mendeteksi kontur dan kerusakan jalan berlubang secara presisi.',
                'stargazers_count' => 7,
                'language' => 'Python'
            ],
            // Project 8
            [
                'name' => 'Personal Portfolio',
                'html_url' => 'https://github.com/Raven69-igtm/portofolio',
                'description' => 'Website portofolio interaktif yang Anda lihat sekarang, dibangun dengan Laravel 12 dan Tailwind CSS.',
                'stargazers_count' => 12,
                'language' => 'Tailwind'
            ],
        ];
    }

    // 1. FUNGSI DASHBOARD (Halaman Depan Utama - Single Page)
    public function index()
    {
        // Data Profil GitHub Raven69-igtm dengan Auto-Sync & Cache
        $github = Cache::remember('github_profile_raven', 1800, function () {
            try {
                $response = Http::withHeaders(['User-Agent' => 'Raven-Portfolio'])->timeout(2)->get('https://api.github.com/users/Raven69-igtm');
                if ($response->successful()) {
                    $d = $response->json();
                    return [
                        'public_repos' => $d['public_repos'] ?? 22,
                        'followers' => $d['followers'] ?? 30,
                        'following' => $d['following'] ?? 32,
                        'avatar_url' => $d['avatar_url'] ?? 'https://avatars.githubusercontent.com/u/228758360?v=4',
                        'html_url' => 'https://github.com/Raven69-igtm',
                        'bio' => $d['bio'] ?? '',
                        'name' => $d['name'] ?? 'Abiyyuza',
                    ];
                }
            } catch (\Throwable $e) {}

            return [
                'public_repos' => 22,
                'followers' => 30,
                'following' => 32,
                'avatar_url' => 'https://avatars.githubusercontent.com/u/228758360?v=4',
                'html_url' => 'https://github.com/Raven69-igtm',
                'bio' => 'Informatics Engineering Student @ State Polytechnic of Jember',
                'name' => 'Abiyyuza',
            ];
        });

        $repos = $this->getMyProjects();
        $certificates = $this->getMyCertificates();

        return view('welcome', compact('github', 'repos', 'certificates'));
    }

    // 2. FUNGSI PROJECTS (Halaman Grafik)
    public function projects()
    {
        return view('projects');
    }

    // 3. FUNGSI SERTIFIKAT
    public function certificates()
    {
        $certificates = $this->getMyCertificates();
        return view('certificates', compact('certificates'));
    }

    private function getMyCertificates()
    {
        return [
            // --- SERTIFIKAT TERBARU (2026) ---
            [
                'name' => 'Machine Learning Beginner',
                'issuer' => 'Dicoding Indonesia',
                'date' => 'Agu 2026',
                'image' => 'sertifikat/sertifikat_bmlp.png', 
                'file' => 'sertifikat/BMLP.pdf',
                'credential_id' => '53XE1V2V0ZRN',
                'credential_url' => 'https://www.dicoding.com/certificates/53XE1V2V0ZRN',
                'tags' => ['Machine Learning', 'Python', 'AI']
            ],
            [
                'name' => 'Dasar Pemrograman Python',
                'issuer' => 'Dicoding Indonesia',
                'date' => 'Agu 2026',
                'image' => 'sertifikat/sertifikat_python.png',
                'file' => 'sertifikat/dasar python.pdf',
                'credential_id' => 'L4PQ9OYG4PO1',
                'credential_url' => 'https://www.dicoding.com/certificates/L4PQ9OYG4PO1',
                'tags' => ['Python', 'Programming', 'Logic']
            ],
            [
                'name' => 'Strategi Pengembangan Diri',
                'issuer' => 'Dicoding Indonesia',
                'date' => 'Agu 2026',
                'image' => 'sertifikat/sertifikat_pengembangan.png',
                'file' => 'sertifikat/pengembangan.pdf',
                'credential_id' => 'NVP7WQ7E4ZR0',
                'credential_url' => 'https://www.dicoding.com/certificates/NVP7WQ7E4ZR0',
                'tags' => ['Soft Skills', 'Self Development']
            ],
            [
                'name' => 'Introduction to Financial Literacy',
                'issuer' => 'Dicoding & DBS Foundation',
                'date' => 'Agu 2026',
                'image' => 'sertifikat/sertifikat_financial.png',
                'file' => 'sertifikat/financial_literacy.pdf',
                'credential_id' => '07Z672O6RPQR',
                'credential_url' => 'https://www.dicoding.com/certificates/07Z672O6RPQR',
                'tags' => ['Finance', 'Literacy']
            ],

            // --- SERTIFIKAT FORMAT FOTO / GAMBAR (2025) ---
            [
                'name' => 'Front-End Web Beginner',
                'issuer' => 'Dicoding Indonesia',
                'date' => 'Des 2025',
                'image' => 'sertifikat/sertifikat1.png',
                'file' => null,
                'credential_id' => 'EYX4K5Q65PDL',
                'credential_url' => 'https://www.dicoding.com/certificates/EYX4K5Q65PDL',
                'tags' => ['Front-End', 'HTML', 'CSS']
            ],
            [
                'name' => 'JavaScript Beginner',
                'issuer' => 'Dicoding Indonesia',
                'date' => 'Des 2025',
                'image' => 'sertifikat/sertifikat4.png',
                'file' => null,
                'credential_id' => 'EYX4K5G75PDL',
                'credential_url' => 'https://www.dicoding.com/certificates/EYX4K5G75PDL',
                'tags' => ['JavaScript', 'Web', 'Logic']
            ],
            [
                'name' => 'Basic Web Programming',
                'issuer' => 'Dicoding Indonesia',
                'date' => 'Okt 2025',
                'image' => 'sertifikat/sertifikat2.png',
                'file' => null,
                'credential_id' => '6RPNGY3M8Z2M',
                'credential_url' => 'https://www.dicoding.com/certificates/6RPNGY3M8Z2M',
                'tags' => ['Web', 'HTML', 'Responsive']
            ],
            [
                'name' => 'AI Fundamental',
                'issuer' => 'Dicoding Indonesia',
                'date' => 'Sep 2025',
                'image' => 'sertifikat/sertifikat3.png',
                'file' => null,
                'credential_id' => '10P8J1OOLPQK',
                'credential_url' => 'https://www.dicoding.com/certificates/10P8J1OOLPQK',
                'tags' => ['AI', 'Artificial Intelligence']
            ],
        ];
    }

    // 4. FUNGSI ABOUT
    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}