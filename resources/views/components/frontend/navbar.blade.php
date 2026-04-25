<nav x-data="{ 
    profileOpen: false, 
    editProfileOpen: false,
    mobileMenuOpen: false
}" class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ url('/') }}" class="block">
                    <img src="{{ asset('assets/images/horizontal-color.svg') }}" alt="Logo"
                        class="h-12 w-auto object-contain">
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden sm:flex sm:items-center sm:ml-auto sm:mr-8 sm:space-x-8">
                <a href="{{ url('/') }}"
                    class="text-primary font-bold hover:text-primary-dark transition text-sm">Home</a>
                <a href="#" class="text-slate-500 font-semibold hover:text-primary transition text-sm">Pilih
                    Kendaraan</a>
                <a href="#" class="text-slate-500 font-semibold hover:text-primary transition text-sm">Daftar
                    Pesanan</a>
            </div>

            <!-- Right side -->
            <div class="hidden sm:flex sm:items-center sm:space-x-5">
                <a href="#"
                    class="inline-flex items-center px-4 py-2.5 border border-gray-200 rounded-lg text-sm font-bold text-slate-600 bg-white hover:bg-gray-50 transition shadow-sm">
                    <svg class="w-5 h-5 text-[#25D366] mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.414 0 .018 5.396.015 12.035c0 2.123.554 4.197 1.605 6.04L0 24l6.117-1.605a11.837 11.837 0 005.925 1.573h.005c6.631 0 12.026-5.396 12.029-12.035.003-3.217-1.246-6.242-3.518-8.513z" />
                    </svg>
                    Butuh bantuan?
                </a>

                @auth
                    <div class="relative">
                        <button @click="profileOpen = !profileOpen" @click.away="profileOpen = false"
                            class="flex items-center justify-center h-10 w-10 rounded-full bg-gray-200 overflow-hidden border border-gray-300 focus:outline-none">
                            <img src="{{ auth()->user()->avatar_url ?? 'https://placehold.co/100x100?text=User' }}"
                                alt="User" class="h-full w-full object-cover">
                        </button>

                        <!-- Desktop Profile Dropdown -->
                        <div x-show="profileOpen" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute right-0 mt-2 w-56 rounded-2xl bg-white shadow-xl py-2 z-50 border border-gray-100"
                            style="display: none;">
                            <button @click="editProfileOpen = true; profileOpen = false"
                                class="flex items-center w-full px-4 py-3 text-sm text-slate-600 hover:bg-slate-50 transition-colors">
                                <svg class="w-5 h-5 mr-3 text-slate-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                Profil saya
                            </button>
                            <a href="{{ route('dashboard') }}"
                                class="flex items-center px-4 py-3 text-sm text-slate-600 hover:bg-slate-50 transition-colors">
                                <svg class="w-5 h-5 mr-3 text-slate-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Dashboard
                            </a>
                            <a href="#"
                                class="flex items-center px-4 py-3 text-sm text-slate-600 hover:bg-slate-50 transition-colors">
                                <svg class="w-5 h-5 mr-3 text-slate-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                                Daftar Pesanan
                            </a>
                            <a href="#"
                                class="flex items-center px-4 py-3 text-sm text-slate-600 hover:bg-slate-50 transition-colors">
                                <svg class="w-5 h-5 mr-3 text-slate-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                                Kendaraan
                            </a>
                            <div class="border-t border-gray-100 my-1"></div>
                            <button @click="$dispatch('logout')"
                                class="flex items-center w-full px-4 py-3 text-sm text-red-500 hover:bg-red-50 transition-colors">
                                <svg class="w-5 h-5 mr-3 text-red-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                Keluar
                            </button>
                        </div>
                    </div>
                @else
                    <x-frontend.primary-button href="{{ route('login') }}" width="w-24">
                        Masuk
                    </x-frontend.primary-button>
                @endauth
            </div>

            <!-- Mobile menu button -->
            <div class="flex items-center sm:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary"
                    aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg x-show="!mobileMenuOpen" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="mobileMenuOpen" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Overlay -->
    <div x-show="mobileMenuOpen" class="sm:hidden bg-white border-t border-gray-100" style="display: none;">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ url('/') }}"
                class="block px-3 py-2 rounded-md text-base font-medium text-primary bg-slate-50">Home</a>
            <a href="#"
                class="block px-3 py-2 rounded-md text-base font-medium text-slate-600 hover:text-primary hover:bg-slate-50">Pilih
                Kendaraan</a>
            <a href="#"
                class="block px-3 py-2 rounded-md text-base font-medium text-slate-600 hover:text-primary hover:bg-slate-50">Daftar
                Pesanan</a>
            @guest
                <a href="{{ route('login') }}"
                    class="block px-3 py-2 rounded-md text-base font-medium text-slate-600 hover:text-primary hover:bg-slate-50">Masuk</a>
            @endguest
        </div>
    </div>

    <!-- Mobile Profile Bottom Sheet -->
    @auth
        <div x-show="mobileMenuOpen" class="sm:hidden fixed inset-0 z-50 bg-black/50" style="display: none;"
            @click="mobileMenuOpen = false"></div>
        <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-300 transform"
            x-transition:enter-start="translate-y-full" x-transition:enter-end="translate-y-0"
            x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="translate-y-0"
            x-transition:leave-end="translate-y-full"
            class="sm:hidden fixed inset-x-0 bottom-0 z-[60] bg-white rounded-t-[32px] px-6 pb-8 pt-4 shadow-2xl"
            style="display: none;">
            <div class="w-12 h-1.5 bg-slate-200 rounded-full mx-auto mb-6"></div>

            <div class="space-y-1">
                <button @click="editProfileOpen = true; mobileMenuOpen = false"
                    class="flex items-center w-full px-4 py-4 text-base font-semibold text-slate-700 hover:bg-slate-50 rounded-2xl transition-colors">
                    <svg class="w-6 h-6 mr-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    Profil saya
                </button>
                <a href="{{ route('dashboard') }}"
                    class="flex items-center w-full px-4 py-4 text-base font-semibold text-slate-700 hover:bg-slate-50 rounded-2xl transition-colors">
                    <svg class="w-6 h-6 mr-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Dashboard
                </a>
                <a href="#"
                    class="flex items-center w-full px-4 py-4 text-base font-semibold text-slate-700 hover:bg-slate-50 rounded-2xl transition-colors">
                    <svg class="w-6 h-6 mr-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    Daftar Pesanan
                </a>
                <a href="#"
                    class="flex items-center w-full px-4 py-4 text-base font-semibold text-slate-700 hover:bg-slate-50 rounded-2xl transition-colors">
                    <svg class="w-6 h-6 mr-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    Kendaraan
                </a>
                <div class="border-t border-gray-100 my-2"></div>
                <button @click="$dispatch('logout')"
                    class="flex items-center w-full px-4 py-4 text-base font-bold text-red-500 hover:bg-red-50 rounded-2xl transition-colors">
                    <svg class="w-6 h-6 mr-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    Keluar
                </button>
            </div>
        </div>
    @endauth

    <!-- Profile Edit Modal -->
    @auth
        <x-frontend.modal name="editProfileOpen" title="Profil">
            <div x-data="{ photoName: null, photoPreview: null }">
                <div class="flex items-center space-x-4 mb-8">
                    <div class="relative group cursor-pointer" @click="$refs.avatarInput.click()">
                        <!-- Current Profile Photo -->
                        <div x-show="!photoPreview">
                            <img src="{{ auth()->user()->avatar_url ?? 'https://placehold.co/100x100?text=User' }}"
                                alt="Profile" class="w-20 h-20 rounded-full object-cover border-2 border-slate-100">
                        </div>
                        <!-- New Profile Photo Preview -->
                        <div x-show="photoPreview" style="display: none;">
                            <span class="block w-20 h-20 rounded-full object-cover border-2 border-slate-100"
                                x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                            </span>
                        </div>
                        <div
                            class="absolute inset-0 bg-black/20 rounded-full opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <button type="button" @click="$refs.avatarInput.click()"
                            class="text-sm font-semibold text-primary hover:text-primary-dark transition flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M14.06,9L15,9.94L5.92,19H5V18.08L14.06,9M17.66,3C17.41,3 17.15,3.1 16.96,3.29L15.13,5.12L18.88,8.87L20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18.17,3.09 17.92,3 17.66,3M14.06,6.19L3,17.25V21H6.75L17.81,9.94L14.06,6.19Z" />
                            </svg>
                            Ubah Foto Profil
                        </button>

                        @if(auth()->user()->avatar_url)
                            <button type="button" onclick="document.getElementById('delete-avatar-form').submit();"
                                class="text-sm font-semibold text-red-500 hover:text-red-700 transition flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                Hapus Foto Profil
                            </button>
                        @endif
                    </div>
                </div>

                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PATCH')

                    <input type="file" name="avatar" class="hidden" x-ref="avatarInput" accept="image/*" x-on:change="
                                            const file = $refs.avatarInput.files[0];
                                            if (file) {
                                                photoName = file.name;
                                                const reader = new FileReader();
                                                reader.onload = (e) => { photoPreview = e.target.result; };
                                                reader.readAsDataURL(file);
                                            }
                                        ">

                    <div>
                        <label class="block text-sm sm:text-[13px] font-semibold text-slate-700 mb-2">Nama Lengkap</label>
                        <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}"
                            placeholder="Nama Lengkap"
                            class="w-full px-4 py-3.5 sm:py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-primary focus:border-primary text-slate-700 sm:text-[13px]">
                        @error('name') <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label class="block text-sm sm:text-[13px] font-semibold text-slate-700 mb-2">No WhatsApp</label>
                        <input type="text" name="whatsapp" value="{{ old('whatsapp', auth()->user()->whatsapp) }}"
                            placeholder="12345678910"
                            class="w-full px-4 py-3.5 sm:py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-primary focus:border-primary text-slate-700 sm:text-[13px]">
                        @error('whatsapp') <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label class="block text-sm sm:text-[13px] font-semibold text-slate-700 mb-2">No. KTP</label>
                        <input type="text" name="ktp_number" value="{{ old('ktp_number', auth()->user()->ktp_number) }}"
                            placeholder="12345678910"
                            class="w-full px-4 py-3.5 sm:py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-primary focus:border-primary text-slate-700 sm:text-[13px]">
                        @error('ktp_number') <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label class="block text-sm sm:text-[13px] font-semibold text-slate-700 mb-2">No. SIM</label>
                        <input type="text" name="sim_number" value="{{ old('sim_number', auth()->user()->sim_number) }}"
                            placeholder="12345678910"
                            class="w-full px-4 py-3.5 sm:py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-primary focus:border-primary text-slate-700 sm:text-[13px]">
                        @error('sim_number') <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span> @enderror
                    </div>


                    <div class="pt-2">
                        <x-frontend.primary-button type="submit" width="w-full">
                            Simpan
                        </x-frontend.primary-button>
                    </div>
                </form>
            </div>
        </x-frontend.modal>
    @endauth

    <!-- Hidden Logout Form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
        @csrf
    </form>

    <!-- Hidden Delete Avatar Form -->
    <form id="delete-avatar-form" action="{{ route('profile.avatar.destroy') }}" method="POST" class="hidden">
        @csrf
        @method('DELETE')
    </form>

    <script>
        window.addEventListener('logout', () => {
            document.getElementById('logout-form').submit();
        });
    </script>
</nav>