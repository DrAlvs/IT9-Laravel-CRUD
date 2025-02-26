@extends('layout')

@section('title', 'Items List')

@section('content')
    <table class="w-full border border-gray-700 text-white">
        <thead>
            <tr class="bg-gray-700">
                <th class="p-2 border border-gray-600">Name</th>
                <th class="p-2 border border-gray-600">Quantity</th>
                <th class="p-2 border border-gray-600">Price</th>
                <th class="p-2 border border-gray-600">Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Example Data (Replace with Dynamic Data) -->
            <tr class="text-center bg-gray-800">
                <td class="p-2 border border-gray-600">Sample Item</td>
                <td class="p-2 border border-gray-600">10</td>
                <td class="p-2 border border-gray-600">$20</td>
                <td class="p-2 border border-gray-600">
                    <a href="#" class="text-blue-400 hover:underline">Edit</a> |
                    <a href="#" class="text-red-400 hover:underline">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
