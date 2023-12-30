<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PeminjamanUserController;
use App\Http\Controllers\UsersController;
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

Route::get('/', [LandingPageController::class, 'home']);
Route::get('all-library', [LandingPageController::class, 'allLibrary'])->name('all.library');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('login', [UsersController::class, 'login'])->name('login-user');
Route::post('register', [UsersController::class, 'store'])->name('register-user');


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('home');
});

Route::get('edit-profile', function () {
    if (Auth::check()) {
        if (Auth::user()->role == 'admin') {
            return view('admin.profile_user');
        }else{
            return view('landing.user_profile');
        }
    } else {
        return view('auth.login');
    }
})->name('profile.edit');


Route::middleware('can:admin')->group(function () {
    // Profile
    Route::resource('admin-profile', AdminProfileController::class);

    // Buku
    Route::resource('buku', BukuController::class)->names([
        'index' => 'buku.index',
        'create' => 'buku.create',
        'store' => 'buku.store',
        'show' => 'buku.show',
        'edit' => 'buku.edit',
        'update' => 'buku.update',
        'destroy' => 'buku.destroy',
    ]);


    // Peminjaman
    Route::resource('peminjaman', PeminjamanController::class)->names([
        'index' => 'peminjaman.index',
        'create' => 'peminjaman.create',
        'store' => 'peminjaman.store',
        'show' => 'peminjaman.show',
        // 'edit' => 'peminjaman.edit',
        'update' => 'peminjaman.update',
        // 'destroy' => 'peminjaman.destroy',
    ])->except(['edit', 'destroy']);
    Route::put('pengembalian/{id}', [PeminjamanController::class, 'pengembalian'])->name('pengembalian');

    //Pengguna
    Route::resource('pengguna', UsersController::class)->names([
        'index' => 'pengguna.index',
        'create' => 'pengguna.create',
        // 'store' => 'pengguna.store',
        'show' => 'pengguna.show',
        'edit' => 'pengguna.edit',
        'update' => 'pengguna.update',
        'destroy' => 'pengguna.destroy',
    ])->except(['store']);
});

Route::middleware('can:user')->group(function () {
    // Profile
    Route::resource('user-profile', UserProfileController::class);

    // Peminjaman
    Route::post('pinjam-buku', [PeminjamanUserController::class, 'pinjamUser'])->name('pinjam.bukuuser');
    Route::get('pinjam-buku/{id}', [PeminjamanUserController::class, 'getPinjamUser'])->name('pinjam.bukuuser.get');
});