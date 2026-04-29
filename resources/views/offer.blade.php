<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Offres — 7RAYFI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght;0,400;0,500;0,600;0,700;1,400&family=Tajawal:wght@300;400;500;700&family=Cinzel:wght@400;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        cinzel: ['Cinzel', 'serif'],
                        cormorant: ['Cormorant Garamond', 'serif'],
                        tajawal: ['Tajawal', 'sans-serif'],
                    },
                    colors: {
                        saffron: '#e8a020',
                        clay: '#c1440e',
                        'card-bg': 'var(--card-bg1)',
                        'ink-muted': 'var(--ink-muted)',
                    },
                    animation: {
                        pulse2: 'pulse2 2s ease-in-out infinite',
                    },
                    keyframes: {
                        pulse2: {
                            '0%, 100%': { opacity: '1' },
                            '50%': { opacity: '0.3' },
                        },
                    },
                },
            },
        }
    </script>

    <style>
        body {
            background-color: var(--bg);
            color: var(--ink);
            font-family: 'Tajawal', sans-serif;
        }

        .card-gradient {
            background: linear-gradient(145deg, var(--card-bg1), var(--card-bg2));
        }

        .btn-gradient {
            background: linear-gradient(135deg, #c1440e, #e8a020);
        }

        .offer-logo-gradient {
            background: linear-gradient(135deg, #c1440e, #e8a020);
        }

        .urgent-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #e8a020;
            animation: pulse2 2s infinite;
        }

        .disponible-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #16a34a;
            animation: pulse2 2s infinite;
        }

        .indisponible-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #dc2626;
        }

        @keyframes pulse2 {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.3; }
        }

        /* ── Kebab menu ── */
        .kbtn {
            background: transparent;
            border: none;
            color: var(--ink-muted);
            cursor: pointer;
            padding: 4px 6px;
            border-radius: 8px;
            transition: background 0.15s, color 0.15s;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .kbtn:hover {
            background: var(--surface3);
            color: var(--ink);
        }
        .kmenu {
            position: absolute;
            right: 0;
            top: calc(100% + 6px);
            background: var(--card-bg1);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 6px;
            min-width: 160px;
            z-index: 50;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.25);
        }
        .kitem {
            display: block;
            width: 100%;
            text-align: left;
            background: transparent;
            border: none;
            padding: 8px 12px;
            font-size: 12px;
            font-family: 'Tajawal', sans-serif;
            color: var(--ink);
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.15s;
        }
        .kitem:hover {
            background: var(--surface3);
        }
        .kitem.red {
            color: #e55;
        }
        .kitem.red:hover {
            background: rgba(220, 50, 50, 0.1);
        }

        /* ── Upload zone ── */
        .upz {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 6px;
            padding: 18px 12px;
            border: 1px dashed var(--border);
            border-radius: 14px;
            cursor: pointer;
            transition: border-color 0.2s, background 0.2s;
        }
        .upz:hover {
            border-color: #e8a020;
            background: rgba(232, 160, 32, 0.05);
        }
        .upi {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: rgba(232, 160, 32, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* ── Form label shortcut ── */
        .fl {
            font-family: 'Cinzel', serif;
            font-size: 10px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #e8a020;
            display: block;
            margin-bottom: 6px;
        }

        /* Error styling */
        .error-msg {
            background: rgba(220, 50, 50, 0.1);
            border: 1px solid rgba(220, 50, 50, 0.3);
            border-radius: 12px;
            padding: 12px 16px;
            margin-bottom: 16px;
            color: #ff6b6b;
            font-size: 13px;
        }
        .error-msg ul {
            margin: 0;
            padding-left: 20px;
        }
        .input-error {
            border-color: #ff6b6b !important;
        }
    </style>
</head>

<body>
    @include('layouts/header')

    <div class="max-w-[900px] mx-auto px-8 pt-[110px] pb-16">

        <!-- Page header -->
        <div class="mb-6">
            <span class="font-cinzel text-saffron text-[0.68rem] tracking-widest uppercase">Opportunités</span>
            <h2 class="font-cinzel text-[22px] mt-1 mb-1">Trouver votre Prochain Rôle</h2>
            <p class="text-[13px] text-[var(--ink-muted)]">Offres sélectionnées au Maroc et dans la région MENA</p>
        </div>

        @if(session('success'))
            <div class="flex items-center gap-2 bg-[rgba(80,200,120,0.1)] border border-[rgba(80,200,120,0.3)] rounded-xl px-4 py-3 mb-4 text-[13px] text-[#50c878]">
                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
                {{ session('success') }}
            </div>
        @endif

        <!-- Topbar -->
        <div class="card-gradient border border-[var(--border)] rounded-[18px] flex items-center justify-between gap-4 px-6 py-4 mb-4">
            <div>
                <p class="text-[11px] text-[var(--ink-muted)] mb-0.5">Postes disponibles</p>
                <p class="font-cinzel text-[20px]">{{ $offers->count() }} <span class="text-saffron">offres</span></p>
            </div>
            <div class="flex items-center gap-3">
                <div class="flex items-center gap-2">
                    <span class="text-[11px] text-[var(--ink-muted)]">Trier :</span>
                    <select class="bg-[var(--surface3)] border border-[var(--border)] rounded-[10px] px-3 py-1.5 text-[12px] text-[var(--ink)] font-tajawal cursor-pointer">
                        <option>Date de publication</option>
                        <option>Salaire</option>
                        <option>Pertinence</option>
                    </select>
                </div>
                <button onclick="openModal()"
                    class="btn-gradient inline-flex items-center gap-1.5 px-4 py-2 rounded-[11px] font-cinzel text-[11px] font-bold tracking-wide text-[#0e0b08] border-none cursor-pointer transition-all duration-200 hover:scale-[1.03] hover:shadow-[0_6px_20px_rgba(193,68,14,0.4)]">
                    <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path d="M12 5v14M5 12h14" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Nouvelle offre
                </button>
            </div>
        </div>

        <!-- Offer cards -->
        @foreach ($offers as $offer)
            <article class="card-gradient border border-[var(--border)] rounded-[18px] relative overflow-hidden transition-all duration-300 hover:border-[var(--border-h)] hover:-translate-y-0.5 hover:shadow-[0_12px_40px_rgba(0,0,0,0.2)] p-[22px] mb-3 cursor-pointer">

                <!-- Top row: apply + status badge -->
                <div class="flex items-center justify-between gap-3 mb-4">
                    <form action="{{ route('demande.store', ['offer_id' => $offer->id, 'sender_id' => auth()->user()->id, 'receiver_id' => $offer->user_id]) }}" method="POST">
                        @csrf
                        @if ($offer->status == 'disponible' && $offer->user_id!=auth()->user()->id)
                            <button type="submit" onclick="event.stopPropagation()"
                                class="btn-gradient inline-flex items-center gap-1.5 px-4 py-2 rounded-[11px] font-cinzel text-[11px] font-bold tracking-wide text-[#0e0b08] border-none cursor-pointer transition-all duration-200 hover:scale-[1.03] hover:shadow-[0_6px_20px_rgba(193,68,14,0.4)]">
                                <svg width="11" height="11" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                Postuler
                            </button>
                        @endif
                    </form>

                    @if($offer->status == 'disponible')
                        <div class="inline-flex items-center gap-1.5 text-[10px] font-cinzel px-3 py-1 rounded-full bg-green-100 border border-green-400 text-green-700">
                            <span class="disponible-dot"></span>
                            Disponible
                        </div>
                    @else
                        <div class="inline-flex items-center gap-1.5 text-[10px] font-cinzel px-3 py-1 rounded-full bg-red-100 border border-red-300 text-red-600">
                            <span class="indisponible-dot"></span>
                            Indisponible
                        </div>
                    @endif
                </div>

                <!-- Main content row -->
                <div class="flex items-start gap-4 mb-3">
                    <!-- Logo -->
                    <div class="offer-logo-gradient w-11 h-11 rounded-xl flex items-center justify-center text-[20px] flex-shrink-0">
                        {{ mb_substr($offer->title ?? '🔨', 0, 1) }}
                    </div>

                    <!-- Info — always visible -->
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-1.5 mb-1">
                            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="var(--ink-muted)" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>
                            <span class="text-[11px] text-[var(--ink-muted)]">{{ $offer->ville ?? 'Maroc' }}</span>
                        </div>
                        <h3 class="font-cormorant text-[1.15rem] font-semibold leading-snug mb-0.5">{{ $offer->title }}</h3>
                        <p class="text-[12px] text-[var(--ink-muted)]">
                            {{ $offer->user->name ?? 'Employeur' }} · {{ $offer->category->name ?? 'Artisanat' }}
                        </p>
                    </div>

                    <!-- Kebab menu — owners & admins only -->
                    @if (auth()->user()->id == $offer->user_id)
                        <div style="position: relative;">
                            <button class="kbtn" type="button" onclick="event.stopPropagation(); this.nextElementSibling.classList.toggle('hidden')">
                                <svg width="15" height="15" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                </svg>
                            </button>
                            <div class="kmenu hidden">

                                <form method="POST" action="{{ route('offer.destroy', $offer->id) }}">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="kitem red">🗑 Delete offer</button>
                                </form>
                                <button type="button" onclick="openModifyModal({{ $offer->id }})" class="kitem">✏️ Modify offer</button>
                            </div>
                        </div>
                    @endif

                    <!-- Salary -->
                    @if($offer->salaire ?? false)
                        <div class="text-right flex-shrink-0">
                            <span class="font-cinzel text-[14px] text-saffron">{{ $offer->salaire }} MAD</span>
                            <p class="text-[10px] text-[var(--ink-muted)]">/mois</p>
                        </div>
                    @endif
                </div>

                <!-- Description -->
                <p class="text-[13px] text-[var(--ink-dim)] leading-relaxed mb-4 line-clamp-2">
                    {{ $offer->description ?? "Poste ouvert dans le domaine de l'artisanat marocain." }}
                </p>

                @if($offer->photo)
                    <img src="{{ asset('image/' . $offer->photo) }}" alt="" class="w-full h-[400px] rounded-xl object-cover">
                @endif

            </article>
        @endforeach

        <!-- Empty state -->
        @if($offers->isEmpty())
            <div class="card-gradient border border-[var(--border)] rounded-[18px] text-center py-16 px-6">
                <p class="font-cormorant text-[20px] text-[var(--ink)] mb-1.5">Aucune offre disponible</p>
                <p class="text-[13px] text-[var(--ink-muted)]">Revenez bientôt pour découvrir de nouvelles opportunités.</p>
            </div>
        @endif

        <!-- Load more -->
        <div class="text-center mt-6">
            <button class="btn-gradient inline-flex items-center gap-1.5 px-9 py-2.5 rounded-[11px] font-cinzel text-[11px] font-bold tracking-wide text-[#0e0b08] border-none cursor-pointer transition-all duration-200 hover:scale-[1.03] hover:shadow-[0_6px_20px_rgba(193,68,14,0.4)]">
                Charger plus d'offres
            </button>
        </div>

    </div>

    <!-- ───────────────── Create Offer Modal ───────────────── -->
    <div id="offerModal" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
        <div onclick="closeModal()" class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>
        <div class="card-gradient border border-[var(--border)] rounded-[22px] relative z-10 w-full max-w-lg shadow-[0_24px_80px_rgba(0,0,0,0.5)] max-h-[90vh] overflow-y-auto">

            <div class="flex items-center justify-between px-6 pt-6 pb-4 border-b border-[var(--border)]">
                <div>
                    <span class="font-cinzel text-saffron text-[0.65rem] tracking-widest uppercase">Nouvelle opportunité</span>
                    <h3 class="font-cinzel text-[18px] mt-0.5">Publier une Offre</h3>
                </div>
                <button onclick="closeModal()" class="w-8 h-8 rounded-full bg-[var(--surface3)] border border-[var(--border)] flex items-center justify-center text-[var(--ink-muted)] hover:text-[var(--ink)] transition-colors cursor-pointer">
                    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path d="M18 6L6 18M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>

            <form action="{{ route('offers.store') }}" method="POST" enctype="multipart/form-data" class="px-6 py-5 space-y-4">
                @csrf

                <div>
                    <label class="fl">Titre du poste</label>
                    <input type="text" name="title" required placeholder="ex: Maître Menuisier, Brodeur traditionnel…"
                        class="w-full bg-[var(--surface3)] border border-[var(--border)] rounded-[10px] px-3 py-2.5 text-[13px] text-[var(--ink)] font-tajawal placeholder:text-[var(--ink-muted)] focus:outline-none focus:border-saffron transition-colors" />
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="fl">Ville</label>
                        <input type="text" name="ville" placeholder="Casablanca, Fès…"
                            class="w-full bg-[var(--surface3)] border border-[var(--border)] rounded-[10px] px-3 py-2.5 text-[13px] text-[var(--ink)] font-tajawal placeholder:text-[var(--ink-muted)] focus:outline-none focus:border-saffron transition-colors" />
                    </div>
                    <div>
                        <label class="fl">Catégorie</label>
                        <select name="category_id"
                            class="w-full bg-[var(--surface3)] border border-[var(--border)] rounded-[10px] px-3 py-2.5 text-[13px] text-[var(--ink)] font-tajawal cursor-pointer focus:outline-none focus:border-saffron transition-colors">
                            <option value="">Choisir…</option>
                            @foreach ($categorys as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div>
                    <label class="fl">Salaire (MAD / mois)</label>
                    <input type="number" name="salaire" placeholder="ex: 4500"
                        class="w-full bg-[var(--surface3)] border border-[var(--border)] rounded-[10px] px-3 py-2.5 text-[13px] text-[var(--ink)] font-tajawal placeholder:text-[var(--ink-muted)] focus:outline-none focus:border-saffron transition-colors" />
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="fl">Début</label>
                        <input type="date" name="start_date"
                            class="w-full bg-[var(--surface3)] border border-[var(--border)] rounded-[10px] px-3 py-2.5 text-[13px] text-[var(--ink)] font-tajawal focus:outline-none focus:border-saffron transition-colors cursor-pointer" />
                    </div>
                    <div>
                        <label class="fl">Fin</label>
                        <input type="date" name="end_date"
                            class="w-full bg-[var(--surface3)] border border-[var(--border)] rounded-[10px] px-3 py-2.5 text-[13px] text-[var(--ink)] font-tajawal focus:outline-none focus:border-saffron transition-colors cursor-pointer" />
                    </div>
                </div>

                <div>
                    <label class="fl">Description</label>
                    <textarea name="description" rows="3" placeholder="Décrivez le poste, les compétences requises…"
                        class="w-full bg-[var(--surface3)] border border-[var(--border)] rounded-[10px] px-3 py-2.5 text-[13px] text-[var(--ink)] font-tajawal placeholder:text-[var(--ink-muted)] focus:outline-none focus:border-saffron transition-colors resize-none"></textarea>
                </div>

                <div style="margin-bottom:8px;">
                    <label class="fl">Media</label>
                    <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;">
                        <label class="upz">
                            <div class="upi">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--saffron)" stroke-width="1.6">
                                    <rect x="3" y="3" width="18" height="18" rx="3" />
                                    <circle cx="8.5" cy="8.5" r="1.5" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 15l-5-5L5 21" />
                                </svg>
                            </div>
                            <span style="font-family:'Cinzel',serif;font-size:12px;color:var(--saffron);">Photo</span>
                            <span style="font-size:10px;color:var(--ink-muted);">JPG · PNG · GIF</span>
                            <input type="file" name="photo" id="photo-input" accept="image/*" class="hidden" onchange="previewMedia(this,'image')">
                        </label>
                    </div>
                    <div id="media-preview" class="hidden" style="margin-top:10px;border-radius:14px;overflow:hidden;border:1px solid var(--border);">
                        <img id="img-preview" class="hidden" style="width:100%;max-height:200px;object-fit:cover;display:block;" alt="preview">
                        <div style="display:flex;align-items:center;justify-content:space-between;padding:8px 14px;background:var(--surface2);">
                            <span id="media-filename" style="font-size:11px;color:var(--ink-dim);overflow:hidden;text-overflow:ellipsis;white-space:nowrap;max-width:75%;"></span>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-end gap-3 pt-1">
                    <button type="button" onclick="closeModal()"
                        class="px-4 py-2 rounded-[10px] font-cinzel text-[11px] font-bold tracking-wide text-[var(--ink-muted)] bg-[var(--surface3)] border border-[var(--border)] hover:text-[var(--ink)] transition-colors cursor-pointer">
                        Annuler
                    </button>
                    <button type="submit"
                        class="btn-gradient inline-flex items-center gap-1.5 px-5 py-2 rounded-[11px] font-cinzel text-[11px] font-bold tracking-wide text-[#0e0b08] border-none cursor-pointer transition-all duration-200 hover:scale-[1.03] hover:shadow-[0_6px_20px_rgba(193,68,14,0.4)]">
                        <svg width="11" height="11" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Publier l'offre
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- ───────────────── Modify Offer Modal ───────────────── -->
    <div id="offerModifyModal" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
        <div onclick="closeModifyModal()" class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>
        <div class="card-gradient border border-[var(--border)] rounded-[22px] relative z-10 w-full max-w-lg shadow-[0_24px_80px_rgba(0,0,0,0.5)] max-h-[90vh] overflow-y-auto">

            <div class="flex items-center justify-between px-6 pt-6 pb-4 border-b border-[var(--border)]">
                <div>
                    <span class="font-cinzel text-saffron text-[0.65rem] tracking-widest uppercase">Modifier</span>
                    <h3 class="font-cinzel text-[18px] mt-0.5">Modifier l'Offre</h3>
                </div>
                <button onclick="closeModifyModal()" class="w-8 h-8 rounded-full bg-[var(--surface3)] border border-[var(--border)] flex items-center justify-center text-[var(--ink-muted)] hover:text-[var(--ink)] transition-colors cursor-pointer">
                    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path d="M18 6L6 18M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>

            <form id="modifyForm" action="#" method="POST" enctype="multipart/form-data" class="px-6 py-5 space-y-4">
                @csrf
                @method('PUT')

                <!-- Error Display -->
                @if ($errors->any())
                    <div class="error-msg">
                        <strong>Validation errors:</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div>
                    <label class="fl">Titre du poste</label>
                    <input type="text" name="title" id="modify-title" required
                        class="w-full bg-[var(--surface3)] border border-[var(--border)] rounded-[10px] px-3 py-2.5 text-[13px] text-[var(--ink)] font-tajawal placeholder:text-[var(--ink-muted)] focus:outline-none focus:border-saffron transition-colors" />
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="fl">Ville</label>
                        <input type="text" name="ville" id="modify-ville" required
                            class="w-full bg-[var(--surface3)] border border-[var(--border)] rounded-[10px] px-3 py-2.5 text-[13px] text-[var(--ink)] font-tajawal placeholder:text-[var(--ink-muted)] focus:outline-none focus:border-saffron transition-colors" />
                    </div>
                    <div>
                        <label class="fl">Catégorie</label>
                        <select name="category_id" id="modify-category" required
                            class="w-full bg-[var(--surface3)] border border-[var(--border)] rounded-[10px] px-3 py-2.5 text-[13px] text-[var(--ink)] font-tajawal cursor-pointer focus:outline-none focus:border-saffron transition-colors">
                            <option value="">Choisir…</option>
                            @foreach ($categorys as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div>
                    <label class="fl">Salaire (MAD / mois)</label>
                    <input type="number" name="salaire" id="modify-salaire"
                        class="w-full bg-[var(--surface3)] border border-[var(--border)] rounded-[10px] px-3 py-2.5 text-[13px] text-[var(--ink)] font-tajawal placeholder:text-[var(--ink-muted)] focus:outline-none focus:border-saffron transition-colors" />
                </div>

                <!-- ADDED: Start and End Date fields -->
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="fl">Date de début</label>
                        <input type="date" name="start_date" id="modify-start-date" required
                            class="w-full bg-[var(--surface3)] border border-[var(--border)] rounded-[10px] px-3 py-2.5 text-[13px] text-[var(--ink)] font-tajawal focus:outline-none focus:border-saffron transition-colors cursor-pointer" />
                    </div>
                    <div>
                        <label class="fl">Date de fin</label>
                        <input type="date" name="end_date" id="modify-end-date" required
                            class="w-full bg-[var(--surface3)] border border-[var(--border)] rounded-[10px] px-3 py-2.5 text-[13px] text-[var(--ink)] font-tajawal focus:outline-none focus:border-saffron transition-colors cursor-pointer" />
                    </div>
                </div>

                <div>
                    <label class="fl">Description</label>
                    <textarea name="description" id="modify-description" rows="3"
                        class="w-full bg-[var(--surface3)] border border-[var(--border)] rounded-[10px] px-3 py-2.5 text-[13px] text-[var(--ink)] font-tajawal placeholder:text-[var(--ink-muted)] focus:outline-none focus:border-saffron transition-colors resize-none"></textarea>
                </div>

                <div style="margin-bottom:8px;">
                    <label class="fl">Media</label>
                    <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;">
                        <label class="upz">
                            <div class="upi">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--saffron)" stroke-width="1.6">
                                    <rect x="3" y="3" width="18" height="18" rx="3" />
                                    <circle cx="8.5" cy="8.5" r="1.5" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 15l-5-5L5 21" />
                                </svg>
                            </div>
                            <span style="font-family:'Cinzel',serif;font-size:12px;color:var(--saffron);">Photo</span>
                            <span style="font-size:10px;color:var(--ink-muted);">JPG · PNG · GIF</span>
                            <input type="file" name="photo" id="modify-photo-input" accept="image/*" class="hidden" onchange="previewModifyMedia(this,'image')">
                        </label>
                    </div>
                    <div id="modify-media-preview" class="hidden" style="margin-top:10px;border-radius:14px;overflow:hidden;border:1px solid var(--border);">
                        <img id="modify-img-preview" class="hidden" style="width:100%;max-height:200px;object-fit:cover;display:block;" alt="preview">
                        <div style="display:flex;align-items:center;justify-content:space-between;padding:8px 14px;background:var(--surface2);">
                            <span id="modify-media-filename" style="font-size:11px;color:var(--ink-dim);overflow:hidden;text-overflow:ellipsis;white-space:nowrap;max-width:75%;"></span>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-end gap-3 pt-1">
                    <button type="button" onclick="closeModifyModal()"
                        class="px-4 py-2 rounded-[10px] font-cinzel text-[11px] font-bold tracking-wide text-[var(--ink-muted)] bg-[var(--surface3)] border border-[var(--border)] hover:text-[var(--ink)] transition-colors cursor-pointer">
                        Annuler
                    </button>
                    <button type="submit"
                        class="btn-gradient inline-flex items-center gap-1.5 px-5 py-2 rounded-[11px] font-cinzel text-[11px] font-bold tracking-wide text-[#0e0b08] border-none cursor-pointer transition-all duration-200 hover:scale-[1.03] hover:shadow-[0_6px_20px_rgba(193,68,14,0.4)]">
                        <svg width="11" height="11" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        (function () {
            var t = localStorage.getItem('7rayfi-theme') || 'dark';
            document.documentElement.setAttribute('data-theme', t);
            setIcon(t);
        })();

        function toggleTheme() {
            var c = document.documentElement.getAttribute('data-theme'),
                n = c === 'dark' ? 'light' : 'dark';
            document.documentElement.setAttribute('data-theme', n);
            localStorage.setItem('7rayfi-theme', n);
            setIcon(n);
        }

        function setIcon(t) {
            var e = document.getElementById('ticon');
            if (e) e.textContent = t === 'dark' ? '☀️' : '🌙';
        }

        function openModal() {
            var m = document.getElementById('offerModal');
            m.classList.remove('hidden');
            m.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            var m = document.getElementById('offerModal');
            m.classList.add('hidden');
            m.classList.remove('flex');
            document.body.style.overflow = '';
        }

        // Offers data for pre-filling the modify modal
        var offersData = @json($offers->keyBy('id'));

        function openModifyModal(offerId) {
            var offer = offersData[offerId];
            if (offer) {
                document.getElementById('modify-title').value       = offer.title        || '';
                document.getElementById('modify-ville').value       = offer.ville        || '';
                document.getElementById('modify-salaire').value     = offer.salaire      || '';
                document.getElementById('modify-description').value = offer.description  || '';
                document.getElementById('modify-category').value    = offer.category_id  || '';

                // Format dates for input[type="date"] (YYYY-MM-DD format)
                if (offer.start_date) {
                    var startDate = new Date(offer.start_date);
                    document.getElementById('modify-start-date').value = startDate.toISOString().split('T')[0];
                }
                if (offer.end_date) {
                    var endDate = new Date(offer.end_date);
                    document.getElementById('modify-end-date').value = endDate.toISOString().split('T')[0];
                }

                document.getElementById('modifyForm').action = '/offer/' + offerId;
            }
            var m = document.getElementById('offerModifyModal');
            m.classList.remove('hidden');
            m.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeModifyModal() {
            var m = document.getElementById('offerModifyModal');
            m.classList.add('hidden');
            m.classList.remove('flex');
            document.body.style.overflow = '';
        }

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') { closeModal(); closeModifyModal(); }
        });

        // Close kebab menus when clicking outside
        document.addEventListener('click', function (e) {
            if (!e.target.closest('.kbtn') && !e.target.closest('.kmenu')) {
                document.querySelectorAll('.kmenu').forEach(function (m) {
                    m.classList.add('hidden');
                });
            }
        });

        function previewMedia(input, type) {
            var file = input.files[0];
            if (!file) return;
            var preview  = document.getElementById('media-preview');
            var img      = document.getElementById('img-preview');
            var filename = document.getElementById('media-filename');
            preview.classList.remove('hidden');
            filename.textContent = file.name;
            if (type === 'image') {
                var reader = new FileReader();
                reader.onload = function (e) {
                    img.src = e.target.result;
                    img.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            }
        }

        function previewModifyMedia(input, type) {
            var file = input.files[0];
            if (!file) return;
            var preview  = document.getElementById('modify-media-preview');
            var img      = document.getElementById('modify-img-preview');
            var filename = document.getElementById('modify-media-filename');
            preview.classList.remove('hidden');
            filename.textContent = file.name;
            if (type === 'image') {
                var reader = new FileReader();
                reader.onload = function (e) {
                    img.src = e.target.result;
                    img.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>

</html>
