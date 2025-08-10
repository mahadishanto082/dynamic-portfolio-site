<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

    protected $redirectTo = '/admin/dashboard';

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        if (Auth::guard('admin')->attempt(
            ['email' => $request->email, 'password' => $request->password],
            $request->filled('remember')
        )) {
            session()->flash('success', 'Admin login successfully');
            return redirect()->intended($this->redirectTo);
        }

        return back()->withErrors(['email' => 'Your email or password is invalid']);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success', 'Admin logout successfully');
    }
}
