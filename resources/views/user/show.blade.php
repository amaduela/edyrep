@extends('home')

@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">
                    <a href="{{ route('user.index') }}" class="btn btn-primary"><em class="icon ni ni-arrow-left"></em> voltar</a>
                    Dados do Utilizador
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
                    <p class="blog-post-meta"><strong>Nome: </strong>{{ $user->nome }}</p>
                    <p class="blog-post-meta"><strong>Email: </strong>{{ $user->email }}</p>
                    <p class="blog-post-meta"><strong>Tipo de utilizador: </strong>{{ $user->tipo }}</p>
                    <p class="blog-post-meta"><strong>Telefone: </strong>{{ $user->telefone }}</p>
                    <p class="blog-post-meta"><strong>Username: </strong>{{ $user->username }}</p>
            
                    <p>{{ $user->detalhe }}</p>
                    <p>{{ $user->imagem }}</p>
                    <form action="{{ route('user.destroy',$user->id) }}" method="POST">    
                        <a class="btn btn-warning" href="{{ route('user.edit',$user->id) }}">
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