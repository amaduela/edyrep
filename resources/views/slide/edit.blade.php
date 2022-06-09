@extends('home')
  
@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">
                    <a href="{{ route('slide.index') }}" class="btn btn-primary"><em class="icon ni ni-arrow-left"></em> voltar</a>
                    Editar imagem do Slide
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
                <form action="{{route('slide.update', $slide->id)}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PATCH') }}
                    
                    <div class="form-group">
                        <label class="form-label" for="titulo">Titulo</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="titulo" id="titulo" placeholder="titulo da imagem" value="{{$slide->titulo}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="descricao">Descriçao</label>
                        <div class="form-control-wrap">
                            <textarea class="form-control no-resize" name="descricao" id="descricao">{{$slide->descricao}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="imagem">Imagem</label>
                        <div class="form-control-wrap">
                            <input class="form-control" type="file" name="imagem" id="imagem">
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">submit</button>
                </form>
              </div>
          </div><!-- .card-inner-wrap -->
      </div><!-- .card -->
    </div><!-- .nk-block -->
  </div><!-- .nk-content-body -->
@endsection