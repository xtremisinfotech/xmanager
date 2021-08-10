<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

/*
|---------------------------------------------------------------------------
| Clear Cache Routes
|---------------------------------------------------------------------------
*/

Route::get('/clear-cache', function () {
	Artisan::call('config:cache');
	Artisan::call('view:clear');
	Artisan::call('config:clear');
	Artisan::call('cache:clear');
	return 'All Cache Erase';
});

/* ----------------------------- End Routes ----------------------------- */

/*
|---------------------------------------------------------------------------
| User / Auth Routes
|---------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

/* --- Disable User Registration Routes --- */
Route::get('/register', function(){
    return redirect('/login');
});
/**----------------------------------------- */

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
