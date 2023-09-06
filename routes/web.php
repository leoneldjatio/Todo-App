<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\TaskController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/users/index', 'index')->name('user.index');
        Route::get('/users/profile/{id}', 'userProfile')->name('user.profile');
        Route::get('/users/logout', 'logout')->name('user.logout');
        Route::post('/users/profile/update/', 'profileUpdate')->name('user.profile.update');
        Route::post('/users/password/update', 'userPasswordUpdate')
            ->name('user.password.update');
    });
    Route::controller(TaskController::class)->group(function (){
        Route::get('/users/addtask', 'addTask')->name('user.addtask');
        Route::get('/users/edittask/{id}', 'editTask')->name('user.edittask');
        Route::get('/users/deletetask/{id}', 'deleteTask')->name('user.deletetask');
        Route::get('/users/completedtask', 'completedTask')->name('user.completedtasks');
        Route::get('/users/expiredtask', 'expiredTask')->name('user.expiredtasks');
        Route::get('/users/pendingtask', 'pendingTask')->name('user.pendingtasks');
        Route::get('/users/taskdetail/{id}', 'taskDetails')->name('user.taskdetails');
        Route::post('/users/store', 'store')->name('user.task.store');
        Route::post('user/task/update/{id}', 'updateTask')->name('user.task.update');
    });
});




require __DIR__.'/auth.php';
