@extends('layouts.main')



<!-- Mirrored from pasliga.com/istanbul/gecmismaclar/sayfa-1 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Dec 2024 13:48:44 GMT -->

@section('content')
    <div class="site-wrapper clearfix">
        <div class="site-overlay"></div>

        <!-- Bunu kullanicaksin -->
        <div class="header-mobile clearfix" id="header-mobile">
            <div class="header-mobile__logo">
                <a href="../../istanbul.html"><img alt="Pasligaistanbul" class="header-mobile__logo-img"
                                                   src="../../assets/images/soccer/logo.png"
                                                   srcset="/assets/images/soccer/logo@2x.png 2x"></a>
            </div>
            <div class="header-mobile__inner">
                <a class="burger-menu-icon" id="header-mobile__toggle"><span class="burger-menu-icon__line"></span></a>
                <span class="header-mobile__search-icon" id="header-mobile__search-icon"></span>
            </div>
        </div>
        <!-- Bu kadar kullanicaksin -->

        <!-- Header Desktop -->
        <div class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <h1 class="page-heading__title">istanbul <span class="highlight">Geçmiş Maçlar</span></h1>
                    </div>
                </div>
            </div>
        </div><!-- Page Heading / End -->


        <!-- Content -->
        <div class="site-content">
            <div class="container-fluid">

                <!-- Schedule & Tickets -->
                <div class="card card--has-table">
                    <div class="card__header">
                        <h4>Geçmiş Maçlar</h4>
                    </div>
                    <div class="card__content">
                        <ul class="widget-results__list">
                            @if(!$allGecmisMaclar)
                                <h1>Geçmiş maç bulunmamaktadır.</h1>
                            @else($allGecmisMaclar)
                                @foreach($allGecmisMaclar as $mac)
                                    <li class="widget-results__item">
                                        <div class="widget-results__header justify-content-center">
                                            <div class="widget-results__title">
                                                {{ \Carbon\Carbon::parse($mac->tarih)->format('d m Y H:i') }}
                                            </div>
                                        </div>
                                        <div class="widget-results__content">
                                            <div class="widget-results__team widget-results__team--first">
                                                <figure class="widget-results__team-logo">
                                                    <img alt="Kayabaşı"
                                                         src="{{asset('storage/images/' .  $mac->takim_1_logo)}}">

                                                </figure>
                                                <div class="widget-results__team-details">
                                                    <h5 class="widget-results__team-name">{{$mac->takim_1_name}}</h5>
                                                </div>
                                            </div>
                                            <div class="widget-results__result">
                                                <div class="widget-results__score">
                                                    <a href="" class="box"><span
                                                            class="widget-results__score-winner">{{$mac->takim_1_score}}</span> - <span
                                                            class="widget-results__score-loser">{{$mac->takim_2_score}}</span></a>
                                                </div>
                                            </div>
                                            <div class="widget-results__team widget-results__team--second">
                                                <figure class="widget-results__team-logo">
                                                    <img alt="Meyauw Fc"

                                                         src="{{asset('storage/images/'. $mac->takim_2_logo)}}">
                                                </figure>
                                                <div class="widget-results__team-details">
                                                    <h5 class="widget-results__team-name">{{$mac->takim_2_name}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @endif


                        </ul>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your
                            input class="form-control" .<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(Auth::check() && Auth::user()->role === 'admin')
                        <div class="post-list__item m-3">

                            <form action="{{route('izmir-ligi.createGecmisMaclar')}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Birinci Takım</label>
                                    <div class="col-sm-12">
                                        <select id="takim_1_name" name="takim_1_name" class="form-control"
                                                required=""
                                                value="{{ old('takim_1_name') }}">
                                            <option value="">Seçiniz</option>

                                            @foreach($allTeams as $team)
                                                <option value="{{$team->name}}">{{$team->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="takim_1_score">Birinci takım skoru</label>
                                    <input type="number" name="takim_1_score" class="form-control" id="takim_1_score"
                                           placeholder="Birinci takım skoru"/>
                                </div>
                                <div class="form-group">
                                    <label for="tarih">Tarih</label>
                                    <input type="datetime-local" name="tarih" class="form-control" id="tarih"
                                           placeholder="Tarih"/>
                                </div>
                                <!--- --->
                                <div class="form-group">
                                    <label class="control-label col-sm-2">İkinci Takım</label>
                                    <div class="col-sm-12">
                                        <select id="takim_2_name" name="takim_2_name" class="form-control"
                                                required=""
                                                value="{{ old('takim_2_name') }}">
                                            <option value="">Seçiniz</option>

                                            @foreach($allTeams as $team)
                                                <option value="{{$team->name}}">{{$team->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="takim_2_score">İkinci takım skoru</label>
                                    <input type="number" name="takim_2_score" class="form-control" id="takim_2_score"
                                           placeholder="İkinci takım skoru"/>
                                </div>
                                <div class="form-group">
                                    <label for="hakem">Hakem</label>
                                    <input type="text" name="hakem" class="form-control" id="hakem"
                                           placeholder="Kordinator"/>
                                </div>
                                <div class="form-group">
                                    <label for="kordinator">Kordinator</label>
                                    <input type="text" name="kordinator" class="form-control" id="kordinator"
                                           placeholder="Kordinator"/>
                                </div>
                                <button type="submit" class="btn btn-primary">Giriniz</button>
                            </form>
                        </div>
                    @endif
                    <!-- Posts List / End -->

                </div><!-- Schedule & Tickets / End -->

            </div>
        </div><!-- Content / End -->
        <footer class="footer" id="footer">
            <!-- Footer Widgets -->
            <div class="footer-widgets">
                <div class="footer-widgets__inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="footer-col-inner">
                                    <!-- Footer Logo -->
                                    <div class="footer-logo footer-logo--has-txt">
                                        <a href="../../istanbul.html"><img alt="Pasliga" class="footer-logo__img"
                                                                           src="../../assets/images/soccer/logo.png"
                                                                           srcset="/assets/images/soccer/logo.png 2x">
                                            <div class="footer-logo__heading">
                                                <h5 class="footer-logo__txt">Pasliga</h5><span
                                                    class="footer-logo__tagline">Halı Saha Ligi</span>
                                            </div>
                                        </a>
                                    </div><!-- Footer Logo / End --><!-- Widget: Contact Info -->
                                    <div class="widget widget--footer widget-contact-info">
                                        <div class="widget__content">
                                            <div class="widget-contact-info__body info-block">
                                                <div class="info-block__item">
                                                    <svg class="df-icon df-icon--soccer-ball" role="img">
                                                        <use
                                                            xlink:href="../../assets/images/icons-soccer.svg#soccer-ball"></use>
                                                    </svg>
                                                    <h6 class="info-block__heading">İletişim</h6><a
                                                        class="info-block__link lcase"
                                                        href="mailto:İnfo@topmondevents.com">İnfo@topmondevents.com</a>
                                                </div>
                                                <div class="info-block__item">
                                                    <svg class="df-icon df-icon--whistle" role="img">
                                                        <use
                                                            xlink:href="../../assets/images/icons-soccer.svg#whistle"></use>
                                                    </svg>
                                                    <h6 class="info-block__heading">Whatsapp</h6><a
                                                        class="info-block__link" href="#">05522572772</a>
                                                </div>
                                                <div class="info-block__item info-block__item--nopadding">

                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- Widget: Contact Info / End -->
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="footer-col-inner">
                                    <!-- Widget: Popular Posts / End -->
                                    <div class="widget widget--footer widget-popular-posts">
                                        <h4 class="widget__title">Hakkımızda</h4>
                                        <div class="widget__content">
                                            Pasliga , futbolu erişilebilir ve daha çekici hale getiren güçlü bir
                                            platformdur. Her gün gerçekleşen maçlarda seçtiğiniz bir saha veya rakiple
                                            size profesyonel atmosferde maç heyecanı yaşamanızı sağlar. Maçların Full Hd
                                            özetleri , golleri , fotoğrafları , istatistikleri ve maç sonu basın
                                            toplantıları ve canlı skor özelliği kendinizi tam bir futbol yıldızı gibi
                                            hissedeceksiniz.Hep aynı takımla oynamaktan ve saha aramaktan sıkılmadınız
                                            mı ?
                                        </div>
                                    </div><!-- Widget: Popular Posts / End -->
                                </div>
                            </div>
                            <div class="clearfix visible-sm"></div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="footer-col-inner">
                                    <!-- Widget: Featured News / End -->
                                    <div class="widget widget--footer widget-featured-posts">
                                        <h4 class="widget__title">Hızlı Linkler</h4>
                                        <div class="widget__content">
                                            <ul class="posts posts--simple-list white">
                                                <li class="posts__item posts__item--category-1">
                                                    <a href="../../kurallar.html">Kurallar</a>
                                                </li>
                                                <li class="posts__item posts__item--category-1">
                                                    <a href="../../sponsorlar.html">Sponsorlarımız</a>
                                                </li>
                                                <li class="posts__item posts__item--category-1">
                                                    <a href="http://topmondevents.com/" target="_blank">Topmond
                                                        Events</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- Widget: Featured News / End -->
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="footer-col-inner">
                                    <!-- Widget: Contact / End -->
                                    <div class="widget widget--footer widget-contact">
                                        <h4 class="widget__title">Sosyal Medya</h4>
                                        <div class="widget__content">
                                            <ul class="social-links">
                                                <li class="social-links__item">
                                                    <a class="social-links__link"
                                                       href="https://www.facebook.com/passalig/" target="_blank"><i
                                                            class="fab fa-facebook"></i> Facebook</a>
                                                </li>
                                                <li class="social-links__item">
                                                    <a class="social-links__link"
                                                       href="https://www.youtube.com/channel/UCsQ3BNXZlTHFhsEuVKB-07A"
                                                       target="_blank"><i class="fab fa-youtube"></i> Youtube</a>
                                                </li>
                                                <li class="social-links__item">
                                                    <a class="social-links__link"
                                                       href="https://www.instagram.com/pasliga/" target="_blank"><i
                                                            class="fab fa-instagram"></i> Instagram</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- Widget: Contact / End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Sponsors -->
                <div class="container">
                    <div class="sponsors">
                        <h6 class="sponsors-title">Sponsorlarımız:</h6>
                        <ul class="sponsors-logos">
                            <li class="sponsors__item">
                                <a href="http://www.adremac.com/" target="_blank"><img alt=""
                                                                                       src="../../img/sponsors/adremac-footer.png"></a>
                            </li>
                            <li class="sponsors__item">
                                <a href="http://www.erkpvcmakine.com.tr/" target="_blank"><img alt=""
                                                                                               src="../../img/sponsors/erkpvc-footer.png"></a>
                            </li>
                            <li class="sponsors__item">
                                <a href="http://www.packworldturkiye.com/" target="_blank"><img alt=""
                                                                                                src="../../img/sponsors/packworld-footer.png"></a>
                            </li>
                            <li class="sponsors__item">
                                <a href="#" target="_blank"><img alt="" src="../../img/sponsors/pikalip-footer.png"></a>
                            </li>
                            <li class="sponsors__item">
                                <a href="http://www.piextrusion.com/" target="_blank"><img alt=""
                                                                                           src="../../img/sponsors/pi-footer.png"></a>
                            </li>
                            <li class="sponsors__item">
                                <a href="http://www.sudeyayincilik.com/" target="_blank"><img alt=""
                                                                                              src="../../img/sponsors/sude-footer.png"></a>
                            </li>
                        </ul>
                    </div>
                </div><!-- Sponsors / End -->
            </div><!-- Footer Widgets / End --><!-- Footer Secondary -->
            <div class="footer-secondary">
                <div class="container">
                    <div class="footer-secondary__inner">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-copyright">
                                    <a href="../../istanbul.html">Pasliga</a> 2024 &nbsp; | &nbsp; Pasliga TOPMOND
                                    EVENTS iştirakidir. Tüm Hakları Saklıdır.
                                </div>
                            </div>
                            <div class="col-md-8">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Footer Secondary / End -->
        </footer><!-- Footer / End -->
    </div>
    <!-- Core JS -->
    <script src="../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/vendor/jquery/jquery-migrate.min.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/coremaxnew.js"></script>
    <!-- Template JS -->
    <script src="../../assets/js/initnew.js"></script>
    <script src="../../assets/js/custom.js"></script>
@endsection
