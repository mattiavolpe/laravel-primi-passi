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
    $data = [
        "projectName" => "Laravel - First steps",
        "schoolName" => "Boolean",
        "classId" => "91",
        "author" => "Mattia Volpe",
        "imagePath" => "https://picsum.photos/1000/600"
    ];
    return view('home', $data);
});
