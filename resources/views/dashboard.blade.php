<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Network</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body class="bg-[url('https://i.pinimg.com/1200x/16/a6/b9/16a6b934718c3b3dce47bb0c22a1cf69.jpg')]  bg-center h-screen">
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
                    <a href="#" class="nav-item flex flex-col items-center gap-1 text-gray-400 hover:text-white transition group">
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
                <!-- Profile Card -->
                <div class="bg-gray-800 rounded-lg shadow-lg border border-gray-700 overflow-hidden mb-4 hover-lift fade-in">
                    <div class="h-16 bg-gradient-to-r from-purple-600 to-blue-600"></div>
                    <div class="px-4 pb-4 -mt-8">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-600 to-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold border-4 border-gray-800">
                            YO
                        </div>
                        <h3 class="mt-3 font-semibold text-white">Your Name</h3>
                        <p class="text-sm text-gray-400 mt-1">Professional Title | Industry Expert</p>
                    </div>
                    <div class="border-t border-gray-700 px-4 py-3 hover:bg-gray-700 transition cursor-pointer">
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-400">Profile views</span>
                            <span class="text-purple-400 font-semibold">142</span>
                        </div>
                    </div>
                    <div class="border-t border-gray-700 px-4 py-3 hover:bg-gray-700 transition cursor-pointer">
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-400">Post impressions</span>
                            <span class="text-purple-400 font-semibold">1,234</span>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="bg-gray-800 rounded-lg shadow-lg border border-gray-700 p-4 fade-in" style="animation-delay: 0.1s">
                    <h3 class="font-semibold text-white mb-3">Quick Links</h3>
                    <div class="space-y-2">
                        <a href="#" class="flex items-center gap-2 text-sm text-gray-400 hover:text-purple-400 transition">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                            </svg>
                            My Groups
                        </a>
                        <a href="#" class="flex items-center gap-2 text-sm text-gray-400 hover:text-purple-400 transition">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z"></path>
                            </svg>
                            Events
                        </a>
                        <a href="#" class="flex items-center gap-2 text-sm text-gray-400 hover:text-purple-400 transition">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                            </svg>
                            Newsletters
                        </a>
                    </div>
                </div>
            </aside>

            <!-- Main Feed -->
            <div class="lg:col-span-6">
                <!-- Create Post -->
                <div class="bg-gray-800 rounded-lg shadow-lg border border-gray-700 p-4 mb-4 fade-in">
                    <div class="flex gap-3">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-600 to-blue-600 rounded-full flex items-center justify-center text-white font-semibold flex-shrink-0">
                            YO
                        </div>
                        <button onclick="document.getElementById('postInput').focus()" class="flex-1 text-left px-4 py-3 bg-gray-700 hover:bg-gray-600 rounded-full text-gray-400 transition">
                            Start a post...
                        </button>
                    </div>
                    <div class="mt-4 pt-4 border-t border-gray-700">
                        <div class="flex items-center justify-around">
                            <button class="flex items-center gap-2 px-4 py-2 hover:bg-gray-700 rounded transition text-gray-400">
                                <svg class="w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm font-medium hidden sm:block">Photo</span>
                            </button>
                            <button class="flex items-center gap-2 px-4 py-2 hover:bg-gray-700 rounded transition text-gray-400">
                                <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm3 2h6v4H7V5zm8 8v2h1v-2h-1zm-2-2H7v4h6v-4zm2 0h1V9h-1v2zm1-4V5h-1v2h1zM5 5v2H4V5h1zm0 4H4v2h1V9zm-1 4h1v2H4v-2z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm font-medium hidden sm:block">Video</span>
                            </button>
                            <button class="flex items-center gap-2 px-4 py-2 hover:bg-gray-700 rounded transition text-gray-400">
                                <svg class="w-5 h-5 text-orange-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm font-medium hidden sm:block">Event</span>
                            </button>
                            <button class="flex items-center gap-2 px-4 py-2 hover:bg-gray-700 rounded transition text-gray-400">
                                <svg class="w-5 h-5 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm3.293 1.293a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 01-1.414-1.414L7.586 10 5.293 7.707a1 1 0 010-1.414zM11 12a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm font-medium hidden sm:block">Article</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Posts Feed -->
                <div id="postsFeed">
                    <!-- Post 1 -->
                    <article class="bg-gray-800 rounded-lg shadow-lg border border-gray-700 mb-4 hover-lift fade-in" style="animation-delay: 0.1s">
                        <div class="p-4">
                            <div class="flex items-start gap-3">
                                <div class="w-12 h-12 bg-gradient-to-br from-pink-500 to-orange-500 rounded-full flex items-center justify-center text-white font-semibold flex-shrink-0">
                                    SC
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-start justify-between">
                                        <div>
                                            <h3 class="font-semibold text-white hover:text-purple-400 cursor-pointer transition">Sarah Chen</h3>
                                            <p class="text-sm text-gray-400">Senior Product Designer at TechCorp</p>
                                            <p class="text-xs text-gray-500 mt-1">2h • 🌐</p>
                                        </div>
                                        <button class="text-gray-500 hover:text-gray-300 transition">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <p class="mt-3 text-gray-300 leading-relaxed">
                                        Excited to share that our team just launched a new feature that improves accessibility for over 1M users! The journey from concept to launch taught me valuable lessons about inclusive design. 🚀
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="px-4 py-2 flex items-center justify-between text-sm text-gray-400 border-t border-b border-gray-700">
                            <span class="hover:text-purple-400 cursor-pointer transition">234 likes</span>
                            <div class="flex gap-3">
                                <span class="hover:text-purple-400 cursor-pointer transition">42 comments</span>
                                <span class="hover:text-purple-400 cursor-pointer transition">18 shares</span>
                            </div>
                        </div>

                        <div class="p-2 flex items-center justify-around">
                            <button onclick="toggleLike(this)" class="like-btn flex items-center gap-2 px-4 py-2 hover:bg-gray-700 rounded transition text-gray-400 flex-1 justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                </svg>
                                <span class="font-medium text-sm">Like</span>
                            </button>
                            <button class="flex items-center gap-2 px-4 py-2 hover:bg-gray-700 rounded transition text-gray-400 flex-1 justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                                <span class="font-medium text-sm">Comment</span>
                            </button>
                            <button class="flex items-center gap-2 px-4 py-2 hover:bg-gray-700 rounded transition text-gray-400 flex-1 justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                                </svg>
                                <span class="font-medium text-sm">Share</span>
                            </button>
                            <button class="flex items-center gap-2 px-4 py-2 hover:bg-gray-700 rounded transition text-gray-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                            </button>
                        </div>
                    </article>

                    <!-- Post 2 -->
                    <article class="bg-gray-800 rounded-lg shadow-lg border border-gray-700 mb-4 hover-lift fade-in" style="animation-delay: 0.2s">
                        <div class="p-4">
                            <div class="flex items-start gap-3">
                                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-full flex items-center justify-center text-white font-semibold flex-shrink-0">
                                    MR
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-start justify-between">
                                        <div>
                                            <h3 class="font-semibold text-white hover:text-purple-400 cursor-pointer transition">Marcus Rodriguez</h3>
                                            <p class="text-sm text-gray-400">Engineering Manager | AI & Machine Learning</p>
                                            <p class="text-xs text-gray-500 mt-1">5h • 🌐</p>
                                        </div>
                                        <button class="text-gray-500 hover:text-gray-300 transition">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <p class="mt-3 text-gray-300 leading-relaxed">
                                        Looking for talented ML engineers to join our growing team. We're building the next generation of AI-powered solutions. Drop a comment or DM if interested!
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="px-4 py-2 flex items-center justify-between text-sm text-gray-400 border-t border-b border-gray-700">
                            <span class="hover:text-purple-400 cursor-pointer transition">156 likes</span>
                            <div class="flex gap-3">
                                <span class="hover:text-purple-400 cursor-pointer transition">28 comments</span>
                                <span class="hover:text-purple-400 cursor-pointer transition">12 shares</span>
                            </div>
                        </div>

                        <div class="p-2 flex items-center justify-around">
                            <button onclick="toggleLike(this)" class="like-btn flex items-center gap-2 px-4 py-2 hover:bg-gray-700 rounded transition text-gray-400 flex-1 justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                </svg>
                                <span class="font-medium text-sm">Like</span>
                            </button>
                            <button class="flex items-center gap-2 px-4 py-2 hover:bg-gray-700 rounded transition text-gray-400 flex-1 justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255