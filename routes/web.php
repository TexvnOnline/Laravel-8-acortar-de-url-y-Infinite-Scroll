<?php

use App\Http\Controllers\UrlController;
use App\Models\Url;
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
    return view('welcome');
});

Route::get('/dashboard', function () {

    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('{code}', [UrlController::class, 'show']);

Route::post('url', [UrlController::class, 'store']);
// ruta para infinie scroll

Route::get('url/{index}', [UrlController::class, 'index']);

