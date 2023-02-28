@extends('layouts.basic_header')
@section('content')
    <nav class="navbar navbar-light p-0">
        <div class="container-fluid px-5">
            <a class="navbar-brand">Peepo.tv</a>
            <form class="d-flex">
                @auth
                    <button type="button" class="btn btn-primary top-sign-in" onclick="location.href='/home2'">HOME</button>
                @endauth

                @guest
                    <button type="button" class="btn btn-primary top-sign-in" onclick="location.href='/signup'">SIGN
                        UP</button>
                    <button type="button" class="btn btn-primary top-sign-in" onclick="location.href='/login'">LOGIN</button>
                @endguest
            </form>
        </div>
    </nav>
    <div class="bg-img">
        <div class="layer">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Unlimited movies, TV <br>shows and more.</h1>
                    <h3>Watch anywhere. Cancel anytime.</h3>
                    <h5>Ready to watch?</h5>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <ul>
                <li class="ps-2 pb-3">©Copyright -- Gemma Marín -- Blanca Serna -- Ivan Rodriguez</li>
            </ul>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
@endsection