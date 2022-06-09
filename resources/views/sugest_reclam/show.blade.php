@extends('home')

@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">
                    <a href="{{ route('servico.index') }}" class="btn btn-primary"><em class="icon ni ni-arrow-left"></em> voltar</a>
                    Dados do Serviço
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
                <article class="blog-post">
                    <h2 class="blog-post-title"><strong>Nome: </strong>{{ $servico->nome }}</h2>
                    <p class="blog-post-meta"><strong>Descrição: </strong>{{ $servico->descricao }}</p>
                    <p class="blog-post-meta"><strong>Tipo de Serviço: </strong>{{ $servico->tipo }}</p>
                    <p class="blog-post-meta"><strong>Preço: </strong>{{ $servico->preco }}</p>
                    <p class="blog-post-meta"><strong>Centro: </strong>{{ $servico->centro_id }}</p>
                    <p class="blog-post-meta"><strong>Contacto(s):</strong>{{ $servico->telefone }} |{{ $servico->telefone }}</p>
            
                    <p>{{ $servico->detalhe }}</p>
                    <p>{{ $servico->imagem }}</p>
                    <form action="{{ route('servico.destroy',$servico->id) }}" method="POST">    
                        <a class="btn btn-warning" href="{{ route('servico.edit',$servico->id) }}">
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
                </article>
              </div>
          </div><!-- .card-inner-wrap -->
      </div><!-- .card -->
    </div><!-- .nk-block -->
  </div><!-- .nk-content-body -->
@endsection