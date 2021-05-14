<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Scanner SE_Solution</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="css/app.css" rel='stylesheet' type='text/css'>
    @push('styles')
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @endpush

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                seSolution Scanner.
                </a>
            </div>

        </div>
    </nav>

    <div class="row">
        <div class="container col-md-3">
            <div class="" style="z-index:9999999;">


                <nav id="sidebar">
                    <!-- Sidebar Header -->
                    <div class="sidebar-header">
                        <h3>Menu</h3></div>


            <!-- Sidebar Links -->
            <ul class="list-unstyled components">
                <li >
                    <a  class="dropdown-item active" href="/">Scanner</a></li>
                <li>
                    <a href="#"></a>
                </li>
                <li><!-- Link with dropdown items -->
                    <a class="dropdown-item " href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Options</a>
                    <ul class="collapse list-unstyled show" id="homeSubmenu">
                        <li><a class="dropdown-item " href="{{ URL::asset('categories/') }}">Categories</a></li>
                        <li><a  class="dropdown-item " href="{{ URL::asset('palettes/') }}">Palettes</a></li>
                        <li><a class="dropdown-item " href="{{ URL::asset('packets/') }}">Packets</a></li>
                    </ul>

            </ul>
            </nav>


            </div>



        </div>
        <div class="container col-md-9">
            @yield('content')
        </div>


    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}


    <!-- JavaScripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
