<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Tech Prep</title>
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
        }

        .links > a {
            color: #636b6f;
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
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            The Tech Prep
        </div>

        <div class="links">
            <a href="{{ url('/html-css-interview-question') }}">HTML/CSS</a>
            <a href="{{ url('/javascript-interview-question') }}">Javascript</a>
            <a href="{{ url('/jquery-interview-question') }}">jQuery</a>
            <a href="{{ url('/php-interview-question') }}">PHP</a>
            <a href="{{ url('/laravel-interview-question') }}">Laravel</a>
            <a href="{{ url('/mysql-interview-question') }}">MySQL</a>
            <a href="{{ url('/ajax-interview-question') }}">Ajax</a>
            <a href="{{ url('/seo-interview-question') }}">SEO</a>
            <a href="{{ url('/testing-interview-question') }}">Testing</a>
            <a href="{{ url('/agile-scrum-interview-question') }}">Agile/Scrum</a>
        </div>
    </div>
</div>
</body>
</html>
