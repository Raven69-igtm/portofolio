<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail; // 👈 PENTING: Import Library Mail Laravel

class ContactForm extends Component
{
    // 1. Variabel Form
    public $name = '';
    public $email = '';
    public $message = '';

    // 2. Aturan Validasi
    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    // 3. Fungsi saat tombol "Kirim" ditekan
    public function submit()
    {
        // Cek validasi dulu
        $this->validate();

        // --- LOGIKA KIRIM EMAIL (SUDAH DIPERBAIKI) ---
        // Mengirim email sederhana (Raw Text) ke Inbox kamu
        Mail::raw("Pesan Baru dari Portfolio!\n\nNama: {$this->name}\nEmail: {$this->email}\nPesan:\n{$this->message}", function ($msg) {
            $msg->to('contactabiyyuza@gmail.com') // 👈 Email tujuan (Inbox kamu)
                ->subject('Pesan Baru dari Website Portfolio: ' . $this->name)
                ->replyTo($this->email, $this->name);
        });

        // Tampilkan pesan sukses
        session()->flash('success', 'Terima kasih! Pesan Anda telah saya terima. Saya akan membalas secepatnya.');

        // Kosongkan form setelah kirim
        $this->reset(['name', 'email', 'message']);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}