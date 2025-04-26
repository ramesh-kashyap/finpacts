<html translate="no" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>TTMD</title>
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="expires" content="0">
    <meta name="viewport"
        content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,viewport-fit=cover">
    <link rel="icon" href="{{ asset('') }}logo.png">
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
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-7a1721c4.c20230a9.css">
    <script charset="utf-8" src="{{ asset('') }}js1744307594169/chunk-7a1721c4.da18abce.1744307594169.chunk.js">
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
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-693d0a34.f05eb557.css">
    <script charset="utf-8" src="{{ asset('') }}js1744307594169/chunk-693d0a34.843d936b.1744307594169.chunk.js">
    </script>
</head>

<style>
    .container {
        /* max-width: 420px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: 24px;
  padding: 12px; */
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 8px;
    }

    .subtitle {
        font-size: 14px;
        color: #aaa;
        margin-top: 4px;
    }

    .avatar-section {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .icon-button {
        background: rgba(255, 255, 255, 0.1);
        border: none;
        font-size: 19px;
        border-radius: 50%;
        padding: 6px;
        margin-right: 5px;
    }

    .avatar {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        border: 2px solid white;
    }

    .balance-section {
        display: flex;
        flex-direction: column;
        gap: 6px;
        margin-bottom: 16px;
    }

    .small-label {
        color: #aaa;
        font-size: 13px;
        margin-bottom: 2px;
    }

    .balance {
        font-size: 40px;
        font-weight: 700;
        line-height: 1.2;
    }

    .decimal {
        color: #ffffff;
    }

    .balance-change {
        font-size: 14px;
        color: #33f58f;
    }

    .balance-change .dim {
        color: #888;
    }

    .card-section {
        background: linear-gradient(72deg, #042d50, #070808);
        border-radius: 20px;
        padding: 20px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        margin-bottom: 20px;
    }

    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 16px;
    }

    .card-label {
        font-size: 14px;
        color: #aaa;
    }

    p {
        padding-top: 9px;
    }

    .card-number {
        font-size: 16px;
        font-weight: 600;
        padding-top: 9px;
    }

    .new-card-button {
        background: rgb(253 248 248);
        color: #000000;
        border: none;
        padding: 8px 16px;
        border-radius: 10px;
        font-size: 14px;
    }

    .card-info {
        display: flex;
        justify-content: space-between;
        margin-top: 12px;
        margin-bottom: 10px;
    }

    .card-info h3 {
        font-size: 19px;
    }

    .header div {
        padding-top: 25px;
    }

    h1 {

        font-size: 20px;
    }

    .progress-bar {
        background: #333;
        height: 6px;
        border-radius: 6px;
        overflow: hidden;
    }

    .progress {
        height: 100%;
        background: linear-gradient(to right, #33f58f, #67b4ff);
        border-radius: 6px;
    }

    .action-buttons {
        display: flex;
        gap: 12px;
        margin-top: 8px;
        margin-bottom: 20px;
    }

    .primary {
        flex: 1;
        background: white;
        color: black;
        font-weight: 600;
        padding: 15px;
        border-radius: 14px;
        border: none;
        box-shadow: 0 4px 10px rgba(255, 255, 255, 0.1);
        font-size: 16px;
        cursor: pointer;
    }

    .primary:hover {
        background: #f1f1f1;
    }

    .goals-section {
        background: linear-gradient(72deg, #042d50, #070808);
        border-radius: 20px;
        padding: 20px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
    }

    .goals-section h3 {
        margin-bottom: 15px;
        font-size: 19px;
    }

    .goal {
        margin-bottom: 20px;
    }

    .goal-head {
        display: flex;
        justify-content: space-between;
        font-size: 14px;
        margin-bottom: 8px;
    }

    .goal-amount {
        color: #33f58f;
    }

    .goal-amount.orange {
        color: #f6ad55;
    }

    img[data-v-c31487f4] {
        height: .4rem;
        margin-right: .08rem;
        margin-top: -2px;
    }
</style>

<body class="mein_cn" data-new-gr-c-s-check-loaded="14.1232.0" data-gr-ext-installed="">
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
                    <div data-v-decd48ac="" data-v-2a245038="" class="page">
                        <div data-v-2a245038="" data-v-decd48ac="" class="bg"></div>
                        <div data-v-decd48ac="" class="headers">
                            <div data-v-29c52665="" data-v-2a245038="" class="head head0" data-v-decd48ac="">
                                <div data-v-29c52665="" class="container flex"><!---->
                                    <div data-v-29c52665="" class="myName">
                                        <div data-v-29c52665=""><img data-v-29c52665=""
                                                src="{{ asset('static/img/logo.png') }}" alt=""></div>
                                    </div>
                                    <div data-v-29c52665="" class="name tac"></div>
                                    <div data-v-29c52665="" class="flex1"></div>
                                    <div data-v-29c52665="" class="clear"> <a href="{{ url('/clear') }}"> <img data-v-29c52665=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAPISURBVHgB7VhRctowEF3J0HaaMEPG0GGmH3VOUHKCOCcIOUHSE5CcgHCCpicIPUHhBKEnCD1B/dHOMA2kngTSNLasrsCAZGyDgZB+5M3AeOWV9KzV7kpLYEkYhpG9vb0zCYGi3M45tDKZ103LsmxYAgQWhCB2c3NXJoQfo5iNnIDA2ebmRnVRogsRLBQKhuOwC8Fzzi5WOq3ttdttCxKCQkIsQE5g0EesOiREYoI4UQVUcjaaucqYsz35wQ7n/ES8k/SMXq9fgYRIZGJ/9b5L3S3G6J5th5sumy0YmsYuQdqjmczGVpL9mGgFHx7cktrCq1HkBMQ7Qsgnua3X+3MECZCIICFUCSXd7lVtVh/XfTiTZc6995AACQnyd5JozdPHRoitAAsisZOsG/89wVgvzuUKJgDbx7Q18kKUxyFGeGId5oNwrtEYFv6ag8mJGENrdDrtJiQh6IeTc5/QGkDq6TQ9Ccs0UwQXzBSrgIUxcicYI1NBrWCmQDM00cTfMJ4tdSoJA457iP+GLxp4+BAHj1NZR1nBLELT0r8nA/Dq9XXnFB4Ruq5jnKRlX7RxFbflVVS8OJV6pQRiz0vV4JHBGDuVxGy/7xjy+7gwY8WlsVVhGMgn4PyvcuJ5DtTLIhXzztD1PIcnxrOJk4JzqjhJSn3JDmUZg3MdY+HKA3SAEhIi0kGY74OU48eBOuw43+3+2oY1IJfLX2JWGcVgJViPTYzkTLUbr8LaQBqSkJWvBWOCmHPLchfGtCasCSHXgv3R84BgPp8vSkssUIvLIrr+5lyEIDTNR5gB1LuYpSuyiTiUSE1mLpczxwQ9T109vHt8jhpseIjlR+IZP+o4n39bjCani81vzqMb3FKcDx1nZGJTomd1Op1m5DCclWBOBI9onLtmlK4/p6x/KCoRFJf/CJTDabxzoCnka6N9dfWzFaXrum5LJRh/5QzcofFk0y9RbDRkpVnOgaYyJbEVp+vvLVkndvVdl9bUuYiRKJMM998EeJFvzOqDH/RVErOiHBKlm06zqeISriC35IZUikd+pee5gU3OYlfQ79UMkDAjNb3pIih1HKeuNnplkVXCBkBz7cpynDONgCfmZoDEbpieP2dF7Utbg1Sn67kvaj4c3F2rlL5oYYYZe5ZcqcK928I9cwBzQNO8C+lyhBUxbU9+T6lbwvEqoFZqa1j7+TAgOCyTKYM8MSZlvYGTiAfG+MEyRZ7VQa05aqPm+/u79suXmQalfAvFIjwNaoxtHNj2j/aoIbT0MTS5UyREWwtREUkcZ6Nu29OV13/NirsKRhpnugAAAABJRU5ErkJggg=="
                                            alt=""></a> </div><!---->
                                    <div data-v-29c52665="" class="notice">   <a href="{{ route('user.notice') }}"> <img data-v-29c52665=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAALQSURBVHgB7Zi/k9JAFMffJpKDYBH5MYOVsbuS0jLXnR12did/gdxfAPwFSmd3XmUpVpZiaSWlndgxc1yMM8wRDSR+d2ACF4Jkk+DpHJ8ZJiG7m/3m7XvJvkeUEsVi8aRYLH8vFMpfcTyhlGCUElwYY6Qv/lqXlxf3KAUkSokVcRyNUiI1gbsiFYHc/4LXCoVSk1IgkQ9qQJIyTSxvI6zd82jgus6RZVkDiolMMdG0kiFJ8nuIO97UB214ALmRy6k0mVx9pBjEEoiIfSFJ7BUXEGiyIGtIgSBhjBmqqlYPDpRPtm1bJICQQKyons/ffYsJnwbbsJx9RZGPHOdnB1a7j0vV6z3YIWNyTVVzPyaTSZ8iElkgnL6Bid/wiWhdXAe+Vh+NRkNYyMZydlU1/w19uUjfmnOLs1oul9cW1rS3zbs1SHggyLJyBhm1kOEDxlwurBc2tlKp6I4zw1gyaP2hIgWQ/GdxfiA8Wm9l3dns12PTNL9sGj8ejy1Y8xxuwYIiowbQRguWSqWm57FWSJPFmNeG1V6SAHNruh9gOz2k+TU+jXUSEcg//BSIxkUgPBkOhwOKwdxdMi2cPg+2QSATFejRdXEd07xoUArg3s9wOKM0BW66QVyi3v92bBZ2yV5gUvYCk7IXmJS9wKTsBSblzuofTStji+6FVgX45pV2yOr9LWu5Q/d3EDxT25Tf/m08z2uZ5qjNz32Bwe3PDeMXn1Z9sEf/DMzPnX0fzGTkOjKwFk51ukF4tqcoUov+F2KVPni0Z7PqoW1fDbb31bRsNn+MXyVK/yDCecZqOsqXg8h957qsSzTtIwm3FqJ0WZaraDcYk3hpTpv3904RnULpqrBAvI4+43VUpRjwB0Jm+FBkjPCXBOKEqlOBsT0SRFggj3YczkkMVCNYezZzTkmQ2LnuojBk4NTA0lVhnQe0rERYuIbqlttDHbE7nS79U5TftuAIIDEH5RkAAAAASUVORK5CYII="
                                            alt="">    @if ($notificationCount > 0) <span data-v-29c52665="">  {{ $notificationCount ?? 0 }} </span>    @endif    </a> </div>
                                    <div data-v-29c52665="" class="lang"> <a href="{{ route('user.lang') }}"> <img data-v-29c52665=""
                                            src="data:image/png;base64,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"
                                            alt=""> </a></div><!----><!----><!----><!----><!---->
                                </div>
                            </div>

                        </div>
                        <div data-v-decd48ac="" id="scroll" class="content-container"
                            style="padding-top: 44px; padding-bottom: 60px;">
                            <div data-v-decd48ac="" id="content" class="content-scroll">
                                <div data-v-0bbb1260="" data-v-2a245038="" data-v-decd48ac="">
                                    <div data-v-0bbb1260="" class="info_tip_box">
                                        {{-- <div data-v-0bbb1260="" class="info_tip">
                                            <div data-v-0bbb1260="" class="img"><img data-v-0bbb1260=""
                                                    src="{{asset('')}}static/img/logo.95f8e869.png" alt=""></div>
                                            <div data-v-0bbb1260="" class="text_box">
                                                <div data-v-0bbb1260="" class="title">There is a new message
                                                    notification!</div>
                                                <div data-v-0bbb1260="" class="text">Click to view new messages~~
                                                </div>
                                            </div><i data-v-0bbb1260=""
                                                class="cross van-icon van-icon-cross"><!----></i>
                                        </div> --}}
                                    </div>
                                </div>
                                <div data-v-2a245038="" data-v-decd48ac="" class="home">
                                    <div class="container">

                                        <!-- Header -->
                                        <div class="header">
                                            <div>
                                                <h1>Hi {{ Auth::user()->name }}</h1>
                                                <p class="subtitle">Let’s manage your budget</p>
                                            </div>
                                            <div class="avatar-section">
                                                <button class="new-card-button"><a href="{{ route('user.vip') }}"
                                                        style="color:#000000">+ Upgrade</a> </button>
                                            </div>
                                        </div>

                                        <!-- Balance -->
                                        <div class="balance-section">
                                            <p class="small-label">Total balance</p>
                                            <h2 class="balance">
                                                ${{ number_format(Auth::user()->available_balance(), 2) }}</h2>
                                            <p class="balance-change">↑ $ {{number_format($todaysRoiSum,2)}} <span class="dim"> Todays</span></p>
                                        </div>


                                        <!-- Buttons -->
                                        <div class="action-buttons">
                                            <button class="primary"> <a href="{{ route('user.invest') }}"
                                                    style="color: #000000"> <img data-v-c31487f4=""
                                                        data-v-decd48ac=""
                                                        src="data:image/png;base64,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"
                                                        alt=""> Recharge </a></button>
                                            <button class="primary"><a href="{{ route('user.Withdraw') }}"
                                                    style="color: #000000"> <img data-v-c31487f4=""
                                                        data-v-decd48ac=""
                                                        src="data:image/png;base64,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"
                                                        alt=""> Withdraw </a></button>
                                        </div>

                                        <ul data-v-2a245038="" data-v-decd48ac="" class="linkBox vip0">
                                            <li data-v-2a245038="" data-v-decd48ac="" class="bps tips">
                                                <a href="{{ route('user.level-team') }}">
                                                    <div data-v-2a245038="" data-v-decd48ac="" class="ico">

                                                        <img data-v-2a245038="" data-v-decd48ac=""
                                                            src="/static/img/vip0_ico1.41c05f1a.png"
                                                            alt="">
                                                    </div>
                                                    <div data-v-2a245038="" data-v-decd48ac="" class="name"> White Paper 
                                                    </div>
                                                </a>

                                            </li>
                                            <li data-v-2a245038="" data-v-decd48ac="" class="jd tips">
                                                <div data-v-2a245038="" data-v-decd48ac="" class="icos"><img
                                                        data-v-2a245038="" data-v-decd48ac=""
                                                        src="/static/img/vip0_ico2.d606c74f.png" alt=""></div>
                                                <div data-v-2a245038="" data-v-decd48ac="" class="abs">
                                                    <div data-v-2a245038="" data-v-decd48ac="" class="name">
                                                        Check-in and get rewards</div>
                                                    <div data-v-2a245038="" data-v-decd48ac=""><a
                                                            href="{{ route('user.activities') }}"> <button
                                                                data-v-2a245038="" data-v-decd48ac="">Get
                                                                Task</button></a></div>
                                                </div>
                                            </li>
                                         
                                            <li data-v-2a245038="" data-v-decd48ac="" class="flex">
                                                <div data-v-2a245038="" data-v-decd48ac="" class="ico"><img
                                                        data-v-2a245038="" data-v-decd48ac=""
                                                        src="/static/img/icons8-share-48.png" alt=""></div>
                                                        <a href="{{ route('user.share') }}">
                                                <div data-v-2a245038="" data-v-decd48ac="" class="flex1">
                                                    <div data-v-2a245038="" data-v-decd48ac="" class="n">Share Friend</div>
                                                    <p data-v-2a245038="" data-v-decd48ac="">Get more benefits!</p>
                                                </div>
                                                        </a>
                                            </li>
                                     
                                      
                                            <li data-v-2a245038="" data-v-decd48ac="" class="flex">
                                            
                                                <div data-v-2a245038="" data-v-decd48ac="" class="ico"><img
                                                        data-v-2a245038="" data-v-decd48ac=""
                                                        src="/static/img/icons8-team-96.png" alt=""></div>
                                                        <a href="{{ route('user.level-team') }}">
                                                <div data-v-2a245038="" data-v-decd48ac="" class="flex1">
                                                    <div data-v-2a245038="" data-v-decd48ac="" class="n">My Team </div>
                                                    <p data-v-2a245038="" data-v-decd48ac="">Get more benefits</p>
                                                </div>
                                            </a>
                                          
                                            </li>
                                     
                                        </ul>



                                        @php
                                            $faqItems = [
                                                [
                                                    'title' => 'About TTMD Limited',
                                                    'icon' =>
                                                        '/static/img/logo-2.png',
                                                    'content' =>
                                                        'TTMD Limited is a global platform that offers financial products and services...',
                                                ],
                                                [
                                                    'title' => 'How does TTMD ensure fund safety?',
                                                    'icon' =>
                                                        '/static/img/logo-2.png',
                                                    'content' =>
                                                        'All funds are secured in multi-signature wallets, audited regularly by trusted firms.',
                                                ],
                                                [
                                                    'title' => 'Certificate Display',
                                                    'icon' =>
                                                        '/static/img/logo-2.png',
                                                    'content' =>
                                                        'You can view TTMD’s official compliance certificates on the about page.',
                                                ],
                                                [
                                                    'title' => 'Company\'s Vision & Outlook',
                                                    'icon' =>
                                                    '/static/img/logo-2.png',
                                                    'content' =>
                                                        'TTMD aims to redefine digital finance with long-term innovation and partner rewards.',
                                                ],
                                            ];
                                        @endphp
                                        <div data-v-2a245038="" data-v-decd48ac="" class="container"
                                            style="padding: 0 0rem;">
                                            <div data-v-2a245038="" data-v-decd48ac="" class="title1 flex">
                                                <div data-v-2a245038="" data-v-decd48ac="" class="flex1">About us
                                                </div>
                                            </div>

                                            <ul data-v-2a245038="" data-v-decd48ac="" class="AboutLIst vip0">
                                                @foreach ($faqItems as $index => $item)
                                                    <li data-v-2a245038="" data-v-decd48ac=""
                                                        class="it flex faq-item" data-index="{{ $index }}">
                                                        <img data-v-2a245038="" data-v-decd48ac=""
                                                            src="{{ $item['icon'] }}" alt="">
                                                        <div class="flex1" data-v-2a245038="" data-v-decd48ac="">
                                                            {{ $item['title'] }}</div>
                                                        <i class="van-icon van-icon-arrow"></i>
                                                        <div class="faq-content"
                                                            style="display: none; padding: 10px 0; color: rgb(218 218 218);line-height: 19px;">
                                                            {{ $item['content'] }}
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>


                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                $('.faq-item').on('click', function() {
                                    $(this).find('.faq-content').slideToggle(200);
                                    $(this).toggleClass('active');
                                });
                            });
                        </script>


                        @include('layouts.upnl.footer')

                        @include('partials.notify')
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
    <script src="{{ asset('') }}js1744307594169/chunk-vue.a3b4853b.1744307594169.chunk.js"></script>
    <script src="{{ asset('') }}js1744307594169/chunk-echarts.cc04be28.1744307594169.chunk.js"></script>
    <script src="{{ asset('') }}js1744307594169/chunk-vant.81420f35.1744307594169.chunk.js"></script>
    <script src="{{ asset('') }}js1744307594169/chunk-vendors.374f8b51.1744307594169.chunk.js"></script>
</body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>
