    <aside class="hidden md:flex w-[72px] bg-surface border-r border-gold/20 flex-col items-center py-7 sticky top-0 h-screen flex-shrink-0 animate-fade-in">
        <div class="w-10 h-10 mb-9 flex-shrink-0">
            <img src="{{ asset('image/logo.png') }}" alt="7RAYFI" class="w-full h-full object-contain brightness-110">
        </div>
        <nav class="flex flex-col items-center gap-1.5 flex-1 font-dm">
            @foreach([
                ['Home',     'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6'],
                ['Network',  'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z'],
                ['Jobs',     'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
                ['Messages', 'M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z'],
            ] as [$label, $d])
            <button title="{{ $label }}" class="w-11 h-11 rounded-xl flex items-center justify-center text-gray-600 hover:bg-yellow-900/20 hover:text-gold transition-all duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $d }}"/></svg>
            </button>
            @endforeach
        </nav>
        <div class="mt-auto flex flex-col items-center gap-2">
            <div class="w-7 h-px bg-gold/20 mb-1"></div>
            <button title="Sign In" class="nav-active relative w-11 h-11 rounded-xl flex items-center justify-center bg-yellow-900/20 text-gold transition-all duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/></svg>
            </button>
        </div>
    </aside>
