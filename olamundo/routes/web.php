<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ClassControllerIMC;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('index',['name'=>'Mundo', 'title' => 'teste', 'idade' => 20, 'peso' => 'M', 'altura' => 1.80]);
    $controller = new ClassControllerIMC();
    return $controller->index();
});

Route::get('/imc', function () {
    $controller = new ClassControllerIMC();
    return $controller->imc(80, 1.80);
})->name('imc');
