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
