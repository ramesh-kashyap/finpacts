<html translate="no" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>FINPACT</title>
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
                                                src="{{asset('')}}static/img/0feefd89860da746f3a51ec0d8063854.png"
                                                alt=""></div>
                                    </div>
                                    <div data-v-29c52665="" class="name tac"></div>
                                    <div data-v-29c52665="" class="flex1"></div>
                                    <div data-v-29c52665="" class="clear"><img data-v-29c52665=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAPISURBVHgB7VhRctowEF3J0HaaMEPG0GGmH3VOUHKCOCcIOUHSE5CcgHCCpicIPUHhBKEnCD1B/dHOMA2kngTSNLasrsCAZGyDgZB+5M3AeOWV9KzV7kpLYEkYhpG9vb0zCYGi3M45tDKZ103LsmxYAgQWhCB2c3NXJoQfo5iNnIDA2ebmRnVRogsRLBQKhuOwC8Fzzi5WOq3ttdttCxKCQkIsQE5g0EesOiREYoI4UQVUcjaaucqYsz35wQ7n/ES8k/SMXq9fgYRIZGJ/9b5L3S3G6J5th5sumy0YmsYuQdqjmczGVpL9mGgFHx7cktrCq1HkBMQ7Qsgnua3X+3MECZCIICFUCSXd7lVtVh/XfTiTZc6995AACQnyd5JozdPHRoitAAsisZOsG/89wVgvzuUKJgDbx7Q18kKUxyFGeGId5oNwrtEYFv6ag8mJGENrdDrtJiQh6IeTc5/QGkDq6TQ9Ccs0UwQXzBSrgIUxcicYI1NBrWCmQDM00cTfMJ4tdSoJA457iP+GLxp4+BAHj1NZR1nBLELT0r8nA/Dq9XXnFB4Ruq5jnKRlX7RxFbflVVS8OJV6pQRiz0vV4JHBGDuVxGy/7xjy+7gwY8WlsVVhGMgn4PyvcuJ5DtTLIhXzztD1PIcnxrOJk4JzqjhJSn3JDmUZg3MdY+HKA3SAEhIi0kGY74OU48eBOuw43+3+2oY1IJfLX2JWGcVgJViPTYzkTLUbr8LaQBqSkJWvBWOCmHPLchfGtCasCSHXgv3R84BgPp8vSkssUIvLIrr+5lyEIDTNR5gB1LuYpSuyiTiUSE1mLpczxwQ9T109vHt8jhpseIjlR+IZP+o4n39bjCani81vzqMb3FKcDx1nZGJTomd1Op1m5DCclWBOBI9onLtmlK4/p6x/KCoRFJf/CJTDabxzoCnka6N9dfWzFaXrum5LJRh/5QzcofFk0y9RbDRkpVnOgaYyJbEVp+vvLVkndvVdl9bUuYiRKJMM998EeJFvzOqDH/RVErOiHBKlm06zqeISriC35IZUikd+pee5gU3OYlfQ79UMkDAjNb3pIih1HKeuNnplkVXCBkBz7cpynDONgCfmZoDEbpieP2dF7Utbg1Sn67kvaj4c3F2rlL5oYYYZe5ZcqcK928I9cwBzQNO8C+lyhBUxbU9+T6lbwvEqoFZqa1j7+TAgOCyTKYM8MSZlvYGTiAfG+MEyRZ7VQa05aqPm+/u79suXmQalfAvFIjwNaoxtHNj2j/aoIbT0MTS5UyREWwtREUkcZ6Nu29OV13/NirsKRhpnugAAAABJRU5ErkJggg=="
                                            alt=""></div><!---->
                                    <div data-v-29c52665="" class="notice"><img data-v-29c52665=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAALQSURBVHgB7Zi/k9JAFMffJpKDYBH5MYOVsbuS0jLXnR12did/gdxfAPwFSmd3XmUpVpZiaSWlndgxc1yMM8wRDSR+d2ACF4Jkk+DpHJ8ZJiG7m/3m7XvJvkeUEsVi8aRYLH8vFMpfcTyhlGCUElwYY6Qv/lqXlxf3KAUkSokVcRyNUiI1gbsiFYHc/4LXCoVSk1IgkQ9qQJIyTSxvI6zd82jgus6RZVkDiolMMdG0kiFJ8nuIO97UB214ALmRy6k0mVx9pBjEEoiIfSFJ7BUXEGiyIGtIgSBhjBmqqlYPDpRPtm1bJICQQKyons/ffYsJnwbbsJx9RZGPHOdnB1a7j0vV6z3YIWNyTVVzPyaTSZ8iElkgnL6Bid/wiWhdXAe+Vh+NRkNYyMZydlU1/w19uUjfmnOLs1oul9cW1rS3zbs1SHggyLJyBhm1kOEDxlwurBc2tlKp6I4zw1gyaP2hIgWQ/GdxfiA8Wm9l3dns12PTNL9sGj8ejy1Y8xxuwYIiowbQRguWSqWm57FWSJPFmNeG1V6SAHNruh9gOz2k+TU+jXUSEcg//BSIxkUgPBkOhwOKwdxdMi2cPg+2QSATFejRdXEd07xoUArg3s9wOKM0BW66QVyi3v92bBZ2yV5gUvYCk7IXmJS9wKTsBSblzuofTStji+6FVgX45pV2yOr9LWu5Q/d3EDxT25Tf/m08z2uZ5qjNz32Bwe3PDeMXn1Z9sEf/DMzPnX0fzGTkOjKwFk51ukF4tqcoUov+F2KVPni0Z7PqoW1fDbb31bRsNn+MXyVK/yDCecZqOsqXg8h957qsSzTtIwm3FqJ0WZaraDcYk3hpTpv3904RnULpqrBAvI4+43VUpRjwB0Jm+FBkjPCXBOKEqlOBsT0SRFggj3YczkkMVCNYezZzTkmQ2LnuojBk4NTA0lVhnQe0rERYuIbqlttDHbE7nS79U5TftuAIIDEH5RkAAAAASUVORK5CYII="
                                            alt=""><span data-v-29c52665=""> 2 </span></div>
                                    <div data-v-29c52665="" class="lang"><img data-v-29c52665=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAZYSURBVHgBrVg7V+NGFJ6R7EXYbIC12UOqNV26eDs6REcqvL9goUwF/ALsLh2m3CrmFwDdUiG6bBXTJRWm4/i14hxiYLE9+a4e9mgsWzJwz5FlzfOb+57L2TNpYSFrahrLc87WGON5avIeIlsIVuNc1PC+7PeZZdtNiz2D+DSDF0CaltjhnO9KYGIRAcbL6vefSrZt1+LOiwXQBZbcB7d22SsQwFbiAtWjBrx7l93VNP0Y4Mzxo/g1ngts/A3j8hFLMhrDuV5IpWZv7+/vqxPHsonglg7GcA061j/SNH7S7Xar4ITtd2QyS9+ZJ37MxeZiTwi+hS/oqsipC+FQ5Xa7scemAUgi1fXEMbpNFRj077Db/VGWQckEgOd4Deb1emKdDGR5eTnX7fa3AOizChRtVYh8PWzNUIDg3N+jouInvd6P7XHAhgAzBca0Y2nzmrd5jb4J6NNTr4i/n5WpVqvVWFfX00PAkVgLchtEVGq3678/gFgEQaf+SaXSJv7m6BtrLZC+zcy8OcV0++7uzr6/75yk03PEHFOampudTS+g72wsQJx+CyL8Q9lzGzpSZlPQ/PxPF/B9dEhfF+EF9N3Z2RSMovMXtXU6/1n0jf02/HkYtyqPCQCE2uU4T/xJi/ltLuemA0dEXJqff3sqg3QB8A3iErj5jaRBQFROYswq+r/40hoATKXelhVXUplkXc8HyVYh8g2AOCOREydTqTnS91+8IQb6DV/UjpEQ93Q9eTVcnteSSW395uamxl6Bstn3RSHEvtwmW67rNZz9Bwfp9Z4Wqc/hoMe9/PCUolSv17/KC9IihmEsG8Zc3jDSCw8PnRsWk1wupeHMHQkZ7h5s2ecUiTOdTs3Kbo1z7RF9lsNBWO4VJuSGS/a3e72exVgih4RgzRV90Ce6yUC/1Gq1KiwmLS0t5SFy8pMSp1w/GcJFG25nUc9msyY2V6IFL5DVIVKQVVN/Tt3MNSZegNXBtXQuWAzqdDo3GP8YtFxB4e4rcREG9DPpqNdlzMykLjScyGQvIGxWpHgdd3y73SSvYEvzc/5/TRMn8lhK5zSIKjK4ewsiGRAlvLfxHCkgD0h8LDaJW2n2QNwU14PrMjOBxT9IDVU80D9hMlcXbJyiqiYEoApiLn3v+A2QxAFeI6FKJdI17PRBAjtYl/bIZLLXfj/88K8J2TjAzdtms0GnqEZtBDdQ1PU3m1LgN2nzqFit67oZbOEBseKgVTDFAehEIMbkyMGuWEwiIEi5DpXNC1HzhNACY5JJ3ZK/YZjyAR2Ar0i6HTUCVhtQqahgQAAlixKLLCZR9MGMHbkN0SdSNUArk7uFpJ+wAdmiSClZPHB0RzkPOndWiRMaSceG+7G8e1AJnuBy3K4lFKXMxVF0gCsHwTmxu8RiEOZZeG363xQ9EMkqgHZJ11Q05YdgxbXmTZAoMdGfuTljMBuGg/0UN7Ho97sVOhALgqaIdSBn4i5AYp4WdCnYbKIlwgp3gouLvUajEUf3HCLpUKakggwjuvA7yYJ8E6M14ONWwsTsBfTvEtzTVqsZ6VrGEfbdwouetdFeXmu16iuOmwEXZH9G1YOYsZXPsxcQspUKHhMPV30qDm/RrwMQoawc2JbzHTckBcnjqiU1mUgU9tkLybVkbVNugwN3jG5w7QS7CaSkX+IE4vukLkbpGVzBudxGygwpeCrBc14rCkcChaNeOarEQVasGB5xdjsAMCztxgZFpEcj7iOTeQ9rE7F1j6oHXi1mRK9x4H0cuDhsCV43BpcmN2FUk0luIlWvISG9lBedmUme0cWH0nYWgygJRQK8inUCaRpcFrimqbdGeIW65X8E7sV0DQQgCnerUvNI1uxdGb+49wwIVzA62CP+3+L/NQD9y1xJGNI6uJinON0z6IM4p4LD3EPcJAP38tDSh1pf8SZXpq3tUabtOuABkQv7iDTtQFUR0mOA+6iuEVp+ozKFKsJpSmY+hUjEoLsOG96BfUIl4um3sNLKxPLbqGW7NKyWiqNJpV3XVemmrgdDmLIWiXWs342ssLrenu+H1fakTRw3A6uvOYtyykicunVuwtI23b+bzebE0kqsEvCEktmziLgGkRajsiaiqYroQ6Dh1dIIiix+spcClIkiCt2pUaLIQ7SojDk55SDhIJeDdxUx1qKMCaK02DPof/H5MWnM7HttAAAAAElFTkSuQmCC"
                                            alt=""></div><!----><!----><!----><!----><!---->
                                </div>
                            </div>
                            <div data-v-2a245038="" data-v-decd48ac="" class="logo"><img data-v-2a245038=""
                                    data-v-decd48ac="" src="{{ asset('') }}static/img/logo11.7b555b58.png"
                                    alt=""></div>
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
                                    <div data-v-2a245038="" data-v-decd48ac="" class="banner">
                                        <div data-v-2a245038=""
                                            class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-autoheight"
                                            data-v-decd48ac="">
                                            <div class="swiper-wrapper"
                                                style="height: 181px; transform: translate3d(-1700px, 0px, 0px); transition-duration: 0ms;">
                                                <div data-v-2a245038="" class="swiper-slide" style="width: 425px;">
                                                    <div data-v-2a245038="" class="item"><img data-v-2a245038=""
                                                            src="{{asset('')}}static/img/7c2c04bc60609a6ea4eea2babd770e1b.png"
                                                            alt=""></div>
                                                </div>
                                                <div data-v-2a245038="" class="swiper-slide" style="width: 425px;">
                                                    <div data-v-2a245038="" class="item"><img data-v-2a245038=""
                                                            src="{{asset('')}}static/img/93b58a4ca388801b3b10a2c7ccfab3eb.jpg"
                                                            alt=""></div>
                                                </div>
                                                <div data-v-2a245038="" class="swiper-slide" style="width: 425px;">
                                                    <div data-v-2a245038="" class="item"><img data-v-2a245038=""
                                                            src="{{asset('')}}static/img/ed92eba5fd824766543c9cc095b0d421.png"
                                                            alt=""></div>
                                                </div>
                                                <div data-v-2a245038="" class="swiper-slide swiper-slide-prev"
                                                    style="width: 425px;">
                                                    <div data-v-2a245038="" class="item"><img data-v-2a245038=""
                                                            src="{{asset('')}}static/img/8a927b72565569f07637be7da13e05f0.png"
                                                            alt=""></div>
                                                </div>
                                                <div data-v-2a245038="" class="swiper-slide swiper-slide-active"
                                                    style="width: 425px;">
                                                    <div data-v-2a245038="" class="item"><img data-v-2a245038=""
                                                            src="{{asset('')}}static/img/1a6490de7f3f5674795bb13a2294e500.png"
                                                            alt=""></div>
                                                </div>
                                                <div data-v-2a245038="" class="swiper-slide swiper-slide-next"
                                                    style="width: 425px;">
                                                    <div data-v-2a245038="" class="item"><img data-v-2a245038=""
                                                            src="{{asset('')}}static/img/5ab063a75c73bb2c043ec57f0c440549.png"
                                                            alt=""></div>
                                                </div>
                                            </div> <span class="swiper-notification" aria-live="assertive"
                                                aria-atomic="true"></span>
                                        </div>
                                    </div>
                                    <div data-v-2a245038="" data-v-decd48ac="" class="itemBox2 border-radius-top">
                                        <div data-v-2a245038="" data-v-decd48ac="" class="container">
                                            <div data-v-2a245038="" data-v-decd48ac="" class="noticeBox">
                                                <div data-v-2a245038="" class="seamless-warp" data-v-decd48ac="">
                                                    <!----> <!---->
                                                    <div
                                                        style="transform: translate(-4302px, 0px); transition: ease-in; overflow: hidden; width: 25343px;">
                                                        <div style="float: left; overflow: hidden;">
                                                            <ul data-v-2a245038="" class="ul-scoll">
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            Lu***one contract funds 11.4 USDT to the
                                                                            platform 3 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****60049 contract funds 10.08 USDT to
                                                                            the platform 3 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            U**c contract funds 9.13 USDT to the
                                                                            platform 3 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****74109 contract funds 9.69 USDT to
                                                                            the platform 3 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****87398 contract funds 9.22 USDT to
                                                                            the platform 3 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****08452 contract funds 53.55 USDT to
                                                                            the platform 7 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****62182 contract funds 59.42 USDT to
                                                                            the platform 30 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****91665 contract funds 9 USDT to the
                                                                            platform 3 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93931 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93863 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93918 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93880 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****35133 contract funds 11.02 USDT to
                                                                            the platform 3 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93731 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93841 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93797 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93815 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93772 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****27271 contract funds 11.28 USDT to
                                                                            the platform 3 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93702 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93511 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93628 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93665 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93647 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93535 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****81454 contract funds 9.13 USDT to
                                                                            the platform 3 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93554 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93417 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93431 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93476 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div style="float: left; overflow: hidden;">
                                                            <ul data-v-2a245038="" class="ul-scoll">
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            Lu***one contract funds 11.4 USDT to the
                                                                            platform 3 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****60049 contract funds 10.08 USDT to
                                                                            the platform 3 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            U**c contract funds 9.13 USDT to the
                                                                            platform 3 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****74109 contract funds 9.69 USDT to
                                                                            the platform 3 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****87398 contract funds 9.22 USDT to
                                                                            the platform 3 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****08452 contract funds 53.55 USDT to
                                                                            the platform 7 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****62182 contract funds 59.42 USDT to
                                                                            the platform 30 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****91665 contract funds 9 USDT to the
                                                                            platform 3 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93931 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93863 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93918 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93880 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****35133 contract funds 11.02 USDT to
                                                                            the platform 3 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93731 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93841 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93797 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93815 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93772 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****27271 contract funds 11.28 USDT to
                                                                            the platform 3 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93702 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93511 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93628 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93665 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93647 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93535 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****81454 contract funds 9.13 USDT to
                                                                            the platform 3 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93554 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93417 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93431 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                                <li data-v-2a245038="">
                                                                    <div data-v-2a245038="" class="item">
                                                                        <div data-v-2a245038="" class="num"> User
                                                                            finp*****93476 contract funds 300 USDT to
                                                                            the platform 2 days </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul data-v-2a245038="" data-v-decd48ac="" class="navs flex vip0">
                                                <li data-v-2a245038="" data-v-decd48ac="">
                                                    <div data-v-2a245038="" data-v-decd48ac=""><img
                                                            data-v-2a245038="" data-v-decd48ac=""
                                                            src="{{asset('')}}static/img/5a26fdd455bb38f3ee8b1e05fba5d77a.png"
                                                            alt="">
                                                        <p data-v-2a245038="" data-v-decd48ac="">Recharge</p>
                                                    </div>
                                                </li>
                                                <li data-v-2a245038="" data-v-decd48ac="">
                                                    <div data-v-2a245038="" data-v-decd48ac=""><img
                                                            data-v-2a245038="" data-v-decd48ac=""
                                                            src="{{asset('')}}static/img/1b7a5f04b0c1deee8df771cd5ecf235c.png"
                                                            alt="">
                                                        <p data-v-2a245038="" data-v-decd48ac="">Share</p>
                                                    </div>
                                                </li>
                                                <li data-v-2a245038="" data-v-decd48ac="">
                                                    <div data-v-2a245038="" data-v-decd48ac=""><img
                                                            data-v-2a245038="" data-v-decd48ac=""
                                                            src="{{asset('')}}static/img/52f7785fd93b8df124b99de899c86d2c.png"
                                                            alt="">
                                                        <p data-v-2a245038="" data-v-decd48ac="">Rewards</p>
                                                    </div>
                                                </li>
                                                <li data-v-2a245038="" data-v-decd48ac="">
                                                    <a href="{{route('user.level-team')}}">
                                                    <div data-v-2a245038="" data-v-decd48ac=""><img
                                                            data-v-2a245038="" data-v-decd48ac=""
                                                            src="{{asset('')}}static/img/d90754a40f81f3da840167c9230e4eb4.png"
                                                            alt="">
                                                        <p data-v-2a245038="" data-v-decd48ac="">my team</p>
                                                    </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div data-v-2a245038="" data-v-decd48ac="" class="itemBox2">
                                        <div data-v-2a245038="" data-v-decd48ac="" class="container"><!---->
                                            <ul data-v-2a245038="" data-v-decd48ac="" class="linkBox vip0">
                                                <li data-v-2a245038="" data-v-decd48ac="" class="bps tips">
                                                    <div data-v-2a245038="" data-v-decd48ac="" class="ico"><img
                                                            data-v-2a245038="" data-v-decd48ac=""
                                                            src="{{ asset('') }}static/img/vip0_ico1.41c05f1a.png"
                                                            alt="">
                                                    </div>
                                                    <div data-v-2a245038="" data-v-decd48ac="" class="name"> White
                                                        Paper </div>
                                                </li>
                                                <li data-v-2a245038="" data-v-decd48ac="" class="jd tips">
                                                    <div data-v-2a245038="" data-v-decd48ac="" class="icos"><img
                                                            data-v-2a245038="" data-v-decd48ac=""
                                                            src="{{ asset('') }}static/img/vip0_ico2.d606c74f.png"
                                                            alt="">
                                                    </div>
                                                    <div data-v-2a245038="" data-v-decd48ac="" class="abs">
                                                        <div data-v-2a245038="" data-v-decd48ac="" class="name">
                                                            Check-in and get rewards</div>
                                                        <div data-v-2a245038="" data-v-decd48ac=""><button
                                                                data-v-2a245038="" data-v-decd48ac="">F Coin
                                                                Center</button></div>
                                                    </div>
                                                </li>
                                                <li data-v-2a245038="" data-v-decd48ac="" class="flex">
                                                    <div data-v-2a245038="" data-v-decd48ac="" class="ico"><img
                                                            data-v-2a245038="" data-v-decd48ac=""
                                                            src="{{ asset('') }}static/img/vip0_ico8.98a59dfc.png"
                                                            alt="">
                                                    </div>
                                                    <div data-v-2a245038="" data-v-decd48ac="" class="flex1">
                                                        <div data-v-2a245038="" data-v-decd48ac="" class="n">
                                                            Benefit Guide</div>
                                                        <p data-v-2a245038="" data-v-decd48ac="">Get more benefits!
                                                        </p>
                                                    </div>
                                                </li>
                                                <li data-v-2a245038="" data-v-decd48ac="" class="flex">
                                                    <div data-v-2a245038="" data-v-decd48ac="" class="ico"><img
                                                            data-v-2a245038="" data-v-decd48ac=""
                                                            src="{{ asset('') }}static/img/vip0_ico4.9ff2a10d.png"
                                                            alt="">
                                                    </div>
                                                    <div data-v-2a245038="" data-v-decd48ac="" class="flex1">
                                                        <div data-v-2a245038="" data-v-decd48ac="" class="n">
                                                            Credit improvement</div>
                                                        <p data-v-2a245038="" data-v-decd48ac="">Get more benefits</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div data-v-2a245038="" data-v-decd48ac="" class="itemBox2">
                                        <div data-v-6d57ba0e="" data-v-2a245038="" class="video_list"
                                            data-v-decd48ac="">
                                            <div data-v-6d57ba0e=""
                                                class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-autoheight">
                                                <div class="swiper-wrapper"
                                                    style="transform: translate3d(0px, 0px, 0px); height: 212px;">
                                                    <div data-v-6d57ba0e="" class="swiper-slide swiper-slide-active"
                                                        style="width: 401px;">
                                                        <div data-v-6d57ba0e="" class="video">
                                                            <div data-v-55574732="" data-v-6d57ba0e=""
                                                                class="video_box"><video data-v-55574732=""
                                                                    controls="controls"
                                                                    src="{{asset('')}}static/img/a12dda072fbc5e38deb1a2d8b3a80888_raw.mp4"></video><img
                                                                    data-v-55574732=""
                                                                    src="{{asset('')}}static/img/e287daebc5fd5ae1e7b6d95b52e6f2f7.jpg"
                                                                    alt="" class="maskLayer"><img
                                                                    data-v-55574732=""
                                                                    src="{{ asset('') }}static/img/play_icon.6d066898.png"
                                                                    alt="" class="play_icon"></div>
                                                        </div>
                                                    </div>
                                                </div> <span class="swiper-notification" aria-live="assertive"
                                                    aria-atomic="true"></span>
                                            </div>
                                            <div data-v-6d57ba0e=""
                                                class="swiper-pagination swiper-pagination-bullets"><span
                                                    class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-2a245038="" data-v-decd48ac="" class="itemBox2" style="">
                                        <div data-v-2a245038="" data-v-decd48ac="" class="container">
                                            <div data-v-2a245038="" data-v-decd48ac="" class="title1 flex">
                                                <div data-v-2a245038="" data-v-decd48ac="" class="flex1">About us
                                                </div>
                                            </div>
                                            <ul data-v-2a245038="" data-v-decd48ac="" class="AboutLIst vip0">
                                                <li data-v-2a245038="" data-v-decd48ac=""><img data-v-2a245038=""
                                                        data-v-decd48ac=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAL6SURBVHgB7Zn/ddMwEMe/QP7gP7JBxQSUCWI2YIQwQbNBxAQNE9QbABPEnSDtBDETNPzJX0WHZHqSz45ky+Q9ms9796LW+nGnO8knGThz5nnzAvkojFwaWbjfuRPiYKR2cm+kcnJySMG1kQcjj4myN3JjROEEkOLXSFe6SwYbMiSEVrCzPheeNeFxBxsuHAUbWoWRd0Jbqv/ZSIkJkWadwkdDNqgLZWQDG0Zhf9eYAFJui/GKS/1qtI3YYVy/LXZoL0CFfCi0vbFFJsKwqZB5dhySl0eH0xJt5btI3Xm+dvQTGrHqGbN3F1KuM+X+ro28h30pSTy6Orc4zgXsblQa+RQ8I0/s2Lg03lt0j9tJCX8m1JH6zX6e2r/URsF/OSaHkoKvvI5ow5Wpkf4iC9FBHXHdzSCjWbmG3bNTIZffR9alEFnCf4nRmFd4UnyFuIn8wx7p7gs9UGE8Gv57J4oCabHfMIUB80CXIqzwUmjEK0k5zb/k4HRouAwrSAbwSjFbooSCMFsD4ToU4UPJgAtWvkMaS/Tn/wrpcB1aWay0CylWrhHPMW8tYF+MHxL75XWjUpjeRTOCJYZ5ooCvk8cM+SDFvsPu1zwF4RzwlKKkekJk1jHIkGxTGXnjyj+N/BDq8P9pWK+k0MqHJANo8DlTaggfkQ/FynX4UNqFevfdSGrkuzbhOrS8KhlQsfICp4fr0NrWYzwwxekrFgXfA1VYocsDfLH0nogCcht7xco1EsJSw88CYxQrXf018q0BnhXfpDQMs0Ad2a5E3Pk5Fo30rPgvG/heUJHtSuQzgNBInP0G8gI/l+4RF0rNobxCPgavLVrAPJS2ke1owCHH0EngodQYMeXF1hoTQB3nyO27UPB3nOxGNHEdHlLWGH+5S308dPSdnQ3kkxbdXKj4bqK/7Bw1YsgHjqXrWAnPKA25Rf8HjgXSkkQN++EjKwrtq8cpZZJw4obsgdMY8QrjoKTvm5EvsKFD+TodiH4Zee0kF4X7HXrVc+bMf8lvKRV6GdDRw4UAAAAASUVORK5CYII="
                                                        alt="">
                                                    <div data-v-2a245038="" data-v-decd48ac="" class="flex1"> About
                                                        Finpact Limited </div><i data-v-2a245038="" data-v-decd48ac=""
                                                        class="van-icon van-icon-arrow"><!----></i>
                                                </li>
                                                <li data-v-2a245038="" data-v-decd48ac=""><img data-v-2a245038=""
                                                        data-v-decd48ac=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAK/SURBVHgB7ZmLcdswDIb/9DqANwgzQbSBuUG8QTWCO4G1QdwJrBHaCeROUGcCqROoGzRETJ0pmS/QdB4XfXc48RQJBECAhBxgZuZzc4O8LJQUSpZKpB53Sg5KfuvrARm51AGBk6FLfQ3xD2OH9vpeEhwHhuiaEV4gD+RIh7FTUYQckEpWSu71OBYzXRb6XdIh4lW8OPGkrz+RwE7J/wjp9QRrhFdF4BiQrTasj5zjEUw2HmUHbUAJXkRdUEqS87XW7Zq3AoPWePGPflkiX877GFKumtjRxyoQGHsu8HYsELDlS1jHy+7wVgS31xgH3jWzAx5od6HCaxF3QmdDYFw4qdSGjh3S8RbxV+SDDqgHYxIz6lJJM3n+OzI3dgMC/BVoEHeimtJE6r54Gw1Bx7wEnydkIEcKrYzxD5waL2oPHvSYmrvKeG5oqa+CAC+FzGdNZ2p8kCL+q+RWjymdhuK9N56he5Uedzh2oh2uhABvBdbgFzDJBnF4VwAZHCAqpDmxjtDtdeDG4UAbeAaO96gGhpabCnhIJyrYX3r8DSdDOiV3frWjIN4hIvUExl6nfgPUsBfxCvErHGynbUU8bWEF4ra8AmNnbyeGSD1eGvc7+BHw2+akAy9PH5FWA9uAXnODaMFgC96R34Bv/D5Cbwt7GgaRk8nKwPOFNsgUc/LeuF9jfOC5KCc2SDBpJgYI8KiRGD2cdkLOap1RYBwB+nWCsyMV2ogevA+ahZ7Lu/vEMj1luU5wsRlf4UJqnDshkB+Bc+NrZMAWlRZ5nZAY5/wQqGyQEzXSGzKfXtsZUuNKqVpZJqPIleAjcR71LDkfonRM3CBur5awH3w90j5NkxCwp9TgiO2gknCf2Du8zg/HVqNsq2Gm1gbu/wPs8YpR91HC7YjPuXdHiWNUXYbT3yQ+AALHGhlaCepuJWZmZrLzDIWxjh7dRiNdAAAAAElFTkSuQmCC"
                                                        alt="">
                                                    <div data-v-2a245038="" data-v-decd48ac="" class="flex1"> How
                                                        does Finpact Limited ensure the safety of allies’ funds? </div>
                                                    <i data-v-2a245038="" data-v-decd48ac=""
                                                        class="van-icon van-icon-arrow"><!----></i>
                                                </li>
                                                <li data-v-2a245038="" data-v-decd48ac=""><img data-v-2a245038=""
                                                        data-v-decd48ac=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAIsSURBVHgB7ZiLUcMwDIZ/OAbICB6hbKAR6ASUCSgTFCZomCBsABuUDVomqDdomQAs7NzZbh5O4jy4y3en6yW2GymSJUfAzMzMzNQhJamSo5KfgWSvJFMi0IFEyRbDKV0mW6NLY+X3AMZW3vZIoRFXxfr/Wb22rqWSVyUHDMNCySPcEOIwfgpZLOBa/4YWLoxAYp5t60IhC+1FR4yjfE4CN3mkIYvs2F9jfFgH+4XW0thlJfDb20C/NYH2EFydaollwLv1Pzu0hzCCAYTLVEhoB6HCgGv0wybwXmduEAcBnbvzXyqYw/cyJV/QdYWll7rS1O0blFdQzhq7ivEQrxB63gNVR4AViveDLXV1xl/vECOEOAwW1vUZ+tghoYsiszRz7uGmVGnmtybGJl4aRXL4jeZHkJwP6HAS1r2zWRudNqlP4PJ7wfbKwhs7eeNVEAaqA4TL2BZGEm/sDuEQBqoD9mbk8NhAe4VlCzfWBSIRqw4wdkiwMfZBcOXNFYhETA+ExjQjEImYBkjvmkPmRclDwVivtN3EAjpdSiXPcPdEYu5xzfhEMw8QBspCfUEYKAuNQpcslHcOuvIN/dUmEYnQEPIrbxc5VTyH0FMIxexWtD7QdQmhW+hiFcOQoHZJKBKYbFtlH7IghftFNaXGVhayiOBumgzjtRYzTxfhTypr7rIX7BQpMX5zl58fHNL/pr1eZ0QKYGzlU3QMYQH9fXvAcEpLozhhZmZmZtL8Av/vqTZeMqAlAAAAAElFTkSuQmCC"
                                                        alt="">
                                                    <div data-v-2a245038="" data-v-decd48ac="" class="flex1">
                                                        Finpact Limited Certificate Display </div><i data-v-2a245038=""
                                                        data-v-decd48ac="" class="van-icon van-icon-arrow"><!----></i>
                                                </li>
                                                <li data-v-2a245038="" data-v-decd48ac=""><img data-v-2a245038=""
                                                        data-v-decd48ac=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAKBSURBVHgB7ZjtUeMwEIbfu7n/Rwnq4LgKEBVAB7iEdBBTAekAdwBUkFAB6cCmAqCCoMXSZC3iWCtbtpnJM7ODkPW10n5IAU6cmBVnRhZG1kZKIzsrL0bujVxjxtDC37BfdJuQYhozgnaddnwnlCVmApkHXxidwspIhnqntS1v8F2JBSZmieaCNkbUkfbkA6XX5xwTodBcyIOgH/eVNSaiQNMxVXjXr5PgymtMALf9O8jh/XMkhKIM2bpvu33teHVkPJc3FHpyg7DYfgY5WcC4NHd0pFoETJBaASc3EKLQ3Hkq56idT1vp64TchF7YuNp+8+cXbVLhdT5k4xX6OWHJ+q8OfD9HU4kcAroiTInvvlEKxbf18sA8uTd+MF3msUskPtcd3/Eb8+a9q8EfxHGJmRCrwAYzIbUJKQyQTY+RUgF3dSbRSESsCbVByUbZv5rVX3jttghw0D7EZNklwu5Nkpiu0RFGhzoBWnyOCRhKgZyVb1FfMzT2l7DCyDNrs0ViJCak0LyUOTJWnyEOjRFMqELtkOS4dAF7sP8r1oZOghz5A/XuF0iM1IklbwfnxCpgXI2OE2gjJgplOP7s9GUdMKbGiAo4XC7gp7Kwdf4dv+uRojHBbZTsv0IzUbk6vz7mKRpEbCIrmfhPQr8uJJlpjGhCEidue6b6aIyUiYlbNJX9i/0iKyOvtkxhdGXrktHHiR0Zfkgia+PRLoAcdYNEhCgQGyko2mRITFsYfWXlyX6/N1yxsugCmEMeMYbGT3r3hxr9aulMZlNibz5kDoWRJ6SH5vyHOnvz+f9DGLkyyGJ7Sun1C3XoMzGFvGGAQKBQm88WGG3hFWo/THZXOnHC8gmS0uWyNOMWIwAAAABJRU5ErkJggg=="
                                                        alt="">
                                                    <div data-v-2a245038="" data-v-decd48ac="" class="flex1"> The
                                                        company's vision-level future outlook </div><i
                                                        data-v-2a245038="" data-v-decd48ac=""
                                                        class="van-icon van-icon-arrow"><!----></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!---->
                                    <div data-v-2a245038="" data-v-decd48ac="" class="itemBox2">
                                        <div data-v-2a245038="" data-v-decd48ac="" class="container">
                                            <div data-v-2a245038="" data-v-decd48ac="" class="title1 flex">
                                                <div data-v-2a245038="" data-v-decd48ac="" class="flex1">Community
                                                </div>
                                            </div>
                                            <ul data-v-2a245038="" data-v-decd48ac="" class="bbsList">
                                                <li data-v-2a245038="" data-v-decd48ac=""><img data-v-2a245038=""
                                                        data-v-decd48ac=""
                                                        src="{{asset('')}}static/img/ab681326c1d447ff4ccf258c2543b594.png"
                                                        alt=""></li>
                                                <li data-v-2a245038="" data-v-decd48ac=""><img data-v-2a245038=""
                                                        data-v-decd48ac=""
                                                        src="{{asset('')}}static/img/35c26f03cd70d2b27151eae5a2eb83d7.png"
                                                        alt=""></li>
                                                <li data-v-2a245038="" data-v-decd48ac=""><img data-v-2a245038=""
                                                        data-v-decd48ac=""
                                                        src="{{asset('')}}static/img/333a876f752578575e698732094bddf9.jpg"
                                                        alt=""></li>
                                                <li data-v-2a245038="" data-v-decd48ac=""><img data-v-2a245038=""
                                                        data-v-decd48ac=""
                                                        src="{{asset('')}}static/img/6732ae6241cb8133a511ca14de951204.png"
                                                        alt=""></li>
                                                <li data-v-2a245038="" data-v-decd48ac=""><img data-v-2a245038=""
                                                        data-v-decd48ac=""
                                                        src="{{asset('')}}static/img/cd1f2c3affb0e3473e8f82a690a0f184.png"
                                                        alt=""></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div data-v-7e78ca37="" data-v-2a245038="" data-v-decd48ac=""></div>
                                    <div data-v-38e7bdcd="" data-v-2a245038="" class="robot" data-v-decd48ac=""
                                        style="transform: translate(-582px, 0px);">
                                        <div data-v-38e7bdcd="" class="img_box">
                                            <div data-v-38e7bdcd="" class="maskLayer"></div><img data-v-38e7bdcd=""
                                                src="{{ asset('') }}static/img/icon-welfare.0156163e.png"
                                                alt="">
                                        </div>
                                        <div data-v-38e7bdcd="" style="width: 1rem; height: 0px;"></div>
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
    <script src="{{ asset('') }}js1744307594169/chunk-vue.a3b4853b.1744307594169.chunk.js"></script>
    <script src="{{ asset('') }}js1744307594169/chunk-echarts.cc04be28.1744307594169.chunk.js"></script>
    <script src="{{ asset('') }}js1744307594169/chunk-vant.81420f35.1744307594169.chunk.js"></script>
    <script src="{{ asset('') }}js1744307594169/chunk-vendors.374f8b51.1744307594169.chunk.js"></script>
</body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>
