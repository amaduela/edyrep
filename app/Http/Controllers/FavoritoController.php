<?php

namespace App\Http\Controllers;

use App\Models\Centro;
use Illuminate\Http\Request;

class FavoritoController extends Controller {

    public function store(Centro $centro, Request $request) {
        #dd($centro->favorited($request->user()));
        if ($centro->favorited($request->user())) {
            return response('null', 409);
        }

        $centro->favoritos()->create([
            'user_id' => $request->user()->id,
        ]);

        return back();
    }

    public function destroy(Centro $centro, Request $request) {
        $request->user()->favoritos()->where('centro_id', $centro->id)->delete();  
        return back();
    }
}
