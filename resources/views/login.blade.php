<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Inventify - Inventory Management System</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center p-4">
  <div class="max-w-sm w-full bg-white rounded-lg shadow-md p-6">
    <header class="text-center mb-6">
      <h1 class="text-xl font-bold text-gray-900">Inventify</h1>
      <p class="text-xs text-gray-500 mt-1">Inventory Management System</p>
    </header>
    <main>
      <h2 class="font-semibold text-gray-800 mb-4 text-center">Sign in to your account</h2>
      <div class="flex justify-center space-x-2 mb-5 select-none">
        <button type="button" aria-pressed="true" class="flex items-center space-x-1 text-sm font-medium text-blue-700 bg-blue-100 px-3 py-1 rounded-md border border-blue-300 shadow-sm">
          <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/>
          </svg>
          <span>Email</span>
        </button>
        <button type="button" aria-pressed="false" class="flex items-center space-x-1 text-sm font-medium text-gray-600 bg-gray-100 px-3 py-1 rounded-md border border-gray-300 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1">
          <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
            <path d="M10 10a4 4 0 100-8 4 4 0 000 8zm-6 7a6 6 0 1112 0v1H4v-1z"/>
          </svg>
          <span>Username</span>
        </button>
      </div>
      <form>
        <label for="email" class="block mb-1 text-xs font-semibold text-gray-700 flex items-center space-x-1">
          <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/>
          </svg>
          <span>Email address</span>
        </label>
        <input 
          id="email" 
          type="email" 
          placeholder="Enter your email address" 
          required 
          class="w-full border border-gray-300 rounded-md p-2 mb-4 text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
        />
        <label for="password" class="block mb-1 text-xs font-semibold text-gray-700 flex items-center space-x-1">
          <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z"/>
          </svg>
          <span>Password</span>
        </label>
        <input
          id="password"
          type="password"
          required
          class="w-full border border-gray-300 rounded-md p-2 mb-4 text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
        />
        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none text-white font-semibold py-2 rounded-md flex justify-center items-center space-x-2">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6l6 6-6 6"/>
          </svg>
          <span>Sign in</span>
        </button>
      </form>
      <div class="flex items-center my-6 space-x-3">
        <hr class="flex-grow border-gray-300" />
        <span class="text-sm text-gray-500 whitespace-nowrap">Don't have an account?</span>
        <hr class="flex-grow border-gray-300" />
      </div>
      <button
        type="button"
        onclick="window.location.href='{{ route('register') }}'"
        class="w-full border border-gray-300 rounded-md py-2 text-sm font-semibold text-gray-700 hover:bg-gray-100 flex justify-center items-center space-x-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z"/>
        </svg>
        <span>Create new account</span>
      </button>
    </main>
  </div>
</body>
</html>
