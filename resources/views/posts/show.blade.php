@extends('layouts.app')
@section('title', $post->title)

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
            <h1>{!! $post->category->name !!}</h1>
            <ol class="breadcrumb">
                <li><a href="/">首页</a></li>
                {{--<li><a href="{{ route('categories.index', [$post->category->parentCat->id, $post->category->parentCat->slug]) }}">{{ $post->category->parentCat->name }}</a></li>--}}
                <li>{{ $post->category->parentCat->name }}</li>
                <li class="active">{{ $post->category->name }}</li>
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

                <div class="single-post nobottommargin">

                    <!-- Single Post
                    ============================================= -->
                    <div class="entry clearfix">

                        <!-- Entry Title
                        ============================================= -->
                        <div class="entry-title">
                            <h2>{{ $post->title }}</h2>
                        </div><!-- .entry-title end -->

                        <!-- Entry Meta
                        ============================================= -->
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i> {{ $post->created_at->diffForHumans() }}</li>
                            <li><a href="#"><i class="icon-user"></i> {{ $post->authorId->name }}</a></li>
                            <li><i class="icon-folder-open"></i> <a href="{{ route('categories.index', [$post->category->id, $post->category->slug]) }}">{{ $post->category->name }}</a></li>
                            {{--<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13 Comments</a></li>--}}
                            <li><a href="#"><i class="icon-thumbs-up"></i></a></li>
                        </ul><!-- .entry-meta end -->

                        @if (isset($post->image))
                        <!-- Entry Image
                        ============================================= -->
                        <div class="entry-image bottommargin">
                            <a href="#"><img src="{{ Storage::disk('qiniu')->url('storage/' . $post->image) }}" alt="Blog Single"></a>
                        </div><!-- .entry-image end -->
                        @endif

                        <!-- Entry Content
                        ============================================= -->
                        <div class="entry-content notopmargin">

                            {!! $post->body !!}
                            <!-- Post Single - Content End -->

                            <!-- Tag Cloud
                            ============================================= -->
                            {{--<div class="tagcloud clearfix bottommargin">--}}
                                {{--<a href="#">general</a>--}}
                                {{--<a href="#">information</a>--}}
                                {{--<a href="#">media</a>--}}
                                {{--<a href="#">press</a>--}}
                                {{--<a href="#">gallery</a>--}}
                                {{--<a href="#">illustration</a>--}}
                            {{--</div><!-- .tagcloud end -->--}}

                            <div class="clear"></div>

                            <!-- Post Single - Share
                            ============================================= -->
                            <div class="si-share noborder clearfix">
                                <span>分享这篇文章:</span>
                                <div>
                                    <a href="#" class="social-icon si-borderless si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-pinterest">
                                        <i class="icon-pinterest"></i>
                                        <i class="icon-pinterest"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-gplus">
                                        <i class="icon-gplus"></i>
                                        <i class="icon-gplus"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-rss">
                                        <i class="icon-rss"></i>
                                        <i class="icon-rss"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-email3">
                                        <i class="icon-email3"></i>
                                        <i class="icon-email3"></i>
                                    </a>
                                </div>
                            </div><!-- Post Single - Share End -->

                        </div>
                    </div><!-- .entry end -->

                    <!-- Post Navigation
                    ============================================= -->
                    <div class="post-navigation clearfix">

                        @if ($nextPostId)
                        <div class="col_half nobottommargin">
                            <a href="{{ route('posts.show', [$nextPostId->id, $nextPostId->slug]) }}">&lArr; {{ $nextPostId->title }}</a>
                        </div>
                        @endif

                        @if ($prevPostId)
                        <div class="col_half col_last tright nobottommargin">
                            <a href="{{ route('posts.show', [$prevPostId->id, $prevPostId->slug]) }}">{{ $prevPostId->title }} &rArr;</a>
                        </div>
                        @endif

                    </div><!-- .post-navigation end -->

                    <div class="line"></div>

                    <!-- Post Author Info
                    ============================================= -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">作者： <span><a href="#">{{ $post->authorId->name }}</a></span></h3>
                        </div>
                        <div class="panel-body">
                            <div class="author-image">
                                <img src="{{ $post->authorId->avatar }}" alt="" class="img-circle">
                            </div>
                            <p class="nobottommargin">转载请尊重版权保留来源"移居者yijuzhe.com"</p>
                            <p>移居者团队</p>
                            <p><a href="{{ route('contact.show') }}" class="btn btn-success btn-sm">获得一个免费评估</a></p>
                        </div>
                    </div><!-- Post Single - Author End -->

{{--@include('posts._relatePosts')--}}

{{--@include('posts._comments')--}}

                </div>

            </div>

        </div>

    </section><!-- #content end -->
@endsection