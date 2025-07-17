@extends('layouts.app')

@section('content')
@include('components.navbar')

<!-- Include AOS CSS in your layout if not already -->
@push('styles')
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
@endpush

<!-- Hero -->
<section id="hero-about" class="bg-blue-700 text-white">
    <div class="flex justify-center items-center h-64 text-center" data-aos="fade-down" data-aos-duration="1000">
        <div>
            <h1 class="text-4xl font-bold mb-2 transition-transform duration-300 hover:scale-105">Tentang Kami</h1>
            <p class="text-lg">Tidak kenal, maka tidak sayang. Mari berkenalan dengan team kami.</p>
        </div>
    </div>
</section>

<!-- Sejarah -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
        <div data-aos="fade-right" data-aos-duration="1000">
            <h2 class="text-3xl font-bold mb-6 text-blue-700">Sejarah Kami</h2>
            <div class="text-gray-700 text-lg space-y-4 text-justify">
                <p>
                    Kami menyadari bahwa pemerintah secara konsisten menyediakan berbagai bentuk pendanaan dan dukungan bagi mahasiswa yang memiliki semangat berinovasi dan ide bisnis yang visioner.
                </p>
                <p>
                    Berangkat dari peluang tersebut, kami menghadirkan <span class="font-semibold text-blue-600">E-MKM</span>, sebuah platform digital yang dirancang untuk turut serta membangun perekonomian Indonesia melalui pemberdayaan UMKM.
                </p>
                <p>
                    E-MKM lahir dari kolaborasi lintas disiplin di Institut Digital Ekonomi Indonesia, mengintegrasikan teknologi, bisnis, dan akuntansi untuk solusi UMKM modern.
                </p>
                <p>
                    Kami berkomitmen menjadi mitra strategis UMKM agar lebih tangguh, adaptif, dan kompetitif di era digital.
                </p>
            </div>
        </div>
        <div data-aos="zoom-in-left" data-aos-duration="1000">
            <img src="{{ asset('/images/bg/teamwork.jpg') }}" alt="Teamwork" class="w-full rounded-xl shadow-lg object-cover">
        </div>
    </div>
</section>

<!-- Visi & Misi -->
<section class="bg-gray-100 py-16">
    <div class="max-w-6xl mx-auto px-6" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="text-3xl font-bold mb-12 text-right text-gray-900">Visi dan Misi</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded shadow transition duration-300 hover:shadow-xl" data-aos="fade-up" data-aos-delay="200">
                <h4 class="text-xl font-semibold mb-2 text-blue-700">Misi Kami</h4>
                <ul class="list-disc list-inside text-gray-600 space-y-1">
                    <li>Memberdayakan UMKM melalui teknologi</li>
                    <li>Mendorong pertumbuhan ekonomi nasional</li>
                    <li>Mengurangi angka pengangguran di Indonesia</li>
                </ul>
            </div>
            <div class="bg-white p-6 rounded shadow md:col-span-2 transition duration-300 hover:shadow-xl" data-aos="fade-up" data-aos-delay="300">
                <h4 class="text-xl font-semibold mb-2 text-green-700">Visi Kami</h4>
                <p class="text-gray-600">
                    Menjadi platform digital <strong>nomor 1</strong> dalam pemberdayaan UMKM dan penciptaan lapangan kerja yang inklusif melalui inovasi teknologi.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Statistik -->
<section class="py-16 bg-white" data-aos="fade-up" data-aos-duration="1000">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-6 text-center">
        <div>
            <h1 class="text-5xl font-bold text-blue-700 transition-transform duration-300 hover:scale-110">100+</h1>
            <p class="text-gray-600 text-lg">UMKM yang terbantu</p>
        </div>
        <div>
            <h1 class="text-5xl font-bold text-blue-700 transition-transform duration-300 hover:scale-110">200+</h1>
            <p class="text-gray-600 text-lg">Testimoni pengguna</p>
        </div>
        <div>
            <h1 class="text-5xl font-bold text-blue-700 transition-transform duration-300 hover:scale-110">20+</h1>
            <p class="text-gray-600 text-lg">Kolaborasi institusi / komunitas</p>
        </div>
    </div>
</section>

<!-- Founder -->
<section class="bg-gray-50 py-20" data-aos="fade-up" data-aos-duration="1000">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
        <div>
            <h2 class="text-4xl font-bold mb-4 text-gray-900">Meet Our Founder</h2>
            <p class="text-gray-700 text-lg mb-6 leading-relaxed">
                Seorang visioner yang percaya bahwa kekuatan teknologi bisa mengubah wajah UMKM Indonesia menuju masa depan yang lebih cerah dan mandiri.
            </p>
            <h4 class="text-2xl font-semibold text-gray-800">Sharla Nathania Madina</h4>
            <p class="text-gray-500">President of EMKM</p>
        </div>
        <div>
            <img
                src="{{ asset('images/bg/teamwork.jpg') }}"
                alt="Founder"
                class="w-full rounded-xl shadow-lg object-cover aspect-[4/5] md:aspect-auto"
            >
        </div>
    </div>
</section>

<!-- Team -->
<section class="bg-white py-20" data-aos="fade-up" data-aos-duration="1000">
    <div class="max-w-6xl mx-auto px-6">
        <h3 class="text-4xl font-bold text-center text-gray-900 mb-12">Meet Our Team</h3>
        @php
            $team = [
                ['name' => 'Khairan Athallah', 'role' => 'Quality Control',       'img' => '1.jpg'],
                ['name' => 'Rizky Hakim',       'role' => 'Software Development', 'img' => '2.jpg'],
                ['name' => 'Andi Aryanto',      'role' => 'Software Development', 'img' => '3.jpg'],
                ['name' => 'Najmi Fadhilah',    'role' => 'Marketing Product',    'img' => '4.jpg'],
            ];
        @endphp
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
            @foreach ($team as $index => $member)
                <div
                    class="bg-gray-50 shadow-md rounded-lg overflow-hidden text-center p-5 transition hover:shadow-xl"
                    data-aos="fade-up"
                    data-aos-delay="{{ $index * 200 }}"
                >
                    <img
                        src="{{ asset('images/faces/' . $member['img']) }}"
                        alt="{{ $member['name'] }}"
                        class="w-full h-52 object-cover rounded-md"
                    >
                    <h4 class="text-xl font-semibold mt-4 text-gray-900">{{ $member['name'] }}</h4>
                    <p class="text-gray-500 capitalize">{{ $member['role'] }}</p>
                    <div class="flex justify-center gap-4 mt-3 text-gray-500">
                        <a href="#" class="hover:text-pink-600"><i class="bi bi-instagram text-lg"></i></a>
                        <a href="#" class="hover:text-blue-600"><i class="bi bi-linkedin text-lg"></i></a>
                        <a href="#" class="hover:text-black"><i class="bi bi-github text-lg"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Include AOS JS -->
@push('scripts')
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>AOS.init();</script>
@endpush

@endsection
