<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\CalculatorController;
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


Route::get('/',[IndexController::class,"index"])->name('Главная');
Route::post('/application', [ApplicationController::class,"show"])->name('application');

Route::get('/uslugi.html',[IndexController::class,"services"])->name('Услуги');
Route::get('/kontakti.html',[IndexController::class,"contact"])->name('Контакты');
Route::get('/proizvodstvo.html',[IndexController::class,"production"])->name('Производство');
Route::get('/sertifikati.html',[IndexController::class,"certificate"])->name('Сертификаты');
Route::get('/dileram.html',[IndexController::class,"dealers"])->name('Дилерам');
Route::get('/remont_metalloplastikovi_okon.html',[IndexController::class,"remontOkon"])->name('Ремонт пластиковых окон');
Route::get('/plastikovie_okna',[IndexController::class,"okna"])->name('Окна');
Route::get('/plastikovye-dveri.html',[IndexController::class,"dveri"])->name('Двери');
Route::get('/osteklenie_balkonov.html',[IndexController::class,"osteklBalkonov"])->name('Остекление балконов');
Route::get('/dveri_dl_sobak_i_kohek.html',[IndexController::class,"dveriDlSobak"])->name('Двери для собак и кошек');
Route::get('/ustanovka-plasticovih-okon',[IndexController::class,"installationWindow"])->name('Установка пластиковых окон Salamander');
Route::get('/ustanovka-plasticovih-dverei',[IndexController::class,"installationDoors"])->name('Установка пластиковых дверей Salamander');
Route::get('/ustanovka-rolletnih-sistem',[IndexController::class,"installRoller"])->name('Установка роллетных систем');
Route::get('/rassrochka',[IndexController::class,"credit"])->name('Рассрочка');

Route::get('/calculator.html',[IndexController::class,"calculatorGet"])->name('Калькулятор онлайн');
Route::get('/api/getdb/priceznacenie.php',[CalculatorController::class,"calculator"]);
Route::get('/api/getdb/grid.php',[CalculatorController::class,"grid"]);
Route::get('/api/getdb/tide.php',[CalculatorController::class,"tide"]);
Route::get('/api/getdb/pricerezult.php',[CalculatorController::class,"result"]);
Route::get('/api/getdb/dopprices.php',[CalculatorController::class,"dopWork"]);

Route::get('/otzivi.html',[ReviewsController::class,"index"])->name('Отзывы');
Route::post('/otzivi',[ReviewsController::class,"create"])->name('Отзывы сохранить');

Route::get('/admin', function () { return view('dashboard');})->middleware(['auth'])->name('dashboard');
Route::get('/admin', [ApplicationController::class,"index"])->middleware(['auth'])->name('dashboard');
Route::post('/admin/deleteapp', [ApplicationController::class,"delete"])->middleware(['auth'])->name('dashboard delete');

Route::get('/admin', [ReviewsController::class,"indexAdmin"])->middleware(['auth'])->name('dashboard');
Route::post('/admin', [ReviewsController::class,"update"])->middleware(['auth'])->name('dashboard post');



Route::get('/admin/menu', [MenuController::class,"index"])->middleware(['auth'])->name('menu');
Route::post('/admin/menu', [MenuController::class,"move"])->middleware(['auth'])->name('menu post');

Route::get('/cache/clear', [IndexController::class,"cache"])->middleware(['auth'])->middleware(['auth'])->name('cacheClear');

Route::get('/cache/storage-link', function() {

    Artisan::call('storage:link');

    return "storage-link!";

})->middleware(['auth'])->name('storageLink');

require __DIR__.'/auth.php';
