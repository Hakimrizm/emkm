@extends('layouts.app')

@section('content')
@include('components.navbar')

<!-- Hero Section -->
<section class="relative w-full h-screen overflow-hidden">
    <!-- Background Video -->
    <div class="absolute inset-0 z-0 will-change-transform">
        <video class="w-full h-full object-cover" autoplay muted loop playsinline>
            <source src="{{ asset('videos/hero.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <!-- Lapisan Hitam Transparan -->
    <div class="absolute inset-0 bg-black/70 z-10"></div>

    <!-- Konten -->
    <div class="relative z-20 flex flex-col justify-center items-center text-center h-full px-6">
        <h1 class="text-5xl font-extrabold mb-6 leading-tight text-white">Melesatkan Bisnismu ke Level Berikutnya</h1>
        <p class="text-lg mb-8 text-white">Bersama <span class="font-semibold">E-MKM</span>, wujudkan impian usahamu dengan teknologi terkini dan dukungan terbaik.</p>
        <a href="{{ route('register') }}" class="inline-block bg-white text-blue-700 font-bold py-3 px-6 rounded-lg shadow hover:bg-gray-100 transition duration-200">
            Daftar Sekarang
        </a>
    </div>
</section>



<!-- Fitur Unggulan -->
<section class="bg-white py-24">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-extrabold">Fitur Unggulan</h2>
        <p class="text-gray-600 text-lg">Fitur-fitur utama yang kami tawarkan untuk membantu UMKM tumbuh dan berkembang.</p>
    </div>
    <div class="grid md:grid-cols-3 gap-8 container mx-auto px-6">
        @foreach([
            ['icon' => 'bi-pencil-fill', 'title' => 'Catat Transaksi Mudah', 'desc' => 'Tambah pemasukan dan pengeluaran harian bisnismu dengan efektif dan efisien.'],
            ['icon' => 'bi-bar-chart-steps', 'title' => 'Lihat Laporan Otomatis', 'desc' => 'Pantau performa usahamu dengan laporan keuangan mingguan dan bulanan.'],
            ['icon' => 'bi-lightbulb-fill', 'title' => 'Belajar Manajemen Keuangan', 'desc' => 'Dapatkan edukasi praktis untuk mengelola keuangan lebih baik.']
        ] as $fitur)
        <div class="bg-blue-50 p-6 rounded-lg shadow hover:shadow-xl transition duration-200 text-center">
            <div class="bg-blue-500 text-white w-14 h-14 flex items-center justify-center rounded-full mx-auto mb-4">
                <i class="bi {{ $fitur['icon'] }} text-xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-2">{{ $fitur['title'] }}</h3>
            <p class="text-gray-700">{{ $fitur['desc'] }}</p>
        </div>
        @endforeach
    </div>
</section>

<!-- Visi dan Misi -->
<section id="tentang-kami" class="py-24 bg-gray-100">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-extrabold">Visi & Misi</h2>
        <p class="text-gray-600 text-lg">Kenali lebih dekat misi kami membantu UMKM berkembang melalui teknologi.</p>
    </div>
    <div class="grid md:grid-cols-2 gap-10 container mx-auto px-6">
        <div class="bg-white p-8 rounded-lg shadow">
            <h3 class="text-2xl font-bold mb-4">Visi</h3>
            <p class="text-gray-700">Mewujudkan UMKM Indonesia untuk beradaptasi dengan era digital dan cerdas dalam mengelola keuangan usaha.</p>
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
</section>

<!-- Testimoni Pengguna -->
<section class="bg-white py-24">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-extrabold">Apa Kata Pengguna?</h2>
    </div>
    <div class="grid md:grid-cols-2 gap-10 container mx-auto px-6">
        @foreach([
            ['img' => 'faces/5.jpg', 'name' => 'Rina Addrina', 'role' => 'CEO of Warung Sembako', 'quote' => 'Aplikasi ini sangat membantu saya mengatur keuangan warung saya. Simple dan mudah digunakan!'],
            ['img' => 'faces/1.jpg', 'name' => 'Riki Adrino', 'role' => 'CEO of Mamang Cuanki', 'quote' => 'Laporan mingguan sangat memudahkan saya evaluasi usaha. Fiturnya lengkap dan edukatif!']
        ] as $user)
        <div class="bg-gray-100 p-6 rounded shadow">
            <p class="mb-4">&ldquo;{{ $user['quote'] }}&rdquo;</p>
            <div class="flex items-center gap-4">
                <img src="{{ asset('/images/' . $user['img']) }}" alt="User" class="w-16 h-16 rounded-full object-cover">
                <div>
                    <h4 class="font-bold">{{ $user['name'] }}</h4>
                    <p class="text-sm text-gray-500">{{ $user['role'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- FAQ -->
<section class="container mx-auto py-24 px-6">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-extrabold">Pertanyaan yang Sering Diajukan</h2>
    </div>
    <div class="space-y-4 max-w-3xl mx-auto">
        @foreach([
            ['q' => 'Bagaimana cara mendaftar?', 'a' => 'Klik tombol "Daftar Sekarang" di bagian atas halaman dan isi formulir pendaftaran.'],
            ['q' => 'Apakah layanan ini gratis?', 'a' => 'Kami menawarkan paket gratis dengan fitur dasar, serta paket premium dengan fitur tambahan.'],
            ['q' => 'Bagaimana cara menghubungi tim support?', 'a' => 'Anda dapat menghubungi kami melalui email di support@emkm.id atau melalui fitur chat di aplikasi.']
        ] as $index => $faq)
        <div x-data="{ open: false }" class="bg-white p-5 rounded-lg shadow">
            <button
                @click="open = !open"
                class="w-full text-left font-semibold text-lg flex justify-between items-center focus:outline-none"
                :aria-expanded="open.toString()"
            >
                <span>{{ $faq['q'] }}</span>
                <svg
                    class="w-5 h-5 transform transition-transform duration-300"
                    :class="{'rotate-180': open}"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div
                x-show="open"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 max-h-0"
                x-transition:enter-end="opacity-100 max-h-screen"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 max-h-screen"
                x-transition:leave-end="opacity-0 max-h-0"
                class="overflow-hidden mt-2 text-gray-600"
            >
                <p>{{ $faq['a'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>


@include('components.footer')
@endsection
