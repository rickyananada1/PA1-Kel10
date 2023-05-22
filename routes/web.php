<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\VisimisiController;
use App\Models\Admin;
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
// Route::get('/', [FrontendController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::resource('berita', NewsController::class);

Route::resource('galery', GaleryController::class);

Route::resource('structure', StructureController::class);

Route::resource('VisiMisi', VisimisiController::class);

Route::resource('pengumuman', PengumumanController::class);

require __DIR__ . '/auth.php';

// Route::get('/admin/dashboard', function(){
//     return view('admin.dashboard');
// })->middleware(['auth:admin'])->name('admin.dashboard');

require __DIR__ . '/adminauth.php';

Route::prefix('admin')->namespace('App\Http\Controllers')->group(function () {
    // Route login
    Route::match(['get', 'post'], 'login', 'AdminController@login');

    Route::middleware(['Admin'])->group(function () {
        // Route dashboard
        Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
        // Route logout
        Route::get('logout', 'AdminController@logout');

        // Route resource for 'berita'
        Route::get('berita', 'NewsController@index')->name('index');

        // Route resource for 'galery'
        Route::resource('galery', 'GaleryController');

        // Route resource for 'structure'
        Route::resource('structure', 'StructureController');

        // Route resource for 'VisiMisi'
        Route::resource('visimisi', 'VisimisiController');

        // Route resource for 'pengumuman'
        Route::resource('pengumuman', 'PengumumanController');
    });
});


Route::prefix('masyarakat')->namespace('App\Http\Controllers')->group(function () {
    // route login
    Route::match(['get', 'post'], 'login', 'MasyarakatController@login');
    Route::match(['get', 'post'], 'register', 'MasyarakatController@register');
    Route::get('logout', 'MasyarakatController@logout');

    // Route::middleware(['Masyarakat'])->group(function () {
    //     Route::get('dashboard', 'MasyarakatController@dashboard')->name('dashboard');
        // Route logout

//     });
});
