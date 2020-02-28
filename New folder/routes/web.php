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
//      return view('formLogin');
// });

// Route::METHOD(path_string,HANDLE_FUNCTION);
//Method: post get put delete ,....
// Route::get("/xin-chao", function () {
//     echo "chao tat ca moi nguoi";
// });
/*
*luu y
*chay URL tren trinh duyet -> thi method la GET
*/

// Route::get("/danh-sach-lop-hoc","webcontrollert@classRoom");
//Route::METHOD(path_string, Controller@function_in_controller);


//Route::get("/","StudentsController@classRoom");

// Route::get("/login","StudentsController@login");
// Route::get("/createAccount","StudentsController@createAccount");
// Route::get("/edit","StudentsController@edit");
// Route::get("/update","StudentsController@update");

Route::get("/","StudentsController@home");

