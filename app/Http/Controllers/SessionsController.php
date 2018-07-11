<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);
        
        if (Auth::attempt($credentials, $request->has('remember'))) {
            session()->flash('success', 'Welcome back ' . Auth::user()->name);
            return redirect()->route('users.show', [Auth::user()]);
        } else {
            session()->flash('danger', 'Sorry, the email address and password do not match!');
            return redirect()->back();
        }
    }

    public function destroy()
    {
        AUth::logout();
        session()->flash('success', 'Logout seccessfully');
        return redirect('login');
    }
}
