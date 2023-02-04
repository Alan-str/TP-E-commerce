<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .sidenav {
            height:100%;
            width:160px;
            position: fixed;
            z-index:1;
            top:0;
            left:0;
            background-coLor:#111;
            overflow-x:hidden;
            padding-top:28px;
        }
        .sidenav a {
            padding:6px 8px 6px 16px;
            text-decoration: none;
            font-size:25px;
            color: #818181;
            display:block;
        }
        .sidenav a:hover{
            color:#f1f1f1;
        }
        .main{
            margin-Left:168px;
            padding: 0px 10px;
        }
    </style>

</head>
<body>

    @include('nav')
    <div class="main">
        @yield('content')
    </div>
    
</body>
</html>