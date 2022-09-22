<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RMX ARENA</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 10%;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 10px;
            }

            .content {
                text-align: center;
                font-size: 20px;
                color: #060607;
                vertical-align: 5%
            }

            .title {
                font-size: 84px;
                color: #060607;

            }

            .links > a {
                color: #060607;
                padding: 5% 20px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                color: #202020;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-c-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
            @if (Route::has('login'))
            @endif
                    <div class="content">
                    <div class="top-right links">
                    <h1>RMX ARENA</h1>
                    <div class="links">
                       <a href="/login">Login</a>
                       <a href="/register">Register</a>
                       <a href="/about">About</a>
                       <a href="https://twitter.com/DenRuss16">Developer</a>
                    </div>
                <div class="content">
                    <img src="{{ asset('apple-touch-icon.png') }}" class="rounded-circle" alt="user-image">
                </div>
                <div id="flex-center">
                    <h2>Terms of use</h2>
                        </div>
            <div class="m-b-md">
            <ul><p>
            Welcome to our RMX SABONG. If you continue to browse and use this website, you are agreeing to comply with and be bound by the following terms and conditions of use, which together with our privacy policy govern our relationship with you in relation to this website. If you disagree with any part of these terms and conditions, please do not use our website.
            </p></ul>
            <ul><p>
            The term 'us' or 'we' refers to the owner of the website. The term 'you' refers to the user or viewer of our website.
            </p></ul>
            <ul><p>
            The use of this website is subject to the following terms of use:
            </p></ul>
            <ul><ul>
                <li>The content of the pages of this website is for your general information and use only. It is subject to change without notice.</li>
                <li>This website uses cookies to monitor browsing preferences. If you do allow cookies to be used, the following personal information may be stored by us for use by third parties.</li>
                <li>Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law.</li>
                <li>Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.</li>
                <li>This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.</li>
                <li>All trade marks reproduced in this website which are not the property of, or licensed to, the operator are acknowledged on the website.</li>
                <li>Unauthorised use of this website may give rise to a claim for damages and/or be a criminal offence.</li>
                <li>From time to time this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s).</li>
            </ul></ul>
                </div>
            </div>
        </div>
    </body>
</html>
