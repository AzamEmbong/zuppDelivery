<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Route;

class RiderLoginController extends Controller
{
   
    public function __construct()
    {
      $this->middleware('guest:rider', ['except' => ['logout','logoutRider']]);
    }
    
    public function showLoginForm()
    {
      return view('auth.login-rider');
    }
    
    public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);
      
      // Attempt to log the user in
      if (Auth::guard('rider')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        // if successful, then redirect to their intended location
        return redirect()->intended(route('rider.dashboard'));
      } 
      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }
    
    public function logoutRider()
    {
      Auth::guard('rider')->logout();
      return redirect('rider/login');
    }
}