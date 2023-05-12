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
use App\Http\Controllers\AbsenceController;


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
})
    ->middleware(['auth', 'verified', 'role:admin'])
    ->name('admin');

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified', 'role:stagiaire|prof'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function (){
    Route::get('stagiaire/create',[StagieresController::class, 'create'])->middleware(['role:admin'])->name('stagiaire.create');
    Route::get('stagiaire/{id}',[ StagieresController::class, 'edit'])->middleware(['role:admin'])->name('stagiaire.edit');
    Route::get('stagiaire/{id}/edit', [StagieresController::class, 'show'])->middleware(['role:stagiaire|admin'])
    ->name(
        'stagiaire.details'
    );
    Route::get('stagiaire', [StagieresController::class , 'index'])->middleware(['role:admin'])->name('stagiaire.index');
    Route::post('stagiaire',[StagieresController::class, 'store'])->middleware(['role:admin'])->name('stagiaire.store');
    Route::delete('stagiaire/{id}',[ StagieresController::class, 'destroy'])->middleware(['role:admin'])->name('stagiaire.destroy');
    Route::put('stagiaire/{id}',[ StagieresController::class, 'update'])->middleware(['role:admin'])->name('stagiaire.update');
}
);


Route::middleware(['auth, verified,role:admin|prof'])->group(function(){
    Route::resource('exam', ExamController::class);
    Route::resource('seance', SeanceController::class);
    Route::resource('notes', NotesController::class);
});


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name(
        'profile.edit'
    );
    Route::patch('/profile', [ProfileController::class, 'update'])->name(
        'profile.update'
    );
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name(
        'profile.destroy'
    );
    Route::resource('prof', ProfController::class)->middleware('role:admin');
    Route::resource('filiers', FiliereController::class);
    Route::resource('groupes', GroupesController::class);
    Route::resource('module', ModuleController::class);
    Route::resource('absence', AbsenceController::class);
});

require __DIR__ . '/auth.php';
