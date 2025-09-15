@extends('layouts')

@section('content')
  <!-- Hero Section -->
  <section class="py-16 md:py-24 bg-gradient-to-b from-white to-gray-50">
    <div class="container mx-auto px-4">
      <div class="flex flex-col lg:flex-row items-center">
        <div class="lg:w-1/2 mb-12 lg:mb-0">
          <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight mb-6">
            Tentang Smart Aquaponik <span class="text-primary">Poliban</span>
          </h1>
          <p class="text-lg text-gray-600 mb-8">
            Kami mengembangkan sistem aquaponik berbasis IoT untuk pertanian berkelanjutan yang ramah lingkungan dan efisien, menggunakan teknologi terkini untuk memastikan kualitas produksi tanaman dan ikan secara optimal.
          </p>
          <div class="flex flex-wrap gap-4">
            <a href="#visi-misi" class="bg-primary hover:bg-primary-600 text-white px-6 py-3 rounded-lg font-medium transition-colors shadow-sm hover:shadow focus:outline-none focus:ring-2 focus:ring-primary/50 focus:ring-offset-2">
              Visi & Misi
            </a>
            <a href="#tim-kami" class="bg-white border border-primary text-primary hover:bg-primary-50 px-6 py-3 rounded-lg font-medium transition-colors shadow-sm hover:shadow focus:outline-none focus:ring-2 focus:ring-primary/50 focus:ring-offset-2">
              Tim Kami
            </a>
          </div>
        </div>
        <div class="lg:w-1/2">
          <div class="relative">
            <img src="{{ asset('images/poliban.png') }}" alt="Smart Aquaponik Poliban" class="rounded-xl shadow-lg w-full max-w-md mx-auto">
            <div class="absolute -bottom-6 -left-6 w-24 h-24 bg-accent rounded-lg transform rotate-6 hidden sm:block"></div>
            <div class="absolute -top-6 -right-6 w-32 h-32 bg-secondary rounded-lg transform -rotate-12 hidden md:block"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Content Sections -->
  <section class="py-16 bg-white" id="visi-misi">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <!-- Vision -->
        <div class="bg-gray-50 rounded-xl p-8 shadow-sm">
          <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-6">
            <i class="fas fa-eye text-primary text-2xl"></i>
          </div>
          <h2 class="text-2xl font-bold text-gray-900 mb-4">Visi</h2>
          <p class="text-gray-600">
            Menjadi pusat inovasi sistem aquaponik berbasis IoT di Indonesia dengan fokus pada pengembangan pertanian berkelanjutan yang ramah lingkungan dan efisien, memberdayakan masyarakat melalui teknologi terkini.
          </p>
        </div>

        <!-- Mission -->
        <div class="bg-gray-50 rounded-xl p-8 shadow-sm">
          <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-6">
            <i class="fas fa-bullseye text-primary text-2xl"></i>
          </div>
          <h2 class="text-2xl font-bold text-gray-900 mb-4">Misi</h2>
          <ul class="space-y-4 text-gray-600">
            <li class="flex items-start">
              <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
              <span>Mengembangkan sistem aquaponik berbasis IoT untuk meningkatkan efisiensi dan produktivitas pertanian.</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
              <span>Memberikan solusi pertanian berkelanjutan yang hemat air dan energi.</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
              <span>Meningkatkan kualitas hidup masyarakat melalui akses teknologi pertanian modern.</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
              <span>Menyediakan edukasi dan pelatihan tentang sistem aquaponik kepada masyarakat luas.</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section class="py-16 bg-gray-50" id="tim-kami">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Tim Kami</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
          Tim profesional yang berdedikasi dalam pengembangan sistem aquaponik berbasis IoT untuk masa depan pertanian yang lebih baik.
        </p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Team Member 1 -->
        <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow">
          <div class="h-56 bg-gradient-to-r from-primary to-accent relative">
            <div class="absolute inset-0 bg-black/20 flex items-end">
              <div class="p-6 w-full">
                <h3 class="text-white text-xl font-semibold">Muhammad Rasyad</h3>
                <p class="text-primary-100">Web Developer & AI Specialist</p>
              </div>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4">
              Web developer lulusan program GoTo x Komdigi x Alibaba Gen AI, dengan keahlian dalam pengembangan aplikasi web dan integrasi AI untuk sistem aquaponik.
            </p>
            <div class="flex space-x-4">
              <a href="#" class="text-primary hover:text-primary-600 transition-colors">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="#" class="text-primary hover:text-primary-600 transition-colors">
                <i class="fab fa-github"></i>
              </a>
              <a href="#" class="text-primary hover:text-primary-600 transition-colors">
                <i class="fab fa-twitter"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Team Member 2 -->
        <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow">
          <div class="h-56 bg-gradient-to-r from-primary to-accent relative">
            <div class="absolute inset-0 bg-black/20 flex items-end">
              <div class="p-6 w-full">
                <h3 class="text-white text-xl font-semibold">Bagus Setiawan</h3>
                <p class="text-primary-100">IoT & Hardware Engineer</p>
              </div>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4">
              Spesialis hardware dan IoT dengan pengalaman dalam desain sistem embedded untuk monitoring parameter kualitas air secara real-time.
            </p>
            <div class="flex space-x-4">
              <a href="#" class="text-primary hover:text-primary-600 transition-colors">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="#" class="text-primary hover:text-primary-600 transition-colors">
                <i class="fab fa-github"></i>
              </a>
              <a href="#" class="text-primary hover:text-primary-600 transition-colors">
                <i class="fab fa-twitter"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Team Member 3 -->
        <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow">
          <div class="h-56 bg-gradient-to-r from-primary to-accent relative">
            <div class="absolute inset-0 bg-black/20 flex items-end">
              <div class="p-6 w-full">
                <h3 class="text-white text-xl font-semibold">Muhammad Raflli Ramadhan</h3>
                <p class="text-primary-100">Data Analyst & System Architect</p>
              </div>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4">
              Ahli analisis data dan arsitektur sistem dengan pengalaman dalam pengolahan data sensor IoT dan optimasi performa sistem aquaponik.
            </p>
            <div class="flex space-x-4">
              <a href="#" class="text-primary hover:text-primary-600 transition-colors">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="#" class="text-primary hover:text-primary-600 transition-colors">
                <i class="fab fa-github"></i>
              </a>
              <a href="#" class="text-primary hover:text-primary-600 transition-colors">
                <i class="fab fa-twitter"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Technology Section -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Teknologi Yang Kami Gunakan</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
          Menggunakan teknologi terkini untuk memastikan sistem aquaponik berjalan secara efisien dan dapat dipantau secara real-time.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
        <div class="bg-gray-50 rounded-xl p-8 shadow-sm">
          <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-6">
            <i class="fas fa-microchip text-primary text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">IoT Sensors</h3>
          <p class="text-gray-600 mb-4">
            Sensor canggih untuk memantau parameter kualitas air seperti suhu, pH, kadar oksigen terlarut, dan konduktivitas listrik (EC) secara real-time.
          </p>
          <ul class="space-y-2 text-gray-600">
            <li class="flex items-start">
              <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
              <span>Suhu Air</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
              <span>pH Meter</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
              <span>DO Sensor (Dissolved Oxygen)</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
              <span>EC Meter</span>
            </li>
          </ul>
        </div>

        <div class="bg-gray-50 rounded-xl p-8 shadow-sm">
          <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-6">
            <i class="fas fa-cloud text-primary text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Cloud Integration</h3>
          <p class="text-gray-600 mb-4">
            Integrasi cloud untuk penyimpanan data, analisis, dan akses dashboard monitoring dari mana saja dan kapan saja.
          </p>
          <ul class="space-y-2 text-gray-600">
            <li class="flex items-start">
              <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
              <span>Data Storage</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
              <span>Real-time Dashboard</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
              <span>Alert Notifications</span>
            </li>
            <li class="flex items-start">
              <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
              <span>Data Analytics</span>
            </li>
          </ul>
        </div>
      </div>

      <div class="bg-gradient-to-r from-primary to-accent rounded-xl p-8 md:p-12 text-white">
        <div class="flex flex-col md:flex-row items-center">
          <div class="md:w-2/3 mb-6 md:mb-0 md:pr-8">
            <h3 class="text-2xl md:text-3xl font-bold mb-4">Inovasi Pertanian Berkelanjutan</h3>
            <p class="text-white/90">
              Dengan teknologi IoT dan cloud, kami menciptakan sistem aquaponik yang efisien, mudah dipantau, dan ramah lingkungan. Solusi ideal untuk petani modern yang ingin meningkatkan produktivitas dengan pengelolaan sumber daya yang optimal.
            </p>
          </div>
          <div class="md:w-1/3 text-center md:text-right">
            <a href="/contact" class="inline-block bg-white text-primary px-6 py-3 rounded-lg font-medium transition-all hover:shadow-lg hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-primary">
              Hubungi Kami
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Clients & Partners -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Klien & Mitra Kami</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
          Telah dipercaya oleh berbagai institusi dan petani modern di seluruh Indonesia.
        </p>
      </div>

      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-4 gap-8 items-center">
        <div class="flex justify-center">
          <img src="{{ asset('images/kemenristek.png') }}" alt="Kemenristek" class="max-h-12 opacity-70 grayscale hover:grayscale-0 transition-all">
        </div>
        <div class="flex justify-center">
          <img src="{{ asset('images/poliban.png') }}" alt="Poliban" class="max-h-12 opacity-70 grayscale hover:grayscale-0 transition-all">
        </div>
        <div class="flex justify-center">
          <img src="{{ asset('images/it.png') }}" alt="IT Center" class="max-h-12 opacity-70 grayscale hover:grayscale-0 transition-all">
        </div>
        <div class="flex justify-center">
          <img src="{{ asset('images/banjarmasin.png') }}" alt="Banjarmasin City" class="max-h-12 opacity-70 grayscale hover:grayscale-0 transition-all">
        </div>
      </div>
    </div>
  </section>
  @endsection