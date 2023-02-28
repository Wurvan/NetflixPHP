@extends('layouts.basic_header')
@section('content')
    <div class="container-fluid img-bg">
        <br> <br> <br>
        <div class="row justify-content-md-center">
            <div class="col-md-auto bord bg-dark p-4">
                <form class="text-light" method="post" action="">
                    @csrf
                    <br>
                    <h1 class="text-center">Sign Up</h1>
                    <br> <br>
                    <div class="row">
                        <div class="col">
                            <label class="h3" for="name">Name</label>
                            <input class="form-control" type="text" id="name" name="name"> <br> 
                            @error('name')
                                <div class="alert alert-danger text-center"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="col">
                            <label class="h3" for="surname">Surname</label>
                            <input class="form-control" type="text" id="surname" name="surname"> <br>
                            @error('surname')
                                <div class="alert alert-danger text-center"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>
                    <label class="h3" for="email">Email</label>
                    <input class="form-control" type="email" id="email" name="email"> <br>
                    @error('email')
                        <div class="alert alert-danger text-center"> {{ $message }} </div>
                    @enderror
                    <label class="h3" for="passwd">Password</label>
                    <input class="form-control" type="password" id="passwd" name="password"> <br>
                    @error('password')
                        <div class="alert alert-danger text-center"> {{ $message }} </div>
                    @enderror
                    <label class="h3" for="rp_pwd">Repeat Password</label>
                    <input class="form-control" type="password" name="rp_pwd"> <br> <br>
                    @error('rp_pwd')
                        <div class="alert alert-danger text-center"> {{ $message }} </div>
                    @enderror
                    <div class="text-center">
                        <input class="btn btn-primary btn-lg" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
