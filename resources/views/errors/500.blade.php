@extends('layouts.app')
@section('title', '页面没找到')

@section('page-title')
    <!-- Page Title
		============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>页面没有找到</h1>
            <ol class="breadcrumb">
                <li><a href="/">首页</a></li>
                <li class="active">500错误</li>
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

                <div class="col_half nobottommargin">
                    <div class="error404 center">500</div>
                </div>

                <div class="col_half nobottommargin col_last">

                    <div class="heading-block nobottomborder">
                        <h4>Ooopps.! 你正在查找的页面没有找到。</h4>
                        <span>尝试用搜索方式来查找</span>
                    </div>

                    <form action="#" method="get" role="form" class="nobottommargin">
                        <div class="input-group input-group-lg">
                            <input type="text" class="form-control" placeholder="Search for Pages...">
                            <span class="input-group-btn">
									<button class="btn btn-danger" type="button">Search</button>
								</span>
                        </div>
                    </form>

                    {{--<div class="col_one_third widget_links topmargin nobottommargin">--}}
                        {{--<ul>--}}
                            {{--<li><a href="#">Home</a></li>--}}
                            {{--<li><a href="#">About</a></li>--}}
                            {{--<li><a href="#">FAQs</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}

                    {{--<div class="col_one_third widget_links topmargin nobottommargin">--}}
                        {{--<ul>--}}
                            {{--<li><a href="#">Shop</a></li>--}}
                            {{--<li><a href="#">Portfolio</a></li>--}}
                            {{--<li><a href="#">Blog</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}

                    {{--<div class="col_one_third widget_links topmargin nobottommargin col_last">--}}
                        {{--<ul>--}}
                            {{--<li><a href="#">Support</a></li>--}}
                            {{--<li><a href="#">Forums</a></li>--}}
                            {{--<li><a href="#">Contact</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}

                </div>

            </div>

        </div>

    </section><!-- #content end -->
@endsection