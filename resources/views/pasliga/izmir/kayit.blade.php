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


            <div class="header-mobile clearfix" id="header-mobile">
                <div class="header-mobile__logo">
                    <a href="izmir.html"><img alt="Pasligaizmir" class="header-mobile__logo-img"
                                              src="assets/images/soccer/logo.png"
                                              srcset="/assets/images/soccer/logo@2x.png 2x"></a>
                </div>
                <div class="header-mobile__inner">
                    <a class="burger-menu-icon" id="header-mobile__toggle"><span class="burger-menu-icon__line"></span></a>
                    <span class="header-mobile__search-icon" id="header-mobile__search-icon"></span>
                </div>
            </div><!-- Header Desktop -->
            <div class="page-heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <h1 class="page-heading__title">izmir <span class="highlight">Kayıt ol</span></h1>
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
                                    <h4>Kayıt ol</h4>
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
                                          action="{{route('izmir.register')}}"
                                    >
                                        @csrf
                                        <div class="form-group">
                                            <label class="control-label col-sm-2">TC Kimlik No</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="tc_no" name="tc_no" class="form-control"
                                                       placeholder="TC Kimlik numaranız" required="" maxlength="11"
                                                       value="{{ '24977106770', old('tc_no') }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2">Ad</label>
                                            <div class="col-sm-12">
                                                <input type="text" id="first_name" name="first_name"
                                                       class="form-control"
                                                       placeholder="Adınız" required="" onblur="kCap(this);"
                                                       value="{{ 'Ardahan', old('first_name') }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2">Soyad</label>
                                            <div class="col-sm-12">
                                                <input type="text" id="last_name" name="last_name" class="form-control"
                                                       placeholder="Soyadınız" required="" onblur="kCap(this);"
                                                       value="{{ 'Ozduman', old('last_name') }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2">Eposta</label>
                                            <div class="col-sm-12">
                                                <input type="email" id="email" name="email" class="form-control"
                                                       placeholder="Eposta adresiniz" required=""
                                                       value="{{ 'ardahanoz@hotmail.com', old('email') }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2">Telefon</label>
                                            <div class="col-sm-12">
                                                <input type="number" id="phone" name="phone" class="form-control"
                                                       value="{{ '05525700853',old('number') }}"
                                                       placeholder="05000000000" required=""
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"
                                                       onKeyDown="if(this.value.length==11 && event.keyCode!=8) return false;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2">Doğum Tarihi</label>
                                            <div class="col-sm-12">
                                                <input type="date" id="birth_date" name="birth_date"
                                                       value="{{'21-04-1999' ,old('birth_date') }}"
                                                       class="form-control"
                                                       data-date-format="DD/MM/YYYY" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2">Şifre</label>
                                            <div class="col-sm-12">
                                                <input type="password" id="password" name="password"
                                                       class="form-control" value="{{ '@Rdaarda1', old('password') }}"
                                                       placeholder="Şifreniz" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2">Şifre (Tekrar)</label>
                                            <div class="col-sm-5">
                                                <input type="password" id="password_confirmation" name="password_confirmation"
                                                       class="form-control" value="{{ '@Rdaarda1', old('password_confirmation') }}"
                                                       placeholder="Şifrenizi tekrar yazınız" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2">Boy (cm)</label>
                                            <div class="col-sm-12">
                                                <select id="height" name="height" class="form-control" required=""
                                                        value="{{ old('height')}}">
                                                    <option value="">Seçiniz</option>

                                                    <option value="150" selected>150</option>

                                                    <option value="151">151</option>

                                                    <option value="152">152</option>

                                                    <option value="153">153</option>

                                                    <option value="154">154</option>

                                                    <option value="155">155</option>

                                                    <option value="156">156</option>

                                                    <option value="157">157</option>

                                                    <option value="158">158</option>

                                                    <option value="159">159</option>

                                                    <option value="160">160</option>

                                                    <option value="161">161</option>

                                                    <option value="162">162</option>

                                                    <option value="163">163</option>

                                                    <option value="164">164</option>

                                                    <option value="165">165</option>

                                                    <option value="166">166</option>

                                                    <option value="167">167</option>

                                                    <option value="168">168</option>

                                                    <option value="169">169</option>

                                                    <option value="170">170</option>

                                                    <option value="171">171</option>

                                                    <option value="172">172</option>

                                                    <option value="173">173</option>

                                                    <option value="174">174</option>

                                                    <option value="175">175</option>

                                                    <option value="176">176</option>

                                                    <option value="177">177</option>

                                                    <option value="178">178</option>

                                                    <option value="179">179</option>

                                                    <option value="180">180</option>

                                                    <option value="181">181</option>

                                                    <option value="182">182</option>

                                                    <option value="183">183</option>

                                                    <option value="184">184</option>

                                                    <option value="185">185</option>

                                                    <option value="186">186</option>

                                                    <option value="187">187</option>

                                                    <option value="188">188</option>

                                                    <option value="189">189</option>

                                                    <option value="190">190</option>

                                                    <option value="191">191</option>

                                                    <option value="192">192</option>

                                                    <option value="193">193</option>

                                                    <option value="194">194</option>

                                                    <option value="195">195</option>

                                                    <option value="196">196</option>

                                                    <option value="197">197</option>

                                                    <option value="198">198</option>

                                                    <option value="199">199</option>

                                                    <option value="200">200</option>

                                                    <option value="201">201</option>

                                                    <option value="202">202</option>

                                                    <option value="203">203</option>

                                                    <option value="204">204</option>

                                                    <option value="205">205</option>

                                                    <option value="206">206</option>

                                                    <option value="207">207</option>

                                                    <option value="208">208</option>

                                                    <option value="209">209</option>

                                                    <option value="210">210</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2">Kilo (kg)</label>
                                            <div class="col-sm-12">
                                                <select id="weight" name="weight" class="form-control" required=""
                                                        value="{{ old('weight') }}">
                                                    <option value="">Seçiniz</option>

                                                    <option value="55" selected>55</option>

                                                    <option value="56">56</option>

                                                    <option value="57">57</option>

                                                    <option value="58">58</option>

                                                    <option value="59">59</option>

                                                    <option value="60">60</option>

                                                    <option value="61">61</option>

                                                    <option value="62">62</option>

                                                    <option value="63">63</option>

                                                    <option value="64">64</option>

                                                    <option value="65">65</option>

                                                    <option value="66">66</option>

                                                    <option value="67">67</option>

                                                    <option value="68">68</option>

                                                    <option value="69">69</option>

                                                    <option value="70">70</option>

                                                    <option value="71">71</option>

                                                    <option value="72">72</option>

                                                    <option value="73">73</option>

                                                    <option value="74">74</option>

                                                    <option value="75">75</option>

                                                    <option value="76">76</option>

                                                    <option value="77">77</option>

                                                    <option value="78">78</option>

                                                    <option value="79">79</option>

                                                    <option value="80">80</option>

                                                    <option value="81">81</option>

                                                    <option value="82">82</option>

                                                    <option value="83">83</option>

                                                    <option value="84">84</option>

                                                    <option value="85">85</option>

                                                    <option value="86">86</option>

                                                    <option value="87">87</option>

                                                    <option value="88">88</option>

                                                    <option value="89">89</option>

                                                    <option value="90">90</option>

                                                    <option value="91">91</option>

                                                    <option value="92">92</option>

                                                    <option value="93">93</option>

                                                    <option value="94">94</option>

                                                    <option value="95">95</option>

                                                    <option value="96">96</option>

                                                    <option value="97">97</option>

                                                    <option value="98">98</option>

                                                    <option value="99">99</option>

                                                    <option value="100">100</option>

                                                    <option value="101">101</option>

                                                    <option value="102">102</option>

                                                    <option value="103">103</option>

                                                    <option value="104">104</option>

                                                    <option value="105">105</option>

                                                    <option value="106">106</option>

                                                    <option value="107">107</option>

                                                    <option value="108">108</option>

                                                    <option value="109">109</option>

                                                    <option value="110">110</option>

                                                    <option value="111">111</option>

                                                    <option value="112">112</option>

                                                    <option value="113">113</option>

                                                    <option value="114">114</option>

                                                    <option value="115">115</option>

                                                    <option value="116">116</option>

                                                    <option value="117">117</option>

                                                    <option value="118">118</option>

                                                    <option value="119">119</option>

                                                    <option value="120">120</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2">Ayakkabı</label>
                                            <div class="col-sm-12">
                                                <select id="shoe_number" name="shoe_number" class="form-control"
                                                        required="" value="{{ old('shoe_number') }}">
                                                    <option value="">Seçiniz</option>

                                                    <option value="37" selected>37</option>

                                                    <option value="38">38</option>

                                                    <option value="39">39</option>

                                                    <option value="40">40</option>

                                                    <option value="41">41</option>

                                                    <option value="42">42</option>

                                                    <option value="43">43</option>

                                                    <option value="44">44</option>

                                                    <option value="45">45</option>

                                                    <option value="46">46</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2">Mevkii</label>
                                            <div class="col-sm-12">
                                                <select id="position" name="position" class="form-control" required=""
                                                        value="{{ old('positon') }}">
                                                    <option value="">Seçiniz</option>

                                                    <option value="1" selected>Kaleci</option>

                                                    <option value="2">Defans</option>

                                                    <option value="3">Orta Saha</option>

                                                    <option value="4">Forvet</option>

                                                    <option value="5">Belirtilmemiş</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2">Sırt Numarası</label>
                                            <div class="col-sm-12">
                                                <select id="back_number" name="back_number" class="form-control"
                                                        value="{{ old('back_number') }}">
                                                    <option value="0" selected>Belirtilmedi</option>

                                                    <option value="1" selected>1</option>

                                                    <option value="2">2</option>

                                                    <option value="3">3</option>

                                                    <option value="4">4</option>

                                                    <option value="5">5</option>

                                                    <option value="6">6</option>

                                                    <option value="7">7</option>

                                                    <option value="8">8</option>

                                                    <option value="9">9</option>

                                                    <option value="10">10</option>

                                                    <option value="11">11</option>

                                                    <option value="12">12</option>

                                                    <option value="13">13</option>

                                                    <option value="14">14</option>

                                                    <option value="15">15</option>

                                                    <option value="16">16</option>

                                                    <option value="17">17</option>

                                                    <option value="18">18</option>

                                                    <option value="19">19</option>

                                                    <option value="20">20</option>

                                                    <option value="21">21</option>

                                                    <option value="22">22</option>

                                                    <option value="23">23</option>

                                                    <option value="24">24</option>

                                                    <option value="25">25</option>

                                                    <option value="26">26</option>

                                                    <option value="27">27</option>

                                                    <option value="28">28</option>

                                                    <option value="29">29</option>

                                                    <option value="30">30</option>

                                                    <option value="31">31</option>

                                                    <option value="32">32</option>

                                                    <option value="33">33</option>

                                                    <option value="34">34</option>

                                                    <option value="35">35</option>

                                                    <option value="36">36</option>

                                                    <option value="37">37</option>

                                                    <option value="38">38</option>

                                                    <option value="39">39</option>

                                                    <option value="40">40</option>

                                                    <option value="41">41</option>

                                                    <option value="42">42</option>

                                                    <option value="43">43</option>

                                                    <option value="44">44</option>

                                                    <option value="45">45</option>

                                                    <option value="46">46</option>

                                                    <option value="47">47</option>

                                                    <option value="48">48</option>

                                                    <option value="49">49</option>

                                                    <option value="50">50</option>

                                                    <option value="51">51</option>

                                                    <option value="52">52</option>

                                                    <option value="53">53</option>

                                                    <option value="54">54</option>

                                                    <option value="55">55</option>

                                                    <option value="56">56</option>

                                                    <option value="57">57</option>

                                                    <option value="58">58</option>

                                                    <option value="59">59</option>

                                                    <option value="60">60</option>

                                                    <option value="61">61</option>

                                                    <option value="62">62</option>

                                                    <option value="63">63</option>

                                                    <option value="64">64</option>

                                                    <option value="65">65</option>

                                                    <option value="66">66</option>

                                                    <option value="67">67</option>

                                                    <option value="68">68</option>

                                                    <option value="69">69</option>

                                                    <option value="70">70</option>

                                                    <option value="71">71</option>

                                                    <option value="72">72</option>

                                                    <option value="73">73</option>

                                                    <option value="74">74</option>

                                                    <option value="75">75</option>

                                                    <option value="76">76</option>

                                                    <option value="77">77</option>

                                                    <option value="78">78</option>

                                                    <option value="79">79</option>

                                                    <option value="80">80</option>

                                                    <option value="81">81</option>

                                                    <option value="82">82</option>

                                                    <option value="83">83</option>

                                                    <option value="84">84</option>

                                                    <option value="85">85</option>

                                                    <option value="86">86</option>

                                                    <option value="87">87</option>

                                                    <option value="88">88</option>

                                                    <option value="89">89</option>

                                                    <option value="90">90</option>

                                                    <option value="91">91</option>

                                                    <option value="92">92</option>

                                                    <option value="93">93</option>

                                                    <option value="94">94</option>

                                                    <option value="95">95</option>

                                                    <option value="96">96</option>

                                                    <option value="97">97</option>

                                                    <option value="98">98</option>

                                                    <option value="99">99</option>

                                                    <option value="100">100</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2"></label>
                                            <div class="col-sm-12">
                                                <div id="sozlesme">
                                                    <p style=' text-align:justify;'>
                                                    <p><span>İşbu sözleşme TOPMOND EVENTS Organizasyon firmasının faaliyetlerinden olan Pasliga organizasyonuna katılım şartlarını düzenlemek amacı ile hazırlanmıştır.</span>
                                                    </p>
                                                    <p><b><span>TANIMLAR:</span></b></p>
                                                    <p><b><span>Şirket:</span></b> <span>TOPMOND EVENTS Organizasyon isimli firma işbu sözleşme kapsamında bu isim ile anılacaktır. <b>Üye:</b> Pasliga ligine www.pasliga.com adresi üzerinden kayıt formu doldurarak kayıt olan kişiler işbu sözleşme kapsamında bu isimle anılacaktır.</span>
                                                    </p>
                                                    <p><b><span>Lig:</span></b> <span>İşbu sözleşme kapsamında PASLİGA bu isim ile anılacaktır.</span>
                                                    </p>
                                                    <p><b><span>Hizmet:</span></b> <span>İşbu sözleşme kapsamında sağlanacak; bir spor tesisinin bir bölümünün belirli süreliğine üye takım/takımlara tahsis edilmesi, müsabakanın sonrasında gerçekleştirilen basın toplantısının video kaydına alınması ve hazırlanması/ müsabaka esnasında fotoğraf çekilmesi/müsabakanın video kaydının tutulması/ müsabakanın özetinin video haline getirilmesi/ müsabakanın istatistiksel verilerinin toplanması ve hazırlanması/ bu hizmetlerin internet üzerinden müsabakaya iştirak eden takımların oyuncularına ulaştırılması hizmetlerinin tamamı bu isim altında anılacaktır.</span>
                                                    </p>
                                                    <p><b><span>İnternet sitesi:</span></b> <span>İşbu sözleşme kapsamında www.pasliga.com adresi bu isim ile anılacaktır.</span>
                                                    </p>
                                                    <p><b><span>Hizmet Bedeli:</span></b> <span>Sözleşme kapsamında sağlanacak hizmetlerin karşılığı olarak her bir müsabaka için her bir takım tarafından ödeneceği kararlaştırılan bedel, işbu sözleşme metninde bu isimle anılacaktır. Maç alımının takım kaptanı tarafından yazılı ve sözlü onayından sonra maç iptalleri ancak maça 48 saat kala ise iptal edilecektir. Eğer maç alındıktan sonra iptal edildiyse, bu sözleşmeyi onaylayan takım sorumlusu iptal edilen maçın zararlarını organizasyona ödemeyi peşinen kabul ve taahhüt eder.</span>
                                                    </p>
                                                    <p><b><span>Kural Kitapçığı:</span></b> <span>İşbu sözleşme kapsamında gerçekleştirilecek müsabakanın kurallarının, disiplin cezası gerektiren eylemlerin ve sonuçlarının düzenlendiği kitapçık işbu sözleşme kapsamında bu ad altında anılacaktır.</span>
                                                    </p>
                                                    <p><b><span>Merkez Disiplin Kurulu:</span></b> <span>Kural kitapçığında düzenlenen hususlara ve spor ahlakına aykırı eylemler gerçekleştiren üye ya da üyelere uygulanacak yaptırımlara değerlendiren kurul bu ad altında anılacaktır.</span>
                                                    </p>
                                                    <p><b><span>Organizasyon Komitesi:</span></b> <span>Sözleşme kapsamında sunulacağı taahhüt edilen hizmetin planlanması sağlayan komite bu ad altında anılacaktır.</span>
                                                    </p>
                                                    <p><b><span>1. GENEL HÜKÜMLER</span></b></p>
                                                    <p><b><span>1.1.</span></b> <span>İnternet Sitesine girerek Pasligaya üye olan herkes işbu sözleşme ile belirlenen koşulları kabul etmekle yükümlüdür.</span>
                                                    </p>
                                                    <p><b><span>1.2.</span></b> <span>Pasliga tarafından sağlanan hizmet gereği; hizmeti alan tüm kişiler kişisel verilerin korunması kanunu kapsamında hizmetin nevi gereği bildirdiği bilgilerin saklanmasına, işlenmesine ve yayımına işbu sözleşmenin imzalanması ile onay vermiş olmaktadır. Sunulan hizmet gereği elde edilen verilen neler olduğu ve kullanım amaçları her bir hizmet alana aydınlatılmış bilgi olarak ayrı ayrı bildirilmiştir. Hizmet alanlar işbu sözleşmenin imzalanması ile bu duruma muvafakat ederler.</span>
                                                    </p>
                                                    <p>
                                                        <b><span>2.LİGE ÜYE OLUP AKTİF KATILIM SAĞLAYABİLECEK KİŞİLER</span></b>
                                                    </p>
                                                    <p><b><span>2.1.</span></b><span>Pasligaya üye olabilecek ve aktif olarak müsabakalara katılabilecek kişiler 16 (onaltı) yaşını doldurmuş olmalıdır.</span>
                                                    </p>
                                                    <p><b><span>2.2.</span></b> <span>16 (onaltı) yaş altı kişiler lige üye olamazlar ve müsabakalara aktif katılım sağlayamazlar. Bu maddeye aykırılık oluşturacak şekilde Pasliga Organizasyon Komitesini aldatmaya yönelik hileli davranışlarla lige üye olan, müsabakalara aktif olarak katılan kişi ya da kişilerin varlığı tespit edildiği takdirde kişiler hakkında üyelikten çıkarma ve ligden süresiz olarak men edilme yaptırımları uygulanacaktır. Üyeler, böyle bir duruma sebebiyet vermeleri durumunda şirketin ve ligin herhangi bir sorumluluğu olmadığını kabul ve beyan ederler. Anılan fiillerden birini ya da birkaçını gerçekleştiren kişi ya da kişiler hakkında karar vermeye yetkili kurul, Merkez Disiplin Kuruludur. Spor ahlakı ile uyuşmayan ve cezai yaptırıma bağlanan diğer fiillerden dolayı yine kurulun ceza tayin hakkı saklıdır.</span>
                                                    </p>
                                                    <p><b><span>2.3.</span></b> <span>İşbu sözleşmeyi kabul ettiğini belirten kısmı onaylayan ve üyelik işlemini tamamlayan herkes futbol müsabakalarına katılmaya engel sağlık sorununun olmadığını beyan etmiş olur. Spor yapmalarına engel rahatsızlıkları bulunanlar organizasyona katılmamalıdırlar. Müsabakaya katılmasına engel sağlık sorunu olan kişilerin uğrayacakları zarardan şirketin herhangi bir sorumluluğu bulunmamaktadır.</span>
                                                    </p>
                                                    <p><b><span>2.4.</span></b> <span>50 (Elli) yaşından büyük üyelerin müsabakalara aktif olarak katılabilmeleri için sağlık problemleri bulunmadığına ilişkin sağlık raporunu şirkete ibraz etmeleri gerekmektedir. Şirket tarafından talep edildiği takdirde İzin ve rapor getiremeyecek kişiler lige üye olamazlar. Bu maddeye aykırılık oluşturacak şekilde, Pasliga Organizasyon Komitesini aldatmaya yönelik hileli davranışlarla Lige üye olan, müsabakalara aktif olarak katılan kişi ya da kişilerin varlığı tespit edildiği takdirde kişiler hakkında üyelikten çıkarma ve ligden süresiz olarak men edilme yaptırımları uygulanacaktır. Üyeler böyle bir duruma sebebiyet vermeleri durumunda şirketin ve ligin herhangi bir sorumluluğu olmadığını kabul ve beyan ederler. Anılan fiillerden birini ya da birkaçını gerçekleştiren kişi ya da kişiler hakkında karar vermeye yetkili kurul, Merkez Disiplin Kuruludur. Spor ahlakı ile uyuşmayan ve cezai yaptırıma bağlanan diğer fiillerden dolayı yine kurulun ceza tayin hakkı saklıdır.</span>
                                                    </p>
                                                    <p><b><span>3. ŞİRKETİN SAĞLAYACAĞI HİZMET</span></b></p>
                                                    <p><b><span>3.1.</span></b> <span>Şirketin sağlayacağı hizmet sınırlı sayıda olup işbu sözleşmenin <b>3.2</b>. Sayılı maddesinde tanımlanan hizmetleri kapsamaktadır. Şirket, aşağıda sayılan hizmetler haricinde bir hizmet sunmak yada sağlamak zorunda değildir.</span>
                                                    </p>
                                                    <p><b><span>3.2.</span></b><span>İşbu sözleşme kapsamında lig üzerinden, şirket aracılığı ile planlanan futbol müsabakalarında bir spor tesisinin bir bölümünün belirli süreliğine tarafınıza/takımınıza tahsis edilmesi, müsabakanın sonrasında gerçekleştirilen basın toplantısının video kaydına alınması ve hazırlanması/ müsabaka esnasında fotoğraf çekilmesi/müsabakanın video kaydının tutulması/ müsabakanın özetinin video haline getirilmesi/ müsabakanın istatistiksel verilerinin toplanması ve hazırlanması/ bu kayıt ve görüntülerin internet sitesi üzerinden ve/veya video izleme ve barındırma siteleri üzerinden müsabakaya iştirak eden takımların oyuncularına ulaştırılması ve müsabaka dışı diğer üyelerin de bilgisine sunulmasını kapsamaktadır.</span>
                                                    </p>
                                                    <p><b><span>3.3.</span></b><span>Lige üye olan ve müsabakalara aktif olarak katılan üyelere güvenlik konusunda bir hizmet sağlanmayacaktır. Yaralanma, taraftarlar arasında çıkan kavga, ölüm, taraflar arasında çıkankavga gibi hukuki veya cezai sonuçları bulunan hallerde şirketin herhangi bir sorumluluğu yoktur. Böyle bir durumun varlığı halinde TOPMOND EVENTS Organizasyonun hiçbir hukuki ve cezai sorumluluğu yoktur.Güvenlik konusunda sorumluluk tamamen takım kaptanlarına ait olacaktır ve sözleşmeyi kabul eden her üyenin bu konuda muvafakati vardır. TOPMOND EVENTS Organizasyonun uğranılan zararlar konusunda rücu hakkı saklıdır.</span>
                                                    </p>
                                                    <p><b><span>3.4.</span></b> <span>Lige üye olan ve müsabakalara aktif olarak katılan üyelere sağlık konusunda bir hizmet sağlanmayacaktır. Saha içinde oluşacak sakatlanma, ölüm, yaralanma ve benzeri konularda şirketin herhangi bir sorumluluğu yoktur. Bu sözleşmeyi onaylayan her bir üye bu maddeyi kabul etmiş sayılmaktadır. Organizasyon Komitesi; sağlıkla ilgili konularda, tedbir alınmaması veya öngörülemeyen nedenlerden ötürü takımların ve oyuncuların uğrayabileceği maddi ve manevi zararlardan sorumlu tutulamaz.</span>
                                                    </p>
                                                    <p><b><span>3.5.</span></b> <span>İşbu sözleşme kapsamında sunulacak hizmet için müsabakaya katılan takımlar tarafından şirkete ödeme yapılacaktır. Üyeler tarafından ödenecek hizmet bedeli sürekli olmayıp yalnızca her bir müsabaka için ödenecektir.</span>
                                                    </p>
                                                    <p><b><span>3.6.</span></b><span>İşbu sözleşme kapsamında sunulacak hizmet sırasında mücbir sebeplerin varlığı ve devlet idaresince koyulmuş (sokağa çıkma yasağı, organizasyon yapma yasağı, spor tesislerinin kapatılması gerektiği vb.) gibi yasaklı hallerin ihlali durumunda TOPMOND EVENTS Organizasyon firmasına kesilecek olan adli ve idari para cezasını bu yasaklı eylemi ile ceza kesilmesine sebebiyet veren taraf ödeyecektir. Sözleşmeyi kabul eden her üyenin buna muvafakati vardır. TOPMOND EVENTS Organizasyona kesilen cezaları kendisinin ödemesi halinde ihlali ile ceza kesilmesine sebebiyet verene karşı rücu etme hakkı saklıdır.</span>
                                                    </p>
                                                    <p><b><span>4. HİZMETİN ÜYELERE ULAŞTIRILMASI VE REKLAM</span></b>
                                                    </p>
                                                    <p><b><span>4.1.</span></b> <span>İşbu sözleşme kapsamında sağlanan hizmetlerden birinin ya da bir kaçının internet sitesinde ya da video izleme ve barındırma sitelerinde yer almasına, fotoğrafların ya da verilerin afiş, broşür, pano ve benzeri reklam ürünleri üzerinde kullanılmasına üyelerin muvafakati vardır.</span>
                                                    </p>
                                                    <p><b><span>4.2.</span></b> <span>İşbu sözleşmenin 4. Maddesinde tanımlanan hizmetlerin bir kısmının ya da tamamının internet sitesinde ve/veya video izleme ve barındırma sitelerinde yayınlanmasına muvafakat eden üyeler bu verilerin, fotoğrafların ve video kamera kayıtlarının arşivden silinmesini, video izleme ve barındırma sitelerinden kaldırılmasını talep edemezler.</span>
                                                    </p>
                                                    <p><b><span>5. DİĞER HÜKÜMLER</span></b></p>
                                                    <p><b><span>5.1.</span></b> <span>Organizasyon komitesi gerekli gördüğü takdirde ligin faaliyeti kapsamında müsabakaların gerçekleştirileceği tesisleri, müsabaka tarih ve saatlerini üyelerin onayına bağlı olmaksızın değiştirebilir. Böyle bir durum gerçekleştiği takdirde müsabakanın taraf takımlarının kaptanları mümkün olan en kısa sürede bilgilendirilecektir.</span>
                                                    </p>
                                                    <p><b><span>5.2.</span></b> <span>Lig sonucunda hangi dereceye sahip takımların başarılı olacağı ve başarılı olan takımlara hangi ödüllerin takdim edileceği şirket merkezinde faaliyetine devam eden Pasliga Organizasyon Komitesi tarafından açılış dönemleri başlangıcında açıklanacaktır. Açıklanan ödüller ile ilgili Pasliga Organizasyon Komitesi değişiklik yapma ve yaptırma hakkı saklıdır. Pasliga ya katılan tüm takımlar TOPMOND EVENTS Pasliga Kural Talimatını, kuralları ve detayları okuyup kabul etmiş sayılır.</span>
                                                    </p>
                                                    <p><b><span>5.3.</span></b> <span>Takım sorumlusu tarafından onaylanan maçlar sisteme girildikten sonra iptal edilemez. Sahaya gelinmemesi durumunda takım sorumlusu kimse organizasyon zararını karşılamakla yükümlüdür ve bunu üye olurken peşinen kabul eder.</span>
                                                    </p>
                                                    <p><b><span>6. KVKK (KİŞİSEL VERİLERİN KORUNMASI Kanunu) AYDINLATMA METNİ</span></b>
                                                    </p>
                                                    <p><b><span>6.1.Tanımlar</span></b></p>
                                                    <p><span>İşbu aydınlatma metninde geçen;</span></p>
                                                    <p><b><span>Kişisel Veri:</span></b> <span>Kimliği belirli veya belirlenebilir gerçek kişiye ilişkin her türlü bilgiyi,</span>
                                                    </p>
                                                    <p><b><span>Kişisel Verilerin Korunması Kanunu (KVKK):</span></b>
                                                        <span>7 Nisan 2016 tarihinde Resmi Gazete de yayınlanarak yürürlüğe giren 6698 sayılı Kişisel Verilerin Korunması Kanununu,</span>
                                                    </p>
                                                    <p><b><span>TOPMOND EVENTS Organizasyon:</span></b><span>XXXX adresindeki TOPMOND EVENTS Organizasyon firmasını,</span>
                                                    </p>
                                                    <p><b><span>Veri İşleyen:</span></b> <span>Veri sorumlusunun verdiği yetkiye dayanarak onun adına Kişisel Verileri işleyen gerçek veya tüzel kişiyi,</span>
                                                    </p>
                                                    <p><b><span>Veri Sorumlusu:</span></b> <span>Kişisel Verilerin işleme amaçlarını ve vasıtalarını belirleyen, veri kayıt sisteminin kurulmasından ve yönetilmesinden sorumlu olan gerçek veya tüzel kişiyi, ifade eder.</span>
                                                    </p>
                                                    <p><b><span>6.2. Veri Sorumlusu</span></b></p>
                                                    <p><span>KVKK uyarınca muhatap, üye,</span> <span>olan Pasliga organizasyonuna katılım</span>
                                                        <span>amacıyla oluşturduğunuz üye kayıt formunda paylaştığınız kişisel verileriniz; veri sorumlusu olarak belirlenen</span>
                                                        <span>TOPMOND EVENTS Organizasyon</span> <span>tüzel kişiliği tarafından aşağıda belirtilen kapsamda değerlendirilecektir.</span>
                                                    </p>
                                                    <p><b><span>6.3. Kişisel Verilerin İşlenme Amacı</span></b></p>
                                                    <p>
                                                        <span>KVKKnın 4. 5. ve 6. maddeleri uyarınca kişisel verileriniz;</span>
                                                    </p>
                                                    <p><span> Hukuka ve dürüstlük kurallarına uygun</span></p>
                                                    <p><span> Doğru ve gerektiğinde güncel</span></p>
                                                    <p><span> Belirli, açık ve meşru amaçlar için</span></p>
                                                    <p><span> İşlendikleri amaçla bağlantılı, sınırlı ve ölçülü</span>
                                                    </p>
                                                    <p><span> İlgili mevzuatta öngörülen veya işlendikleri amaç için gerekli olan süre kadar muhafaza edilme</span>
                                                    </p>
                                                    <p><span>Kurallarına uygun bir şekilde TOPMOND EVENTS Organizasyonun aşağıda yer alan faaliyetleri ile bağlantılı olacak şekilde işlenecektir.</span>
                                                    </p>
                                                    <p><span>TOPMOND EVENTS Organizasyonun faaliyetleri;</span></p>
                                                    <p>
                                                        <span>·<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span>
                                                        <span>Planlanan futbol müsabakalarında bir spor tesisinin bir bölümünün belirli süreliğine tarafınıza/takımınıza tahsis edilmesi,</span>
                                                    </p>
                                                    <p>
                                                        <span>·<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span>
                                                        <span>Müsabakanın sonrasında gerçekleştirilen basın toplantısının video kaydına alınması ve hazırlanması,</span>
                                                    </p>
                                                    <p>
                                                        <span>·<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span>
                                                        <span>Müsabaka esnasında fotoğraf çekilmesi,</span></p>
                                                    <p>
                                                        <span>·<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span>
                                                        <span>Müsabakanın video kaydının tutulması,</span></p>
                                                    <p>
                                                        <span>·<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span>
                                                        <span>Müsabakanın özetinin video haline getirilmesi,</span></p>
                                                    <p>
                                                        <span>·<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span>
                                                        <span>Müsabakanın istatistiksel verilerinin toplanması ve hazırlanması,</span>
                                                    </p>
                                                    <p>
                                                        <span>·<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span>
                                                        <span>Bu kayıt ve görüntülerin internet sitesi üzerinden ve/veya video izleme ve barındırma siteleri üzerinden müsabakaya iştirak eden takımların oyuncularına ulaştırılması ve müsabaka dışı diğer üyelerin de bilgisine sunulması.</span>
                                                    </p>
                                                    <p><b><span>6.4. Kişisel Verilerin Aktarımı</span></b></p>
                                                    <p><span>KVKKnın 8. ve 9. maddeleri uyarınca kişisel verileriniz yukarıda sayılan amaçlar dâhilinde,</span>
                                                        <span>TOPMOND EVENTS Organizasyonun</span> <span>faaliyetlerinin sürdürülebilmesi için Kişisel Veri işleme şartları ve amaçları çerçevesinde gerekli görülen üçüncü kişilere (program ortağı, işbirliği yapılan kurum, üye,</span>
                                                        <span>TOPMOND EVENTS Organizasyon</span> <span>yönetimi/güvenlik birimi, hukuken yetkili kamu kurumu ve kuruluşları, hukuken yetkili özel hukuk kişilerine aktarılabilecektir.</span>
                                                    </p>
                                                    <p>
                                                        <b><span>6.5. Kişisel Verilerin Toplanma Yöntemi ve Hukuki Sebebi</span></b>
                                                    </p>
                                                    <p>
                                                        <span>Kişisel verileriniz, TOPMOND EVENTS Organizasyontarafından</span>
                                                    </p>
                                                    <p>
                                                        <span><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span>
                                                        <span>Üyelik işlemleri</span></p>
                                                    <p>
                                                        <span><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span>
                                                        <span>Xxxx</span></p>
                                                    <p>
                                                        <span><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span>
                                                        <span>Xxxxx</span></p>
                                                    <p><span>Gibi kanallarla ve farklı hukuki sebeplere dayanarak TOPMOND EVENTS Organizasyon</span>
                                                        <span>un</span> <span>faaliyetlerini sürdürülebilmesi için KVKK tarafından öngörülen temel ilkelere uygun olarak, KVKKnın 5. ve 6. maddelerinde belirtilen kişisel veri işleme şartları ve amaçları kapsamında işbu Aydınlatma Metninde belirtilen amaçlarla da toplanabilmekte, işlenebilmekte ve aktarılabilmektedir.</span>
                                                    </p>
                                                    <p><b><span>6.6. Kişisel Veri Sahibinin Hakları</span></b></p>
                                                    <p><span>KVKKnın 11. maddesi uyarınca herkes, veri sorumlusuna başvurarak kendisiyle ilgili;</span>
                                                    </p>
                                                    <p><b><span>a)</span></b> <span>Kişisel verilerinin işlenip işlenmediğini öğrenme,</span>
                                                    </p>
                                                    <p><b><span>b)</span></b> <span>Kişisel verileri işlenmişse buna ilişkin bilgi talep etme,</span>
                                                    </p>
                                                    <p><b><span>c)</span></b> <span>Kişisel verilerin işlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını öğrenme,</span>
                                                    </p>
                                                    <p><b><span>ç)</span></b> <span>Yurt içinde veya yurt dışında kişisel verilerin aktarıldığı üçüncü kişileri bilme,</span>
                                                    </p>
                                                    <p><b><span>d)</span></b> <span>Kişisel verilerin eksik veya yanlış işlenmiş olması hâlinde bunların düzeltilmesini isteme,</span>
                                                    </p>
                                                    <p><b><span>e)</span></b> <span>KVKK 7. maddede öngörülen şartlar çerçevesinde kişisel verilerin silinmesini veya yok edilmesini isteme,</span>
                                                    </p>
                                                    <p><b><span>f)</span></b> <span>(d) ve (e) bentleri uyarınca yapılan işlemlerin, kişisel verilerin aktarıldığı üçüncü kişilere bildirilmesini isteme,</span>
                                                    </p>
                                                    <p><b><span>g)</span></b> <span>İşlenen verilerin münhasıran otomatik sistemler vasıtasıyla analiz edilmesi suretiyle kişinin kendisi aleyhine bir sonucun ortaya çıkmasına itiraz etme,</span>
                                                    </p>
                                                    <p><b><span>ğ)</span></b> <span>Kişisel verilerin kanuna aykırı olarak işlenmesi sebebiyle zarara uğraması hâlinde zararın giderilmesini talep etme, haklarına sahiptir.</span>
                                                    </p>
                                                    <p><b><span>6.7.</span></b><span>Yukarıda belirtilen haklarınız ile ilgili</span>
                                                        <span>TOPMOND EVENTS Organizasyon</span><span>a yazılı olarak başvurmanız halinde, talebinizin niteliğine göre en geç 30 (otuz) gün içerisinde ücretsiz olarak yanıt verilecektir.</span>
                                                    </p>
                                                    <p><span>İşbu sözleşme onay butonuna basılması halinde imzalanmış sayılacaktır. Hizmet alıcıları tarafından talep edilmesi halinde ıslak imzalı sözleşme yapılacaktır. Sözleşme; elektronik onay ile yürürlüğe gireceği için tüm hukuki ve cezai süreçler de sözleşmenin elektronik onaylanması ile uygulamaya konulacaktır.</span>
                                                    </p>
                                                    <p><b><span>7.SPORDA ŞİDDET YASASI</span></b></p>
                                                    <p><span>5149 Sayılı&nbsp;<b>Spor</b>&nbsp;Müsabakalarında&nbsp;<b>Şiddet</b>&nbsp;ve Düzensizliğin Önlenmesine Dair Kanun ile sahada görev alan hakem memur statüsünde gözükmektedir. Sahada spora katkıda bulunan koordinatör , kameraman , hakem , gözlemci , saha komiseri gibi çalışanlar da bu kanun içerisinde bulunmaktadır. Dolayısı ile bu kanunu aykırı olarak gerçekleşecek olan her eylemde , eylemi gerçekleştiren oyuncu , takım , taraftar sorumlu olacak ve emniyet&nbsp; kolluk kuvvetleri tarafından yapılacak olan yasaya aykırılıktan sorumlu tutulacaktır.</span>
                                                    </p>
                                                    </p>
                                                </div>
                                                <input type="checkbox" class="checkbox" id="agree" name="agree"
                                                       style="height:14px!important;float:left; width:20px!important; margin-top:5px;"
                                                       data-val="true" and value="true"
                                                       required=""><label for="agree">Üyelik sözleşmesini okudum ve
                                                    onaylıyorum.</label><span style="color:#f00;"><i><br> ( Sözleşmeyi onaylamadan kayıt olamazsınız )</i></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2"></label>
                                            <div class="col-sm-12">
                                                <div id="tcksonuc" style="color:#f00; font-weight:bold;"></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button type="submit"
                                                        class="btn btn-primary-inverse btn-lg btn-block">Kayıt Ol</button>
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
