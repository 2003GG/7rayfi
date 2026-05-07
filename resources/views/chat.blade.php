<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chat — 7RAYFI</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght;0,400;0,500;0,600;0,700;1,400&family=Tajawal:wght@300;400;500;700&family=Cinzel:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <style>
    body { background-color: var(--bg); color: var(--ink); font-family: 'Tajawal', sans-serif; }

    .page-wrap {
      max-width: 1100px;
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

    /* ── Chat Layout ── */
    .chat-layout {
      display: grid;
      grid-template-columns: 280px 1fr;
      gap: 16px;
      margin-top: 16px;
    }

    /* ── Sidebar ── */
    .chat-sidebar {
      background: linear-gradient(145deg, var(--card-bg1), var(--card-bg2));
      border: 1px solid var(--border);
      border-radius: 18px;
      overflow: hidden;
      height: calc(100vh - 200px);
      display: flex;
      flex-direction: column;
    }

    .sidebar-title {
      padding: 16px 20px;
      border-bottom: 1px solid var(--border);
      font-family: 'Cinzel', serif;
      font-size: 14px;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .user-list {
      flex: 1;
      overflow-y: auto;
    }

    .user-item {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 14px 18px;
      cursor: pointer;
      border-bottom: 1px solid var(--border);
      transition: background 0.2s;
    }

    .user-item:hover { background: var(--surface2); }
    .user-item.active { background: var(--surface2); border-left: 3px solid var(--saffron); }

    .user-avatar {
      width: 42px;
      height: 42px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--clay), var(--saffron));
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 600;
      color: #0e0b08;
      font-size: 14px;
      flex-shrink: 0;
    }

    .user-info { flex: 1; min-width: 0; }
    .user-name { font-weight: 500; font-size: 14px; }
    .user-preview { font-size: 11px; color: var(--ink-muted); white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }

    /* ── Chat Area ── */
    .chat-main {
      background: linear-gradient(145deg, var(--card-bg1), var(--card-bg2));
      border: 1px solid var(--border);
      border-radius: 18px;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      height: calc(100vh - 200px);
    }

    .chat-header {
      padding: 16px 20px;
      border-bottom: 1px solid var(--border);
      display: flex;
      align-items: center;
      gap: 14px;
      background: var(--surface2);
    }

    .chat-header-info h3 {
      font-family: 'Cormorant Garamond', serif;
      font-size: 18px;
      font-weight: 600;
      margin: 0;
    }

    .chat-header-info p {
      font-size: 11px;
      color: var(--ink-muted);
      margin: 2px 0 0;
    }

    /* ── Messages ── */
    .messages-area {
      flex: 1;
      overflow-y: auto;
      padding: 20px;
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .messages-area::-webkit-scrollbar { width: 6px; }
    .messages-area::-webkit-scrollbar-track { background: transparent; }
    .messages-area::-webkit-scrollbar-thumb { background: var(--border); border-radius: 3px; }

    .msg-wrapper {
      display: flex;
      flex-direction: column;
      max-width: 70%;
    }

    .msg-wrapper.sent { align-self: flex-end; align-items: flex-end; }
    .msg-wrapper.received { align-self: flex-start; align-items: flex-start; }

    .msg-bubble {
      padding: 12px 18px;
      border-radius: 18px;
      font-size: 14px;
      line-height: 1.5;
      word-wrap: break-word;
    }

    .msg-wrapper.sent .msg-bubble {
      background: linear-gradient(135deg, var(--clay), var(--saffron));
      color: #0e0b08;
      border-bottom-right-radius: 6px;
    }

    .msg-wrapper.received .msg-bubble {
      background: var(--surface3);
      color: var(--ink);
      border-bottom-left-radius: 6px;
      border: 1px solid var(--border);
    }

    .msg-time {
      font-size: 10px;
      color: var(--ink-muted);
      margin-top: 4px;
    }

    .msg-wrapper.sent .msg-time { color: #555; }

    /* ── Input ── */
    .chat-input-area {
      padding: 16px 20px;
      border-top: 1px solid var(--border);
      display: flex;
      align-items: center;
      gap: 12px;
      background: var(--surface2);
    }

    .chat-input {
      flex: 1;
      background: var(--surface3);
      border: 1px solid var(--border);
      border-radius: 24px;
      padding: 12px 20px;
      font-size: 14px;
      color: var(--ink);
      font-family: 'Tajawal', sans-serif;
      outline: none;
      transition: border-color 0.2s;
    }

    .chat-input:focus { border-color: var(--saffron); }
    .chat-input::placeholder { color: var(--ink-muted); }

    .send-btn {
      padding: 12px 28px;
      border-radius: 24px;
      font-family: 'Cinzel', serif;
      font-size: 11px;
      font-weight: 700;
      background: linear-gradient(135deg, var(--clay), var(--saffron));
      color: #0e0b08;
      border: none;
      cursor: pointer;
      transition: all 0.2s;
      white-space: nowrap;
    }

    .send-btn:hover { transform: scale(1.03); box-shadow: 0 6px 20px rgba(193,68,14,0.4); }
    .send-btn:disabled { opacity: 0.5; cursor: not-allowed; transform: none; }

    /* ── Empty State ── */
    .empty-chat {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      color: var(--ink-muted);
      text-align: center;
      padding: 40px;
    }

    .empty-icon { font-size: 64px; margin-bottom: 16px; opacity: 0.5; }
    .empty-title { font-family: 'Cormorant Garamond', serif; font-size: 20px; color: var(--ink); margin-bottom: 8px; }
    .empty-text { font-size: 13px; }
  </style>
</head>

<body>
  @include('layouts.header')

  <div class="page-wrap">

    <!-- Page header -->
    <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:8px; gap:16px;">
      <div>
        <span class="label-cinzel">Conversations</span>
        <h2 style="font-family:'Cinzel',serif; font-size:22px; margin-top:4px; margin-bottom:4px;">Messages</h2>
        <p style="font-size:13px; color:var(--ink-muted);">Chat with artisans and employers</p>
      </div>
      <a href="{{ route('post.index') }}" style="display:inline-flex; align-items:center; gap:6px; padding:8px 18px; border-radius:11px; border:1px solid var(--border-h); color:var(--saffron); font-family:'Cinzel',serif; font-size:11px; font-weight:600; text-decoration:none; transition:all 0.2s; white-space:nowrap; margin-top:4px;" onmouseover="this.style.background='rgba(232,160,32,0.1)'" onmouseout="this.style.background='transparent'">
        <svg width="11" height="11" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="15 18 9 12 15 6"/></svg>
        Retour au feed
      </a>
    </div>

    <div class="chat-layout">
      <!-- Sidebar: User List -->
      <div class="chat-sidebar">
        <div class="sidebar-title">
          <span>💬</span> Contacts
        </div>
        <div class="user-list">
          @forelse($users as $user)
            <div class="user-item {{ $user->id == ($receiver->id ?? null) ? 'active' : '' }}" onclick="selectUser({{ $user->id }})">
              <div class="user-avatar">{{ strtoupper(substr($user->name, 0, 1)) }}</div>
              <div class="user-info">
                <div class="user-name">{{ $user->name }}</div>
                <div class="user-preview">Tap to chat</div>
              </div>
            </div>
          @empty
            <div style="padding: 30px 20px; text-align: center; color: var(--ink-muted);">
              <p style="font-size: 32px; margin-bottom: 12px;">👥</p>
              <p style="font-size: 13px;">No users available</p>
            </div>
          @endforelse
        </div>
      </div>

      <!-- Chat Area -->
      <div class="chat-main">
        @if(isset($receiver))
          <script>const RECEIVER_ID = {{ $receiver->id }};</script>

          <!-- Chat Header -->
          <div class="chat-header">
            <div class="user-avatar">{{ strtoupper(substr($receiver->name, 0, 1)) }}</div>
            <div class="chat-header-info">
              <h3>{{ $receiver->name }}</h3>
              <p>{{ $receiver->email }}</p>
            </div>
          </div>

          <!-- Messages -->
          <div class="messages-area" id="messages">
            @forelse($messages as $msg)
              <div class="msg-wrapper {{ $msg->sender_id == auth()->id() ? 'sent' : 'received' }}">
                <div class="msg-bubble">{{ $msg->message }}</div>
                <div class="msg-time">{{ $msg->created_at->format('H:i') }}</div>
              </div>
            @empty
              <div style="text-align: center; color: var(--ink-muted); padding: 40px;">
                <p style="font-size: 32px; margin-bottom: 12px;">💬</p>
                <p>Start a conversation with {{ $receiver->name }}</p>
              </div>
            @endforelse
          </div>

          <!-- Input -->
          <div class="chat-input-area">
            <input type="text" class="chat-input" id="messageInput" placeholder="Type a message..." onkeydown="handleEnter(event)">
            <button class="send-btn" onclick="sendMessage()" id="sendBtn">Send →</button>
          </div>

        @else
          <!-- Empty State -->
          <div class="empty-chat">
            <div class="empty-icon">💬</div>
            <div class="empty-title">Select a conversation</div>
            <p class="empty-text">Choose a user from the list to start chatting</p>
          </div>
        @endif
      </div>
    </div>

  </div>

  <script>
    const CSRF = document.querySelector('meta[name="csrf-token"]').content;

    // Theme
    (function(){var t=localStorage.getItem('7rayfi-theme')||'dark';document.documentElement.setAttribute('data-theme',t);setIcon(t);})();
    function toggleTheme(){var c=document.documentElement.getAttribute('data-theme'),n=c==='dark'?'light':'dark';document.documentElement.setAttribute('data-theme',n);localStorage.setItem('7rayfi-theme',n);setIcon(n);}
    function setIcon(t){var e=document.getElementById('ticon');if(e)e.textContent=t==='dark'?'☀️':'🌙';}

    // Select user
    function selectUser(userId) {
      window.location.href = '/chat?user=' + userId;
    }

    // Send message
    function sendMessage() {
      const input = document.getElementById('messageInput');
      const text = input.value.trim();
      const btn = document.getElementById('sendBtn');

      if (!text || typeof RECEIVER_ID === 'undefined') return;

      btn.disabled = true;

      fetch('/send-message', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': CSRF,
          'Accept': 'application/json'
        },
        body: JSON.stringify({
          receiver_id: RECEIVER_ID,
          message: text
        })
      })
      .then(res => res.json())
      .then(data => {
        if (data.success) {
          input.value = '';
          addMessage(text, 'sent');
        }
      })
      .catch(err => {
        console.error('Error:', err);
        alert('Failed to send message');
      })
      .finally(() => {
        btn.disabled = false;
        input.focus();
      });
    }

    // Add message to chat
    function addMessage(text, type) {
      const container = document.getElementById('messages');
      const wrapper = document.createElement('div');
      wrapper.className = 'msg-wrapper ' + type;

      const time = new Date().toLocaleTimeString('en-GB', {hour: '2-digit', minute: '2-digit'});

      wrapper.innerHTML = `
        <div class="msg-bubble">${text}</div>
        <div class="msg-time">${time}</div>
      `;

      container.appendChild(wrapper);
      container.scrollTop = container.scrollHeight;
    }

    // Handle Enter key
    function handleEnter(e) {
      if (e.key === 'Enter') {
        e.preventDefault();
        sendMessage();
      }
    }

    // Auto-scroll on load
    document.addEventListener('DOMContentLoaded', () => {
      const container = document.getElementById('messages');
      if (container) container.scrollTop = container.scrollHeight;
    });
  </script>
</body>
</html>
 