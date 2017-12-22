<!-- Header
============================================= -->
<header id="header" class="full-header">

    <div id="header-wrap">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="/" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="{{ Storage::disk('qiniu')->url('images/logo.png') }}" alt="Canvas Logo"></a>
                <a href="/" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="{{ Storage::disk('qiniu')->url('images/logo@2x.png') }}" alt="Canvas Logo"></a>
            </div><!-- #logo end -->

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu">

                <ul>
                    <li @if (Route::is('pages.home')) class="current" @endif><a href="/"><div>首页</div></a>
                    </li>
                    <li @if (Route::is('categories.index') || Route::is('posts.show') || Route::is('pages.docs')) class="current" @endif><a href="{{ url('docs') }}"><div>移民指南</div></a>
                    </li>
                    <li class="mega-menu"><a href="#"><div>热门话题</div></a>
                    </li>
                    <li class="mega-menu{{ Route::is('contact.show') ? ' current' : '' }}"><a href="{{ route('contact.show') }}"><div>免费咨询</div></a>
                    </li>
                </ul>

                <!-- Top Search
                ============================================= -->
                <div id="top-search">
                    <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                    <form action="/posts/search" method="get">
                        <input type="text" name="query" class="form-control required" value="" placeholder="输入搜索词..">
                    </form>
                </div><!-- #top-search end -->

            </nav><!-- #primary-menu end -->

        </div>

    </div>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111347404-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-111347404-1');
    </script>

    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?d5b7f0415de8932b338a0ff9bb11d52c";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</header><!-- #header end -->