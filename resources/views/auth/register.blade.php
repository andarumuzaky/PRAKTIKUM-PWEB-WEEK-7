<!-- resources/views/register.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-sm p-8 bg-white rounded-lg shadow-md">
        <h2 class="mb-6 text-2xl font-bold text-center text-gray-700">Register</h2>
        <form action="/contact" method="GET">
            <div class="mb-4">
                <label class="block mb-1 text-sm font-medium text-gray-600" for="username">Username</label>
                <input type="text" id="username" class="w-full px-3 py-2 text-gray-700 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Enter your username" >
            </div>
            <div class="mb-4">
                <label class="block mb-1 text-sm font-medium text-gray-600" for="email">Email</label>
                <input type="email" id="email" class="w-full px-3 py-2 text-gray-700 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Enter your email" >
            </div>
            <div class="mb-6">
                <label class="block mb-1 text-sm font-medium text-gray-600" for="password">Password</label>
                <input type="password" id="password" class="w-full px-3 py-2 text-gray-700 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Create your password" >
            </div>
            <button type="submit" class="w-full px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">Register</button>
            <p class="mt-4 text-sm text-center text-gray-600">Already have an account? <a href="/login" class="text-blue-500 hover:underline">Login</a></p>
        </form>
    </div>
</body>
</html>
