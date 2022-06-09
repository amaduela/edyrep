<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Slide;
use App\Models\Centro;
use App\Models\Servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller {
    public function index() {
        #dd(User::where('tipo', '=', 'admin')->get());
        $centro = Centro::get();
        $slide = Slide::get();
        $contar = 0;
        return view('home.index', compact(['centro', 'slide', 'contar']));
    }

    public function detalhe(Centro $centro) {
        #dd($centro);
        return view('home.detalhe', compact('centro'));
    }

    public function servico(Servico $servico) {
        dd($servico);
       # return view('home.detalhe', compact('centro'));
    }
}
