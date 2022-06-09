<?php

namespace App\Http\Controllers;

use App\Models\Pagina;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PaginaController extends Controller {
    public function index() {
        $pagina = Pagina::get();
        return view('pagina.index', compact('pagina'));
    }

    public function create() {
        return view('pagina.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nome' => 'required',
        ]);

        //Handle File Upload
        if($request->hasFile('destaque')){
            // Get filename with the extension
            $fileNameWithExt = $request->file('destaque')->getClientOriginalName();
            // Get just filename
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('destaque')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('destaque')->storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $pagina = new Pagina;
        $pagina->nome = $request->input('nome');
        $pagina->nome_abreviado = Str::snake(request('nome'));
        $pagina->conteudo = request('conteudo');
        $pagina->destaque = $fileNameToStore;
        $pagina->save();

        return redirect()->route('pagina.index')->with('success', 'Pagina Registada com Sucesso');
    }

    public function edit($id) {
        $pagina = Pagina::find($id);
        return view('pagina.edit', compact('pagina'));
    }


    public function update(Request $request, $id) {
        $pagina = Pagina::find($id);
        #dd($pagina);
        $request->validate([
            'nome' => 'required',
            'conteudo' => 'required'
        ]);
        $pagina->nome = request('nome');
        $pagina->nome_abreviado = Str::snake(request('nome'));
        $pagina->conteudo = request('conteudo');
        $pagina->save();

        return redirect()->route('pagina.index')
                        ->with('success', 'Pagina Actualizada com Sucesso');
    }

    public function destroy($id) {
        Pagina::find($id)->delete();
  
        return redirect()->route('pagina.index')
                        ->with('success','Pagina removida com Sucesso!');
    }

    public function visualizar($nome) {
        $pagina = Pagina::where('nome_abreviado', '=', $nome)->get();
        #$pagina = Pagina::pluck('nome_abreviado');
        #dd($pagina);
        return view('pagina.visualizar', compact('pagina'));
    }
}
