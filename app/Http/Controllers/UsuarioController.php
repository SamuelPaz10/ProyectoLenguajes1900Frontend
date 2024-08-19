<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class UsuarioController extends Controller
{
    public function obtenerUsuarios(){
        
        $client = new Client();
        try{
            $responseClientes = $client->request('GET', 'http://localhost:8080/usuarios/verTodos');
            $clientes = json_decode($responseClientes->getBody(), true);
        
            return view('components/obtenerusuario_admin', [
                'clientes' => $clientes
            ]);
        } catch (\Exception $ex) {
            return $ex;
        }
    }

    public function crearUsuario(Request $request)
    {
        return view('components/crearUsuario_admin');
    }
    public function guardarUsuario(Request $request)
    {
        $dni = $request->input('dni');
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $email = $request->input('email');
        $telefono = $request->input('telefono');
        $contrasena = $request->input('contrasena');
        $tipo = $request->input('tipo');
        $client = new Client();
        try {
            $response = $client->request('POST', 'http://localhost:8080/usuarios/crear', [
                'Content-Type' => 'application/json',
                'json' => [
                    'dni'=>$dni,
                    'nombre' => $nombre,
                    'apellido'=>$apellido,
                    'telefono' => $telefono,
                    'email' => $email,
                    'contrasena' => $contrasena,
                    'tipo' => $tipo
                ],
            ]);
            if ($response->getStatusCode() == 200) {
                return redirect()->route('ver.usuarios.admin');
            }
        } catch (\Exception $e) {
            return response('Error: ' . $e->getMessage(), 500);
        }
    }


    public function editarUsuario($dni)
    {
        $client = new Client();
        try {
            $response = $client->request('GET', 'http://localhost:8080/usuarios/ver/' . $dni);
            $cliente =  json_decode($response->getBody(), true);

            if ($response->getStatusCode() == 200) {
                return view('components/editarusuario_admin', ['cliente' => $cliente]);
            }
        } catch (\Exception $ex) {
            return "Error al editar cliente " . $ex;
        }
    }


    public function guardarEdicionUsuario(Request $request, $dni)
    {
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $email = $request->input('email');
        $telefono = $request->input('telefono');
        $contrasena = $request->input('contrasena');
        $tipo = $request->input('tipo');

        $client = new Client();
        try {
            $response = $client->put('http://localhost:8080/usuarios/editar/' . $dni, [
                'Content-Type' => 'application/json',
                'json' => [
                    'nombre' => $nombre,
                    'apellido' => $apellido,
                    'email' => $email,
                    'telefono' => $telefono,
                    'contrasena' => $contrasena,
                    'tipo' => $tipo

                ],
            ]);
            if ($response->getStatusCode() == 200) {
                return redirect()->route('ver.usuarios.admin');
            }
        } catch (\Exception $ex) {
            return "Error al actualizar: " . $ex;
        }
    }

    public function eliminarUsuario($dni)
    {
        $client = new Client();
        try {
            $response = $client->request('GET', 'http://localhost:8080/usuarios/ver/' . $dni);
            $cliente =  json_decode($response->getBody(), true);
            if ($response->getStatusCode() == 200) {
                return view('components/eliminarusuario_admin', ['cliente' => $cliente]);
            }
        } catch (\Exception $ex) {
            return "Error al eliminar cliente " . $ex;
        }
    }


}
