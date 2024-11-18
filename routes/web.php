<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/// routes/web.php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

// Product listing route
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Product create route
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// Product edit route
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');

// Product delete route
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/treatment', function () {
    return view('treatment');
});

Route::get('/admin', function () {
    return view('admin');
});


Route::get('/addproduct', function () {
    return view('addproduct');
});



Route::get('/login', function () {
    return view('auth.login');
})->name('login');


Route::middleware(['guest'])->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/admin', function () {
        if(Auth::user()->usertype == 1)
        {
            return view('admin');
        }
        else{
            return view('dashboard');
        }

    })->name('dashboard');
});

