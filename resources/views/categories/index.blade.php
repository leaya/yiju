@extends('layouts.app')
@section('title', $currentCat->name)

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
            <span>目录描述</span>
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
                            <div class="entry-image">
                                <a href="{{ url('storage/' . $post->image) }}" data-lightbox="image"><img class="image_fade" src="{{ url('storage/' . $post->image) }}" alt="Standard Post with Image"></a>
                            </div>
                            <div class="entry-title">
                                <h2><a href="{{ route('posts.show', [$post->id, $post->slug]) }}">{{ $post->title }}</a></h2>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> {{ $post->created_at->diffForHumans() }}</li>
                                <li><a href="#"><i class="icon-user"></i> {{ $post->authorId->name }}</a></li>
                                <li><i class="icon-folder-open"></i> <a href="{{ route('categories.index', [$currentCat->id, $currentCat->slug]) }}">{{ $currentCat->name }}</a></li>
                                {{--<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13 Comments</a></li>--}}
                                <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                            </ul>
                            <div class="entry-content">
                                <p>{!! $post->body !!}</p>
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