<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
</head>
<body>
    @include("layouts.navbar")

    <img src="{{asset("storage/".$course["image"])}}" alt="{{ $course["title"] }}">
    <a href="{{$course["buy_link"]}}" target="_blank">
        Buy now
    </a>
    <h2> {{ $course["title"] }} </h2>
    {{ $course["body"] }}

    @include("layouts.footer")
    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>
