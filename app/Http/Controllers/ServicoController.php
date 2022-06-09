<?php

namespace App\Http\Controllers;

use App\Models\Centro;
use App\Models\Servico;
use Illuminate\Http\Request;
use App\Models\SugestaoReclamacao;

class ServicoController extends Controller {
    /*
    public function __construct() {
        $this->middleware(['auth']);
    }
    */
    
    public function index() {
        $servico = Servico::get();
        //dd($servico);
        return view('servico.index',compact('servico'));
    }

    public function create() {
        $this->middleware(['auth']);
        $centro = Centro::get();
        return view('servico.create', compact('centro'));
    }

    public function store(Request $request) {
        $this->middleware(['auth']);
        $request->validate([
            'nome' => 'required',
            'tipo' => 'required',
            'centro_id' => 'required',
            'preco' => 'required',
            'telefone' => 'required',
            'imagem' => 'required',
        ]);
        //Handle File Upload
        if($request->hasFile('imagem')){
            // Get filename with the extension
            $fileNameWithExt = $request->file('imagem')->getClientOriginalName();
            // Get just filename
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('imagem')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            // Upload Image
            $path = $request->file('imagem')->storeAs('public/images', $fileNameToStore);

        } else {
            dd('no imagem');

            $fileNameToStore = 'noimage.jpg';
        }
        $servico = new Servico;
        $servico->nome = request('nome');
        $servico->descricao = request('descricao');
        $servico->tipo = request('tipo');
        $servico->centro_id = request('centro_id');
        $servico->preco = request('preco');
        $servico->telefone = request('telefone');
        $servico->telefone_alt = request('telefone_alt');
        $servico->imagem = $fileNameToStore;
        $servico->save();
        #Servico::create($request->all());
   
        return redirect()->route('servico.index')
                        ->with('success','Servico Registado com sucesso');
    }

    public function show($id) {
        $this->middleware(['auth']);
        $servico = Servico::find($id);
        return view('servico.show', compact('servico'));
    }

    public function detalhe($id) {
        $servico = Servico::find($id);
        $sugestaoReclamacao = SugestaoReclamacao::where('centro_id', '=', $id)->get();
        return view('servico.detalhe', compact('servico', 'sugestaoReclamacao'));
    }

    public function edit($id) {
        $this->middleware(['auth']);
        $servico = Servico::find($id);
        $centro = Centro::get();
        return view('servico.edit', compact('servico', 'centro'));
    }

    public function update(Request $request, $id) {
        $this->middleware(['auth']);
        $servico = Servico::find($id);
        $servico->nome = request('nome');
        $servico->descricao = request('descricao');
        $servico->tipo = request('tipo');
        $servico->centro_id = request('centro_id');
        $servico->preco = request('preco');
        $servico->telefone = request('telefone');
        $servico->telefone_alt = request('telefone_alt');
        $servico->imagem = request('imagem');
        $servico->save();
                $request->validate([
                'nome' => 'required',
                'descricao',
                'tipo',
                'centro_id',
                'preco',
                'telefone',
                'telefone_alt',
                'imagem',
         ]);
        $servico->update($request->all());
  
        return redirect()->route('servico.index')
                        ->with('success','servico actualizado com Successo');
    }

    public function destroy($id) {
        $this->middleware(['auth']);
        servico::find($id)->delete();
  
        return redirect()->back()
                        ->with('success','Servico apagado com sucesso!');
    }
}
