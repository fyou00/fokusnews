@extends('components/layout')

@section('konten')
  <div class="container mt-4">
    <div class="row">
    <main class="col-md-8 p-4 bg-light rounded">
      <h1>Selamat Datang di Website Kami</h1>
      <p>Ini adalah contoh website sederhana dengan iklan promosi di samping halaman.</p>
      <p>Gunakan elemen <code>&lt;aside&gt;</code> untuk menampilkan konten tambahan seperti iklan atau informasi
      lainnya.</p>
    </main>
    <aside class="col-md-4 p-4 bg-warning rounded text-center">
      <h3>Promo Spesial!</h3>
      <img src="https://via.placeholder.com/300x250" alt="Iklan Promo" class="img-fluid rounded">
      <p class="mt-2">Dapatkan diskon hingga 50% untuk produk pilihan!</p>
      <a href="#" class="btn btn-danger mt-2">Lihat Promo</a>
    </aside>
    </div>
  </div>
@endsection