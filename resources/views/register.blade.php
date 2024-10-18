<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
         body {
            background: linear-gradient(135deg,  #c423f5, #941cf7, #8b2cf7, #692cf7,  #270685);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }n
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white shadow-md rounded-lg p-8 max-w-md w-full">
            <h1 class="text-2xl font-bold mb-6 text-center">Register</h1>

            <form action="/login" method="GET">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                    <input type="text" id="name" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                    <input type="email" id="email" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                    <input type="password" id="password" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
                </div>

                <button type="submit" class="w-full bg-blue-600 text-white font-bold py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Sign Up</button>
            </form>

            <p class="mt-4 text-sm text-center text-purple-500">
                Already have an account? 
                <a href="/login" class="font-bold text-purple-600 hover:text-purple-700 transition">Login</a>
            </p>         
        </div>
    </div>
</body>
</html>
