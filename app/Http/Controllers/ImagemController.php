<?php

namespace App\Http\Controllers;

use App\Models\Imagem;
use App\Models\Servico;
use Illuminate\Http\Request;

class ImagemController extends Controller {
    public function store(Request $request) {
        $request->validate([
            'imagem' => 'required',
            'servico_id' => 'required',
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

            //large thumbnail name
            $largethumbnail = $fileName.'_large_'.time().'.'.$extension;

            // Upload Image
            $path = $request->file('imagem')->storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $imagem = new Imagem;
        $imagem->imagem = $fileNameToStore;
        $imagem->servico_id = request('servico_id');
        $imagem->save();
   

        $servico = Servico::find($imagem->servico_id);
        #return view('servico.show', compact('servico'))->with('success','Imagem adicionada com sucesso');
        return redirect()->route('servico.show', compact('servico'))->with('success', 'Imagem Adicionada com Sucesso');
    }
}
