<?php

use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\Question;
use App\Livewire\ShowPosts;
use App\Livewire\Todos;
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

// Route::get('/', function () {
//     return view('welcome_copy');
// });

Route::get('/', Todos::class);
Route::get('/counter', Counter::class);
Route::get('/show-posts', ShowPosts::class);
Route::get('/create-post', CreatePost::class);


Route::get('/question', Question::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
