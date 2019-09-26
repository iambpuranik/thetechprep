<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
    <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: black;
            color: white;
            text-align: center;
        }

        #footer {
            margin-top: 15px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
@section('sidebar')
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="Images/XXX.png" style="border: 0; float: left; margin-right: 15px" />
                    <span>The Tech Prep</span></a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/html-css-interview-question') }}">HTML/CSS</a></li>
                <li><a href="{{ url('/javascript-interview-question') }}">Javascript</a></li>
                <li><a href="{{ url('/jquery-interview-question') }}">jQuery</a></li>
                <li><a href="{{ url('/php-interview-question') }}">PHP</a></li>
                <li><a href="{{ url('/laravel-interview-question') }}">Laravel</a></li>
                <li><a href="{{ url('/mysql-interview-question') }}">MySQL</a></li>
                <li><a href="{{ url('/ajax-interview-question') }}">Ajax</a></li>
                <li><a href="{{ url('/seo-interview-question') }}">SEO</a></li>
                <li><a href="{{ url('/testing-interview-question') }}">Testing</a></li>
                <li><a href="{{ url('/agile-scrum-interview-question') }}">Agile/Scrum</a></li>
            </ul>
        </div>
    </nav>
@show

<div class="container">
    @yield('content')
</div>
<div class="footer">
    <p id="footer">© Bhushan Puranik</p>
</div>
</body>
</html>
