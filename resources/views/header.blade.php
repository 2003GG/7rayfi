<header class="sticky top-0 z-50 bg-surface border-b border-white/[0.06] backdrop-blur-sm">
    <div class="max-w-[1280px] mx-auto px-5 h-14 flex items-center justify-between gap-4">

      <!-- Logo -->
      <a href="#" class="font-syne font-extrabold text-xl tracking-tight flex items-center gap-1">
        <span class="text-gold">7</span><span class="text-[#e8e6e0]">RAYFI</span>
      </a>

      <!-- Search -->
      <div class="relative flex-1 max-w-[260px]">
        <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-3.5 h-3.5 text-[#7a7870]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
        <input class="w-full bg-surface2 border border-white/[0.07] rounded-xl pl-9 pr-3 py-2 text-[13px] text-[#e8e6e0] transition-colors" placeholder="Search people, posts…" />
      </div>

      <!-- Nav -->
      <nav class="flex items-center gap-0.5">
        <a href="{{route('post.index')}}" class="flex flex-col items-center gap-0.5 px-3 py-1.5 rounded-xl text-gold text-[10px] font-dm font-medium">
          <svg class="w-5 h-5" fill="none" stroke="#c9a84c" stroke-width="1.6" viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          Home
        </a>
        <a href="{{ route('offer.index') }}" class="flex flex-col items-center gap-0.5 px-3 py-1.5 rounded-xl text-[#7a7870] hover:text-[#e8e6e0] hover:bg-surface2 transition-all duration-200 text-[10px] font-dm font-medium">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg>
          Jobs
        </a>
        <a href="#" class="flex flex-col items-center gap-0.5 px-3 py-1.5 rounded-xl text-[#7a7870] hover:text-[#e8e6e0] hover:bg-surface2 transition-all duration-200 text-[10px] font-dm font-medium">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
          Network
        </a>
        <a href="#" class="relative flex flex-col items-center gap-0.5 px-3 py-1.5 rounded-xl text-[#7a7870] hover:text-[#e8e6e0] hover:bg-surface2 transition-all duration-200 text-[10px] font-dm font-medium">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
          <span class="absolute top-1 right-1.5 w-1.5 h-1.5 bg-red-500 rounded-full border border-surface"></span>
          Messages
        </a>
        <a href="#" class="relative flex flex-col items-center gap-0.5 px-3 py-1.5 rounded-xl text-[#7a7870] hover:text-[#e8e6e0] hover:bg-surface2 transition-all duration-200 text-[10px] font-dm font-medium">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 01-3.46 0"/></svg>
          <span class="absolute top-1 right-1.5 w-1.5 h-1.5 bg-red-500 rounded-full border border-surface"></span>
          Alerts
        </a>
        <div class="flex flex-col items-center gap-0.5 px-3 py-1.5 rounded-xl text-[#7a7870] hover:text-[#e8e6e0] hover:bg-surface2 transition-all duration-200 text-[10px] font-dm font-medium cursor-pointer">
          <div class="w-5 h-5 rounded-full bg-gradient-to-br from-gold to-[#7c5c1e] flex items-center justify-center font-syne font-bold text-ink text-[9px]">A</div>
          Profile
        </div>
      </nav>
    </div>
    <div class="gold-bar opacity-50"></div>
  </header>
