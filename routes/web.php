<?php

use App\Http\Controllers\ArtikelAdminController;
use App\Http\Controllers\DipercayaiLembagaAdminController;
use App\Http\Controllers\HewanQurbanAdminController;
use App\Http\Controllers\KeunggulanAdminController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\ProgramQurbanAdminController;
use App\Http\Controllers\TargetDistribusiAdminController;
use App\Http\Controllers\TestimoniAdminController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Translation\Catalogue\TargetOperation;


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
    return view('user.home');
});

Route::get('/sehebat-nusa', function () {
    return view('user.sehebatNusa');
});

Route::get('/produk-qurban', function () {
    return view('user.produk');
});

Route::get('/order-summary', function () {
    return view('user.order_summary');
});

Route::get('/admin', function () {
    return view('admin.auth.login');
});
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::controller(DipercayaiLembagaAdminController::class)->group(function () {
    Route::get('admin/dipercayai-lembaga', 'index');
});

Route::controller(KeunggulanAdminController::class)->group(function () {
    Route::get('admin/keunggulan', 'index');
});

Route::controller(TargetDistribusiAdminController::class)->group(function () {
    Route::get('admin/target-distribusi', 'index');
});

Route::controller(TestimoniAdminController::class)->group(function () {
    Route::get('admin/testimoni', 'index');
});

Route::controller(HewanQurbanAdminController::class)->group(function () {
    Route::get('admin/hewan-qurban', 'index');
});

Route::controller(ProgramQurbanAdminController::class)->group(function () {
    Route::get('admin/program-qurban', 'index');
});

Route::controller(ArtikelAdminController::class)->group(function () {
    Route::get('admin/artikel', 'index');
});


// login
Route::controller(LoginAdminController::class)->group(function () {
    Route::post('authLogin', 'login');
});

Route::controller(KeunggulanAdminController::class)->group(function () {
    Route::post('admin/create', 'create');
});
