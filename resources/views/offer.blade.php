<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jobs — 7erayfi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/jobs.css') }}">

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
                    keyframes: {
                        fadeUp: {
                            '0%': { opacity: '0', transform: 'translateY(16px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        shimmer: {
                            '0%': { backgroundPosition: '-400px 0' },
                            '100%': { backgroundPosition: '400px 0' },
                        },
                        pulse2: {
                            '0%, 100%': { opacity: '1' },
                            '50%': { opacity: '0.4' },
                        }
                    },
                    animation: {
                        fadeUp: 'fadeUp 0.5s ease both',
                        shimmer: 'shimmer 2.4s linear infinite',
                    },
                },
            },
        }
    </script>
</head>

<body class="bg-ink text-[#e8e6e0] min-h-screen">

    <!-- ───── TOPBAR ───── -->
    @include('header')

    <!-- ───── MAIN PAGE ───── -->
    <div class="max-w-[1400px] mx-auto px-4 py-6 relative z-10">

        <!-- Page Header -->
        <div class="flex items-start justify-between mb-8 gap-4">
            <div>
                <div class="flex items-center gap-2 mb-2">
                    <span class="w-5 h-0.5 bg-gold rounded-full"></span>
                    <span class="text-gold text-xs font-dm font-medium tracking-widest uppercase">Opportunities</span>
                </div>
                <h1 class="font-syne font-800 text-3xl text-[#e8e6e0] leading-tight">Find Your Next Role</h1>
                <p class="text-[#7a7870] text-sm mt-1 font-dm">Curated jobs across Morocco and the MENA region</p>
            </div>
            <a href="#"
                class="inline-flex items-center gap-2 border border-gold/40 text-gold/90 hover:border-gold hover:text-gold bg-gold/5 hover:bg-gold/10 px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 whitespace-nowrap mt-1">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <polyline points="15 18 9 12 15 6" />
                </svg>
                Back to feed
            </a>
        </div>

        <!-- Two-column layout -->
        <div class="flex gap-5 items-start">

            <!-- ── Jobs column ── -->
            <div class="flex-1 min-w-0">

                <!-- Toprow bar -->
                <div
                    class="flex items-center justify-between gap-3 bg-surface border border-white/[0.06] rounded-2xl px-5 py-4 mb-5">
                    <div>
                        <p class="text-[#7a7870] text-xs font-dm mb-0.5">Available positions</p>
                        <p class="font-syne font-bold text-2xl text-[#e8e6e0]">12 <span class="text-gold">jobs</span>
                        </p>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-xs text-[#7a7870] hidden sm:block">Sort:</span>
                        <select
                            class="bg-surface2 border border-white/[0.07] text-[#e8e6e0] text-xs rounded-lg px-3 py-2 focus:border-gold/60 transition-colors cursor-pointer">
                            <option>Date posted</option>
                            <option>Salary</option>
                            <option>Relevance</option>
                        </select>
                    </div>
                </div>

                <!-- ── Job Cards ── -->

                @foreach ($offers as $offer)
                <div
                    class="job-card group job-card-group bg-surface border border-white/[0.06] rounded-2xl p-5 mb-3 hover:border-gold/40 hover:shadow-gold-sm transition-all duration-300 cursor-pointer">
                    <div class="job-card-inner rounded-xl">

                        <!-- TOP ROW: Apply button (left) + Urgent badge (right) -->
                        <div class="flex items-center justify-between gap-3 mb-3">
                            <!-- Apply Now button — top left -->
                            <a href="{{ route('demand.store', ['offer_id' => $offer->id,'sender_id' => auth()->user()->id,'receiver_id' => $offer->user_id]) }}"
                                class="inline-flex items-center gap-1.5 bg-gold hover:bg-gold-light active:scale-95 text-ink font-syne font-bold text-xs px-3.5 py-1.5 rounded-lg shadow-gold-sm transition-all duration-200"
                                onclick="event.stopPropagation()">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Apply Now
                            </a>

                            <!-- Urgent badge — top right -->
                            <span
                                class="inline-flex items-center gap-1.5 text-[11px] font-dm font-700 bg-amber-500/10 text-amber-400 border border-amber-500/25 px-2.5 py-1 rounded-full whitespace-nowrap flex-shrink-0">
                                <span class="urgency-dot"></span>
                                Urgent
                            </span>
                        </div>

                        <!-- Company + title row -->
                        <div class="flex items-start gap-3 mb-3">
                            <div
                                class="w-10 h-10 rounded-xl bg-gradient-to-br from-gold/20 to-gold/5 border border-gold/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="font-syne font-bold text-gold text-sm">7H</span>
                            </div>
                            <div>
                                <div class="flex items-center gap-1.5 mb-1">
                                    <svg class="w-3 h-3 text-[#7a7870]" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                                        <circle cx="12" cy="10" r="3" />
                                    </svg>
                                    <span class="text-[11px] text-[#7a7870]">{{ $offer->location }}</span>
                                </div>
                                <h2 class="font-syne font-bold text-[17px] text-[#e8e6e0] leading-snug">
                                    {{ $offer->title }}</h2>
                                <p class="text-[13px] text-[#9ca3af] mt-0.5">7erayfi · Tech · Product</p>
                            </div>
                        </div>

                        <p class="text-sm text-[#94a3b8] leading-relaxed mb-3">{{ $offer->description }}</p>

                        <div class="w-full px-4 pb-3">
                            <img src="{{ asset($offer->photo) }}" alt="Post image"
                                class="w-full max-h-[400px] object-cover rounded-xl border border-white/[0.06] hover:scale-[1.02] transition duration-300">
                        </div>

                        <div class="flex items-center justify-between gap-3">
                            <div class="flex gap-1.5 flex-wrap"></div>
                            <span class="text-[11px] text-[#7a7870]">2d ago</span>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- Static Card 2 -->
                <div
                    class="job-card group job-card-group bg-surface border border-white/[0.06] rounded-2xl p-5 mb-3 hover:border-gold/40 hover:shadow-gold-sm transition-all duration-300 cursor-pointer">
                    <div class="job-card-inner rounded-xl">

                        <!-- TOP ROW: Apply button (left) + Full-time badge (right) -->
                        <div class="flex items-center justify-between gap-3 mb-3">
                            <!-- Apply Now button — top left -->
                            <a href="#"
                                class="inline-flex items-center gap-1.5 bg-gold hover:bg-gold-light active:scale-95 text-ink font-syne font-bold text-xs px-3.5 py-1.5 rounded-lg shadow-gold-sm transition-all duration-200"
                                onclick="event.stopPropagation()">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Apply Now
                            </a>

                            <!-- Full-time badge — top right -->
                            <span
                                class="text-[11px] font-dm font-700 bg-emerald-500/10 text-emerald-400 border border-emerald-500/25 px-2.5 py-1 rounded-full whitespace-nowrap flex-shrink-0">Full-time</span>
                        </div>

                        <!-- Company + title row -->
                        <div class="flex items-start gap-3 mb-3">
                            <div
                                class="w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-500/15 to-indigo-500/5 border border-indigo-500/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <span class="font-syne font-bold text-indigo-400 text-sm">AL</span>
                            </div>
                            <div>
                                <div class="flex items-center gap-1.5 mb-1">
                                    <svg class="w-3 h-3 text-[#7a7870]" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                                        <circle cx="12" cy="10" r="3" />
                                    </svg>
                                    <span class="text-[11px] text-[#7a7870]">Casablanca, Morocco</span>
                                </div>
                                <h2 class="font-syne font-bold text-[17px] text-[#e8e6e0] leading-snug">Product
                                    Designer</h2>
                                <p class="text-[13px] text-[#9ca3af] mt-0.5">Atlas Labs · Design · UX</p>
                            </div>
                        </div>

                        <p class="text-sm text-[#94a3b8] leading-relaxed mb-3">Lead product discovery and deliver
                            beautiful interfaces for enterprise products used across the MENA region.</p>

                        <div class="flex items-center justify-between gap-3">
                            <div class="flex gap-1.5 flex-wrap">
                                <span
                                    class="text-[11px] border border-gold/30 text-gold/80 bg-gold/5 px-2.5 py-1 rounded-full">Figma</span>
                                <span
                                    class="text-[11px] border border-gold/30 text-gold/80 bg-gold/5 px-2.5 py-1 rounded-full">User
                                    Research</span>
                                <span
                                    class="text-[11px] border border-gold/30 text-gold/80 bg-gold/5 px-2.5 py-1 rounded-full">SaaS</span>
                            </div>
                            <span class="text-[11px] text-[#7a7870]">4d ago</span>
                        </div>
                    </div>
                </div>

                <!-- Load more -->
                <div class="flex justify-center mt-6">
                    <button class="btn-gold font-syne font-bold text-sm text-ink px-8 py-2.5 rounded-xl">
                        Load 8 more jobs
                    </button>
                </div>
            </div>

            <!-- ── Filters Sidebar ── -->
            <aside class="w-[240px] flex-shrink-0 sticky top-[68px]">

                <!-- Alert CTA card -->
                <div class="bg-gradient-to-br from-gold/10 to-transparent border border-gold/20 rounded-2xl p-4 mb-4">
                    <div class="flex items-center gap-2 mb-2">
                        <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9" />
                            <path d="M13.73 21a2 2 0 01-3.46 0" />
                        </svg>
                        <span class="font-syne font-bold text-sm text-gold">Job Alerts</span>
                    </div>
                    <p class="text-[12px] text-[#7a7870] mb-3 leading-relaxed">Get notified when new jobs match your
                        search.</p>
                    <button class="w-full btn-gold font-dm font-semibold text-ink text-xs py-2 rounded-lg">Enable
                        alerts</button>
                </div>

                <!-- Filters panel -->
                <div class="bg-surface border border-white/[0.06] rounded-2xl p-4">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-1.5">
                            <svg class="w-3.5 h-3.5 text-gold" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3" />
                            </svg>
                            <span class="font-syne font-bold text-xs text-gold tracking-widest uppercase">Filters</span>
                        </div>
                        <button class="text-[11px] text-[#7a7870] hover:text-gold transition-colors">Clear all</button>
                    </div>

                    <div class="space-y-4">
                        <div>
                            <span class="filter-label">Location</span>
                            <div class="relative">
                                <svg class="absolute left-2.5 top-1/2 -translate-y-1/2 w-3 h-3 text-[#7a7870]"
                                    fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>
                                <input
                                    class="w-full bg-surface2 border border-white/[0.07] rounded-lg pl-7 pr-3 py-2 text-xs text-[#e8e6e0] transition-colors"
                                    placeholder="All locations" />
                            </div>
                        </div>

                        <div>
                            <span class="filter-label">Function</span>
                            <input
                                class="w-full bg-surface2 border border-white/[0.07] rounded-lg px-3 py-2 text-xs text-[#e8e6e0] transition-colors"
                                placeholder="Any role" />
                        </div>

                        <div>
                            <span class="filter-label">Experience</span>
                            <select
                                class="w-full bg-surface2 border border-white/[0.07] rounded-lg px-3 py-2 text-xs text-[#e8e6e0] transition-colors cursor-pointer">
                                <option>Any level</option>
                                <option>Intern</option>
                                <option>Junior</option>
                                <option>Mid-level</option>
                                <option>Senior</option>
                            </select>
                        </div>

                        <div>
                            <span class="filter-label">Job type</span>
                            <div class="flex flex-col gap-2 mt-1">
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="accent-[#c9a84c]" checked />
                                    <span class="text-xs text-[#c5c7d0]">Full-time</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="accent-[#c9a84c]" />
                                    <span class="text-xs text-[#c5c7d0]">Part-time</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="accent-[#c9a84c]" checked />
                                    <span class="text-xs text-[#c5c7d0]">Remote</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="accent-[#c9a84c]" />
                                    <span class="text-xs text-[#c5c7d0]">Hybrid</span>
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
