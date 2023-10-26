<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $nome = "Gil";
    $idade = 32;

    $arr = [10, 20, 30, 40, 50];
    $nomes = ["Gil", "Gilberto", "Gabriel"];

    return view('welcome', ["nome" => $nome, "idade" => $idade, "profissão" => "programador", "arr" => $arr, "nomes" => $nomes]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});
