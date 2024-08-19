<?php


use GuzzleHttp\Client;
use App\Http\Controllers\InitController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\HabitacionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;



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
Route::get('/admin/ver/habitaciones', [HabitacionController::class, 'obtenerHabitaciones']) -> name('ver.habitaciones.admin');

// GET
Route::get('/admin/crear/habitaciones', [HabitacionController::class, 'crearHabitacion']) -> name('crear.habitacion.admin');

// POST
Route::post('/admin/guardar/habitaciones', [HabitacionController::class, 'guardarHabitacion']) -> name('guardar.habitacion.admin');

// GET
Route::get('/admin/editar/habitaciones/{id}', [HabitacionController::class, 'editarHabitacion']) -> name('editar.habitacion.admin');

// PUT
Route::post('/admin/guardar/edicion/habitaciones/{id}', [HabitacionController::class, 'guardarEdicionHabitacion']) -> name('guardaredicion.habitacion.admin');

// DELETE
Route::get('/admin/eliminar/habitacion/{id}', [HabitacionController::class, 'eliminarHabitacion']) -> name('eliminar.habitacion.admin');


// ***USUARIOS***
// GET
Route::get('/admin/ver/usuarios', [UsuarioController::class, 'obtenerUsuarios']) -> name('ver.usuarios.admin');

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

