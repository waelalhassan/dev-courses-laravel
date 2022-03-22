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
    <nav id="top_navbar">
        <div class="container">
            <div class="nav-wrapper d-flex d-justify-between d-align-center">
                <div class="brand-name">
                    <h1><a href="#">DEV COURSES</a></h1>
                </div>
                <button class="d-sm-grid nav-btn-mobile" type="button">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <ul class="navbar d-sm-none d-flex">
                    <li><a href="#">link 1</a></li>
                    <li><a href="#">link 2</a></li>
                    <li><a href="#">link 3</a></li>
                    <li><a href="#">link 4</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <div class="container">
            <div class="wrapper d-flex d-justify-between d-align-center">
                <div>
                    <h2>
                        Welcome <br> to
                        Dev courses
                    </h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus eligendi impedit veritatis, at ipsa tenetur! Distinctio, vel tempora. Quaerat, exercitationem?</p>
                    <button type="button" class="btn-action" id="header_btn_action">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M413.1 222.5l22.2 22.2c9.4 9.4 9.4 24.6 0 33.9L241 473c-9.4 9.4-24.6 9.4-33.9 0L12.7 278.6c-9.4-9.4-9.4-24.6 0-33.9l22.2-22.2c9.5-9.5 25-9.3 34.3.4L184 343.4V56c0-13.3 10.7-24 24-24h32c13.3 0 24 10.7 24 24v287.4l114.8-120.5c9.3-9.8 24.8-10 34.3-.4z"/></svg>
                    </button>
                </div>
                <div>
                    <img src="{{asset("images/banner_img.png")}}" alt="header image">
                </div>
            </div>
        </div>
    </header>

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
                    <li>filter 2</li>
                    <li>filter 3</li>
                    <li>filter 4</li>
                    <li>filter 5</li>
                </ul>
            </div>
            <div class="wrapper d-grid">
                <div class="sec-3-card">
                    <header>
                        <img src="{{asset("images/course.png")}}" alt="image">
                    </header>
                    <div class="sec-3-body">
                        <h3>The Complete Blazor Bootcamp - .NET 6 (WASM and Server)</h3>
                        <p>Build re-commerce web application using Blazor Server, Blazor WASM and .NET 6(.NET/EF Core) API and deploy to azure.</p>
                    </div>
                    <div class="sec-3-footer">
                        <div class="card-btns d-flex d-justify-between d-align-center">
                            <a href="#">buy now</a>
                            <a href="#">details</a>
                        </div>
                        <div class="card-info d-flex d-justify-between d-align-center">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M336.2 64H47.8C21.4 64 0 85.4 0 111.8v288.4C0 426.6 21.4 448 47.8 448h288.4c26.4 0 47.8-21.4 47.8-47.8V111.8c0-26.4-21.4-47.8-47.8-47.8zm189.4 37.7L416 177.3v157.4l109.6 75.5c21.2 14.6 50.4-.3 50.4-25.8V127.5c0-25.4-29.1-40.4-50.4-25.8z"/></svg>
                                <i>201 videos</i>
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z"/></svg>
                                <i>15hr 45min</i>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="wrapper d-grid">
                <div class="col-4 site-info">
                    <h3>About us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint possimus aspernatur harum nihil! Dolore, odio!</p>
                </div>
                <div class="col-4 footer-nav">
                    <h3>footer nav 1</h3>
                    <ul>
                        <li><a href="#">link 1</a></li>
                        <li><a href="#">link 2</a></li>
                        <li><a href="#">link 3</a></li>
                    </ul>
                </div>
                <div class="col-4 footer-nav">
                    <h3>footer nav 2</h3>
                    <ul>
                        <li><a href="#">link 1</a></li>
                        <li><a href="#">link 2</a></li>
                        <li><a href="#">link 3</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>All rights reserved.© 2022. developed ❤️ by <a href="https://github.com/waelalhassan" target="_blank">Wael Alhassan</a></p>
            </div>
        </div>
    </footer>
    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>
