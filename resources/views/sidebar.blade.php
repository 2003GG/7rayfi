<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home — 7RAYFI</title>
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

      {{-- ── LEFT SIDEBAR ── --}}
      <aside class="left-col sticky top-[68px] max-h-[calc(100vh-84px)] overflow-y-auto animate-fadeUp">

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

      {{-- ── FEED ── --}}
      <main class="min-w-0">

        <div class="flex justify-end mb-4 animate-fadeUp">
          <button type="button"
            onclick="document.getElementById('post-modal').classList.remove('hidden')"
            class="btn-gold-shine font-syne font-bold text-ink text-sm px-5 py-2.5 rounded-xl inline-flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg>
            Add post
          </button>
        </div>

        @foreach ($posts as $post)
        <article class="post-card bg-surface border border-white/[0.06] rounded-2xl mb-4 animate-fadeUp-1 overflow-hidden">

          <div class="p-4 pb-0">
            <div class="flex items-start gap-3">
              <div class="w-11 h-11 rounded-full bg-gold flex items-center justify-center font-syne font-bold text-white text-sm flex-shrink-0">
                {{ strtoupper(substr($post->user->name, 0, 2)) }}
              </div>
              <div class="flex-1 min-w-0">
                <div class="flex items-start justify-between gap-2">
                  <div>
                    <h4 class="font-syne font-semibold text-[14px] text-[#e8e6e0] hover:text-gold transition-colors cursor-pointer leading-tight">
                      {{ $post->user->name }}
                    </h4>
                    <p class="text-[11.5px] text-[#7a7870] mt-0.5">{{ $post->title }}</p>
                    <p class="text-[10.5px] text-[#555] mt-0.5">{{ $post->created_at->diffForHumans() }} · 🌐</p>
                  </div>
                  <div class="relative">
                    <button type="button"
                      onclick="this.nextElementSibling.classList.toggle('hidden')"
                      class="text-[#555] hover:text-[#7a7870] transition-colors p-1 rounded-lg hover:bg-surface2">
                      <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/>
                      </svg>
                    </button>
                    <div class="hidden absolute right-0 top-8 bg-surface2 border border-white/[0.08] rounded-xl shadow-xl py-1 z-10 min-w-[130px]">
                      <form method="POST" action="{{ route('post.destroy', ['id'=>$post->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-full text-left px-4 py-2 text-[12.5px] text-red-400 hover:bg-red-500/5 transition-colors">
                          Delete post
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="px-4 py-3 text-[13.5px] text-[#ccc8c0] leading-[1.7]">
            {{ $post->description }}
          </div>

          @if($post->photo_url)
            <div class="w-full px-4 pb-3">
              <img src="{{ asset($post->photo_url) }}" alt="Post image"
                class="w-full max-h-[400px] object-cover rounded-xl border border-white/[0.06]">
            </div>
          @endif

          <div class="px-4 py-2 flex justify-between text-[11.5px] text-[#555] border-t border-white/[0.06]">
            <span class="hover:text-gold cursor-pointer transition-colors">{{ $post->likes_count ?? 0 }} likes</span>
            <div class="flex gap-4">
              <span class="hover:text-gold cursor-pointer transition-colors">{{ $post->comments_count ?? 0 }} comments</span>
              <span class="hover:text-gold cursor-pointer transition-colors">{{ $post->shares_count ?? 0 }} shares</span>
            </div>
          </div>

          <div class="flex border-t border-white/[0.04]">
            <button type="button" class="flex-1 flex items-center justify-center gap-1.5 py-2.5 text-[12px] font-medium text-[#7a7870] hover:bg-surface2 hover:text-[#e8e6e0] transition-all duration-200 rounded-bl-2xl">
              👍 Like
            </button>
            <button type="button" class="flex-1 flex items-center justify-center gap-1.5 py-2.5 text-[12px] font-medium text-[#7a7870] hover:bg-surface2 hover:text-[#e8e6e0] transition-all duration-200">
              💬 Comment
            </button>
            <button type="button" class="flex-1 flex items-center justify-center gap-1.5 py-2.5 text-[12px] font-medium text-[#7a7870] hover:bg-surface2 hover:text-[#e8e6e0] transition-all duration-200">
              🔁 Repost
            </button>
            <button type="button" class="flex-1 flex items-center justify-center gap-1.5 py-2.5 text-[12px] font-medium text-[#7a7870] hover:bg-surface2 hover:text-[#e8e6e0] transition-all duration-200 rounded-br-2xl">
              ✉️ Send
            </button>
          </div>

        </article>
        @endforeach

      </main>

      {{-- ── RIGHT PANEL ── --}}
      <aside class="right-col sticky top-[68px] max-h-[calc(100vh-84px)] overflow-y-auto animate-fadeUp-1">
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

{{-- ───── ADD POST MODAL ───── --}}
<div id="post-modal"
  class="hidden fixed inset-0 z-[100] bg-black/70 backdrop-blur-sm overflow-y-auto flex items-start justify-center p-4"
  onclick="if(event.target===this) closeModal()">

  <div class="relative w-full max-w-[560px] bg-[#111318] border border-white/[0.08] rounded-2xl shadow-2xl my-auto">

    <div style="height:2px;background:linear-gradient(90deg,transparent,#c9a84c 35%,#e8c97a 50%,#c9a84c 65%,transparent);border-radius:16px 16px 0 0;"></div>

    <div class="flex items-center justify-between px-5 py-4 border-b border-white/[0.06]">
      <div class="flex items-center gap-2">
        <span class="w-4 h-0.5 bg-gold rounded-full"></span>
        <h2 class="font-syne font-bold text-[15px] text-[#e8e6e0]">Create a post</h2>
      </div>
      <button type="button" onclick="closeModal()"
        class="w-8 h-8 rounded-lg flex items-center justify-center text-[#7a7870] hover:text-[#e8e6e0] hover:bg-white/[0.06] transition-all duration-200">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M18 6L6 18M6 6l12 12"/></svg>
      </button>
    </div>

    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="flex items-center gap-3 px-5 pt-4 pb-3">
        <div class="w-11 h-11 rounded-full bg-gradient-to-br from-gold to-[#7c5c1e] flex items-center justify-center font-syne font-bold text-ink text-sm flex-shrink-0">
          {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
        </div>
        <div>
          <p class="font-syne font-semibold text-[13px] text-[#e8e6e0]">{{ auth()->user()->name }}</p>
          <p class="text-[11px] text-[#7a7870]">Posting to everyone · 🌐</p>
        </div>
      </div>

      <div class="mx-5 border-t border-white/[0.05] mb-4"></div>

      <div class="px-5 mb-4">
        <label class="block text-[10px] font-dm font-semibold text-[#7a7870] uppercase tracking-widest mb-1.5">Title <span class="text-gold">*</span></label>
        <input type="text" name="title" maxlength="120" required placeholder="Give your post a headline…"
          class="w-full bg-[#1a1d24] border border-white/[0.07] rounded-xl px-4 py-2.5 text-[13.5px] text-[#e8e6e0] font-dm outline-none placeholder-[#3a3c44] focus:border-gold/50 transition-colors" />
      </div>

      <div class="px-5 mb-4">
        <label class="block text-[10px] font-dm font-semibold text-[#7a7870] uppercase tracking-widest mb-1.5">Category</label>
        <select name="category"
          class="w-full bg-[#1a1d24] border border-white/[0.07] rounded-xl px-4 py-2.5 text-[13px] text-[#e8e6e0] font-dm outline-none cursor-pointer focus:border-gold/50 transition-colors">
          @foreach ($categorys as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
        </select>
      </div>

      <div class="px-5 mb-4">
        <label class="block text-[10px] font-dm font-semibold text-[#7a7870] uppercase tracking-widest mb-1.5">Content <span class="text-gold">*</span></label>
        <textarea name="description" rows="4" maxlength="3000" required placeholder="What do you want to share with your network?"
          class="w-full bg-[#1a1d24] border border-white/[0.07] rounded-xl px-4 py-3 text-[13.5px] text-[#e8e6e0] font-dm outline-none resize-none leading-relaxed placeholder-[#3a3c44] focus:border-gold/50 transition-colors"></textarea>
      </div>

      <div class="px-5 mb-4">
        <label class="block text-[10px] font-dm font-semibold text-[#7a7870] uppercase tracking-widest mb-1.5">Tags <span class="text-[#555] normal-case tracking-normal font-normal">— comma separated</span></label>
        <input type="text" name="tags" placeholder="e.g. Laravel, Remote, OpenToWork"
          class="w-full bg-[#1a1d24] border border-white/[0.07] rounded-xl px-4 py-2.5 text-[13px] text-[#e8e6e0] font-dm outline-none placeholder-[#3a3c44] focus:border-gold/50 transition-colors" />
      </div>

      <div class="px-5 mb-5">
        <label class="block text-[10px] font-dm font-semibold text-[#7a7870] uppercase tracking-widest mb-2">Media</label>
        <div class="flex gap-3">
          <label class="flex-1 border border-dashed border-gold/30 rounded-xl py-5 px-3 flex flex-col items-center gap-2 cursor-pointer hover:border-gold/60 hover:bg-gold/5 transition-all duration-200 bg-gold/[0.02]">
            <svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
              <rect x="3" y="3" width="18" height="18" rx="3"/><circle cx="8.5" cy="8.5" r="1.5"/>
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 15l-5-5L5 21"/>
            </svg>
            <span class="text-[12px] font-syne font-semibold text-gold">Photo</span>
            <span class="text-[10px] text-[#555] text-center">JPG · PNG · GIF · WebP</span>
            <input type="file" name="photo_URL" id="photo-input" accept="image/*" class="hidden" onchange="previewMedia(this, 'image')">
          </label>
          <label class="flex-1 border border-dashed border-white/10 rounded-xl py-5 px-3 flex flex-col items-center gap-2 cursor-pointer hover:border-gold/40 hover:bg-gold/5 transition-all duration-200">
            <svg class="w-6 h-6 text-[#7a7870]" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
              <rect x="2" y="5" width="15" height="14" rx="2"/>
              <path stroke-linecap="round" stroke-linejoin="round" d="M17 9l5-3v12l-5-3V9z"/>
            </svg>
            <span class="text-[12px] font-syne font-semibold text-[#7a7870]">Video</span>
            <span class="text-[10px] text-[#555] text-center">MP4 · MOV · AVI</span>
            <input type="file" name="video_URL" id="video-input" accept="video/*" class="hidden" onchange="previewMedia(this, 'video')">
          </label>
        </div>
        <div id="media-preview" class="hidden mt-3 relative rounded-xl overflow-hidden border border-white/[0.06]">
          <img id="img-preview" class="hidden w-full max-h-[220px] object-cover" alt="preview">
          <video id="vid-preview" class="hidden w-full max-h-[220px] object-cover" controls></video>
          <div class="flex items-center justify-between px-3 py-2 bg-[#1a1d24] border-t border-white/[0.06]">
            <span id="media-filename" class="text-[11px] text-[#7a7870] truncate max-w-[80%]"></span>
            <button type="button" onclick="clearMedia()" class="text-[11px] text-red-400 hover:text-red-300 transition-colors font-dm">✕ Remove</button>
          </div>
        </div>
      </div>

      <div class="px-5 py-4 border-t border-white/[0.06] flex items-center justify-between gap-3 bg-[#0f1115] rounded-b-2xl">
        <button type="button" onclick="closeModal()"
          class="font-dm font-medium text-[13px] text-[#7a7870] hover:text-[#e8e6e0] px-4 py-2 rounded-xl border border-white/[0.07] hover:border-white/[0.15] transition-all duration-200">
          Cancel
        </button>
        <button type="submit"
          class="btn-gold-shine font-syne font-bold text-ink text-sm px-7 py-2.5 rounded-xl inline-flex items-center gap-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
          Publish post
        </button>
      </div>
    </form>
  </div>
</div>

<script>
  function closeModal() {
    document.getElementById('post-modal').classList.add('hidden');
  }
  function previewMedia(input, type) {
    if (!input.files || !input.files[0]) return;
    var file = input.files[0];
    var img = document.getElementById('img-preview');
    var vid = document.getElementById('vid-preview');
    var preview = document.getElementById('media-preview');
    var name = document.getElementById('media-filename');
    var url = URL.createObjectURL(file);
    if (type === 'image') {
      img.src = url; img.classList.remove('hidden'); vid.classList.add('hidden');
    } else {
      vid.src = url; vid.classList.remove('hidden'); img.classList.add('hidden');
    }
    name.textContent = file.name;
    preview.classList.remove('hidden');
  }
  function clearMedia() {
    document.getElementById('photo-input').value = '';
    document.getElementById('video-input').value = '';
    document.getElementById('img-preview').classList.add('hidden');
    document.getElementById('vid-preview').classList.add('hidden');
    document.getElementById('media-preview').classList.add('hidden');
  }
</script>

</body>
</html>
