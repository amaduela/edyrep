@extends('home')

@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">
                    <a href="{{ route('servico.index') }}" class="btn btn-primary"><em class="icon ni ni-arrow-left"></em> voltar</a>
                    Actualizar Servico
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
                <form action="{{ route('servico.update',$servico->id) }}" method="POST" enctype=”multipart/form-data”>
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}            
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do Sserviço" value="{{ $servico->nome }}">
                        </div>
                        <div class="mb-3">
                            <label for="centro_id" class="form-label">Centro</label>
                            <select class="form-control" name="centro_id" id="centro_id" value="{{ $servico->centro_id }}">
                                <option value="">-seleccione-</option>
                                @foreach ($centro as $c)
                                    <option value="{{$c->id}}">{{$c->nome}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição</label>
                            <textarea class="form-control" name="descricao" id="descricao" cols="30" placeholder="descrição">{{ $servico->descricao }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="tipo" class="form-label">Tipo</label>
                            <select class="form-control" name="tipo" id="tipo" value="{{ $servico->tipo }}">
                                <option value="Restaurante">Restaurante</option>
                                <option value="Bar">Bar</option>
                                <option value="Lazer">Lazer</option>
                                <option value="Ginastica">Ginastica</option>
                                <option value="Brinquedo">Brinquedo</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="preco" class="form-label">Preço</label>
                            <input type="number" class="form-control" id="preco" name="preco" placeholder="82/84/86xxxxxxx" value="{{ $servico->preco }}">
                        </div>
                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="number" class="form-control" id="telefone" name="telefone" placeholder="82/84/86xxxxxxx" value="{{ $servico->telefone }}">
                        </div>
                        <div class="mb-3">
                            <label for="telefone_alt" class="form-label">Telefone Alternativo</label>
                            <input type="number" class="form-control" id="telefone_alt" name="telefone_alt" placeholder="82/84/86xxxxxxx" value="{{ $servico->telefone_alt }}">
                        </div>
                        <div class="mb-3">
                            <label for="imagem" class="form-label">Imagem</label>
                            <input type="file" class="form-control" name="imagem" id="imagem" value="{{ $servico->imagem }}">
                        </div>
                        <button type="submit" class="btn btn-primary">actualizar dados</button>
                </form>
              </div>
          </div><!-- .card-inner-wrap -->
      </div><!-- .card -->
    </div><!-- .nk-block -->
  </div><!-- .nk-content-body -->
@endsection