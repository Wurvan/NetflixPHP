@extends('layouts.app')
@section('content')

                <!-- content -->
                <br>
                <div class="container-fluid">
                    <!-- Primera fila: Icon + button edit profile-->
                    <div class="row">
                        <h1 class="text-primary text-center"> Account </h1>
                    </div>
                    <br> <br> <br> <br> <br>
                    <!--Segona fila -->
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-3">

                            </div>
                            <div class="col-1 align-items-left">
                                <p class="text-light">Icon que tingui l'usuari</p>
                            </div>
                            <div class="col-sm">
                                <div class="row"> <br> <br>
                                    <div class="col-sm text-center align-items-center">
                                        <input class="btn btn-primary btn-lg" type="button" value="Edit Picture" id="edit_pic">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br> <br>
                        <hr class="my-4 text-white">
                        <br> <br> <br>

                        <!-- Tercera fila-->
                        <div class="row">
                            <div class="col-sm">

                            </div>
                            
                            <div class="col-3 text-white align-items-center">
                                <div class="row">
                                    <label class="h3" for="nom"> Name </label>
                                </div> <br> <br>
                                <div class="row">
                                    <label class="h3" for="pwd"> Password </label>
                                </div> <br> <br>
                                <div class="row">
                                    <label class="h3" for="surname"> Surname </label>
                                </div> <br> <br>
                                <div class="row">
                                    <label class="h3" for="mail"> Email </label>
                                </div> <br> <br>
                                <div class="row">
                                    <label class="h3" for="card"> Credit Card </label>
                                </div> <br> <br>
                            </div>



                            <div class="col-sm">
                                <div class="row">
                                    <input class="form-control" type="text" value="" id="nom">
                                </div> <br> <br>
                                <div class="row">
                                    <input class="form-control" type="text" value="" id="pwd">
                                </div> <br> <br>
                                <div class="row">
                                    <input class="form-control" type="text" value="" id="surname">
                                </div> <br> <br>
                                <div class="row">
                                    <input class="form-control" type="text" value="" id="mail">
                                </div> <br> <br>
                                <div class="row">
                                    <input class="form-control" type="text" value="" id="card">
                                </div> <br> <br>
                            </div>
                            <div class="col-sm">

                            </div>
                            
                        </div>
                        <br>
                        <!-- Quarta fila amb el button save -->
                        <div class="row">
                            <div class="col-sm">

                            </div>
                            <div class="col-2">
                                <div class="row">
                                    <input class="btn btn-primary btn-lg" type="button" value="Save">
                                </div>
                            </div>
                            <div class="col-sm">

                            </div>
                            <div class="col-1">

                            </div>
                        </div>
                    </form>
                </div>
@endsection