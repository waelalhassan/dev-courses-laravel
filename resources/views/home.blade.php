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
            <div class="wrapper d-grid">
                <div>
                    <h2>Hello World;</h2>
                    <p>Welcome to DotNetMastery, our mission is to provide the most comprehensive traning for .NET Developers.</p>
                    <p>We want to make coding and software engineering accessible to everyone through courses that are simple to follow, but still give exposure to solve real world challenges. All the courses have real world exposure to make sure, not just to teach you technology but make you ready for real world challanges.</p>
                    <p>Most important part about writing and teaching code is to eliminate the hardships of every student out there who is willing to learn but cannot find adequate resource which is easy to understand.</p>
                    <p>Coding is a way to be creative and have fun!</p>
                </div>
                <div>
                    <img src="{{asset("images/banner_img.png")}}" alt="section 1 image">
                </div>
            </div>
        </div>
    </section>

    <section class="sec-2">
        <div class="container">
            <h2>What Dot Net Mastery Courses Offers</h2>
            <div class="wrapper d-grid">
                <div class="sec-2-item d-flex d-align-center d-justify-between">
                    <div class="sec-2-icon">
                        <img src="{{asset("images/sec-2-icon.jpg")}}" alt="icon">
                    </div>
                    <div class="sec-2-info">
                        <h3>Job focused Training</h3>
                        <p>All courses cover’s Real-world Examples with the best techniques along with displaying the errors and how to resolve them.</p>
                    </div>
                </div>
                <div class="sec-2-item d-flex d-align-center d-justify-between">
                    <div class="sec-2-icon">
                        <img src="{{asset("images/sec-2-icon.jpg")}}" alt="icon">
                    </div>
                    <div class="sec-2-info">
                        <h3>Job focused Training</h3>
                        <p>All courses cover’s Real-world Examples with the best techniques along with displaying the errors and how to resolve them.</p>
                    </div>
                </div>
                <div class="sec-2-item d-flex d-align-center d-justify-between">
                    <div class="sec-2-icon">
                        <img src="{{asset("images/sec-2-icon.jpg")}}" alt="icon">
                    </div>
                    <div class="sec-2-info">
                        <h3>Job focused Training</h3>
                        <p>All courses cover’s Real-world Examples with the best techniques along with displaying the errors and how to resolve them.</p>
                    </div>
                </div>
                <div class="sec-2-item d-flex d-align-center d-justify-between">
                    <div class="sec-2-icon">
                        <img src="{{asset("images/sec-2-icon.jpg")}}" alt="icon">
                    </div>
                    <div class="sec-2-info">
                        <h3>Job focused Training</h3>
                        <p>All courses cover’s Real-world Examples with the best techniques along with displaying the errors and how to resolve them.</p>
                    </div>
                </div>
                <div class="sec-2-item d-flex d-align-center d-justify-between">
                    <div class="sec-2-icon">
                        <img src="{{asset("images/sec-2-icon.jpg")}}" alt="icon">
                    </div>
                    <div class="sec-2-info">
                        <h3>Job focused Training</h3>
                        <p>All courses cover’s Real-world Examples with the best techniques along with displaying the errors and how to resolve them.</p>
                    </div>
                </div>
                <div class="sec-2-item d-flex d-align-center d-justify-between">
                    <div class="sec-2-icon">
                        <img src="{{asset("images/sec-2-icon.jpg")}}" alt="icon">
                    </div>
                    <div class="sec-2-info">
                        <h3>Job focused Training</h3>
                        <p>All courses cover’s Real-world Examples with the best techniques along with displaying the errors and how to resolve them.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-3" id="sec_3">
        <div class="container">
            <div class="sec-3-header d-sm-flex-column d-flex d-justify-between d-align-center">
                <h2>Course List</h2>
                <ul class="filter d-flex">
                    <li class="active">All</li>
                    @if (count($categories) > 0)
                        @foreach ($categories as $category)
                            <li> {{ $category["name"] }} </li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <div class="wrapper d-grid" id="courses_parent">
                @php
                    function max_length ($string) {
                        return substr($string, 0, 150)."...";
                    }
                    function fix_backslash ($uri) {
                        return str_replace("\\", "/", $uri);
                    }
                @endphp
                @if (count($courses) > 0)
                    @foreach ($courses as $course)
                        <div class="sec-3-card">
                            <header>
                                <img src="{{asset("storage/".$course["image"])}}" alt="image">
                            </header>
                            <div class="sec-3-body">
                                <h3>{{$course["title"]}}</h3>
                                <p>{{max_length($course["excerpt"])}}</p>
                            </div>
                            <div class="sec-3-footer">
                                <div class="card-btns d-flex d-justify-between d-align-center">
                                    <a href="{{$course["buy_link"]}}" target="_blank">Buy now</a>

                                    <a href="{{$course["id"]}}">Details</a>
                                </div>
                                <div class="card-info d-flex d-justify-between d-align-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M336.2 64H47.8C21.4 64 0 85.4 0 111.8v288.4C0 426.6 21.4 448 47.8 448h288.4c26.4 0 47.8-21.4 47.8-47.8V111.8c0-26.4-21.4-47.8-47.8-47.8zm189.4 37.7L416 177.3v157.4l109.6 75.5c21.2 14.6 50.4-.3 50.4-25.8V127.5c0-25.4-29.1-40.4-50.4-25.8z"/></svg>
                                        <i>{{$course["number_videos"]}} Videos</i>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z"/></svg>
                                        <i>{{$course["total_time"]}}</i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @else
                        <h3>No Courses</h3>
                @endif
            </div>
        </div>
    </section>

    @include("layouts.footer")
    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>
