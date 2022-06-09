@extends('home')
  
@section('content')
<div class="nk-block">
    <div class="row g-gs">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              @foreach ($slide as $s)
                @if ($s->id == 1)
                <div class="carousel-item active">
                  <img src="/storage/images/{{$s->imagem}}" class="d-block w-100" alt="{{$s->id}}">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>{{$s->titulo}}</h5>
                    <p>{{$s->descricao}}</p>
                  </div>
                </div> 
                @else
                <div class="carousel-item">
                  <img src="/storage/images/{{$s->imagem}}" class="d-block w-100" alt="{{$s->id}}">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>{{$s->titulo}}</h5>
                    <p>{{$s->descricao}}</p>
                  </div>
                </div>
                @endif
              @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <h5 class="text-center">Os nossos Centros</h4>
        @foreach ($centro as $c)
        <div class="col-lg-4 col-sm-6">
            <div class="card card-bordered pricing text-center">
                <div class="pricing-body">
                    <div class="pricing-media">
                        <img src="{{ asset('images/location.svg') }}" alt="">
                    </div>
                    <div class="pricing-title w-220px mx-auto">
                        <h5 class="title">{{$c->nome}}</h5>
                        <span class="sub-text">{{$c->endereco}}</span>
                    </div>
                    <div class="pricing-amount">
                        <div class="amount">{{$c->valor_acesso}} MT</div>
                        <span class="bill">Por pessoa e Crianças até 5 anos</span>
                    </div>
                    
                    <div class="pricing-action d-inline-block">
                        <a href="{{ route('detalhe', $c) }}" class="btn btn-primary">saber mais</a>
                        @auth
                        @if ($c->favorited(auth()->user()))
                            <form action="{{route('centro.favoritos', $c->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-p-0 btn-nofocus">
                                    <em class="icon ni ni-thumbs-down"></em><span>{{$c->favoritos->count()}} {{ Str::plural('gosto', $c->favoritos->count())}}</span>
                                </button>
                            </form>
                        @else
                            <form action="{{route('centro.favoritos', $c->id)}}" method="post">
                                @csrf
                                <button class="btn btn-p-0 btn-nofocus">
                                    <em class="icon ni ni-thumbs-up"></em><span>{{$c->favoritos->count()}} {{ Str::plural('gosto', $c->favoritos->count())}}</span>
                                </button>
                            </form>
                        @endif
                        @endauth
                    </div>
                    
                </div>
            </div>
        </div>
        @endforeach                   
    </div>
    <div class="row g-gs">
      <div class="col-lg-12 p-4">
        <div id="map" style="width:100%;height:400px;">
      </div>
      </div>
    </div>
</div>
@endsection