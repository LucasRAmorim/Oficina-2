<?php

use App\Http\Controllers\{
    BudgetController
};
use Illuminate\Support\Facades\Route;

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

Route::any('budgets/search',[ BudgetController::class, 'search'])->name('budgets.search');
Route::get('/budget/create', [BudgetController::class, 'create'])->name('budget.create');
Route::put('/budgets/{id}', [BudgetController::class, 'update'])->name('budgets.update');
Route::get('/budgets/edit/{id}', [BudgetController::class, 'edit'])->name('budgets.edit');
Route::delete('/budgets/{id}', [BudgetController::class, 'destroy'])->name('budgets.destroy');
Route::get('/budgets/{id}', [BudgetController::class, 'show'])->name('budgets.show');
Route::post('/budgets', [BudgetController::class, 'store'])->name('budgets.store');
Route::get('/budgets', [BudgetController::class, 'index'])->name('budgets.index');

Route::get('/', function () {
    return view('index');
});


