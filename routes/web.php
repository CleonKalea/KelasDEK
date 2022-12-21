<?php

use App\Http\Controllers\PoliController;
use App\Http\Controllers\UserViewController;
use App\Http\Controllers\DokterViewController;
use App\Http\Controllers\CrudController;
use App\Models\DokterView;
use App\Models\Poli;
use App\Models\Poliklinik;
use App\Models\UserView;
use Database\Factories\DokterViewFactory;
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
    return view('welcome', [
            "title" => "Welcome"
    ]);
});

Route::prefix('admin')->group(function() {
    Route::get('/home', function(){
        return view('admin/home', [
                "title" => "Home",
                "nama" => "Wahyu",
                "umur" => "18 Tahun"
        ]);
    });
    
    Route::get('/about', function(){
        return view('admin/about', [
                "title" => "About"
        ]);
    });
    
    Route::get('/poli', [PoliController::class, 'index']);
    Route::get('/poli/{slug}', [PoliController::class, 'list']); 
    Route::get('/user', [UserViewController::class, 'index']);
    Route::get('/dokter', [DokterViewController::class, 'index']);
});

Route::get('/dokter-add', [DokterViewController::class, 'create']);
Route::post('/dokter-create', [DokterViewController::class, 'store']);
Route::get('/dokter-edit/{id}', [DokterViewController::class, 'edit']);
Route::put('/dokter-update/{id}', [DokterViewController::class, 'update']);
Route::get('/dokter-delete/{id}', [DokterViewController::class, 'delete']);
Route::delete('/dokter-destroy/{id}', [DokterViewController::class, 'destroy']);

Route::get('/user-add', [UserViewController::class, 'create']);
Route::post('/user-create', [UserViewController::class, 'store']);
Route::get('/user-edit/{id}', [UserViewController::class, 'edit']);
Route::put('/user-update/{id}', [UserViewController::class, 'update']);
Route::get('/user-delete/{id}', [UserViewController::class, 'delete']);
Route::delete('/user-destroy/{id}', [UserViewController::class, 'destroy']);

Route::get('/poli-add', [PoliController::class, 'create']);
Route::post('/poli-create', [PoliController::class, 'store']);
Route::get('/poli-edit/{id}', [PoliController::class, 'edit']);
Route::put('/poli-update/{id}', [PoliController::class, 'update']);
Route::get('/poli-delete/{id}', [PoliController::class, 'delete']);
Route::delete('/poli-destroy/{id}', [PoliController::class, 'destroy']);

Route::post('/user-regis', [UserViewController::class, 'regis']);

Route::prefix('registrasi')->group(function() {
    Route::get('/daftar', function(){
        return view('registrasi/form', [
                "title" => "Registrasi"
        ]);
    });
    
    Route::post('/submit', function(){
        return view('registrasi/submitregistrasi', [
                "title" => "Registrasi"
        ]);
    });
});

Route::get('/login', function () {
    return view('login', [
            "title" => "Login"
    ]);
});

Route::get('/listdokter', [DokterViewController::class, 'user']);
