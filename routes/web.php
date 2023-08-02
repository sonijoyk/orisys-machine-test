<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TaskController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return view('home');
    //return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); 

// Route::group(['middleware' => ['customer']], function () {
//     Route::get('/home', [CustomerController::class, 'index'])->name('home');
//     Route::post('/save', [CustomerController::class, 'save'])->name('order.save');
// });
// Route::group(['middleware' => ['agent']], function () {
//     Route::get('/agent', [AgentController::class, 'index'])->name('agent.home');
//     Route::post('/assign',[AgentController::class,'assign']);
//     Route::post('/delivered',[AgentController::class,'delivered']);
// });


Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/save', [EmployeeController::class, 'save'])->name('employee.save');
    Route::get('/employees', [EmployeeController::class, 'index'])->name('employees');
    Route::get('/employee/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route::get('/dashboard', [EmployeeController::class, 'index'])->name('employee.update');
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks');
    Route::post('/tasks/save', [TaskController::class, 'save'])->name('tasks.save');
    Route::post('/tasks/assign', [TaskController::class, 'assign'])->name('tasks.assign');

});

require __DIR__.'/auth.php';
