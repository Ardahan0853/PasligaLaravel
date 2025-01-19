@extends('layouts.main')
<!-- Global site tag (gtag.js) - Google Analytics -->
@section('content')
    <body data-template="template-soccer">
    <div class="site-wrapper clearfix">
        <div class="site-overlay"></div>

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
                                @if($takim->haber()->count() < 1)
                                    <div class="post-list__item">
                                        <div
                                            class="posts__item posts__item--card posts__item--category-1 card card--block">
                                            <div class="row">
                                                <div class="col-5">
                                                    <figure class="posts__thumb">
                                                        <a href="#"><img alt="" class="max-h-64"
                                                                         src="https://via.placeholder.com/150"/></a>
                                                    </figure>
                                                </div>
                                                <div class="posts__inner col-7">
                                                    <div class="card__content">
                                                        <h6 class="posts__title"><a href="#">Haber Bulunamadı</a></h6>
                                                        <time class="posts__date" datetime="2016-08-23">2021-08-23
                                                        </time>
                                                        <div class="posts__excerpt">
                                                            Bu takım için henüz haber eklenmemiştir.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endif
                            @if ($errors->any())
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
                            @endif
                            @if(Auth::check() && Auth::user()->role === 'admin')
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
                    </div>
                        <!-- icerik -->
                    </div>
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

                                        </tbody>
                                    </table>
                                </div>

                                <footer class="card__footer sponsor-card__footer"><a
                                        href="{{route('takim.index', ['$takim' => $takim])}}"
                                        class="btn btn-primary-inverse btn-lg btn-block">Tümü</a>
                                </footer>
                            </div>
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
                                        @foreach($allMembers as $member)
                                            <tr>
                                                <td class="team-leader__gp">1</td>
                                                <td class="team-leader__player">
                                                    <div class="team-leader__player-info">
                                                        <figure
                                                            class="team-leader__player-img team-leader__player-img--sm">
                                                            <a href="../oyuncu/melih-buyukbayrak-78206.html"><img alt=""
                                                                                                                  src="../../../www.pasliga.com/img/players/default.jpg"/></a>
                                                        </figure>
                                                        <div class="team-leader__player-inner">
                                                            <a href="../oyuncu/melih-buyukbayrak-78206.html">
                                                                <h5 class="team-leader__player-name">{{$member->name}}</h5>
                                                                <span
                                                                    class="team-leader__player-position">{{$member->kadro->takim->name ?? 'N/A'}}</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="team-leader__goals">{{$member->gol_sayisi}}</td>
                                            </tr>
                                        @endforeach
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
                                        @foreach($memberValue as $member)
                                            <tr>
                                                <td class="team-leader__gp">1</td>
                                                <td class="team-leader__player">
                                                    <div class="team-leader__player-info">
                                                        <figure
                                                            class="team-leader__player-img team-leader__player-img--sm">
                                                            <a href="../oyuncu/suleyman-yuksel-77.html"><img alt=""
                                                                                                             src="../../../www.pasliga.com/img/players/77_108362625903_suleyman-yuksel.jpg"/></a>
                                                        </figure>
                                                        <div class="team-leader__player-inner">
                                                            <a href="../oyuncu/suleyman-yuksel-77.html"><h5
                                                                    class="team-leader__player-name">{{$member->name}}</h5>
                                                            </a><span
                                                                class="team-leader__player-position">{{$member->kadro->takim->name ?? 'N/A'}}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="team-leader__goals">{{$member->deger}} ₺</td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <!-- Leader: Points / End -->
                            </div>
                        </aside>

                    </div>
                </div>
            </div>
            <!-- Sidebar -->

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
