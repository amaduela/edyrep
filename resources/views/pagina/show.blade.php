@extends('home')
  
@section('content')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between g-3">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">
                Lista de Paginas 
                <a class="btn btn-primary" href="{{route('pagina.create')}}">
                    <i class="ni ni-edit-alt"></i> adicionar
                </a>
            </h3>
        </div>
        <div class="nk-block-head-content">
            <a href="{{ route('home')}}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
            <a href="{{ route('home')}}" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
        </div>
    </div>
</div>
<div class="nk-block">
    <div class="row g-gs">
        <div class="col-lg-4 col-sm-6">
            <div class="card card-bordered">
                <div class="card-inner">
                    <h5 class="card-title">{{$pagina->nome}}</h5>
                    <p class="card-text">
                        {{$pagina->conteudo}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection