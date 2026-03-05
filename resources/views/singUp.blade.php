<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Now - Professional Network</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes slideIn {
            from { opacity: 0; transform: translateX(-30px); }
            to { opacity: 1; transform: translateX(0); }
        }
        .fade-in { animation: fadeIn 0.6s ease-out; }
        .slide-in { animation: slideIn 0.8s ease-out; }
        .gradient-bg {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
        }
        .glass-effect {
            background: rgba(30, 30, 46, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        input:focus {
            transform: translateY(-2px);
            transition: all 0.3s ease;
        }
        .glow-effect {
            box-shadow: 0 0 20px rgba(139, 92, 246, 0.3);
        }
        .step-indicator {
            transition: all 0.3s ease;
        }
        .step-indicator.active {
            background: linear-gradient(135deg, #8b5cf6 0%, #3b82f6 100%);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center gradient-bg p-4">
    <div class="w-full max-w-6xl grid md:grid-cols-2 gap-8 items-center">
        <!-- Left Side - Branding & Benefits -->
        <div class="text-white space-y-6 slide-in hidden md:block">
                            <img src="7rayfilogo.png" alt="" class="h-20">

            <div class="flex items-center gap-3 mb-8">
                <span class="text-3xl font-bold">Professional Network</span>
            </div>
            
            <h1 class="text-5xl font-bold leading-tight bg-gradient-to-r from-purple-400 to-blue-400 bg-clip-text text-transparent">
                Make the most of your professional life
            </h1>
            
            <div class="space-y-6 pt-6">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-blue-500 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-lg text-white mb-1">Connect with professionals</h3>
                        <p class="text-gray-400">Build your network and discover opportunities</p>
                    </div>
                </div>
                
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-lg text-white mb-1">Find the right job</h3>
                        <p class="text-gray-400">Access millions of job opportunities worldwide</p>
                    </div>
                </div>
                
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-500 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-lg text-white mb-1">Learn and grow</h3>
                        <p class="text-gray-400">Access courses and resources to advance your career</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side - Sign Up Form -->
        <div class="glass-effect rounded-2xl shadow-2xl p-8 md:p-12 fade-in">
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-white mb-2">Join now</h2>
                <p class="text-gray-400">Create your professional profile in minutes</p>
            </div>

            <form id="signupForm" class="space-y-5">
                <!-- Name Fields -->
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="firstName" class="block text-sm font-medium text-gray-300 mb-2">
                            First Name *
                        </label>
                        <input 
                            type="text" 
                            id="firstName" 
                            name="firstName"
                            class="w-full px-4 py-3 bg-gray-800 bg-opacity-50 border border-gray-700 text-white rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent outline-none transition placeholder-gray-500"
                            placeholder="John"
                            required
                        >
                    </div>
                    <div>
                        <label for="lastName" class="block text-sm font-medium text-gray-300 mb-2">
                            Last Name *
                        </label>
                        <input 
                            type="text" 
                            id="lastName" 
                            name="lastName"
                            class="w-full px-4 py-3 bg-gray-800 bg-opacity-50 border border-gray-700 text-white rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent outline-none transition placeholder-gray-500"
                            placeholder="Doe"
                            required
                        >
                    </div>
                </div>

                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-300 mb-2">
                        Email Address *
                    </label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email"
                        class="w-full px-4 py-3 bg-gray-800 bg-opacity-50 border border-gray-700 text-white rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent outline-none transition placeholder-gray-500"
                        placeholder="john.doe@example.com"
                        required
                    >
                </div>

                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-300 mb-2">
                        Password (6+ characters) *
                    </label>
                    <div class="relative">
                        <input 
                            type="password" 
                            id="password" 
                            name="password"
                            minlength="6"
                            class="w-full px-4 py-3 bg-gray-800 bg-opacity-50 border border-gray-700 text-white rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent outline-none transition pr-12 placeholder-gray-500"
                            placeholder="Create a strong password"
                            required
                        >
                        <button 
                            type="button"
                          
                            class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-300"
                        >
                            <svg id="eyeIcon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Country/Region -->
                <div>
                    <label for="country" class="block text-sm font-medium text-gray-300 mb-2">
                        Country/Region *
                    </label>
                    <select 
                        id="country" 
                        name="country"
                        class="w-full px-4 py-3 bg-gray-800 bg-opacity-50 border border-gray-700 text-white rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent outline-none transition"
                        required
                    >
                        <option value="">Select your country</option>
                        <option value="us">United States</option>
                        <option value="uk">United Kingdom</option>
                        <option value="ca">Canada</option>
                        <option value="au">Australia</option>
                        <option value="de">Germany</option>
                        <option value="fr">France</option>
                        <option value="in">India</option>
                        <option value="jp">Japan</option>
                        <option value="ma">Morocco</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <!-- Terms Agreement -->
                <div class="flex items-start gap-3">
                    <input 
                        type="checkbox" 
                        id="terms"
                        class="w-4 h-4 mt-1 text-purple-500 bg-gray-800 border-gray-700 rounded focus:ring-purple-500"
                        required
                    >
                    <label for="terms" class="text-sm text-gray-400">
                        By clicking Agree & Join, you agree to the Professional Network 
                        <a href="#" class="text-purple-400 hover:text-purple-300">User Agreement</a>, 
                        <a href="#" class="text-purple-400 hover:text-purple-300">Privacy Policy</a>, and 
                        <a href="#" class="text-purple-400 hover:text-purple-300">Cookie Policy</a>.
                    </label>
                </div>

                <!-- Sign Up Button -->
                <button 
                    type="submit"
                    class="w-full bg-gradient-to-r from-purple-600 to-blue-600 text-white py-3 rounded-lg font-semibold hover:from-purple-700 hover:to-blue-700 transform hover:scale-105 transition duration-300 shadow-lg glow-effect"
                >
                    Agree & Join
                </button>

                <!-- Divider -->
                <div class="relative my-6">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-700"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-4 bg-gray-900 text-gray-400">or</span>
                    </div>
                </div>

                <!-- Social Sign Up Buttons -->
                <div class="space-y-3">
                    <button 
                        type="button"
                        class="w-full flex items-center justify-center gap-3 px-4 py-3 bg-gray-800 bg-opacity-50 border border-gray-700 rounded-lg hover:bg-gray-700 transition font-medium text-gray-300"
                    >
                        <svg class="w-5 h-5" viewBox="0 0 24 24">
                            <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"></path>
                            <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"></path>
                            <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"></path>
                            <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"></path>
                        </svg>
                        Continue with Google
                    </button>

                    <button 
                        type="button"
                        class="w-full flex items-center justify-center gap-3 px-4 py-3 bg-gray-800 bg-opacity-50 border border-gray-700 rounded-lg hover:bg-gray-700 transition font-medium text-gray-300"
                    >
                        <svg class="w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M11.4 24H7.6V8.8h3.8V24zM9.5 7.2c-1.2 0-2.2-1-2.2-2.2s1-2.2 2.2-2.2 2.2 1 2.2 2.2-1 2.2-2.2 2.2zM24 24h-3.8v-7.4c0-1.4 0-3.2-2-3.2s-2.2 1.5-2.2 3.1V24h-3.8V8.8h3.7v2.1h.1c.5-1 1.8-2 3.6-2 3.9 0 4.6 2.6 4.6 5.9V24z"></path>
                        </svg>
                        Continue with Microsoft
                    </button>
                </div>
            </form>

            <!-- Sign In Link -->
            <div class="mt-8 text-center">
                <p class="text-gray-400">
                    Already on Professional Network? 
                    <a href="#" class="text-purple-400 hover:text-purple-300 font-semibold">
                        Sign in
                    </a>
                </p>
            </div>
        </div>

        <!-- Mobile Branding -->
        <div class="md:hidden text-white text-center space-y-4 slide-in">
            <div class="flex items-center justify-center gap-3">
                <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-blue-500 rounded-lg flex items-center justify-center shadow-lg glow-effect">
                    <span class="text-white font-bold text-xl">in</span>
                </div>
                <span class="text-2xl font-bold">Professional Network</span>
            </div>
            <p class="text-gray-300">Join millions of professionals worldwide</p>
        </div>
    </div>

  
</body>
</html>