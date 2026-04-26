<nav class="navbar">
  <div class="nav-inner">

    <!-- Logo -->
    <div style="display:flex;align-items:center;gap:8px;flex-shrink:0;">
      <div style="width:36px;height:36px;border-radius:10px;background:linear-gradient(135deg,var(--clay),var(--saffron));display:flex;align-items:center;justify-content:center;box-shadow:0 4px 14px rgba(193,68,14,.4);">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#0e0b08" stroke-width="2.5"><polygon points="12,2 22,8.5 22,15.5 12,22 2,15.5 2,8.5"/><polyline points="12,2 12,22"/><line x1="2" y1="8.5" x2="22" y2="8.5"/><line x1="2" y1="15.5" x2="22" y2="15.5"/></svg>
      </div>
      <span class="logo-text">7RAYFI</span>
    </div>

    <!-- Search (hidden on very small screens via CSS) -->
    <div class="nav-search-wrap">
      <svg style="position:absolute;left:12px;top:50%;transform:translateY(-50%);color:var(--ink-muted);" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
      <input type="text" placeholder="Search artisans, skills, posts…" class="search-bar" />
    </div>

    <!-- Desktop / Tablet Icons -->
    <div class="nav-icons-group">

      <a href="{{ route('post.index') }}">
        <button class="nav-icon" title="Home">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9,22 9,12 15,12 15,22"/></svg>
        </button>
      </a>

      @if (auth()->user()->role_id==1)
      {{-- Admin-only icons — hide on tablet too --}}
      <a href="{{ route('admin.network') }}" class="nav-icons-secondary">
        <button class="nav-icon" title="My Network">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </button>
      </a>
      <a href="{{ route('remove.report.post') }}" class="nav-icons-secondary">
        <button class="nav-icon" title="Reports">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/>
            <line x1="12" y1="9" x2="12" y2="13"/>
            <line x1="12" y1="17" x2="12.01" y2="17"/>
          </svg>
        </button>
      </a>
      <a href="{{ route('category.index') }}" class="nav-icons-secondary">
        <button class="nav-icon" title="Categories">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <rect x="3" y="3" width="7" height="7" rx="1"/>
            <rect x="14" y="3" width="7" height="7" rx="1"/>
            <rect x="14" y="14" width="7" height="7" rx="1"/>
            <rect x="3" y="14" width="7" height="7" rx="1"/>
          </svg>
        </button>
      </a>
      @endif

      <a href="{{ route('offer.index') }}" class="nav-icons-secondary">
        <button class="nav-icon" title="Jobs">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
        </button>
      </a>

      <a href="{{ route('chat.index') }}">
        <button class="nav-icon" title="Messages" style="position:relative;">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
          <!-- <span class="nav-badge">3</span> -->
        </button>
      </a>

      <a href="{{ route('cours.index') }}" class="nav-icons-secondary">
        <button class="nav-icon" title="Formation" style="position:relative;">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v15H6.5A2.5 2.5 0 0 0 4 19.5V4.5A2.5 2.5 0 0 1 6.5 2z"/><path d="M9 2v15"/></svg>
        </button>
      </a>

      <a href="{{ route('demande.index') }}" class="nav-icons-secondary">
        <button class="nav-icon" title="Demande offer" style="position:relative;">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2h9l5 5v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z"/><path d="M14 2v6h6"/><path d="M8 13h8"/><path d="M8 17h8"/></svg>
        </button>
      </a>

      <a href="{{ route('products.index') }}" class="nav-icons-secondary">
        <button class="nav-icon" title="Products" style="position:relative;">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><path d="M3.3 7l8.7 5 8.7-5"/><path d="M12 22V12"/></svg>
        </button>
      </a>

      <!-- <button class="nav-icon" title="Notifications" style="position:relative;">
        <a href="">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
          <span class="nav-badge">7</span>
        </a>
      </button> -->

      <div style="width:1px;height:24px;background:var(--border);margin:0 2px;"></div>

      <!-- THEME TOGGLE -->
      <div class="toggle-wrap">
        <button class="theme-btn" onclick="toggleTheme()" title="Switch theme">
          <div class="theme-thumb" id="tthumb">
            <span id="ticon">☀️</span>
          </div>
        </button>
      </div>

      <a href="{{ route('user.profile') }}">
        <div class="avatar">{{ strtoupper(substr(auth()->user()->name, 0, 2)) }}</div>
      </a>

      <form action="{{ route('user.singout') }}" method="POST">
        @csrf
        @method('post')
        <button type="submit">
          <div class="avatar">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
              <line x1="16" y1="17" x2="21" y2="12"/>
              <line x1="21" y1="12" x2="16" y2="7"/>
              <line x1="21" y1="12" x2="9" y2="12"/>
            </svg>
          </div>
        </button>
      </form>

    </div><!-- /nav-icons-group -->

    <!-- Hamburger (mobile only) -->
    <button class="nav-hamburger" onclick="openDrawer()" title="Menu" aria-label="Open menu">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
    </button>

  </div>
  <div class="zine-border"></div>
</nav>


<!-- ══════════ MOBILE DRAWER ══════════ -->
<div class="mobile-drawer-overlay" id="drawer-overlay" onclick="closeDrawer()"></div>

<div class="mobile-drawer" id="mobile-drawer" role="dialog" aria-modal="true" aria-label="Navigation menu">

  <!-- Drawer header -->
  <div class="drawer-header">
    <div style="display:flex;align-items:center;gap:8px;">
      <div style="width:30px;height:30px;border-radius:8px;background:linear-gradient(135deg,var(--clay),var(--saffron));display:flex;align-items:center;justify-content:center;">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#0e0b08" stroke-width="2.5"><polygon points="12,2 22,8.5 22,15.5 12,22 2,15.5 2,8.5"/><polyline points="12,2 12,22"/><line x1="2" y1="8.5" x2="22" y2="8.5"/><line x1="2" y1="15.5" x2="22" y2="15.5"/></svg>
      </div>
      <span class="logo-text" style="font-size:16px;letter-spacing:2px;">7RAYFI</span>
    </div>
    <button class="drawer-close" onclick="closeDrawer()" aria-label="Close menu">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6L6 18M6 6l12 12"/></svg>
    </button>
  </div>

  <!-- Profile strip -->
  <div class="drawer-profile">
    @if (auth()->user()->profile_photo)
      <img src="{{ asset('image/' . auth()->user()->profile_photo) }}" style="width:46px;height:46px;border-radius:50%;border:2px solid rgba(232,160,32,.4);object-fit:cover;position:relative;z-index:1;" alt="">
    @else
      <div class="avatar" style="width:46px;height:46px;font-size:14px;position:relative;z-index:1;">{{ strtoupper(substr(auth()->user()->name, 0, 2)) }}</div>
    @endif
    <div class="drawer-profile-info">
      <div class="drawer-profile-name">{{ auth()->user()->name }}</div>
      <div class="drawer-profile-sub">{{ auth()->user()->headline ?? 'Artisan · Morocco 🇲🇦' }}</div>
      <div style="margin-top:6px;display:flex;gap:5px;">
        <span class="badge b-art">✦ Artisan</span>
        <span class="badge b-pro">PRO</span>
      </div>
    </div>
  </div>

  <!-- Search -->
  <div class="drawer-search">
    <div class="drawer-search-inner">
      <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
      <input type="text" placeholder="Search artisans, skills, posts…" />
    </div>
  </div>

  <!-- Nav links -->
  <nav class="drawer-nav">
    <div class="mini-zel" style="margin: 4px 8px 8px;"></div>

    <a href="{{ route('post.index') }}">
      <span class="ic"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--saffron)" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9,22 9,12 15,12 15,22"/></svg></span>
      Feed
    </a>
    <a href="{{ route('user.profile') }}">
      <span class="ic"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></span>
      My Profile
    </a>
    <!-- <a href="">
      <span class="ic" style="position:relative;">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
      </span>
      Messages <span style="margin-left:auto;background:var(--clay);color:#fff;font-size:9px;font-weight:700;padding:1px 6px;border-radius:50px;">3</span>
    </a>
    <a href="">
      <span class="ic" style="position:relative;">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
      </span>
      Notifications <span style="margin-left:auto;background:var(--clay);color:#fff;font-size:9px;font-weight:700;padding:1px 6px;border-radius:50px;">7</span>
    </a> -->
    <a href="{{ route('offer.index') }}">
      <span class="ic"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg></span>
      Jobs
    </a>
    <a href="{{ route('cours.index') }}">
      <span class="ic"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v15H6.5A2.5 2.5 0 0 0 4 19.5V4.5A2.5 2.5 0 0 1 6.5 2z"/><path d="M9 2v15"/></svg></span>
      Formation
    </a>
    <a href="{{ route('demande.index') }}">
      <span class="ic"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2h9l5 5v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z"/><path d="M14 2v6h6"/><path d="M8 13h8"/><path d="M8 17h8"/></svg></span>
      Demande
    </a>
    <a href="{{ route('products.index') }}">
      <span class="ic"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><path d="M3.3 7l8.7 5 8.7-5"/><path d="M12 22V12"/></svg></span>
      Products
    </a>

    @if (auth()->user()->role_id==1)
    <div class="mini-zel" style="margin:8px 8px;"></div>
    <a href="{{ route('admin.network') }}">
      <span class="ic"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg></span>
      Network (Admin)
    </a>
    <a href="{{ route('remove.report.post') }}">
      <span class="ic"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg></span>
      Reported Posts
    </a>
    <a href="{{ route('category.index') }}">
      <span class="ic"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/></svg></span>
      Categories
    </a>
    @endif

    <div class="mini-zel" style="margin:8px 8px;"></div>

    <!-- Theme toggle in drawer -->
    <div style="display:flex;align-items:center;justify-content:space-between;padding:9px 12px;border-radius:12px;border:1px solid var(--border);margin:2px 0;">
      <span style="display:flex;align-items:center;gap:10px;font-size:13.5px;font-weight:500;color:var(--ink-dim);">
        <span class="ic"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg></span>
        Theme
      </span>
      <button class="theme-btn" onclick="toggleTheme()" style="margin:0;">
        <div class="theme-thumb"><span id="ticon-drawer">☀️</span></div>
      </button>
    </div>

    <div class="mini-zel" style="margin:8px 8px;"></div>

    <!-- Sign out -->
    <form action="{{ route('user.singout') }}" method="POST" id="drawer-logout-form">
      @csrf @method('post')
      <button type="submit" class="snav-d sign-out-link" style="width:100%;text-align:left;">
        <span class="ic"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#e05555" stroke-width="2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg></span>
        <span style="color:#e05555;">Sign Out</span>
      </button>
    </form>
  </nav>

</div>


<!-- ══════════ BOTTOM NAV (mobile) ══════════ -->
<div class="bottom-nav">
  <div class="bottom-nav-inner">

    <a href="{{ route('post.index') }}" class="bnav-btn active">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9,22 9,12 15,12 15,22"/></svg>
      Feed
    </a>

    <a href="{{ route('offer.index') }}" class="bnav-btn">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
      Jobs
    </a>

    {{-- FAB: Create Post --}}
    <button class="bnav-fab" onclick="document.getElementById('post-modal').classList.remove('hidden')" title="Create Post">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0e0b08" stroke-width="2.5"><path d="M12 5v14M5 12h14"/></svg>
    </button>

    <a href="" class="bnav-btn" style="position:relative;">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
      <span class="bnav-badge">3</span>
      Chat
    </a>

    <a href="{{ route('user.profile') }}" class="bnav-btn">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
      Profile
    </a>

  </div>
</div>


<script>
  /* ── Drawer open/close ── */
  function openDrawer() {
    var overlay = document.getElementById('drawer-overlay');
    var drawer  = document.getElementById('mobile-drawer');
    overlay.style.display = 'block';
    document.body.style.overflow = 'hidden';
    requestAnimationFrame(function() {
      overlay.classList.add('open');
      drawer.classList.add('open');
    });
  }
  function closeDrawer() {
    var overlay = document.getElementById('drawer-overlay');
    var drawer  = document.getElementById('mobile-drawer');
    overlay.classList.remove('open');
    drawer.classList.remove('open');
    document.body.style.overflow = '';
    setTimeout(function(){ overlay.style.display = 'none'; }, 350);
  }
  /* Close drawer on Escape */
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeDrawer();
  });
  /* Sync drawer theme icon */
  function syncDrawerIcon(t) {
    var el = document.getElementById('ticon-drawer');
    if (el) el.textContent = t === 'dark' ? '☀️' : '🌙';
  }
  /* Patch toggleTheme to also update drawer icon */
  var _origToggle = window.toggleTheme;
  window.toggleTheme = function() {
    if (_origToggle) _origToggle();
    var t = document.documentElement.getAttribute('data-theme');
    syncDrawerIcon(t);
  };
  /* Init drawer icon on load */
  (function(){
    var t = localStorage.getItem('7rayfi-theme') || 'dark';
    syncDrawerIcon(t);
  })();
</script>
