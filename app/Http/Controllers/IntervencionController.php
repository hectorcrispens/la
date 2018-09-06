<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IntervencionController extends Controller
{
    //
    public function ConsultarIntervenciones(){
        $user = Auth::user();
        $load='onload=sacar()';
        $titulo='consultar intervenciones';

        if ($user !="") {
            return view('GrupoDeResolucion.CU07ConsultarIntervenciones',['load' => $load, 'titulo'=>$titulo] );
        }
        else{
            return redirect('/login');
        }
    }

    public function ConsultarIntervenciones2(){
        $user = Auth::user();
        $load='onload=sacar()';
        $titulo='consultar intervenciones';

        if ($user !="") {
            return view('GrupoDeResolucion.CU07ConsultarIntervenciones2',['load' => $load, 'titulo'=>$titulo] );
        }
        else{
            return redirect('/login');
        }
    }

    public function Actualizar($id){
        $user = Auth::user();
        $load='onload=sacar()';
        $titulo='Actualizar intervenciones '.$id;

        if ($user !="") {
            return view('GrupoDeResolucion.CU08ActualizarIntervencion',['load' => $load, 'titulo'=>$titulo] );
        }
        else{
            return redirect('/login');
        }
    }
    public function ModificarComentario($id){
        $user = Auth::user();
        $load="";
        $titulo='Actualizar intervenciones '.$id;

        if ($user !="") {
            return view('GrupoDeResolucion.CU09ModificarComentarios',['load' => $load, 'titulo'=>$titulo] );
        }
        else{
            return redirect('/login');
        }
    }
}
