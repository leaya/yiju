@extends('layouts.app')

@section('vertical-nav')
    <div id="vertical-nav">
        <div class="container clearfix">

            <nav>
                <ul>
                    <li><a href="{{  }}"></a></li>
                    <li><a href="#"><i class="icon-lightbulb"></i>Features</a>
                        <ul>
                            <li><a href="#">Feature 1</a></li>
                            <li><a href="#">Feature 2</a></li>
                            <li><a href="#">Feature 3</a><li>
                            <li><a href="#">Feature 4</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="icon-briefcase"></i>Portfolio</a>
                        <ul>
                            <li><a href="#">Portfolio 1</a></li>
                            <li><a href="#">Portfolio 2</a></li>
                            <li><a href="#">Portfolio 3</a>
                                <ul>
                                    <li><a href="#">Portfolio 1.1</a></li>
                                    <li><a href="#">Portfolio 1.2</a></li>
                                    <li><a href="#">Portfolio 1.3</a>
                                        <ul>
                                            <li><a href="#">Portfolio 1.1</a></li>
                                            <li><a href="#">Portfolio 1.2</a></li>
                                            <li><a href="#">Portfolio 1.3</a></li>
                                            <li><a href="#">Portfolio 1.4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Portfolio 1.4</a>
                                        <ul>
                                            <li><a href="#">Portfolio 1.1</a></li>
                                            <li><a href="#">Portfolio 1.2</a></li>
                                            <li><a href="#">Portfolio 1.3</a></li>
                                            <li><a href="#">Portfolio 1.4</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Portfolio 4</a>
                                <ul>
                                    <li><a href="#">Portfolio 1.1</a></li>
                                    <li><a href="#">Portfolio 1.2</a></li>
                                    <li><a href="#">Portfolio 1.3</a></li>
                                    <li><a href="#">Portfolio 1.4</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="icon-code"></i>Shortcodes</a>
                        <ul>
                            <li><a href="#">Shortcodes 1</a></li>
                            <li><a href="#">Shortcodes 2</a></li>
                            <li><a href="#">Shortcodes 3</a></li>
                            <li><a href="#">Shortcodes 4</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="icon-lightbulb"></i>Contact</a></li>
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



            </div>

        </div>

    </section><!-- #content end -->
@endsection