<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Courses — 7erayfi</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            gold: '#c9a84c',
            'gold-light': '#e8c97a',
            'gold-dim': 'rgba(201,168,76,0.12)',
            ink: '#0b0c10',
            surface: '#111318',
            surface2: '#1a1d24',
            surface3: '#22262f',
          },
          fontFamily: {
            syne: ['Syne', 'sans-serif'],
            dm: ['DM Sans', 'sans-serif'],
          },
          boxShadow: {
            'gold-glow': '0 0 30px rgba(201,168,76,0.18)',
            'gold-sm': '0 4px 18px rgba(201,168,76,0.16)',
          },
        },
      },
    }
  </script>

  <style>
    .btn-gold {
      background: linear-gradient(135deg, #c9a84c, #a07830);
      transition: all 0.2s;
    }
    .btn-gold:hover {
      background: linear-gradient(135deg, #e8c97a, #c9a84c);
      box-shadow: 0 4px 18px rgba(201,168,76,0.3);
    }
    .course-card:hover .course-thumb {
      transform: scale(1.04);
    }
    .course-thumb {
      transition: transform 0.4s ease;
    }
    .filter-label {
      display: block;
      font-size: 11px;
      font-family: 'Syne', sans-serif;
      font-weight: 700;
      color: #7a7870;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      margin-bottom: 6px;
    }
    .progress-bar {
      height: 3px;
      background: rgba(201,168,76,0.15);
      border-radius: 99px;
      overflow: hidden;
    }
    .progress-fill {
      height: 100%;
      background: linear-gradient(90deg, #c9a84c, #e8c97a);
      border-radius: 99px;
    }
  </style>
</head>
<body class="bg-ink text-[#e8e6e0] min-h-screen">

  @include('header')

  <div class="max-w-[1400px] mx-auto px-4 py-6 relative z-10">

    <!-- Page Header -->
    <div class="flex items-start justify-between mb-8 gap-4">
      <div>
        <div class="flex items-center gap-2 mb-2">
          <span class="w-5 h-0.5 bg-gold rounded-full"></span>
          <span class="text-gold text-xs font-dm font-medium tracking-widest uppercase">Knowledge</span>
        </div>
        <h1 class="font-syne font-800 text-3xl text-[#e8e6e0] leading-tight">Explore Courses</h1>
        <p class="text-[#7a7870] text-sm mt-1 font-dm">Learn from Morocco's finest artisan masters</p>
      </div>
      <a href="#" class="inline-flex items-center gap-2 border border-gold/40 text-gold/90 hover:border-gold hover:text-gold bg-gold/5 hover:bg-gold/10 px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 whitespace-nowrap mt-1">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="15 18 9 12 15 6"/></svg>
        Back to feed
      </a>
    </div>

    <!-- Two-column layout -->
    <div class="flex gap-5 items-start">

      <!-- ── Courses Column ── -->
      <div class="flex-1 min-w-0">

        <!-- Toprow bar -->
        <div class="flex items-center justify-between gap-3 bg-surface border border-white/[0.06] rounded-2xl px-5 py-4 mb-5">
          <div>
            <p class="text-[#7a7870] text-xs font-dm mb-0.5">Available courses</p>
            <p class="font-syne font-bold text-2xl text-[#e8e6e0]">24 <span class="text-gold">courses</span></p>
          </div>
          <div class="flex items-center gap-2">
            <span class="text-xs text-[#7a7870] hidden sm:block">Sort:</span>
            <select class="bg-surface2 border border-white/[0.07] text-[#e8e6e0] text-xs rounded-lg px-3 py-2 focus:border-gold/60 transition-colors cursor-pointer">
              <option>Most popular</option>
              <option>Newest</option>
              <option>Price</option>
              <option>Rating</option>
            </select>
          </div>
        </div>

        <!-- ── Course Cards ── -->

        <!-- Card 1 -->
       @foreach ($courses as $course)
<div class="course-card group bg-surface border border-white/[0.06] rounded-2xl mb-3 hover:border-gold/40 hover:shadow-gold-sm transition-all duration-300 cursor-pointer overflow-hidden flex">

  <!-- Thumbnail -->
  <div class="w-[200px] flex-shrink-0 overflow-hidden relative">
    <img
      src="{{ $course->url ?? 'https://via.placeholder.com/300x200' }}"
      class="course-thumb w-full h-full object-cover min-h-[160px]"
      alt="{{ $course->title }}"
    >

    <!-- Level badge (static for now) -->
    <span class="absolute top-3 left-3 text-[10px] font-dm font-bold bg-ink/80 backdrop-blur-sm text-gold border border-gold/30 px-2 py-0.5 rounded-full">
      Beginner
    </span>
  </div>

  <!-- Content -->
  <div class="flex-1 p-5 flex flex-col justify-between">
    <div>
      <div class="flex items-start justify-between gap-3 mb-2">

        <div>
          <!-- Category + duration -->
          <div class="flex items-center gap-2 mb-1.5">
            <span class="text-[11px] text-gold/70 font-dm bg-gold/8 border border-gold/20 px-2 py-0.5 rounded-full">
              {{ $course->category->name ?? 'Artisanat' }}
            </span>
            <span class="text-[11px] text-[#7a7870]">·</span>
            <span class="text-[11px] text-[#7a7870] font-dm">
              6h 30min
            </span>
          </div>

          <!-- Title -->
          <h2 class="font-syne font-bold text-[17px] text-[#e8e6e0] leading-snug">
            {{ $course->title }}
          </h2>

          <!-- Instructor -->
          <p class="text-[13px] text-[#9ca3af] mt-0.5">
            par {{ $course->user->name ?? 'Maître Artisan' }}
          </p>
        </div>

        <!-- Price -->
        <div class="text-right flex-shrink-0">
          <p class="font-syne font-bold text-gold text-lg">
            Gratuit
          </p>
        </div>
      </div>

      <!-- Article (description) -->
      <p class="text-sm text-[#94a3b8] leading-relaxed line-clamp-2">
        {{ $course->article }}
      </p>
    </div>

    <!-- Bottom -->
    <div class="mt-3">

      <!-- Progress -->
      <div class="progress-bar mb-3">
        <div class="progress-fill" style="width: 0%"></div>
      </div>

      <div class="flex items-center justify-between gap-3">

        <div class="flex items-center gap-3">

          <!-- Rating (static for now) -->
          <div class="flex items-center gap-1">
            <svg class="w-3.5 h-3.5 text-gold fill-gold" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
            </svg>
            <span class="text-xs text-[#e8e6e0] font-dm font-medium">4.8</span>
            <span class="text-[11px] text-[#7a7870]">(120)</span>
          </div>

          <!-- Students -->
          <div class="flex items-center gap-1">
            <svg class="w-3 h-3 text-[#7a7870]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
              <circle cx="9" cy="7" r="4"/>
            </svg>
            <span class="text-[11px] text-[#7a7870]">300 étudiants</span>
          </div>

        </div>

        <!-- Button -->
        <button class="btn-gold font-dm font-semibold text-ink text-xs px-4 py-1.5 rounded-lg">
          Voir le cours →
        </button>
      </div>
    </div>

  </div>
</div>
@endforeach

        <!-- Static demo card -->
        <div class="course-card group bg-surface border border-white/[0.06] rounded-2xl mb-3 hover:border-gold/40 hover:shadow-gold-sm transition-all duration-300 cursor-pointer overflow-hidden flex">
          <div class="w-[200px] flex-shrink-0 overflow-hidden relative">
            <div class="course-thumb w-full h-full bg-gradient-to-br from-indigo-500/20 via-surface2 to-surface3 flex items-center justify-center min-h-[160px]">
              <svg class="w-12 h-12 text-indigo-400/30" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg>
            </div>
            <span class="absolute top-3 left-3 text-[10px] font-dm font-bold bg-ink/80 backdrop-blur-sm text-indigo-400 border border-indigo-400/30 px-2 py-0.5 rounded-full">Intermédiaire</span>
          </div>
          <div class="flex-1 p-5 flex flex-col justify-between">
            <div>
              <div class="flex items-start justify-between gap-3 mb-2">
                <div>
                  <div class="flex items-center gap-2 mb-1.5">
                    <span class="text-[11px] text-gold/70 font-dm bg-gold/8 border border-gold/20 px-2 py-0.5 rounded-full">Zellige</span>
                    <span class="text-[11px] text-[#7a7870]">·</span>
                    <span class="text-[11px] text-[#7a7870] font-dm">8h 15min</span>
                  </div>
                  <h2 class="font-syne font-bold text-[17px] text-[#e8e6e0] leading-snug">Maîtriser l'Art du Zellige Marocain</h2>
                  <p class="text-[13px] text-[#9ca3af] mt-0.5">par Hassan El Fassi</p>
                </div>
                <div class="text-right flex-shrink-0">
                  <p class="font-syne font-bold text-gold text-lg">350 MAD</p>
                </div>
              </div>
              <p class="text-sm text-[#94a3b8] leading-relaxed line-clamp-2">Apprenez les techniques ancestrales du zellige de Fès, de la coupe à la pose, avec un maître artisan reconnu.</p>
            </div>
            <div class="mt-3">
              <div class="progress-bar mb-3"><div class="progress-fill" style="width: 60%"></div></div>
              <div class="flex items-center justify-between gap-3">
                <div class="flex items-center gap-3">
                  <div class="flex items-center gap-1">
                    <svg class="w-3.5 h-3.5 text-gold fill-gold" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <span class="text-xs text-[#e8e6e0] font-dm font-medium">4.9</span>
                    <span class="text-[11px] text-[#7a7870]">(89)</span>
                  </div>
                  <div class="flex items-center gap-1">
                    <svg class="w-3 h-3 text-[#7a7870]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                    <span class="text-[11px] text-[#7a7870]">210 étudiants</span>
                  </div>
                </div>
                <button class="btn-gold font-dm font-semibold text-ink text-xs px-4 py-1.5 rounded-lg">Voir le cours →</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Load more -->
        <div class="flex justify-center mt-6">
          <button class="btn-gold font-syne font-bold text-sm text-ink px-8 py-2.5 rounded-xl">
            Load 8 more courses
          </button>
        </div>
      </div>

      <!-- ── Filters Sidebar ── -->
      <aside class="w-[240px] flex-shrink-0 sticky top-[68px]">

        <!-- CTA card -->
        <div class="bg-gradient-to-br from-gold/10 to-transparent border border-gold/20 rounded-2xl p-4 mb-4">
          <div class="flex items-center gap-2 mb-2">
            <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg>
            <span class="font-syne font-bold text-sm text-gold">Teach on 7erayfi</span>
          </div>
          <p class="text-[12px] text-[#7a7870] mb-3 leading-relaxed">Share your artisan skills and earn income online.</p>
          <button class="w-full btn-gold font-dm font-semibold text-ink text-xs py-2 rounded-lg">Become instructor</button>
        </div>

        <!-- Filters panel -->
        <div class="bg-surface border border-white/[0.06] rounded-2xl p-4">
          <div class="flex items-center justify-between mb-4">
            <div class="flex items-center gap-1.5">
              <svg class="w-3.5 h-3.5 text-gold" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg>
              <span class="font-syne font-bold text-xs text-gold tracking-widest uppercase">Filters</span>
            </div>
            <button class="text-[11px] text-[#7a7870] hover:text-gold transition-colors">Clear all</button>
          </div>

          <div class="space-y-4">

            <div>
              <span class="filter-label">Category</span>
              <select class="w-full bg-surface2 border border-white/[0.07] rounded-lg px-3 py-2 text-xs text-[#e8e6e0] transition-colors cursor-pointer">
                <option>All categories</option>
                <option>Zellige</option>
                <option>Céramique</option>
                <option>Cuir</option>
                <option>Broderie</option>
                <option>Tapis</option>
              </select>
            </div>

            <div>
              <span class="filter-label">Level</span>
              <select class="w-full bg-surface2 border border-white/[0.07] rounded-lg px-3 py-2 text-xs text-[#e8e6e0] transition-colors cursor-pointer">
                <option>Any level</option>
                <option>Débutant</option>
                <option>Intermédiaire</option>
                <option>Avancé</option>
              </select>
            </div>

            <div>
              <span class="filter-label">Price</span>
              <div class="flex flex-col gap-2 mt-1">
                <label class="flex items-center gap-2 cursor-pointer">
                  <input type="checkbox" class="accent-[#c9a84c]" checked />
                  <span class="text-xs text-[#c5c7d0]">Gratuit</span>
                </label>
                <label class="flex items-center gap-2 cursor-pointer">
                  <input type="checkbox" class="accent-[#c9a84c]" checked />
                  <span class="text-xs text-[#c5c7d0]">Payant</span>
                </label>
              </div>
            </div>

            <div>
              <span class="filter-label">Language</span>
              <div class="flex flex-col gap-2 mt-1">
                <label class="flex items-center gap-2 cursor-pointer">
                  <input type="checkbox" class="accent-[#c9a84c]" checked />
                  <span class="text-xs text-[#c5c7d0]">Français</span>
                </label>
                <label class="flex items-center gap-2 cursor-pointer">
                  <input type="checkbox" class="accent-[#c9a84c]" />
                  <span class="text-xs text-[#c5c7d0]">Darija</span>
                </label>
                <label class="flex items-center gap-2 cursor-pointer">
                  <input type="checkbox" class="accent-[#c9a84c]" />
                  <span class="text-xs text-[#c5c7d0]">العربية</span>
                </label>
              </div>
            </div>

            <div>
              <span class="filter-label">Rating</span>
              <div class="flex flex-col gap-2 mt-1">
                <label class="flex items-center gap-2 cursor-pointer">
                  <input type="radio" name="rating" class="accent-[#c9a84c]" checked />
                  <span class="text-xs text-[#c5c7d0] flex items-center gap-1">
                    <svg class="w-3 h-3 text-gold fill-gold" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    4.5 & up
                  </span>
                </label>
                <label class="flex items-center gap-2 cursor-pointer">
                  <input type="radio" name="rating" class="accent-[#c9a84c]" />
                  <span class="text-xs text-[#c5c7d0] flex items-center gap-1">
                    <svg class="w-3 h-3 text-gold fill-gold" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    4.0 & up
                  </span>
                </label>
              </div>
            </div>

            <button class="w-full btn-gold font-syne font-bold text-ink text-xs py-2.5 rounded-lg">
              Apply filters
            </button>
          </div>
        </div>
      </aside>
    </div>
  </div>

</body>
</html>
