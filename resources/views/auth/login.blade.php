<html style="font-size: 53.3333px;" translate="no">

<head>
    <meta charset="utf-8">
    <title>Login</title>
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
    <link href="{{ asset('') }}js1744307594169/app.46ba12d9.1744307594169.js" rel="preload" as="script">
    <link href="{{ asset('') }}js1744307594169/chunk-echarts.cc04be28.1744307594169.chunk.js" rel="preload" as="script">
    <link href="{{ asset('') }}js1744307594169/chunk-vant.81420f35.1744307594169.chunk.js" rel="preload" as="script">
    <link href="{{ asset('') }}js1744307594169/chunk-vendors.374f8b51.1744307594169.chunk.js" rel="preload" as="script">
    <link href="{{ asset('') }}js1744307594169/chunk-vue.a3b4853b.1744307594169.chunk.js" rel="preload" as="script">
    <link href="{{ asset('') }}static/css/app.c3049ff2.css" rel="preload" as="style">
    <link href="{{ asset('') }}static/css/chunk-vant.d14f5539.css" rel="preload" as="style">
    <link href="{{ asset('') }}static/css/chunk-vendors.794edbf9.css" rel="preload" as="style">
    <link href="{{ asset('') }}static/css/chunk-vant.d14f5539.css" rel="stylesheet">
    <link href="{{ asset('') }}static/css/chunk-vendors.794edbf9.css" rel="stylesheet">
    <link href="{{ asset('') }}static/css/app.c3049ff2.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-0c334b0a.bd99dde0.css">
    <script charset="utf-8" src="{{ asset('') }}js1744307594169/chunk-0c334b0a.d7611963.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-5576a184.9f52f39a.css">
    <script charset="utf-8" src="{{ asset('') }}js1744307594169/chunk-5576a184.c49d8c14.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-7cbde8e8.788c4ae8.css">
    <script charset="utf-8" src="{{ asset('') }}js1744307594169/chunk-7cbde8e8.43936207.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-3525d94c.2ba0cbc0.css">
    <script charset="utf-8" src="{{ asset('') }}js1744307594169/chunk-3525d94c.e40fcb0e.1744307594169.chunk.js"></script>
</head>

<body class="w856">
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
                    <div data-v-decd48ac="" data-v-67a36a02="" class="page">
                        <div data-v-67a36a02="" data-v-decd48ac="" class="bg"><img data-v-67a36a02="" data-v-decd48ac=""
                                src="{{ asset('') }}static/img/bg_logo.2c5a4b9e.png" alt=""></div>
                        <div data-v-decd48ac="" class="headers on">
                            <div data-v-67a36a02="" data-v-decd48ac="" class="heads">
                                <div data-v-67a36a02="" data-v-decd48ac="" class="gohome"><img data-v-67a36a02=""
                                        data-v-decd48ac=""
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAE+SURBVHgB3diLDYIwEAbgwy7gCLoBbOIGtiM4gbqBE0DdSCcQJ5AN8GrAIPIobXNH+JOG0jbhCyVpC8DSIqVcmwKBsgKPKKX2URQ9sLwQdYQAicAxBoMX3Wwry3Krtc7BI05vqAtTpQDPTAb1YXDaFL4db9CkKRvCpGmqIUCsQRQYaxAVxgpEiRkFUWMGQRyYXhAXphPEifkDcWN+QHPAfEEDaxNVciynLMuu9Vp2At5ssFxMpQYF22B55LMwf0C4jzkAbwr8Vs+m8v2occcnsTHrGCzN3AJRRF25YeI4fiJq1xqzS5Ikx+47EEQ0b+aAEu0GbpToauREib4OLpQY6uRAibEB1KhREDXKCkSJsgZRoZzO9j3LTFGd7b1Or05ne3yoxoerVnOQHYPz75g2yqzWIc723ql+WG1gqXkDGBPa7OTyg7AAAAAASUVORK5CYII="
                                        alt=""></div>
                                <div data-v-67a36a02="" data-v-decd48ac="" class="container"><span data-v-67a36a02=""
                                        data-v-decd48ac=""><img data-v-67a36a02="" data-v-decd48ac=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAPISURBVHgB7VhRctowEF3J0HaaMEPG0GGmH3VOUHKCOCcIOUHSE5CcgHCCpicIPUHhBKEnCD1B/dHOMA2kngTSNLasrsCAZGyDgZB+5M3AeOWV9KzV7kpLYEkYhpG9vb0zCYGi3M45tDKZ103LsmxYAgQWhCB2c3NXJoQfo5iNnIDA2ebmRnVRogsRLBQKhuOwC8Fzzi5WOq3ttdttCxKCQkIsQE5g0EesOiREYoI4UQVUcjaaucqYsz35wQ7n/ES8k/SMXq9fgYRIZGJ/9b5L3S3G6J5th5sumy0YmsYuQdqjmczGVpL9mGgFHx7cktrCq1HkBMQ7Qsgnua3X+3MECZCIICFUCSXd7lVtVh/XfTiTZc6995AACQnyd5JozdPHRoitAAsisZOsG/89wVgvzuUKJgDbx7Q18kKUxyFGeGId5oNwrtEYFv6ag8mJGENrdDrtJiQh6IeTc5/QGkDq6TQ9Ccs0UwQXzBSrgIUxcicYI1NBrWCmQDM00cTfMJ4tdSoJA457iP+GLxp4+BAHj1NZR1nBLELT0r8nA/Dq9XXnFB4Ruq5jnKRlX7RxFbflVVS8OJV6pQRiz0vV4JHBGDuVxGy/7xjy+7gwY8WlsVVhGMgn4PyvcuJ5DtTLIhXzztD1PIcnxrOJk4JzqjhJSn3JDmUZg3MdY+HKA3SAEhIi0kGY74OU48eBOuw43+3+2oY1IJfLX2JWGcVgJViPTYzkTLUbr8LaQBqSkJWvBWOCmHPLchfGtCasCSHXgv3R84BgPp8vSkssUIvLIrr+5lyEIDTNR5gB1LuYpSuyiTiUSE1mLpczxwQ9T109vHt8jhpseIjlR+IZP+o4n39bjCani81vzqMb3FKcDx1nZGJTomd1Op1m5DCclWBOBI9onLtmlK4/p6x/KCoRFJf/CJTDabxzoCnka6N9dfWzFaXrum5LJRh/5QzcofFk0y9RbDRkpVnOgaYyJbEVp+vvLVkndvVdl9bUuYiRKJMM998EeJFvzOqDH/RVErOiHBKlm06zqeISriC35IZUikd+pee5gU3OYlfQ79UMkDAjNb3pIih1HKeuNnplkVXCBkBz7cpynDONgCfmZoDEbpieP2dF7Utbg1Sn67kvaj4c3F2rlL5oYYYZe5ZcqcK928I9cwBzQNO8C+lyhBUxbU9+T6lbwvEqoFZqa1j7+TAgOCyTKYM8MSZlvYGTiAfG+MEyRZ7VQa05aqPm+/u79suXmQalfAvFIjwNaoxtHNj2j/aoIbT0MTS5UyREWwtREUkcZ6Nu29OV13/NirsKRhpnugAAAABJRU5ErkJggg=="
                                            alt=""></span><span data-v-67a36a02="" data-v-decd48ac=""><img
                                            data-v-67a36a02="" data-v-decd48ac=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAM8SURBVHgB7ZhNTttAFMffm9hFUFWySJHYNZyAcIKmJyicADhB4QTAqsvSXXeEEzQ9Ac6yK+AEeIlIjLysauzpe7VjxhM78VfChr8UxRnPvPnlzfOb50GoKMuyOkIYuwByG1H0uCn+sDwpwUGUDn0Pw/Bp4HmeAxWEUFLtdvuAhu3Tp1diGBDoDWL43XXdfplxhQEt631PCLxAhA7UUOTZ8KwoaGteB1pKa23t3VeC+0FwFtRUZAN3V1ffWisrb37/Ic3sD7PhKM7Mn2S0m9NlKKUctFpo+77vUJx58TjLMIxuGEIXESlO4WPWYPZmGPqfZsUnzoG7ylnSvmm2zu7v7x0ooM3NzY7vB6d0uQ8lITEHziK462k4dISQe6PR6AYqKAINrwirA2nImxjS08eILEMEd5IBdxkEf3eqwrHY42yDbA1SlimEeM6sMVMejNKIuNC6DVz3YQ8aVLu90QdtyYNAkhfHtto25UEphfZPkP/1ITSsIPCP2LbaxmlM75cCZO/pS2uaIjM26optcjyrbTx3tII5gOS9L5qdftEntYrieL5Mt4rUsicxyGml1TLv1JuUSrYWCciKU1BqXlr+rUnaSTwYbfwpDRcNx4rnsNU2lSUBpFzUUzvxDgFLEs31K92C25OrBJC2pA9qF9qmKue7sqJyzNaaepMLBVBPzE9LAyQ56g+1KFGf4lSlsojUkqeMuRIWI28QZXr5/EsOguDpuGpVrCvKGAYlZewCzC7hMBsoUx49/jt1IeN0dj0PzHVH/9kElLBNhi+gphCNc4DihW8ZQFYXaor228+l+ufdYBdP3KyodslfcJ5EZT24dL0C1tUrYF0V3EkaFW9rVtF5SnpQL4sqqUgRkuzNKqA9b5BpGkdQU1SlH6oAObqdXAh1IBWttxmd2diQ7u80UWGzDbZFm17uakgZJl4uffzWtLLew9V3oRd9irmyIYRvWnPqTfLFAMlzu1llFx9Kqb8NWKLiWrBHUZZ5QislTp2YNRaD5BGaVJSq9VQx3OPjw6ne3hjg+vrGXdXjYTpsPx6Px+dZ9xpb4orHw5y+DmalryZj8JgwT/TDSU2cU2/pHdymt2GbvGbDHP0DjvxVJpHPEEsAAAAASUVORK5CYII="
                                            alt=""></span><span data-v-67a36a02="" data-v-decd48ac=""><img
                                            data-v-67a36a02="" data-v-decd48ac=""
                                            src="data:image/png;base64,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"
                                            alt=""></span></div>
                            </div>
                        </div>
                        <div data-v-decd48ac="" id="scroll" class="content-container"
                            style="padding-top: 32px; padding-bottom: 64px;">
                            <div data-v-decd48ac="" id="content" class="content-scroll">
                                <div data-v-67a36a02="" data-v-decd48ac="" class="container">
                                    <div data-v-67a36a02="" data-v-decd48ac="" class="he">
                                        <div data-v-67a36a02="" data-v-decd48ac="" class="ico flex"><img
                                                data-v-67a36a02="" data-v-decd48ac=""
                                                src="{{ asset('') }}static/img/logo.95f8e869.png" alt="">
                                            <div data-v-67a36a02="" data-v-decd48ac=""><span data-v-67a36a02=""
                                                    data-v-decd48ac="">Welcome back</span></div>
                                        </div>
                                        <div data-v-67a36a02="" data-v-decd48ac="" class="flex1">
                                            <p data-v-67a36a02="" data-v-decd48ac="">Welcome to FINPACT</p>
                                        </div>
                                    </div>
                                </div>


                                <form action="{{ route('loginAction') }}" method="POST" name="login_frm" id="form-id">
                                {{ csrf_field() }}
                                <div data-v-67a36a02="" data-v-decd48ac="" class="main">
                                    <div data-v-67a36a02="" data-v-decd48ac="" class="container">
                                        <ul data-v-67a36a02="" data-v-decd48ac="" class="tab">
                                            <!-- <li data-v-67a36a02="" data-v-decd48ac="" class="on">Account </li> -->
                                            <li data-v-67a36a02="" data-v-decd48ac="" class="">Mobile phone </li>
                                        </ul>
                                        <ul data-v-67a36a02="" data-v-decd48ac="" class="line">
                                            <li data-v-67a36a02="" data-v-decd48ac="" class="">
                                                <div data-v-67a36a02="" data-v-decd48ac="" class="name"><span
                                                        data-v-67a36a02="" data-v-decd48ac="">Account</span>
                                                    <!---->
                                                </div>

                                                <div data-v-39429002="" class="set_area" class="phone_code" id="phone_code"
                                        style="padding-left: 10px">
                                        <input type="hidden" id="country-name" name="country" value="CANADA">
                                        <input type="hidden" id="dial-code" name="dialCode" value="1">
                                        <input type="hidden" id="country_iso" name="country_iso"
                                            value="CA">
                                                <div data-v-67a36a02="" data-v-decd48ac="" class="flex">
                                                    <div data-v-67a36a02="" data-v-decd48ac="" class="flex1">
                                                        
                                                        <input data-v-67a36a02="" data-v-decd48ac="" type="text"
                                                        name="phone" data-v-6e2d35de=""
                                                    type="text" onkeyup="this.value=this.value.replace(/[ ]/g,'')"
                                                    placeholder="Please enter your phone number"></div>
                                                    <!---->
                                                </div>
                                            </li>
                                            <li data-v-67a36a02="" data-v-decd48ac="" class="">
                                                <div data-v-67a36a02="" data-v-decd48ac="" class="name"><span
                                                        data-v-67a36a02="" data-v-decd48ac="">password</span></div>
                                                <div data-v-67a36a02="" data-v-decd48ac="" class="flex">
                                                    <div data-v-67a36a02="" data-v-decd48ac="" class="flex1">
                                                        
                                                    <input
                                                            data-v-67a36a02="" data-v-decd48ac=""
                                                            id="passwordInput"  name="password"
                                                 placeholder="Please enter your password"
                                                onkeyup="this.value=this.value.replace(/[ ]/g,'')"
                                                            type="password"></div>
                                                    <div data-v-67a36a02="" data-v-decd48ac="" class="arr"><img
                                                            data-v-67a36a02="" data-v-decd48ac=""
                                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAJ/SURBVHgB7VfBdZtAEB0luUcl4A5IBcEnPZ2iVJC4gqAKjCsQVBC5Ais36WRSQdxBNh2oA+V/M9gIA7NI4sZ/b71+Yvn7d3bm7yIyYsSIEYNiImdgtVqF6CK0YDKZfGSvj/aHw+Efeof2tFwuczkRvQVCVIAuhqBv6Keerzm0HKLvINZJD3gLhDCKSVXYOVj3EeolEOIWEPZT/CNmwUEkNC431sB31oAsy24h7kEuJ45gzj6Q2xr4vushCbDSRIZDNJ/PZbvd/m4b0LrF2FYWwkpssGIz9LkUxcBIB2gL33zV7U7FVyArFeR/xSa+RxeDfN/B8yiv9tMGLvIaPE/1Bx+aRiupJS4DYVwVI4UnUiy9z7Hh92sPkVMtwk/1B2+KRBM3kG44tESFTdM0fWTEOQmTn/+XBUCRWMyN2AjBlXQKZBRAFhtEoj72vK1a4VHDmIR5rCJzKXK0E+D6oX7bLFCKqPjYyXOugCxqEleZ8LYi+JfY4Nxxq0AQfhEPVJI5MoZO9bwmnHiAUZQ2gQNjLyfgSKD6mQmtWCI3hrpKtEPxw9HxV48gzdJnpd/5x0r+6oI904d+eCdtAlmZPlHkCVFWG8Z/VcOuT/RyOljFVEK91R3N1TQQvvZH7C1Zx3H84m+67XyHwjelDfU4TRz4ruo/th11oZJalrPRSLkWnkhPiMDgYfSumngucVlwUtyW7+XVSkK9KCw83u9/WaiITKpmOwT0VErannfeB3e7XT6bzaBxEskAsMQRfa783O5ALgNW+c1FrvwEiXhfa7CTU7DWgjDFEad+djI3P4t/RPe6uHSwz84mqAHT+wJtpS05KU4k9md9uI8YMWLEwPgPjJRCnnYugEEAAAAASUVORK5CYII=">
                                                    </div>
                                                </div>
                                            </li>




                                            <li data-v-67a36a02="" data-v-decd48ac="" class="fog"><span
                                                    data-v-67a36a02="" data-v-decd48ac="">Forgot password？</span></li>
                                        </ul><button data-v-67a36a02="" data-v-decd48ac="" class="btn on"> Login
                                        </button>
                                        <div data-v-67a36a02="" data-v-decd48ac="" class="p"> No account yet？<span
                                                data-v-67a36a02="" data-v-decd48ac="">Register now</span></div>
                                    </div>
                                </div>

                                <form>
                                <!---->
                            </div>
                        </div>
                        <div data-v-decd48ac="" class="footer">
                            <div data-v-67a36a02="" data-v-decd48ac="" class="bottom">
                                <div data-v-67a36a02="" data-v-decd48ac="" class="container"> Click "Login" to
                                    agree<span data-v-67a36a02="" data-v-decd48ac="">"User Agreement" and "Privacy
                                        Policy"</span></div>
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
        </div>
        <!---->
    </div>
    <script src="{{ asset('') }}js1744307594169/chunk-vue.a3b4853b.1744307594169.chunk.js"></script>
    <script src="{{ asset('') }}js1744307594169/chunk-echarts.cc04be28.1744307594169.chunk.js"></script>
    <script src="{{ asset('') }}js1744307594169/chunk-vant.81420f35.1744307594169.chunk.js"></script>
    <script src="{{ asset('') }}js1744307594169/chunk-vendors.374f8b51.1744307594169.chunk.js"></script>
    {{-- <script src="{{ asset('') }}js1744307594169/app.46ba12d9.1744307594169.js"></script> --}}
</body>

</html>
