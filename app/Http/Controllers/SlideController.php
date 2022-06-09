<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class SlideController extends Controller {
    public function index() {
        $slide = Slide::get();
        return view('slide.index', compact('slide'));
    }

    public function create() {
        return view('slide.create');
    }

    public function store(Request $request) {       
        $request->validate([
            'titulo' => 'required',
            'imagem' => 'required',
            'descricao' => 'required',
        ]);

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
            $pathThumb = $request->file('imagem')->storeAs('public/images/thumbnail', $largethumbnail);

            $pathThumb = public_path('storage/profile_images/thumbnail/'.$largethumbnail);
            $this->createThumbnail($pathThumb, 1000, 300);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        #dd($request);
        $slide = new Slide;
        $slide->titulo = request('titulo');
        $slide->descricao = request('descricao');
        $slide->imagem = $fileNameToStore;
        $slide->save();
        return redirect()->route('slide.index')->with('success', 'Imagem Adicionada com Sucesso');
    }

    public function edit($id) {
        $slide = Slide::find($id);
        return view('slide.edit', compact('slide'));
    }


    public function update(Request $request, $id) {
        $slide = Slide::find($id);
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
        ]);

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

            $slide->imagem = $fileNameToStore;
        }

        $slide->titulo = request('titulo');
        $slide->descricao = request('descricao');
        $slide->save();

        return redirect()->route('slide.index')->with('success', 'Imagem Actualizada com Sucesso');
    }

    public function destroy($id) {
        $slide = SLide::find($id);
        if ($slide->imagem != "noimage.jpg" || $slide->imagem != "noimage.jpeg" ) {
            Storage::delete('public/images/'.$slide->imagem);
        }

        $slide->delete();
        
        return redirect()->route('slide.index')
                        ->with('success','Imagem removida com Sucesso!');
    }
}
