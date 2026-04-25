<footer class="bg-white pt-16 pb-8 mt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
            <!-- Brand -->
            <div class="col-span-1 md:col-span-2">
                <a href="{{ url('/') }}" class="block mb-4">
                    <img src="{{ asset('assets/images/horizontal-color.svg') }}" alt="Logo"
                        class="h-12 w-auto object-contain">
                </a>
                <p class="text-slate-500 max-w-[320px] text-sm leading-relaxed">
                    Pilihan terlengkap, harga transparan, dan layanan 24 jam. Siap menemani setiap petualangan Anda.
                </p>
            </div>

            <!-- About -->
            <div class="md:pl-10">
                <h3 class="text-base font-semibold text-gray-900 mb-6">About</h3>
                <ul class="space-y-4">
                    <li>
                        <a href="#" class="text-sm text-slate-500 hover:text-primary transition">Chat Admin</a>
                    </li>
                </ul>
            </div>

            <!-- Socials -->
            <div class="md:pl-4">
                <h3 class="text-base font-semibold text-gray-900 mb-6">Socials</h3>
                <ul class="space-y-4">
                    <li>
                        <a href="#" class="text-sm text-slate-500 hover:text-primary transition">Discord</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm text-slate-500 hover:text-primary transition">Instagram</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm text-slate-500 hover:text-primary transition">Twitter</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm text-slate-500 hover:text-primary transition">Facebook</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-200 pt-8">
            <p class="text-[13px] sm:text-sm font-semibold text-slate-800">
                &copy; {{ date('Y') }} SEWA MOTOR ID. All rights reserved
            </p>
        </div>
    </div>
</footer>