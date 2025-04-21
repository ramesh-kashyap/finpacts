<html style="font-size: 50px;" translate="no">
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
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-0594a2c1.01b2fad7.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-5576a184.9f52f39a.css">
    <script charset="utf-8" src="{{asset('')}}js1744307594169/chunk-5576a184.c49d8c14.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-7cbde8e8.788c4ae8.css">
    <script charset="utf-8" src="{{asset('')}}js1744307594169/chunk-7cbde8e8.43936207.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-4f89519c.2a0f3cea.css">
    <script charset="utf-8" src="{{asset('')}}js1744307594169/chunk-4f89519c.5238fa59.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-693d0a34.f05eb557.css">
    <script charset="utf-8" src="{{asset('')}}js1744307594169/chunk-693d0a34.843d936b.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-40a3a1c6.8126c634.css">
</head>

<body class="mein_cn">
    <div class="page-loading-con" id="loaderInit" style="display: none;">
        <div class="page-loading">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
        </div>
    </div>
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
                                <div data-v-29c52665="" class="container flex"><!---->
                                    <div data-v-29c52665="" class="myName">
                                        <div data-v-29c52665=""><img data-v-29c52665=""
                                                src="{{asset('')}}static/img/0feefd89860da746f3a51ec0d8063854.png"
                                                alt=""></div>
                                    </div>
                                    <div data-v-29c52665="" class="name tac"></div>
                                    <div data-v-29c52665="" class="flex1"></div>
                                    <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                </div>
                            </div>
                            <div data-v-6e348d44="" data-v-decd48ac="" class="logo"><img data-v-6e348d44=""
                                    data-v-decd48ac=""
                                    src="data:image/png;base64,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"
                                    alt=""></div>
                        </div>
                        <div data-v-decd48ac="" id="scroll" class="content-container"
                            style="padding-top: 44px; padding-bottom: 60px;">
                            <div data-v-decd48ac="" id="content" class="content-scroll">
                                <div data-v-6e348d44="" data-v-decd48ac="" class="container">
                                    <div data-v-6e348d44="" data-v-decd48ac="" class="card">
                                        <div data-v-6e348d44="" data-v-decd48ac="" class="income income0">
                                            <div data-v-6e348d44="" data-v-decd48ac="" class="name">Cumulative
                                                total income</div>
                                            <div data-v-6e348d44="" data-v-decd48ac="" class="am"> 0 USDT </div>
                                        </div>
                                        <ul data-v-6e348d44="" data-v-decd48ac="" class="tab">
                                            <li data-v-6e348d44="" data-v-decd48ac="">
                                                <div data-v-6e348d44="" data-v-decd48ac="" class="flex">
                                                    <div data-v-6e348d44="" data-v-decd48ac="" class="n flex1">
                                                        Personal income</div>
                                                    <div data-v-6e348d44="" data-v-decd48ac="" class="s">0<span
                                                            data-v-6e348d44="" data-v-decd48ac="">USDT</span></div>
                                                    <img data-v-6e348d44="" data-v-decd48ac=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAIxSURBVHgB7ZnNccIwEIWXnwJSAiVACekgqQA4cgBCBSEVYB84QyqADkgHoYO4hOTOT94m9kwmIyvMSrs6hG/G47Glg55290mWia6kpUEBLBaLLm4dXPvZbFZQApokJMuyVavVesW1wfWW5/kjJUAkADM/aDabg5/vGo3GPIUIkQDMeN/1vhTRJ0NEAs7n80ddG0RkZW2YIBJwOp0yT/MN0msDER0yQCQAjvOCKDzVtSMKnVLEDSkjdqHpdDrHbVvXDhFd1MqClBELYI7H4xC3wtNloO1MQQsZw7mOmd7R94LmBOk2QMSeSYFgAQy7Di9qni7viNYtamdPkQlKoYpyYDNPFzVniiKAmUwmWQpniiaASeFMUQUw1s4UpYh/Y+lMKgIYK2eKnkIVVs6kJoCxcCZVAYy2M6kLYC5xJv7KIwEmAlAPXwVLHhFIpTsSYCKgAvVQ24ZUEtWBiQAuUszwjovW021NAkwEoEhXvsEjMjkca00C1BayCt428GlFXTva9uPxuEdCVCOA1HnwDR4Uh8PhngJIvZXohR5JqkSAtwe8wvr6IDLDGOep0QVc4ji8vUDebykCbYoMOw75t9F5ub2IQtQa0HYcF9FSyMJxXFgeq/Q0foIER8DScVwECbB2HBdBLmTtOC7ENZDCcVyI/5GlcBwXIgF/fD1VxyUFGRB9K6HpOC6kApyHUdqO4yKkiDPM9rR65sFrO46LoJV4uVx28cey026396PRqKAr/5BP0/ESFvr/rm0AAAAASUVORK5CYII="
                                                        alt="">
                        <div data-v-decd48ac="" id="scroll" class="content-container"
                            style="padding-top: 44px; padding-bottom: 60px;">
                            <div data-v-decd48ac="" id="content" class="content-scroll">
                                <div data-v-6e348d44="" data-v-decd48ac="" class="container">
                                    <div data-v-6e348d44="" data-v-decd48ac="" class="card">
                                        <div data-v-6e348d44="" data-v-decd48ac="" class="income income0">
                                            <div data-v-6e348d44="" data-v-decd48ac="" class="name">Cumulative
                                                total income</div>
                                            <div data-v-6e348d44="" data-v-decd48ac="" class="am"> 0 USDT </div>
                                        </div>
                                        <ul data-v-6e348d44="" data-v-decd48ac="" class="tab">
                                            <li data-v-6e348d44="" data-v-decd48ac="">
                                                <div data-v-6e348d44="" data-v-decd48ac="" class="flex">
                                                    <div data-v-6e348d44="" data-v-decd48ac="" class="n flex1">
                                                        Personal income</div>
                                                    <div data-v-6e348d44="" data-v-decd48ac="" class="s">0<span
                                                            data-v-6e348d44="" data-v-decd48ac="">USDT</span></div>
                                                    <img data-v-6e348d44="" data-v-decd48ac=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAIxSURBVHgB7ZnNccIwEIWXnwJSAiVACekgqQA4cgBCBSEVYB84QyqADkgHoYO4hOTOT94m9kwmIyvMSrs6hG/G47Glg55290mWia6kpUEBLBaLLm4dXPvZbFZQApokJMuyVavVesW1wfWW5/kjJUAkADM/aDabg5/vGo3GPIUIkQDMeN/1vhTRJ0NEAs7n80ddG0RkZW2YIBJwOp0yT/MN0msDER0yQCQAjvOCKDzVtSMKnVLEDSkjdqHpdDrHbVvXDhFd1MqClBELYI7H4xC3wtNloO1MQQsZw7mOmd7R94LmBOk2QMSeSYFgAQy7Di9qni7viNYtamdPkQlKoYpyYDNPFzVniiKAmUwmWQpniiaASeFMUQUw1s4UpYh/Y+lMKgIYK2eKnkIVVs6kJoCxcCZVAYy2M6kLYC5xJv7KIwEmAlAPXwVLHhFIpTsSYCKgAvVQ24ZUEtWBiQAuUszwjovW021NAkwEoEhXvsEjMjkca00C1BayCt428GlFXTva9uPxuEdCVCOA1HnwDR4Uh8PhngJIvZXohR5JqkSAtwe8wvr6IDLDGOep0QVc4ji8vUDebykCbYoMOw75t9F5ub2IQtQa0HYcF9FSyMJxXFgeq/Q0foIER8DScVwECbB2HBdBLmTtOC7ENZDCcVyI/5GlcBwXIgF/fD1VxyUFGRB9K6HpOC6kApyHUdqO4yKkiDPM9rR65sFrO46LoJV4uVx28cey026396PRqKAr/5BP0/ESFvr/rm0AAAAASUVORK5CYII="
                                                        alt="">
                                                </div>
                                            </li>
                                            <li data-v-6e348d44="" data-v-decd48ac="">
                                                <div data-v-6e348d44="" data-v-decd48ac="" class="flex">
                                                    <div data-v-6e348d44="" data-v-decd48ac="" class="n flex1">Team
                                                        Benefits</div>
                                                    <div data-v-6e348d44="" data-v-decd48ac="" class="s">0<span
                                                            data-v-6e348d44="" data-v-decd48ac="">USDT</span></div>
                                                    <img data-v-6e348d44="" data-v-decd48ac=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAIxSURBVHgB7ZnNccIwEIWXnwJSAiVACekgqQA4cgBCBSEVYB84QyqADkgHoYO4hOTOT94m9kwmIyvMSrs6hG/G47Glg55290mWia6kpUEBLBaLLm4dXPvZbFZQApokJMuyVavVesW1wfWW5/kjJUAkADM/aDabg5/vGo3GPIUIkQDMeN/1vhTRJ0NEAs7n80ddG0RkZW2YIBJwOp0yT/MN0msDER0yQCQAjvOCKDzVtSMKnVLEDSkjdqHpdDrHbVvXDhFd1MqClBELYI7H4xC3wtNloO1MQQsZw7mOmd7R94LmBOk2QMSeSYFgAQy7Di9qni7viNYtamdPkQlKoYpyYDNPFzVniiKAmUwmWQpniiaASeFMUQUw1s4UpYh/Y+lMKgIYK2eKnkIVVs6kJoCxcCZVAYy2M6kLYC5xJv7KIwEmAlAPXwVLHhFIpTsSYCKgAvVQ24ZUEtWBiQAuUszwjovW021NAkwEoEhXvsEjMjkca00C1BayCt428GlFXTva9uPxuEdCVCOA1HnwDR4Uh8PhngJIvZXohR5JqkSAtwe8wvr6IDLDGOep0QVc4ji8vUDebykCbYoMOw75t9F5ub2IQtQa0HYcF9FSyMJxXFgeq/Q0foIER8DScVwECbB2HBdBLmTtOC7ENZDCcVyI/5GlcBwXIgF/fD1VxyUFGRB9K6HpOC6kApyHUdqO4yKkiDPM9rR65sFrO46LoJV4uVx28cey026396PRqKAr/5BP0/ESFvr/rm0AAAAASUVORK5CYII="
                                                        alt="">
                                            </li>
                                            <li data-v-6e348d44="" data-v-decd48ac="">
                                                <div data-v-6e348d44="" data-v-decd48ac="" class="flex">
                                                    <div data-v-6e348d44="" data-v-decd48ac="" class="n flex1">Team
                                                        Benefits</div>
                                                    <div data-v-6e348d44="" data-v-decd48ac="" class="s">0<span
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
                                                        src="{{asset('')}}static/img/td-0.e57690a8.png" alt="">
                                                    <div data-v-6e348d44="" data-v-decd48ac="" class="info">
                                                        <div data-v-6e348d44="" data-v-decd48ac="" class="title">
                                                            Contract income</div>
                                                        <div data-v-6e348d44="" data-v-decd48ac="" class="value"> 0
                                                            items </div>
                                                    </div><i data-v-6e348d44="" data-v-decd48ac=""
                                                        class="icon_right van-icon van-icon-arrow"><!----></i>
                                                </div>
                                                <div data-v-6e348d44="" data-v-decd48ac="" class="receive_btn">
                                                    <div data-v-6e348d44="" data-v-decd48ac=""
                                                        class="btn_e btn_e_bg"> Received </div>
                                                </div>
                                            </div>
                                            <div data-v-6e348d44="" data-v-decd48ac="" class="earnings">
                                                <div data-v-6e348d44="" data-v-decd48ac="" class="info_box"><img
                                                        data-v-6e348d44="" data-v-decd48ac=""
                                                        src="{{asset('')}}static/img/jk-0.e73a5edd.png" alt="">
                                                    <div data-v-6e348d44="" data-v-decd48ac="" class="info">
                                                        <div data-v-6e348d44="" data-v-decd48ac="" class="title">
                                                            Team Benefits</div>
                                                        <div data-v-6e348d44="" data-v-decd48ac="" class="value"> 0
                                                            items </div>
                                                    </div><i data-v-6e348d44="" data-v-decd48ac=""
                                                        class="icon_right van-icon van-icon-arrow"><!----></i>
                                                </div>
                                                <div data-v-6e348d44="" data-v-decd48ac="" class="receive_btn">
                                                    <div data-v-6e348d44="" data-v-decd48ac=""
                                                        class="btn_e btn_e_bg"> Received </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-6e348d44="" data-v-decd48ac="" class="main">
                                    <div data-v-6e348d44="" data-v-decd48ac="" class="total-income container">
                                        <div data-v-6e348d44="" data-v-decd48ac="" class="name flex">
                                            <div data-v-6e348d44="" data-v-decd48ac="" class="flex1 ti-be ti0"><span
                                                    data-v-6e348d44="" data-v-decd48ac="">Total revenue</span></div>
                                            <div data-v-6e348d44="" data-v-decd48ac="" class="set"><span
                                                    data-v-6e348d44="" data-v-decd48ac="">Nearly seven days</span><img
                                                    data-v-6e348d44="" data-v-decd48ac=""
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAMCAYAAABiDJ37AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAADBSURBVHgBnc/dDYIwEAfwu5YBdANHcAQeeWQEHAAIE4gT8DUAjsEjI7iBk9B6l2hStaWFf3Lppb37JQWgNE0TU6WwM7SbUZ24R26klM/3270oissGC9q2HYUQGffLshwFnQfjPev7fgy0vjBOFEVnUVXVQ2t924r+YmzkeT7j56LruhoRr8aO8/s2rCzLmns0B0PQNewP9KE+zAq6UKUU+DAn6EDBh3EkODJN05wkCZkYh2KroA31YcEZhiGlikNmX7p6eni6eTdOAAAAAElFTkSuQmCC"
                                                    alt=""></div>
                                        </div>
                                        <div data-v-6e348d44="" data-v-decd48ac="" class="info">
                                            <div data-v-6e348d44="" data-v-decd48ac="" id="myChart"
                                                style="width: 100%; height: 5.6rem; user-select: none;"
                                                _echarts_instance_="ec_1745235972236">
                                                <div
                                                    style="position: relative; width: 399px; height: 280px; padding: 0px; margin: 0px; border-width: 0px;">
                                                    <canvas
                                                        style="position: absolute; left: 0px; top: 0px; width: 399px; height: 280px; user-select: none; padding: 0px; margin: 0px; border-width: 0px;"
                                                        data-zr-dom-id="zr_0" width="798" height="560"></canvas>
                                                </div>
                                            </div>
                                            <div data-v-6e348d44="" data-v-decd48ac="" class="img">
                                                <div data-v-5f0c154b="" data-v-6e348d44=""
                                                    class="empty db custom-image" data-v-decd48ac="">
                                                    <div data-v-5f0c154b="" class="flexs">
                                                        <div data-v-5f0c154b="" class="custom-image van-empty">
                                                            <div class="van-empty__image"><img
                                                                    src="{{asset('')}}static/img/none0.f307acfc.png"></div>
                                                            <p class="van-empty__description">No data yet</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-6e348d44="" data-v-decd48ac=""
                                        class="list-box today_earnings container">
                                        <div data-v-6e348d44="" data-v-decd48ac="" class="name">
                                            <div data-v-6e348d44="" data-v-decd48ac="" class="flex1 ti-be ti0"><span
                                                    data-v-6e348d44="" data-v-decd48ac="">Income Record</span></div>
                                            <div data-v-6e348d44="" data-v-decd48ac="" class="sift"><span
                                                    data-v-6e348d44="" data-v-decd48ac=""></span><img
                                                    data-v-6e348d44="" data-v-decd48ac=""
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAGCAYAAAD68A/GAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAABoSURBVHgBdU4xEgARDFxKLb/xG1paSl7oJ0qjdCeFYYZtkk022WWttZFSQq0VNyilkHMGF0IQeUFKianhk3jvaXD7Zq2lnoTzIsZIdReFEJYb3xfOuSU0xhyR2Pix25VS0HuH1vqI8QFftx3YJNdVOAAAAABJRU5ErkJggg=="
                                                    alt=""></div>
                                        </div>
                                        <div data-v-6e348d44="" data-v-decd48ac="" class="empty db" style="">
                                            <div data-v-6e348d44="" data-v-decd48ac="" class="flexs">
                                                <div data-v-5f0c154b="" data-v-6e348d44=""
                                                    class="empty db custom-image" data-v-decd48ac="">
                                                    <div data-v-5f0c154b="" class="flexs">
                                                        <div data-v-5f0c154b="" class="custom-image van-empty">
                                                            <div class="van-empty__image"><img
                                                                    src="{{asset('')}}static/img/none0.f307acfc.png"></div>
                                                            <p class="van-empty__description">No data yet</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!---->
                                    </div>
                                </div><!----><!----><!---->
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
