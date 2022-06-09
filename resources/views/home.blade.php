<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="{{ asset('css/dashlited.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    </head>
    <body class="nk-body npc-invest bg-lighter">
        <div class="nk-app-root">
            <!-- wrap -->
            <div class="nk-wrap ">
                <!-- main header -->
                <div class="nk-header nk-header-fluid is-theme">
                    <div class="container-xl wide-xl">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger me-sm-2 d-lg-none">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand">
                                <a href="{{ route('home') }}" class="logo-link">
                                    <img class="logo-light logo-img" src="{{ asset('images/logo.png') }}" srcset="{{ asset('images/logo2x.png 2x') }}" alt="logo">
                                    <img class="logo-dark logo-img" src="{{ asset('images/logo-dark.png') }}" srcset=" {{ asset('images/logo-dark2x.png 2x') }}" alt="logo-dark">
                                </a>
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-menu" data-content="headerNav">
                                <div class="nk-header-mobile">
                                    <div class="nk-header-brand">
                                        <a href="{{ route('home') }}" class="logo-link">
                                            <img class="logo-light logo-img" src="{{ asset('images/logo.png') }}" srcset="{{ asset('images/logo2x.png 2x') }}" alt="logo">
                                        </a>
                                    </div>
                                    <div class="nk-menu-trigger me-n2">
                                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-arrow-left"></em></a>
                                    </div>
                                </div>
                                <ul class="nk-menu nk-menu-main ui-s2">
                                    <li class="nk-menu-item">
                                        <a href="{{ route('home') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">Pagina inicial</span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="{{route('visualizar', 'sobre_nos')}}" class="nk-menu-link">
                                            <span class="nk-menu-text">Sobre-nós </span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="{{route('visualizar', 'termos_e_condicoes')}}" class="nk-menu-link">
                                            <span class="nk-menu-text">Termos e Condições</span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                                    
                                    <li class="nk-menu-item">
                                        <a href="{{route('visualizar', 'termos_de_uso')}}" class="nk-menu-link">
                                            <span class="nk-menu-text">Termos de uso </span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="{{route('visualizar', 'contactos')}}" class="nk-menu-link">
                                            <span class="nk-menu-text">Contactos </span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                                    @auth
                                    @if (auth()->user()->tipo === 'admin')
                                    <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle" data-bs-original-title="" title="">
                                            <span class="nk-menu-text">* Dashboard</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="{{ route('centro.index') }}" class="nk-menu-link" data-bs-original-title="" title="">
                                                    <span class="nk-menu-text">Centro</span>
                                                </a>
                                            </li><!-- .nk-menu-item -->
                                            <li class="nk-menu-item">
                                                <a href="{{ route('servico.index') }}" class="nk-menu-link" data-bs-original-title="" title="">
                                                    <span class="nk-menu-text">Servico</span>
                                                </a>
                                            </li><!-- .nk-menu-item -->
                                            <li class="nk-menu-item">
                                                <a href="{{ route('user.index') }}" class="nk-menu-link" data-bs-original-title="" title="">
                                                    <span class="nk-menu-text">Utilizador</span>
                                                </a>
                                            </li><!-- .nk-menu-item -->
                                            <li class="nk-menu-item border-top">
                                                <a href="{{route('pagina.index')}}" class="nk-menu-link" data-bs-original-title="" title="">
                                                    <span class="nk-menu-text">Pagina</span>
                                                    <span class="nk-menu-badge">*</span>
                                                </a>
                                            </li><!-- .nk-menu-item -->
                                            <li class="nk-menu-item">
                                                <a href="{{route('slide.index')}}" class="nk-menu-link" data-bs-original-title="" title="">
                                                    <span class="nk-menu-text">Slide</span>
                                                    <span class="nk-menu-badge">*</span>
                                                </a>
                                            </li><!-- .nk-menu-item -->
                                        </ul><!-- .nk-menu-sub -->
                                    </ul><!-- .nk-menu-sub -->
                                    </li>
                                    @endif
                                </ul><!-- .nk-menu -->
                            </div><!-- .nk-header-menu -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown order-sm-first">
                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info d-none d-xl-block">
                                                    <div class="user-status">{{ auth()->user()->tipo}}</div>
                                                    <div class="user-name dropdown-indicator">{{ auth()->user()->nome}}</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1 is-light">
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="{{ route('perfil') }}"><em class="icon ni ni-user-alt"></em><span>ver perfil</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-setting-alt"></em><span>alterar senha</span></a></li>
                                                    @if (auth()->user()->tipo === 'admin')
                                                    <li><a href="#"><em class="icon ni ni-folder"></em><span>Messagem</span></a></li>
                                                    @endif
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <form method="post" action="{{route('logout')}}">
                                                        @csrf
                                                        <li>
                                                            <button class="btn btn-block" type="submit"><em class="icon ni ni-signout"></em><span>Sair</span></button>
                                                        </li>
                                                    </form>
                                                </ul>
                                            </div>
                                        </div>
                                    </li><!-- .dropdown -->
                                    @endauth
                                    @guest
                                    <li class="nk-menu-item">
                                        <a href="{{ route('login') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">Login </span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="{{ route('registar') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">Registar </span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                                    @endguest
                                </ul><!-- .nk-quick-nav -->
                            </div><!-- .nk-header-tools -->
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header -->
                <!-- content -->
                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-xl">
                        <div class="nk-content-inner">
                            @yield('content')
                        </div>
                    </div>
                </div>
                <!-- content -->
                <!-- footer -->
                <div class="nk-footer nk-footer-fluid bg-lighter">
                    <div class="container-xl">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2022 </a>
                            </div>
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer -->
            </div>
            <!-- wrap -->
        </div>
    </body>
    <script src="{{ asset('js/bundle.js') }}" defer></script>
    <script src="{{ asset('js/scripts.js') }}" defer></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvmI1f7-Mxn_kPnKcDxYwCDPmwGw0Bk0Q&callback=myMap" defer></script>
    <script>
        function myMap() {
        
        // The location of bacia1
        const bacia1 = { lat: -19.829206, lng: 34.836065 };
        const bacia2 = { lat: -19.834441, lng: 34.839800 };
        const bacia3 = { lat: -19.835357, lng: 34.841316 };
        // The map, centered at bacia1
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 15,
            center: bacia1,
        });
        // The marker, positioned at bacia1
        const marker1 = new google.maps.Marker({
            position: bacia1,
            map: map,
            title:"Bacia 1",
        });
        
        const marker2 = new google.maps.Marker({
            position: bacia2,
            map: map,
            title:"Bacia 2",
        });
        
        const marker3 = new google.maps.Marker({
            position: bacia3,
            map: map,
            title:"Bacia 3",
        });
    }
        </script>
</html>