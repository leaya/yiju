@extends('layouts.app')
@section('title', $currentCat->name)

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
                            @foreach($category->subCat as $subCat)
                                <ul>
                                    <li><a href="{{ route('categories.index', [$subCat->id, $subCat->slug]) }}">{{ $subCat->name }}</a></li>
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
            <h1>{{ $currentCat->name }}</h1>
            {{--<span>目录描述</span>--}}
            <ol class="breadcrumb">
                <li><a href="/">首页</a></li>
                <li class="active">{{ $currentCat->name }}</li>
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

                <!-- Posts
                ============================================= -->
                <div id="posts">
                    @foreach($posts as $post)
                        <div class="entry clearfix">
                            @if (isset($post->image))
                            <div class="entry-image">
                                <a href="{{ url('storage/' . $post->image) }}" data-lightbox="image"><img class="image_fade" src="{{ url('storage/' . $post->image) }}" alt="Standard Post with Image"></a>
                            </div>
                            @endif
                            <div class="entry-title">
                                <h2><a href="{{ route('posts.show', [$post->id, $post->slug]) }}">{{ $post->title }}</a></h2>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> {{ $post->created_at->diffForHumans() }}</li>
                                <li><a href="#"><i class="icon-user"></i> {{ $post->authorId->name }}</a></li>
                                <li><i class="icon-folder-open"></i> <a href="{{ route('categories.index', [$currentCat->id, $currentCat->slug]) }}">{{ $currentCat->name }}</a></li>
                                {{--<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13 Comments</a></li>--}}
                                <li><a href="#"><i class="icon-thumbs-up"></i></a></li>
                            </ul>
                            <div class="entry-content">
                                <p>{!! $post->excerpt !!}</p>
                                <a href="{{ route('posts.show', [$post->id, $post->slug]) }}"class="more-link">阅读全文</a>
                            </div>
                        </div>
                    @endforeach

                </div><!-- #posts end -->

                <!-- Pagination
                ============================================= -->
                <ul class="pager nomargin">
                    @if ($posts->hasMorePages())
                    <li class="previous"><a href="{{ $posts->nextPageUrl() }}">&larr; 更早</a></li>
                    @endif
                    @if ($posts->currentPage() != 1)
                    <li class="next"><a href="{{ $posts->previousPageUrl() }}">更新 &rarr;</a></li>
                    @endif
                </ul><!-- .pager end -->

            </div>

        </div>

    </section><!-- #content end -->
@endsection