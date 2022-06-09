@extends('home')

@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">
                  Registar Centro
                  <a href="{{ route('centro.index') }}" class="btn btn-primary"><em class="ni ni-arrow-left"></em> voltar</a>
                </h3>
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div>
    
    <div class="nk-block">
      @if ($message = Session::get('success'))
      <div class="alert alert-pro alert-primary alert-dismissible">
          <div class="alert-text">
              <h6>Nota</h6>
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
                <form action="{{ route('centro.store') }}" method="POST" enctype=”multipart/form-data”>
                    {{ csrf_field() }}
                  
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome da bacia" value="{{ old('nome') }}">
                        </div>
                        <div class="mb-3">
                            <label for="endereco" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereco da bacia" value="{{ old('endereco') }}">
                        </div>
                        <div class="mb-3">
                            <label for="valor_acesso" class="form-label">Valor de Acesso</label>
                            <input type="number" class="form-control" id="valor_acesso" name="valor_acesso" placeholder="Digite o valor de acesso a bacia" value="{{ old('valor_acesso') }}">
                        </div>
                        <div class="mb-3">
                            <label for="detalhe" class="form-label">Descrição</label>
                            <textarea class="form-control" name="detalhe" id="detalhe" cols="30" placeholder="descrição" value="{{'detalhe'}}"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="imagem" class="form-label">Imagem</label>
                            <input type="file" class="form-control" name="imagem" id="imagem" value="{{ old('imagem') }}">
                        </div>
            
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
          </div><!-- .card-inner-wrap -->
      </div><!-- .card -->
    </div><!-- .nk-block -->
  </div><!-- .nk-content-body -->
@endsection