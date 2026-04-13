<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profil — 7RAYFI</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Tajawal:wght@300;400;500;700&family=Cinzel:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
  <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>

<body>
  @include('layouts/header')

  <div class="page-wrap">
    <div class="profile-layout">

      <!-- ── Left: main content ── -->
      <div>

        <!-- Hero -->
        <div class="profile-hero">
          <div class="card-accent accent-rainbow"></div>
          <div class="hero-banner"></div>
          <div class="hero-content">
            <div class="hero-top-row">
              <div>
                <div class="hero-avatar">
                  @if($user->profile_photo)
                    <img src="{{ asset('image/' . $user->profile_photo) }}" alt="Profile Photo">
                  @else
                    <img src="{{ asset('image/profilDefault.jpg') }}" alt="">
                  @endif
                </div>
                <h1 class="hero-name">{{ $user->name }}</h1>
                <p class="hero-headline">{{ $user->headline ?? 'Artisan · Maroc 🇲🇦' }}</p>
                <div class="hero-location">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                  {{ $user->localisation ?? 'Maroc' }}
                  <span style="margin:0 4px; color:var(--border);">·</span>
                  <a href="#" style="color:var(--saffron); text-decoration:none; font-size:12px;">500+ relations</a>
                </div>
                <div style="display:flex; gap:8px; margin-top:12px; flex-wrap:wrap;">
                  <span class="badge b-art">✦ Artisan</span>
                  <span class="badge b-pro">PRO</span>
                  <span class="badge" style="background:rgba(80,200,120,0.15); color:#50c878; border-color:rgba(80,200,120,0.3); font-family:'Cinzel',serif; font-size:9px; padding:3px 10px;">● Disponible</span>
                </div>
              </div>

            </div>
          </div>
          <div class="hero-stats">
            <div class="hero-stat"><div class="hero-stat-n">248</div><div class="hero-stat-l">Vues profil</div></div>
            <div class="hero-stat"><div class="hero-stat-n">1.4K</div><div class="hero-stat-l">Impressions</div></div>
            <div class="hero-stat"><div class="hero-stat-n">83</div><div class="hero-stat-l">Relations</div></div>
            <div class="hero-stat"><div class="hero-stat-n" style="color:var(--copper-lt);">4.9</div><div class="hero-stat-l">Note</div></div>
          </div>
        </div>

        <!-- About -->
        <div class="section-card">
          <div class="card-accent accent-ocean"></div>

          <div class="section-body">
            <p style="font-size:14px; color:var(--ink-dim); line-height:1.8;">
              {{ $user->biographie ?? 'Artisan passionné depuis plus de 15 ans, spécialisé dans les arts traditionnels marocains. Mon atelier à Marrakech perpétue des techniques ancestrales transmises de génération en génération.' }}
            </p>
          </div>
        </div>

        <!-- Experience -->
        <div class="section-card" id="experience">
          <div class="card-accent accent-clay"></div>
          <div class="section-header">
            <h3 style="font-family:'Cinzel',serif; font-size:13px;">Expérience</h3>
            <button class="add-btn">+ Ajouter</button>
          </div>
          <div class="section-body" style="padding-top:6px; padding-bottom:6px;">
            @php $experiences = [
              ['emoji'=>'🏺','title'=>'Maître Artisan','company'=>'Atelier Al Fassi','period'=>'Jan 2015 – Présent · 9 ans','desc'=>'Direction artistique et production de pièces en céramique de luxe.'],
              ['emoji'=>'🪡','title'=>'Artisan Zellige','company'=>'Coopérative Artisans Marrakech','period'=>'Mar 2010 – Déc 2014 · 4 ans','desc'=>'Création de panneaux décoratifs en zellige pour des projets résidentiels et hôteliers.'],
            ]; @endphp
            @foreach($experiences as $exp)
            <div class="exp-item">
              <div class="exp-logo">{{ $exp['emoji'] }}</div>
              <div style="flex:1; min-width:0;">
                <div style="font-family:'Cormorant Garamond',serif; font-size:15px; font-weight:600; color:var(--ink); margin-bottom:2px;">{{ $exp['title'] }}</div>
                <div style="font-size:12px; color:var(--ink-dim);">{{ $exp['company'] }}</div>
                <div style="font-size:11px; color:var(--ink-muted); margin-bottom:4px;">{{ $exp['period'] }}</div>
                <p style="font-size:13px; color:var(--ink-dim); line-height:1.6;">{{ $exp['desc'] }}</p>
              </div>
            </div>
            @endforeach
          </div>
        </div>

        <!-- Skills -->
        <div class="section-card" id="competences">
          <div class="card-accent accent-saffron"></div>
          <div class="section-header">
            <h3 style="font-family:'Cinzel',serif; font-size:13px;">Compétences</h3>
            <button class="add-btn">+ Ajouter</button>
          </div>
          <div class="section-body">
            @foreach(['🪡 Zellige','🏺 Céramique','🧵 Textile','🔨 Cuivre','✒️ Calligraphie','🌿 Tadelakt','🪵 Menuiserie','🎨 Design artisanal'] as $skill)
            <span class="profile-skill">{{ $skill }}</span>
            @endforeach
            <div style="margin-top:16px; border-top:1px solid var(--border); padding-top:14px;">
              <span class="label-cinzel" style="display:block; margin-bottom:12px; font-size:9px;">Maîtrise par domaine</span>
              @foreach([['name'=>'Zellige','pct'=>95],['name'=>'Céramique','pct'=>80],['name'=>'Tadelakt','pct'=>70]] as $r)
              <div style="margin-bottom:10px;">
                <div style="display:flex; justify-content:space-between; margin-bottom:5px;">
                  <span style="font-size:12px; color:var(--ink-dim);">{{ $r['name'] }}</span>
                  <span style="font-family:'Cinzel',serif; font-size:12px; color:var(--saffron);">{{ $r['pct'] }}%</span>
                </div>
                <div style="height:4px; width:100%; background:var(--surface3); border-radius:2px;">
                  <div style="height:100%; width:{{ $r['pct'] }}%; background:linear-gradient(90deg,var(--clay),var(--saffron)); border-radius:2px;"></div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>

      </div>

      <!-- ── Right panel ── -->
      <div class="right-panel">

        <!-- Profile strength -->
        <div class="section-card" style="margin-bottom:0;">
          <div class="card-accent accent-clay"></div>
          <div class="section-body">
            <div style="display:flex; align-items:center; gap:14px; margin-bottom:16px;">
              <div class="strength-ring">
                <svg width="72" height="72" viewBox="0 0 72 72">
                  <circle cx="36" cy="36" r="28" fill="none" stroke="var(--surface3)" stroke-width="5"/>
                  <circle cx="36" cy="36" r="28" fill="none" stroke="var(--saffron)" stroke-width="5"
                    stroke-dasharray="{{ 2 * 3.14159 * 28 }}"
                    stroke-dashoffset="{{ 2 * 3.14159 * 28 * (1 - 0.35) }}"
                    stroke-linecap="round"/>
                </svg>
                <div class="strength-ring-val">35%</div>
              </div>
              <div>
                <span class="label-cinzel" style="display:block; margin-bottom:4px;">Force du profil</span>
                <p style="font-size:12px; color:var(--ink-dim); line-height:1.5;">Complétez pour attirer plus de clients</p>
              </div>
            </div>
            @foreach([['label'=>'Photo de profil','done'=>false],['label'=>'Biographie','done'=>true],['label'=>'Compétences','done'=>true],['label'=>'Expérience','done'=>false],['label'=>'Portfolio','done'=>false]] as $step)
            <div style="display:flex; align-items:center; gap:10px; padding:5px 0;">
              <div style="width:16px; height:16px; border-radius:50%; background:{{ $step['done'] ? 'var(--saffron)' : 'var(--surface3)' }}; border:1px solid {{ $step['done'] ? 'var(--saffron)' : 'var(--border)' }}; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                @if($step['done'])<svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="#0e0b08" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg>@endif
              </div>
              <span style="font-size:12px; color:{{ $step['done'] ? 'var(--ink)' : 'var(--ink-muted)' }};">{{ $step['label'] }}</span>
            </div>
            @endforeach
          </div>
        </div>

        <!-- Contact -->
        <div class="section-card" style="margin-bottom:0;">
          <div class="card-accent accent-saffron"></div>
          <div class="section-body">
            <span class="label-cinzel" style="display:block; margin-bottom:12px;">Contact</span>
            <div style="display:flex; align-items:center; gap:10px; padding:6px 0;">
              <div style="width:28px; height:28px; border-radius:8px; background:var(--surface3); display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="var(--saffron)" stroke-width="1.8"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
              </div>
              <span style="font-size:12px; color:var(--ink-dim); overflow:hidden; text-overflow:ellipsis; white-space:nowrap;">{{ $user->email }}</span>
            </div>
            <div style="display:flex; align-items:center; gap:10px; padding:6px 0;">
              <div style="width:28px; height:28px; border-radius:8px; background:var(--surface3); display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="var(--saffron)" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.82 19.79 19.79 0 01.1 1.18 2 2 0 012.08 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
              </div>
              <span style="font-size:12px; color:var(--ink-dim);">{{ $user->phone_number ?? 'Non renseigné' }}</span>
            </div>
          </div>
        </div>

        <!-- Reviews -->
        <div class="section-card" style="margin-bottom:0;">
          <div class="card-accent accent-rainbow"></div>
          <div class="section-body">
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:12px;">
              <span class="label-cinzel">Avis</span>
              <div style="display:flex; align-items:center; gap:4px;">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="var(--saffron)" stroke="none"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                <span style="font-family:'Cinzel',serif; font-size:13px; color:var(--saffron);">4.9</span>
              </div>
            </div>
            @foreach([['name'=>'Karim B.','text'=>'Travail exceptionnel, précision remarquable.','stars'=>5],['name'=>'Leila M.','text'=>'Artisan de talent, livraison dans les délais.','stars'=>5]] as $rev)
            <div style="padding:8px 0; border-bottom:1px solid var(--border);">
              <div style="display:flex; align-items:center; gap:8px; margin-bottom:5px;">
                <div style="width:24px; height:24px; border-radius:50%; background:linear-gradient(135deg,var(--clay),var(--saffron)); display:flex; align-items:center; justify-content:center; font-size:9px; font-weight:700; font-family:'Cinzel',serif; color:#fff; flex-shrink:0;">{{ strtoupper(substr($rev['name'],0,2)) }}</div>
                <span style="font-size:12px; font-weight:500; color:var(--ink); flex:1;">{{ $rev['name'] }}</span>
                <div style="display:flex; gap:1px;">@for($s=0;$s<$rev['stars'];$s++)<svg width="9" height="9" viewBox="0 0 24 24" fill="var(--saffron)" stroke="none"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>@endfor</div>
              </div>
              <p style="font-size:12px; color:var(--ink-dim); line-height:1.5; padding-left:32px;">{{ $rev['text'] }}</p>
            </div>
            @endforeach
            <div style="padding-top:8px; text-align:center;">
              <button style="font-size:11px; color:var(--saffron); background:none; border:none; cursor:pointer; font-family:'Cinzel',serif;">Voir tous →</button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- ══════════ EDIT MODAL ══════════ -->
  <div id="edit-modal" class="edit-modal-ov hidden" onclick="if(event.target===this) document.getElementById('edit-modal').classList.add('hidden')">
    <div class="edit-modal-box" style="overflow-y:auto; max-height:90vh;">

      <!-- Sticky header -->
      <div style="position:sticky; top:0; z-index:10; background:var(--surface2); padding:18px 22px 14px; border-bottom:1px solid var(--border);">
        <div style="position:absolute; top:0; left:0; right:0; height:3px; background:linear-gradient(90deg,var(--clay),var(--saffron),var(--copper-lt)); border-radius:20px 20px 0 0;"></div>
        <div style="display:flex; align-items:center; justify-content:space-between; margin-top:6px;">
          <h2 style="font-family:'Cinzel',serif; font-size:16px; color:var(--ink);">Modifier le profil</h2>
          <button onclick="document.getElementById('edit-modal').classList.add('hidden')" style="width:28px; height:28px; border-radius:8px; background:var(--surface3); border:1px solid var(--border); display:flex; align-items:center; justify-content:center; cursor:pointer; color:var(--ink-dim);">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6L6 18M6 6l12 12"/></svg>
          </button>
        </div>
      </div>

      <!-- Form -->

    </div>
  </div>

  <script>
    (function(){
      var t = localStorage.getItem('7rayfi-theme') || 'dark';
      document.documentElement.setAttribute('data-theme', t);
      setIcon(t);
    })();

    function toggleTheme() {
      var c = document.documentElement.getAttribute('data-theme');
      var n = c === 'dark' ? 'light' : 'dark';
      document.documentElement.setAttribute('data-theme', n);
      localStorage.setItem('7rayfi-theme', n);
      setIcon(n);
    }

    function setIcon(t) {
      var e = document.getElementById('ticon');
      if (e) e.textContent = t === 'dark' ? '☀️' : '🌙';
    }

    function previewModalPhoto(event) {
      var file = event.target.files[0];
      if (!file) return;
      var reader = new FileReader();
      reader.onload = function(e) {
        document.getElementById('modal-avatar-img').src = e.target.result;
      };
      reader.readAsDataURL(file);
    }
  </script>
</body>
</html>
