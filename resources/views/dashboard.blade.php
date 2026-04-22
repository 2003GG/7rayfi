<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home — 7RAYFI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Tajawal:wght@300;400;500;700&family=Cinzel:wght@400;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

</head>

<body>

    <!-- ══════════ NAVBAR ══════════ -->
      @include('layouts/header')


    <!-- ══════════ 4-COLUMN GRID ══════════ -->
    <div class="grid4">

        <!-- ─── COL 1: Profile sidebar ─── -->
        @include('layouts/sidebar')

        <!-- ─── COL 2: Second left sidebar ─── -->
        <aside class="col2" style="position:sticky;top:78px;align-self:start;">

            <!-- Skills -->
            <div class="card" style="margin-bottom:14px;">
                <div class="card-accent accent-ocean"></div>
                <div class="card-header card-header-ocean"><span class="bar bar-ocean"></span>categorys</div>
                <div style="padding:12px 14px 14px;">
                    @foreach ($categorys as $category)
                    <span class="skill-pill">{{ $category->name }}</span>

                    @endforeach

                    <!-- <div style="margin-top:10px;">
                        <button
                            style="width:100%;font-size:11px;color:var(--saffron);background:none;border:1px dashed rgba(232,160,32,.25);border-radius:10px;padding:6px;cursor:pointer;font-family:'Cinzel',serif;transition:all .2s;"
                            onmouseover="this.style.borderColor='rgba(232,160,32,.5)'"
                            onmouseout="this.style.borderColor='rgba(232,160,32,.25)'">+ Add skill</button>
                    </div> -->
                </div>
            </div>

            <!-- Upcoming Events -->
            <div class="card" style="margin-bottom:14px;">
                <div class="card-accent accent-ocean"></div>
                <div class="card-header card-header-ocean"><span class="bar bar-ocean"></span>Events</div>
                <div class="ev-item">
                    <div class="ev-dt" style="background:linear-gradient(135deg,var(--clay),var(--saffron));">
                        <div class="ev-day">14</div>
                        <div class="ev-mon">Apr</div>
                    </div>
                    <div>
                        <div class="ev-ttl">Salon de l'Artisanat</div>
                        <div class="ev-sub">📍 Casablanca</div>
                    </div>
                </div>
                <div class="ev-item">
                    <div class="ev-dt" style="background:linear-gradient(135deg,var(--indigo),var(--indigo-lt));">
                        <div class="ev-day" style="color:#fff;">22</div>
                        <div class="ev-mon" style="color:rgba(255,255,255,.7);">Apr</div>
                    </div>
                    <div>
                        <div class="ev-ttl">Freelancer Summit</div>
                        <div class="ev-sub">💻 Online · Free</div>
                    </div>
                </div>
                <div class="ev-item">
                    <div class="ev-dt" style="background:linear-gradient(135deg,var(--sage),#2d5c3e);">
                        <div class="ev-day" style="color:#fff;">3</div>
                        <div class="ev-mon" style="color:rgba(255,255,255,.7);">Mai</div>
                    </div>
                    <div>
                        <div class="ev-ttl">Design Week Marrakech</div>
                        <div class="ev-sub">📍 Marrakech · Hybrid</div>
                    </div>
                </div>
                <div style="padding:10px 16px;"><button
                        style="width:100%;text-align:center;font-size:11px;color:var(--copper-lt);background:none;border:none;cursor:pointer;font-family:'Cinzel',serif;">View
                        all events →</button></div>
            </div>

            <!-- Featured Jobs -->
            <div class="card" style="margin-bottom:14px;">
                <div class="card-accent accent-ocean"></div>
                <div class="card-header card-header-ocean"><span class="bar bar-ocean"></span>Featured Jobs</div>
                <div class="job-item">
                    <div class="job-logo">🏺</div>
                    <div style="min-width:0;">
                        <div class="job-t">Pottery Designer</div>
                        <div class="job-c">Fassi Céramique · Fès</div>
                    </div><span class="job-tag">CDI</span>
                </div>
                <div class="job-item">
                    <div class="job-logo">🧵</div>
                    <div style="min-width:0;">
                        <div class="job-t">Textile Artisan</div>
                        <div class="job-c">Atlas Loom · Remote</div>
                    </div><span class="job-tag">Freelance</span>
                </div>
                <div class="job-item">
                    <div class="job-logo">💻</div>
                    <div style="min-width:0;">
                        <div class="job-t">UI Designer</div>
                        <div class="job-c">StartupMA · Rabat</div>
                    </div><span class="job-tag">CDD</span>
                </div>
                <div style="padding:10px 16px;"><button
                        style="width:100%;text-align:center;font-size:11px;color:var(--copper-lt);background:none;border:none;cursor:pointer;font-family:'Cinzel',serif;">See
                        all jobs →</button></div>
            </div>

        </aside>

        <!-- ─── COL 3: FEED ─── -->
        <main style="min-width:0;">

            <!-- Header -->
            <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:18px;">
                <div>
                    <h1
                        style="font-family:'Cormorant Garamond',serif;font-size:26px;font-weight:600;color:var(--ink);line-height:1.1;">
                        Your Feed</h1>
                    <p style="font-size:11.5px;color:var(--ink-muted);margin-top:2px;">What's happening in your network
                    </p>
                </div>
                <button type="button" class="btn-create"
                    onclick="document.getElementById('post-modal').classList.remove('hidden')">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <path d="M12 5v14M5 12h14" />
                    </svg>
                    Create Post
                </button>
            </div>

            <!-- Compose -->
            <div class="compose-card" onclick="document.getElementById('post-modal').classList.remove('hidden')">
                @if (auth()->user()->profile_photo)
                    <img class="avatar-md" src="{{ asset('image/' . auth()->user()->profile_photo) }}">
                @else
                    <div class="avatar-md">{{ strtoupper(substr(auth()->user()->name, 0, 2)) }}</div>

                @endif
                <div class="cph">Share a skill, project, or story…</div>
                <div style="display:flex;gap:8px;flex-shrink:0;"><span
                        style="font-size:18px;cursor:pointer;">🖼️</span><span
                        style="font-size:18px;cursor:pointer;">🎬</span></div>
            </div>

            <div class="zine-thin" style="margin-bottom:20px;"></div>

            <!-- Posts loop -->
            @foreach ($posts as $post)
                <article class="post-card">
                    <div style="padding:16px 16px 0;">
                        <div style="display:flex;align-items:flex-start;gap:12px;">
                            @if ($post->user->profile_photo)
                                <a href="{{ route('show.profile', ['id' => $post->user->id]) }}">
                                    <img src="{{ asset('image/' . $post->user->profile_photo) }}" class="avatar-md" alt="">
                                </a>
                            @else
                                <a href="{{ route('show.profile', ['id' => $post->user->id])  }}">
                                    <div class="avatar-md">{{ strtoupper(substr($post->user->name, 0, 2)) }}</div>
                                </a>
                            @endif
                            <div style="flex:1;min-width:0;">
                                <div style="display:flex;align-items:flex-start;justify-content:space-between;gap:8px;">
                                    <div>
                                        <span class="pun"><a
                                                href="{{ route('show.profile', ['id' => $post->user->id]) }}">{{ $post->user->name }}</a></span>
                                        <p class="ptit">{{ $post->title }}</p>
                                        <p class="ptim">{{ $post->created_at->diffForHumans() }} · 🌐</p>
                                    </div>
                                    <div style="position:relative;">
                                        <button class="kbtn" type="button"
                                            onclick="this.nextElementSibling.classList.toggle('hidden')">
                                            <svg width="15" height="15" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                            </svg>
                                        </button>
                                        <div class="kmenu hidden">
                                            <form method="POST" action="{{ route('post.destroy', ['id' => $post->id]) }}">
                                                @csrf
                                                @method('DELETE')
                                                @if ($post->user_id == auth()->user()->id)
                                                    <button type="submit" class="kitem red">🗑 Delete post</button>
                                                @else
                                                @endif
                                            </form>
                                            <button type="button" class="kitem">🔖 Save post</button>
                                            <form action="{{ route('post.report', ['id' => $post->id]) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="kitem">🚫 Report post</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="pbod">{{ $post->description }}</p>


                    @if($post->photo_URL)
                        <div class="pimg"><img src="{{ asset('image/' . $post->photo_URL) }}" alt="Post image"
                                style="width:100%;max-height:420px;object-fit:cover;display:block;"></div>
                    @else

                    @endif

                    <div class="pstats">
                        <span>👍 {{ $post->likes_count ?? 0 }} likes</span>
                        <div style="display:flex;gap:14px;">
                            <span>💬 <a href="{{ route('comments.show', $post->id) }}">{{ $post->comments->count() ?? 0 }}
                                    comments</a></span>

                        </div>
                    </div>

                    <div class="pacts">

                        <button type="button" class="pact"><span class="pac-ico">👍</span> Like</button>
                        <button type="button" class="pact" onclick="toggleComment('comment-{{ $post->id }}')">
                            <span class="pac-ico">💬</span> Comment
                        </button>
                    </div>

                    {{-- ← ADD THIS PART --}}
                    <div id="comment-{{ $post->id }}" class="hidden"
                        style="padding:12px 16px; border-top:1px solid var(--border);">
                        <form action="{{ route('comments.store', $post->id) }}" method="POST"
                            style="display:flex; gap:10px; align-items:center;">
                            @csrf
                            @method('post')
                            <div class="avatar-md" style="flex-shrink:0;">
                                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                            </div>
                            <input type="text" name="description" required placeholder="Write a comment…"
                                style="flex:1; background:var(--surface3); border:1px solid var(--border); border-radius:20px; padding:8px 16px; font-size:13px; color:var(--ink); font-family:'Tajawal',sans-serif; outline:none; transition:border-color 0.2s;"
                                onfocus="this.style.borderColor='rgba(232,160,32,0.5)'"
                                onblur="this.style.borderColor='var(--border)'" />
                            <button type="submit"
                                style="width:32px; height:32px; border-radius:50%; background:linear-gradient(135deg,var(--clay),var(--saffron)); border:none; cursor:pointer; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#0e0b08"
                                    stroke-width="2.5">
                                    <path d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                </svg>
                            </button>
                        </form>
                    </div>


                </article>
            @endforeach

        </main>

        <!-- ─── COL 4: Right sidebar ─── -->
        <aside class="col4" style="position:sticky;top:78px;align-self:start;">

            <!-- People -->
            <div class="card" style="margin-bottom:14px;">
                <div class="card-accent accent-fire"></div>
                <div class="card-header card-header-fire"><span class="bar bar-fire"></span>People You May Know</div>
                <div class="follow-item">
                    <div class="avatar"
                        style="width:36px;height:36px;font-size:12px;background:linear-gradient(135deg,var(--indigo),var(--indigo-lt));">
                        YB</div>
                    <div>
                        <div class="fn">Yassine Benali</div>
                        <div class="fs">Zellige · Fès</div>
                    </div>
                    <button class="btn-fol">+ Follow</button>
                </div>
                <div class="follow-item">
                    <div class="avatar"
                        style="width:36px;height:36px;font-size:12px;background:linear-gradient(135deg,var(--sage),#2d5c3e);">
                        FM</div>
                    <div>
                        <div class="fn">Fatima Mrabet</div>
                        <div class="fs">Textile · Marrakech</div>
                    </div>
                    <button class="btn-fol">+ Follow</button>
                </div>
                <div class="follow-item">
                    <div class="avatar"
                        style="width:36px;height:36px;font-size:12px;background:linear-gradient(135deg,var(--copper),var(--clay));">
                        AO</div>
                    <div>
                        <div class="fn">Amine Ouahbi</div>
                        <div class="fs">Leather · Meknès</div>
                    </div>
                    <button class="btn-fol">+ Follow</button>
                </div>
                <div style="padding:10px 16px 14px;"><button
                        style="width:100%;text-align:center;font-size:11px;color:var(--saffron);background:none;border:none;cursor:pointer;font-family:'Cinzel',serif;">View
                        all suggestions →</button></div>
            </div>

            <!-- Trending -->
            <div class="card" style="margin-bottom:14px;">
                <div class="card-accent accent-fire"></div>
                <div class="card-header card-header-fire"><span class="bar bar-fire"></span>Trending in Morocco</div>
                <div style="padding:12px 16px 14px;">
                    <span class="tag-pill">#Zellige</span>
                    <span class="tag-pill">#RemoteWork</span>
                    <span class="tag-pill">#Marrakech</span>
                    <span class="tag-pill">#Artisanat</span>
                    <span class="tag-pill">#Fès</span>
                    <span class="tag-pill">#OpenToWork</span>
                    <span class="tag-pill">#Design</span>
                    <span class="tag-pill">#Startup</span>
                </div>
            </div>

            <!-- This week analytics -->
            <div class="card" style="margin-bottom:14px;">
                <div class="card-accent accent-fire"></div>
                <div class="card-header card-header-fire"><span class="bar bar-fire"></span>This Week</div>
                <div style="padding:14px 16px;">
                    <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:12px;">
                        <span style="font-size:12px;color:var(--ink-dim);">🔥 Streak</span>
                        <span style="font-family:'Cinzel',serif;font-size:13px;color:var(--clay);">5 days</span>
                    </div>
                    <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:12px;">
                        <span style="font-size:12px;color:var(--ink-dim);">👀 Views</span>
                        <span style="font-family:'Cinzel',serif;font-size:13px;color:var(--saffron);">+38%</span>
                    </div>
                    <div style="display:flex;align-items:center;justify-content:space-between;">
                        <span style="font-size:12px;color:var(--ink-dim);">🤝 New connects</span>
                        <span style="font-family:'Cinzel',serif;font-size:13px;color:var(--sage);">12</span>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div style="padding:8px 14px;opacity:.45;">
                <div style="display:flex;flex-wrap:wrap;gap:8px;margin-bottom:6px;">
                    <a href="#" style="font-size:10px;color:var(--ink-muted);text-decoration:none;">About</a>
                    <a href="#" style="font-size:10px;color:var(--ink-muted);text-decoration:none;">Help</a>
                    <a href="#" style="font-size:10px;color:var(--ink-muted);text-decoration:none;">Privacy</a>
                    <a href="#" style="font-size:10px;color:var(--ink-muted);text-decoration:none;">Terms</a>
                </div>
                <p style="font-family:'Cinzel',serif;font-size:9px;color:var(--ink-muted);">7RAYFI © {{ date('Y') }} ·
                    Built in Morocco 🇲🇦</p>
            </div>

        </aside>

    </div><!-- /grid4 -->


    <!-- ══════════ MODAL ══════════ -->
    <div id="post-modal" class="modal-ov hidden" onclick="if(event.target===this) closeModal()">
        <div class="modal-box">
            <div class="modal-top"></div>
            <div class="modal-hd">
                <div style="display:flex;align-items:center;gap:10px;">
                    <div
                        style="width:32px;height:32px;border-radius:9px;background:linear-gradient(135deg,var(--clay),var(--saffron));display:flex;align-items:center;justify-content:center;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#0e0b08" stroke-width="2.5">
                            <path d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                    </div>
                    <h2 class="modal-ttl">Create a Post</h2>
                </div>
                <button type="button" class="modal-x" onclick="closeModal()">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M18 6L6 18M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('post')
                <div style="padding:18px 22px 0;">
                    <div style="display:flex;align-items:center;gap:12px;margin-bottom:16px;">
                        <div class="avatar-md">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</div>
                        <div>
                            <p
                                style="font-family:'Cormorant Garamond',serif;font-size:16px;font-weight:600;color:var(--ink);">
                                {{ auth()->user()->name }}
                            </p>
                            <p style="font-size:11px;color:var(--ink-muted);">Posting publicly · 🌐</p>
                        </div>
                    </div>
                    <div class="zine-thin" style="margin-bottom:16px;"></div>

                    <div style="margin-bottom:14px;">
                        <label class="fl">Title <span class="r">*</span></label>
                        <input type="text" name="title" maxlength="120" required
                            placeholder="Give your post a compelling headline…" class="fi" />
                    </div>
                    <div style="margin-bottom:14px;">
                        <label class="fl">Category</label>
                        <select name="category" class="fse">
                            @foreach ($categorys as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div style="margin-bottom:14px;">
                        <label class="fl">Content <span class="r">*</span></label>
                        <textarea name="description" rows="4" maxlength="3000" required
                            placeholder="What do you want to share with your network?" class="fi fta"></textarea>
                    </div>
                    <div style="margin-bottom:16px;">
                        <label class="fl">Tags <span
                                style="color:var(--ink-muted);text-transform:none;letter-spacing:0;font-weight:400;">—
                                comma separated</span></label>
                        <input type="text" name="tags" placeholder="e.g. Zellige, RemoteWork, Marrakech" class="fi" />
                    </div>
                    <div style="margin-bottom:8px;">
                        <label class="fl">Media</label>
                        <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;">
                            <label class="upz">
                                <div class="upi"><svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        stroke="var(--saffron)" stroke-width="1.6">
                                        <rect x="3" y="3" width="18" height="18" rx="3" />
                                        <circle cx="8.5" cy="8.5" r="1.5" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 15l-5-5L5 21" />
                                    </svg></div>
                                <span
                                    style="font-family:'Cinzel',serif;font-size:12px;color:var(--saffron);">Photo</span>
                                <span style="font-size:10px;color:var(--ink-muted);">JPG · PNG · GIF</span>
                                <input type="file" name="photo_URL" id="photo-input" accept="image/*" class="hidden"
                                    onchange="previewMedia(this,'image')">
                            </label>
                            <label class="upz" style="border-color:var(--border);">
                                <div class="upi" style="background:var(--surface3);"><svg width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="var(--ink-dim)" stroke-width="1.6">
                                        <rect x="2" y="5" width="15" height="14" rx="2" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 9l5-3v12l-5-3V9z" />
                                    </svg></div>
                                <span
                                    style="font-family:'Cinzel',serif;font-size:12px;color:var(--ink-dim);">Video</span>
                                <span style="font-size:10px;color:var(--ink-muted);">MP4 · MOV</span>
                                <input type="file" name="video_URL" id="video-input" accept="video/*" class="hidden"
                                    onchange="previewMedia(this,'video')">
                            </label>
                        </div>
                        <div id="media-preview" class="hidden"
                            style="margin-top:10px;border-radius:14px;overflow:hidden;border:1px solid var(--border);">
                            <img id="img-preview" class="hidden"
                                style="width:100%;max-height:200px;object-fit:cover;display:block;" alt="preview">
                            <video id="vid-preview" class="hidden"
                                style="width:100%;max-height:200px;object-fit:cover;display:block;" controls></video>
                            <div
                                style="display:flex;align-items:center;justify-content:space-between;padding:8px 14px;background:var(--surface2);">
                                <span id="media-filename"
                                    style="font-size:11px;color:var(--ink-dim);overflow:hidden;text-overflow:ellipsis;white-space:nowrap;max-width:75%;"></span>
                                <button type="button" onclick="clearMedia()"
                                    style="font-size:11px;color:#e05555;background:none;border:none;cursor:pointer;">✕
                                    Remove</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-ft">
                    <button type="button" onclick="closeModal()" class="btn-cancel">Cancel</button>
                    <button type="submit" class="btn-create">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                        Publish Post
                    </button>
                </div>
            </form>
        </div>
    </div>


    <script>
        /* ── THEME: persist & init ── */
        (function () {
            var t = localStorage.getItem('7rayfi-theme') || 'dark';
            document.documentElement.setAttribute('data-theme', t);
            setIcon(t);
        })();

        function toggleTheme() {
            var cur = document.documentElement.getAttribute('data-theme');
            var next = cur === 'dark' ? 'light' : 'dark';
            document.documentElement.setAttribute('data-theme', next);
            localStorage.setItem('7rayfi-theme', next);
            setIcon(next);
        }
        function setIcon(t) {
            var el = document.getElementById('ticon');
            if (el) el.textContent = t === 'dark' ? '☀️' : '🌙';
        }

        /* ── MODAL ── */
        function closeModal() { document.getElementById('post-modal').classList.add('hidden'); }

        /* ── MEDIA ── */
        function previewMedia(input, type) {
            if (!input.files || !input.files[0]) return;
            var url = URL.createObjectURL(input.files[0]);
            var img = document.getElementById('img-preview');
            var vid = document.getElementById('vid-preview');
            if (type === 'image') { img.src = url; img.classList.remove('hidden'); vid.classList.add('hidden'); }
            else { vid.src = url; vid.classList.remove('hidden'); img.classList.add('hidden'); }
            document.getElementById('media-filename').textContent = input.files[0].name;
            document.getElementById('media-preview').classList.remove('hidden');
        }
        function clearMedia() {
            ['photo-input', 'video-input'].forEach(id => document.getElementById(id).value = '');
            ['img-preview', 'vid-preview', 'media-preview'].forEach(id => document.getElementById(id).classList.add('hidden'));
        }

        /* ── KEBAB ── */
        document.addEventListener('click', function (e) {
            if (!e.target.closest('.kbtn'))
                document.querySelectorAll('.kmenu').forEach(m => m.classList.add('hidden'));
        });

        function toggleComment(id) {
            document.getElementById(id).classList.toggle('hidden');
            document.getElementById(id).querySelector('input').focus();
        }
    </script>

</body>

</html>
