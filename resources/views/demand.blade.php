<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Demandes — 7RAYFI</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Tajawal:wght@300;400;500;700&family=Cinzel:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
  <link rel="stylesheet" href="{{ asset('css/demande.css') }}">


</head>

<body>
      @include('layouts/header')

  <div class="page-wrap">

    <!-- Page header -->
    <div style="margin-bottom:24px;">
      <span class="label-cinzel">Gestion</span>
      <h2 style="font-family:'Cinzel',serif; font-size:22px; margin-top:4px; margin-bottom:4px;">Demandes Reçues</h2>
      <p style="font-size:13px; color:var(--ink-muted);">Gérez et répondez aux demandes de vos clients</p>
    </div>

    <!-- Topbar stats -->
    <div class="topbar">
      <div style="display:flex; gap:32px;">
        <div>
          <p style="font-size:11px; color:var(--ink-muted); margin-bottom:2px;">Total reçues</p>
          <p style="font-family:'Cinzel',serif; font-size:20px; color:var(--ink);">{{ $demands->count() }} <span style="color:var(--saffron);">demandes</span></p>
        </div>
        <div style="border-left:1px solid var(--border); padding-left:32px;">
          <p style="font-size:11px; color:var(--ink-muted); margin-bottom:2px;">En attente</p>
          <p style="font-family:'Cinzel',serif; font-size:20px; color:var(--saffron);">{{ $demands->where('status','pending')->count() ?? 0 }}</p>
        </div>
      </div>
      <div style="display:flex; gap:8px;">
        <a href="#" class="nav-link active" style="font-size:12px; padding:6px 14px;">Toutes</a>
        <a href="#" class="nav-link" style="font-size:12px; padding:6px 14px;">En attente</a>
        <a href="#" class="nav-link" style="font-size:12px; padding:6px 14px;">Terminées</a>
      </div>
    </div>

    <!-- Demand cards -->
    @forelse ($demands as $demande)
    <article class="demand-card">
      <div class="card-accent accent-saffron"></div>

      <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:14px;">
        <div>
          <span class="label-cinzel" style="font-size:9px; display:block; margin-bottom:4px;">Service Requis</span>
          <h3 style="font-family:'Cormorant Garamond',serif; font-size:1.2rem; font-weight:600; line-height:1.3;">
            {{ $demande->service_name ?? 'Demande de Service' }}
          </h3>
        </div>
        <span class="badge b-art"><span class="status-dot"></span>En Cours</span>
      </div>

      <p style="color:var(--ink-dim); line-height:1.7; font-size:14px;">{{ $demande->description }}</p>

      <div class="demand-meta-grid">
        <div>
          <span class="label-cinzel" style="font-size:9px; display:block; margin-bottom:6px;">Client</span>
          <div style="display:flex; align-items:center; gap:8px;">
            <div style="width:26px; height:26px; border-radius:50%; background:linear-gradient(135deg,var(--clay),var(--saffron)); display:flex; align-items:center; justify-content:center; font-size:9px; font-weight:700; font-family:'Cinzel',serif; flex-shrink:0; color:#fff;">
              {{ strtoupper(substr($demande->sender->name, 0, 2)) }}
            </div>
            <span style="font-size:13px; font-weight:500;">{{ $demande->sender->name }}</span>
          </div>
        </div>
        <div>
          <span class="label-cinzel" style="font-size:9px; display:block; margin-bottom:6px;">Date</span>
          <div style="font-size:13px; font-weight:500; color:var(--ink-dim);">{{ $demande->created_at->format('d M, Y') }}</div>
          <div style="font-size:11px; color:var(--ink-muted); margin-top:2px;">{{ $demande->created_at->diffForHumans() }}</div>
        </div>
        <div style="display:flex; align-items:center; justify-content:flex-end; gap:8px;">
          <button class="btn-cancel" style="padding:6px 14px; font-size:11px;">Refuser</button>
          <button class="btn-details">Voir →</button>
        </div>
      </div>
    </article>

    @empty
    <div style="background:linear-gradient(145deg,var(--card-bg1),var(--card-bg2)); border:1px solid var(--border); border-radius:18px; text-align:center; padding:64px 24px;">
      <div style="width:56px; height:56px; border-radius:50%; background:var(--surface3); display:flex; align-items:center; justify-content:center; margin:0 auto 16px;">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--ink-muted)" stroke-width="1.5"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
      </div>
      <p style="font-family:'Cormorant Garamond',serif; font-size:20px; color:var(--ink); margin-bottom:6px;">Aucune demande</p>
      <p style="color:var(--ink-muted); font-size:13px;">Vous n'avez reçu aucune demande pour le moment.</p>
    </div>
    @endforelse

     <div style="margin-bottom:24px;">
      <span class="label-cinzel">Gestion</span>
      <h2 style="font-family:'Cinzel',serif; font-size:22px; margin-top:4px; margin-bottom:4px;">Demande Envoyées</h2>
      <p style="font-size:13px; color:var(--ink-muted);">Gérez et répondez aux demandes de vos clients</p>
    </div>

    @forelse($my_demands as $demande)
    <article class="demand-card">
      <div class="card-accent accent-saffron"></div>

      <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:14px;">
        <div>
          <span class="label-cinzel" style="font-size:9px; display:block; margin-bottom:4px;">Service Requis</span>
          <h3 style="font-family:'Cormorant Garamond',serif; font-size:1.2rem; font-weight:600; line-height:1.3;">
            {{ $demande->service_name ?? 'Demande de Service' }}
          </h3>
        </div>
        <span class="badge b-art"><span class="status-dot"></span>En Cours</span>
      </div>

      <p style="color:var(--ink-dim); line-height:1.7; font-size:14px;">{{ $demande->description }}</p>

      <div class="demand-meta-grid">
        <div>
          <span class="label-cinzel" style="font-size:9px; display:block; margin-bottom:6px;">Client</span>
          <div style="display:flex; align-items:center; gap:8px;">
            <div style="width:26px; height:26px; border-radius:50%; background:linear-gradient(135deg,var(--clay),var(--saffron)); display:flex; align-items:center; justify-content:center; font-size:9px; font-weight:700; font-family:'Cinzel',serif; flex-shrink:0; color:#fff;">
              {{ strtoupper(substr($demande->sender->name, 0, 2)) }}
            </div>
            <span style="font-size:13px; font-weight:500;">{{ $demande->sender->name }}</span>
          </div>
        </div>
        <div>
          <span class="label-cinzel" style="font-size:9px; display:block; margin-bottom:6px;">Date</span>
          <div style="font-size:13px; font-weight:500; color:var(--ink-dim);">{{ $demande->created_at->format('d M, Y') }}</div>
          <div style="font-size:11px; color:var(--ink-muted); margin-top:2px;">{{ $demande->created_at->diffForHumans() }}</div>
        </div>
        <div style="display:flex; align-items:center; justify-content:flex-end; gap:8px;">
          <button class="btn-cancel" style="padding:6px 14px; font-size:11px;">Refuser</button>
          <button class="btn-details">Voir →</button>
        </div>
      </div>
    </article>
    @empty
      <div style="background:linear-gradient(145deg,var(--card-bg1),var(--card-bg2)); border:1px solid var(--border); border-radius:18px; text-align:center; padding:64px 24px;">
      <div style="width:56px; height:56px; border-radius:50%; background:var(--surface3); display:flex; align-items:center; justify-content:center; margin:0 auto 16px;">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--ink-muted)" stroke-width="1.5"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
      </div>
      <p style="font-family:'Cormorant Garamond',serif; font-size:20px; color:var(--ink); margin-bottom:6px;">Aucune demande</p>
      <p style="color:var(--ink-muted); font-size:13px;">Vous n'avez reçu aucune demande pour le moment.</p>
    </div>
    @endforelse
  </div>

  <script>
    (function(){var t=localStorage.getItem('7rayfi-theme')||'dark';document.documentElement.setAttribute('data-theme',t);setIcon(t);})();
    function toggleTheme(){var c=document.documentElement.getAttribute('data-theme'),n=c==='dark'?'light':'dark';document.documentElement.setAttribute('data-theme',n);localStorage.setItem('7rayfi-theme',n);setIcon(n);}
    function setIcon(t){var e=document.getElementById('ticon');if(e)e.textContent=t==='dark'?'☀️':'🌙';}
  </script>
</body>
</html>
