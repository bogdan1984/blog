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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/contact/{id}/{name}/{boghi}', function ($id, $name, $boghi) {
    
//     	return $id." ".$name." ".$boghi;

// });


// Route::get('/video', function () {
    
//     	return view('video');

// });
// Route :: get('/', 'homecontroller@home')->name('home');
// Route :: get('/contact','homecontroller@contact')->name('contact');
// Route :: get('/video','homecontroller@video')->name('video');
//Route :: get('/', function() {return'Hello World' ;});
// Route ::  get ( '/' , function () { return view ( 'test/welcome' ); });

Route::get('/', 'WelcomeController@boot');
Route::get('/info', 'InfoController@boot');
Route::get('/video', 'VideoController@boot');
Route::get('/contact', 'ContactController@boot');



//Route::get('/', 'ContactController@bogdan');