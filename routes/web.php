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

    $data = [
        [
            "name" => "Alessandra",
            "lastname" => "Rossi",
            "location" => "New York City, USA"
        ],
        [
            "name" => "Matteo",
            "lastname" => "Bianchi",
            "location" => "Tokyo, Giappone"
        ],
        [
            "name" => "Sofia",
            "lastname" => "Esposito",
            "location" => "Londra, Regno Unito"
        ],
        [
            "name" => "Giovanni",
            "lastname" => "Romano",
            "location" => "Sydney, Australia"
        ],
    ];

    return view('home', compact('data'));
});
