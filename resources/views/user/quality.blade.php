<html style="font-size: 50px;" translate="no">

<head>
    <meta charset="utf-8">
    <title>Contract</title>
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

        @keyframes loader-outter {
            0% {
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

        @keyframes loader-inner {
            0% {
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

        .van-swipe__track {
            transition-duration: 500ms;
            transform: translateX(-320px);
            width: 2240px
        }

        .van-swipe-item {
            flex-shrink: 0;
            width: 320px;
        }

        .list-box-wrapper {
            width: 232px;
            overflow: hidden;
        }
    </style>
    <link href="{{ asset('') }}js1744307594169/app.46ba12d9.1744307594169.js" rel="preload" as="script">
    <link href="{{ asset('') }}js1744307594169/chunk-echarts.cc04be28.1744307594169.chunk.js" rel="preload"
        as="script">
    <link href="{{ asset('') }}js1744307594169/chunk-vant.81420f35.1744307594169.chunk.js" rel="preload"
        as="script">
    <link href="{{ asset('') }}js1744307594169/chunk-vendors.374f8b51.1744307594169.chunk.js" rel="preload"
        as="script">
    <link href="{{ asset('') }}js1744307594169/chunk-vue.a3b4853b.1744307594169.chunk.js" rel="preload"
        as="script">
    <link href="{{ asset('') }}static/css/app.c3049ff2.css" rel="preload" as="style">
    <link href="{{ asset('') }}static/css/chunk-vant.d14f5539.css" rel="preload" as="style">
    <link href="{{ asset('') }}static/css/chunk-vendors.794edbf9.css" rel="preload" as="style">
    <link href="{{ asset('') }}static/css/chunk-vant.d14f5539.css" rel="stylesheet">
    <link href="{{ asset('') }}static/css/chunk-vendors.794edbf9.css" rel="stylesheet">
    <link href="{{ asset('') }}static/css/app.c3049ff2.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-7c54221e.86e4aaa2.css">
    <script charset="utf-8" src="{{ asset('') }}js1744307594169/chunk-7c54221e.a353e3ff.1744307594169.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-5576a184.9f52f39a.css">
    <script charset="utf-8" src="{{ asset('') }}js1744307594169/chunk-5576a184.c49d8c14.1744307594169.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-7cbde8e8.788c4ae8.css">
    <script charset="utf-8" src="{{ asset('') }}js1744307594169/chunk-7cbde8e8.43936207.1744307594169.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-4f89519c.2a0f3cea.css">
    <script charset="utf-8" src="{{ asset('') }}js1744307594169/chunk-4f89519c.5238fa59.1744307594169.chunk.js">
    </script>
    <script charset="utf-8" src="{{ asset('') }}js1744307594169/chunk-4006da76.e92bfa42.1744307594169.chunk.js">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-693d0a34.f05eb557.css">
    <script charset="utf-8" src="{{ asset('') }}js1744307594169/chunk-693d0a34.843d936b.1744307594169.chunk.js">
    </script>

</head>
<style>
    .upgrade-btn {
        transition: background 0.3s ease;
        width: 90%;
        max-width: 300px;
        margin-bottom: 13px;
        align-items: center;
        justify-content: center;
        height: .88rem;
        flex: 1;
        background: white;
        color: black;
        font-weight: 600;
        /* padding: 15px; */
        border-radius: 14px;
        border: none;
        box-shadow: 0 4px 10px rgba(255, 255, 255, 0.1);
        font-size: 17px;
        cursor: pointer;
    }

    .upgrade-btn:hover {
        background: white;
    }

    span.themeColor0 {
        color: #ffffff;
    }
    .themeColor0 {
    color: #191717;
}
</style>

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
                    <div data-v-decd48ac="" data-v-5959a183="" class="page">
                        <div data-v-decd48ac="" class="headers on">
                            <div data-v-29c52665="" data-v-5959a183="" class="head head0" data-v-decd48ac="">
                                <div data-v-29c52665="" class="container flex"><!---->
                                    <div data-v-29c52665="" class="myName">
                                        <div data-v-29c52665=""><img data-v-29c52665=""
                                                src="{{ asset('') }}static/img/logo.png"
                                                alt=""></div>
                                    </div>
                                    <div data-v-29c52665="" class="name tac">Contract</div>
                                    <div data-v-29c52665="" class="flex1"></div><!----><!----><!----><!----><!---->
                                    <div data-v-29c52665="" class="str" > <a href="{{ route('user.record') }}"> Order Record</a> </div><!----><!----><!---->
                                </div>
                            </div>
                        </div>
                        <?php
                        $balance = round(Auth::user()->available_balance(), 2);
                        
                        ?>

                        @php
                            $vipRules = [
                                1 => ['amount' => 60, 'requires' => 0],
                                2 => ['amount' => 120, 'requires' => 1],
                                3 => ['amount' => 360, 'requires' => 2],
                                4 => ['amount' => 840, 'requires' => 3],
                                5 => ['amount' => 1680, 'requires' => 4],
                                6 => ['amount' => 3600, 'requires' => 5],
                                7 => ['amount' => 7560, 'requires' => 6],
                                8 => ['amount' => 15000, 'requires' => 7],
                            ];
                        @endphp


                        <div data-v-decd48ac="" id="scroll" class="content-container"
                            style="padding-top: 44px; padding-bottom: 60px;">
                            <div data-v-decd48ac="" id="content" class="content-scroll">
                                <div data-v-5959a183="" data-v-decd48ac="" class="bann">
                                    <div data-v-5959a183="" data-v-decd48ac="" class="container">
                                        <div data-v-5959a183="" class="van-swipe" data-v-decd48ac="">
                                            <div class="van-swipe__track"
                                                style="transition-duration: 0ms; transform: translateX(0px); width: 2240px;">
                                                <div data-v-5959a183="" class="van-swipe-item" style="width: 320px;">
                                                    <div data-v-5959a183="" class="swiper flex v0"
                                                        style="pointer-events: none;">
                                                        <div data-v-5959a183="" class="flex1">
                                                            <div data-v-5959a183="">
                                                                <div data-v-5959a183="" class="dj">
                                                                    <div data-v-5959a183=""
                                                                        class="dj-bg themeLevelLabel0"></div><span
                                                                        data-v-5959a183="">

                                                                        @if ($myRank == 1)
                                                                            Current level
                                                                        @elseif($myRank > 1)
                                                                            Unlocked
                                                                        @else
                                                                            Locked
                                                                        @endif

                                                                    </span>
                                                                </div>
                                                                <div data-v-5959a183="" class="name themeColor0">
                                                                    <div data-v-5959a183="" class="icon"></div>
                                                                    VIP 1
                                                                </div>
                                                            </div>
                                                            <div data-v-5959a183="" class="str themeColor0"><span
                                                                    data-v-5959a183="">
                                                                    @if ($myRank >= 1)
                                                                        It has
                                                                        reached this
                                                                        level
                                                                    @else
                                                                        Not reached this level
                                                                    @endif

                                                                </span></div>
                                                        </div>
                                                        <div data-v-5959a183="" class="ico"><img
                                                                data-v-5959a183=""
                                                                src="{{ asset('') }}static/img/bc3cf11087b69389ded07723adf92b4a.png"
                                                                alt="" style="pointer-events: none;"></div>
                                                    </div>
                                                </div>
                                                <div data-v-5959a183="" class="van-swipe-item" style="width: 320px;">
                                                    <div data-v-5959a183="" class="swiper flex v1"
                                                        style="pointer-events: none;">
                                                        <div data-v-5959a183="" class="flex1">
                                                            <div data-v-5959a183="">
                                                                <div data-v-5959a183="" class="dj">
                                                                    <div data-v-5959a183=""
                                                                        class="dj-bg themeLevelLabel1"></div><span
                                                                        data-v-5959a183="">
                                                                        @if ($myRank == 2)
                                                                            Current level
                                                                        @elseif($myRank > 2)
                                                                            Unlocked
                                                                        @else
                                                                            Locked
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                                <div data-v-5959a183="" class="name themeColor1">
                                                                    <div data-v-5959a183="" class="icon"></div>
                                                                    VIP 2
                                                                </div>
                                                            </div>
                                                            <div data-v-5959a183="" class="str themeColor1"><span
                                                                    data-v-5959a183="">
                                                                    @if ($myRank >= 2)
                                                                        It has
                                                                        reached this
                                                                        level
                                                                    @else
                                                                        Not reached this level
                                                                    @endif
                                                                </span></div>
                                                        </div>
                                                        <div data-v-5959a183="" class="ico"><img
                                                                data-v-5959a183=""
                                                                src="{{ asset('') }}static/img/3ef4d33c9bfec649c5a233f9bf6c8a07.png"
                                                                alt="" style="pointer-events: none;"></div>
                                                    </div>
                                                </div>
                                                <div data-v-5959a183="" class="van-swipe-item" style="width: 320px;">
                                                    <div data-v-5959a183="" class="swiper flex v2"
                                                        style="pointer-events: none;">
                                                        <div data-v-5959a183="" class="flex1">
                                                            <div data-v-5959a183="">
                                                                <div data-v-5959a183="" class="dj">
                                                                    <div data-v-5959a183=""
                                                                        class="dj-bg themeLevelLabel2"></div><span
                                                                        data-v-5959a183="">
                                                                        @if ($myRank == 3)
                                                                            Current level
                                                                        @elseif($myRank > 3)
                                                                            Unlocked
                                                                        @else
                                                                            Locked
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                                <div data-v-5959a183="" class="name themeColor2">
                                                                    <div data-v-5959a183="" class="icon"></div>
                                                                    VIP 3
                                                                </div>
                                                            </div>
                                                            <div data-v-5959a183="" class="str themeColor2"><span
                                                                    data-v-5959a183="">
                                                                    @if ($myRank >= 3)
                                                                        It has
                                                                        reached this
                                                                        level
                                                                    @else
                                                                        Not reached this level
                                                                    @endif
                                                                </span></div>
                                                        </div>
                                                        <div data-v-5959a183="" class="ico"><img
                                                                data-v-5959a183=""
                                                                src="{{ asset('') }}static/img/e84156ccdb1b6d531814aec74fc68f87.png"
                                                                alt="" style="pointer-events: none;"></div>
                                                    </div>
                                                </div>
                                                <div data-v-5959a183="" class="van-swipe-item" style="width: 320px;">
                                                    <div data-v-5959a183="" class="swiper flex v3"
                                                        style="pointer-events: none;">
                                                        <div data-v-5959a183="" class="flex1">
                                                            <div data-v-5959a183="">
                                                                <div data-v-5959a183="" class="dj">
                                                                    <div data-v-5959a183=""
                                                                        class="dj-bg themeLevelLabel3"></div><span
                                                                        data-v-5959a183="">
                                                                        @if ($myRank == 4)
                                                                            Current level
                                                                        @elseif($myRank > 4)
                                                                            Unlocked
                                                                        @else
                                                                            Locked
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                                <div data-v-5959a183="" class="name themeColor3">
                                                                    <div data-v-5959a183="" class="icon"></div>
                                                                    VIP 4
                                                                </div>
                                                            </div>
                                                            <div data-v-5959a183="" class="str themeColor3"><span
                                                                    data-v-5959a183="">
                                                                    @if ($myRank >= 4)
                                                                        It has
                                                                        reached this
                                                                        level
                                                                    @else
                                                                        Not reached this level
                                                                    @endif
                                                                </span></div>
                                                        </div>
                                                        <div data-v-5959a183="" class="ico"><img
                                                                data-v-5959a183=""
                                                                src="{{ asset('') }}static/img/5a927157d4c65dd50b6e79204b700238.png"
                                                                alt="" style="pointer-events: none;"></div>
                                                    </div>
                                                </div>
                                                <div data-v-5959a183="" class="van-swipe-item" style="width: 320px;">
                                                    <div data-v-5959a183="" class="swiper flex v4"
                                                        style="pointer-events: none;">
                                                        <div data-v-5959a183="" class="flex1">
                                                            <div data-v-5959a183="">
                                                                <div data-v-5959a183="" class="dj">
                                                                    <div data-v-5959a183=""
                                                                        class="dj-bg themeLevelLabel4"></div><span
                                                                        data-v-5959a183="">
                                                                        @if ($myRank == 5)
                                                                            Current level
                                                                        @elseif($myRank > 5)
                                                                            Unlocked
                                                                        @else
                                                                            Locked
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                                <div data-v-5959a183="" class="name themeColor4">
                                                                    <div data-v-5959a183="" class="icon"></div>
                                                                    VIP 5
                                                                </div>
                                                            </div>
                                                            <div data-v-5959a183="" class="str themeColor4"><span
                                                                    data-v-5959a183="">
                                                                    @if ($myRank >= 5)
                                                                        It has
                                                                        reached this
                                                                        level
                                                                    @else
                                                                        Not reached this level
                                                                    @endif
                                                                </span></div>
                                                        </div>
                                                        <div data-v-5959a183="" class="ico"><img
                                                                data-v-5959a183=""
                                                                src="{{ asset('') }}static/img/801aeb5622b9a5316256390053248c92.png"
                                                                alt="" style="pointer-events: none;"></div>
                                                    </div>
                                                </div>
                                                <div data-v-5959a183="" class="van-swipe-item" style="width: 320px;">
                                                    <div data-v-5959a183="" class="swiper flex v5"
                                                        style="pointer-events: none;">
                                                        <div data-v-5959a183="" class="flex1">
                                                            <div data-v-5959a183="">
                                                                <div data-v-5959a183="" class="dj">
                                                                    <div data-v-5959a183=""
                                                                        class="dj-bg themeLevelLabel5"></div><span
                                                                        data-v-5959a183="">
                                                                        @if ($myRank == 6)
                                                                            Current level
                                                                        @elseif($myRank > 6)
                                                                            Unlocked
                                                                        @else
                                                                            Locked
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                                <div data-v-5959a183="" class="name themeColor5">
                                                                    <div data-v-5959a183="" class="icon"></div>
                                                                    VIP 6
                                                                </div>
                                                            </div>
                                                            <div data-v-5959a183="" class="str themeColor5"><span
                                                                    data-v-5959a183="">
                                                                    @if ($myRank >= 6)
                                                                        It has
                                                                        reached this
                                                                        level
                                                                    @else
                                                                        Not reached this level
                                                                    @endif
                                                                </span></div>
                                                        </div>
                                                        <div data-v-5959a183="" class="ico"><img
                                                                data-v-5959a183=""
                                                                src="{{ asset('') }}static/img/d8d58144ff82da22c5a4675d125dd9fd.png"
                                                                alt="" style="pointer-events: none;"></div>
                                                    </div>
                                                </div>
                                                <div data-v-5959a183="" class="van-swipe-item" style="width: 320px;">
                                                    <div data-v-5959a183="" class="swiper flex v6"
                                                        style="pointer-events: none;">
                                                        <div data-v-5959a183="" class="flex1">
                                                            <div data-v-5959a183="">
                                                                <div data-v-5959a183="" class="dj">
                                                                    <div data-v-5959a183=""
                                                                        class="dj-bg themeLevelLabel6"></div><span
                                                                        data-v-5959a183="">
                                                                        @if ($myRank == 7)
                                                                            Current level
                                                                        @elseif($myRank > 7)
                                                                            Unlocked
                                                                        @else
                                                                            Locked
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                                <div data-v-5959a183="" class="name themeColor6">
                                                                    <div data-v-5959a183="" class="icon"></div>
                                                                    VIP 7
                                                                </div>
                                                            </div>
                                                            <div data-v-5959a183="" class="str themeColor6"><span
                                                                    data-v-5959a183="">
                                                                    @if ($myRank >= 7)
                                                                        It has
                                                                        reached this
                                                                        level
                                                                    @else
                                                                        Not reached this level
                                                                    @endif
                                                                </span></div>
                                                        </div>
                                                        <div data-v-5959a183="" class="ico"><img
                                                                data-v-5959a183=""
                                                                src="{{ asset('') }}static/img/d32a35a2d9ac4acc4fca025fce1ad2c1.png"
                                                                alt="" style="pointer-events: none;"></div>
                                                    </div>
                                                </div>
                                                <div data-v-5959a183="" class="van-swipe-item" style="width: 320px;">
                                                    <div data-v-5959a183="" class="swiper flex v8"
                                                        style="pointer-events: none;">
                                                        <div data-v-5959a183="" class="flex1">
                                                            <div data-v-5959a183="">
                                                                <div data-v-5959a183="" class="dj">
                                                                    <div data-v-5959a183=""
                                                                        class="dj-bg themeLevelLabel6"></div><span
                                                                        data-v-5959a183="">
                                                                        @if ($myRank == 8)
                                                                            Current level
                                                                        @elseif($myRank > 8)
                                                                            Unlocked
                                                                        @else
                                                                            Locked
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                                <div data-v-5959a183="" class="name themeColor8">
                                                                    <div data-v-5959a183="" class="icon"></div>
                                                                    VIP 8
                                                                </div>
                                                            </div>
                                                            <div data-v-5959a183="" class="str themeColor8"><span
                                                                    data-v-5959a183="">
                                                                    @if ($myRank >= 8)
                                                                        It has
                                                                        reached this
                                                                        level
                                                                    @else
                                                                        Not reached this level
                                                                    @endif
                                                                </span></div>
                                                        </div>
                                                        <div data-v-5959a183="" class="ico"><img
                                                                data-v-5959a183=""
                                                                src="{{ asset('') }}static/img/vip8.png"
                                                                alt="" style="pointer-events: none;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-5959a183="" data-v-decd48ac="" class="box">
                                    <div data-v-5959a183="" data-v-decd48ac="" class="empty db"
                                        style="display: none;">
                                        <div data-v-5959a183="" data-v-decd48ac="" class="flexs">
                                            <div data-v-5f0c154b="" data-v-5959a183="" class="empty db custom-image"
                                                data-v-decd48ac="">
                                                <div data-v-5f0c154b="" class="flexs">
                                                    <div data-v-5f0c154b="" class="custom-image van-empty">
                                                        <div class="van-empty__image"><img
                                                                src="{{ asset('') }}static/img/none0.f307acfc.png">
                                                        </div>
                                                        <p class="van-empty__description">No data yet</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-5959a183="" data-v-decd48ac="" class="list-box"
                                        style="transition-duration: 0ms; transform: translateX(0px);">
                                        <div data-v-5959a183="" data-v-decd48ac="" class="list">
                                            <div data-v-5959a183="" data-v-decd48ac="" class="he flex themeBg0">
                                                <div data-v-5959a183="" data-v-decd48ac="" class="ico"><img
                                                        data-v-5959a183="" data-v-decd48ac="" alt=""
                                                        src="{{ asset('') }}static/img/bc3cf11087b69389ded07723adf92b4a.png"
                                                        lazy="loaded"></div>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="flex1">
                                                    <div data-v-5959a183="" data-v-decd48ac="" class="n">VIP 1
                                                        Upgrade Candition</div>
                                                </div>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="s"><img
                                                        data-v-5959a183="" data-v-decd48ac=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAYCAYAAADOMhxqAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAEcSURBVHgBlVO7EcIwDLXNBGwAHWXoKKHKpYMJgA2SCQgTJJmAEQhdUgEdHYzACNkgPN05d0J2+OjOSSS9J+sptlKwLMvmWEv1g2kAN1rrg/WfbdtOkyRp+ggG4DXzR4zsJ6DiVcSWRVHseglYOdaDB1Ek7dOk6YEktXKmlliusXqeDsGS5pbEzRmC6T4QvCCZCIIzhAF36rq+hWE4BGjGwpMoilRVVde3HZilyjMETG79poHbpyF4CZYUgHQXO52M+tP+bsm7gwdM7WzpJzqEPM8zD3gPcOm0RIeORihqlHEcrzrHsL4DD5iOxpYHjAWTyKMAk8iFvEzmm0hRRJlvIh0CkmMRKwFOVY9RSxfmOyKldTcuwCuw1ZtPhBd5gJ02bhlOjAAAAABJRU5ErkJggg=="
                                                        alt=""></div>
                                            </div>
                                            <div data-v-5959a183="" data-v-decd48ac="" class="sn flex">
                                                <ul data-v-5959a183="" data-v-decd48ac="" class="flex li flex1">
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Contract number</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">
                                                            XHE8954BB78</div>
                                                    </li>
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Contract days</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">365
                                                            days</div>
                                                    </li>
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Daily rate of return</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">
                                                            2 USDT</div>
                                                    </li>
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Unlock Balance</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">
                                                            60 USDT</div>
                                                    </li>
                                                </ul>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="str">

                                                    <img data-v-5959a183="" data-v-decd48ac=""
                                                        src="{{ asset('static/img/' . ($myRank >= 1 ? 'jh_on0.9a3e055f.png' : 'jh_off.f212c34c.png')) }}"
                                                        alt="">
                                                </div>
                                            </div>
                                            @php
                                                $investment = \App\Models\Investment::where('amount', 60)
                                                    ->where('user_id', Auth::id())
                                                    ->first();

                                                $runningDays = 0;
                                                $progress = 0;

                                                if ($investment && Auth::user()->package=="60") {
                                                    $runningDays = \Carbon\Carbon::parse($investment->sdate)->diffInDays(now());
                                                    $runningDays = $runningDays > 365 ? 365 : $runningDays;
                                                    $progress = ($runningDays / 365) * 100;
                                                }
                                            @endphp
                                            <div data-v-5959a183="" data-v-decd48ac="" class="jd">
                                                <div data-v-5959a183="" data-v-decd48ac="" class="flex">
                                                    <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                        Running Days </div>
                                                    <div data-v-5959a183="" data-v-decd48ac="" class="s"><span
                                                            data-v-5959a183="" data-v-decd48ac=""
                                                            class="themeColor0">{{$runningDays}}</span>/365 </div>
                                                </div>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="src"><span
                                                        data-v-5959a183="" data-v-decd48ac="" class="themeLineBg0"
                                                        style="width: {{$progress?$progress:5}}%;"><i data-v-5959a183="" data-v-decd48ac=""
                                                            class="themeLineBg0"></i></span></div>
                                            </div>
                                            <div class="upgrade-btn-wrapper"
                                                style="margin-top: 15px; text-align: center;">
                                                @php
                                                    $vipLevel = 1; // Adjust dynamically for each card if needed
                                                    $rule = $vipRules[$vipLevel];
                                                    $requiredAmount = $rule['amount'];
                                                    $currentPackage = $user->package ?? 0;
                                                    $amountToPay = max(0, $requiredAmount - $currentPackage);
                                                @endphp

                                                @if ($myRank >= $vipLevel)
                                                @elseif ($myRank < $rule['requires'])
                                                    <button class="upgrade-btn" disabled
                                                        style="background: #888; cursor: not-allowed;"
                                                        title="Requires VIP {{ $rule['requires'] }} to unlock this">
                                                        Locked
                                                    </button>
                                                @elseif ($balance >= $amountToPay && $amountToPay > 0)
                                                    <form method="POST" action="{{ route('user.fundActivation') }}">
                                                        @csrf
                                                        <input type="hidden" name="rank"
                                                            value="{{ $vipLevel }}">
                                                        <input type="hidden" name="amount"
                                                            value="{{ $amountToPay }}">
                                                        <button type="submit" class="upgrade-btn">
                                                            Upgrade VIP {{ $vipLevel }}
                                                            (${{ number_format($amountToPay, 2) }})
                                                        </button>
                                                    </form>
                                                @else
                                                    <button class="upgrade-btn" disabled
                                                        style="background: #888; cursor: not-allowed;"
                                                        title="You need ${{ number_format($amountToPay, 2) }} to upgrade">
                                                        Insufficient Balance
                                                    </button>
                                                @endif
                                            </div>
                                        </div>
                                        <div data-v-5959a183="" data-v-decd48ac="" class="list">
                                            <div data-v-5959a183="" data-v-decd48ac="" class="he flex themeBg0">
                                                <div data-v-5959a183="" data-v-decd48ac="" class="ico"><img
                                                        data-v-5959a183="" data-v-decd48ac="" alt=""
                                                        src="{{ asset('static/img/3ef4d33c9bfec649c5a233f9bf6c8a07.png') }}"
                                                        lazy="loaded"></div>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="flex1">
                                                    <div data-v-5959a183="" data-v-decd48ac="" class="n">VIP 2
                                                        Upgrade Candition</div>
                                                </div>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="s"><img
                                                        data-v-5959a183="" data-v-decd48ac=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAYCAYAAADOMhxqAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAEcSURBVHgBlVO7EcIwDLXNBGwAHWXoKKHKpYMJgA2SCQgTJJmAEQhdUgEdHYzACNkgPN05d0J2+OjOSSS9J+sptlKwLMvmWEv1g2kAN1rrg/WfbdtOkyRp+ggG4DXzR4zsJ6DiVcSWRVHseglYOdaDB1Ek7dOk6YEktXKmlliusXqeDsGS5pbEzRmC6T4QvCCZCIIzhAF36rq+hWE4BGjGwpMoilRVVde3HZilyjMETG79poHbpyF4CZYUgHQXO52M+tP+bsm7gwdM7WzpJzqEPM8zD3gPcOm0RIeORihqlHEcrzrHsL4DD5iOxpYHjAWTyKMAk8iFvEzmm0hRRJlvIh0CkmMRKwFOVY9RSxfmOyKldTcuwCuw1ZtPhBd5gJ02bhlOjAAAAABJRU5ErkJggg=="
                                                        alt=""></div>
                                            </div>
                                            <div data-v-5959a183="" data-v-decd48ac="" class="sn flex">
                                                <ul data-v-5959a183="" data-v-decd48ac="" class="flex li flex1">
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Contract number</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">
                                                            FRO97475045MZ</div>
                                                    </li>
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Contract days</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">365
                                                            days</div>
                                                    </li>
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Daily rate of return</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">
                                                            4 USDT</div>
                                                    </li>
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Unlock Balance</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">
                                                            120 USDT</div>
                                                    </li>
                                                </ul>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="str"><img
                                                        data-v-5959a183="" data-v-decd48ac=""
                                                        src="{{ asset('static/img/' . ($myRank >= 2 ? 'jh_on0.9a3e055f.png' : 'jh_off.f212c34c.png')) }}"
                                                        alt=""></div>
                                            </div>

                                            @php
                                            $investment = \App\Models\Investment::where('amount', 120)
                                                ->where('user_id', Auth::id())
                                                ->first();

                                            $runningDays = 0;
                                            $progress = 0;

                                            if ($investment && Auth::user()->package=="120") {
                                                $runningDays = \Carbon\Carbon::parse($investment->sdate)->diffInDays(now());
                                                $runningDays = $runningDays > 365 ? 365 : $runningDays;
                                                $progress = ($runningDays / 365) * 100;
                                            }
                                        @endphp

                                            <div data-v-5959a183="" data-v-decd48ac="" class="jd">
                                                <div data-v-5959a183="" data-v-decd48ac="" class="flex">
                                                    <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                        Running Days </div>
                                                    <div data-v-5959a183="" data-v-decd48ac="" class="s"><span
                                                            data-v-5959a183="" data-v-decd48ac=""
                                                            class="themeColor0">{{$runningDays}}</span>/365 </div>
                                                </div>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="src"><span
                                                        data-v-5959a183="" data-v-decd48ac="" class="themeLineBg0"
                                                        style="width: {{$progress?$progress:5}}%;"><i data-v-5959a183="" data-v-decd48ac=""
                                                            class="themeLineBg0"></i></span></div>
                                            </div>

                                            <div class="upgrade-btn-wrapper"
                                                style="margin-top: 15px; text-align: center;">
                                                @php
                                                    $vipLevel = 2; // Adjust dynamically for each card if needed
                                                    $rule = $vipRules[$vipLevel];
                                                    $requiredAmount = $rule['amount'];
                                                    $currentPackage = $user->package ?? 0;
                                                    $amountToPay = max(0, $requiredAmount - $currentPackage);
                                                @endphp

                                                @if ($myRank >= $vipLevel)
                                                @elseif ($myRank < $rule['requires'])
                                                    <button class="upgrade-btn" disabled
                                                        style="background: #888; cursor: not-allowed;"
                                                        title="Requires VIP {{ $rule['requires'] }} to unlock this">
                                                        Locked
                                                    </button>
                                                @elseif ($balance >= $amountToPay && $amountToPay > 0)
                                                    <form method="POST" action="{{ route('user.fundActivation') }}">
                                                        @csrf
                                                        <input type="hidden" name="rank"
                                                            value="{{ $vipLevel }}">
                                                        <input type="hidden" name="amount"
                                                            value="{{ $amountToPay }}">
                                                        <button type="submit" class="upgrade-btn">
                                                            Upgrade VIP {{ $vipLevel }}
                                                            (${{ number_format($amountToPay, 2) }})
                                                        </button>
                                                    </form>
                                                @else
                                                    <button class="upgrade-btn" disabled
                                                        style="background: #888; cursor: not-allowed;"
                                                        title="You need ${{ number_format($amountToPay, 2) }} to upgrade">
                                                        Insufficient Balance
                                                    </button>
                                                @endif
                                            </div>

                                        </div>
                                        <div data-v-5959a183="" data-v-decd48ac="" class="list">
                                            <div data-v-5959a183="" data-v-decd48ac="" class="he flex themeBg0">
                                                <div data-v-5959a183="" data-v-decd48ac="" class="ico"><img
                                                        data-v-5959a183="" data-v-decd48ac="" alt=""
                                                        src="{{ asset('static/img/e84156ccdb1b6d531814aec74fc68f87.png') }}"
                                                        lazy="loaded"></div>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="flex1">
                                                    <div data-v-5959a183="" data-v-decd48ac="" class="n">VIP 3
                                                        Upgrade Candition</div>
                                                </div>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="s"><img
                                                        data-v-5959a183="" data-v-decd48ac=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAYCAYAAADOMhxqAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAEcSURBVHgBlVO7EcIwDLXNBGwAHWXoKKHKpYMJgA2SCQgTJJmAEQhdUgEdHYzACNkgPN05d0J2+OjOSSS9J+sptlKwLMvmWEv1g2kAN1rrg/WfbdtOkyRp+ggG4DXzR4zsJ6DiVcSWRVHseglYOdaDB1Ek7dOk6YEktXKmlliusXqeDsGS5pbEzRmC6T4QvCCZCIIzhAF36rq+hWE4BGjGwpMoilRVVde3HZilyjMETG79poHbpyF4CZYUgHQXO52M+tP+bsm7gwdM7WzpJzqEPM8zD3gPcOm0RIeORihqlHEcrzrHsL4DD5iOxpYHjAWTyKMAk8iFvEzmm0hRRJlvIh0CkmMRKwFOVY9RSxfmOyKldTcuwCuw1ZtPhBd5gJ02bhlOjAAAAABJRU5ErkJggg=="
                                                        alt=""></div>
                                            </div>
                                            <div data-v-5959a183="" data-v-decd48ac="" class="sn flex">
                                                <ul data-v-5959a183="" data-v-decd48ac="" class="flex li flex1">
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Contract number</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">
                                                            FRO97475141NJ</div>
                                                    </li>
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Contract days</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">365
                                                            days</div>
                                                    </li>
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Daily rate of return</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">12
                                                            USDT
                                                        </div>
                                                    </li>
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Unlock
                                                            Balance</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">
                                                            360 USDT</div>
                                                    </li>
                                                </ul>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="str"><img
                                                        data-v-5959a183="" data-v-decd48ac=""
                                                        src="{{ asset('static/img/' . ($myRank >= 3 ? 'jh_on0.9a3e055f.png' : 'jh_off.f212c34c.png')) }}"
                                                        alt=""></div>
                                            </div>

                                            @php
                                            $investment = \App\Models\Investment::where('amount', 360)
                                                ->where('user_id', Auth::id())
                                                ->first();

                                            $runningDays = 0;
                                            $progress = 0;

                                            if ($investment && Auth::user()->package=="360") {
                                                $runningDays = \Carbon\Carbon::parse($investment->sdate)->diffInDays(now());
                                                $runningDays = $runningDays > 365 ? 365 : $runningDays;
                                                $progress = ($runningDays / 365) * 100;
                                            }
                                        @endphp
                                            <div data-v-5959a183="" data-v-decd48ac="" class="jd">
                                                <div data-v-5959a183="" data-v-decd48ac="" class="flex">
                                                    <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                        Running Days </div>
                                                    <div data-v-5959a183="" data-v-decd48ac="" class="s"><span
                                                            data-v-5959a183="" data-v-decd48ac=""
                                                            class="themeColor0">{{$runningDays}}</span>/365 </div>
                                                </div>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="src"><span
                                                        data-v-5959a183="" data-v-decd48ac="" class="themeLineBg0"
                                                        style="width: {{$progress?$progress:5}}%;"><i data-v-5959a183="" data-v-decd48ac=""
                                                            class="themeLineBg0"></i></span></div>
                                            </div>

                                            <div class="upgrade-btn-wrapper"
                                                style="margin-top: 15px; text-align: center;">
                                                @php
                                                    $vipLevel = 3; // Adjust dynamically for each card if needed
                                                    $rule = $vipRules[$vipLevel];
                                                    $requiredAmount = $rule['amount'];
                                                    $currentPackage = $user->package ?? 0;
                                                    $amountToPay = max(0, $requiredAmount - $currentPackage);
                                                @endphp

                                                @if ($myRank >= $vipLevel)
                                                @elseif ($myRank < $rule['requires'])
                                                    <button class="upgrade-btn" disabled
                                                        style="background: #888; cursor: not-allowed;"
                                                        title="Requires VIP {{ $rule['requires'] }} to unlock this">
                                                        Locked
                                                    </button>
                                                @elseif ($balance >= $amountToPay && $amountToPay > 0)
                                                    <form method="POST" action="{{ route('user.fundActivation') }}">
                                                        @csrf
                                                        <input type="hidden" name="rank"
                                                            value="{{ $vipLevel }}">
                                                        <input type="hidden" name="amount"
                                                            value="{{ $amountToPay }}">
                                                        <button type="submit" class="upgrade-btn">
                                                            Upgrade VIP {{ $vipLevel }}
                                                            (${{ number_format($amountToPay, 2) }})
                                                        </button>
                                                    </form>
                                                @else
                                                    <button class="upgrade-btn" disabled
                                                        style="background: #888; cursor: not-allowed;"
                                                        title="You need ${{ number_format($amountToPay, 2) }} to upgrade">
                                                        Insufficient Balance
                                                    </button>
                                                @endif
                                            </div>

                                        </div>
                                        <div data-v-5959a183="" data-v-decd48ac="" class="list">
                                            <div data-v-5959a183="" data-v-decd48ac="" class="he flex themeBg0">
                                                <div data-v-5959a183="" data-v-decd48ac="" class="ico"><img
                                                        data-v-5959a183="" data-v-decd48ac="" alt=""
                                                        src="{{asset('static/img/5a927157d4c65dd50b6e79204b700238.png')}}"
                                                        lazy="loaded"></div>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="flex1">
                                                    <div data-v-5959a183="" data-v-decd48ac="" class="n">VIP 4
                                                        Upgrade Candition</div>
                                                </div>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="s"><img
                                                        data-v-5959a183="" data-v-decd48ac=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAYCAYAAADOMhxqAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAEcSURBVHgBlVO7EcIwDLXNBGwAHWXoKKHKpYMJgA2SCQgTJJmAEQhdUgEdHYzACNkgPN05d0J2+OjOSSS9J+sptlKwLMvmWEv1g2kAN1rrg/WfbdtOkyRp+ggG4DXzR4zsJ6DiVcSWRVHseglYOdaDB1Ek7dOk6YEktXKmlliusXqeDsGS5pbEzRmC6T4QvCCZCIIzhAF36rq+hWE4BGjGwpMoilRVVde3HZilyjMETG79poHbpyF4CZYUgHQXO52M+tP+bsm7gwdM7WzpJzqEPM8zD3gPcOm0RIeORihqlHEcrzrHsL4DD5iOxpYHjAWTyKMAk8iFvEzmm0hRRJlvIh0CkmMRKwFOVY9RSxfmOyKldTcuwCuw1ZtPhBd5gJ02bhlOjAAAAABJRU5ErkJggg=="
                                                        alt=""></div>
                                            </div>
                                            <div data-v-5959a183="" data-v-decd48ac="" class="sn flex">
                                                <ul data-v-5959a183="" data-v-decd48ac="" class="flex li flex1">
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Contract number</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">
                                                            FRO9747694WMD</div>
                                                    </li>
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Contract days</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">365
                                                            days</div>
                                                    </li>
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Daily rate of return</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">28 USDT</div>
                                                    </li>
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Unlock
                                                                    Balance</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">
                                                            840 USDT</div>
                                                    </li>
                                                </ul>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="str"><img
                                                        data-v-5959a183="" data-v-decd48ac=""
                                                        src="{{ asset('static/img/' . ($myRank >= 4 ? 'jh_on0.9a3e055f.png' : 'jh_off.f212c34c.png')) }}"
                                                        alt=""></div>
                                            </div>

                                            @php
                                            $investment = \App\Models\Investment::where('amount', 840)
                                                ->where('user_id', Auth::id())
                                                ->first();

                                            $runningDays = 0;
                                            $progress = 0;

                                            if ($investment && Auth::user()->package=="840") {
                                                $runningDays = \Carbon\Carbon::parse($investment->sdate)->diffInDays(now());
                                                $runningDays = $runningDays > 365 ? 365 : $runningDays;
                                                $progress = ($runningDays / 365) * 100;
                                            }
                                        @endphp
                                            <div data-v-5959a183="" data-v-decd48ac="" class="jd">
                                                <div data-v-5959a183="" data-v-decd48ac="" class="flex">
                                                    <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                        Running Days </div>
                                                    <div data-v-5959a183="" data-v-decd48ac="" class="s"><span
                                                            data-v-5959a183="" data-v-decd48ac=""
                                                            class="themeColor0">{{$runningDays}}</span>/365 </div>
                                                </div>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="src"><span
                                                        data-v-5959a183="" data-v-decd48ac="" class="themeLineBg0"
                                                        style="width: {{$progress?$progress:5}}%;"><i data-v-5959a183="" data-v-decd48ac=""
                                                            class="themeLineBg0"></i></span></div>
                                            </div>
                                            <div class="upgrade-btn-wrapper" style="margin-top: 15px; text-align: center;">
                                                @php
                                                    $vipLevel = 4;
                                                    $rule = $vipRules[$vipLevel];
                                                    $amountToPay = max(0, $rule['amount'] - $currentPackage);
                                                    $totalTeam23 = $gen2_rank1_count + $gen2_rank1_count;
                                                    $canUpgrade = $myRank == 3 && $gen_team1_VIP3 >= 3 && $totalTeam23 >= 12;
                                                @endphp
                                            
                                                @if ($myRank >= $vipLevel)
                                                  
                                            
                                                @elseif ($myRank < $rule['requires'])
                                                    <button class="upgrade-btn" disabled style="background: #888;" title="Requires VIP {{ $rule['requires'] }}">
                                                        Locked
                                                    </button>
                                            
                                                @elseif ($balance >= $amountToPay && $amountToPay > 0 && $canUpgrade)
                                                    <form method="POST" action="{{ route('user.fundActivation') }}">
                                                        @csrf
                                                        <input type="hidden" name="rank" value="{{ $vipLevel }}">
                                                        <input type="hidden" name="amount" value="{{ $amountToPay }}">
                                                        <button type="submit" class="upgrade-btn">
                                                            Upgrade VIP {{ $vipLevel }} (${{ number_format($amountToPay, 2) }})
                                                        </button>
                                                    </form>
                                            
                                                @elseif (!$canUpgrade)
                                                    <button class="upgrade-btn" disabled style="background: #888;" title="Need VIP 3 + 3 Gen1 VIP3 + 12 Gen2/3 VIP3">
                                                        Team Requirements Not Met
                                                    </button>
                                            
                                                @else
                                                    <button class="upgrade-btn" disabled style="background: #888;" title="Need ${{ number_format($amountToPay, 2) }} to upgrade">
                                                        Insufficient Balance
                                                    </button>
                                                @endif
                                            </div>
                                        </div>
                                        <div data-v-5959a183="" data-v-decd48ac="" class="list">
                                            <div data-v-5959a183="" data-v-decd48ac="" class="he flex themeBg0">
                                                <div data-v-5959a183="" data-v-decd48ac="" class="ico"><img
                                                        data-v-5959a183="" data-v-decd48ac="" alt=""
                                                       
                                                        src="{{ asset('') }}static/img/801aeb5622b9a5316256390053248c92.png"
                                                        lazy="loading"></div>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="flex1">
                                                    <div data-v-5959a183="" data-v-decd48ac="" class="n">VIP 5
                                                        Upgrade Candition</div>
                                                </div>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="s"><img
                                                        data-v-5959a183="" data-v-decd48ac=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAYCAYAAADOMhxqAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAEcSURBVHgBlVO7EcIwDLXNBGwAHWXoKKHKpYMJgA2SCQgTJJmAEQhdUgEdHYzACNkgPN05d0J2+OjOSSS9J+sptlKwLMvmWEv1g2kAN1rrg/WfbdtOkyRp+ggG4DXzR4zsJ6DiVcSWRVHseglYOdaDB1Ek7dOk6YEktXKmlliusXqeDsGS5pbEzRmC6T4QvCCZCIIzhAF36rq+hWE4BGjGwpMoilRVVde3HZilyjMETG79poHbpyF4CZYUgHQXO52M+tP+bsm7gwdM7WzpJzqEPM8zD3gPcOm0RIeORihqlHEcrzrHsL4DD5iOxpYHjAWTyKMAk8iFvEzmm0hRRJlvIh0CkmMRKwFOVY9RSxfmOyKldTcuwCuw1ZtPhBd5gJ02bhlOjAAAAABJRU5ErkJggg=="
                                                        alt=""></div>
                                            </div>
                                            <div data-v-5959a183="" data-v-decd48ac="" class="sn flex">
                                                <ul data-v-5959a183="" data-v-decd48ac="" class="flex li flex1">
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Contract number</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">
                                                            FRO97476A4ZMZ</div>
                                                    </li>
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Contract days</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">365
                                                            days</div>
                                                    </li>
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Daily rate of return</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">60 USDT
                                                        </div>
                                                    </li>
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Unlock
                                                            Balance</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">
                                                            1680 USDT</div>
                                                    </li>
                                                </ul>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="str"><img
                                                        data-v-5959a183="" data-v-decd48ac=""
                                                        src="{{ asset('static/img/' . ($myRank >= 5 ? 'jh_on0.9a3e055f.png' : 'jh_off.f212c34c.png')) }}"
                                                        alt=""></div>
                                            </div>
                                            @php
                                            $investment = \App\Models\Investment::where('amount', 1680)
                                                ->where('user_id', Auth::id())
                                                ->first();

                                            $runningDays = 0;
                                            $progress = 0;

                                            if ($investment && Auth::user()->package=="1680") {
                                                $runningDays = \Carbon\Carbon::parse($investment->sdate)->diffInDays(now());
                                                $runningDays = $runningDays > 365 ? 365 : $runningDays;
                                                $progress = ($runningDays / 365) * 100;
                                            }
                                        @endphp
                                            <div data-v-5959a183="" data-v-decd48ac="" class="jd">
                                                <div data-v-5959a183="" data-v-decd48ac="" class="flex">
                                                    <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                        Running Days </div>
                                                    <div data-v-5959a183="" data-v-decd48ac="" class="s"><span
                                                            data-v-5959a183="" data-v-decd48ac=""
                                                            class="themeColor0">{{$runningDays}}</span>/365 </div>
                                                </div>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="src"><span
                                                        data-v-5959a183="" data-v-decd48ac="" class="themeLineBg0"
                                                        style="width: {{$progress?$progress:5}}%;"><i data-v-5959a183="" data-v-decd48ac=""
                                                            class="themeLineBg0"></i></span></div>
                                            </div>

                                            <div class="upgrade-btn-wrapper" style="margin-top: 15px; text-align: center;">
                                                @php
                                                    $vipLevel = 5;
                                                    $requiredAmount = 1680;
                                                    $requiredRank = 4;
                                                    $amountToPay = max(0, $requiredAmount - ($user->package ?? 0));
                                                    $canUpgrade = $myRank == $requiredRank && $gen_team1_VIP4 >= 3 && ($gen2_rank1_count + $gen2_rank1_count) >= 25;
                                                @endphp
                                            
                                                @if ($myRank >= $vipLevel)
                                                   
                                            
                                                @elseif ($myRank < $requiredRank)
                                                    <button class="upgrade-btn" disabled style="background: #888; cursor: not-allowed;" 
                                                            title="Requires VIP {{ $requiredRank }}">
                                                        Locked
                                                    </button>
                                            
                                                @elseif ($balance >= $amountToPay && $canUpgrade)
                                                    <form method="POST" action="{{ route('user.fundActivation') }}">
                                                        @csrf
                                                        <input type="hidden" name="rank" value="{{ $vipLevel }}">
                                                        <input type="hidden" name="amount" value="{{ $amountToPay }}">
                                                        <button type="submit" class="upgrade-btn">
                                                            Upgrade VIP {{ $vipLevel }} (${{ number_format($amountToPay, 2) }})
                                                        </button>
                                                    </form>
                                            
                                                @elseif (!$canUpgrade)
                                                    <button class="upgrade-btn" disabled style="background: #888; cursor: not-allowed;" 
                                                            title="Requires: VIP 4 + 3 Gen1 VIP4 + 25 Gen2/3 VIP4">
                                                        Team Requirements Not Met
                                                    </button>
                                            
                                                @else
                                                    <button class="upgrade-btn" disabled style="background: #888; cursor: not-allowed;" 
                                                            title="You need ${{ number_format($amountToPay, 2) }} to upgrade">
                                                        Insufficient Balance
                                                    </button>
                                                @endif
                                            </div>
                                        </div>
                                        <div data-v-5959a183="" data-v-decd48ac="" class="list">
                                            <div data-v-5959a183="" data-v-decd48ac="" class="he flex themeBg0">
                                                <div data-v-5959a183="" data-v-decd48ac="" class="ico"><img
                                                        data-v-5959a183="" data-v-decd48ac="" alt=""
                                                        
                                                        src="{{ asset('') }}static/img/d8d58144ff82da22c5a4675d125dd9fd.png"
                                                        lazy="loading"></div>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="flex1">
                                                    <div data-v-5959a183="" data-v-decd48ac="" class="n">VIP 6
                                                        Upgrade Candition</div>
                                                </div>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="s"><img
                                                        data-v-5959a183="" data-v-decd48ac=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAYCAYAAADOMhxqAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAEcSURBVHgBlVO7EcIwDLXNBGwAHWXoKKHKpYMJgA2SCQgTJJmAEQhdUgEdHYzACNkgPN05d0J2+OjOSSS9J+sptlKwLMvmWEv1g2kAN1rrg/WfbdtOkyRp+ggG4DXzR4zsJ6DiVcSWRVHseglYOdaDB1Ek7dOk6YEktXKmlliusXqeDsGS5pbEzRmC6T4QvCCZCIIzhAF36rq+hWE4BGjGwpMoilRVVde3HZilyjMETG79poHbpyF4CZYUgHQXO52M+tP+bsm7gwdM7WzpJzqEPM8zD3gPcOm0RIeORihqlHEcrzrHsL4DD5iOxpYHjAWTyKMAk8iFvEzmm0hRRJlvIh0CkmMRKwFOVY9RSxfmOyKldTcuwCuw1ZtPhBd5gJ02bhlOjAAAAABJRU5ErkJggg=="
                                                        alt=""></div>
                                            </div>
                                            <div data-v-5959a183="" data-v-decd48ac="" class="sn flex">
                                                <ul data-v-5959a183="" data-v-decd48ac="" class="flex li flex1">
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Contract number</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">
                                                            FRO97476A4ZMZ</div>
                                                    </li>
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Contract days</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">365
                                                            days</div>
                                                    </li>
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Daily rate of return</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">120 USDT
                                                        </div>
                                                    </li>
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Unlock
                                                                    Balance</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">
                                                            3600 USDT</div>
                                                    </li>
                                                </ul>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="str"><img
                                                        data-v-5959a183="" data-v-decd48ac=""
                                                        src="{{ asset('static/img/' . ($myRank >= 6 ? 'jh_on0.9a3e055f.png' : 'jh_off.f212c34c.png')) }}"
                                                        alt=""></div>
                                            </div>
                                            @php
                                            $investment = \App\Models\Investment::where('amount', 3600)
                                                ->where('user_id', Auth::id())
                                                ->first();

                                            $runningDays = 0;
                                            $progress = 0;

                                            if ($investment && Auth::user()->package=="3600") {
                                                $runningDays = \Carbon\Carbon::parse($investment->sdate)->diffInDays(now());
                                                $runningDays = $runningDays > 365 ? 365 : $runningDays;
                                                $progress = ($runningDays / 365) * 100;
                                            }
                                        @endphp
                                            <div data-v-5959a183="" data-v-decd48ac="" class="jd">
                                                <div data-v-5959a183="" data-v-decd48ac="" class="flex">
                                                    <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                        Running Days </div>
                                                    <div data-v-5959a183="" data-v-decd48ac="" class="s"><span
                                                            data-v-5959a183="" data-v-decd48ac=""
                                                            class="themeColor0">{{$runningDays}}</span>/365 </div>
                                                </div>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="src"><span
                                                        data-v-5959a183="" data-v-decd48ac="" class="themeLineBg0"
                                                        style="width: {{$progress?$progress:5}}%;"><i data-v-5959a183="" data-v-decd48ac=""
                                                            class="themeLineBg0"></i></span></div>
                                            </div>

                                            <div class="upgrade-btn-wrapper" style="margin-top: 15px; text-align: center;">
                                                @php
                                                    $vipLevel = 6;
                                                    $requiredAmount = 3600;
                                                    $requiredRank = 5;
                                                    $amountToPay = max(0, $requiredAmount - ($user->package ?? 0));
                                                    $canUpgrade = $myRank == $requiredRank && $gen_team1_VIP5 >= 3 && ($gen2_rank1_count + $gen2_rank1_count) >= 50;
                                                @endphp
                                            
                                                @if ($myRank >= $vipLevel)
                                                  
                                            
                                                @elseif ($myRank < $requiredRank)
                                                    <button class="upgrade-btn" disabled style="background: #888; cursor: not-allowed;" 
                                                            title="Requires VIP {{ $requiredRank }}">
                                                        Locked
                                                    </button>
                                            
                                                @elseif ($balance >= $amountToPay && $canUpgrade)
                                                    <form method="POST" action="{{ route('user.fundActivation') }}">
                                                        @csrf
                                                        <input type="hidden" name="rank" value="{{ $vipLevel }}">
                                                        <input type="hidden" name="amount" value="{{ $amountToPay }}">
                                                        <button type="submit" class="upgrade-btn">
                                                            Upgrade VIP {{ $vipLevel }} (${{ number_format($amountToPay, 2) }})
                                                        </button>
                                                    </form>
                                            
                                                @elseif (!$canUpgrade)
                                                    <button class="upgrade-btn" disabled style="background: #888; cursor: not-allowed;" 
                                                            title="Requires: VIP 5 + 3 Gen1 VIP5 + 50 Gen2/3 VIP5">
                                                        Team Requirements Not Met
                                                    </button>
                                            
                                                @else
                                                    <button class="upgrade-btn" disabled style="background: #888; cursor: not-allowed;" 
                                                            title="You need ${{ number_format($amountToPay, 2) }} to upgrade">
                                                        Insufficient Balance
                                                    </button>
                                                @endif
                                            </div>
                                        </div>
                                        <div data-v-5959a183="" data-v-decd48ac="" class="list">
                                            <div data-v-5959a183="" data-v-decd48ac="" class="he flex themeBg0">
                                                <div data-v-5959a183="" data-v-decd48ac="" class="ico"><img
                                                        data-v-5959a183="" data-v-decd48ac="" alt=""
                                                        src="{{ asset('') }}static/img/d32a35a2d9ac4acc4fca025fce1ad2c1.png"
                                                        lazy="loading"></div>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="flex1">
                                                    <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                        VIP 7
                                                        Upgrade Candition</div>
                                                </div>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="s"><img
                                                        data-v-5959a183="" data-v-decd48ac=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAYCAYAAADOMhxqAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAEcSURBVHgBlVO7EcIwDLXNBGwAHWXoKKHKpYMJgA2SCQgTJJmAEQhdUgEdHYzACNkgPN05d0J2+OjOSSS9J+sptlKwLMvmWEv1g2kAN1rrg/WfbdtOkyRp+ggG4DXzR4zsJ6DiVcSWRVHseglYOdaDB1Ek7dOk6YEktXKmlliusXqeDsGS5pbEzRmC6T4QvCCZCIIzhAF36rq+hWE4BGjGwpMoilRVVde3HZilyjMETG79poHbpyF4CZYUgHQXO52M+tP+bsm7gwdM7WzpJzqEPM8zD3gPcOm0RIeORihqlHEcrzrHsL4DD5iOxpYHjAWTyKMAk8iFvEzmm0hRRJlvIh0CkmMRKwFOVY9RSxfmOyKldTcuwCuw1ZtPhBd5gJ02bhlOjAAAAABJRU5ErkJggg=="
                                                        alt=""></div>
                                            </div>
                                            <div data-v-5959a183="" data-v-decd48ac="" class="sn flex">
                                                <ul data-v-5959a183="" data-v-decd48ac="" class="flex li flex1">
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Contract number</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">
                                                            FRO9748928921</div>
                                                    </li>
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Contract days</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">
                                                            365
                                                            days</div>
                                                    </li>
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Daily rate of return</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">
                                                            240 USDT
                                                        </div>
                                                    </li>
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Unlock
                                                            Balance</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">
                                                            7560 USDT</div>
                                                    </li>
                                                </ul>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="str"><img
                                                        data-v-5959a183="" data-v-decd48ac=""
                                                        src="{{ asset('static/img/' . ($myRank >= 7 ? 'jh_on0.9a3e055f.png' : 'jh_off.f212c34c.png')) }}"
                                                        alt=""></div>
                                            </div>
                                            @php
                                            $investment = \App\Models\Investment::where('amount', 7560)
                                                ->where('user_id', Auth::id())
                                                ->first();

                                            $runningDays = 0;
                                            $progress = 0;

                                            if ($investment && Auth::user()->package=="7560") {
                                                $runningDays = \Carbon\Carbon::parse($investment->sdate)->diffInDays(now());
                                                $runningDays = $runningDays > 365 ? 365 : $runningDays;
                                                $progress = ($runningDays / 365) * 100;
                                            }
                                        @endphp
                                            <div data-v-5959a183="" data-v-decd48ac="" class="jd">
                                                <div data-v-5959a183="" data-v-decd48ac="" class="flex">
                                                    <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                        Running Days </div>
                                                    <div data-v-5959a183="" data-v-decd48ac="" class="s">
                                                        <span data-v-5959a183="" data-v-decd48ac=""
                                                            class="themeColor0">{{$runningDays}}</span>/365
                                                    </div>
                                                </div>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="src"><span
                                                        data-v-5959a183="" data-v-decd48ac="" class="themeLineBg0"
                                                        style="width: {{$progress?$progress:5}}%;"><i data-v-5959a183=""
                                                            data-v-decd48ac="" class="themeLineBg0"></i></span>
                                                </div>
                                            </div>

                                            <div class="upgrade-btn-wrapper" style="margin-top: 15px; text-align: center;">
                                                @php
                                                    $vipLevel = 7;
                                                    $requiredAmount = 7560;
                                                    $requiredRank = 6;
                                                    $amountToPay = max(0, $requiredAmount - ($user->package ?? 0));
                                                    $canUpgrade = $myRank == $requiredRank && $gen_team1_VIP6 >= 3 && ($gen2_rank1_count + $gen2_rank1_count) >= 100;
                                                @endphp
                                            
                                                @if ($myRank >= $vipLevel)
                                                  
                                            
                                                @elseif ($myRank < $requiredRank)
                                                    <button class="upgrade-btn" disabled style="background: #888; cursor: not-allowed;" 
                                                            title="Requires VIP {{ $requiredRank }}">
                                                        Locked
                                                    </button>
                                            
                                                @elseif ($balance >= $amountToPay && $canUpgrade)
                                                    <form method="POST" action="{{ route('user.fundActivation') }}">
                                                        @csrf
                                                        <input type="hidden" name="rank" value="{{ $vipLevel }}">
                                                        <input type="hidden" name="amount" value="{{ $amountToPay }}">
                                                        <button type="submit" class="upgrade-btn">
                                                            Upgrade VIP {{ $vipLevel }} (${{ number_format($amountToPay, 2) }})
                                                        </button>
                                                    </form>
                                            
                                                @elseif (!$canUpgrade)
                                                    <button class="upgrade-btn" disabled style="background: #888; cursor: not-allowed;" 
                                                            title="Requires: VIP 6 + 3 Gen1 VIP6 + 100 Gen2/3 VIP6">
                                                        Team Requirements Not Met
                                                    </button>
                                            
                                                @else
                                                    <button class="upgrade-btn" disabled style="background: #888; cursor: not-allowed;" 
                                                            title="You need ${{ number_format($amountToPay, 2) }} to upgrade">
                                                        Insufficient Balance
                                                    </button>
                                                @endif
                                            </div>

                                        </div>
                                        <div data-v-5959a183="" data-v-decd48ac="" class="list">
                                            <div data-v-5959a183="" data-v-decd48ac="" class="he flex themeBg0">
                                                <div data-v-5959a183="" data-v-decd48ac="" class="ico"><img
                                                        data-v-5959a183="" data-v-decd48ac="" alt=""
                                                        src="{{ asset('') }}static/img/vip8.png"
                                                        lazy="loading"></div>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="flex1">
                                                    <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                        VIP 8
                                                        Upgrade Candition</div>
                                                </div>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="s"><img
                                                        data-v-5959a183="" data-v-decd48ac=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAYCAYAAADOMhxqAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAEcSURBVHgBlVO7EcIwDLXNBGwAHWXoKKHKpYMJgA2SCQgTJJmAEQhdUgEdHYzACNkgPN05d0J2+OjOSSS9J+sptlKwLMvmWEv1g2kAN1rrg/WfbdtOkyRp+ggG4DXzR4zsJ6DiVcSWRVHseglYOdaDB1Ek7dOk6YEktXKmlliusXqeDsGS5pbEzRmC6T4QvCCZCIIzhAF36rq+hWE4BGjGwpMoilRVVde3HZilyjMETG79poHbpyF4CZYUgHQXO52M+tP+bsm7gwdM7WzpJzqEPM8zD3gPcOm0RIeORihqlHEcrzrHsL4DD5iOxpYHjAWTyKMAk8iFvEzmm0hRRJlvIh0CkmMRKwFOVY9RSxfmOyKldTcuwCuw1ZtPhBd5gJ02bhlOjAAAAABJRU5ErkJggg=="
                                                        alt=""></div>
                                            </div>
                                            <div data-v-5959a183="" data-v-decd48ac="" class="sn flex">
                                                <ul data-v-5959a183="" data-v-decd48ac="" class="flex li flex1">
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Contract number</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">
                                                            YHRO974892109</div>
                                                    </li>
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Contract days</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">
                                                            365
                                                            days</div>
                                                    </li>
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Daily rate of return</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">
                                                            480 USDT
                                                        </div>
                                                    </li>
                                                    <li data-v-5959a183="" data-v-decd48ac="">
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                            Unlock
                                                            Balance</div>
                                                        <div data-v-5959a183="" data-v-decd48ac="" class="s">
                                                            15000 USDT</div>
                                                    </li>
                                                </ul>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="str"><img
                                                        data-v-5959a183="" data-v-decd48ac=""
                                                        src="{{ asset('static/img/' . ($myRank >= 7 ? 'jh_on0.9a3e055f.png' : 'jh_off.f212c34c.png')) }}"
                                                        alt=""></div>
                                            </div>
                                            @php
                                            $investment = \App\Models\Investment::where('amount', 15000)
                                                ->where('user_id', Auth::id())
                                                ->first();

                                            $runningDays = 0;
                                            $progress = 0;

                                            if ($investment && Auth::user()->package=="15000") {
                                                $runningDays = \Carbon\Carbon::parse($investment->sdate)->diffInDays(now());
                                                $runningDays = $runningDays > 365 ? 365 : $runningDays;
                                                $progress = ($runningDays / 365) * 100;
                                            }
                                        @endphp
                                            <div data-v-5959a183="" data-v-decd48ac="" class="jd">
                                                <div data-v-5959a183="" data-v-decd48ac="" class="flex">
                                                    <div data-v-5959a183="" data-v-decd48ac="" class="n">
                                                        Running Days </div>
                                                    <div data-v-5959a183="" data-v-decd48ac="" class="s">
                                                        <span data-v-5959a183="" data-v-decd48ac=""
                                                            class="themeColor0">{{$runningDays}}</span>/365
                                                    </div>
                                                </div>
                                                <div data-v-5959a183="" data-v-decd48ac="" class="src"><span
                                                        data-v-5959a183="" data-v-decd48ac="" class="themeLineBg0"
                                                        style="width: {{$progress?$progress:5}}%;"><i data-v-5959a183=""
                                                            data-v-decd48ac="" class="themeLineBg0"></i></span>
                                                </div>
                                            </div>

                                            <div class="upgrade-btn-wrapper" style="margin-top: 15px; text-align: center;">
                                                <div class="upgrade-btn-wrapper" style="margin-top: 15px; text-align: center;">
                                                    @php
                                                        $vipLevel = 8;
                                                        $requiredAmount = 15000;
                                                        $requiredRank = 7;
                                                        $amountToPay = max(0, $requiredAmount - ($user->package ?? 0));
                                                        $canUpgrade = $myRank == $requiredRank && $gen_team1_VIP7 >= 3 && ($gen2_rank1_count + $gen2_rank1_count) >= 250;
                                                    @endphp
                                                
                                                    @if ($myRank >= $vipLevel)
                                                       
                                                    @elseif ($myRank < $requiredRank)
                                                        <button class="upgrade-btn" disabled style="background: #888; cursor: not-allowed;"
                                                                title="Requires VIP {{ $requiredRank }}">
                                                            Locked
                                                        </button>
                                                
                                                    @elseif ($balance >= $amountToPay && $canUpgrade)
                                                        <form method="POST" action="{{ route('user.fundActivation') }}">
                                                            @csrf
                                                            <input type="hidden" name="rank" value="{{ $vipLevel }}">
                                                            <input type="hidden" name="amount" value="{{ $amountToPay }}">
                                                            <button type="submit" class="upgrade-btn">
                                                                Upgrade VIP {{ $vipLevel }} (${{ number_format($amountToPay, 2) }})
                                                            </button>
                                                        </form>
                                                
                                                    @elseif (!$canUpgrade)
                                                        <button class="upgrade-btn" disabled style="background: #888; cursor: not-allowed;"
                                                                title="Requires: VIP 7 + 3 Gen1 VIP7 + 250 Gen2/3 VIP7">
                                                            Team Requirements Not Met
                                                        </button>
                                                
                                                    @else
                                                        <button class="upgrade-btn" disabled style="background: #888; cursor: not-allowed;"
                                                                title="You need ${{ number_format($amountToPay, 2) }} to upgrade">
                                                            Insufficient Balance
                                                        </button>
                                                    @endif
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('layouts.upnl.footer')
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
        </div><!---->
    </div>
    <!-- Vue and Vant JS -->
    <script src="{{ asset('') }}js1744307594169/chunk-vue.a3b4853b.1744307594169.chunk.js"></script>
    <script src="{{ asset('') }}js1744307594169/chunk-echarts.cc04be28.1744307594169.chunk.js"></script>
    <script src="{{ asset('') }}js1744307594169/chunk-vant.81420f35.1744307594169.chunk.js"></script>
    <script src="{{ asset('') }}js1744307594169/chunk-vendors.374f8b51.1744307594169.chunk.js"></script>

    {{-- <script src="{{asset('')}}js1744307594169/app.46ba12d9.1744307594169.js"></script> --}}
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const track1 = document.querySelector(".van-swipe__track");
            const track2 = document.querySelector(".list-box");

            if (!track1 || !track2) return;

            const items1 = track1.querySelectorAll(".van-swipe-item");
            const items2 = track2.querySelectorAll(".list");

            let itemWidth = items1[0]?.offsetWidth || 0;
            const maxIndex = items1.length - 1;

            let isDragging = false;
            let startX = 0;
            let currentX = 0;
            let dragDistance = 0;

            const updateSecondSection = (index) => {
                items2.forEach((item, i) => {
                    item.style.display = i === index ? "block" : "none";
                });
            };

            const clamp = (num, min, max) => Math.min(Math.max(num, min), max);

            // Initialize
            updateSecondSection(0);

            const startDrag = (x) => {
                isDragging = true;
                startX = x - currentX;
                dragDistance = 0;
                track1.style.transition = "none";
            };

            const onDrag = (x) => {
                if (!isDragging) return;
                dragDistance = Math.abs(x - (startX + currentX));
                currentX = x - startX;
                track1.style.transform = `translateX(${currentX}px)`;
            };

            const endDrag = () => {
                if (!isDragging) return;
                isDragging = false;

                let snappedIndex = clamp(Math.round(Math.abs(currentX) / itemWidth), 0, maxIndex);
                currentX = -itemWidth * snappedIndex;

                track1.style.transition = "transform 0.3s ease";
                track1.style.transform = `translateX(${currentX}px)`;
                updateSecondSection(snappedIndex);
            };

            // Mouse events
            track1.addEventListener("mousedown", (e) => {
                track1.style.cursor = "grabbing";
                startDrag(e.pageX);
            });

            document.addEventListener("mousemove", (e) => onDrag(e.pageX));
            document.addEventListener("mouseup", () => {
                track1.style.cursor = "grab";
                endDrag();
            });

            // Touch events
            track1.addEventListener("touchstart", (e) => startDrag(e.touches[0].clientX));
            document.addEventListener("touchmove", (e) => onDrag(e.touches[0].clientX));
            document.addEventListener("touchend", endDrag);

            // Click (only when not dragged)
            items1.forEach((item, index) => {
                item.addEventListener("click", () => {
                    if (dragDistance > 5) return; // avoid accidental drag/click conflict

                    currentX = -itemWidth * index;
                    track1.style.transition = "transform 0.3s ease";
                    track1.style.transform = `translateX(${currentX}px)`;
                    updateSecondSection(index);
                });
            });

            // Fallback: recalculate itemWidth after DOM is ready
            setTimeout(() => {
                if (!itemWidth && items1[0]) {
                    itemWidth = items1[0].offsetWidth;
                }
            }, 100);
        });
    </script>




</body>

</html>
