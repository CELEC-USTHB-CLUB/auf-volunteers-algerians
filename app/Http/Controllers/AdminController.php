<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller {
    public function check(Request $request) {
    	$credentials = $request->only('email', 'password');
    	if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        }

        return back()->withErrors([
            'email' => "Les informations d'identification fournies ne correspondent pas à nos enregistrements.",
        ]);
    }
}
