<header class="header header--layout-1">
    <!-- Header Top Bar -->
    <div class="header__top-bar clearfix">
        <div class="container-fluid px-4">
            <div class="header__top-bar-inner">
                <!-- Account Navigation -->
                <ul class="nav-account d-flex justify-content-center align-items-center">
                    @auth
                        <!-- Display Logout button if user is logged in -->
                        <li class="nav-account__item ">


                            <button type="button" class="btn btn-dark" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">{{Auth::user()->full_name}}
                            </button>

                            <div class="dropdown-menu profil-dropdown p-0">
                                <div class="card border-0 p-0" style="width: 18rem;">
                                    <div class="card-body p-0">
                                        <div class="row m-0 mt-3 p-0 align-items-center">
                                            <div class="col-9 m-0 p-0 border-bottom border-separate">
                                                <h5 class="card-title m-3">{{Auth::user()->full_name}}</h5>
                                                <h6 class="card-subtitle m-3 text-muted m-2">{{Auth::user()->role === 'user' ? 'Standart Üye' : 'Admin'}}</h6>
                                            </div>
                                        </div>
                                        <div class="list-group m-0">
                                            <a href="#" class="list-group-item border-0 list-group-item-action"><i
                                                    class="far fa-user mr-3"></i>Profil</a>
                                        </div>
                                        <div class="dropdown-divider m-0"></div>
                                        <form action="{{ route('izmir.logout') }}" method="POST">
                                            @csrf
                                            <a class="list-group-item border-0 list-group-item-action text-danger"
                                               onclick="$(this).closest('form').submit()">Çıkış
                                                Yap</a>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </li>

                    @else
                        <!-- Display Register and Login links if user is not logged in -->

                        <li class="nav-account__item">
                            <a href="{{ route('izmir.kayit') }}"
                               class="{{ Route::is('izmir.kayit') ? ' text-success' : '' }}">Kayıt Ol</a>
                        </li>
                        <li class="nav-account__item">
                            <a href="{{route('login')}}"
                               class="{{ Route::is('login') ? ' text-success' : '' }}">Giriş Yap</a>
                        </li>
                    @endauth
                </ul><!-- Account Navigation / End -->
                <!-- Social Links -->
                <ul class="social-links social-links--inline social-links--main-nav">
                    <li class="social-links__item">
                        <a class="social-links__link" data-placement="bottom" data-toggle="tooltip"
                           href="https://www.facebook.com/passalig/" title="Facebook" target="_blank"><i
                                class="fab fa-facebook"></i></a>
                    </li>
                    <li class="social-links__item">
                        <a class="social-links__link" data-placement="bottom" data-toggle="tooltip"
                           href="https://www.youtube.com/channel/UCsQ3BNXZlTHFhsEuVKB-07A" title="Youtube"
                           target="_blank"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li class="social-links__item">
                        <a class="social-links__link" data-placement="bottom" data-toggle="tooltip"
                           href="https://www.instagram.com/pasliga/" title="Instagram" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                    </li>
                </ul><!-- Social Links / End -->
            </div>
        </div>
    </div><!-- Header Top Bar / End --><!-- Header Secondary -->
    <div class="header__secondary">
        <div class="container-fluid px-4">
            <!--<a href="/izmir/canlisonuclar" class="btn btn-danger btn-sm mr-2">Canlı Sonuçlar</a>-->
            <!-- Header Search Form -->
            <div class="header-search-form">
                <form action="https://pasliga.com/izmir/arama" class="search-form" id="mobile-search-form"
                      name="mobile-search-form" method="post">
                    <input class="form-control header-mobile__search-control"
                           placeholder="Haber, video, takım, oyuncu ara!" type="text" id="ara" name="ara" minlength="3">
                    <button class="header-mobile__search-submit" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div><!-- Header Search Form / End -->

        </div>
    </div><!-- Header Secondary / End --><!-- Header Primary -->
    <div class="header__primary">
        <div class="container-fluid px-4">
            <div class="header__primary-inner">
                <!-- Header Logo -->
                <div class="header-logo">
                    <a href="{{route('izmir.index')}}"><img alt="Pasligaizmir" class="header-logo__img w-50 rounded-circle"
                                                            src="{{asset('assets/images/soccer/logo.png')}}"
                                                            srcset="{{asset('assets/images/soccer/logo.png')}}"></a>
                </div><!-- Header Logo / End --><!-- Main Navigation -->

                <nav class="main-nav clearfix">
                    <ul class="main-nav__list">
                        <li class="main-nav__back m">
                        </li>
                        <li class="{{ Route::is('izmir.index') ? 'active' : '' }}">
                            <a href="{{ route('izmir.index') }}">Ana Sayfa</a>
                        </li>
                        <li class="{{ Route::is('izmir.haberler') ? 'active' : '' }}">
                            <a href="{{ route('izmir.haberler') }}">Haberler</a>
                        </li>
                        @if(Auth::check() && Auth::user()->role === 'admin')
                            <li class="{{ Route::is('izmir.uyeler') ? 'active' : '' }}">
                                <a href="{{ route('izmir.uyeler') }}">Üyeler</a>
                            </li>
                        @endif
                        <li class="{{ Request::is('izmir-ligi/*') ? 'active' : '' }}">
                            <a href="#"><span class="stateHighlight">izmir</span> Ligi</a>
                            <ul class="main-nav__sub">
                                <li class="{{ Route::is('izmir-ligi.golKrali') ? 'active' : '' }}">
                                    <a href="{{ route('izmir-ligi.golKrali') }}">Gol Krallığı</a>
                                </li>
                                <li>
                                    <a href="{{route('izmir-ligi.gecmisMaclar')}}">Geçmiş Maçlar</a>
                                </li>
                                <li>
                                    <a href="{{route('izmir-ligi.kap')}}">KAP</a>
                                </li>
                                <li>
                                    <a href="izmir/halisahalar.html">Halı Sahalar</a>
                                </li>
                                <li>
                                    <a href="izmir/hakemler.html">Hakemler</a>
                                </li>
                                <li>
                                    <a href="izmir/koordinatorler.html">Koordinatörler</a>
                                </li>
                                <li>
                                    <a href="izmir/sezon-takvimi.html">Sezon Takvimi</a>
                                </li>

                            </ul>
                        </li>
                        {{--                        <li class="{{ Request::is('izmir/videolar/*') ? 'active' : '' }}">--}}
                        {{--                            <a href="izmir/videolar/index.html">Videolar</a>--}}
                        {{--                            <ul class="main-nav__sub">--}}
                        {{--                                <li>--}}
                        {{--                                    <a href="izmir/videolar/genel.html">Genel</a>--}}
                        {{--                                </li>--}}
                        {{--                                <li>--}}
                        {{--                                    <a href="izmir/videolar/mac-ozetleri.html">Maç Özetleri</a>--}}
                        {{--                                </li>--}}
                        {{--                                <li>--}}
                        {{--                                    <a href="izmir/videolar/basin-toplantilari.html">Basın Toplantıları</a>--}}
                        {{--                                </li>--}}
                        {{--                                <li>--}}
                        {{--                                    <a href="izmir/videolar/macin-golleri.html">Maçın Golleri</a>--}}
                        {{--                                </li>--}}
                        {{--                                <li>--}}
                        {{--                                    <a href="izmir/videolar/macin-kurtarislari.html">Maçın Kurtarışları</a>--}}
                        {{--                                </li>--}}
                        {{--                            </ul>--}}
                        {{--                        </li>--}}

                        <li class="{{ Route::is('izmir.puan') ? 'active' : '' }}">
                            <a href="{{ route('izmir.puan') }}">Puan Durumu</a>
                        </li>
                        {{--                        <li>--}}
                        {{--                            <a href="izmir/cezalar.html">Cezalar</a>--}}
                        {{--                        </li>--}}
                        <li class="nav-account__item login-mobile">
                            <a href="{{ route('izmir.kayit') }}"
                               class="{{ Route::is('izmir.kayit') ? ' text-success' : '' }}">Kayıt Ol</a>
                        </li>
                        <li class="nav-account__item login-mobile">
                            <a href="{{route('login')}}"
                               class="{{ Route::is('login') ? ' text-success' : '' }}">Giriş Yap</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </div><!-- Header Primary / End -->
</header>
