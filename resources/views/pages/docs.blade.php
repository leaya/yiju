@extends('layouts.app')
@section('title', '移民指南')

@section('vertical-nav')
    <div id="vertical-nav">
        <div class="container clearfix">

            <nav>
                <ul>
                    @foreach($categories as $category)
                        <li><a href="{{ url($category->slug) }}"><i class="icon-lightbulb"></i>{{ $category->name }}</a></li>
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