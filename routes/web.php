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

Route::get('/cek', function(){
    return OneSignal::getNotifications();
});

Route::get('/', [App\Http\Controllers\Member\SewaController::class, 'awalan'])->name('member.awal');

Route::group(['prefix' => 'member', 'namespace' => 'Member'], function() {
    Route::post('register', [App\Http\Controllers\Admin\MemberController::class, 'register'])->name('admin.post_register');
    Route::get('login', [App\Http\Controllers\Admin\MemberController::class, 'loginForm'])->name('admin.login');
    Route::post('login', [App\Http\Controllers\Admin\MemberController::class, 'login'])->name('admin.post_login');

    Route::group(['middleware' => 'member'], function() {
        Route::get('dashboard', [App\Http\Controllers\Admin\MemberController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('logout', [App\Http\Controllers\Admin\MemberController::class, 'logout'])->name('admin.logout');

        Route::get('sewa/index', [App\Http\Controllers\Member\SewaController::class, 'index'])->name('member-sewa.index');
        Route::get('sewa/create', [App\Http\Controllers\Member\SewaController::class, 'create'])->name('member-sewa.create');
        Route::post('sewa/store', [App\Http\Controllers\Member\SewaController::class, 'store'])->name('member-sewa.store');
        Route::get('sewa/edit/{id?}', [App\Http\Controllers\Member\SewaController::class, 'edit'])->name('member-sewa.edit');
        Route::get('sewa/delete/{id?}', [App\Http\Controllers\Member\SewaController::class, 'delete'])->name('member-sewa.delete');

        Route::post('sewa/update/{id?}', [App\Http\Controllers\Member\SewaController::class, 'update'])->name('member-sewa.update');
        Route::get('sewa/upload/{id?}', [App\Http\Controllers\Member\SewaController::class, 'upload_struk'])->name('member-sewa.upload');
        Route::post('sewa/upload/{id?}', [App\Http\Controllers\Member\SewaController::class, 'post_struk'])->name('member-sewa.struk');
        Route::get('cetak/{id?}', [App\Http\Controllers\Member\SewaController::class, 'cetak'])->name('member.cetak');

    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/member/index', [App\Http\Controllers\Admin\MemberController::class, 'index'])->name('member.index');
Route::get('/member/create', [App\Http\Controllers\Admin\MemberController::class, 'create'])->name('member.create');
Route::post('/member/store', [App\Http\Controllers\Admin\MemberController::class, 'store'])->name('member.store');
Route::get('/member/edit/{id?}', [App\Http\Controllers\Admin\MemberController::class, 'edit'])->name('member.edit');
Route::post('/member/update/{id?}', [App\Http\Controllers\Admin\MemberController::class, 'update'])->name('member.update');
Route::get('member/hapus/{id?}', [App\Http\Controllers\Admin\MemberController::class, 'hapus'])->name('member.hapus');

Route::get('harga/index', [App\Http\Controllers\Admin\HargaController::class, 'index'])->name('harga.index');
Route::get('harga/create', [App\Http\Controllers\Admin\HargaController::class, 'create'])->name('harga.create');
Route::post('harga/store', [App\Http\Controllers\Admin\HargaController::class, 'store'])->name('harga.store');
Route::get('harga/edit/{id?}', [App\Http\Controllers\Admin\HargaController::class, 'edit'])->name('harga.edit');
Route::post('harga/update/{id?}', [App\Http\Controllers\Admin\HargaController::class, 'update'])->name('harga.update');
Route::get('harga/hapus/{id?}', [App\Http\Controllers\Admin\HargaController::class, 'hapus'])->name('harga.hapus');


Route::get('tempat/index', [App\Http\Controllers\Admin\TempatController::class, 'index'])->name('alamat.index');
Route::get('tempat/create', [App\Http\Controllers\Admin\TempatController::class, 'create'])->name('alamat.create');
Route::post('tempat/store', [App\Http\Controllers\Admin\TempatController::class, 'store'])->name('alamat.store');
Route::get('tempat/edit/{id?}', [App\Http\Controllers\Admin\TempatController::class, 'edit'])->name('alamat.edit');
Route::post('tempat/update/{id?}', [App\Http\Controllers\Admin\TempatController::class, 'update'])->name('alamat.update');
Route::get('tempat/hapus/{id?}', [App\Http\Controllers\Admin\TempatController::class, 'hapus'])->name('alamat.hapus');

Route::get('book-new/index', [App\Http\Controllers\Admin\SewaController::class, 'index_baru'])->name('book-new.index');
Route::get('book-pay/index', [App\Http\Controllers\Admin\SewaController::class, 'index_terbayar'])->name('book-new.pay');
Route::get('book-invoice/index', [App\Http\Controllers\Admin\SewaController::class, 'index_utang'])->name('book-new.invoice');
Route::get('book-verifi/{id?}', [App\Http\Controllers\Admin\SewaController::class, 'veririkasi'])->name('book.verifikasi');
Route::get('book-end/{id?}', [App\Http\Controllers\Admin\SewaController::class, 'end'])->name('book.end');
Route::get('book-ending/index', [App\Http\Controllers\Admin\SewaController::class, 'index_end'])->name('book-ending.index');
Route::get('book/show/{id?}', [App\Http\Controllers\Admin\SewaController::class, 'detail'])->name('book-new.show');
Route::get('book/status-update/{id?}', [App\Http\Controllers\Admin\SewaController::class, 'ubah_status'])->name('book-update.status');
Route::get('book/rijected/{id?}', [App\Http\Controllers\Admin\SewaController::class, 'tolak'])->name('book-rijected.status');
Route::get('laporan/index', [App\Http\Controllers\Admin\LaporanController::class, 'index'])->name('laporan.index');





