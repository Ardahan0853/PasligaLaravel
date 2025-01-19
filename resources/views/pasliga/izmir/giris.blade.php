@extends('layouts.main')

@section('title', 'Izmir Page')

@section('content')

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9JN8QRGJYC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-9JN8QRGJYC');
    </script>
    <style>
        .numberLine {
            justify-content: center;
            align-items: center;
            border-radius: 100%;
            text-align: center !important;
            margin: 12px 0px 0px 16px;
            padding: unset !important;
            display: flex;
            max-height: 30px;
            max-width: 30px;
            font-weight: bold;
            color: #fff !important;
            line-height: 22px !important;
        }

        .pGreen {
            background: #2cbb8f !important;
            border: 3px solid #c5e3d9 !important;
        }

        .pRed {
            background: #bb2c2c !important;
            border: 3px solid #e3c5c5 !important;
        }

        .pBlack {
            background: #000 !important;
            border: 3px solid #cecece !important;
        }

        .widget-standings .table-standings > tbody > tr > td:first-child {
            padding: 0px !important;
            vertical-align: baseline;
            text-align: center;
        }

        @media (max-width: 479px) {
            .numberLine {
                margin: 4px 4px 0px 8px !important;
            }
        }

        #championshiprates tbody > tr > td:first-child > .team-meta:before {
            padding-left: 12px;
        }

        .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            background-color: aquamarine !important;
        }

        .stateHighlight {
            color: #fff !important;
            background-color: rgba(255, 255, 255, 0.3);
            padding: 6px;
        }

        .oldSite {
            color: #fff !important;
            background-color: rgba(255, 255, 255, 0.3);
            padding: 6px;
        }

        .widget-tabbed__tabs {
            margin-top: 10px !important;
        }

        a.btn.btn-danger.btn-sm.canlisonuc {
            padding: 8px 24px !important;
        }


        li.info-block__item.info-block__item--contact-primary {
            margin-left: 0px !important;
        }

        @media (min-width: 992px) and (max-width: 1199px) {
            li.info-block__item.info-block__item--contact-primary {
                margin-left: 0px !important;
            }
        }

        @media (min-width: 992px) {
            li.info-block__item.info-block__item--contact-primary {
                padding-top: 10px;
                padding-bottom: 10px;
            }
        }

        @media (max-width: 991px) {
            .header__primary .info-block__item.info-block__item--contact-primary {
                margin-top: 10px;
                padding-left: 15px !important;
                padding-bottom: 10px !important;
            }

            .header__primary .info-block__item.info-block__item--contact-primary a {
                background-color: #f00 !important;
                color: #fff !important;
            }
        }


        div.cs-skin-border > span {
            color: #e12a4c;
        }

        div.cs-skin-border.cs-active > span {
            color: #e12a4c;
        }

        div.cs-skin-border .cs-options {
            color: rgba(49, 64, 75, .8);
        }

        .cs-select > span:after {
            speak: none;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            content: "";
            right: 23px;
            display: block;
            width: 12px;
            height: 8px;
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 6 4'%3E%3Cpath transform='translate(-586.156 -1047.28)' fill='red' d='M586.171,1048l0.708-.71,2.828,2.83-0.707.71Zm4.95-.71,0.707,0.71L589,1050.83l-0.707-.71Z'/%3E%3C/svg%3E");
            background-size: 12px 8px;
            background-repeat: no-repeat;
            background-position: 50%;
            transition: transform .2s ease
        }

        .white a {
            color: #fff !important;
        }

        .team-meta__logo {
            width: 35px !important;
            height: 35px !important;
        }

        img.fitLogo {
            width: 25px;
            margin-left: 5px;
        }
    </style>
    <script type="text/javascript" src="assets/js/ajax.js"></script>

    <style>
        .lead {
            color: #f00 !important;
            font-weight: bold;
        }

        #sozlesme {
            padding: 10px;
            height: 300px;
            width: 100%;
            border: 2px solid #000;
            overflow: auto;
        }

        #sozlesme p {
            margin-bottom: .25em;
        }

        #sozlesme h5 {
            margin-bottom: 0em;
        }
    </style>
    <div data-template="template-soccer">
        <div class="site-wrapper clearfix">
            <div class="site-overlay"></div>


            <div class="page-heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <h1 class="page-heading__title">izmir <span class="highlight">Giriş Yap</span></h1>
                        </div>
                    </div>
                </div>
            </div><!-- Page Heading / End -->
            <!-- Content -->
            <div class="site-content">
                <div class="container">
                    <div class="row">
                        <!-- Content
                ================================================== -->

                        <div class="col-md-12">
                            <!-- Register -->
                            <div class="card">
                                <div class="card__header">
                                    <h4>Giriş Yap</h4>
                                </div>
                                <div class="card__content">
                                    <!-- Register Form -->
                                    <div class="pb-8">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                    <form class="form-horizontal form-theme padding-top-mini" id="registerForm"
                                          name="registerForm" method="post"
                                          action="{{route('izmir.login')}}"
                                    >
                                        @csrf
                                        <div class="form-group">
                                            <label class="control-label col-sm-2">Eposta</label>
                                            <div class="col-sm-12">
                                                <input type="email" id="email" name="email" class="form-control"
                                                       placeholder="Eposta adresiniz" required=""
                                                       value="{{old('email') }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2">Şifre</label>
                                            <div class="col-sm-12">
                                                <input type="password" id="password" name="password"
                                                       class="form-control"
                                                       placeholder="Şifreniz" required="">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button type="submit"
                                                        class="btn btn-primary-inverse btn-lg btn-block">Giris Yap
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Register Form / End -->
                                </div>
                            </div><!-- Register / End -->
                        </div>
                    </div><!-- Content / End -->

                    <!-- icerik -->
                </div><!-- Sidebar -->
            </div>
        </div>
    </div><!-- Content / End -->
    <!-- Core JS -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery/jquery-migrate.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Template JS -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/jquery.nicescroll.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $("#sozlesme").niceScroll(); // First scrollable DIV
        });
    </script>
    </div>
@endsection
