<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FiliereController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupesController;
use App\Http\Controllers\ModuleController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/groupes',GroupesController::class);
    Route::resource('/stagieres',StagieresController::class);
    Route::resource('/exam',ExamController::class);
    Route::resource('/notes',NotesController::class);
    Route::resource('/filiers', FiliereController::class );
    Route::resource('/module', ModuleController::class );



});

Route::resource('filiers', FiliereController::class);

require __DIR__.'/auth.php';