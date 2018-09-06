@extends('layoutConstantes.baseLayout')


@section('header')

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{ asset('plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="{{ asset('plugins/waitme/waitMe.css') }}" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />

    <!-- datedrooper -->
    <link href="{{ asset('plugins/datedrooper/datedropper.css') }}" rel="stylesheet" type="text/css" />

 @endsection

@section('menu')
    @include('MesaDeAyuda.menu.CU02menu01')
    @endsection


@section('content')
    

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>CONSULTAR TICKETS</h2>
        </div>



        <!-- Multi Column -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            INGRESE ALGUN CRITERIO DE BUSQUEDA
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
                                <div class="col-md-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" >
                                            <label class="form-label">Numero de Ticket</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" >
                                            <label class="form-label">Numero de Legajo</label>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- CLASIFICACION DE TICKET-->
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">

                                            <select class="form-control show-tick" title="Clasificacion de ticket">
                                                <option >Todos</option>
                                                <option>Cambio de Configuracion de Sistema Operativo de PC</option>
                                                <option>Problema en el funcionamiento del Sistema Operativo de PC
                                                </option>
                                                <option>Solicitud de instalacion de aplicaciones</option>
                                                <option>Mal funcionamiento de hardware</option>
                                                <option>Problema de autenticación en los distintos sistemas</option>
                                                <option>Problema de acceso a la red local o remota</option>
                                                <option>Solicitud de usuario de red</option>
                                                <option>Solicitud de usuario para sistemas informaticos que utiliza la empresa</option>
                                                <option>Modificacion en los perfiles de usuarios</option>
                                                <option>Solicitud de cambio de contraseña</option>
                                                <option>Problema en los sistemas de la empresa</option>
                                                <option>Problemas con el correo electronico</option>
                                                <option>Solicitud de nuevos puestos de trabajo</option>
                                                <option>Solicitud de soporte en el uso de alguna aplicacion o sistema</option>
                                                <option>Otros</option>
                                            </select>

                                    </div>
                                </div>
                            </div>


                            <!-- ESTADO TICKET Y GRUPO DE RESOLUCION -->
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">

                                            <select class="form-control show-tick" title="Estado de ticket">
                                                <option>Todos</option>
                                                <option>abierto sin derivar</option>
                                                <option>abierto derivado</option>
                                                <option>solucionado a la espera OK</option>
                                                <option>cerrado</option>
                                            </select>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">

                                            <select class="form-control show-tick" title="Ultimo grupo de resolución">
                                                <option>Todos</option>
                                                <option>Mesa de ayuda</option>
                                                <option>Unidades de soporte</option>
                                                <option>Servicio tecnico</option>
                                                <option>Administrador de base de datos</option>
                                                <option>Administrador SUSE linux</option>
                                                <option>Administrador proxy y correo electronico</option>
                                                <option>Administrador Debian</option>
                                                <option>Redes LAN</option>
                                                <option>Comunicaciones</option>
                                                <option>Desarrollo sistema comercial</option>
                                                <option>Desarrollo sistema RRHH</option>
                                                <option>Desarrollo sistema de reclamos</option>
                                            </select>

                                    </div>
                                </div>

                            </div>


                            <!-- FECHA DE CREACION Y ULTIMO CAMBIO -->
                            <div class="row clearfix">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-line">

                                                            <input type="text" id="fechaCreacion" placeholder="Fecha de Creación" class="form-control" data-modal="true" data-large-mode="true" data-lang="es" data-format="d-m-Y" data-large-default="true" onfocus="CreacionInit()">

                                                            <script>
                                                                function CreacionInit() {

                                                                    $('#fechaCreacion').dateDropper();

                                                                }
                                                            </script>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <div class="form-line ">

                                                            <input type="text" id="ultimoCambio" placeholder="Fecha de Último cambio de estado" class="form-control" data-modal="true" data-large-mode="true" data-lang="es" data-format="d-m-Y" data-large-default="true" onfocus="UltimoInit()">

                                                            <script>
                                                                function UltimoInit() {

                                                                    $('#ultimoCambio').dateDropper();

                                                                }
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                            </div>



                            <a href="{{ url('/CU02ConsultarTicket2') }}"><button type="button" class="btn bg-cyan m-t-15 waves-effect">BUSCAR</button></a>


                        </form>
                    </div>
                </div>
            </div>


        </div>


    </div>
</section>

@endsection


@section('footer')

<!-- Select Plugin Js -->
<script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>


<!-- Autosize Plugin Js -->
<script src="{{ asset('plugins/autosize/autosize.js') }}"></script>

<!-- Moment Plugin Js -->
<script src="{{ asset('plugins/momentjs/moment.js') }}"></script>

<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="{{ asset('plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>


<script src="{{ asset('js/pages/forms/basic-form-elements.js') }}"></script>

<!-- dateDropper lib -->
<script src="{{ asset('plugins/datedrooper/datedropper.js') }}"></script>

    @endsection