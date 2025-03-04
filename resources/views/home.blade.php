@extends('layout')

@section('title', 'Welcome to My Laravel App')

@section('styles')
<style>
    .hero {
        background: url('/images/hero-banner.jpg') no-repeat center center/cover;
        height: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
        font-size: 2rem;
        font-weight: bold;
        text-shadow: 2px 2px 10px rgba(0,0,0,0.7);
    }
    .section-title {
        font-size: 1.5rem;
        margin: 20px 0;
        border-bottom: 2px solid #444;
        padding-bottom: 5px;
    }
    .item-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 15px;
    }
    .card {
        background: #222;
        border-radius: 8px;
        padding: 10px;
        text-align: center;
        transition: transform 0.3s;
    }
    .card img {
        width: 100%;
        height: 150px;
        border-radius: 5px;
        object-fit: cover;
    }
    .card:hover {
        transform: scale(1.05);
    }
    .card h3 {
        margin-top: 10px;
        font-size: 1.1rem;
    }
    .card p {
        font-size: 0.9rem;
        color: #ccc;
    }
    .card .price {
        font-weight: bold;
        color: #00ff00;
    }
    .view-button {
        background: #007bff;
        color: white;
        padding: 8px 12px;
        border-radius: 5px;
        text-decoration: none;
        display: inline-block;
        margin-top: 5px;
    }
    .view-button:hover {
        background: #0056b3;
    }
</style>
@endsection

@section('content')

    <!-- Hero Section -->
    <div class="hero">
        Welcome to My Laravel App – Your Digital Marketplace!
    </div>

    <div class="container">
        <!-- All Items -->
        <h2 class="section-title">🛍️ Available Items</h2>
        <div class="item-grid">
            @forelse($items as $item)
                <div class="card">
                    <img src="{{ $item->image_url ?? '/images/default.jpg' }}" alt="{{ $item->name }}">
                    <h3>{{ $item->name }}</h3>
                    <p class="price">${{ number_format($item->price, 2) }}</p>
                    <a href="{{ route('items.show', $item->id) }}" class="view-button">View</a>
                </div>
            @empty
                <p>No items available.</p>
            @endforelse
        </div>
    </div>

@endsection
