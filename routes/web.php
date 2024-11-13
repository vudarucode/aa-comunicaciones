<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('pages.home'); });

/** Gestion de PQRS */
Route::get('/gestion-de-pqr', function () { return view('pages.pqr'); });
Route::get('/gestion-de-pqr/procedimiento-y-tramites-de-pqr', function () { return view('pages.procedure-pqr'); });
Route::get('/gestion-de-pqr/registro-de-pqr', function () { return view('pages.register-pqr'); });

/** Indicadores de calidad en la atencion */
Route::get('/indicadores-de-calidad-en-la-atencion', function () { return view('pages.quality-indicators-care'); });

/** Contrato unico de prestacion de servicio fijo */
Route::get('/contrato-unico-de-prestacion-de-servicio-fijo', function () { return view('pages.single-fixed-service-provision-contract'); });

/** Contrato unico de prestacion de servicio fijo */
Route::get('/oficinas-fisicas', function () { return view('pages.physical-offices'); });

/** Contrato unico de prestacion de servicio fijo */
Route::get('/area-de-cobertura', function () { return view('pages.coverage-area'); });

/** Información de Planes y Parrilla de Canales */
Route::get('/informacion-de-planes-y-parrilla-de-canales', function () { return view('pages.information-on-plans-and-channel-lineup'); });

/** Autoridades de Control y Vigilancia */
Route::get('/autoridades-de-control-y-vigilancia', function () { return view('pages.control-and-oversight-authorities'); });
