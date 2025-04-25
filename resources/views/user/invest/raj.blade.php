<html style="font-size: 50px;" translate="no">

<head>
    <meta charset="utf-8">
    <title>Recharge</title>
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
    <link href="/js1744307594169/app.46ba12d9.1744307594169.js" rel="preload" as="script">
    <link href="/js1744307594169/chunk-echarts.cc04be28.1744307594169.chunk.js" rel="preload" as="script">
    <link href="/js1744307594169/chunk-vant.81420f35.1744307594169.chunk.js" rel="preload" as="script">
    <link href="/js1744307594169/chunk-vendors.374f8b51.1744307594169.chunk.js" rel="preload" as="script">
    <link href="/js1744307594169/chunk-vue.a3b4853b.1744307594169.chunk.js" rel="preload" as="script">
    <link href="{{asset('')}}static/css/app.c3049ff2.css" rel="preload" as="style">
    <link href="{{asset('')}}static/css/chunk-vant.d14f5539.css" rel="preload" as="style">
    <link href="{{asset('')}}static/css/chunk-vendors.794edbf9.css" rel="preload" as="style">
    <link href="{{asset('')}}static/css/chunk-vant.d14f5539.css" rel="stylesheet">
    <link href="{{asset('')}}static/css/chunk-vendors.794edbf9.css" rel="stylesheet">
    <link href="{{asset('')}}static/css/app.c3049ff2.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-7a1721c4.c20230a9.css">
    <script charset="utf-8" src="/js1744307594169/chunk-7a1721c4.da18abce.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-5576a184.9f52f39a.css">
    <script charset="utf-8" src="/js1744307594169/chunk-5576a184.c49d8c14.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-7cbde8e8.788c4ae8.css">
    <script charset="utf-8" src="/js1744307594169/chunk-7cbde8e8.43936207.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-4f89519c.2a0f3cea.css">
    <script charset="utf-8" src="/js1744307594169/chunk-4f89519c.5238fa59.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-693d0a34.f05eb557.css">
    <script charset="utf-8" src="/js1744307594169/chunk-693d0a34.843d936b.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-914a5cc4.205f3334.css">
    <script charset="utf-8" src="/js1744307594169/chunk-914a5cc4.97cc76b3.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-bb9e60a4.6aed8065.css">
    <script charset="utf-8" src="/js1744307594169/chunk-bb9e60a4.386078a0.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-0594a2c1.01b2fad7.css">
    <script charset="utf-8" src="/js1744307594169/chunk-0594a2c1.63a49f03.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-0c334b0a.bd99dde0.css">
    <script charset="utf-8" src="/js1744307594169/chunk-0c334b0a.d7611963.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-3525d94c.2ba0cbc0.css">
    <script charset="utf-8" src="/js1744307594169/chunk-3525d94c.e40fcb0e.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-60f64a44.d2532916.css">
    <script charset="utf-8" src="/js1744307594169/chunk-60f64a44.cffad1f6.1744307594169.chunk.js"></script>
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
                    <div data-v-decd48ac="" data-v-2848a4de="" class="page">
                        <div data-v-2848a4de="" data-v-decd48ac="" class="bg"></div>
                        <div data-v-decd48ac="" class="headers on">
                            <div data-v-29c52665="" data-v-2848a4de="" class="head head0" data-v-decd48ac="">
                                <div data-v-29c52665="" class="container flex">

                                <a href="{{route('user.asset')}}">
                                    <div data-v-29c52665="" class="back"><img data-v-29c52665=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAE+SURBVHgB3diLDYIwEAbgwy7gCLoBbOIGtiM4gbqBE0DdSCcQJ5AN8GrAIPIobXNH+JOG0jbhCyVpC8DSIqVcmwKBsgKPKKX2URQ9sLwQdYQAicAxBoMX3Wwry3Krtc7BI05vqAtTpQDPTAb1YXDaFL4db9CkKRvCpGmqIUCsQRQYaxAVxgpEiRkFUWMGQRyYXhAXphPEifkDcWN+QHPAfEEDaxNVciynLMuu9Vp2At5ssFxMpQYF22B55LMwf0C4jzkAbwr8Vs+m8v2occcnsTHrGCzN3AJRRF25YeI4fiJq1xqzS5Ikx+47EEQ0b+aAEu0GbpToauREib4OLpQY6uRAibEB1KhREDXKCkSJsgZRoZzO9j3LTFGd7b1Or05ne3yoxoerVnOQHYPz75g2yqzWIc723ql+WG1gqXkDGBPa7OTyg7AAAAAASUVORK5CYII="
                                            alt=""></div></a>
                                    <!---->
                                    <div data-v-29c52665="" class="name tac">Recharge</div>
                                    <div data-v-29c52665="" class="flex1"></div>
                              
                                    <div data-v-29c52665="" class="Set"><img data-v-29c52665=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAYAAACOEfKtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAR3SURBVHgB7ZyJcdswEEV/MilAqSDbQVSC0oE6MEtwB0QHdiqg0oFTAdWBnQrIVCClAoUYUgkta3EueMh8MzuyIHIBfJwEYAILCwsLCz6sGssbKxurGjvNxA5dmu8bI4wAdQmYg1guVmBAIXWpHQCcbswOXd6SkgM43bjlSMQ9gNM7MfGaSLjNZsvZAcJ94s4SmWpsg/mwhjlP2koIQYZIKow0DRCCYJ5+rSCAqe8jzB8C3z0pCFAyzgvcDgoJmzFXOmvcDhvwXZQzH5jwk+f1cyU6nx8hR45xpz067gdMBC6RHA8YT7iYQcA3n2+QasK69EWGfwGOjX12vNY3n2+QbMLvEikBv2M6/PC49ugY5k1I3/CI8QcRBT/UFT+PECC6c50R54IPKYB3Pw+MZhlEIlkEjGQRMJJFwEg+Yb7oJ58t2hWiL93nCq+fiOrOfjX20ti++56cqU5j+pv6ofPF58YyJF4YnpqAZ+GkJ+oFEgk5JQFTCHdpOYQJEdCWUd/1OkLb3E4DWQXB2ugroM96oIKdO4zzXK3j3EIAXwF9MnuAmdzDV432WTZDW3v6I7D+W4/M2+6aysNvjkjGEtBVvAJhm/oum+siIvoKqOCWKG3cctHW4d49ZPopgpuQdwjEV0CNbT3QtFxEDvemOIZmO7YXfF4mRMAYKkOc+reU+9Fkif8ZAQwpYA6zeIT0EMwiKngylIAEueaT4//Kcsj+8Bp8c/bedRxKwJ0hLp8+79o8VMEf06EqBQ+GEJAM8RTw41rNsc03OUoI1MIhBMwM8RD8kEwvQaAWDiEg95xbwB/p9O4Yf6Wrg9QCkiGOkCmLdHo3Bp9OzTi1gBnjv0IYKdJbMz6z/kVj7YlwtewnpsMTE/4q7WMJ+JUJ32M6vDDhBAdSN+Eacv0fkCa9hIhuJrWAUR20h78C4awYn07zy7EEDMW0ohIjYnA65yagMviMEXGyAnI1JrQJ6/tsG1C+Iq4wYQFrxj8hHGkR13AYRMaaxnBThA3COTb2zeBbk8FdRGLCf/e/jCVgzYTHrjy7iuiyXrhhwk2+/5G6CWdwaB4RuDRnW39bMfdlcCC1gKYOegMZbCKaBFwb7iM4kFpATQmZ0dIEJ+KT5b4drqfNeYNpCAEVIkvZES3irud7b/FPhnRlcKRG2ual0Rnj5oMl5Lk8fMmxg0DBcs1LQRYFPrEpNtJtmDaVCg8/bMak32xhqoU6POWG+iUE8zM1efgyjpIVZEVUA8bFQRDeWNeUBofnKi1VQ0zTjdQirmE/WhIEId0hx8vTA7a4Zne4qB/BKaH1Rcwcri8gUxsJbif9txBAwU2M0JoYEpcWMqT72MD9gKWCIKlef3dteVx53F+hPZd4/oebyyO+hLZm+x7xVUgAwb30XM10WnWsQ+YZEkNoa+Qe4ZnU92nxVpZ4KoSL4WvPuI3XWr1BIX2tU7hxCPLdx1m40H2YWUJo+yi9Khwq3B6Cws35HQiEdlqy7kx//9L7/djYH7Ri193nE4Rea7KwsLCwAPwF9Df9T4Rlt1UAAAAASUVORK5CYII="
                                            alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div data-v-decd48ac="" id="scroll" class="content-container" style="padding-top: 44px;">
                            <div data-v-decd48ac="" id="content" class="content-scroll">
                                <div data-v-2848a4de="" data-v-decd48ac="" class="container">
                                    <div data-v-2848a4de="" data-v-decd48ac="" class="it biBox">
                                        <div data-v-2848a4de="" data-v-decd48ac="" class="cname">Select currency</div>
                                        <div data-v-2848a4de="" data-v-decd48ac="" class="valMob">
                                            <div data-v-2848a4de="" data-v-decd48ac="" class="inp flex">
                                                <div data-v-2848a4de="" data-v-decd48ac="" class="ico"><img
                                                        data-v-2848a4de="" data-v-decd48ac=""
                                                        src="https://fastcoin.s3.ap-southeast-1.amazonaws.com/upload/20230918/e6ab0d3d4109e0a08784508341f5d1fc.png"
                                                        alt=""></div>
                                                <div data-v-2848a4de="" data-v-decd48ac="" class="flex1"> USDT </div>
                                                <img data-v-2848a4de="" data-v-decd48ac=""
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAIxSURBVHgB7ZnNccIwEIWXnwJSAiVACekgqQA4cgBCBSEVYB84QyqADkgHoYO4hOTOT94m9kwmIyvMSrs6hG/G47Glg55290mWia6kpUEBLBaLLm4dXPvZbFZQApokJMuyVavVesW1wfWW5/kjJUAkADM/aDabg5/vGo3GPIUIkQDMeN/1vhTRJ0NEAs7n80ddG0RkZW2YIBJwOp0yT/MN0msDER0yQCQAjvOCKDzVtSMKnVLEDSkjdqHpdDrHbVvXDhFd1MqClBELYI7H4xC3wtNloO1MQQsZw7mOmd7R94LmBOk2QMSeSYFgAQy7Di9qni7viNYtamdPkQlKoYpyYDNPFzVniiKAmUwmWQpniiaASeFMUQUw1s4UpYh/Y+lMKgIYK2eKnkIVVs6kJoCxcCZVAYy2M6kLYC5xJv7KIwEmAlAPXwVLHhFIpTsSYCKgAvVQ24ZUEtWBiQAuUszwjovW021NAkwEoEhXvsEjMjkca00C1BayCt428GlFXTva9uPxuEdCVCOA1HnwDR4Uh8PhngJIvZXohR5JqkSAtwe8wvr6IDLDGOep0QVc4ji8vUDebykCbYoMOw75t9F5ub2IQtQa0HYcF9FSyMJxXFgeq/Q0foIER8DScVwECbB2HBdBLmTtOC7ENZDCcVyI/5GlcBwXIgF/fD1VxyUFGRB9K6HpOC6kApyHUdqO4yKkiDPM9rR65sFrO46LoJV4uVx28cey026396PRqKAr/5BP0/ESFvr/rm0AAAAASUVORK5CYII="
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-2848a4de="" data-v-decd48ac="" class="it newBox">
                                        <div data-v-2848a4de="" data-v-decd48ac="" class="it biBox">
                                            <div data-v-2848a4de="" data-v-decd48ac="" class="cname">mainnet</div>
                                            <div data-v-2848a4de="" data-v-decd48ac="" class="valMob">
                                                <div data-v-2848a4de="" data-v-decd48ac="" class="inp flex">



                                                <input type="text" id="networkInput"   value="TRC20"  name="network_type" class="flex1" />

                                                    
                                                    
                                                    
                                                    <img data-v-2848a4de="" data-v-decd48ac=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAIxSURBVHgB7ZnNccIwEIWXnwJSAiVACekgqQA4cgBCBSEVYB84QyqADkgHoYO4hOTOT94m9kwmIyvMSrs6hG/G47Glg55290mWia6kpUEBLBaLLm4dXPvZbFZQApokJMuyVavVesW1wfWW5/kjJUAkADM/aDabg5/vGo3GPIUIkQDMeN/1vhTRJ0NEAs7n80ddG0RkZW2YIBJwOp0yT/MN0msDER0yQCQAjvOCKDzVtSMKnVLEDSkjdqHpdDrHbVvXDhFd1MqClBELYI7H4xC3wtNloO1MQQsZw7mOmd7R94LmBOk2QMSeSYFgAQy7Di9qni7viNYtamdPkQlKoYpyYDNPFzVniiKAmUwmWQpniiaASeFMUQUw1s4UpYh/Y+lMKgIYK2eKnkIVVs6kJoCxcCZVAYy2M6kLYC5xJv7KIwEmAlAPXwVLHhFIpTsSYCKgAvVQ24ZUEtWBiQAuUszwjovW021NAkwEoEhXvsEjMjkca00C1BayCt428GlFXTva9uPxuEdCVCOA1HnwDR4Uh8PhngJIvZXohR5JqkSAtwe8wvr6IDLDGOep0QVc4ji8vUDebykCbYoMOw75t9F5ub2IQtQa0HYcF9FSyMJxXFgeq/Q0foIER8DScVwECbB2HBdBLmTtOC7ENZDCcVyI/5GlcBwXIgF/fD1VxyUFGRB9K6HpOC6kApyHUdqO4yKkiDPM9rR65sFrO46LoJV4uVx28cey026396PRqKAr/5BP0/ESFvr/rm0AAAAASUVORK5CYII="
                                                        alt="">
                                                </div>



                                            </div>
                                        </div>
                                        <div data-v-2848a4de="" data-v-decd48ac="" class="qrbox">
                                            <div data-v-2848a4de="" data-v-decd48ac="" class="m"><img data-v-2848a4de=""
                                                    data-v-decd48ac=""
                                                    src="{{ $qrCodeLink }}" style="
    width: 224px;
    height: 220px;
"></div>
                                        </div>
                                        <div data-v-2848a4de="" data-v-decd48ac="" class="addressBox">
                                            <div data-v-2848a4de="" data-v-decd48ac="" class="cname">Deposit address
                                            </div>
                                            <div data-v-2848a4de="" data-v-decd48ac="" class="valMob">
                                                <div data-v-2848a4de="" data-v-decd48ac="" class="inp flex">
                                                    <div data-v-2848a4de="" data-v-decd48ac="" class="flex1">
                                                    {{ $address_in }} </div>
                                                    <div data-v-2848a4de="" data-v-decd48ac="" class="ico"><img
                                                            data-v-2848a4de="" data-v-decd48ac=""
                                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAcCAYAAAB75n/uAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFVSURBVHgB7VZLTsMwEJ3JByGxCSfAN6C5QVgiIZGKDVtuADfhBt2yQQ0SEkvECQInINwgGyQUyzEzCWmjCreOFFdd9G3Glifz7PGbcRDWILp+EVKqGQ0nPAVLaMCsVtXdTzYtcEPwfEjgFZRKyTgwrVZS3eMyeAlaf4AN0DuhMwjemO+HMyMBBb9kqzUUB7WMy2xaggWidB5JP/yEdnMTBAc4unp+JZPw2APHaFI0hlpMPl5PLQkMVAyCTuki88N0Lkw+wVhqIXv2L8FYajH5LS6ZjvtlG5zx5/ve8W0kcIU9wZ5gBwm4AKmqRDcPYGS01a2bwtMATy5StOhrtZK3Lgi4Yb7xe8xtfPQUfT9eHPfnW1FR20ERT1sF2GFVLSZwirjlJvxN5YU5PdgFWEA2b8BSLUaCMPRvuh8sRBBkBQxDoxbTolc+nBdEEq/bhSlwXy0mp1+DNZn1gotjbAAAAABJRU5ErkJggg=="
                                                            alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-2848a4de="" data-v-decd48ac="" class="it tipBox">
                                        <div data-v-2848a4de="" data-v-decd48ac="" class="cname"><img data-v-2848a4de=""
                                                data-v-decd48ac=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAALKSURBVHgBxVc9bBMxFH526iIIkDAgmOAyQkXJBGKA0hGJSgkIia0wwkIHdsJGJSSSgR0kBiaIRCu2pgjEwEIBibWXigGKhC5CpMDlzrzn/MhJDmo7kfgk34/v7O+95+fn9xgYIlt4mg35ZEGCnGEM8tjlUXfnc4DNlxLWGMQvRBxVg2oxMJmXbfdD9vJzL/zVWgDO5jXCbYHCPIjj8PbPatEHFwHaGotb+McCjAIJZYGC/M0iiQIorcO4hqM9GAPQGj5aYzbJGnywI31pOT9OcgL6jMe5qNHcQ9/0l3FrPogkS/RZwJZ82tujmim6liD/GhIgfWHpng354tWj8PruGdUWrxwxHaaEUM7dfadL2/TRuukk095eJD7d1zd1fQXqm1umU0AUhTlaCmUBJC/BiMjsElb/p9iE2t68sx7zNoMbzXCor77ZBCtgYCNuTuEVLJFk6kazBZbAQJcqcGDyLDhA19ha+w4k8BnygePgAF3jja/mzqeDDjUSwAMHbGhaN36E4AiPBDA+4XToFnBdAuLm4Aid1MEBeyABjBKHYQG2Ep8tEZAAPjjgQ/270pzaq4/fwBH+BF7eYcvbjny/3oCpayvqOXB0QkrhOEi2Cg44hucBHUh38CA6tH8nuIDyR6ZSr5Sgg8h4NxAhHUbZdDv+0zY8dfOldTwQUbiPq1wtlg9tBs6dPNgjJ2Twee7EAbABJa3Erbah2DFRthmc5PV1S+0pY6a7EiB4fM5nICumg5fefIb7y37v/VHtE/Z9AXPISjct6+WEbV+YfGuVkuUy6k47wpga88Lmk/O57nsvEtJ6CMFnUSYfDEHEtuSUlOp9faGYlgJ7ijZC2JCzFCsO1gb/vTD5Z224++KzsgR2A0ajr4ioVbIqzXR0MuYS2OWNKrZEslV2Lk6HBOmU5yqFkzKP6cxh0MtzKetSyjXGUqsi/m1cnv8B8whiqG2I5CYAAAAASUVORK5CYII="
                                                alt="">Recharge instructions </div>
                                        <div data-v-2848a4de="" data-v-decd48ac="" class="p">
                                            <p>Recharge instructions<br>
                                                Dear user, in order to ensure that you can complete the recharge
                                                smoothly and safely, please<br>
                                                Read the following instructions carefully before performing the recharge
                                                operation:<br>
                                                1. Recharge address:<br>
                                                One-time use address: Each recharge address you obtain can only be used
                                                for one payment<br>
                                                pay. After the payment is completed, the address will no longer accept
                                                funds and cannot make secondary payments<br>
                                                pay. If you need to recharge again, please obtain a new recharge
                                                address. <br>
                                                2. Recharge asset type:<br>
                                                TRC20-USDT, Polygon-USDC: Please do not deposit assets to addresses
                                                other than the deposit addresses TRC20-USDT and Polygon-USDC. <br>
                                                If you top up with other types of assets, the assets will be lost and
                                                cannot be retrieved. <br>
                                                3. Recharge confirmation:<br>
                                                Network node confirmation: After you recharge to the specified address,
                                                the transaction needs to get all network nodes<br>
                                                Confirmation of network nodes. Due to different blockchain network
                                                status, the confirmation time may<br>
                                                It varies, it is recommended that you wait patiently and check your
                                                account balance regularly until funds<br>
                                                Arrive. <br>
                                                4. Notes:<br>
                                                Recharge amount: Please recharge the appropriate amount according to
                                                your transaction needs to satisfy you<br>
                                                trading and investment needs. <br>
                                                Information verification: Before performing the recharge operation,
                                                please confirm the recharge address and recharge<br>
                                                amount to avoid financial losses due to incorrect information. <br>
                                                Security warning: Please operate under the premise of ensuring network
                                                security to avoid losing funds<br>
                                                Stolen. <br>
                                                5. Contact and help:<br>
                                                If you encounter any problems or questions during the recharge process,
                                                please feel free to contact us<br>
                                                Our customer service team will provide you with help and answers as soon
                                                as possible. </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- -->



                                <div data-v-2848a4de="" class="van-popup van-popup--round van-popup--center"  id="networkPopup"
                                style="display: none; z-index: 2025;">
                                    <div data-v-2848a4de="" class="modal-con" style="
    background: #f2f3f5;
">
                                        <div data-v-2848a4de="" class="modal-title"> Select network <img
                                                data-v-2848a4de=""    id="closePopup" onclick="document.getElementById('networkPopup').style.display='none';"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAhCAYAAAC4JqlRAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAGNSURBVHgB7ZU9TsMwFMdfYqlSpyY5QZMsGVk70Z6AcgLEyMgJ4AgcIStbR5goN2CEfIgcIFLC1iWBZwFScL5sP4YO+UlWXNd6/5/s2AGYmBDwPO8G2yd/wj+wRLDWO29BECzF/5k4YNv2/qe7xj4URfEMhHDTNJ94F5tVVdUH1tsPCliW5RqGcUKVEMI55Ww2u8rzvBwUKMtyR5XoCmeMbaIoehXnsq4CFIm+8DiOX7rms75COhKq4YMCqhI64aMCshK64VICYxKUcI4BCriuG6LERWPoDttWN1xZoEcCdMM5UlvwJ6W9Hd+FGFuphnNMUITvOYafiuN4zZ6BBkor0PHCNdG6tqUFet72VV3Xc8q1LSUwdNSo345RAZlzTpFg1HCqBFMIHz1qOhJMNhyLXiZJ8gAjqEow2fA0TUOQhEs4jrNu1OiVaF1E1PBf8GI6x0dzu25939+OCiAWNZyTZVmJd8RGkLDEea0twKV7w+ADrsQ1hu+AAG7FYbFY3GO9Of58RKGQj8HExDHxBbuCFQ0AYUaoAAAAAElFTkSuQmCC"
                                                alt=""></div>
                                        
                                        <div data-v-2848a4de="" class="modal-list">
                                            <div data-v-2848a4de="" class="list-info">
                                                <div data-v-2848a4de="" class="img">
                                                    
                                                <img data-v-2848a4de=""
                                                        src="https://fastcoin.s3.ap-southeast-1.amazonaws.com/upload/20241228/e5315cc0ed9748bd789c0e5af1579f6f.png"
                                                        alt=""></div>
                                                <div data-v-2848a4de="" class="info" onclick="selectCurrency('TRX', this)">
                                                    <div data-v-2848a4de="" >TRX(TRC20)</div>
                                                    <p data-v-2848a4de="">Expected arrival time ≈1 minutes</p>
                                                    <p data-v-2848a4de=""> Minimum deposit ≥1 USDT </p>
                                                </div>
                                                <div data-v-2848a4de="" class="img1"><img data-v-2848a4de=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAN7SURBVHgBzZnLTxNRFId/d6haCMGaqLjCEouxVUNZudFQEtia6FYTdWuihZ3QBWWhZWeRtbELXap/gAtKcOOuRqUkhTAQNz4SKzG82s71nmtb2zLtTIfp40vI0Lkzma/nPubcUwaLeCLJADj3Q8Ew4/BzDpc47co3p8WfKtpU5PhHKEp8ddIbhwVYPRe7w+sux7HdoBAbL5Ex+yAVjMc7oMysTHrVOu4zKXZ0Z1r8Ow4bYIzHzIoaCg7MrgS5poVRZ8RMPFgVPTGTCl2MGVxXHc+T5aewKWpVURBdfeSbqNasK/hvrO28BUcAzSGR3e8cUcP96coGRe9qMd4WmihH+GVAdDggmO9WP5qNCIhnVj67jLIuHoh8ucs5e4HWMrE65YsWPhQFL0SS7hz4glhw3WgtaTEe+wvjsdjFOWjTbSBHuBxOueZKZAQpelnO19FGiCieoCjKCFL00GY4jmzL9TffxSyABtNzTEFotBcvb53F6Plu4xsYC8pDPitZQAMhORLz9jqL526/2sCHzW0YSI4o0LQAmixH3Lx83Phmkc4pYpoMokFUkyMMo0cwHnCIgxsmoQc+uHYKV/q68C71B/NLP2BFbn7pJ958+g1jPzYoBJkbJgmNnSl2TeHBepJGcs/eV/9ipXCxJtIsNp3nVY6bh1dPyog2Qi6PS6nnar1xUypps5yExiC980xF8f7rr0KgD97TzgOSxNhAt61y5KYwhrTZq7d2c2L92kTy++6BNpK0WY5QFc55op47aknaLEfTeEOMQbaIOjEjeWg5QkNCLNSsrggWqCVpixwhNvwy3RJp/i9Y3Fb2ODvKJo5dcrQtTU35+h3yE+dzIpKWUi6K5PXn6/LtsrWnIfnNeGyaM2RxOsh1MJvZj+KQ0Bppm5ygA5ihoxRUw0NpzrU5tAmMsVihLPJ/T5LJhAHza2KjoLFXiB5RFKQooqShZXBWVlQqexfTfrSVXS12lXOpkDdWek63NuOJLDe79EEkRICGKk/qZjPZvb0b4vtYWsAtwRCn4pF+Uw3OPf4cZUwJooFQt66FfFVLfDXzwbXQpXEx5e+JjEeF/dCknKglR5gqAcu6DedhkYLfgQ1Q1HKZzrBePbCSuoroBVFx17CFOk6aXqnZTFfUjJglwVLkhp/21B1sEBp35zdfxZ8hKBHmDAmRMi1SxmT1Z4i/flyHRT7y5jEAAAAASUVORK5CYII="
                                                        alt=""></div>
                                            </div>

                                            <div data-v-2848a4de="" class="modal-list">
                                            <div data-v-2848a4de="" class="list-info">
                                                <div data-v-2848a4de="" class="img"><img data-v-2848a4de=""
                                                        src="https://fastcoin.s3.ap-southeast-1.amazonaws.com/upload/20250329/6aeaf26ed14513ae6733b7b36040c5b7.jpg"
                                                        alt=""></div>
                                                <div data-v-2848a4de="" class="info" onclick="selectCurrency('POL', this)">
                                                    <div data-v-2848a4de="" >POL(Polygon)</div>
                                                    <p data-v-2848a4de="">Expected arrival time ≈1 minutes</p>
                                                    <p data-v-2848a4de="">  Minimum deposit ≥1 USDC  </p>
                                                </div>

                                            
                                                <div data-v-2848a4de="" class="img1"><img data-v-2848a4de="" 
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAN7SURBVHgBzZnLTxNRFId/d6haCMGaqLjCEouxVUNZudFQEtia6FYTdWuihZ3QBWWhZWeRtbELXap/gAtKcOOuRqUkhTAQNz4SKzG82s71nmtb2zLtTIfp40vI0Lkzma/nPubcUwaLeCLJADj3Q8Ew4/BzDpc47co3p8WfKtpU5PhHKEp8ddIbhwVYPRe7w+sux7HdoBAbL5Ex+yAVjMc7oMysTHrVOu4zKXZ0Z1r8Ow4bYIzHzIoaCg7MrgS5poVRZ8RMPFgVPTGTCl2MGVxXHc+T5aewKWpVURBdfeSbqNasK/hvrO28BUcAzSGR3e8cUcP96coGRe9qMd4WmihH+GVAdDggmO9WP5qNCIhnVj67jLIuHoh8ucs5e4HWMrE65YsWPhQFL0SS7hz4glhw3WgtaTEe+wvjsdjFOWjTbSBHuBxOueZKZAQpelnO19FGiCieoCjKCFL00GY4jmzL9TffxSyABtNzTEFotBcvb53F6Plu4xsYC8pDPitZQAMhORLz9jqL526/2sCHzW0YSI4o0LQAmixH3Lx83Phmkc4pYpoMokFUkyMMo0cwHnCIgxsmoQc+uHYKV/q68C71B/NLP2BFbn7pJ958+g1jPzYoBJkbJgmNnSl2TeHBepJGcs/eV/9ipXCxJtIsNp3nVY6bh1dPyog2Qi6PS6nnar1xUypps5yExiC980xF8f7rr0KgD97TzgOSxNhAt61y5KYwhrTZq7d2c2L92kTy++6BNpK0WY5QFc55op47aknaLEfTeEOMQbaIOjEjeWg5QkNCLNSsrggWqCVpixwhNvwy3RJp/i9Y3Fb2ODvKJo5dcrQtTU35+h3yE+dzIpKWUi6K5PXn6/LtsrWnIfnNeGyaM2RxOsh1MJvZj+KQ0Bppm5ygA5ihoxRUw0NpzrU5tAmMsVihLPJ/T5LJhAHza2KjoLFXiB5RFKQooqShZXBWVlQqexfTfrSVXS12lXOpkDdWek63NuOJLDe79EEkRICGKk/qZjPZvb0b4vtYWsAtwRCn4pF+Uw3OPf4cZUwJooFQt66FfFVLfDXzwbXQpXEx5e+JjEeF/dCknKglR5gqAcu6DedhkYLfgQ1Q1HKZzrBePbCSuoroBVFx17CFOk6aXqnZTFfUjJglwVLkhp/21B1sEBp35zdfxZ8hKBHmDAmRMi1SxmT1Z4i/flyHRT7y5jEAAAAASUVORK5CYII="
                                                        alt="">
                                                    </div>
                                            </div>




                                            
                                        </div>
                                        <div data-v-2848a4de="" class="modal-btn isact0"  onclick="confirmSelection()"> OK </div>
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
        </div>
        <!---->
    </div>
   
    <!---->
    <!---->
    <div class="van-toast van-toast--middle van-toast--success" style="z-index: 2015; display: none;"><i
            class="van-icon van-icon-success van-toast__icon">
            <!----></i>
        <div class="van-toast__text">Registration successful</div>
    </div>
    <!---->


    <script>
  document.getElementById("closePopup").addEventListener("click", function () {
    document.getElementById("networkPopup").style.display = "none";
  });
</script>
    <script>
  const input = document.getElementById('networkInput');
  const popup = document.getElementById('networkPopup');

  input.addEventListener('click', () => {
    popup.style.display = 'block';
  });

  // Optional: Close popup on outside click or ESC key
  window.addEventListener('click', (e) => {
    if (!popup.contains(e.target) && e.target !== input) {
      popup.style.display = 'none';
    }
  });
</script>



<script>
    let selectedCurrency = '';

    function selectCurrency(currency, element) {
        // Hide all img1 icons
        document.querySelectorAll('.img1').forEach(img => {
            img.style.display = 'none';
        });

        // Show tick on selected currency
        const parent = element.closest('.list-info');
        if (parent) {
            const img1 = parent.querySelector('.img1');
            if (img1) {
                img1.style.display = 'block';
            }
        }

        // Store selected currency
        selectedCurrency = currency;
        console.log("Selected:", selectedCurrency);
    }

    function confirmSelection() {
        const input = document.getElementById('networkInput');
        
        if (selectedCurrency === 'TRX') {
            input.value = 'TRC20';
        } else if (selectedCurrency === 'POL') {
            input.value = 'Polygon';
        }

        // Hide popup
        document.getElementById('networkPopup').style.display = 'none';
    }
</script>


<style>
    .img1 {
        display: none;
    }
</style>

</body>

</html>
