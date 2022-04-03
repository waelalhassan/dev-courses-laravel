<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    @include('layouts.navbar')

    <section class="single-course">
        <div class="container">
            <div class="hide-this wrapper-single-course">
                <header class="text-center">
                    <h1>{{ $course['title'] }}</h1>
                </header>
                <div class="d-flex">
                    <div class="single-course-info">
                        <img src="{{ asset('storage/' . $course['image']) }}"
                            alt="{{ asset('storage/' . $course['title']) }}">
                        <a href="{{ $course['buy_link'] }}" target="_blank">
                            <img src="#" alt="">
                            <span>Buy now</span>
                        </a>
                    </div>
                    <div class="single-course-details">
                        {!! $course['body'] !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
