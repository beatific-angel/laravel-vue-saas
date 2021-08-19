@extends('layouts.app')

@section('content')
        <!-- ======== Start Slider ======== -->
        <section class="slider d-flex align-items-center" id="slider">
            <div class="container">
                <div class="content">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-6">
                            <div class="left">
                                <h3>Save weeks of time and build your Vue.js & Laravel SaaS app in minutes.</h3>
                                    <p>
                                        <strong>SaaSWeb provides the Ultimate starter kit for multi-tenant SaaS project on top of Laravel and Vue framework.</strong>
                                    </p>
                                    <p>
                                    SaaSWeb will help you rapidly build your Software as a Service application. Out of the box Authentication,
                                    Subscriptions, Billing, Team management, Invoices, Support ticket, Notifications, User Profiles, landing page,
                                    API, two-factor authentication, Statistics, Visitor log, Env editor, Admin Panel to manage Plans, Coupons, Roles,
                                    Permissions and so much more !
                                </p>
                                <a href="{{ route('register') }}" class="btn-1">Get Started</a>
                                <a href="/docs" class="btn-2">View documention</a>
                            </div>
                        </div>
                        <!-- Right-->
                        <div class="col-md-6">
                            <div class="right">
                                <img src="{{ asset('saas/img/slider-img.png') }}" alt="slider-img" class="img-fluid wow fadeInRight" data-wow-offset="1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======== End Slider ======== -->

        <!-- ======== Start Features ======== -->
        <section class="features" id="features">
            <div class="container text-center">
                <div class="heading">
                    <h2>Exclusive Features</h2>
                </div>
                <div class="line"></div>
                <div class="row">
                    <!-- Box-1 -->
                    <div class="col-md-4">
                        <div class="box">
                            <img src="{{ asset('saas/img/feature-1.png') }}" alt="feature-1">
                            <h3>Multi-tenancy</h3>
                            <p>Saas web build with support for Multi-tenancy with single database, keeping tenant specific data separated for fully independent, everyone manages their own data and don’t see anyone else’s data
                            </p>
                        </div>
                    </div>
                    <!-- Box-2 -->
                    <div class="col-md-4">
                        <div class="box">
                            <img src="{{ asset('saas/img/feature-2.png') }}" alt="feature-1">
                            <h3>Build with Statistics</h3>
                            <p>Build with Tracker for loging visitor information and save it into database, Discover where each visitor came from, how they interact with your app, and gain deeper insights into what drives them.</p>
                        </div>
                    </div>
                    <!-- Box-3 -->
                    <div class="col-md-4">
                        <div class="box">
                            <img src="{{ asset('saas/img/feature-3.png') }}" alt="feature-1">
                            <h3>Beautiful Design</h3>
                            <p>Colorful, stylish, and fresh Design, Manage everything from your admin panel, no need to leave confortable place to go to create plan, Coupon etc ... do them on the fly</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ======== End Features ======== -->

        <!-- ======== Start Some Facts ======== -->
        <section class="some-facts">
            <div class="container text-center">
                <div class="row">
                    <!-- Box-1 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="items">
                            <img src="{{ asset('saas/img/some-fact/1.png') }}" alt="some-fact-1">
                            <h3>
                                <span class="counter">1,200</span>+</h3>
                            <div class="line mx-auto"></div>
                            <h4>Clients</h4>
                        </div>
                    </div>
                    <!-- Box-2 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="items">
                            <img src="{{ asset('saas/img/some-fact/2.png') }}" alt="some-fact-1">
                            <h3>$
                                <span class="counter">3,15</span>M</h3>
                            <div class="line mx-auto"></div>
                            <h4>Invested</h4>
                        </div>
                    </div>
                    <!-- Box-3 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="items">
                            <img src="{{ asset('saas/img/some-fact/3.png') }}" alt="some-fact-1">
                            <h3>
                                <span class="counter">14</span>%</h3>
                            <div class="line mx-auto"></div>
                            <h4>Growth p.a</h4>
                        </div>
                    </div>
                    <!-- Box-4 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="items">
                            <img src="{{ asset('saas/img/some-fact/4.png') }}" alt="some-fact-1">
                            <h3>
                                <span class="counter">2,500</span>+</h3>
                            <div class="line mx-auto"></div>
                            <h4>Hours of Work</h4>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- ======== End Some Facts ======== -->

        <!-- ======== Start Project ======== -->
        <section class="project">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <!-- Left -->
                    <div class="col-md-6">
                        <img src="{{ asset('saas/img/create-saas.png') }}" alt="project" class="img-fluid">
                    </div>
                    <!-- Right -->
                    <div class="col-md-5">
                        <div class="right">
                            <span>The features you need to bill like a pro</span>
                            <h2>Best way to start your SaaS / 
                                <br>Multi tenant app</h2>
                            <p>
                                SaaSWeb was created to be a lightweight alternative to Laravel Spark with some new cool features, It is a drop-in 
                                subscription billing UI powered by Laravel, Stripe and Vue.js components. It allows you to 
                                focus your time and energy on building
                                your SaaS app rather than worrying about the complexities of the multi tenant and billing system.
                                <br>
                                Discover where each customer came from, how they interact with your marketing
                                channels, and gain deeper insights into what drives them to purchase.</p>
                            <a href="#0" class="btn-1">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======== End Project ======== -->

        <!-- ======== Start Video ======== -->
        <section class="video">
            <div class="container text-center">
                <div class="video-icon">
                    <div class="icon-abs">
                        <a href="https://www.youtube.com/watch?v=S6lzo-OWoqI" class="icon pulse expand video-link">
                            <i class="fa fa-play" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======== End Video ======== -->

        <!-- ======== Start Benefits ======== -->
        <section class="benefits" id="benefits">
            <div class="container text-center">
                <div class="heading">
                    <h2>Benefits of Saas Web</h2>
                </div>
                <div class="line"></div>
                <div class="row">
                    <!-- Box-1 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="box mb-30">
                            <img src="{{ asset('img/icons/access.png') }}" width="80" alt="benefits">
                            <h3>Two-Factor Authentication</h3>
                            <p>With 2FA, better protect both the user's credentials and the resources the user can access, enabled & disable 2FA</p>

                        </div>
                    </div>
                    <!-- Box-2 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="box mb-30">
                            <img src="{{ asset('img/icons/plan.png') }}" width="80" alt="benefits">
                            <h3>Subscriptions</h3>
                            <p>Offer monthly and yearly plans with Stripe. Define plans, coupons directly on the admin panel</p>

                        </div>
                    </div>
                    <!-- Box-3 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="box mb-30">
                            <img src="{{ asset('img/icons/payment.png') }}" width="80" alt="benefits">
                            <h3>Teams / Team Billing</h3>
                            <p>Create team plan on the admin panel, users will be able to add team members and assign different roles </p>

                        </div>
                    </div>
                    <!-- Box-4 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                            <img src="{{ asset('img/icons/megaphone.png') }}" width="80" alt="benefits">
                            <h3>Notifications</h3>
                            <p>Notification System which integrates with the default Laravel notification feature</p>

                        </div>
                    </div>
                    <!-- Box-5 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                            <img src="{{ asset('img/icons/analysis.png') }}" width="80" alt="benefits">
                            <h3>User Roles</h3>
                            <p>Create role and Grant permissions based on roles, Give user or group access to a page or feature within the application.</p>

                        </div>
                    </div>
                    <!-- Box-6 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                                <img src="{{ asset('img/icons/api.png') }}" width="80" alt="benefits">
                            <h3>Functional API</h3>
                            <p>Ready-to-use API for your application. Generate API tokens and even grant specific abilities to tokens.</p>

                        </div>
                    </div>
                    <!-- Box-7 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                            <img src="{{ asset('img/icons/password.png') }}" width="80" alt="benefits">
                            <h3>User Impersonation</h3>
                            <p>Administrator role can login as another user and resolve an issue or troubleshoot a bug.</p>

                        </div>
                    </div>
                    <!-- Box-8 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                                <img src="{{ asset('img/icons/pin.png') }}" width="80" alt="benefits">
                            <h3>Visitor log</h3>
                            <p>Log visitor information into database, Location information, region, country, browser, OS, city, zip, unique and non-unique visits based on IP and Allows log authenticated user info etc.</p>

                        </div>
                    </div>
                    <!-- Box-9 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                                <img src="{{ asset('img/icons/admin.png') }}" width="80" alt="benefits">
                            <h3>Admin Panel</h3>
                            <p>Ready-to-use user interface components that look great. Manage your users, Plans, Coupons, visitors log from your master dashboard – complete with metrics.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                            <img src="{{ asset('img/icons/debit-card.png') }}" width="80" alt="benefits">
                            <h3>Payments</h3>
                            <p>Monetise your application right now with a powerful billing system that uses Stripe.</p>

                        </div>
                    </div>
                    <!-- Box-8 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                                <img src="{{ asset('img/icons/bill.png') }}" width="80" alt="benefits">
                            <h3>Landing Page</h3>
                            <p>Launch your app with a beautiful, hand-crafted homepage and pricing page just like this one.</p>

                        </div>
                    </div>
                    <!-- Box-9 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="box">
                                <img src="{{ asset('img/icons/timeline.png') }}" width="80" alt="benefits">
                            <h3>New Features</h3>
                            <p>Get access to all new features and updates, for one year, for free.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======== End Benifits ======== -->

        <!-- ======== Start Get Started ======== -->
        <section class="get-started">
            <div class="container text-center">
                <span>get started</span>
                <h3>Get a head start on your Laravel SaaS app today</h3>
                <a href="#0" class="btn-1">Get Started</a>

            </div>
        </section>
        <!-- ======== End Get Started ======== -->

        <!-- ======== Start Testimonial ======== -->
        <section class="testimonials">
            <div class="container text-center">
                <div class="heading">
                    <h2>Testimonials</h2>
                </div>
                <div class="line"></div>
                <div class="slick-slider">
                    <!-- Box-1 -->
                    <div class="box">
                        <img src="{{ asset('saas/img/testimonials/1.png') }}" alt="" class="m-auto">
                        <h3>Jack Fritz</h3>
                        <span>Fullstack Devloper</span>
                        <p>
                            Using SaaSWeb I was able to build the SAAS of my dreams. It was so easy to get started and customize.
                        </p>
                    </div>
                    <!-- Box-1 -->
                    <div class="box">
                        <img src="{{ asset('saas/img/testimonials/2.png') }}" alt="" class="m-auto">
                        <h3>Mohamed Moaz</h3>
                        <span>Developer</span>
                        <p>
                            It's the best solution for creating the Software as a Service of your dreams.
                        </p>
                    </div>
                    <!-- Box-1 -->
                    <div class="box">
                        <img src="{{ asset('saas/img/testimonials/3.png') }}" alt="" class="m-auto">
                        <h3>Pascal Brin</h3>
                        <span>Developer</span>
                        <p>
                            Creating a SaaS is now easier with SaaSWeb.
                            I was able to save my development team hundreds of hours!
                        </p>
                    </div>
                    <div class="box">
                            <img src="{{ asset('saas/img/testimonials/4.png') }}" alt="" class="m-auto">
                            <h3>Hector Mark</h3>
                            <span>Developer</span>
                            <p>
                                    Everything worked perfectly. I was pleasantly surprised by how user-friendly the whole setup process was.
                            </p>
                        </div>
                </div>
            </div>
        </section>
        <!-- ======== End Testimonial ======== -->

        <!-- ======== Start Our Price ======== -->
        <section class="our-price" id="price">
            <div class="container text-center">
                <div class="heading">
                    <h2>Our Price</h2>
                </div>
                <div class="line"></div>
                <div class="row">
                    <!-- Box-1 -->
                    @foreach ($plans as $plan)
                        
                    <div class="col-md-4">
                        <div class="box" @if ($loop->iteration == 2)
                                box-center
                        @endif>
                        @if ($loop->iteration == 2)
                            <a href="#0" class="top-btn">Popular</a>
                        @endif
                            <h3>{{ $plan->name }}</h3>
                            <h4>$<span>{{ $plan->price }}</span>/ {{ $plan->interval }}</h4>
                            <ul>
                                <li>Admin Panel</li>
                                <li>100GB Storge</li>
                                <li>Unlimited Email</li>
                            </ul>
                            <a href="{{ route('home') }}/subscription?plan={{ $plan->slug }}" class="btn-2">Get Started</a>
                        </div>
                    </div>
                    
                    @endforeach
                    <!-- Box-2 -->
                    {{-- <div class="col-md-4">
                        <div class="box box-center">
                            <a href="#0" class="top-btn">Popular</a>
                            <h3>Standard</h3>
                            <h4>$<span class="blue">45</span>/ Month</h4>
                            <ul>
                                <li>Admin Panel</li>
                                <li>300GB Storge</li>
                                <li>Unlimited Email</li>
                            </ul>
                            <a href="http://saas-boilerplate.test/subscription?plan=User_month_50" class="btn-1">Get Started</a>
                        </div>
                    </div> --}}
                    <!-- Box-3 -->
                    {{-- <div class="col-md-4">
                        <div class="box">
                            <h3>Ultimate</h3>
                            <h4>$<span>85</span>/ Month</h4>
                            <ul>
                                <li>Admin Panel</li>
                                <li>500GB Storge</li>
                                <li>Unlimited Email</li>
                            </ul>
                            <a href="http://saas-boilerplate.test/subscription?plan=Team_plan_100" class="btn-2">Get Started</a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <!-- ======== End Our Price ======== -->

        <!-- ======== Start Clients ======== -->
        <section class="clients">
            <div class="container">
                <div class="slick-slider-clients">
                    <div class="item"><img src="{{ asset('saas/img/clients/1.png') }}" alt="" class="img-fluid"></div>
                    <div class="item"><img src="{{ asset('saas/img/clients/2.png') }}" alt="" class="img-fluid"></div>
                    <div class="item"><img src="{{ asset('saas/img/clients/3.png') }}" alt="" class="img-fluid"></div>
                    <div class="item"><img src="{{ asset('saas/img/clients/4.png') }}" alt="" class="img-fluid"></div>
                    <div class="item"><img src="{{ asset('saas/img/clients/5.png') }}" alt="" class="img-fluid"></div>
                    <div class="item"><img src="{{ asset('saas/img/clients/1.png') }}" alt="" class="img-fluid"></div>
                    <div class="item"><img src="{{ asset('saas/img/clients/2.png') }}" alt="" class="img-fluid"></div>
                    <div class="item"><img src="{{ asset('saas/img/clients/3.png') }}" alt="" class="img-fluid"></div>
                    <div class="item"><img src="{{ asset('saas/img/clients/4.png') }}" alt="" class="img-fluid"></div>
                    <div class="item"><img src="{{ asset('saas/img/clients/5.png') }}" alt="" class="img-fluid"></div>
                </div>
            </div>
        </section>
        <!-- ======== End Clients ======== -->

        <!-- ======== Start Contact Us ======== -->
        <section class="contact" id="contact">
            <div class="container">
                <div class="heading text-center">
                    <h2>Keep In Touch</h2>
                    <div class="line"></div>
                </div>

                <div class="row">
                    <div class="col-md-5">
                        <div class="title">
                            <h3>Contact Us :</h3>
                            <p>Nulla metus metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat</p>
                        </div>
                        <div class="content">
                            <!-- Info-1 -->
                            <div class="info d-flex align-items-start">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <h4 class="d-inline-block">PHONE :
                                    <br>
                                    <span>+17867497342 , +50937703581</span></h4>
                            </div>
                            <!-- Info-2 -->
                            <div class="info d-flex align-items-start">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <h4 class="d-inline-block">EMAIL :
                                    <br>
                                    <span>creatydev@gmail.com</span></h4>
                            </div>
                            <!-- Info-3 -->
                            <div class="info d-flex align-items-start">
                                <i class="fa fa-street-view" aria-hidden="true"></i>
                                <h4 class="d-inline-block">ADDRESS :<br>
                                    <span>6743 Saudi Arabia Street ,Ryadh, Bahri</span></h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7">

                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" id="comment" placeholder="Message"></textarea>
                            </div>
                            <button class="btn btn-block" type="submit">Send Now!</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection
