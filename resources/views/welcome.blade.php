<!DOCTYPE html>
<html lang="ar" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>7erayfi — Connect. Grow. Thrive.</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    </head>
    <body>

        <!-- ZELIJ BACKGROUND -->
        <svg id="zelij-bg" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <!-- Core zelij tile: 120×120 unit cell -->
            <pattern id="zelij" x="0" y="0" width="120" height="120" patternUnits="userSpaceOnUse">
              <!-- ── Outer frame ── -->
              <rect width="120" height="120" fill="none" stroke="#E8B86D" stroke-width="0.6"/>

              <!-- ── Central 8-pointed star ── -->
              <polygon points="60,20 68,48 96,40 76,60 96,80 68,72 60,100 52,72 24,80 44,60 24,40 52,48"
                       fill="none" stroke="#E8B86D" stroke-width="0.8"/>

              <!-- Inner octagon of the star -->
              <polygon points="60,32 71,48 88,48 88,60 88,72 71,72 60,88 49,72 32,72 32,60 32,48 49,48"
                       fill="none" stroke="#C07830" stroke-width="0.5"/>

              <!-- Center dot -->
              <circle cx="60" cy="60" r="4" fill="none" stroke="#C07830" stroke-width="0.7"/>

              <!-- ── Corner squares ── -->
              <rect x="2"   y="2"   width="20" height="20" fill="none" stroke="#C07830" stroke-width="0.5" transform="rotate(45 12 12)"/>
              <rect x="98"  y="2"   width="20" height="20" fill="none" stroke="#C07830" stroke-width="0.5" transform="rotate(45 108 12)"/>
              <rect x="2"   y="98"  width="20" height="20" fill="none" stroke="#C07830" stroke-width="0.5" transform="rotate(45 12 108)"/>
              <rect x="98"  y="98"  width="20" height="20" fill="none" stroke="#C07830" stroke-width="0.5" transform="rotate(45 108 108)"/>

              <!-- ── Edge mid-diamonds ── -->
              <polygon points="60,2 70,12 60,22 50,12"  fill="none" stroke="#C07830" stroke-width="0.5"/>
              <polygon points="60,98 70,108 60,118 50,108" fill="none" stroke="#C07830" stroke-width="0.5"/>
              <polygon points="2,60 12,70 22,60 12,50"  fill="none" stroke="#C07830" stroke-width="0.5"/>
              <polygon points="98,60 108,70 118,60 108,50" fill="none" stroke="#C07830" stroke-width="0.5"/>

              <!-- ── Star-to-corner connectors ── -->
              <line x1="12" y1="12"  x2="44" y2="44"  stroke="#C07830" stroke-width="0.4"/>
              <line x1="108" y1="12" x2="76" y2="44"  stroke="#C07830" stroke-width="0.4"/>
              <line x1="12"  y1="108" x2="44" y2="76" stroke="#C07830" stroke-width="0.4"/>
              <line x1="108" y1="108" x2="76" y2="76" stroke="#C07830" stroke-width="0.4"/>

              <!-- ── Radial accent lines ── -->
              <line x1="60" y1="12"  x2="60" y2="32"  stroke="#C07830" stroke-width="0.4"/>
              <line x1="60" y1="88"  x2="60" y2="108" stroke="#C07830" stroke-width="0.4"/>
              <line x1="12" y1="60"  x2="32" y2="60"  stroke="#C07830" stroke-width="0.4"/>
              <line x1="88" y1="60"  x2="108" y2="60" stroke="#C07830" stroke-width="0.4"/>

              <!-- ── Inner cross ── -->
              <line x1="44" y1="44" x2="76" y2="76" stroke="#E8B86D" stroke-width="0.3" stroke-dasharray="2,3"/>
              <line x1="76" y1="44" x2="44" y2="76" stroke="#E8B86D" stroke-width="0.3" stroke-dasharray="2,3"/>
            </pattern>
          </defs>
          <rect width="100%" height="100%" fill="url(#zelij)"/>
        </svg>

        <!-- BLOBS -->
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
        <div class="blob blob-3"></div>

        <!-- NAV -->
        <nav>
            <a href="/" class="nav-logo">
                <img src="{{ asset('image/7rayfilogo.png') }}" alt="7erayfi logo" style="height: 50px; object-fit: contain;" />
            </a>
            <div class="nav-links">
                <a href="{{route('login')}}" class="btn-ghost">Sign in</a>
                <a href="{{route('signup')}}" class="btn-primary">Join free</a>
            </div>
        </nav>

        <!-- HERO -->
        <section class="hero">
            <div class="hero-badge">
                <span>✦</span>
                Morocco's Professional Network
            </div>

            <h1 class="hero-title">
                the artisan<br>
                <span class="line-gold"> free environment</span>
                <span class="line-accent">7erayfi</span><br>

            </h1>

            <p class="hero-sub">
                The platform built for Moroccan professionals. Find your next opportunity, connect with top talent, and showcase your expertise — in Arabic, Darija, or French.
            </p>

            <div class="hero-ctas">
                <a href="{{ route('signup') }}" class="btn-hero btn-hero-primary">Start for free →</a>
                <a href="#features" class="btn-hero btn-hero-outline">Explore the platform</a>
            </div>

            <div class="hero-stats">
                <div class="stat-item">
                    <div class="stat-num">50<span>K+</span></div>
                    <div class="stat-label">Professionals</div>
                </div>
                <div class="stat-sep"></div>
                <div class="stat-item">
                    <div class="stat-num">12<span>K+</span></div>
                    <div class="stat-label">Companies</div>
                </div>
                <div class="stat-sep"></div>
                <div class="stat-item">
                    <div class="stat-num">8<span>K+</span></div>
                    <div class="stat-label">Jobs Posted</div>
                </div>
                <div class="stat-sep"></div>
                <div class="stat-item">
                    <div class="stat-num">30<span>+</span></div>
                    <div class="stat-label">Cities</div>
                </div>
            </div>
        </section>

        <!-- FEATURES -->
        <section class="preview-section" id="features">
            <p class="section-label">What we offer</p>
            <h2 class="section-title">Everything you need to grow professionally</h2>

            <div class="cards-grid">
                <div class="feature-card">
                    <div class="card-icon">👤</div>
                    <div class="card-title">Smart Profiles</div>
                    <p class="card-desc">Build a rich professional profile that showcases your skills, portfolio, certifications, and career story — available in Arabic, French & Darija.</p>
                </div>
                <div class="feature-card">
                    <div class="card-icon">🤝</div>
                    <div class="card-title">Meaningful Connections</div>
                    <p class="card-desc">Connect with professionals in your field. Smart matching suggests people based on industry, skills, location, and mutual connections.</p>
                </div>
                <div class="feature-card">
                    <div class="card-icon">💼</div>
                    <div class="card-title">Job Opportunities</div>
                    <p class="card-desc">Discover top jobs across Morocco and the MENA region. Apply with one click using your 7erayfi profile — no CV upload needed.</p>
                </div>
                <div class="feature-card">
                    <div class="card-icon">📣</div>
                    <div class="card-title">Content & Thought Leadership</div>
                    <p class="card-desc">Share your expertise, publish articles, and build your reputation as a thought leader in your industry across Morocco and beyond.</p>
                </div>
                <div class="feature-card">
                    <div class="card-icon">🏢</div>
                    <div class="card-title">Company Pages</div>
                    <p class="card-desc">Businesses can build their employer brand, post jobs, follow trends, and engage with Morocco's largest professional community.</p>
                </div>
                <div class="feature-card">
                    <div class="card-icon">📈</div>
                    <div class="card-title">Career Insights</div>
                    <p class="card-desc">Get data-driven insights into salary trends, in-demand skills, and industry shifts across different Moroccan cities and sectors.</p>
                </div>
            </div>
        </section>

        <!-- PROFILES PREVIEW -->


        <!-- CTA -->
        <section class="cta-section">
            <div class="cta-box">
                <h2 class="cta-box-title">Ready to join<br>Morocco's network?</h2>
                <p class="cta-box-sub">Join 50,000+ professionals already building their careers on 7erayfi.</p>
                <div class="cta-form">
                    <input class="cta-input" type="email" placeholder="Enter your email address">
                    <button class="cta-submit">Get started →</button>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer>
            <a href="/" class="footer-logo">7erayfi</a>
            <span class="footer-text">© 2026 7erayfi. Built for Moroccan professionals.</span>
        </footer>

    </body>
</html>

