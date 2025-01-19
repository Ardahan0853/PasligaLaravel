@extends('layouts.main')


@section('content')

    <!-- Mirrored from pasliga.com/istanbul/golkralligi by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Dec 2024 10:57:00 GMT -->

    <div class="site-wrapper clearfix">
        <div class="site-overlay"></div>


        <div class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <h1 class="page-heading__title">İzmir <span class="highlight">Gol Krallığı</span></h1>
                    </div>
                </div>
            </div>
        </div><!-- Page Heading / End -->

        <div class="post-filter">
            <div class="container">
                <div class="post-filter__select">
                    <label class="post-filter__label">Ligler</label>
                    <select class="cs-select cs-skin-border">

                        <option data-link='/istanbul/golkralligi/130'>2024 Gümüşpala Free Lig</option>

                        <option selected data-link='/istanbul/golkralligi/116'>Bayrampaşa Konferansı</option>

                    </select>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="site-content">
            <div class="container">
                <div class="row">
                    <!-- Content
            ================================================== -->

                    <div class="col">

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
                                                <div class="team-leader__player-info">
                                                    <figure class="team-leader__player-img team-leader__player-img--sm">
                                                        <a href="{{route('takim.edit', ['takim' => $member->kadro->takim])}}"><img alt=""
                                                                                                        src="{{asset('storage/public/' . $member->kadro->takim->logo)}}"></a>
                                                    </figure>
                                                    <div class="team-leader__player-inner">
                                                        <h5 class="team-leader__player-name"><a
                                                                href="{{route('takim.edit', ['takim' => $member->kadro->takim])}}">{{$member->kadro->takim->name}}</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <td class="team-leader__goals">{{$member->kadro->takim->name}}</td>
                                                <td class="team-leader__gp">{{$member->name}}</td>
                                                <td class="team-leader__gp">{{$member->mevki}}</td>
                                                <td class="team-leader__avg">{{$member->gol_sayisi}}</td>
                                            </tr>

                                        @endforeach


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

    </body>

@endsection
