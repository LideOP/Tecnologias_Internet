<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\EventoController;
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
    return view('welcome');
});
Route::get('bienvenido', function () {
    $noticias=[
        ['id' => '1',
        'titulo' => 'Visita a mi casa',
        'descripcion' => 'Casa sola'],
        [
            'id' => '2',
            'titulo' => 'Visita Cocha',
            'descripcion' => 'Parque de la flia'],
        [
            'id' => '3',
            'titulo' => 'Noche de diversion en Cochayork',
            'descripcion' => 'Habra Coca Cola']
        ];
        return view('noticias',['noticias'=> $noticias]);
});
Route::get('contenido', function () {
    $datos=[
        ['nombre' => 'Daniel',
        'edad' => 17],
        [
            'nombre' => 'Yhon',
            'edad' => 17],
        [
            'nombre' => 'Edil',
            'edad' => 23]
        ];
        return view('contenido',['datos'=> $datos]);
    });    
    //EVENTO
//Route::get('/evento',[EventoController::class,'index'])->

