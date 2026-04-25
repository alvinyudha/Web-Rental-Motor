@extends('layouts.general-home')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section min-h-[450px] lg:min-h-[550px] flex items-center relative pt-20 pb-32"
        style="background-image: url('{{ asset('assets/images/general-home-header-image.webp') }}');">
        <div class="hero-overlay"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="max-w-2xl">
                <h1 class="text-2xl sm:text-5xl lg:text-4xl font-bold text-white leading-tight mb-6">
                    Rental Motor Cepat & Aman,<br>Mulai Rp75.000/hari
                </h1>
                <p class="text-lg text-gray-200 mb-10 max-w-lg">
                    Pilihan terlengkap, harga transparan, dan layanan 24 jam. Siap menemani setiap petualangan Anda.
                </p>
            </div>
        </div>
    </section>

    <!-- Search Widget (Visible on Desktop and Mobile, overlapping the background) -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 -mt-24 sm:-mt-28 md:-mt-32 mb-12">
        <div class="bg-white rounded-2xl p-6 shadow-xl w-full max-w-5xl mx-auto">
            <h3 class="text-[22px] font-bold text-text-main mb-5">Cari kendaraan</h3>
            <form action="#" method="GET" class="flex flex-col md:flex-row md:items-start gap-4">
                <!-- Tipe Kendaraan -->
                <div class="relative flex-1">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </div>
                    <input type="text" placeholder="Pilih tipe kendaraan"
                        class="block w-full pl-11 pr-4 py-3.5 border border-gray-200 rounded-xl focus:ring-primary focus:border-primary text-sm font-medium text-slate-700 placeholder-slate-500">
                </div>

                <!-- Tanggal & Waktu -->
                <div class="flex items-center border border-gray-200 rounded-xl overflow-hidden flex-1">
                    <div class="relative flex-[0.6]">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <input type="text" placeholder="Min, 23 Des"
                            class="block w-full pl-11 pr-2 py-3.5 border-none focus:ring-0 text-sm font-medium text-slate-700 placeholder-slate-500">
                    </div>
                    <div class="w-px h-8 bg-gray-200"></div>
                    <div class="relative flex-[0.4]">
                        <div class="absolute inset-y-0 left-0 pl-2 flex items-center pointer-events-none">
                            <svg class="h-4 w-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <input type="text" placeholder="15:00"
                            class="block w-full pl-8 pr-2 py-3.5 border-none focus:ring-0 text-sm font-medium text-slate-700 placeholder-slate-500">
                    </div>
                </div>

                <!-- Durasi & Info -->
                <div class="flex-1 flex flex-col">
                    <div class="flex items-center border border-gray-200 rounded-xl overflow-hidden bg-white mb-2">
                        <div class="relative flex-[0.4]">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <select
                                class="block w-full pl-11 pr-4 py-3.5 border-none focus:ring-0 text-sm font-medium text-slate-700 appearance-none bg-transparent">
                                <option>1 Hari</option>
                                <option>2 Hari</option>
                                <option>3 Hari</option>
                                <option>7 Hari</option>
                            </select>
                        </div>
                        <div
                            class="flex-[0.6] px-4 py-3.5 text-[13px] text-slate-400 text-right bg-slate-50/50 hidden sm:block whitespace-nowrap">
                            Durasi sewa 24 jam/hari
                        </div>
                    </div>
                    <!-- Info Selesai Sewa -->
                    <div class="text-[13px] text-slate-500 px-1">
                        Selesai Sewa: Min, 30 Nov &bull; 23:59
                    </div>
                </div>

                <!-- Button -->
                <div class="md:w-32 lg:w-40 xl:w-48 shrink-0">
                    <x-frontend.primary-button width="w-full shadow-md shadow-blue-200/50">
                        Ayo Cari
                    </x-frontend.primary-button>
                </div>
            </form>
        </div>
    </div>

    <!-- 3 Easy Steps Section -->
    <section class="py-16 bg-bg-main">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-text-main mb-2">Mulai Petualangan Anda dalam 3 Langkah Mudah</h2>
                <p class="text-text-muted">Tidak perlu repot! Proses penyewaan motor tercepat, paling aman, dan transparan.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Step 1 -->
                <div
                    class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-start space-x-4 hover:shadow-md transition">
                    <div class="bg-primary-extralight p-3 rounded-xl flex-shrink-0">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-text-main mb-1">Pilih & Booking</h4>
                        <p class="text-sm text-text-muted leading-relaxed">Pilih motor impian Anda dan tentukan tanggal
                            rental.</p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div
                    class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-start space-x-4 hover:shadow-md transition">
                    <div class="bg-primary-extralight p-3 rounded-xl flex-shrink-0">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-text-main mb-1">Konfirmasi & Pembayaran</h4>
                        <p class="text-sm text-text-muted leading-relaxed">Selesaikan pembayaran dan dapatkan konfirmasi
                            instan via email/WhatsApp.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div
                    class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-start space-x-4 hover:shadow-md transition">
                    <div class="bg-primary-extralight p-3 rounded-xl flex-shrink-0">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-text-main mb-1">Ambil / Diantar</h4>
                        <p class="text-sm text-text-muted leading-relaxed">Ambil motor di lokasi kami, atau konfirmasi
                            melalui whatsapp untuk diantar ke lokasi Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Motors Section -->
    <section class="py-16 bg-bg-main">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-10 gap-4">
                <div>
                    <h2 class="text-2xl font-bold text-text-main mb-2">Pilihan Motor Terpopuler</h2>
                    <p class="text-text-muted">Pilih kendaraan yang paling sesuai dengan gaya perjalanan dan budget Anda.
                        Semua motor terawat, siap jalan!</p>
                </div>
                <a href="#" class="text-primary font-semibold hover:text-primary-dark transition whitespace-nowrap">Lihat
                    semua</a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <x-frontend.motor-card name="Vega Force" type="Matic"
                    image="https://placehold.co/400x300/F6F7F9/1A202C?text=Vega+Force" plate="AB 9001 DE" status="Tersedia"
                    price="75000" />
                <x-frontend.motor-card name="Genio" type="Matic"
                    image="https://placehold.co/400x300/F6F7F9/1A202C?text=Genio" plate="AB 1234 CD" status="Tersedia"
                    price="75000" />
                <x-frontend.motor-card name="Genio" type="Matic"
                    image="https://placehold.co/400x300/F6F7F9/1A202C?text=Genio" plate="AB 5678 EF" status="Tersedia"
                    price="75000" />
                <x-frontend.motor-card name="Vega Force" type="Matic"
                    image="https://placehold.co/400x300/F6F7F9/1A202C?text=Vega+Force" plate="AB 9876 GH" status="Tersedia"
                    price="75000" />
            </div>

            <div class="mt-8 text-center sm:hidden">
                <a href="#" class="inline-block text-primary font-semibold hover:text-primary-dark transition">Lihat
                    semua</a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-text-main mb-4">Kenapa Pilih ED.RENT?</h2>
                <p class="text-text-muted max-w-2xl mx-auto">Kami berkomitmen memberikan pengalaman rental motor terbaik
                    dengan standar pelayanan prima dan armada yang selalu prima.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Feature 1 -->
                <div
                    class="bg-white p-8 rounded-[32px] border border-slate-100 shadow-sm hover:shadow-md transition group text-center">
                    <div
                        class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-primary transition-colors">
                        <svg class="w-8 h-8 text-primary group-hover:text-white transition-colors" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold text-text-main mb-3">Harga Transparan</h4>
                    <p class="text-sm text-text-muted leading-relaxed">Tidak ada biaya tersembunyi. Harga yang Anda lihat
                        adalah harga yang Anda bayar.</p>
                </div>

                <!-- Feature 2 -->
                <div
                    class="bg-white p-8 rounded-[32px] border border-slate-100 shadow-sm hover:shadow-md transition group text-center">
                    <div
                        class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-primary transition-colors">
                        <svg class="w-8 h-8 text-primary group-hover:text-white transition-colors" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold text-text-main mb-3">Motor Terawat</h4>
                    <p class="text-sm text-text-muted leading-relaxed">Semua armada rutin diservis dan dipastikan dalam
                        kondisi prima sebelum diserahkan.</p>
                </div>

                <!-- Feature 3 -->
                <div
                    class="bg-white p-8 rounded-[32px] border border-slate-100 shadow-sm hover:shadow-md transition group text-center">
                    <div
                        class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-primary transition-colors">
                        <svg class="w-8 h-8 text-primary group-hover:text-white transition-colors" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold text-text-main mb-3">Layanan 24 Jam</h4>
                    <p class="text-sm text-text-muted leading-relaxed">Butuh bantuan di jalan? Tim support kami siap
                        melayani Anda kapan pun dibutuhkan.</p>
                </div>

                <!-- Feature 4 -->
                <div
                    class="bg-white p-8 rounded-[32px] border border-slate-100 shadow-sm hover:shadow-md transition group text-center">
                    <div
                        class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-primary transition-colors">
                        <svg class="w-8 h-8 text-primary group-hover:text-white transition-colors" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold text-text-main mb-3">Booking Cepat</h4>
                    <p class="text-sm text-text-muted leading-relaxed">Proses booking via web hanya butuh waktu kurang dari
                        5 menit tanpa ribet.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Terms and Conditions Section -->
    <section class="py-16 bg-bg-main border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-text-main mb-4">Syarat & Ketentuan Rental Motor</h2>
            <p class="text-text-muted mb-8">Transparansi adalah kunci. Pastikan Anda memenuhi beberapa persyaratan dasar
                sebelum melakukan pemesanan.</p>

            <ol class="list-decimal pl-5 space-y-4 text-text-main max-w">
                <li class="pl-2">Lakukan pemesanan minimal <span class="font-bold">1x24 jam</span> sebelum waktu penggunaan.
                    Setelah pesanan dikonfirmasi, penyewa wajib melakukan konfirmasi pengambilan motor melalui nomor
                    whatsapp atau datang ke lokasi ED.RENT.</li>
                <li class="pl-2">Membawa <span class="font-bold">2 kartu identitas</span> (SIM A, KK, KTP, ID Kerja atau ID
                    Pelajar)</li>
                <li class="pl-2">Menyertakan akun sosial media dan <span class="font-bold">nomor whatsapp</span> yang aktif.
                </li>
                <li class="pl-2">Pada saat serah terima kendaraan, pihak penyedia rental akan melakukan <span
                        class="font-bold">pengecekan keaslian data</span> dan kondisi kendaraan.</li>
                <li class="pl-2">Pihak penyedia rental <span class="font-bold">berhak membatalkan</span> apabila data tidak
                    sesuai dan syarat sewa tidak dapat dilengkapi.</li>
                <li class="pl-2">Apabila pembayaran telah selesai dan kendaraan yang dipesan tidak tersedia, penyewa <span
                        class="font-bold">berhak memilih kendaraan lain</span> yang tersedia tanpa dikenakan biaya tambahan.
                </li>
            </ol>
        </div>
    </section>
@endsection