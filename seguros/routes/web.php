<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/import', 'imporController@importExportView');
Route::get('export', 'imporController@export')->name('export');
Route::post('/import', 'imporController@import')->name('import');



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/buscar', 'HomeController@buscar');
Route::get('/buscador', 'HomeController@buscador')->name('buscador');
Route::get('/certificados', 'PDFController@certificado');
Route::post('/negativo', 'PDFController@guardar')->name('negativo') ;

Route::get('/reportes','PDFController@PDF')->name('descargarPDF');
Route::get('/negativa/{id}', 'HomeController@negativas')->name('negativasrep');
