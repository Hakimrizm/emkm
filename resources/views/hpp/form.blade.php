@extends('layouts.app')

@section('content')

@include('components.navbar')

<div class="container py-5">
  <h1 class="mb-4">Form Perhitungan HPP</h1>

  <div class="mb-3">
    <label for="jumlahProduksi" class="form-label">Jumlah Unit Produksi:</label>
    <input type="number" id="jumlahProduksi" value="1" min="1" class="form-control w-auto">
  </div>

  <div id="form-container"></div>

  <div class="mb-4">
    <h4>Harga Jual</h4>
    <label for="markup" class="form-label">Markup (%):</label>
    <input type="number" id="markup" value="30" class="form-control w-auto">
  </div>

  <button onclick="hitungHPP()" class="btn btn-primary mb-4">
    Hitung HPP & Harga Jual
  </button>

  <div class="border p-3 mb-4 bg-light">
    <p class="fw-bold">Total HPP: Rp <span id="totalHPP">0</span></p>
    <p class="fw-bold">HPP Satuan: Rp <span id="hppSatuan">0</span></p>
    <p class="fw-bold">Harga Jual (dengan markup): Rp <span id="hargaJual">0</span></p>
  </div>

  <div id="ringkasan"></div>
</div>

@verbatim
<script>
const komponen = ['Bahan Baku', 'Tenaga Kerja Langsung', 'Overhead Pabrik'];

function buatForm() {
  const container = document.getElementById('form-container');

  komponen.forEach(nama => {
    const section = document.createElement('div');
    section.classList.add('mb-4');
    section.innerHTML = `
      <h4>${nama}</h4>
      <div id="${nama}-items" class="mb-2"></div>
      <button type="button" onclick="tambahItem('${nama}')" class="btn btn-outline-secondary btn-sm">+ Tambah Item</button>
    `;
    container.appendChild(section);
    tambahItem(nama); // Tambahkan 1 item default
  });
}

function tambahItem(komponen) {
  const div = document.getElementById(`${komponen}-items`);
  const row = document.createElement('div');
  row.classList.add('row', 'g-2', 'mb-2', 'align-items-center', 'item-row');
  row.innerHTML = `
    <div class="col-md-3">
      <input type="text" class="form-control" placeholder="Nama Item">
    </div>
    <div class="col-md-2">
      <input type="number" class="form-control" placeholder="Qty" min="0">
    </div>
    <div class="col-md-3">
      <input type="number" class="form-control" placeholder="Harga Satuan" min="0">
    </div>
    <div class="col-md-2">
      <button type="button" class="btn btn-danger" onclick="this.closest('.item-row').remove()">Hapus</button>
    </div>
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
      const qty = parseFloat(row.children[1].children[0].value) || 0;
      const harga = parseFloat(row.children[2].children[0].value) || 0;
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

  let html = '<h5>Ringkasan Komponen:</h5><ul class="list-group">';
  for (let key in ringkasan) {
    html += `<li class="list-group-item d-flex justify-content-between">
               <span>${key}</span>
               <span>Rp ${ringkasan[key].toLocaleString('id-ID')}</span>
             </li>`;
  }
  html += '</ul>';
  document.getElementById('ringkasan').innerHTML = html;
}

buatForm();
</script>
@endverbatim
@endsection