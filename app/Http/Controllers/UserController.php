<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {
    
    public function index() {
        $user = User::latest()->paginate(5);
        //dd($user);
        return view('user.index',compact('user'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create() {
        return view('user.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'telefone' => 'required',
        ]);
        
        $user = new User;
        $user->nome = request('nome');
        $user->email = request('email');
        $user->telefone = request('telefone');
        $user->password = Hash::make(request('password'));
        $user->tipo = request('tipo');

        $user->save();

        if(!auth()){
            auth()->attempt($request->only('email', 'password'));
            return redirect()->route('dashboard');
        }else {
            return redirect()->route('user.index')
                        ->with('success','utilizador Registado com sucesso');
        }
    }

    public function show($id) {
        $user = User::find($id);
        return view('user.show', compact('user'));
    }

    public function edit($id) {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'tipo' => 'required',
         ]);
        $user = User::find($id);
        $user->nome = request('nome');
        $user->email = request('email');
        $user->telefone = request('telefone');
        $user->tipo = request('tipo');
        $user->save();
        
        return redirect()->route('user.index')
                        ->with('success','utilizador actualizado com Successo');
    }

    public function destroy($id) {
        User::find($id)->delete();
  
        return redirect()->back()
                        ->with('success','utilizador apagado com sucesso!');
    }

    public function perfil() {
        return view('user.perfil');
    }
}