<html style="font-size: 50px;" translate="no">

<head>
    <meta charset="utf-8">
    <title>Income</title>
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="expires" content="0">
    <meta name="viewport"
        content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,viewport-fit=cover">
    <link rel="icon" href="/logo.png">
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
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-0594a2c1.01b2fad7.css">
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
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-40a3a1c6.8126c634.css">
</head>
<style>
    .card2 {
        /* background-color: #e4ad53; */
        padding: 20px;
        border-radius: 12px;
        width: 100%;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .header {
        display: flex;
        justify-content: space-between;
        font-weight: bold;
        margin-bottom: 10px;
        color: #000;
    }

    .progress-bar {
        height: 10px;
        background-color: #3ca6fd;
        border-radius: 10px;
        overflow: hidden;
        margin-bottom: 20px;
    }

    .progress-fill {
        width: 50%;
        /* 3 out of 6 = 50% */
        height: 100%;
        /* background: linear-gradient(90deg, var(--token-c56d9be0-ff1a-4142-9896-10e19a52f142, rgb(255, 91, 255)) 0%, var(--token-66f80229-774a-4cca-92cb-b110eff3766a, rgb(4, 182, 216)) 48.91786%, var(--token-f05fe42a-0284-4847-be0d-a2808346fd91, rgb(11, 229, 116)) 100%); */
        border-radius: 10px 0 0 10px;
    }

    .button {
        background-color: #96c907;
        color: black;
        border: none;
        padding: 10px;
        width: 100%;
        border-radius: 10px;
        font-weight: bold;
        cursor: pointer;
        margin-top: 10px;
    }

    .button:hover {
        background-color: #96c907;
    }



    .card2 {
        background: linear-gradient(72deg, #042d50, #070808);
        border: 1px solid #444;
    }

    .header {
        color: #fff;
    }

    .progress-bar {
        background-color: #444;
    }

    .progress-fill {
        background-color: #37a1f8;
    }

    .button {
        background-color: #96c907;
        color: #000;
    }

    .button:hover {
        background-color: #96c907;
    }


    .order-box {
        background-color: #e4ad53;
        border-radius: 12px;
        padding: 20px;
        width: 100%;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .order-box h3 {
        margin-top: 0;
        text-align: center;
        font-size: 16px;
        font-weight: bold;
        color: #000;
        margin-bottom: 15px;
    }

    .order-box p {
        font-size: 14px;
        color: #000;
        margin: 0 0 10px 0;
        line-height: 1.5;
    }


    .order-box {
        background-color: #2b2b2b;
        border: 1px solid #444;
    }

    .order-box h3,
    .order-box p {
        color: #fff;
    }



    /* From Uiverse.io by ZacharyCrespin */
    @keyframes square-animation {
        0% {
            left: 0;
            top: 0;
        }

        10.5% {
            left: 0;
            top: 0;
        }

        12.5% {
            left: 32px;
            top: 0;
        }

        23% {
            left: 32px;
            top: 0;
        }

        25% {
            left: 64px;
            top: 0;
        }

        35.5% {
            left: 64px;
            top: 0;
        }

        37.5% {
            left: 64px;
            top: 32px;
        }

        48% {
            left: 64px;
            top: 32px;
        }

        50% {
            left: 32px;
            top: 32px;
        }

        60.5% {
            left: 32px;
            top: 32px;
        }

        62.5% {
            left: 32px;
            top: 64px;
        }

        73% {
            left: 32px;
            top: 64px;
        }

        75% {
            left: 0;
            top: 64px;
        }

        85.5% {
            left: 0;
            top: 64px;
        }

        87.5% {
            left: 0;
            top: 32px;
        }

        98% {
            left: 0;
            top: 32px;
        }

        100% {
            left: 0;
            top: 0;
        }
    }

    .loader {
        position: relative;
        width: 96px;
        height: 96px;
        transform: rotate(45deg);
    }

    .loader-square {
        position: absolute;
        top: 0;
        left: 0;
        width: 28px;
        height: 28px;
        margin: 2px;
        border-radius: 0px;
        background: #1774c0;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        animation: square-animation 10s ease-in-out infinite both;
    }

    .loader-square:nth-of-type(0) {
        animation-delay: 0s;
    }

    .loader-square:nth-of-type(1) {
        animation-delay: -1.4285714286s;
    }

    .loader-square:nth-of-type(2) {
        animation-delay: -2.8571428571s;
    }

    .loader-square:nth-of-type(3) {
        animation-delay: -4.2857142857s;
    }

    .loader-square:nth-of-type(4) {
        animation-delay: -5.7142857143s;
    }

    .loader-square:nth-of-type(5) {
        animation-delay: -7.1428571429s;
    }

    .loader-square:nth-of-type(6) {
        animation-delay: -8.5714285714s;
    }

    .loader-square:nth-of-type(7) {
        animation-delay: -10s;
    }

    .global-loading.default[data-v-a7d12cfc] {
        /* width: 1.2rem; */
        /* height: 1.2rem; */
        top: 48%;
        left: 47%;
        transform: translate(-50%, -50%);
    }

    .modal {
        background: linear-gradient(72deg, #042d50, #070808);
        border-radius: 12px;
        padding: 24px;
        width: 100%;
        max-width: 400px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        position: relative;
    }

    .modal h2 {
        margin-top: 0;
        font-size: 20px;
    }

    .modal p {
        margin: 8px 0;
        font-size: 14px;
    }

    .modal img {
        height: 50px;
        width: 50px;
        margin-right: 10px;
        vertical-align: middle;
        border-radius: 8px;
    }

    .payment-info {
        display: flex;
        align-items: center;
        margin: 12px 0;
    }

    .commission {
        font-weight: bold;
        margin-top: 10px;
    }

    .commission span {
        color: red;
        float: right;
    }

    .modal-footer {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .modal-footer button {
        flex: 1;
        margin: 0 5px;
        padding: 10px 15px;
        border: none;
        border-radius: 8px;
        font-weight: bold;
        cursor: pointer;
        background: linear-gradient(to bottom right, #e48f53, #e4ad53);
        color: black;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .modal-footer button:hover {
        background: linear-gradient(to bottom right, #d5773f, #db9947);
    }

    .close-btn {
        position: absolute;
        top: 12px;
        right: 16px;
        font-size: 20px;
        cursor: pointer;
    }

    /* === DARK MODE === */
    @media (prefers-color-scheme: dark) {


        .modal {
            background: linear-gradient(72deg, #042d50, #070808);
            color: white;
            border: 1px solid #444;
        }

        .modal-footer button {
            background: linear-gradient(to bottom right, #ff7f50, #ffaa33);
            color: black;
        }

        .modal-footer button:hover {
            background: linear-gradient(to bottom right, #e67340, #ff9933);
        }

        .commission span {
            color: #ff6b6b;
        }

        .close-btn {
            color: white;
        }
    }

    .button {
        --black-700: hsla(0 0% 12% / 1);
        /* --border_radius: 9999px; */
        --transtion: 0.3s ease-in-out;
        --offset: 2px;
        cursor: pointer;
        position: relative;
        display: flex;
        align-items: center;
        gap: 0px;
        transform-origin: center;
        padding: 15px;
        background-color: transparent;
        border: none;
        border-radius: var(--border_radius);
        transform: scale(calc(1 + (var(--active, 0) * 0.1)));
        transition: transform var(--transtion);
    }

    .button::before {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

        width: 100%;
        height: 100%;
        background-color: var(--black-700);

        border-radius: var(--border_radius);
        box-shadow: inset 0 0.5px hsl(0, 0%, 100%), inset 0 -1px 2px 0 hsl(0, 0%, 0%),
            0px 4px 10px -4px hsla(0 0% 0% / calc(1 - var(--active, 0))),
            0 0 0 calc(var(--active, 0) * 0.375rem) hsl(260 97% 50% / 0.75);

        transition: all var(--transtion);
        z-index: 0;
    }

    .button::after {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

        width: 100%;
        height: 100%;
        background-color: hsla(260 97% 61% / 0.75);
        background-image: radial-gradient(at 51% 89%,
                hsla(266, 45%, 74%, 1) 0px,
                transparent 50%),
            radial-gradient(at 100% 100%, hsla(266, 36%, 60%, 1) 0px, transparent 50%),
            radial-gradient(at 22% 91%, hsla(266, 36%, 60%, 1) 0px, transparent 50%);
        background-position: top;

        opacity: var(--active, 0);
        border-radius: var(--border_radius);
        transition: opacity var(--transtion);
        z-index: 2;
    }

    /* .button:is(:hover, :focus-visible) {
  --active: 1;
} */
    .button:active {
        transform: scale(1);
    }

    .button .dots_border {
        --size_border: calc(100% + 2px);

        overflow: hidden;

        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

        width: var(--size_border);
        height: var(--size_border);
        background-color: transparent;

        border-radius: var(--border_radius);
        z-index: -10;
    }

    .button .dots_border::before {
        content: "";
        position: absolute;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -50%);
        transform-origin: left;
        transform: rotate(0deg);

        width: 100%;
        height: 2rem;
        background-color: white;

        mask: linear-gradient(transparent 0%, white 120%);
        animation: rotate 2s linear infinite;
    }

    @keyframes rotate {
        to {
            transform: rotate(360deg);
        }
    }

    .button .sparkle {
        position: relative;
        z-index: 10;
        margin: -8px auto;
        width: 0.75rem;
    }

    .button .sparkle .path {
        fill: currentColor;
        stroke: currentColor;

        transform-origin: center;

        color: hsl(0, 0%, 100%);
    }

    .button:is(:hover, :focus) .sparkle .path {
        animation: path 1.5s linear 0.5s infinite;
    }

    .button .sparkle .path:nth-child(1) {
        --scale_path_1: 1.2;
    }

    .button .sparkle .path:nth-child(2) {
        --scale_path_2: 1.2;
    }

    .button .sparkle .path:nth-child(3) {
        --scale_path_3: 1.2;
    }

    @keyframes path {

        0%,
        34%,
        71%,
        100% {
            transform: scale(1);
        }

        17% {
            transform: scale(var(--scale_path_1, 1));
        }

        49% {
            transform: scale(var(--scale_path_2, 1));
        }

        83% {
            transform: scale(var(--scale_path_3, 1));
        }
    }

    .button .text_button {
        position: relative;
        z-index: 10;
        background-image: linear-gradient(90deg, hsla(0 0% 100% / 1) 0%, hsla(0 0% 100% / var(--active, 0)) 120%);
        background-clip: text;
        font-size: 20px;
        color: transparent;
        margin: 0px auto;
    }

    .info-com li[data-v-73226123]:nth-child(-n+3) {

        border-image: linear-gradient(90deg, var(--token-f05fe42a-0284-4847-be0d-a2808346fd91, rgb(11, 229, 116)) 0%, var(--token-66f80229-774a-4cca-92cb-b110eff3766a, rgb(4, 182, 216)) 48.09%, var(--token-c56d9be0-ff1a-4142-9896-10e19a52f142, rgb(255, 91, 255)) 100%);
        border-image-slice: 1;
    }

    [data-v-6e348d44] .van-popup {
        width: 94% !important;
        max-width: 8rem;
        background-color: transparent;
    }

    .bg[data-v-6e348d44]::before {
        position: absolute;
        display: block;
        content: "";
        top: -.9rem;
        left: 0;
        width: 100%;
        height: 3.2rem;
        background: linear-gradient(72deg, #042d50, #070808);
        background-size: auto;
        background-size: 100% 100%;
        border-radius: 0 0 .48rem .48rem;
    }
    .page .headers.on[data-v-decd48ac] {
    background: linear-gradient(72deg, #042d50, #070808) !important;
}.page .headers[data-v-decd48ac] {

    height: 1rem;
 
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
                    <div data-v-decd48ac="" data-v-6e348d44="" class="page">
                        <div data-v-6e348d44="" data-v-decd48ac="" class="bg bg0"></div>
                        <div data-v-decd48ac="" class="headers on">
                            <div data-v-29c52665="" data-v-6e348d44="" class="head head0" data-v-decd48ac="">
                                <div data-v-29c52665="" class="container flex">
                                    <!---->
                                    <div data-v-29c52665="" class="myName">
                                        <div data-v-29c52665=""><img data-v-29c52665=""
                                                src="{{ asset('') }}static/img/logo-2.png" alt=""></div>
                                    </div>
                                    <div data-v-29c52665="" class="name tac"></div>
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
                            <div data-v-6e348d44="" data-v-decd48ac="" class="logo"><img data-v-6e348d44=""
                                    data-v-decd48ac="" src="{{ asset('static/img/logo.png') }}" alt="">
                            </div>
                        </div>
                        <div data-v-decd48ac="" id="scroll" class="content-container"
                            style="padding-top: 44px; padding-bottom: 60px;">
                            <div data-v-decd48ac="" id="content" class="content-scroll">
                                <div data-v-6e348d44="" data-v-decd48ac="" class="container">
                                    <div data-v-6e348d44="" data-v-decd48ac="" class="card">
                                        <div data-v-6e348d44="" data-v-decd48ac="" class="income income0">
                                            <div data-v-6e348d44="" data-v-decd48ac="" class="name">Cumulative
                                                total income</div>
                                            <div data-v-6e348d44="" data-v-decd48ac="" class="am"> {{number_format(Auth::user()->users_incomes(),2)}} USDT </div>
                                        </div>
                                        <ul data-v-6e348d44="" data-v-decd48ac="" class="tab">
                                            <li data-v-6e348d44="" data-v-decd48ac="">
                                                <div data-v-6e348d44="" data-v-decd48ac="" class="flex">
                                                    <div data-v-6e348d44="" data-v-decd48ac="" class="n flex1">
                                                        Personal income</div>
                                                    <div data-v-6e348d44="" data-v-decd48ac="" class="s">{{number_format(Auth::user()->roi_bonus->sum('comm'),2)}} <span
                                                            data-v-6e348d44="" data-v-decd48ac="">USDT</span></div>
                                                    <img data-v-6e348d44="" data-v-decd48ac=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAIxSURBVHgB7ZnNccIwEIWXnwJSAiVACekgqQA4cgBCBSEVYB84QyqADkgHoYO4hOTOT94m9kwmIyvMSrs6hG/G47Glg55290mWia6kpUEBLBaLLm4dXPvZbFZQApokJMuyVavVesW1wfWW5/kjJUAkADM/aDabg5/vGo3GPIUIkQDMeN/1vhTRJ0NEAs7n80ddG0RkZW2YIBJwOp0yT/MN0msDER0yQCQAjvOCKDzVtSMKnVLEDSkjdqHpdDrHbVvXDhFd1MqClBELYI7H4xC3wtNloO1MQQsZw7mOmd7R94LmBOk2QMSeSYFgAQy7Di9qni7viNYtamdPkQlKoYpyYDNPFzVniiKAmUwmWQpniiaASeFMUQUw1s4UpYh/Y+lMKgIYK2eKnkIVVs6kJoCxcCZVAYy2M6kLYC5xJv7KIwEmAlAPXwVLHhFIpTsSYCKgAvVQ24ZUEtWBiQAuUszwjovW021NAkwEoEhXvsEjMjkca00C1BayCt428GlFXTva9uPxuEdCVCOA1HnwDR4Uh8PhngJIvZXohR5JqkSAtwe8wvr6IDLDGOep0QVc4ji8vUDebykCbYoMOw75t9F5ub2IQtQa0HYcF9FSyMJxXFgeq/Q0foIER8DScVwECbB2HBdBLmTtOC7ENZDCcVyI/5GlcBwXIgF/fD1VxyUFGRB9K6HpOC6kApyHUdqO4yKkiDPM9rR65sFrO46LoJV4uVx28cey026396PRqKAr/5BP0/ESFvr/rm0AAAAASUVORK5CYII="
                                                        alt="">
                                                </div>
                                            </li>
                                            <li data-v-6e348d44="" data-v-decd48ac="">
                                                <div data-v-6e348d44="" data-v-decd48ac="" class="flex">
                                                    <div data-v-6e348d44="" data-v-decd48ac="" class="n flex1">Todays
                                                        Benefits</div>
                                                    <div data-v-6e348d44="" data-v-decd48ac="" class="s">{{number_format(Auth::user()->todays_bonus->sum('comm'),2)}} <span
                                                            data-v-6e348d44="" data-v-decd48ac="">USDT</span></div>
                                                    <img data-v-6e348d44="" data-v-decd48ac=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAIxSURBVHgB7ZnNccIwEIWXnwJSAiVACekgqQA4cgBCBSEVYB84QyqADkgHoYO4hOTOT94m9kwmIyvMSrs6hG/G47Glg55290mWia6kpUEBLBaLLm4dXPvZbFZQApokJMuyVavVesW1wfWW5/kjJUAkADM/aDabg5/vGo3GPIUIkQDMeN/1vhTRJ0NEAs7n80ddG0RkZW2YIBJwOp0yT/MN0msDER0yQCQAjvOCKDzVtSMKnVLEDSkjdqHpdDrHbVvXDhFd1MqClBELYI7H4xC3wtNloO1MQQsZw7mOmd7R94LmBOk2QMSeSYFgAQy7Di9qni7viNYtamdPkQlKoYpyYDNPFzVniiKAmUwmWQpniiaASeFMUQUw1s4UpYh/Y+lMKgIYK2eKnkIVVs6kJoCxcCZVAYy2M6kLYC5xJv7KIwEmAlAPXwVLHhFIpTsSYCKgAvVQ24ZUEtWBiQAuUszwjovW021NAkwEoEhXvsEjMjkca00C1BayCt428GlFXTva9uPxuEdCVCOA1HnwDR4Uh8PhngJIvZXohR5JqkSAtwe8wvr6IDLDGOep0QVc4ji8vUDebykCbYoMOw75t9F5ub2IQtQa0HYcF9FSyMJxXFgeq/Q0foIER8DScVwECbB2HBdBLmTtOC7ENZDCcVyI/5GlcBwXIgF/fD1VxyUFGRB9K6HpOC6kApyHUdqO4yKkiDPM9rR65sFrO46LoJV4uVx28cey026396PRqKAr/5BP0/ESFvr/rm0AAAAASUVORK5CYII="
                                                        alt="">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div data-v-6e348d44="" data-v-decd48ac="" class="earnings_box">
                                        <div data-v-6e348d44="" data-v-decd48ac="" class="earnings_list">
                                            <div data-v-6e348d44="" data-v-decd48ac="" class="earnings">
                                                <div data-v-6e348d44="" data-v-decd48ac="" class="info_box"><img
                                                        data-v-6e348d44="" data-v-decd48ac=""
                                                        src="{{ asset('') }}static/img/td-0.e57690a8.png"
                                                        alt="">
                                                    <div data-v-6e348d44="" data-v-decd48ac="" class="info">
                                                        <div data-v-6e348d44="" data-v-decd48ac="" class="title">
                                                            Contract income</div>
                                                        <div data-v-6e348d44="" data-v-decd48ac="" class="value">$ {{number_format(Auth::user()->roi_bonus->sum('comm'),2)}} </div>
                                                    </div><i data-v-6e348d44="" data-v-decd48ac=""
                                                        class="icon_right van-icon van-icon-arrow">
                                                        <!---->
                                                    </i>
                                                </div>
                                                {{--  --}}
                                            </div>
                                            <div data-v-6e348d44="" data-v-decd48ac="" class="earnings">
                                                <div data-v-6e348d44="" data-v-decd48ac="" class="info_box"><img
                                                        data-v-6e348d44="" data-v-decd48ac=""
                                                        src="{{ asset('') }}static/img/jk-0.e73a5edd.png"
                                                        alt="">
                                                    <div data-v-6e348d44="" data-v-decd48ac="" class="info">
                                                        <div data-v-6e348d44="" data-v-decd48ac="" class="title">
                                                            Team Benefits</div>
                                                        <div data-v-6e348d44="" data-v-decd48ac="" class="value"> $ {{number_format(Auth::user()->level_bonus->sum('comm'),2)}}  </div>
                                                    </div><i data-v-6e348d44="" data-v-decd48ac=""
                                                        class="icon_right van-icon van-icon-arrow">
                                                        <!---->
                                                    </i>
                                                </div>
                                                {{-- <div data-v-6e348d44="" data-v-decd48ac="" class="receive_btn">
                                                    <div data-v-6e348d44="" data-v-decd48ac=""
                                                        class="btn_e btn_e_bg">
                                                        Received </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                {{-- loader --}}

                                <div id="loader-overlay" class="van-overlay" style="z-index: 2001; display:none">
                                </div>
                                <div id="loader" data-v-a7d12cfc="" class="global-loading default"
                                    style="display: none;">
                                    <div data-v-a7d12cfc="" class="global-spinner">
                                        <div class="loader">
                                            <div class="loader-square"></div>
                                            <div class="loader-square"></div>
                                            <div class="loader-square"></div>
                                            <div class="loader-square"></div>
                                            <div class="loader-square"></div>
                                            <div class="loader-square"></div>
                                            <div class="loader-square"></div>
                                        </div>


                                    </div>
                                </div>





                                {{-- end loader --}}

                                {{-- model popup --}}
                                <div id="modal-overlay" class="van-overlay" style="z-index: 2001; display:none;">
                                </div>
                                <div id="modal" data-v-a7d12cfc="" class="van-popup van-popup--round"
                                    style="display: none; z-index: 2003;    width: 94%;    top: 4rem;    margin: 12px;">

                                    <div class="modal">
                                        <div class="close-btn" onclick="hideModal()">&times;</div>
                                        <h2>Submit order</h2>
                                        <p><strong>Submit order time:</strong> <span id="modalTime">--</span></p>
                                        <p><strong>Order Number:</strong> <span id="modalOrderNo">--</span></p>

                                        <div class="payment-info">
                                            <img id="modalCompanyLogo" src="" alt="Company Logo" />
                                            <span id="modalCompanyName">--</span>
                                        </div>

                                        <div class="commission">
                                            Commission:
                                            <span id="modalROI">--</span>
                                        </div>
                                    </div>


                                </div>


                                {{-- end model popup --}}


                                <?php
                                $quantifiableCount = 1;
                                $completedtask = $todaysRoi;
                                $process = ($completedtask / $quantifiableCount) * 100;
                                ?>

                                <div data-v-6e348d44="" data-v-decd48ac="" class="container">
                                    <div class="card2">
                                        <div class="header">
                                            <span>Starting</span>
                                            <span id="progressText">{{ $todaysRoi }}/1</span>
                                        </div>

                                        <div class="progress-bar">
                                            <div class="progress-fill" id="progressFill"
                                                style="width: {{ $process }}%"></div>
                                        </div>



                                        @php
                                            $hourdiff = round(
                                                (strtotime(date('Y-m-d H:i:s')) - strtotime(Auth::user()->last_trade)) /
                                                    3600,
                                            );
                                        @endphp

                                        @if ($hourdiff >= 24)
                                            <button class="button" id="submitOrderBtn" onclick="submitOrder()">
                                                <div class="dots_border"></div>

                                                <p class="text_button"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 24 24" class="sparkle">
                                                        <path class="path" stroke-linejoin="round"
                                                            stroke-linecap="round" stroke="black" fill="black"
                                                            d="M14.187 8.096L15 5.25L15.813 8.096C16.0231 8.83114 16.4171 9.50062 16.9577 10.0413C17.4984 10.5819 18.1679 10.9759 18.903 11.186L21.75 12L18.904 12.813C18.1689 13.0231 17.4994 13.4171 16.9587 13.9577C16.4181 14.4984 16.0241 15.1679 15.814 15.903L15 18.75L14.187 15.904C13.9769 15.1689 13.5829 14.4994 13.0423 13.9587C12.5016 13.4181 11.8321 13.0241 11.097 12.814L8.25 12L11.096 11.187C11.8311 10.9769 12.5006 10.5829 13.0413 10.0423C13.5819 9.50162 13.9759 8.83214 14.186 8.097L14.187 8.096Z">
                                                        </path>
                                                        <path class="path" stroke-linejoin="round"
                                                            stroke-linecap="round" stroke="black" fill="black"
                                                            d="M6 14.25L5.741 15.285C5.59267 15.8785 5.28579 16.4206 4.85319 16.8532C4.42059 17.2858 3.87853 17.5927 3.285 17.741L2.25 18L3.285 18.259C3.87853 18.4073 4.42059 18.7142 4.85319 19.1468C5.28579 19.5794 5.59267 20.1215 5.741 20.715L6 21.75L6.259 20.715C6.40725 20.1216 6.71398 19.5796 7.14639 19.147C7.5788 18.7144 8.12065 18.4075 8.714 18.259L9.75 18L8.714 17.741C8.12065 17.5925 7.5788 17.2856 7.14639 16.853C6.71398 16.4204 6.40725 15.8784 6.259 15.285L6 14.25Z">
                                                        </path>
                                                        <path class="path" stroke-linejoin="round"
                                                            stroke-linecap="round" stroke="black" fill="black"
                                                            d="M6.5 4L6.303 4.5915C6.24777 4.75718 6.15472 4.90774 6.03123 5.03123C5.90774 5.15472 5.75718 5.24777 5.5915 5.303L5 5.5L5.5915 5.697C5.75718 5.75223 5.90774 5.84528 6.03123 5.96877C6.15472 6.09226 6.24777 6.24282 6.303 6.4085L6.5 7L6.697 6.4085C6.75223 6.24282 6.84528 6.09226 6.96877 5.96877C7.09226 5.84528 7.24282 5.75223 7.4085 5.697L8 5.5L7.4085 5.303C7.24282 5.24777 7.09226 5.15472 6.96877 5.03123C6.84528 4.90774 6.75223 4.75718 6.697 4.5915L6.5 4Z">
                                                        </path>

                                                    </svg> GET TO WORK</p>

                                            </button>
                                        @else
                                            <button class="button" style="cursor: not-allowed;opacity: 0.7;">
                                                <div class="dots_border"></div>

                                                <p class="text_button"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 24 24" class="sparkle">
                                                        <path class="path" stroke-linejoin="round"
                                                            stroke-linecap="round" stroke="black" fill="black"
                                                            d="M14.187 8.096L15 5.25L15.813 8.096C16.0231 8.83114 16.4171 9.50062 16.9577 10.0413C17.4984 10.5819 18.1679 10.9759 18.903 11.186L21.75 12L18.904 12.813C18.1689 13.0231 17.4994 13.4171 16.9587 13.9577C16.4181 14.4984 16.0241 15.1679 15.814 15.903L15 18.75L14.187 15.904C13.9769 15.1689 13.5829 14.4994 13.0423 13.9587C12.5016 13.4181 11.8321 13.0241 11.097 12.814L8.25 12L11.096 11.187C11.8311 10.9769 12.5006 10.5829 13.0413 10.0423C13.5819 9.50162 13.9759 8.83214 14.186 8.097L14.187 8.096Z">
                                                        </path>
                                                        <path class="path" stroke-linejoin="round"
                                                            stroke-linecap="round" stroke="black" fill="black"
                                                            d="M6 14.25L5.741 15.285C5.59267 15.8785 5.28579 16.4206 4.85319 16.8532C4.42059 17.2858 3.87853 17.5927 3.285 17.741L2.25 18L3.285 18.259C3.87853 18.4073 4.42059 18.7142 4.85319 19.1468C5.28579 19.5794 5.59267 20.1215 5.741 20.715L6 21.75L6.259 20.715C6.40725 20.1216 6.71398 19.5796 7.14639 19.147C7.5788 18.7144 8.12065 18.4075 8.714 18.259L9.75 18L8.714 17.741C8.12065 17.5925 7.5788 17.2856 7.14639 16.853C6.71398 16.4204 6.40725 15.8784 6.259 15.285L6 14.25Z">
                                                        </path>
                                                        <path class="path" stroke-linejoin="round"
                                                            stroke-linecap="round" stroke="black" fill="black"
                                                            d="M6.5 4L6.303 4.5915C6.24777 4.75718 6.15472 4.90774 6.03123 5.03123C5.90774 5.15472 5.75718 5.24777 5.5915 5.303L5 5.5L5.5915 5.697C5.75718 5.75223 5.90774 5.84528 6.03123 5.96877C6.15472 6.09226 6.24777 6.24282 6.303 6.4085L6.5 7L6.697 6.4085C6.75223 6.24282 6.84528 6.09226 6.96877 5.96877C7.09226 5.84528 7.24282 5.75223 7.4085 5.697L8 5.5L7.4085 5.303C7.24282 5.24777 7.09226 5.15472 6.96877 5.03123C6.84528 4.90774 6.75223 4.75718 6.697 4.5915L6.5 4Z">
                                                        </path>

                                                    </svg> GET TO WORK </p>

                                            </button>
                                        @endif




                                    </div>
                                </div>

                                <div data-v-6e348d44="" data-v-decd48ac="" class="main">





                                    <div data-v-6e348d44="" data-v-decd48ac=""
                                        class="list-box today_earnings container">
                                        <div data-v-6e348d44="" data-v-decd48ac="" class="name">
                                            <div data-v-6e348d44="" data-v-decd48ac="" class="flex1 ti-be ti0"><span
                                                    data-v-6e348d44="" data-v-decd48ac="">Contract Record</span></div>
                                            <div data-v-6e348d44="" data-v-decd48ac="" class="sift"><span
                                                    data-v-6e348d44="" data-v-decd48ac="">view all</span></div>
                                        </div>
                                        <div data-v-6e348d44="" data-v-decd48ac="" class="empty db"
                                            style="display: none;">
                                            <div data-v-6e348d44="" data-v-decd48ac="" class="flexs">
                                                <div data-v-5f0c154b="" data-v-6e348d44=""
                                                    class="empty db custom-image" data-v-decd48ac="">
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
                                        </style>


                                        @if (is_array($level_income) || $level_income)
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
                                            @endforeach
                                        @else
                                        @endif


                                    </div>
                                </div>
                            </div>

                        </div>
                        <!---->
                        <!---->
                        <!---->
                    </div>
                </div>
                <script>
                    async function submitOrder() {
                        // Show loader
                        document.getElementById('loader-overlay').style.display = 'block';
                        document.getElementById('loader').style.display = 'block';

                        // Wait 10 seconds
                        setTimeout(async () => {
                            try {
                                // Hide loader
                                document.getElementById('loader-overlay').style.display = 'none';
                                document.getElementById('loader').style.display = 'none';

                                // Make API call (example using Fetch)
                                const response = await fetch('/user/tradeOn', {
                                    method: 'GET',
                                    headers: {
                                        'Content-Type': 'application/json',
                                    },
                                });

                                const result = await response.json();
                                console.log("API Result:", result);
                                // Show modal popup
                                if (result.status) {
                                    const quantifiableCount = 1;
                                    const tradesCompleted = result.data.totalTask;
                                    // Populate modal with data
                                    document.getElementById('modalTime').innerText = result.data.dateTime;
                                    document.getElementById('modalOrderNo').innerText = result.data.orderNo;
                                    document.getElementById('modalCompanyName').innerText = result.data.company;
                                    document.getElementById('modalCompanyLogo').src = result.data.logo;
                                    document.getElementById('modalROI').innerText = result.data.roi_amount;
                                    const progress = (tradesCompleted / quantifiableCount) * 100;
                                    document.getElementById('progressFill').style.width = `${progress}%`;
                                    document.getElementById('progressText').innerText = `${tradesCompleted}/6`;
                                    // Show modal

                                    if (tradesCompleted >= 1) {
                                        const submitBtn = document.getElementById('submitOrderBtn');
                                        submitBtn.disabled = true;
                                        submitBtn.innerText = "ALL TASKS COMPLETED";
                                        submitBtn.style.backgroundColor = "#999";
                                        submitBtn.style.cursor = "not-allowed";

                                        // ✅ Reload page after 5 seconds
                                        setTimeout(() => {
                                            location.reload();
                                        }, 5000);

                                    }

                                    document.getElementById('modal-overlay').style.display = 'block';
                                    document.getElementById('modal').style.display = 'block';

                                } else {
                                    alert(result.message);

                                }


                            } catch (error) {
                                console.error("Error submitting order:", error);
                            }
                        }, 10000); // 10 seconds
                    }

                    function hideModal() {
                        document.getElementById('modal-overlay').style.display = 'none';
                        document.getElementById('modal').style.display = 'none';
                    }
                </script>


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
    </div>
    <!---->
    </div>

</body>

</html>
