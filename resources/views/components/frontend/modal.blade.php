@props(['name', 'title' => ''])

{{-- Backdrop (shared) --}}
<div x-show="{{ $name }}" 
    x-effect="if ({{ $name }}) { document.body.classList.add('overflow-hidden'); } else { document.body.classList.remove('overflow-hidden'); }"
    class="fixed inset-0 z-[100]" style="display: none;" x-cloak>
    <div x-show="{{ $name }}" x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" class="fixed inset-0 transition-opacity bg-black/60"
        @click="{{ $name }} = false"></div>

    {{-- Desktop: Centered Modal --}}
    <div class="hidden sm:flex fixed inset-0 items-center justify-center p-4 z-[101]">
        <div x-show="{{ $name }}" x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="w-full max-w-lg overflow-hidden flex flex-col transition-all transform bg-white shadow-2xl rounded-3xl max-h-[90vh]">

            <div class="flex items-center justify-between p-6 pb-4">
                <h3 class="text-xl font-bold text-slate-800">{{ $title }}</h3>
                <button @click="{{ $name }} = false" class="text-slate-400 hover:text-slate-600 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="flex-grow overflow-y-auto px-6 pb-6">
                {{ $slot }}
            </div>
        </div>
    </div>

    {{-- Mobile: Bottom Sheet --}}
    <div class="sm:hidden fixed inset-x-0 bottom-0 z-[101]"
        x-show="{{ $name }}"
        x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="translate-y-full"
        x-transition:enter-end="translate-y-0"
        x-transition:leave="transition ease-in duration-200 transform"
        x-transition:leave-start="translate-y-0"
        x-transition:leave-end="translate-y-full">

        <div class="bg-white rounded-t-[32px] shadow-2xl max-h-[90vh] flex flex-col overflow-hidden">
            <div class="pt-4 px-6 flex flex-col items-center">
                <div class="w-12 h-1.5 bg-slate-200 rounded-full mb-5"></div>
                <div class="flex items-center justify-between w-full mb-4">
                    <h3 class="text-lg font-bold text-slate-800">{{ $title }}</h3>
                    <button @click="{{ $name }} = false" class="text-slate-400 hover:text-slate-600 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="flex-grow overflow-y-auto px-6 pb-8">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
