<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>

    <script src="https://unpkg.com/htmx.org@1.9.6"></script> <!-- HTMX -->
    
    <style>
        body {
            background-color: #1b1e23;
            color: white;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            background: #111;
            padding: 10px;
            border-radius: 5px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 8px 15px;
        }
        .navbar a:hover {
            background: #444;
            border-radius: 3px;
        }
    </style>

    @yield('styles') 
</head>
<body>

<div class="container">
    <div class="navbar">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('items.index') }}">Items</a>
        <a href="{{ route('items.create') }}" 
           hx-get="{{ route('items.create') }}" 
           hx-target="#form-container" 
           hx-swap="innerHTML">
           Create Item
        </a>
    </div>

    <div id="form-container"></div> 
    <div class="content">
        @yield('content') 
    </div>
</div>

@yield('scripts') 

</body>
</html>
