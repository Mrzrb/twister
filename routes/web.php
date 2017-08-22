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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// Route::get('login',function(){
//     return view('home.login');
// });

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/twist','TwistController@index')->name('home');
Route::get('/twist/create','TwistController@create');
Route::post('/twist','TwistController@store');
Route::get('/twist/{twist}','TwistController@show');

//reply
Route::post('/twist/{twist}/reply','TwistController@reply');



//github sociate
Route::any('/github','OAuthController@redirectToProvider');
Route::any('/github/callback','OAuthController@handleProviderCallback');


//User Follow
Route::get('/follow/{user}','UserController@followOrNot');




//group

Route::get('/group','GroupController@index');
Route::get('/group/create','GroupController@create');
Route::post('/group','GroupController@store');