@extends('home')
  
@section('content')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between g-3">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">{{$centro->nome}}</h3>
        </div>
        <div class="nk-block-head-content">
            <a href="{{ route('home')}}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
            <a href="{{ route('home')}}" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
        </div>
    </div>
</div>
<div class="nk-block">
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="row pb-1">
                <div class="col-lg-6">
                    <div class="product-info mt-5 me-xxl-5">
                        <h4 class="product-price text-primary">{{ $centro->valor_acesso}} MZN <small class="text-muted fs-14px">valor de acesso</small></h4>
                        
                        <div class="product-rating">
                            <div class="amount">{{$centro->favoritos->count()}} {{ Str::plural('gosto', $centro->favoritos->count())}}</div>
                        </div><!-- .product-rating -->
                        <div class="product-excrept text-soft">
                            <p>
                                {{ $centro->detalhe}}
                            </p>
                        </div>
                    </div><!-- .product-info -->
                </div><!-- .col -->
            </div>
        </div>
    </div>

    <div class="nk-block nk-block-lg">
        <div class="nk-block-head pt-4">
            <div class="nk-block-between g-3">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Serviços disponíveis</h3>
                </div>
            </div>
        </div><!-- .nk-block-head -->
        <div class="row">
            @foreach ($centro->servicos as $s)
            <div class="col-md-4 mb-3">
                <div class="card card-bordered product-card">
                    <div class="product-thumb">
                        <a href="{{route('service', $s)}}">
                            <img class="card-img-top" src="/storage/images/{{ $s->imagem }}" alt="">
                        </a>
                        <ul class="product-badges">
                            <li><span class="badge bg-success">*</span></li>
                        </ul>
                        <ul class="product-actions">
                            <li><a href="#"><em class="icon ni ni-cart"></em></a></li>
                            <li><a href="#"><em class="icon ni ni-heart"></em></a></li>
                        </ul>
                    </div>
                    <div class="card-inner text-center">
                        <ul class="product-tags">
                            <li><a href="#">{{$s->tipo}}</a></li>
                        </ul>
                        <h5 class="product-title"><a href="html/product-details.html">{{$s->nome}}</a></h5>
                        <div class="product-price text-primary h5">{{$s->preco}}</div>
                    </div>
                </div>
            </div><!-- .col -->
            @endforeach
        </div>
    </div>
</div>
@endsection