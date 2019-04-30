<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!-- Ionicons -->
        <link rel="icon" type="image/icon" href="https://cdn2.iconfinder.com/data/icons/education-icons-4/200/SCHOOL15-512.png">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <link href="{!! asset('css/bootstrap.css') !!}" rel="stylesheet" type="text/css" media="all">
        <!-- Styles -->
        <style>
            html, body,a , a:hover,a:active {
                background-color: #34495e;
                color: #ecf0f1;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                margin-top: 200px;
                margin-bottom: 100px;
            }

            a , .links > a {
                color: #ecf0f1;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

    </head>
    <body>

        <div class="container"> 
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Accueil</a>
                    @else
                        <a href="{{ route('login') }}">S'authentifier</a> 
                    @endauth
                </div>
            @endif
             <div class="content">
                <div class="title m-b-md">
                    School Management System
                </div>
            </div>
            <div class="footer text-center">
                 <p>Copyright © {{ now()->year }}. Tous les droits sont réservés | Développé par<a href="#" target="_blank">{{ config('app.copyright') }}</a> </p>
            </div>
        </div>
    </body>
</html>
