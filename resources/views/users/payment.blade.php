@extends('layouts.basic_header')
@section('content')

        <h1 class="display-3 text-center mt-5">Set up your credit or debit card</h1>
        <div class="container p-0">
    <div class="card px-4">
        <p class="h3 py-3 text-center">Payment Details</p>
        <div class="row gx-3">
            <div class="col-12">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Person Name</p> <input class="form-control mb-3" type="text" placeholder="Name">
                </div>
            </div>
            <div class="cold-12">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Last Name</p> <input class="form-control mb-3" type="text" placeholder="LastName">
                </div>
            </div>
            <div class="col-12">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Card Number</p> <input class="form-control mb-3" type="text" placeholder="1234 5678 435678">
                </div>
            </div>
            <div class="col-6">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Expiry</p> <input class="form-control mb-3" type="text" placeholder="MM/YYYY">
                </div>
            </div>
            <div class="col-6">
                <div class="d-flex flex-column">
                    <p class="text mb-1">CVV/CVC</p> <input class="form-control mb-3 pt-2 " type="password" placeholder="***">
                </div>
            </div>
            <div class="col-12 text-center">
                <button class="btn btn-primary mb-3">Start Paid Membership</div>
            </div>
        </div>
    </div>
</div>
@endsection