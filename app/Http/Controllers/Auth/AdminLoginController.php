<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Route;

class AdminLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin',['except' => ['logout','logoutAdmin']]);
    }

    public function showLoginForm()
    {
        return view('auth.login-admin');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password'=>$request->password], $request->remember)) 
        {
            
            return redirect()->intended(route('admin.dashboard'));
        }
        // session()->flash('notif',' nice');
        return redirect()->back()->withInput($request->only('email','remember'));
        
    }
       public function logoutAdmin()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
    protected function guard()
    {
        return Auth::guard('admin');
    }
}
