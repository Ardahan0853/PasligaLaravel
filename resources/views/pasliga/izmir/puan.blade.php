@extends('layouts.main')

@section('title', 'Izmir Page')

@section('content')
    <div class="site-content">
        <div class="container-fluid">
            <div class="row">
                <!-- Content -->
                <div class="content col-lg-12">
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

                                                <td class="team-result__score">{{ $takim->takimPuan->o ?? 'N/A' }}</td>
                                                <td class="team-result__score">{{ $takim->takimPuan->g ?? 'N/A' }}</td>
                                                <td class="team-result__status">{{ $takim->takimPuan->b ?? 'N/A' }}</td>
                                                <td class="team-result__ball-possession">{{ $takim->takimPuan->m ?? 'N/A' }}</td>
                                                <td class="team-result__shots">{{ $takim->takimPuan->a ?? 'N/A'}}</td>
                                                <td class="team-result__fouls mobNone">{{ $takim->takimPuan->y ?? 'N/A'}}</td>
                                                <td class="team-result__fouls mobNone">{{ $takim->takimPuan->av ?? 'N/A' }}</td>
                                                <td class="team-result__fouls">{{ $takim->takimPuan->p ?? 'N/A'}}</td>

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
                                                    <label for="a">Atılan Gol</label>
                                                    <input class="form-control" type="text" id="a" name="a"
                                                           placeholder="Atışlar" required>
                                                </div>
                                            </div>
                                            <div class="row p-3">
                                                <div class="form-group col">
                                                    <label for="y">Yenilen Gol</label>
                                                    <input class="form-control" type="text" id="y" name="y"
                                                           placeholder="Y" required>
                                                </div>

                                                <div class="form-group col">
                                                    <label for="av">Averaj</label>
                                                    <input class="form-control" type="text" id="av" name="av"
                                                           placeholder="Avans" required>
                                                </div>

                                                <div class="form-group col">
                                                    <label for="p">Puan</label>
                                                    <input class="form-control" type="text" id="p" name="p"
                                                           placeholder="Penaltı" required>
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

            </div>
        </div>
    </div>

@endsection

