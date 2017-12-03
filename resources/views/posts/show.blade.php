@extends('layouts.app')
@section('title', $post->title)

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
                <li><a href="{{ route('categories.index', [$post->category->parentCat->id, $post->category->parentCat->slug]) }}">{{ $post->category->parentCat->name }}</a></li>
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
                            <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                        </ul><!-- .entry-meta end -->

                        <!-- Entry Image
                        ============================================= -->
                        <div class="entry-image bottommargin">
                            <a href="#"><img src="{{ url('storage/' . $post->image) }}" alt="Blog Single"></a>
                        </div><!-- .entry-image end -->

                        <!-- Entry Content
                        ============================================= -->
                        <div class="entry-content notopmargin">

                            {!! $post->body !!}
                            <!-- Post Single - Content End -->

                            <!-- Tag Cloud
                            ============================================= -->
                            <div class="tagcloud clearfix bottommargin">
                                <a href="#">general</a>
                                <a href="#">information</a>
                                <a href="#">media</a>
                                <a href="#">press</a>
                                <a href="#">gallery</a>
                                <a href="#">illustration</a>
                            </div><!-- .tagcloud end -->

                            <div class="clear"></div>

                            <!-- Post Single - Share
                            ============================================= -->
                            <div class="si-share noborder clearfix">
                                <span>Share this Post:</span>
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

                        <div class="col_half nobottommargin">
                            <a href="#">&lArr; This is a Standard post with a Slider Gallery</a>
                        </div>

                        <div class="col_half col_last tright nobottommargin">
                            <a href="#">This is an Embedded Audio Post &rArr;</a>
                        </div>

                    </div><!-- .post-navigation end -->

                    <div class="line"></div>

                    <!-- Post Author Info
                    ============================================= -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Posted by <span><a href="#">{{ $post->authorId->name }}</a></span></h3>
                        </div>
                        <div class="panel-body">
                            <div class="author-image">
                                <img src="{{ $post->authorId->avatar }}" alt="" class="img-circle">
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eveniet, eligendi et nobis neque minus mollitia sit repudiandae ad repellendus recusandae blanditiis praesentium vitae ab sint earum voluptate velit beatae alias fugit accusantium laboriosam nisi reiciendis deleniti tenetur molestiae maxime id quaerat consequatur fugiat aliquam laborum nam aliquid. Consectetur, perferendis?
                        </div>
                    </div><!-- Post Single - Author End -->

{{--@include('posts._relatePosts')--}}

{{--@include('posts._comments')--}}

                </div>

            </div>

        </div>

    </section><!-- #content end -->
@endsection