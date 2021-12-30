<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;


Route::get('/', fn () => view('page.home'));
Route::get('/about', fn () => view('page.about'));

// Route::get('task', [TaskController::class, 'index'])->name('task.index');
// Route::get('task/{task:id}', [TaskController::class, 'show'])->name('task.show');
// Route::get('task/{task:id}/edit', [TaskController::class, 'edit'])->name('task.edit');
// Route::post('task', [TaskController::class, 'store'])->name('task.store');
// Route::put('task/{task:id}', [TaskController::class, 'update'])->name('task.update');
// Route::delete('task/{task:id}', [TaskController::class, 'destroy'])->name('task.destory');

Route::resource('task', TaskController::class);
Route::get('register', RegisterController::class)->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('login', LoginController::class)->name('login')->middleware(['guest']);
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', LogoutController::class)->name('logout');

Route::get('dashboard', function () {
      if (!Gate::allows('isAdmin')) {
            abort(404);
      }
      return view('page.dashboard.index');
})->name('dashboard')->middleware(['auth']);
