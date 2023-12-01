<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHOTO - LARAVEL WEB APP</title>

    <!-- BOOTSTRAP 3.4.1 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css"
        integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>


    <style>
    body {
        padding-top: 80px;
    }

    .flex {
        display: flex
    }

    .justify-between {
        justify-content: space-between;
    }

    .p-2 {
        padding: 2rem;
    }

    .p-3 {
        padding: 3rem
    }

    .dark {
        background: rgba(0, 0, 0, 0.9);
    }

    .text-white {
        color: white;
    }

    .min-h-screen {
        min-height: 100vh;
    }
    </style>


</head>


<body>


    <!-- HEADER -->
    <header>
        <nav class="navbar navbar-default navbar-fixed-top ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('photos.index') }}">PHOTOs - LARAVEL WEB APP |
                        {{Auth::user()->name}} ( Logged ) </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{route('photos.index')}}">HOME</a></li>
                        <li><a href="{{route('photos.create')}}">NEW PHOTO</a></li>
                        <li><a href="{{route('dashboard')}}">LOGOUT</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>



    <!-- MAIN -->
    <main class="container min-h-screen">

        @yield('content')

    </main>

    <!-- FOOTER -->
    <div class="flex justify-between p-3 dark text-white">

        <div class="text-left text-sm text-gray-500 sm:ml-0">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} <br>
            PHP Version - v{{ PHP_VERSION }}
        </div>

        <div class="text-left text-sm text-gray-500 sm:ml-0">
            &copy <?php echo date('Y'); ?> Fabrizio Del Tufo @ WeWebby.com
        </div>
    </div>

</body>

</html>