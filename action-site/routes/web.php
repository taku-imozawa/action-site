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

//ここでの処理は以下の通り
//①GET/(root)にアクセスした際に、
//viewヘルパ関数を使ってresources/views/ にある welcome.blade.phpを呼び出している　

Route::get(
    '/',
    function () {
        return view('welcome');
    }
);
