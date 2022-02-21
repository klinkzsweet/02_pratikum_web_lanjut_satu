<?php

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

// use App\Http\Controllers\contoh1;


Route::get('/', function () {
    echo "Selamat Datang";
});

Route::get('/about', function () {
    echo "2041720170 dan Ridho Triadilaksono";
});

Route::get('/articles/{id}', function ($id) {
    echo "Halaman artikel ini dengan " .$id;
});

Route::get('/articles2/{id}', function ($id) {
    echo "Halaman artikel ini dengan " .$id;
});

    
// Route::get('/', [contoh1::class,'/']
// );
