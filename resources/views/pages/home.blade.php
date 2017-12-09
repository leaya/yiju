@extends('layouts.app')
@section('title', '首页')
@section('slider-css')

    <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{Storage::disk('qiniu')->url('include/rs-plugin/css/settings.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{Storage::disk('qiniu')->url('include/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{Storage::disk('qiniu')->url('include/rs-plugin/css/navigation.css')}}">
@endsection

@section('style-css')
    <style>

        .demos-filter {
            margin: 0;
            text-align: right;
        }

        .demos-filter li {
            list-style: none;
            margin: 10px 0px;
        }

        .demos-filter li a {
            display: block;
            border: 0;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #444;
        }

        .demos-filter li a:hover,
        .demos-filter li.activeFilter a { color: #1ABC9C; }

        @media (max-width: 991px) {
            .demos-filter { text-align: center; }

            .demos-filter li {
                float: left;
                width: 33.3%;
                padding: 0 20px;
            }
        }

        @media (max-width: 767px) {
            .demos-filter li { width: 50%; }
        }

        #rev_slider_15_1_wrapper .tp-loader.spinner3 { background-color: #333333 !important; }
        #rev_slider_15_1 .uranus.tparrows {
            width:50px;
            height:50px;
            background:rgba(255,255,255,0);
        }
        #rev_slider_15_1 .uranus.tparrows:before {
            width:50px;
            height:50px;
            line-height:50px;
            font-size:40px;
            transition:all 0.3s;
            -webkit-transition:all 0.3s;
        }
        #rev_slider_15_1 .uranus.tparrows:hover:before{opacity:0.75; }


    </style>
@endsection

@section('slider')
    <!-- Slider
    ============================================= -->
    <section id="slider" class="revslider-wrap clearfix">

        <div class="rev_slider_wrapper" style="background-color:#eef0f1;padding:0px;">
            <!-- START REVOLUTION SLIDER 5.3.1.6 fullscreen mode -->
            <div id="rev_slider_15_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.3.1.6">
                <ul>	<!-- SLIDE  -->
                    <li class="dark" data-index="rs-35" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="2000"  data-thumb="{{Storage::disk('qiniu')->url('include/rs-plugin/demos/assets/images/100x50_blur1.jpg')}}"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7" data-saveperformance="off"  data-title="One" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{Storage::disk('qiniu')->url('include/rs-plugin/demos/assets/images/snowscene1.jpg')}}"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="20000" data-ease="Linear.easeNone" data-scalestart="130" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="6" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <div id="rrzm_35" class="rev_row_zone rev_row_zone_middle" style="z-index: 6;">

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption  "
                                 id="slide-35-layer-14"
                                 data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"

                                 data-type="row"
                                 data-columnbreak="2"
                                 data-basealign="slide"
                                 data-responsive_offset="on"
                                 data-responsive="off"
                                 data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-margintop="[0,0,0,0]"
                                 data-marginright="[0,0,0,0]"
                                 data-marginbottom="[0,0,0,0]"
                                 data-marginleft="[0,0,0,0]"
                                 data-textAlign="['inherit','inherit','inherit','inherit']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[100,50,50,50]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[100,50,50,50]"

                                 style="z-index: 6; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);">
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption  "
                                     id="slide-35-layer-15"
                                     data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                     data-y="['top','top','top','top']" data-voffset="['100','100','100','100']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"

                                     data-type="column"
                                     data-responsive_offset="on"
                                     data-responsive="off"
                                     data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                     data-columnwidth="100%"
                                     data-margintop="[0,0,0,0]"
                                     data-marginright="[0,0,0,0]"
                                     data-marginbottom="[0,0,0,0]"
                                     data-marginleft="[0,0,0,0]"
                                     data-textAlign="['center','center','center','center']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"

                                     style="z-index: 7; width: 100%;">
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption   tp-resizeme"
                                         id="slide-35-layer-1"
                                         data-x="['left','left','center','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['top','top','top','top']" data-voffset="['0','0','230','110']"
                                         data-fontsize="['110','90','100','70']"
                                         data-lineheight="['100','90','100','70']"
                                         data-width="['none','none','697','399']"
                                         data-height="none"
                                         data-whitespace="['nowrap','nowrap','normal','normal']"

                                         data-type="text"
                                         data-basealign="slide"
                                         data-responsive_offset="on"

                                         data-frames='[{"delay":"+290","split":"chars","splitdelay":0.05,"speed":750,"frame":"0","from":"y:40px;sX:1.5;sY:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"sX:1;sY:1;opacity:0;fb:10px;","ease":"Power4.easeOut"}]'
                                         data-margintop="[0,0,0,0]"
                                         data-marginright="[0,0,0,0]"
                                         data-marginbottom="[30,20,30,30]"
                                         data-marginleft="[0,0,0,0]"
                                         data-textAlign="['inherit','inherit','center','center']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,40,40]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,40,40]"

                                         style="z-index: 8; white-space: nowrap; font-size: 110px; line-height: 100px; font-weight: 600; color: rgba(255, 255, 255, 1.00); display: inline-block;font-family:Poppins;letter-spacing:-5px;">联邦技术移民 </div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption   tp-resizeme"
                                         id="slide-35-layer-2"
                                         data-x="['left','left','center','center']" data-hoffset="['0','50','0','0']"
                                         data-y="['top','top','top','top']" data-voffset="['0','430','460','290']"
                                         data-fontsize="['30','30','40','25']"
                                         data-lineheight="['40','40','50','30']"
                                         data-width="['none','100%','100%','100%']"
                                         data-height="none"
                                         data-whitespace="normal"

                                         data-type="text"
                                         data-basealign="slide"
                                         data-responsive_offset="on"

                                         data-frames='[{"delay":"+890","split":"chars","splitdelay":0.03,"speed":300,"frame":"0","from":"sX:2;sY:2;opacity:0;fb:5px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;fb:10px;","ease":"Power4.easeOut"}]'
                                         data-margintop="[0,0,0,0]"
                                         data-marginright="[0,0,0,0]"
                                         data-marginbottom="[0,0,0,0]"
                                         data-marginleft="[0,0,0,0]"
                                         data-textAlign="['inherit','inherit','center','center']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 9; white-space: normal; font-size: 30px; line-height: 40px; font-weight: 300; color: rgba(255, 255, 255, 1.00); display: block;font-family:Poppins;">Federal Skilled Workers 六项打分和CRS打分</div>
                                </div>
                            </div>
                        </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption tp-shape tp-shapewrapper "
                             id="slide-35-layer-16"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-width="full"
                             data-height="full"
                             data-whitespace="normal"

                             data-type="shape"
                             data-basealign="slide"
                             data-responsive_offset="off"
                             data-responsive="off"
                             data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);"> </div>
                    </li>
                    <!-- SLIDE  -->
                    <li class="dark" data-index="rs-36" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="2000"  data-thumb="{{Storage::disk('qiniu')->url('include/rs-plugin/demos/assets/images/100x50_blur1.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Two" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{Storage::disk('qiniu')->url('include/rs-plugin/demos/assets/images/snowscene2.jpg')}}"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="20000" data-ease="Linear.easeNone" data-scalestart="130" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="6" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <div id="rrzm_36" class="rev_row_zone rev_row_zone_middle" style="z-index: 6;">

                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption  "
                                 id="slide-36-layer-14"
                                 data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"

                                 data-type="row"
                                 data-columnbreak="2"
                                 data-basealign="slide"
                                 data-responsive_offset="on"
                                 data-responsive="off"
                                 data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-margintop="[0,0,0,0]"
                                 data-marginright="[0,0,0,0]"
                                 data-marginbottom="[0,0,0,0]"
                                 data-marginleft="[0,0,0,0]"
                                 data-textAlign="['inherit','inherit','inherit','inherit']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[100,50,40,40]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[100,50,40,40]"

                                 style="z-index: 6; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);">
                                <!-- LAYER NR. 7 -->
                                <div class="tp-caption  "
                                     id="slide-36-layer-15"
                                     data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                     data-y="['top','top','top','top']" data-voffset="['100','100','100','100']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"

                                     data-type="column"
                                     data-responsive_offset="on"
                                     data-responsive="off"
                                     data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                     data-columnwidth="100%"
                                     data-margintop="[0,0,0,0]"
                                     data-marginright="[0,0,0,0]"
                                     data-marginbottom="[0,0,0,0]"
                                     data-marginleft="[0,0,0,0]"
                                     data-textAlign="['center','center','center','center']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"

                                     style="z-index: 7; width: 100%;">
                                    <!-- LAYER NR. 8 -->
                                    <div class="tp-caption   tp-resizeme"
                                         id="slide-36-layer-1"
                                         data-x="['left','left','center','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['top','top','top','top']" data-voffset="['0','0','230','110']"
                                         data-fontsize="['110','90','100','70']"
                                         data-lineheight="['100','90','100','70']"
                                         data-width="['none','none','697','399']"
                                         data-height="none"
                                         data-whitespace="['nowrap','nowrap','normal','normal']"

                                         data-type="text"
                                         data-basealign="slide"
                                         data-responsive_offset="on"

                                         data-frames='[{"delay":"+290","split":"chars","splitdelay":0.05,"speed":750,"frame":"0","from":"y:40px;sX:1.5;sY:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"sX:1;sY:1;opacity:0;fb:10px;","ease":"Power4.easeOut"}]'
                                         data-margintop="[0,0,0,0]"
                                         data-marginright="[0,0,0,0]"
                                         data-marginbottom="[30,20,30,30]"
                                         data-marginleft="[0,0,0,0]"
                                         data-textAlign="['inherit','inherit','center','center']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,40,40]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,40,40]"

                                         style="z-index: 8; white-space: nowrap; font-size: 110px; line-height: 100px; font-weight: 600; color: rgba(255, 255, 255, 1.00); display: inline-block;font-family:Poppins;letter-spacing:-5px;">Let it Snow </div>

                                    <!-- LAYER NR. 9 -->
                                    <div class="tp-caption   tp-resizeme"
                                         id="slide-36-layer-2"
                                         data-x="['left','left','center','center']" data-hoffset="['0','50','0','0']"
                                         data-y="['top','top','top','top']" data-voffset="['0','430','460','290']"
                                         data-fontsize="['30','30','40','25']"
                                         data-lineheight="['40','40','50','30']"
                                         data-width="['none','100%','100%','100%']"
                                         data-height="none"
                                         data-whitespace="normal"

                                         data-type="text"
                                         data-basealign="slide"
                                         data-responsive_offset="on"

                                         data-frames='[{"delay":"+890","split":"chars","splitdelay":0.03,"speed":300,"frame":"0","from":"sX:2;sY:2;opacity:0;fb:5px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;fb:10px;","ease":"Power4.easeOut"}]'
                                         data-margintop="[0,0,0,0]"
                                         data-marginright="[0,0,0,0]"
                                         data-marginbottom="[0,0,0,0]"
                                         data-marginleft="[0,0,0,0]"
                                         data-textAlign="['inherit','inherit','center','center']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 9; white-space: normal; font-size: 30px; line-height: 40px; font-weight: 300; color: rgba(255, 255, 255, 1.00); display: block;font-family:Poppins;">An Effect Add-On for Slider Revolution </div>
                                </div>
                            </div>
                        </div>

                        <!-- LAYER NR. 10 -->
                        <div class="tp-caption tp-shape tp-shapewrapper "
                             id="slide-36-layer-16"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-width="full"
                             data-height="full"
                             data-whitespace="normal"

                             data-type="shape"
                             data-basealign="slide"
                             data-responsive_offset="off"
                             data-responsive="off"
                             data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);"> </div>
                    </li>
                    <!-- SLIDE  -->
                    <li class="dark" data-index="rs-37" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="2000"  data-thumb="{{Storage::disk('qiniu')->url('include/rs-plugin/demos/assets/images/100x50_blur1.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Three" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{Storage::disk('qiniu')->url('include/rs-plugin/demos/assets/images/snowscene4.jpg')}}"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="20000" data-ease="Linear.easeNone" data-scalestart="130" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="6" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <div id="rrzm_37" class="rev_row_zone rev_row_zone_middle" style="z-index: 6;">

                            <!-- LAYER NR. 11 -->
                            <div class="tp-caption  "
                                 id="slide-37-layer-14"
                                 data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"

                                 data-type="row"
                                 data-columnbreak="2"
                                 data-basealign="slide"
                                 data-responsive_offset="on"
                                 data-responsive="off"
                                 data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-margintop="[0,0,0,0]"
                                 data-marginright="[0,0,0,0]"
                                 data-marginbottom="[0,0,0,0]"
                                 data-marginleft="[0,0,0,0]"
                                 data-textAlign="['inherit','inherit','inherit','inherit']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[100,50,40,40]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[100,50,40,40]"

                                 style="z-index: 6; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);">
                                <!-- LAYER NR. 12 -->
                                <div class="tp-caption  "
                                     id="slide-37-layer-15"
                                     data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                     data-y="['top','top','top','top']" data-voffset="['100','100','100','100']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"

                                     data-type="column"
                                     data-responsive_offset="on"
                                     data-responsive="off"
                                     data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                     data-columnwidth="100%"
                                     data-margintop="[0,0,0,0]"
                                     data-marginright="[0,0,0,0]"
                                     data-marginbottom="[0,0,0,0]"
                                     data-marginleft="[0,0,0,0]"
                                     data-textAlign="['center','center','center','center']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"

                                     style="z-index: 7; width: 100%;">
                                    <!-- LAYER NR. 13 -->
                                    <div class="tp-caption   tp-resizeme"
                                         id="slide-37-layer-1"
                                         data-x="['left','left','center','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['top','top','top','top']" data-voffset="['0','0','230','110']"
                                         data-fontsize="['110','90','100','70']"
                                         data-lineheight="['100','90','100','70']"
                                         data-width="['none','none','697','399']"
                                         data-height="none"
                                         data-whitespace="['nowrap','nowrap','normal','normal']"

                                         data-type="text"
                                         data-basealign="slide"
                                         data-responsive_offset="on"

                                         data-frames='[{"delay":"+290","split":"chars","splitdelay":0.05,"speed":750,"frame":"0","from":"y:40px;sX:1.5;sY:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"sX:1;sY:1;opacity:0;fb:10px;","ease":"Power4.easeOut"}]'
                                         data-margintop="[0,0,0,0]"
                                         data-marginright="[0,0,0,0]"
                                         data-marginbottom="[30,20,30,30]"
                                         data-marginleft="[0,0,0,0]"
                                         data-textAlign="['inherit','inherit','center','center']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,40,40]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,40,40]"

                                         style="z-index: 8; white-space: nowrap; font-size: 110px; line-height: 100px; font-weight: 600; color: rgba(255, 255, 255, 1.00); display: inline-block;font-family:Poppins;letter-spacing:-5px;">移民政策重大改变</div>

                                    <!-- LAYER NR. 14 -->
                                    <div class="tp-caption   tp-resizeme"
                                         id="slide-37-layer-2"
                                         data-x="['left','left','center','center']" data-hoffset="['0','50','0','0']"
                                         data-y="['top','top','top','top']" data-voffset="['0','430','460','290']"
                                         data-fontsize="['30','30','40','25']"
                                         data-lineheight="['40','40','50','30']"
                                         data-width="['none','100%','100%','100%']"
                                         data-height="none"
                                         data-whitespace="normal"

                                         data-type="text"
                                         data-basealign="slide"
                                         data-responsive_offset="on"

                                         data-frames='[{"delay":"+890","split":"chars","splitdelay":0.03,"speed":300,"frame":"0","from":"sX:2;sY:2;opacity:0;fb:5px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;fb:10px;","ease":"Power4.easeOut"}]'
                                         data-margintop="[0,0,0,0]"
                                         data-marginright="[0,0,0,0]"
                                         data-marginbottom="[0,0,0,0]"
                                         data-marginleft="[0,0,0,0]"
                                         data-textAlign="['inherit','inherit','center','center']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 9; white-space: normal; font-size: 30px; line-height: 40px; font-weight: 300; color: rgba(255, 255, 255, 1.00); display: block;font-family:Poppins;">加拿大移民快速通道 Express Entry</div>
                                </div>
                            </div>
                        </div>

                        <!-- LAYER NR. 15 -->
                        <div class="tp-caption tp-shape tp-shapewrapper "
                             id="slide-37-layer-16"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-width="full"
                             data-height="full"
                             data-whitespace="normal"

                             data-type="shape"
                             data-basealign="slide"
                             data-responsive_offset="off"
                             data-responsive="off"
                             data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);"> </div>
                    </li>
                </ul>
                <div style="" class="tp-static-layers">

                    <!-- LAYER NR. 16 -->
                    <a class="tp-caption rev-btn  tp-static-layer"
                       href="http://themeforest.net/item/canvas-the-multipurpose-html5-template/9228123?ref=SemiColonWeb&license=regular&open_purchase_for_item_id=9228123&purchasable=source" target="_blank"			 id="slider-15-layer-18"
                       data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                       data-y="['bottom','bottom','bottom','bottom']" data-voffset="['30','30','30','30']"
                       data-width="none"
                       data-height="none"
                       data-whitespace="nowrap"

                       data-type="button"
                       data-actions=''
                       data-basealign="slide"
                       data-responsive_offset="off"
                       data-responsive="off"
                       data-startslide="0"
                       data-endslide="2"
                       data-frames='[{"delay":1600,"speed":1000,"frame":"0","from":"y:20px;sX:1.5;sY:1.5;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;fb:10px;","ease":"Power4.easeOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);"}]'
                       data-textAlign="['inherit','inherit','inherit','inherit']"
                       data-paddingtop="[0,0,0,0]"
                       data-paddingright="[35,35,35,35]"
                       data-paddingbottom="[0,0,0,0]"
                       data-paddingleft="[35,35,35,35]"

                       style="z-index: 8; white-space: nowrap; font-size: 15px; line-height: 50px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Poppins;background-color:rgba(255, 255, 255, 0);border-color:rgba(255, 255, 255, 1.00);border-style:solid;border-width:2px 2px 2px 2px;border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">移 民 指 南 ！</a>
                </div>
                <div class="tp-bannertimer" style="height: 10px; background-color: rgba(255, 255, 255, 0.25);"></div>	</div>
        </div><!-- END REVOLUTION SLIDER -->
</div><!-- END REVOLUTION SLIDER WRAPPER -->

</section>

</div><!-- #wrapper end -->
@endsection

@section('slider-js')
<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
<script type="text/javascript" src="{{Storage::disk('qiniu')->url('include/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{Storage::disk('qiniu')->url('include/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{Storage::disk('qiniu')->url('include/rs-plugin/js/addons/revolution.addon.snow.min.js')}}"></script>

<script type="text/javascript" src="{{Storage::disk('qiniu')->url('include/rs-plugin/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{Storage::disk('qiniu')->url('include/rs-plugin/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{Storage::disk('qiniu')->url('include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{Storage::disk('qiniu')->url('include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{Storage::disk('qiniu')->url('include/rs-plugin/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{Storage::disk('qiniu')->url('include/rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{Storage::disk('qiniu')->url('include/rs-plugin/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{Storage::disk('qiniu')->url('include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{Storage::disk('qiniu')->url('include/rs-plugin/js/extensions/revolution.extension.video.min.js')}}"></script>

<!-- ADD-ONS JS FILES -->

<script type="text/javascript">
    var tpj=jQuery;

    var revapi15;
    tpj(document).ready(function() {
        if(tpj("#rev_slider_15_1").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_15_1");
        }else{
            revapi15 = tpj("#rev_slider_15_1").show().revolution({
                sliderType:"standard",
                jsFileLocation:"include/rs-plugin/js/",
                sliderLayout:"fullscreen",
                dottedOverlay:"none",
                delay:9000,
                snow: {
                    startSlide: "first",
                    endSlide: "last",
                    maxNum: "400",
                    minSize: "0.2",
                    maxSize: "6",
                    minOpacity: "0.3",
                    maxOpacity: "1",
                    minSpeed: "30",
                    maxSpeed: "100",
                    minSinus: "1",
                    maxSinus: "100",
                },
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "vertical",
                    mouseScrollNavigation:"off",
                    mouseScrollReverse:"default",
                    onHoverStop:"off",
                    touch:{
                        touchenabled:"on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,
                    arrows: {
                        style:"uranus",
                        enable:true,
                        hide_onmobile:false,
                        hide_onleave:false,
                        tmp:'',
                        left: {
                            h_align:"left",
                            v_align:"center",
                            h_offset:10,
                            v_offset:0
                        },
                        right: {
                            h_align:"right",
                            v_align:"center",
                            h_offset:10,
                            v_offset:0
                        }
                    }
                },
                responsiveLevels:[1240,1024,778,480],
                visibilityLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[868,768,960,720],
                lazyType:"none",
                scrolleffect: {
                    blur:"on",
                    maxblur:"20",
                    on_slidebg:"on",
                    direction:"top",
                    multiplicator:"2",
                    multiplicator_layers:"2",
                    tilt:"10",
                    disable_on_mobile:"off",
                },
                parallax: {
                    type:"scroll",
                    origo:"slidercenter",
                    speed:400,
                    levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
                },
                shadow:0,
                spinner:"spinner3",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                fullScreenAutoWidth:"off",
                fullScreenAlignForce:"off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "0",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
        }

        RsSnowAddOn(tpj, revapi15);
    });	/*ready*/
</script>

@endsection