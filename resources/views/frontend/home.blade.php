@extends('frontend.app')
@section('content')
    <!-- Home -->
    <div class="intro intro3">
        <div class="container">
            <div class="row center-content">
                <div class="col-md-5 col-sm-6">
                    <h3>Good food choices are good investments.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio finibus bibendum amet
                        leo. </p>
                    <div class="space30"></div>
                    <div class="dual-btn">
                        <a href="#explore" class="btn btn-lg btn-primary page-scroll">Order Now <span
                                class="fa fa-shopping-basket"></span></a> &nbsp; &nbsp;
                        <a href="#about" class="btn btn-lg btn-default btn-border page-scroll">Learn More <i
                                class=" ilmosys-arrow-right"></i></a>
                    </div>

                </div>
                <div class="col-md-7 col-sm-6 no-padding">
                </div>
            </div>
        </div>
    </div>

    <!-- Stats -->
    <div id="stats2" class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="stats2-info">
                        <i class="icon-piggy"></i>
                        <p><span class="count">1287</span>+</p>
                        <h2>Savings</h2>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="stats2-info">
                        <i class="icon-photo"></i>
                        <p><span class="count">5786</span>+</p>
                        <h2>Photos</h2>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="stats2-info">
                        <i class="icon-rocket"></i>
                        <p><span class="count">1440</span>+</p>
                        <h2>Rockets</h2>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="stats2-info">
                        <i class="icon-world"></i>
                        <p><span class="count">7110</span>+</p>
                        <h2>Globes</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- About Us -->
    <div id="about" class="container">
        <!-- About Section 1 -->
        <div class="intro intro-about2">
            <div class="container">
                <div class="row center-content">
                    <div class="col-md-7 ">
                        <img src="images/features/1.png" class="pull-left img-responsive" alt="" />
                    </div>
                    <div class="col-md-5">
                        <h3>We pride ourselves on making real food from the best ingredients.</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio finibus bibendum
                            in sit amet leo. Mauris feugiat erat tellus.</p>
                        <a href="#" class="btn btn-lg btn-primary">Learn More <i class="icon-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Section 2 -->
        <div class="intro intro-about2">
            <div class="container">
                <div class="row center-content">
                    <div class="col-md-5">
                        <h3>We make everything by hand with the best possible ingredients.</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio finibus bibendum
                            in sit amet leo. Mauris feugiat erat tellus.Far far away, behind the word mountains, far from
                            the countries Vokalia and Consonantia, there live the blind texts.</p>

                        <ul class="list">
                            <li><i class="fa fa-check"></i> Etiam sed dolor ac diam volutpat.</li>
                            <li><i class="fa fa-check"></i> Erat volutpat aliquet imperdiet.</li>
                            <li><i class="fa fa-check"></i> purus a odio finibus bibendum.</li>
                        </ul>

                        <div class="space30"></div>
                        <a href="#" class="btn btn-lg btn-primary">Learn More <i class="icon-arrow-right"></i></a>
                    </div>
                    <div class="col-md-7">
                        <img src="images/features/2.png" class="pull-left img-responsive" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space80"></div>


    <div class="video-action">
        <div class="row text-center">
            <h1>When a man's stomach is full it makes no <br> difference whether he is rich or poor.</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio <br>finibus bibendum in sit
                amet leo. Mauris feugiat erat tellus.</p>
            <br><br>
            <a href="https://www.youtube.com/watch?v=bZx8rPd-PKQ" class="swipebox-video">
                <div class="intro-video-pop">
                    <i class="fa fa-play"></i> Watch Our Story
                </div>
            </a>
        </div>
    </div>



    <div id="explore" class="elements-content">
        <div class="container">
            <div class="about-inline text-center">
                <h3>Explore Our Foods </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio finibus bibendum in sit
                    amet leo. Mauris feugiat erat tellus. Far far away, behind the word mountains, far from the countries
                    Vokalia and Consonantia, there
                    live the blind texts. Separated they live in Bookmarksgrove.</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-product">
                        <div class="img-wrap"><img src="images/foods/01.jpg" alt="img"></div>
                        <div class="info-wrap">
                            <h4 class="title">Rainbow Vegetable Sandwich</h4>
                            <p class="desc"> Time: 15 - 20 Minutes | Serves: 1 </p>
                            <div class="price-wrap h3">
                                <span class="price-new">$10.50</span> <del class="price-old">$11.70</del>
                            </div>
                        </div>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right" data-toggle="modal"
                                data-target="#modalContactForm">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-product">
                        <div class="img-wrap"><img src="images/foods/02.jpg" alt="img"></div>
                        <div class="info-wrap">
                            <h4 class="title">Vegetarian Burger</h4>
                            <p class="desc"> Time: 30 - 45 Minutes | Serves: 1 </p>
                            <div class="price-wrap h3">
                                <span class="price-new">$9.20</span> <del class="price-old">$10.50</del>
                            </div>
                        </div>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right" data-toggle="modal"
                                data-target="#modalContactForm">Order Now</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-product">
                        <div class="img-wrap"><img src="images/foods/03.jpg" alt="img"></div>
                        <div class="info-wrap">
                            <h4 class="title">Raspberry Stuffed French Toast</h4>
                            <p class="desc"> Time: 10 - 15 Minutes | Serves: 1 </p>
                            <div class="price-wrap h3">
                                <span class="price-new">$12.50</span> <del class="price-old">$13.20</del>
                            </div>
                        </div>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right" data-toggle="modal"
                                data-target="#modalContactForm">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space100"></div>

    <!-- Testimonials -->
    <div id="reviews" class="testimonials-color">
        <div class="container">
            <div class="about-inline text-center">
                <h3>Testimonials </h3>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="quote2">
                        <div>
                            <img src="images/testimonials/1.jpg" alt="" />
                            <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live."</p>
                            <span class="author">Simab Dave - Web Designer</span>
                        </div>
                        <div>
                            <img src="images/testimonials/2.jpg" alt="" />
                            <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live far from the countries Vokalia."</p>
                            <span class="author">Johnthan Doe - UX Designer</span>
                        </div>
                        <div>
                            <img src="images/testimonials/1.jpg" alt="" />
                            <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. "</p>
                            <span class="author">Maccy Doe - Front End</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space100"></div>
        </div>
    </div>

    <!-- Faq -->
    <div class="container" id="faq">
        <div class="about-inline text-center">
            <h3>Frequently Asked Questions </h3>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="faq">
                    <h4> <span>~</span> Is Foodera Bread really baked fresh each day?</h4>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                        the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                        language.</p>
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="faq">
                    <h4> <span>~</span> Do you bake breads containing animal fats or products?</h4>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                        the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                        language.</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="faq">
                    <h4> <span>~</span> Can I order your products online?</h4>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                        the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                        language.</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="faq">
                    <h4> <span>~</span> When are you opening a shop near me?</h4>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                        the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                        language.</p>
                </div>
            </div>
        </div>
        <div class="space100"></div>
    </div>

    <!-- PARALLAX -->
    <section class="parallax-content2 parallax2 text-center" data-stellar-background-ratio="0.4">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4>Baked fresh daily by bakers with passion.</h4>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <a href="#" class="btn btn-lg btn-primary pull-left">Learn More <i
                                class="icon-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- PARALLAX -->
    <section class="text-center">
        <div class="cta-wrap subscribe-elt2 ">
            <div class="container">
                <div class="col-md-12">
                    <h1>Hurry up! Subscribe our newsletter <br> and get<span> 25% Off</span></h1>
                    <p>Limited time offer for this month. No credit card required.</p>

                    <form class="intro-newsletter" action="#" id="invite" method="POST">
                        <div class="row">
                            <div class="col-md-8">
                                <input class="e-mail" placeholder="Email Address here" name="email" id="eaddress"
                                    data-validate="validate(required, email)" type="email">
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-primary btn-block" type="submit">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="space80"></div>
@endsection
