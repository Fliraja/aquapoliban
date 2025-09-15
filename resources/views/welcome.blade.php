@extends('layouts')

<!-- Remove local CSS/JS references and optimize CDN usage -->
@push('css')
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
@endpush

@push('scripts')
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      AOS.init({
        duration: 800,
        once: true
      });
    });
  </script>
@endpush

@section('content')
<!-- Hero Section with Enhanced Animation -->
<section class="min-h-screen flex items-center bg-fixed bg-center bg-cover py-20 relative will-change-transform" 
        style="background-image: url('https://cdn1.ozone.ru/s3/multimedia-j/6305747803.jpg')">
  <div class="absolute inset-0 bg-gradient-to-b from-gray-900/80 to-gray-900/60"></div>
  
  <div class="container mx-auto px-4 lg:px-8 grid md:grid-cols-2 gap-12 items-center">
      <!-- Text Content -->
      <div data-aos="fade-right" class="relative z-10">
        <h1 class="text-4xl md:text-6xl font-serif font-bold text-gray-100 mb-4 tracking-tight">
          Sistem Aquaponik Modern
          <span class="text-green-400">Berbasis IoT</span>
        </h1>
        <p class="text-lg md:text-xl font-serif text-gray-200 mb-8 leading-relaxed">
          Pantau dan atur seluruh parameter sistem aquaponik Anda secara real-time melalui dashboard intuitif,  
          dari kualitas air hingga nutrisi tanaman dengan teknologi terkini.
        </p>
        <a href="#features"
           class="inline-block bg-gradient-to-r from-green-500 to-green-600 text-white font-semibold px-8 py-3 rounded-full shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
          <i class="fas fa-rocket mr-2"></i> Pelajari Fitur
        </a>
      </div>

      <!-- Image Section with Enhanced Effects -->
      <div class="relative group" data-aos="fade-left">
        <!-- Container dengan rasio 1:1 -->
<div class="relative group w-full" style="padding-top: 100%;" data-aos="fade-left">
  <!-- Efek blur dan warna -->
  <div class="absolute inset-0 bg-gradient-to-r from-green-500 to-green-600 rounded-xl blur opacity-25 group-hover:opacity-75 transition duration-1000"></div>

  <!-- Gambar dengan rasio 1:1 -->
  <img src="https://aquapoliban.projek.me/images/Selada.jpeg"
       alt="Diagram sistem aquaponik"
       class="absolute inset-0 rounded-xl shadow-2xl w-full h-full object-cover transform group-hover:scale-105 transition duration-700">
</div>


        <!-- Floating badge with enhanced animation -->
        <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-lg shadow-xl flex items-center space-x-3 animate-pulse">
          <div class="bg-green-500/10 p-3 rounded-full">
            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 10V3L4 14h7v7l9-11h-7z"/>
            </svg>
          </div>
          <div>
            <p class="text-lg font-bold text-gray-800">+5.2%</p>
            <p class="text-sm text-gray-600">Efisiensi Produksi</p>
          </div>
        </div>
      </div>
    </div>
</section>

{{-- Enhanced About Section with Card Flip Animation --}}
<section id="about-poliban" class="py-20 bg-gradient-to-b from-gray-50 to-white">
  <div class="container mx-auto px-4 lg:px-8">
    <div class="max-w-4xl mx-auto">
      <div class="bg-white rounded-2xl shadow-xl overflow-hidden transform transition-all duration-500 hover:scale-[1.02]">
        <div class="p-8 md:p-12">
          <h2 class="text-3xl md:text-4xl font-serif font-bold mb-6 text-gray-800 border-l-4 border-green-500 pl-4">Smart Aquaponik Poliban</h2>
          <p class="text-gray-600 leading-relaxed mb-8">
            Smart Aquaponik Poliban adalah inovasi sistem aquaponik berbasis Internet of Things (IoT) yang dikembangkan oleh Mahasiswa dari Politeknik Negeri Banjarmasin. Sistem ini dirancang untuk meningkatkan efisiensi produksi tanaman dan ikan dengan memanfaatkan teknologi modern agar mempermudah dalam memonitoring kualitas air dan menciptakan lingkungan yang modern.
          </p>
          
          <div class="grid md:grid-cols-2 gap-8 mt-8">
            <div class="bg-green-50 p-6 rounded-xl transition-all duration-300 hover:shadow-md">
              <h3 class="text-xl font-bold mb-3 text-green-700 flex items-center">
                <i class="fas fa-bullseye mr-2"></i> Misi
              </h3>
              <p class="text-gray-700 leading-relaxed">
                Misi kami adalah untuk mengembangkan teknologi pertanian yang berkelanjutan dan inovatif, serta membantu petani untuk memantau kualitas air dan menciptakan lingkungan yang modern terkhusus untuk di lingkungan petani budidaya tanaman hidroponik dan budidaya ikan.
              </p>
            </div>
            
            <div class="bg-blue-50 p-6 rounded-xl transition-all duration-300 hover:shadow-md">
              <h3 class="text-xl font-bold mb-3 text-blue-700 flex items-center">
                <i class="fas fa-eye mr-2"></i> Visi
              </h3>
              <p class="text-gray-700 leading-relaxed">
                Visi kami adalah menjadi contoh untuk perkembangan teknologi pertanian yang berkelanjutan dan inovatif, serta membantu petani untuk memantau kualitas air dan menciptakan lingkungan yang modern.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Features Section -->
<section id="features" class="py-20 bg-gray-50">
  <div class="container mx-auto px-4">
    


    <style>
        .feature-card {
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        }
        
        .feature-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        
        .icon-container {
            transition: all 0.3s ease;
        }
        
        .feature-card:hover .icon-container {
            transform: scale(1.1) rotate(5deg);
        }
        
        .gradient-bar {
            height: 4px;
            background: linear-gradient(90deg, var(--color-start), var(--color-end));
            transition: height 0.3s ease;
        }
        
        .feature-card:hover .gradient-bar {
            height: 6px;
        }
        
        .bg-animated {
            background: linear-gradient(-45deg, #f8fafc, #f1f5f9, #e2e8f0, #f8fafc);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }
        
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .pulse-ring {
            animation: pulse-ring 2s cubic-bezier(0.455, 0.03, 0.515, 0.955) infinite;
        }
        
        @keyframes pulse-ring {
            0% {
                transform: scale(0.8);
                opacity: 1;
            }
            100% {
                transform: scale(1.2);
                opacity: 0;
            }
        }
    </style>
     <section class="py-20 px-4">
        <div class="max-w-7xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                    Fitur <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Unggulan</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Teknologi IoT terdepan untuk monitoring dan kontrol kualitas air secara komprehensif
                </p>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto mt-6 rounded-full"></div>
            </div>
            
            <!-- Feature Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
                <!-- Feature Card 1: IoT Monitoring -->
                <div class="feature-card bg-white rounded-2xl shadow-xl overflow-hidden relative group">
                    <div class="absolute inset-0 bg-gradient-to-br from-green-50 to-green-100 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative p-8">
                        <div class="icon-container w-16 h-16 bg-gradient-to-br from-green-100 to-green-200 rounded-full flex items-center justify-center mb-6 relative">
                            <div class="absolute inset-0 bg-green-200 rounded-full pulse-ring opacity-0 group-hover:opacity-75"></div>
                            <i class="fas fa-microchip text-green-600 text-2xl relative z-10"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-800">Monitoring IoT</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Pantau parameter air secara real-time seperti pH, suhu, TDS, dan kadar oksigen terlarut dengan sensor presisi tinggi.
                        </p>
                        <div class="flex items-center text-green-600 font-semibold group-hover:text-green-700 transition-colors">
                            <span class="mr-2">Real-time Data</span>
                            <i class="fas fa-arrow-right transform group-hover:translate-x-2 transition-transform"></i>
                        </div>
                    </div>
                    <div class="gradient-bar" style="--color-start: #10b981; --color-end: #059669;"></div>
                </div>

                <!-- Feature Card 2: Data Analysis -->
                <div class="feature-card bg-white rounded-2xl shadow-xl overflow-hidden relative group">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-blue-100 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative p-8">
                        <div class="icon-container w-16 h-16 bg-gradient-to-br from-blue-100 to-blue-200 rounded-full flex items-center justify-center mb-6 relative">
                            <div class="absolute inset-0 bg-blue-200 rounded-full pulse-ring opacity-0 group-hover:opacity-75"></div>
                            <i class="fas fa-chart-line text-blue-600 text-2xl relative z-10"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-800">Analisis Data</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Dashboard analitik canggih untuk memantau tren parameter air, prediksi, dan laporan komprehensif dalam periode tertentu.
                        </p>
                        <div class="flex items-center text-blue-600 font-semibold group-hover:text-blue-700 transition-colors">
                            <span class="mr-2">Smart Analytics</span>
                            <i class="fas fa-arrow-right transform group-hover:translate-x-2 transition-transform"></i>
                        </div>
                    </div>
                    <div class="gradient-bar" style="--color-start: #3b82f6; --color-end: #2563eb;"></div>
                </div>

                <!-- Feature Card 3: Automatic Control -->
                <div class="feature-card bg-white rounded-2xl shadow-xl overflow-hidden relative group">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-50 to-purple-100 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative p-8">
                        <div class="icon-container w-16 h-16 bg-gradient-to-br from-purple-100 to-purple-200 rounded-full flex items-center justify-center mb-6 relative">
                            <div class="absolute inset-0 bg-purple-200 rounded-full pulse-ring opacity-0 group-hover:opacity-75"></div>
                            <i class="fas fa-cogs text-purple-600 text-2xl relative z-10"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-800">Kontrol Otomatis</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Sistem kontrol otomatis cerdas untuk pompa, aerator, dan perangkat lain yang menjaga keseimbangan optimal secara mandiri.
                        </p>
                        <div class="flex items-center text-purple-600 font-semibold group-hover:text-purple-700 transition-colors">
                            <span class="mr-2">Auto Control</span>
                            <i class="fas fa-arrow-right transform group-hover:translate-x-2 transition-transform"></i>
                        </div>
                    </div>
                    <div class="gradient-bar" style="--color-start: #8b5cf6; --color-end: #7c3aed;"></div>
                </div>
            </div>
            
            
        </div>
    </section>
<!-- Enhanced About Section -->
<section class="py-20 bg-white">
  <div class="container mx-auto px-4 lg:px-8">
    <div class="flex flex-col lg:flex-row items-center gap-12">
      <div class="lg:w-1/2 w-full aspect-video">
  <img src="https://aquapoliban.projek.me/images/Akuaponik%20Smart.jpg"
       alt="Aquaponik System"
       class="rounded-xl shadow-2xl w-full h-full object-cover transform hover:scale-105 transition duration-700">
</div>

      
      <div class="lg:w-1/2 w-full mt-8 lg:mt-0">
        <span class="inline-block py-1 px-3 rounded-full bg-green-50 text-green-600 font-medium text-sm mb-4">Tentang Kami</span>
        <h2 class="text-3xl md:text-4xl font-serif font-bold text-gray-800 mb-6 leading-tight">
          Solusi Pertanian Modern dengan Teknologi IoT
        </h2>
        <p class="text-gray-600 mb-6 leading-relaxed">
          Smart Aquaponik Poliban adalah inovasi sistem aquaponik berbasis Internet of Things (IoT) yang dikembangkan oleh Mahasiswa dari Politeknik Negeri Banjarmasin. Sistem ini dirancang untuk meningkatkan efisiensi produksi tanaman dan ikan dengan memanfaatkan teknologi modern agar mempermudah dalam memonitoring kualitas air dan menciptakan lingkungan yang optimal.
        </p>
        <p class="text-gray-600 mb-8 leading-relaxed">
          Dengan Smart Aquaponik, kami membantu petani mengadopsi teknologi pertanian presisi untuk meningkatkan produktivitas dan keberlanjutan.
        </p>
        <a href="/about"
           class="inline-flex items-center font-medium text-green-600 hover:text-green-700 transition-colors duration-300">
          Pelajari Lebih Lanjut
          <i class="fas fa-arrow-right ml-2"></i>
        </a>
      </div>
    </div>
  </div>
</section>

{{-- Features Section with Enhanced Cards --}}
<section id="features"
  class="relative py-20 bg-fixed bg-center bg-cover will-change-transform"
  style="background-image:url('https://1.bp.blogspot.com/-kocXuM-x1sE/WrNa8o19syI/AAAAAAAAAdA/ffjAF6SJ88YOK6gcRkKQPmSy_CyWfs7gQCLcBGAs/s1600/siring_banjarmasin_2_thumb.jpg')">

  <div class="absolute inset-0 bg-gradient-to-b from-gray-900/70 to-gray-900/50"></div>

  <div class="relative container mx-auto px-4 lg:px-8 text-white z-10">
    <div class="text-center mb-16" data-aos="fade-up">
      <div class="inline-flex items-center justify-center px-4 py-1 mb-6 bg-green-500/20 rounded-full">
        <i class="fas fa-trophy text-green-300 mr-2"></i>
        <p class="text-sm uppercase tracking-widest text-green-300 font-semibold">Lomba Inovasi Teknologi</p>
      </div>
      <h1 class="text-2xl md:text-3xl font-bold text-green-200 mt-1">
        Kratevesia Provinsi Kalimantan Selatan 2025 – Bidang Hardware
      </h1>
    </div>

    <div class="text-center mb-16" data-aos="fade-up">
      <h2 class="text-3xl md:text-4xl font-serif font-bold text-white mb-4">Proyek Smart Aquaponik Banjarmasin</h2>
      <p class="mt-4 max-w-2xl mx-auto leading-relaxed text-gray-200">
        Kolaborasi dengan Pemkot Banjarmasin memanfaatkan lahan dan limbah sungai yang bersih, menghadirkan Aquaponik modern dengan monitoring air real-time.
      </p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      @php
        $features = [
          ['icon'=>'fas fa-seedling','title'=>'Pemanfaatan Lahan','desc'=>'Mengubah lahan pinggir sungai menjadi kolam Aquaponik produktif.'],
          ['icon'=>'fas fa-water','title'=>'Sistem Sirkulasi','desc'=>'Pompa otomatis dan aerator menjaga kualitas air & oksigen.'],
          ['icon'=>'fas fa-filter','title'=>'Filter Bio Sungai','desc'=>'Mikroorganisme mengolah limbah organik menjadi nutrisi.'],
          ['icon'=>'fas fa-tachometer-alt','title'=>'Monitoring pH & DO','desc'=>'Sensor pH, DO, suhu, EC terhubung dashboard real-time.'],
          ['icon'=>'fas fa-stream','title'=>'Integrasi Data','desc'=>'Data lingkungan dikirim ke server kota untuk analisis tren.'],
          ['icon'=>'fas fa-expand-arrows-alt','title'=>'Skalabilitas','desc'=>'Desain modular diperluas untuk skala publik dan komersial.'],
        ];
      @endphp

      @foreach($features as $idx => $f)
      <div class="relative bg-white/10 backdrop-blur-md p-8 rounded-2xl shadow-lg group transition-all duration-500 hover:shadow-2xl hover:bg-white/20 transform hover:-translate-y-2" 
           data-aos="zoom-in" 
           data-aos-delay="{{ $idx * 100 }}">
        
        <div class="w-14 h-14 mx-auto flex items-center justify-center rounded-full bg-gradient-to-br from-green-400 to-green-600 mb-4 shadow-md group-hover:from-green-500 group-hover:to-green-700 transition-all duration-300">
          <i class="{{ $f['icon'] }} text-white text-xl"></i>
        </div>
        
        <h3 class="font-serif text-xl font-bold text-white mb-2 text-center">{{ $f['title'] }}</h3>
        <p class="text-gray-200 leading-relaxed text-center">{{ $f['desc'] }}</p>
        
        <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-green-400 via-green-500 to-green-600 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
      </div>
      @endforeach
    </div>
  </div>
</section>

{{-- Enhanced Statistics Section --}}
@php
    // Data statistik langsung di-hardcode di sini
    $statistics = [
        [
            'icon'  => 'fa-solid fa-seedling',   // ganti ke ikon apa pun dari Font Awesome
            'value' => '98%',                    // contoh value
            'label' => 'Tingkat Keberhasilan Tanam',
        ],
        [
            'icon'  => 'fa-solid fa-droplet',
            'value' => '7.0',
            'label' => 'pH Optimal',
        ],
        [
            'icon'  => 'fa-solid fa-temperature-three-quarters',
            'value' => '26 °C',
            'label' => 'Suhu Ideal',
        ],
        [
            'icon'  => 'fa-solid fa-water',
            'value' => '850 ppm',
            'label' => 'TDS Rata-rata',
        ],
        [
            'icon'  => 'fa-solid fa-fish',
            'value' => '1 200+',
            'label' => 'Ikan Sehat Dipanen',
        ],
    ];
@endphp

<section id="statistics" class="py-20 bg-gradient-to-r from-green-50 to-blue-50">
    <div class="container mx-auto px-4 lg:px-8">

        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-gray-800 mb-4">
                Statistik Smart Aquaponik
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Data capaian dan fitur utama sistem kami yang terintegrasi dengan IoT
            </p>
        </div>

        <div class="grid md:grid-cols-5 gap-8 text-center">
            @foreach ($statistics as $idx => $stat)
                <div  class="relative p-8 bg-white rounded-2xl shadow-lg group transition-all duration-500
                             hover:shadow-xl transform hover:-translate-y-2"
                      data-aos="zoom-in"
                      data-aos-delay="{{ $idx * 100 }}">

                    <div class="w-14 h-14 mx-auto flex items-center justify-center rounded-full
                                bg-gradient-to-br from-green-500 to-green-600 mb-4 shadow-md">
                        <i class="{{ $stat['icon'] }} text-white text-2xl"></i>
                    </div>

                    <p class="text-4xl font-extrabold text-gray-900 mb-1">
                        {{ $stat['value'] }}
                    </p>
                    <p class="text-gray-700 uppercase tracking-wide text-sm">
                        {{ $stat['label'] }}
                    </p>

                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-green-400 to-green-600
                                transform scale-x-0 group-hover:scale-x-100
                                transition-transform origin-left duration-500">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


{{-- Enhanced Team Section --}}
<section id="team" class="py-20 bg-white">
  <div class="container mx-auto px-4 lg:px-8">
    <div class="text-center mb-16" data-aos="fade-up">
      <h2 class="text-3xl md:text-4xl font-serif font-bold mb-4 text-gray-800">Tim Pengembang</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Berikut adalah tim profesional yang mengembangkan sistem Smart Aquaponik Poliban
      </p>
    </div>
    
    <div class="grid sm:grid-cols-1 md:grid-cols-3 gap-8">
      @php
  $team = [
    [
      'name' => 'Muhammad Rasyad',
      'photo' => 'images/rasyad.jpg',
      'role' => 'Ketua Tim Smart Aquaponics System & Developer Software & Hardware System',
      'expertise' => 'Mahasiswa'
    ],
    [
      'name' => 'Bagus Setiawan',
      'photo' => 'images/Bagus.jpg',
      'role' => 'Riset Sistem Aquaponik & Media Aquaponics System',
      'expertise' => 'Mahasiswa'
    ],
    [
      'name' => 'Muhammad Rafli Ramadhan',
      'photo' => 'images/Rafli.jpg',
      'role' => 'Developer Monitor IoT & Pengembangan System',
      'expertise' => 'Mahasiswa'
    ]
  ];
@endphp

      
      @foreach($team as $member)
      <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
        <div class="relative w-24 h-24 mx-auto mb-6 rounded-full overflow-hidden border-4 border-green-500 group-hover:border-green-600 transition-all duration-300">
         <img src="{{ asset($member['photo']) }}" alt="{{$member['name']}}" class="w-full h-full object-cover">

        </div>
        <h3 class="text-xl font-bold mb-1 text-center">{{$member['name']}}</h3>
        <p class="text-green-600 font-semibold mb-3 text-center">{{$member['role']}}</p>
        <p class="text-sm text-gray-600 text-center mb-4">{{$member['expertise']}}</p>
        
        <div class="flex justify-center space-x-3 mt-4">
          <a href="#" class="text-green-500 hover:text-green-700 transition-colors">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="#" class="text-green-500 hover:text-green-700 transition-colors">
            <i class="fab fa-github"></i>
          </a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

{{-- Enhanced Partners Section --}}
<section id="partners" class="py-16 bg-gray-50">
  <div class="container mx-auto px-4 lg:px-8">
    <h2 class="text-2xl md:text-3xl font-serif font-bold text-center mb-12 text-gray-800">Mitra Kami</h2>
    <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16">
      @foreach(['poliban.png', 'banjarmasin.png', 'kemenristek.png','it.png'] as $logo)
      <div class="group relative cursor-pointer" data-aos="zoom-in">
        <!-- Enhanced logo container with better transitions -->
        <div class="absolute inset-0 bg-gradient-to-r from-green-400 to-blue-500 rounded-lg blur opacity-0 group-hover:opacity-75 transition duration-700"></div>
        <div class="relative p-3 bg-white rounded-lg shadow-md transform transition-all duration-500 group-hover:shadow-xl group-hover:-translate-y-1">
          <img 
            src="{{ asset('images/' . $logo) }}"
            alt="Partner Logo"
            class="h-16 w-auto object-contain relative transition-all duration-700 group-hover:scale-110 group-hover:brightness-110"
            loading="lazy"
            onerror="this.src='https://via.placeholder.com/150x60?text=Logo+Not+Found'; this.onerror=null;">
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

{{-- Call to Action with Enhanced Animation --}}
<section class="py-20 bg-gradient-to-r from-green-600 via-green-500 to-green-600">
  <div class="container mx-auto px-4 lg:px-8 text-center" data-aos="zoom-in">
    <h2 class="text-3xl md:text-4xl font-serif font-bold text-white mb-6">Siap Meningkatkan Hasil Pertanian Anda?</h2>
    <p class="text-white/80 max-w-2xl mx-auto mb-8">
      Dengan teknologi IoT terkini kami, Anda bisa mengoptimalkan sistem aquaponik Anda secara real-time
    </p>
    <a href="{{ url('/contact') }}"
       class="inline-block bg-white text-green-600 font-semibold px-8 py-4 rounded-full shadow-lg 
              hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300
              hover:scale-105 relative overflow-hidden group">
      <span class="relative z-10 flex items-center justify-center">
        <i class="fas fa-paper-plane mr-2"></i> Hubungi Kami Sekarang
      </span>
      <div class="absolute inset-0 bg-gradient-to-r from-green-400 to-green-500 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-center duration-500"></div>
    </a>
  </div>
</section>

@endsection