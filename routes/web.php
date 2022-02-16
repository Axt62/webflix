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
    return  'Salut Antonio';
});

Route::get('/hello', function(){
    return view('hello', [
        'name' => 'Antonio ce bg',
        'numbers' => [1, 3, 7],
    ]);
});

Route::get('/au-revoir', function  (){
    return view('good-bye');

});

Route::get('/', function () {
    return view ('accueil');
});

Route::get('/hello/{name}', function ($name){
    return view ('Hello ', [
        'name' => $name,
        'numbers' =>[],
    ]);
});

Route::get('/a-propos',  function (){
    return view('a-propos', [
        'dev' => ['Antoine, Jean, Toto']
    ]);
});

Route::get('/a-propos/{dev}', function ($dev){
    return view('dev', [
        'dev' => $dev,

    ]);
});



