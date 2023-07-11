<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FarmpediaController;
use App\Http\Controllers\WorkflowController;
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

// Admin Route
Route::prefix('admin')->group(function () {
    Route::get('/login',[AdminController::class, 'index'])->name('login_form');
    Route::post('/login/owner',[AdminController::class, 'login'])->name('admin.login');
    Route::get('/logout',[AdminController::class, 'logout'])->name('admin.logout')->middleware('admin');
    Route::get('/register',[AdminController::class, 'register'])->name('register_form');
    Route::post('/register/create',[AdminController::class, 'create'])->name('admin.register');
});

Route::prefix('admin')->middleware('admin')->group(function () {
    //dashboard
    Route::get('/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');

    //farmpedia
    Route::get('/farmpedia',[FarmpediaController::class, 'index_admin'])->name('admin.farmpedia');
    Route::get('/farmpedia-tambah',[FarmpediaController::class, 'create'])->name('admin.farmpedia.create');
    Route::post('/farmpedia-store', [FarmpediaController::class, 'store'])->name('admin.farmpedia.store');
    Route::delete('/farmpedia/{id}', [FarmpediaController::class, 'destroy'])->name('admin.farmpedia.destroy');
    Route::get('/farmpedia/{id}/edit', [FarmpediaController::class, 'edit'])->name('admin.farmpedia.edit');
    Route::put('/farmpedia/{id}', [FarmpediaController::class, 'update'])->name('admin.farmpedia.update');

});

// User Route
Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/farmpedia/{judul}', [FarmpediaController::class, 'farmpedia_detail'])->name('farmpedia.detail')->where('judul', '(.*)');
    Route::get('/workflow-detail/{judul}', [WorkflowController::class, 'workflow_detail'])->name('workflow.detail')->where('judul', '(.*)');
    Route::get('/workflow-detail/{judul}/{tahapan}', [WorkflowController::class, 'workflow_task_detail'])->name('workflow.task.detail')->where('judul', '(.*)')->where('tahapan', '(.*)');
    Route::get('/alur-saya', [WorkflowController::class, 'alur_saya'])->name('alur.saya');
    Route::get('/alur-saya-detail', [WorkflowController::class, 'alur_saya_detail'])->name('alur.saya.detail');
    Route::get('/alur-saya-detail/edit', [WorkflowController::class, 'alur_saya_edit'])->name('alur.saya.edit');
});

require __DIR__.'/auth.php';


// Guest Route
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/farmpedia', [FarmpediaController::class, 'index'])->name('farmpedia');

Route::get('/workflow', [WorkflowController::class, 'index'])->name('workflow');

Route::get('/back', function () {
    $workflowUrl = "workflow-detail";
    $url = URL()->to($workflowUrl);
    return Redirect()->to($url);
})->name('back');