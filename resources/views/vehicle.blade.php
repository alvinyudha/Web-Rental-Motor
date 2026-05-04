@extends('template.layouts')
@section('title', 'Vehicles')
@section('content')
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        {{-- Heading --}}
        <div class="mb-10">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">
                Daftar Kendaraan
            </h2>
            <p class="text-gray-600">
                Pilih kendaraan yang paling sesuai dengan gaya perjalanan dan budget Anda.
            </p>
        </div>
        <!-- Filter Component -->
        <x-filter-bar />
        <!-- List Vehicles -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6 justify-items-center">
            @forelse ($vehicles as $vehicle)
                <div class="w-full max-w-sm bg-white rounded-md shadow-md p-4">
                    <!-- HEADER -->
                    <div class="flex justify-between items-start mb-3">
                        <div>
                            <h2 class="text-base md:text-lg font-semibold text-gray-800">
                                {{ $vehicle->name }}
                            </h2>
                            <p class="text-sm text-blue-500">{{ $vehicle->vehicle_brand->name ?? '-' }}</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <span style="{{ $vehicle->operational_status_color }}"
                                class="px-2 py-1 text-xs font-semibold rounded-md">
                                {{ $vehicle->operational_status_label }}
                            </span>
                        </div>
                    </div>

                    <!-- BODY -->
                    <div class="flex gap-4 md:flex-col md:items-center">
                        <!-- IMAGE -->
                        <div class="w-28 md:w-full flex justify-center">
                            <img src="{{ asset('img/vehicles/' . $vehicle->image) }}" class="h-24 md:h-48 object-contain"
                                alt="{{ $vehicle->name }}">
                        </div>
                        <!-- INFO -->
                        <div class="flex flex-col justify-end md:justify-between flex-1 w-full">
                            <!-- Plate -->
                            <div class="flex items-center justify-end sm:justify-normal gap-2 text-md text-gray-500 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <rect x="3" y="6" width="18" height="12" rx="2" stroke-width="2" />
                                    <path d="M7 10h10M7 14h6" stroke-width="2" />
                                </svg>
                                <span>{{ $vehicle->plate_number }}</span>
                            </div>
                            <!-- Price Mobile-->
                            <p
                                class="flex sm:hidden justify-end text-base md:text-lg font-bold text-gray-800 items-center mb-1">
                                Rp. {{ number_format($vehicle->price_per_day, 0, ',', '.') }}/<span
                                    class="text-gray-400 text-xs">hari</span>
                            </p>
                            <!-- FOOTER -->
                            <div class="flex justify-end sm:justify-between items-center">
                                <!-- Price Desktop-->
                                <p class="hidden sm:flex text-base md:text-lg font-bold text-gray-800 items-center">
                                    Rp. {{ number_format($vehicle->price_per_day, 0, ',', '.') }}/<span
                                        class="text-gray-400 text-base">hari</span>
                                </p>
                                <!-- Button -->
                                <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md text-sm">
                                    Booking
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center w-full text-gray-500">
                    Kendaraan tidak tersedia.
                </p>
            @endforelse
        </div>
        <!-- Pagination -->
        <div class="d-flex justify-center my-16">
            {{ $vehicles->links() }}
        </div>
        {{-- Terms and Conditions --}}
        <x-terms-conditions />
    </div>
@endsection
