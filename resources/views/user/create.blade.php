@extends('home')

@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">
                    <a href="{{ route('user.index') }}" class="btn btn-primary"><em class="icon ni ni-arrow-left"></em> voltar</a>
                    Registar Utilizador
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
                <form action="{{ route('user.store') }}" method="POST" enctype=”multipart/form-data”>
                    {{ csrf_field() }}
                  
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do Utilizador" value="{{ old('nome') }}" autocomplete="none">
                        </div>
            
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Digite o email da bacia" value="{{ old('email') }}" autocomplete="none">
                        </div>
                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="number" class="form-control" id="telefone" name="telefone" placeholder="Digite o valor de acesso a bacia" value="{{ old('telefone') }}" autocomplete="none">
                        </div>
                        <div class="mb-3">
                            <label for="tipo" class="form-label">Tipo</label>
                            <select class="form-control" name="tipo" id="tipo">
                                <option value="normal">normal</option>
                                <option value="admin">administrador</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Digite o nome do Utilizador" value="{{ old('username') }}" autocomplete="none">
                        </div>
                        <div class="mb-3">
                            <label for="pasword" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="pasword" name="password" placeholder="Digite o nome do Utilizador" value="{{ old('nome') }}" autocomplete="none">
                        </div>
            
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
          </div><!-- .card-inner-wrap -->
      </div><!-- .card -->
    </div><!-- .nk-block -->
  </div><!-- .nk-content-body -->
@endsection