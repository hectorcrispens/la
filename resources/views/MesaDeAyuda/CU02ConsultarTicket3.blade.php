@extends('layoutConstantes.baseLayout')


@section('header')
    <script>
        function sacar() {

            $('#inp1').removeClass('focused');
            $('#inp2').removeClass('focused');
            $('#inp3').removeClass('focused');
            $('#inp4').removeClass('focused');
            $('#inp5').removeClass('focused');
            $('#inp6').removeClass('focused');
            $('#inp7').removeClass('focused');
            $('#inp8').removeClass('focused');
            $('#inp9').removeClass('focused');
            $('#inp10').removeClass('focused');



        }
    </script>
    @endsection

@section('menu')
    @include('MesaDeAyuda.menu.CU02menu01')
    @endsection

@section('content')


<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DETALLE DE TICKET Nro: => {{ $idTicket }}</h2>
        </div>


        <!-- Metarial Design Buttons -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            FUNCIONES
                            <small>Opciones para Derivar o Cerrar el ticket</small>
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
                        <div class="button-demo">
                            <button type="button" class="btn bg-deep-orange waves-effect" {{ $btnDerivar }} onclick="derivar({{ $idTicket }})">DERIVAR</button>

                            <button type="button" class="btn bg-pink waves-effect" {{ $btnCerrar }} onclick="cerrar({{ $idTicket }})">CERRAR</button>
                            <script>
                                function derivar(id) {

                                    location.href="/CU04DerivarTicket/" + id;
                                }
                                function cerrar(id) {
                                    location.href="/CU03CerrarTicket/" + id;
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Metarial Design Buttons -->



        <!-- Multi Column -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            DETALLE DE LOS DATOS DEL USUARIO
                            <small>Se presentan aqui los detalles del usuario que hizo el reclamo</small>
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

                        <!-- columnas md6 nombre y apellido-->

                        <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div  id="inp1" class="form-line">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" id="nombre" class="form-control" value="Lisandro Adolfo" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div id="inp2" class="form-line">
                                        <label for="apellido">Apellido</label>
                                        <input type="text" id="apellido" class="form-control" value="Rattero" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- #END# Columnas md6-->







                        <div class="row clearfix">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div id="inp3" class="form-line">
                                        <label for="legajo">Número de Legajo</label>
                                        <input type="text" class="form-control" id="legajo" value="001014" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div id="inp4" class="form-line">
                                        <label for="cargo">Descripción de Cargo</label>
                                        <input type="text" id="cargo" class="form-control" value="Encargado General" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div id="inp5" class="form-line">
                                        <label for="interno">Telefono Interno</label>
                                        <input type="text" class="form-control" id="interno" value="114" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div id="inp6" class="form-line">
                                        <label for="directo">Teléfono Directo</label>
                                        <input type="text" class="form-control" id="directo" value="0343-4535351" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>











                        <div class="row clearfix">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div id="inp7" class="form-line">
                                        <label for="calle">Calle</label>
                                        <input type="text" id="calle" class="form-control" value="Suipacha" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div id="inp8" class="form-line">
                                        <label for="numcalle">Número</label>
                                        <input type="text" class="form-control" id="numcalle" value="3919" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div id="inp9" class="form-line">
                                        <label for="piso">Piso</label>
                                        <input type="text" id="piso" class="form-control" value="5-b" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div id="inp10" class="form-line">
                                        <label for="oficina">Oficina</label>
                                        <input type="text" id="oficina" class="form-control" value="Administración" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Multi Column -->



        <!-- Basic Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            LISTADO HISTORICO DEL TICKET
                            <small>Todos los cambios relacionados al ticket</small>
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
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Fecha de cambio de estado</th>
                                <th>Hora de cambio de estado</th>
                                <th>Operador que cambió el estado</th>
                                <th>Estado</th>
                                <th>Grupo de Resolución</th>
                                <th>Clasificación del ticket</th>
                                <th>Obs..</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>10/06/2005</td>
                                <td>11:45 pm</td>
                                <td>Franco Pizzuti</td>
                                <td>Abierto sin derivar</td>
                                <td>
                                    Administrador SUSE linux
                                </td>
                                <td>Solicitud de usuario para sistemas informaticos que utiliza la empresa</td>
                                <td>
                                    <div class="icon-button-demo">
                                        <button type="button" class="btn bg-pink waves-effect waves-float" data-trigger="focus" data-container="body" data-toggle="popover"
                                                data-placement="left" title="Informe de Observaciones" data-content="El problema fue resuelto por el equipo informatico y queda a la espera que el equipo de bases de datos soluciones el problema">
                                            <i class="material-icons">more_horiz</i>
                                        </button>
                                    </div>
                                </td>


                            </tr>

                            <tr>
                                <td>13/07/2005</td>
                                <td>12:55 pm</td>
                                <td>Franco Beber</td>
                                <td>Abierto derivado</td>
                                <td>
                                    Administrador de base de datos
                                </td>
                                <td>Solicitud de usuario para sistemas informaticos que utiliza la empresa</td>
                                <td>
                                    <div class="icon-button-demo">
                                        <button type="button" class="btn bg-pink waves-effect waves-float" data-trigger="focus" data-container="body" data-toggle="popover"
                                                data-placement="left" title="Informe de Observaciones" data-content="El problema fue resuelto por el equipo de bases de datos pero persiste el inconveniente">
                                            <i class="material-icons">more_horiz</i>
                                        </button>
                                    </div>
                                </td>


                            </tr>

                            <tr>
                                <td>18/09/2005</td>
                                <td>16:30 pm</td>
                                <td>Lisandro Ratter</td>
                                <td>Abierto derivado</td>
                                <td>
                                    Redes LAN
                                </td>
                                <td>Solicitud de usuario para sistemas informaticos que utiliza la empresa</td>
                                <td>
                                    <div class="icon-button-demo">
                                        <button type="button" class="btn bg-pink waves-effect waves-float" data-trigger="focus" data-container="body" data-toggle="popover"
                                                data-placement="left" title="Informe de Observaciones" data-content="Quedo solucionado el problema y se le pudo dar usuario al nuevo sistema informatico">
                                            <i class="material-icons">more_horiz</i>
                                        </button>
                                    </div>
                                </td>


                            </tr>

                            <tr>
                                <td>19/10/2005</td>
                                <td>09:45 pm</td>
                                <td>Hector Crispens</td>
                                <td>A la espera OK</td>
                                <td>
                                    Desarrollo sistema comercial
                                </td>
                                <td>Solicitud de usuario para sistemas informaticos que utiliza la empresa</td>
                                <td>
                                    <div class="icon-button-demo">
                                        <button type="button" class="btn bg-pink waves-effect waves-float" data-trigger="focus" data-container="body" data-toggle="popover"
                                                data-placement="left" title="Informe de Observaciones" data-content="El inconveniente esta solucionado">
                                            <i class="material-icons">more_horiz</i>
                                        </button>
                                    </div>
                                </td>


                            </tr>

                            <!-- COPIAS DE LAS TR-->

                            <tr>
                                <td>10/06/2005</td>
                                <td>11:45 pm</td>
                                <td>Franco Pizzuti</td>
                                <td>Abierto sin derivar</td>
                                <td>
                                    Administrador SUSE linux
                                </td>
                                <td>Solicitud de usuario para sistemas informaticos que utiliza la empresa</td>
                                <td>
                                    <div class="icon-button-demo">
                                        <button type="button" class="btn bg-pink waves-effect waves-float" data-trigger="focus" data-container="body" data-toggle="popover"
                                                data-placement="left" title="Informe de Observaciones" data-content="El problema fue resuelto por el equipo informatico y queda a la espera que el equipo de bases de datos soluciones el problema">
                                            <i class="material-icons">more_horiz</i>
                                        </button>
                                    </div>
                                </td>


                            </tr>

                            <tr>
                                <td>13/07/2005</td>
                                <td>12:55 pm</td>
                                <td>Franco Beber</td>
                                <td>Abierto derivado</td>
                                <td>
                                    Administrador de base de datos
                                </td>
                                <td>Solicitud de usuario para sistemas informaticos que utiliza la empresa</td>
                                <td>
                                    <div class="icon-button-demo">
                                        <button type="button" class="btn bg-pink waves-effect waves-float" data-trigger="focus" data-container="body" data-toggle="popover"
                                                data-placement="left" title="Informe de Observaciones" data-content="El problema fue resuelto por el equipo de bases de datos pero persiste el inconveniente">
                                            <i class="material-icons">more_horiz</i>
                                        </button>
                                    </div>
                                </td>


                            </tr>

                            <tr>
                                <td>18/09/2005</td>
                                <td>16:30 pm</td>
                                <td>Lisandro Ratter</td>
                                <td>Abierto derivado</td>
                                <td>
                                    Redes LAN
                                </td>
                                <td>Solicitud de usuario para sistemas informaticos que utiliza la empresa</td>
                                <td>
                                    <div class="icon-button-demo">
                                        <button type="button" class="btn bg-pink waves-effect waves-float" data-trigger="focus" data-container="body" data-toggle="popover"
                                                data-placement="left" title="Informe de Observaciones" data-content="Quedo solucionado el problema y se le pudo dar usuario al nuevo sistema informatico">
                                            <i class="material-icons">more_horiz</i>
                                        </button>
                                    </div>
                                </td>


                            </tr>

                            <tr>
                                <td>19/10/2005</td>
                                <td>09:45 pm</td>
                                <td>Hector Crispens</td>
                                <td>A la espera OK</td>
                                <td>
                                    Desarrollo sistema comercial
                                </td>
                                <td>Solicitud de usuario para sistemas informaticos que utiliza la empresa</td>
                                <td>
                                    <div class="icon-button-demo">
                                        <button type="button" class="btn bg-pink waves-effect waves-float" data-trigger="focus" data-container="body" data-toggle="popover"
                                                data-placement="left" title="Informe de Observaciones" data-content="El inconveniente esta solucionado">
                                            <i class="material-icons">more_horiz</i>
                                        </button>
                                    </div>
                                </td>


                            </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Table -->




    </div>


</section>

@endsection

@section('footer')


<!-- Select Plugin Js -->
<script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>


<!-- Jquery CountTo Plugin Js -->
<script src="{{ asset('plugins/jquery-countto/jquery.countTo.js') }}"></script>


<script src="{{ asset('js/pages/ui/tooltips-popovers.js') }}"></script>


<script src="{{ asset('js/pages/index.js') }}"></script>


<!-- Bootstrap Notify Plugin Js -->
<script src="{{ asset('plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>


<script src="{{ asset('js/pages/ui/modals.js') }}"></script>

    @endsection