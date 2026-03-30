<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Now — 7RAYFI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
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
                        fadeUp: { '0%': { opacity: '0', transform: 'translateY(18px)' }, '100%': { opacity: '1', transform: 'translateY(0)' } },
                        fadeIn: { '0%': { opacity: '0' }, '100%': { opacity: '1' } },
                    },
                    animation: {
                        'fade-up':      'fadeUp 0.6s ease both',
                        'fade-up-slow': 'fadeUp 0.6s 0.14s ease both',
                        'fade-in':      'fadeIn 0.5s ease both',
                    },
                }
            }
        }
    </script>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body class="bg-ink text-gray-200 min-h-screen">
<div class="flex min-h-screen relative z-10">

    {{-- SIDEBAR --}}


    {{-- MAIN CONTENT --}}
    <main class="flex-1 flex items-center justify-center p-6 md:p-12 py-10">
        <div class="w-full max-w-5xl grid md:grid-cols-2 gap-16 items-start">

            {{-- LEFT BRAND --}}
            <div class="hidden md:block animate-fade-up font-dm pt-6">
                <img src="{{ asset('image/logo.png') }}" alt="7RAYFI" class="h-20 w-20 mb-10 object-contain brightness-110">
                <h1 class="font-syne text-[2.6rem] xl:text-5xl font-extrabold leading-[1.08] tracking-tight text-white mb-4">
                    Make the most<br>of your<br><span class="text-gold">professional</span><br>life
                </h1>
                <p class="text-gray-500 text-sm leading-relaxed mb-10 max-w-xs font-light">
                    Join millions of professionals building careers and growing their networks on 7RAYFI.
                </p>
                <div class="space-y-5">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0 bg-yellow-900/20">
                            <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <div class="font-syne text-sm font-semibold text-white mb-0.5">Connect with professionals</div>
                            <div class="text-xs text-gray-500 font-light">Build a meaningful network in your industry</div>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0 bg-blue-900/20">
                            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <div class="font-syne text-sm font-semibold text-white mb-0.5">Find the right job</div>
                            <div class="text-xs text-gray-500 font-light">Access millions of opportunities worldwide</div>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0 bg-emerald-900/20">
                            <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                        </div>
                        <div>
                            <div class="font-syne text-sm font-semibold text-white mb-0.5">Learn and grow</div>
                            <div class="text-xs text-gray-500 font-light">Advance your skills with expert-led courses</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- FORM CARD --}}
            <div class="card-gold-line relative bg-surface border border-white/[0.07] rounded-2xl p-8 md:p-10 animate-fade-up-slow overflow-hidden font-dm">
                <div class="absolute -top-20 -right-14 w-52 h-52 rounded-full pointer-events-none" style="background:radial-gradient(circle,rgba(201,168,76,0.07) 0%,transparent 70%)"></div>

                <h2 class="font-syne text-2xl font-bold tracking-tight text-white mb-1">Create account</h2>
                <p class="text-gray-500 text-sm mb-6">Join your professional community today</p>

                @if ($errors->any())
                <div class="bg-red-950/40 border border-red-700/40 rounded-xl p-3 mb-5 text-sm text-red-300 space-y-0.5">
                    @foreach ($errors->all() as $e)<div>{{ $e }}</div>@endforeach
                </div>
                @endif

                <form method="POST" action="{{ route('user.singup') }}" id="signupForm">
                    @csrf

                    {{-- Name row --}}
                    <div class="grid grid-cols-2 gap-3 mb-4">
                        <div>
                            <label class="block text-[11px] font-medium text-gray-500 uppercase tracking-[0.1em] mb-2">Full Name</label>
                            <input type="text" name="name" value="" placeholder="Youssef" required
                                class="w-full bg-surface2 border @error('name') border-red-600/50 @else border-white/[0.07] @enderror rounded-xl px-4 py-3 text-sm text-gray-200 transition-all duration-200 hover:border-gold/30">
                        </div>

                    </div>

                    {{-- Email --}}
                    <div class="mb-4">
                        <label class="block text-[11px] font-medium text-gray-500 uppercase tracking-[0.1em] mb-2">Email Address *</label>
                        <input type="email" name="email"  autocomplete="email" placeholder="you@example.com" required
                            class="w-full bg-surface2 border @error('email') border-red-600/50 @else border-white/[0.07] @enderror rounded-xl px-4 py-3 text-sm text-gray-200 transition-all duration-200 hover:border-gold/30">
                    </div>

                    {{-- Password --}}
                    <div class="mb-4">
                        <label class="block text-[11px] font-medium text-gray-500 uppercase tracking-[0.1em] mb-2">Password (8+ chars) *</label>
                        <div class="relative">
                            <input type="password" id="password" name="password" autocomplete="new-password" placeholder="Create a strong password" required oninput="checkStrength(this.value)"
                                class="w-full bg-surface2 border border-white/[0.07] rounded-xl px-4 py-3 pr-11 text-sm text-gray-200 transition-all duration-200 hover:border-gold/30">
                            <button type="button" onclick="togglePwd('password','eye1')" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-600 hover:text-gold transition-colors">
                                <svg id="eye1" class="w-[18px] h-[18px]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </button>
                        </div>
                        {{-- Strength bar --}}
                        <div class="flex gap-1 mt-2">
                            <div class="seg flex-1" id="s1"></div>
                            <div class="seg flex-1" id="s2"></div>
                            <div class="seg flex-1" id="s3"></div>
                            <div class="seg flex-1" id="s4"></div>
                        </div>
                        <div id="sLabel" class="text-[11px] mt-1 text-gray-600"></div>
                    </div>

                    {{-- Confirm Password --}}
                    <div class="mb-4">
                        <label class="block text-[11px] font-medium text-gray-500 uppercase tracking-[0.1em] mb-2">Confirm Password *</label>
                        <div class="relative">
                            <input type="password" id="password_confirmation" name="password_confirmation" autocomplete="new-password" placeholder="Repeat your password" required
                                class="w-full bg-surface2 border border-white/[0.07] rounded-xl px-4 py-3 pr-11 text-sm text-gray-200 transition-all duration-200 hover:border-gold/30">
                            <button type="button" onclick="togglePwd('password_confirmation','eye2')" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-600 hover:text-gold transition-colors">
                                <svg id="eye2" class="w-[18px] h-[18px]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    {{-- Country --}}


                    {{-- Terms --}}
                    <div class="mb-5">
                        <label class="flex items-start gap-3 cursor-pointer">
                            <input type="checkbox" name="terms" required {{ old('terms') ? 'checked' : '' }}
                                class="w-4 h-4 mt-0.5 flex-shrink-0 rounded accent-gold bg-surface2">
                            <span class="text-xs text-gray-500 leading-relaxed font-light">
                                By clicking Agree &amp; Join, you agree to the
                                <a href="#" class="text-gold hover:text-gold-light underline underline-offset-2">User Agreement</a>,
                                <a href="#" class="text-gold hover:text-gold-light underline underline-offset-2">Privacy Policy</a>, and
                                <a href="#" class="text-gold hover:text-gold-light underline underline-offset-2">Cookie Policy</a>.
                            </span>
                        </label>
                    </div>

                    {{-- Submit --}}
                    <button type="submit" id="submitBtn"
                        class="w-full bg-gold text-ink font-syne font-bold text-sm uppercase tracking-[0.07em] py-3.5 rounded-xl transition-all duration-200 hover:bg-gold-light hover:-translate-y-px hover:shadow-[0_6px_24px_rgba(201,168,76,0.3)] active:translate-y-0 disabled:opacity-50 disabled:cursor-not-allowed">
                        Agree &amp; Join
                    </button>
                </form>

                {{-- Divider --}}
                <div class="flex items-center gap-3 my-6">
                    <div class="flex-1 h-px bg-white/[0.06]"></div>
                    <span class="text-xs text-gray-600 tracking-wider">or sign up with</span>
                    <div class="flex-1 h-px bg-white/[0.06]"></div>
                </div>

                {{-- Social --}}
                <div class="grid grid-cols-2 gap-3 mb-7">
                    <button class="flex items-center justify-center gap-2 py-2.5 bg-surface2 border border-white/[0.07] rounded-xl text-gray-400 text-sm font-medium hover:border-gold/25 hover:text-gray-200 transition-all duration-200">
                        <svg class="w-[17px] h-[17px] flex-shrink-0" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
                        Google
                    </button>
                    <button class="flex items-center justify-center gap-2 py-2.5 bg-surface2 border border-white/[0.07] rounded-xl text-gray-400 text-sm font-medium hover:border-gold/25 hover:text-gray-200 transition-all duration-200">
                        <svg class="w-[17px] h-[17px] flex-shrink-0" fill="#60a5fa" viewBox="0 0 24 24"><path d="M11.4 24H7.6V8.8h3.8V24zM9.5 7.2c-1.2 0-2.2-1-2.2-2.2s1-2.2 2.2-2.2 2.2 1 2.2 2.2-1 2.2-2.2 2.2zM24 24h-3.8v-7.4c0-1.4 0-3.2-2-3.2s-2.2 1.5-2.2 3.1V24h-3.8V8.8h3.7v2.1h.1c.5-1 1.8-2 3.6-2 3.9 0 4.6 2.6 4.6 5.9V24z"/></svg>
                        LinkedIn
                    </button>
                </div>

                <p class="text-center text-sm text-gray-500">
                    Already on 7RAYFI?
                    <a href="{{ route('user.login') }}" class="text-gold font-semibold hover:text-gold-light transition-colors ml-1">Sign in</a>
                </p>
            </div>

        </div>
    </main>
</div>

<script>
function togglePwd(inputId, iconId) {
    const input = document.getElementById(inputId);
    const icon  = document.getElementById(iconId);
    const show  = input.type === 'password';
    input.type  = show ? 'text' : 'password';
    icon.innerHTML = show
        ? `<path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>`
        : `<path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>`;
}

function checkStrength(v) {
    const segs   = ['s1','s2','s3','s4'].map(id => document.getElementById(id));
    const label  = document.getElementById('sLabel');
    const colors = ['#ef4444','#f97316','#eab308','#22c55e'];
    const names  = ['Weak','Fair','Good','Strong'];
    let score = 0;
    if (v.length >= 8)          score++;
    if (/[A-Z]/.test(v))        score++;
    if (/[0-9]/.test(v))        score++;
    if (/[^A-Za-z0-9]/.test(v)) score++;
    segs.forEach((s, i) => s.style.background = i < score ? colors[score - 1] : '#22262f');
    label.textContent = v.length ? (names[score - 1] || '') : '';
    label.style.color = score ? colors[score - 1] : '#7a7870';
}

document.getElementById('signupForm').addEventListener('submit', function () {
    const btn = document.getElementById('submitBtn');
    btn.textContent = 'Creating account…';
    btn.disabled = true;
});
</script>
</body>
</html>
