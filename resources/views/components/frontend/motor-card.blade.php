@props(['name', 'type', 'image', 'plate', 'status' => 'Tersedia', 'price'])

<div class="bg-white rounded-[20px] p-5 shadow-sm flex flex-col h-full hover:shadow-md transition-shadow duration-300">
    <!-- Mobile Layout (Horizontal) -->
    <div class="sm:hidden flex flex-col">
        <div class="flex justify-between items-start mb-2">
            <div>
                <h3 class="text-lg font-bold text-text-main leading-tight tracking-tight">{{ $name }}</h3>
                <p class="text-[13px] font-semibold text-slate-400 mt-0.5">{{ $type }}</p>
            </div>
            <div class="flex items-center text-[#84CC16] font-semibold text-xs mt-1">
                <span class="w-1.5 h-1.5 rounded-full bg-[#84CC16] mr-1.5"></span>
                {{ $status }}
            </div>
        </div>
        
        <div class="flex items-stretch mt-1">
            <div class="w-[45%] flex items-center justify-center relative">
                <img src="{{ $image }}" alt="{{ $name }}" class="object-contain h-28 w-full scale-[1.15] origin-left">
            </div>
            <div class="w-[55%] flex flex-col items-end justify-end pl-2">
                <div class="flex items-center text-slate-400 font-semibold tracking-wide text-xs mb-3">
                    <div class="border border-slate-300 rounded-md p-0.5 mr-1.5">
                        <svg class="w-3.5 h-3.5 opacity-80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="6" width="18" height="12" rx="2" />
                            <path d="M7 10h1" />
                            <path d="M10 10h1" />
                            <path d="M13 10h4" />
                            <path d="M7 14h4" />
                            <path d="M14 14h3" />
                        </svg>
                    </div>
                    {{ $plate }}
                </div>
                
                <div class="flex items-baseline mb-2 text-right justify-end w-full">
                    <span class="text-[17px] font-bold text-text-main tracking-tight">Rp{{ number_format($price, 0, ',', '.') }}</span>
                    <span class="text-[11px] font-semibold text-slate-400 ml-1">/ hari</span>
                </div>
                
                <div class="w-full text-right mt-1">
                    <x-frontend.primary-button width="w-auto !px-5 !py-1.5 !text-[13px]">
                        Booking
                    </x-frontend.primary-button>
                </div>
            </div>
        </div>
    </div>

    <!-- Desktop Layout (Vertical) -->
    <div class="hidden sm:flex flex-col h-full">
        <div class="mb-1">
            <h3 class="text-xl font-bold text-text-main leading-tight tracking-tight">{{ $name }}</h3>
            <p class="text-[13px] font-semibold text-slate-400 mt-1">{{ $type }}</p>
        </div>
        
        <div class="flex-grow flex items-center justify-center py-5 relative">
            <img src="{{ $image }}" alt="{{ $name }}" class="object-contain h-36 w-full scale-110">
        </div>
        
        <div class="flex justify-between items-center mb-5 text-[13px]">
            <div class="flex items-center text-slate-400 font-semibold tracking-wide">
                <div class="border border-slate-200 rounded p-0.5 mr-2">
                    <svg class="w-4 h-4 opacity-80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="6" width="18" height="12" rx="2" />
                        <path d="M7 10h1" />
                        <path d="M10 10h1" />
                        <path d="M13 10h4" />
                        <path d="M7 14h4" />
                        <path d="M14 14h3" />
                    </svg>
                </div>
                {{ $plate }}
            </div>
            <div class="flex items-center text-[#84CC16] font-semibold">
                <span class="w-1.5 h-1.5 rounded-full bg-[#84CC16] mr-2"></span>
                {{ $status }}
            </div>
        </div>
        
        <div class="flex items-center justify-between mt-auto">
            <div class="flex items-baseline">
                <span class="text-xl font-bold text-text-main tracking-tight">Rp{{ number_format($price, 0, ',', '.') }}</span>
                <span class="text-xs font-semibold text-slate-400 ml-1">/ hari</span>
            </div>
            <x-frontend.primary-button width="!px-5 !py-2 !text-[13px]">
                Booking
            </x-frontend.primary-button>
        </div>
    </div>
</div>
