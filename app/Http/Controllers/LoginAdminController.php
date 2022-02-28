<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class LoginAdminController extends Controller
{
     public function __construct()
     {
        $this->middleware('guest:admin',['except'=>'logout']);
     }

     public function formLogin()
     {
        return view('auth.login');
     }

     public function login(Request $request)
     {
      $credentials = $request->validate([
         'email'=>'required|email|exists:admins',
         'password'=>'required'
      ]);

      if (Auth::guard('admin')->attempt($credentials, $request->remember)) {
         $request->session()->regenerate();
         return redirect()->intended(config('admin.path'));
      }

      return back()->withErrors([
         'email' => 'Kredensial yang diberikan tidak cocok dengan catatan kami.',
      ]);
     }

     public function logout()
     {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
     }
}
