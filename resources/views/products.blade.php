<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Produits — 7RAYFI</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Tajawal:wght@300;400;500;700&family=Cinzel:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
  <link rel="stylesheet" href="{{ asset('css/products.css') }}">


</head>

<body>
      @include('layouts/header')

  <div class="page-wrap">

    <!-- Page header -->
    <div style="margin-bottom:28px; display:flex; justify-content:space-between; align-items:flex-end; gap:16px;">
      <div>
        <span class="label-cinzel">Boutique</span>
        <h2 style="font-family:'Cinzel',serif; font-size:24px; margin-top:4px; margin-bottom:4px; color:var(--ink);">Produits Artisanaux</h2>
        <p style="font-size:13px; color:var(--ink-muted);">Pièces uniques fabriquées à la main par nos artisans</p>
      </div>
      <button onclick="openAddModal()" style="display:inline-flex; align-items:center; gap:6px; padding:9px 20px; border-radius:11px; font-family:'Cinzel',serif; font-size:11px; font-weight:700; background:linear-gradient(135deg,var(--clay),var(--saffron)); color:#0e0b08; border:none; cursor:pointer; transition:all 0.2s; white-space:nowrap;" onmouseover="this.style.boxShadow='0 6px 20px rgba(193,68,14,0.4)'" onmouseout="this.style.boxShadow='none'">
  <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
  Ajouter un produit
</button>
    </div>

    <div class="products-layout">

      <!-- ── Filter sidebar ── -->
    @include('layouts/sidebar')

      <!-- ── Main column ── -->
      <div>

        <!-- Topbar -->
        <div class="topbar">
          <div>
            <p style="font-size:11px; color:var(--ink-muted); margin-bottom:2px;">Résultats</p>
            <p style="font-family:'Cinzel',serif; font-size:18px; color:var(--ink);">
              {{ $products->count() ?? 0 }} <span style="color:var(--saffron);">produits</span>
            </p>
          </div>
           <div>
            <p style="font-size:11px; color:var(--ink-muted); margin-bottom:2px;">Solde</p>
            <p style="font-family:'Cinzel',serif; font-size:18px; color:var(--ink);">
              {{ auth()->user()->solde }} <span style="color:var(--saffron);">points</span>
            </p>
          </div>
          <div style="display:flex; align-items:center; gap:10px;">
            <span style="font-size:11px; color:var(--ink-muted);">Trier :</span>
            <select class="fse-dark">
              <option>Plus récents</option>
              <option>Prix croissant</option>
              <option>Prix décroissant</option>
              <option>Mieux notés</option>
              <option>Populaires</option>
            </select>
            <div style="display:flex; gap:4px; margin-left:4px;">
              <button class="view-btn active" title="Grille">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg>
              </button>
              <button class="view-btn" title="Liste">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
              </button>
            </div>
          </div>
        </div>

        <!-- Products grid -->
        <div class="products-grid" id="products-grid">

          @forelse ($products as $product)
          @php
            $gradients = [
              'linear-gradient(135deg,var(--clay),var(--saffron))',
              'linear-gradient(135deg,var(--indigo),var(--indigo-lt))',
              'linear-gradient(135deg,var(--sage),#2d5c3e)',
              'linear-gradient(135deg,var(--copper),var(--copper-lt))',
              'linear-gradient(135deg,#3a1a6b,#6b3aa3)',
              'linear-gradient(135deg,#1a4a2e,#6b3aa3)',
            ];
            ;
          @endphp

          <article class="product-card" onclick="openQuickView('{{ $product->name ?? 'Produit' }}','{{ $product->price ?? 0 }} MAD','{{ $product->description ?? '' }}')">
            <div class="product-img">

                <img src="{{ asset('image/product.jpg')}}" alt="{{ $product->name }}" />


              <button class="product-wishlist" onclick="event.stopPropagation(); toggleWishlist(this)" title="Ajouter aux favoris">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
              </button>
            </div>
            <div class="product-body">
              <span class="product-cat">{{ $product->category->name ?? 'Artisanat' }}</span>
              <h3 class="product-name">{{ $product->name }}</h3>
              <div class="stars">
                @for($s = 0; $s < 5; $s++)
                <svg width="11" height="11" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" class="{{ $s < 4 ? 'star-filled' : 'star-empty' }}" stroke="none"/></svg>
                @endfor
                <span style="font-size:11px; color:var(--ink-muted); margin-left:3px;">({{ rand(4,48) }})</span>
              </div>
              <p class="product-desc">{{ $product->description ?? 'Pièce artisanale unique, fabriquée à la main selon les techniques traditionnelles marocaines.' }}</p>
              <div class="product-seller">
                <div class="seller-avatar">{{ strtoupper(substr($product->user->name ?? 'AR', 0, 2)) }}</div>
                <span style="font-size:11px; color:var(--ink-muted);">par <span style="color:var(--ink);">{{ $product->user->name ?? 'Artisan' }}</span></span>
              </div>
              <div class="product-footer">
                <div>
                  <div class="product-price">{{ $product->quantite}} </div>
                  <div class="product-price">{{ $product->price}} MAD</div>
                  @if($product->old_price ?? false)
                  <div class="product-price-old">{{ $product->old_price }}Points</div>
                  @endif
                </div>
                <form action="{{ route('achete.product',['id'=>$product->id]) }}">
                <button class="btn-cart" type="submit"  onclick="event.stopPropagation()">
                  <svg width="11" height="11" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
                  Acheter
                </button>
                </form>
              </div>
            </div>
          </article>

          @empty

          {{-- Static demo cards when no DB data --}}




          @endforelse
        </div>

        <!-- Load more -->
        <div style="text-align:center; margin-top:28px;">
          <button class="btn-load">Charger plus de produits</button>
        </div>

      </div>
    </div>
  </div>

  <!-- ── Quick View Modal ── -->
  <div id="qv-modal" class="qv-modal-ov hidden" onclick="if(event.target===this) closeQV()">
    <div class="qv-modal-box">
      <button class="qv-close" onclick="closeQV()">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6L6 18M6 6l12 12"/></svg>
      </button>
      <div class="qv-img" id="qv-img" style="background:linear-gradient(135deg,var(--clay),var(--saffron));">🏺</div>
      <div class="qv-body">
        <div>
          <span class="label-cinzel" style="display:block; margin-bottom:6px;">Vue rapide</span>
          <h2 id="qv-name" style="font-family:'Cormorant Garamond',serif; font-size:22px; font-weight:700; color:var(--ink); margin-bottom:8px; line-height:1.3;"></h2>
          <div class="stars" style="margin-bottom:12px;">
            @for($s = 0; $s < 5; $s++)
            <svg width="13" height="13" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" class="{{ $s < 4 ? 'star-filled' : 'star-empty' }}" stroke="none"/></svg>
            @endfor
            <span style="font-size:11px; color:var(--ink-muted); margin-left:4px;">(28 avis)</span>
          </div>
          <p id="qv-desc" style="font-size:13px; color:var(--ink-dim); line-height:1.8; margin-bottom:20px;"></p>

          <div style="display:flex; flex-direction:column; gap:8px; margin-bottom:20px;">
            <div style="display:flex; align-items:center; gap:8px; font-size:12px; color:var(--ink-dim);">
              <svg width="12" height="12" fill="none" stroke="var(--saffron)" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              Paiement sécurisé
            </div>
            <div style="display:flex; align-items:center; gap:8px; font-size:12px; color:var(--ink-dim);">
              <svg width="12" height="12" fill="none" stroke="var(--saffron)" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              Livraison dans 5–7 jours
            </div>
            <div style="display:flex; align-items:center; gap:8px; font-size:12px; color:var(--ink-dim);">
              <svg width="12" height="12" fill="none" stroke="var(--saffron)" stroke-width="2" viewBox="0 0 24 24"><polyline points="23 4 23 10 17 10"/><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"/></svg>
              Retour sous 14 jours
            </div>
          </div>
        </div>

        <div>
          <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:16px;">
            <div>
              <div class="product-price" id="qv-price" style="font-size:22px;"></div>
              <div style="font-size:11px; color:var(--ink-muted); margin-top:2px;">Frais de port inclus</div>
            </div>
            <div style="display:flex; align-items:center; gap:6px; background:var(--surface3); border:1px solid var(--border); border-radius:10px; padding:4px 8px;">
              <button onclick="changeQty(-1)" style="width:22px; height:22px; border-radius:6px; background:var(--surface2); border:1px solid var(--border); cursor:pointer; color:var(--ink); font-size:14px; display:flex; align-items:center; justify-content:center;">−</button>
              <span id="qv-qty" style="font-family:'Cinzel',serif; font-size:13px; color:var(--ink); min-width:20px; text-align:center;">1</span>
              <button onclick="changeQty(1)" style="width:22px; height:22px; border-radius:6px; background:var(--surface2); border:1px solid var(--border); cursor:pointer; color:var(--ink); font-size:14px; display:flex; align-items:center; justify-content:center;">+</button>
            </div>
          </div>
          <button class="btn-cart" style="width:100%; padding:12px; font-size:12px; justify-content:center; border-radius:12px;">
            <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
            Ajouter au panier
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- ── Add Product Modal ── -->
<div id="add-modal" class="qv-modal-ov hidden" onclick="if(event.target===this) closeAddModal()">
<div style="background:var(--surface2); border:1px solid var(--border); border-radius:22px; width:100%; max-width:560px; overflow-y:auto; max-height:90vh; position:relative;">
    <!-- Gold top bar -->
    <div style="height:3px; background:linear-gradient(90deg,var(--clay),var(--saffron),var(--copper-lt));"></div>

    <!-- Header -->
    <div style="padding:22px 28px 16px; border-bottom:1px solid var(--border); display:flex; align-items:center; justify-content:space-between;">
      <div>
        <span class="label-cinzel" style="display:block; margin-bottom:3px;">Nouvelle pièce</span>
        <h2 style="font-family:'Cormorant Garamond',serif; font-size:20px; font-weight:700; color:var(--ink); margin:0;">Ajouter un produit</h2>
      </div>
      <button class="qv-close" style="position:static;" onclick="closeAddModal()">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6L6 18M6 6l12 12"/></svg>
      </button>
    </div>

    <!-- Form -->
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" style="padding:24px 28px; display:flex; flex-direction:column; gap:18px;">
      @csrf

      <!-- Name -->
      <div>
        <label class="filter-section-title" style="display:block; margin-bottom:6px;">Nom du produit *</label>
        <input type="text" name="name" required class="filter-input" placeholder="Ex: Plateau en Zellige de Fès" />
      </div>

      <!-- Category -->
      <div>
        <label class="filter-section-title" style="display:block; margin-bottom:6px;">Catégorie *</label>
        <select name="category_id" required class="filter-input">
          <option value="">Choisir une catégorie…</option>
          @foreach ($categorys as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach




        </select>
      </div>

      <!-- Price row -->
      <div style="display:grid; grid-template-columns:1fr 1fr; gap:12px;">
        <div>
          <label class="filter-section-title" style="display:block; margin-bottom:6px;">Prix (MAD) *</label>
          <input type="number" name="price" required min="0" class="filter-input" placeholder="Ex: 850" />
        </div>
        <div>
          <label class="filter-section-title" style="display:block; margin-bottom:6px;">Ancien prix (MAD)</label>
          <input type="number" name="old_price" min="0" class="filter-input" placeholder="Optionnel" />
        </div>
      </div>

      <!-- Description -->
      <div>
        <label class="filter-section-title" style="display:block; margin-bottom:6px;">Description</label>
        <textarea name="description" rows="3" class="filter-input" style="resize:vertical;" placeholder="Décrivez votre pièce artisanale…"></textarea>
      </div>

      <!-- Photo upload -->
      <div>
        <label class="filter-section-title" style="display:block; margin-bottom:6px;">Photo du produit</label>
        <label id="upload-label" style="display:flex; flex-direction:column; align-items:center; justify-content:center; gap:8px; padding:24px; border:2px dashed var(--border); border-radius:12px; cursor:pointer; transition:all 0.2s; background:var(--surface3);" onmouseover="this.style.borderColor='rgba(232,160,32,0.5)'" onmouseout="this.style.borderColor='var(--border)'">
          <div id="upload-preview" style="display:none; width:80px; height:80px; border-radius:10px; overflow:hidden; margin-bottom:4px;">
            <img id="preview-img" src="" alt="preview" style="width:100%; height:100%; object-fit:cover;" />
          </div>
          <svg id="upload-icon" width="28" height="28" fill="none" stroke="var(--saffron)" stroke-width="1.5" viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
          <span id="upload-text" style="font-size:12px; color:var(--ink-muted); text-align:center;">Cliquer pour choisir une image<br><span style="font-size:10px;">JPG, PNG, GIF — max 2 Mo</span></span>
          <input type="file" name="photo" id="photo-input" accept="image/*" style="display:none;" onchange="previewPhoto(event)" />
        </label>
      </div>

      <!-- Availability -->
      <div>
        <label class="filter-section-title" style="display:block; margin-bottom:8px;">Disponibilité</label>
        <div style="display:flex; gap:12px;">
          <label style="display:flex; align-items:center; gap:6px; cursor:pointer; font-size:13px; color:var(--ink-dim);">
            <input type="radio" name="availability" value="stock" class="filter-check" checked /> En stock
          </label>
          <label style="display:flex; align-items:center; gap:6px; cursor:pointer; font-size:13px; color:var(--ink-dim);">
            <input type="radio" name="availability" value="commande" class="filter-check" /> Sur commande
          </label>
        </div>
      </div>

      <!-- Footer buttons -->
      <div style="display:flex; gap:10px; padding-top:4px; border-top:1px solid var(--border); margin-top:4px;">
        <button type="button" onclick="closeAddModal()" style="flex:1; padding:10px; border-radius:11px; font-family:'Cinzel',serif; font-size:11px; font-weight:700; background:var(--surface3); color:var(--ink-dim); border:1px solid var(--border); cursor:pointer; transition:all 0.2s;" onmouseover="this.style.color='var(--ink)'" onmouseout="this.style.color='var(--ink-dim)'">
          Annuler
        </button>
        <button type="submit" class="btn-apply-filter" style="flex:2; padding:10px;">
          ✦ Publier le produit
        </button>
      </div>

    </form>
  </div>
</div>

  <script>
    /* Theme */
    (function(){var t=localStorage.getItem('7rayfi-theme')||'dark';document.documentElement.setAttribute('data-theme',t);setIcon(t);})();
    function toggleTheme(){var c=document.documentElement.getAttribute('data-theme'),n=c==='dark'?'light':'dark';document.documentElement.setAttribute('data-theme',n);localStorage.setItem('7rayfi-theme',n);setIcon(n);}
    function setIcon(t){var e=document.getElementById('ticon');if(e)e.textContent=t==='dark'?'☀️':'🌙';}

    /* Wishlist toggle */
    function toggleWishlist(btn) {
      btn.classList.toggle('liked');
      var svg = btn.querySelector('svg');
      if (btn.classList.contains('liked')) {
        svg.setAttribute('fill', '#e05555');
      } else {
        svg.setAttribute('fill', 'none');
      }
    }

    /* Category filter */
    document.querySelectorAll('.cat-btn').forEach(function(btn) {
      btn.addEventListener('click', function() {
        document.querySelectorAll('.cat-btn').forEach(function(b){ b.classList.remove('active'); });
        btn.classList.add('active');
      });
    });

    /* View toggle */
    document.querySelectorAll('.view-btn').forEach(function(btn) {
      btn.addEventListener('click', function() {
        document.querySelectorAll('.view-btn').forEach(function(b){ b.classList.remove('active'); });
        btn.classList.add('active');
        var grid = document.getElementById('products-grid');
        if (btn.title === 'Liste') {
          grid.style.gridTemplateColumns = '1fr';
        } else {
          grid.style.gridTemplateColumns = 'repeat(3, 1fr)';
        }
      });
    });

    /* Quick view */
    var qvQty = 1;
    function openQuickView(name, emoji, price, desc) {
      document.getElementById('qv-name').textContent = name;
      document.getElementById('qv-price').textContent = price;
      document.getElementById('qv-desc').textContent = desc || 'Pièce artisanale unique fabriquée à la main.';
      document.getElementById('qv-img').textContent = emoji;
      qvQty = 1;
      document.getElementById('qv-qty').textContent = qvQty;
      document.getElementById('qv-modal').classList.remove('hidden');
    }
    function closeQV() { document.getElementById('qv-modal').classList.add('hidden'); }
    function changeQty(d) {
      qvQty = Math.max(1, qvQty + d);
      document.getElementById('qv-qty').textContent = qvQty;
    }
    /* Add product modal */
function openAddModal() {
  document.getElementById('add-modal').classList.remove('hidden');
}
function closeAddModal() {
  document.getElementById('add-modal').classList.add('hidden');
  // Reset preview
  document.getElementById('upload-preview').style.display = 'none';
  document.getElementById('upload-icon').style.display = 'block';
  document.getElementById('upload-text').style.display = 'block';
  document.getElementById('photo-input').value = '';
}

/* Photo preview */
function previewPhoto(event) {
  var file = event.target.files[0];
  if (!file) return;
  var reader = new FileReader();
  reader.onload = function(e) {
    document.getElementById('preview-img').src = e.target.result;
    document.getElementById('upload-preview').style.display = 'block';
    document.getElementById('upload-icon').style.display = 'none';
    document.getElementById('upload-text').textContent = file.name;
  };
  reader.readAsDataURL(file);
}
  </script>
</body>
</html>
