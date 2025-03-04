@extends('layout')

@section('title', 'Item List')

@section('styles')
<style>
    .table-container {
        max-width: 800px;
        margin: auto;
        background: #222;
        padding: 20px;
        border-radius: 8px;
    }
    h2 {
        color: #fff;
        text-align: center;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        background: #333;
        color: white;
        margin-top: 15px;
    }
    th, td {
        padding: 12px;
        border: 1px solid #444;
        text-align: center;
    }
    th {
        background: #555;
    }
    .edit-btn {
        color: #4caf50;
        text-decoration: none;
        font-weight: bold;
    }
    .delete-btn {
        color: #ff4d4d;
        border: none;
        background: none;
        cursor: pointer;
        font-weight: bold;
    }
    .delete-btn:hover {
        text-decoration: underline;
    }
</style>
@endsection

@section('content')
    <div class="table-container">
        <h2>📦 Item List</h2>
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
                @forelse($items as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>${{ number_format($item->price, 2) }}</td>
                    <td>
                        <a href="{{ route('items.edit', $item->id) }}" class="edit-btn">Edit</a> |
                        <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4">No items available.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
