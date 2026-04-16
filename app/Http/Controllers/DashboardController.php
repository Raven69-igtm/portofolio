<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
                'html_url' => 'http://skillswap-karya-saya.rf.gd',
                'description' => 'Platform barter keahlian (Skills Marketplace) fitur lengkap dengan Login, Register, dan CRUD System berbasis Laravel 12.',
                'stargazers_count' => 15, // Kasih bintang banyak biar keren
                'language' => 'Laravel',
                'manual' => true // Label Featured
            ],
            // Project 2
            [
                'name' => 'projek_akhir',
                'html_url' => 'https://github.com/mrafiabi123-crypto/projek_akhir',
                'description' => 'Aplikasi manajemen tugas akhir mahasiswa dengan fitur notifikasi realtime dan dashboard admin.',
                'stargazers_count' => 5,
                'language' => 'PHP'
            ],
            // Project 3
            [
                'name' => 'project-umkm',
                'html_url' => 'https://github.com/mrafiabi123-crypto/project-umkm',
                'description' => 'Website profil dan katalog produk untuk membantu digitalisasi UMKM lokal di Indonesia.',
                'stargazers_count' => 3,
                'language' => 'Blade'
            ],
            // Project 4
            [
                'name' => 'sistem penjualan kedai santi',
                'html_url' => 'https://pameran-jti.polije.ac.id/product/526/sistem-penjualan-kedai-santi',
                'description' => 'Sistem Point of Sale (POS) sederhana untuk kasir kedai makan, lengkap dengan laporan harian.',
                'stargazers_count' => 4,
                'language' => 'Laravel'
            ],
            // Project 5
            [
                'name' => 'skillswap_karya',
                'html_url' => 'https://github.com/mrafiabi123-crypto/skillswap_karya',
                'description' => 'Repository backend untuk sistem SkillSwap yang menangani API dan database logic.',
                'stargazers_count' => 8,
                'language' => 'PHP'
            ],
            // Project 6
            [
                'name' => 'Personal Portfolio',
                'html_url' => '#',
                'description' => 'Website portofolio interaktif yang Anda lihat sekarang, dibangun dengan Laravel 12 dan Tailwind CSS.',
                'stargazers_count' => 10,
                'language' => 'Tailwind'
            ],
            // Project 7
            [
                'name' => 'E-Commerce Starter',
                'html_url' => '#',
                'description' => 'Template dasar toko online dengan fitur keranjang belanja dan checkout payment gateway.',
                'stargazers_count' => 6,
                'language' => 'JavaScript'
            ],
            // Project 8
            [
                'name' => 'Sistem Absensi',
                'html_url' => '#',
                'description' => 'Aplikasi pencatatan kehadiran karyawan berbasis QR Code dan Geolocation.',
                'stargazers_count' => 7,
                'language' => 'Laravel'
            ],
        ];
    }

    // 1. FUNGSI DASHBOARD (Halaman Depan)
    public function index()
    {
        // Data Profil Manual (Biar tidak 0 lagi)
        $github = [
            'public_repos' => 8,
            'followers' => 12, // Boleh diisi angka bebas
            'avatar_url' => 'https://github.com/mrafiabi123-crypto.png' // Foto asli kamu
        ];

        // Ambil data project manual di atas
        $repos = $this->getMyProjects();

        return view('welcome', compact('github', 'repos'));
    }

    // 2. FUNGSI PROJECTS (Halaman Grafik)
    public function projects()
    {
        return view('projects');
    }

    // 3. FUNGSI SERTIFIKAT
    public function certificates()
    {
        // Data sertifikatmu yang tadi
        $certificates = [
            [
                'name' => 'Front-End Web',
                'issuer' => 'Dicoding Indonesia',
                'date' => 'Des 2025',
                'image' => 'sertifikat/sertifikat1.png', 
                'tags' => ['HTML', 'CSS']
            ],
            [
                'name' => 'Dasar Pemrograman Web',
                'issuer' => 'Dicoding Indonesia',
                'date' => 'Oct 2025',
                'image' => 'sertifikat/sertifikat2.png',
                'tags' => ['Web', 'Responsive']
            ],
            [
                'name' => 'Dasar AI',
                'issuer' => 'Dicoding Indonesia',
                'date' => 'Sep 2025',
                'image' => 'sertifikat/sertifikat3.png',
                'tags' => ['AI', 'Basic']
            ],
            [
                'name' => 'Dasar Pemrograman JavaScript',
                'issuer' => 'Dicoding Indonesia',
                'date' => 'Nov 2025',
                'image' => 'sertifikat/sertifikat4.png',
                'tags' => ['JS', 'Logic']
            ],
        ];

        return view('certificates', compact('certificates'));
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