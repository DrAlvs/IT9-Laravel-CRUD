@extends('layout')

@section('content')
<form action="{{ route('items.store') }}" method="POST">
    @csrf
    <label>Name:</label>
    <input type="text" name="name">
    <label>Quantity:</label>
    <input type="number" name="quantity">
    <label>Price:</label>
    <input type="text" name="price">
    <button type="submit">Save</button>
</form>
@endsection
