<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Inventify - Create Account</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full">
    <h1 class="text-2xl font-bold text-center mb-4">Inventify</h1>
    <p class="text-center text-gray-600 mb-6">Inventory Management System</p>
    <h2 class="text-xl font-semibold mb-4 text-center">Create your account</h2>
    <p class="text-gray-500 mb-6 text-center">Join the Inventify system</p>

    <form>
      <div class="grid grid-cols-2 gap-4 mb-4">
        <div>
          <label class="block text-sm font-medium text-gray-700 flex items-center space-x-1">
            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
            <span>First Name</span>
          </label>
          <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300" required>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 flex items-center space-x-1">
            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
            <span>Last Name</span>
          </label>
          <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300" required>
        </div>
      </div>

      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 flex items-center space-x-1">
          <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
            <path d="M10 10a4 4 0 100-8 4 4 0 000 8zm-6 7a6 6 0 1112 0v1H4v-1z"/>
          </svg>
          <span>Username</span>
        </label>
        <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300" required>
      </div>

      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 flex items-center space-x-1">
          <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/>
          </svg>
          <span>Email address</span>
        </label>
        <input type="email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300" required>
      </div>

      <div class="grid grid-cols-2 gap-4 mb-4">
        <div>
          <label class="block text-sm font-medium text-gray-700 flex items-center space-x-1">
            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z"/>
            </svg>
            <span>Password</span>
          </label>
          <input type="password" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300" required>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 flex items-center space-x-1">
            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z"/>
            </svg>
            <span>Confirm Password</span>
          </label>
          <input type="password" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300" required>
        </div>
      </div>

      <div class="mb-6">
        <label class="block text-sm font-medium text-gray-700 flex items-center space-x-1">
          <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h8m-8 6h16"/>
          </svg>
          <span>User Type</span>
        </label>
        <select class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300">
          <option>Select User Type</option>
          <option>Super Admin</option>
          <option>Admin</option>
          <option>User</option>
        </select>
      </div>

      <p class="bg-blue-100 text-blue-700 p-2 rounded text-sm mb-4">Start your Account Now!<br>You will be redirected to the Login Page after Successful Account Registration.</p>

      <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-2 rounded-md hover:bg-blue-500 transition duration-200 flex justify-center items-center space-x-2">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16 14v6m3-3h-6M12 11a4 4 0 100-8 4 4 0 000 8zm-6 7a6 6 0 0112 0H6z"/>
        </svg>
        <span>Create Account</span>
      </button>
    </form>
    
    <div class="mt-4 text-center">
      <p class="text-sm">Already have an account?</p>
      <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Sign in instead</a>
    </div>
  </div>
</body>
</html>
