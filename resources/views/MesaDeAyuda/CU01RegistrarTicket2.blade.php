@extends('layoutConstantes.baseLayout')


@section('header')

    <!-- Bootstrap Select Css -->
    <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />

    <style>
        .alert-black{
            background-color: black;
        }
    </style>


@endsection

@section('menu')
    @include('MesaDeAyuda.menu.CU01menu02')
@endsection


@section('content')


<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>REGISTRAR TICKETS</h2>
        </div>


        <!-- Tabs With Icon Title -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            ACCIONES REQUERIDAS PARA EL TICKET
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
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#home_with_icon_title" data-toggle="tab">
                                    <i class="material-icons">clear</i> CERRAR
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#profile_with_icon_title" data-toggle="tab">
                                    <i class="material-icons">near_me</i> DERIVAR
                                </a>
                            </li>

                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">


                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <textarea  id="descripcion_ticket" name="description" cols="30" rows="5" class="form-control no-resize" required></textarea>

                                                <label class="form-label">Observaciones</label>
                                            </div>
                                            <div class="help-info">Min. 3, Max. 255 caracteres</div>
                                            <label class="error">No se ha agregado una descripción</label>
                                        </div>
                                    </div>


                                </div>




                                <!-- BOTONES-->
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                    <button type="button" id="cerrar" class="btn bg-cyan m-t-15 waves-effect">CERRAR</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">

                                <!-- GRUPO DE RESOLUCION-->

                                <div class="row clearfix">
                                    <div class="col-sm-12">

                                                <select class="form-control show-tick" id="grupo_resolucion">
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





                                <!-- BOTONES-->
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                        <button type="button" class="btn bg-cyan m-t-15 waves-effect">DERIVAR</button>
                                    </div>
                                    </div>
                                </div>




                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Tabs With Icon Title -->




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


<script>
    //options
    $(document).on('click', '#cerrar', function(event) {
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

                message: 'No se puede cerrar sin agregar observaciones'
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

    });

</script>
@endsection