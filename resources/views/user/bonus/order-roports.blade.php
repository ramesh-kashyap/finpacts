<html style="font-size: 50px;" translate="no">

<head>
    <meta charset="utf-8">
    <title>Order History</title>
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="expires" content="0">
    <meta name="viewport"
        content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,viewport-fit=cover">
    <link rel="icon" href="{{asset('')}}logo.png">
    <meta name="google" content="notranslate">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="full-screen" content="true">
    <meta name="x5-fullscreen" content="true">
    <meta name="360-fullscreen" content="true">
    <meta name="renderer" content="webkit">
    <meta name="robots" content="noindex, nofollow">
    <style type="text/css">
        .page-loading-con {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .page-loading {
            width: 1.5em;
            height: 1.5em;
            border-radius: 50%;
            display: inline-block;
            vertical-align: middle;
            position: relative;
        }

        .loader-outter,
        .loader-inner {
            position: absolute;
            border: 0.1em solid #0b53b4;
            border-radius: 50%;
        }

        .loader-outter {
            border-left-color: transparent;
            border-bottom: 0;
            width: 100%;
            height: 100%;
            -webkit-animation: loader-outter 1s cubic-bezier(0.42, 0.61, 0.58, 0.41) infinite;
            animation: loader-outter 1s cubic-bezier(0.42, 0.61, 0.58, 0.41) infinite;
        }

        .loader-inner {
            width: 1em;
            height: 1em;
            left: calc(50% - 0.5em);
            top: calc(50% - 0.5em);
            border-right: 0;
            border-top-color: transparent;
            -webkit-animation: loader-inner 1s cubic-bezier(0.42, 0.61, 0.58, 0.41) infinite;
            animation: loader-inner 1s cubic-bezier(0.42, 0.61, 0.58, 0.41) infinite;
        }

        @-webkit-keyframes loader-outter {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        <blade keyframes|%20loader-outter%20%7B>0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
        }

        @-webkit-keyframes loader-inner {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(-360deg);
                transform: rotate(-360deg);
            }
        }

        <blade keyframes|%20loader-inner%20%7B>0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(-360deg);
        }
        }
    </style>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            text-transform: capitalize;
        }
    </style>

    <link href="{{ asset('') }}static/css/app.c3049ff2.css" rel="preload" as="style">
    <link href="{{ asset('') }}static/css/chunk-vant.d14f5539.css" rel="preload" as="style">
    <link href="{{ asset('') }}static/css/chunk-vendors.794edbf9.css" rel="preload" as="style">
    <link href="{{ asset('') }}static/css/chunk-vant.d14f5539.css" rel="stylesheet">
    <link href="{{ asset('') }}static/css/chunk-vendors.794edbf9.css" rel="stylesheet">
    <link href="{{ asset('') }}static/css/app.c3049ff2.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-5e3ca19c.d046fd46.css">
    <script charset="utf-8" src="/js1744307594169/chunk-5e3ca19c.77374a8b.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-5576a184.9f52f39a.css">
    <script charset="utf-8" src="/js1744307594169/chunk-5576a184.c49d8c14.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-7cbde8e8.788c4ae8.css">
    <script charset="utf-8" src="/js1744307594169/chunk-7cbde8e8.43936207.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-4f89519c.2a0f3cea.css">
    <script charset="utf-8" src="/js1744307594169/chunk-4f89519c.5238fa59.1744307594169.chunk.js"></script>
    <script charset="utf-8" src="/js1744307594169/chunk-4006da76.e92bfa42.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-4a423c40.9e22073a.css">
    <script charset="utf-8" src="/js1744307594169/chunk-4a423c40.e4024504.1744307594169.chunk.js"></script>
</head>

<body class="mein_cn">
    <div class="page-loading-con" id="loaderInit" style="display: none;">
        <div class="page-loading">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
        </div>
    </div>
    <div id="app" class="applang">
        <div data-v-6302a7bf="">
            <div data-v-6302a7bf="" class="van-pull-refresh">
                <div class="van-pull-refresh__track" style="transition-duration: 0ms;">
                    <div class="van-pull-refresh__head" style="height: 60px;"></div>
                    <div data-v-decd48ac="" data-v-4c275272="" class="page">
                        <div data-v-decd48ac="" class="headers on">
                            <div data-v-29c52665="" data-v-4c275272="" class="head head0" data-v-decd48ac="">
                                <div data-v-29c52665="" class="container flex">

                                    <a href="{{ route('user.income') }}">
                                        <div data-v-29c52665="" class="back"><img data-v-29c52665=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAE+SURBVHgB3diLDYIwEAbgwy7gCLoBbOIGtiM4gbqBE0DdSCcQJ5AN8GrAIPIobXNH+JOG0jbhCyVpC8DSIqVcmwKBsgKPKKX2URQ9sLwQdYQAicAxBoMX3Wwry3Krtc7BI05vqAtTpQDPTAb1YXDaFL4db9CkKRvCpGmqIUCsQRQYaxAVxgpEiRkFUWMGQRyYXhAXphPEifkDcWN+QHPAfEEDaxNVciynLMuu9Vp2At5ssFxMpQYF22B55LMwf0C4jzkAbwr8Vs+m8v2occcnsTHrGCzN3AJRRF25YeI4fiJq1xqzS5Ikx+47EEQ0b+aAEu0GbpToauREib4OLpQY6uRAibEB1KhREDXKCkSJsgZRoZzO9j3LTFGd7b1Or05ne3yoxoerVnOQHYPz75g2yqzWIc723ql+WG1gqXkDGBPa7OTyg7AAAAAASUVORK5CYII="
                                                alt=""></div>

                                    </a>
                                    <div data-v-29c52665="" class="name tac">Order History</div>
                                    <div data-v-29c52665="" class="flex1"></div>

                                </div>
                            </div>
                        </div>
                        <div data-v-decd48ac="" id="scroll" class="content-container" style="padding-top: 44px;">
                            <div data-v-decd48ac="" id="content" class="content-scroll">
                                <div data-v-4c275272="" data-v-decd48ac="" class="container">


                                    <style>
                                        .flex.tab li {
                                            padding: 10px 15px;
                                            border-bottom: 2px solid transparent;
                                            display: inline-block;
                                        }

                                        .flex.tab li.active {
                                            border-bottom: 2px solid #007bff;
                                            /* blue underline */
                                        }

                                        .flex.tab li a {
                                            text-decoration: none;
                                            color: #fff;
                                        }
                                    </style>

<style>
    /* Pagination container */
    .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
        list-style: none;
        padding: 0;
    }

    /* Each page item */
    .page-item {
        margin: 0 5px;
    }

    /* Page link style */
    .page-link {
        display: block;
        padding: 0px 15px;
        background: #042d50;
        color: #fff;
        border-radius: 8px;
        text-decoration: none;
        transition: 0.3s ease;
    }

    /* Hover effect */
    .page-link:hover {
        background: #0371d8;
        color: #fff;
        border-color: #0371d8;
    }

    /* Active page */
    .page-item.active .page-link {
        background: #ebebeb;
        /* Light green */
        color: #000;
        font-weight: bold;
        border-color: #ebebeb;
    }

    /* Disabled page (e.g., Prev when on first page) */
    .page-item.disabled .page-link {
        background: #ccc;
        color: #666;
        cursor: not-allowed;
    }
</style>

<style>
    .list .list-item[data-v-68c18260] {
        border-radius: .24rem;
        border: .02rem solid hsla(0, 0%, 100%, .1);
        background: linear-gradient(72deg, #042d50, #070808);
        margin-bottom: .24rem;
        padding: .332rem .28rem;
        line-height: 100%;
        margin-top: 15px;
    }

    .list .list-item .com1[data-v-68c18260] {
        display: flex;
        border-bottom: .02rem solid hsla(0, 0%, 100%, .1);
        padding-bottom: .32rem;
        margin-bottom: .32rem;
    }

    .list .list-item .com1 .left[data-v-68c18260] {
        flex: 1;
        margin-right: .24rem;
    }

    .list .list-item .com1 .left .title[data-v-68c18260] {
        font-weight: 500;
        margin-bottom: .16rem;
    }

    .list .list-item .com1 .left .time[data-v-68c18260] {
        color: #7d7d88;
        font-size: .24rem;
    }

    .list .list-item .com1 .right[data-v-68c18260] {
        display: flex;
        align-items: center;
    }

    .list .list-item .com1 .right div[data-v-68c18260] {
        width: .12rem;
        height: .12rem;
        border-radius: 50%;
        background: #00fc83;
        filter: drop-shadow(0 0 .06897rem rgba(0, 252, 131, .6));
    }

    .list .list-item .com1 .right span[data-v-68c18260] {
        opacity: .6;
        font-size: .24rem;
        margin: 0 .1rem;
    }

    .list .list-item .com1 .right i[data-v-68c18260] {
        opacity: .6;
        font-size: .24rem;
    }

    .van-icon,
    .van-icon:before {
        display: inline-block;
    }

    .van-icon {
        position: relative;
        font: normal normal normal .24138rem / 1 vant-icon;
        font: normal normal normal .24138rem / 1 var(--van-icon-font-family, "vant-icon");
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
    }

    .flex {
        display: flex;
        flex-wrap: wrap;
    }

    li,
    ol,
    ul {
        list-style: none;
    }

    .list .list-item ul li[data-v-68c18260] {
        flex: 1;
    }

    li,
    ol,
    ul {
        list-style: none;
    }

    .list .list-item ul li[data-v-68c18260]:nth-child(2) {
        text-align: center;
    }

    .list .list-item ul li[data-v-68c18260]:last-child {
        text-align: right;
    }

    .list .list-item ul li[data-v-68c18260] {
        flex: 1;
    }

    .list .list-item ul li .title[data-v-68c18260] {
        font-size: .24rem;
        color: #7d7d88;
        margin-bottom: .16rem;
    }

    .list .list-item ul li:last-child .val[data-v-68c18260] {
        color: #96c906;
    }

    blockquote,
    body,
    dd,
    del,
    div,
    dl,
    dt,
    fieldset,
    form,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    input,
    li,
    menu,
    ol,
    p,
    pre,
    td,
    textarea,
    th,
    ul {
        margin: 0;
        padding: 0;
    }

    .van-empty {
        display: -webkit-box;
        display: -webkit-flex;
        display: flex;
        -webkit-box-orient:
            vertical;
        -webkit-box-direction:
            normal;
        -webkit-flex-direction:
            column;
        flex-direction: column;
        -webkit-box-align:
            center;
        -webkit-align-items:
            center;
        align-items: center;
        -webkit-box-pack:
            center;
        -webkit-justify-content:
            center;
        justify-content: center;
        box-sizing: border-box;
        padding:
            .55172rem 0;
    }

    .van-empty__image,
    .van-empty__image img {
        width: auto !important;
    }

    .van-empty__image {
        height: 2.4rem !important;
    }
</style>




                                    <ul data-v-4c275272="" data-v-decd48ac="" class="setBox flex">
                                     
                                    </ul>
                                    @if ($level_income->isEmpty())
                                    <div data-v-4c275272="" data-v-decd48ac="" class="empty db"
                                        style="display: block;">
                                        <div data-v-4c275272="" data-v-decd48ac="" class="flexs">
                                            <div data-v-5f0c154b="" data-v-4c275272="" class="empty db custom-image"
                                                data-v-decd48ac="">
                                                <div data-v-5f0c154b="" class="flexs">
                                                    <div data-v-5f0c154b="" class="custom-image van-empty">
                                                        <div class="van-empty__image"><img
                                                                src="/static/img/none0.f307acfc.png"></div>
                                                        <p class="van-empty__description">No data yet</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    <div data-v-4c275272="" class="van-pull-refresh" data-v-decd48ac="">
                                        <div class="van-pull-refresh__track" style="transition-duration: 0ms;">
                                            <div class="van-pull-refresh__head" style="height: 50px;"></div>



                                            @if(!empty($level_income) && (is_array($level_income) || is_object($level_income)))

                                            @foreach ($level_income as $value)
                                                <div data-v-6e348d44="" class="van-pull-refresh" data-v-decd48ac="">
                                                    <div class="van-pull-refresh__track"
                                                        style="transition-duration: 0ms;">



                                                        <div class="van-pull-refresh__head" style="height: 50px;">
                                                        </div>



                                                        <div data-v-6e348d44="" role="feed" class="van-list list">
                                                            <div data-v-68c18260="" class="list-item">
                                                                <div data-v-68c18260="" class="com1">
                                                                    <div data-v-68c18260="" class="left">
                                                                        <div data-v-68c18260="" class="title"></div>
                                                                        <div data-v-68c18260="" class="time">
                                                                            {{ date('D, d M Y H:i:s', strtotime($value->created_at)) }}
                                                                        </div>
                                                                    </div>
                                                                    <div data-v-68c18260="" class="right">
                                                                        <div data-v-68c18260=""></div>
                                                                        <span data-v-68c18260="">Completed</span>
                                                                        <i data-v-68c18260=""
                                                                            class="van-icon van-icon-arrow"></i>
                                                                    </div>
                                                                </div>
                                                                <ul data-v-68c18260="" class="flex">
                                                                    <li data-v-68c18260="">
                                                                        <img style="    width: 40px;height: 40px;    margin-left: 41px;"
                                                                            src="{{ $value->company_logo }}"
                                                                            alt="Company Logo"
                                                                            class="w-12 h-12 rounded-xl object-cover">
                                                                        <div class="font-semibold"
                                                                            style="margin:10px">
                                                                            {{ $value->company_name }}
                                                                        </div>
                                                                    </li>

                                                                    <li data-v-68c18260="">
                                                                        <div data-v-68c18260="" class="title">
                                                                            Commission</div>
                                                                        <div data-v-68c18260="" class="val">
                                                                            {{ $value->roi ?? '0' }} USDT</div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif

                                            <div class="van-list__finished-text" style="margin-bottom: 30em;">
                                                {{ $level_income->withQueryString()->links() }}
    
                                            </div>



                                      
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="van-overlay" style="z-index: 2005; display: none;"></div>
                            <div data-v-4c275272="" class="van-popup van-popup--bottom"
                                style="background: none; z-index: 2006; display: none;">
                                <div data-v-4c275272="" class="pop_type">
                                    <ul data-v-4c275272="">
                                        <li data-v-4c275272="" class="on"> All </li>
                                        <li data-v-4c275272="" class=""> Completed </li>
                                        <li data-v-4c275272="" class=""> Under review </li>
                                        <li data-v-4c275272="" class=""> Failed </li>
                                    </ul>
                                    <div data-v-4c275272="" class="cancel"> Cancel </div>
                                </div>
                            </div>
                            <div class="van-overlay" style="z-index: 2007; display: none;"></div>
                            <div data-v-4c275272="" class="van-popup van-popup--bottom"
                                style="background: none; z-index: 2008; display: none;">
                                <div data-v-4c275272="" class="pop_type">
                                    <ul data-v-4c275272="">
                                        <li data-v-4c275272="" class="on"> All </li>
                                        <li data-v-4c275272="" class=""> USDT </li>
                                        <li data-v-4c275272="" class=""> USDC </li>
                                    </ul>
                                    <div data-v-4c275272="" class="cancel"> Cancel </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---->
                </div>
            </div>
        </div>
    </div>
    <div data-v-a7d12cfc="" class="global-loading default" style="display: none;">
        <div data-v-a7d12cfc="" class="global-spinner"><img data-v-a7d12cfc=""
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAArCAYAAAADgWq5AAAACXBIWXMAAAsTAAALEwEAmpwYAAAF6WlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDIgNzkuMTYwOTI0LCAyMDE3LzA3LzEzLTAxOjA2OjM5ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIiB4bWxuczpwaG90b3Nob3A9Imh0dHA6Ly9ucy5hZG9iZS5jb20vcGhvdG9zaG9wLzEuMC8iIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAyMi0wNC0xMlQxNTo0MTowNiswODowMCIgeG1wOk1vZGlmeURhdGU9IjIwMjItMDQtMTJUMTU6NDM6MTQrMDg6MDAiIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDQtMTJUMTU6NDM6MTQrMDg6MDAiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NWU0ZGQwNmEtMWExNS1kYjRmLTkyZmQtZjIzNTAwNzJkMGNmIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjlGMTI0NjE1NTQzQzExRThCQzhCQzEyQjVDOUMzOEJGIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6OUYxMjQ2MTU1NDNDMTFFOEJDOEJDMTJCNUM5QzM4QkYiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiBwaG90b3Nob3A6SUNDUHJvZmlsZT0ic1JHQiBJRUM2MTk2Ni0yLjEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5RjEyNDYxMjU0M0MxMUU4QkM4QkMxMkI1QzlDMzhCRiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5RjEyNDYxMzU0M0MxMUU4QkM4QkMxMkI1QzlDMzhCRiIvPiA8eG1wTU06SGlzdG9yeT4gPHJkZjpTZXE+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDo1ZTRkZDA2YS0xYTE1LWRiNGYtOTJmZC1mMjM1MDA3MmQwY2YiIHN0RXZ0OndoZW49IjIwMjItMDQtMTJUMTU6NDM6MTQrMDg6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAoV2luZG93cykiIHN0RXZ0OmNoYW5nZWQ9Ii8iLz4gPC9yZGY6U2VxPiA8L3htcE1NOkhpc3Rvcnk+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+hddYGwAABHhJREFUWIXN2XuoFVUUx/HPXG9WmmIPJQtNwQwqe5paEI1pCBZCRvVXDwlKCsLpIURgIZZG1KEXRVJJWPRnIv3TAw/0UCsrUlBLLQ1T01Ip6eZr+mPPOHOP56jXcz3XHxzu3nv2nv29a/bstdaeyJIXdYOG4bLs77k4AzvQFyvxKw7gJ/xZHpjGSZcmam8Csg/uxU0Yi8HHMGYz1uAtfIh/uzrp8QBPwFO4HgfR1oWx52e/CViX3ef9rkwedWFJXIQncE+da7uwHcuwF1uQClbvi1G4tMF9V+GuNE5+6C7gUzANT2Joqb0Dm/A6XsO+I9yjD/7DaMzArTi1ps/iNE6mNAvcjqfxKE4rtS/BXHxytAnqqBcuwHQ8XnNtP0amcfJLo8FHWn/98QIeK8Fuw3W48ThhCbvFBsxEhMWla+3YEFUrfbsKfDpewcOKR/e5sBssPU7QusqWwTTBurlWN+rfCHg67i7V3xasurFZwHpK42QBxmFP1jQkqlbW1utbD3g0ygt7Fe7T2QLdrjROVmBSqWlkVK28WtuvHvB7pfImXNvNbA2VxsmXeKnU9FBUrVxT7lMLHGNkVt6JO/DPiQKspzROZuC3UtM7UbVyiLMMPBDzSvWFWHFC6RprrLCbwCU4ZOUy8G24OivvxCwneN02UhonWwSD5Xo3L5SBpypii/mCu+1JzRHcOwyPqpVhFMD9MSYr78OnLUWrozRO1gk7FCE8mEwBPE7hzVbiu5bSNdabpfKkqFqJcuCr0Dsrr1ETZPegPiiVJ6dxkubAQwW/TohTTxa1K4x3IKpWLmwToqfhWWMqpDEnhdI42SrENYSYpqNN2O+uyBojfN16tPqKqpV2fJNVD+LK3MJbS/0GtRqskdI42Y+zsmob/moTlkHuVQ7qHKifDCpnJtvbBMg8XmjD2S1HaqCoWhmgCDl3o1e+S3xf6tey6OwY1K4IxrZhcw68rNRpjJNHA4WsG7ancbI7B/5CcagxCv1aTVarLKS8OaumAuMh17xFsVb64YaW0tVXO27PyvuxiAL4oJC35Xq+dVwNdbEiDv5btmzL4eXcUnmEwpn0lGYpwoVFaZykdAbeJZziEB7HG0JY13JF1crlyE+BdmQsODynm60ImkcIS6WliqqVQXhO8MCEg5Yf8+u1wFvxANbjfoUHbImiaqU3XsbErGkf5qRx0pH3qXfcOj/79YSeFXaG3JAz0zjZUO7QzIF2tymLyp7BI4oXbYVg7U7qceCoWhmKBRhfal6NKWmcHPYOdeX0/EQoxkc6wy7FxDROfq83oKcsfIvw+MfXtC8VLLuj0cBmgXsLb/RIfCVkK72FrXGfELjsEXLGFHcK580DdI5zd2F2GieVo03YLPCDwqF3nmr1Ek6N1grfN7Zn/8xenNPgHsuFbxw/H8uEzQLvVLwH+UZ/pnDOQfg0UKsD2biPMS+Nk5VdmbBZ4IVCVjtVyAXPE2LYsjqEtGs9vhWCrM8cp1NqFviA4OdzXz9ESLcGC+Abhe9yy4Vk8o8m5/M/9rYMi48jzWIAAAAASUVORK5CYII="
                alt=""></div>
    </div>
    <div data-v-b68a32e2="" class="page-loading-con" style="display: none;">
        <div data-v-b68a32e2="" class="page-loading">
            <div data-v-b68a32e2="" class="loader-outter"></div>
            <div data-v-b68a32e2="" class="loader-inner"></div>
        </div>
        <p data-v-b68a32e2="">Loading...</p>
    </div>
    <!---->
    </div>

</body>

</html>
