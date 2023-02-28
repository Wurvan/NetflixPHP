<html>

<head>
    <title> Peepo </title>
    <link rel="shortcut icon" href="{{ asset('imgage/favicon.png') }}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <style>
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-auto sticky-top" id="bg"> <br>
                <h1 id="logo"><a style="text-decoration: none;" class="text-primary" href="/">Peepo</a></h1>
                <br>
                <div class="d-flex flex-sm-column flex-row flex-nowrap align-items-center sticky-top" id="bg">
                    <a href="/" class="d-block p-3 link-dark text-decoration-none" title="" data-bs-toggle="tooltip"
                        data-bs-placement="right" data-bs-original-title="Icon-only">
                    </a> <br> <br> <br> <br> <br><br> <br>
                    <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center">
                        <li class="nav-item">
                            <a href="/search" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip"
                                data-bs-placement="right">
                                <i class="bi bi-search fs-1 text-light"></i>
                            </a> <br> <br>
                        </li>
                        <li>
                            <a href="/home2" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip"
                                data-bs-placement="right">
                                <i class="bi bi-house fs-1 text-light"></i>
                            </a> <br> <br>
                        </li>
                        <li>
                            <a href="/list/pelis" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip"
                                data-bs-placement="right">
                                <i class="bi bi-film fs-1 text-light"></i>
                            </a> <br> <br>
                        </li>
                        <li>
                            <a href="/list/series" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip"
                                data-bs-placement="right">
                                <i class="bi bi-laptop fs-1 text-light"></i>
                            </a> <br> <br>
                        </li>
                        <li>
                            <a href="/profile" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip"
                                data-bs-placement="right">
                                <i class="bi bi-person-fill fs-1 text-light"></i>
                            </a> <br> <br>
                        </li>
                        <li>
                            @auth
                            <form action="{{Route('logout')}}" method="POST">
                                @csrf
                                <button class="btn btn-primary" type="submit">LOGOUT</button>
                            </form>
                               
                            @endauth
                        </li>
                    </ul>
                </div>
          </div>
            <div class="col-sm p-3 min-vh-100 ">
                @yield('content')
            </div>
        </div>
    </body>
    
    </html>