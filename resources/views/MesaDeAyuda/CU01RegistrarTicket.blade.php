@extends('layoutConstantes.baseLayout')

@section('header')


    <!-- Bootstrap Select Css -->
    <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />



    <style>
        .alert-black{
            background-color: black;
        }
    </style>

    <script>
        function sacar() {

            $('#inp1').removeClass('focused');
            $('#inp2').removeClass('focused');
        }
    </script>
@endsection

@section('menu')
    @include('MesaDeAyuda.menu.CU01menu01')
    @endsection

@section('content')



<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>REGISTRAR TICKETS</h2>
        </div>





        <!-- Horizontal Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            REGISTRAR TICKETS
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
                        <form id="form2">
                            <!-- FECHA Y HORA DE REGISTRO -->
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div id="inp1" class="form-line" >
                                            <label class="form-label" style=" top: -10px; font-size: 12px;">Fecha de registro</label>
                                            <input type="text" class="form-control" readonly value="26-03-2018" disabled>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div id="inp2" class="form-line" >
                                            <label class="form-label" style=" top: -10px; font-size: 12px;">Hora de registro</label>
                                            <input type="text" class="form-control" readonly value="11:40" disabled>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control">
                                            <label class="form-label">Número de Ticket</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line focused error">
                                            <input type="text" class="form-control">
                                            <label class="form-label">Número de Legajo</label>
                                        </div>
                                        <div class="help-info">La hora de registro debe estar entre las 0 y las 12</div>
                                    </div>
                                </div>

                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-12">

                                            <select class="form-control show-tick" id="clasificacion_ticket">
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

                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <textarea  id="descripcion_ticket" name="description" cols="30" rows="5" class="form-control no-resize" required></textarea>

                                            <label class="form-label">Descripción del problema</label>
                                        </div>
                                        <div class="help-info">Min. 3, Max. 255 caracteres</div>
                                        <label class="error">No se ha agregado una descripción</label>
                                    </div>
                                </div>


                            </div>



                            <!-- BOTONES-->
                            <div class="row clearfix">

                                <div class="col-sm-12">
                                <div class="button-demo">



                                        <button id="cancel" type="button" class="btn bg-grey m-t-15 waves-effect open-options" >CANCELAR</button>
                                        <button id="submm" type="button" class="btn bg-cyan m-t-15 waves-effect open-options" >REGISTRAR</button>

                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>







                    </div>
                </div>
            </div>

        <!-- #END# Horizontal Layout -->












    </div>
</section>


@endsection

@section('footer')


<!-- Bootstrap Notify Plugin Js -->
<script src="{{ asset('plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>


<!-- Select Plugin Js -->
<script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

<!-- Jquery Validation Plugin Css -->
<script src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"></script>


<script src="{{ asset('js/pages/forms/form-validation.js') }}"></script>



<script>
    //options
    $(document).on('click', '#submm', function(event) {
        event.preventDefault();
        var textA = document.getElementById('descripcion_ticket');
        if(textA.value == "") {
            /*
             $('#modal-alert').iziModal({
             headerColor: '#d43838',
             timeout: 10000,
             timeoutProgressbar: true,
             pauseOnHover: true
             });
             $('#modal-alert').iziModal('open');
             */
            $.notify({
                title: '  ',

                message: 'El campo descripción del problema esta vacío'
            },{
                type: 'black',
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutDown'
                },
                placement: {
                    from: "top",
                    align: "left"
                },
                offset: 20,
                spacing: 10,
                z_index: 1031,
            });
        }
        else {
            location.href="CU01registrarTicket2";
        }

    });
    </script>
@endsection