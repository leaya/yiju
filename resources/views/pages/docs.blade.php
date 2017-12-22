@extends('layouts.app')
@section('title', '移民指南')

@section('style-css')
    <style>

        #vertical-nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 240px;
            z-index: 99;
            background: #F9F9F9;
            border-right: 1px solid #EEE;
            height: 100%;
            overflow: auto;
            padding: 140px 0 40px;
            -webkit-transition: padding .4s ease;
            -o-transition: padding .4s ease;
            transition: padding .4s ease;
        }

        .sticky-header + #vertical-nav { padding-top: 100px; }

        #vertical-nav nav ul {
            margin-bottom: 0;
            list-style: none;
        }

        #vertical-nav nav li a {
            display: block;
            padding: 10px 30px;
            color: #333;
            text-transform: uppercase;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 2px;
            font-family: 'Raleway', sans-serif;
        }

        #vertical-nav nav li i {
            font-size: 14px;
            width: 16px;
            text-align: center;
        }

        #vertical-nav nav li i:not(.icon-angle-down) {
            margin-right: 8px;
            position: relative;
            top: 1px;
        }

        #vertical-nav nav li a i.icon-angle-down {
            width: auto;
            margin-left: 5px;
        }

        #vertical-nav nav li:hover > a,
        #vertical-nav nav li.current > a,
        #vertical-nav nav li.active > a {
            background-color: #FFF;
            color: #1ABC9C;
        }

        #vertical-nav nav ul ul { display: none; }

        #vertical-nav nav ul ul a {
            font-size: 12px;
            letter-spacing: 1px;
            padding-left: 45px;
            font-family: 'Lato', sans-serif;
        }

        #vertical-nav nav ul ul a i.icon-angle-down { font-size: 12px; }

        #vertical-nav nav ul ul ul a { padding-left: 60px; }
        #vertical-nav nav ul ul ul ul a { padding-left: 75px; }

        @media (min-width: 992px) {

            #header { z-index: 199; }

            #page-title,
            #content,
            #footer { margin-left: 240px; }

            #page-title .container,
            #content .container,
            #footer .container {
                width: auto;
                padding: 0 60px;
            }

            #vertical-nav .container {
                width: 100%;
                padding: 0;
            }

            #page-title .breadcrumb { right: 60px !important; }

        }


        @media (max-width: 991px) {

            #vertical-nav {
                position: relative;
                width: 100%;
                z-index: auto;
                border: none;
                border-bottom: 1px solid #EEE;
                height: auto;
                padding: 0;
            }

            #vertical-nav .container { padding: 10px 20px; }

            #vertical-nav nav li a { padding: 10px 0; }

            #vertical-nav nav li:hover > a,
            #vertical-nav nav li.current > a,
            #vertical-nav nav li.active > a { background-color: transparent; }

            #vertical-nav nav ul ul a { padding-left: 15px; }
            #vertical-nav nav ul ul ul a { padding-left: 30px; }
            #vertical-nav nav ul ul ul ul a { padding-left: 45px; }

        }

    </style>
@endsection

@section('vertical-nav')
    <div id="vertical-nav">
        <div class="container clearfix">

            <nav>
                <ul>
                    @foreach($categories as $category)
                        <li>
                            <a href=""><i class="icon-lightbulb"></i>{{ $category->name }}</a>
                            @foreach($category->subCat as $cat)
                                <ul>
                                    <li><a href="{{ route('categories.index', [$cat->id, $cat->slug]) }}">{{ $cat->name }}</a></li>
                                </ul>
                            @endforeach
                        </li>
                    @endforeach
                </ul>
            </nav>

        </div>
    </div>
@endsection

@section('page-title')
    <!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>各国移民指南、百科大全</h1>
            <ol class="breadcrumb">
                <li><a href="/">首页</a></li>
                <li><a href="{{ route('pages.docs') }}">移民指南</a></li>
            </ol>
        </div>

    </section><!-- #page-title end -->
@endsection

@section('content')
    <!-- Content
    ============================================= -->
    <section id="content" style="margin-bottom: 0px;">

        <div class="content-wrap">

                    <div class="container clearfix">

                        <div class="heading-block center">
                            <h2>加拿大移民计划</h2>
                            <span>加拿大移民计划，取决于你的自身条件、目标和你个人的具体情况。</span>
                        </div>

                        <div class="clear bottommargin-sm"></div>

                        <div class="col_one_third">
                            <div class="feature-box fbox-small fbox-plain fadeIn animated" data-animate="fadeIn">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-fire"></i></a>
                                </div>
                                <h3>家庭团聚移民</h3>
                                <p>这个方案允许在加拿大有直系亲属的个人申请</p>
                            </div>
                        </div>

                        <div class="col_one_third">
                            <div class="feature-box fbox-small fbox-plain fadeIn animated" data-animate="fadeIn" data-delay="200">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-eye"></i></a>
                                </div>
                                <h3>加拿大经验类移民</h3>
                                <p>此计划适合在加拿大有技术工作经验的人申请</p>
                            </div>
                        </div>

                        <div class="col_one_third col_last">
                            <div class="feature-box fbox-small fbox-plain fadeIn animated" data-animate="fadeIn" data-delay="400">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-star2"></i></a>
                                </div>
                                <h3>省提名移民计划</h3>
                                <p>加拿大联邦允许各省有自己的移民评估标准和配额</p>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <div class="col_half">
                            <div class="feature-box fbox-small fbox-plain fadeIn animated" data-animate="fadeIn" data-delay="600">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-heart2"></i></a>
                                </div>
                                <h3>魁北克经验类移民</h3>
                                <p>适合在魁北克学习或工作的国际留学生和外籍工作者申请</p>
                            </div>
                        </div>

                        <div class="col_half col_last">
                            <div class="feature-box fbox-small fbox-plain fadeIn animated" data-animate="fadeIn" data-delay="800">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-note"></i></a>
                                </div>
                                <h3>企业家移民</h3>
                                <p>此计划适合于有能力到加拿大创办或购买企业的人申请</p>
                            </div>
                        </div>

                        <div class="clear"></div>

                    </div>

        </div>

    </section><!-- #content end -->
@endsection