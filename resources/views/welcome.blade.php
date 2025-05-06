@extends('layouts.app')

@section('content')

@include('components.navbar')

<div id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 style="font-size: 2.2em; margin-bottom: 20px;" class="text-white">
                    Siap Melesatkan Bisnismu?
                </h2>
                <p style="font-size: 1.2em; margin-bottom: 30px;" class="text-white">
                    Gabung bersama E-MKM dan mulai perjalanan usahamu ke level berikutnya.
                    Mudah & cepat untuk kamu, Sang Pengusaha. Karena Semua Pengusaha Hebat Pernah Jadi Pemula.
                </p>
                <a class="btn btn-info"
                    href="/register"
                    style="
                        color: white;
                        padding: 15px 30px;
                        font-size: 1em;
                        border-radius: 5px;
                        text-decoration: none;
                    "
                >
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </div>
</div>

{{-- Visi & Misi --}}
<section class="container py-5">
    {{-- Judul --}}
    <div class="text-center mb-5">
        <h1 class="fw-bold">Tentang Kami</h1>
        <p class="lead">Kenali lebih dekat misi kami membantu UMKM berkembang melalui teknologi.</p>
    </div>

    <div class="row mb-5">
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-body">
                    <h3 class="fw-semibold">Visi</h3>
                    <p>Mewujudkan UMKM Indonesia yang melek digital dan cerdas dalam mengelola keuangan usaha.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-body">
                    <h3 class="fw-semibold">Misi</h3>
                    <ul class="list-group">
                        <li class="list-group-item">Menyediakan platform pencatatan keuangan yang mudah digunakan.</li>
                        <li class="list-group-item">Memberikan edukasi finansial secara praktis dan relevan.</li>
                        <li class="list-group-item">Memberdayakan UMKM agar lebih mandiri dan berdaya saing.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            <a href="" class="text-center">Selengkapnya <span>>></span></a>
        </div>
    </div>
    {{-- Tentang Aplikasi --}}
    {{-- <div class="mb-5">
        <h3 class="fw-semibold">Apa itu E-MKM?</h3>
        <p>
            <strong>E-MKM (Electronic Mitra Kecil Menengah)</strong> adalah aplikasi pencatatan dan edukasi keuangan
            yang dirancang khusus untuk pelaku UMKM di Indonesia. Dengan E-MKM, Anda bisa mencatat pemasukan,
            pengeluaran, melihat laporan, dan belajar manajemen keuangan — semua dalam satu aplikasi.
        </p>
    </div> --}}
</section>

{{-- Fitur Unggulan --}}
<section style="background-color: #d5dee6">
    <div class="container py-5">
        {{-- Judul --}}
        <div class="text-center mb-5">
            <h1 class="fw-bold">Fitur</h1>
            <p class="lead">Pelajari lebih dekat fitur aplikasi kami membantu UMKM berkembang melalui teknologi.</p>
        </div>
        <div class="row text-center mb-5 justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <div class="m-auto mb-3 text-white bg-info rounded d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
                            </svg>
                        </div>
                        <h5 class="card-title fw-bold">Catat Transaksi Mudah</h5>
                        <p class="card-text">Tambah pemasukan dan pengeluaran harian bisnismu tanpa ribet.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <div class="m-auto mb-3 text-white bg-info rounded d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bar-chart-steps" viewBox="0 0 16 16">
                                <path d="M.5 0a.5.5 0 0 1 .5.5v15a.5.5 0 0 1-1 0V.5A.5.5 0 0 1 .5 0M2 1.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm2 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1-.5-.5zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </div>
                        <h5 class="card-title fw-bold">Lihat Laporan Otomatis</h5>
                        <p class="card-text">Laporan keuangan otomatis harian, mingguan, dan bulanan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <div class="m-auto mb-3 text-white bg-info rounded d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-lightbulb-fill" viewBox="0 0 16 16">
                                <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.46-.302l-.761-1.77a2 2 0 0 0-.453-.618A5.98 5.98 0 0 1 2 6m3 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1-.5-.5"/>
                            </svg>
                        </div>
                        <h5 class="card-title fw-bold">Belajar Manajemen Keuangan</h5>
                        <p class="card-text">Edukasi praktis untuk mengelola bisnis lebih profesional.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Testimoni --}}
<section class="container py-5">
    {{-- Judul --}}
    <div class="text-center mb-5">
        <h1 class="fw-bold">Apa kata pengguna?</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, quae architecto. Rem, rerum neque natus voluptate quaerat, delectus incidunt doloribus eum veritatis maxime nam iste repudiandae obcaecati tenetur quos quasi?</p>
                    <div class="d-flex align-items-center">
                        <div style="height: 70px; width: 70px" class="overflow-hidden rounded-circle me-3">
                            <img src="{{ asset('/images/faces/5.jpg') }}" alt="" width="100%">
                        </div>
                        <div  class="d-flex flex-column">
                            <span>Rina Addrina</span>
                            <span class="text-muted">CEO OF warung sembako</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="bg-info p-3 text-white">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="m-0">Ikuti kami di social media</h5>
                <div class="m-0">
                    {{-- Instagram --}}
                    <a href="" class="text-white text-decoration-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                        </svg>
                    </a>
                    {{-- Tiktok --}}
                    <a href="" class="text-white text-decoration-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-tiktok ms-3" viewBox="0 0 16 16">
                            <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
                        </svg>
                    </a>
                    {{-- X --}}
                    <a href="" class="text-white text-decoration-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter-x ms-3" viewBox="0 0 16 16">
                            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color: #d5dee6">
        <div class="container py-4">
            <div class="row">
                {{-- Deskripsi Aplikasi --}}
                <div class="col-md-4 mb-4">
                    <h5>E-MKM</h5>
                    <p class="text-muted">Aplikasi pencatatan keuangan dan edukasi bisnis untuk UMKM Indonesia.</p>
                </div>
    
                {{-- Navigasi Cepat --}}
                <div class="col-md-4 mb-4">
                    <h5>Navigasi</h5>
                    <ul class="list-unstyled">
                        <li><a href="/" class="text-muted text-decoration-none">Beranda</a></li>
                        <li><a href="/" class="text-muted text-decoration-none">Tentang Kami</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Edukasi</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Layanan</a></li>
                    </ul>
                </div>
    
                {{-- Kontak --}}
                <div class="col-md-4 mb-4">
                    <h5>Kontak</h5>
                    <p class="mb-2 text-muted">Email: support@emkm.id</p>
                    <p class="mb-2 text-muted">WhatsApp: +62 812-3456-7890</p>
                </div>
            </div>
    
            {{-- Copyright --}}
        </div>
        <div class="bg-info p-3 text-white text-center mt-4">
            <h6 class="m-0">&copy; {{ date('Y') }} E-MKM. All rights reserved.</h6>
        </div>
    </div>
</footer>
@endsection
