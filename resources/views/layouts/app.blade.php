<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    {{--<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />--}}
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="css/calendar.css" type="text/css" />

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
    ============================================= -->
    <title>@yield('title') | 移居者</title>

    <style>

        #vertical-nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 240px;
            z-index: 99;
            background: #F9F9F9;
            border-right: 1px solid #EEE;
            height: 100%;
            overflow: auto;
            padding: 140px 0 40px;
            -webkit-transition: padding .4s ease;
            -o-transition: padding .4s ease;
            transition: padding .4s ease;
        }

        .sticky-header + #vertical-nav { padding-top: 100px; }

        #vertical-nav nav ul {
            margin-bottom: 0;
            list-style: none;
        }

        #vertical-nav nav li a {
            display: block;
            padding: 10px 30px;
            color: #333;
            text-transform: uppercase;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 2px;
            font-family: 'Raleway', sans-serif;
        }

        #vertical-nav nav li i {
            font-size: 14px;
            width: 16px;
            text-align: center;
        }

        #vertical-nav nav li i:not(.icon-angle-down) {
            margin-right: 8px;
            position: relative;
            top: 1px;
        }

        #vertical-nav nav li a i.icon-angle-down {
            width: auto;
            margin-left: 5px;
        }

        #vertical-nav nav li:hover > a,
        #vertical-nav nav li.current > a,
        #vertical-nav nav li.active > a {
            background-color: #FFF;
            color: #1ABC9C;
        }

        #vertical-nav nav ul ul { display: none; }

        #vertical-nav nav ul ul a {
            font-size: 12px;
            letter-spacing: 1px;
            padding-left: 45px;
            font-family: 'Lato', sans-serif;
        }

        #vertical-nav nav ul ul a i.icon-angle-down { font-size: 12px; }

        #vertical-nav nav ul ul ul a { padding-left: 60px; }
        #vertical-nav nav ul ul ul ul a { padding-left: 75px; }

        @media (min-width: 992px) {

            #header { z-index: 199; }

            #page-title,
            #content,
            #footer { margin-left: 240px; }

            #page-title .container,
            #content .container,
            #footer .container {
                width: auto;
                padding: 0 60px;
            }

            #vertical-nav .container {
                width: 100%;
                padding: 0;
            }

            #page-title .breadcrumb { right: 60px !important; }

        }


        @media (max-width: 991px) {

            #vertical-nav {
                position: relative;
                width: 100%;
                z-index: auto;
                border: none;
                border-bottom: 1px solid #EEE;
                height: auto;
                padding: 0;
            }

            #vertical-nav .container { padding: 10px 20px; }

            #vertical-nav nav li a { padding: 10px 0; }

            #vertical-nav nav li:hover > a,
            #vertical-nav nav li.current > a,
            #vertical-nav nav li.active > a { background-color: transparent; }

            #vertical-nav nav ul ul a { padding-left: 15px; }
            #vertical-nav nav ul ul ul a { padding-left: 30px; }
            #vertical-nav nav ul ul ul ul a { padding-left: 45px; }

        }

    </style>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

@include('layouts._header')

@yield('vertical-nav')

@yield('page-title')

@yield('content')

@include('layouts._footer')

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="js/functions.js"></script>

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