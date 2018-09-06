<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- gramin -->
    <script src="{{ asset('js/granim.js-1.1.0/dist/granim.js') }}"></script>


    <style>

        #canvas-image {
            display: block;
            /* Rellenamos el fondo */
            min-height: 100%;
            min-width: 800px;

            /* Escalamiento proporcional */
            width: 100%;
            height: auto;

            /* Posicionamiento */
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        #canvas-basic {
            position: absolute;
            display: block;
            width: 100%;
            height: 100%;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }
    </style>

</head>

<body class="signup-page">
<canvas id="canvas-image"></canvas>
<script>
    var granimInstance = new Granim({
        element: '#canvas-image',
        direction: 'top-bottom',
        opacity: [1, 1],
        isPausedWhenNotInView: true,
        scrollDebounceThreshold: 300,
        image: {
            source: 'images/394749.jpg',
            position: ['center', 'center'],
            stretchMode: ['stretch-if-smaller', 'stretch-if-bigger'],
            blendingMode: 'multiply'
        },
        states : {
            "default-state": {
                gradients: [
                    ['#29323c', '#485563'],
                    ['#FF6B6B', '#556270'],
                    ['#80d3fe', '#7ea0c4'],
                    ['#ffb62a', '#eceba3']

                ],
                transitionSpeed: 9000
            }
        }
    });
</script>


    @yield('content')


<!-- Jquery Core Js -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core Js -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{ asset('plugins/node-waves/waves.js') }}"></script>

<!-- Validation Plugin Js -->
<script src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"></script>

<!-- Custom Js -->
<script src="{{ asset('js/admin.js') }}"></script>
<script src="{{ asset('js/pages/examples/sign-up.js') }}"></script>
</body>

</html>