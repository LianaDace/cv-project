<?php

use App\Http\Livewire\CreateResume;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/resume/create', CreateResume::class)->middleware(['auth']);
Route::get('/list', [CreateResume::class, 'list'])->name('list')->middleware(['auth']);;
Route::get('/show/{id}', [CreateResume::class, 'show'])->middleware(['auth']);;
Route::get('/edit/{id}', [CreateResume::class, 'edit'])->middleware(['auth']);;
Route::put('/edit/{id}', [CreateResume::class, 'update'])->middleware(['auth']);;
Route::delete('/delete/{id}', [CreateResume::class, 'destroy'])->middleware(['auth']);;

Route::get('/download/{id}', [CreateResume::class, 'download'])->middleware(['auth']);;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('home');

require __DIR__.'/auth.php';
