@extends('layoutConstantes.baseLayout')


@section('header')


    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{ asset('plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />

    <!-- Izimodal Css -->
    <link href="{{ asset('css/iziModal.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Notify Css -->
    <link href="{{ asset('css/notify.css') }}" rel="stylesheet" type="text/css">

    <script>
        function sacar() {

            $('#inp1').removeClass('focused');
            $('#inp2').removeClass('focused');


        }
    </script>

@endsection

@section('menu')
    @include('MesaDeAyuda.menu.CU04menu')
    @endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DERIVAR TICKET</h2>
        </div>



        <!-- Multi Column -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            DERIVANDO TICKET
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

                           <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group form-float">
                                        <div id="inp1" class="form-line" >
                                            <label class="form-label" style=" top: -10px; font-size: 12px;">Estado actual del ticket</label>
                                            <input type="text" class="form-control" readonly value="Abierto en mesa de ayuda" disabled>

                                        </div>
                                    </div>
                                </div>

                            </div>


                            <!-- DESCRIPCION DEL PROBLEMA-->
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div id="inp2" class="form-line">
                                            <label class="form-label" style=" top: -10px; font-size: 12px;">Descripción del Problema</label>
                                            <textarea  id="descripcion" name="description" cols="30" rows="5" class="form-control no-resize" readonly>El problema fue que se rompió la pantalla y cuando la quise arreglar se termino de hacer pelota!!!!
</textarea>


                                        </div>

                                    </div>
                                </div>
                            </div>


                            <!-- NUEVO ESTADO DEL TICKET -->
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


                                            <select class="form-control show-tick"  id="nuevo_estado_ticket" title="Nuevo estado de ticket">
                                                <option value="">Todos</option>
                                                <option>abierto sin derivar</option>
                                                <option>abierto derivado</option>
                                                <option>solucionado a la espera OK</option>
                                                <option>cerrado</option>
                                            </select>

                                </div>
                            </div>


                            <!-- CLASIFICACION DE TICKET-->
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-14 col-xs-12">

                                            <select class="form-control show-tick" id="clasificacion_ticket" title="Clasificacion de ticket">
                                                <option value="">Todos</option>
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
                                                <option>Problemas con el correo electrónico</option>
                                                <option>Solicitud de nuevos puestos de trabajo</option>
                                                <option>Solicitud de soporte en el uso de alguna aplicacion o sistema</option>
                                                <option>Otros</option>
                                            </select>

                                </div>

                            </div>

                            <!-- GRUPO DE RESOLUCION -->
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <select class="form-control show-tick" id="grupo_resolucion" title="Seleccionar grupo de resolución">
                                                <option value="">Todos</option>
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

                            <!-- OBSERVACIONES -->
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                            <textarea  id="observaciones" name="description" cols="30" rows="5" class="form-control no-resize" required></textarea>

                                                <label class="form-label">Observaciones</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>



                            <!-- BOTONES -->
                            <div class="row clearfix">
                                <div class="button-demo">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <button id="cancel" type="button" class="btn bg-grey m-t-15 waves-effect open-options" >CANCELAR</button>
                                        <button id="submm" type="button" class="btn bg-cyan m-t-15 waves-effect open-options" >DERIVAR TICKET</button>

                                    </div>
                                </div>
                            </div>


                            <!-- CON OPCIONES-->
                            <div id="modal-options" class="iziModal" data-izimodal-group="group1" data-izimodal-loop="" data-izimodal-title="¿ESTA SEGURO, DERIVAR EL TICKET?" data-izimodal-subtitle="Derivar a un grupo de resolución que tenga las competencias requeridas">

                                <!-- Basic Card -->
                                <div class="row clearfix">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


                                        <div class="body align-right" style="padding: 20px">

                                            <div class="button-demo">
                                                <button type="button" class="btn bg-grey waves-effect" onclick="cerrarIzimodal()">CANCELAR</button>
                                                <button type="button" class="btn bg-red waves-effect" onclick="successNotify('El ticket Nro {{ $idTicket }} fué derivado con éxito')">ACEPTAR</button>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- #END# Basic Card -->



                            </div>

                            <!-- END CON OPCIONES-->

                        </form>
                    </div>
                </div>
            </div>


        </div>


    </div>
</section>

@endsection


@section('footer')



<!-- Bootstrap Notify Plugin Js -->
<script src="{{ asset('plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>
<script src="{{ asset('js/notify.js') }}"></script>

<!-- Select Plugin Js -->
<script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>



<script src="{{ asset('js/pages/forms/advanced-form-elements.js') }}"></script>

<!--### TERMINAN LOS JS ###-->
<!-- Izimodal -->
<script src="{{ asset('plugins/izimodal/iziModal.min.js') }}"></script>


<script>
    //options
    $(document).on('click', '#submm', function(event) {
        event.preventDefault();

        var obs = document.getElementById('observaciones');
        var nest = document.getElementById('nuevo_estado_ticket');
        var grup = document.getElementById('grupo_resolucion');


        if(obs.value == ""|| nest.value==null||grup.value==null){

           /* $('#modal-alert').iziModal({
                headerColor: '#d43838',
                timeout: 10000,
                timeoutProgressbar: true,
                pauseOnHover: true
            });
            $('#modal-alert').iziModal('open'); */
          infoNotify('Nuevo estado, grupo de resolución u observaciones no pueden ser nulos');

        }
        else {
            $('#modal-options').iziModal({
                headerColor: '#F44336',
                width: '50%', //横幅
                overlayColor: 'rgba(0, 0, 0, 0.5)', //モーダルの背景色
                fullscreen: true, //全画面表示
                transitionIn: 'fadeInUp', //表示される時のアニメーション
                transitionOut: 'fadeOutDown' //非表示になる時のアニメーション
            });
            $('#modal-options').iziModal('open');
        }

    });
    function cerrarIzimodal(){
        $('#modal-options').iziModal('close');
    }

</script>

    @endsection
