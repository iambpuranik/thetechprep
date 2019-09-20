
<html>
<title>Admin Login</title>
<head>
    <style type="text/css">
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0 auto 0 auto;
            width: 100%;
            text-align: center;
            margin: 20px 0px 20px 0px;
        }

        p {
            font-size: 12px;
            text-decoration: none;
            color: #ffffff;
        }

        h1 {
            font-size: 1.5em;
            color: #525252;
        }

        .box {
            background: white;
            width: 300px;
            border-radius: 6px;
            margin: 0 auto 0 auto;
            padding: 0px 0px 70px 0px;
            border: #2980b9 4px solid;
        }

        .email {
            background: #ecf0f1;
            border: #ccc 1px solid;
            border-bottom: #ccc 2px solid;
            padding: 8px;
            width: 250px;
            color: #AAAAAA;
            margin-top: 10px;
            font-size: 1em;
            border-radius: 4px;
        }

        .password {
            border-radius: 4px;
            background: #ecf0f1;
            border: #ccc 1px solid;
            padding: 8px;
            width: 250px;
            font-size: 1em;
        }

        .btn {
            background: #2ecc71;
            width: 125px;
            padding-top: 5px;
            padding-bottom: 5px;
            color: white;
            border-radius: 4px;
            border: #27ae60 1px solid;

            margin-top: 20px;
            margin-bottom: 20px;
            float: left;
            margin-left: 16px;
            font-weight: 800;
            font-size: 0.8em;
        }

        .btn:hover {
            background: #2CC06B;
        }

        #btn2 {
            float: left;
            background: #3498db;
            width: 125px;
            padding-top: 5px;
            padding-bottom: 5px;
            color: white;
            border-radius: 4px;
            border: #2980b9 1px solid;

            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: 10px;
            font-weight: 800;
            font-size: 0.8em;
        }

        #btn2:hover {
            background: #3594D2;
        }
    </style>
</head>

<body>

<form method="POST" action="/login">
    <input type="hidden" name="_token" value="{{ Session::token() }}">
    <div class="box">
        <h1>Admin Login</h1>
        <input type="text" name="email" placeholder="email id" class="email"/>
        <input type="password" name="password" placeholder="password" class="email"/>
        <button type="submit" name="submit" class="btn">Login</button>
    </div>
</form>
</body>
</html>


