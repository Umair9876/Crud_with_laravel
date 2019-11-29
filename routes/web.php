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

Route::get('/','CrudController@index');
// Route::get('/',function(){
//    return view ('create');
// });
//Route::get('/input','CrudController@index');

//Route::post('/introduction_to_ict','CrudController@add');

Route::get('/create',function ()
{
   return view('create');
});
Route::post('/index','CrudController@insert');


Route::get('/read','CrudController@read');

//


//Route::get('/up', 'CrudController@upView');
//Route::get('/update1/{id}','CrudController@update1');
//Route::post('/update2/{id}', 'CrudController@update2');
Route::get('/edit{id}','CrudController@edit');

//Route::get('/update/view/{id}', 'CrudController@edit');
//Route::get('/update/data/{id}', 'CrudController@update');
//
//Route::get('/ch',function (){
//   return view('update');
//});

//Route::post('/update','PagesController@update');

Route::get('/del/{id}','CrudController@delete');

//Route::get('updat',function (){
//    return view ('update');
//});

Route::get('/up{id}', 'CrudController@updateView')->name('updtView');
Route::post('/update','CrudController@update')->name('update');
