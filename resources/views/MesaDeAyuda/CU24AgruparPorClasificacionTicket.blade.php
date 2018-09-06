@extends('layoutConstantes.baseLayout')


@section('header')
    @include('layoutConstantes.headerReportes')
@endsection

@section('menu')
    @include('MesaDeAyuda.menu.CU24menu')
    @endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>VISUALIZAR INFORMACIÓN POR CLASIFICACIÓN DE TICKET</h2>
        </div>

        <!-- Hover Zoom Effect -->
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons col-pink">collections_bookmark</i>
                    </div>
                    <div class="content">
                        <div class="text">TICKETS</div>
                        <div class="number">1542</div>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons col-blue">person</i>
                    </div>
                    <div class="content">
                        <div class="text">LEGAJOS</div>
                        <div class="number">92</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons col-light-blue">check_circle</i>
                    </div>
                    <div class="content">
                        <div class="text">A LA ESPERA OK</div>
                        <div class="number">154</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon">

                        <i class="material-icons col-cyan">lock</i>

                    </div>
                    <div class="content">
                        <div class="text">CERRADOS</div>
                        <div class="number">212</div>

                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Hover Zoom Effect -->

        <!-- Panel de Funciones -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            PANEL DE FUNCIONES
                            <small>Funciones de impresión o expandir y colapsar la información de la tabla</small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">

                        <a href="{{ url('/CU24AgruparPorClasificacionTicket2') }}"><button class="btn bg-teal waves-effect m-b-15" type="button" onclick="window.location.assign('CU20AgruparPorTicket2.blade.php')">
                            <i class="material-icons">print</i>
                            <span>IMPRIMIR</span>
                        </button></a>
                        <button class="btn bg-pink waves-effect m-b-15" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false"
                                aria-controls="collapseExample">
                            <i class="material-icons">reorder</i>
                            <span>OPCIONES DE VISUALIZACIÓN</span>
                        </button>
                        <button class="btn bg-deep-orange waves-effect m-b-15" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false"
                                aria-controls="collapseExample">
                            <i class="material-icons">import_export</i>
                            <span>REORDENAR</span>
                        </button>

                        <div class="collapse" id="collapseExample2">

                            <div class="button-demo">
                                <button type="button" class="btn bg-grey waves-effect" onclick="expand()">EXPANDIR TODOS</button>
                                <button type="button" class="btn bg-grey waves-effect" onclick="collapse()">COLAPSAR TODOS</button>
                            </div>

                        </div>
                        <div class="collapse" id="collapseExample3">
                            <div class="row clearfix">
                                <div class="col-md-12"><br><small>Reordenar los ticket según los siguientes criterios</small>


                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="tg" data-role="tagsinput" value="">
                                        </div>
                                    </div>

                                    <label for="mySelect"><small>Seleccione de la lista los criterios por los cuales quiere ordenar y el orden de prioridades por los cuales será ordenado</small></label>

                                    <select id="mySelect" name="mySelect" style="width:100%;">
                                        <option value="Nro de Ticket">Nro de Ticket</option>
                                        <option value="Legajo">Legajo</option>
                                        <option value="Estado Actual del Ticket">Estado Actual del Ticket</option>
                                        <option value="Fecha de Apertura">Fecha de Apertura</option>
                                        <option value="Grupo Actual de Resolución">Grupo Actual de Resolución</option>

                                    </select>


                                </div>

                            </div>
                            <!-- BOTONES-->
                            <div class="row clearfix">

                                <div class="col-sm-12">
                                    <div class="button-demo">


                                        <button type="button" class="btn bg-grey m-t-15 waves-effect" onclick="myFunction()">SELECCIONAR</button>
                                        <button id="cancel" type="button" class="btn bg-cyan m-t-15 waves-effect" >REORDENAR</button>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Panel de funciones -->


        <!-- Panel con salida de datos -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            CRITERIOS SELECCIONADOS EN LA BÚSQUEDA
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <form>
                            <!-- NUMERO DE TICKET Y NUMERO DE LEGAJO -->
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div id="inp1" class="form-line" >
                                            <label class="form-label" style=" top: -10px; font-size: 12px;">Número de Ticket</label>
                                            <input type="text" class="form-control" readonly value="232434" disabled>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div id="inp2" class="form-line">
                                            <label class="form-label" style=" top: -10px; font-size: 12px;">Número de Legajo</label>
                                            <input type="text" class="form-control" readonly value="2434" disabled>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div id="inp7" class="form-line">
                                            <label class="form-label" style=" top: -10px; font-size: 12px;">Estado</label>
                                            <input type="text" class="form-control" readonly value="abierto sin derivar" disabled>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- CLASIFICACION DE TICKET-->
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div id="inp3" class="form-line">
                                            <label class="form-label" style=" top: -10px; font-size: 12px;">Clasificación de Ticket</label>
                                            <input type="text" class="form-control" disabled readonly value="Problema en el funcionamiento del Sistema Operativo de PC">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div id="inp4" class="form-line">
                                            <label class="form-label" style=" top: -10px; font-size: 12px;">Grupo de Resolución</label>
                                            <input type="text" class="form-control" disabled readonly value="Administrador de base de datos">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div id="inp5" class="form-line">
                                            <div class="demo-masked-input">
                                                <label class="form-label" style=" top: -10px; font-size: 12px;">Fecha de Creación</label>
                                                <input type="text" class="form-control" disabled readonly value="30/07/2016">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>





                            <!-- FECHA DE CREACION Y ULTIMO CAMBIO -->
                            <div class="row clearfix">



                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div id="inp6" class="form-line">

                                            <label class="form-label" style=" top: -10px; font-size: 12px;">Fecha de último cambio de estado</label>
                                            <input type="text" class="form-control" readonly value="30/07/2016" disabled>


                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                                    <div class="demo-masked-input">
                                        <select class="form-control show-tick" title="Orden">

                                            <option>ascendente</option>
                                            <option>descendete</option>

                                        </select>

                                    </div>

                                </div>



                            </div>






                        </form>
                    </div>
                </div>
            </div>


        </div>
        <!-- #END# panel con salida de datos -->

        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            LISTA DE RESULTADOS
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table id="tabla" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Clasificaciones de Tickets</th>


                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>
                                        <div class="dd">
                                            <ol class="dd-list">
                                                <li class="dd-item" data-id="1">
                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                        <b class="col-pink">Solicitud de usuario para sistemas informaticos que utiliza la empresa</b>
                                                    </div>
                                                </li>
                                                <li class="dd-item " data-id="2">
                                                    <div class="dd-handle col-pink">LISTA DE TICKETS: </div>
                                                    <ol class="dd-list">

                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle col-light-blue" style="overflow: hidden; "><b>Número de Ticket: </b><b class="col-grey">56566</b></div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Número de legajo: </b><b class="col-grey">4008</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Esta del Ticket: </b><b class="col-grey">Cerrado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de apertura: </b><b class="col-grey">14-11-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Último grupo de resolución: </b><b class="col-grey">Servicio técnico</b></div>

                                                                </li>

                                                            </ol>
                                                        </li>
                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle col-light-blue" style="overflow: hidden; "><b>Número de Ticket: </b><b class="col-grey">56566</b></div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Número de legajo: </b><b class="col-grey">4008</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Esta del Ticket: </b><b class="col-grey">Cerrado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de apertura: </b><b class="col-grey">14-11-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Último grupo de resolución: </b><b class="col-grey">Servicio técnico</b></div>

                                                                </li>

                                                            </ol>
                                                        </li>
                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle col-light-blue" style="overflow: hidden; "><b>Número de Ticket: </b><b class="col-grey">56566</b></div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Número de legajo: </b><b class="col-grey">4008</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Esta del Ticket: </b><b class="col-grey">Cerrado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de apertura: </b><b class="col-grey">14-11-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Último grupo de resolución: </b><b class="col-grey">Servicio técnico</b></div>

                                                                </li>

                                                            </ol>
                                                        </li>
                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle col-light-blue" style="overflow: hidden; "><b>Número de Ticket: </b><b class="col-grey">56566</b></div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Número de legajo: </b><b class="col-grey">4008</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Esta del Ticket: </b><b class="col-grey">Cerrado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de apertura: </b><b class="col-grey">14-11-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Último grupo de resolución: </b><b class="col-grey">Servicio técnico</b></div>

                                                                </li>

                                                            </ol>
                                                        </li>

                                                    </ol>
                                                </li>

                                            </ol>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dd">
                                            <ol class="dd-list">
                                                <li class="dd-item" data-id="1">
                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                        <b class="col-pink">Cambio de Configuracion de Sistema Operativo de PC</b>
                                                    </div>
                                                </li>
                                                <li class="dd-item " data-id="2">
                                                    <div class="dd-handle col-pink">LISTA DE TICKETS: </div>
                                                    <ol class="dd-list">

                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle col-light-blue" style="overflow: hidden; "><b>Número de Ticket: </b><b class="col-grey">56566</b></div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Número de legajo: </b><b class="col-grey">4008</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Esta del Ticket: </b><b class="col-grey">Cerrado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de apertura: </b><b class="col-grey">14-11-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Último grupo de resolución: </b><b class="col-grey">Servicio técnico</b></div>

                                                                </li>

                                                            </ol>
                                                        </li>
                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle col-light-blue" style="overflow: hidden; "><b>Número de Ticket: </b><b class="col-grey">56566</b></div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Número de legajo: </b><b class="col-grey">4008</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Esta del Ticket: </b><b class="col-grey">Cerrado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de apertura: </b><b class="col-grey">14-11-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Último grupo de resolución: </b><b class="col-grey">Servicio técnico</b></div>

                                                                </li>

                                                            </ol>
                                                        </li>
                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle col-light-blue" style="overflow: hidden; "><b>Número de Ticket: </b><b class="col-grey">56566</b></div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Número de legajo: </b><b class="col-grey">4008</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Esta del Ticket: </b><b class="col-grey">Cerrado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de apertura: </b><b class="col-grey">14-11-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Último grupo de resolución: </b><b class="col-grey">Servicio técnico</b></div>

                                                                </li>

                                                            </ol>
                                                        </li>
                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle col-light-blue" style="overflow: hidden; "><b>Número de Ticket: </b><b class="col-grey">56566</b></div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Número de legajo: </b><b class="col-grey">4008</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Esta del Ticket: </b><b class="col-grey">Cerrado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de apertura: </b><b class="col-grey">14-11-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Último grupo de resolución: </b><b class="col-grey">Servicio técnico</b></div>

                                                                </li>

                                                            </ol>
                                                        </li>

                                                    </ol>
                                                </li>

                                            </ol>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dd">
                                            <ol class="dd-list">
                                                <li class="dd-item" data-id="1">
                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                        <b class="col-pink">Solicitud de soporte en el uso de alguna aplicacion o sistema</b>
                                                    </div>
                                                </li>
                                                <li class="dd-item " data-id="2">
                                                    <div class="dd-handle col-pink">LISTA DE TICKETS: </div>
                                                    <ol class="dd-list">

                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle col-light-blue" style="overflow: hidden; "><b>Número de Ticket: </b><b class="col-grey">56566</b></div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Número de legajo: </b><b class="col-grey">4008</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Esta del Ticket: </b><b class="col-grey">Cerrado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de apertura: </b><b class="col-grey">14-11-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Último grupo de resolución: </b><b class="col-grey">Servicio técnico</b></div>

                                                                </li>

                                                            </ol>
                                                        </li>
                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle col-light-blue" style="overflow: hidden; "><b>Número de Ticket: </b><b class="col-grey">56566</b></div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Número de legajo: </b><b class="col-grey">4008</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Esta del Ticket: </b><b class="col-grey">Cerrado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de apertura: </b><b class="col-grey">14-11-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Último grupo de resolución: </b><b class="col-grey">Servicio técnico</b></div>

                                                                </li>

                                                            </ol>
                                                        </li>
                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle col-light-blue" style="overflow: hidden; "><b>Número de Ticket: </b><b class="col-grey">56566</b></div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Número de legajo: </b><b class="col-grey">4008</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Esta del Ticket: </b><b class="col-grey">Cerrado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de apertura: </b><b class="col-grey">14-11-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Último grupo de resolución: </b><b class="col-grey">Servicio técnico</b></div>

                                                                </li>

                                                            </ol>
                                                        </li>
                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle col-light-blue" style="overflow: hidden; "><b>Número de Ticket: </b><b class="col-grey">56566</b></div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Número de legajo: </b><b class="col-grey">4008</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Esta del Ticket: </b><b class="col-grey">Cerrado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de apertura: </b><b class="col-grey">14-11-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Último grupo de resolución: </b><b class="col-grey">Servicio técnico</b></div>

                                                                </li>

                                                            </ol>
                                                        </li>

                                                    </ol>
                                                </li>

                                            </ol>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dd">
                                            <ol class="dd-list">
                                                <li class="dd-item" data-id="1">
                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                        <b class="col-pink">Problemas con el correo electronico</b>
                                                    </div>
                                                </li>
                                                <li class="dd-item " data-id="2">
                                                    <div class="dd-handle col-pink">LISTA DE TICKETS: </div>
                                                    <ol class="dd-list">

                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle col-light-blue" style="overflow: hidden; "><b>Número de Ticket: </b><b class="col-grey">56566</b></div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Número de legajo: </b><b class="col-grey">4008</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Esta del Ticket: </b><b class="col-grey">Cerrado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de apertura: </b><b class="col-grey">14-11-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Último grupo de resolución: </b><b class="col-grey">Servicio técnico</b></div>

                                                                </li>

                                                            </ol>
                                                        </li>
                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle col-light-blue" style="overflow: hidden; "><b>Número de Ticket: </b><b class="col-grey">56566</b></div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Número de legajo: </b><b class="col-grey">4008</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Esta del Ticket: </b><b class="col-grey">Cerrado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de apertura: </b><b class="col-grey">14-11-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Último grupo de resolución: </b><b class="col-grey">Servicio técnico</b></div>

                                                                </li>

                                                            </ol>
                                                        </li>
                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle col-light-blue" style="overflow: hidden; "><b>Número de Ticket: </b><b class="col-grey">56566</b></div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Número de legajo: </b><b class="col-grey">4008</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Esta del Ticket: </b><b class="col-grey">Cerrado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de apertura: </b><b class="col-grey">14-11-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Último grupo de resolución: </b><b class="col-grey">Servicio técnico</b></div>

                                                                </li>

                                                            </ol>
                                                        </li>
                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle col-light-blue" style="overflow: hidden; "><b>Número de Ticket: </b><b class="col-grey">56566</b></div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Número de legajo: </b><b class="col-grey">4008</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Esta del Ticket: </b><b class="col-grey">Cerrado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de apertura: </b><b class="col-grey">14-11-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Último grupo de resolución: </b><b class="col-grey">Servicio técnico</b></div>

                                                                </li>

                                                            </ol>
                                                        </li>

                                                    </ol>
                                                </li>

                                            </ol>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dd">
                                            <ol class="dd-list">
                                                <li class="dd-item" data-id="1">
                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                        <b class="col-pink">Mal funcionamiento de hardware</b>
                                                    </div>
                                                </li>
                                                <li class="dd-item " data-id="2">
                                                    <div class="dd-handle col-pink">LISTA DE TICKETS: </div>
                                                    <ol class="dd-list">

                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle col-light-blue" style="overflow: hidden; "><b>Número de Ticket: </b><b class="col-grey">56566</b></div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Número de legajo: </b><b class="col-grey">4008</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Esta del Ticket: </b><b class="col-grey">Cerrado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de apertura: </b><b class="col-grey">14-11-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Último grupo de resolución: </b><b class="col-grey">Servicio técnico</b></div>

                                                                </li>

                                                            </ol>
                                                        </li>
                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle col-light-blue" style="overflow: hidden; "><b>Número de Ticket: </b><b class="col-grey">56566</b></div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Número de legajo: </b><b class="col-grey">4008</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Esta del Ticket: </b><b class="col-grey">Cerrado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de apertura: </b><b class="col-grey">14-11-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Último grupo de resolución: </b><b class="col-grey">Servicio técnico</b></div>

                                                                </li>

                                                            </ol>
                                                        </li>
                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle col-light-blue" style="overflow: hidden; "><b>Número de Ticket: </b><b class="col-grey">56566</b></div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Número de legajo: </b><b class="col-grey">4008</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Esta del Ticket: </b><b class="col-grey">Cerrado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de apertura: </b><b class="col-grey">14-11-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Último grupo de resolución: </b><b class="col-grey">Servicio técnico</b></div>

                                                                </li>

                                                            </ol>
                                                        </li>
                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle col-light-blue" style="overflow: hidden; "><b>Número de Ticket: </b><b class="col-grey">56566</b></div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Número de legajo: </b><b class="col-grey">4008</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Esta del Ticket: </b><b class="col-grey">Cerrado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de apertura: </b><b class="col-grey">14-11-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Último grupo de resolución: </b><b class="col-grey">Servicio técnico</b></div>

                                                                </li>

                                                            </ol>
                                                        </li>

                                                    </ol>
                                                </li>

                                            </ol>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->




    </div>
</section>

@endsection

@section('footer')
    @include('layoutConstantes.footerReportes')
    @endsection