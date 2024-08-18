<?php


use GuzzleHttp\Client;
use App\Http\Controllers\InitController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\HabitacionController;
use App\Http\Controllers\HomeController;


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


Route::get('/prueba', function () {

}) -> name('prueba');

//  ______________________________________
// |--------------USUARIO-----------------|
// |--------------------------------------|



Route::get('/', function () {
    return view('components/index');
}) -> name('index');

//____________________
// ***SESIÓN***
// GET
Route::get('/login', function () {
    return view('components/login');
}) -> name('login');

// POST
Route::get('/crear/usuario', function () {
    return view('components/crearusuario');
}) -> name('crear.usuario');

// PUT
Route::get('/editar/usuario', function () {
    return view('components/editarusuario');
}) -> name('editar.usuario');

//____________________
// ***HABITACIÓN***
// GET
Route::get('/ver/habitaciones', function () {
    return view('components/obtenerhabitacion');
}) -> name('ver.habitaciones');

//GET
Route::get('/ver/habitaciones/fecha', function () {
    return view('components/obtenerhabitacionporfecha');
}) -> name('ver.habitaciones.fecha');

//____________________
// ***RESERVA***
// POST
Route::get('/crear/reserva', function () {
    return view('components/crearreserva');
}) -> name('crear.reserva');

// POST
Route::get('/guardar/reserva', function () {
    return view('components/obtenerreserva');
}) -> name('guardar.reserva');

// GET
Route::get('/obtener/reserva', function () {
    return view('components/obtenerreserva');
}) -> name('obtener.reserva');

// DELETE
Route::get('/eliminar/reserva', function () {
    return view('components/obtenerreserva');
}) -> name('eliminar.reserva');



//  ____________________________________________
// |--------------ADMINISTRADOR-----------------|
// |--------------------------------------------|
Route::get('/admin', function () {
    return view('components/index_admin');
}) -> name('index_admin');


// *** RESERVAS ***
// GET
Route::get('/admin/ver/reserva', function () {
    return view('components/obtenerreserva_admin');
}) -> name('obtener.reserva.admin');

// GET
Route::get('/admin/agregar/reserva', function () {
    return view('components/crearreserva_admin');
}) -> name('agregar.reserva.admin');

// POST
Route::get('/admin/guardar/reserva', function () {
    return view('components/obtenerreserva_admin');
}) -> name('guardar.reserva.admin');

// GET
Route::get('/admin/editar/reserva', function () {
    return view('components/editarreserva_admin');
}) -> name('editar.reserva.admin');

// PUT
Route::get('/admin/guardar/edicion/reserva', function () {
    return view('components/obtenerreserva_admin');
}) -> name('guardaredicion.reserva.admin');

// DELETE
Route::get('/admin/eliminar/reserva', function () {
    return view('components/obtenerreserva_admin');
}) -> name('eliminar.reserva.admin');


// ***HABITACIONES***
// GET
Route::get('/admin/ver/habitaciones', function () {
    return view('components/obtenerhabitacion_admin');
}) -> name('ver.habitaciones.admin');

// GET
Route::get('/admin/crear/habitaciones', function () {
    return view('components/crearhabitacion_admin');
}) -> name('crear.habitacion.admin');

// POST
Route::get('/admin/guardar/habitaciones', function () {
    return view('components/obtenerhabitacion_admin');
}) -> name('guardar.habitacion.admin');

// GET
Route::get('/admin/editar/habitaciones', function () {
    return view('components/editarhabitacion_admin');
}) -> name('editar.habitacion.admin');




// ***USUARIOS***
// GET
Route::get('/admin/ver/usuarios', function () {
    return view('components/obtenerusuario_admin');
}) -> name('ver.usuarios.admin');

// GET
Route::get('/admin/crear/usuario', function () {
    return view('components/crearusuario_admin');
}) -> name('crear.usuario.admin');

// POST
Route::get('/admin/guardar/usuario', function () {
    return view('components/obtenerusuario_admin');
}) -> name('guardar.usuario.admin');

// GET
Route::get('/admin/editar/usuario', function () {
    return view('components/editarusuario_admin');
}) -> name('editar.usuario.admin');

// PUT
Route::get('/admin/guardar/edicion/usuario', function () {
    return view('components/obtenerusuario_admin');
}) -> name('guardaredicion.usuario.admin');

// DELETE
Route::get('/admin/eliminar/usuario', function () {
    return view('components/obtenerusuario_admin');
}) -> name('eliminar.usuario.admin');
Route::get('/busqueda', function () {
    return view('busqueda');})->name('busqueda');





//---------------------------------------------------------

//LogIn, Registro y Crear Cliente
Route::get('/hotel/login', [InitController::class, 'login'])->name('login');
Route::get('/hotel/registro', [InitController::class, 'registro'])->name('registro');

Route::post('/hotel/cliente/crear', [InitController::class, 'crearCliente'])->name('crearCliente');
Route::get('/hotel/cliente/todos', [InitController::class, 'obtenerClientes'])->name('obtenerTodos');
Route::get('/hotel/cliente/editar/{dni}', [InitController::class, 'editarCliente'])->name('editarCliente');
Route::post('/hotel/cliente/actualizar/{dni}', [InitController::class, 'actualizarCliente'])->name('actualizarCliente');
//Reserva
Route::get('/hotel/crear/vista', [ReservaController::class, 'vistaReserva'])->name('vistaReserva');
Route::post('/hotel/crear/reserva', [ReservaController::class, 'crearReserva'])->name('crearReserva');
Route::get('/hotel/editar/reserva/{cdg_reserva}', [ReservaController::class, 'editarReserva'])->name('editarReserva'); //editar reserva
Route::post('/hotel/actualizar/reserva/{cdg_reserva}', [ReservaController::class, 'actualizarReserva'])->name('actualizarReserva'); //actualizar reserva
Route::get('/hotel/reservas/registros', [ReservaController::class, 'obtenerReservas'])->name('registroReservas'); //actualizar reserva

//Habitaciones
//Route::POST('/habitacion/crear', [HabitacionController::class, 'crearHabitacion'])->name('crearHabitacion');

Route::get('/perfil', function () {
    return view('perfil');})->name('perfil');

// PUT
Route::get('/admin/guardar/edicion/habitaciones', function () {
    return view('components/obtenerhabitacion_admin');
}) -> name('guardaredicion.habitacion.admin');

// DELETE
Route::get('/admin/eliminar/habitacion', function () {
    return view('components/obtenerhabitacion_admin');
}) -> name('eliminar.habitacion.admin');
