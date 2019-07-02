<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>

    @yield('title', 'Second App')

    </title>
</head>

<body>

    <a href="/">Home</a> | <a href="/contact">Contact Us</a> | <a href="/about">About Us</a> |
    <a href="/media">Media</a> | <a href="/foundation">Foundation</a>

{{--    <ul>--}}
{{--       <li><a href="/">Home</a></li>--}}
{{--       <li><a href="/contact">Contact Us</a></li>--}}
{{--       <li><a href="/about">About Us</a></li>--}}
{{--    </ul>--}}

    @yield('content')

</body>

</html>
