@extends('layouts.app')

@section('content')
@include('components.navbar')

<section id="hero-about" class="hero-section">
    <div class="d-flex justify-content-center align-items-center" style="height: 100%">
        <div class="text-white text-center">
            <h1 style="font-size: 3em;" class="fw-bold">Edukasi</h1>
            <div class="input-group mb-3" style="width: 400px">
                <input type="text" 
                        class="form-control bg-transparent text-white border border-secondary rounded-start white-placeholder" 
                        placeholder="Search" 
                        aria-label="Search" 
                        aria-describedby="search" 
                        style="flex: 2;">
                <button class="btn btn-outline-secondary" type="button" id="search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>

<div class="container" style="padding: 60px 0">
    <div class="row">
        <div class="col-md-8">
            <div style="width: 100%; height: 400px;" class="overflow-hidden rounded">
                <img src="{{ asset('/images/bg/bg.jpg') }}" alt="" width="100%">
            </div>

            <h4 class="mt-3 fw-semibold">Judul Article Edukasi Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
            <p class="text-muted mb-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam error similique illo, et ullam adipisci dolorum nobis asperiores ipsum eius...</p>
            <span class="text-muted">7 days ago by Admin</span>
        </div>

        <div class="col-md-4">
            <h4 class="fw-semibold">Popular Article</h4>

            <div class="mb-3 d-flex align-items-center" style="flex-basis: 0;">
                <div class="rounded overflow-hidden" style="width: 150px; flex-shrink: 0;">
                    <img src="{{ asset('/images/bg/bg.jpg') }}" alt="" style="width: 150px; height: 100px; object-fit: cover;">
                </div>
                <div class="ms-2" style="flex: 1;">
                    <h5 class="fw-semibold m-0">Judul Article Edukasi Lorem ipsum asd jak...</h5>
                    <span class="text-muted mt-2 d-block">2 Days Ago by Admin</span>
                </div>
            </div>
            <div class="mb-3 d-flex align-items-center" style="flex-basis: 0;">
                <div class="rounded overflow-hidden" style="width: 150px; flex-shrink: 0;">
                    <img src="{{ asset('/images/bg/bg.jpg') }}" alt="" style="width: 150px; height: 100px; object-fit: cover;">
                </div>
                <div class="ms-2" style="flex: 1;">
                    <h5 class="fw-semibold m-0">Judul artikel populer</h5>
                    <span class="text-muted mt-2 d-block">2 Days Ago by Admin</span>
                </div>
            </div>
            <div class="mb-3 d-flex align-items-center" style="flex-basis: 0;">
                <div class="rounded overflow-hidden" style="width: 150px; flex-shrink: 0;">
                    <img src="{{ asset('/images/bg/bg.jpg') }}" alt="" style="width: 150px; height: 100px; object-fit: cover;">
                </div>
                <div class="ms-2" style="flex: 1;">
                    <h5 class="fw-semibold m-0">Judul artikel populer</h5>
                    <span class="text-muted mt-2 d-block">2 Days Ago by Admin</span>
                </div>
            </div>
            <div class="mb-3 d-flex align-items-center" style="flex-basis: 0;">
                <div class="rounded overflow-hidden" style="width: 150px; flex-shrink: 0;">
                    <img src="{{ asset('/images/bg/bg.jpg') }}" alt="" style="width: 150px; height: 100px; object-fit: cover;">
                </div>
                <div class="ms-2" style="flex: 1;">
                    <h5 class="fw-semibold m-0">Judul artikel populer</h5>
                    <span class="text-muted mt-2 d-block">2 Days Ago by Admin</span>
                </div>
            </div>
            <div class="mb-3 d-flex align-items-center" style="flex-basis: 0;">
                <div class="rounded overflow-hidden" style="width: 150px; flex-shrink: 0;">
                    <img src="{{ asset('/images/bg/bg.jpg') }}" alt="" style="width: 150px; height: 100px; object-fit: cover;">
                </div>
                <div class="ms-2" style="flex: 1;">
                    <h5 class="fw-semibold m-0">Judul artikel populer</h5>
                    <span class="text-muted mt-2 d-block">2 Days Ago by Admin</span>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="container mt-3" style="padding: 60px 0">
    {{-- Judul --}}
    <div class="mb-5">
        <h1 class="fw-bold">Articles Terbaru</h1>
    </div>

    <div class="row">
        @foreach ($articles as $article)
            <div class="col-md-4 mb-3">
                <div class="h-100 d-flex flex-column justify-content-between">
                    <div class="w-100 overflow-hidden rounded mb-2">
                        <img src="{{ asset('/images/bg/bg.jpg') }}" alt="" width="100%">
                    </div>
                    <h5 class="mb-2">J{{ $article->title }}</h5>
                    <p class="text-muted">{{ Str::limit(strip_tags($article->content), 100) }}</p>
                    <a href="" class="btn btn-outline-info w-100">Baca Selengkapnya</a>
                </div>
            </div>
        @endforeach
    </div>

    {{ $articles->links() }}
</section>

@include('components.footer')
@endsection