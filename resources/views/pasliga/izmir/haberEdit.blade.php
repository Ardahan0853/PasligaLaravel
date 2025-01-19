@extends('layouts.main')

@section('title', 'Izmir Page')
@section('content')

    <div class="site-wrapper clearfix">
        <div class="site-overlay"></div>


        <div class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <h1 class="page-heading__title">izmir <span class="highlight">HABERLER</span></h1>
                    </div>
                </div>
            </div>
        </div><!-- Page Heading / End -->
        <!-- Content -->
        <div class="site-content">
            <div class="container">
                <div class="">
                    <!-- Content -->
                    <div class="content ">

                    </div><!-- Sidebar -->
                    <div class="site-content">
                        <div class="container-fluid ">
                            <div class="">
                                <!-- Content -->
                                <div class="content">
                                    <!-- icerik -->
                                    <!-- Posts List -->

                                    <div class="posts posts--cards posts--cards-thumb-left post-list">
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger">{{ $error }}</div>
                                        @endforeach
                                        <div class="post-list__item">
                                            <div
                                                class="posts__item posts__item--card posts__item--category-1 card card--block">
                                                <figure class="posts__thumb">
                                                    <a href="../haber/{{$haber->slug}}.html">
                                                        <img alt=""
                                                             src="{{asset('storage/images/' . $haber->image)}}">
                                                    </a>
                                                </figure>
                                                <div class="posts__inner">
                                                    <div class="card__content">
                                                        <!--<div class="posts__cat">
                                                            <span class="label posts__cat-label">The Team</span>
                                                        </div>-->
                                                        <h6 class="posts__title">
                                                            <a href="../haber/{{$haber->slug}}.html">{{$haber->title}}</a>
                                                        </h6>
                                                        <time class="posts__date"
                                                              datetime="{{ $haber->tarih }}">{{ $haber->tarih }}</time>
                                                        <div class="posts__excerpt">
                                                            {{$haber->content}}
                                                        </div>
                                                        <!-- Edit and Delete Buttons -->
                                                        <div class="posts__actions">
                                                            <!-- Edit Button -->
                                                            <a href="{{ route('izmir.haberEdit', $haber->id) }}"
                                                               class="btn btn-warning btn-sm">
                                                                Edit
                                                            </a>
                                                            <!-- Delete Button -->
                                                            <form action="{{ route('izmir.haberDestroy', $haber->id) }}"
                                                                  method="POST" style="display: inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm"
                                                                        onclick="return confirm('Are you sure you want to delete this item?');">
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        @if(Auth::check() && Auth::user()->role === "admin")
                                            <div class="post-list__item m-3">

                                                <form action="{{route('izmir.haberUpdate', $haber)}}" method="POST"
                                                      enctype="multipart/form-data">
                                                    @method('PATCH')
                                                    @csrf
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2">Takım</label>
                                                        <div class="col-sm-12">
                                                            <select id="takim" name="takim"
                                                                    class="form-control"
                                                                    required=""
                                                                    value="{{ old('takim') }}"
                                                            >
                                                                <option value="">Seçiniz</option>

                                                                @foreach($allTeams as $team)
                                                                    <option
                                                                        value="{{$team->name}}" {{$team->id === $haber->takim_id ? 'selected' : ''}}>{{$team->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tarih">Tarih</label>
                                                        <input type="datetime-local" name="tarih" class="form-control"
                                                               id="tarih"
                                                               placeholder="Tarih"/>
                                                    </div>
                                                    <!--- --->

                                                    <div class="form-group">
                                                        <label for="image">Resim</label>
                                                        <input type="file" name="image" class="form-control"
                                                               id="image"
                                                               placeholder="Resim seciniz"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="title">Başlık</label>
                                                        <input type="text" value="{{$haber->title}}" name="title"
                                                               class="form-control" id="title"
                                                               placeholder="Başlık"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="content">İçerik</label>
                                                        <input type="text" name="content" class="form-control"
                                                               value="{{$haber->content}}"
                                                               id="content"
                                                               placeholder="İçerik"/>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Giriniz</button>
                                                </form>
                                            </div>
                                        @endif


                                    </div><!-- Posts List / End -->

                                    <!-- Post Pagination / End -->
                                    <!-- Content / End -->
                                    <!-- icerik -->
                                </div><!-- Sidebar -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Content / End -->

    </div>
    <!-- Core JS -->



    <!-- Mirrored from pasliga.com/izmir/haberler by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Dec 2024 10:46:00 GMT -->

@endsection
