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
    [calculoAutonomiaController::class, 'index'];
})->name('calculoAutonomia');

Route::get(
    'calculoAutonomia/resultado', 
    [calculoAutonomiaController::class, 'getAutonomia']
)->name('calculoAutonomia.resultado');

Route::get('/imc', function () {
    $controller = new ClassControllerIMC();
    return $controller->imc(80, 1.80);
})->name('imc');