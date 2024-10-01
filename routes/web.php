<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

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


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::post('/reset-password', [AuthController::class, 'resetPassword']);



Route::get('/', function () {
    return view('welcome');
});


// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AuthController;
// use App\Http\Controllers\ProfileController;
// use App\Http\Controllers\PeopleController;

// // Главная страница
// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// // =====================
// // АУТЕНТИФИКАЦИЯ
// // =====================

// // Страница входа
// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login']);

// // Страница регистрации
// Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [AuthController::class, 'register']);

// // Выход
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// // =====================
// // Профиль пользователя
// // =====================

// Route::middleware('auth')->group(function () {
//     // Просмотр профиля
//     Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    
//     // Редактирование профиля
//     Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
// });

// // =====================
// // CRUD для людей (People)
// // =====================

// Route::middleware('auth')->group(function () {
//     Route::get('/people', [PeopleController::class, 'index'])->name('people.index');
//     Route::get('/people/create', [PeopleController::class, 'create'])->name('people.create');
//     Route::post('/people', [PeopleController::class, 'store'])->name('people.store');
//     Route::get('/people/{id}', [PeopleController::class, 'show'])->name('people.show');
//     Route::get('/people/{id}/edit', [PeopleController::class, 'edit'])->name('people.edit');
//     Route::post('/people/{id}', [PeopleController::class, 'update'])->name('people.update');
//     Route::delete('/people/{id}', [PeopleController::class, 'destroy'])->name('people.destroy');
// });
