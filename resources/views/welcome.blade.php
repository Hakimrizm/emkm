@extends('layouts.app')

@section('content')
@include('components.navbar')

<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-24">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-10 items-center">
            <div>
                <h2 class="text-4xl font-extrabold mb-6 leading-tight">Siap Melesatkan Bisnismu?</h2>
                <p class="text-lg mb-8">Gabung bersama <span class="font-semibold">E-MKM</span> dan mulai perjalanan usahamu ke level berikutnya.
                    Mudah & cepat untuk kamu, Sang Pengusaha. Karena Semua Pengusaha Hebat Pernah Jadi Pemula.
                </p>
                <a href="{{ route('register') }}" class="inline-block bg-white text-blue-700 font-bold py-3 px-6 rounded-lg shadow hover:bg-gray-100 transition">Daftar Sekarang</a>
            </div>
            <div class="hidden md:block">
                <img src="{{ asset('images/hero-illustration.svg') }}" alt="Hero Image" class="w-full max-w-md mx-auto">
            </div>
        </div>
    </div>
</section>

<!-- Tentang Kami -->
<section id="tentang-kami" class="py-20 bg-gray-100">
    <div class="text-center mb-12">
        <h1 class="text-3xl font-extrabold">Tentang Kami</h1>
        <p class="text-gray-600 text-lg">Kenali lebih dekat misi kami membantu UMKM berkembang melalui teknologi.</p>
    </div>
    <div class="grid md:grid-cols-2 gap-10 container mx-auto px-6">
        <div class="bg-white p-8 rounded-lg shadow">
            <h3 class="text-2xl font-bold mb-4">Visi</h3>
            <p class="text-gray-700">Mewujudkan UMKM Indonesia yang melek digital dan cerdas dalam mengelola keuangan usaha.</p>
        </div>
        <div class="bg-white p-8 rounded-lg shadow">
            <h3 class="text-2xl font-bold mb-4">Misi</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-2">
                <li>Menyediakan platform pencatatan keuangan yang mudah digunakan.</li>
                <li>Memberikan edukasi finansial secara praktis dan relevan.</li>
                <li>Memberdayakan UMKM agar lebih mandiri dan berdaya saing.</li>
            </ul>
        </div>
    </div>
    <div class="text-center mt-10">
        <a href="/tentang-kami" class="text-blue-600 font-medium hover:underline">Selengkapnya &raquo;</a>
    </div>
</section>

<!-- Fitur Unggulan -->
<section class="bg-white py-20">
    <div class="text-center mb-12">
        <h1 class="text-3xl font-extrabold">Fitur Unggulan</h1>
        <p class="text-gray-600 text-lg">Kenali fitur-fitur utama yang kami tawarkan untuk membantu UMKM tumbuh dan berkembang.</p>
    </div>
    <div class="grid md:grid-cols-3 gap-8 container mx-auto px-6">
        <div class="bg-blue-50 p-6 rounded-lg shadow hover:shadow-lg transition text-center">
            <div class="bg-blue-500 text-white w-14 h-14 flex items-center justify-center rounded-full mx-auto mb-4">
                <i class="bi bi-pencil-fill text-xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-2">Catat Transaksi Mudah</h3>
            <p class="text-gray-700">Tambah pemasukan dan pengeluaran harian bisnismu dengan mudah.</p>
        </div>
        <div class="bg-blue-50 p-6 rounded-lg shadow hover:shadow-lg transition text-center">
            <div class="bg-blue-500 text-white w-14 h-14 flex items-center justify-center rounded-full mx-auto mb-4">
                <i class="bi bi-bar-chart-steps text-xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-2">Lihat Laporan Otomatis</h3>
            <p class="text-gray-700">Pantau performa usahamu dengan laporan keuangan mingguan dan bulanan.</p>
        </div>
        <div class="bg-blue-50 p-6 rounded-lg shadow hover:shadow-lg transition text-center">
            <div class="bg-blue-500 text-white w-14 h-14 flex items-center justify-center rounded-full mx-auto mb-4">
                <i class="bi bi-lightbulb-fill text-xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-2">Belajar Manajemen Keuangan</h3>
            <p class="text-gray-700">Dapatkan edukasi praktis untuk mengelola keuangan lebih baik.</p>
        </div>
    </div>
</section>

<!-- Testimoni -->
<section class="bg-gray-100 py-20">
    <div class="text-center mb-12">
        <h1 class="text-3xl font-extrabold">Apa Kata Pengguna?</h1>
    </div>
    <div class="grid md:grid-cols-2 gap-10 container mx-auto px-6">
        <div class="bg-white p-6 rounded shadow">
            <p class="mb-4">&ldquo;Aplikasi ini sangat membantu saya mengatur keuangan warung saya. Simple dan mudah digunakan!&rdquo;</p>
            <div class="flex items-center gap-4">
                <img src="{{ asset('/images/faces/5.jpg') }}" alt="User" class="w-16 h-16 rounded-full object-cover">
                <div>
                    <h4 class="font-bold">Rina Addrina</h4>
                    <p class="text-sm text-gray-500">CEO of Warung Sembako</p>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded shadow">
            <p class="mb-4">&ldquo;Laporan mingguan sangat memudahkan saya evaluasi usaha. Fiturnya lengkap dan edukatif!&rdquo;</p>
            <div class="flex items-center gap-4">
                <img src="{{ asset('/images/faces/1.jpg') }}" alt="User" class="w-16 h-16 rounded-full object-cover">
                <div>
                    <h4 class="font-bold">Riki Adrino</h4>
                    <p class="text-sm text-gray-500">CEO of Mamang Cuanki</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="container mx-auto py-20 px-6">
    <div class="text-center mb-12">
        <h1 class="text-3xl font-extrabold">Frequently Asked Questions</h1>
    </div>
    <div class="space-y-4 max-w-3xl mx-auto">
        <details class="bg-white p-5 rounded-lg shadow">
            <summary class="cursor-pointer font-semibold text-lg">Pertanyaan #1</summary>
            <p class="mt-2 text-gray-600">Ini adalah jawaban untuk pertanyaan nomor satu. Anda bisa menyesuaikan kontennya.</p>
        </details>
        <details class="bg-white p-5 rounded-lg shadow">
            <summary class="cursor-pointer font-semibold text-lg">Pertanyaan #2</summary>
            <p class="mt-2 text-gray-600">Ini adalah jawaban untuk pertanyaan nomor dua. Bisa berisi informasi tambahan.</p>
        </details>
        <details class="bg-white p-5 rounded-lg shadow">
            <summary class="cursor-pointer font-semibold text-lg">Pertanyaan #3</summary>
            <p class="mt-2 text-gray-600">Jawaban ketiga untuk pertanyaan yang sering diajukan.</p>
        </details>
    </div>
</section>

@include('components.footer')
@endsection
