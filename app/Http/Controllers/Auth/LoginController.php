<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Socialite;
use App\User;
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
    protected $redirectTo = '/cliente';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }
  
    public function handleProviderCallback()
    {
        $usersocial = Socialite::driver('github')->user();        
        $finduser = User::where('email', $usersocial->email)->first();
        if($finduser)
        {
            Auth::login($finduser);
            return redirect('/cliente');
        }
        else
        {
            $user = new User();
            $user->name = $usersocial->nickname;
            $user->email = $usersocial->email;
            $user->password = 123456;
            $user->save();
            Auth::login($user);
            return redirect('/cliente');
        }
    }


}
