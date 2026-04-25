<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chat — 7RAYFI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Tajawal:wght@300;400;500;700&family=Cinzel:wght@400;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />

    <style>
        /* ══════════ CHAT SPECIFIC STYLES ══════════ */

        /* Chat Container */
        .chat-container {
            display: flex;
            flex-direction: column;
            height: calc(100vh - 140px);
            background: var(--surface1);
            border-radius: 16px;
            border: 1px solid var(--border);
            overflow: hidden;
        }

        /* Chat Header */
        .chat-header {
            padding: 16px 20px;
            background: var(--surface2);
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .chat-user-info {
            flex: 1;
        }

        .chat-user-name {
            font-family: 'Cormorant Garamond', serif;
            font-size: 18px;
            font-weight: 600;
            color: var(--ink);
        }

        .chat-user-status {
            font-size: 11px;
            color: var(--sage);
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .status-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--sage);
        }

        .status-dot.offline {
            background: var(--ink-muted);
        }

        /* Messages Area */
        .messages-area {
            flex: 1;
            overflow-y: auto;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .messages-area::-webkit-scrollbar {
            width: 6px;
        }

        .messages-area::-webkit-scrollbar-track {
            background: transparent;
        }

        .messages-area::-webkit-scrollbar-thumb {
            background: var(--border);
            border-radius: 3px;
        }

        /* Message Bubbles */
        .message-wrapper {
            display: flex;
            flex-direction: column;
            max-width: 70%;
        }

        .message-wrapper.sent {
            align-self: flex-end;
            align-items: flex-end;
        }

        .message-wrapper.received {
            align-self: flex-start;
            align-items: flex-start;
        }

        .message-bubble {
            padding: 12px 16px;
            border-radius: 18px;
            font-family: 'Tajawal', sans-serif;
            font-size: 14px;
            line-height: 1.5;
            word-wrap: break-word;
        }

        .message-wrapper.sent .message-bubble {
            background: linear-gradient(135deg, var(--clay), var(--saffron));
            color: #0e0b08;
            border-bottom-right-radius: 6px;
        }

        .message-wrapper.received .message-bubble {
            background: var(--surface3);
            color: var(--ink);
            border-bottom-left-radius: 6px;
            border: 1px solid var(--border);
        }

        .message-time {
            font-size: 10px;
            color: var(--ink-muted);
            margin-top: 4px;
            font-family: 'Tajawal', sans-serif;
        }

        /* Chat Input */
        .chat-input-area {
            padding: 16px 20px;
            background: var(--surface2);
            border-top: 1px solid var(--border);
            display: flex;
            align-items: center;
            gap: 12px;
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

        .chat-input:focus {
            border-color: rgba(232, 160, 32, 0.5);
        }

        .chat-input::placeholder {
            color: var(--ink-muted);
        }

        .send-btn {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--clay), var(--saffron));
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.2s, box-shadow 0.2s;
            flex-shrink: 0;
        }

        .send-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(232, 160, 32, 0.3);
        }

        .send-btn:active {
            transform: scale(0.95);
        }

        /* Conversations List */
        .conversations-list {
            display: flex;
            flex-direction: column;
        }

        .conversation-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px 16px;
            cursor: pointer;
            transition: background 0.2s;
            border-bottom: 1px solid var(--border);
        }

        .conversation-item:hover {
            background: var(--surface2);
        }

        .conversation-item.active {
            background: var(--surface2);
            border-left: 3px solid var(--saffron);
        }

        .conversation-info {
            flex: 1;
            min-width: 0;
        }

        .conversation-name {
            font-family: 'Cormorant Garamond', serif;
            font-size: 14px;
            font-weight: 600;
            color: var(--ink);
        }

        .conversation-preview {
            font-size: 12px;
            color: var(--ink-muted);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .conversation-meta {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 4px;
        }

        .conversation-time {
            font-size: 10px;
            color: var(--ink-dim);
        }

        .unread-badge {
            background: linear-gradient(135deg, var(--clay), var(--saffron));
            color: #0e0b08;
            font-size: 10px;
            font-weight: 600;
            padding: 2px 7px;
            border-radius: 10px;
            font-family: 'Tajawal', sans-serif;
        }

        /* Empty State */
        .empty-chat {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            color: var(--ink-muted);
            text-align: center;
            padding: 40px;
        }

        .empty-chat-icon {
            font-size: 64px;
            margin-bottom: 20px;
            opacity: 0.5;
        }

        .empty-chat-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 22px;
            font-weight: 600;
            color: var(--ink);
            margin-bottom: 8px;
        }

        .empty-chat-text {
            font-size: 13px;
            max-width: 280px;
        }

        /* Search Input */
        .search-box {
            padding: 14px 16px;
            border-bottom: 1px solid var(--border);
        }

        .search-input {
            width: 100%;
            background: var(--surface3);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 10px 14px;
            font-size: 13px;
            color: var(--ink);
            font-family: 'Tajawal', sans-serif;
            outline: none;
            transition: border-color 0.2s;
        }

        .search-input:focus {
            border-color: rgba(232, 160, 32, 0.5);
        }

        /* Typing Indicator */
        .typing-indicator {
            display: none;
            align-items: center;
            gap: 6px;
            padding: 8px 16px;
            font-size: 12px;
            color: var(--ink-muted);
            font-style: italic;
        }

        .typing-indicator.active {
            display: flex;
        }

        .typing-dots {
            display: flex;
            gap: 3px;
        }

        .typing-dots span {
            width: 5px;
            height: 5px;
            background: var(--saffron);
            border-radius: 50%;
            animation: typing 1.4s infinite ease-in-out;
        }

        .typing-dots span:nth-child(2) { animation-delay: 0.2s; }
        .typing-dots span:nth-child(3) { animation-delay: 0.4s; }

        @keyframes typing {
            0%, 60%, 100% { transform: translateY(0); opacity: 0.4; }
            30% { transform: translateY(-4px); opacity: 1; }
        }

        /* Date Separator */
        .date-separator {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 16px 0;
        }

        .date-separator::before,
        .date-separator::after {
            content: '';
            flex: 1;
            height: 1px;
            background: var(--border);
        }

        .date-separator span {
            font-size: 11px;
            color: var(--ink-muted);
            font-family: 'Cinzel', serif;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Online Users */
        .online-user {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 16px;
            transition: background 0.2s;
            cursor: pointer;
        }

        .online-user:hover {
            background: var(--surface2);
        }

        .online-avatar-wrapper {
            position: relative;
        }

        .online-status-indicator {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 12px;
            height: 12px;
            background: var(--sage);
            border: 2px solid var(--surface1);
            border-radius: 50%;
        }
    </style>
</head>

<body>

    <!-- ══════════ NAVBAR ══════════ -->
    @include('layouts/header')


    <!-- ══════════ 4-COLUMN GRID ══════════ -->
    <div class="grid4">

        <!-- ─── COL 1: Profile sidebar ─── -->
        @include('layouts/sidebar')

        <!-- ─── COL 2: Conversations List ─── -->
        <aside class="col2" style="position:sticky;top:78px;align-self:start;height:calc(100vh - 100px);display:flex;flex-direction:column;">

            <!-- Search -->
            <div class="search-box">
                <input type="text" class="search-input" placeholder="🔍 Search conversations..." id="search-conversations">
            </div>

            <!-- Conversations -->
            <div class="conversations-list" style="flex:1;overflow-y:auto;" id="conversations-list">
                @if(isset($conversations) && count($conversations) > 0)
                    @foreach($conversations as $conv)
                        <div class="conversation-item {{ $conv->user_id == ($receiver->id ?? '') ? 'active' : '' }}"
                             data-user-id="{{ $conv->user_id }}"
                             onclick="selectConversation({{ $conv->user_id }})">
                            <div class="avatar" style="width:44px;height:44px;font-size:14px;background:linear-gradient(135deg,var(--indigo),var(--indigo-lt));">
                                {{ strtoupper(substr($conv->name, 0, 2)) }}
                            </div>
                            <div class="conversation-info">
                                <div class="conversation-name">{{ $conv->name }}</div>
                                <div class="conversation-preview">{{ $conv->last_message ?? 'Start a conversation...' }}</div>
                            </div>
                            <div class="conversation-meta">
                                <span class="conversation-time">{{ $conv->last_time ?? '' }}</span>
                                @if($conv->unread_count > 0)
                                    <span class="unread-badge">{{ $conv->unread_count }}</span>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @else
                    <div style="padding:30px;text-align:center;color:var(--ink-muted);">
                        <p style="font-size:32px;margin-bottom:12px;">💬</p>
                        <p style="font-size:13px;font-family:'Tajawal',sans-serif;">No conversations yet</p>
                        <p style="font-size:11px;margin-top:6px;">Start chatting with someone!</p>
                    </div>
                @endif
            </div>

        </aside>

        <!-- ─── COL 3: CHAT AREA ─── -->
        <main style="min-width:0;">

            @if(isset($receiver))
                <!-- Chat Container -->
                <div class="chat-container">
                    <!-- Chat Header -->
                    <div class="chat-header">
                        <div class="avatar" style="width:46px;height:46px;font-size:15px;background:linear-gradient(135deg,var(--indigo),var(--indigo-lt));">
                            {{ strtoupper(substr($receiver->name, 0, 2)) }}
                        </div>
                        <div class="chat-user-info">
                            <div class="chat-user-name">{{ $receiver->name }}</div>
                            <div class="chat-user-status">
                                <span class="status-dot {{ $receiver->is_online ?? 'offline' }}"></span>
                                <span>{{ ($receiver->is_online ?? false) ? 'Online' : 'Last seen recently' }}</span>
                            </div>
                        </div>
                        <div style="display:flex;gap:10px;">
                            <button style="width:36px;height:36px;border-radius:10px;background:var(--surface3);border:1px solid var(--border);cursor:pointer;display:flex;align-items:center;justify-content:center;color:var(--ink);transition:all 0.2s;"
                                    onmouseover="this.style.borderColor='rgba(232,160,32,0.5)'"
                                    onmouseout="this.style.borderColor='var(--border)'">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                </svg>
                            </button>
                            <button style="width:36px;height:36px;border-radius:10px;background:var(--surface3);border:1px solid var(--border);cursor:pointer;display:flex;align-items:center;justify-content:center;color:var(--ink);transition:all 0.2s;"
                                    onmouseover="this.style.borderColor='rgba(232,160,32,0.5)'"
                                    onmouseout="this.style.borderColor='var(--border)'">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Messages Area -->
                    <div class="messages-area" id="messages-area">
                        <!-- Date Separator Example -->
                        <div class="date-separator">
                            <span>Today</span>
                        </div>

                        @if(isset($messages) && count($messages) > 0)
                            @foreach($messages as $msg)
                                <div class="message-wrapper {{ $msg->sender_id == auth()->id() ? 'sent' : 'received' }}">
                                    <div class="message-bubble">{{ $msg->message }}</div>
                                    <div class="message-time">{{ $msg->created_at->format('H:i') }}</div>
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <!-- Typing Indicator -->
                    <div class="typing-indicator" id="typing-indicator">
                        <div class="typing-dots">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <span>{{ $receiver->name ?? 'User' }} is typing...</span>
                    </div>

                    <!-- Chat Input -->
                    <div class="chat-input-area">
                        <button style="width:40px;height:40px;border-radius:50%;background:var(--surface3);border:1px solid var(--border);cursor:pointer;display:flex;align-items:center;justify-content:center;color:var(--ink-dim);transition:all 0.2s;"
                                onmouseover="this.style.borderColor='rgba(232,160,32,0.5)'"
                                onmouseout="this.style.borderColor='var(--border)'">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"/>
                            </svg>
                        </button>
                        <input type="text" class="chat-input" id="message-input" placeholder="Type a message..."
                               onkeypress="handleKeyPress(event)" autocomplete="off">
                        <button style="width:40px;height:40px;border-radius:50%;background:var(--surface3);border:1px solid var(--border);cursor:pointer;display:flex;align-items:center;justify-content:center;color:var(--ink-dim);transition:all 0.2s;"
                                onmouseover="this.style.borderColor='rgba(232,160,32,0.5)'"
                                onmouseout="this.style.borderColor='var(--border)'">
                            <span style="font-size:18px;">😊</span>
                        </button>
                        <button class="send-btn" onclick="sendMessage()" id="send-btn">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#0e0b08" stroke-width="2.5">
                                <path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            @else
                <!-- Empty State -->
                <div class="chat-container">
                    <div class="empty-chat">
                        <div class="empty-chat-icon">💬</div>
                        <div class="empty-chat-title">Select a Conversation</div>
                        <p class="empty-chat-text">Choose a contact from the list to start messaging, or find new people to connect with.</p>
                        <button class="btn-create" style="margin-top:20px;">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <path d="M12 5v14M5 12h14"/>
                            </svg>
                            New Conversation
                        </button>
                    </div>
                </div>
            @endif

        </main>

        <!-- ─── COL 4: Right sidebar ─── -->
        <aside class="col4" style="position:sticky;top:78px;align-self:start;">

            <!-- Online Now -->
            <div class="card" style="margin-bottom:14px;">
                <div class="card-accent accent-fire"></div>
                <div class="card-header card-header-fire"><span class="bar bar-fire"></span>Online Now</div>
                @if(isset($onlineUsers) && count($onlineUsers) > 0)
                    @foreach($onlineUsers as $user)
                        <div class="online-user" onclick="selectConversation({{ $user->id }})">
                            <div class="online-avatar-wrapper">
                                <div class="avatar" style="width:36px;height:36px;font-size:11px;background:linear-gradient(135deg,var(--sage),#2d5c3e);">
                                    {{ strtoupper(substr($user->name, 0, 2)) }}
                                </div>
                                <span class="online-status-indicator"></span>
                            </div>
                            <div>
                                <div class="fn">{{ $user->name }}</div>
                                <div class="fs">{{ $user->skill ?? 'Available' }}</div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div style="padding:14px 16px;text-align:center;color:var(--ink-muted);">
                        <p style="font-size:11px;">No contacts online</p>
                    </div>
                @endif
                <div style="padding:10px 16px;">
                    <button style="width:100%;text-align:center;font-size:11px;color:var(--saffron);background:none;border:none;cursor:pointer;font-family:'Cinzel',serif;">
                        View all contacts →
                    </button>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="card" style="margin-bottom:14px;">
                <div class="card-accent accent-ocean"></div>
                <div class="card-header card-header-ocean"><span class="bar bar-ocean"></span>Quick Actions</div>
                <div style="padding:12px 16px;">
                    <button style="width:100%;display:flex;align-items:center;gap:10px;padding:10px 12px;background:var(--surface3);border:1px solid var(--border);border-radius:10px;cursor:pointer;margin-bottom:8px;color:var(--ink);font-family:'Tajawal',sans-serif;font-size:13px;transition:all 0.2s;"
                            onmouseover="this.style.borderColor='rgba(232,160,32,0.5)'"
                            onmouseout="this.style.borderColor='var(--border)'">
                        <span style="font-size:16px;">📁</span>
                        Shared Files
                    </button>
                    <button style="width:100%;display:flex;align-items:center;gap:10px;padding:10px 12px;background:var(--surface3);border:1px solid var(--border);border-radius:10px;cursor:pointer;margin-bottom:8px;color:var(--ink);font-family:'Tajawal',sans-serif;font-size:13px;transition:all 0.2s;"
                            onmouseover="this.style.borderColor='rgba(232,160,32,0.5)'"
                            onmouseout="this.style.borderColor='var(--border)'">
                        <span style="font-size:16px;">🖼️</span>
                        Shared Photos
                    </button>
                    <button style="width:100%;display:flex;align-items:center;gap:10px;padding:10px 12px;background:var(--surface3);border:1px solid var(--border);border-radius:10px;cursor:pointer;color:var(--ink);font-family:'Tajawal',sans-serif;font-size:13px;transition:all 0.2s;"
                            onmouseover="this.style.borderColor='rgba(232,160,32,0.5)'"
                            onmouseout="this.style.borderColor='var(--border)'">
                        <span style="font-size:16px;">🔔</span>
                        Notifications
                    </button>
                </div>
            </div>

            <!-- Chat Stats -->
            <div class="card" style="margin-bottom:14px;">
                <div class="card-accent accent-fire"></div>
                <div class="card-header card-header-fire"><span class="bar bar-fire"></span>Chat Stats</div>
                <div style="padding:14px 16px;">
                    <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:12px;">
                        <span style="font-size:12px;color:var(--ink-dim);">💬 Total Messages</span>
                        <span style="font-family:'Cinzel',serif;font-size:13px;color:var(--saffron);">{{ $totalMessages ?? 0 }}</span>
                    </div>
                    <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:12px;">
                        <span style="font-size:12px;color:var(--ink-dim);">👥 Conversations</span>
                        <span style="font-family:'Cinzel',serif;font-size:13px;color:var(--sage);">{{ $totalConversations ?? 0 }}</span>
                    </div>
                    <div style="display:flex;align-items:center;justify-content:space-between;">
                        <span style="font-size:12px;color:var(--ink-dim);">⏰ Response Time</span>
                        <span style="font-family:'Cinzel',serif;font-size:13px;color:var(--clay);">~5 min</span>
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


    <script>
        /* ══════════ CONFIG ══════════ */
        const authId = {{ auth()->id() }};
        const receiverId = {{ $receiver->id ?? 'null' }};
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';

        /* ══════════ THEME ══════════ */
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

        /* ══════════ CHAT FUNCTIONS ══════════ */

        // Initialize Echo for real-time messaging
        @if(config('broadcasting.default') === 'pusher')
        Echo.private(`chat.${authId}`)
            .listen('MessageSent', (e) => {
                // Only append if we're viewing the right conversation
                if (receiverId && e.message.sender_id == receiverId) {
                    appendMessage(e.message, 'received');
                    hideTypingIndicator();
                } else {
                    // Update conversation list with new message badge
                    updateConversationBadge(e.message.sender_id);
                }
            })
            .listenForWhisper('typing', (e) => {
                if (e.userId == receiverId) {
                    showTypingIndicator();
                }
            });
        @endif

        // Send message
        function sendMessage() {
            const input = document.getElementById('message-input');
            const message = input.value.trim();

            if (!message || !receiverId) return;

            // Send to server
            axios.post('/send-message', {
                receiver_id: receiverId,
                message: message,
                _token: csrfToken
            })
            .then(response => {
                appendMessage(response.data, 'sent');
                input.value = '';
            })
            .catch(error => {
                console.error('Error sending message:', error);
            });
        }

        // Append message to chat
        function appendMessage(msg, type) {
            const container = document.getElementById('messages-area');
            const wrapper = document.createElement('div');
            wrapper.className = `message-wrapper ${type}`;

            const messageText = msg.message || msg;
            const messageTime = msg.created_at ? new Date(msg.created_at).toLocaleTimeString('en-US', {hour: '2-digit', minute:'2-digit'}) : new Date().toLocaleTimeString('en-US', {hour: '2-digit', minute:'2-digit'});

            wrapper.innerHTML = `
                <div class="message-bubble">${escapeHtml(messageText)}</div>
                <div class="message-time">${messageTime}</div>
            `;

            container.appendChild(wrapper);
            container.scrollTop = container.scrollHeight;
        }

        // Escape HTML to prevent XSS
        function escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }

        // Handle Enter key
        function handleKeyPress(event) {
            if (event.key === 'Enter' && !event.shiftKey) {
                event.preventDefault();
                sendMessage();
            }
        }

        // Select conversation
        function selectConversation(userId) {
            window.location.href = `/chat?user=${userId}`;
        }

        // Typing indicator
        let typingTimeout;
        function showTypingIndicator() {
            const indicator = document.getElementById('typing-indicator');
            if (indicator) {
                indicator.classList.add('active');
                clearTimeout(typingTimeout);
                typingTimeout = setTimeout(hideTypingIndicator, 3000);
            }
        }

        function hideTypingIndicator() {
            const indicator = document.getElementById('typing-indicator');
            if (indicator) {
                indicator.classList.remove('active');
            }
        }

        // Notify typing
        @if(isset($receiver) && config('broadcasting.default') === 'pusher')
        const typingChannel = Echo.private(`chat.${receiverId}`);
        document.getElementById('message-input')?.addEventListener('input', function() {
            typingChannel.whisper('typing', {
                userId: authId
            });
        });
        @endif

        // Update conversation badge
        function updateConversationBadge(userId) {
            const conv = document.querySelector(`[data-user-id="${userId}"]`);
            if (conv) {
                let badge = conv.querySelector('.unread-badge');
                if (!badge) {
                    const meta = conv.querySelector('.conversation-meta');
                    badge = document.createElement('span');
                    badge.className = 'unread-badge';
                    badge.textContent = '1';
                    meta.appendChild(badge);
                } else {
                    badge.textContent = parseInt(badge.textContent) + 1;
                }
            }
        }

        // Scroll to bottom on load
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('messages-area');
            if (container) {
                container.scrollTop = container.scrollHeight;
            }
        });

        // Search conversations
        document.getElementById('search-conversations')?.addEventListener('input', function(e) {
            const query = e.target.value.toLowerCase();
            document.querySelectorAll('.conversation-item').forEach(item => {
                const name = item.querySelector('.conversation-name').textContent.toLowerCase();
                item.style.display = name.includes(query) ? 'flex' : 'none';
            });
        });
    </script>

</body>

</html>
