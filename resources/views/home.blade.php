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
    @include("layouts.header")

    <section class="sec-1">
        <div class="container">
            <div class="hide-this wrapper d-grid">
                <div>
                    <h2>{{setting('site.sec_1_title')}}</h2>
                    {!! setting('site.sec_1_desc') !!}
                </div>
                <div>
                    <img src="{{asset("storage/".setting('site.sec_1_img'))}}" alt="section 1 image">
                </div>
            </div>
        </div>
    </section>

    <section class="sec-2">
        <div class="container">
            <h2 class="hide-this">{{setting('site.sec_2_title')}}</h2>
            <div class="wrapper d-grid">
                @if (count($offers) > 0)
                    @foreach ($offers as $offer)

                    <div class="hide-this sec-2-item d-flex d-align-center d-justify-between">
                        <div class="sec-2-icon">
                            <img src="{{asset("storage/".$offer["image"])}}" alt="icon">
                        </div>
                        <div class="sec-2-info">
                            <h3>{{ $offer["title"] }}</h3>
                            <p>{{ $offer["excerpt"] }}</p>
                        </div>
                    </div>

                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <section class="sec-3" id="sec_3">
        <div class="container">
            <div class="sec-3-header d-sm-flex-column d-flex d-justify-between d-align-center">
                <h2 class="hide-this">{{setting('site.sec_3_title')}}</h2>
                <ul class="filter d-flex" id="categories_parent">
                </ul>
            </div>
            <div class="wrapper" id="courses_parent">
            </div>
        </div>
    </section>

    @include("layouts.footer")
    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>
