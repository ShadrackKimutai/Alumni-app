<?php


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AlumniLoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = '/alumni/home';

    /**
     **_ Create a new controller instance.
     _**
     **_ @return void
     _**/
    public function __construct()
    {
      $this->middleware('guest')->except('logout');
    }
    /**
     _
     _ @return property guard use for login
     _
     _**/
    public function guard()
    {
     return Auth::guard('alumni');
    }

    // login from for teacher
    public function showLoginForm()
    {
        return view('auth.alumni-login');
    }

 }