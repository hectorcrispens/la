@extends('layoutConstantes.baseLayout')

@section('header')
    @include('layoutConstantes.headerReportes')
    <script>
        function graficar() {

            sacar();




            Morris.Donut({
                element: 'donut_chart',
                data: [{
                    label: 'Resuelto',
                    value: 40
                }, {
                    label: 'En Espera',
                    value: 35
                }, {
                    label: 'Sin Resolver',
                    value: 25
                }],
                colors: ['rgb(233, 30, 99)', 'rgb(0, 188, 212)', 'rgb(255, 152, 0)', 'rgb(0, 150, 136)', 'rgb(96, 125, 139)'],
                formatter: function (y) {
                    return y + '%'
                }
            });
            Morris.Donut({
                element: 'donut_chart1',
                data: [{
                    label: 'Resuelto',
                    value: 40
                }, {
                    label: 'En Espera',
                    value: 35
                }, {
                    label: 'Sin Resolver',
                    value: 25
                }],
                colors: ['rgb(233, 30, 99)', 'rgb(0, 188, 212)', 'rgb(255, 152, 0)', 'rgb(0, 150, 136)', 'rgb(96, 125, 139)'],
                formatter: function (y) {
                    return y + '%'
                }
            });
            Morris.Donut({
                element: 'donut_chart2',
                data: [{
                    label: 'Resuelto',
                    value: 40
                }, {
                    label: 'En Espera',
                    value: 35
                }, {
                    label: 'Sin Resolver',
                    value: 25
                }],
                colors: ['rgb(233, 30, 99)', 'rgb(0, 188, 212)', 'rgb(255, 152, 0)', 'rgb(0, 150, 136)', 'rgb(96, 125, 139)'],
                formatter: function (y) {
                    return y + '%'
                }
            });


        }
    </script>

    <style>

        .graph{
            height: auto;
            width: auto;
        }
    </style>
@endsection

@section('menu')
    @include('MesaDeAyuda.menu.CU23menu')
    @endsection

@section('content')


<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>VISUALIZAR INFORMACIÓN POR ÚLTIMO GRUPO DE RESOLUCIÓN</h2>
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

                        <a href="{{ url('/CU23AgruparPorUltimoGrupo2') }}"><button class="btn bg-teal waves-effect m-b-15" type="button">
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
                                        <option value="Clasificación Actual del Ticket">Clasificación Actual del Ticket</option>
                                        <option value="Estado Actual del Ticket">Estado Actual del Ticket</option>
                                        <option value="Fecha de Apertura">Fecha de Apertura</option>
                                        <option value="Fecha de último cambio de estado">Fecha de último cambio de estado</option>
                                        <option value="Último grupo de resolución">Último grupo de resolución</option>
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
                            <table id="tabla" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Grupos de Resolución</th>



                                </tr>
                                </thead>

                                <tbody>

                                <tr>

                                    <td>
                                        <div class="row clearfix">
                                            <div class="header">
                                                <h2>Desarrollo sistema de reclamos</h2>
                                            </div>

                                            <div class="col-md-8 col-xs-12 col-sm-12">
                                                <div class="card">

                                                    <div class="body">

                                                        <div id="donut_chart" class="graph" ></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- List Example -->
                                            <div class="col-md-4 col-xs-12 col-sm-12">

                                                <div class="card">

                                                    <div class="body">
                                                        <div class="list-group">
                                                            <a href="javascript:void(0);" class="list-group-item">
                                                                <span class="badge bg-pink">14 tickets</span> Resueltos
                                                            </a>
                                                            <a href="javascript:void(0);" class="list-group-item">
                                                                <span class="badge bg-cyan">99 tickets</span>Sin Resolver
                                                            </a>
                                                            <a href="javascript:void(0);" class="list-group-item">
                                                                <span class="badge bg-teal">99 tickets</span>En espera
                                                            </a>
                                                            <a href="javascript:void(0);" class="list-group-item">
                                                                <span class="badge bg-orange">21</span>Rechazados
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- #END# List Example -->
                                        </div>

                                        <div class="dd">
                                            <ol class="dd-list">
                                                <li class="dd-item" data-id="1">
                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                        <b class="col-pink">Administrador de base de datos</b>
                                                    </div>
                                                </li>
                                                <li class="dd-item " data-id="2">
                                                    <div class="dd-handle col-pink">LISTADO DE TICKETS: </div>
                                                    <ol class="dd-list">
                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle" style="overflow: hidden; ">
                                                                <b class="col-pink">Número de Ticket: </b><b class="col-grey">12343</b>
                                                            </div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Clasificación actual de Ticket: </b><b class="col-grey">Problema de acceso a la red local o remota</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Estado actual del ticket: </b><b class="col-grey">Abierto Derivado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de Apertura: </b><b class="col-grey">14-08-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Estado de a intervención del grupo en el ticket: </b><b class="col-grey">Intervenido</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="14">
                                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                                        <b>Tiempo real de atención: </b><b class="col-grey">4d-0h-8m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="dd-item" data-id="14">
                                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                                        <b>Tiempo total asignado: </b><b class="col-grey">4d-0h-8m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="dd-item" data-id="14">
                                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                                        <b>Observaciones registradas por el grupo para el ticket: </b><b class="col-grey">Una observación acerca de como se trabajo en el ticket</b>
                                                                    </div>
                                                                </li>
                                                            </ol>
                                                        </li>
                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle" style="overflow: hidden; ">
                                                                <b class="col-pink">Número de Ticket: </b><b class="col-grey">16663</b>
                                                            </div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Clasificación actual de Ticket: </b><b class="col-grey">Problema de acceso a la red local o remota</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Estado actual del ticket: </b><b class="col-grey">Abierto Derivado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de Apertura: </b><b class="col-grey">14-08-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Estado de a intervención del grupo en el ticket: </b><b class="col-grey">Intervenido</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="14">
                                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                                        <b>Tiempo real de atención: </b><b class="col-grey">4d-0h-8m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="dd-item" data-id="14">
                                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                                        <b>Tiempo total asignado: </b><b class="col-grey">4d-0h-8m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="dd-item" data-id="14">
                                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                                        <b>Observaciones registradas por el grupo para el ticket: </b><b class="col-grey">Una observación acerca de como se trabajo en el ticket</b>
                                                                    </div>
                                                                </li>
                                                            </ol>
                                                        </li>
                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle" style="overflow: hidden; ">
                                                                <b class="col-pink">Número de Ticket: </b><b class="col-grey">77843</b>
                                                            </div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Clasificación actual de Ticket: </b><b class="col-grey">Problema de acceso a la red local o remota</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Estado actual del ticket: </b><b class="col-grey">Abierto Derivado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de Apertura: </b><b class="col-grey">14-08-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Estado de a intervención del grupo en el ticket: </b><b class="col-grey">Intervenido</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="14">
                                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                                        <b>Tiempo real de atención: </b><b class="col-grey">4d-0h-8m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="dd-item" data-id="14">
                                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                                        <b>Tiempo total asignado: </b><b class="col-grey">4d-0h-8m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="dd-item" data-id="14">
                                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                                        <b>Observaciones registradas por el grupo para el ticket: </b><b class="col-grey">Una observación acerca de como se trabajo en el ticket</b>
                                                                    </div>
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
                                        <div class="row clearfix">
                                            <div class="header">
                                                <h2>Desarrollo sistema comercial</h2>
                                            </div>

                                            <div class="col-md-8 col-xs-12 col-sm-12">
                                                <div class="card">

                                                    <div class="body">

                                                        <div id="donut_chart1" class="graph" ></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- List Example -->
                                            <div class="col-md-4 col-xs-12 col-sm-12">

                                                <div class="card">

                                                    <div class="body">
                                                        <div class="list-group">
                                                            <a href="javascript:void(0);" class="list-group-item">
                                                                <span class="badge bg-pink">14 tickets</span> Resueltos
                                                            </a>
                                                            <a href="javascript:void(0);" class="list-group-item">
                                                                <span class="badge bg-cyan">99 tickets</span>Sin Resolver
                                                            </a>
                                                            <a href="javascript:void(0);" class="list-group-item">
                                                                <span class="badge bg-teal">99 tickets</span>En espera
                                                            </a>
                                                            <a href="javascript:void(0);" class="list-group-item">
                                                                <span class="badge bg-orange">21</span>Rechazados
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- #END# List Example -->
                                        </div>

                                        <div class="dd">
                                            <ol class="dd-list">
                                                <li class="dd-item" data-id="1">
                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                        <b class="col-pink">Administrador de base de datos</b>
                                                    </div>
                                                </li>
                                                <li class="dd-item " data-id="2">
                                                    <div class="dd-handle col-pink">LISTADO DE TICKETS: </div>
                                                    <ol class="dd-list">
                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle" style="overflow: hidden; ">
                                                                <b class="col-pink">Número de Ticket: </b><b class="col-grey">12343</b>
                                                            </div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Clasificación actual de Ticket: </b><b class="col-grey">Problema de acceso a la red local o remota</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Estado actual del ticket: </b><b class="col-grey">Abierto Derivado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de Apertura: </b><b class="col-grey">14-08-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Estado de a intervención del grupo en el ticket: </b><b class="col-grey">Intervenido</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="14">
                                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                                        <b>Tiempo real de atención: </b><b class="col-grey">4d-0h-8m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="dd-item" data-id="14">
                                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                                        <b>Tiempo total asignado: </b><b class="col-grey">4d-0h-8m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="dd-item" data-id="14">
                                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                                        <b>Observaciones registradas por el grupo para el ticket: </b><b class="col-grey">Una observación acerca de como se trabajo en el ticket</b>
                                                                    </div>
                                                                </li>
                                                            </ol>
                                                        </li>
                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle" style="overflow: hidden; ">
                                                                <b class="col-pink">Número de Ticket: </b><b class="col-grey">16663</b>
                                                            </div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Clasificación actual de Ticket: </b><b class="col-grey">Problema de acceso a la red local o remota</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Estado actual del ticket: </b><b class="col-grey">Abierto Derivado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de Apertura: </b><b class="col-grey">14-08-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Estado de a intervención del grupo en el ticket: </b><b class="col-grey">Intervenido</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="14">
                                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                                        <b>Tiempo real de atención: </b><b class="col-grey">4d-0h-8m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="dd-item" data-id="14">
                                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                                        <b>Tiempo total asignado: </b><b class="col-grey">4d-0h-8m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="dd-item" data-id="14">
                                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                                        <b>Observaciones registradas por el grupo para el ticket: </b><b class="col-grey">Una observación acerca de como se trabajo en el ticket</b>
                                                                    </div>
                                                                </li>
                                                            </ol>
                                                        </li>
                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle" style="overflow: hidden; ">
                                                                <b class="col-pink">Número de Ticket: </b><b class="col-grey">77843</b>
                                                            </div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Clasificación actual de Ticket: </b><b class="col-grey">Problema de acceso a la red local o remota</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Estado actual del ticket: </b><b class="col-grey">Abierto Derivado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de Apertura: </b><b class="col-grey">14-08-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Estado de a intervención del grupo en el ticket: </b><b class="col-grey">Intervenido</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="14">
                                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                                        <b>Tiempo real de atención: </b><b class="col-grey">4d-0h-8m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="dd-item" data-id="14">
                                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                                        <b>Tiempo total asignado: </b><b class="col-grey">4d-0h-8m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="dd-item" data-id="14">
                                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                                        <b>Observaciones registradas por el grupo para el ticket: </b><b class="col-grey">Una observación acerca de como se trabajo en el ticket</b>
                                                                    </div>
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
                                        <div class="row clearfix">
                                            <div class="header">
                                                <h2>Administrador de base de datos</h2>
                                            </div>

                                            <div class="col-md-8 col-xs-12 col-sm-12">
                                                <div class="card">

                                                    <div class="body">

                                                        <div id="donut_chart2" class="graph" ></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- List Example -->
                                            <div class="col-md-4 col-xs-12 col-sm-12">

                                                <div class="card">

                                                    <div class="body">
                                                        <div class="list-group">
                                                            <a href="javascript:void(0);" class="list-group-item">
                                                                <span class="badge bg-pink">14 tickets</span> Resueltos
                                                            </a>
                                                            <a href="javascript:void(0);" class="list-group-item">
                                                                <span class="badge bg-cyan">99 tickets</span>Sin Resolver
                                                            </a>
                                                            <a href="javascript:void(0);" class="list-group-item">
                                                                <span class="badge bg-teal">99 tickets</span>En espera
                                                            </a>
                                                            <a href="javascript:void(0);" class="list-group-item">
                                                                <span class="badge bg-orange">21</span>Rechazados
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- #END# List Example -->
                                        </div>

                                        <div class="dd">
                                            <ol class="dd-list">
                                                <li class="dd-item" data-id="1">
                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                        <b class="col-pink">Administrador de base de datos</b>
                                                    </div>
                                                </li>
                                                <li class="dd-item " data-id="2">
                                                    <div class="dd-handle col-pink">LISTADO DE TICKETS: </div>
                                                    <ol class="dd-list">
                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle" style="overflow: hidden; ">
                                                                <b class="col-pink">Número de Ticket: </b><b class="col-grey">12343</b>
                                                            </div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Clasificación actual de Ticket: </b><b class="col-grey">Problema de acceso a la red local o remota</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Estado actual del ticket: </b><b class="col-grey">Abierto Derivado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de Apertura: </b><b class="col-grey">14-08-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Estado de a intervención del grupo en el ticket: </b><b class="col-grey">Intervenido</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="14">
                                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                                        <b>Tiempo real de atención: </b><b class="col-grey">4d-0h-8m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="dd-item" data-id="14">
                                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                                        <b>Tiempo total asignado: </b><b class="col-grey">4d-0h-8m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="dd-item" data-id="14">
                                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                                        <b>Observaciones registradas por el grupo para el ticket: </b><b class="col-grey">Una observación acerca de como se trabajo en el ticket</b>
                                                                    </div>
                                                                </li>
                                                            </ol>
                                                        </li>
                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle" style="overflow: hidden; ">
                                                                <b class="col-pink">Número de Ticket: </b><b class="col-grey">16663</b>
                                                            </div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Clasificación actual de Ticket: </b><b class="col-grey">Problema de acceso a la red local o remota</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Estado actual del ticket: </b><b class="col-grey">Abierto Derivado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de Apertura: </b><b class="col-grey">14-08-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Estado de a intervención del grupo en el ticket: </b><b class="col-grey">Intervenido</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="14">
                                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                                        <b>Tiempo real de atención: </b><b class="col-grey">4d-0h-8m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="dd-item" data-id="14">
                                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                                        <b>Tiempo total asignado: </b><b class="col-grey">4d-0h-8m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="dd-item" data-id="14">
                                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                                        <b>Observaciones registradas por el grupo para el ticket: </b><b class="col-grey">Una observación acerca de como se trabajo en el ticket</b>
                                                                    </div>
                                                                </li>
                                                            </ol>
                                                        </li>
                                                        <li class="dd-item " data-id="8">
                                                            <div class="dd-handle" style="overflow: hidden; ">
                                                                <b class="col-pink">Número de Ticket: </b><b class="col-grey">77843</b>
                                                            </div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Clasificación actual de Ticket: </b><b class="col-grey">Problema de acceso a la red local o remota</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Estado actual del ticket: </b><b class="col-grey">Abierto Derivado</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="11">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Fecha de Apertura: </b><b class="col-grey">14-08-2016</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="12">
                                                                    <div class="dd-handle" style="overflow: hidden; "><b>Estado de a intervención del grupo en el ticket: </b><b class="col-grey">Intervenido</b></div>
                                                                </li>
                                                                <li class="dd-item" data-id="14">
                                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                                        <b>Tiempo real de atención: </b><b class="col-grey">4d-0h-8m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="dd-item" data-id="14">
                                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                                        <b>Tiempo total asignado: </b><b class="col-grey">4d-0h-8m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="dd-item" data-id="14">
                                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                                        <b>Observaciones registradas por el grupo para el ticket: </b><b class="col-grey">Una observación acerca de como se trabajo en el ticket</b>
                                                                    </div>
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

<!-- Morris Plugin Js -->
<script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('plugins/morrisjs/morris.js') }}"></script>

@endsection