<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post — 7erayfi</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    @include('header')
    <div class="shell" style="padding-top:12px;">
        <div class="layout" style="grid-template-columns:1fr;">
            <div class="feed">
                <div class="card" style="margin-bottom: 16px; padding: 16px;">
                    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:12px;">
                        <div>
                            <h2 style="margin:0; font-family:'Syne',sans-serif;">Create New Post</h2>
                            <p style="margin:4px 0 0;color:var(--muted);">Share something with your network.</p>
                        </div>
                        <a href="{{ route('post.index') }}" style="color:var(--gold);text-decoration:none;">Back</a>
                    </div>
                    @if ($errors->any())
                        <div style="background:#330000;border:1px solid #ff7777;color:#fff;padding:10px;border-radius:8px;margin-bottom:12px;">
                            <ul style="margin:0;padding-left:16px;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('post.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                        <div style="margin-bottom:10px;">
                            <label style="display:block; margin-bottom:4px; color:#e8e6e0;">Title</label>
                            <input type="text" name="title" value="{{ old('title') }}" style="width:100%;padding:10px;border-radius:8px;border:1px solid rgba(255,255,255,0.15);background:var(--surface2);color:var(--text);" required>
                        </div>
                        <div style="margin-bottom:10px;">
                            <label style="display:block; margin-bottom:4px; color:#e8e6e0;">Photo URL</label>
                            <input type="text" name="photo_URL" value="{{ old('photo_URL') }}" style="width:100%;padding:10px;border-radius:8px;border:1px solid rgba(255,255,255,0.15);background:var(--surface2);color:var(--text);">
                        </div>
                        <div style="margin-bottom:10px;">
                            <label style="display:block; margin-bottom:4px; color:#e8e6e0;">Description</label>
                            <textarea name="description" rows="5" style="width:100%;padding:10px;border-radius:8px;border:1px solid rgba(255,255,255,0.15);background:var(--surface2);color:var(--text);">{{ old('description') }}</textarea>
                        </div>
                        <button type="submit" style="background:var(--gold);color:#111;border:none;padding:10px 16px;border-radius:10px;font-weight:700;">Create Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
