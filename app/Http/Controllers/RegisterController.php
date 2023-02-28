<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    /**
     * Indicates if the validator should stop on the first rule failure.
     *
     * @var bool
     */
    protected $stopOnFirstFailure = true;
    //
    use RegistersUsers;

    public function create() {
        return view('signup');
    }

    public function store(RegisterRequest $request) {
        // // comprovar si un email ya esta cogido en nuestra bd

        $validator = Validator::make($request->all(), $request->rules());
        $duplicatedEmail = false;
        if ($validator->fails()) {
            $errors = $validator->errors();
            $duplicatedEmail = true;
        } else {
            $duplicatedEmail = false;
        }
        
        if (!$duplicatedEmail) {
            $user = User::create($request->all());
            // auth()->login($user);
            return redirect('/login')->with('User created successfuly');
        } else {
            return redirect('/signup');
        }
    }
}
