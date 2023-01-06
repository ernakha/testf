<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\MhsController;
use App\Http\Controllers\DsnController;
use App\Http\Controllers\Backend\PgwController;
use App\Http\Controllers\BukuController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get('/admin/logout',[AdminController::class, 'logout'])->name('admin.logout');

Route::prefix('users')->group(function(){
    Route::get('/view',[UserController::class, 'UserView'])->name('user.view');
    Route::get('/add',[UserController::class, 'UserAdd'])->name('user.add');
    Route::post('/store',[UserController::class, 'UserStore'])->name('users.store');
    Route::get('/edit/{id}',[UserController::class, 'UserEdit'])->name('users.edit');
    Route::post('/update{id}',[UserController::class, 'UserUpdate'])->name('users.update');
    Route::get('/delete/{id}',[UserController::class, 'UserDelete'])->name('users.delete');
});

Route::prefix('mhs')->group(function(){
    Route::get('/view',[MhsController::class, 'mhsView'])->name('mhs.view');
    Route::get('/add',[MhsController::class, 'mhsAdd'])->name('mhs.add');
    Route::post('/store',[MhsController::class, 'mhsStore'])->name('mhsStore');
    Route::get('/edit/{id}',[MhsController::class, 'mhsEdit'])->name('mhs.edit');
    Route::post('/update{id}',[MhsController::class, 'mhsUpdate'])->name('mhs.update');
    Route::get('/delete/{id}',[MhsController::class, 'mhsDelete'])->name('mhs.delete');
    // Route::post('/mhsStore',[MhsController::class, 'mhsStore'])->name('mhsStore');
});

Route::prefix('dsn')->group(function(){
    Route::get('/view',[DsnController::class, 'dsnView'])->name('dsn.view');
    Route::get('/add',[DsnController::class, 'dsnAdd'])->name('dsn.add');
    Route::post('/store',[DsnController::class, 'dsnStore'])->name('dsnStore');
    Route::get('/edit/{id}',[DsnController::class, 'dsnEdit'])->name('dsn.edit');
    Route::post('/update{id}',[DsnController::class, 'dsnUpdate'])->name('dsn.update');
    Route::get('/delete/{id}',[DsnController::class, 'dsnDelete'])->name('dsn.delete');
});

Route::prefix('pgw')->group(function(){
    Route::get('/view',[PgwController::class, 'pgwView'])->name('pgw.view');
    Route::get('/add',[PgwController::class, 'pgwAdd'])->name('pgw.add');
    Route::post('/store',[PgwController::class, 'pgwStore'])->name('pgwStore');
    Route::get('/edit/{id}',[PgwController::class, 'pgwEdit'])->name('pgw.edit');
    Route::post('/update{id}',[PgwController::class, 'pgwUpdate'])->name('pgw.update');
    Route::get('/delete/{id}',[PgwController::class, 'pgwDelete'])->name('pgw.delete');
});

Route::prefix('buku')->group(function(){
    Route::get('/view',[BukuController::class, 'bukuView'])->name('buku.view');
    Route::get('/add',[BukuController::class, 'bukuAdd'])->name('buku.add');
    Route::post('/store',[BukuController::class, 'bukuStore'])->name('bukuStore');
    Route::get('/edit/{id}',[BukuController::class, 'bukuEdit'])->name('buku.edit');
    Route::post('/update{id}',[BukuController::class, 'bukuUpdate'])->name('buku.update');
    Route::get('/delete/{id}',[BukuController::class, 'bukuDelete'])->name('buku.delete');
});