@extends('home')
  
@section('content')
        <div class="nk-split nk-split-page nk-split-md">
            <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                <div class="nk-block nk-block-middle nk-auth-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">Formulário de Registo</h5>
                            <div class="nk-block-des">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing </p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <form method="POST" action="{{route('registar_submit')}}" class="form-validate is-alter" autocomplete="" novalidate="novalidate">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="nome">Nome</label>
                            </div>
                            <div class="form-control-wrap">
                                <input autocomplete="" type="text" class="form-control form-control-lg" required="" value="{{old('nome')}}" name="nome" id="nome" placeholder="Informe o seu nome">
                            </div>
                        </div><!-- .form-group -->
                        <div class="form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="email">Email</label>
                            </div>
                            <div class="form-control-wrap">
                                <input autocomplete="" type="email" class="form-control form-control-lg" required="" value="{{old('email')}}" name="email" id="email" placeholder="Informe o seu email">
                            </div>
                        </div><!-- .form-group -->
                        <div class="form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="telefone">Telefone</label>
                            </div>
                            <div class="form-control-wrap">
                                <input autocomplete="" type="tel" class="form-control form-control-lg" required="" value="{{old('telefone')}}" name="telefone" id="telefone" placeholder="Informe o seu telefone">
                            </div>
                        </div><!-- .form-group -->
                        <div class="form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="password">Senha</label>
                            </div>
                            <div class="form-control-wrap">
                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-"></em>
                                </a>
                                <input autocomplete="" type="password" class="form-control form-control-lg" required="" name="password"  id="password" placeholder="informe a sua senha">
                            </div>
                        </div><!-- .form-group -->
                        <div class="form-group">
                            <button class="btn btn-lg btn-primary btn-block">registar</button>
                        </div>
                    </form><!-- form -->
                    <div class="form-note-s2 pt-4"> Já tem conta? <a href="#">autentique-se</a>
                    </div>
                </div><!-- .nk-block -->
            </div><!-- .nk-split-content -->
        </div>
@endsection