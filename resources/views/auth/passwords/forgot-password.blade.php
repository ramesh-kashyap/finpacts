<html style="font-size: 50px;" translate="no">

<head>
    <meta charset="utf-8">
    <title>Forgot password</title>
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

    <link href="{{ asset('') }}static/css/app.c3049ff2.css" rel="preload" as="style">
    <link href="{{ asset('') }}static/css/chunk-vant.d14f5539.css" rel="preload" as="style">
    <link href="{{ asset('') }}static/css/chunk-vendors.794edbf9.css" rel="preload" as="style">
    <link href="{{ asset('') }}static/css/chunk-vant.d14f5539.css" rel="stylesheet">
    <link href="{{ asset('') }}static/css/chunk-vendors.794edbf9.css" rel="stylesheet">
    <link href="{{ asset('') }}static/css/app.c3049ff2.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-e73e2a42.32e65bef.css">
    <script charset="utf-8" src="/js1744307594169/chunk-e73e2a42.4bd31143.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-5576a184.9f52f39a.css">
    <script charset="utf-8" src="/js1744307594169/chunk-5576a184.c49d8c14.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-7cbde8e8.788c4ae8.css">
    <script charset="utf-8" src="/js1744307594169/chunk-7cbde8e8.43936207.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-4f89519c.2a0f3cea.css">
    <script charset="utf-8" src="/js1744307594169/chunk-4f89519c.5238fa59.1744307594169.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-3525d94c.2ba0cbc0.css">
    <script charset="utf-8" src="/js1744307594169/chunk-3525d94c.e40fcb0e.1744307594169.chunk.js"></script>
</head>

<body class="mein_cn">
@include('partials.notify')
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
                    <div data-v-decd48ac="" data-v-e2d76358="" class="page">
                        <div data-v-decd48ac="" class="headers on">
                            <div data-v-29c52665="" data-v-e2d76358="" class="head head0" data-v-decd48ac="">
                                <div data-v-29c52665="" class="container flex">
                                    <div data-v-29c52665="" class="back"><img data-v-29c52665=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAE+SURBVHgB3diLDYIwEAbgwy7gCLoBbOIGtiM4gbqBE0DdSCcQJ5AN8GrAIPIobXNH+JOG0jbhCyVpC8DSIqVcmwKBsgKPKKX2URQ9sLwQdYQAicAxBoMX3Wwry3Krtc7BI05vqAtTpQDPTAb1YXDaFL4db9CkKRvCpGmqIUCsQRQYaxAVxgpEiRkFUWMGQRyYXhAXphPEifkDcWN+QHPAfEEDaxNVciynLMuu9Vp2At5ssFxMpQYF22B55LMwf0C4jzkAbwr8Vs+m8v2occcnsTHrGCzN3AJRRF25YeI4fiJq1xqzS5Ikx+47EEQ0b+aAEu0GbpToauREib4OLpQY6uRAibEB1KhREDXKCkSJsgZRoZzO9j3LTFGd7b1Or05ne3yoxoerVnOQHYPz75g2yqzWIc723ql+WG1gqXkDGBPa7OTyg7AAAAAASUVORK5CYII="
                                            alt=""></div>
                                    <div data-v-29c52665="" class="name tac">Forgot password</div>
                                    <div data-v-29c52665="" class="flex1"></div>                                    
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('forgot_submit') }}" method="POST">
                        @csrf
                        <div data-v-decd48ac="" id="scroll" class="content-container"
                            style="padding-top: 44px; padding-bottom: 76px;">
                            <div data-v-decd48ac="" id="content" class="content-scroll">
                                <div data-v-e2d76358="" data-v-decd48ac="" class="container">
                                    <ul data-v-e2d76358="" data-v-decd48ac="" class="tab"></ul>
                                    <ul data-v-e2d76358="" data-v-decd48ac="" class="line">                                        
                                        <li data-v-e2d76358="" data-v-decd48ac="" class="">
                                            <div data-v-e2d76358="" data-v-decd48ac="" class="name">email</div>
                                            <div data-v-e2d76358="" data-v-decd48ac="" class="flex">
                                                <!---->
                                                <div data-v-e2d76358="" data-v-decd48ac="" class="flex1">
                                                    <!---->
                                                    <div data-v-e2d76358="" data-v-decd48ac="">
                                                        <input data-v-e2d76358="" data-v-decd48ac="" type="text" id="emailId" name="email" placeholder="Please enter your email address">
                                                    </div>
                                                </div>
                                                <div data-v-e2d76358="" data-v-decd48ac="" class="arr"><img
                                                        data-v-e2d76358="" data-v-decd48ac=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAT1SURBVHgB3Zs/etpAEMUHbNchJ4hyA9KlC2ncJjcIKV3YmBPEdOkA+wC2b5DWVUiXzuQEkU8Q0vtP3luv+CQiIa00K0C/77MRQiw7T7O7s7OrlnhmPB4HeOm12+1uq9V69fT0xPcdHAfx63A+xMsC50Mc/3p8fJzj/Xw4HIbikZZ4AEbT4I84/LBqqCsUBmXMHh4eriHGTJRREwBGd2D0AIenqHBHPEAx4BkjHM60PKOyAHUYvgqEYFO5gldMqwpRSQAYfwrjv9Rl+CqRR0CEKylJKQHYse3t7V3isCdbgBXifRlvaIsj9q7fypYYT9jR4obcsm7iiJMHTCaTMYx3/pE6gTecDQaDUdHrCwsA4y9hfF92g6uTk5PPRS4sJMB0Or2Fm3Vlh4AnzOEJb/Kuy+0DeOd3zXjCOp+fn1/mXbdWANz5Lzvk9mn0IcJ43QV7WR/Y3v6r7D5vDw8P/97c3PxM+zC1D+A4z6FuUwGOBxaIGt+kxQmpTQDGf2+Q8aRjA7f/+E8A3P1+1RncltJLC5QSTcC6/veGCkDYFF6jKSyiEwkPgOGDBhtPOquR7NID7ASHMX6T2n4aCS+Ie0BPdI2/449JdVjGL9Ej4QVLATivFx1CKoxYPMDfS7wfSnk+swz8dVkmyxYF2NSjYyMAc3habR8VTczLUfkJzhWamKxA46+iNyyTZYsOHdrMAyOAVrgLEVOzuMzYOIqQMD5WTijPTasyNmm7bALvRAGb8k7FQYRU42O8EAVwsz6YV9v7/xYlIEIf09DrrM8ZaGVFZZJjPAMZfHft5MYF9iv0ANWpLrO1mEV+yvp8jSesNZ5lahpPUB7XL9rqc/0SIuQazzJFGXhrV90DIhxE2IjxlqDlO92V1yesw7PxZtRq499L8UieJ2Th23iCm9NhE3glnnEVoQ7jLYHzwkhZiopQo/GG2gQgMCw3DY8lLi9L9lnUKUBehGcoETZXggKoxNY5FDI+okYRwjZ6wj/iFyfjI+oQAS1y4dsDcoOckmGzCuhv7ihAKH4oFOFVmDtoYAKhuejjFN5uSgTMg+ZtFDwTXYZlYvtNiHB/fz83Yy4WEEPRiQgXNg+YSpEgJ2/ugLqy09ZI3oaoq8kH8Ee/iQ6ZWeCiEV6eJ9gNlRrM+M8IgN5QS4DA7gxN4BreZonAsrVmrijHeJkRwO7A1Mjhm4XVuAhlY3t+J76WFy3biQ7h8fHxzPxOdAYVPcOPaq0NmC0qwoRDxVVmboqU5z3EgeixHKWWcwE0g4koeQGhq2ossbMMZeMX8ZFvKQDXyqD2VBoObLyOr10kZoPaXrCFhNbGJQkB7Ipp4U2GO8hodeUqNfmAYIO9bU+ahQl8Vk+mJkRsyNmkprDIWlhNFcC6SZOawihrJ3lmSozL2k0YFWDDiLZkfZ6bgESAxDm7c15/G+CQh4lVf901jd0szTwHwt3qm6UJd11TTdkRWNcixpPCaXG6EtuTbDnst/LcPo7TugAKPpPnTU/bOESyTkPU0emJlioPTTFYCmQ7+IFxvl/moalKy1CIGPt44RQ6kM1gQvd1w1weGg9OMlFxaofKunaZmpkrJzbxfb9l0Hx0ls2iJ349Qs3wCC8rsRcXFz1Uktvuuf0ukGrcMWkLL/sWpbE08b4UTc/Y39/vQpCuDaYCeW4qq2n4aG9xaJ8Ynx8cHMyOjo5C8cg/uhSkdRdZ2YMAAAAASUVORK5CYII="
                                                        alt=""></div>
                                            </div>
                                        </li>
                                        <li data-v-e2d76358="" data-v-decd48ac="" class="">
                                            <div data-v-e2d76358="" data-v-decd48ac="" class="name"><span
                                                    data-v-e2d76358="" data-v-decd48ac="">Verification code</span></div>
                                            <div data-v-e2d76358="" data-v-decd48ac="" class="flex">
                                                <div data-v-e2d76358="" data-v-decd48ac="" class="flex1"><input
                                                        data-v-e2d76358="" data-v-decd48ac="" type="text" name="code"
                                                        placeholder="Please enter the verification code"></div>
                                                <div data-v-e2d76358="" data-v-decd48ac="" class="code code-btn" > Send </div>
                                                <div data-v-e2d76358="" data-v-decd48ac="" class="code resend-btn"
                                                    style="display: none;">
                                                    <div data-v-e2d76358="" class="van-count-down" data-v-decd48ac="">
                                                        <span data-v-e2d76358="">53 <var
                                                                data-v-e2d76358="">s</var></span></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-v-e2d76358="" data-v-decd48ac="" class="">
                                            <div data-v-e2d76358="" data-v-decd48ac="" class="name">New password</div>
                                            <div data-v-e2d76358="" data-v-decd48ac="" class="flex">
                                                <div data-v-e2d76358="" data-v-decd48ac="" class="flex1"><input
                                                        data-v-e2d76358="" data-v-decd48ac=""  id="passwordInput"
                                                        placeholder="Please enter a new password" name="password" type="password"></div>
                                                <div data-v-e2d76358="" data-v-decd48ac="" class="arr" onclick="togglePassword()"><img  id="eyeIcon" 
                                                        data-v-e2d76358="" data-v-decd48ac=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAJ/SURBVHgB7VfBdZtAEB0luUcl4A5IBcEnPZ2iVJC4gqAKjCsQVBC5Ais36WRSQdxBNh2oA+V/M9gIA7NI4sZ/b71+Yvn7d3bm7yIyYsSIEYNiImdgtVqF6CK0YDKZfGSvj/aHw+Efeof2tFwuczkRvQVCVIAuhqBv6Keerzm0HKLvINZJD3gLhDCKSVXYOVj3EeolEOIWEPZT/CNmwUEkNC431sB31oAsy24h7kEuJ45gzj6Q2xr4vushCbDSRIZDNJ/PZbvd/m4b0LrF2FYWwkpssGIz9LkUxcBIB2gL33zV7U7FVyArFeR/xSa+RxeDfN/B8yiv9tMGLvIaPE/1Bx+aRiupJS4DYVwVI4UnUiy9z7Hh92sPkVMtwk/1B2+KRBM3kG44tESFTdM0fWTEOQmTn/+XBUCRWMyN2AjBlXQKZBRAFhtEoj72vK1a4VHDmIR5rCJzKXK0E+D6oX7bLFCKqPjYyXOugCxqEleZ8LYi+JfY4Nxxq0AQfhEPVJI5MoZO9bwmnHiAUZQ2gQNjLyfgSKD6mQmtWCI3hrpKtEPxw9HxV48gzdJnpd/5x0r+6oI904d+eCdtAlmZPlHkCVFWG8Z/VcOuT/RyOljFVEK91R3N1TQQvvZH7C1Zx3H84m+67XyHwjelDfU4TRz4ruo/th11oZJalrPRSLkWnkhPiMDgYfSumngucVlwUtyW7+XVSkK9KCw83u9/WaiITKpmOwT0VErannfeB3e7XT6bzaBxEskAsMQRfa783O5ALgNW+c1FrvwEiXhfa7CTU7DWgjDFEad+djI3P4t/RPe6uHSwz84mqAHT+wJtpS05KU4k9md9uI8YMWLEwPgPjJRCnnYugEEAAAAASUVORK5CYII=">
                                                </div>
                                            </div>
                                        </li>
                                        <li data-v-e2d76358="" data-v-decd48ac="" class="">
                                            <div data-v-e2d76358="" data-v-decd48ac="" class="name">Password
                                                confirmation</div>
                                            <div data-v-e2d76358="" data-v-decd48ac="" class="flex">
                                                <div data-v-e2d76358="" data-v-decd48ac="" class="flex1"><input
                                                        data-v-e2d76358="" data-v-decd48ac="" name="password_confirmation"
                                                        placeholder="Please enter the new password again" id="passwordInput2"
                                                        type="password"></div>
                                                <div data-v-e2d76358="" data-v-decd48ac="" class="arr"  onclick="togglePassword2()"><img
                                                        data-v-e2d76358="" data-v-decd48ac="" id="eyeIcon2" 
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAJ/SURBVHgB7VfBdZtAEB0luUcl4A5IBcEnPZ2iVJC4gqAKjCsQVBC5Ais36WRSQdxBNh2oA+V/M9gIA7NI4sZ/b71+Yvn7d3bm7yIyYsSIEYNiImdgtVqF6CK0YDKZfGSvj/aHw+Efeof2tFwuczkRvQVCVIAuhqBv6Keerzm0HKLvINZJD3gLhDCKSVXYOVj3EeolEOIWEPZT/CNmwUEkNC431sB31oAsy24h7kEuJ45gzj6Q2xr4vushCbDSRIZDNJ/PZbvd/m4b0LrF2FYWwkpssGIz9LkUxcBIB2gL33zV7U7FVyArFeR/xSa+RxeDfN/B8yiv9tMGLvIaPE/1Bx+aRiupJS4DYVwVI4UnUiy9z7Hh92sPkVMtwk/1B2+KRBM3kG44tESFTdM0fWTEOQmTn/+XBUCRWMyN2AjBlXQKZBRAFhtEoj72vK1a4VHDmIR5rCJzKXK0E+D6oX7bLFCKqPjYyXOugCxqEleZ8LYi+JfY4Nxxq0AQfhEPVJI5MoZO9bwmnHiAUZQ2gQNjLyfgSKD6mQmtWCI3hrpKtEPxw9HxV48gzdJnpd/5x0r+6oI904d+eCdtAlmZPlHkCVFWG8Z/VcOuT/RyOljFVEK91R3N1TQQvvZH7C1Zx3H84m+67XyHwjelDfU4TRz4ruo/th11oZJalrPRSLkWnkhPiMDgYfSumngucVlwUtyW7+XVSkK9KCw83u9/WaiITKpmOwT0VErannfeB3e7XT6bzaBxEskAsMQRfa783O5ALgNW+c1FrvwEiXhfa7CTU7DWgjDFEad+djI3P4t/RPe6uHSwz84mqAHT+wJtpS05KU4k9md9uI8YMWLEwPgPjJRCnnYugEEAAAAASUVORK5CYII=">
                                                </div>
                                            </div>
                                        </li>
                                        <li data-v-e2d76358="" data-v-decd48ac="" class="err"></li>                                        
                                    </ul>
                                </div>
                                <!---->
                            </div>
                        </div>
                        <div data-v-decd48ac="" class="footer">
                            <div data-v-e2d76358="" data-v-decd48ac="" class="go"><button data-v-e2d76358=""
                                    data-v-decd48ac="" class="btn on" type="submit">OK</button></div>
                        </div>
                        </form>
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

    <script>
        function togglePassword() {
          const input = document.getElementById("passwordInput");
          const icon = document.getElementById("eyeIcon");
      
          if (input.type === "password") {
            input.type = "text";
            icon.src = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAJdSURBVHgB7ZfdUeswEIXXGd5vSjAd+HYAFVw6uFABpgJMBbErIFRAOsBUQDrAdOAOwp7xhhFC1q5CQnjwmdEotqXdTz+7UogmTTquMjqiFotFnmXZ7WazuWH1oTZHAxS4J/6Zc1kz5HkIckZHkAcHFVK+6IS+5whGz+CIHf5xHPY8I29cd1zWPDNtBI647ZXbxlXyEsMBVyU7+c/13Nit49IyyAP3uw/ALcc6mgEZDDC1gO1FGhxkAmS4Cxm5dcZUWeAgNUiaprlluEc6AJysSlQzDY6NVbRHOXAIlhf4iLUfXWI2gEBYkC5EbMN1S0MwYFZy2asXEbiPSJZEXZMVUAy8kiJEJVeln2AjqWQZ+iaDRKJe+z6CeVAMaHANGyz99zvAQXMJwr++vS97UPZETnF1XCraD9xWBbepKAYII2ywJEXc5i5lWeWxJmXg3P/aj2x/BiuypZN1IhzUki74LkcB2ck/MsjdzEY4qCODMIs0BpiqBDiopx30KYoRmbhAap3kwkAJcFBBNq3cB38GsZHVkWIQiXDW7YN8eEdjgIhMORU0XabA4bJBw70xKsmtnfsueJLUdf1CxiUxwGn5b6uuLMtT/+VszCkZltoAd2aEg63z0PudLwvuCUFD7sLm7uRzEbosRGylXRYcyCoU1QnHlwUOp1I19l3Lg0vylvon4aDRf3UOwPwAcL3YWmkNZwpcfgC4Jds6tcBBJylwzvMztyGyQ/Zyua39PKcpCwCu3KwfSyVIIzTky1zKdjt0NOxd1G3opvwdwLnMYGH9a/jjAqTMzqRJk3673gEm67MuunyD5QAAAABJRU5ErkJggg=="; // eye closed
          } else {
            input.type = "password";
            icon.src = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAJ/SURBVHgB7VfBdZtAEB0luUcl4A5IBcEnPZ2iVJC4gqAKjCsQVBC5Ais36WRSQdxBNh2oA+V/M9gIA7NI4sZ/b71+Yvn7d3bm7yIyYsSIEYNiImdgtVqF6CK0YDKZfGSvj/aHw+Efeof2tFwuczkRvQVCVIAuhqBv6Keerzm0HKLvINZJD3gLhDCKSVXYOVj3EeolEOIWEPZT/CNmwUEkNC431sB31oAsy24h7kEuJ45gzj6Q2xr4vushCbDSRIZDNJ/PZbvd/m4b0LrF2FYWwkpssGIz9LkUxcBIB2gL33zV7U7FVyArFeR/xSa+RxeDfN/B8yiv9tMGLvIaPE/1Bx+aRiupJS4DYVwVI4UnUiy9z7Hh92sPkVMtwk/1B2+KRBM3kG44tESFTdM0fWTEOQmTn/+XBUCRWMyN2AjBlXQKZBRAFhtEoj72vK1a4VHDmIR5rCJzKXK0E+D6oX7bLFCKqPjYyXOugCxqEleZ8LYi+JfY4Nxxq0AQfhEPVJI5MoZO9bwmnHiAUZQ2gQNjLyfgSKD6mQmtWCI3hrpKtEPxw9HxV48gzdJnpd/5x0r+6oI904d+eCdtAlmZPlHkCVFWG8Z/VcOuT/RyOljFVEK91R3N1TQQvvZH7C1Zx3H84m+67XyHwjelDfU4TRz4ruo/th11oZJalrPRSLkWnkhPiMDgYfSumngucVlwUtyW7+XVSkK9KCw83u9/WaiITKpmOwT0VErannfeB3e7XT6bzaBxEskAsMQRfa783O5ALgNW+c1FrvwEiXhfa7CTU7DWgjDFEad+djI3P4t/RPe6uHSwz84mqAHT+wJtpS05KU4k9md9uI8YMWLEwPgPjJRCnnYugEEAAAAASUVORK5CYII="; // eye open
          }
        }
          function togglePassword2() {
          const input = document.getElementById("passwordInput2");
          const icon = document.getElementById("eyeIcon2");
      
          if (input.type === "password") {
            input.type = "text";
            icon.src = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAJdSURBVHgB7ZfdUeswEIXXGd5vSjAd+HYAFVw6uFABpgJMBbErIFRAOsBUQDrAdOAOwp7xhhFC1q5CQnjwmdEotqXdTz+7UogmTTquMjqiFotFnmXZ7WazuWH1oTZHAxS4J/6Zc1kz5HkIckZHkAcHFVK+6IS+5whGz+CIHf5xHPY8I29cd1zWPDNtBI647ZXbxlXyEsMBVyU7+c/13Nit49IyyAP3uw/ALcc6mgEZDDC1gO1FGhxkAmS4Cxm5dcZUWeAgNUiaprlluEc6AJysSlQzDY6NVbRHOXAIlhf4iLUfXWI2gEBYkC5EbMN1S0MwYFZy2asXEbiPSJZEXZMVUAy8kiJEJVeln2AjqWQZ+iaDRKJe+z6CeVAMaHANGyz99zvAQXMJwr++vS97UPZETnF1XCraD9xWBbepKAYII2ywJEXc5i5lWeWxJmXg3P/aj2x/BiuypZN1IhzUki74LkcB2ck/MsjdzEY4qCODMIs0BpiqBDiopx30KYoRmbhAap3kwkAJcFBBNq3cB38GsZHVkWIQiXDW7YN8eEdjgIhMORU0XabA4bJBw70xKsmtnfsueJLUdf1CxiUxwGn5b6uuLMtT/+VszCkZltoAd2aEg63z0PudLwvuCUFD7sLm7uRzEbosRGylXRYcyCoU1QnHlwUOp1I19l3Lg0vylvon4aDRf3UOwPwAcL3YWmkNZwpcfgC4Jds6tcBBJylwzvMztyGyQ/Zyua39PKcpCwCu3KwfSyVIIzTky1zKdjt0NOxd1G3opvwdwLnMYGH9a/jjAqTMzqRJk3673gEm67MuunyD5QAAAABJRU5ErkJggg=="; // eye closed
          } else {
            input.type = "password";
            icon.src = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAJ/SURBVHgB7VfBdZtAEB0luUcl4A5IBcEnPZ2iVJC4gqAKjCsQVBC5Ais36WRSQdxBNh2oA+V/M9gIA7NI4sZ/b71+Yvn7d3bm7yIyYsSIEYNiImdgtVqF6CK0YDKZfGSvj/aHw+Efeof2tFwuczkRvQVCVIAuhqBv6Keerzm0HKLvINZJD3gLhDCKSVXYOVj3EeolEOIWEPZT/CNmwUEkNC431sB31oAsy24h7kEuJ45gzj6Q2xr4vushCbDSRIZDNJ/PZbvd/m4b0LrF2FYWwkpssGIz9LkUxcBIB2gL33zV7U7FVyArFeR/xSa+RxeDfN/B8yiv9tMGLvIaPE/1Bx+aRiupJS4DYVwVI4UnUiy9z7Hh92sPkVMtwk/1B2+KRBM3kG44tESFTdM0fWTEOQmTn/+XBUCRWMyN2AjBlXQKZBRAFhtEoj72vK1a4VHDmIR5rCJzKXK0E+D6oX7bLFCKqPjYyXOugCxqEleZ8LYi+JfY4Nxxq0AQfhEPVJI5MoZO9bwmnHiAUZQ2gQNjLyfgSKD6mQmtWCI3hrpKtEPxw9HxV48gzdJnpd/5x0r+6oI904d+eCdtAlmZPlHkCVFWG8Z/VcOuT/RyOljFVEK91R3N1TQQvvZH7C1Zx3H84m+67XyHwjelDfU4TRz4ruo/th11oZJalrPRSLkWnkhPiMDgYfSumngucVlwUtyW7+XVSkK9KCw83u9/WaiITKpmOwT0VErannfeB3e7XT6bzaBxEskAsMQRfa783O5ALgNW+c1FrvwEiXhfa7CTU7DWgjDFEad+djI3P4t/RPe6uHSwz84mqAHT+wJtpS05KU4k9md9uI8YMWLEwPgPjJRCnnYugEEAAAAASUVORK5CYII="; // eye open
          }
        }
      </script>
      <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>

   <script>
    $(document).ready(function () {
        var countdown;
        var timer;

        $('.code-btn').click(function (e) {
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
                success: function (response) {
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

            timer = setInterval(function () {
                countdown--;
                resendButton.text('Wait ' + countdown + 's');

                if (countdown <= 0) {
                    clearInterval(timer);
                    resendButton.prop('disabled',
                    false); // Enable the resend button after the timer ends
                    resendButton.text('Resend'); // Reset button text
                }
            }, 1000);
        }

        // Optional: Handle Resend Button Click
        $('.resend-btn').click(function (e) {
            $('.code-btn').trigger('click'); // Simulate a click on the original send button
        });
    });

</script>

</body>

</html>
