@extends('home')
  
@section('content')
<div class="nk-content-body">
  @foreach ($pagina as $p)
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">
                  {{$p->nome}} 
                </h3>
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div>
    <div class="text-center">
      <img class="text-center" src="/storage/images/{{$p->destaque}}" class="img-fluid" alt="..."> <br>
    </div>
    <div class="nk-block">
      <div class="card card-bordered card-stretch">
          <div class="card-inner-group">
              <div class="card-inner">
                {!! $p->conteudo !!}
              </div>
          </div><!-- .card-inner-wrap -->
      </div><!-- .card -->
    </div><!-- .nk-block -->
    @endforeach
  </div><!-- .nk-content-bodby -->
  @endsection