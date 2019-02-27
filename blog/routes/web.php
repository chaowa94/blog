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
//     return view('welcome');
// });

//首页
Route::get('/','MsgController@index');

//查
Route::get('/view/{id}','MsgController@view');

//增
Route::get('/add',function(){
    return view('/add');
});
Route::post('/add','MsgController@add');

//删
Route::get('/delete/{id}','MsgController@delete');

//改
Route::get('/edit/{id}','MsgController@edit');
Route::post('/edit/{id}','MsgController@postEdit');
