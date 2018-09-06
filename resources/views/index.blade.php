﻿
@extends('layouts.appBase')

    

@section('body')
    @include('layouts.loaderNav')
    <section>
    @include('layoutConstantes.BarraLateralMAInactive')
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    LA LLAMITA
                    <small>Sistema de gestión de Tickets <a href="https://unsplash.com/" target="_blank">LaLLamita.com</a></small>
                </h2>
            </div>
            <div class="row clearfix">

                <!-- With Captions -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>PAGINA DE INICIO</h2>
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
                            <div id="carousel-example-generic_2" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic_2" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic_2" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic_2" data-slide-to="2"></li>
                                </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="images/image-gallery/olla.jpeg" />
                                        <div class="carousel-caption">
                                            <h3>Seriedad</h3>
                                            <p>Para lograr soluciones integrales, es necesario un enfoque serio</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="images/image-gallery/21.jpg" />
                                        <div class="carousel-caption">
                                            <h3>Responsabilidad</h3>
                                            <p>La responsabilidad es la clave para lograr un ambiente de trabajo amigable</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="images/image-gallery/22.jpg" />
                                        <div class="carousel-caption">
                                            <h3>Eficiencia</h3>
                                            <p>Trabajando con eficiencia las soluciones vienen más deprisa</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic_2" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic_2" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# With Captions -->
            </div>
        </div>
    </section>
    @include('footer.footerIndex')
@endsection



