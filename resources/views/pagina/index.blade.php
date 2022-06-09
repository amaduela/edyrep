@extends('home')
  
@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">
                    <a href="{{ route('pagina.create') }}" class="btn btn-primary"><em class="icon ni ni-plus"></em> adicionar</a>
                    Lista de Paginas
                </h3>
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div>
    
    <div class="nk-block">
      @if ($message = Session::get('success'))
      <div class="alert alert-pro alert-primary alert-dismissible">
          <div class="alert-text">
              <h6>Alerta</h6>
              <p>{{ $message }}</p>
          </div>
          <button class="close" data-bs-dismiss="alert"></button>
      </div>
      @endif
      @if ($errors->any())
      <div class="alert alert-pro alert-danger alert-dismissible">
          <div class="alert-text">
              <h6>Ops! Alguns erros encontrados</h6>
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          <button class="close" data-bs-dismiss="alert"></button>
      </div>
      @endif
      
      <div class="row g-gs">
        @foreach ($pagina as $p)
        <div class="col-lg-4 col-sm-6">
            <div class="card card-bordered">
                <div class="card-inner">
                    <h5 class="card-title">{{$p->nome}}</h5>
                    <p class="card-text">
                        {!! $p->conteudo !!}
                    </p>
                    <form action="{{ route('pagina.destroy',$p->id) }}" method="POST">
                        <a href="{{route('pagina.edit', $p)}}" class="btn btn-warning">
                            <i class="ni ni-edit-alt"></i> edit
                        </a>
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger" type="submit">
                            <i class="ni ni-trash"></i> apagar
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </div><!-- .nk-block -->
  </div><!-- .nk-content-body -->
@endsection