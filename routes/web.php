<?php

use App\Http\Livewire\Blogs;
use App\Http\Livewire\Calculator;
use App\Http\Livewire\CascadingDropdown;
use App\Http\Livewire\Counter;
use App\Http\Livewire\ImageUpload;
use App\Http\Livewire\ProductSearch;
use App\Http\Livewire\RegistrationForm;
use App\Http\Livewire\TodoList;
use App\Models\Product;
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
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', Counter::class)->name('counter');

Route::get('/calculator', Calculator::class)->name('calculator');
Route::get('/todolist', TodoList::class)->name('todolist');
Route::get('/cascading', CascadingDropdown::class)->name('cascading');
Route::get('/product-search', ProductSearch::class)->name('search');
Route::get('/image-upload', ImageUpload::class)->name('image');

Route::get('/registration', RegistrationForm::class)->name('registration');
Route::get('/slug', Blogs::class)->name('slug');
