<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SugestaoReclamacao;

class SugestaoReclamacaoController extends Controller {
    public function index() {
        #dd('Hello World');
        return view('sugest_reclam.index');
    }
    
    public function store(Request $request) {
        $this->middleware(['auth']);

        $request->validate([
            'descricao' => 'required',
            'user_id' => 'required',
            'centro_id' => 'required',
        ]);

        #dd($request);

        $sugestaoReclamacao = new SugestaoReclamacao;
        $sugestaoReclamacao->descricao = $request->input('descricao');
        $sugestaoReclamacao->user_id = (request('user_id'));
        $sugestaoReclamacao->centro_id = request('centro_id');
        $sugestaoReclamacao->save();

        return redirect()->back()->with('success', 'Sugestão/Comentario enviado com sucesso');
    }
}
