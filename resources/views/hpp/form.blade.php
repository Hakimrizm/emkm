@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto p-6">
  <h1 class="text-2xl font-bold mb-4">Form Perhitungan HPP</h1>

  <div class="mb-4">
    <label for="jumlahProduksi" class="block text-sm font-medium mb-1">Jumlah Unit Produksi:</label>
    <input type="number" id="jumlahProduksi" value="1" min="1" class="border rounded px-3 py-2 w-48">
  </div>

  <div id="form-container"></div>

  <div class="mb-6">
    <h2 class="text-lg font-semibold mb-2">Harga Jual</h2>
    <label class="block text-sm font-medium mb-1">Markup (%):</label>
    <input type="number" id="markup" value="30" class="border rounded px-3 py-2 w-32">
  </div>

  <button onclick="hitungHPP()" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded shadow">
    Hitung HPP & Harga Jual
  </button>

  <div class="mt-6 space-y-2 text-lg font-semibold">
    <p>Total HPP: Rp <span id="totalHPP">0</span></p>
    <p>HPP Satuan: Rp <span id="hppSatuan">0</span></p>
    <p>Harga Jual (dengan markup): Rp <span id="hargaJual">0</span></p>
  </div>

  <div id="ringkasan" class="mt-6"></div>
</div>

@verbatim
<script>
const komponen = ['Bahan Baku', 'Tenaga Kerja Langsung', 'Overhead Pabrik'];

function buatForm() {
  const container = document.getElementById('form-container');

  komponen.forEach(nama => {
    const section = document.createElement('div');
    section.classList.add('mb-6');
    section.innerHTML = `
      <h2 class="text-md font-medium mb-2">${nama}</h2>
      <div id="${nama}-items" class="space-y-2 mb-2"></div>
      <button type="button" onclick="tambahItem('${nama}')" class="bg-gray-200 hover:bg-gray-300 px-3 py-1 rounded">+ Tambah Item</button>
    `;
    container.appendChild(section);
    tambahItem(nama);
  });
}

function tambahItem(komponen) {
  const div = document.getElementById(`${komponen}-items`);
  const row = document.createElement('div');
  row.classList.add('flex', 'gap-2', 'item-row');
  row.innerHTML = `
    <input type="text" placeholder="Nama Item" class="border px-2 py-1 rounded w-48">
    <input type="number" placeholder="Qty" min="0" class="border px-2 py-1 rounded w-24">
    <input type="number" placeholder="Harga Satuan" min="0" class="border px-2 py-1 rounded w-36">
    <button type="button" onclick="this.parentElement.remove()" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</button>
  `;
  div.appendChild(row);
}

function hitungHPP() {
  let total = 0;
  const ringkasan = {};

  komponen.forEach(nama => {
    let subtotal = 0;
    const div = document.getElementById(`${nama}-items`);
    const rows = div.querySelectorAll('.item-row');

    rows.forEach(row => {
      const qty = parseFloat(row.children[1].value) || 0;
      const harga = parseFloat(row.children[2].value) || 0;
      subtotal += qty * harga;
    });

    ringkasan[nama] = subtotal;
    total += subtotal;
  });

  const jumlahProduksi = parseFloat(document.getElementById('jumlahProduksi').value) || 1;
  const hppSatuan = total / jumlahProduksi;
  const markup = parseFloat(document.getElementById('markup').value) || 0;
  const hargaJual = hppSatuan * (1 + markup / 100);

  document.getElementById('totalHPP').textContent = total.toLocaleString('id-ID');
  document.getElementById('hppSatuan').textContent = hppSatuan.toLocaleString('id-ID');
  document.getElementById('hargaJual').textContent = hargaJual.toLocaleString('id-ID');

  let html = '<h2 class="text-md font-medium mb-2">Ringkasan Komponen:</h2><ul class="list-disc pl-5">';
  for (let key in ringkasan) {
    html += `<li>${key}: Rp ${ringkasan[key].toLocaleString('id-ID')}</li>`;
  }
  html += '</ul>';
  document.getElementById('ringkasan').innerHTML = html;
}

buatForm();
</script>
@endverbatim
@endsection
