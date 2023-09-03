<?php

use App\Http\Controllers\ProfileController;
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
    $user = auth()->user();
    $accounts = $user->accounts()->get();
    return Inertia::render('Dashboard', [
        'currentUser' => $user,
        'accounts' => $accounts
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('transactions/{account_id}', [\App\Http\Controllers\TransactionController::class, 'index']);
Route::get('make-transactions/{account_id}', [\App\Http\Controllers\TransactionController::class, 'showTransactionForm'])->name('ShowMakeTransaction');
Route::post('make-transactions', [\App\Http\Controllers\TransactionController::class, 'makeTransaction'])->name('postTransaction');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
