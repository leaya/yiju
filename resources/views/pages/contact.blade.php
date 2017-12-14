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
            @include('layouts._message')
                <!-- Postcontent
                ============================================= -->
                <div class="postcontent nobottommargin clearfix">

                    <h5>移居者 - 本评估适用于各类留学移民、技术移民及投资移民</h5>

                        <div class="contact-form-result"></div>
                        @include('common.error')
                        <form class="nobottommargin" id="template-contactform" name="template-contactform" action="{{route('contact.send')}}" method="POST" novalidate="novalidate">
                        {{csrf_field()}}
                            <div class="form-process"></div>

                            <div class="col-md-6 col-xs-6 bottommargin-sm">
                                <label for="template-contactform-name">称呼 <small>*</small></label>
                                <input type="text" id="template-contactform-name" name="template-contactform-name" value="{{old('template-contactform-name')}}" class="form-control required" aria-required="true">
                            </div>

                            <div class="col-md-6 col-xs-6 bottommargin-sm">
                                <label for="template-contactform-city">所在城市 <small>*</small></label>
                                <input type="text" id="template-contactform-city" name="template-contactform-city" value="{{old('template-contactform-city')}}" class="required form-control" aria-required="true">
                            </div>

                            <div class="col-md-6 col-xs-6 bottommargin-sm">
                                <label for="template-contactform-edu">学历 <small>*</small></label>
                                <input type="text" id="template-contactform-edu" name="template-contactform-edu" value="{{old('template-contactform-edu')}}" class="required form-control" aria-required="true">
                            </div>

                            <div class="col-md-6 col-xs-6 bottommargin-sm">
                                <label for="template-contactform-study">专业 <small>*</small></label>
                                <input type="text" id="template-contactform-study" name="template-contactform-study" value="{{old('template-contactform-study')}}" class="required form-control" aria-required="true">
                            </div>

                            <div class="col-md-6 col-xs-6 bottommargin-sm">
                                <label for="template-contactform-phone">手机号 <small>*</small></label>
                                <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="{{old('template-contactform-phone')}}" class="required form-control" aria-required="true">
                            </div>

                            <div class="col-md-6 col-xs-6 bottommargin-sm">
                                <label for="template-contactform-qqweixin">QQ号/微信号 <small>*</small></label>
                                <input type="text" id="template-contactform-qqweixin" name="template-contactform-qqweixin" value="{{old('template-contactform-qqweixin')}}" class="required form-control" aria-required="true">
                            </div>

                            <div class="col-md-12 col-xs-12 bottommargin-sm">
                                <label for="template-contactform-ielts">雅思成绩/每项 </label>
                                <input type="text" id="template-contactform-ielts" name="template-contactform-ielts" value="{{old('template-contactform-ielts')}}" class="form-control" placeholder="L6、S6、R6、W6" aria-required="true">
                            </div>

                            <div class="col-md-12 col-xs-12 bottommargin-sm">
                                <label for="template-contactform-email">电子邮箱 <small>*</small></label>
                                <input type="email" id="template-contactform-email" name="template-contactform-email" value="{{old('template-contactform-email')}}" class="required email form-control" aria-required="true">
                            </div>

                            <div class="clear"></div>

                            <div class="col-md-12 col-xs-12 bottommargin-sm">
                                <label for="template-contactform-service">移民国家</label>
                                <select id="template-contactform-service" name="template-contactform-service" class="form-control">
                                    <option value="">-- 选择其中一项 --</option>
                                    <option value="加拿大">加拿大</option>
                                    <option value="美国">美国</option>
                                </select>
                            </div>

                            <div class="clear"></div>

                            <div class="col_full">
                                <label for="template-contactform-message">评估 / 咨询内容 <small>*</small></label>
                                <textarea class="required form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30" aria-required="true">{{old('template-contactform-message')}}</textarea>
                            </div>

                            <div class="col_half bottommargin-sm">
                                <label for="template-contactform-captcha">输入验证码：</label>
                                <img class="thumbnail captcha" src="{{ captcha_src('flat') }}" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码">
                                <input id="captcha" class="form-control" name="captcha" >
                            </div>

                            <div class="col_full">
                                <button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">提交信息</button>
                            </div>

                        </form>

                </div><!-- .postcontent end -->

            </div>

        </div>

    </section><!-- #content end -->
@endsection

