@extends('layoutConstantes.baseLayout')


@section('header')

    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">

    <!-- JQuery DataTable Css -->
    <link href="{{ asset('css/jquery.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/colReorder.bootstrap.min.css') }}" rel="stylesheet">



    <!-- Wait Me Css -->
    <link href="{{ asset('plugins/waitme/waitMe.css') }}" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />


    <!-- JQuery Nestable Css -->
    <link href="{{ asset('plugins/nestable/jquery-nestable.css') }}" rel="stylesheet" />

@endsection


@section('menu')
    @include('GrupoDeResolucion.menu.CU07menu')
    @endsection

@section('content')


<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>LISTADO DE INTERVENCIONES</h2>
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

                        <button class="btn bg-deep-orange waves-effect m-b-15" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false"
                                aria-controls="collapseExample">
                            <i class="material-icons">reorder</i>
                            <span>OPCIONES DE VISUALIZACIÓN</span>
                        </button>


                        <div class="collapse" id="collapseExample2">

                            <div class="button-demo">
                                <button type="button" class="btn bg-grey waves-effect" onclick="expand()">EXPANDIR TODOS</button>
                                <button type="button" class="btn bg-grey waves-effect" onclick="collapse()">COLAPSAR TODOS</button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Panel de funciones -->

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
                                    <th>Tickets</th>


                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <i class="material-icons pull-right">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="{{ url('/CU08ActualizarIntervencion/277') }}">Actualizar estado de la Intervención</a></li>
                                                <li><a href="{{ url('CU09ModificarComentarios/277') }}">Modificar Comentario</a></li>

                                            </ul>
                                        </div>
                                        <div class="dd">

                                            <ol class="dd-list">

                                                <li class="dd-item " data-id="2">
                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                        <b class="col-pink">NÚMERO DE TICKET: </b><b class="col-grey">7777</b>

                                                    </div>
                                                    <ol class="dd-list">
                                                        <li class="dd-item" data-id="3">
                                                            <div class="dd-handle" style="overflow: hidden; "><b>Número de Legajo: </b><b class="col-grey">34543</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="4">
                                                            <div class="dd-handle" style="overflow: hidden; "><b>Clasificación Actual del Ticket: </b><b class="col-grey">Solicitud de usuario para sistemas informaticos que utiliza la empresa</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="5">
                                                            <div class="dd-handle" style="overflow: hidden; "><b>Estado del Ticket: </b><b class="col-grey">Abierto Derivado</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="6">
                                                            <div class="dd-handle" style="overflow: hidden; "><b>Fecha de Apertura: </b><b class="col-grey">11-04-2018</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="7">
                                                            <div class="dd-handle" style="overflow: hidden; ">Estado de la Intervención: </b><b class="col-grey">Atendida</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="7">
                                                            <div class="dd-handle" style="overflow: hidden; ">Fecha de asignación de la Intervención: </b><b class="col-grey">22-05-2018</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="7">
                                                            <div class="dd-handle" style="overflow: hidden; ">Grupo de Resolución: </b><b class="col-grey">Servicio técnico</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="7">
                                                            <div class="dd-handle" style="overflow: hidden; ">Observaciones: </b></div>
                                                            <ol class="dd-list">
                                                                <li>
                                                                    <div class="card">
                                                                        <div class="body" style="background-color: #F9F9F9">
                                                                            <p style="color: #A7A79E">
                                                                                Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget

                                                                                Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.
                                                                            </p>
                                                                        </div>
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
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <i class="material-icons pull-right">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="{{ url('/CU08ActualizarIntervencion/267') }}">Actualizar estado de la Intervención</a></li>
                                                <li><a href="{{ url('CU09ModificarComentarios/267') }}">Modificar Comentario</a></li>

                                            </ul>
                                        </div>
                                        <div class="dd">
                                            <ol class="dd-list">

                                                <li class="dd-item " data-id="2">
                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                        <b class="col-pink">NÚMERO DE TICKET: </b><b class="col-grey">222333</b>
                                                    </div>
                                                    <ol class="dd-list">
                                                        <li class="dd-item" data-id="3">
                                                            <div class="dd-handle" style="overflow: hidden; "><b>Número de Legajo: </b><b class="col-grey">34543</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="4">
                                                            <div class="dd-handle" style="overflow: hidden; "><b>Clasificación Actual del Ticket: </b><b class="col-grey">Solicitud de usuario para sistemas informaticos que utiliza la empresa</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="5">
                                                            <div class="dd-handle" style="overflow: hidden; "><b>Estado del Ticket: </b><b class="col-grey">Abierto Derivado</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="6">
                                                            <div class="dd-handle" style="overflow: hidden; "><b>Fecha de Apertura: </b><b class="col-grey">11-04-2018</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="7">
                                                            <div class="dd-handle" style="overflow: hidden; ">Estado de la Intervención: </b><b class="col-grey">Atendida</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="7">
                                                            <div class="dd-handle" style="overflow: hidden; ">Fecha de asignación de la Intervención: </b><b class="col-grey">22-05-2018</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="7">
                                                            <div class="dd-handle" style="overflow: hidden; ">Grupo de Resolución: </b><b class="col-grey">Servicio técnico</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="7">
                                                            <div class="dd-handle" style="overflow: hidden; ">Observaciones: </b></div>
                                                            <ol class="dd-list">
                                                                <li>
                                                                    <div class="card">
                                                                        <div class="body" style="background-color: #F9F9F9">
                                                                            <p style="color: #A7A79E">
                                                                                Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget

                                                                                Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.
                                                                            </p>
                                                                        </div>
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
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <i class="material-icons pull-right">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="{{ url('/CU08ActualizarIntervencion/542') }}">Actualizar estado de la Intervención</a></li>
                                                <li><a href="{{ url('CU09ModificarComentarios/542') }}">Modificar Comentario</a></li>

                                            </ul>
                                        </div>
                                        <div class="dd">
                                            <ol class="dd-list">

                                                <li class="dd-item " data-id="2">
                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                        <b class="col-pink">NÚMERO DE TICKET: </b><b class="col-grey">222333</b>
                                                    </div>
                                                    <ol class="dd-list">
                                                        <li class="dd-item" data-id="3">
                                                            <div class="dd-handle" style="overflow: hidden; "><b>Número de Legajo: </b><b class="col-grey">34543</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="4">
                                                            <div class="dd-handle" style="overflow: hidden; "><b>Clasificación Actual del Ticket: </b><b class="col-grey">Solicitud de usuario para sistemas informaticos que utiliza la empresa</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="5">
                                                            <div class="dd-handle" style="overflow: hidden; "><b>Estado del Ticket: </b><b class="col-grey">Abierto Derivado</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="6">
                                                            <div class="dd-handle" style="overflow: hidden; "><b>Fecha de Apertura: </b><b class="col-grey">11-04-2018</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="7">
                                                            <div class="dd-handle" style="overflow: hidden; ">Estado de la Intervención: </b><b class="col-grey">Atendida</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="7">
                                                            <div class="dd-handle" style="overflow: hidden; ">Fecha de asignación de la Intervención: </b><b class="col-grey">22-05-2018</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="7">
                                                            <div class="dd-handle" style="overflow: hidden; ">Grupo de Resolución: </b><b class="col-grey">Servicio técnico</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="7">
                                                            <div class="dd-handle" style="overflow: hidden; ">Observaciones: </b></div>
                                                            <ol class="dd-list">
                                                                <li>
                                                                    <div class="card">
                                                                        <div class="body" style="background-color: #F9F9F9">
                                                                            <p style="color: #A7A79E">
                                                                                Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget

                                                                                Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.
                                                                            </p>
                                                                        </div>
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
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <i class="material-icons pull-right">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="{{ url('/CU08ActualizarIntervencion/673') }}">Actualizar estado de la Intervención</a></li>
                                                <li><a href="{{ url('CU09ModificarComentarios/673') }}">Modificar Comentario</a></li>

                                            </ul>
                                        </div>
                                        <div class="dd">
                                            <ol class="dd-list">

                                                <li class="dd-item " data-id="2">
                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                        <b class="col-pink">NÚMERO DE TICKET: </b><b class="col-grey">222333</b>
                                                    </div>
                                                    <ol class="dd-list">
                                                        <li class="dd-item" data-id="3">
                                                            <div class="dd-handle" style="overflow: hidden; "><b>Número de Legajo: </b><b class="col-grey">34543</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="4">
                                                            <div class="dd-handle" style="overflow: hidden; "><b>Clasificación Actual del Ticket: </b><b class="col-grey">Solicitud de usuario para sistemas informaticos que utiliza la empresa</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="5">
                                                            <div class="dd-handle" style="overflow: hidden; "><b>Estado del Ticket: </b><b class="col-grey">Abierto Derivado</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="6">
                                                            <div class="dd-handle" style="overflow: hidden; "><b>Fecha de Apertura: </b><b class="col-grey">11-04-2018</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="7">
                                                            <div class="dd-handle" style="overflow: hidden; ">Estado de la Intervención: </b><b class="col-grey">Atendida</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="7">
                                                            <div class="dd-handle" style="overflow: hidden; ">Fecha de asignación de la Intervención: </b><b class="col-grey">22-05-2018</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="7">
                                                            <div class="dd-handle" style="overflow: hidden; ">Grupo de Resolución: </b><b class="col-grey">Servicio técnico</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="7">
                                                            <div class="dd-handle" style="overflow: hidden; ">Observaciones: </b></div>
                                                            <ol class="dd-list">
                                                                <li>
                                                                    <div class="card">
                                                                        <div class="body" style="background-color: #F9F9F9">
                                                                            <p style="color: #A7A79E">
                                                                                Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget

                                                                                Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.
                                                                            </p>
                                                                        </div>
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
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <i class="material-icons pull-right">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="{{ url('/CU08ActualizarIntervencion/763') }}">Actualizar estado de la Intervención</a></li>
                                                <li><a href="{{ url('/CU09ModificarComentarios/763') }}">Modificar Comentario</a></li>

                                            </ul>
                                        </div>
                                        <div class="dd">
                                            <ol class="dd-list">

                                                <li class="dd-item " data-id="2">
                                                    <div class="dd-handle" style="overflow: hidden; ">
                                                        <b class="col-pink">NÚMERO DE TICKET: </b><b class="col-grey">222333</b>
                                                    </div>
                                                    <ol class="dd-list">
                                                        <li class="dd-item" data-id="3">
                                                            <div class="dd-handle" style="overflow: hidden; "><b>Número de Legajo: </b><b class="col-grey">34543</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="4">
                                                            <div class="dd-handle" style="overflow: hidden; "><b>Clasificación Actual del Ticket: </b><b class="col-grey">Solicitud de usuario para sistemas informaticos que utiliza la empresa</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="5">
                                                            <div class="dd-handle" style="overflow: hidden; "><b>Estado del Ticket: </b><b class="col-grey">Abierto Derivado</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="6">
                                                            <div class="dd-handle" style="overflow: hidden; "><b>Fecha de Apertura: </b><b class="col-grey">11-04-2018</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="7">
                                                            <div class="dd-handle" style="overflow: hidden; ">Estado de la Intervención: </b><b class="col-grey">Atendida</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="7">
                                                            <div class="dd-handle" style="overflow: hidden; ">Fecha de asignación de la Intervención: </b><b class="col-grey">22-05-2018</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="7">
                                                            <div class="dd-handle" style="overflow: hidden; ">Grupo de Resolución: </b><b class="col-grey">Servicio técnico</b></div>
                                                        </li>
                                                        <li class="dd-item" data-id="7">
                                                            <div class="dd-handle" style="overflow: hidden; ">Observaciones: </b></div>
                                                            <ol class="dd-list">
                                                                <li>
                                                                    <div class="card">
                                                                        <div class="body" style="background-color: #F9F9F9">
                                                                            <p style="color: #A7A79E">
                                                                                Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget

                                                                                Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.
                                                                            </p>
                                                                        </div>
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

    <!-- Jquery Nestable -->
    <script src="{{ asset('plugins/nestable/jquery.nestable.js') }}"></script>


    <script src="{{ asset('js/pages/ui/sortable-nestable.js') }}"></script>


    <!-- Slimscroll Plugin Js -->
<script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>




<!-- Custom Js -->

<script src="{{ asset('js/pages/forms/basic-form-elements.js') }}"></script>


<!-- Jquery DataTable Plugin Js -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}"></script>




<script>
    $(document).ready(function() {
        $('#tabla').DataTable({"language": {
            "search": "Buscar:",
            "zeroRecords": "No se encontraron Resultados",
            "infoFiltered": " - filtrado sobre _MAX_ entradas",
            "infoEmpty": "Ninguna Entrada para mostrar",
            "paginate": {
                "first":      "Primero",
                "last":       "Último",
                "next":       "Próximo",
                "previous":   "Previo"
            },"lengthMenu":     "Mostrar _MENU_ entradas",
            "info":           "Mostrando _START_ de _END_ de _TOTAL_ entradas",
            colReorder: true
        }
        });


    } );
</script>

<script type="text/javascript">
    function collapse(){
        $('.dd').nestable('collapseAll');
    }
    function expand(){
        $('.dd').nestable('expandAll');
    }
</script>


@endsection