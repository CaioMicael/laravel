<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\calculoAutonomiaController;
use App\Http\Controllers\ClassControllerIMC;
use App\Http\Controllers\sonoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', ['title' => 'Olá!']);
});

Route::get('/sono', function () {
    $controller = new sonoController();
    return $controller->index();
})->name('sono');

Route::get(
    'sono/resultado', 
    [SonoController::class, 'getSonoIdeal']
)->name('sono.resultado');

Route::get('/calculoAutonomia', function () {
    $controller = new calculoAutonomiaController();
    return $controller->index();
})->name('calculoAutonomia');

Route::get(
    'calculoAutonomia/resultado', 
    [calculoAutonomiaController::class, 'getAutonomia']
)->name('calculoAutonomia.resultado');

Route::get('/imc', function () {
    $controller = new ClassControllerIMC();
    return $controller->index();
})->name('imc');

Route::get(
    'imc/resultado', 
    [ClassControllerIMC::class, 'imc']
)->name('imc.resultado');