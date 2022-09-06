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

                            <figure><img src="{{$about->icon}}" alt="img" /></figure>

                        </div>

                    </div>
                    @endforeach

        </div>
        <!-- end abouts -->

        

        <!-- service -->
        <div id="service" class="service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2>Services </h2>
                            <span>https://www.investopedia.com › ... › Corporate Finance
                                Finance is a term for matters regarding the management, creation, and study of money and investments. It involves the use of credit and debt, securities,</span>
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
                                    <img src="{{$service->service_icon}}" class="zoom img-fluid " alt="">
                                </a>
                                <span class="hoverle">
                                    <a href="{{$service->service_icon}}" class="fancybox" rel="ligthbox">{{$service->service_name}}</a>
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

                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                               
                            <h2>Our blog</h2>
                            <span>Get daily information about latest developments in finance field</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($blog as $blog)

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="blog-box">
                            <figure><img src="{{$blog->icon}}" alt="#" />
                                <span>{{$blog->date}}</span>
                            </figure>
                            <div class="travel">
                                <span>Post By : {{$blog->blog_poster}}</span>

                            </div>
                            <h3>{{$blog->blog_title}}</h3>
                            <p>{{$blog->blog_description}}</p>
                            

                        </div>
                        
                    </div>
                    @endforeach

                </div>
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

                            <form id="contact-form" method="POST" action="{{ route('message') }}">
                                @csrf
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input id="name" type="text" name="name"
                                                    class="form-control" placeholder="Name*" required="required"
                                                    data-error="Name is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input id="email" type="email" name="email"
                                                    class="form-control" placeholder="Email*" required="required"
                                                    data-error="Valid email is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input id="phone" type="text" name="phone"
                                                    class="form-control" placeholder="Subject*"
                                                    required="required" data-error="Subject is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea id="message" name="message" class="form-control" placeholder="Message*" rows="7"
                                                    required="required" data-error="Please,leave us a message."></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="mybtn3 mybtn-bg"><span>Send
                                                    Message</span></button>
                                        </div>
                                    </div>
                                </div>
                            </form> <!-- End Contact From -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Testimonial -->
        <!--  footer -->
    @endsection

    </html>
