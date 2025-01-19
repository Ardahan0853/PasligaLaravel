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

                    <div class="col-lg-12">

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
