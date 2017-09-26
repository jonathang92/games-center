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
// INICIO
Route::get('/', 'web@index');

// NOSOTROS
Route::get('/nosotros', 'web@nosotros');

// JUEGOS
Route::get('/juegos', 'web@juegos');

// CONTACTO
Route::get('/contacto', 'web@contacto');

//Correo contacto
Route::post('correo-contacto', 'Correos@contacto');


// ADMINISTRADOR
Route::group(['prefix' => 'admin'], function () {
    
      Route::get('/', function () {
        return view('admin.index');
      });
    
    //########################################################
    ########//
    //################################################################//
    
    
      //Juegos
      Route::group(['prefix' => 'juegos'], function () {
        //Añadir un Juego
        Route::get('agregar', 'Juegos@create');
        //----------------------------//
      });
      //Rutas de los controladores
      Route::resource('juegos', 'Juegos');
    
    
    //################################################################//
    //################################################################//
    
    
    //Nosotros
    Route::get('nosotros', 'infos@nosotrosIndex');
    
    
    //################################################################//
    //################################################################//
    
    
    //Pagina Principal
    Route::get('pagina-principal', 'infos@principalIndex');
    
    
    //################################################################//
    //################################################################//
    

    //Contacto
    Route::get('contacto', 'infos@contactoIndex');
    
    
    //################################################################//
    //################################################################//
    //Rutas de los controladores
    Route::resource('info', 'infos');
  });
  
