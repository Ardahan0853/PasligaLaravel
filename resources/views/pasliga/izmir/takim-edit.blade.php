@extends('layouts.main')
<!-- Global site tag (gtag.js) - Google Analytics -->
@section('content')
    <body data-template="template-soccer">
    <div class="site-wrapper clearfix">
        <div class="site-overlay"></div>

        <div class="header-mobile clearfix" id="header-mobile">
            <div class="header-mobile__logo">
                <a href="../../istanbul.html"><img alt="Pasligaistanbul" class="header-mobile__logo-img"
                                                   src="../../assets/images/soccer/logo.png"
                                                   srcset="/assets/images/soccer/logo@2x.png 2x"/></a>
            </div>
            <div class="header-mobile__inner">
                <a class="burger-menu-icon" id="header-mobile__toggle"><span class="burger-menu-icon__line"></span></a>
                <span class="header-mobile__search-icon" id="header-mobile__search-icon"></span>
            </div>
        </div>
        <!-- Header Desktop -->
        <div class="player-heading">
            <div class="container">
                <div class="player-info__title player-info__title--mobile">
                    <!--<div class="player-info__number">
                        07
                    </div>-->
                    <h1 class="player-info__name">
                        <!--<span class="player-info__first-name">Jugoslavya</span>-->
                        <span class="player-info__last-name">{{$takim->name}}</span>
                    </h1>
                </div>
                <div class="player-info">
                    <!-- Player Photo -->
                    <div class="player-info__item player-info__item--photo"
                         style="padding-top: 30px !important; padding-bottom: 10px !important;">
                        <figure class="player-info__photo">
                            <img alt="" src="{{asset('/storage/images/' . $takim->logo )}}"
                                 style="max-width: 200px !important;"/>
                        </figure>
                    </div>
                    <!-- Player Photo / End --><!-- Player Details -->
                    <div class="player-info__item player-info__item--details">
                        <div class="player-info__title player-info__title--desktop">
                            <!--<div class="player-info__number">
                                07
                            </div>-->
                            <h1 class="player-info__name">
                                <!--<span class="player-info__first-name">Jugoslavya</span>-->
                                <span class="player-info__last-name">{{$takim->name}}</span>
                            </h1>
                        </div>
                        <div class="player-info-details">
                            <div class="player-info-details__item player-info-details__item--height">
                                <h6 class="player-info-details__title">Kuruluş</h6>
                                <div class="player-info-details__value">
                                    {{ \Carbon\Carbon::parse($takim->kurulus_tarihi)->format('Y') }}
                                </div>
                            </div>
                            <div class="player-info-details__item player-info-details__item--weight">
                                <h6 class="player-info-details__title">Değer</h6>
                                <div class="player-info-details__value">
                                    {{$takim->deger}}
                                </div>
                            </div>
                            <div class="player-info-details__item player-info-details__item--born">
                                <h6 class="player-info-details__title">Kaptan</h6>
                                <div class="player-info-details__value">
                                    <span><a class="text-white" href="#">{{$takim->kaptan}}</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('pasliga.components.puan-header')

        <!-- Content -->
        <div class="site-content">
            <div class="container-fluid">
                <div class="row">
                    <!-- Content -->
                    <div class="content col-lg-8">
                        <!-- icerik -->

                        <div class="posts posts--cards posts--cards-thumb-left post-list">
                            @if($takim->haber())
                                @foreach($takim->haber as $haber)
                                    <div class="post-list__item">
                                        <div
                                            class="posts__item posts__item--card posts__item--category-1 card card--block">
                                            <div class="row">


                                                <div class="col-5">
                                                    <figure class="posts__thumb">
                                                        <a href="#"><img
                                                                alt=""
                                                                class="max-h-64"
                                                                src="{{asset('storage/images/' . $haber->image)}}"/></a>
                                                    </figure>
                                                </div>

                                                <div class="posts__inner col-7">
                                                    <div class="card__content">
                                                        <h6 class="posts__title"><a
                                                                href="../haber/jugo-kayipsiz-devam-ediyor-21434.html">{{$haber->title}}</a>
                                                        </h6>
                                                        <time class="posts__date"
                                                              datetime="2016-08-23">{{$haber->updated_at}}</time>
                                                        <div class="posts__excerpt">
                                                            {{$haber->content}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input
                                    class="form-control" .<br/>
                                    <br/>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif @if(Auth::check() && Auth::user()->role === 'admin')
                                <div class="post-list__item">
                                    <form action="{{route('takim.createHaber', $takim)}}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="image">Dosya</label>
                                            <input type="file" name="image" class="form-control" accept="image/*"
                                                   id="image" placeholder="Dosyanizi giriniz"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Başlık</label>
                                            <input type="text" name="title" class="form-control" id="title"
                                                   placeholder="Başlık"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="content">İçerik</label>
                                            <input type="text" name="content" class="form-control" id="content"
                                                   placeholder="içerik"/>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Giriniz</button>
                                    </form>
                                </div>
                        </div>

                        @endif

                        <!-- icerik -->
                    </div>
                    <!-- Sidebar -->
                    <div class="sidebar col-lg-4" id="sidebar">
                        <!--SELECT top 15 teams.leagueStateID, teams.ad, teams.logo, teams.akt, pointTable.typeID, pointTable.teamID, pointTable.point + pointTable.ceza AS point, pointTable.ceza, pointTable.gal, pointTable.ber, pointTable.mal,  ISNULL(pointTable.leagueSeasonID, 0) AS leagueSeasonID, leagueSeasons.seasonTitle, leagueSeasons.groupCount, ISNULL(subLeagueTeams.subLeagueGroupID, 0) AS subLeagueGroupID FROM subLeagueTeams RIGHT OUTER JOIN pointTable ON subLeagueTeams.subLeagueID = pointTable.leagueSeasonID AND subLeagueTeams.teamID = pointTable.teamID RIGHT OUTER JOIN teams ON pointTable.teamID = teams.takimID LEFT OUTER JOIN leagueSeasons ON pointTable.leagueSeasonID = leagueSeasons.id WHERE (teams.leagueStateID = '34') and (pointTable.leagueSeasonID='116') AND (teams.delFlag = 0) AND (teams.akt = 1) ORDER BY (pointTable.point + pointTable.ceza) DESC, pointTable.at - pointTable.yed DESC-->
                        <aside class="widget card widget--sidebar widget-standings">
                            <div class="widget__title card__header card__header--has-btn">
                                <h4>Takım Puan Durumları</h4>
                            </div>
                            <div class="widget__content card__content">
                                <div class="table-responsive">
                                    <table class="table table-hover table-standings">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th style="text-align: left !important;">TAKIM</th>
                                            <th>G</th>
                                            <th>M</th>
                                            <th>B</th>
                                            <th>P</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($butunTakimlar as $takim)

                                            <tr>
                                                <td><span class="numberLine pGreen">1</span></td>
                                                <td>
                                                    <div class="team-meta">
                                                        <figure class="team-meta__logo">
                                                            <a href="takim-edit.html"><img
                                                                    src="{{ asset('storage/images/' . $takim->logo) }}"/></a>
                                                        </figure>
                                                        <div class="team-meta__info">
                                                            <h6 class="team-meta__name"><a
                                                                    href="takim-edit.html">{{$takim->name}}}</a>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{$takim->takimPuan->g}}</td>
                                                <td>{{$takim->takimPuan->m}}</td>
                                                <td>{{$takim->takimPuan->b}}</td>
                                                <td>{{$takim->takimPuan->p}}</td>
                                            </tr>

                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>

                                <footer class="card__footer sponsor-card__footer"><a
                                        href="{{route('takim.index', ['$takim' => $takim])}}"
                                        class="btn btn-primary-inverse btn-lg btn-block">Tümü</a>
                                </footer>
                            </div>
                        </aside>
                        <!-- Widget: Standings / End --><!-- Widget: Social Buttons - Condensed-->
                        <aside class="widget widget--sidebar widget-social widget-social--condensed">
                            <a class="btn-social-counter btn-social-counter--fb"
                               href="https://www.facebook.com/passalig/" target="_blank">
                                <div class="btn-social-counter__icon">
                                    <i class="fab fa-facebook"></i>
                                </div>
                                <h6 class="btn-social-counter__title">Facebook</h6>
                                <span class="btn-social-counter__count"><span
                                        class="btn-social-counter__count-num"></span> Takip Et</span> <span
                                    class="btn-social-counter__add-icon"></span>
                            </a>
                            <a class="btn-social-counter btn-social-counter--twitter"
                               href="https://www.youtube.com/channel/UCsQ3BNXZlTHFhsEuVKB-07A" target="_blank">
                                <div class="btn-social-counter__icon">
                                    <i class="fab fa-youtube"></i>
                                </div>
                                <h6 class="btn-social-counter__title">Youtube</h6>
                                <span class="btn-social-counter__count"><span
                                        class="btn-social-counter__count-num"></span> Takip Et</span> <span
                                    class="btn-social-counter__add-icon"></span>
                            </a>
                            <a class="btn-social-counter btn-social-counter--rss"
                               href="https://www.instagram.com/pasliga/" target="_blank">
                                <div class="btn-social-counter__icon">
                                    <i class="fab fa-instagram"></i>
                                </div>
                                <h6 class="btn-social-counter__title">Instagram</h6>
                                <span class="btn-social-counter__count"><span
                                        class="btn-social-counter__count-num"></span> Takip Et</span> <span
                                    class="btn-social-counter__add-icon"></span>
                            </a>
                        </aside>
                        <!-- Widget: Social Buttons - Condensed / End -->

                        <aside class="widget card widget--sidebar widget-standings">
                            <a href="../rezervasyon.html" class="btn-social-counter btn-social-counter--instagram">
                                <div class="btn-social-counter__icon"><i class="fab fa-youtube"></i></div>
                                <h6 class="btn-social-counter__title">Rezervasyon</h6>
                                <span class="btn-social-counter__count"><span
                                        class="btn-social-counter__count-num"></span> Yap</span> <span
                                    class="btn-social-counter__add-icon"></span>
                            </a>
                        </aside>

                        <!-- günün maçı -->
                        <aside class="widget widget--sidebar card widget-preview">
                            <div class="widget__title card__header">
                                <h4>Günün Maçı</h4>
                            </div>
                            <div class="widget__content card__content">
                                <!-- Match Preview -->
                                <div class="match-preview">
                                    <section class="match-preview__body">
                                        <header class="match-preview__header">
                                            <time class="match-preview__date" datetime="2018-08-14">Gümüşpala
                                                Tesisleri
                                            </time>
                                        </header>
                                        <div class="match-preview__content">
                                            <!-- 1st Team -->
                                            <div class="match-preview__team match-preview__team--first">
                                                <figure class="match-preview__team-logo">
                                                    <img alt="" src="../../../www.pasliga.com/img/teams/default.jpg"/>
                                                </figure>
                                                <h5 class="match-preview__team-name">Efsane Fc</h5>
                                            </div>
                                            <!-- 1st Team / End -->
                                            <div class="match-preview__vs">
                                                <div class="match-preview__conj">
                                                    VS
                                                </div>
                                                <div class="match-preview__match-info">
                                                    <time class="match-preview__match-time" datetime="2022-02-01 09:00">
                                                        13.12.2024<br/>
                                                        23:00
                                                    </time>
                                                </div>
                                            </div>
                                            <!-- 2nd Team -->
                                            <div class="match-preview__team match-preview__team--second">
                                                <figure class="match-preview__team-logo">
                                                    <img alt=""
                                                         src="../../../www.pasliga.com/img/teams/22234_489420395694_yakuplu-fc.png"/>
                                                </figure>
                                                <h5 class="match-preview__team-name">Yakuplu Fc</h5>
                                            </div>
                                            <!-- 2nd Team / End -->
                                        </div>
                                    </section>
                                    <div class="countdown__content">
                                        <div class="countdown-counter" data-date="December 13, 2024 23:00:00"></div>
                                    </div>
                                </div>
                                <!-- Match Preview / End -->
                            </div>
                        </aside>
                        <!-- günün maçı -->
                        <aside class="widget widget--sidebar card card--has-table widget-leaders">
                            <div class="widget__title card__header">
                                <h4>Gol Krallığı</h4>
                            </div>
                            <div class="widget__content card__content">
                                <!-- Leader: Points -->
                                <div class="table-responsive">
                                    <table class="table team-leader">
                                        <thead>
                                        <tr>
                                            <th class="team-leader__gp">S</th>
                                            <th class="team-leader__type">Oyuncu</th>
                                            <th class="team-leader__goals">G</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="team-leader__gp">1</td>
                                            <td class="team-leader__player">
                                                <div class="team-leader__player-info">
                                                    <figure class="team-leader__player-img team-leader__player-img--sm">
                                                        <a href="../oyuncu/melih-buyukbayrak-78206.html"><img alt=""
                                                                                                              src="../../../www.pasliga.com/img/players/default.jpg"/></a>
                                                    </figure>
                                                    <div class="team-leader__player-inner">
                                                        <a href="../oyuncu/melih-buyukbayrak-78206.html">
                                                            <h5 class="team-leader__player-name">Melih Büyükbayrak</h5>
                                                            <span class="team-leader__player-position">Jugoslavya</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="team-leader__goals">41</td>
                                        </tr>

                                        <tr>
                                            <td class="team-leader__gp">2</td>
                                            <td class="team-leader__player">
                                                <div class="team-leader__player-info">
                                                    <figure class="team-leader__player-img team-leader__player-img--sm">
                                                        <a href="../oyuncu/emirhan-ergin-84484.html"><img alt=""
                                                                                                          src="../../../www.pasliga.com/img/players/84484_96869004030_emirhan-ergin.jpg"/></a>
                                                    </figure>
                                                    <div class="team-leader__player-inner">
                                                        <a href="../oyuncu/emirhan-ergin-84484.html">
                                                            <h5 class="team-leader__player-name">Emirhan Ergin</h5>
                                                            <span class="team-leader__player-position">Ayaz F.C</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="team-leader__goals">29</td>
                                        </tr>

                                        <tr>
                                            <td class="team-leader__gp">3</td>
                                            <td class="team-leader__player">
                                                <div class="team-leader__player-info">
                                                    <figure class="team-leader__player-img team-leader__player-img--sm">
                                                        <a href="../oyuncu/berat-mulazimoglu-84401.html"><img alt=""
                                                                                                              src="../../../www.pasliga.com/img/players/default.jpg"/></a>
                                                    </figure>
                                                    <div class="team-leader__player-inner">
                                                        <a href="../oyuncu/berat-mulazimoglu-84401.html">
                                                            <h5 class="team-leader__player-name">Berat Mülazımoğlu</h5>
                                                            <span class="team-leader__player-position">Kodemix Fc</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="team-leader__goals">28</td>
                                        </tr>

                                        <tr>
                                            <td class="team-leader__gp">4</td>
                                            <td class="team-leader__player">
                                                <div class="team-leader__player-info">
                                                    <figure class="team-leader__player-img team-leader__player-img--sm">
                                                        <a href="../oyuncu/cihan-ucar-77621.html"><img alt=""
                                                                                                       src="../../../www.pasliga.com/img/players/default.jpg"/></a>
                                                    </figure>
                                                    <div class="team-leader__player-inner">
                                                        <a href="../oyuncu/cihan-ucar-77621.html">
                                                            <h5 class="team-leader__player-name">Cihan Uçar</h5>
                                                            <span
                                                                class="team-leader__player-position">Anadolu Motors</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="team-leader__goals">25</td>
                                        </tr>

                                        <tr>
                                            <td class="team-leader__gp">5</td>
                                            <td class="team-leader__player">
                                                <div class="team-leader__player-info">
                                                    <figure class="team-leader__player-img team-leader__player-img--sm">
                                                        <a href="../oyuncu/selim-surmeli-84202.html"><img alt=""
                                                                                                          src="../../../www.pasliga.com/img/players/default.jpg"/></a>
                                                    </figure>
                                                    <div class="team-leader__player-inner">
                                                        <a href="../oyuncu/selim-surmeli-84202.html">
                                                            <h5 class="team-leader__player-name">Selim Sürmeli</h5>
                                                            <span
                                                                class="team-leader__player-position">Fc Barbaros</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="team-leader__goals">23</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Leader: Points / End -->
                                <footer class="card__footer sponsor-card__footer"><a href="../golkralligi.html"
                                                                                     class="btn btn-primary-inverse btn-lg btn-block">Tümü</a>
                                </footer>
                            </div>
                        </aside>
                        <aside class="widget widget--sidebar card card--has-table widget-leaders">
                            <div class="widget__title card__header">
                                <h4>Değer Listesi</h4>
                            </div>
                            <div class="widget__content card__content">
                                <!-- Leader: Points -->
                                <div class="table-responsive">
                                    <table class="table team-leader">
                                        <thead>
                                        <tr>
                                            <th class="team-leader__gp">S</th>
                                            <th class="team-leader__type">Oyuncu / Takım</th>
                                            <th class="team-leader__goals">P</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="team-leader__gp">1</td>
                                            <td class="team-leader__player">
                                                <div class="team-leader__player-info">
                                                    <figure class="team-leader__player-img team-leader__player-img--sm">
                                                        <a href="../oyuncu/suleyman-yuksel-77.html"><img alt=""
                                                                                                         src="../../../www.pasliga.com/img/players/77_108362625903_suleyman-yuksel.jpg"/></a>
                                                    </figure>
                                                    <div class="team-leader__player-inner">
                                                        <a href="../oyuncu/suleyman-yuksel-77.html"><h5
                                                                class="team-leader__player-name">Süleyman Yüksel</h5>
                                                        </a><span
                                                            class="team-leader__player-position">Parseller PRO</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="team-leader__goals">4110 PL£</td>
                                        </tr>

                                        <tr>
                                            <td class="team-leader__gp">2</td>
                                            <td class="team-leader__player">
                                                <div class="team-leader__player-info">
                                                    <figure class="team-leader__player-img team-leader__player-img--sm">
                                                        <a href="../oyuncu/eray-coban-10929.html"><img alt=""
                                                                                                       src="../../../www.pasliga.com/img/players/10929_808711380099_eray-coban.jpg"/></a>
                                                    </figure>
                                                    <div class="team-leader__player-inner">
                                                        <a href="../oyuncu/eray-coban-10929.html"><h5
                                                                class="team-leader__player-name">Eray Çoban</h5>
                                                        </a><span class="team-leader__player-position">Tonick FC</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="team-leader__goals">3690 PL£</td>
                                        </tr>

                                        <tr>
                                            <td class="team-leader__gp">3</td>
                                            <td class="team-leader__player">
                                                <div class="team-leader__player-info">
                                                    <figure class="team-leader__player-img team-leader__player-img--sm">
                                                        <a href="../oyuncu/fatih-erol-11013.html"><img alt=""
                                                                                                       src="../../../www.pasliga.com/img/players/default.jpg"/></a>
                                                    </figure>
                                                    <div class="team-leader__player-inner">
                                                        <a href="../oyuncu/fatih-erol-11013.html"><h5
                                                                class="team-leader__player-name">Fatih Erol</h5>
                                                        </a><span class="team-leader__player-position">Ataborg</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="team-leader__goals">3630 PL£</td>
                                        </tr>

                                        <tr>
                                            <td class="team-leader__gp">4</td>
                                            <td class="team-leader__player">
                                                <div class="team-leader__player-info">
                                                    <figure class="team-leader__player-img team-leader__player-img--sm">
                                                        <a href="../oyuncu/mustafa-uysal-90.html"><img alt=""
                                                                                                       src="../../../www.pasliga.com/img/players/90_322427521728_mustafa-uysal.jpg"/></a>
                                                    </figure>
                                                    <div class="team-leader__player-inner">
                                                        <a href="../oyuncu/mustafa-uysal-90.html"><h5
                                                                class="team-leader__player-name">Mustafa Uysal</h5>
                                                        </a><span
                                                            class="team-leader__player-position">Los Galacticos</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="team-leader__goals">3600 PL£</td>
                                        </tr>

                                        <tr>
                                            <td class="team-leader__gp">5</td>
                                            <td class="team-leader__player">
                                                <div class="team-leader__player-info">
                                                    <figure class="team-leader__player-img team-leader__player-img--sm">
                                                        <a href="../oyuncu/oguzhan-aslan-65796.html"><img alt=""
                                                                                                          src="../../../www.pasliga.com/img/players/default.jpg"/></a>
                                                    </figure>
                                                    <div class="team-leader__player-inner">
                                                        <a href="../oyuncu/oguzhan-aslan-65796.html"><h5
                                                                class="team-leader__player-name">Oğuzhan Aslan</h5>
                                                        </a><span
                                                            class="team-leader__player-position">Alkolik Bilbaoo</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="team-leader__goals">3310 PL£</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Leader: Points / End -->
                            </div>
                        </aside>

                        <script>
                            function oyla(id) {
                                var secili = $("input[name=vote" + id + "]:checked").size();
                                seciliID = $("input[name=vote" + id + "]:checked").val();
                                if (secili == 0) {
                                    $("#anket" + id + " .alert-warning").css({
                                        display: "block",
                                    });
                                } else {
                                    $.ajax({
                                        type: "POST",
                                        url: "/inc/anket_oyla.asp?aid=" + id,
                                        data: {item_id: seciliID},
                                        success: function (sonuc) {
                                            if (sonuc == "oylama_yapildi") {
                                                $("#anket" + id + " .alert-danger").css({
                                                    display: "block",
                                                });
                                            } else {
                                                anket_sonuclari(id);
                                            }
                                        },
                                    });
                                }
                            }

                            function anket_sonuclari(id) {
                                $("#anket" + id + " .poll-form__options").load("../../inc/anket_sonuclari45d0.html?aid=" + id);
                                $("#anket" + id + " .alert").each(function (i, e) {
                                    $(this).css("display", "none");
                                });
                            }
                        </script>
                    </div>
                    <!-- Sidebar / End -->
                </div>
            </div>
        </div>
        <!-- Content / End -->
    </div>
    <!-- Core JS -->
    <script src="../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/vendor/jquery/jquery-migrate.min.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/coremaxnew.js"></script>
    <!-- Template JS -->
    <script src="../../assets/js/initnew.js"></script>
    <script src="../../assets/js/custom.js"></script>
    </body>
@endsection
