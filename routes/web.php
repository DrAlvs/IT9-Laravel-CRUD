<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::get('/', function () {
    $items = \App\Models\Item::all();
    return view('home', compact('items'));
})->name('home');

// Define resourceful routes for items
Route::resource('items', ItemController::class);

