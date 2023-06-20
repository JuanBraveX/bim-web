<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ContactanoController;
use App\Http\Controllers\EmpleadooController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\EmpleteController;
use App\Http\Controllers\BimsdatoController;
use App\Http\Controllers\FamiliaController;
use App\Http\Controllers\PvideoController;

use App\Http\Controllers\PaginaWebController;
use App\Http\Controllers\CarruseleController;

use App\Http\Controllers\CardController;
use App\Http\Controllers\HomeController;

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
    return redirect()->route('web');
});


Route::get('/Inicio', [PaginaWebController::class, 'web'])->name('web');
Route::get('/bima', [PaginaWebController::class, 'bima'])->name('bima');
Route::get('/BIMStudio', [PaginaWebController::class, 'bims'])->name('bims');
Route::get('/DesarrolloTecnologico', [PaginaWebController::class, 'conocenos'])->name('conocenos');
Route::get('/Consultoria', [PaginaWebController::class, 'consultoria'])->name('consultoria');
Route::get('/Contacto', [PaginaWebController::class, 'contacto'])->name('contacto');
Route::get('/Empleate', [PaginaWebController::class, 'empleat'])->name('empleat');
Route::get('/Marketing', [PaginaWebController::class, 'marketing'])->name('marketing');
Route::get('/ProduccionVideografica', [PaginaWebController::class, 'pvideografica'])->name('pvideografica');
Route::get('/QueHacemos', [PaginaWebController::class, 'qhacemos'])->name('qhacemos');
Route::get('/QueOfrecemos', [PaginaWebController::class, 'qofrecemos'])->name('qofrecemos');
Route::get('/QuienesSomos', [PaginaWebController::class, 'qsomos'])->name('qsomos');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('empletes', EmpleteController::class);
    Route::resource('contactanos', ContactanoController::class);
    Route::resource('/empleadoos', EmpleadooController::class);
    Route::resource('/personals', PersonalController::class);
    Route::resource('/familias', FamiliaController::class);
    Route::resource('/pvideos', PvideoController::class);
    Route::resource('/bimsdatos', BimsdatoController::class);
    Route::resource('/carruseles', CarruseleController::class);
    Route::resource('/cards', CardController::class);
    Route::get('/cardsT/{tipo}', [CardController::class, 'indexP'])->name('cards.indexP');
});

Auth::routes(['verify' => true, 'register' => false]);

//Route::get('/empleadoosget', [EmpleadooController::class, 'getAllempleadoos'])->name('empleadoos.empleadoosget');
Route::get('/empleadoosget', [PersonalController::class, 'getAllpersonal'])->name('empleadoos.empleadoosget');
Route::get('/familiasget', [FamiliaController::class, 'getAllfamilias'])->name('familias.familiasget');
Route::get('/pvideosget', [PvideoController::class, 'getAllpvideos'])->name('pvideos.pvideosget');
Route::get('/bimsdatosget', [BimsdatoController::class, 'getAllbimsdatos'])->name('bimsdatos.bimsdatosget');

Route::get('/cardsGet/{tipo}', [CardController::class, 'indexG'])->name('cards.indexG');

Route::post('empletesP', [EmpleteController::class, 'storeP'])->name('empletes.storeP');
Route::post('contactanosP', [ContactanoController::class, 'storeP'])->name('contactanos.storeP');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
