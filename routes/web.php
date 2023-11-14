<?php

//use App\Models\Book;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Book;
use App\Livewire\Books;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/books', Books::class);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
