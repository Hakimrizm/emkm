@extends('layouts.app')

@section('content')
@include('components.navbar')

<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-700 to-indigo-800 text-white py-24">
    <div class="container mx-auto text-center">
        <h1 class="text-4xl font-bold mb-6">Edukasi</h1>
        <div class="flex justify-center">
            <div class="flex w-full max-w-md bg-white/10 border border-white/30 rounded-lg overflow-hidden">
                <input type="text" placeholder="Search..." class="w-full bg-transparent text-white px-4 py-2 placeholder-white focus:outline-none">
                <button class="px-4 bg-white/20 hover:bg-white/30 transition">
                    <i class="bi bi-search text-white"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Featured Article -->
<div class="container mx-auto px-6 py-16">
    <div class="grid md:grid-cols-3 gap-10">
        <div class="md:col-span-2">
            <div class="rounded overflow-hidden shadow">
                <img src="{{ asset('/images/bg/bg.jpg') }}" alt="Featured" class="w-full h-80 object-cover">
            </div>
            <h4 class="mt-5 text-2xl font-semibold">Judul Article Edukasi Lorem ipsum dolor sit amet.</h4>
            <p class="text-gray-600 mt-2 mb-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam error similique illo, et ullam...</p>
            <span class="text-sm text-gray-500">7 days ago by Admin</span>
        </div>

        <!-- Popular Articles -->
        <div>
            <h4 class="text-xl font-semibold mb-4">Artikel Populer</h4>
            @for ($i = 0; $i < 5; $i++)
            <div class="flex mb-4">
                <img src="{{ asset('/images/bg/bg.jpg') }}" class="w-32 h-20 rounded object-cover flex-shrink-0" alt="Popular Article">
                <div class="ml-4">
                    <h5 class="font-medium text-sm">Judul artikel populer</h5>
                    <span class="text-xs text-gray-500">2 days ago by Admin</span>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>

<!-- Latest Articles -->
<section class="container mx-auto px-6 py-10">
    <h1 class="text-3xl font-bold mb-8">Artikel Terbaru</h1>
    <div class="grid md:grid-cols-3 gap-8">
        @foreach ($articles as $article)
        <div class="bg-white rounded-lg shadow hover:shadow-lg transition p-4 flex flex-col">
            <div class="rounded overflow-hidden mb-4">
                <img src="{{ asset('/images/bg/bg.jpg') }}" class="w-full h-48 object-cover" alt="Article Image">
            </div>
            <h5 class="text-lg font-semibold mb-2">{{ $article->title }}</h5>
            <p class="text-sm text-gray-600 flex-grow">{{ Str::limit(strip_tags($article->content), 100) }}</p>
            <a href="#" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 text-sm text-center">Baca Selengkapnya</a>
        </div>
        @endforeach
    </div>

    <div class="mt-8">
        {{ $articles->links('pagination::tailwind') }}
    </div>
</section>

@include('components.footer')
@endsection
