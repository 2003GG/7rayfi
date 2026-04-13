<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $post->title }} — 7RAYFI</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Tajawal:wght@300;400;500;700&family=Cinzel:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>
      @include('layouts/header')

<div class="grid4">

  <!-- COL 1 -->
    @include('layouts/sidebar')


  <!-- COL 2 -->
  <aside class="col2" style="position:sticky;top:78px;align-self:start;">
    <div class="card" style="margin-bottom:14px;">
      <div class="card-accent accent-ocean"></div>
      <div class="card-header card-header-ocean"><span class="bar bar-ocean"></span>My Skills</div>
      <div style="padding:12px 14px 14px;">
        <span class="skill-pill">🪡 Zellige</span><span class="skill-pill">🏺 Pottery</span><span class="skill-pill">🧵 Textile</span><span class="skill-pill">🔨 Cuivre</span><span class="skill-pill">✒️ Calligraphie</span><span class="skill-pill">🌿 Tadelakt</span>
      </div>
    </div>
    <div class="card" style="margin-bottom:14px;">
      <div class="card-accent accent-ocean"></div>
      <div class="card-header card-header-ocean"><span class="bar bar-ocean"></span>Events</div>
      <div class="ev-item"><div class="ev-dt" style="background:linear-gradient(135deg,var(--clay),var(--saffron));"><div class="ev-day">14</div><div class="ev-mon">Apr</div></div><div><div class="ev-ttl">Salon de l'Artisanat</div><div class="ev-sub">📍 Casablanca</div></div></div>
      <div class="ev-item"><div class="ev-dt" style="background:linear-gradient(135deg,var(--indigo),var(--indigo-lt));"><div class="ev-day" style="color:#fff;">22</div><div class="ev-mon" style="color:rgba(255,255,255,.7);">Apr</div></div><div><div class="ev-ttl">Freelancer Summit</div><div class="ev-sub">💻 Online · Free</div></div></div>
      <div class="ev-item"><div class="ev-dt" style="background:linear-gradient(135deg,var(--sage),#2d5c3e);"><div class="ev-day" style="color:#fff;">3</div><div class="ev-mon" style="color:rgba(255,255,255,.7);">Mai</div></div><div><div class="ev-ttl">Design Week Marrakech</div><div class="ev-sub">📍 Marrakech · Hybrid</div></div></div>
    </div>
    <div class="card" style="margin-bottom:14px;">
      <div class="card-accent accent-ocean"></div>
      <div class="card-header card-header-ocean"><span class="bar bar-ocean"></span>Featured Jobs</div>
      <div class="job-item"><div class="job-logo">🏺</div><div style="min-width:0;"><div class="job-t">Pottery Designer</div><div class="job-c">Fassi Céramique · Fès</div></div><span class="job-tag">CDI</span></div>
      <div class="job-item"><div class="job-logo">🧵</div><div style="min-width:0;"><div class="job-t">Textile Artisan</div><div class="job-c">Atlas Loom · Remote</div></div><span class="job-tag">Freelance</span></div>
      <div class="job-item"><div class="job-logo">💻</div><div style="min-width:0;"><div class="job-t">UI Designer</div><div class="job-c">StartupMA · Rabat</div></div><span class="job-tag">CDD</span></div>
    </div>
  </aside>

  <!-- COL 3: POST + COMMENTS -->
  <main style="min-width:0;">

    <!-- Back link -->
    <a href="{{ route('post.index') }}" style="display:inline-flex;align-items:center;gap:6px;font-family:'Cinzel',serif;font-size:11px;color:var(--saffron);text-decoration:none;margin-bottom:18px;">
      <svg width="11" height="11" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="15 18 9 12 15 6"/></svg>
      Back to Feed
    </a>

    <!-- THE POST -->
    <article class="post-card">
      <div style="padding:16px 16px 0;">
        <div style="display:flex;align-items:flex-start;gap:12px;">
          @if ($post->user->profile_photo)
            <a href="{{ route('show.profile', ['id' => $post->user->id]) }}">
              <img src="{{ asset('image/'.$post->user->profile_photo) }}" class="avatar-md" alt="">
            </a>
          @else
            <a href="{{ route('show.profile', ['id' => $post->user->id]) }}">
              <div class="avatar-md">{{ strtoupper(substr($post->user->name, 0, 2)) }}</div>
            </a>
          @endif
          <div style="flex:1;min-width:0;">
            <span class="pun"><a href="{{ route('show.profile', ['id' => $post->user->id]) }}">{{ $post->user->name }}</a></span>
            <p class="ptit">{{ $post->title }}</p>
            <p class="ptim">{{ $post->created_at->diffForHumans() }} · 🌐</p>
          </div>
        </div>
      </div>

      <p class="pbod">{{ $post->description }}</p>

      @if($post->photo_URL)
        <div class="pimg"><img src="{{ asset('image/'.$post->photo_URL) }}" alt="Post image" style="width:100%;max-height:420px;object-fit:cover;display:block;"></div>
      @endif

      <div class="pstats">
        <span>👍 {{ $post->likes_count ?? 0 }} likes</span>
        <span>💬 {{ $comments->count() }} comments</span>
      </div>

      <div class="pacts">
        <button type="button" class="pact"><span class="pac-ico">👍</span> Like</button>
        <button type="button" class="pact"><span class="pac-ico">💬</span> Comment</button>
      </div>
    </article>


    <!-- COMMENTS LIST -->
    @if($comments->count() > 0)
      @foreach($comments as $comment)
      <div style="display:flex;gap:12px;align-items:flex-start;margin-bottom:14px;">

        {{-- Avatar --}}
        <div class="avatar-md" style="flex-shrink:0;font-size:11px;">
          {{ strtoupper(substr($comment->user->name, 0, 2)) }}
        </div>

        {{-- Bubble --}}
        <div style="flex:1;background:var(--surface2);border:1px solid var(--border);border-radius:16px;padding:12px 16px;">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:6px;">
            <span style="font-family:'Cormorant Garamond',serif;font-size:15px;font-weight:600;color:var(--ink);">{{ $comment->user->name }}</span>
            <span style="font-size:10px;color:var(--ink-muted);">{{ $comment->created_at->diffForHumans() }}</span>
          </div>
          <p style="font-size:13px;color:var(--ink);margin:0;line-height:1.6;">{{ $comment->description }}</p>
        </div>

        <div style="position:relative;">
                <button class="kbtn" type="button" onclick="this.nextElementSibling.classList.toggle('hidden')">
                  <svg width="15" height="15" fill="currentColor" viewBox="0 0 20 20"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/></svg>
                </button>
                <div class="kmenu hidden">
                  <form method="POST" action="{{ route('comment.destroy', ['id'=>$comment->id]) }}">
                    @csrf
                    @method('DELETE')
                    @if ($comment->user_id==auth()->user()->id || $comment->post->user_id==auth()->id())
                    <button type="submit" class="kitem red">🗑 Delete comment</button>
                    @else
                    @endif
                  </form>
                </div>
              </div>

      </div>
      @endforeach
    @else
      <div style="text-align:center;padding:32px;color:var(--ink-muted);font-size:13px;">
        No comments yet. Be the first to comment!
      </div>
    @endif


    <!-- COMMENT FORM -->
    <div style="display:flex;gap:12px;align-items:center;margin-top:20px;padding-top:20px;border-top:1px solid var(--border);">
      <div class="avatar-md" style="flex-shrink:0;">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</div>
      <form action="{{ route('comments.store', $post->id) }}" method="POST" style="display:flex;gap:10px;align-items:center;flex:1;">
        @csrf
        <input
          type="text"
          name="description"
          required
          placeholder="Write a comment…"
          style="flex:1;background:var(--surface3);border:1px solid var(--border);border-radius:20px;padding:10px 18px;font-size:13px;color:var(--ink);font-family:'Tajawal',sans-serif;outline:none;transition:border-color 0.2s;"
          onfocus="this.style.borderColor='rgba(232,160,32,0.5)'"
          onblur="this.style.borderColor='var(--border)'"
        />
        <button type="submit" style="width:36px;height:36px;border-radius:50%;background:linear-gradient(135deg,var(--clay),var(--saffron));border:none;cursor:pointer;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#0e0b08" stroke-width="2.5"><path d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
        </button>
      </form>
    </div>

  </main>

  <!-- COL 4 -->
  <aside class="col4" style="position:sticky;top:78px;align-self:start;">
    <div class="card" style="margin-bottom:14px;">
      <div class="card-accent accent-fire"></div>
      <div class="card-header card-header-fire"><span class="bar bar-fire"></span>People You May Know</div>
      <div class="follow-item"><div class="avatar" style="width:36px;height:36px;font-size:12px;background:linear-gradient(135deg,var(--indigo),var(--indigo-lt));">YB</div><div><div class="fn">Yassine Benali</div><div class="fs">Zellige · Fès</div></div><button class="btn-fol">+ Follow</button></div>
      <div class="follow-item"><div class="avatar" style="width:36px;height:36px;font-size:12px;background:linear-gradient(135deg,var(--sage),#2d5c3e);">FM</div><div><div class="fn">Fatima Mrabet</div><div class="fs">Textile · Marrakech</div></div><button class="btn-fol">+ Follow</button></div>
      <div class="follow-item"><div class="avatar" style="width:36px;height:36px;font-size:12px;background:linear-gradient(135deg,var(--copper),var(--clay));">AO</div><div><div class="fn">Amine Ouahbi</div><div class="fs">Leather · Meknès</div></div><button class="btn-fol">+ Follow</button></div>
    </div>
    <div class="card" style="margin-bottom:14px;">
      <div class="card-accent accent-fire"></div>
      <div class="card-header card-header-fire"><span class="bar bar-fire"></span>Trending in Morocco</div>
      <div style="padding:12px 16px 14px;">
        <span class="tag-pill">#Zellige</span><span class="tag-pill">#RemoteWork</span><span class="tag-pill">#Marrakech</span><span class="tag-pill">#Artisanat</span><span class="tag-pill">#Fès</span><span class="tag-pill">#OpenToWork</span>
      </div>
    </div>
    <div style="padding:8px 14px;opacity:.45;">
      <p style="font-family:'Cinzel',serif;font-size:9px;color:var(--ink-muted);">7RAYFI © {{ date('Y') }} · Built in Morocco 🇲🇦</p>
    </div>
  </aside>

</div>

<script>
  (function(){
    var t = localStorage.getItem('7rayfi-theme') || 'dark';
    document.documentElement.setAttribute('data-theme', t);
    var el = document.getElementById('ticon');
    if (el) el.textContent = t === 'dark' ? '☀️' : '🌙';
  })();
  function toggleTheme(){
    var c = document.documentElement.getAttribute('data-theme');
    var n = c === 'dark' ? 'light' : 'dark';
    document.documentElement.setAttribute('data-theme', n);
    localStorage.setItem('7rayfi-theme', n);
    var el = document.getElementById('ticon');
    if (el) el.textContent = n === 'dark' ? '☀️' : '🌙';
  }
</script>
</body>
</html>
