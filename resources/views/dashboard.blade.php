@extends('blueprint.master')

@section('title')
    Bank Sampah
@endsection

@section('content')
      <!-- Hero Section -->
  <section class="hero">
    <div class="container hero-content">
      <h1 class="display-4 text-center">Selamat Datang di Bank Sampah</h1>
      <p class="lead text-center">Solusi Ramah Lingkungan untuk Pengelolaan Sampah Anda</p>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h2>Tentang Kami</h2>
        <p class="text-muted">Bank Sampah Bersih adalah lembaga pengelola sampah yang berfokus pada daur ulang dan pengurangan limbah.</p>
      </div>
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('images/daurulang.png') }}" class="img-fluid rounded text-center"  style="margin-left: auto; margin-right: auto;" alt="Tentang Kami">
        </div>
        <div class="col-md-6 d-flex align-items-center">
          <p>Kami berkomitmen untuk menciptakan lingkungan yang lebih bersih dan sehat melalui pengelolaan sampah yang efektif. Bergabunglah bersama kami untuk membuat perbedaan!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2>Layanan Kami</h2>
        <p class="text-muted">Berbagai layanan yang kami tawarkan untuk membantu pengelolaan sampah Anda.</p>
      </div>
      <div class="row">
        <div class="col-md-4 text-center">
          <div class="feature-icon">
            <i class="bi bi-recycle"></i>
          </div>
          <h4>Daur Ulang</h4>
          <p>Mengubah sampah menjadi produk berguna melalui proses daur ulang yang efisien.</p>
        </div>
        <div class="col-md-4 text-center">
          <div class="feature-icon">
            <i class="bi bi-truck"></i>
          </div>
          <h4>Pengumpulan Sampah</h4>
          <p>Layanan pengumpulan sampah terjadwal untuk memastikan sampah Anda dikelola dengan baik.</p>
        </div>
        <div class="col-md-4 text-center">
          <div class="feature-icon">
            <i class="bi bi-people"></i>
          </div>
          <h4>Edukasi Lingkungan</h4>
          <p>Menyelenggarakan program edukasi untuk meningkatkan kesadaran masyarakat tentang pengelolaan sampah.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Statistics Section -->
  <section class="py-5">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-4">
          <h3>500+</h3>
          <p>Anggota Aktif</p>
        </div>
        <div class="col-md-4">
          <h3>1000+</h3>
          <p>Kg Sampah Terolah</p>
        </div>
        <div class="col-md-4">
          <h3>50+</h3>
          <p>Event Edukasi</p>
        </div>
      </div>
    </div>
  </section>

@endsection

<style>
.none{
    display: none;
}

</style>
