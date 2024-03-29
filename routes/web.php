<?php

use App\Http\Controllers\RegisteredTenantController;
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

Route::get('/register',[RegisteredTenantController::class,'create']);
Route::post('/register',[RegisteredTenantController::class,'store']);

require __DIR__.'/auth.php';
