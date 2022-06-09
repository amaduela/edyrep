@extends('home')

@section('content')
<div class="nk-content-body">    
    <div class="nk-block">
        <div class="card card-bordered">
            <div class="card-inner">
                <div class="row pb-5">
                    <div class="col-lg-6">
                        <div class="product-gallery me-xl-1 me-xxl-5">
                            <div class="slider-init" id="sliderFor" data-slick='{"arrows": false, "fade": true, "asNavFor":"#sliderNav", "slidesToShow": 1, "slidesToScroll": 1}'>
                                @foreach ($servico->imagens as $si)
                                <div class="slider-item rounded">
                                    <img src="/storage/images/{{$si->imagem}}" class="rounded w-100" alt="">
                                </div>
                                @endforeach
                                
                            </div><!-- .slider-init -->
                            <div class="slider-init slider-nav" id="sliderNav" data-slick='{"arrows": false, "slidesToShow": 5, "slidesToScroll": 1, "asNavFor":"#sliderFor", "centerMode":true, "focusOnSelect": true, 
                                    "responsive":[ {"breakpoint": 1539,"settings":{"slidesToShow": 4}}, {"breakpoint": 768,"settings":{"slidesToShow": 3}}, {"breakpoint": 420,"settings":{"slidesToShow": 2}} ]
                                }'>
                                @foreach ($servico->imagens as $si)
                                <div class="slider-item">
                                    <div class="thumb">
                                        <img src="/storage/images/{{$si->imagem}}" class="rounded" alt="">
                                    </div>
                                </div>
                                @endforeach
                            </div><!-- .slider-nav -->
                        </div><!-- .product-gallery -->
                    </div><!-- .col -->
                    <div class="col-lg-6">
                        @if ($servico->preco == 0)
                            <h4 class="product-price text-primary">(MZN) ao seu critério <small class="text-muted fs-14px">de acordo com o consumo</small></h4>
                        @else
                            <h4 class="product-price text-primary">{{$servico->preco}} <small class="text-muted fs-14px">MZN</small></h4>
                        @endif
                        <h2 class="product-title">{{$servico->nome}}</h2>
                        <div class="product-excrept text-soft">
                            <p class="lead">
                                {{$servico->descricao}}
                            </p>
                        </div>
                        <div class="product-meta">
                            <ul class="d-flex g-3 gx-5">
                                <li>
                                    <div class="fs-14px text-muted">Tipo</div>
                                    <div class="fs-16px fw-bold text-secondary">{{$servico->tipo}}</div>
                                </li>
                                <li>
                                    <div class="fs-14px text-muted">Centro</div>
                                    <div class="fs-16px fw-bold text-secondary">{{$servico->centro_id}}</div>
                                </li>
                            </ul>
                        </div>
                        <div class="product-meta">
                            <ul class="d-flex g-3 gx-5">
                                <div class="fs-14px text-muted">Contacto</div>
                                <li>
                                    <div class="fs-16px text-muted">{{$servico->telefone}} | {{$servico->telefone_alt}}</div>
                                </li>
                            </ul>
                        </div>

                        <form action="{{ route('sugest_reclam.store') }}" method="POST">
                            {{ csrf_field() }}
                                <div class=" mt-4 mb-4">
                                    <label for="descricao" class="form-label">Deixe o seu comentário ou sugestão</label>
                                    <textarea class="form-control" name="descricao" id="descricao" rows="30">{{old('descricao')}}</textarea>
                                    @auth
                                    @if (auth()->user()->tipo === 'admin')
                                    <input type="hidden" name="user_id" id="user_id" value="{{auth()->user()->id}}">
                                    <input type="hidden" name="centro_id" id="centro_id" value="{{$servico->centro_id}}">
                                    @endif
                                    @endauth
                                </div>
                                <button type="submit" class="btn btn-primary">enviar</button>
                        </form>
                    </div><!-- .col -->
                </div>
            </div>
        </div>
    </div><!-- .nk-block -->
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-between g-3">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">O que as pessoas dizem?</h3>
                </div>
            </div>
        </div><!-- .nk-block-head -->
        <div class="slider-init row" data-slick='{"slidesToShow": 4, "centerMode": false, "slidesToScroll": 1, "infinite":false, "responsive":[ {"breakpoint": 1540,"settings":{"slidesToShow": 3}},{"breakpoint": 992,"settings":{"slidesToShow": 2}}, {"breakpoint": 576,"settings":{"slidesToShow": 1}} ]}'>
            @foreach ($sugestaoReclamacao as $sg)
            <div class="col">
                <div class="card product-card">
                    <div class="product-thumb">
                        <ul class="product-badges">
                            <li><span class="badge bg-success">New</span></li>
                        </ul>
                    </div>
                    <div class="card-inner text-center">
                        <div class="nk-reply-item">
                            <div class="nk-reply-header">
                                <div class="user-card">
                                    <div class="user-name">{{ $sg->user->nome }}</div>
                                </div>
                            </div>
                            <div class="nk-reply-body">
                                <div class="nk-reply-entry entry">
                                    <p>{{ $sg->descricao }}.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .col -->
            @endforeach
        </div>
    </div>
</div><!-- .nk-content-body -->
@endsection