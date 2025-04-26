<html style="font-size: 50px;" translate="no">

<head>
    <meta charset="utf-8">
    <title>Task Center</title>
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
    </style>
    <link href="{{asset('')}}js1744307594169/app.46ba12d9.1744307594169.js" rel="preload" as="script">
    <link href="{{asset('')}}js1744307594169/chunk-echarts.cc04be28.1744307594169.chunk.js" rel="preload" as="script">
    <link href="{{asset('')}}js1744307594169/chunk-vant.81420f35.1744307594169.chunk.js" rel="preload" as="script">
    <link href="{{asset('')}}js1744307594169/chunk-vendors.374f8b51.1744307594169.chunk.js" rel="preload" as="script">
    <link href="{{asset('')}}js1744307594169/chunk-vue.a3b4853b.1744307594169.chunk.js" rel="preload" as="script">
    <link href="{{asset('')}}static/css/app.c3049ff2.css" rel="preload" as="style">
    <link href="{{asset('')}}static/css/chunk-vant.d14f5539.css" rel="preload" as="style">
    <link href="{{asset('')}}static/css/chunk-vendors.794edbf9.css" rel="preload" as="style">
    <link href="{{asset('')}}static/css/chunk-vant.d14f5539.css" rel="stylesheet">
    <link href="{{asset('')}}static/css/chunk-vendors.794edbf9.css" rel="stylesheet">
    <link href="{{asset('')}}static/css/app.c3049ff2.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-6eb59018.9aaa1278.css">
    <script charset="utf-8" src="{{asset('')}}js1744307594169/chunk-6eb59018.f0c64bc3.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-5576a184.9f52f39a.css">
    <script charset="utf-8" src="{{asset('')}}js1744307594169/chunk-5576a184.c49d8c14.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-7cbde8e8.788c4ae8.css">
    <script charset="utf-8" src="{{asset('')}}js1744307594169/chunk-7cbde8e8.43936207.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-4f89519c.2a0f3cea.css">
    <script charset="utf-8" src="{{asset('')}}js1744307594169/chunk-4f89519c.5238fa59.1744307594169.chunk.js"></script>
    <script charset="utf-8" src="{{asset('')}}js1744307594169/chunk-4006da76.e92bfa42.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-7a1721c4.c20230a9.css">
    <script charset="utf-8" src="{{asset('')}}js1744307594169/chunk-7a1721c4.da18abce.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-693d0a34.f05eb557.css">
    <script charset="utf-8" src="{{asset('')}}js1744307594169/chunk-693d0a34.843d936b.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-bb9e60a4.6aed8065.css">
    <script charset="utf-8" src="{{asset('')}}js1744307594169/chunk-bb9e60a4.386078a0.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-6d426460.4038aca3.css">
    <script charset="utf-8" src="{{asset('')}}js1744307594169/chunk-6d426460.94243b8a.1744307594169.chunk.js"></script>
</head>
<style>
    .card_list .card[data-v-ae1b0c26] {
        margin-top: .24rem;
        padding: .32rem .28rem;
        border-radius: .2rem;
        box-shadow: 0 0 .16rem .05rem rgba(0, 0, 0, .1);
        background: linear-gradient(72deg, #042d50, #070808);
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

                    <div data-v-decd48ac="" data-v-06646a51="" class="page">
                        <div data-v-decd48ac="" class="headers on">
                            <div data-v-29c52665="" data-v-06646a51="" class="head head0" data-v-decd48ac="">
                                <div data-v-29c52665="" class="container flex">
                                    <a href="{{ route('user.dashboard') }}">
                                        <div data-v-29c52665="" class="back"><img data-v-29c52665=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAE+SURBVHgB3diLDYIwEAbgwy7gCLoBbOIGtiM4gbqBE0DdSCcQJ5AN8GrAIPIobXNH+JOG0jbhCyVpC8DSIqVcmwKBsgKPKKX2URQ9sLwQdYQAicAxBoMX3Wwry3Krtc7BI05vqAtTpQDPTAb1YXDaFL4db9CkKRvCpGmqIUCsQRQYaxAVxgpEiRkFUWMGQRyYXhAXphPEifkDcWN+QHPAfEEDaxNVciynLMuu9Vp2At5ssFxMpQYF22B55LMwf0C4jzkAbwr8Vs+m8v2occcnsTHrGCzN3AJRRF25YeI4fiJq1xqzS5Ikx+47EEQ0b+aAEu0GbpToauREib4OLpQY6uRAibEB1KhREDXKCkSJsgZRoZzO9j3LTFGd7b1Or05ne3yoxoerVnOQHYPz75g2yqzWIc723ql+WG1gqXkDGBPa7OTyg7AAAAAASUVORK5CYII="
                                                alt=""></div>
                                        <!---->
                                    </a>
                                    <div data-v-29c52665="" class="name tac">Task Center</div>
                                    <div data-v-29c52665="" class="flex1"></div>
                                    <!---->
                                    <!---->
                                    <!---->
                                    {{-- <div data-v-06646a51="" data-v-29c52665="" class="rules"> Rules </div> --}}
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                </div>
                            </div>
                        </div>
                        <div data-v-decd48ac="" id="scroll" class="content-container" style="padding-top: 44px;">
                            <div data-v-decd48ac="" id="content" class="content-scroll">
                                <div data-v-06646a51="" data-v-decd48ac="" class="big_box">
                                    <div data-v-06646a51="" data-v-decd48ac="" class="container">
                                        <div data-v-a8d9cade="" data-v-06646a51="" class="reward_card"
                                            data-v-decd48ac="">
                                            <div data-v-a8d9cade="" class="tips_image"><img data-v-a8d9cade=""
                                                    src="{{asset('')}}static/img/bg.6bba3a76.png" alt="">
                                                <div data-v-a8d9cade="" class="text_box">
                                                    <div data-v-a8d9cade="" class="name">TTMD</div>
                                                    <div data-v-a8d9cade="" class="tips_text">Complete tasks and
                                                        receive benefits</div>
                                                </div>
                                            </div>
                                            <a href="{{route('user.income-roports')}}">
                                            <div data-v-a8d9cade="" class="total_rewards">
                                           
                                                <div data-v-a8d9cade="" class="rewards_box">
                                                    <div data-v-a8d9cade="">Collect the total rewards so far</div>
                                                    <div data-v-a8d9cade="" class="themeColor0">{{number_format(Auth::user()->task_bonus->sum('comm'),2)}} USDT</div>
                                                </div> <i data-v-a8d9cade="" class="van-icon van-icon-arrow">
                                                    <!---->
                                                </i>
                                          
                                            </div>
                                        </a> 
                                        </div>
                                    </div>
                                </div>
                                <div data-v-ef18793c="" data-v-06646a51="" class="tab_box" data-v-decd48ac="">
                                    <ul data-v-ef18793c="" class="ul0 ul">
                                        {{-- <li data-v-ef18793c="" class="tab-btn themeColor0 active" data-target="long-tasks"> Long-term tasks </li> --}}
                                        {{-- <li data-v-ef18793c="" class="tab-btn noactive" data-target="daily-tasks"> Comp tasks </li> --}}
                                    </ul>
                                </div>
                                <div data-v-06646a51="" data-v-decd48ac="" class="container lower_section">
                                    <div data-v-ae1b0c26="" data-v-06646a51="" class="tasks-section long_tasks long-tasks" data-v-decd48ac="">
                                        <div data-v-ae1b0c26="" class="card_list">
                                            <div data-v-ae1b0c26="" class="card">
                                                <div data-v-ae1b0c26="" class="title_box">
                                                    <div data-v-ae1b0c26="" class="title_top">
                                                        <div data-v-ae1b0c26="" class="title">Upgrade to VIP 2
                                                        </div>
                                                    </div>
                                                    <div data-v-ae1b0c26="" class="title_bot">
                                                        <div data-v-ae1b0c26="" class="text">
                                                            <div data-v-ae1b0c26="" class="illustrate">Upgrade to
                                                                VIP 2 and you will get 5 USDT</div>
                                                            <div data-v-ae1b0c26="" class="rewards"> Task reward：
                                                                <span data-v-ae1b0c26="">5 USDT</span>
                                                            </div>
                                                        </div>
                                                        <div data-v-ae1b0c26="" class="btn_box">
                                                            <div data-v-ae1b0c26="" class="btn_t1">
                                                                <div data-v-ae1b0c26="" class="themeTaskBtBg0"></div>
                                                                <span data-v-ae1b0c26="" class="themeColor0"> {{(Auth::user()->package>=120)?"Completed":"In Progress"}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!---->
                                            </div>
                                            <div data-v-ae1b0c26="" class="card">
                                                <div data-v-ae1b0c26="" class="title_box">
                                                    <div data-v-ae1b0c26="" class="title_top">
                                                        <div data-v-ae1b0c26="" class="title">Upgrade to VIP 3 
                                                        </div>
                                                    </div>
                                                    <div data-v-ae1b0c26="" class="title_bot">
                                                        <div data-v-ae1b0c26="" class="text">
                                                            <div data-v-ae1b0c26="" class="illustrate">Upgrade to
                                                                VIP 3  Reward 15 USDT</div>
                                                            <div data-v-ae1b0c26="" class="rewards"> Task reward：
                                                                <span data-v-ae1b0c26="">15 USDT</span>
                                                            </div>
                                                        </div>
                                                        <div data-v-ae1b0c26="" class="btn_box">
                                                            <div data-v-ae1b0c26="" class="btn_t1">
                                                                <div data-v-ae1b0c26="" class="themeTaskBtBg0"></div>
                                                                <span data-v-ae1b0c26="" class="themeColor0">{{(Auth::user()->package>=360)?"Completed":"In Progress"}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!---->
                                            </div>
                                          
                                            <div data-v-ae1b0c26="" class="card">
                                                <div data-v-ae1b0c26="" class="title_box">
                                                    <div data-v-ae1b0c26="" class="title_top">
                                                        <div data-v-ae1b0c26="" class="title">Upgrade to VIP 4
                                                        </div>
                                                    </div>
                                                    <div data-v-ae1b0c26="" class="title_bot">
                                                        <div data-v-ae1b0c26="" class="text">
                                                            <div data-v-ae1b0c26="" class="illustrate">Upgrade to
                                                                VIP 4 and you will get 20 USDT</div>
                                                            <div data-v-ae1b0c26="" class="rewards"> Task reward：
                                                                <span data-v-ae1b0c26="">20 USDT</span>
                                                            </div>
                                                        </div>
                                                        <div data-v-ae1b0c26="" class="btn_box">
                                                            <div data-v-ae1b0c26="" class="btn_t1">
                                                                <div data-v-ae1b0c26="" class="themeTaskBtBg0"></div>
                                                                <span data-v-ae1b0c26="" class="themeColor0">{{(Auth::user()->package>=840)?"Completed":"In Progress"}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!---->
                                            </div>
                                            <div data-v-ae1b0c26="" class="card">
                                                <div data-v-ae1b0c26="" class="title_box">
                                                    <div data-v-ae1b0c26="" class="title_top">
                                                        <div data-v-ae1b0c26="" class="title">Upgrade to VIP 5 
                                                        </div>
                                                    </div>
                                                    <div data-v-ae1b0c26="" class="title_bot">
                                                        <div data-v-ae1b0c26="" class="text">
                                                            <div data-v-ae1b0c26="" class="illustrate">Upgrade to
                                                                VIP 5  and you will get 30 USDT</div>
                                                            <div data-v-ae1b0c26="" class="rewards"> Task reward：
                                                                <span data-v-ae1b0c26="">30 USDT</span>
                                                            </div>
                                                        </div>
                                                        <div data-v-ae1b0c26="" class="btn_box">
                                                            <div data-v-ae1b0c26="" class="btn_t1">
                                                                <div data-v-ae1b0c26="" class="themeTaskBtBg0"></div>
                                                                <span data-v-ae1b0c26="" class="themeColor0">{{(Auth::user()->package>=1680)?"Completed":"In Progress"}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!---->
                                            </div>
                                            <div data-v-ae1b0c26="" class="card">
                                                <div data-v-ae1b0c26="" class="title_box">
                                                    <div data-v-ae1b0c26="" class="title_top">
                                                        <div data-v-ae1b0c26="" class="title">Upgrade to VIP 6 
                                                        </div>
                                                    </div>
                                                    <div data-v-ae1b0c26="" class="title_bot">
                                                        <div data-v-ae1b0c26="" class="text">
                                                            <div data-v-ae1b0c26="" class="illustrate">Upgrade to
                                                                VIP 6  and you will get 50 USDT</div>
                                                            <div data-v-ae1b0c26="" class="rewards"> Task reward：
                                                                <span data-v-ae1b0c26="">50 USDT</span>
                                                            </div>
                                                        </div>
                                                        <div data-v-ae1b0c26="" class="btn_box">
                                                            <div data-v-ae1b0c26="" class="btn_t1">
                                                                <div data-v-ae1b0c26="" class="themeTaskBtBg0"></div>
                                                                <span data-v-ae1b0c26="" class="themeColor0">{{(Auth::user()->package>=3600)?"Completed":"In Progress"}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!---->
                                            </div>
                                            <div data-v-ae1b0c26="" class="card">
                                                <div data-v-ae1b0c26="" class="title_box">
                                                    <div data-v-ae1b0c26="" class="title_top">
                                                        <div data-v-ae1b0c26="" class="title">Upgrade to VIP 7 </div>
                                                    </div>
                                                    <div data-v-ae1b0c26="" class="title_bot">
                                                        <div data-v-ae1b0c26="" class="text">
                                                            <div data-v-ae1b0c26="" class="illustrate">Upgrade to
                                                                VIP 7  and you will get 120 USDT
                                                            </div>
                                                            <div data-v-ae1b0c26="" class="rewards"> Task reward：
                                                                <span data-v-ae1b0c26=""> 120 USDT</span>
                                                            </div>
                                                        </div>
                                                        <div data-v-ae1b0c26="" class="btn_box">
                                                            <div data-v-ae1b0c26="" class="btn_t1">
                                                                <div data-v-ae1b0c26="" class="themeTaskBtBg0"></div>
                                                                <span data-v-ae1b0c26="" class="themeColor0">{{(Auth::user()->package>=7560)?"Completed":"In Progress"}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!---->
                                            </div>
                                            <div data-v-ae1b0c26="" class="card">
                                                <div data-v-ae1b0c26="" class="title_box">
                                                    <div data-v-ae1b0c26="" class="title_top">
                                                        <div data-v-ae1b0c26="" class="title">Upgrade to VIP 8</div>
                                                    </div>
                                                    <div data-v-ae1b0c26="" class="title_bot">
                                                        <div data-v-ae1b0c26="" class="text">
                                                            <div data-v-ae1b0c26="" class="illustrate">Upgrade to
                                                                VIP 8  and you will get 380 USDT
                                                            </div>
                                                            <div data-v-ae1b0c26="" class="rewards"> Task reward：
                                                                <span data-v-ae1b0c26=""> 380 USDT</span>
                                                            </div>
                                                        </div>
                                                        <div data-v-ae1b0c26="" class="btn_box">
                                                            <div data-v-ae1b0c26="" class="btn_t1">
                                                                <div data-v-ae1b0c26="" class="themeTaskBtBg0"></div>
                                                                <span data-v-ae1b0c26="" class="themeColor0">{{(Auth::user()->package>=15000)?"Completed":"In Progress"}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!---->
                                            </div>
                                           
                                            <!---->
                                        </div>
                                        <div data-v-a1bf5ce4="" data-v-ae1b0c26="">
                                            <!---->
                                        </div>
                                    </div>
                                    <!-- Daily tasks -->
                                    <div class="tasks-section daily-tasks" style="display: none;">
                                        <div class="card_list">
                                            <!-- Your daily tasks content here -->
                                            <div class="card">
                                                <div class="title_box">
                                                    <div class="title_top">
                                                        <div class="title">Complete 3 Trades Today</div>
                                                    </div>
                                                    <div class="title_bot">
                                                        <div class="text">
                                                            <div class="illustrate">Complete 3 successful trades to earn
                                                                5 USDT</div>
                                                            <div class="rewards">Task reward: <span>5 USDT</span></div>
                                                        </div>
                                                        <div class="btn_box">
                                                            <div class="btn_t1">
                                                                <div class="themeTaskBtBg0"></div>
                                                                <span class="themeColor0">In progress</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- More daily cards... -->
                                        </div>
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


    <!-- JS to switch tabs -->
    <script>
        document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.addEventListener('click', function () {
            document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            let target = this.getAttribute('data-target');

            document.querySelectorAll('.tasks-section').forEach(section => {
                section.style.display = 'none';
            });

            document.querySelector(`.${target}`).style.display = 'block';
        });
    });
    </script>

    <script src="{{asset('')}}js1744307594169/chunk-vue.a3b4853b.1744307594169.chunk.js"></script>
    <script src="{{asset('')}}js1744307594169/chunk-echarts.cc04be28.1744307594169.chunk.js"></script>
    <script src="{{asset('')}}js1744307594169/chunk-vant.81420f35.1744307594169.chunk.js"></script>
    <script src="{{asset('')}}js1744307594169/chunk-vendors.374f8b51.1744307594169.chunk.js"></script>
    <div class="van-overlay" style="z-index: 2001; display: none;"></div>
    <div data-v-7e78ca37="" class="van-popup van-popup--center" style="background: none; z-index: 2002; display: none;">
        <div data-v-7e78ca37="" class="popup-box"><img data-v-7e78ca37=""
                src="{{asset('')}}static/img/home-checkIn-icon.3b9c0bc0.png" alt="" class="icon-logo"><i
                data-v-7e78ca37="" class="cross van-icon van-icon-cross">
                <!---->
            </i>
            <div data-v-7e78ca37="" class="content">
                <div data-v-7e78ca37="" class="text">You haven't Check-in today yet, Check-in and get a gift!</div>
                <div data-v-36e29cae="" data-v-7e78ca37="" class="btn_box big">
                    <div data-v-36e29cae="" class="btn submit">Check-in now</div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>