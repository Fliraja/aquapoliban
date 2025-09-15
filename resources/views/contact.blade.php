@extends('layouts')    

@section('content')
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            padding-bottom: 80px; /* Space for mobile bottom bar */
        }
        
        .font-serif {
            font-family: 'Playfair Display', serif;
        }
        
        /* Custom animations */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .float-animation {
            animation: float 6s ease-in-out infinite;
        }
        
        
        /* Glassmorphism effect */
        .glass-card {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.18);
        }
        
        /* Custom gradient */
        .gradient-bg {
            background: linear-gradient(135deg, #059669 0%, #10b981 50%, #34d399 100%);
        }
        
        /* Pulse animation for submit button */
        .pulse-on-hover:hover {
            animation: pulse 1s infinite;
        }
        
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(5, 150, 105, 0.7); }
            70% { box-shadow: 0 0 0 10px rgba(5, 150, 105, 0); }
            100% { box-shadow: 0 0 0 0 rgba(5, 150, 105, 0); }
        }
        
        /* Hide bottom nav on desktop */
        @media (min-width: 768px) {
            .bottom-nav {
                display: none;
            }
            body {
                padding-bottom: 0;
            }
        }
        
        /* Smooth scroll */
        html {
            scroll-behavior: smooth;
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #059669;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #047857;
        }
    </style>

    <!-- Hero Section -->
    <section class="gradient-bg py-12 md:py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center text-white" data-aos="fade-up">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-white bg-opacity-20 rounded-full mb-6 float-animation">
                    <i class="fas fa-paper-plane text-3xl"></i>
                </div>
                <h1 class="text-4xl md:text-6xl font-serif font-bold mb-4">Hubungi Kami</h1>
                <p class="text-xl md:text-2xl text-green-100 max-w-3xl mx-auto leading-relaxed">
                    Mari berkolaborasi untuk masa depan pertanian yang lebih berkelanjutan
                </p>
            </div>
        </div>
        
        <!-- Floating particles -->
        <div class="absolute top-20 left-10 w-4 h-4 bg-white opacity-20 rounded-full float-animation" style="animation-delay: 0s;"></div>
        <div class="absolute top-40 right-20 w-6 h-6 bg-white opacity-20 rounded-full float-animation" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-20 left-20 w-3 h-3 bg-white opacity-20 rounded-full float-animation" style="animation-delay: 4s;"></div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-16 relative">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-3xl shadow-2xl overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                    <!-- Contact Header -->
                    <div class="gradient-bg p-8 md:p-12 relative">
                        <div class="absolute inset-0 bg-black opacity-10"></div>
                        <div class="relative z-10">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-envelope text-2xl text-white"></i>
                                </div>
                                <h2 class="text-3xl md:text-4xl font-serif font-bold text-white">Kirim Pesan</h2>
                            </div>
                            <p class="text-green-100 text-lg">Ceritakan kepada kami tentang proyek atau pertanyaan Anda</p>
                        </div>
                    </div>
                    
                    <!-- Contact Form -->
                    <div class="p-8 md:p-12">
                        <form class="space-y-8" onsubmit="handleSubmit(event)">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <!-- Nama -->
                                <div data-aos="fade-right" data-aos-delay="300">
                                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-3">
                                        <i class="fas fa-user text-green-600 mr-2"></i>Nama Lengkap
                                    </label>
                                    <input type="text" id="name" name="name" required
                                           class="w-full px-6 py-4 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-green-500 focus:ring-opacity-20 focus:border-green-500 transition-all duration-300 text-lg"
                                           placeholder="Masukkan nama lengkap Anda">
                                </div>
                                
                                <!-- Email -->
                                <div data-aos="fade-left" data-aos-delay="300">
                                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-3">
                                        <i class="fas fa-envelope text-green-600 mr-2"></i>Alamat Email
                                    </label>
                                    <input type="email" id="email" name="email" required
                                           class="w-full px-6 py-4 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-green-500 focus:ring-opacity-20 focus:border-green-500 transition-all duration-300 text-lg"
                                           placeholder="contoh@email.com">
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <!-- Telepon -->
                                <div data-aos="fade-right" data-aos-delay="400">
                                    <label for="phone" class="block text-sm font-semibold text-gray-700 mb-3">
                                        <i class="fas fa-phone text-green-600 mr-2"></i>Nomor Telepon
                                    </label>
                                    <input type="tel" id="phone" name="phone"
                                           class="w-full px-6 py-4 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-green-500 focus:ring-opacity-20 focus:border-green-500 transition-all duration-300 text-lg"
                                           placeholder="+62 812-3456-7890">
                                </div>
                                
                                <!-- Subjek -->
                                <div data-aos="fade-left" data-aos-delay="400">
                                    <label for="subject" class="block text-sm font-semibold text-gray-700 mb-3">
                                        <i class="fas fa-tag text-green-600 mr-2"></i>Kategori
                                    </label>
                                    <select id="subject" name="subject" required
                                            class="w-full px-6 py-4 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-green-500 focus:ring-opacity-20 focus:border-green-500 transition-all duration-300 text-lg">
                                        <option value="">Pilih kategori</option>
                                        <option value="konsultasi">Konsultasi Sistem</option>
                                        <option value="kemitraan">Kemitraan Bisnis</option>
                                        <option value="pelatihan">Pelatihan & Workshop</option>
                                        <option value="penelitian">Kolaborasi Penelitian</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            
                            <!-- Pesan -->
                            <div data-aos="fade-up" data-aos-delay="500">
                                <label for="message" class="block text-sm font-semibold text-gray-700 mb-3">
                                    <i class="fas fa-comment-alt text-green-600 mr-2"></i>Pesan Anda
                                </label>
                                <textarea id="message" name="message" rows="6" required
                                          class="w-full px-6 py-4 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-green-500 focus:ring-opacity-20 focus:border-green-500 transition-all duration-300 text-lg resize-none"
                                          placeholder="Ceritakan lebih detail tentang kebutuhan atau pertanyaan Anda..."></textarea>
                            </div>
                            
                            <!-- Submit Button -->
                            <div class="pt-4" data-aos="fade-up" data-aos-delay="600">
                                <button type="submit"
                                        class="w-full md:w-auto px-12 py-4 gradient-bg text-white font-bold text-lg rounded-xl shadow-lg hover:shadow-2xl transform transition-all duration-300 hover:-translate-y-1 flex items-center justify-center space-x-3 group pulse-on-hover">
                                    <span>Kirim Pesan Sekarang</span>
                                    <i class="fas fa-paper-plane transform transition-transform duration-300 group-hover:translate-x-1 group-hover:rotate-12"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Information Cards Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-gray-800 mb-4">Informasi Kontak</h2>
                    <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                        Berbagai cara untuk menghubungi tim Smart Aquaponik Poliban
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                    <!-- Alamat Kantor -->
                    <div class="glass-card p-8 rounded-2xl hover:shadow-2xl transition-all duration-500 text-center group" data-aos="fade-up" data-aos-delay="200">
                        <div class="w-20 h-20 gradient-bg rounded-full flex items-center justify-center mx-auto mb-6 transform transition-transform duration-300 group-hover:scale-110">
                            <i class="fas fa-map-marker-alt text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 font-serif">Alamat Kantor</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Politeknik Negeri Banjarmasin<br>
                            Jl. Brigjen H. Hasan Basri<br>
                            Kayu Tangi, Banjarmasin Utara<br>
                            Kalimantan Selatan 70123
                        </p>
                    </div>
                    
                    <!-- Telepon & Email -->
                    <div class="glass-card p-8 rounded-2xl hover:shadow-2xl transition-all duration-500 text-center group" data-aos="fade-up" data-aos-delay="400">
                        <div class="w-20 h-20 bg-gradient-to-r from-blue-600 to-blue-500 rounded-full flex items-center justify-center mx-auto mb-6 transform transition-transform duration-300 group-hover:scale-110">
                            <i class="fas fa-phone text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 font-serif">Telepon & Email</h3>
                        <div class="space-y-3">
                            <a href="tel:+62511326680" class="block text-gray-600 hover:text-blue-600 transition-colors">
                                <i class="fas fa-phone-alt mr-2"></i>(0511) 326 680
                            </a>
                            <a href="mailto:info@smartaquaponikpoliban.id" class="block text-gray-600 hover:text-blue-600 transition-colors">
                                <i class="fas fa-envelope mr-2"></i>info@smartaquaponikpoliban.id
                            </a>
                            <a href="https://wa.me/6281234567890" class="block text-gray-600 hover:text-green-600 transition-colors">
                                <i class="fab fa-whatsapp mr-2"></i>+62 812-3456-7890
                            </a>
                        </div>
                    </div>
                    
                    <!-- Jam Kerja -->
                    <div class="glass-card p-8 rounded-2xl hover:shadow-2xl transition-all duration-500 text-center group" data-aos="fade-up" data-aos-delay="600">
                        <div class="w-20 h-20 bg-gradient-to-r from-purple-600 to-purple-500 rounded-full flex items-center justify-center mx-auto mb-6 transform transition-transform duration-300 group-hover:scale-110">
                            <i class="fas fa-clock text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 font-serif">Jam Operasional</h3>
                        <div class="space-y-2 text-gray-600">
                            <div class="flex justify-between items-center">
                                <span>Senin - Jumat</span>
                                <span class="font-medium">08:00 - 16:00</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>Sabtu</span>
                                <span class="font-medium">08:00 - 14:00</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>Minggu</span>
                                <span class="text-red-500 font-medium">Libur</span>
                            </div>
                            <p class="text-sm text-gray-500 pt-2">*Waktu Indonesia Tengah (WITA)</p>
                        </div>
                    </div>
                </div>
                
                <!-- Google Maps -->
                <div class="rounded-2xl overflow-hidden shadow-2xl mb-12 aspect-video relative" data-aos="fade-up" data-aos-delay="800">
                    <div class="absolute inset-0 bg-gradient-to-r from-green-600 to-green-500 opacity-20 z-10"></div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.773258854297!2d114.587455314937392!3d-3.313516454269615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x36de5a2d9efb1ce5:0xa4ffaa8efdb9b30!2sPoliteknik+Negeri+Banjarmasin!5e0!3m2!1sid!2sid!4v1602145448256!5m2!1sid!2sid" 
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                
                <!-- Social Media -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="1000">
                    <h3 class="text-2xl font-bold mb-8 text-gray-800 font-serif">Ikuti Kami di Media Sosial</h3>
                    <div class="flex justify-center space-x-6">
                        <a href="#" class="w-16 h-16 rounded-full bg-gradient-to-r from-blue-600 to-blue-500 flex items-center justify-center text-white hover:shadow-xl transform hover:scale-110 transition-all duration-300 group">
                            <i class="fab fa-facebook-f text-xl group-hover:animate-pulse"></i>
                        </a>
                        <a href="#" class="w-16 h-16 rounded-full bg-gradient-to-r from-pink-600 to-pink-500 flex items-center justify-center text-white hover:shadow-xl transform hover:scale-110 transition-all duration-300 group">
                            <i class="fab fa-instagram text-xl group-hover:animate-pulse"></i>
                        </a>
                        <a href="#" class="w-16 h-16 rounded-full bg-gradient-to-r from-red-600 to-red-500 flex items-center justify-center text-white hover:shadow-xl transform hover:scale-110 transition-all duration-300 group">
                            <i class="fab fa-youtube text-xl group-hover:animate-pulse"></i>
                        </a>
                        <a href="#" class="w-16 h-16 rounded-full bg-gradient-to-r from-blue-700 to-blue-600 flex items-center justify-center text-white hover:shadow-xl transform hover:scale-110 transition-all duration-300 group">
                            <i class="fab fa-linkedin-in text-xl group-hover:animate-pulse"></i>
                        </a>
                        <a href="#" class="w-16 h-16 rounded-full bg-gradient-to-r from-green-600 to-green-500 flex items-center justify-center text-white hover:shadow-xl transform hover:scale-110 transition-all duration-300 group">
                            <i class="fab fa-whatsapp text-xl group-hover:animate-pulse"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mobile Bottom Navigation -->
    <div class="bottom-nav md:hidden">
        <div class="flex justify-around items-center py-2">
            <a href="#" class="nav-item flex flex-col items-center py-2 px-3 text-gray-600">
                <i class="fas fa-home text-xl mb-1"></i>
                <span class="text-xs font-medium">Beranda</span>
            </a>
            <a href="#" class="nav-item flex flex-col items-center py-2 px-3 text-gray-600">
                <i class="fas fa-info-circle text-xl mb-1"></i>
                <span class="text-xs font-medium">Tentang</span>
            </a>
            <a href="#" class="nav-item flex flex-col items-center py-2 px-3 text-gray-600">
                <i class="fas fa-cogs text-xl mb-1"></i>
                <span class="text-xs font-medium">Layanan</span>
            </a>
            <a href="#" class="nav-item active flex flex-col items-center py-2 px-3">
                <i class="fas fa-envelope text-xl mb-1"></i>
                <span class="text-xs font-medium">Kontak</span>
            </a>
            <a href="#" class="nav-item flex flex-col items-center py-2 px-3 text-gray-600">
                <i class="fas fa-bars text-xl mb-1"></i>
                <span class="text-xs font-medium">Menu</span>
            </a>
        </div>
    </div>

    <!-- Success Modal -->
    <div id="successModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center p-4">
        <div class="bg-white rounded-2xl p-8 max-w-md w-full text-center transform transition-all duration-300 scale-95">
            <div class="w-20 h-20 gradient-bg rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="fas fa-check text-white text-3xl"></i>
            </div>
            <h3 class="text-2xl font-bold mb-4 text-gray-800">Pesan Terkirim!</h3>
            <p class="text-gray-600 mb-6">Terima kasih! Pesan Anda telah berhasil dikirim. Tim kami akan segera menghubungi Anda.</p>
            <button onclick="closeModal()" class="gradient-bg text-white px-8 py-3 rounded-xl font-semibold hover:shadow-lg transition-all duration-300">
                Tutup
            </button>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            easing: 'ease-out-cubic'
        });
    </script>
@endsection