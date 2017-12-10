<!-- Footer
============================================= -->
<footer id="footer" class="dark">

    <div class="container">

        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap clearfix">

            <div class="col_two_third">

                <div class="col_one_third">

                    <div class="widget clearfix">

                        <img src="{{Storage::disk('qiniu')->url('images/footer-widget-logo.png') }}" alt="" class="footer-logo">

                        {{--<p> 关注技术移民 <strong>政策动向</strong>, 探讨华裔移民 <strong>热点问题</strong>. </p>--}}

                        {{--<div style="background: url('{{ asset('images/world-map.png') }}') no-repeat center center; background-size: 100%;">--}}
                            {{--<address>--}}
                                {{--<strong>Headquarters:</strong><br>--}}
                                {{--795 Folsom Ave, Suite 600<br>--}}
                                {{--San Francisco, CA 94107<br>--}}
                            {{--</address>--}}
                            {{--<abbr title="Phone Number"><strong>电话:</strong></abbr> (91) 8547 632521<br>--}}
                            {{--<abbr title="Fax"><strong>传真:</strong></abbr> (91) 11 4752 1433<br>--}}
                            {{--<abbr title="Email Address"><strong>邮箱:</strong></abbr> visa@yijuzhe.com--}}
                        {{--</div>--}}

                    </div>

                </div>

                <div class="col_one_third">

                    <div class="widget widget_links clearfix">

                        {{--<h4>Blogroll</h4>--}}

                        {{--<ul>--}}
                            {{--<li><a href="http://codex.wordpress.org/">Documentation</a></li>--}}
                            {{--<li><a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>--}}
                            {{--<li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>--}}
                            {{--<li><a href="http://wordpress.org/support/">Support Forums</a></li>--}}
                            {{--<li><a href="http://wordpress.org/extend/themes/">Themes</a></li>--}}
                            {{--<li><a href="http://wordpress.org/news/">WordPress Blog</a></li>--}}
                            {{--<li><a href="http://planet.wordpress.org/">WordPress Planet</a></li>--}}
                        {{--</ul>--}}
                        <p> 关注技术移民 <strong>政策动向</strong>, 探讨华裔移民 <strong>热点问题</strong>. </p>

                        <div style="background: url('{{ Storage::disk('qiniu')->url('images/world-map.png') }}') no-repeat center center; background-size: 100%;">
                            <address>
                                <strong>建议反馈？请私信:</strong><br>
                                <br>
                                {{--移民投资，相伴一路<br>--}}
                            </address>

                            <abbr title="Phone Number"><strong>电话:</strong></abbr> (91) 999 999999<br>
                            <abbr title="Fax"><strong>传真:</strong></abbr> (91) 11 9999 9999<br>
                            <abbr title="Email Address"><strong>邮箱:</strong></abbr> visa@yijuzhe.com
                        </div>

                    </div>

                </div>

                <div class="col_one_third col_last">

                    <div class="widget clearfix">
                        <p>扫二维码关注最新移民资讯：</p>
                        <p>为 移民 而生,移居者 的愿景是做最好的 移民平台 , 有任何跟移民相关的问题，都可以在这里得到解决。Enjoy Life !</p>
                        {{--<img style="text-align: center" width="50%" src="{{ url('images/test.jpg') }}" alt="">--}}
                        {{--<h4>最新热点</h4>--}}

                        {{--<div id="post-list-footer">--}}
                            {{--<div class="spost clearfix">--}}
                                {{--<div class="entry-c">--}}
                                    {{--<div class="entry-title">--}}
                                        {{--<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>--}}
                                    {{--</div>--}}
                                    {{--<ul class="entry-meta">--}}
                                        {{--<li>10th July 2014</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="spost clearfix">--}}
                                {{--<div class="entry-c">--}}
                                    {{--<div class="entry-title">--}}
                                        {{--<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>--}}
                                    {{--</div>--}}
                                    {{--<ul class="entry-meta">--}}
                                        {{--<li>10th July 2014</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="spost clearfix">--}}
                                {{--<div class="entry-c">--}}
                                    {{--<div class="entry-title">--}}
                                        {{--<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>--}}
                                    {{--</div>--}}
                                    {{--<ul class="entry-meta">--}}
                                        {{--<li>10th July 2014</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>

                </div>

            </div>

            <div class="col_one_third col_last">

                {{--<div class="widget clearfix" style="margin-bottom: -20px;">--}}

                    {{--<div class="row">--}}

                        {{--<div class="col-md-6 bottommargin-sm">--}}
                            {{--<div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>--}}
                            {{--<h5 class="nobottommargin">Total Downloads</h5>--}}
                        {{--</div>--}}

                        {{--<div class="col-md-6 bottommargin-sm">--}}
                            {{--<div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>--}}
                            {{--<h5 class="nobottommargin">Clients</h5>--}}
                        {{--</div>--}}

                    {{--</div>--}}

                {{--</div>--}}

                <div class="widget subscribe-widget clearfix">
                    <h5><strong>订阅</strong>最新的移民资讯、动态及移民政策</h5>
                    <div class="widget-subscribe-form-result"></div>
                    <form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
                        <div class="input-group divcenter">
                            <span class="input-group-addon"><i class="icon-email2"></i></span>
                            <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="输入电子邮箱">
                            <span class="input-group-btn">
										<button class="btn btn-success" type="submit">提交订阅</button>
									</span>
                        </div>
                    </form>
                </div>

                <div class="widget clearfix" style="margin-bottom: -20px;">

                    <div class="row">

                        <div class="col-md-6 clearfix bottommargin-sm">
                            <a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>
                            <a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
                        </div>
                        <div class="col-md-6 clearfix">
                            <a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
                                <i class="icon-rss"></i>
                                <i class="icon-rss"></i>
                            </a>
                            <a href="#"><small style="display: block; margin-top: 3px;"><strong>订阅</strong><br>RSS Feeds</small></a>
                        </div>

                    </div>

                </div>

            </div>

        </div><!-- .footer-widgets-wrap end -->

    </div>

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights">

        <div class="container clearfix">

            <div class="col_half">
                移居者 Copyrights &copy; 2017 All Rights Reserved.<br>
                <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
            </div>

            <div class="col_half col_last tright">
                <div class="fright clearfix">
                    <a href="#" class="social-icon si-small si-borderless si-facebook">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless si-twitter">
                        <i class="icon-twitter"></i>
                        <i class="icon-twitter"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless si-gplus">
                        <i class="icon-gplus"></i>
                        <i class="icon-gplus"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless si-pinterest">
                        <i class="icon-pinterest"></i>
                        <i class="icon-pinterest"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless si-vimeo">
                        <i class="icon-vimeo"></i>
                        <i class="icon-vimeo"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless si-github">
                        <i class="icon-github"></i>
                        <i class="icon-github"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless si-yahoo">
                        <i class="icon-yahoo"></i>
                        <i class="icon-yahoo"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless si-linkedin">
                        <i class="icon-linkedin"></i>
                        <i class="icon-linkedin"></i>
                    </a>
                </div>

                <div class="clear"></div>

                <i class="icon-envelope2"></i> visa@yijuzhe.com
            </div>

        </div>

    </div><!-- #copyrights end -->

</footer><!-- #footer end -->