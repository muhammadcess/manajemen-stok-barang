<?php

use App\Http\Livewire\Pages\CategoriesComponent;
use App\Http\Livewire\Pages\categories\CreateComponent;
use App\Http\Livewire\Pages\categories\UpdateComponent;
use App\Http\Livewire\Pages\HomeComponent;
use App\Http\Livewire\Pages\BooksComponent;
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


Route::get("/", HomeComponent::class)->name("dashboard");
Route::get("/books", BooksComponent::class)->name("books");
Route::get("/categories", CategoriesComponent::class)->name("categories");
Route::get("/categories/create", CreateComponent::class)->name("categories.create");
Route::get("/categories/{categoriesId}/update", UpdateComponent::class)->name("categories.updaet");
