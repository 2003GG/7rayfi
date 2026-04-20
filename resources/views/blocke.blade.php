<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Account Banned</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="bg-white shadow-lg rounded-2xl p-8 max-w-md text-center">

    <!-- Icon -->
    <div class="flex justify-center mb-4 text-red-500">
      <svg width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <circle cx="12" cy="12" r="10"/>
        <path d="M4.9 4.9l14.2 14.2"/>
      </svg>
    </div>

    <!-- Title -->
    <h1 class="text-2xl font-bold text-gray-800 mb-2">
      Account Banned
    </h1>

    <!-- Message -->
    <p class="text-gray-600 mb-6">
      Your account has been suspended due to a violation of our terms.
      If you believe this is a mistake, please contact support.
    </p>

    <!-- Logout Button -->
     <form action="{{ route('user.singout') }}" method="POST">
        @csrf

    <button type="submit"
      class="w-full bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg transition">
      Log Out
    </button>
    </form>

  </div>

</body>
</html>
