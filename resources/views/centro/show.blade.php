@extends('home')

@section('content')
<div class="nk-content-body">
  <div class="nk-block-head nk-block-head-sm">
      <div class="nk-block-between">
          <div class="nk-block-head-content">
              <h3 class="nk-block-title page-title">
                <a href="{{ route('centro.index') }}" class="btn btn-primary"><em class="icon ni ni-arrow-left"></em> voltar</a>
                <small>Nome:</small> {{ $centro->nome }}
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
    
    <div class="card card-bordered card-stretch">
        <div class="card-inner-group">
            <div class="card-inner">
              <h5 class="card-title">{{ $centro->nome}}</h5>
              <h6 class="card-subtitle mb-2">Preço: {{ $centro->valor_acesso}}</h6>
              <p class="card-text">{{ $centro->detalhe}}</p>
                <p>{{ $centro->imagem }}</p>
                <form action="{{ route('centro.destroy',$centro->id) }}" method="POST">    
                    <a class="btn btn-warning" href="{{ route('centro.edit',$centro->id) }}">
                        <i class="ni ni-pen"></i>
                        editar
                    </a>
                    <!-- SUPPORT ABOVE VERSION 5.5 -->
                    {{-- @csrf
                    @method('DELETE') --}} 
                    
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger"><i class="ni ni-trash"></i> apagar</button>
                </form>
            </div>
        </div><!-- .card-inner-wrap -->
    </div><!-- .card -->
    <div class="gap"></div>
    <div class="row g-gs">
      <h5>Serviços</h5>
      @foreach ($centro->servicos as $s)
      <div class="col-sm-6 col-lg-4 col-xxl-3">
          <div class="card card-bordered">
              <div class="card-inner">
                  <div class="team">
                      <div class="team-status bg-light text-black"><em class="icon ni ni-check-thick"></em></div>
                      <div class="team-options">
                          <div class="drodown">
                            <a href="#"><em class="icon ni ni-focus"></em><span>detalhe</span></a>
                          </div>
                      </div>
                      <div class="user-card user-card-s2">
                          <div class="user-info">
                              <h6>{{ $s->nome}}</h6>
                              <span class="sub-text">{{ $s->preco}} mzn</span>
                          </div>
                      </div>
                      <div class="team-details">
                          <p>{{ $s->descricao}}.</p>
                      </div>
                      <div class="team-view">
                          <form action="{{ route('servico.destroy',$s->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="link link-sm link-danger" type="submit">
                                <i class="ni ni-trash"></i> remover serviço
                            </button>
                          </form>
                      </div>

                  </div><!-- .team -->
              </div><!-- .card-inner -->
          </div><!-- .card -->
      </div><!-- .col -->
      @endforeach
  </div>
  </div><!-- .nk-block -->
</div><!-- .nk-content-body -->
@endsection