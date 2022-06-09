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
                    <p>
                        <img class="text-center" src="/storage/images/{{ $servico->imagem }}" class="img-fluid" alt="...">
                    </p>
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
                
                
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="{{route('imagem.store')}}" method="POST"  enctype="multipart/form-data">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Adicionar imagem a Galeria de Imagem</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label" for="imagem">Imagem</label>
                                        <div class="form-control-wrap">
                                            <input class="form-control" type="file" name="imagem" id="imagem">
                                            <input type="hidden" name="servico_id" id="servico_id" value="{{$servico->id}}">
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fechar</button>
                                <button class="btn btn-primary" type="submit">adicionar imagem</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
              </div>
          </div><!-- .card-inner-wrap --> 
      </div><!-- .card -->

      <div class="nk-block nk-block-lg">
        <div class="nk-block-head pt-4">
            <div class="nk-block-between g-3">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">
                        Galeria de Imagens
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <em class="icon ni ni-plus-round"></em> adicionar imagem
                        </button>
                    </h3>
                </div>
            </div>
        </div><!-- .nk-block-head -->
        <div class="row">
            @foreach ($servico->imagens as $si)
            <div class="col-md-4 mb-3">
                <div class="card card-bordered product-card">
                    <div class="product-thumb">
                        <a href="#">
                            <img class="card-img-top" src="/storage/images/{{ $si->imagem }}" alt="">
                        </a>
                    </div>
                </div>
            </div><!-- .col -->
            @endforeach
        </div>
    </div>
    </div><!-- .nk-block -->
  </div><!-- .nk-content-body -->
@endsection