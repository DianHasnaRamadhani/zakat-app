<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MustahikController;
use App\Http\Controllers\PaymentTypeController;

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

Route::get('/mustahik',[MustahikController::class, 'index'])->name('mustahik');

Route::get('/tambahdatamustahik',[MustahikController::class, 'tambahdatamustahik'])->name('tambahdatamustahik');
Route::post('/insertdatamustahik',[MustahikController::class, 'insertdatamustahik'])->name('insertdatamustahik');

Route::get('/tampildatamustahik/{id}',[MustahikController::class, 'tampildatamustahik'])->name('tampildatamustahik');
Route::post('/editdatamustahik/{id}',[MustahikController::class, 'editdatamustahik'])->name('editdatamustahik');

Route::get('/hapusdatamustahik/{id}',[MustahikController::class, 'hapusdatamustahik'])->name('hapusdatamustahik');

//PYMENT TYPE
Route::get('/payment-type',[PaymentTypeController::class, 'payment_type'])->name('payment-type');

Route::get('/tambahdatapymenttype',[PaymentTypeController::class, 'tambahdatapymenttype'])->name('tambahdatapymenttype');
Route::post('/insertdatapymenttype',[PaymentTypeController::class, 'insertdatapymenttype'])->name('insertdatapymenttype');

Route::get('/tampildatapymenttype/{id}',[PaymentTypeController::class, 'tampildatapymenttype'])->name('tampildatapymenttype');
Route::post('/editdatapymenttype/{id}',[PaymentTypeController::class, 'editdatapymenttype'])->name('editdatapymenttype');

Route::get('/deletedatapymenttype/{id}',[PaymentTypeController::class, 'deletedatapymenttype'])->name('deletedatapymenttype');
