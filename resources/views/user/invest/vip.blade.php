<html style="font-size: 50px;" translate="no">

<head>
    <meta charset="utf-8">
    <title>Credit Center</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-955266e2.0d0a139e.css">
    <script charset="utf-8" src="{{asset('')}}js1744307594169/chunk-955266e2.e99e51ba.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-5576a184.9f52f39a.css">
    <script charset="utf-8" src="{{asset('')}}js1744307594169/chunk-5576a184.c49d8c14.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-7cbde8e8.788c4ae8.css">
    <script charset="utf-8" src="{{asset('')}}js1744307594169/chunk-7cbde8e8.43936207.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-4f89519c.2a0f3cea.css">
    <script charset="utf-8" src="{{asset('')}}js1744307594169/chunk-4f89519c.5238fa59.1744307594169.chunk.js"></script>
</head>
<style>
    .page .headers.on[data-v-decd48ac] {
    background: linear-gradient(81deg, #03031d, #03031f, #09096e);
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
                    <div data-v-decd48ac="" data-v-13db724a="" class="page">
                        <div data-v-13db724a="" data-v-decd48ac="" class="bg"></div>
                        <div data-v-decd48ac="" class="headers on">
                            <div data-v-29c52665="" data-v-13db724a="" class="head head0" data-v-decd48ac="">
                                <div data-v-29c52665="" class="container flex">
                                    <a href="{{route('user.profile')}}">
                                    <div data-v-29c52665="" class="back"><img data-v-29c52665=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAE+SURBVHgB3diLDYIwEAbgwy7gCLoBbOIGtiM4gbqBE0DdSCcQJ5AN8GrAIPIobXNH+JOG0jbhCyVpC8DSIqVcmwKBsgKPKKX2URQ9sLwQdYQAicAxBoMX3Wwry3Krtc7BI05vqAtTpQDPTAb1YXDaFL4db9CkKRvCpGmqIUCsQRQYaxAVxgpEiRkFUWMGQRyYXhAXphPEifkDcWN+QHPAfEEDaxNVciynLMuu9Vp2At5ssFxMpQYF22B55LMwf0C4jzkAbwr8Vs+m8v2occcnsTHrGCzN3AJRRF25YeI4fiJq1xqzS5Ikx+47EEQ0b+aAEu0GbpToauREib4OLpQY6uRAibEB1KhREDXKCkSJsgZRoZzO9j3LTFGd7b1Or05ne3yoxoerVnOQHYPz75g2yqzWIc723ql+WG1gqXkDGBPa7OTyg7AAAAAASUVORK5CYII="
                                            alt=""></div><!---->
                                        </a>
                                    <div data-v-29c52665="" class="name tac">Credit Center</div>
                                    <div data-v-29c52665="" class="flex1"></div><!----><!----><!----><!----><!---->
                                    {{-- <div data-v-29c52665="" class="str"> Credit Rules </div><!----><!----><!----> --}}
                                </div>
                            </div>
                        </div>
                        @php
                            $vipRules = [
                                1 => ['amount' => 60,   'requires' => 0],
                                2 => ['amount' => 120,  'requires' => 1],
                                3 => ['amount' => 360,  'requires' => 2],
                                4 => ['amount' => 840,  'requires' => 3],
                                5 => ['amount' => 1680, 'requires' => 4],
                                6 => ['amount' => 3600, 'requires' => 5],
                                7 => ['amount' => 7560, 'requires' => 6],
                                8 => ['amount' => 15000,'requires' => 7],
                                9 => ['amount' => 30000,'requires' => 8],
                            ];
                            @endphp

                                <?php
                                $balance = round(Auth::user()->available_balance(), 2);
                                
                                ?>
                        <div data-v-decd48ac="" id="scroll" class="content-container" style="padding-top: 44px;">
                            <div data-v-decd48ac="" id="content" class="content-scroll">
                                
                                <div data-v-13db724a="" data-v-decd48ac="" class="main">
                                    <div data-v-13db724a="" data-v-decd48ac="" class="container">
                                        <ul data-v-13db724a="" data-v-decd48ac="" class="line2">
                                            <li data-v-13db724a="" data-v-decd48ac="" class="v1">
                                                <div data-v-13db724a="" data-v-decd48ac="" class="tit flex">
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="n flex1"><img
                                                            data-v-13db724a="" data-v-decd48ac=""
                                                            src="{{asset('')}}static/img/bc3cf11087b69389ded07723adf92b4a.png"
                                                            alt="">VIP 1</div>
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                    @php
                                                                $vipLevel = 1; // ← Change this dynamically in each card (e.g. 1 for VIP1, 2 for VIP2...)
                                                                $rule = $vipRules[$vipLevel];
                                                                $requiredAmount = $rule['amount'];
                                                                $currentPackage = $user->package ?? 0;
                                                                $amountToPay = max(0, $requiredAmount - $currentPackage);
                                                            @endphp


                                                    @if($balance >= $amountToPay && $amountToPay > 0 || $myRank >=$vipLevel)
                                                        <span
                                                            data-v-13db724a="" data-v-decd48ac=""
                                                            class="on on0">Achieve
                                                        </span>
                                                        @else
                                                        <span
                                                            data-v-13db724a="" data-v-decd48ac="" class="off">Not
                                                            achieved</span>
                                                            @endif
                                                        </div>
                                                </div>
                                                <div data-v-13db724a="" data-v-decd48ac="" class="box">
                                                    <div data-v-13db724a="" data-v-decd48ac="">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="s">2 USDT</div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="n">
                                                            Daily Profit</div>
                                                    </div>
                                                    <div data-v-13db724a="" data-v-decd48ac="">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                        60.00 USDT</div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="n">
                                                        Unlock Balance</div>
                                                    </div>
                                                    <div data-v-13db724a="" data-v-decd48ac="">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                            365</div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="n">
                                                            Contract Days</div>
                                                    </div>
                                                </div>
                                                <div data-v-13db724a="" data-v-decd48ac="" class="tj">
                                                    <!----><!----><!----></div>
                                            </li>
                                            <li data-v-13db724a="" data-v-decd48ac="" class="v2">
                                                <div data-v-13db724a="" data-v-decd48ac="" class="tit flex">
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="n flex1"><img
                                                            data-v-13db724a="" data-v-decd48ac=""
                                                            src="{{asset('')}}static/img/3ef4d33c9bfec649c5a233f9bf6c8a07.png"
                                                            alt="">VIP 2</div>
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                    @php
                                                                $vipLevel = 2; // ← Change this dynamically in each card (e.g. 1 for VIP1, 2 for VIP2...)
                                                                $rule = $vipRules[$vipLevel];
                                                                $requiredAmount = $rule['amount'];
                                                                $currentPackage = $user->package ?? 0;
                                                                $amountToPay = max(0, $requiredAmount - $currentPackage);
                                                            @endphp


                                                    @if($balance >= $amountToPay && $amountToPay > 0 || $myRank >=$vipLevel)
                                                        <span
                                                            data-v-13db724a="" data-v-decd48ac=""
                                                            class="on on0">Achieve
                                                        </span>
                                                        @else
                                                        <span
                                                            data-v-13db724a="" data-v-decd48ac="" class="off">Not
                                                            achieved</span>
                                                            @endif
                                                        </div>
                                                </div>
                                                <div data-v-13db724a="" data-v-decd48ac="" class="box">
                                                    <div data-v-13db724a="" data-v-decd48ac="">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="s">4 USDT</div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="n">
                                                            Daily Profit</div>
                                                    </div>
                                                    <div data-v-13db724a="" data-v-decd48ac="">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                        
                                                                    120.00</div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="n">
                                                        Unlock Balance</div>
                                                    </div>
                                                    <div data-v-13db724a="" data-v-decd48ac="">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                            365</div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="n">
                                                            Contract Days</div>
                                                    </div>
                                                </div>
                                                <div data-v-13db724a="" data-v-decd48ac="" class="tj">
                                                    <!----><!----><!----></div>
                                            </li>
                                            <li data-v-13db724a="" data-v-decd48ac="" class="v3">
                                                <div data-v-13db724a="" data-v-decd48ac="" class="tit flex">
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="n flex1"><img
                                                            data-v-13db724a="" data-v-decd48ac=""
                                                            src="{{asset('')}}static/img/e84156ccdb1b6d531814aec74fc68f87.png"
                                                            alt="">VIP 3</div>
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                    @php
                                                                $vipLevel = 3; // ← Change this dynamically in each card (e.g. 1 for VIP1, 2 for VIP2...)
                                                                $rule = $vipRules[$vipLevel];
                                                                $requiredAmount = $rule['amount'];
                                                                $currentPackage = $user->package ?? 0;
                                                                $amountToPay = max(0, $requiredAmount - $currentPackage);
                                                            @endphp


                                                    @if($balance >= $amountToPay && $amountToPay > 0 || $myRank >=$vipLevel)
                                                        <span
                                                            data-v-13db724a="" data-v-decd48ac=""
                                                            class="on on0">Achieve
                                                        </span>
                                                        @else
                                                        <span
                                                            data-v-13db724a="" data-v-decd48ac="" class="off">Not
                                                            achieved</span>
                                                            @endif
                                                        </div>
                                                </div>
                                                <div data-v-13db724a="" data-v-decd48ac="" class="box">
                                                    <div data-v-13db724a="" data-v-decd48ac="">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="s">12 USDT</div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="n">
                                                            Daily Profit</div>
                                                    </div>
                                                    <div data-v-13db724a="" data-v-decd48ac="">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                        
                                                        360.00</div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="n">
                                                        Unlock Balance</div>
                                                    </div>
                                                    <div data-v-13db724a="" data-v-decd48ac="">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                            365</div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="n">
                                                            Contract Days</div>
                                                    </div>
                                                </div>
                                                <div data-v-13db724a="" data-v-decd48ac="" class="tj">
                                                    <!----><!----><!----></div>
                                            </li>
                                            <li data-v-13db724a="" data-v-decd48ac="" class="v4">
                                                <div data-v-13db724a="" data-v-decd48ac="" class="tit flex">
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="n flex1"><img
                                                            data-v-13db724a="" data-v-decd48ac=""
                                                            src="{{asset('')}}static/img/5a927157d4c65dd50b6e79204b700238.png"
                                                            alt="">VIP 4</div>
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                    @php
                                                                $vipLevel = 4; // ← Change this dynamically in each card (e.g. 1 for VIP1, 2 for VIP2...)
                                                                $rule = $vipRules[$vipLevel];
                                                                $requiredAmount = $rule['amount'];
                                                                $currentPackage = $user->package ?? 0;
                                                                $amountToPay = max(0, $requiredAmount - $currentPackage);
                                                                $teamvip1 = $gen_team1_VIP3 + $gen_team2_VIP3 + $gen_team3_VIP3;
                                                            @endphp


                                                    @if($balance >= $amountToPay && $amountToPay > 0 || $myRank >=$vipLevel && $teamvip1 >= 12)
                                                        <span
                                                            data-v-13db724a="" data-v-decd48ac=""
                                                            class="on on0">Achieve{{ $teamvip1 }}{{ $directc }}
                                                        </span>
                                                        @else
                                                        <span
                                                            data-v-13db724a="" data-v-decd48ac="" class="off">Not
                                                            achieved</span>
                                                            @endif
                                                        </div>
                                                </div>
                                                <div data-v-13db724a="" data-v-decd48ac="" class="box">
                                                    <div data-v-13db724a="" data-v-decd48ac="">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                            28 USDT</div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="n">
                                                           Daily Profit</div>
                                                    </div>
                                                    <div data-v-13db724a="" data-v-decd48ac="">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                        840.00</div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="n">
                                                        Unlock Balance</div>
                                                    </div>
                                                    <div data-v-13db724a="" data-v-decd48ac="">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                        365</div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="n">
                                                            Contract Days</div>
                                                    </div>
                                                </div>
                                                <div data-v-13db724a="" data-v-decd48ac="" class="tj">
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="cname">
                                                        Conditions for credit rating upgrade</div>
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="ser1">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="ul1">
                                                        <ul data-v-13db724a="" data-v-decd48ac="">
    @php
        $vipLevel = 4;
        $rule = $vipRules[$vipLevel];
        $amountToPay = max(0, $rule['amount'] - $currentPackage);

        $gen_team1_VIP3 = $gen_team1_VIP3 ?? 0;
    @endphp

    @for ($i = 0; $i < 3; $i++)
        <li 
            data-v-13db724a="" 
            data-v-decd48ac="" 
            style="{{ $i < $gen_team1_VIP3 ? 'background-color: #c042c6;' : 'background-color: #e0e0e0;' }}; width: 20px; height: 20px; border-radius: 50%; display: inline-block;">
        </li>
    @endfor
</ul>


                                                        </div>
                                                        @php
    $gen_team1_VIP3 = $gen_team1_VIP3 ?? 0;
    $gen_team2_VIP3 = $gen_team2_VIP3 ?? 0;
    $gen_team3_VIP3 = $gen_team3_VIP3 ?? 0;
    $completedtask = $gen_team1_VIP3 + $gen_team2_VIP3 + $gen_team3_VIP3;
    $quantifiableCount = 12;
    $process = ($completedtask / $quantifiableCount) * 100;
@endphp
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="flex">
                                                            <div data-v-13db724a="" data-v-decd48ac=""
                                                                class="left"><span data-v-13db724a=""
                                                                    data-v-decd48ac="">Direct referrer</span></div>
                                                            <div data-v-13db724a="" data-v-decd48ac=""
                                                                class="right"> {{$gen_team1_VIP3}}/<span data-v-13db724a=""
                                                                    data-v-decd48ac="">3</span></div>
                                                        </div>
                                                    </div>                                                    
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="ser1">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="for">
                                                            <span data-v-13db724a="" data-v-decd48ac=""
                                                            style="width: {{$process}}%;"></span></div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="flex">
                                                            <div data-v-13db724a="" data-v-decd48ac=""
                                                                class="left"> L2 + L3 Team </div>
                                                            <div data-v-13db724a="" data-v-decd48ac=""
                                                                class="right"> {{ $completedtask }}/<span data-v-13db724a=""
                                                                    data-v-decd48ac="">{{ $quantifiableCount }}</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-v-13db724a="" data-v-decd48ac="" class="v5">
                                                <div data-v-13db724a="" data-v-decd48ac="" class="tit flex">
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="n flex1"><img
                                                            data-v-13db724a="" data-v-decd48ac=""
                                                            src="{{asset('')}}static/img/801aeb5622b9a5316256390053248c92.png"
                                                            alt="">VIP 5</div>
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                    @php
                                                                $vipLevel = 5; // ← Change this dynamically in each card (e.g. 1 for VIP1, 2 for VIP2...)
                                                                $rule = $vipRules[$vipLevel];
                                                                $requiredAmount = $rule['amount'];
                                                                $currentPackage = $user->package ?? 0;
                                                                $amountToPay = max(0, $requiredAmount - $currentPackage);
                                                                $teamvip2 = $gen_team1_VIP4 + $gen_team2_VIP4 + $gen_team3_VIP4;
                                                            @endphp


                                                    @if($balance >= $amountToPay && $amountToPay > 0 || $myRank >=$vipLevel && $teamvip2 >=25)
                                                        <span
                                                            data-v-13db724a="" data-v-decd48ac=""
                                                            class="on on0">Achieve
                                                        </span>
                                                        @else
                                                        <span
                                                            data-v-13db724a="" data-v-decd48ac="" class="off">Not
                                                            achieved</span>
                                                            @endif
                                                        </div>
                                                </div>
                                                <div data-v-13db724a="" data-v-decd48ac="" class="box">
                                                    <div data-v-13db724a="" data-v-decd48ac="">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                            60 USDT</div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="n">
                                                           Daily Profit</div>
                                                    </div>
                                                    <div data-v-13db724a="" data-v-decd48ac="">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                         1680 USDT</div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="n">
                                                            Unlock Balance</div>
                                                    </div>
                                                    <div data-v-13db724a="" data-v-decd48ac="">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                        365</div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="n">
                                                            Contract Days</div>
                                                    </div>
                                                </div>
                                                <div data-v-13db724a="" data-v-decd48ac="" class="tj">
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="cname">
                                                        Conditions for credit rating upgrade</div>
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="ser1">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="ul1">
                                                            <ul data-v-13db724a="" data-v-decd48ac="">
                                                            @php
        $vipLevel = 5;
        $rule = $vipRules[$vipLevel];
        $amountToPay = max(0, $rule['amount'] - $currentPackage);

        $gen_team1_VIP3 = $gen_team2_VIP3 ?? 0;
    @endphp

    @for ($i = 0; $i < 3; $i++)
        <li 
            data-v-13db724a="" 
            data-v-decd48ac="" 
            style="{{ $i < $gen_team1_VIP3 ? 'background-color: #c042c6;' : 'background-color: #e0e0e0;' }}; width: 20px; height: 20px; border-radius: 50%; display: inline-block;">
        </li>
    @endfor
                                                            </ul>
                                                        </div>
                                                        @php
    $completedtask4 = ($gen_team1_VIP4 ?? 0) + ($gen_team2_VIP4 ?? 0) + ($gen_team3_VIP4 ?? 0);
    $quantifiableCount4 = 25;
    $process4 = min(100, ($completedtask4 / $quantifiableCount4) * 100);
@endphp
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="flex">
                                                            <div data-v-13db724a="" data-v-decd48ac=""
                                                                class="left"><span data-v-13db724a=""
                                                                    data-v-decd48ac="">L1 Team</span></div>
                                                            <div data-v-13db724a="" data-v-decd48ac=""
                                                                class="right"> {{$gen_team1_VIP4}}/<span data-v-13db724a=""
                                                                    data-v-decd48ac="">3</span></div>
                                                        </div>
                                                    </div>
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="ser1">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="for">
                                                            <span data-v-13db724a="" data-v-decd48ac=""
                                                                style="width:{{$process4}}"></span></div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="flex">
                                                            <div data-v-13db724a="" data-v-decd48ac=""
                                                                class="left"> L2 + L3 Team </div>
                                                            <div data-v-13db724a="" data-v-decd48ac=""
                                                                class="right"> {{$completedtask4}}/<span data-v-13db724a=""
                                                                    data-v-decd48ac="">{{ $quantifiableCount4 }}</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-v-13db724a="" data-v-decd48ac="" class="v4">
                                                <div data-v-13db724a="" data-v-decd48ac="" class="tit flex">
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="n flex1"><img
                                                            data-v-13db724a="" data-v-decd48ac=""
                                                            src="{{asset('')}}static/img/d8d58144ff82da22c5a4675d125dd9fd.png"
                                                            alt="">VIP 6</div>
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                    @php
                                                                $vipLevel = 6; // ← Change this dynamically in each card (e.g. 1 for VIP1, 2 for VIP2...)
                                                                $rule = $vipRules[$vipLevel];
                                                                $requiredAmount = $rule['amount'];
                                                                $currentPackage = $user->package ?? 0;
                                                                $amountToPay = max(0, $requiredAmount - $currentPackage);
                                                                $teamvip3 = $gen_team1_VIP5 + $gen_team2_VIP5 + $gen_team3_VIP5;
                                                            @endphp


                                                    @if($balance >= $amountToPay && $amountToPay > 0 || $myRank >=$vipLevel && $teamvip3 >= 50)
                                                        <span
                                                            data-v-13db724a="" data-v-decd48ac=""
                                                            class="on on0">Achieve
                                                        </span>
                                                        @else
                                                        <span
                                                            data-v-13db724a="" data-v-decd48ac="" class="off">Not
                                                            achieved</span>
                                                            @endif
                                                        </div>
                                                </div>
                                                <div data-v-13db724a="" data-v-decd48ac="" class="box">
                                                    <div data-v-13db724a="" data-v-decd48ac="">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                            120 USDT</div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="n">
                                                           Daily Profit</div>
                                                    </div>
                                                    <div data-v-13db724a="" data-v-decd48ac="">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                        3600 USDT</div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="n">
                                                            Unlock Balance</div>
                                                    </div>
                                                    <div data-v-13db724a="" data-v-decd48ac="">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                        365</div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="n">
                                                            Contract Days</div>
                                                    </div>
                                                </div>
                                                <div data-v-13db724a="" data-v-decd48ac="" class="tj">
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="cname">
                                                        Conditions for credit rating upgrade</div>
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="ser1">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="ul1">
                                                        <ul data-v-13db724a="" data-v-decd48ac="">
    @php
        $vipLevel = 6;
        $rule = $vipRules[$vipLevel];
        $amountToPay = max(0, $rule['amount'] - $currentPackage);

        $gen_team3_VIP3 = $gen_team3_VIP3 ?? 0;
    @endphp

    <li data-v-13db724a="" data-v-decd48ac=""
        style="{{ 0 < $gen_team3_VIP3 ? 'background-color: #c042c6;' : 'background-color: #e0e0e0;' }}; width: 20px; height: 20px; border-radius: 50%; display: inline-block; margin-right: 4px;">
    </li>
    
    <li data-v-13db724a="" data-v-decd48ac=""
        style="{{ 1 < $gen_team3_VIP3 ? 'background-color: #c042c6;' : 'background-color: #e0e0e0;' }}; width: 20px; height: 20px; border-radius: 50%; display: inline-block; margin-right: 4px;">
    </li>
    
    <li data-v-13db724a="" data-v-decd48ac=""
        style="{{ 2 < $gen_team3_VIP3 ? 'background-color: #c042c6;' : 'background-color: #e0e0e0;' }}; width: 20px; height: 20px; border-radius: 50%; display: inline-block; margin-right: 4px;">
    </li>
</ul>

                                                        </div>
                                                        @php
    $completedtask5 = ($gen_team1_VIP5 ?? 0) + ($gen_team2_VIP5 ?? 0) + ($gen_team3_VIP5 ?? 0);
    $quantifiableCount5 = 50;
    $process5 = min(100, ($completedtask5 / $quantifiableCount5) * 100);
@endphp
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="flex">
                                                            <div data-v-13db724a="" data-v-decd48ac=""
                                                                class="left"><span data-v-13db724a=""
                                                                    data-v-decd48ac="">L1 Team</span></div>
                                                            <div data-v-13db724a="" data-v-decd48ac=""
                                                                class="right">{{$gen_team1_VIP5}}/<span data-v-13db724a=""
                                                                    data-v-decd48ac="">3</span></div>
                                                        </div>
                                                    </div>
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="ser1">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="for">
                                                            <span data-v-13db724a="" data-v-decd48ac=""
                                                                style="width: {{ $process5 }}%"></span></div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="flex">
                                                            <div data-v-13db724a="" data-v-decd48ac=""
                                                                class="left"> L2 + L3 Team </div>
                                                            <div data-v-13db724a="" data-v-decd48ac=""
                                                                class="right"> {{ $completedtask5 }}/<span data-v-13db724a=""
                                                                    data-v-decd48ac="">{{ $quantifiableCount5 }}</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-v-13db724a="" data-v-decd48ac="" class="v5">
                                                <div data-v-13db724a="" data-v-decd48ac="" class="tit flex">
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="n flex1"><img
                                                            data-v-13db724a="" data-v-decd48ac=""
                                                            src="{{asset('')}}static/img/d32a35a2d9ac4acc4fca025fce1ad2c1.png"
                                                            alt="">VIP 7</div>
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                    @php
                                                                $vipLevel = 7; // ← Change this dynamically in each card (e.g. 1 for VIP1, 2 for VIP2...)
                                                                $rule = $vipRules[$vipLevel];
                                                                $requiredAmount = $rule['amount'];
                                                                $currentPackage = $user->package ?? 0;
                                                                $amountToPay = max(0, $requiredAmount - $currentPackage);
                                                                $teamvip4 = $gen_team1_VIP6 + $gen_team2_VIP6 + $gen_team3_VIP6;
                                                            @endphp


                                                    @if($balance >= $amountToPay && $amountToPay > 0 || $myRank >=$vipLevel && $teamvip4 >=100)
                                                        <span
                                                            data-v-13db724a="" data-v-decd48ac=""
                                                            class="on on0">Achieve
                                                        </span>
                                                        @else
                                                        <span
                                                            data-v-13db724a="" data-v-decd48ac="" class="off">Not
                                                            achieved</span>
                                                            @endif
                                                        </div>
                                                </div>
                                                <div data-v-13db724a="" data-v-decd48ac="" class="box">
                                                    <div data-v-13db724a="" data-v-decd48ac="">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                            240 USDT</div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="n">
                                                           Daily Profit</div>
                                                    </div>
                                                    <div data-v-13db724a="" data-v-decd48ac="">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                        7560 USDT</div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="n">
                                                            Unlock Balance</div>
                                                    </div>
                                                    <div data-v-13db724a="" data-v-decd48ac="">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                        365</div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="n">
                                                            Contract Days</div>
                                                    </div>
                                                </div>
                                                <div data-v-13db724a="" data-v-decd48ac="" class="tj">
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="cname">
                                                        Conditions for credit rating upgrade</div>
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="ser1">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="ul1">
                                                        <ul data-v-13db724a="" data-v-decd48ac="">
    @php
        $vipLevel = 7;
        $rule = $vipRules[$vipLevel];
        $amountToPay = max(0, $rule['amount'] - $currentPackage);

        $gen_team3_VIP7 = $gen_team3_VIP7 ?? 0;
    @endphp

    @for ($i = 0; $i < 3; $i++) <!-- Adjust 5 as necessary -->
        <li data-v-13db724a="" data-v-decd48ac=""
            style="{{ $i < $gen_team3_VIP7 ? 'background-color: #c042c6;' : 'background-color: #e0e0e0;' }}; width: 20px; height: 20px; border-radius: 50%; display: inline-block; margin-right: 4px;">
        </li>
    @endfor
</ul>

                                                        </div>
                                                        @php
    $completedtask6 = ($gen_team1_VIP6 ?? 0) + ($gen_team2_VIP6 ?? 0) + ($gen_team3_VIP6 ?? 0);
    $quantifiableCount6 = 100;
    $process6 = min(100, ($completedtask6 / $quantifiableCount6) * 100);
@endphp
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="flex">
                                                            <div data-v-13db724a="" data-v-decd48ac=""
                                                                class="left"><span data-v-13db724a=""
                                                                    data-v-decd48ac="">L1 Team</span></div>
                                                            <div data-v-13db724a="" data-v-decd48ac=""
                                                                class="right">{{$gen_team1_VIP6}}/<span data-v-13db724a=""
                                                                    data-v-decd48ac="">3</span></div>
                                                        </div>
                                                    </div>
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="ser1">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="for">
                                                            <span data-v-13db724a="" data-v-decd48ac=""
                                                                style="width: {{ $process6 }}"></span></div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="flex">
                                                            <div data-v-13db724a="" data-v-decd48ac=""
                                                                class="left"> L2 + L3 Team </div>
                                                            <div data-v-13db724a="" data-v-decd48ac=""
                                                                class="right">{{$completedtask6}}/<span data-v-13db724a=""
                                                                    data-v-decd48ac="">{{$quantifiableCount6}}</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-v-13db724a="" data-v-decd48ac="" class="v6">
                                                <div data-v-13db724a="" data-v-decd48ac="" class="tit flex">
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="n flex1"><img
                                                            data-v-13db724a="" data-v-decd48ac=""
                                                            src="{{asset('')}}static/img/vip8.png"
                                                            alt="">VIP 8</div>
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                    @php
                                                                $vipLevel = 8; // ← Change this dynamically in each card (e.g. 1 for VIP1, 2 for VIP2...)
                                                                $rule = $vipRules[$vipLevel];
                                                                $requiredAmount = $rule['amount'];
                                                                $currentPackage = $user->package ?? 0;
                                                                $amountToPay = max(0, $requiredAmount - $currentPackage);
                                                                $teamvip5 = $gen_team1_VIP7 + $gen_team2_VIP7 + $gen_team3_VIP7;
                                                            @endphp


                                                    @if($balance >= $amountToPay && $amountToPay > 0 || $myRank >=$vipLevel && $teamvip5 >=250)
                                                        <span
                                                            data-v-13db724a="" data-v-decd48ac=""
                                                            class="on on0">Achieve
                                                        </span>
                                                        @else
                                                        <span
                                                            data-v-13db724a="" data-v-decd48ac="" class="off">Not
                                                            achieved</span>
                                                            @endif
                                                    </div>
                                                </div>
                                                <div data-v-13db724a="" data-v-decd48ac="" class="box">
                                                    <div data-v-13db724a="" data-v-decd48ac="">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                            480 USDT</div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="n">
                                                           Daily Profit</div>
                                                    </div>
                                                    <div data-v-13db724a="" data-v-decd48ac="">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                        15000 USDT</div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="n">
                                                            Unlock Balance</div>
                                                    </div>
                                                    <div data-v-13db724a="" data-v-decd48ac="">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                        365</div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="n">
                                                            Contract Days</div>
                                                    </div>
                                                </div>
                                                <div data-v-13db724a="" data-v-decd48ac="" class="tj">
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="cname">
                                                        Conditions for credit rating upgrade</div>
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="ser1">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="ul1">
                                                        <ul data-v-13db724a="" data-v-decd48ac="">
    @php
        $vipLevel = 8;
        $rule = $vipRules[$vipLevel];
        $amountToPay = max(0, $rule['amount'] - $currentPackage);

        $gen_team3_VIP8 = $gen_team3_VIP8 ?? 0;
    @endphp

    @for ($i = 0; $i < 3; $i++) <!-- Adjust 5 as necessary -->
        <li data-v-13db724a="" data-v-decd48ac=""
            style="{{ $i < $gen_team3_VIP8 ? 'background-color: #c042c6;' : 'background-color: #e0e0e0;' }}; width: 20px; height: 20px; border-radius: 50%; display: inline-block; margin-right: 4px;">
        </li>
    @endfor
</ul>

                                                        </div>
                                                        @php
    $completedtask7 = ($gen_team1_VIP7 ?? 0) + ($gen_team2_VIP7 ?? 0) + ($gen_team3_VIP7 ?? 0);
    $quantifiableCount7 = 250;
    $process7 = min(100, ($completedtask7 / $quantifiableCount7) * 100);
@endphp
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="flex">
                                                            <div data-v-13db724a="" data-v-decd48ac=""
                                                                class="left"><span data-v-13db724a=""
                                                                    data-v-decd48ac="">L1 Team</span></div>
                                                            <div data-v-13db724a="" data-v-decd48ac=""
                                                                class="right">{{$gen_team1_VIP7}}/
                                                                <span data-v-13db724a=""
                                                                    data-v-decd48ac="">3</span>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="ser1">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="for">
                                                            <span data-v-13db724a="" data-v-decd48ac=""
                                                                style="width: {{ $process7 }}"></span></div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="flex">
                                                            <div data-v-13db724a="" data-v-decd48ac=""
                                                                class="left"> L2 + L3 Team </div>
                                                            <div data-v-13db724a="" data-v-decd48ac=""
                                                                class="right">{{ $completedtask7 }}/<span data-v-13db724a=""
                                                                    data-v-decd48ac="">{{ $quantifiableCount7 }}</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- <li data-v-13db724a="" data-v-decd48ac="" class="v7">
                                                <div data-v-13db724a="" data-v-decd48ac="" class="tit flex">
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="n flex1"><img
                                                            data-v-13db724a="" data-v-decd48ac=""
                                                            src="{{asset('')}}static/img/d32a35a2d9ac4acc4fca025fce1ad2c1.png"
                                                            alt="">Level 9 Ally</div>
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                    @php
                                                                $vipLevel = 8;
                                                                $rule = $vipRules[$vipLevel];
                                                                $requiredAmount = $rule['amount'];
                                                                $currentPackage = $user->package ?? 0;
                                                                $amountToPay = max(0, $requiredAmount - $currentPackage);
                                                            @endphp


                                                    @if($balance >= $amountToPay && $amountToPay > 0 || $myRank >=$vipLevel)
                                                        <span
                                                            data-v-13db724a="" data-v-decd48ac=""
                                                            class="on on0">Achieve
                                                        </span>
                                                        @else
                                                        <span
                                                            data-v-13db724a="" data-v-decd48ac="" class="off">Not
                                                            achieved</span>
                                                            @endif
                                                    </div>
                                                </div>
                                                <div data-v-13db724a="" data-v-decd48ac="" class="box">
                                                    <div data-v-13db724a="" data-v-decd48ac="">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                            2 USDT</div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="n">
                                                           Daily Profit</div>
                                                    </div>
                                                    <div data-v-13db724a="" data-v-decd48ac="">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                        1800 USDT</div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="n">
                                                            Unlock Balance</div>
                                                    </div>
                                                    <div data-v-13db724a="" data-v-decd48ac="">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="s">
                                                            50-22000</div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="n">
                                                            Contract Days</div>
                                                    </div>
                                                </div>
                                                <div data-v-13db724a="" data-v-decd48ac="" class="tj">
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="cname">
                                                        Conditions for credit rating upgrade</div>
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="ser1">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="ul1">
                                                            <ul data-v-13db724a="" data-v-decd48ac="">
    @php
        $vipLevel = 9;
        $rule = $vipRules[$vipLevel];
        $amountToPay = max(0, $rule['amount'] - $currentPackage);

        $gen_team3_VIP9 = $gen_team3_VIP9 ?? 0;
    @endphp

    @for ($i = 0; $i < 5; $i++)
        <li data-v-13db724a="" data-v-decd48ac=""
            style="{{ $i < $gen_team3_VIP9 ? 'background-color: #c042c6;' : 'background-color: #e0e0e0;' }}; width: 20px; height: 20px; border-radius: 50%; display: inline-block; margin-right: 4px;">
        </li>
    @endfor
</ul>

                                                        </div>
                                                        @php
    $completedtask8 = ($gen_team1_VIP8 ?? 0) + ($gen_team2_VIP8 ?? 0) + ($gen_team3_VIP8 ?? 0);
    $quantifiableCount8 = 5;
    $process8 = min(100, ($completedtask8 / $quantifiableCount8) * 100);
@endphp
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="flex">
                                                            <div data-v-13db724a="" data-v-decd48ac=""
                                                                class="left"><span data-v-13db724a=""
                                                                    data-v-decd48ac="">L1 Team</span></div>
                                                            <div data-v-13db724a="" data-v-decd48ac=""
                                                                class="right"> {{ $completedtask8 }}/
                                                                <span data-v-13db724a=""
                                                                    data-v-decd48ac="">{{ $quantifiableCount8 }}</span>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div data-v-13db724a="" data-v-decd48ac="" class="ser1">
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="for">
                                                            <span data-v-13db724a="" data-v-decd48ac=""
                                                                style="width: {{ $process8 }}"></span></div>
                                                        <div data-v-13db724a="" data-v-decd48ac="" class="flex">
                                                            <div data-v-13db724a="" data-v-decd48ac=""
                                                                class="left"> L2 + L3 Team </div>
                                                            <div data-v-13db724a="" data-v-decd48ac=""
                                                                class="right"> 13.53/<span data-v-13db724a=""
                                                                    data-v-decd48ac="">10000</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <script src="{{asset('')}}js1744307594169/chunk-vue.a3b4853b.1744307594169.chunk.js"></script>
    <script src="{{asset('')}}js1744307594169/chunk-echarts.cc04be28.1744307594169.chunk.js"></script>
    <script src="{{asset('')}}js1744307594169/chunk-vant.81420f35.1744307594169.chunk.js"></script>
    <script src="{{asset('')}}js1744307594169/chunk-vendors.374f8b51.1744307594169.chunk.js"></script>
</body>

</html>
