@extends('layouts.main')

@section('title', 'Izmir Page')

@section('content')
    <div class="site-content">
        <div class="container-fluid">
            <div class="row">
                <!-- Content -->
                <div class="content col-lg-9">
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
                                        <th class="team-result__date">No</th>
                                        <th class="team-result__vs">Tc No</th>
                                        <th class="team-result__score">Tam Isim</th>
                                        <th class="team-result__status">Email</th>
                                        <th class="team-result__ball-possession">Telefon</th>
                                        <th class="team-result__shots">Doğum Tarihi</th>
                                        <th class="team-result__fouls mobNone">password</th>
                                        <th class="team-result__game-overview mobNone">Rol</th>
                                        <th class="team-result__game-overview">Boy</th>
                                        <th class="team-result__game-overview">Kilo</th>
                                        <th class="team-result__game-overview mobNone">Ayakkabı Numarası</th>
                                        <th class="team-result__game-overview mobNone">Pozisyon</th>
                                        <th class="team-result__game-overview mobNone">Forma Numarası</th>
                                        <th class="team-result__game-overview mobNone">Kayıt Tarihi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($users)
                                        @foreach($users as $user)
                                            <tr>
                                                <!-- Display Takim ID -->
                                                <td class="numberLine pGreen">{{ $user->id }}</td>

                                                <!-- Display Team Logo and Name -->
                                                <td class="team-result__vs">
                                                    <div class="team-meta">
                                                        <div class="team-meta__info">
                                                            <h6 class="team-meta__name">
                                                                <a href="/izmir/takim/cagri-baba-fk-ege-metal-22166">{{ $user->tc_no }}</a>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>

                                                <!-- Loop through related 'takimPuan' data and display the statistics -->
                                                <td class="team-result__score">{{ $user->full_name }}</td>
                                                <td class="team-result__score">{{ $user->email }}</td>
                                                <td class="team-result__status">{{ $user->phone }}</td>
                                                <td class="team-result__ball-possession">{{ $user->birth_date }}</td>
                                                <td class="team-result__shots">{{ $user->password}}</td>
                                                <td class="team-result__fouls mobNone">{{ $user->role }}</td>
                                                <td class="team-result__fouls mobNone">{{ $user->height }}</td>
                                                <td class="team-result__fouls">{{ $user->weight }}</td>
                                                <td class="team-result__game-overview mobNone">{{ $user->shoe_number }}</td>
                                                <td class="team-result__game-overview mobNone">{{ $user->position }}</td>
                                                <td class="team-result__game-overview mobNone">{{ $user->back_number }}</td>
                                                <td class="team-result__game-overview mobNone">{{ date($user->created_at) }}</td>
                                            </tr>
                                        @endforeach
                                    @endif


                                    </tbody>

                                </table>
                                <div class="container-fluid d-flex">
                                    <div class="ml-auto">
                                            {{ $users->links() }}`
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- End Content Text-->
                    <!-- icerik -->

                </div><!-- Sidebar -->
                <div class="sidebar col-lg-3" id="sidebar">
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
                            <h6 class="btn-social-counter__title">Instagram</h6><span
                                class="btn-social-counter__count"><span
                                    class="btn-social-counter__count-num"></span> Takip Et</span> <span
                                class="btn-social-counter__add-icon"></span></a>
                    </aside><!-- Widget: Social Buttons - Condensed / End -->

                    <aside class="widget card widget--sidebar widget-standings">
                        <a href="/izmir/rezervasyon" class="btn-social-counter btn-social-counter--instagram">
                            <div class="btn-social-counter__icon"><i class="fab fa-youtube"></i></div>
                            <h6 class="btn-social-counter__title">Rezervasyon</h6><span
                                class="btn-social-counter__count"><span
                                    class="btn-social-counter__count-num"></span> Yap</span>
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

