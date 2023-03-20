<?php

use App\Http\Controllers\NavigationSystem;
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

Route::get('/', [NavigationSystem::class, 'index'])->name('home');
Route::get('/contatos', [NavigationSystem::class, 'contatos'])->name('contatos');
Route::get('/sobre', [NavigationSystem::class, 'sobre'])->name('sobre');


