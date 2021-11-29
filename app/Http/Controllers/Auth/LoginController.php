<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('form-login');
    }

    public function attemptLogin(Request $request){

        $credentials = $request->only('email', 'password', 'remember');

        if(Auth::attempt([
            'email' => $credentials['email'] ?? null,
            'password' => $credentials['password'] ?? null],
            !empty($credentials['remember']))){

             return redirect()->route('dahsboard.index');
        }
        return redirect()->back()->withInput()
        ->with('error','Email-Address Or Password Are Wrong.');
    }
}
