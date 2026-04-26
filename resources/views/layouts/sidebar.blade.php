<aside class="col1" style="position:sticky;top:78px;align-self:start;">
    <div class="card">
        <div class="card-accent accent-rainbow"></div>

        <!-- Profile banner -->
        <div class="prof-banner">
            <div class="prof-inner">
                @if (auth()->user()->profile_photo)
                    <img class="avatar-lg" src="{{ asset('image/' . auth()->user()->profile_photo) }}" alt="">
                @else
                    <div class="avatar-lg">{{ strtoupper(substr(auth()->user()->name, 0, 2)) }}</div>
                @endif

                <p style="font-family:'Cormorant Garamond',serif;font-size:17px;font-weight:600;color:#fff;text-align:center;line-height:1.2;">
                    {{ auth()->user()->name }}
                </p>
                <p style="font-size:11px;color:rgba(255,255,255,.6);margin-top:3px;text-align:center;">
                    {{ auth()->user()->headline ?? 'Artisan · Morocco 🇲🇦' }}
                </p>
                <div style="margin-top:10px;display:flex;gap:6px;">
                    <span class="badge b-art">✦ Artisan</span>
                    <span class="badge b-pro">PRO</span>
                </div>
            </div>
        </div>

        <div class="mini-zel"></div>

        <!-- Nav -->
        <div style="padding:4px 8px 10px;">
            <div class="slabel">Navigation</div>
            <a href="#" class="snav active">
                <span class="ic"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="var(--saffron)" stroke-width="2">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                </svg></span>Feed
            </a>
            <a href="{{ route('user.profile') }}" class="snav">
                <span class="ic"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                    <circle cx="12" cy="7" r="4"/>
                </svg></span>My Profile
            </a>
            @if (auth()->user()->role_id==1)
            <a href="{{ route('admin.network') }}" class="snav">
                <span class="ic"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                    <circle cx="9" cy="7" r="4"/>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>
                </svg></span>Network
            </a>
            @endif

            <a href="{{ route('offer.index') }}" class="snav">
                <span class="ic"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="2" y="7" width="20" height="14" rx="2"/>
                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                </svg></span>Jobs
            </a>

            <div class="mini-zel"></div>
            <a href="{{ route('user.singout') }}" class="snav"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <span class="ic"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#e05555" stroke-width="2">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                    <polyline points="16 17 21 12 16 7"/>
                    <line x1="21" y1="12" x2="9" y2="12"/>
                </svg></span>
                <span style="color:#e05555;">Sign Out</span>
            </a>
            <form id="logout-form" action="{{ route('user.singout') }}" method="POST" style="display:none;">
                @csrf
            </form>
        </div>
    </div>
</aside>
