<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;
// use Dotenv\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;
use App\Http\Controllers\Auth\Session;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    //use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'login.post';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
    }


    // Mostrar la pàgina login
    function showLogin()
    {
        return view('users/login');
    }

    // Per fer el login
    function doLogin(LoginRequest $request) {

        // Comprovem que la informació passada per l'usuari compleixi les normes
        $validator = Validator::make($request->all(), $request->rules());
        
        if ($validator->fails()) { // Si el validor falla
            return redirect()->to('/login')
                ->withErrors(['error' => "Wrong password or email. Please check again."]) // enviem els errors al form amb el nom de error
                ->withInput();
        } else {
            // Si no ha fallat agafem les dades per fer la autentificació
            $userdata = array(
                'email' => $request->input('email'),
                'password' => $request->input('password')   
            );

            // Intentem fer el login amb les dades
            if (Auth::attempt($userdata)) { // el attempt mira a la bd (?)
                // Redireccionem a la home principal de l'usuari
                return redirect()->to('/home2');
            } else {
            // Si nó vol dir que no s'ha trobat a la bd (?)
            return redirect()->to('/login')
                ->withInput($request->except('password')); // deixem el mail pero no la pswd            
            }
        }

    }   

    public function doLogout() {
        Auth::logout();
        //Session::flush();
        return view('/home1');
    }
}
