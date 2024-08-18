<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class UsuarioController extends Controller
{
    public function obtenerUsuarios(){
        
        $usuario = new Client([
            'base_uri' => 'http://localhost:8080/usuarios/',
            'timeout'  => 2.0,
        ]);

        $response = $usuario->request('GET', 'verTodos');
        $usuarioArray = json_decode($response->getBody()->getContents(), true);

        return view('components/obtenerusuario_admin', compact('usuarioArray'));
    }
}
