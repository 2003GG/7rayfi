<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cours — 7RAYFI</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Tajawal:wght@300;400;500;700&family=Cinzel:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

  <style>
    body { background-color: var(--bg); color: var(--ink); font-family: 'Tajawal', sans-serif; }

    .page-wrap {
      max-width: 960px;
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

    .topbar {
      display: flex; align-items: center; justify-content: space-between; gap: 14px;
      background: linear-gradient(145deg, var(--card-bg1), var(--card-bg2));
      border: 1px solid var(--border); border-radius: 18px;
      padding: 16px 22px; margin-bottom: 16px;
    }

    .fse-dark {
      background: var(--surface3); border: 1px solid var(--border); border-radius: 10px;
      padding: 7px 12px; font-size: 12px; color: var(--ink);
      font-family: 'Tajawal', sans-serif; cursor: pointer;
    }

    /* ── Course card ── */
    .course-card {
      background: linear-gradient(145deg, var(--card-bg1), var(--card-bg2));
      border: 1px solid var(--border); border-radius: 18px;
      overflow: hidden; display: flex; position: relative;
      transition: all 0.3s ease; margin-bottom: 14px; cursor: pointer;
    }
    .course-card:hover {
      border-color: var(--border-h); transform: translateY(-2px);
      box-shadow: 0 12px 40px rgba(0,0,0,0.2);
    }

    .course-thumb-wrap {
      width: 200px; flex-shrink: 0; overflow: hidden; position: relative;
    }
    .course-thumb {
      width: 100%; height: 100%; object-fit: cover; min-height: 160px;
      transition: transform 0.4s ease;
    }
    .course-card:hover .course-thumb { transform: scale(1.04); }

    .course-thumb-placeholder {
      width: 100%; min-height: 160px; height: 100%;
      display: flex; align-items: center; justify-content: center; font-size: 48px;
    }

    .level-badge {
      position: absolute; top: 12px; left: 12px;
      font-family: 'Cinzel', serif; font-size: 9px; font-weight: 700;
      background: rgba(14,11,8,0.85); backdrop-filter: blur(4px);
      border: 1px solid rgba(232,160,32,0.4); color: var(--saffron);
      padding: 3px 10px; border-radius: 20px; letter-spacing: 0.5px;
    }

    .course-body {
      flex: 1; padding: 20px 22px; display: flex; flex-direction: column; justify-content: space-between;
    }

    .cat-tag {
      display: inline-block; font-family: 'Cinzel', serif; font-size: 10px;
      color: rgba(232,160,32,0.8); background: rgba(232,160,32,0.08);
      border: 1px solid rgba(232,160,32,0.2); padding: 2px 9px; border-radius: 20px;
      margin-right: 6px;
    }

    .course-title {
      font-family: 'Cormorant Garamond', serif; font-size: 17px; font-weight: 600;
      color: var(--ink); line-height: 1.3; margin: 6px 0 2px;
    }

    .progress-bar {
      height: 3px; background: rgba(232,160,32,0.15); border-radius: 99px; overflow: hidden; margin-bottom: 12px;
    }
    .progress-fill {
      height: 100%; background: linear-gradient(90deg, var(--clay), var(--saffron)); border-radius: 99px;
    }

    .btn-apply {
      display: inline-flex; align-items: center; gap: 6px;
      padding: 7px 16px; border-radius: 10px;
      font-family: 'Cinzel', serif; font-size: 11px; font-weight: 700; letter-spacing: 0.5px;
      background: linear-gradient(135deg, var(--clay), var(--saffron));
      color: #0e0b08; border: none; cursor: pointer; transition: all 0.2s ease;
      white-space: nowrap;
    }
    .btn-apply:hover { transform: scale(1.03); box-shadow: 0 6px 20px rgba(193,68,14,0.4); }

    .star-icon { fill: var(--saffron); }
  </style>
</head>

<body>
      @include('layouts/header')

  <div class="page-wrap">

    <!-- Page header -->
    <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:24px; gap:16px;">
      <div>
        <span class="label-cinzel">Connaissance</span>
        <h2 style="font-family:'Cinzel',serif; font-size:22px; margin-top:4px; margin-bottom:4px;">Explorer les Cours</h2>
        <p style="font-size:13px; color:var(--ink-muted);">Apprenez des meilleurs maîtres artisans du Maroc</p>
      </div>
      <a href="{{ route('post.index') }}" style="display:inline-flex; align-items:center; gap:6px; padding:8px 18px; border-radius:11px; border:1px solid var(--border-h); color:var(--saffron); font-family:'Cinzel',serif; font-size:11px; font-weight:600; text-decoration:none; transition:all 0.2s; white-space:nowrap; margin-top:4px;" onmouseover="this.style.background='rgba(232,160,32,0.1)'" onmouseout="this.style.background='transparent'">
        <svg width="11" height="11" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="15 18 9 12 15 6"/></svg>
        Retour au feed
      </a>
      <button onclick="openCourseModal()" style="display:inline-flex; align-items:center; gap:6px; padding:8px 18px; border-radius:11px; font-family:'Cinzel',serif; font-size:11px; font-weight:700; background:linear-gradient(135deg,var(--clay),var(--saffron)); color:#0e0b08; border:none; cursor:pointer; transition:all 0.2s; white-space:nowrap;" onmouseover="this.style.boxShadow='0 6px 20px rgba(193,68,14,0.4)'" onmouseout="this.style.boxShadow='none'">
      <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
      Créer un cours
    </button>
    </div>
    <!-- ══════════ COURSE MODAL ══════════ -->
<div id="course-modal" onclick="if(event.target===this) closeCourseModal()" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.75); z-index:999; align-items:center; justify-content:center; backdrop-filter:blur(6px); padding:20px;">

  <div style="background:var(--surface2); border:1px solid var(--border); border-radius:22px; width:100%; max-width:580px; max-height:90vh; overflow-y:auto; position:relative;">

    <!-- Gold top bar -->
    <div style="height:3px; background:linear-gradient(90deg,var(--clay),var(--saffron),var(--copper-lt)); border-radius:22px 22px 0 0;"></div>

    <!-- Header (sticky) -->
    <div style="position:sticky; top:0; z-index:10; background:var(--surface2); padding:20px 26px 16px; border-bottom:1px solid var(--border); display:flex; align-items:center; justify-content:space-between;">
      <div style="display:flex; align-items:center; gap:10px;">
        <div style="width:34px; height:34px; border-radius:10px; background:linear-gradient(135deg,var(--clay),var(--saffron)); display:flex; align-items:center; justify-content:center;">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#0e0b08" stroke-width="2.5"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
        </div>
        <div>
          <span class="label-cinzel" style="display:block; font-size:9px;">Nouveau</span>
          <h2 style="font-family:'Cormorant Garamond',serif; font-size:19px; font-weight:700; color:var(--ink); margin:0;">Créer un cours</h2>
        </div>
      </div>
      <button onclick="closeCourseModal()" style="width:30px; height:30px; border-radius:8px; background:var(--surface3); border:1px solid var(--border); display:flex; align-items:center; justify-content:center; cursor:pointer; color:var(--ink-dim); transition:all 0.2s;" onmouseover="this.style.color='var(--ink)'" onmouseout="this.style.color='var(--ink-dim)'">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6L6 18M6 6l12 12"/></svg>
      </button>
    </div>

    <!-- Form -->
    <form action="{{ route('cours.store') }}" method="POST" enctype="multipart/form-data" style="padding:22px 26px; display:flex; flex-direction:column; gap:16px;">
      @csrf
        @method('post')
      <!-- Title -->
      <div>
        <label style="display:block; font-family:'Cinzel',serif; font-size:10px; color:var(--ink-muted); letter-spacing:1px; text-transform:uppercase; margin-bottom:6px;">Titre du cours *</label>
        <input type="text" name="title" required placeholder="Ex: Maîtriser l'Art du Zellige Marocain"
          style="width:100%; background:var(--surface3); border:1px solid var(--border); border-radius:10px; padding:9px 14px; font-size:13px; color:var(--ink); font-family:'Tajawal',sans-serif; outline:none; transition:border-color 0.2s; box-sizing:border-box;"
          onfocus="this.style.borderColor='rgba(232,160,32,0.5)'"
          onblur="this.style.borderColor='var(--border)'" />
      </div>

      <!-- Category + Level -->
      <div style="display:grid; grid-template-columns:1fr 1fr; gap:12px;">
        <div>
          <label style="display:block; font-family:'Cinzel',serif; font-size:10px; color:var(--ink-muted); letter-spacing:1px; text-transform:uppercase; margin-bottom:6px;">Catégorie *</label>
          <select name="category_id" required style="width:100%; background:var(--surface3); border:1px solid var(--border); border-radius:10px; padding:9px 14px; font-size:13px; color:var(--ink); font-family:'Tajawal',sans-serif; outline:none; box-sizing:border-box;">
            <option value="">Choisir…</option>
            @foreach ($categorys as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach


          </select>
        </div>

      </div>

      <!-- Duration + Price -->
      <div style="display:grid; grid-template-columns:1fr 1fr; gap:12px;">

        <!-- <div>
          <label style="display:block; font-family:'Cinzel',serif; font-size:10px; color:var(--ink-muted); letter-spacing:1px; text-transform:uppercase; margin-bottom:6px;">Prix (MAD)</label>
          <input type="number" name="price" min="0" placeholder="0 = Gratuit"
            style="width:100%; background:var(--surface3); border:1px solid var(--border); border-radius:10px; padding:9px 14px; font-size:13px; color:var(--ink); font-family:'Tajawal',sans-serif; outline:none; transition:border-color 0.2s; box-sizing:border-box;"
            onfocus="this.style.borderColor='rgba(232,160,32,0.5)'"
            onblur="this.style.borderColor='var(--border)'" />
        </div> -->
      </div>

      <!-- Description -->
      <div>
        <label style="display:block; font-family:'Cinzel',serif; font-size:10px; color:var(--ink-muted); letter-spacing:1px; text-transform:uppercase; margin-bottom:6px;">Article</label>
        <textarea name="article" rows="3" placeholder="Décrivez votre cours…"
          style="width:100%; background:var(--surface3); border:1px solid var(--border); border-radius:10px; padding:9px 14px; font-size:13px; color:var(--ink); font-family:'Tajawal',sans-serif; outline:none; resize:vertical; transition:border-color 0.2s; box-sizing:border-box;"
          onfocus="this.style.borderColor='rgba(232,160,32,0.5)'"
          onblur="this.style.borderColor='var(--border)'"></textarea>
      </div>

      <!-- Photo upload -->
      <div>
        <label style="display:block; font-family:'Cinzel',serif; font-size:10px; color:var(--ink-muted); letter-spacing:1px; text-transform:uppercase; margin-bottom:6px;">Image du cours</label>
        <label id="course-upload-label" style="display:flex; flex-direction:column; align-items:center; justify-content:center; gap:8px; padding:22px; border:2px dashed var(--border); border-radius:12px; cursor:pointer; transition:all 0.2s; background:var(--surface3);"
          onmouseover="this.style.borderColor='rgba(232,160,32,0.5)'"
          onmouseout="this.style.borderColor='var(--border)'">
          <div id="course-preview-wrap" style="display:none; width:80px; height:80px; border-radius:10px; overflow:hidden;">
            <img id="course-preview-img" src="" alt="preview" style="width:100%; height:100%; object-fit:cover;" />
          </div>
          <svg id="course-upload-icon" width="26" height="26" fill="none" stroke="var(--saffron)" stroke-width="1.5" viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
          <span id="course-upload-text" style="font-size:12px; color:var(--ink-muted); text-align:center;">Cliquer pour choisir une image<br><span style="font-size:10px;">JPG, PNG, GIF — max 2 Mo</span></span>
          <input type="file" name="url" id="course-photo-input" accept="image/*" style="display:none;" onchange="previewCoursePhoto(event)" />
        </label>
      </div>

      <!-- Footer buttons -->
      <div style="display:flex; gap:10px; padding-top:6px; border-top:1px solid var(--border); margin-top:4px;">
        <button type="button" onclick="closeCourseModal()" style="flex:1; padding:10px; border-radius:11px; font-family:'Cinzel',serif; font-size:11px; font-weight:700; background:var(--surface3); color:var(--ink-dim); border:1px solid var(--border); cursor:pointer; transition:all 0.2s;"
          onmouseover="this.style.color='var(--ink)'" onmouseout="this.style.color='var(--ink-dim)'">
          Annuler
        </button>
        <button type="submit" style="flex:2; padding:10px; border-radius:11px; font-family:'Cinzel',serif; font-size:11px; font-weight:700; background:linear-gradient(135deg,var(--clay),var(--saffron)); color:#0e0b08; border:none; cursor:pointer; transition:all 0.2s;"
          onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
          ✦ Publier le cours
        </button>
      </div>

    </form>
  </div>
</div>

    <!-- Topbar -->
    <div class="topbar">
      <div>
        <p style="font-size:11px; color:var(--ink-muted); margin-bottom:2px;">Cours disponibles</p>
        <p style="font-family:'Cinzel',serif; font-size:20px;">{{ $courses->count() }} <span style="color:var(--saffron);">cours</span></p>
      </div>
      <div style="display:flex; align-items:center; gap:8px;">
        <span style="font-size:11px; color:var(--ink-muted);">Trier :</span>
        <select class="fse-dark">
          <option>Plus populaires</option>
          <option>Plus récents</option>
          <option>Prix</option>
          <option>Note</option>
        </select>
      </div>
    </div>

    <!-- Course cards (dynamic) -->
    @foreach ($courses as $course)
    <article class="course-card">
      <div class="card-accent accent-saffron"></div>

      <div class="course-thumb-wrap">
        @if($course->url)
          <img src="{{asset('image/'.$course->url)}}" class="course-thumb" alt="{{ $course->title }}">
        @else
          <img src="{{asset('image/darkOne.jpg')}}" class="course-thumb" alt="{{ $course->title }}">
        @endif
        <div class="level-badge">Débutant</div>
      </div>

      <div class="course-body">
        <div>
          <div style="display:flex; align-items:flex-start; justify-content:space-between; gap:12px;">
            <div>
              <span class="cat-tag">{{ $course->category->name ?? 'Artisanat' }}</span>
              <span style="font-size:11px; color:var(--ink-muted);">· 6h 30min</span>
              <h3 class="course-title">{{ $course->title }}</h3>
              <p style="font-size:13px; color:var(--ink-muted);">par {{ $course->user->name ?? 'Maître Artisan' }}</p>
            </div>
            <div style="text-align:right; flex-shrink:0;">
              <p style="font-family:'Cinzel',serif; font-size:16px; color:var(--saffron);">Gratuit</p>
            </div>
          </div>
          <p style="font-size:13px; color:var(--ink-dim); line-height:1.7; margin-top:8px; display:-webkit-box; -webkit-line-clamp:2; -webkit-box-orient:vertical; overflow:hidden;">
            {{ $course->article ?? 'Découvrez les techniques ancestrales de l\'artisanat marocain avec ce cours complet.' }}
          </p>
        </div>
        <div style="margin-top:14px;">
          <div class="progress-bar"><div class="progress-fill" style="width:0%"></div></div>
          <div style="display:flex; align-items:center; justify-content:space-between; gap:12px;">
            <div style="display:flex; align-items:center; gap:14px;">
              <div style="display:flex; align-items:center; gap:4px;">
                <svg width="13" height="13" viewBox="0 0 24 24" class="star-icon"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                <span style="font-size:12px; color:var(--ink); font-weight:500;">4.8</span>
                <span style="font-size:11px; color:var(--ink-muted);">(120)</span>
              </div>
              <div style="display:flex; align-items:center; gap:4px;">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="var(--ink-muted)" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                <span style="font-size:11px; color:var(--ink-muted);">300 étudiants</span>
              </div>
            </div>
            <button class="btn-apply">Voir le cours →</button>
          </div>
        </div>
      </div>
    </article>
    @endforeach

    <!-- Static demo card -->
    <article class="course-card">
      <div class="card-accent accent-ocean"></div>
      <div class="course-thumb-wrap">
        <div class="course-thumb-placeholder" style="background:linear-gradient(135deg,var(--indigo),var(--indigo-lt));">🪡</div>
        <div class="level-badge" style="border-color:rgba(107,127,240,0.4); color:var(--indigo-lt);">Intermédiaire</div>
      </div>
      <div class="course-body">
        <div>
          <div style="display:flex; align-items:flex-start; justify-content:space-between; gap:12px;">
            <div>
              <span class="cat-tag">Zellige</span>
              <span style="font-size:11px; color:var(--ink-muted);">· 8h 15min</span>
              <h3 class="course-title">Maîtriser l'Art du Zellige Marocain</h3>
              <p style="font-size:13px; color:var(--ink-muted);">par Hassan El Fassi</p>
            </div>
            <div style="text-align:right; flex-shrink:0;">
              <p style="font-family:'Cinzel',serif; font-size:16px; color:var(--saffron);">350 MAD</p>
            </div>
          </div>
          <p style="font-size:13px; color:var(--ink-dim); line-height:1.7; margin-top:8px; display:-webkit-box; -webkit-line-clamp:2; -webkit-box-orient:vertical; overflow:hidden;">
            Apprenez les techniques ancestrales du zellige de Fès, de la coupe à la pose, avec un maître artisan reconnu.
          </p>
        </div>
        <div style="margin-top:14px;">
          <div class="progress-bar"><div class="progress-fill" style="width:60%"></div></div>
          <div style="display:flex; align-items:center; justify-content:space-between; gap:12px;">
            <div style="display:flex; align-items:center; gap:14px;">
              <div style="display:flex; align-items:center; gap:4px;">
                <svg width="13" height="13" viewBox="0 0 24 24" class="star-icon"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                <span style="font-size:12px; color:var(--ink); font-weight:500;">4.9</span>
                <span style="font-size:11px; color:var(--ink-muted);">(89)</span>
              </div>
              <div style="display:flex; align-items:center; gap:4px;">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="var(--ink-muted)" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                <span style="font-size:11px; color:var(--ink-muted);">210 étudiants</span>
              </div>
            </div>
            <button class="btn-apply">Voir le cours →</button>
          </div>
        </div>
      </div>
    </article>

    @if($courses->isEmpty())
    <div style="background:linear-gradient(145deg,var(--card-bg1),var(--card-bg2)); border:1px solid var(--border); border-radius:18px; text-align:center; padding:64px 24px;">
      <p style="font-family:'Cormorant Garamond',serif; font-size:20px; color:var(--ink); margin-bottom:6px;">Aucun cours disponible</p>
      <p style="font-size:13px; color:var(--ink-muted);">Les cours seront bientôt disponibles.</p>
    </div>
    @endif

    <div style="text-align:center; margin-top:24px;">
      <button class="btn-apply" style="padding:10px 36px;">Charger plus de cours</button>
    </div>

  </div>

  <script>
    (function(){var t=localStorage.getItem('7rayfi-theme')||'dark';document.documentElement.setAttribute('data-theme',t);setIcon(t);})();
    function toggleTheme(){var c=document.documentElement.getAttribute('data-theme'),n=c==='dark'?'light':'dark';document.documentElement.setAttribute('data-theme',n);localStorage.setItem('7rayfi-theme',n);setIcon(n);}
    function setIcon(t){var e=document.getElementById('ticon');if(e)e.textContent=t==='dark'?'☀️':'🌙';}
    function openCourseModal() {
  var m = document.getElementById('course-modal');
  m.style.display = 'flex';
}

function closeCourseModal() {
  document.getElementById('course-modal').style.display = 'none';
  document.getElementById('course-preview-wrap').style.display = 'none';
  document.getElementById('course-upload-icon').style.display = 'block';
  document.getElementById('course-upload-text').style.display = 'block';
  document.getElementById('course-photo-input').value = '';
}

function previewCoursePhoto(event) {
  var file = event.target.files[0];
  if (!file) return;
  var reader = new FileReader();
  reader.onload = function(e) {
    document.getElementById('course-preview-img').src = e.target.result;
    document.getElementById('course-preview-wrap').style.display = 'block';
    document.getElementById('course-upload-icon').style.display = 'none';
    document.getElementById('course-upload-text').textContent = file.name;
  };
  reader.readAsDataURL(file);
}
  </script>
</body>
</html>
