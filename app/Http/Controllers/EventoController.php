<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index(){
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
       //$evento view('evento',['eventos' => $evento]);
    }
}
