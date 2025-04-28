<html style="font-size: 50px;" translate="no">

<head>
    <meta charset="utf-8">
    <title>Withdraw</title>
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
    <link href="{{ asset('') }}static/css/app.5bf8f9dc.css" rel="stylesheet">
    <link href="{{ asset('') }}static/css/chunk-562e723d.d633a94a.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-3037d06a.61cb72b7.css">
    <script charset="utf-8" src="/js1744307594169/chunk-3037d06a.26c89200.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-5576a184.9f52f39a.css">
    <script charset="utf-8" src="/js1744307594169/chunk-5576a184.c49d8c14.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-7cbde8e8.788c4ae8.css">
    <script charset="utf-8" src="/js1744307594169/chunk-7cbde8e8.43936207.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-4f89519c.2a0f3cea.css">
    <script charset="utf-8" src="/js1744307594169/chunk-4f89519c.5238fa59.1744307594169.chunk.js"></script>
</head>

<style>
    .van-cell {
        position: relative;
        display: -webkit-box;
        display: -webkit-flex;
        display: flex;
        box-sizing: border-box;
        width: 100%;
        padding: .17241rem .27586rem;
        overflow: hidden;
        color: #fffcfc;
        font-size: .24138rem;
        line-height: .41379rem;
        background-color: #fff;
    }

    .img[data-v-a11fc2d2] {
        height: .48rem;
        filter: brightness(0) saturate(100%) invert(100%) sepia(0%) saturate(7500%) hue-rotate(245deg) brightness(104%) contrast(104%);
    }

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
                    <div data-v-decd48ac="" data-v-f43a837c="" class="page">
                        <div data-v-decd48ac="" class="headers on">
                            <div data-v-29c52665="" data-v-f43a837c="" class="head head0" data-v-decd48ac="">
                                <div data-v-29c52665="" class="container flex">
                                    <a href="{{ route('user.asset') }}">
                                        <div data-v-29c52665="" class="back"><img data-v-29c52665=""
                                                src="{{ asset('') }}static/img/icon/error.png" alt="">
                                        </div>
                                    </a>
                                    <!---->
                                    <div data-v-29c52665="" class="name tac">withdrawal</div>
                                    <div data-v-29c52665="" class="flex1"></div>
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                </div>
                            </div>
                        </div>


                        <form action="{{ route('user.Withdraw-Request') }}" methode="post" data-v-7daccefc="">
                            {{ csrf_field() }}



                            <div data-v-40b7e5e7="" id="scroll" class="content-container"
                                style="padding-top: 40px; padding-bottom: 76px;">
                                <div data-v-40b7e5e7="" id="content" class="content-scroll">
                                    <div data-v-a11fc2d2="" data-v-40b7e5e7="" class="container py-16px">
                                        <div data-v-a11fc2d2="" class="coin-chain-picker flex-between-center gap-12px"
                                            data-v-40b7e5e7="">
                                            <dl class="flex-1">
                                                <dt class="mb-12px">Select currency</dt><span
                                                    class="w-full van-popover__wrapper">
                                                    <div
                                                        class="flex-between-center border-1px border-solid h-44px p-12px rounded-full border-gray">
                                                        <div class="flex items-center gap-4px">
                                                            <img alt="" class="h-24px w-24px rounded-full"
                                                                src="{{ asset('') }}static/img/usdt.png">
                                                            <input type="text" name="" value="USDT"
                                                                class="border px-2 py-1 rounded"
                                                                style="width: 80px;background:transparent">
                                                        </div>


                                                        <!-- <i class="van-icon van-icon-arrow-down"> -->
                                                        <!----></i>
                                                        </dd>
                                                </span>
                                            </dl>
                                            <dl class="flex-1">
                                                <dt class="mb-12px">Select Network</dt>


                                                <span class="w-full van-popover__wrapper" id="popoverTrigger">
                                                    <dd
                                                        class="flex-between-center border-1px border-solid h-44px p-12px rounded-full border-gray">
                                                        <div class="flex items-center gap-4px">
                                                            <img alt="" class="h-24px w-24px rounded-full"
                                                                id="selectedIcon"
                                                                src="{{ asset('') }}static/img/tron.png">
                                                            <span style="flex: 1 1 0%; word-break: break-all;"
                                                                id="selectedText">TRON(TRC20)</span>
                                                        </div>
                                                        <i class="van-icon van-icon-arrow-down"></i>
                                                    </dd>
                                                </span>
                                                <style>
                                                    .van-popover__content {
                                                        display: none;
                                                        position: absolute;
                                                        background: #030323;
                                                        border: 1px solid #ccc;
                                                        z-index: 1000;
                                                        padding: 10px;
                                                        border-radius: 10px;
                                                        margin: 0px auto;
                                                    }

                                                    .van-popover__content.active {
                                                        display: block;
                                                    }

                                                    .van-cell.van-cell--clickable.active {
                                                        border: 2px solid #ffff;
                                                        border-radius: 10px;
                                                    }
                                                </style>
                                            </dl>
                                        </div>

                                        <div role="menu" class="van-popover__content" id="chainSelector"
                                            onchange="updateWalletAddress()">
                                            <div class="text-16px p-12px">Choose mainnet</div>
                                            <div class="coin-chain-picker-item van-radio-group">
                                                <div class="van-cell-group van-hairline--top-bottom">




                                                    <div role="button" tabindex="0" id="TRX"
                                                        class="van-cell van-cell--clickable">
                                                        <div class="van-cell__title">
                                                            <div class="flex gap-12px">
                                                                <img src="{{ asset('') }}static/img/tron.png"
                                                                    alt="" class="h-40px w-40px rounded-full">
                                                                <dl>
                                                                    <label for="usdtBep20" value="trc20">TRON
                                                                        (TRC20)</label>

                                                                    <input type="text" id="usdtTrc20" hidden
                                                                        name="PSys"
                                                                        placeholder="Enter your TRON (TRC20) address">
                                                                    <dd class="text-12px text-gray">Estimated arrival
                                                                        time ≈ 1 minutes</dd>
                                                                    <dd class="text-12px text-gray">Minimum withdrawal
                                                                        ≥ 10 USDT</dd>
                                                                    <dd class="text-12px text-gray">Maximum withdrawal
                                                                        ≤ 1000 USDT</dd>
                                                                </dl>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div role="button" tabindex="0" id="BSC"
                                                        class="van-cell van-cell--clickable">
                                                        <div class="van-cell__title">
                                                            <div class="flex gap-12px">
                                                                <img src="{{ asset('') }}static/img/bnb.png"
                                                                    alt="" class="h-40px w-40px rounded-full">
                                                                <dl style="margin-left:43px; margin-top: -48px;">
                                                                    <label for="usdtBep20" value="bep20">BNB SMART
                                                                        CHAIN (BEP20)</label>

                                                                    <input type="text" id="usdtBep20"
                                                                        name="PSys"
                                                                        placeholder="Enter your BNB (BEP20) address"
                                                                        style="visibility: collapse;">


                                                                    <dd class="text-12px text-gray">Estimated arrival
                                                                        time ≈ 1 minutes</dd>
                                                                    <dd class="text-12px text-gray">Minimum withdrawal
                                                                        ≥ 10 USDT</dd>
                                                                    <dd class="text-12px text-gray">Maximum withdrawal
                                                                        ≤ 1000 USDT</dd>
                                                                </dl>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>






                                        <div data-v-a11fc2d2="" data-v-40b7e5e7="" class="it valMob mt-16px">
                                            <div data-v-a11fc2d2="" data-v-40b7e5e7="" class="cname">Number of
                                                withdrawal</div>
                                            <div data-v-a11fc2d2="" data-v-40b7e5e7="" class="inp val flex">



                                                <input data-v-a11fc2d2="" data-v-40b7e5e7="" type="text"
                                                    id="amountRequest" placeholder="Enter amount" min="20"
                                                    name="amount">



                                            </div>
                                            <div data-v-a11fc2d2="" data-v-40b7e5e7="" class="tip1">
                                                <p data-v-a11fc2d2="" data-v-40b7e5e7=""><span data-v-a11fc2d2=""
                                                        data-v-40b7e5e7="">Make amount</span><span data-v-a11fc2d2=""
                                                        data-v-40b7e5e7="" id="withdrawamt">0 USDT</span></p>
                                                <p data-v-a11fc2d2="" data-v-40b7e5e7="">




                                                    <span data-v-a11fc2d2="" data-v-40b7e5e7="">
                                                        Actual Amount Received</span><span data-v-a11fc2d2=""
                                                        data-v-40b7e5e7="" id="ActualAmount"> 0 USDT
                                                    </span>
                                                </p>
                                            </div>
                                        </div>




                                        <div data-v-a11fc2d2="" data-v-40b7e5e7="" class="it valMob">
                                            <div data-v-a11fc2d2="" data-v-40b7e5e7="" class="cname flex">
                                                <div data-v-a11fc2d2="" data-v-40b7e5e7="" class="flex1"> Gettle
                                                    address </div>
                                            </div>
                                            <div data-v-a11fc2d2="" data-v-40b7e5e7="" class="inp val flex">


                                                <input type="text" id="walletAddress" name="walletAddress"
                                                    placeholder="Select Address Book to add a withdrawal address"
                                                    value="{{ Auth::user()->usdtTrc20 }}" class="flex1">



                                                <a href="{{route('user.wallets')}}"><img data-v-a11fc2d2="" data-v-40b7e5e7=""
                                                    src="{{ asset('') }}static/img/men.png" alt=""
                                                    class="img"></a> 


                                            </div>

                                            </br>
                                            <div data-v-ff022da8="" data-v-decd48ac="" class="item valMob">
                                                <div data-v-ff022da8="" data-v-decd48ac="" class="cname">Email</div>
                                                <div data-v-ff022da8="" data-v-decd48ac="" class="val inp">

                                                    <input data-v-39479e50="" data-v-6e2d35de="" type="email"
                                                        id="emailId" value="{{ Auth::user()->email }}"
                                                        type="email" placeholder="Enter your email">


                                                </div>
                                            </div>

                                            </br>
                                            <div data-v-5745725e="" data-v-7daccefc="" class="item valMob">
                                                <div data-v-5745725e="" data-v-7daccefc="" class="cname"
                                                    msttexthash="314899" msthash="59">Verification code</div>
                                                <div data-v-5745725e="" data-v-7daccefc="" class="inp val flex">
                                                    <div data-v-5745725e="" data-v-7daccefc="" class="flex1">


                                                        <input data-v-5745725e="" data-v-7daccefc="" type="text"
                                                            name="code" placeholder="Email Verification code">

                                                    </div>
                                                    <div data-v-5745725e="" data-v-7daccefc="" class="code-btn"
                                                        msttexthash="43927" msthash="61"> Send </div>
                                                    <div data-v-5745725e="" data-v-7daccefc="" class="resend-btn"
                                                        _msthidden="1" style="display: none;">



                                                        <div data-v-5745725e="" class="van-count-down"
                                                            data-v-7daccefc="" msthidden="1">
                                                            <span data-v-5745725e="" msttexthash="16328"
                                                                msthidden="1" msthash="62">0
                                                                <var data-v-5745725e="">s</var></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            </br>

                                            <div data-v-ff022da8="" data-v-decd48ac="" class="item valMob">
                                                <div data-v-ff022da8="" data-v-decd48ac="" class="cname">Transaction
                                                    password</div>
                                                <div data-v-ff022da8="" data-v-decd48ac="" class="val inp">

                                                    <input data-v-39479e50="" data-v-6e2d35de=""
                                                        name="transaction_password" type="password"
                                                        placeholder="Enter transaction password">


                                                </div>
                                            </div>

                                            </br>
                                            <div data-v-a11fc2d2="" data-v-40b7e5e7="" class="tip1">
                                                <p data-v-a11fc2d2="" data-v-40b7e5e7=""><span data-v-a11fc2d2=""
                                                        data-v-40b7e5e7="">Withdraw</span><span data-v-a11fc2d2=""
                                                        data-v-40b7e5e7="">15% </span></p>
                                                <p data-v-a11fc2d2="" data-v-40b7e5e7=""><span data-v-a11fc2d2=""
                                                        data-v-40b7e5e7="">Min Withdraw</span><span data-v-a11fc2d2=""
                                                        data-v-40b7e5e7="">20 USDT</span></p>
                                                <p data-v-a11fc2d2="" data-v-40b7e5e7=""><span data-v-a11fc2d2=""
                                                        data-v-40b7e5e7="">Processing Time</span><span
                                                        data-v-a11fc2d2="" data-v-40b7e5e7="">0–48 hours</span></p>
                                                {{-- <br> --}}
                                                {{-- <p data-v-a11fc2d2="" data-v-40b7e5e7=""><span data-v-a11fc2d2=""
                                                        style="line-height: initial;" data-v-40b7e5e7="">Withdrawals
                                                        requested on Thursday will be processed and credited by
                                                        Monday</span></p>
                                                <p data-v-a11fc2d2="" data-v-40b7e5e7=""><span data-v-a11fc2d2=""
                                                        style="line-height: initial;" data-v-40b7e5e7="">Withdrawals
                                                        requested on Friday will be processed and credited by
                                                        Tuesday.</span></p> --}}
                                            </div>
                                        </div>





                                    </div>
                                </div>
                                <div data-v-40b7e5e7="" class="footer">
                                    <div data-v-a11fc2d2="" data-v-40b7e5e7="" class="go">

                                        <button data-v-a11fc2d2="" type="submit" data-v-40b7e5e7=""
                                            class="on btn submit-btn">Withdraw</button>
                                    </div>
                                </div>
                            </div>








                        </form>










                        <div data-v-47cbd458="" class="page-loading-con" style="display: none;">
                            <div data-v-47cbd458="" class="page-loading">
                                <div data-v-47cbd458="" class="loader-outter"></div>
                                <div data-v-47cbd458="" class="loader-inner"></div>
                            </div>
                            <p data-v-47cbd458="">Loading...</p>
                        </div>
                    </div>
                    <script src="/js1744428295686/chunk-vue.d25d0d2d.1744428295686.chunk.js?v=1744428295686"></script>
                    <script src="/js1744428295686/chunk-echarts.6f5a1e0e.1744428295686.chunk.js?v=1744428295686"></script>
                    <script src="/js1744428295686/chunk-vant.87dfff1d.1744428295686.chunk.js?v=1744428295686"></script>
                    <script src="/js1744428295686/chunk-vendors.be504b8f.1744428295686.chunk.js?v=1744428295686"></script>
                    {{-- <script src="/js1744428295686/app.952cc015.1744428295686.js?v=1744428295686"></script> --}}

                    @include('partials.notify')

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


                    <script>
                        $(document).ready(function() {
                            var countdown;
                            var timer;


                            $('.code-btn').click(function(e) {
                                var emailId = $('#emailId').val();

                                if (!emailId) {
                                    iziToast.error({
                                        message: 'Invalid Email!',
                                        position: "topRight"
                                    });
                                    return false;
                                }

                                startTimer(); // Start the timer after sending the code
                                $('.code-btn').hide();
                                $('.resend-btn').show();
                                $.ajax({
                                    type: "POST",
                                    url: "{{ route('send_forgot') }}",
                                    data: {
                                        "emailId": emailId,
                                        "_token": "{{ csrf_token() }}"
                                    },
                                    success: function(response) {
                                        if (response) {
                                            iziToast.success({
                                                message: 'Email sent Successfully',
                                                position: "topRight"
                                            });



                                        } else {
                                            iziToast.error({
                                                message: 'Error!',
                                                position: "topRight"
                                            });
                                        }
                                    }
                                });
                            });

                            function startTimer() {
                                var resendButton = $('.resend-btn');
                                countdown = 60; // 60 seconds
                                resendButton.prop('disabled', true); // Disable the resend button
                                resendButton.text('Wait ' + countdown + 's');

                                timer = setInterval(function() {
                                    countdown--;
                                    resendButton.text('Wait ' + countdown + 's');

                                    if (countdown <= 0) {
                                        clearInterval(timer);
                                        resendButton.prop('disabled',
                                            false); // Enable the resend button after the timer ends
                                        resendButton.text('Resend Code'); // Reset button text
                                    }
                                }, 1000);
                            }

                            // Optional: Handle Resend Button Click
                            $('.resend-btn').click(function(e) {
                                $('.code-btn').trigger('click'); // Simulate a click on the original send button
                            });

                            $('#amountRequest').on('change keyup', function() {

                                let str = $(this).val();
                                str = str.replace(',', '.');
                                $(this).val(str);

                                let min = 20;
                                let max = 500000;
                                let charge = 15; // in percent

                                let amount = parseFloat(str);

                                if (amount >= min && amount <= max) {
                                    $(".submit-btn").prop("disabled", false);
                                } else {
                                    $(".submit-btn").prop("disabled", true);
                                }

                                if (!isNaN(amount)) {
                                    $('#withdrawamt').html(amount + " USDT");
                                    $('#ActualAmount').html((amount - (amount * charge / 100)).toFixed(2) + " USDT");
                                    $('#chargefee').html(charge + " %");
                                } else {
                                    $('#withdrawamt').html("0 USDT");
                                    $('#ActualAmount').html("0 USDT");
                                    $('#chargefee').html(charge + " %");
                                }
                            });
                        });
                    </script>








                    <script>
                        window.onload = function() {

                            document.addEventListener('touchstart', function(event) {
                                if (event.touches.length > 1) {
                                    event.preventDefault();
                                }
                            });

                            let lastTouchEnd = 0;
                            document.addEventListener('touchend', function(event) {
                                const now = (new Date()).getTime();
                                if (now - lastTouchEnd <= 300) {
                                    event.preventDefault();
                                }
                                lastTouchEnd = now;
                            }, false);
                            document.addEventListener('gesturestart', function(event) {
                                event.preventDefault();
                            });
                        }
                    </script>
                    <!---->


                    <!---->
                    <div class="van-toast van-toast--middle van-toast--success" style="z-index: 2001; display: none;">
                        <i class="van-icon van-icon-success van-toast__icon">
                            <!----></i>
                        <div class="van-toast__text">Log in success</div>
                    </div>



                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            const trc20 = "{{ Auth::user()->usdtTrc20 }}";
                            const bep20 = "{{ Auth::user()->usdtBep20 }}";

                            const walletInput = document.getElementById('walletAddress');

                            const trxBtn = document.getElementById('TRX');
                            const bscBtn = document.getElementById('BSC');

                            if (trxBtn && bscBtn && walletInput) {
                                trxBtn.addEventListener('click', function() {
                                    walletInput.value = trc20;
                                });

                                bscBtn.addEventListener('click', function() {
                                    walletInput.value = bep20;
                                });
                            }
                        });
                    </script>







                    <script>
                        const trigger = document.getElementById('popoverTrigger');
                        const popover = document.getElementById('chainSelector');
                        const selectedText = document.getElementById('selectedText');
                        const selectedIcon = document.getElementById('selectedIcon');

                        // User data from backend
                        const userUsdtTrc20 = "{{ Auth::user()->usdtTrc20 }}";
                        const userUsdtBep20 = "{{ Auth::user()->usdtBep20 }}";

                        const options = {
                            TRX: {
                                name: 'TRON(TRC20)',
                                img: '{{ asset('') }}static/img/tron.png',
                                inputId: 'usdtTrc20',
                                value: userUsdtTrc20
                            },
                            BSC: {
                                name: 'BNB SMART CHAIN(BEP20)',
                                img: '{{ asset('') }}static/img/bnb.png',
                                inputId: 'usdtBep20',
                                value: userUsdtBep20
                            }
                        };

                        trigger.addEventListener('click', () => {
                            popover.classList.toggle('active');
                        });

                        Object.keys(options).forEach(key => {
                            const element = document.getElementById(key);
                            element.addEventListener('click', () => {
                                const opt = options[key];

                                // Update selected text and icon
                                selectedText.textContent = opt.name;
                                selectedIcon.src = opt.img;

                                // Highlight selected chain
                                document.querySelectorAll('.van-cell').forEach(el => el.classList.remove('active'));
                                element.classList.add('active');

                                // Autofill address input
                                document.getElementById('usdtTrc20').value = "";
                                document.getElementById('usdtBep20').value = "";
                                document.getElementById(opt.inputId).value = opt.value;

                                // Close the popover
                                popover.classList.remove('active');
                            });
                        });

                        // Close when clicking outside
                        document.addEventListener('click', (e) => {
                            if (!popover.contains(e.target) && !trigger.contains(e.target)) {
                                popover.classList.remove('active');
                            }
                        });
                    </script>




</body>

</html>
