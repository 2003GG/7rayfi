<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Network - Professional Network</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in { animation: fadeIn 0.5s ease-out; }
        .hover-lift { transition: all 0.3s ease; }
        .hover-lift:hover { transform: translateY(-2px); box-shadow: 0 4px 20px rgba(139, 92, 246, 0.3); }
    </style>
</head>
<body class="bg-[url('https://i.pinimg.com/1200x/16/a6/b9/16a6b934718c3b3dce47bb0c22a1cf69.jpg')] bg-center h-screen">
    <!-- Header -->
        <header class="bg-gray-800 border-b border-gray-700 sticky top-0 z-50 shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex items-center justify-between h-14">
                <div class="flex items-center gap-4">
                    <img src="logo.png" alt="" class="h-14">
                    <div class="relative hidden md:block">
                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <input type="text" placeholder="Search" class="pl-10 pr-4 py-2 w-64 bg-gray-700 text-white placeholder-gray-400 rounded border-none focus:bg-gray-600 focus:ring-2 focus:ring-purple-500 transition">
                    </div>
                </div>
                
                <nav class="flex items-center gap-8">
                    <a href="home.html" class="nav-item flex flex-col items-center gap-1 text-gray-400 hover:text-white transition group">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        <span class="text-xs hidden md:block">Home</span>
                    </a>
                    <a href="network.html" class="nav-item flex flex-col items-center gap-1 text-gray-400 hover:text-white transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <span class="text-xs hidden md:block">Network</span>
                    </a>
                    <a href="#" class="nav-item flex flex-col items-center gap-1 text-gray-400 hover:text-white transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span class="text-xs hidden md:block">Jobs</span>
                    </a>
                    <a href="#" class="nav-item flex flex-col items-center gap-1 text-gray-400 hover:text-white transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                        <span class="text-xs hidden md:block">Messaging</span>
                    </a>
                    <a href="#" class="nav-item flex flex-col items-center gap-1 text-gray-400 hover:text-white transition relative">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                        </svg>
                        <span class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full"></span>
                        <span class="text-xs hidden md:block">Notifications</span>
                    </a>
                    <div class="flex flex-col items-center gap-1 text-gray-400 hover:text-white transition cursor-pointer">
                        <div class="w-6 h-6 bg-gradient-to-br from-purple-600 to-blue-600 rounded-full flex items-center justify-center text-white text-xs font-semibold">
                            YO
                        </div>
                        <span class="text-xs hidden md:block">Me</span>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 py-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
            <!-- Left Sidebar -->
            <aside class="lg:col-span-3">
                <!-- Manage Network Card -->
                <div class="bg-gray-800 rounded-lg shadow-lg border border-gray-700 overflow-hidden fade-in">
                    <div class="p-4 border-b border-gray-700">
                        <h3 class="font-semibold text-white">Manage my network</h3>
                    </div>
                    <div class="divide-y divide-gray-700">
                        <a href="#" class="flex items-center justify-between px-4 py-3 hover:bg-gray-700 transition">
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
                                </svg>
                                <span class="text-sm text-gray-300">Connections</span>
                            </div>
                            <span class="text-sm text-gray-400">523</span>
                        </a>
                        <a href="#" class="flex items-center justify-between px-4 py-3 hover:bg-gray-700 transition">
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                                </svg>
                                <span class="text-sm text-gray-300">Contacts</span>
                            </div>
                            <span class="text-sm text-gray-400">1,234</span>
                        </a>
                        <a href="#" class="flex items-center justify-between px-4 py-3 hover:bg-gray-700 transition">
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm text-gray-300">Following & followers</span>
                            </div>
                        </a>
                        <a href="#" class="flex items-center justify-between px-4 py-3 hover:bg-gray-700 transition">
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                </svg>
                                <span class="text-sm text-gray-300">Groups</span>
                            </div>
                            <span class="text-sm text-gray-400">12</span>
                        </a>
                        <a href="#" class="flex items-center justify-between px-4 py-3 hover:bg-gray-700 transition">
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm text-gray-300">Events</span>
                            </div>
                            <span class="text-sm text-gray-400">3</span>
                        </a>
                        <a href="#" class="flex items-center justify-between px-4 py-3 hover:bg-gray-700 transition">
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm text-gray-300">Pages</span>
                            </div>
                            <span class="text-sm text-gray-400">5</span>
                        </a>
                    </div>
                </div>
            </aside>

            <!-- Main Content -->
            <div class="lg:col-span-9">
                <!-- Invitations Section -->
                <div class="bg-gray-800 rounded-lg shadow-lg border border-gray-700 p-6 mb-6 fade-in">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-lg font-semibold text-white">Invitations</h2>
                        <a href="#" class="text-sm text-purple-400 hover:text-purple-300">See all (24)</a>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Invitation Card 1 -->
                        <div class="bg-gray-700 rounded-lg p-4 hover-lift">
                            <div class="flex gap-3">
                                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-teal-500 rounded-full flex items-center justify-center text-white font-semibold text-xl flex-shrink-0">
                                    JD
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h3 class="font-semibold text-white mb-1">Jessica Davis</h3>
                                    <p class="text-sm text-gray-400 mb-2">Product Manager at Innovate Inc</p>
                                    <p class="text-xs text-gray-500">12 mutual connections</p>
                                </div>
                            </div>
                            <div class="flex gap-2 mt-4">
                                <button  class="flex-1 px-4 py-2 bg-purple-600 text-white rounded-full hover:bg-purple-700 transition font-medium text-sm">
                                    Accept
                                </button>
                                <button  class="flex-1 px-4 py-2 bg-gray-600 text-white rounded-full hover:bg-gray-500 transition font-medium text-sm">
                                    Ignore
                                </button>
                            </div>
                        </div>

                        <!-- Invitation Card 2 -->
                        <div class="bg-gray-700 rounded-lg p-4 hover-lift">
                            <div class="flex gap-3">
                                <div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-full flex items-center justify-center text-white font-semibold text-xl flex-shrink-0">
                                    RK
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h3 class="font-semibold text-white mb-1">Robert Kim</h3>
                                    <p class="text-sm text-gray-400 mb-2">Software Engineer at TechVision</p>
                                    <p class="text-xs text-gray-500">8 mutual connections</p>
                                </div>
                            </div>
                            <div class="flex gap-2 mt-4">
                                <button  class="flex-1 px-4 py-2 bg-purple-600 text-white rounded-full hover:bg-purple-700 transition font-medium text-sm">
                                    Accept
                                </button>
                                <button  class="flex-1 px-4 py-2 bg-gray-600 text-white rounded-full hover:bg-gray-500 transition font-medium text-sm">
                                    Ignore
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- People You May Know -->
                <div class="bg-gray-800 rounded-lg shadow-lg border border-gray-700 p-6 fade-in" style="animation-delay: 0.1s">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-lg font-semibold text-white">People you may know</h2>
                        <a href="#" class="text-sm text-purple-400 hover:text-purple-300">See all</a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <!-- Suggestion Card 1 -->
                        <div class="bg-gray-700 rounded-lg overflow-hidden hover-lift">
                            <div class="h-16 bg-gradient-to-r from-purple-600 to-blue-600"></div>
                            <div class="px-4 pb-4 -mt-8">
                                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-full flex items-center justify-center text-white font-semibold text-xl border-4 border-gray-700 mb-3">
                                    <img src="https://i.pinimg.com/736x/8c/d0/d3/8cd0d300a50038935af1dbc72f01a2d0.jpg" alt="" class="h-full w-full rounded-full">
                                </div>
                                <h3 class="font-semibold text-white mb-1">Ali zlayji</h3>
                                <p class="text-sm text-gray-400 mb-2">zlayji</p>
                                <p class="text-xs text-gray-500 mb-4">15 mutual connections</p>
                                <button  class="w-full px-4 py-2 border-2 border-purple-500 text-purple-400 rounded-full hover:bg-purple-500 hover:text-white transition font-medium text-sm">
                                    Connect
                                </button>
                            </div>
                        </div>

                        <!-- Suggestion Card 2 -->
                        <div class="bg-gray-700 rounded-lg overflow-hidden hover-lift">
                            <div class="h-16 bg-gradient-to-r from-pink-600 to-purple-600"></div>
                            <div class="px-4 pb-4 -mt-8">
                                <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-red-500 rounded-full flex items-center justify-center text-white font-semibold text-xl border-4 border-gray-700 mb-3">
                                    ML
                                </div>
                                <h3 class="font-semibold text-white mb-1">Maria Lopez</h3>
                                <p class="text-sm text-gray-400 mb-2">Marketing Director at BrandPro</p>
                                <p class="text-xs text-gray-500 mb-4">22 mutual connections</p>
                                <button  class="w-full px-4 py-2 border-2 border-purple-500 text-purple-400 rounded-full hover:bg-purple-500 hover:text-white transition font-medium text-sm">
                                    Connect
                                </button>
                            </div>
                        </div>

                        <!-- Suggestion Card 3 -->
                        <div class="bg-gray-700 rounded-lg overflow-hidden hover-lift">
                            <div class="h-16 bg-gradient-to-r from-green-600 to-teal-600"></div>
                            <div class="px-4 pb-4 -mt-8">
                                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-500 rounded-full flex items-center justify-center text-white font-semibold text-xl border-4 border-gray-700 mb-3">
                                    DW
                                </div>
                                <h3 class="font-semibold text-white mb-1">David Wang</h3>
                                <p class="text-sm text-gray-400 mb-2">Data Scientist at Analytics Co</p>
                                <p class="text-xs text-gray-500 mb-4">9 mutual connections</p>
                                <button  class="w-full px-4 py-2 border-2 border-purple-500 text-purple-400 rounded-full hover:bg-purple-500 hover:text-white transition font-medium text-sm">
                                    Connect
                                </button>
                            </div>
                        </div>

                        <!-- Suggestion Card 4 -->
                        <div class="bg-gray-700 rounded-lg overflow-hidden hover-lift">
                            <div class="h-16 bg-gradient-to-r from-orange-600 to-red-600"></div>
                            <div class="px-4 pb-4 -mt-8">
                                <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-yellow-500 rounded-full flex items-center justify-center text-white font-semibold text-xl border-4 border-gray-700 mb-3">
                                    SP
                                </div>
                                <h3 class="font-semibold text-white mb-1">Sophie Patel</h3>
                                <p class="text-sm text-gray-400 mb-2">Senior Developer at CodeBase</p>
                                <p class="text-xs text-gray-500 mb-4">18 mutual connections</p>
                                <button  class="w-full px-4 py-2 border-2 border-purple-500 text-purple-400 rounded-full hover:bg-purple-500 hover:text-white transition font-medium text-sm">
                                    Connect
                                </button>
                            </div>
                        </div>

                        <!-- Suggestion Card 5 -->
                        <div class="bg-gray-700 rounded-lg overflow-hidden hover-lift">
                            <div class="h-16 bg-gradient-to-r from-indigo-600 to-purple-600"></div>
                            <div class="px-4 pb-4 -mt-8">
                                <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-500 rounded-full flex items-center justify-center text-white font-semibold text-xl border-4 border-gray-700 mb-3">
                                    JM
                                </div>
                                <h3 class="font-semibold text-white mb-1">James Miller</h3>
                                <p class="text-sm text-gray-400 mb-2">Business Analyst at FinTech Pro</p>
                                <p class="text-xs text-gray-500 mb-4">11 mutual connections</p>
                                <button  class="w-full px-4 py-2 border-2 border-purple-500 text-purple-400 rounded-full hover:bg-purple-500 hover:text-white transition font-medium text-sm">
                                    Connect
                                </button>
                            </div>
                        </div>

                        <!-- Suggestion Card 6 -->
                        <div class="bg-gray-700 rounded-lg overflow-hidden hover-lift">
                            <div class="h-16 bg-gradient-to-r from-cyan-600 to-blue-600"></div>
                            <div class="px-4 pb-4 -mt-8">
                                <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-full flex items-center justify-center text-white font-semibold text-xl border-4 border-gray-700 mb-3">
                                    EN
                                </div>
                                <h3 class="font-semibold text-white mb-1">Emma Nelson</h3>
                                <p class="text-sm text-gray-400 mb-2">Content Strategist at MediaHub</p>
                                <p class="text-xs text-gray-500 mb-4">7 mutual connections</p>
                                <button  class="w-full px-4 py-2 border-2 border-purple-500 text-purple-400 rounded-full hover:bg-purple-500 hover:text-white transition font-medium text-sm">
                                    Connect
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>