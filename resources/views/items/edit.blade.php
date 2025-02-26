@extends('layout')

@section('content')
<form action="{{ route('items.update', $item) }}" method="POST">
    @csrf @method('PUT')
    <label>Name:</label>
    <input type="text" name="name" value="{{ $item->name }}">
    <label>Quantity:</label>
    <input type="number" name="quantity" value="{{ $item->quantity }}">
    <label>Price:</label>
    <input type="text" name="price" value="{{ $item->price }}">
    <button type="submit">Update</button>
</form>
@endsection
