<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">

    <div class="flex">
        <!-- Sidebar -->
        <div class="w-1/4 h-screen bg-gray-800 p-5">
            <h1 class="text-xl font-bold">My Laravel App</h1>
            <nav class="mt-5">
                <ul>
                    <li class="mb-2"><a href="/" class="text-gray-300 hover:text-white">Home</a></li>
                    <li><a href="/items/create" class="text-gray-300 hover:text-white">Create Item</a></li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="w-3/4 p-5">
            <h2 class="text-lg font-bold text-blue-400 mb-4">@yield('title')</h2>
            @yield('content')
        </div>
    </div>

</body>
</html>
