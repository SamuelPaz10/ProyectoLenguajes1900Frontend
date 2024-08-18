<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class UsuarioController extends Controller
{
    public function prueba(){
        $usuarios = Http::get('http://localhost/ProyectoLenguajes1900_Backend/');
    }
}
