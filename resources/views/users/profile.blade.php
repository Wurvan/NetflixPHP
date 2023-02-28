@extends('layouts.app')
@section('content')

                <!-- content -->
                <br>
                <div class="container-fluid">
                    <!-- Primera fila: Icon + nom i surname -->
                    <div class="row">
                        <h1 class="text-primary text-center"> Account </h1>
                    </div>
                    <br> <br> <br> <br> <br>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-sm">

                            </div>
                            <div class="col-4">
                                <p class="text-light">Icon que tingui l'usuari</p>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <input class="form-control input-group-lg" disabled type="text" value="Current Name">
                                </div>
                                <br> <br>
                                <div class="row">
                                    <input class="form-control input-group-lg" disabled type="text" value="Current Username">
                                </div>
                            </div>
                        </div>
                        <br> <br> <br> <br> <br>
                        <!-- Segona fila-->
                        <div class="row">
                            <div class="col-5">
                                <div class="row">
                                    <input class="form-control input-group-lg" disabled type="text" value="Current Password">
                                </div> <br> <br>
                                <div class="row">
                                    <input class="form-control input-group-lg" disabled type="text" value="Current Email">
                                </div> <br> <br>
                                <div class="row">
                                    <input class="form-control input-group-lg" disabled type="text" value="Current Credit Card">
                                </div> <br> <br>
                            </div> 

                            <div class="col-sm">

                            </div>

                            <div class="col-5 text-center"> <br>
                                <div class="row">
                                    <!-- Va a la pagina de pelicules preferides-->
                                    <input class="btn btn-primary btn-lg" type="button" value="My Favorites" id="favs" onclick="location.href='/favorite'">
                                </div> <br> <br>
                                <div class="row">
                                    <!-- Va a la pagina de Editar el perfil-->
                                    <input class="btn btn-primary btn-lg" type="button" value="Edit Profile" id="editProfile" onclick="location.href='/editProfile'">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
@endsection