<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    {{--<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />--}}
{{--    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />--}}
    {{--<link rel="stylesheet" href="{{ asset('style.css') }}" type="text/css" />--}}
{{--    <link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css" />--}}
{{--    <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css" />--}}
    {{--<link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />--}}
{{--    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" />--}}
    {{--<link rel="stylesheet" href="{{ asset('css/calendar.css') }}" type="text/css" />--}}

    {{--<link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css" />--}}
    <link rel="stylesheet" href="{{ Storage::disk('qiniu')->url('css/all.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        .content blockquote {
            border-left: 4px solid #8cc34a;
        }
    </style>

@yield('slider-css')
    <!-- Document Title
    ============================================= -->
    <title>@yield('title') | 移居者</title>

@yield('style-css')

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

@include('layouts._header')

@yield('slider')

@yield('vertical-nav')

@yield('page-title')
<div id="app">
@yield('content')
</div>
@include('layouts._footer')

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
{{--<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>--}}

<!-- Footer Scripts
============================================= -->
{{--<script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>--}}
<script type="text/javascript" src="{{ Storage::disk('qiniu')->url('js/all.js') }}"></script>
<script type="text/javascript" src="{{ Storage::disk('qiniu')->url(mix('js/app.js')) }}"></script>

@yield('slider-js')

@yield('extra-js')

<script type="text/javascript">
    jQuery(document).ready(function($){
        $( '#vertical-nav nav ul li:has(ul)' ).addClass('sub-menu');
        $( '#vertical-nav nav ul li:has(ul) > a' ).append( ' <i class="icon-angle-down"></i>' );

        $( '#vertical-nav nav ul li:has(ul) > a' ).click( function(e){
            var element = $(this);
            $( '#vertical-nav nav ul li' ).not(element.parents()).removeClass('active');
            element.parent().children('ul').slideToggle( function(){
                $(this).find('ul').hide();
                $(this).find('li.active').removeClass('active');
            });
            $( '#vertical-nav nav ul li > ul' ).not(element.parent().children('ul')).not(element.parents('ul')).slideUp();
            element.parent('li:has(ul)').toggleClass('active');
            e.preventDefault();
        });
    });
</script>

</body>
</html>