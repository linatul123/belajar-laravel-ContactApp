<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Custom Styles -->
        <style>
            body {
                background: linear-gradient(135deg, #6A0572, #9D50BB);
                background-size: 400% 400%;
                animation: gradientBG 15s ease infinite;
            }

            @keyframes gradientBG {
                0% { background-position: 0% 50%; }
                50% { background-position: 100% 50%; }
                100% { background-position: 0% 50%; }
            }
        </style>
    </head>
    <body class="antialiased flex items-center justify-center min-h-screen text-white">
        
        <div class="text-center">
            <!-- Header -->
            <h1 class="text-5xl font-bold mb-6">Welcome to Contact Apps</h1>
            <p class="text-lg mb-10">Rasakan kemudahan mengelola kontak dengan aplikasi yang dirancang elegan</p>
            
            <!-- Buttons -->
            <div class="space-x-4">
                <a href="/login" class="bg-purple-800 hover:bg-purple-700 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out">Login</a>
                <a href="/register" class="bg-white text-purple-800 font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out">Register</a>
            </div>
        </div>

    </body>
</html>
