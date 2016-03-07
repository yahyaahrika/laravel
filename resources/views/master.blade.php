<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <style>
    body{
        background: url('{{asset('image/bg.jpg')}}') no-repeat center center fixed;
        background: 100% auto;
    }
    header{
        opacity: 0.7;
    }
    footer{
        background-color: #fff; opacity: 0.9;text-align: center;
    }
    </style>
</head>

@yield('content');

<footer class="container">
        &copy; All Right Reserved Yahya Ahrika 2015
</footer>

</body>
</html>