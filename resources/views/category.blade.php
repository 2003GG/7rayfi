<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Catégories — 7RAYFI</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Tajawal:wght@300;400;500;700&family=Cinzel:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
  <style>
    body { background-color: var(--bg); color: var(--ink); font-family: 'Tajawal', sans-serif; }
    .page-wrap { max-width: 960px; margin: 0 auto; padding: 110px 32px 60px; }
    .label-cinzel { font-family: 'Cinzel', serif; color: var(--saffron); font-size: 0.68rem; letter-spacing: 1.2px; text-transform: uppercase; }
    .topbar { display: flex; align-items: center; justify-content: space-between; gap: 14px; background: linear-gradient(145deg, var(--card-bg1), var(--card-bg2)); border: 1px solid var(--border); border-radius: 18px; padding: 16px 22px; margin-bottom: 16px; }
    .fse-dark { background: var(--surface3); border: 1px solid var(--border); border-radius: 10px; padding: 7px 12px; font-size: 12px; color: var(--ink); font-family: 'Tajawal', sans-serif; cursor: pointer; }
    .cat-tag { display: inline-block; font-family: 'Cinzel', serif; font-size: 10px; color: rgba(232,160,32,0.8); background: rgba(232,160,32,0.08); border: 1px solid rgba(232,160,32,0.2); padding: 2px 9px; border-radius: 20px; }
    .btn-apply { display: inline-flex; align-items: center; gap: 6px; padding: 7px 16px; border-radius: 10px; font-family: 'Cinzel', serif; font-size: 11px; font-weight: 700; letter-spacing: 0.5px; background: linear-gradient(135deg, var(--clay), var(--saffron)); color: #0e0b08; border: none; cursor: pointer; transition: all 0.2s ease; white-space: nowrap; }
    .btn-apply:hover { transform: scale(1.03); box-shadow: 0 6px 20px rgba(193,68,14,0.4); }
    .btn-ghost { display: inline-flex; align-items: center; gap: 6px; padding: 7px 14px; border-radius: 10px; font-family: 'Cinzel', serif; font-size: 11px; font-weight: 700; background: var(--surface3); color: var(--ink-muted); border: 1px solid var(--border); cursor: pointer; transition: all 0.2s ease; white-space: nowrap; }
    .btn-ghost:hover { color: var(--ink); border-color: var(--border-h); }
    .btn-danger { display: inline-flex; align-items: center; gap: 6px; padding: 7px 14px; border-radius: 10px; font-family: 'Cinzel', serif; font-size: 11px; font-weight: 700; background: rgba(220,38,38,0.1); color: #f87171; border: 1px solid rgba(220,38,38,0.25); cursor: pointer; transition: all 0.2s ease; white-space: nowrap; }
    .btn-danger:hover { background: rgba(220,38,38,0.2); }
    .cat-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 14px; margin-bottom: 24px; }
    .category-card-grid { background: linear-gradient(145deg, var(--card-bg1), var(--card-bg2)); border: 1px solid var(--border); border-radius: 18px; overflow: hidden; position: relative; transition: all 0.3s ease; padding: 22px; display: flex; flex-direction: column; gap: 14px; }
    .category-card-grid:hover { border-color: var(--border-h); transform: translateY(-2px); box-shadow: 0 12px 40px rgba(0,0,0,0.2); }
  </style>
</head>

<body>
      @include('layouts/header')
<div class="page-wrap">


  {{-- ── Page header ── --}}
  <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:24px; gap:16px;">
    <div>
      <span class="label-cinzel">Gestion</span>
      <h2 style="font-family:'Cinzel',serif; font-size:22px; margin-top:4px; margin-bottom:4px;">Catégories</h2>
      <p style="font-size:13px; color:var(--ink-muted);">Gérez les catégories de l'artisanat marocain</p>
    </div>
    <div style="display:flex; align-items:center; gap:10px; margin-top:4px;">
      <a href="{{ route('post.index') }}" style="display:inline-flex; align-items:center; gap:6px; padding:8px 18px; border-radius:11px; border:1px solid var(--border-h); color:var(--saffron); font-family:'Cinzel',serif; font-size:11px; font-weight:600; text-decoration:none; transition:all 0.2s; white-space:nowrap;" onmouseover="this.style.background='rgba(232,160,32,0.1)'" onmouseout="this.style.background='transparent'">
        <svg width="11" height="11" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="15 18 9 12 15 6"/></svg>
        Retour
      </a>
      <button onclick="openCategoryModal()" style="display:inline-flex; align-items:center; gap:6px; padding:8px 18px; border-radius:11px; font-family:'Cinzel',serif; font-size:11px; font-weight:700; background:linear-gradient(135deg,var(--clay),var(--saffron)); color:#0e0b08; border:none; cursor:pointer; transition:all 0.2s; white-space:nowrap;" onmouseover="this.style.boxShadow='0 6px 20px rgba(193,68,14,0.4)'" onmouseout="this.style.boxShadow='none'">
        <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
        Nouvelle catégorie
      </button>
    </div>
  </div>


  {{-- ══════════ CREATE MODAL ══════════ --}}
  <div id="category-modal" onclick="if(event.target===this) closeCategoryModal()" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.75); z-index:999; align-items:center; justify-content:center; backdrop-filter:blur(6px); padding:20px;">
    <div style="background:var(--surface2); border:1px solid var(--border); border-radius:22px; width:100%; max-width:480px; position:relative;">
      <div style="height:3px; background:linear-gradient(90deg,var(--clay),var(--saffron),var(--copper-lt)); border-radius:22px 22px 0 0;"></div>
      <div style="padding:20px 26px 16px; border-bottom:1px solid var(--border); display:flex; align-items:center; justify-content:space-between;">
        <div style="display:flex; align-items:center; gap:10px;">
          <div style="width:34px; height:34px; border-radius:10px; background:linear-gradient(135deg,var(--clay),var(--saffron)); display:flex; align-items:center; justify-content:center;">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#0e0b08" stroke-width="2.5"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
          </div>
          <div>
            <span class="label-cinzel" style="display:block; font-size:9px;">Nouveau</span>
            <h2 style="font-family:'Cormorant Garamond',serif; font-size:19px; font-weight:700; color:var(--ink); margin:0;">Créer une catégorie</h2>
          </div>
        </div>
        <button onclick="closeCategoryModal()" style="width:30px; height:30px; border-radius:8px; background:var(--surface3); border:1px solid var(--border); display:flex; align-items:center; justify-content:center; cursor:pointer; color:var(--ink-dim);">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6L6 18M6 6l12 12"/></svg>
        </button>
      </div>
      <form action="{{ route('category.store') }}" method="POST" style="padding:22px 26px; display:flex; flex-direction:column; gap:16px;">
        @csrf
        @method('post')
        <div>
          <label style="display:block; font-family:'Cinzel',serif; font-size:10px; color:var(--ink-muted); letter-spacing:1px; text-transform:uppercase; margin-bottom:6px;">Nom de la catégorie *</label>
          <input type="text" name="name" required placeholder="Ex: Zellige, Poterie, Broderie…"
            style="width:100%; background:var(--surface3); border:1px solid var(--border); border-radius:10px; padding:9px 14px; font-size:13px; color:var(--ink); font-family:'Tajawal',sans-serif; outline:none; transition:border-color 0.2s; box-sizing:border-box;"
            onfocus="this.style.borderColor='rgba(232,160,32,0.5)'" onblur="this.style.borderColor='var(--border)'" />
        </div>
        <div style="display:flex; gap:10px; padding-top:6px; border-top:1px solid var(--border); margin-top:4px;">
          <button type="button" onclick="closeCategoryModal()" style="flex:1; padding:10px; border-radius:11px; font-family:'Cinzel',serif; font-size:11px; font-weight:700; background:var(--surface3); color:var(--ink-dim); border:1px solid var(--border); cursor:pointer;">Annuler</button>
          <button type="submit" style="flex:2; padding:10px; border-radius:11px; font-family:'Cinzel',serif; font-size:11px; font-weight:700; background:linear-gradient(135deg,var(--clay),var(--saffron)); color:#0e0b08; border:none; cursor:pointer;">✦ Créer la catégorie</button>
        </div>
      </form>
    </div>
  </div>


  {{-- ══════════ EDIT MODAL ══════════
       The form action is set per-category inside the @foreach below.
       Each card has its OWN hidden form that already knows its correct URL.
       The modal just shows/hides — no JS URL manipulation needed.
  ══════════ --}}
  <div id="edit-modal" onclick="if(event.target===this) closeEditModal()" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.75); z-index:999; align-items:center; justify-content:center; backdrop-filter:blur(6px); padding:20px;">
    <div style="background:var(--surface2); border:1px solid var(--border); border-radius:22px; width:100%; max-width:480px; position:relative;">
      <div style="height:3px; background:linear-gradient(90deg,var(--clay),var(--saffron),var(--copper-lt)); border-radius:22px 22px 0 0;"></div>
      <div style="padding:20px 26px 16px; border-bottom:1px solid var(--border); display:flex; align-items:center; justify-content:space-between;">
        <div style="display:flex; align-items:center; gap:10px;">
          <div style="width:34px; height:34px; border-radius:10px; background:linear-gradient(135deg,var(--clay),var(--saffron)); display:flex; align-items:center; justify-content:center;">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#0e0b08" stroke-width="2.5"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
          </div>
          <div>
            <span class="label-cinzel" style="display:block; font-size:9px;">Modifier</span>
            <h2 style="font-family:'Cormorant Garamond',serif; font-size:19px; font-weight:700; color:var(--ink); margin:0;">Modifier la catégorie</h2>
          </div>
        </div>
        <button onclick="closeEditModal()" style="width:30px; height:30px; border-radius:8px; background:var(--surface3); border:1px solid var(--border); display:flex; align-items:center; justify-content:center; cursor:pointer; color:var(--ink-dim);">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6L6 18M6 6l12 12"/></svg>
        </button>
      </div>
      {{-- This container is populated by openEditModal() with the correct per-category form --}}
      <div id="edit-form-container" style="padding:22px 26px;"></div>
    </div>
  </div>


  {{-- Topbar --}}
  <div class="topbar">
    <div>
      <p style="font-size:11px; color:var(--ink-muted); margin-bottom:2px;">Total des catégories</p>
      <p style="font-family:'Cinzel',serif; font-size:20px;">{{ $categorys->count() }} <span style="color:var(--saffron);">catégories</span></p>
    </div>
    <div style="display:flex; align-items:center; gap:8px;">
      <span style="font-size:11px; color:var(--ink-muted);">Trier :</span>
      <select class="fse-dark">
        <option>Alphabétique</option>
        <option>Plus récentes</option>
        <option>Plus utilisées</option>
      </select>
    </div>
  </div>


  {{-- ══════════ CATEGORY GRID ══════════ --}}
  @if($categorys->isNotEmpty())
  <div class="cat-grid">
    @foreach ($categorys as $cat)
    <div class="category-card-grid">

      <div style="display:flex; align-items:center; gap:14px;">
        <div style="flex:1; min-width:0;">
          <span class="cat-tag">Artisanat</span>
          <h3 style="font-family:'Cormorant Garamond',serif; font-size:18px; font-weight:600; color:var(--ink); margin:5px 0 0; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">
            {{ $cat->name }}
          </h3>
        </div>
      </div>

      <div style="display:flex; align-items:center; gap:16px; padding-top:10px; border-top:1px solid var(--border);">
        <div style="display:flex; align-items:center; gap:5px;">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="var(--saffron)" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
          <span style="font-size:11px; color:var(--ink-muted);">{{ $cat->courses_count ?? 0 }} cours</span>
        </div>
        <div style="margin-left:auto; display:flex; align-items:center; gap:8px;">

          {{-- Edit button: tells JS which hidden form to use --}}
          <button onclick="openEditModal({{ $cat->id }})" class="btn-ghost" style="padding:5px 12px; font-size:10px;">
            <svg width="11" height="11" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
            Modifier
          </button>

          {{-- Delete --}}
          <form action="{{ route('category.destroy', $cat->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-danger" style="padding:5px 12px; font-size:10px;">
              <svg width="11" height="11" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/><path d="M10 11v6M14 11v6"/><path d="M9 6V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2"/></svg>
              Supprimer
            </button>
          </form>

        </div>
      </div>

      {{-- Hidden edit form for THIS category, with the correct Blade-generated action URL --}}
      {{-- This is the only correct way: Blade resolves the route per-item inside the loop --}}
      <template id="edit-form-{{ $cat->id }}">
        <form method="POST" action="{{ route('category.update', $cat->id) }}" style="display:flex; flex-direction:column; gap:16px;">
          @csrf
          @method('PUT')
          <div>
            <label style="display:block; font-family:'Cinzel',serif; font-size:10px; color:var(--ink-muted); letter-spacing:1px; text-transform:uppercase; margin-bottom:6px;">Nom de la catégorie *</label>
            <input type="text" name="name" required value="{{ $cat->name }}"
              style="width:100%; background:var(--surface3); border:1px solid var(--border); border-radius:10px; padding:9px 14px; font-size:13px; color:var(--ink); font-family:'Tajawal',sans-serif; outline:none; transition:border-color 0.2s; box-sizing:border-box;"
              onfocus="this.style.borderColor='rgba(232,160,32,0.5)'" onblur="this.style.borderColor='var(--border)'" />
          </div>
          <div style="display:flex; gap:10px; padding-top:6px; border-top:1px solid var(--border); margin-top:4px;">
            <button type="button" onclick="closeEditModal()" style="flex:1; padding:10px; border-radius:11px; font-family:'Cinzel',serif; font-size:11px; font-weight:700; background:var(--surface3); color:var(--ink-dim); border:1px solid var(--border); cursor:pointer;">Annuler</button>
            <button type="submit" style="flex:2; padding:10px; border-radius:11px; font-family:'Cinzel',serif; font-size:11px; font-weight:700; background:linear-gradient(135deg,var(--clay),var(--saffron)); color:#0e0b08; border:none; cursor:pointer;">✦ Enregistrer</button>
          </div>
        </form>
      </template>

    </div>
    @endforeach
  </div>
  @endif


  {{-- Empty state --}}
  @if($categorys->isEmpty())
  <div style="background:linear-gradient(145deg,var(--card-bg1),var(--card-bg2)); border:1px solid var(--border); border-radius:18px; text-align:center; padding:64px 24px;">
    <div style="font-size:48px; margin-bottom:16px;">🏺</div>
    <p style="font-family:'Cormorant Garamond',serif; font-size:20px; color:var(--ink); margin-bottom:6px;">Aucune catégorie disponible</p>
    <p style="font-size:13px; color:var(--ink-muted); margin-bottom:20px;">Commencez par créer votre première catégorie.</p>
    <button onclick="openCategoryModal()" class="btn-apply" style="padding:10px 28px;">✦ Créer une catégorie</button>
  </div>
  @endif

</div>

<script>
  (function(){
    var t = localStorage.getItem('7rayfi-theme') || 'dark';
    document.documentElement.setAttribute('data-theme', t);
    setIcon(t);
  })();
  function toggleTheme(){
    var c = document.documentElement.getAttribute('data-theme');
    var n = c === 'dark' ? 'light' : 'dark';
    document.documentElement.setAttribute('data-theme', n);
    localStorage.setItem('7rayfi-theme', n);
    setIcon(n);
  }
  function setIcon(t){ var e = document.getElementById('ticon'); if(e) e.textContent = t==='dark'?'☀️':'🌙'; }

  function openCategoryModal()  { document.getElementById('category-modal').style.display = 'flex'; }
  function closeCategoryModal() { document.getElementById('category-modal').style.display = 'none'; }

  function openEditModal(id) {
    // Clone the correct pre-built form from the <template> and inject it into the modal
    var tpl = document.getElementById('edit-form-' + id);
    var container = document.getElementById('edit-form-container');
    container.innerHTML = '';
    container.appendChild(tpl.content.cloneNode(true));
    document.getElementById('edit-modal').style.display = 'flex';
  }
  function closeEditModal() {
    document.getElementById('edit-modal').style.display = 'none';
  }
</script>
</body>
</html>
