<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <link rel="stylesheet" href="{{asset("css/classes.css")}}">
</head>
<body>
    @include("layouts.navbar")
    @include("layouts.header")

    <div class="curve-s1">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#eb4034" fill-opacity="1" d="M0,96L80,106.7C160,117,320,139,480,128C640,117,800,75,960,64C1120,53,1280,75,1360,85.3L1440,96L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>
    </div>
    <section class="sec-1">
        <div class="container">
            <div class="d-flex d-align-center wrapper">
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
    <div class="curve-s2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#eb4034" fill-opacity="1" d="M0,64L80,96C160,128,320,192,480,213.3C640,235,800,213,960,186.7C1120,160,1280,128,1360,112L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
    </div>
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
    <div class="curve-s3">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#eb4034" fill-opacity="1" d="M0,224L120,197.3C240,171,480,117,720,85.3C960,53,1200,43,1320,37.3L1440,32L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>
    </div>
    <section class="sec-3" id="courses">
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
    <div class="curve-s4">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 200 1440 320"><path fill="#1a1a1a" fill-opacity="1" d="M0,288L80,277.3C160,267,320,245,480,234.7C640,224,800,224,960,229.3C1120,235,1280,245,1360,250.7L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
    </div>
    @include("layouts.footer")
    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>
