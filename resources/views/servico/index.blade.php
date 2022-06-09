@extends('home')

@section('content')
<div class="nk-content-body">
  <div class="nk-block-head nk-block-head-sm">
      <div class="nk-block-between">
          <div class="nk-block-head-content">
              <h3 class="nk-block-title page-title">
                <a href="{{ route('servico.create') }}" class="btn btn-primary"><em class="icon ni ni-plus"></em> adicionar</a>
                Lista de Serviços
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
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Centro</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Preço</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($servico as $s)
                  <tr>
                    <td>{{ $s->id }}</td>
                    <td>{{ $s->nome }}</td>
                    <td>{{ $s->centro->nome }}</td>
                    <td>{{ $s->tipo }}</td>
                    <td>{{ $s->preco }}</td>
                    <td>
                      <form action="{{ route('servico.destroy',$s->id) }}" method="POST">
                            <a href="{{ route('servico.show',$s->id) }}">
                              <i class="btn btn-primary ni ni-eye"></i>
                            </a>
                        
                            <a href="{{ route('servico.edit',$s->id) }}">
                              <i class="btn btn-warning ni ni-pen"></i>
                            </a>
                    
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger" type="submit">
                            <i class="ni ni-trash"></i>
                        </button>
                        
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
        </div><!-- .card-inner-wrap -->
    </div><!-- .card -->
  </div><!-- .nk-block -->
</div><!-- .nk-content-body -->
@endsection