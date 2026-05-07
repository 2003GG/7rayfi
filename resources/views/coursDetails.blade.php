<!DOCTYPE html>
<html lang="fr" data-theme="dark">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $cours->title }} — 7RAYFI</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Tajawal:wght@300;400;500;700&family=Cinzel:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

  <style>
    body { background-color: var(--bg); color: var(--ink); font-family: 'Tajawal', sans-serif; }

    .page-wrap {
      max-width: 780px;
      margin: 0 auto;
      padding: 110px 32px 60px;
    }

    .label-cinzel {
      font-family: 'Cinzel', serif;
      color: var(--saffron);
      font-size: 0.68rem;
      letter-spacing: 1.2px;
      text-transform: uppercase;
    }

    .btn-back {
      display: inline-flex; align-items: center; gap: 6px;
      padding: 7px 16px; border-radius: 11px;
      border: 1px solid var(--border-h); color: var(--saffron);
      font-family: 'Cinzel', serif; font-size: 11px; font-weight: 600;
      text-decoration: none; transition: all 0.2s; white-space: nowrap;
    }
    .btn-back:hover { background: rgba(232,160,32,0.1); }

    .cat-tag {
      display: inline-block; font-family: 'Cinzel', serif; font-size: 10px;
      color: rgba(232,160,32,0.8); background: rgba(232,160,32,0.08);
      border: 1px solid rgba(232,160,32,0.2); padding: 2px 10px; border-radius: 20px;
    }
  </style>
</head>

<body>
  @include('layouts/header')

  <div class="page-wrap">

    <!-- Back -->
    <div style="margin-bottom: 28px;">
      <a href="{{ route('cours.index') }}" class="btn-back">
        <svg width="11" height="11" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="15 18 9 12 15 6"/></svg>
        Retour aux cours
      </a>
    </div>

    <!-- cours$cours image -->
        <div class="w-full h-[600px]  rounded-[18px] overflow-hidden mb-7 border border-[var(--border)] aspect-[16/7]">
    @if($cours->url)
        <img src="{{ asset('image/'.$cours->url) }}" alt="{{ $cours->title }}"
         class="h-full w-full">
      @else
        <img src="{{ asset('image/darkOne.jpg') }}" alt="{{ $cours->title }}"
          class="h-[200px] w-full object-fit">
      @endif
    </div>

    <!-- Category + title -->
    <span class="cat-tag">{{ $cours->category->name ?? 'Artisanat' }}</span>
    <h1 style="font-family:'Cormorant Garamond',serif; font-size:32px; font-weight:700; color:var(--ink); line-height:1.25; margin:12px 0 6px;">
      {{ $cours->title }}
    </h1>

    <!-- Author row -->
    <div style="display:flex; align-items:center; gap:10px; margin:16px 0 28px; padding-bottom:24px; border-bottom:1px solid var(--border);">
      <div style="width:40px; height:40px; border-radius:50%; background:linear-gradient(135deg,var(--clay),var(--saffron)); display:flex; align-items:center; justify-content:center; font-family:'Cinzel',serif; font-size:14px; font-weight:700; color:#0e0b08; flex-shrink:0;">
        {{ strtoupper(substr($cours->user->name ?? 'M', 0, 1)) }}
      </div>
      <div>
        <p style="font-size:13px; font-weight:600; color:var(--ink); margin:0;">{{ $cours->user->name ?? 'Maître Artisan' }}</p>
        <p style="font-size:11px; color:var(--ink-muted); margin:0;">Maître Artisan · Maroc</p>
      </div>
    </div>

    <!-- Article content -->
    <div style="font-size:15px; color:var(--ink-muted); line-height:1.9;">
    {{$cours->article}}
    </div>

  </div>

  <script>
    (function(){
      var t = localStorage.getItem('7rayfi-theme') || 'dark';
      document.documentElement.setAttribute('data-theme', t);
      var e = document.getElementById('ticon');
      if(e) e.textContent = t === 'dark' ? '☀️' : '🌙';
    })();
    function toggleTheme(){
      var c = document.documentElement.getAttribute('data-theme');
      var n = c === 'dark' ? 'light' : 'dark';
      document.documentElement.setAttribute('data-theme', n);
      localStorage.setItem('7rayfi-theme', n);
      var e = document.getElementById('ticon');
      if(e) e.textContent = n === 'dark' ? '☀️' : '🌙';
    }
  </script>
</body>
</html>
