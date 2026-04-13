<nav class="navbar">
  <div class="nav-inner">

    <!-- Logo -->
    <div style="display:flex;align-items:center;gap:8px;flex-shrink:0;">
      <div style="width:36px;height:36px;border-radius:10px;background:linear-gradient(135deg,var(--clay),var(--saffron));display:flex;align-items:center;justify-content:center;box-shadow:0 4px 14px rgba(193,68,14,.4);">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#0e0b08" stroke-width="2.5"><polygon points="12,2 22,8.5 22,15.5 12,22 2,15.5 2,8.5"/><polyline points="12,2 12,22"/><line x1="2" y1="8.5" x2="22" y2="8.5"/><line x1="2" y1="15.5" x2="22" y2="15.5"/></svg>
      </div>
      <span class="logo-text">7RAYFI</span>
    </div>

    <!-- Search -->
    <div style="flex:1;max-width:300px;position:relative;">
      <svg style="position:absolute;left:12px;top:50%;transform:translateY(-50%);color:var(--ink-muted);" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
      <input type="text" placeholder="Search artisans, skills, posts…" class="search-bar" />
    </div>

    <!-- Icons -->
    <div style="display:flex;align-items:center;gap:7px;margin-left:auto;">
    <a href="{{ route('post.index') }}">
      <button class="nav-icon" title="Home">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9,22 9,12 15,12 15,22"/></svg>
    </button>
    </a>

        @if (auth()->user()->role_id==1)
    <a href="{{ route('admin.network') }}">
      <button class="nav-icon" title="My Network">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
    </button>
    </a>
     <a href="{{ route('remove.report.post') }}">
      <button class="nav-icon" title="My Network">
<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/>
  <line x1="12" y1="9" x2="12" y2="13"/>
  <line x1="12" y1="17" x2="12.01" y2="17"/>
</svg>    </button>
    </a>

            <a href="{{ route('category.index') }}">
                <button class="nav-icon" title="My category">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <rect x="3" y="3" width="7" height="7" rx="1"/>
        <rect x="14" y="3" width="7" height="7" rx="1"/>
        <rect x="14" y="14" width="7" height="7" rx="1"/>
        <rect x="3" y="14" width="7" height="7" rx="1"/>
        </svg>
        </button>
            </a>
    @endif

        <a href="{{ route('offer.index') }}">
      <button class="nav-icon" title="Jobs">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
    </button>
    </a>


        <a href="">
      <button class="nav-icon" title="Messages" style="position:relative;">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
        <span class="nav-badge">3</span>
      </button>
      </a>

      <!-- ------------------------------- -->
       <a href="{{ route('cours.index') }}">
    <button class="nav-icon" title="formation" style="position:relative;">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v15H6.5A2.5 2.5 0 0 0 4 19.5V4.5A2.5 2.5 0 0 1 6.5 2z"/><path d="M9 2v15"/></svg>
      </button>
      </a>


       <a href="{{ route('demande.index') }}">
      <button class="nav-icon" title="Demande offer" style="position:relative;">
      <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2h9l5 5v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z"/><path d="M14 2v6h6"/><path d="M8 13h8"/><path d="M8 17h8"/></svg>
      </button>
       </a>


        <a href="{{ route('products.index') }}">
      <button class="nav-icon" title="Products" style="position:relative;">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><path d="M3.3 7l8.7 5 8.7-5"/><path d="M12 22V12"/></svg>      </button>
       </a>




      <!-- -------------------------------- -->
      <button class="nav-icon" title="Notifications" style="position:relative;">
        <a href="">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
        <span class="nav-badge">7</span>
        </a>
      </button>

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
            <svg xmlns="http://www.w3.org/2000/svg"
            width="24" height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round">

        <!-- Door -->
        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>

        <!-- Arrow -->
        <line x1="16" y1="17" x2="21" y2="12"/>
        <line x1="21" y1="12" x2="16" y2="7"/>
        <line x1="21" y1="12" x2="9" y2="12"/>

        </svg>
        </button>
        </form>


         </div>
      </a>
    </div>
  </div>
  <div class="zine-border"></div>
</nav>
