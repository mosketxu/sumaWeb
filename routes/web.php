
<?php

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

Route::get('/', 'WelcomeController@index')->name('index');

// Route::get('/{zona}', 'WelcomeController@zona')->name('zona');

// Route::get('/suma{hash_tag?}', 'WelcomeController@Method')->name('suma');
Route::get('/suma{has_tag?}', 'WelcomeController@suma')->name('suma');
Route::get('/equipo', 'WelcomeController@equipo')->name('equipo');
Route::get('/clientes', 'WelcomeController@clientes')->name('clientes');
Route::get('/contacto', 'WelcomeController@contacto')->name('contacto');
Route::get('/politica', 'WelcomeController@politica')->name('politica');


// Route::get('/politica', 'WelcomeController@politica')->name('politica');


// <a class ="text-right " href = {{ route('zona', 'politica') }}>
//     < span class ="text-white" > Politica de seguridad < / span >
//     </a>
