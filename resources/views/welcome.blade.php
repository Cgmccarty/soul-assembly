<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Soul Assembly</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, .container {
              margin-top: 50px;
              background: url(https://images8.alphacoders.com/869/thumb-1920-869385.jpg) no-repeat center fixed;
              background-size: cover;
              background-color: black;
              font-family: 'Cormorant SC', serif;
              color: #fff;
              letter-spacing: 1.5px;
              font-size: 18px;
              text-transform: uppercase;
            }

            .full-height {
                height: 80vh;
            }

            .flex-center {
                align-items: top;
                display: flex;
                justify-content: flex-end;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
              text-shadow: 0px 0px 12px #ff9f75;
              font-size: 70px;
              color: #fff;
              letter-spacing: 0;
              text-transform: uppercase;
              text-align: center;
            }

            /* p {
              margin-bottom: 50px;
            } */

            .links > .navbtn {
                color: white;
                padding: 10 10px;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                border: 3px #9E937B;
                border-style: ridge groove ridge;
                font-size: 18px;
                margin: 30px;
                background-color: #444;
                min-height: 60px;
                min-width: 230px;
                opacity: .5;
            }

            .navbtn > a {
                display: flex;
                color: white;
                height: 56px;
                width: 230px;
                text-align: left;
                padding-top: 15px;
                text-decoration: none;
                justify-content: center;
            }

            .navbtn:hover {
                opacity: 1;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body class="container">

        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Soul Assembly
                </div>
                <p>Welcome, chosen undead.</p>
                <div class="links row">
                    @if (Route::has('login'))
                        <div class="links">
                            @auth
                                <button class="navbtn"><a class="col" href="{{ url('/constructs') }}">Home</a></button>
                                <button class="navbtn"><a class="col" href="{{ url('/constructs/create') }}">New Construct</a></button>
                            @else
                                <button class="navbtn"><a class="col" href="{{ route('login') }}">Login</a></button>

                                @if (Route::has('register'))
                                    <button class="navbtn"><a class="col" href="{{ route('register') }}">Register</a></button>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
