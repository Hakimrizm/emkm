@extends('layouts.app')

@section('content')
@include('components.navbar')

<div class="max-w-5xl mx-auto p-6 pt-32">
  <div class="bg-white p-8 shadow-xl rounded-lg">
    <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Form Perhitungan HPP Produk</h1>

    {{-- Jumlah Produksi --}}
    <div class="mb-6">
      <label for="jumlahProduksi" class="block text-sm font-medium text-gray-700 mb-1">Jumlah Unit Produksi (maksimal 500):</label>
      <input type="number" id="jumlahProduksi" value="1" min="1" max="500" class="form-input w-48">
    </div>

    {{-- Komponen Dinamis --}}
    <div id="form-container"></div>

    {{-- Markup --}}
    <div class="mb-6">
      <h2 class="text-lg font-semibold mb-2 text-gray-800">Harga Jual</h2>

      <label class="block text-sm font-medium text-gray-700 mb-1">Kategori Produk:</label>
      <select id="kategoriMarkup" onchange="setMarkupRekomendasi()" class="form-select w-64 mb-3">
        <option value="">-- Pilih Kategori --</option>
        <option value="makanan_berat">Makanan Berat (100% – 200%)</option>
        <option value="camilan">Camilan / Snack (150% – 300%)</option>
        <option value="minuman">Minuman (200% – 400%)</option>
        <option value="frozen">Frozen Food (30% – 100%)</option>
        <option value="roti">Roti / Kue (100% – 250%)</option>
        <option value="catering">Catering / Pesanan Khusus (50% – 150%)</option>
      </select>

      <label class="block text-sm font-medium text-gray-700 mb-1">Markup (%):</label>
      <input type="number" id="markup" value="30" class="form-input w-32">
      <p class="text-sm text-gray-500 mt-1" id="markupRekomendasi"></p>
    </div>

    {{-- Tombol --}}
    <button onclick="hitungHPP()" class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-5 py-2 rounded shadow transition duration-200">
      Hitung HPP & Harga Jual
    </button>
  </div>
</div>

@verbatim
<script>
const komponen = ['Bahan Baku', 'Tenaga Kerja Langsung', 'Overhead Pabrik'];
const satuan = ['pcs', 'kg', 'liter', 'meter', 'bungkus', 'unit'];
const MAX_ITEM = 30;

// Set rekomendasi markup berdasarkan kategori
function setMarkupRekomendasi() {
  const kategori = document.getElementById('kategoriMarkup').value;
  const markupInput = document.getElementById('markup');
  const rekomendasi = document.getElementById('markupRekomendasi');

  let info = '';
  let defaultMarkup = 30;

  switch (kategori) {
    case 'makanan_berat':
      info = 'Rekomendasi: 100% – 200%';
      defaultMarkup = 150;
      break;
    case 'camilan':
      info = 'Rekomendasi: 150% – 300%';
      defaultMarkup = 200;
      break;
    case 'minuman':
      info = 'Rekomendasi: 200% – 400%';
      defaultMarkup = 250;
      break;
    case 'frozen':
      info = 'Rekomendasi: 30% – 100%';
      defaultMarkup = 50;
      break;
    case 'roti':
      info = 'Rekomendasi: 100% – 250%';
      defaultMarkup = 150;
      break;
    case 'catering':
      info = 'Rekomendasi: 50% – 150%';
      defaultMarkup = 100;
      break;
    default:
      info = '';
      defaultMarkup = 30;
  }

  markupInput.value = defaultMarkup;
  rekomendasi.textContent = info;
}

// Buat form awal
function buatForm() {
  const container = document.getElementById('form-container');
  container.innerHTML = '';

  komponen.forEach(nama => {
    container.insertAdjacentHTML('beforeend', `
      <div class="mb-6">
        <h2 class="text-md font-medium mb-2 text-gray-800">${nama}</h2>
        <div id="${nama}-items" class="space-y-2 mb-2"></div>
        <button type="button" onclick="tambahItem('${nama}')" class="bg-gray-200 hover:bg-gray-300 px-3 py-1 rounded text-sm">+ Tambah Item</button>
      </div>
    `);
    if (nama === 'Bahan Baku') tambahItem(nama); // Wajib ada
  });
}

// Tambah item
function tambahItem(komponen) {
  const div = document.getElementById(`${komponen}-items`);
  if (div.children.length >= MAX_ITEM) return alert(`Maksimal ${MAX_ITEM} item untuk ${komponen}`);

  let satuanInput = '';
  if (komponen === 'Bahan Baku') {
    satuanInput = `<select class="border rounded px-2 py-2 text-sm text-gray-600">
      ${satuan.map(s => `<option value="${s}">${s}</option>`).join('')}
    </select>`;
  } else if (komponen === 'Tenaga Kerja Langsung') {
    satuanInput = `<span class="text-sm text-gray-500">/ orang</span>`;
  } else if (komponen === 'Overhead Pabrik') {
    satuanInput = `<span class="text-sm text-gray-500">/ buah</span>`;
  }

  div.insertAdjacentHTML('beforeend', `
    <div class="flex gap-2 item-row items-center">
      <input type="text" placeholder="Nama Item" class="border px-3 py-2 rounded w-48">
      <input type="number" placeholder="Qty" min="0" class="border px-3 py-2 rounded w-24">
      ${satuanInput}
      <input type="text" placeholder="Harga Satuan" class="border px-3 py-2 rounded w-36 harga">
      <button type="button" onclick="this.parentElement.remove()" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Hapus</button>
    </div>
  `);
}

// Format input rupiah
function formatRupiah(input) {
  let angka = input.value.replace(/[^0-9]/g, '');
  angka = new Intl.NumberFormat('id-ID').format(angka);
  input.value = angka ? `Rp ${angka}` : '';
}

// Hitung HPP & Harga Jual
function hitungHPP() {
  const jumlah = parseFloat(document.getElementById('jumlahProduksi').value) || 0;
  const markup = parseFloat(document.getElementById('markup').value) || 0;
  const namaUser = document.querySelector('meta[name="user-name"]')?.content || "Pengguna";

  if (jumlah <= 0 || jumlah > 500) {
    alert("Jumlah produksi tidak valid (maksimal 500)");
    return;
  }

  const bahanRows = document.querySelectorAll('#Bahan\\ Baku-items .item-row');
  if (bahanRows.length === 0) {
    alert(`Halo ${namaUser}, mohon isi setidaknya satu bahan baku!`);
    return;
  }

  let total = 0, ringkasan = {};

  komponen.forEach(nama => {
    const div = document.getElementById(`${nama}-items`);
    let subtotal = 0;
    div.querySelectorAll('.item-row').forEach(row => {
      const qty = parseFloat(row.querySelectorAll('input')[1]?.value.replace(/\D/g, '')) || 0;
      const hargaInput = row.querySelectorAll('input')[2];
      const hargaValue = hargaInput?.value?.replace(/\D/g, '') || 0;
      subtotal += qty * parseFloat(hargaValue);
    });
    ringkasan[nama] = subtotal;
    total += subtotal;
  });

  const hppSatuan = total / jumlah;
  const hargaJual = hppSatuan * (1 + markup / 100);

  localStorage.setItem('hpp_result', JSON.stringify({
    total, hppSatuan, hargaJual, ringkasan, jumlahProduksi: jumlah
  }));

  window.location.href = "/hpp/hasil";
}

// Format harga satuan otomatis ke rupiah
document.addEventListener('input', e => {
  if (e.target.matches('.harga')) formatRupiah(e.target);
});

buatForm();
</script>
@endverbatim
@endsection
