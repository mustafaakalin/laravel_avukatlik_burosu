<header>
    @php
    $appurl = env('APP_URL');
    @endphp
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0 mb-0">
                <div class="row align-items-center justify-content-between no-gutters">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            <a href="index.html">
                                @php
                                $query = DB::table('site_settings')->get();
                                // $users = $query->addSelect('site_logo')->get();
                                // $users = $query->get();
                                    
                                @endphp
                                @if(isset($query[0]->site_logo))
                                <img src="storage/{{ $query[0]->site_logo }}" alt="" class="img-fluid" width="80">
                                @endif
                                    
                                    
                                
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-8">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a class="@if (url()->current() == $appurl )
                                        active
                                        @elseif(url()->current() == $appurl . '/')

                                    @endif" href="{{ url('/') }}">Anasayfa</a></li>
                                    <li><a href="{{ url('/hakkimizda') }}" class="@if (url()->current() == $appurl . '/hakkimizda')
                                        active
                                    @endif">Hakkımızda</a></li>
                                    <li><a href="{{ url('/faaliyetlerimiz') }}" class="@if (url()->current() == $appurl . '/faaliyetlerimiz')
                                        active
                                    @endif">Faaliyet Alanlarımız</a></li>
                                    <li><a href="{{ url('/blog') }}" class="@if (url()->current() == $appurl . '/blog')
                                        active
                                    @endif">Blog <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="{{ url('/blog') }}" class="@if (url()->current() == $appurl . '/faaliyetlerimiz')
                                                active
                                            @endif">Blog</a></li>
                                            <li><a href="{{ url('/tekblog') }}" class="@if (url()->current() == $appurl . '/tekblog')
                                                active
                                            @endif">Blog-1</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Sayfalar <i class="ti-angle-down"></i></a>
                                    </li>
                                    <li><a href="{{ url('/iletisim') }}" class="
                                        @if (url()->current() == $appurl . '/iletisim')
                                        active
                                        @endif">İletişim</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2 d-none d-lg-block">
                        <div class="social_media_links">
                            <ul>
                                <li><a href="{{ $query[0]->site_facebook }}"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="{{ $query[0]->site_twitter }}"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="{{ $query[0]->site_instagram }}"> <i class="fa fa-instagram"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>