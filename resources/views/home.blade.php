<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Laravel App</title>
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
        .table-container {
            margin-top: 20px;
            background: #222;
            padding: 10px;
            border-radius: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid white;
            text-align: left;
        }
        th {
            background: #333;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="navbar">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('items.index') }}">Items</a>
        <a href="{{ route('items.create') }}">Create Item</a>
    </div>

    <div class="table-container">
        <h2>Item List</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->price }}</td>
                    <td>
                        <a href="{{ route('items.edit', $item->id) }}">Edit</a> |
                        <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: none; border: none; color: red; cursor: pointer;">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
