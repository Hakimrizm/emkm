@extends('layouts.dashboard')
@section('title', 'Print HPP')

@section('content')

<div class="max-w-4xl mx-auto p-6">
  <div class="bg-white p-8 rounded-lg shadow-xl">
    <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Hasil Perhitungan HPP & Harga Jual</h1>

    <div id="hasilContainer" class="space-y-4 text-gray-700 text-lg"></div>

    <div class="mt-8 flex justify-center">
      <a href="{{ route('hpp.form') }}"
         class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded shadow transition">
        Kembali ke Form
      </a>
    </div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const data = JSON.parse(localStorage.getItem('hpp_result'));
    const container = document.getElementById('hasilContainer');

    if (!data) {
      container.innerHTML = `<p class="text-center text-red-600 font-semibold">Data tidak ditemukan. Silakan isi formulir terlebih dahulu.</p>`;
      return;
    }

    const { total, hppSatuan, hargaJual, ringkasan, jumlahProduksi } = data;
    const profit = hargaJual * jumlahProduksi - total;

    let html = `
      <p><strong>Total HPP:</strong> Rp ${total.toLocaleString('id-ID')}</p>
      <p><strong>HPP per Unit:</strong> Rp ${hppSatuan.toLocaleString('id-ID')}</p>
      <p><strong>Harga Jual per Unit:</strong> Rp ${hargaJual.toLocaleString('id-ID')}</p>
      <p class="text-green-700 font-bold"><strong>Perkiraan Profit:</strong> Rp ${profit.toLocaleString('id-ID')}</p>
      <hr class="my-4">
      <h2 class="text-xl font-semibold mb-2 text-gray-800">Ringkasan Komponen:</h2>
      <ul class="list-disc list-inside space-y-1">`;

    for (const [komponen, nilai] of Object.entries(ringkasan)) {
      html += `<li>${komponen}: Rp ${nilai.toLocaleString('id-ID')}</li>`;
    }

    html += '</ul>';
    container.innerHTML = html;
  });
</script>
@endsection
