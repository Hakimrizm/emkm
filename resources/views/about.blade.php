@extends('layouts.app')

@section('content')
@include('components.navbar')

{{-- Hero --}}
<section id="hero-about" class="bg-blue-700 text-white">
    <div class="flex justify-center items-center h-64 text-center py-35">
        <div>
            <h1 class="text-4xl font-bold mb-2">Tentang Kami</h1>
            <p class="text-lg">Lebih kenal dengan kami agar kita saling mengenal lebih dalam tentang kami.</p>
        </div>
    </div>
</section>

{{-- Sejarah --}}
<section class="py-16">
    <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
        <div>
            <h1 class="text-3xl font-bold mb-4">Sejarah Kami</h1>
            <p class="text-gray-700 text-lg mb-4">Lorem ipsum dolor sit amet... 
                <button class="text-blue-600 underline" onclick="document.getElementById('extra-history').classList.toggle('hidden')">Baca Selengkapnya</button>
            </p>
            <div id="extra-history" class="text-gray-600 hidden">
                Konten tambahan sejarah yang muncul saat klik baca selengkapnya.
            </div>
        </div>
        <div>
            <img src="{{ asset('/images/bg/teamwork.jpg') }}" alt="Teamwork" class="w-full rounded shadow">
        </div>
    </div>
</section>

{{-- Visi Misi Values --}}
<section class="bg-gray-100 py-16">
    <div class="container mx-auto px-6">
        <div class="text-right mb-10">
            <h1 class="text-3xl font-bold">Visi, Misi dan Values</h1>
            <p class="text-gray-600 text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, totam?</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            {{-- Mission --}}
            <div class="bg-white p-6 rounded shadow">
                <div class="mb-4">
                    <svg class="w-14 h-14 text-blue-600" fill="currentColor" viewBox="0 0 16 16">...</svg>
                </div>
                <h4 class="text-xl font-semibold mb-2">Mission Statement</h4>
                <p class="text-gray-600 mb-2">Lorem ipsum dolor sit amet...</p>
                <ul class="list-disc list-inside text-gray-600">
                    <li>Misi 1</li>
                    <li>Misi 2</li>
                    <li>Misi 3</li>
                </ul>
            </div>

            {{-- Vision --}}
            <div class="bg-white p-6 rounded shadow">
                <div class="mb-4">
                    <svg class="w-14 h-14 text-green-600" fill="currentColor" viewBox="0 0 16 16">...</svg>
                </div>
                <h4 class="text-xl font-semibold mb-2">Vision Statement</h4>
                <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
            </div>

            {{-- Values --}}
            <div class="bg-white p-6 rounded shadow">
                <div class="mb-4">
                    <svg class="w-14 h-14 text-yellow-600" fill="currentColor" viewBox="0 0 16 16">...</svg>
                </div>
                <h4 class="text-xl font-semibold mb-2">Values Statement</h4>
                <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
            </div>
        </div>
    </div>
</section>

{{-- Statistik --}}
<section class="py-16">
    <div class="container mx-auto px-6 grid md:grid-cols-3 gap-6 text-center">
        <div>
            <h1 class="text-5xl font-bold text-blue-700">100+</h1>
            <p class="text-gray-600 text-lg">UMKM yang terbantu</p>
        </div>
        <div>
            <h1 class="text-5xl font-bold text-blue-700">200+</h1>
            <p class="text-gray-600 text-lg">Testimoni pengguna</p>
        </div>
        <div>
            <h1 class="text-5xl font-bold text-blue-700">20+</h1>
            <p class="text-gray-600 text-lg">Kolaborasi institusi / komunitas</p>
        </div>
    </div>
</section>

{{-- Founder --}}
<section class="bg-gray-100 py-16">
    <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
        <div>
            <h1 class="text-3xl font-bold mb-4">Meet our founder</h1>
            <p class="text-gray-700 text-lg mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <h4 class="font-semibold text-xl">Sharla Nathania Madina</h4>
            <p class="text-gray-500">President of EMKM</p>
        </div>
        <div>
            <img src="{{ asset('/images/bg/teamwork.jpg') }}" alt="Founder" class="w-full rounded shadow">
        </div>
    </div>


        <section class="container mx-auto px-4 py-12">
    <h2 class="text-3xl font-bold text-center mb-10">Meet Our Team</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Team Member 1 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden text-center p-4">
            <img src="{{ asset('/images/faces/1.jpg') }}" alt="Khairan Athallah" class="w-full h-52 object-cover rounded-md">
            <h4 class="text-xl font-semibold mt-4">Khairan Athallah</h4>
            <p class="text-gray-500 capitalize">Quality Control</p>
            <div class="flex justify-center gap-4 mt-3 text-gray-500">
                <a href="#" class="hover:text-pink-600"><i class="bi bi-instagram text-lg"></i></a>
                <a href="#" class="hover:text-blue-600"><i class="bi bi-linkedin text-lg"></i></a>
                <a href="#" class="hover:text-black"><i class="bi bi-github text-lg"></i></a>
            </div>
        </div>

        <!-- Team Member 2 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden text-center p-4">
            <img src="{{ asset('/images/faces/2.jpg') }}" alt="Rizky Hakim" class="w-full h-52 object-cover rounded-md">
            <h4 class="text-xl font-semibold mt-4">Rizky Hakim</h4>
            <p class="text-gray-500 capitalize">Software Development</p>
            <div class="flex justify-center gap-4 mt-3 text-gray-500">
                <a href="#" class="hover:text-pink-600"><i class="bi bi-instagram text-lg"></i></a>
                <a href="#" class="hover:text-blue-600"><i class="bi bi-linkedin text-lg"></i></a>
                <a href="#" class="hover:text-black"><i class="bi bi-github text-lg"></i></a>
            </div>
        </div>

        <!-- Team Member 3 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden text-center p-4">
            <img src="{{ asset('/images/faces/3.jpg') }}" alt="Andi Aryanto" class="w-full h-52 object-cover rounded-md">
            <h4 class="text-xl font-semibold mt-4">Andi Aryanto</h4>
            <p class="text-gray-500 capitalize">Software Development</p>
            <div class="flex justify-center gap-4 mt-3 text-gray-500">
                <a href="#" class="hover:text-pink-600"><i class="bi bi-instagram text-lg"></i></a>
                <a href="#" class="hover:text-blue-600"><i class="bi bi-linkedin text-lg"></i></a>
                <a href="#" class="hover:text-black"><i class="bi bi-github text-lg"></i></a>
            </div>
        </div>

        <!-- Team Member 4 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden text-center p-4">
            <img src="{{ asset('/images/faces/4.jpg') }}" alt="Najmi Fadhilah" class="w-full h-52 object-cover rounded-md">
            <h4 class="text-xl font-semibold mt-4">Najmi Fadhilah</h4>
            <p class="text-gray-500 capitalize">Marketing Product</p>
            <div class="flex justify-center gap-4 mt-3 text-gray-500">
                <a href="#" class="hover:text-pink-600"><i class="bi bi-instagram text-lg"></i></a>
                <a href="#" class="hover:text-blue-600"><i class="bi bi-linkedin text-lg"></i></a>
                <a href="#" class="hover:text-black"><i class="bi bi-github text-lg"></i></a>
            </div>
        </div>
    </div>
    </section>
@endsection