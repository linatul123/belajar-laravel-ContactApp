<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #c423f5, #941cf7, #8b2cf7, #692cf7);
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
<body class="flex items-center justify-center min-h-screen">
    <div class="bg-white bg-opacity-20 backdrop-blur-lg rounded-lg p-8 shadow-lg w-96">
        <div class="flex justify-center mb-6">
            <div class="bg-blue-900 p-4 rounded-full">
                <i class="fas fa-user text-white text-3xl"></i>
            </div>
        </div>
        <form action="/home" method="GET">
            <div class="mb-4">
                <div class="flex items-center bg-blue-900 text-white rounded-md p-2">
                    <i class="fas fa-envelope mr-2"></i>
                    <input type="email" placeholder="Email ID" class="bg-transparent focus:outline-none w-full text-white">
                </div>
            </div>
            <div class="mb-4">
                <div class="flex items-center bg-blue-900 text-white rounded-md p-2">
                    <i class="fas fa-lock mr-2"></i>
                    <input type="password" placeholder="Password" class="bg-transparent focus:outline-none w-full text-white">
                </div>
            </div>
            <div class="flex items-center justify-between mb-6">
                <label class="flex items-center text-white">
                    <input type="checkbox" class="form-checkbox text-blue-900 mr-2">
                    Remember me
                </label>
                <a href="#" class="text-white">Forgot Password?</a>
            </div>
            <button class="w-full bg-blue-900 text-white py-2 rounded-md">LOGIN</button>
        </form>

        <p class="mt-4 text-sm text-center text-white">
            Don't have an account? 
            <a href="/register" class="font-bold text-white hover:text-gray-300 transition">Register</a>
        </p>        
    </div>
</body>
</html>