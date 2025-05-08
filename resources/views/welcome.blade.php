<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>{{ config('app.name') }}</title>
</head>

<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900 flex items-center justify-center min-h-screen">
    <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-8 max-w-md w-full text-center">
        <div>
            <img src="{{ asset('images/index.jpg') }}" alt="Wilayah" class="mt-4 mb-4 h-48 w-96 object-fill">
        </div>
        <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-4">
            {{ config('app.name') }}
        </h2>
        <p class="text-gray-600 dark:text-gray-300 text-base mb-6">
            Manajemen Wilayah
        </p>
        <a href="{{ route('dashboard') }}">
            <button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded transition">
                Get Started
            </button>
        </a>
    </div>
</body>

</html>
