@extends('layouts.app')
@section('title', "关于'" . $query . "的搜索结果")
@section('style-css')
    <style>
        .h50 {
            height: 50px;
        }
        .search-results {
            margin-top: 20px;
            padding: 20px;
            line-height: 25px;
        }

        .search-results .panel-heading h3 {
            color: #696969;
            font-size: 15px;
            margin-bottom: 12px;
        }

        .search-results a {
            color: #333;
        }

        .search-results .result {
            margin-bottom: 20px;
        }

        .search-results .user.result {
            margin-top: 8px;
            margin-bottom: 0px;
        }

        .search-results .result em {
            color: #EB5424;
            font-style: normal;
        }

        .search-results .result .title {
            font-size: 18px;
        }

        .search-results .result .title .badge {
            background: #EBEDEE;
            color: #9A9DA0;
            font-weight: normal;
            font-size: 12px;
            margin-left: 4px;
        }

        .search-results .result .info {
            margin-bottom: 6px;
            font-size: 14px;
        }

        .search-results .result .info .url a {
            color: #23863F;
        }

        .search-results .result .info .date {
            color: #999;
            margin-left: 8px;
        }

        .search-results .result .desc {
            color: #666;
            font-size: 14px;
            word-break: break-all;
        }

        .search-results .result .desc em {
            color: #F86334;
        }

        .search-results .user .info {
            margin-top: 4px;
            font-size: 14px;
        }

        .search-results .user .info.number {
            color: #666;
            font-size: 13px;
        }

        .search-results em {
            color: #e07b7a;
        }

        .search-results .role-label {
            display: inline-block;
            position: absolute;
        }

        .search-results .role-label a.label {
            font-size: 85%;
            font-weight: 100;
            padding: 0.2em 1em .2em;
            position: relative;
            margin: 8px;
            color: #fff;
        }

        .search-results .user-info {
            padding-top: 8px;
            padding-left: 8px;
        }

        .search-results hr {
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .search-results .list-panel .panel-body {
            padding: 0px;
        }
    </style>
@endsection

@section('content')
    @include('common.error')
    @if($query)
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default list-panel search-results">
                    <div class="panel-heading">
                        <h3 class="panel-title ">
                            <i class="fa fa-search"></i> 关于 “<span class="highlight">{{ $query }}</span>” 的搜索结果, 共 {{ $paginator->total() }} 条
                        </h3>
                    </div>

                    <div class="panel-body ">
                        @foreach($paginator as $post)
                            <div class="result">
                                <h2 class="title">
                                    <a href="{{ route('posts.show', [$post->id, $post->slug]) }}" target="_blank">
                                        @if (isset($post->highlight['title']))
                                            @foreach ($post->highlight['title'] as $item)
                                                {!! $item !!}
                                            @endforeach
                                        @else
                                            {{ $post->title }}
                                        @endif
                                    </a>
                                </h2>
                                <div class="info">
                                </div>
                                <div class="desc">
                                    @if (isset($post->highlight['body']))
                                        @foreach ($post->highlight['body'] as $item)
                                            ......{!! strip_tags($item, '<em>') !!}......
                                        @endforeach
                                    @else
                                        {{ mb_substr(strip_tags($post->body), 0, 150) }}......
                                    @endif
                                </div>
                                <hr>
                            </div>
                        @endforeach
                    </div>
                    {{ $paginator->links() }}
                </div>
            </div>
        </div>
    @else
        <div class="row text-center">
            <div class="col-md-12">
                <br>
                <h2>你会搜索到什么？</h2>
                <br>
                <p>移居者 - 关注移民政策动向</p>
            </div>
        </div>
    @endif
@endsection

@section('extra-js')
    <script type="text/javascript">
        jQuery(document).ready(function($){
            $( 'body' ).addClass('top-search-open');
        });
    </script>
@endsection