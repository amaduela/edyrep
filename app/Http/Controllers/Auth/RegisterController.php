<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller {
    public function __construct() {
        $this->middleware('guest');
    }

    public function index() {
        return view('home.registar');
    }

    public function store(Request $request) {
        //dd($request['nome']);
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'telefone' => 'required',
        ]);

        User::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'password' => Hash::make($request->password),
        ]);

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('home');
        /*return redirect()->route('login')
            ->with('success','Utilizador Registado com sucesso');*/
    }
}