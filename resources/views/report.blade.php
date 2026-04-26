<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home — 7RAYFI</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Tajawal:wght@300;400;500;700&family=Cinzel:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

</head>

<body>

<!-- ══════════ NAVBAR ══════════ -->
      @include('layouts/header')


<!-- ══════════ 4-COLUMN GRID ══════════ -->
<div class="grid4">

  <!-- ─── COL 1: Profile sidebar ─── -->
  @include('layouts/sidebar')

  <!-- ─── COL 2: Second left sidebar ─── -->
  <aside class="col2" style="position:sticky;top:78px;align-self:start;">

    <!-- Skills -->


    <!-- Upcoming Events -->


    <!-- Featured Jobs -->


  </aside>

  <!-- ─── COL 3: FEED ─── -->
  <main style="min-width:0;">

    <!-- Header -->
    <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:18px;">
      <div>
        <h1 style="font-family:'Cormorant Garamond',serif;font-size:26px;font-weight:600;color:var(--ink);line-height:1.1;">Your Post Space Report</h1>
        <p style="font-size:11.5px;color:var(--ink-muted);margin-top:2px;">All the most reported Post</p>
      </div>

    </div>

    <!-- Compose -->


    <div class="zine-thin" style="margin-bottom:20px;"></div>

    <!-- Posts loop -->
    @foreach ($postReport as $post)
    <article class="post-card">
      <div style="padding:16px 16px 0;">
        <div style="display:flex;align-items:flex-start;gap:12px;">
          <div class="avatar-md">{{ strtoupper(substr($post->user->name, 0, 2)) }}</div>
          <div style="flex:1;min-width:0;">
            <div style="display:flex;align-items:flex-start;justify-content:space-between;gap:8px;">
              <div>
                <span class="pun">{{ $post->user->name }}</span>
                <p class="ptit">{{ $post->title }}</p>
                <p class="ptim">{{ $post->created_at->diffForHumans() }} · 🌐</p>
              </div>
              <div style="position:relative;">
                <button class="kbtn" type="button" onclick="this.nextElementSibling.classList.toggle('hidden')">
                  <svg width="15" height="15" fill="currentColor" viewBox="0 0 20 20"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/></svg>
                </button>
                <div class="kmenu hidden">
                  <form method="POST" action="{{ route('post.destroy', ['id'=>$post->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="kitem red">🗑 Delete post</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <p class="pbod">{{ $post->description }}</p>


        <div class="pimg"><img src="{{ asset('image/fes.jpg') }}" alt="Post image" style="width:100%;max-height:420px;object-fit:cover;display:block;"></div>

    </article>
    @endforeach

  </main>

  <!-- ─── COL 4: Right sidebar ─── -->

</div><!-- /grid4 -->


<!-- ══════════ MODAL ══════════ -->


<script>
  /* ── THEME: persist & init ── */
  (function() {
    var t = localStorage.getItem('7rayfi-theme') || 'dark';
    document.documentElement.setAttribute('data-theme', t);
    setIcon(t);
  })();

  function toggleTheme() {
    var cur  = document.documentElement.getAttribute('data-theme');
    var next = cur === 'dark' ? 'light' : 'dark';
    document.documentElement.setAttribute('data-theme', next);
    localStorage.setItem('7rayfi-theme', next);
    setIcon(next);
  }
  function setIcon(t) {
    var el = document.getElementById('ticon');
    if (el) el.textContent = t === 'dark' ? '☀️' : '🌙';
  }

  /* ── MODAL ── */
  function closeModal() { document.getElementById('post-modal').classList.add('hidden'); }

  /* ── MEDIA ── */
  function previewMedia(input, type) {
    if (!input.files || !input.files[0]) return;
    var url = URL.createObjectURL(input.files[0]);
    var img = document.getElementById('img-preview');
    var vid = document.getElementById('vid-preview');
    if (type === 'image') { img.src = url; img.classList.remove('hidden'); vid.classList.add('hidden'); }
    else                  { vid.src = url; vid.classList.remove('hidden'); img.classList.add('hidden'); }
    document.getElementById('media-filename').textContent = input.files[0].name;
    document.getElementById('media-preview').classList.remove('hidden');
  }
  function clearMedia() {
    ['photo-input','video-input'].forEach(id => document.getElementById(id).value = '');
    ['img-preview','vid-preview','media-preview'].forEach(id => document.getElementById(id).classList.add('hidden'));
  }

  /* ── KEBAB ── */
  document.addEventListener('click', function(e) {
    if (!e.target.closest('.kbtn'))
      document.querySelectorAll('.kmenu').forEach(m => m.classList.add('hidden'));
  });
</script>

</body>
</html>
