<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class HabitacionController extends Controller
{
   /* public function login()
    {
        return view('login');
    }

    public function registro()
    {
        return view('registro');
    }
    */


    // ADMIN - Obtener todas las habitaciones
    public function obtenerHabitaciones(){

        $habitacion = new Client();
        try{
            $responseHabitaciones = $habitacion->request('GET', 'http://localhost:8080/habitacion/ver');
            $habitacionesArray = json_decode($responseHabitaciones->getBody(), true);
        
            return view('components/obtenerhabitacion_admin', compact('habitacionesArray'));
        } catch (\Exception $ex) {
            return $ex;
        }
    }


    // ADMIN - Crear habitación
    // Formulario
    public function crearHabitacion()
    {
        return view('components/crearHabitacion_admin');
    }

    // Guardar habitación
    public function guardarHabitacion(Request $request)
    {
        $numero = $request->input('numero');
        $tipo = $request->input('tipo');
        $descripcion = $request->input('descripcion');
        $piso = $request->input('piso');
        $precio_noche = $request->input('precio_noche');
        $estado = $request->input('estado');
        
        $habitacion = new Client();
        try {
            $response = $habitacion->request('POST', 'http://localhost:8080/habitacion/crear', [
                'Content-Type' => 'application/json',
                'json' => [
                    'numero' => $numero,
                    'tipo'=>$tipo,
                    'descripcion' => $descripcion,
                    'piso'=>$piso,
                    'precio_noche' => $precio_noche,
                    'estado' => $estado
                ],
            ]);
            if ($response->getStatusCode() == 200) {
                return redirect()->route('ver.habitaciones.admin');
            }
        } catch (\Exception $e) {
            return response('Error: ' . $e->getMessage(), 500);
        }
    }
}