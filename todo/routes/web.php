<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\checkAdminRole;
use App\Models\todo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome')->name('home');
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

//profile
Route::get('/profileTest/{id}', [UserController::class, 'profileTest']);

//middleware is authentication.
Route::middleware(checkAdminRole::class)->group(function () { 
Route::post('/todo', [TodoController::class, 'store']);
Route::get('/todo/add', [TodoController::class, 'create']); 
Route::get('/users', [UserController::class, 'index']);
// Route::get('/categories', [CategoryController::class, 'index']);
// Route::get('/subcategories', [SubcategoryController::class, 'index']);
Route::resource('categories', CategoryController::class);
Route::resource('subcategories', SubCategoryController::class);
Route::resource('products', ProductController::class);
Route::post('deleteimage/{id}', [ProductController::class, 'deleteImage'])->name('deleteimage');
    
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';