@extends('layouts.main')

@section('title', 'Izmir Page')

@section('content')
    <div class="site-content">
        <div class="container-fluid p-3">
            <div class="row">
                <!-- Content -->
                <div class="content col-lg-8 d-flex flex-column justify-content-between">
                    <!-- Featured News -->
{{--                    <div class="card card--clean">--}}
{{--                        <header class="card__header card__header--has-filter">--}}
{{--                            <h4>Haberler</h4>--}}
{{--                        </header>--}}
{{--                        <div class="card__content">--}}
{{--                            <!-- Slider -->--}}
{{--                            <div class="slick posts posts--slider-featured posts-slider">--}}


{{--                            </div><!-- Slider / End -->--}}
{{--                        </div>--}}
{{--                    </div><!-- Featured News / End -->--}}


                    <div class="row ">
                        <div class="col-md-12">
                            <!-- maç sonuçları -->
                            <div class="widget card widget--sidebar widget-results">
                                <div class="widget__title card__header card__header--has-btn">
                                    <h4>Maç Sonuçları</h4>
                                </div>
                                <div class="widget__content card__content">
                                    <ul class="widget-results__list">
                                        @foreach($macSonuclari as $macsonucu)
                                            <li class="widget-results__item">
                                                <div class="widget-results__header justify-content-center">
                                                    <div class="widget-results__title">
                                                        {{$macsonucu->tarih}}
                                                    </div>
                                                </div>
                                                <div class="widget-results__content">
                                                    <div class="widget-results__team widget-results__team--first">
                                                        <figure class="widget-results__team-logo">
                                                            <img alt=""
                                                                 src="../www.pasliga.com/img/teams/21775_321451935291_eski-camlik-fk.jpg">
                                                        </figure>
                                                        <div class="widget-results__team-details">
                                                            <h5 class="widget-results__team-name">{{$macsonucu->takim_1_name}} </h5>
                                                        </div>
                                                    </div>
                                                    <div class="widget-results__result">
                                                        <div class="widget-results__score">
                                                            <a href="izmir/mac/eski-camlik-fk-dereboyu-spor-29943.html">
                                                                <span
                                                                    class="widget-results__score-winner">{{$macsonucu->takim_1_score}}</span>
                                                                - <span
                                                                    class="widget-results__score-loser">{{$macsonucu->takim_2_score}}</span>
                                                                <div class="widget-results__status">
                                                                    {{$macsonucu->takim_2_name}}
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="widget-results__team widget-results__team--second">
                                                        <figure class="widget-results__team-logo">
                                                            <img alt=""
                                                                 src="../www.pasliga.com/img/teams/21916_430504150914_dereboyu-spor.jpg">
                                                        </figure>
                                                        <div class="widget-results__team-details">
                                                            <h5 class="widget-results__team-name">Dereboyu Spor</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                                <footer class="card__footer sponsor-card__footer"><a href="izmir/gecmismaclar.html"
                                                                                     class="btn btn-primary-inverse btn-lg btn-block">Tümü</a>
                                </footer>
                            </div>
                            <!-- maç sonuçları -->
                        </div>

                    </div>


                </div><!-- Content / End --><!-- Sidebar -->
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
                                    @if($butunTakimlar)
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
                                                                    href="takim-edit.html">{{$takim->name}}</a>
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
                                    @endif

                                    </tbody>
                                </table>
                            </div>


                            <footer class="card__footer sponsor-card__footer"><a href="{{route('takim.index')}}"
                                                                                 class="btn btn-primary-inverse btn-lg btn-block">Tümü</a>
                            </footer>

                        </div>
                    </aside>
                    <!-- Widget: Standings / End --><!-- Widget: Social Buttons - Condensed-->
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
                                        <th class="team-leader__type">Sıra</th>
                                        <th class="team-leader__goals">Oyuncu</th>
                                        <th class="team-leader__gp">Takım</th>
                                        <th class="team-leader__gp">Mevkii</th>
                                        <th class="team-leader__avg">Gol</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($allMembers as $member)

                                        <tr>
                                            <td class="team-leader__type">{{$member->id}}</td>
                                            <td class="team-leader__gp">{{$member->name}}</td>
                                            <td class="team-leader__goals">{{$member->kadro->takim->name}}</td>
                                            <td class="team-leader__gp">{{$member->mevki}}</td>
                                            <td class="team-leader__avg">{{$member->gol_sayisi}}</td>
                                        </tr>

                                    @endforeach


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

                                    @if($oyuncuDeger)
                                        @foreach($oyuncuDeger->sortByDesc('deger') as $oyuncu)
                                            <tr>
                                                <td class="team-leader__gp">{{ $oyuncu->id }}</td>
                                                <td class="team-leader__player">
                                                    <div class="team-leader__player-info">
                                                        <div class="team-leader__player-inner">
                                                            <a href=""><h5
                                                                    class="team-leader__player-name">{{ $oyuncu->name }}</h5>
                                                            </a><span
                                                                class="team-leader__player-position">{{ $oyuncu->kadro->takim->name }}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="team-leader__goals">{{ $oyuncu->deger }} PL£</td>
                                            </tr>
                                        @endforeach
                                    @endif

                                    </tbody>
                                </table>
                            </div><!-- Leader: Points / End -->
                        </div>
                    </aside>
                </div><!-- Sidebar / End -->
            </div>
        </div>
    </div><!-- Content / End -->

@endsection
