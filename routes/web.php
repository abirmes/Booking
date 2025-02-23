<?php

use App\Http\Controllers\salleController;
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

Route::get('/88', function () {
    return view('salles');
});


Route::get('/', [salleController::class, 'index']);
Route::post('/' , [salleController::class, 'create'])->name('salle.create');
Route::delete('/deleteSalle/{id}', [SalleController::class, 'delete'])->name('deleteSalle');
// Route::get('/salle/update');
Route::get('/supdate/{id}', [SalleController::class, 'edit'])->name('supdate/{id}');
Route::post('/updateSalle', [SalleController::class, 'update'])->name('updateSalle');
Route::resource('salleController', 'salleController');


