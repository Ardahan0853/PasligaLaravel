<!-- SELECT kap.id, kap.leagueStateID, kap.kapTypeID, kap.teamID, kap.userID, kap.oldValue, kap.explanation, kap.opDate, kap.status, teams.ad AS teamName, users.ad + ' ' + users.soyad AS adsoyad, kapTypes.kapTitle, users.foto AS userPhoto, teams.logo AS teamLogo From kap LEFT OUTER Join kapTypes ON kap.kapTypeID = kapTypes.id LEFT OUTER Join users ON kap.userID = users.id LEFT OUTER Join teams ON kap.teamID = teams.takimID Where (users.akt = 'true') AND (kap.leagueStateID = '35') and teams.leagueStateID='35' order by opDate desc-->


<!-- Mirrored from pasliga.com/izmir/kap by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Dec 2024 10:46:02 GMT -->
@extends('layouts.main')
@section('content')

    <body data-template="template-soccer">
    <div class="site-wrapper clearfix">
        <div class="site-overlay"></div>


        <div class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <h1 class="page-heading__title">izmir <span class="highlight">KAP</span></h1>
                    </div>
                </div>
            </div>
        </div><!-- Page Heading / End -->
        <!-- sezon filtre -->
        <!-- sezon filtre -->
        <!-- Content -->
        <div class="site-content">
            <div class="container">
                <div class="row">
                    <!-- Content
            ================================================== -->

                    <div class="col-lg-8">

                        <aside class="widget widget--sidebar card card--has-table widget-leaders">
                            <div class="widget__title card__header">
                                <h4>KAP</h4>
                            </div>
                            <div class="widget__content card__content">
                                <!-- Leader: Points -->
                                <div class="table-responsive">
                                    <table class="table team-leader">
                                        <thead>
                                        <tr>
                                            <th class="text-left">Tarih</th>
                                            <th class="text-left">Oyuncu</th>
                                            <th class="text-left">Takım</th>
                                            <th class="text-left">Durum</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger">{{ $error }}</div>
                                        @endforeach
                                        @foreach($kaps as $kap)
                                            <tr>
                                                <td class="team-leader__goals">{{$kap->tarih}}</td>
                                                <td class="team-leader__player">
                                                    <div class="team-leader__player-info">
                                                        <figure
                                                            class="team-leader__player-img team-leader__player-img--sm">
                                                            <a href="oyuncu/efe-can-ertas-84058.html"><img alt=""
                                                                                                           src="../../www.pasliga.com/img/players/default.jpg"></a>
                                                        </figure>
                                                        <div class="team-leader__player-inner">
                                                            <h5 class="team-leader__player-name"><a
                                                                    href="oyuncu/efe-can-ertas-84058.html">{{$kap->oyuncu}}</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="team-leader__player">
                                                    <div class="team-leader__player-info">
                                                        <figure
                                                            class="team-leader__player-img team-leader__player-img--sm">
                                                            <a href="takim/toksoz-fc-22171.html"><img alt=""
                                                                                                      src="../../www.pasliga.com/img/teams/default.jpg"></a>
                                                        </figure>
                                                        <div class="team-leader__player-inner">
                                                            <h5 class="team-leader__player-name"><a
                                                                    href="takim/toksoz-fc-22171.html">{{$kap->takim}}</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="team-leader__gp">{{$kap->durum}}</td>
                                            </tr>
                                        @endforeach


                                        </tbody>
                                    </table>
                                    @if(Auth::check() && Auth::user()->role === 'admin')
                                        <div class="post-list__item m-3">

                                            <form action="{{route('izmir-ligi.kap')}}" method="POST"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="tarih">Tarih</label>
                                                    <input type="date" name="tarih" class="form-control" id="tarih"
                                                           placeholder="Tarih"/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="oyuncu">Oyuncu</label>
                                                    <select name="oyuncu" id="oyuncu" class="form-control">
                                                        <option value="">Seçiniz</option>
                                                        @foreach($users as $user)
                                                            <option
                                                                value="{{ $user->full_name }}">{{ $user->full_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="takim">Takım</label>
                                                    <select name="takim" id="takim" class="form-control">
                                                        <option value="">Seçiniz</option>
                                                        @foreach($teams as $team)
                                                            <option value="{{ $team->name }}">{{ $team->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="durum">Durum</label>
                                                    <input type="text" name="durum" class="form-control"
                                                           id="durum"
                                                           placeholder="Durum"/>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Giriniz</button>
                                            </form>
                                        </div>

                                        <!-- Posts List / End -->
                                    @endif
                                </div><!-- Leader: Points / End -->
                            </div>
                        </aside>

                        <nav aria-label="Blog navigation" class="post-pagination">
                            <ul class="pagination pagination--condensed pagination--lg justify-content-center">

                                <li class="page-item disabled">
                                    <a class="page-link" href="#"><i class="fa fa-angle-left"></i><span
                                            class="nonm"> </span></a>
                                </li>

                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="kap/sayfa-2.html">2</a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="kap/sayfa-3.html">3</a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="kap/sayfa-4.html">4</a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="kap/sayfa-5.html">5</a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="kap/sayfa-6.html">6</a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="kap/sayfa-7.html">7</a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="kap/sayfa-8.html">8</a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="kap/sayfa-9.html">9</a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="kap/sayfa-10.html">10</a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="kap/sayfa-2.html"><span class="nonm"> </span><i
                                            class="fa fa-angle-right"></i></a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                    <div class="sidebar col-lg-4" id="sidebar">
                        <!--SELECT top 15 teams.leagueStateID, teams.ad, teams.logo, teams.akt, pointTable.typeID, pointTable.teamID, pointTable.point + pointTable.ceza AS point, pointTable.ceza, pointTable.gal, pointTable.ber, pointTable.mal,  ISNULL(pointTable.leagueSeasonID, 0) AS leagueSeasonID, leagueSeasons.seasonTitle, leagueSeasons.groupCount, ISNULL(subLeagueTeams.subLeagueGroupID, 0) AS subLeagueGroupID FROM subLeagueTeams RIGHT OUTER JOIN pointTable ON subLeagueTeams.subLeagueID = pointTable.leagueSeasonID AND subLeagueTeams.teamID = pointTable.teamID RIGHT OUTER JOIN teams ON pointTable.teamID = teams.takimID LEFT OUTER JOIN leagueSeasons ON pointTable.leagueSeasonID = leagueSeasons.id WHERE (teams.leagueStateID = '35') and (pointTable.leagueSeasonID='124') AND (teams.delFlag = 0) AND (teams.akt = 1) ORDER BY (pointTable.point + pointTable.ceza) DESC, pointTable.at - pointTable.yed DESC-->
                        <aside class="widget card widget--sidebar widget-standings">
                            <div class="widget__title card__header card__header--has-btn">
                                <h4>Gaziemir Konferansı</h4>
                            </div>
                            <div class="widget__content card__content">

                                <div class="table-responsive">
                                    <table class="table table-hover table-standings">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th style="text-align:left!important;">TAKIM</th>
                                            <th>G</th>
                                            <th>M</th>
                                            <th>B</th>
                                            <th>P</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td><span class="numberLine pGreen">1</span></td>
                                            <td>
                                                <div class="team-meta">
                                                    <figure class="team-meta__logo">
                                                        <a href="takim/cagri-baba-fk-ege-metal-22166.html"><img alt=""
                                                                                                                src="../../www.pasliga.com/img/teams/22166_730390121757_cagri-baba-fk-ege-metal.jpg"></a>
                                                    </figure>
                                                    <div class="team-meta__info">
                                                        <h6 class="team-meta__name"><a
                                                                href="takim/cagri-baba-fk-ege-metal-22166.html">Çağrı
                                                                Baba Fk Ege Metal</a></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>6</td>
                                        </tr>

                                        <tr>
                                            <td><span class="numberLine pGreen">2</span></td>
                                            <td>
                                                <div class="team-meta">
                                                    <figure class="team-meta__logo">
                                                        <a href="takim/turkan-mobilya-22111.html"><img alt=""
                                                                                                       src="../../www.pasliga.com/img/teams/22111_997121414466_turkan-mobilya.jpg"></a>
                                                    </figure>
                                                    <div class="team-meta__info">
                                                        <h6 class="team-meta__name"><a
                                                                href="takim/turkan-mobilya-22111.html">Türkan
                                                                Mobilya</a></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>4</td>
                                        </tr>

                                        <tr>
                                            <td><span class="numberLine pGreen">3</span></td>
                                            <td>
                                                <div class="team-meta">
                                                    <figure class="team-meta__logo">
                                                        <a href="takim/eski-camlik-fk-21775.html"><img alt=""
                                                                                                       src="../../www.pasliga.com/img/teams/21775_321451935291_eski-camlik-fk.jpg"></a>
                                                    </figure>
                                                    <div class="team-meta__info">
                                                        <h6 class="team-meta__name"><a
                                                                href="takim/eski-camlik-fk-21775.html">Eski Çamlık
                                                                Fk. </a></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>4</td>
                                        </tr>

                                        <tr>
                                            <td><span class="numberLine pGreen">4</span></td>
                                            <td>
                                                <div class="team-meta">
                                                    <figure class="team-meta__logo">
                                                        <a href="takim/destroyer-fc-yagmur-koltuk-22165.html"><img
                                                                alt=""
                                                                src="../../www.pasliga.com/img/teams/22165_167248383201_destroyer-fc-yagmur-koltuk.jpg"></a>
                                                    </figure>
                                                    <div class="team-meta__info">
                                                        <h6 class="team-meta__name"><a
                                                                href="takim/destroyer-fc-yagmur-koltuk-22165.html">Destroyer
                                                                Fc Yağmur Koltuk</a></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>

                                        <tr>
                                            <td><span class="numberLine pGreen">5</span></td>
                                            <td>
                                                <div class="team-meta">
                                                    <figure class="team-meta__logo">
                                                        <a href="takim/cimentepe-fk-21796.html"><img alt=""
                                                                                                     src="../../www.pasliga.com/img/teams/21796_738972229059_cimentepe-fk.jpg"></a>
                                                    </figure>
                                                    <div class="team-meta__info">
                                                        <h6 class="team-meta__name"><a
                                                                href="takim/cimentepe-fk-21796.html">Çimentepe Fk.</a>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>

                                        <tr>
                                            <td><span class="numberLine pGreen">6</span></td>
                                            <td>
                                                <div class="team-meta">
                                                    <figure class="team-meta__logo">
                                                        <a href="takim/art-desing-prefabrik-21774.html"><img alt=""
                                                                                                             src="../../www.pasliga.com/img/teams/21774_218420914446_art-desing-prefabrik.jpg"></a>
                                                    </figure>
                                                    <div class="team-meta__info">
                                                        <h6 class="team-meta__name"><a
                                                                href="takim/art-desing-prefabrik-21774.html">Art Desing
                                                                Prefabrik </a></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>1</td>
                                        </tr>

                                        <tr>
                                            <td><span class="numberLine pGreen">7</span></td>
                                            <td>
                                                <div class="team-meta">
                                                    <figure class="team-meta__logo">
                                                        <a href="takim/dereboyu-spor-21916.html"><img alt=""
                                                                                                      src="../../www.pasliga.com/img/teams/21916_430504150914_dereboyu-spor.jpg"></a>
                                                    </figure>
                                                    <div class="team-meta__info">
                                                        <h6 class="team-meta__name"><a
                                                                href="takim/dereboyu-spor-21916.html">Dereboyu Spor</a>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                        </tr>

                                        <tr>
                                            <td><span class="numberLine pGreen">8</span></td>
                                            <td>
                                                <div class="team-meta">
                                                    <figure class="team-meta__logo">
                                                        <a href="takim/izmir-genclerbirligi-22167.html"><img alt=""
                                                                                                             src="../../www.pasliga.com/img/teams/22167_74461014450_izmir-genclerbirligi.jpg"></a>
                                                    </figure>
                                                    <div class="team-meta__info">
                                                        <h6 class="team-meta__name"><a
                                                                href="takim/izmir-genclerbirligi-22167.html">İzmir
                                                                Gençlerbirliği</a></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>0</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </aside>
                        <!-- Widget: Standings / End --><!-- Widget: Social Buttons - Condensed-->
                        <aside class="widget widget--sidebar widget-social widget-social--condensed">
                            <a class="btn-social-counter btn-social-counter--fb"
                               href="https://www.facebook.com/passalig/" target="_blank">
                                <div class="btn-social-counter__icon">
                                    <i class="fab fa-facebook"></i>
                                </div>
                                <h6 class="btn-social-counter__title">Facebook</h6><span
                                    class="btn-social-counter__count"><span
                                        class="btn-social-counter__count-num"></span> Takip Et</span> <span
                                    class="btn-social-counter__add-icon"></span></a> <a
                                class="btn-social-counter btn-social-counter--twitter"
                                href="https://www.youtube.com/channel/UCsQ3BNXZlTHFhsEuVKB-07A" target="_blank">
                                <div class="btn-social-counter__icon">
                                    <i class="fab fa-youtube"></i>
                                </div>
                                <h6 class="btn-social-counter__title">Youtube</h6><span
                                    class="btn-social-counter__count"><span
                                        class="btn-social-counter__count-num"></span> Takip Et</span> <span
                                    class="btn-social-counter__add-icon"></span></a> <a
                                class="btn-social-counter btn-social-counter--rss"
                                href="https://www.instagram.com/pasliga/" target="_blank">
                                <div class="btn-social-counter__icon">
                                    <i class="fab fa-instagram"></i>
                                </div>
                                <h6 class="btn-social-counter__title">Instagram</h6><span
                                    class="btn-social-counter__count"><span
                                        class="btn-social-counter__count-num"></span> Takip Et</span> <span
                                    class="btn-social-counter__add-icon"></span></a>
                        </aside><!-- Widget: Social Buttons - Condensed / End -->

                        <aside class="widget card widget--sidebar widget-standings">
                            <a href="rezervasyon.html" class="btn-social-counter btn-social-counter--instagram">
                                <div class="btn-social-counter__icon"><i class="fab fa-youtube"></i></div>
                                <h6 class="btn-social-counter__title">Rezervasyon</h6><span
                                    class="btn-social-counter__count"><span
                                        class="btn-social-counter__count-num"></span> Yap</span> <span
                                    class="btn-social-counter__add-icon"></span> </a>
                        </aside>
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

                                        </tbody>
                                    </table>
                                </div><!-- Leader: Points / End -->

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
                                                        <a href="oyuncu/ayberk-madran-95789.html"><img alt=""
                                                                                                       src="../../www.pasliga.com/img/players/default.jpg"></a>
                                                    </figure>
                                                    <div class="team-leader__player-inner">
                                                        <a href="oyuncu/ayberk-madran-95789.html"><h5
                                                                class="team-leader__player-name">Ayberk Madran</h5>
                                                        </a><span
                                                            class="team-leader__player-position">Buca Bilbao</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="team-leader__goals">1030 PL£</td>
                                        </tr>

                                        <tr>
                                            <td class="team-leader__gp">2</td>
                                            <td class="team-leader__player">
                                                <div class="team-leader__player-info">
                                                    <figure class="team-leader__player-img team-leader__player-img--sm">
                                                        <a href="oyuncu/aydin-efe-bayrakceken-95638.html"><img alt=""
                                                                                                               src="../../www.pasliga.com/img/players/default.jpg"></a>
                                                    </figure>
                                                    <div class="team-leader__player-inner">
                                                        <a href="oyuncu/aydin-efe-bayrakceken-95638.html"><h5
                                                                class="team-leader__player-name">Aydın Efe
                                                                Bayrakçeken</h5></a><span
                                                            class="team-leader__player-position">Buca Bilbao</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="team-leader__goals">1030 PL£</td>
                                        </tr>

                                        <tr>
                                            <td class="team-leader__gp">3</td>
                                            <td class="team-leader__player">
                                                <div class="team-leader__player-info">
                                                    <figure class="team-leader__player-img team-leader__player-img--sm">
                                                        <a href="oyuncu/alpercan-kilinc-95734.html"><img alt=""
                                                                                                         src="../../www.pasliga.com/img/players/default.jpg"></a>
                                                    </figure>
                                                    <div class="team-leader__player-inner">
                                                        <a href="oyuncu/alpercan-kilinc-95734.html"><h5
                                                                class="team-leader__player-name">Alpercan Kılınç</h5>
                                                        </a><span
                                                            class="team-leader__player-position">Maestro Fc </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="team-leader__goals">1030 PL£</td>
                                        </tr>

                                        <tr>
                                            <td class="team-leader__gp">4</td>
                                            <td class="team-leader__player">
                                                <div class="team-leader__player-info">
                                                    <figure class="team-leader__player-img team-leader__player-img--sm">
                                                        <a href="oyuncu/can-aydin-95736.html"><img alt=""
                                                                                                   src="../../www.pasliga.com/img/players/default.jpg"></a>
                                                    </figure>
                                                    <div class="team-leader__player-inner">
                                                        <a href="oyuncu/can-aydin-95736.html"><h5
                                                                class="team-leader__player-name">Can Aydın</h5></a><span
                                                            class="team-leader__player-position">Maestro Fc </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="team-leader__goals">1020 PL£</td>
                                        </tr>

                                        <tr>
                                            <td class="team-leader__gp">5</td>
                                            <td class="team-leader__player">
                                                <div class="team-leader__player-info">
                                                    <figure class="team-leader__player-img team-leader__player-img--sm">
                                                        <a href="oyuncu/egemen-izgar-95743.html"><img alt=""
                                                                                                      src="../../www.pasliga.com/img/players/default.jpg"></a>
                                                    </figure>
                                                    <div class="team-leader__player-inner">
                                                        <a href="oyuncu/egemen-izgar-95743.html"><h5
                                                                class="team-leader__player-name">Egemen Izgar</h5>
                                                        </a><span
                                                            class="team-leader__player-position">Maestro Fc </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="team-leader__goals">1020 PL£</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div><!-- Leader: Points / End -->
                            </div>
                        </aside>
                    </div>
                </div><!-- Content / End -->

                <!-- icerik -->
            </div><!-- Sidebar -->
        </div>
    </div>
    </div><!-- Content / End -->

    </div>
    <!-- Core JS -->

    </body>
@endsection
