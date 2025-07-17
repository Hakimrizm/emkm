@extends('layouts.app')

@section('content')
@include('components.navbar')

<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-700 to-indigo-800 text-white py-24 relative overflow-hidden">
    <div class="container mx-auto text-center z-10 relative">
        <h1 class="text-4xl md:text-5xl font-bold mb-6 tracking-wide" data-aos="fade-down">Temukan Edukasi yang Mencerahkan</h1>
        <p class="text-lg md:text-xl text-white/80 mb-6" data-aos="fade-up" data-aos-delay="100">
            Pelajari cara mengelola keuangan usahamu, dari dasar hingga strategi cerdas untuk berkembang.
        </p>
        <div class="flex justify-center" data-aos="fade-up" data-aos-delay="200">
            <div class="flex w-full max-w-md bg-white/10 border border-white/30 rounded-lg overflow-hidden backdrop-blur-sm">
                <input type="text" placeholder="Cari artikel..." class="w-full bg-transparent text-white px-4 py-2 placeholder-white focus:outline-none">
                <button class="px-4 bg-white/20 hover:bg-white/30 transition">
                    <i class="bi bi-search text-white"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="absolute inset-0 bg-noise opacity-10 z-0"></div>
</section>

<!-- Featured Article -->
<div class="container mx-auto px-6 py-16">
    <div class="grid md:grid-cols-3 gap-10">
        <div class="md:col-span-2" data-aos="fade-right">
            <div class="rounded overflow-hidden shadow-lg hover:shadow-xl transition">
                <img src="{{ asset('/images/bg/bg.jpg') }}" alt="Featured" class="w-full h-80 object-cover rounded">
            </div>
            <h4 class="mt-5 text-2xl font-bold text-gray-800">Judul Article Edukasi Lorem ipsum dolor sit amet.</h4>
            <p class="text-gray-600 mt-2 mb-1 leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam error similique illo, et ullam...
            </p>
            <span class="text-sm text-gray-500">7 hari yang lalu oleh Admin</span>
        </div>

        <!-- Popular Articles -->
        <div data-aos="fade-left" data-aos-delay="100">
            <h4 class="text-xl font-semibold mb-4 text-gray-800">Artikel Populer</h4>
            @for ($i = 0; $i < 5; $i++)
            <div class="flex mb-4 items-center hover:scale-[1.01] transition">
                <img src="{{ asset('/images/bg/bg.jpg') }}" class="w-28 h-20 rounded object-cover flex-shrink-0" alt="Popular Article">
                <div class="ml-4">
                    <h5 class="font-medium text-sm text-gray-700">Judul artikel populer</h5>
                    <span class="text-xs text-gray-500">2 hari yang lalu oleh Admin</span>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>

<!-- Latest Articles -->
<section class="container mx-auto px-6 py-10">
    <h1 class="text-3xl font-bold mb-8 text-center text-gray-800" data-aos="zoom-in">Artikel Terbaru</h1>
    <div class="grid md:grid-cols-3 gap-8">
        @foreach ($articles as $article)
        <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-5 flex flex-col" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
            <div class="rounded overflow-hidden mb-4">
                <img src="{{ asset('/images/bg/bg.jpg') }}" class="w-full h-48 object-cover rounded" alt="Article Image">
            </div>
            <h5 class="text-xl font-semibold mb-2 text-gray-800">{{ $article->title }}</h5>
            <p class="text-sm text-gray-600 flex-grow">{{ Str::limit(strip_tags($article->content), 100) }}</p>
            <a href="#" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition text-sm text-center">
                Baca Selengkapnya
            </a>
        </div>
        @endforeach
    </div>

    <div class="mt-10 flex justify-center">
        {{ $articles->links('pagination::tailwind') }}
    </div>
</section>

@include('components.footer')
@endsection
