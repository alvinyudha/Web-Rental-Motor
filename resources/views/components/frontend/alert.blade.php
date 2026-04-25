@props(['type' => 'success', 'message'])

<div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" 
    x-transition:enter="transform ease-out duration-300 transition"
    x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
    x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
    x-transition:leave="transition ease-in duration-100"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed bottom-4 right-4 sm:top-4 sm:right-4 sm:bottom-auto z-[110] max-w-sm w-full bg-white shadow-xl rounded-xl pointer-events-auto border border-slate-100 overflow-hidden" style="display: none;">
    
    <div class="p-4">
        <div class="flex items-start">
            <div class="flex-shrink-0 pt-0.5">
                @if($type === 'success')
                    <div class="w-8 h-8 rounded-full bg-green-50 flex items-center justify-center">
                        <svg class="h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                @else
                    <div class="w-8 h-8 rounded-full bg-red-50 flex items-center justify-center">
                        <svg class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                @endif
            </div>
            <div class="ml-3 w-0 flex-1">
                <p class="text-sm font-bold text-slate-800">
                    {{ $type === 'success' ? 'Berhasil' : 'Peringatan' }}
                </p>
                <p class="mt-1 text-sm text-slate-500">
                    {{ $message }}
                </p>
            </div>
            <div class="ml-4 flex-shrink-0 flex">
                <button @click="show = false" class="bg-white rounded-md inline-flex text-slate-400 hover:text-slate-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-colors">
                    <span class="sr-only">Close</span>
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
