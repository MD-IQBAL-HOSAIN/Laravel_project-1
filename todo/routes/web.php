<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TodoController;
use App\Models\todo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/todos', [TodoController::class, 'index'])->name('todo.index');
Route::post('/todo', [TodoController::class, 'store']);
Route::get('/todo/add', [TodoController::class, 'create'])->middleware('auth'); //middleware is authentication.


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
