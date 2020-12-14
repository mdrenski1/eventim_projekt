<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CountryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\Event_TypeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PerformerController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\TicketController;

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
    return view('welcome');
});

Route::resource('countries', CountryController::class);
Route::resource('cities', CityController::class);
Route::resource('locations', LocationController::class);
Route::resource('event_types', Event_TypeController::class);
Route::resource('events', EventController::class);
Route::resource('genres', GenreController::class);
Route::resource('invoices', InvoiceController::class);
Route::resource('performers', PerformerController::class);
Route::resource('sellers', SellerController::class);
Route::resource('tickets', TicketController::class);