<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home — 7RAYFI</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
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
            dm: ['DM Sans', 'sans-serif'],
          },
          keyframes: {
            fadeUp: {
              '0%': { opacity: '0', transform: 'translateY(16px)' },
              '100%': { opacity: '1', transform: 'translateY(0)' },
            },
            pulse2: {
              '0%, 100%': { opacity: '1' },
              '50%': { opacity: '0.35' },
            },
            shimmer: {
              '0%': { backgroundPosition: '-400px 0' },
              '100%': { backgroundPosition: '400px 0' },
            },
          },
          animation: {
            fadeUp: 'fadeUp 0.5s ease both',
            'fadeUp-1': 'fadeUp 0.5s 0.05s ease both',
            'fadeUp-2': 'fadeUp 0.5s 0.12s ease both',
            'fadeUp-3': 'fadeUp 0.5s 0.19s ease both',
            'fadeUp-4': 'fadeUp 0.5s 0.26s ease both',
          },
        },
      },
    }
  </script>

  <style>
    body { font-family: 'DM Sans', sans-serif; }

    body::before {
      content: '';
      position: fixed;
      inset: 0;
      background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
      pointer-events: none;
      z-index: 0;
      opacity: 0.5;
    }

    .gold-bar {
      background: linear-gradient(90deg, transparent, #c9a84c 35%, #e8c97a 50%, #c9a84c 65%, transparent);
      height: 1px;
    }

    /* Profile banner hatching */
    .profile-banner-hatch {
      background: linear-gradient(135deg, #1a1000 0%, #3d2b00 50%, #1a1000 100%);
      position: relative;
    }
    .profile-banner-hatch::after {
      content: '';
      position: absolute;
      inset: 0;
      background: repeating-linear-gradient(45deg, transparent, transparent 8px, rgba(201,168,76,0.07) 8px, rgba(201,168,76,0.07) 9px);
    }

    /* Shimmer gold button */
    .btn-gold-shine {
      background: linear-gradient(90deg, #c9a84c 0%, #e8c97a 50%, #c9a84c 100%);
      background-size: 200% 100%;
      transition: background-position 0.4s ease, box-shadow 0.3s ease;
    }
    .btn-gold-shine:hover {
      background-position: -100% 0;
      box-shadow: 0 0 22px rgba(201,168,76,0.45);
    }

    /* Post card hover glow */
    .post-card {
      position: relative;
      overflow: hidden;
      transition: border-color 0.25s, box-shadow 0.25s;
    }
    .post-card::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(ellipse at top left, rgba(201,168,76,0.06), transparent 60%);
      opacity: 0;
      transition: opacity 0.35s ease;
      pointer-events: none;
    }
    .post-card:hover::before { opacity: 1; }
    .post-card:hover { border-color: rgba(201,168,76,0.35) !important; box-shadow: 0 4px 20px rgba(201,168,76,0.1); }

    /* Liked state */
    .liked-btn svg { stroke: #c9a84c; fill: rgba(201,168,76,0.15); }
    .liked-btn { color: #c9a84c !important; }

    /* Scrollbar */
    ::-webkit-scrollbar { width: 5px; }
    ::-webkit-scrollbar-track { background: #0b0c10; }
    ::-webkit-scrollbar-thumb { background: #2a2c34; border-radius: 8px; }
    ::-webkit-scrollbar-thumb:hover { background: rgba(201,168,76,0.35); }

    input::placeholder, textarea::placeholder { color: #3a3c44; }
    input:focus, textarea:focus, select:focus { outline: none; border-color: rgba(201,168,76,0.5) !important; }
    select option { background: #1a1d24; }
    @keyframes spin { to { transform: rotate(360deg); } }

    @media (max-width: 1024px) { .right-col { display: none; } }
    @media (max-width: 768px) { .left-col { display: none; } }
  </style>
</head>

<body class="bg-ink text-[#e8e6e0] min-h-screen">

  <!-- ───── TOPBAR ───── -->
 @include('header')

  <!-- ───── LAYOUT ───── -->
  <div class="relative z-10 max-w-[1100px] mx-auto px-4 py-6 grid grid-cols-[220px_1fr_248px] gap-5 lg:grid-cols-[220px_1fr] md:grid-cols-1">

    <!-- ── LEFT SIDEBAR ── -->
    <aside class="left-col sticky top-[68px] max-h-[calc(100vh-84px)] overflow-y-auto animate-fadeUp">

      <!-- Profile card -->
      <div class="bg-surface border border-white/[0.06] rounded-2xl overflow-hidden mb-3">
        <!-- Banner -->
        <div class="profile-banner-hatch h-14 relative"></div>
        <!-- Avatar -->
        <div class="-mt-6 ml-3.5 w-12 h-12 rounded-full bg-gradient-to-br from-gold to-[#7c5c1e] flex items-center justify-center font-syne font-bold text-ink text-base border-[3px] border-surface relative z-10">A</div>
        <!-- Info -->
        <div class="px-3.5 pt-1.5 pb-4">
          <p class="font-syne font-bold text-sm text-[#e8e6e0] mb-0.5">Ahmed Bensalem</p>
          <p class="text-[11px] text-[#7a7870] leading-relaxed">Full Stack Developer · Open to work</p>
        </div>
        <!-- Stats -->
        <div class="border-t border-white/[0.06]">
          <div class="flex justify-between items-center px-3.5 py-2.5 hover:bg-surface2 transition-colors cursor-pointer">
            <span class="text-[11px] text-[#7a7870]">Profile views</span>
            <span class="text-[12px] text-gold font-semibold font-syne">142</span>
          </div>
          <div class="flex justify-between items-center px-3.5 py-2.5 hover:bg-surface2 transition-colors cursor-pointer border-t border-white/[0.04]">
            <span class="text-[11px] text-[#7a7870]">Impressions</span>
            <span class="text-[12px] text-gold font-semibold font-syne">1,234</span>
          </div>
          <div class="flex justify-between items-center px-3.5 py-2.5 hover:bg-surface2 transition-colors cursor-pointer border-t border-white/[0.04]">
            <span class="text-[11px] text-[#7a7870]">Connections</span>
            <span class="text-[12px] text-gold font-semibold font-syne">523</span>
          </div>
        </div>
      </div>

      <!-- Quick links -->
      <div class="bg-surface border border-white/[0.06] rounded-2xl p-3.5 mb-3">
        <p class="font-syne text-[10px] font-semibold text-[#7a7870] uppercase tracking-widest mb-3">Quick access</p>
        <nav class="flex flex-col gap-0.5">
          <a href="#" class="flex items-center gap-2.5 px-2 py-2 rounded-lg text-[12.5px] text-[#a09e97] hover:text-gold hover:bg-gold/5 transition-all duration-200">
            <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            My Groups
          </a>
          <a href="#" class="flex items-center gap-2.5 px-2 py-2 rounded-lg text-[12.5px] text-[#a09e97] hover:text-gold hover:bg-gold/5 transition-all duration-200">
            <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            Events
          </a>
          <a href="#" class="flex items-center gap-2.5 px-2 py-2 rounded-lg text-[12.5px] text-[#a09e97] hover:text-gold hover:bg-gold/5 transition-all duration-200">
            <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
            Newsletters
          </a>
          <a href="#" class="flex items-center gap-2.5 px-2 py-2 rounded-lg text-[12.5px] text-[#a09e97] hover:text-gold hover:bg-gold/5 transition-all duration-200">
            <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
            Saved items
          </a>
          <button class="flex items-center gap-2.5 px-2 py-2 rounded-lg text-[12.5px] text-[#a09e97] hover:text-red-400 hover:bg-red-500/5 transition-all duration-200 w-full text-left mt-1 border-t border-white/[0.04] pt-3">
            <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
            Sign Out
          </button>
        </nav>
      </div>
    </aside>

    <!-- ── FEED ── -->
    <main class="min-w-0">

      <!-- Add Post CTA -->
      <div class="flex justify-end mb-4 animate-fadeUp">
        <button onclick="openModal()" class="btn-gold-shine font-syne font-bold text-ink text-sm px-5 py-2.5 rounded-xl inline-flex items-center gap-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg>
          Add post
        </button>
      </div>

      <!-- Create post box -->


      <!-- ── POST CARDS ── -->

      <!-- Post 1 — Dynamic  -->
      <article class="post-card bg-surface border border-white/[0.06] rounded-2xl mb-4 animate-fadeUp-1">
        <div class="p-4 pb-0">
          <div class="flex items-start gap-3">
            <div class="w-11 h-11 rounded-full bg-gradient-to-br from-pink-500 to-orange-400 flex items-center justify-center font-syne font-bold text-white text-sm flex-shrink-0">SC</div>
            <div class="flex-1 min-w-0">
              <div class="flex items-start justify-between gap-2">
                <div>
                  <h4 class="font-syne font-semibold text-[14px] text-[#e8e6e0] hover:text-gold transition-colors cursor-pointer leading-tight">Sara Chakir</h4>
                  <p class="text-[11.5px] text-[#7a7870] mt-0.5">Product Lead · Atlas Digital</p>
                  <p class="text-[10.5px] text-[#555] mt-0.5 flex items-center gap-1">2h · <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"/></svg></p>
                </div>
                <button class="text-[#555] hover:text-[#7a7870] transition-colors p-1 rounded-lg hover:bg-surface2">
                  <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/></svg>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="px-4 py-3 text-[13.5px] text-[#ccc8c0] leading-[1.7]">
          Excited to announce that our team just shipped a major update to our hiring platform! 6 months of work, countless iterations, and a lot of coffee ☕. The new design system alone cut our dev time by 40%. Proud of what we built. 🚀
        </div>
        <!-- Stats row -->
        <div class="px-4 py-2 flex justify-between text-[11.5px] text-[#555] border-t border-white/[0.06]">
          <span class="hover:text-gold cursor-pointer transition-colors flex items-center gap-1">
            <span class="text-gold">👍</span> 234 likes
          </span>
          <div class="flex gap-4">
            <span class="hover:text-gold cursor-pointer transition-colors">42 comments</span>
            <span class="hover:text-gold cursor-pointer transition-colors">18 shares</span>
          </div>
        </div>
        <!-- Actions -->
        <div class="flex border-t border-white/[0.04]">
          <button onclick="toggleLike(this)" class="like-btn flex-1 flex items-center justify-center gap-1.5 py-2.5 text-[12px] font-medium text-[#7a7870] hover:bg-surface2 hover:text-[#e8e6e0] transition-all duration-200 rounded-bl-2xl">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/></svg>
            Like
          </button>
          <button class="flex-1 flex items-center justify-center gap-1.5 py-2.5 text-[12px] font-medium text-[#7a7870] hover:bg-surface2 hover:text-[#e8e6e0] transition-all duration-200">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
            Comment
          </button>
          <button class="flex-1 flex items-center justify-center gap-1.5 py-2.5 text-[12px] font-medium text-[#7a7870] hover:bg-surface2 hover:text-[#e8e6e0] transition-all duration-200">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/></svg>
            Repost
          </button>
          <button class="flex-1 flex items-center justify-center gap-1.5 py-2.5 text-[12px] font-medium text-[#7a7870] hover:bg-surface2 hover:text-[#e8e6e0] transition-all duration-200 rounded-br-2xl">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
            Send
          </button>
        </div>
      </article>

      <!-- Post 2 -->
      <article class="post-card bg-surface border border-white/[0.06] rounded-2xl mb-4 animate-fadeUp-2">
        <div class="p-4 pb-0">
          <div class="flex items-start gap-3">
            <div class="w-11 h-11 rounded-full bg-gradient-to-br from-blue-500 to-cyan-400 flex items-center justify-center font-syne font-bold text-white text-sm flex-shrink-0">MR</div>
            <div class="flex-1 min-w-0">
              <div class="flex items-start justify-between gap-2">
                <div>
                  <div class="flex items-center gap-2">
                    <h4 class="font-syne font-semibold text-[14px] text-[#e8e6e0] hover:text-gold transition-colors cursor-pointer leading-tight">Marcus Rodriguez</h4>
                    <span class="text-[10px] font-dm bg-blue-500/10 text-blue-400 border border-blue-500/25 px-2 py-0.5 rounded-full">Hiring</span>
                  </div>
                  <p class="text-[11.5px] text-[#7a7870] mt-0.5">Engineering Manager · AI & Machine Learning</p>
                  <p class="text-[10.5px] text-[#555] mt-0.5">5h · 🌐</p>
                </div>
                <button class="text-[#555] hover:text-[#7a7870] transition-colors p-1 rounded-lg hover:bg-surface2">
                  <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/></svg>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="px-4 py-3 text-[13.5px] text-[#ccc8c0] leading-[1.7]">
          Looking for talented ML engineers to join our growing team. We're building the next generation of AI-powered solutions for the MENA market. Drop a comment or DM if interested! 💡
        </div>
        <!-- Highlight box -->
        <div class="mx-4 mb-3 bg-blue-500/5 border border-blue-500/15 rounded-xl px-3.5 py-2.5 flex items-center justify-between gap-3">
          <div>
            <p class="text-[12px] font-syne font-semibold text-[#e8e6e0]">Senior ML Engineer — Remote</p>
            <p class="text-[11px] text-[#7a7870] mt-0.5">TechVision · Competitive salary + equity</p>
          </div>
          <button class="text-[11px] font-dm font-semibold border border-blue-400/40 text-blue-400 hover:bg-blue-500/10 px-3 py-1.5 rounded-lg transition-colors whitespace-nowrap">View job</button>
        </div>
        <div class="px-4 py-2 flex justify-between text-[11.5px] text-[#555] border-t border-white/[0.06]">
          <span class="hover:text-gold cursor-pointer transition-colors flex items-center gap-1"><span class="text-gold">👍</span> 156 likes</span>
          <div class="flex gap-4">
            <span class="hover:text-gold cursor-pointer transition-colors">28 comments</span>
            <span class="hover:text-gold cursor-pointer transition-colors">12 shares</span>
          </div>
        </div>
        <div class="flex border-t border-white/[0.04]">
          <button onclick="toggleLike(this)" class="like-btn flex-1 flex items-center justify-center gap-1.5 py-2.5 text-[12px] font-medium text-[#7a7870] hover:bg-surface2 hover:text-[#e8e6e0] transition-all duration-200 rounded-bl-2xl">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/></svg>
            Like
          </button>
          <button class="flex-1 flex items-center justify-center gap-1.5 py-2.5 text-[12px] font-medium text-[#7a7870] hover:bg-surface2 hover:text-[#e8e6e0] transition-all duration-200">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
            Comment
          </button>
          <button class="flex-1 flex items-center justify-center gap-1.5 py-2.5 text-[12px] font-medium text-[#7a7870] hover:bg-surface2 hover:text-[#e8e6e0] transition-all duration-200">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/></svg>
            Repost
          </button>
          <button class="flex-1 flex items-center justify-center gap-1.5 py-2.5 text-[12px] font-medium text-[#7a7870] hover:bg-surface2 hover:text-[#e8e6e0] transition-all duration-200 rounded-br-2xl">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
            Send
          </button>
        </div>
      </article>

      <!-- Post 3 -->
      <article class="post-card bg-surface border border-white/[0.06] rounded-2xl mb-4 animate-fadeUp-3">
        <div class="p-4 pb-0">
          <div class="flex items-start gap-3">
            <div class="w-11 h-11 rounded-full bg-gradient-to-br from-gold to-[#7c5c1e] flex items-center justify-center font-syne font-bold text-ink text-sm flex-shrink-0">AZ</div>
            <div class="flex-1 min-w-0">
              <div class="flex items-start justify-between gap-2">
                <div>
                  <h4 class="font-syne font-semibold text-[14px] text-[#e8e6e0] hover:text-gold transition-colors cursor-pointer leading-tight">Ali Zlayji</h4>
                  <p class="text-[11.5px] text-[#7a7870] mt-0.5">Full Stack Developer · Open to opportunities</p>
                  <p class="text-[10.5px] text-[#555] mt-0.5">1d · 🌐</p>
                </div>
                <button class="text-[#555] hover:text-[#7a7870] transition-colors p-1 rounded-lg hover:bg-surface2">
                  <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/></svg>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="px-4 py-3 text-[13.5px] text-[#ccc8c0] leading-[1.7]">
          Just completed my Laravel + Vue.js project — a full professional networking platform from scratch. The backend architecture alone taught me more than 3 months of tutorials. Happy to share the GitHub repo! 🔥
        </div>
        <!-- Tech tags -->
        <div class="px-4 mb-3 flex gap-1.5 flex-wrap">
          <span class="text-[11px] border border-gold/30 text-gold/80 bg-gold/5 px-2.5 py-1 rounded-full">Laravel</span>
          <span class="text-[11px] border border-gold/30 text-gold/80 bg-gold/5 px-2.5 py-1 rounded-full">Vue.js</span>
          <span class="text-[11px] border border-white/10 text-[#7a7870] px-2.5 py-1 rounded-full">Open Source</span>
        </div>
        <div class="px-4 py-2 flex justify-between text-[11.5px] text-[#555] border-t border-white/[0.06]">
          <span class="hover:text-gold cursor-pointer transition-colors flex items-center gap-1"><span class="text-gold">🔥</span> 89 likes</span>
          <div class="flex gap-4">
            <span class="hover:text-gold cursor-pointer transition-colors">17 comments</span>
            <span class="hover:text-gold cursor-pointer transition-colors">6 shares</span>
          </div>
        </div>
        <div class="flex border-t border-white/[0.04]">
          <button onclick="toggleLike(this)" class="like-btn flex-1 flex items-center justify-center gap-1.5 py-2.5 text-[12px] font-medium text-[#7a7870] hover:bg-surface2 hover:text-[#e8e6e0] transition-all duration-200 rounded-bl-2xl">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/></svg>
            Like
          </button>
          <button class="flex-1 flex items-center justify-center gap-1.5 py-2.5 text-[12px] font-medium text-[#7a7870] hover:bg-surface2 hover:text-[#e8e6e0] transition-all duration-200">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
            Comment
          </button>
          <button class="flex-1 flex items-center justify-center gap-1.5 py-2.5 text-[12px] font-medium text-[#7a7870] hover:bg-surface2 hover:text-[#e8e6e0] transition-all duration-200">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/></svg>
            Repost
          </button>
          <button class="flex-1 flex items-center justify-center gap-1.5 py-2.5 text-[12px] font-medium text-[#7a7870] hover:bg-surface2 hover:text-[#e8e6e0] transition-all duration-200 rounded-br-2xl">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
            Send
          </button>
        </div>
      </article>

    </main>

    <!-- ── RIGHT SIDEBAR ── -->
    <aside class="right-col sticky top-[68px] max-h-[calc(100vh-84px)] overflow-y-auto animate-fadeUp-1">



      <!-- Footer links -->


    </aside>
  </div>

  <!-- ───── ADD POST MODAL ───── -->
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        @method('post')
          <div id="post-modal" class="fixed inset-0 z-[100] flex items-center justify-center p-4" style="display:none!important;">
    <!-- Backdrop -->
    <div id="modal-backdrop" onclick="closeModal()" class="absolute inset-0 bg-black/70 backdrop-blur-sm" style="opacity:0;transition:opacity 0.25s ease;"></div>

    <!-- Panel -->
    <div id="modal-panel" class="relative w-full max-w-[560px] bg-[#111318] border border-white/[0.08] rounded-2xl shadow-2xl overflow-hidden" style="opacity:0;transform:translateY(24px) scale(0.97);transition:opacity 0.3s ease,transform 0.3s ease;">

      <!-- Gold top accent -->
      <div style="height:2px;background:linear-gradient(90deg,transparent,#c9a84c 35%,#e8c97a 50%,#c9a84c 65%,transparent);"></div>

      <!-- Header -->
      <div class="flex items-center justify-between px-5 py-4 border-b border-white/[0.06]">
        <div class="flex items-center gap-2">
          <span class="w-4 h-0.5 bg-gold rounded-full"></span>
          <h2 class="font-syne font-bold text-[15px] text-[#e8e6e0]">Create a post</h2>
        </div>
        <button onclick="closeModal()" class="w-8 h-8 rounded-lg flex items-center justify-center text-[#7a7870] hover:text-[#e8e6e0] hover:bg-white/[0.06] transition-all duration-200">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M18 6L6 18M6 6l12 12"/></svg>
        </button>
      </div>
      <label class="block text-[10px] font-dm font-semibold text-[#7a7870] uppercase tracking-widest mb-1.5">
            Title <span class="text-[#c9a84c]">*</span>
        </label>
        <input type="text" name="title"
                placeholder="Give your post a headline…"
                class="w-full bg-[#1a1d24] border border-white/[0.07] rounded-xl px-4 py-2.5 text-[13.5px] text-[#e8e6e0] font-dm outline-none transition-colors placeholder-[#3a3c44]"
                style="border-color:rgba(255,255,255,0.07);"
                onfocus="this.style.borderColor='rgba(201,168,76,0.5)'"
                onblur="this.style.borderColor='rgba(255,255,255,0.07)'"
                />

      <!-- Textarea -->
      <div class="px-5 pb-3">
        <textarea id="post-content" name="description" rows="5" placeholder="What do you want to talk about?" class="w-full bg-transparent text-[14px] text-[#e8e6e0] placeholder-[#3a3c44] resize-none outline-none leading-relaxed font-dm"></textarea>
      </div>

      <!-- Media type tabs -->
      <div id="media-preview" class="hidden px-5 pb-3">
        <div class="bg-[#1a1d24] border border-dashed border-white/[0.1] rounded-xl p-6 flex flex-col items-center justify-center gap-2 text-center">
          <svg class="w-8 h-8 text-[#555]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
          <p class="text-[12px] text-[#7a7870]">Click to upload photo or video</p>
          <p class="text-[10px] text-[#555]">PNG, JPG, GIF, MP4 up to 20MB</p>
          <input type="file" class="hidden" id="media-input" accept="image/*,video/*" onchange="previewFile(this)" />
          <button type="submit" onclick="document.getElementById('media-input').click()" class="mt-1 text-[11px] font-dm font-semibold border border-white/10 text-[#a09e97] hover:border-gold/30 hover:text-gold px-4 py-1.5 rounded-lg transition-all duration-200">Browse files</button>
        </div>
      </div>

      <!-- Char counter -->
      <div class="px-5 pb-1 flex justify-end">
        <span id="char-count" class="text-[11px] text-[#555]">0 / 3000</span>
      </div>

      <!-- Bottom toolbar -->
      <div class="px-5 py-3 border-t border-white/[0.06] flex items-center justify-between gap-3">
        <!-- Media actions -->
        <div class="flex items-center gap-1">
          <button onclick="toggleMedia()" title="Add photo/video" class="w-8 h-8 rounded-lg flex items-center justify-center text-[#7a7870] hover:text-gold hover:bg-gold/5 transition-all duration-200">
            <svg class="w-4.5 h-4.5" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
          </button>
          <button title="Add hashtag" onclick="insertHashtag()" class="w-8 h-8 rounded-lg flex items-center justify-center text-[#7a7870] hover:text-gold hover:bg-gold/5 transition-all duration-200">
            <svg class="w-4.5 h-4.5" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><line x1="4" y1="9" x2="20" y2="9"/><line x1="4" y1="15" x2="20" y2="15"/><line x1="10" y1="3" x2="8" y2="21"/><line x1="16" y1="3" x2="14" y2="21"/></svg>
          </button>
          <button title="Add emoji" onclick="insertEmoji()" class="w-8 h-8 rounded-lg flex items-center justify-center text-[#7a7870] hover:text-gold hover:bg-gold/5 transition-all duration-200">
            <svg class="w-4.5 h-4.5" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M8 13s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>
          </button>
        </div>

        <!-- Post button -->
        <button id="post-submit-btn" onclick="submitPost()" disabled class="btn-gold-shine font-syne font-bold text-ink text-sm px-6 py-2 rounded-xl disabled:opacity-30 disabled:cursor-not-allowed disabled:pointer-events-none transition-opacity duration-200">
          Post
        </button>
       </form>

      </div>
    </div>
  </div>

  <script>
    function toggleLike(btn) {
      btn.classList.toggle('liked-btn');
    }

    function handleFollow(btn) {
      if (btn.textContent.trim() === 'Follow') {
        btn.textContent = 'Following';
        btn.classList.remove('border-gold/40', 'text-gold');
        btn.classList.add('border-white/20', 'text-[#7a7870]', 'bg-surface2');
      } else {
        btn.textContent = 'Follow';
        btn.classList.add('border-gold/40', 'text-gold');
        btn.classList.remove('border-white/20', 'text-[#7a7870]', 'bg-surface2');
      }
    }

    // ── Modal ──
    const modal    = document.getElementById('post-modal');
    const backdrop = document.getElementById('modal-backdrop');
    const panel    = document.getElementById('modal-panel');
    const textarea = document.getElementById('post-content');
    const charCount = document.getElementById('char-count');
    const submitBtn = document.getElementById('post-submit-btn');

    function openModal() {
      modal.style.removeProperty('display');
      document.body.style.overflow = 'hidden';
      requestAnimationFrame(() => {
        backdrop.style.opacity = '1';
        panel.style.opacity    = '1';
        panel.style.transform  = 'translateY(0) scale(1)';
        setTimeout(() => textarea.focus(), 200);
      });
    }

    function closeModal() {
      backdrop.style.opacity = '0';
      panel.style.opacity    = '0';
      panel.style.transform  = 'translateY(24px) scale(0.97)';
      setTimeout(() => {
        modal.style.display = 'none';
        document.body.style.overflow = '';
        textarea.value = '';
        charCount.textContent = '0 / 3000';
        submitBtn.disabled = true;
        document.getElementById('media-preview').classList.add('hidden');
      }, 280);
    }

    // Close on Escape
    document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });

    // Char counter + enable/disable post btn
    textarea.addEventListener('input', () => {
      const len = textarea.value.length;
      charCount.textContent = `${len} / 3000`;
      charCount.style.color = len > 2700 ? '#f59e0b' : len > 2950 ? '#ef4444' : '#555';
      submitBtn.disabled = len === 0 || len > 3000;
    });

    function toggleMedia() {
      document.getElementById('media-preview').classList.toggle('hidden');
    }

    function insertHashtag() {
      const pos = textarea.selectionStart;
      const val = textarea.value;
      textarea.value = val.slice(0, pos) + ' #' + val.slice(pos);
      textarea.selectionStart = textarea.selectionEnd = pos + 2;
      textarea.focus();
      textarea.dispatchEvent(new Event('input'));
    }

    function insertEmoji() {
      const emojis = ['🚀','💡','🔥','✨','👏','💪','🎯','🌍','📢','🙌'];
      const pick = emojis[Math.floor(Math.random() * emojis.length)];
      const pos = textarea.selectionStart;
      textarea.value = textarea.value.slice(0, pos) + pick + textarea.value.slice(pos);
      textarea.selectionStart = textarea.selectionEnd = pos + pick.length;
      textarea.focus();
      textarea.dispatchEvent(new Event('input'));
    }

    function previewFile(input) {
      if (!input.files || !input.files[0]) return;
      const file = input.files[0];
      const reader = new FileReader();
      reader.onload = e => {
        const preview = document.getElementById('media-preview');
        const isVideo = file.type.startsWith('video');
        preview.innerHTML = `
          <div class="relative rounded-xl overflow-hidden">
            ${isVideo
              ? `<video src="${e.target.result}" controls class="w-full rounded-xl max-h-48 object-cover"></video>`
              : `<img src="${e.target.result}" class="w-full rounded-xl max-h-48 object-cover" />`}
            <button onclick="removeMedia()" class="absolute top-2 right-2 w-7 h-7 bg-black/70 hover:bg-black rounded-full flex items-center justify-center text-white transition-colors">
              <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M18 6L6 18M6 6l12 12"/></svg>
            </button>
          </div>`;
      };
      reader.readAsDataURL(file);
    }

    function removeMedia() {
      const preview = document.getElementById('media-preview');
      preview.innerHTML = `
        <div class="bg-[#1a1d24] border border-dashed border-white/[0.1] rounded-xl p-6 flex flex-col items-center justify-center gap-2 text-center">
          <svg class="w-8 h-8 text-[#555]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
          <p class="text-[12px] text-[#7a7870]">Click to upload photo or video</p>
          <input type="file" class="hidden" id="media-input" accept="image/*,video/*" onchange="previewFile(this)" />
          <button onclick="document.getElementById('media-input').click()" class="mt-1 text-[11px] font-dm font-semibold border border-white/10 text-[#a09e97] hover:border-gold/30 hover:text-gold px-4 py-1.5 rounded-lg transition-all duration-200">Browse files</button>
        </div>`;
    }

    function submitPost() {
      const content = textarea.value.trim();
      if (!content) return;

      // Swap button to loading
      submitBtn.innerHTML = '<svg class="w-4 h-4 animate-spin" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg> Posting…';
      submitBtn.disabled = true;

      setTimeout(() => {
        closeModal();
        // Reset button
        setTimeout(() => { submitBtn.innerHTML = 'Post'; }, 400);
        // Inject new post at top of feed
        injectPost(content);
      }, 900);
    }

    function injectPost(content) {
      const feed = document.querySelector('main');
      const firstPost = feed.querySelector('article.post-card');
      const card = document.createElement('article');
      card.className = 'post-card bg-[#111318] border border-[rgba(201,168,76,0.3)] rounded-2xl mb-4';
      card.style.cssText = 'opacity:0;transform:translateY(-12px);transition:opacity 0.4s ease,transform 0.4s ease,border-color 0.6s ease;';
      card.innerHTML = `
        <div class="p-4 pb-0">
          <div class="flex items-start gap-3">
            <div class="w-11 h-11 rounded-full bg-gradient-to-br from-[#c9a84c] to-[#7c5c1e] flex items-center justify-center font-syne font-bold text-[#0b0c10] text-sm flex-shrink-0">A</div>
            <div class="flex-1 min-w-0">
              <div class="flex items-start justify-between gap-2">
                <div>
                  <div class="flex items-center gap-2">
                    <h4 class="font-syne font-semibold text-[14px] text-[#e8e6e0] leading-tight">Ahmed Bensalem</h4>
                    <span class="text-[10px] font-dm bg-[rgba(201,168,76,0.1)] text-[#c9a84c] border border-[rgba(201,168,76,0.25)] px-2 py-0.5 rounded-full">New</span>
                  </div>
                  <p class="text-[11.5px] text-[#7a7870] mt-0.5">Full Stack Developer · Open to work</p>
                  <p class="text-[10.5px] text-[#555] mt-0.5">Just now · 🌐</p>
                </div>
                <button class="text-[#555] hover:text-[#7a7870] transition-colors p-1 rounded-lg hover:bg-[#1a1d24]">
                  <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/></svg>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="px-4 py-3 text-[13.5px] text-[#ccc8c0] leading-[1.7]">${content.replace(/\n/g,'<br>')}</div>
        <div class="px-4 py-2 flex justify-between text-[11.5px] text-[#555] border-t border-white/[0.06]">
          <span class="flex items-center gap-1">0 likes</span>
          <div class="flex gap-4"><span>0 comments</span><span>0 shares</span></div>
        </div>
        <div class="flex border-t border-white/[0.04]">
          <button onclick="toggleLike(this)" class="like-btn flex-1 flex items-center justify-center gap-1.5 py-2.5 text-[12px] font-medium text-[#7a7870] hover:bg-[#1a1d24] hover:text-[#e8e6e0] transition-all duration-200 rounded-bl-2xl">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/></svg>
            Like
          </button>
          <button class="flex-1 flex items-center justify-center gap-1.5 py-2.5 text-[12px] font-medium text-[#7a7870] hover:bg-[#1a1d24] hover:text-[#e8e6e0] transition-all duration-200">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
            Comment
          </button>
          <button class="flex-1 flex items-center justify-center gap-1.5 py-2.5 text-[12px] font-medium text-[#7a7870] hover:bg-[#1a1d24] hover:text-[#e8e6e0] transition-all duration-200">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/></svg>
            Repost
          </button>
          <button class="flex-1 flex items-center justify-center gap-1.5 py-2.5 text-[12px] font-medium text-[#7a7870] hover:bg-[#1a1d24] hover:text-[#e8e6e0] transition-all duration-200 rounded-br-2xl">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
            Send
          </button>
        </div>`;

      feed.insertBefore(card, firstPost);
      requestAnimationFrame(() => {
        card.style.opacity = '1';
        card.style.transform = 'translateY(0)';
        // Fade the gold border away after 3s
        setTimeout(() => { card.style.borderColor = 'rgba(255,255,255,0.06)'; }, 3000);
      });
    }
  </script>
</body>
</html>
