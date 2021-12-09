<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AuthAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin',['except'=>'logout']);
    }

    function loginPage(){
        return view('auth.admin.login');
    }

    function loginCheck(Request $request){

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:3',
        ]);

        $adminInfo = Admin::where('email', $request->email)->first();

        if (!$adminInfo) {
            return back()->with('fail', 'Email tidak terdaftar');

        } else {

            // // Check password
            // if (Hash::check($request->password, $adminInfo->password)) {
            //     $request->session()->put('LoggedAdmin', $adminInfo->id);
            //     return redirect()->route('a.dashboard');
            // } else {
            //     return back()->with('fail', 'Password salah');
            // }
            if (Auth::guard('admin')->attempt($credentials, $request->remember)) {
                $request->session()->regenerate();
                return redirect()->intended(config('admin.prefix'));
            } else {
                return back()->with('fail', 'Password salah');
            }
        }
    }

    function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('a.login');

    }
}
