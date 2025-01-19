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
                                    @if($takims)
                                        @foreach($takims as $takim)
                                            <tr>
                                                <!-- Display Takim ID -->
                                                <td class="numberLine pGreen">{{ $takim->id }}</td>

                                                <!-- Display Team Logo and Name -->
                                                <td class="team-result__vs">
                                                    <div class="team-meta">
                                                        <figure class="team-meta__logo">
                                                            <a href="{{ route('takim.edit', $takim->id) }}">
                                                                <img src="{{ asset('storage/images/' . $takim->logo) }}"
                                                                     alt="{{ $takim->name }}">
                                                            </a>
                                                        </figure>
                                                        <div class="team-meta__info">
                                                            <h6 class="team-meta__name">
                                                                <a href="{{ route('takim.edit', $takim->id) }}">{{ $takim->name }}</a>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>

                                                <!-- Loop through related 'takimPuan' data and display the statistics -->
                                                <td class="team-result__score">{{ $takim->takimPuan->o }}</td>
                                                <td class="team-result__score">{{ $takim->takimPuan->g }}</td>
                                                <td class="team-result__status">{{ $takim->takimPuan->b }}</td>
                                                <td class="team-result__ball-possession">{{ $takim->takimPuan->m ?? 'N/A' }}</td>
                                                <td class="team-result__shots">{{ $takim->takimPuan->a }}</td>
                                                <td class="team-result__fouls mobNone">{{ $takim->takimPuan->y }}</td>
                                                <td class="team-result__fouls mobNone">{{ $takim->takimPuan->av ?? 'N/A' }}</td>
                                                <td class="team-result__fouls">{{ $takim->takimPuan->p }}</td>
                                                <td class="team-result__game-overview mobNone">{{ $takim->takimPuan->bn }}</td>

                                                <!-- Edit and Delete Buttons -->
                                                <td>
                                                    <!-- Edit Button -->
                                                    <a href="{{ route('takim.edit', $takim->id) }}"
                                                       class="btn btn-sm btn-primary">
                                                        Edit
                                                    </a>

                                                    <!-- Delete Button -->
                                                    <form action="{{ route('takim.destroy', $takim->id) }}"
                                                          method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                                onclick="return confirm('Are you sure you want to delete this team?');">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                    @endif


                                    </tbody>
                                </table>

                                @if(Auth::check() && Auth::user()->role === 'admin')

                                    <form action="{{route('takim.createTakim')}}" id="takim_form" method="POST"
                                          enctype="multipart/form-data">
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
                                        @csrf
                                        <div class="container-fluid">
                                            <div class="row p-3">
                                                <div class="form-group col">
                                                    <label for="name">Takım İsmi</label>
                                                    <input class="form-control" type="text" id="name" name="name"
                                                           class="form-control"
                                                           placeholder="Takım ismi girin" required>
                                                </div>
                                                <div class="form-group col">
                                                    <label for="deger">Takım değeri</label>
                                                    <input class="form-control" type="number" id="deger" name="deger"
                                                           placeholder="Takım değeri girin" required>
                                                </div>
                                                <div class="form-group col">
                                                    <label for="kurulus_tarihi">Takım Kuruluş Tarihi</label>
                                                    <input class="form-control" type="date" id="kurulus_tarihi"
                                                           name="kurulus_tarihi"
                                                           placeholder="Kurulus Tarihini Girin" required>
                                                </div>
                                                <div class="form-group col">
                                                    <label for="kaptan">Takım Kaptani</label>
                                                    <input class="form-control" type="text" id="kaptan" name="kaptan"
                                                           placeholder="Kaptanı Girin" required>
                                                </div>
                                            </div>
                                            <div class="row p-3">
                                                <div class="form-group col">
                                                    <label for="logo">Takım Logosu</label>
                                                    <input class="form-control" type="file" accept="image/*" id="logo"
                                                           name="logo"
                                                           placeholder="Logo ekleyin" required>
                                                </div>

                                                <div class="form-group col">
                                                    <label for="o">Oynanan Maçlar</label>
                                                    <input class="form-control" type="text" id="o" name="o"
                                                           placeholder="Oynanan Maçlar" required>
                                                </div>
                                            </div>
                                            <div class="row p-3">
                                                <div class="form-group col">
                                                    <label for="g">Galibiyet</label>
                                                    <input class="form-control" type="text" id="g" name="g"
                                                           placeholder="Galibiyet" required>
                                                </div>
                                                <div class="form-group col">
                                                    <label for="b">Berabere</label>
                                                    <input class="form-control" type="text" id="b" name="b"
                                                           placeholder="Berabere" required>
                                                </div>
                                                <div class="form-group col">
                                                    <label for="m">Mağlubiyet</label>
                                                    <input class="form-control" type="text" id="m" name="m"
                                                           placeholder="Mağlubiyet" required>
                                                </div>

                                                <div class="form-group col">
                                                    <label for="a">Atışlar</label>
                                                    <input class="form-control" type="text" id="a" name="a"
                                                           placeholder="Atışlar" required>
                                                </div>
                                            </div>
                                            <div class="row p-3">
                                                <div class="form-group col">
                                                    <label for="y">Y</label>
                                                    <input class="form-control" type="text" id="y" name="y"
                                                           placeholder="Y" required>
                                                </div>

                                                <div class="form-group col">
                                                    <label for="av">Avans</label>
                                                    <input class="form-control" type="text" id="av" name="av"
                                                           placeholder="Avans" required>
                                                </div>

                                                <div class="form-group col">
                                                    <label for="p">Penaltı</label>
                                                    <input class="form-control" type="text" id="p" name="p"
                                                           placeholder="Penaltı" required>
                                                </div>

                                                <div class="form-group col">
                                                    <label for="bn">Bn</label>
                                                    <input class="form-control" type="text" id="bn" name="bn"
                                                           placeholder="Bn" required>
                                                </div>
                                            </div>
                                            <div class="row p-3">
                                                <div class="form-group col d-flex justify-content-end">
                                                    <button type="submit" class="btn-primary">Oluştur</button>
                                                </div>
                                            </div>

                                        </div>

                                    </form>

                                @endif

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

