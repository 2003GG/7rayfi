<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Network — 7RAYFI</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;0,600;1,400&display=swap" rel="stylesheet" />

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            gold: '#c9a84c',
            'gold-light': '#e8c97a',
            ink: '#0b0c10',
            surface: '#111318',
            surface2: '#1a1d24',
            surface3: '#22262f',
          },
          fontFamily: {
            syne: ['Syne', 'sans-serif'],
            dm:   ['DM Sans', 'sans-serif'],
          },
          keyframes: {
            fadeUp: {
              '0%':   { opacity: '0', transform: 'translateY(16px)' },
              '100%': { opacity: '1', transform: 'translateY(0)' },
            },
          },
          animation: {
            fadeUp:     'fadeUp 0.5s ease both',
            'fadeUp-1': 'fadeUp 0.5s 0.05s ease both',
            'fadeUp-2': 'fadeUp 0.5s 0.12s ease both',
            'fadeUp-3': 'fadeUp 0.5s 0.19s ease both',
          },
        },
      },
    }
  </script>
</head>

<body class="bg-ink text-[#e8e6e0] min-h-screen flex">

  {{-- ───── ICON SIDEBAR ───── --}}
 

  {{-- ───── MAIN AREA ───── --}}
  <div class="flex-1 flex flex-col min-w-0">

    @include('header')

    <div class="relative z-10 max-w-[1100px] mx-auto px-4 py-6 grid grid-cols-[220px_1fr_248px] gap-5 lg:grid-cols-[220px_1fr] md:grid-cols-1">

      {{-- ── LEFT PANEL ── --}}
      <aside class="left-col sticky top-[68px] max-h-[calc(100vh-84px)] overflow-y-auto animate-fadeUp">

        {{-- Profile card --}}
        <div class="bg-surface border border-white/[0.06] rounded-2xl overflow-hidden mb-3">
          <div class="profile-banner-hatch h-14"></div>
          <div class="-mt-6 ml-3.5 w-12 h-12 rounded-full bg-gradient-to-br from-gold to-[#7c5c1e] flex items-center justify-center font-syne font-bold text-ink text-base border-[3px] border-surface relative z-10">
            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
          </div>
          <div class="px-3.5 pt-1.5 pb-4">
            <p class="font-syne font-bold text-sm text-[#e8e6e0] mb-0.5">{{ auth()->user()->name }}</p>
            <p class="text-[11px] text-[#7a7870] leading-relaxed">Member</p>
          </div>
          <div class="border-t border-white/[0.06]">
            <div class="flex justify-between items-center px-3.5 py-2.5 hover:bg-surface2 transition-colors cursor-pointer">
              <span class="text-[11px] text-[#7a7870]">Connections</span>
              <span class="text-[12px] text-gold font-semibold font-syne">523</span>
            </div>
            <div class="flex justify-between items-center px-3.5 py-2.5 hover:bg-surface2 transition-colors cursor-pointer border-t border-white/[0.04]">
              <span class="text-[11px] text-[#7a7870]">Followers</span>
              <span class="text-[12px] text-gold font-semibold font-syne">1,204</span>
            </div>
            <div class="flex justify-between items-center px-3.5 py-2.5 hover:bg-surface2 transition-colors cursor-pointer border-t border-white/[0.04]">
              <span class="text-[11px] text-[#7a7870]">Following</span>
              <span class="text-[12px] text-gold font-semibold font-syne">318</span>
            </div>
          </div>
        </div>

        {{-- Manage network --}}
        <div class="bg-surface border border-white/[0.06] rounded-2xl p-3.5 mb-3">
          <p class="font-syne text-[10px] font-semibold text-[#7a7870] uppercase tracking-widest mb-3">Manage</p>
          <nav class="flex flex-col gap-0.5">
            <a href="#invitations" class="flex items-center justify-between gap-2.5 px-2 py-2 rounded-lg text-[12.5px] text-[#a09e97] hover:text-gold hover:bg-gold/5 transition-all duration-200">
              <span class="flex items-center gap-2.5">
                <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg>
                Invitations
              </span>
              <span class="text-[10px] bg-gold/10 text-gold px-1.5 py-0.5 rounded-full font-syne font-semibold">{{ count($invitations ?? []) ?: '4' }}</span>
            </a>
            <a href="#connections" class="flex items-center gap-2.5 px-2 py-2 rounded-lg text-[12.5px] text-[#a09e97] hover:text-gold hover:bg-gold/5 transition-all duration-200">
              <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
              Connections
            </a>
            <a href="#following" class="flex items-center gap-2.5 px-2 py-2 rounded-lg text-[12.5px] text-[#a09e97] hover:text-gold hover:bg-gold/5 transition-all duration-200">
              <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
              Following
            </a>
            <a href="#groups" class="flex items-center gap-2.5 px-2 py-2 rounded-lg text-[12.5px] text-[#a09e97] hover:text-gold hover:bg-gold/5 transition-all duration-200">
              <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
              Groups
            </a>
            <form method="POST" action="{{ route('user.singout') }}">
              @csrf
              <button type="submit" class="flex items-center gap-2.5 px-2 py-2 rounded-lg text-[12.5px] text-[#a09e97] hover:text-red-400 hover:bg-red-500/5 transition-all duration-200 w-full text-left mt-1 border-t border-white/[0.04] pt-3">
                <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                Sign Out
              </button>
            </form>
          </nav>
        </div>
      </aside>

      {{-- ── MAIN FEED ── --}}
      <main class="min-w-0 space-y-5">

        {{-- ── INVITATIONS SECTION ── --}}
        <section id="invitations" class="animate-fadeUp">
          <div class="bg-surface border border-white/[0.06] rounded-2xl overflow-hidden">

            {{-- Section header --}}
            <div class="flex items-center justify-between px-5 py-4 border-b border-white/[0.06]">
              <div class="flex items-center gap-2">
                <span class="w-4 h-0.5 bg-gold rounded-full"></span>
                <h2 class="font-syne font-bold text-[15px] text-[#e8e6e0]">Invitations</h2>
                <span class="text-[10px] bg-gold/10 text-gold px-2 py-0.5 rounded-full font-syne font-semibold ml-1">4</span>
              </div>
              <a href="#" class="text-[11.5px] text-gold hover:text-gold-light transition-colors font-dm">See all</a>
            </div>

            {{-- Invitation cards — horizontal list --}}
            <div class="p-4 space-y-3">

              {{-- Loop: @foreach($invitations as $inv) --}}
              @php
                $demoInvitations = [
                  ['initials' => 'AK', 'name' => 'Amine Karimi',    'title' => 'Full Stack Developer at Nexara',      'mutual' => 12, 'color' => 'from-[#c9a84c] to-[#7c5c1e]'],
                  ['initials' => 'SB', 'name' => 'Sara Benali',     'title' => 'UI/UX Designer · Freelance',          'mutual' => 5,  'color' => 'from-[#6366f1] to-[#4338ca]'],
                  ['initials' => 'YM', 'name' => 'Youssef Moussaoui','title'=> 'Backend Engineer at CloudOps',         'mutual' => 8,  'color' => 'from-[#10b981] to-[#065f46]'],
                  ['initials' => 'LF', 'name' => 'Layla Faris',     'title' => 'Product Manager · Open to work',      'mutual' => 3,  'color' => 'from-[#f43f5e] to-[#9f1239]'],
                ];
              @endphp

              @foreach($demoInvitations as $inv)
              <div class="flex items-center gap-4 p-3.5 rounded-xl bg-surface2/50 hover:bg-surface2 border border-white/[0.04] hover:border-white/[0.08] transition-all duration-200">

                {{-- Avatar --}}
                <div class="w-12 h-12 rounded-full bg-gradient-to-br {{ $inv['color'] }} flex items-center justify-center font-syne font-bold text-white text-sm flex-shrink-0">
                  {{ $inv['initials'] }}
                </div>

                {{-- Info --}}
                <div class="flex-1 min-w-0">
                  <p class="font-syne font-semibold text-[13.5px] text-[#e8e6e0] leading-tight hover:text-gold transition-colors cursor-pointer truncate">
                    {{ $inv['name'] }}
                  </p>
                  <p class="text-[11px] text-[#7a7870] mt-0.5 truncate">{{ $inv['title'] }}</p>
                  <p class="text-[10.5px] text-[#555] mt-0.5">
                    <svg class="w-3 h-3 inline-block -mt-0.5 mr-0.5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    {{ $inv['mutual'] }} mutual connections
                  </p>
                </div>

                {{-- Actions --}}
                <div class="flex items-center gap-2 flex-shrink-0">
                  <button type="button"
                    onclick="dismissInvitation(this)"
                    class="px-3 py-1.5 rounded-lg text-[11.5px] font-dm font-medium text-[#7a7870] border border-white/[0.07] hover:border-white/[0.15] hover:text-[#e8e6e0] transition-all duration-200">
                    Ignore
                  </button>
                  <button type="button"
                    onclick="acceptInvitation(this)"
                    class="px-4 py-1.5 rounded-lg text-[11.5px] font-syne font-bold text-ink bg-gold hover:bg-gold-light transition-all duration-200 inline-flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                    Accept
                  </button>
                </div>

              </div>
              @endforeach

            </div>
          </div>
        </section>

        {{-- ── PEOPLE YOU MAY KNOW ── --}}
        <section id="connections" class="animate-fadeUp-1">
          <div class="bg-surface border border-white/[0.06] rounded-2xl overflow-hidden">

            <div class="flex items-center justify-between px-5 py-4 border-b border-white/[0.06]">
              <div class="flex items-center gap-2">
                <span class="w-4 h-0.5 bg-gold rounded-full"></span>
                <h2 class="font-syne font-bold text-[15px] text-[#e8e6e0]">People you may know</h2>
              </div>
              <a href="#" class="text-[11.5px] text-gold hover:text-gold-light transition-colors font-dm">See all</a>
            </div>

            <div class="p-4 space-y-3">

              @php
                $suggestions = [
                  ['initials' => 'MR', 'name' => 'Mehdi Rahimi',     'title' => 'DevOps Engineer at InfraCore',    'mutual' => 9,  'color' => 'from-[#0ea5e9] to-[#0369a1]'],
                  ['initials' => 'NB', 'name' => 'Nadia Benchekroun', 'title' => 'Data Scientist · Remote',        'mutual' => 6,  'color' => 'from-[#a855f7] to-[#7e22ce]'],
                  ['initials' => 'KA', 'name' => 'Khalid Ait Omar',   'title' => 'Mobile Developer at Appify',    'mutual' => 14, 'color' => 'from-[#f97316] to-[#c2410c]'],
                  ['initials' => 'HT', 'name' => 'Houda Tahiri',      'title' => 'Marketing Lead at BrandMa',     'mutual' => 2,  'color' => 'from-[#ec4899] to-[#9d174d]'],
                  ['initials' => 'OE', 'name' => 'Omar El Fassi',     'title' => 'CTO at StartupMed',             'mutual' => 11, 'color' => 'from-[#14b8a6] to-[#0f766e]'],
                ];
              @endphp

              @foreach($suggestions as $person)
              <div class="flex items-center gap-4 p-3.5 rounded-xl bg-surface2/50 hover:bg-surface2 border border-white/[0.04] hover:border-white/[0.08] transition-all duration-200">

                <div class="w-12 h-12 rounded-full bg-gradient-to-br {{ $person['color'] }} flex items-center justify-center font-syne font-bold text-white text-sm flex-shrink-0">
                  {{ $person['initials'] }}
                </div>

                <div class="flex-1 min-w-0">
                  <p class="font-syne font-semibold text-[13.5px] text-[#e8e6e0] leading-tight hover:text-gold transition-colors cursor-pointer truncate">
                    {{ $person['name'] }}
                  </p>
                  <p class="text-[11px] text-[#7a7870] mt-0.5 truncate">{{ $person['title'] }}</p>
                  <p class="text-[10.5px] text-[#555] mt-0.5">
                    <svg class="w-3 h-3 inline-block -mt-0.5 mr-0.5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    {{ $person['mutual'] }} mutual connections
                  </p>
                </div>

                <div class="flex-shrink-0">
                  <button type="button"
                    onclick="toggleConnect(this)"
                    class="connect-btn px-4 py-1.5 rounded-lg text-[11.5px] font-syne font-bold border border-gold/40 text-gold hover:bg-gold/10 transition-all duration-200 inline-flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                    Connect
                  </button>
                </div>

              </div>
              @endforeach

            </div>
          </div>
        </section>

      </main>

      {{-- ── RIGHT PANEL ── --}}
      <aside class="right-col sticky top-[68px] max-h-[calc(100vh-84px)] overflow-y-auto animate-fadeUp-1 space-y-3">

        {{-- Search people --}}
        <div class="bg-surface border border-white/[0.06] rounded-2xl p-4">
          <p class="font-syne text-[10px] font-semibold text-[#7a7870] uppercase tracking-widest mb-3">Search people</p>
          <div class="relative">
            <svg class="w-3.5 h-3.5 absolute left-3 top-1/2 -translate-y-1/2 text-[#555]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            <input type="text" placeholder="Name or keyword…"
              class="w-full bg-surface2 border border-white/[0.07] rounded-xl pl-8 pr-3 py-2 text-[12.5px] text-[#e8e6e0] font-dm outline-none placeholder-[#3a3c44] focus:border-gold/40 transition-colors" />
          </div>
        </div>

        {{-- Network stats --}}
        <div class="bg-surface border border-white/[0.06] rounded-2xl p-4">
          <p class="font-syne text-[10px] font-semibold text-[#7a7870] uppercase tracking-widest mb-3">Your network</p>
          <div class="space-y-2">
            <div class="flex justify-between items-center py-1.5">
              <span class="text-[11.5px] text-[#a09e97]">1st connections</span>
              <span class="text-[12px] text-gold font-semibold font-syne">523</span>
            </div>
            <div class="flex justify-between items-center py-1.5 border-t border-white/[0.04]">
              <span class="text-[11.5px] text-[#a09e97]">2nd connections</span>
              <span class="text-[12px] text-gold font-semibold font-syne">4,210</span>
            </div>
            <div class="flex justify-between items-center py-1.5 border-t border-white/[0.04]">
              <span class="text-[11.5px] text-[#a09e97]">Pending sent</span>
              <span class="text-[12px] text-gold font-semibold font-syne">7</span>
            </div>
            <div class="flex justify-between items-center py-1.5 border-t border-white/[0.04]">
              <span class="text-[11.5px] text-[#a09e97]">Groups joined</span>
              <span class="text-[12px] text-gold font-semibold font-syne">5</span>
            </div>
          </div>
        </div>

        {{-- Footer --}}
        <div class="bg-surface border border-white/[0.06] rounded-2xl p-4">
          <div class="flex flex-wrap gap-x-3 gap-y-1.5 mb-3">
            <a href="#" class="text-[11px] text-[#555] hover:text-gold transition-colors">About</a>
            <a href="#" class="text-[11px] text-[#555] hover:text-gold transition-colors">Help</a>
            <a href="#" class="text-[11px] text-[#555] hover:text-gold transition-colors">Privacy</a>
            <a href="#" class="text-[11px] text-[#555] hover:text-gold transition-colors">Terms</a>
          </div>
          <p class="text-[10.5px] text-[#3a3c44] font-syne">7RAYFI © {{ date('Y') }} · Built in Morocco 🇲🇦</p>
        </div>

      </aside>

    </div>
  </div>{{-- end main area --}}

<script>
  function acceptInvitation(btn) {
    var card = btn.closest('.flex.items-center.gap-4');
    card.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
    card.style.opacity = '0';
    card.style.transform = 'translateX(12px)';
    setTimeout(function() { card.remove(); }, 300);
  }

  function dismissInvitation(btn) {
    var card = btn.closest('.flex.items-center.gap-4');
    card.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
    card.style.opacity = '0';
    card.style.transform = 'translateX(-12px)';
    setTimeout(function() { card.remove(); }, 300);
  }

  function toggleConnect(btn) {
    var connected = btn.classList.contains('connected');
    if (connected) {
      btn.classList.remove('connected', 'bg-gold/10', 'text-[#7a7870]', 'border-white/[0.07]');
      btn.classList.add('border-gold/40', 'text-gold');
      btn.innerHTML = '<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg> Connect';
    } else {
      btn.classList.add('connected', 'bg-gold/10', 'text-[#7a7870]', 'border-white/[0.07]');
      btn.classList.remove('border-gold/40', 'text-gold');
      btn.innerHTML = '<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg> Pending';
    }
  }
</script>

</body>
</html>
