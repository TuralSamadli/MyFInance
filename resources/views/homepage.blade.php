@extends('layouts.master')




@section('content')
    <!-- body -->

    <body id="main" class="main-layout">
        <!-- loader  -->

        <!-- end loader -->
        <!-- header -->

        <!-- end header -->
        <section class="slider_section">
            <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="first-slide" src="images/banner2.jpg" alt="First slide">
                        <div class="container">
                            @foreach ($slider as $slider)
                                <div class="carousel-caption relative">
                                    <h1>{{ $slider->title }}</h1>
                                    <p>{{ $slider->description }}</p>
                                    <a href="Javascript:void(0)">Read More</a>
                                </div>
                        </div>
                        @endforeach
                    </div>


                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <i class='fa fa-angle-left'></i>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <i class='fa fa-angle-right'></i>
                </a>
                <a class="bottom_arrow_scroll" href="#about"><img src="icon/errow.png" /></a>
            </div>
        </section>
        <!-- about  -->
        <div id="about" class="about">
            @foreach ($about as $about)
            @endforeach
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2>{{ $about->title }}</h2>
                            <span>{{ $about->description }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row flexcss">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="about-box">
                            <h3>{{ $about->head }} </h3>
                            <p>{{ $about->text }}</p>

                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="about-img">

                            <figure><img src="images/aboutimg.png" alt="img" /></figure>

                        </div>

                    </div>
                </div>
                <a href="Javascript:void(0)">read more</a>
            </div>
        </div>
        <!-- end abouts -->

        <!-- Download -->
        <div id="portfolio" class="Screenshot">
            <div class="container">
                @foreach ($portfolio as $portfolio)
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titlepage">
                                <h2>{{ $portfolio->title }}</h2>
                                <span>{{ $portfolio->description }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active"> <img class="first-slide" src="images/banner.png"
                                            alt="First slide"> </div>
                                    <div class="carousel-item"> <img class="second-slide" src="images/banner.png"
                                            alt="Second slide"> </div>
                                    <div class="carousel-item"> <img class="third-slide" src="images/banner.png"
                                            alt="Third slide"> </div>
                                </div>
                                <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev"> <i
                                        class='fa fa-angle-left'></i></a> <a class="carousel-control-next"
                                    href="#main_slider" role="button" data-slide="next"> <i
                                        class='fa fa-angle-right'></i></a>
                            </div>
                            <div class="read-more">
                                <a href="Javascript:void(0)">download now</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <!-- end Download -->

        <!-- service -->
        <div id="service" class="service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2>Services </h2>
                            <span>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout. The point of <br>using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters,</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container margin-r-l">
                <div class="row">
                  @foreach ($service as $service)
                      
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                        <div class="service-box">
                            <figure>
                                <a href="images/1.jpg" class="fancybox" rel="ligthbox">
                                    <img src="images/1.jpg" class="zoom img-fluid " alt="">
                                </a>
                                <span class="hoverle">
                                    <a href="images/1.jpg" class="fancybox" rel="ligthbox">{{$service->service_name}}</a>
                                </span>
                            </figure>
                        </div>
                    </div>
                    @endforeach

         
                
                  
                   
                 
                </div>
            </div>
        </div>
        <!-- end service -->
        <!-- our blog -->
        <div id="blog" class="blog">
            <div class="container">
               @foreach ($blog as $blog)

                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                               
                            <h2>{{$blog->title}}</h2>
                            <span>{{$blog->description}}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="blog-box">
                            <figure><img src="images/blog-image0.jpg" alt="#" />
                                <span>{{$blog->date}}</span>
                            </figure>
                            <div class="travel">
                                <span>Post By : {{$blog->blog_poster}}</span>

                            </div>
                            <h3>{{$blog->blog_title}}</h3>
                            <p>{{$blog->blog_description}}</p>
                        </div>
                    </div>


                </div>
                @endforeach
            </div>
        </div>
        <!-- end our blog -->
        <!-- Testimonial -->
        <div id="contact" class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h3>Contact Us</h3>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 offset-md-3">
                        <div class="contact">

                            <form>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Name" type="text" name="Name">
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Phone" type="text" name="Email">
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Email" type="text" name="Email">
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="send">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Testimonial -->
        <!--  footer -->
    @endsection

    </html>
