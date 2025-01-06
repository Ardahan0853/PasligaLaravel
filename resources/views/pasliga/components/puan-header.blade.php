<nav class="content-filter">
            <div class="container-fluid">
                <a class="content-filter__toggle" href="#"></a>
                <ul class="content-filter__list">
                    <li class="content-filter__item {{Route::is('takim.takimGenel') ? 'content-filter__item--active' : ''}}">
                        <a class="content-filter__link " href="{{route('takim.takimGenel', $takim)}}"><small>Genel</small> Gösterim</a>
                    </li>
                    <li class="content-filter__item {{Route::is('takim.kadroIndex') ? 'content-filter__item--active' : ''}}">
                        <a class="content-filter__link" href="{{route('takim.kadroIndex', $takim)}}"><small>Takım</small>
                            Kadrosu</a>
                    </li>
{{--                    <li class="content-filter__item">--}}
{{--                        <a class="content-filter__link" href="jugoslavya-21541/fikstur.html" disabled><small>Takım</small>--}}
{{--                            Fikstürü</a>--}}
{{--                    </li>--}}
{{--                    <li class="content-filter__item">--}}
{{--                        <a class="content-filter__link" href="jugoslavya-21541/sonuclar.html" disabled><small>Takım</small>--}}
{{--                            Sonuçları</a>--}}
{{--                    </li>--}}
                </ul>
            </div>
        `</nav>
