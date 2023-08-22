<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function loginIndex()
    {
        return view('login');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect('/musics');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }


    public function registerIndex()
    {
        return view('register');
    }
    public function register(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
           

        ]);

        User::create($request->all());
        
        $credentials = $request->only('name', 'email', 'password');
        auth()->attempt($credentials);
        return redirect('/musics');
    }

}
