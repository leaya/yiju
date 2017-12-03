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
            <h1>Navigation Tree</h1>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Functionality</a></li>
                <li class="active">Navigation Tree</li>
            </ol>
        </div>

    </section><!-- #page-title end -->
@endsection

@section('content')
    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

@yield('post-content')

            </div>

        </div>

    </section><!-- #content end -->
@endsection