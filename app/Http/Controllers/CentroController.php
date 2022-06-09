<?php

namespace App\Http\Controllers;

use App\Models\Centro;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CentroController extends Controller {
    public function __construct() {
        $this->middleware(['auth']);
    }

    public function index() {        
        $centro = Centro::latest()->paginate(5);
  
        return view('centro.index',compact('centro'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create() {
        return view('centro.create');
    }

    public function store(Request $request) {
        //dd($request);

        $request->validate([
            'nome' => 'required',
            'endereco' => 'required',
            'valor_acesso' => 'required',
        ]);

        Centro::create([
            'nome' => request('nome'),
            'nome_abreviado' => Str::snake(request('nome')),
            'endereco' => request('endereco'),
            'valor_acesso' => request('valor_acesso'),
            'detalhe' => request('detalhe'),
            'imagem' => request('imagem'),
        ]);
   
        return redirect()->route('centro.index')
                        ->with('success','Centro Registado com sucesso');
    }

    public function show($id) {
        $centro = Centro::find($id);
        return view('centro.show', compact('centro'));
    }

    public function edit($id) {
        $centro = Centro::find($id);
        return view('centro.edit',compact('centro','id'));
    }

    public function update(Request $request, $id) {
        $request->validate([
                'nome' => 'required',
                'endereco' => 'required',
                'valor_acesso' => 'required',
                'detalhe' => 'required',
        ]);
        $centro = Centro::find($id);
        $centro->nome = request('nome');
        $centro->nome_abreviado = Str::snake(request('nome'));
        $centro->endereco = request('endereco');
        $centro->valor_acesso = request('valor_acesso');
        $centro->detalhe = request('detalhe');
        $centro->save();
        
        $centro->update($request->all());
  
        return redirect()->route('centro.index')
                        ->with('success','Centro actualizado com Successo');
    }

    public function destroy($id) {
        centro::find($id)->delete();
  
        return redirect()->route('centro.index')
                        ->with('success','Centro apagado com sucesso!');
    }
}
