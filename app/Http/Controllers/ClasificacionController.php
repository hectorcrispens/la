<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClasificacionController extends Controller
{
    //
    public function Registrar(){
        $user = Auth::user();
        $load='';
        $titulo='Registrar Clasificación';

        if ($user !="") {
            return view('GrupoDeResolucion.CU10RegistrarClasificacionDeTickets',['load' => $load, 'titulo'=>$titulo] );
        }
        else{
            return redirect('/login');
        }
    }

    public function Buscar(){
        $user = Auth::user();
        $load='';
        $titulo='Buscar Clasificación de Ticket';

        if ($user !="") {
            return view('GrupoDeResolucion.CU11BuscarClasifTicketsParte1',['load' => $load, 'titulo'=>$titulo] );
        }
        else{
            return redirect('/login');
        }
    }

    public function Lista(){
        $user = Auth::user();
        $load='';
        $titulo='Lista de Clasificaciones de Ticket';

        if ($user !="") {
            return view('GrupoDeResolucion.CU11BuscarClasifTicketsParte2',['load' => $load, 'titulo'=>$titulo] );
        }
        else{
            return redirect('/login');
        }
    }

    public function Detalle(){
        $user = Auth::user();
        $load='';
        $titulo='Detalle de Clasificacion de Ticket';

        if ($user !="") {
            return view('GrupoDeResolucion.CU11BuscarClasifTicketsParte3',['load' => $load, 'titulo'=>$titulo] );
        }
        else{
            return redirect('/login');
        }
    }

    public function Modificar(){
        $user = Auth::user();
        $load='onload=sacar()';
        $titulo='Modificar de Clasificacion de Ticket';

        if ($user !="") {
            return view('GrupoDeResolucion.CU12ModificarClasificacion',['load' => $load, 'titulo'=>$titulo] );
        }
        else{
            return redirect('/login');
        }
    }
}
