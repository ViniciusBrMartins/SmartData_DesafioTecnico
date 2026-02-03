<?php
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');
Route::get('/register', [AuthController::class, 'showRegister'])->name('show.register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

route::resource('clients', ClientController::class);


// Redireciona para o login se não estiver autenticado
Route::middleware(['auth'])->group(function () {
    
    // Todas as rotas de clientes aqui dentro estão protegidas
    Route::resource('clients', ClientController::class);
    

});
