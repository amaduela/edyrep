@extends('home')
  
@section('content')
        <div class="nk-split nk-split-page nk-split-md">
            <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                <div class="nk-block nk-block-middle nk-auth-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">Painel de Autenticação</h5>
                            <div class="nk-block-des">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing </p>
                            </div>
                            @if (session('success'))
                                <div class="alert alert-success">
                                    <div class="alert alert-fill alert-success alert-dismissible alert-icon">
                                        <em class="icon ni ni-cross-circle"></em><button class="close" data-bs-dismiss="alert"></button>
                                        {{ session('success') }}
                                    </div>
                                </div>
                            @endif
                            @if (session('status'))
                                <div class="alert alert-success">
                                    <div class="alert alert-fill alert-danger alert-dismissible alert-icon">
                                        <em class="icon ni ni-cross-circle"></em><button class="close" data-bs-dismiss="alert"></button>
                                        {{ session('status') }}
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div><!-- .nk-block-head -->
                    <form action="{{ route('login') }}" method="POST" enctype=”multipart/form-data” class="form-validate is-alter" novalidate="novalidate">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="email-address">Email</label>
                            </div>
                            <div class="form-control-wrap">
                                <input autocomplete="" type="text" class="form-control form-control-lg" required="" name="email" id="email" placeholder="Informe o seu email" value="{{old('email')}}">
                            </div>
                        </div><!-- .form-group -->
                        <div class="form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="password">Senha</label>
                                <a class="link link-primary link-sm" tabindex="-1" href="#">Esqueci a senha!</a>
                            </div>
                            <div class="form-control-wrap">
                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input autocomplete="" type="password" class="form-control form-control-lg" required="" name="password" id="password" placeholder="informe a sua senha">
                            </div>
                            <div class="form-control-wrap">
                            </div>
                        </div><!-- .form-group -->
                        <div class="form-group">
                            <div class="">
                                <label class="form-label" for="remember">Manter sessão </label>
                                <input type="checkbox" name="remember" id="remember">
                            </div>
                        </div><!-- .form-group -->
                        <div class="form-group">
                            <button class="btn btn-lg btn-primary btn-block">autenticar</button>
                        </div>
                    </form><!-- form -->
                    <div class="form-note-s2 pt-4"> Não tem conta? <a href="html/pages/auths/auth-register.html">Registe-se</a>
                    </div>
                </div><!-- .nk-block -->
            </div><!-- .nk-split-content -->
        </div>
@endsection