<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', 'Second App')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">

</head>

<body>

    <a href="/">Home</a> | <a href="/projects">Our Projects</a> | <a href="/contact">Our Offices</a> | <a href="/about">About Us</a> |
    <a href="/media">Media</a> | <a href="/foundation">Foundation</a>
    <div class="container">
        @yield('content')
    </div>

</body>

</html>
