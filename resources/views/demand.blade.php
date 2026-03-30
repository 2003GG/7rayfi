<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Domande — 7RAYFI</title>
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
  @include('sidebar')

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
              <span class="text-[11px] text-[#7a7870]">My questions</span>
              <span class="text-[12px] text-gold font-semibold font-syne">12</span>
            </div>
            <div class="flex justify-between items-center px-3.5 py-2.5 hover:bg-surface2 transition-colors cursor-pointer border-t border-white/[0.04]">
              <span class="text-[11px] text-[#7a7870]">My answers</span>
              <span class="text-[12px] text-gold font-semibold font-syne">38</span>
            </div>
            <div class="flex justify-between items-center px-3.5 py-2.5 hover:bg-surface2 transition-colors cursor-pointer border-t border-white/[0.04]">
              <span class="text-[11px] text-[#7a7870]">Upvotes received</span>
              <span class="text-[12px] text-gold font-semibold font-syne">204</span>
            </div>
          </div>
        </div>

        {{-- Filters --}}
        <div class="bg-surface border border-white/[0.06] rounded-2xl p-3.5 mb-3">
          <p class="font-syne text-[10px] font-semibold text-[#7a7870] uppercase tracking-widest mb-3">Browse</p>
          <nav class="flex flex-col gap-0.5">
            <a href="#" class="flex items-center gap-2.5 px-2 py-2 rounded-lg text-[12.5px] text-gold bg-gold/5 font-medium transition-all duration-200">
              <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
              Latest
            </a>
            <a href="#" class="flex items-center gap-2.5 px-2 py-2 rounded-lg text-[12.5px] text-[#a09e97] hover:text-gold hover:bg-gold/5 transition-all duration-200">
              <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
              Most answered
            </a>
            <a href="#" class="flex items-center gap-2.5 px-2 py-2 rounded-lg text-[12.5px] text-[#a09e97] hover:text-gold hover:bg-gold/5 transition-all duration-200">
              <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
              Top upvoted
            </a>
            <a href="#" class="flex items-center gap-2.5 px-2 py-2 rounded-lg text-[12.5px] text-[#a09e97] hover:text-gold hover:bg-gold/5 transition-all duration-200">
              <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              Unanswered
            </a>
            <a href="#" class="flex items-center gap-2.5 px-2 py-2 rounded-lg text-[12.5px] text-[#a09e97] hover:text-gold hover:bg-gold/5 transition-all duration-200">
              <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
              Saved
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
      <main class="min-w-0 space-y-4">

        {{-- Ask question CTA --}}
        <div class="flex justify-end animate-fadeUp">
          <button type="button"
            onclick="document.getElementById('ask-modal').classList.remove('hidden')"
            class="btn-gold-shine font-syne font-bold text-ink text-sm px-5 py-2.5 rounded-xl inline-flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg>
            Ask a question
          </button>
        </div>

        {{-- Questions list --}}
        @php
          $questions = [
            [
              'initials'  => 'AK',
              'color'     => 'from-[#c9a84c] to-[#7c5c1e]',
              'author'    => 'Amine Karimi',
              'role'      => 'Full Stack Developer',
              'time'      => '2 hours ago',
              'question'  => 'What is the best way to handle authentication in a Laravel + Vue.js SPA?',
              'body'      => 'I am building a single-page application with Laravel as the backend API and Vue.js on the frontend. I am trying to decide between using Laravel Sanctum for token-based auth or session-based auth with cookies. Which approach is more secure and performant for production?',
              'tags'      => ['Laravel', 'Vue.js', 'Auth', 'SPA'],
              'upvotes'   => 24,
              'answers'   => 7,
              'views'     => 312,
              'answered'  => true,
            ],
            [
              'initials'  => 'SB',
              'color'     => 'from-[#6366f1] to-[#4338ca]',
              'author'    => 'Sara Benali',
              'role'      => 'UI/UX Designer',
              'time'      => '5 hours ago',
              'question'  => 'How do you handle design system versioning across multiple products?',
              'body'      => 'Our team maintains a shared Figma design system used by 3 different products. Every time we update a component, we risk breaking the other products. What is a good versioning strategy for design systems in Figma or Storybook?',
              'tags'      => ['Design System', 'Figma', 'Storybook', 'UX'],
              'upvotes'   => 18,
              'answers'   => 4,
              'views'     => 198,
              'answered'  => false,
            ],
            [
              'initials'  => 'YM',
              'color'     => 'from-[#10b981] to-[#065f46]',
              'author'    => 'Youssef Moussaoui',
              'role'      => 'Backend Engineer',
              'time'      => '1 day ago',
              'question'  => 'What are the trade-offs between PostgreSQL and MongoDB for a job marketplace platform?',
              'body'      => 'We are starting a new job marketplace and debating between a relational database (PostgreSQL) and a document database (MongoDB). Our data includes user profiles, job listings, applications, and messages. Which would scale better long-term?',
              'tags'      => ['PostgreSQL', 'MongoDB', 'Database', 'Architecture'],
              'upvotes'   => 41,
              'answers'   => 13,
              'views'     => 874,
              'answered'  => true,
            ],
            [
              'initials'  => 'LF',
              'color'     => 'from-[#f43f5e] to-[#9f1239]',
              'author'    => 'Layla Faris',
              'role'      => 'Product Manager',
              'time'      => '2 days ago',
              'question'  => 'How do you prioritize features when stakeholders have conflicting priorities?',
              'body'      => 'I am a PM at a mid-size startup and I often find myself stuck between engineering saying something is too complex and sales demanding it urgently. What frameworks or techniques do you use to align stakeholders and create a fair prioritization process?',
              'tags'      => ['Product Management', 'Prioritization', 'Roadmap'],
              'upvotes'   => 33,
              'answers'   => 9,
              'views'     => 541,
              'answered'  => false,
            ],
          ];
        @endphp

        @foreach($questions as $q)
        <article class="bg-surface border border-white/[0.06] rounded-2xl overflow-hidden hover:border-white/[0.1] transition-all duration-200 animate-fadeUp-1">

          {{-- Question header --}}
          <div class="p-4 pb-3">
            <div class="flex items-start gap-3">

              {{-- Avatar --}}
              <div class="w-10 h-10 rounded-full bg-gradient-to-br {{ $q['color'] }} flex items-center justify-center font-syne font-bold text-white text-sm flex-shrink-0">
                {{ $q['initials'] }}
              </div>

              <div class="flex-1 min-w-0">
                <div class="flex items-start justify-between gap-2">
                  <div>
                    <span class="font-syne font-semibold text-[13px] text-[#e8e6e0] hover:text-gold transition-colors cursor-pointer">{{ $q['author'] }}</span>
                    <span class="text-[#555] mx-1.5 text-[11px]">·</span>
                    <span class="text-[11px] text-[#7a7870]">{{ $q['role'] }}</span>
                    <p class="text-[10.5px] text-[#555] mt-0.5">{{ $q['time'] }}</p>
                  </div>
                  @if($q['answered'])
                    <span class="text-[10px] bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 px-2 py-0.5 rounded-full font-syne font-semibold flex-shrink-0">
                      ✓ Answered
                    </span>
                  @else
                    <span class="text-[10px] bg-gold/10 text-gold border border-gold/20 px-2 py-0.5 rounded-full font-syne font-semibold flex-shrink-0">
                      Open
                    </span>
                  @endif
                </div>
              </div>
            </div>

            {{-- Question title --}}
            <h3 class="font-syne font-bold text-[15px] text-[#e8e6e0] mt-3 leading-snug hover:text-gold transition-colors cursor-pointer">
              {{ $q['question'] }}
            </h3>

            {{-- Body preview --}}
            <p class="text-[12.5px] text-[#7a7870] mt-2 leading-relaxed line-clamp-2">
              {{ $q['body'] }}
            </p>

            {{-- Tags --}}
            <div class="flex flex-wrap gap-1.5 mt-3">
              @foreach($q['tags'] as $tag)
                <span class="text-[10.5px] border border-gold/20 text-gold/70 bg-gold/5 px-2.5 py-0.5 rounded-full hover:border-gold/40 hover:text-gold transition-colors cursor-pointer">
                  #{{ $tag }}
                </span>
              @endforeach
            </div>
          </div>

          {{-- Stats + Actions --}}
          <div class="flex items-center justify-between border-t border-white/[0.06] px-4 py-2.5">

            {{-- Stats --}}
            <div class="flex items-center gap-4 text-[11px] text-[#555]">
              <span>
                <svg class="w-3.5 h-3.5 inline-block -mt-0.5 mr-0.5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                {{ $q['views'] }} views
              </span>
              <span>
                <svg class="w-3.5 h-3.5 inline-block -mt-0.5 mr-0.5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                {{ $q['answers'] }} answers
              </span>
            </div>

            {{-- Actions --}}
            <div class="flex items-center gap-1">
              <button type="button" onclick="toggleUpvote(this)"
                class="upvote-btn flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-[11.5px] font-dm text-[#7a7870] hover:bg-surface2 hover:text-gold transition-all duration-200">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"/></svg>
                <span class="upvote-count">{{ $q['upvotes'] }}</span>
              </button>
              <button type="button"
                class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-[11.5px] font-dm text-[#7a7870] hover:bg-surface2 hover:text-[#e8e6e0] transition-all duration-200">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                Answer
              </button>
              <button type="button"
                class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-[11.5px] font-dm text-[#7a7870] hover:bg-surface2 hover:text-[#e8e6e0] transition-all duration-200">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
                Save
              </button>
            </div>
          </div>

        </article>
        @endforeach

      </main>

      {{-- ── RIGHT PANEL ── --}}
      <aside class="right-col sticky top-[68px] max-h-[calc(100vh-84px)] overflow-y-auto animate-fadeUp-1 space-y-3">

        {{-- Search --}}
        <div class="bg-surface border border-white/[0.06] rounded-2xl p-4">
          <p class="font-syne text-[10px] font-semibold text-[#7a7870] uppercase tracking-widest mb-3">Search questions</p>
          <div class="relative">
            <svg class="w-3.5 h-3.5 absolute left-3 top-1/2 -translate-y-1/2 text-[#555]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            <input type="text" placeholder="Keyword or topic…"
              class="w-full bg-surface2 border border-white/[0.07] rounded-xl pl-8 pr-3 py-2 text-[12.5px] text-[#e8e6e0] font-dm outline-none placeholder-[#3a3c44] focus:border-gold/40 transition-colors" />
          </div>
        </div>

        {{-- Popular tags --}}
        <div class="bg-surface border border-white/[0.06] rounded-2xl p-4">
          <p class="font-syne text-[10px] font-semibold text-[#7a7870] uppercase tracking-widest mb-3">Popular tags</p>
          <div class="flex flex-wrap gap-1.5">
            @foreach(['Laravel', 'React', 'Vue.js', 'Python', 'DevOps', 'UI/UX', 'PostgreSQL', 'Docker', 'Career', 'Remote', 'AI', 'Node.js'] as $tag)
              <span class="text-[11px] border border-gold/20 text-gold/70 bg-gold/5 px-2.5 py-1 rounded-full hover:border-gold/50 hover:text-gold transition-colors cursor-pointer">
                #{{ $tag }}
              </span>
            @endforeach
          </div>
        </div>

        {{-- Top contributors --}}
        <div class="bg-surface border border-white/[0.06] rounded-2xl p-4">
          <p class="font-syne text-[10px] font-semibold text-[#7a7870] uppercase tracking-widest mb-3">Top contributors</p>
          <div class="space-y-3">
            @php
              $contributors = [
                ['initials' => 'YM', 'color' => 'from-[#10b981] to-[#065f46]', 'name' => 'Youssef Moussaoui', 'answers' => 41],
                ['initials' => 'AK', 'color' => 'from-[#c9a84c] to-[#7c5c1e]', 'name' => 'Amine Karimi',     'answers' => 33],
                ['initials' => 'MR', 'color' => 'from-[#0ea5e9] to-[#0369a1]', 'name' => 'Mehdi Rahimi',     'answers' => 27],
              ];
            @endphp
            @foreach($contributors as $c)
            <div class="flex items-center gap-2.5">
              <div class="w-8 h-8 rounded-full bg-gradient-to-br {{ $c['color'] }} flex items-center justify-center font-syne font-bold text-white text-[11px] flex-shrink-0">
                {{ $c['initials'] }}
              </div>
              <div class="flex-1 min-w-0">
                <p class="text-[12px] font-dm text-[#e8e6e0] truncate">{{ $c['name'] }}</p>
              </div>
              <span class="text-[10.5px] text-gold font-syne font-semibold flex-shrink-0">{{ $c['answers'] }} ans</span>
            </div>
            @endforeach
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


  {{-- ───── ASK QUESTION MODAL ───── --}}
  <div id="ask-modal"
    class="hidden fixed inset-0 z-[100] bg-black/70 backdrop-blur-sm overflow-y-auto flex items-start justify-center p-4"
    onclick="if(event.target===this) document.getElementById('ask-modal').classList.add('hidden')">

    <div class="relative w-full max-w-[580px] bg-[#111318] border border-white/[0.08] rounded-2xl shadow-2xl my-auto">

      <div style="height:2px;background:linear-gradient(90deg,transparent,#c9a84c 35%,#e8c97a 50%,#c9a84c 65%,transparent);border-radius:16px 16px 0 0;"></div>

      {{-- Header --}}
      <div class="flex items-center justify-between px-5 py-4 border-b border-white/[0.06]">
        <div class="flex items-center gap-2">
          <span class="w-4 h-0.5 bg-gold rounded-full"></span>
          <h2 class="font-syne font-bold text-[15px] text-[#e8e6e0]">Ask a question</h2>
        </div>
        <button type="button"
          onclick="document.getElementById('ask-modal').classList.add('hidden')"
          class="w-8 h-8 rounded-lg flex items-center justify-center text-[#7a7870] hover:text-[#e8e6e0] hover:bg-white/[0.06] transition-all duration-200">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M18 6L6 18M6 6l12 12"/></svg>
        </button>
      </div>

      <form action="{{ route('domande.store') }}" method="POST">
        @csrf

        {{-- Author row --}}
        <div class="flex items-center gap-3 px-5 pt-4 pb-3">
          <div class="w-10 h-10 rounded-full bg-gradient-to-br from-gold to-[#7c5c1e] flex items-center justify-center font-syne font-bold text-ink text-sm flex-shrink-0">
            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
          </div>
          <div>
            <p class="font-syne font-semibold text-[13px] text-[#e8e6e0]">{{ auth()->user()->name }}</p>
            <p class="text-[11px] text-[#7a7870]">Visible to everyone · 🌐</p>
          </div>
        </div>

        <div class="mx-5 border-t border-white/[0.05] mb-4"></div>

        {{-- Question title --}}
        <div class="px-5 mb-4">
          <label class="block text-[10px] font-dm font-semibold text-[#7a7870] uppercase tracking-widest mb-1.5">
            Question <span class="text-gold">*</span>
          </label>
          <input type="text" name="question" maxlength="200" required
            placeholder="Start with: What, How, Why, When…"
            class="w-full bg-[#1a1d24] border border-white/[0.07] rounded-xl px-4 py-2.5 text-[13.5px] text-[#e8e6e0] font-dm outline-none placeholder-[#3a3c44] focus:border-gold/50 transition-colors" />
        </div>

        {{-- Details --}}
        <div class="px-5 mb-4">
          <label class="block text-[10px] font-dm font-semibold text-[#7a7870] uppercase tracking-widest mb-1.5">
            Details <span class="text-[#555] normal-case tracking-normal font-normal">— optional but helps get better answers</span>
          </label>
          <textarea name="body" rows="4" maxlength="3000"
            placeholder="Add context, what you've already tried, or what you're unsure about…"
            class="w-full bg-[#1a1d24] border border-white/[0.07] rounded-xl px-4 py-3 text-[13.5px] text-[#e8e6e0] font-dm outline-none resize-none leading-relaxed placeholder-[#3a3c44] focus:border-gold/50 transition-colors"></textarea>
        </div>

        {{-- Category --}}
        <div class="px-5 mb-4">
          <label class="block text-[10px] font-dm font-semibold text-[#7a7870] uppercase tracking-widest mb-1.5">Category</label>
          <select name="category"
            class="w-full bg-[#1a1d24] border border-white/[0.07] rounded-xl px-4 py-2.5 text-[13px] text-[#e8e6e0] font-dm outline-none cursor-pointer focus:border-gold/50 transition-colors">
            <option>Technology</option>
            <option>Career</option>
            <option>Design</option>
            <option>Business</option>
            <option>Marketing</option>
            <option>Other</option>
          </select>
        </div>

        {{-- Tags --}}
        <div class="px-5 mb-5">
          <label class="block text-[10px] font-dm font-semibold text-[#7a7870] uppercase tracking-widest mb-1.5">
            Tags <span class="text-[#555] normal-case tracking-normal font-normal">— comma separated</span>
          </label>
          <input type="text" name="tags"
            placeholder="e.g. Laravel, API, Performance"
            class="w-full bg-[#1a1d24] border border-white/[0.07] rounded-xl px-4 py-2.5 text-[13px] text-[#e8e6e0] font-dm outline-none placeholder-[#3a3c44] focus:border-gold/50 transition-colors" />
        </div>

        {{-- Footer --}}
        <div class="px-5 py-4 border-t border-white/[0.06] flex items-center justify-between gap-3 bg-[#0f1115] rounded-b-2xl">
          <button type="button"
            onclick="document.getElementById('ask-modal').classList.add('hidden')"
            class="font-dm font-medium text-[13px] text-[#7a7870] hover:text-[#e8e6e0] px-4 py-2 rounded-xl border border-white/[0.07] hover:border-white/[0.15] transition-all duration-200">
            Cancel
          </button>
          <button type="submit"
            class="btn-gold-shine font-syne font-bold text-ink text-sm px-7 py-2.5 rounded-xl inline-flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            Post question
          </button>
        </div>
      </form>
    </div>
  </div>

<script>
  function toggleUpvote(btn) {
    var countEl = btn.querySelector('.upvote-count');
    var count   = parseInt(countEl.textContent);
    var active  = btn.classList.contains('upvoted');
    if (active) {
      btn.classList.remove('upvoted', 'text-gold');
      btn.classList.add('text-[#7a7870]');
      countEl.textContent = count - 1;
    } else {
      btn.classList.add('upvoted', 'text-gold');
      btn.classList.remove('text-[#7a7870]');
      countEl.textContent = count + 1;
    }
  }
</script>

</body>
