@extends('layouts.app')
@section('title', '免费咨询')

@section('page-title')
    <section id="page-title">

        <div class="container clearfix">
            <h1>在线填写 - 免费评估 / 咨询</h1>
            <span>请确保以下信息详细准确</span>
            <ol class="breadcrumb">
                <li><a href="/">首页</a></li>
                <li class="active">联系我们</li>
            </ol>
        </div>

    </section>
@endsection

@section('content')
    <!-- Content
		============================================= -->
    <section id="content" style="margin-bottom: 0px;">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Postcontent
                ============================================= -->
                <div class="nobottommargin">

                    <h3>移居者 - 本评估适用于各类留学移民、技术移民及投资移民</h3>

                        <form action="/email" method="POST">
                            {{csrf_field()}}
                            <input type="text" name="abc">
                            <button type="submit">tijiao</button>
                        </form>

                </div><!-- .postcontent end -->

            </div>

        </div>

    </section><!-- #content end -->
@endsection

