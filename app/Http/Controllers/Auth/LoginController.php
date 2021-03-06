<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller {
    public function __construct() {
        $this->middleware(['guest']);
    }

    public function index() {
        return view('home.login');
    }

    public function store(Request $request) {
        # dd($request);
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(!auth()->attempt($request->only('email', 'password'))){
            return back()->with('status', 'Dados Invalidos!');
        }

        return redirect()->route('home');
    }
}
