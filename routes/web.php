<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

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

/*
GET
Permet l'affichage
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('welcome'); 
})->name('home');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/profils', [ProfileController::class, 'index'])->name('profils.index');
Route::get('/profils/{id}/edit', [ProfileController::class, 'edit'])->name('profils.edit');
Route::get('/profils/create', [ProfileController::class, 'create'])->name('profils.create');


/*
POST
Permet une action
*/

Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', function () {
    Auth::logout();  
    return redirect()->route('login');  
})->name('logout');

Route::post('/register-admin', [AuthController::class, 'registerAdmin'])->name('register.admin');

Route::post('/profils', [ProfileController::class, 'store'])->name('profils.store');

/*
PUT
Permet les modifications
*/ 

Route::put('/profils/{id}', [ProfileController::class, 'update'])->name('profils.update');

/*
DELETE
Permet les suppressions
*/

Route::delete('/profils/{id}', [ProfileController::class, 'destroy'])->name('profils.destroy');
