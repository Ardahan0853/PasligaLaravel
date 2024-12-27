<header class="header header--layout-1">
    <!-- Header Top Bar -->
    <div class="header__top-bar clearfix">
        <div class="container-fluid px-4">
            <div class="header__top-bar-inner">
                <!-- Account Navigation -->
                <ul class="nav-account">


                    <li class="nav-account__item">
                        <a href="kayit-ol.html">Kayıt Ol</a>
                    </li>
                    <li class="nav-account__item">
                        <a href="giris.html">Giriş Yap</a>
                    </li>


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
            <ul class="info-block info-block--header">
                <li class="info-block__item info-block__item--contact-primary">
                    <a href="izmir/canlisonuclar.html" class="btn btn-danger btn-sm canlisonuc">Canlı Sonuçlar</a>
                </li>
                <li class="info-block__item info-block__item--contact-secondary">
                    <svg class="df-icon df-icon--whistle" role="img">
                        <use xlink:href="assets/images/icons-soccer.svg#whistle"></use>
                    </svg>
                    <h6 class="info-block__heading">Call Center</h6><a class="info-block__link" href="tel:05522572772">05522572772</a>
                </li>
                <li class="info-block__item info-block__item--contact-secondary">
                    <svg class="df-icon df-icon--soccer-ball" role="img">
                        <use xlink:href="assets/images/icons-soccer.svg#soccer-ball"></use>
                    </svg>
                    <h6 class="info-block__heading">Eposta</h6><a class="info-block__link lcase"
                                                                  href="mailto:info@pasliga.com">info@pasliga.com</a>
                </li>
            </ul>
        </div>
    </div><!-- Header Secondary / End --><!-- Header Primary -->
    <div class="header__primary">
        <div class="container-fluid px-4">
            <div class="header__primary-inner">
                <!-- Header Logo -->
                <div class="header-logo">
                    <a href="{{route('izmir.index')}}"><img alt="Pasligaizmir" class="header-logo__img"
                                              src="assets/images/soccer/logo.png"
                                              srcset="/assets/images/soccer/logo@2x.png 2x"></a>
                </div><!-- Header Logo / End --><!-- Main Navigation -->
                <nav class="main-nav clearfix">
                    <ul class="main-nav__list">
                        <li class="active">
                            <a href="{{route('izmir.index')}}">Ana Sayfa</a>
                        </li>
                        <li class="">
                            <a href={{route('izmir.haberler')}}>Haberler</a>
                        </li>
                        <li class="">
                            <a href="#"><span class="stateHighlight">izmir</span> Ligi</a>
                            <ul class="main-nav__sub">
                                <li class="">
                                    <a href="izmir/macprogrami.html">Maç Programı</a>
                                </li>
                                <li class="">
                                    <a href="izmir/golkralligi.html">Gol Krallığı</a>
                                </li>
                                <li class="">
                                    <a href="izmir/gecmismaclar.html">Geçmiş Maçlar</a>
                                </li>
                                <li class="">
                                    <a href="izmir/kap.html">KAP</a>
                                </li>
                                <li class="">
                                    <a href="izmir/halisahalar.html">Halı Sahalar</a>
                                </li>
                                <li class="">
                                    <a href="izmir/hakemler.html">Hakemler</a>
                                </li>
                                <li class="">
                                    <a href="izmir/koordinatorler.html">Koordinatörler</a>
                                </li>
                                <li class="">
                                    <a href="izmir/sezon-takvimi.html">Sezon Takvimi</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="izmir/videolar/index.html">Videolar</a>
                            <ul class="main-nav__sub">
                                <li>
                                    <a href="izmir/videolar/genel.html">Genel</a>
                                </li>
                                <li>
                                    <a href="izmir/videolar/mac-ozetleri.html">Maç Özetleri</a>
                                </li>
                                <li>
                                    <a href="izmir/videolar/basin-toplantilari.html">Basın Toplantıları</a>
                                </li>
                                <li>
                                    <a href="izmir/videolar/macin-golleri.html">Maçın Golleri</a>
                                </li>

                                <li>
                                    <a href="izmir/videolar/macin-kurtarislari.html">Maçın Kurtarışları</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="izmir/galeriler.html">Galeriler</a>
                        </li>
                        <li class="">
                            <a href="{{route('izmir.puan')}}">Puan Durumu</a>
                        </li>
                        <li class="">
                            <a href="izmir/cezalar.html">Cezalar</a>
                        </li>
                    </ul>
                </nav><!-- Main Navigation / End -->
            </div>
        </div>
    </div><!-- Header Primary / End -->
</header>
