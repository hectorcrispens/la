<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('prueba', 'TicketController@prueba');

Auth::routes();

Route::get('/home', 'HomeController@index');


/*--------------------------------------------------------------------------------------------------------------------*/
/*  --------------------    CONJUNTOS DE RUTAS PARA TICKETCONTROLLER    -------------------- */
/*--------------------------------------------------------------------------------------------------------------------*/
// CASO DE USO O1 REGISTRAR TICKET
Route::get('/CU01registrarTicket', 'TicketController@RegistrarTicket' );

Route::get('/CU01registrarTicket2', 'TicketController@RegistrarTicket2' );

// CASO DE USO 02 CONSULTAR TICKET
Route::get('/CU02ConsultarTicket', 'TicketController@ConsultarTicket' );

Route::get('/CU02ConsultarTicket2', 'TicketController@ConsultarTicket2' );

Route::get('/CU02ConsultarTicket3/{id}', 'TicketController@VerDetalle' );


//CASO DE USO 03 CERRAR TICKET
Route::get('CU03CerrarTicket/{id}', 'TicketController@Cerrar');


//CASO DE USO 04 DERIVAR TICKET
Route::get('/CU04DerivarTicket/{id}', 'TicketController@Derivar');

//CASO DE USO 20 CLASIFICACION POR TICKET
Route::get('/CU20AgruparPorTicket', 'TicketController@AgruparPorTicket');
Route::get('/CU20AgruparPorTicket2', 'TicketController@ImprimirCU20');

//CASO DE USO 21 CLASIFICACION POR LEGAJO
Route::get('/CU21AgruparPorLegajo', 'TicketController@AgruparPorLegajo');
Route::get('/CU21AgruparPorLegajo2', 'TicketController@ImprimirCU21');

//CASO DE USO 22 CLASIFICACION POR ESTADO
Route::get('/CU22AgruparPorEstado', 'TicketController@AgruparPorEstado');
Route::get('/CU22AgruparPorEstado2', 'TicketController@ImprimirCU22');

//CASO DE USO 23 CLASIFICACION POR GRUPO DE RESOLUCION
Route::get('/CU23AgruparPorUltimoGrupo', 'TicketController@AgruparPorUltimoGrupo');
Route::get('/CU23AgruparPorUltimoGrupo2', 'TicketController@ImprimirCU23');


//CASO DE USO 24 CLASIFICACION POR CLASIFICACION
Route::get('/CU24AgruparPorClasificacionTicket', 'TicketController@AgruparPorClasificacion');
Route::get('/CU24AgruparPorClasificacionTicket2', 'TicketController@ImprimirCU24');



/*--------------------------------------------------------------------------------------------------------------------*/
/*  -------------------- CONJUNTO DE RUTAS PARA INTERVENCIONESCONTROLLER  --------------------*/
/*--------------------------------------------------------------------------------------------------------------------*/


//CASO DE USO 07 CONSULTAR INTERVENCIONES
Route::get('/CU07ConsultarIntervenciones', 'IntervencionController@ConsultarIntervenciones');
Route::get('/CU07ConsultarIntervenciones2', 'IntervencionController@ConsultarIntervenciones2');

//CASO DE USO 08 ACTUALIZAR INTERVENCION
Route::get('/CU08ActualizarIntervencion/{idIntervencion}', 'IntervencionController@Actualizar');

//CASO DE USO 09 MODIFICAR COMENTARIOS
Route::get('/CU09ModificarComentarios/{idIntervencion}', 'IntervencionController@ModificarComentario');

/*--------------------------------------------------------------------------------------------------------------------*/
/*   --------------------  CONJUNTO DE RUTAS PARA CLASIFICACIONCONTROLLER  -------------------- */
/*--------------------------------------------------------------------------------------------------------------------*/

//CASO DE USO 10 REGISTRAR CLASIFICACION DE TICKET
Route::get('CU10RegistrarClasificacionDeTickets', 'ClasificacionController@Registrar');

//CASO DE USO 11 BUSCAR CLASIFICACION DE TICKET
Route::get('/CU11BuscarClasifTicketsParte1', 'ClasificacionController@Buscar');
Route::get('/CU11ListaClasificaciones', 'ClasificacionController@Lista');
Route::get('/CU11DetalleClasificacion', 'ClasificacionController@Detalle');

//CASO DE USO 12 MODIFICAR CLASIFICACION DE TICKET
Route::get('/CU12ModificarClasificacion', 'ClasificacionController@Modificar');