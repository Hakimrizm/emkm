@extends('layouts.app')

@section('content')

@include('components.navbar')

<div id="hero" class="d-flex align-items-center hero-section">
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
                    href="{{ route('register') }}"
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
<section class="container py-5" id="tentang-kami">
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
            <a href="/tentang-kami" class="text-center">Selengkapnya <span>>></span></a>
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

    <div id="testimonialCarousel" class="carousel slide position-relative" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Item 1 -->
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti quod quaerat id, in aliquam saepe sed doloremque maiores magnam quo qui officiis quis placeat quia nulla dolorem nostrum cupiditate fugiat.</p>
                                <div class="d-flex align-items-center">
                                    <div style="height: 70px; width: 70px;" class="overflow-hidden rounded-circle me-3">
                                        <img src="{{ asset('/images/faces/5.jpg') }}" alt="" width="100%" />
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span>Rina Addrina</span>
                                        <span class="text-muted">CEO OF warung sembako</span>
                                    </div>
                                    <div class="d-flex align-items-center ms-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-star-fill text-warning me-1" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                            />
                                        </svg>
                                        <span class="text-muted">4/5</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Item 2 -->
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis, veritatis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci voluptas corrupti neque, laborum beatae ut?</p>
                                <div class="d-flex align-items-center">
                                    <div style="height: 70px; width: 70px;" class="overflow-hidden rounded-circle me-3">
                                        <img src="{{ asset('/images/faces/1.jpg') }}" alt="" width="100%" />
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span>Riki Adrino</span>
                                        <span class="text-muted">CEO OF Mamang Cuanki</span>
                                    </div>
                                    <div class="d-flex align-items-center ms-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-star-fill text-warning me-1" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                            />
                                        </svg>
                                        <span class="text-muted">4/5</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Tombol kiri -->
        <button class="btn btn-light border position-absolute start-0 top-50 translate-middle-y" style="width: 50px; height: 50px;" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
            </svg>
        </button>
    
        <!-- Tombol kanan -->
        <button class="btn btn-light border position-absolute end-0 top-50 translate-middle-y" style="width: 50px; height: 50px;" data-bs-target="#testimonialCarousel" data-bs-slide="next">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
            </svg>
        </button>
    </div>
</section>

<section class="container py-5">
    {{-- Judul --}}
    <div class="text-center mb-5">
        <h1 class="fw-bold">Frequently Asked Questions</h1>
    </div>

    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Pertanyaan #1
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the first item’s accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as
                    well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It’s also worth noting that just about any HTML can go within the
                    <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Pertanyaan #2
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the second item’s accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as
                    well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It’s also worth noting that just about any HTML can go within the
                    <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Pertanyaan #3
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the third item’s accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as
                    well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It’s also worth noting that just about any HTML can go within the
                    <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>
        </div>
    </div>    
</section>

@include('components.footer')
@endsection
