@extends('layouts.main')
@section('content')
    <body data-template="template-soccer">
    <div class="site-wrapper clearfix">
        <div class="site-overlay"></div>


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
                    <div class="content col-lg-12">
                        <!-- icerik -->
                        <!--SELECT COUNT(userID) AS totalPlayer, '0' AS squadType FROM teamSquad WHERE (teamID = '22166') AND (leagueStateID = '35') UNION ALL SELECT COUNT(userID) AS totalPlayer, '1' AS squadType FROM subLeagueTeamSquad WHERE (teamID = '22166') AND (leagueStateID = '35') AND (subLeagueID = (SELECT TOP (1) id FROM leagueSeasons WHERE (seasonTypeID = 2) AND (status = 1) AND (leagueStateID = '35') ORDER BY id DESC))-->
                        <!--SELECT teamSquad.id, teamSquad.leagueStateID, teamSquad.userID, teamSquad.teamID, teamSquad.typeID, teamSquad.stateID, teamSquad.tarih, users.ad + ' ' + users.soyad AS adsoyad, playerPositions.ad AS positionTitle, users.foto, users.dogumtarihi, users.fkPuan FROM playerPositions LEFT OUTER JOIN users ON playerPositions.id = users.mevkii RIGHT OUTER JOIN teamSquad ON users.id = teamSquad.userID WHERE (teamSquad.teamID = '22166') AND (users.akt = 'true') ORDER BY teamSquad.typeID-->
                        <aside class="widget widget--sidebar card card--has-table widget-leaders">
                            <div class="widget__title card__header">
                                <h4>Kadro </h4>
                            </div>
                            <div class="widget__content card__content">
                                <!-- Leader: Points -->

                                <div class="table-responsive">
                                    <table class="table team-leader">
                                        <thead>
                                        <tr>
                                            <th class="team-leader__type">Oyuncu</th>
                                            <th class="team-leader__goals">Yaş</th>
                                            <th class="team-leader__gp">Değer</th>
                                            <th class="team-leader__avg">Mevkii</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="team-leader__player">
                                                    <div class="team-leader__player-info">
                                                        <div class="team-leader__player-inner">
                                                            <h5 class="team-leader__player-name"><a
                                                                    href="../../oyuncu/cagri-yusuf-eker-84019.html">{{$oyuncu->name}}</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="team-leader__goals">{{$oyuncu->yas}}</td>
                                                <td class="team-leader__gp">{{$oyuncu->deger}} £</td>
                                                <td class="team-leader__avg">
                                                    <span class="team-leader__player-position">{{$oyuncu->mevki}}</span>
                                                </td>
                                            </tr>
                                            <td>
                                                <!-- Delete Button -->
                                                <form action="{{ route('takim.destroyOyuncu', $oyuncu->id) }}"
                                                      method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Are you sure you want to delete this player?');">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>


                                        </tbody>

                                    </table>
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
                                        <div class="post-list__item m-3">

                                            <form action="{{route('takim.updateOyuncu', ['oyuncu' => $oyuncu, 'takim' => $takim])}}" method="POST"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                @method('PATCH')
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2">Oyuncu</label>
                                                    <div class="col-sm-12">
                                                        <select id="name" name="name" class="form-control"
                                                                required="">
                                                            <option value="">Seçiniz</option>
                                                            @foreach($users as $user)

                                                                <option
                                                                    value="{{ $user->id }}">{{ $user->full_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="deger">Değer</label>
                                                    <input type="number" name="deger" class="form-control" id="deger"
                                                           placeholder="Değer"/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="yas">Yaş</label>
                                                    <input type="number" name="yas" class="form-control"
                                                           id="yas"
                                                           placeholder="Yaş"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2">Mevkii</label>
                                                    <div class="col-sm-12">
                                                        <select id="mevki" name="mevki" class="form-control"
                                                                required=""
                                                                value="{{ old('mevki') }}">
                                                            <option value="">Seçiniz</option>

                                                            <option value="Kaleci" selected>Kaleci</option>

                                                            <option value="Defans">Defans</option>

                                                            <option value="Orta Saha">Orta Saha</option>

                                                            <option value="Forver">Forvet</option>

                                                            <option value="5">Belirtilmemiş</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="gol_sayisi">Gol Sayısı</label>
                                                    <input type="number" name="gol_sayisi" class="form-control"
                                                           id="gol_sayisi"
                                                           placeholder="Gol Sayısı"/>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Giriniz</button>
                                            </form>
                                        </div>

                                        <!-- Posts List / End -->
                                    @endif
                                </div><!-- Leader: Points / End -->

                            </div>
                        </aside>


                        <!-- icerik -->
                    </div><!-- Sidebar -->
                </div>
            </div>
        </div><!-- Content / End -->
    </div>
    <!-- Core JS -->


    </body>

@endsection
