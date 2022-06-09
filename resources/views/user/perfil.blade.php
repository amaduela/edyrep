@extends('home')
  
@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">
                      Perfil do Utilizador
                    </h3>
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->
        </div>
          
          <div class="card card-bordered card-stretch">
              <div class="card-inner-group">
                <div class="card-aside-wrap">
                    <div class="card-inner card-inner-lg">
                        <div class="nk-block">
                            <div class="nk-data data-list">
                                <div class="data-head">
                                    <h6 class="overline-title">Dados do Utilizador</h6>
                                </div>
                                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                    <div class="data-col">
                                        <span class="data-label">Nome</span>
                                        <span class="data-value">{{ auth()->user()->nome}}</span>
                                    </div>
                                    <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                </div><!-- data-item -->
                                <div class="data-item">
                                    <div class="data-col">
                                        <span class="data-label">Email</span>
                                        <span class="data-value">{{ auth()->user()->email}}</span>
                                    </div>
                                    <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                </div><!-- data-item -->
                                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                    <div class="data-col">
                                        <span class="data-label">Telefone</span>
                                        <span class="data-value text-soft">{{ auth()->user()->telefone}}</span>
                                    </div>
                                    <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                </div><!-- data-item -->
                                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                    <div class="data-col">
                                        <span class="data-label">Data de Nascimento</span>
                                        <span class="data-value">29 Fev, 1986</span>
                                    </div>
                                    <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                </div><!-- data-item -->
                            </div><!-- data-list -->
                        </div><!-- .nk-block -->
                    </div>
                    <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg toggle-screen-lg" data-toggle-body="true" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                        <div class="card-inner-group" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
                            <div class="card-inner">
                                <div class="user-card">
                                    <div class="user-avatar bg-primary">
                                        <span>AB</span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">{{ auth()->user()->nome}}</span>
                                        <span class="sub-text">{{ auth()->user()->email}}</span>
                                    </div>
                                </div><!-- .user-card -->
                            </div><!-- .card-inner -->
                            <div class="card-inner p-0">
                                <ul class="link-list-menu">
                                    <li><a class="active" href="#"><em class="icon ni ni-user-fill-c"></em><span>Dados Pessoais</span></a></li>
                                    <li><a href="#"><em class="icon ni ni-bell-fill"></em><span>Notificações</span></a></li>
                                    <li><a href="#"><em class="icon ni ni-lock-alt-fill"></em><span>Segurança</span></a></li>
                                </ul>
                            </div><!-- .card-inner -->
                        </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 504px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div><!-- .card-inner-group -->
                    </div><!-- card-aside -->
                </div><!-- .card-aside-wrap -->
              </div><!-- .card-inner-wrap -->
          </div><!-- .card -->
        </div><!-- .nk-block -->
      </div><!-- .nk-content-body -->
@endsection