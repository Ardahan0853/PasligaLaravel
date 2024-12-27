@extends('layouts.main')

@section('title', 'Izmir Page')

@section('content')
    <div class="site-content">
        <div class="container">
            <div class="row">
                <!-- Content -->
                <div class="content col-lg-8">
                    <!-- icerik -->
                    <!-- Content Text-->

                    <div class="card card--has-table">
                        <div class="card__header card__header--has-btn">
                            <h4>Puan Durumu</h4><!-- Result Filter -->

                        </div>
                        <div class="card__content">
                            <div class="table-responsive">
                                <!-- -->
                                <!-- -->
                                <!--SELECT id, leagueStateID, subLeagueID, groupTitle, groupTeamCount FROM subLeagueGroups WHERE (subLeagueID = '124') AND (groupTeamCount > 0) ORDER BY groupTitle-->
                                <table class="table table-hover team-result">
                                    <thead>
                                    <tr>
                                        <th class="team-result__date">S</th>
                                        <th class="team-result__vs">Takım</th>
                                        <th class="team-result__score">O</th>
                                        <th class="team-result__status">G</th>
                                        <th class="team-result__ball-possession">B</th>
                                        <th class="team-result__shots">M</th>
                                        <th class="team-result__fouls mobNone">A</th>
                                        <th class="team-result__game-overview mobNone">Y</th>
                                        <th class="team-result__game-overview">Av</th>
                                        <th class="team-result__game-overview">P</th>
                                        <th class="team-result__game-overview mobNone">Bn</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td class="numberLine pGreen">1</td>
                                        <td class="team-result__vs">
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <a href="/izmir/takim/cagri-baba-fk-ege-metal-22166"><img
                                                            src="https://www.pasliga.com//img/teams/22166_730390121757_cagri-baba-fk-ege-metal.jpg"
                                                            alt="Çağrı Baba Fk Ege Metal"></a>
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name"><a
                                                            href="/izmir/takim/cagri-baba-fk-ege-metal-22166">Çağrı Baba
                                                            Fk Ege Metal</a></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="team-result__score">2</td>
                                        <td class="team-result__status">2</td>
                                        <td class="team-result__ball-possession">0</td>
                                        <td class="team-result__shots">0</td>
                                        <td class="team-result__fouls mobNone">15</td>
                                        <td class="team-result__fouls mobNone">10</td>
                                        <td class="team-result__fouls">5</td>
                                        <td class="team-result__fouls">6</td>
                                        <td class="team-result__game-overview mobNone">
                                            0
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="numberLine pGreen">2</td>
                                        <td class="team-result__vs">
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <a href="/izmir/takim/turkan-mobilya-22111"><img
                                                            src="https://www.pasliga.com//img/teams/22111_997121414466_turkan-mobilya.jpg"
                                                            alt="Türkan Mobilya"></a>
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name"><a
                                                            href="/izmir/takim/turkan-mobilya-22111">Türkan Mobilya</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="team-result__score">3</td>
                                        <td class="team-result__status">1</td>
                                        <td class="team-result__ball-possession">1</td>
                                        <td class="team-result__shots">1</td>
                                        <td class="team-result__fouls mobNone">12</td>
                                        <td class="team-result__fouls mobNone">5</td>
                                        <td class="team-result__fouls">7</td>
                                        <td class="team-result__fouls">4</td>
                                        <td class="team-result__game-overview mobNone">
                                            0
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="numberLine pGreen">3</td>
                                        <td class="team-result__vs">
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <a href="/izmir/takim/eski-camlik-fk-21775"><img
                                                            src="https://www.pasliga.com//img/teams/21775_321451935291_eski-camlik-fk.jpg"
                                                            alt="Eski Çamlık Fk. "></a>
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name"><a
                                                            href="/izmir/takim/eski-camlik-fk-21775">Eski Çamlık
                                                            Fk. </a></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="team-result__score">3</td>
                                        <td class="team-result__status">1</td>
                                        <td class="team-result__ball-possession">1</td>
                                        <td class="team-result__shots">1</td>
                                        <td class="team-result__fouls mobNone">16</td>
                                        <td class="team-result__fouls mobNone">11</td>
                                        <td class="team-result__fouls">5</td>
                                        <td class="team-result__fouls">4</td>
                                        <td class="team-result__game-overview mobNone">
                                            0
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="numberLine pGreen">4</td>
                                        <td class="team-result__vs">
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <a href="/izmir/takim/destroyer-fc-yagmur-koltuk-22165"><img
                                                            src="https://www.pasliga.com//img/teams/22165_167248383201_destroyer-fc-yagmur-koltuk.jpg"
                                                            alt="Destroyer Fc Yağmur Koltuk"></a>
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name"><a
                                                            href="/izmir/takim/destroyer-fc-yagmur-koltuk-22165">Destroyer
                                                            Fc Yağmur Koltuk</a></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="team-result__score">1</td>
                                        <td class="team-result__status">1</td>
                                        <td class="team-result__ball-possession">0</td>
                                        <td class="team-result__shots">0</td>
                                        <td class="team-result__fouls mobNone">4</td>
                                        <td class="team-result__fouls mobNone">0</td>
                                        <td class="team-result__fouls">4</td>
                                        <td class="team-result__fouls">3</td>
                                        <td class="team-result__game-overview mobNone">
                                            0
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="numberLine pGreen">5</td>
                                        <td class="team-result__vs">
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <a href="/izmir/takim/cimentepe-fk-21796"><img
                                                            src="https://www.pasliga.com//img/teams/21796_738972229059_cimentepe-fk.jpg"
                                                            alt="Çimentepe Fk."></a>
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name"><a
                                                            href="/izmir/takim/cimentepe-fk-21796">Çimentepe Fk.</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="team-result__score">2</td>
                                        <td class="team-result__status">1</td>
                                        <td class="team-result__ball-possession">0</td>
                                        <td class="team-result__shots">1</td>
                                        <td class="team-result__fouls mobNone">3</td>
                                        <td class="team-result__fouls mobNone">4</td>
                                        <td class="team-result__fouls">-1</td>
                                        <td class="team-result__fouls">3</td>
                                        <td class="team-result__game-overview mobNone">
                                            0
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="numberLine pGreen">6</td>
                                        <td class="team-result__vs">
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <a href="/izmir/takim/art-desing-prefabrik-21774"><img
                                                            src="https://www.pasliga.com//img/teams/21774_218420914446_art-desing-prefabrik.jpg"
                                                            alt="Art Desing Prefabrik "></a>
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name"><a
                                                            href="/izmir/takim/art-desing-prefabrik-21774">Art Desing
                                                            Prefabrik </a></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="team-result__score">1</td>
                                        <td class="team-result__status">0</td>
                                        <td class="team-result__ball-possession">1</td>
                                        <td class="team-result__shots">0</td>
                                        <td class="team-result__fouls mobNone">2</td>
                                        <td class="team-result__fouls mobNone">2</td>
                                        <td class="team-result__fouls">0</td>
                                        <td class="team-result__fouls">1</td>
                                        <td class="team-result__game-overview mobNone">
                                            0
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="numberLine pGreen">7</td>
                                        <td class="team-result__vs">
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <a href="/izmir/takim/dereboyu-spor-21916"><img
                                                            src="https://www.pasliga.com//img/teams/21916_430504150914_dereboyu-spor.jpg"
                                                            alt="Dereboyu Spor"></a>
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name"><a
                                                            href="/izmir/takim/dereboyu-spor-21916">Dereboyu Spor</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="team-result__score">2</td>
                                        <td class="team-result__status">0</td>
                                        <td class="team-result__ball-possession">1</td>
                                        <td class="team-result__shots">1</td>
                                        <td class="team-result__fouls mobNone">3</td>
                                        <td class="team-result__fouls mobNone">12</td>
                                        <td class="team-result__fouls">-9</td>
                                        <td class="team-result__fouls">1</td>
                                        <td class="team-result__game-overview mobNone">
                                            0
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="numberLine pGreen">8</td>
                                        <td class="team-result__vs">
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <a href="/izmir/takim/izmir-genclerbirligi-22167"><img
                                                            src="https://www.pasliga.com//img/teams/22167_74461014450_izmir-genclerbirligi.jpg"
                                                            alt="İzmir Gençlerbirliği"></a>
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name"><a
                                                            href="/izmir/takim/izmir-genclerbirligi-22167">İzmir
                                                            Gençlerbirliği</a></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="team-result__score">2</td>
                                        <td class="team-result__status">0</td>
                                        <td class="team-result__ball-possession">0</td>
                                        <td class="team-result__shots">2</td>
                                        <td class="team-result__fouls mobNone">0</td>
                                        <td class="team-result__fouls mobNone">11</td>
                                        <td class="team-result__fouls">-11</td>
                                        <td class="team-result__fouls">0</td>
                                        <td class="team-result__game-overview mobNone">
                                            0
                                        </td>
                                    </tr>
                                     <tr>
                                        <td class="numberLine pGreen">8</td>
                                        <td class="team-result__vs">
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <a href="/izmir/takim/izmir-genclerbirligi-22167"><img
                                                            src="https://www.pasliga.com//img/teams/22167_74461014450_izmir-genclerbirligi.jpg"
                                                            alt="İzmir Gençlerbirliği"></a>
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name"><a
                                                            href="/izmir/takim/izmir-genclerbirligi-22167">İzmir
                                                            Gençlerbirliği</a></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="team-result__score">2</td>
                                        <td class="team-result__status">0</td>
                                        <td class="team-result__ball-possession">0</td>
                                        <td class="team-result__shots">2</td>
                                        <td class="team-result__fouls mobNone">0</td>
                                        <td class="team-result__fouls mobNone">11</td>
                                        <td class="team-result__fouls">-11</td>
                                        <td class="team-result__fouls">0</td>
                                        <td class="team-result__game-overview mobNone">
                                            0
                                        </td>
                                    </tr>
                                     <tr>
                                        <td class="numberLine pGreen">8</td>
                                        <td class="team-result__vs">
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <a href="/izmir/takim/izmir-genclerbirligi-22167"><img
                                                            src="https://www.pasliga.com//img/teams/22167_74461014450_izmir-genclerbirligi.jpg"
                                                            alt="İzmir Gençlerbirliği"></a>
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name"><a
                                                            href="/izmir/takim/izmir-genclerbirligi-22167">İzmir
                                                            Gençlerbirliği</a></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="team-result__score">2</td>
                                        <td class="team-result__status">0</td>
                                        <td class="team-result__ball-possession">0</td>
                                        <td class="team-result__shots">2</td>
                                        <td class="team-result__fouls mobNone">0</td>
                                        <td class="team-result__fouls mobNone">11</td>
                                        <td class="team-result__fouls">-11</td>
                                        <td class="team-result__fouls">0</td>
                                        <td class="team-result__game-overview mobNone">
                                            0
                                        </td>
                                    </tr>
                                     <tr>
                                        <td class="numberLine pGreen">8</td>
                                        <td class="team-result__vs">
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <a href="/izmir/takim/izmir-genclerbirligi-22167"><img
                                                            src="https://www.pasliga.com//img/teams/22167_74461014450_izmir-genclerbirligi.jpg"
                                                            alt="İzmir Gençlerbirliği"></a>
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name"><a
                                                            href="/izmir/takim/izmir-genclerbirligi-22167">İzmir
                                                            Gençlerbirliği</a></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="team-result__score">2</td>
                                        <td class="team-result__status">0</td>
                                        <td class="team-result__ball-possession">0</td>
                                        <td class="team-result__shots">2</td>
                                        <td class="team-result__fouls mobNone">0</td>
                                        <td class="team-result__fouls mobNone">11</td>
                                        <td class="team-result__fouls">-11</td>
                                        <td class="team-result__fouls">0</td>
                                        <td class="team-result__game-overview mobNone">
                                            0
                                        </td>
                                    </tr>
                                     <tr>
                                        <td class="numberLine pGreen">8</td>
                                        <td class="team-result__vs">
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <a href="/izmir/takim/izmir-genclerbirligi-22167"><img
                                                            src="https://www.pasliga.com//img/teams/22167_74461014450_izmir-genclerbirligi.jpg"
                                                            alt="İzmir Gençlerbirliği"></a>
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name"><a
                                                            href="/izmir/takim/izmir-genclerbirligi-22167">İzmir
                                                            Gençlerbirliği</a></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="team-result__score">2</td>
                                        <td class="team-result__status">0</td>
                                        <td class="team-result__ball-possession">0</td>
                                        <td class="team-result__shots">2</td>
                                        <td class="team-result__fouls mobNone">0</td>
                                        <td class="team-result__fouls mobNone">11</td>
                                        <td class="team-result__fouls">-11</td>
                                        <td class="team-result__fouls">0</td>
                                        <td class="team-result__game-overview mobNone">
                                            0
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    <!-- End Content Text-->
                    <!-- icerik -->

                </div><!-- Sidebar -->
                <div class="sidebar col-lg-4" id="sidebar">
                    <!-- Widget: Standings / End --><!-- Widget: Social Buttons - Condensed-->
                    <aside class="widget widget--sidebar widget-social widget-social--condensed">
                        <a class="btn-social-counter btn-social-counter--fb" href="https://www.facebook.com/passalig/"
                           target="_blank">
                            <div class="btn-social-counter__icon">
                                <i class="fab fa-facebook"></i>
                            </div>
                            <h6 class="btn-social-counter__title">Facebook</h6><span
                                class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> Takip Et</span>
                            <span class="btn-social-counter__add-icon"></span></a> <a
                            class="btn-social-counter btn-social-counter--twitter"
                            href="https://www.youtube.com/channel/UCsQ3BNXZlTHFhsEuVKB-07A" target="_blank">
                            <div class="btn-social-counter__icon">
                                <i class="fab fa-youtube"></i>
                            </div>
                            <h6 class="btn-social-counter__title">Youtube</h6><span
                                class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> Takip Et</span>
                            <span class="btn-social-counter__add-icon"></span></a> <a
                            class="btn-social-counter btn-social-counter--rss" href="https://www.instagram.com/pasliga/"
                            target="_blank">
                            <div class="btn-social-counter__icon">
                                <i class="fab fa-instagram"></i>
                            </div>
                            <h6 class="btn-social-counter__title">Instagram</h6><span class="btn-social-counter__count"><span
                                    class="btn-social-counter__count-num"></span> Takip Et</span> <span
                                class="btn-social-counter__add-icon"></span></a>
                    </aside><!-- Widget: Social Buttons - Condensed / End -->

                    <aside class="widget card widget--sidebar widget-standings">
                        <a href="/izmir/rezervasyon" class="btn-social-counter btn-social-counter--instagram">
                            <div class="btn-social-counter__icon"><i class="fab fa-youtube"></i></div>
                            <h6 class="btn-social-counter__title">Rezervasyon</h6><span
                                class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> Yap</span>
                            <span class="btn-social-counter__add-icon"></span> </a>
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
                            <footer class="card__footer sponsor-card__footer"><a href="/izmir/golkralligi"
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
                                                    <a href="/izmir/oyuncu/ayberk-madran-95789"><img alt=""
                                                                                                     src="https://www.pasliga.com//img/players/default.jpg"></a>
                                                </figure>
                                                <div class="team-leader__player-inner">
                                                    <a href="/izmir/oyuncu/ayberk-madran-95789"><h5
                                                            class="team-leader__player-name">Ayberk Madran</h5></a><span
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
                                                    <a href="/izmir/oyuncu/aydin-efe-bayrakceken-95638"><img alt=""
                                                                                                             src="https://www.pasliga.com//img/players/default.jpg"></a>
                                                </figure>
                                                <div class="team-leader__player-inner">
                                                    <a href="/izmir/oyuncu/aydin-efe-bayrakceken-95638"><h5
                                                            class="team-leader__player-name">Aydın Efe Bayrakçeken</h5>
                                                    </a><span class="team-leader__player-position">Buca Bilbao</span>
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
                                                    <a href="/izmir/oyuncu/alpercan-kilinc-95734"><img alt=""
                                                                                                       src="https://www.pasliga.com//img/players/default.jpg"></a>
                                                </figure>
                                                <div class="team-leader__player-inner">
                                                    <a href="/izmir/oyuncu/alpercan-kilinc-95734"><h5
                                                            class="team-leader__player-name">Alpercan Kılınç</h5>
                                                    </a><span class="team-leader__player-position">Maestro Fc </span>
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
                                                    <a href="/izmir/oyuncu/can-aydin-95736"><img alt=""
                                                                                                 src="https://www.pasliga.com//img/players/default.jpg"></a>
                                                </figure>
                                                <div class="team-leader__player-inner">
                                                    <a href="/izmir/oyuncu/can-aydin-95736"><h5
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
                                                    <a href="/izmir/oyuncu/egemen-izgar-95743"><img alt=""
                                                                                                    src="https://www.pasliga.com//img/players/default.jpg"></a>
                                                </figure>
                                                <div class="team-leader__player-inner">
                                                    <a href="/izmir/oyuncu/egemen-izgar-95743"><h5
                                                            class="team-leader__player-name">Egemen Izgar</h5></a><span
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
                </div><!-- Sidebar / End -->
            </div>
        </div>
    </div>

@endsection

