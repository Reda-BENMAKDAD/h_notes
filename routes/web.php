<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\SeanceController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\GroupesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StagieresController;


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

Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth', 'verified', 'role:admin'])->name('admin');

Route::get('/dashboard', function () {
   //$prof = Auth::user();
   //dd($prof->userable());
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('prof', ProfController::class)->middleware('role:admin');
    Route::resource('seance', SeanceController::class)->middleware('role:admin');
    Route::resource('exam', ExamController::class)->middleware('role:admin');
    Route::resource('filiers', FiliereController::class)->middleware('role:admin');
    Route::resource('groupes', GroupesController::class)->middleware('role:admin');
    Route::resource('module', ModuleController::class)->middleware('role:admin');
    Route::resource('stagieres', StagieresController::class);
    Route::resource('notes', NotesController::class);
});









require __DIR__.'/auth.php';

