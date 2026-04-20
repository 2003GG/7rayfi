<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Network — 7RAYFI</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="{{ asset('css/network.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Tajawal:wght@300;400;500;700&family=Cinzel:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>
      @include('layouts/header')

  <div class="page-wrap">

    <!-- Page header -->
    <div class="page-header">
      <div>
        <span class="label-cinzel">Communauté</span>
        <h2 style="font-family:'Cinzel',serif; font-size:22px; color:var(--ink);">Personnes que vous connaissez</h2>
      </div>
      <input type="text" id="search-input" placeholder="Rechercher un membre…" class="search-input" oninput="searchUser(this.value)"/>
    </div>

    <!-- Cards grid -->
    <div class="network-grid" id="search-results">

      @forelse ($users as $user)
      @php
        $banners = [
          'linear-gradient(135deg,#c1440e,#e8a020)',
          'linear-gradient(135deg,#3b3fa8,#6b7ff0)',
          'linear-gradient(135deg,#1a4a2e,#2d8c50)',
          'linear-gradient(135deg,#7a3b10,#c87832)',
        ];
        $bg = $banners[$loop->index % 4];
      @endphp

      <article class="network-card">

        <!-- Banner + Avatar -->
        <div class="card-banner" style="background: {{ $bg }};">
          @if($user->profile_photo)
            <img class="card-avatar" src="{{ asset('image/' . $user->profile_photo) }}">
          @else
            <img class="card-avatar" src="{{ asset('image/profilDefault.jpg') }}">
          @endif
        </div>

        <!-- Body -->
        <div class="card-body">
          <p class="card-name">{{ $user->name }}</p>
          <p class="card-role">{{ $user->status ?? 'Artisan' }}</p>
          <span class="card-date">{{ $user->created_at->format('M Y') }}</span>
          <div class="card-divider"></div>

          @if($user->condition === 'blocke')
          <form action="{{ route('deblocke.user', $user->id) }}" method="POST">
            @csrf @method('put')
            <button type="submit" class="btn-action btn-block-green">✓ Débloquer</button>
          </form>
          @else
          <form action="{{ route('blocke.user', $user) }}" method="POST">
            @csrf @method('put')
            <button type="submit" class="btn-action btn-block-red">✕ Bloquer</button>
          </form>
          @endif
        </div>

      </article>
      @empty

      <div class="empty-state">
        <div class="empty-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--ink-muted)" stroke-width="1.5">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
            <circle cx="9" cy="7" r="4"/>
            <path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>
          </svg>
        </div>
        <p style="font-family:'Cormorant Garamond',serif; font-size:18px; color:var(--ink); margin-bottom:6px;">Aucun membre trouvé</p>
        <p style="font-size:13px; color:var(--ink-muted);">Il n'y a encore aucun membre dans votre réseau.</p>
      </div>

      @endforelse
    </div>

  </div>

  <script>
    /* ── Theme ── */
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

    /* ── Ajax Search ── */
    function searchUser(query) {


      var resultsDiv = document.getElementById('search-results');

      // Clear results if query too short
      if (query.length < 2) {
        searchUser('a'); // search with empty to show all
        return;
      }

      // Show loading
      resultsDiv.innerHTML = `
        <div style="grid-column:1/-1; text-align:center; padding:40px; color:var(--ink-muted); font-size:13px;">
          Recherche en cours…
        </div>
      `;

      fetch('/network?q=' + encodeURIComponent(query), {
        method: 'GET',
        headers: {
          'X-Requested-With': 'XMLHttpRequest',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        }
      })
      .then(response => response.json())
      .then(data => {   // ✅ Fixed: was .then(data){ which is wrong syntax

        var html = '';

        // No results
        if (data.length === 0) {
          html = `
            <div class="empty-state" style="grid-column:1/-1;">
              <p style="font-family:'Cormorant Garamond',serif; font-size:18px; color:var(--ink); margin-bottom:6px;">Aucun résultat</p>
              <p style="font-size:13px; color:var(--ink-muted);">Aucun membre trouvé pour "${query}"</p>
            </div>
          `;
        }


        data.forEach(user => {
          var photo = user.profile_photo
            ? '/image/' + user.profile_photo
            : '/image/profilDefault.jpg';

          var banners = [
            'linear-gradient(135deg,#c1440e,#e8a020)',
            'linear-gradient(135deg,#3b3fa8,#6b7ff0)',
            'linear-gradient(135deg,#1a4a2e,#2d8c50)',
            'linear-gradient(135deg,#7a3b10,#c87832)',
          ];
          var bg = banners[data.indexOf(user) % 4];

          html += `
            <article class="network-card">
              <div class="card-banner" style="background:${bg};">
                <img class="card-avatar" src="${photo}" alt="${user.name}">
              </div>
              <div class="card-body">
                <p class="card-name">${user.name}</p>
                <p class="card-role">${user.status ?? 'Artisan'}</p>
                <div class="card-divider"></div>
                <p style="font-size:11px; color:var(--ink-muted);">Membre depuis ${new Date(user.created_at).toLocaleDateString('fr-FR', {month:'short', year:'numeric'})}</p>
              </div>
            </article>
          `;
        });

        resultsDiv.innerHTML = html;
      })
      .catch(error => {
        console.error('Search error:', error);
        resultsDiv.innerHTML = `
          <div style="grid-column:1/-1; text-align:center; padding:40px; color:#e05555; font-size:13px;">
            Une erreur est survenue. Réessayez.
          </div>
        `;
      });
    }
  </script>
</body>
</html>
