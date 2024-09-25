@extends('layouts.main')

@push('ul')
<ul class="nav navbar-nav menu">
<li><a href="{{url('/')}}">Home</a></li>                    
<li><a href="#about">About Us</a></li>
<li><a href="#services">Services</a></li>
<li><a href="#portfolio">Gallery</a></li>
<li><a href="{{url('sale')}}">Project's</a></li>
<li><a href="#contact_form">Contact Us</a></li>
<li><a href="{{url('/login')}}">Login/SignUp</a></li>
</ul>
@endpush

@section('main.container')


        <section id="home" class="home">
            <!-- Carousel -->
            <div id="carousel" class="carousel slide " data-ride="carousel">
                <!-- Carousel-inner -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{asset('assets/images/slider_img.jpg')}}" alt="Construction">




                        
                        <div class="overlay">
                            <div class="carousel-caption">
                                <h3>Crafting your curiosity</h3>
                                <h1>VIPRA HOMES</h1>
                                <h1 class="second_heading">Innovative & Professional</h1>
                                <p>VIPRA understand that building a home or a commercial space is not just about creating a structure, but about fulfilling dreams and aspirations. We know that every client is unique and has a vision of their perfect space, and we are here to bring that vision to life. With our team of skilled and experienced professionals, we are committed to creating spaces that not only meet the needs of our clients but also evoke an emotional connection.</p>
                            </div>					
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('assets/images/slider_img2.jpg')}}" alt="Construction">
                        <div class="overlay">
                            <div class="carousel-caption">
                                <h3>Crafting your curiosity</h3>
                                <h1>VIPRA HOMES</h1>
                                <h1 class="second_heading">Innovative & Professional</h1>
                                <p>VIPRA understand that building a home or a commercial space is not just about creating a structure, but about fulfilling dreams and aspirations. We know that every client is unique and has a vision of their perfect space, and we are here to bring that vision to life. With our team of skilled and experienced professionals, we are committed to creating spaces that not only meet the needs of our clients but also evoke an emotional connection.</p>
                            </div>					
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('assets/images/slider_img3.jpg')}}" alt="Construction">
                        <div class="overlay">
                            <div class="carousel-caption">
                                <h3>Crafting your curiosity</h3>
                                <h1>VIPRA HOMES</h1>
                                <h1 class="second_heading">Innovative & Professional</h1>
                                <p>VIPRA understand that building a home or a commercial space is not just about creating a structure, but about fulfilling dreams and aspirations. We know that every client is unique and has a vision of their perfect space, and we are here to bring that vision to life. With our team of skilled and experienced professionals, we are committed to creating spaces that not only meet the needs of our clients but also evoke an emotional connection.</p>
                            </div>					
                        </div>
                    </div>
                </div><!-- Carousel-inner end -->



                <!-- Controls -->
                <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div><!-- Carousel end-->

        </section>


        <!-- About -->
        <section id="about">
            <div class="container about_bg">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="about_content">
                            <h2>Welcome to Vipra Homes</h2>
                            <h3>Crafting your curiosity</h3>
                            <p>With our team of expert builders, we ensure that every project is a masterpiece, built with the utmost care, precision, and attention to detail. From the foundation to the finishing touches, we use only the highest quality materials and the latest technology to create a structure that is not only beautiful but also sustainable.</p>
                            <p>So if you're looking for a construction company that is not just about building structures, but making a positive impact, we invite you to join us on this journey of creating beautiful spaces and a better world. </p>
                           <br>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-lg-offset-1">
                        <div class="about_banner">
                            <img src="{{asset('assets/images/img2.jpg')}} " alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- About end -->

        <!-- Why us -->
        <section id="why_us">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="head_title">
                            <h2>WHY CHOOSE VIPRA?</h2>
                            <p>VIPRA have a strong reputation for quality work, reliability, and customer service.We have a long history of successful projects and satisfied clients, leading to positive word-of-mouth referrals and a solid reputation in the industry.</p>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="why_us_item">
                            <span class="fa fa-check-circle"></span>
                            <h4>Our Experience</h4>
                            <p>VIPRA has 23 years of experience in the industry, indicating a strong foundation of knowledge and expertise.We are  well-established with a proven track record of successful projects and satisfied clients. Our experience  have led to a team of skilled professionals and a network of reliable contractors and suppliers.Our longevity in the industry suggests a reputation for quality work and a commitment to customer satisfaction.  </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="why_us_item">
                            <span class="fa fa-hourglass-half"></span>
                            <h4>Always on time</h4>
                            <p>VIPRA is known for completing tasks on time, which suggests a strong emphasis on organization, planning, and project management.We have a team of skilled professionals who work efficiently to meet project timelines.Our ability to consistently meet deadlines indicates a focus on reliability and customer satisfaction, which lead to repeat business and positive word-of-mouth referrals.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="why_us_item">
                            <span class="fa fa-heart"></span>
                            <h4>We are pasionate</h4>
                            <p>VIPRA is deeply committed to work and takes pride in delivering high-quality projects.We are  driven by a desire to create exceptional and innovative structures that exceed client expectations.Passion for our craft is reflected in the level of attention to detail we bring to every aspect of a project, from the design phase to the final touches of construction.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="why_us_item">
                            <span class="fa fa-line-chart"></span>
                            <h4>Professional Services</h4>
                            <p> VIPRA have a team of skilled professionals with diverse backgrounds in engineering, architecture, project management, and construction.Our services include design, planning, project management, and construction services for a wide range of projects.We also provide consulting services, helping clients navigate complex construction projects and regulatory requirements.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Why us end -->

        <!-- Services -->
        <section id="services">
            <div class="container">
                <h2>OUR SERVICES</h2>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="service_item">
                            <img src="{{asset('assets/images/service_img1.jpg')}}" alt="Our Services" />
                            <h3 style="margin-top: 10px;">CONSTRUCTION MANAGEMENT</h3>
                            <p>Experience seamless construction management with our company. We specialize in providing efficient and reliable construction management services to ensure the successful execution of your projects. Our dedicated team of skilled professionals meticulously oversees every aspect of your construction venture, from initial planning and budgeting to the final stages of completion.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service_item">
                            <img src="{{asset('assets/images/service_img2.jpg')}}" alt="Our Services" />
                            <br>
                            <h3 style="margin-top: 10px;">RENOVATION</h3>
                            <p>Transform your space with our exceptional renovation services. As a leading construction company, we specialize in delivering top-notch renovation solutions that breathe new life into your property. Whether it's a residential or commercial project, our experienced team of professionals works closely with you to understand your vision and bring it to fruition. From concept development and design to the final touches, we meticulously plan and execute each step of the renovation process.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service_item">
                            <img src="{{asset('assets/images/service_img3.jpg')}}" alt="Our Services" />
                            <h3 style="margin-top: 10px;">ARCHITECTURE</h3>
                            <p>Discover the artistry of architectural excellence with our construction company. We are passionate about creating exceptional architectural designs that inspire and transform spaces. Our team of talented architects combines creativity, innovation, and technical expertise to craft architectural masterpieces that reflect your unique vision and functional requirements.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Services end -->
<br>
    
        <!-- Portfolio -->
        <section id="portfolio">
            <div class="container portfolio_area text-center">
                <h2>Made with love</h2>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>

                <div id="filters">
                    <button class="button is-checked" data-filter="*">Show All</button>
                    <button class="button" data-filter=".buildings">Buildings</button>
                    <button class="button" data-filter=".interior">Interior Design</button>
                </div>
                <!-- Portfolio grid -->		
                <div class="grid">
                    <div class="grid-sizer"></div>
                    <div class="grid-item grid-item--width2 grid-item--height2 buildings interior">
                        <img alt="" src="{{asset('assets/images/highligh_img.jpg')}}" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="{{asset('assets/images/highligh_img.jpg')}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                            <a href="#"><span class="fa fa-link"></span></a>
                        </div>  
                    </div>


                    <div class="grid-item buildings">
                        <img alt="" src="{{asset('assets/images/portfolio2.jpg')}}" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="{{asset('assets/images/portfolio2.jpg')}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                            <a href="#"><span class="fa fa-link"></span></a>
                        </div>  
                    </div>

                    <div class="grid-item buildings">
                        <img alt="" src="{{asset('assets/images/portfolio3.jpg')}}" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="{{asset('assets/images/portfolio3.jpg')}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                            <a href="#"><span class="fa fa-link"></span></a>
                        </div>  
                    </div>

                    <div class="grid-item buildings ">
                        <img alt="" src="{{asset('assets/images/portfolio4.jpg')}}" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="{{asset('assets/images/portfolio4.jpg')}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                            <a href="#"><span class="fa fa-link"></span></a>
                        </div>  
                    </div>

                    <div class="grid-item interior">
                        <img alt="" src="{{asset('assets/images/portfolio1.jpg')}}" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="{{asset('assets/images/portfolio1.jpg')}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                            <a href="#"><span class="fa fa-link"></span></a>
                        </div>   
                    </div>

                    <div class="grid-item interior">
                        <img alt="" src="{{asset('assets/images/portfolio08.jpg')}}" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="{{asset('assets/images/portfolio4.jpg')}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                            <a href="#"><span class="fa fa-link"></span></a>
                        </div>  
                    </div>

                    <div class="grid-item interior">
                        <img alt="" src="{{asset('assets/images/portfolio09.jpg')}}" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="{{asset('assets/images/portfolio4.jpg')}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                            <a href="#"><span class="fa fa-link"></span></a>
                        </div>  
                    </div>


                </div><!-- Portfolio grid end -->
            </div>
        </section>
        <!-- Portfolio end -->
   
        <!-- Contact form -->
        
        <section id="contact_form">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>Do you have any questions</h2>
                        <h2 class="second_heading">Feel free to contact us!</h2>
                    </div>
                    <form method="post" action="{{route('contact')}}"  role="form" class="form-inline text-right col-lg-12">
                        @csrf
                        @method('PUT')

                        @if(Session::has('success'))
                      <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif

                    @if(Session::has('fail'))
                      <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" id="phone" placeholder="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="msg" placeholder="Message" name="msg" required></textarea>
                        </div>
                        <button type="submit" class="btn submit_btn" name="submit">Submit</button>
                    </form>				
                </div>
            </div>
        </section> 
        <!-- Contact form end -->

        @endsection