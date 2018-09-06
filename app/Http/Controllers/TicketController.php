<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class TicketController extends Controller
{
    //

    public function prueba(Request $request){
        $user = Auth::user();
        $ruta = $request->route()->getName();


        if ($user !="") {
            return view('prueba',['load' => '', 'titulo'=>'saca los trapos al sol', 'ruta'=>$ruta ] );
        }
        else{
            return redirect('/login');
        }

    }

    public function RegistrarTicket(){
        $load='';
        $titulo='registrar ticket';
        $user = Auth::user();
        if ($user !="") {
            return view('MesaDeAyuda.CU01RegistrarTicket',['load' => $load, 'titulo'=>$titulo,] );
        }
        else{
            return redirect('/login');
        }
    }

    public function RegistrarTicket2(){
        $load='';
        $titulo='acciones requeridas';
        $user = Auth::user();
        if ($user !="") {
            return view('MesaDeAyuda.CU01RegistrarTicket2',['load' => $load, 'titulo'=>$titulo,] );
        }
        else{
            return redirect('/login');
        }
    }

    public function ConsultarTicket( Request $request){
        $load='';
        $titulo='consultar ticket';
        $user = Auth::user();
        if ($user !="") {
            return view('MesaDeAyuda.CU02ConsultarTicket',['load' => $load, 'titulo'=>$titulo,] );
        }
        else{
            return redirect('/login');
        }
    }

    public function ConsultarTicket2( Request $request){
        $load='onload=sacar()';
        $titulo='consultar ticket';
        $user = Auth::user();
        if ($user !="") {
            return view('MesaDeAyuda.CU02ConsultarTicket2',['load' => $load, 'titulo'=>$titulo] );
        }
        else{
            return redirect('/login');
        }
    }

    public function VerDetalle($id){
        $load='onload=sacar()';
        //$btnD="disabled";
        $btnD="";
        $btnC="";
        $titulo='detalle de ticket';
        $user = Auth::user();
        if ($user !="") {
            return view('MesaDeAyuda.CU02ConsultarTicket3',['load' => $load, 'titulo'=>$titulo,
                'idTicket'=>$id, 'btnDerivar' => $btnD, 'btnCerrar' => $btnC] );
        }
        else{
            return redirect('/login');
        }
    }

    public function Derivar($id){
        $load='onload=sacar()';
        $titulo='derivar ticket';
        $user = Auth::user();
        if ($user !="") {
            return view('MesaDeAyuda.CU04DerivarTicket',['load' => $load, 'titulo'=>$titulo, 'idTicket'=>$id] );
        }
        else{
            return redirect('/login');
        }
    }

    public function Cerrar($id){
        $load='onload=sacar()';
        $titulo='cerrar ticket';
        $user = Auth::user();
        if ($user !="") {
            return view('MesaDeAyuda.CU03CerrarTicket',['load' => $load, 'titulo'=>$titulo, 'idTicket'=>$id] );
        }
        else{
            return redirect('/login');
        }
    }

    public function AgruparPorTicket(){
        $load='onload=sacar()';
        $titulo='Agrupar Por Ticket';
        $user = Auth::user();
        if ($user !="") {
            return view('MesaDeAyuda.CU20AgruparPorTicket',['load' => $load, 'titulo'=>$titulo] );
        }
        else{
            return redirect('/login');
        }
    }



    public function AgruparPorLegajo(){
        $load='onload=sacar()';
        $titulo='Agrupar Por Legajo';
        $user = Auth::user();
        if ($user !="") {
            return view('MesaDeAyuda.CU21AgruparPorLegajo',['load' => $load, 'titulo'=>$titulo] );
        }
        else{
            return redirect('/login');
        }
    }

    public function AgruparPorEstado(){
        $load='onload=sacar()';
        $titulo='Agrupar Por Estado';
        $user = Auth::user();
        if ($user !="") {
            return view('MesaDeAyuda.CU22AgruparPorEstado',['load' => $load, 'titulo'=>$titulo] );
        }
        else{
            return redirect('/login');
        }
    }

    public function AgruparPorUltimoGrupo(){
        $load='onload=graficar()';
        $titulo='Agrupar Por Último Grupo de Resolución';
        $user = Auth::user();
        if ($user !="") {
            return view('MesaDeAyuda.CU23AgruparPorUltimoGrupo',['load' => $load, 'titulo'=>$titulo] );
        }
        else{
            return redirect('/login');
        }
    }

    public function AgruparPorClasificacion(){
        $load='onload=sacar()';
        $titulo='Agrupar Por Clasificación de Ticket';
        $user = Auth::user();
        if ($user !="") {
            return view('MesaDeAyuda.CU24AgruparPorClasificacionTicket',['load' => $load, 'titulo'=>$titulo] );
        }
        else{
            return redirect('/login');
        }
    }


    // FUNCIONES DE IMPRESION DE REPORTES

    public function ImprimirCU20(){
        $load='onload=sacar()';
        $titulo='Agrupar Por Ticket';
        $user = Auth::user();
        if ($user !="") {
            return view('MesaDeAyuda.CU20AgruparPorTicket2',['load' => $load, 'titulo'=>$titulo] );
        }
        else{
            return redirect('/login');
        }
    }
    public function ImprimirCU21(){
        $load='onload=sacar()';
        $titulo='Agrupar Por Legajo';
        $user = Auth::user();
        if ($user !="") {
            return view('MesaDeAyuda.CU21AgruparPorLegajo2',['load' => $load, 'titulo'=>$titulo] );
        }
        else{
            return redirect('/login');
        }
    }

    public function ImprimirCU22(){
        $load='onload=sacar()';
        $titulo='Agrupar Por Estado';
        $user = Auth::user();
        if ($user !="") {
            return view('MesaDeAyuda.CU22AgruparPorEstado2',['load' => $load, 'titulo'=>$titulo] );
        }
        else{
            return redirect('/login');
        }
    }

    public function ImprimirCU23(){
        $load='onload=sacar()';
        $titulo='Agrupar Por Último Grupo de Resolución';
        $user = Auth::user();
        if ($user !="") {
            return view('MesaDeAyuda.CU23AgruparPorUltimoGrupo2',['load' => $load, 'titulo'=>$titulo] );
        }
        else{
            return redirect('/login');
        }
    }

    public function ImprimirCU24(){
        $load='onload=sacar()';
        $titulo='Agrupar Por Clasificación de Ticket';
        $user = Auth::user();
        if ($user !="") {
            return view('MesaDeAyuda.CU24AgruparPorClasificacionTicket2',['load' => $load, 'titulo'=>$titulo] );
        }
        else{
            return redirect('/login');
        }
    }

   }
