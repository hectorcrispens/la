@extends('layoutConstantes.baseLayout')

@section('header')

    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/justcontext/justcontext.css') }}">

    <script src="{{ asset('plugins/justcontext/justcontext.js') }}"></script>

@endsection
@section('menu')
    @include('MesaDeAyuda.menu.home')
    @endsection

@section('content')
    <section class="content">
        <div class="container-fluid">


<p class="jctx-host jctx-id-foo">click con el boton derecho</p>

<ul class="jctx jctx-id-foo jctx-white jctx-black-shadow">
    <li data-action="cut">Ver detalle del Ticket</li>
    <li data-action="copy">Derivar Ticket</li>
    <li data-action="paste" class="disabled">Cerrar Ticket</li>
    <hr>
    <li data-action="new_pkg">Ocultar Ticket</li>

</ul>
        </div>
</section>

@endsection

@section('footer')
<!-- Defining a sample action handler (for all menus) -->
<script>
    function handleMenuAction(evt) {
        alert("Action required: " + evt);
    }
</script>
@endsection