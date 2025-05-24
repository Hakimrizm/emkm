@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center px-4 bg-gray-50">
    <div class="w-full max-w-xl bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4 text-center text-gray-800">Verifikasi Email</h2>

        @if (session('resent'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ __('Link verifikasi baru telah dikirim ke alamat email Anda.') }}
            </div>
        @endif

        <p class="text-gray-700 mb-4">
            Sebelum melanjutkan, silakan periksa email Anda untuk tautan verifikasi.
            Jika Anda tidak menerima email tersebut, Anda dapat meminta tautan baru.
        </p>

        <form method="POST" action="{{ route('verification.resend') }}" class="text-center">
            @csrf
            <button type="submit"
                class="inline-block bg-blue-600 text-white font-semibold px-6 py-2 rounded-md hover:bg-blue-700 transition">
                Klik di sini untuk mengirim ulang
            </button>
        </form>
    </div>
</div>
@endsection
