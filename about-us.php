<?php
include "header.php";
?>

<div class="container-fluid py-5 header__section"
    style="background-image:linear-gradient(to right, #010a35cc, #010a35cc),url(img/header__section6.jpeg); background-repeat: no-repeat;background-size: cover;">
    <div class="container py-5">
        <div class="row justify-content-center text-center align-items-center header__inner g-lg-4">
            <div class="col-md-6 ">
                <h1 class="display-6 mb-4">Who We Are</h1>
                <p class="mb-4">Since the 2005, Xclusive Markets Team has been providing financial services to traders
                    worldwide, setting the standard for online trading and growing to become one of the top providers in
                    the industry.
                </p>
                <div class="d-flex justify-content-center  mx-auto">
                    <a class="th-btn btn-style3" href="#">
                        Open Live Account</a>
                </div>
            </div>
            <!-- <div class="col-md-6 text-center">
                <img src="img/header__inner.png" alt="" class="img-fluid">
            </div> -->
        </div>
    </div>
</div>
<?php
include "feature.php";
?>

<style>
.about__us {
    position: relative;
    height: 100%;
    min-height: 550px;
    width: 100%;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
}

.about__us .about__us__inner {
    position: absolute;
    top: 0;
    left: 0;
    background-image: linear-gradient(to right, #0b113a78, #0b113a5c), url(img/about_us.jpeg);
    background-position: center;
    background-repeat: no-repeat;
    min-height: 550px;
    width: 68%;
    background-size: cover;
    clip-path: polygon(0 0, 91% 0, 79% 100%, 0% 100%);
    display: flex;
    align-items: center;
}

.left__side__image {
    background: #0b113a;
    position: absolute;
    right: 0;
    min-height: 430px;
    width: 68%;
    clip-path: polygon(14% 0, 100% 0%, 100% 100%, 5% 100%);
    z-index: 3;
}

.about__us .about__us__inner .content {
    max-width: 500px;
    margin-left: 150px;
}

.about__us .about__us__inner .content h1 {
    color: #fff;
    margin-bottom: 20px;
}

.about__us .about__us__inner .content h5 {
    color: #fff;
    margin-bottom: 20px;
}

.testimonial-carousel h3 {
    color: #fff;
}

.testimonial-item {
    max-width: 550px;
}

.testimonial-carousel .owl-nav {
    margin-top: 30px;
    display: flex;
    justify-content: left;
}

.testimonial-item-img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    border: 1px solid #ffff;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
    margin-bottom: 20px;
}

.testimonial-item-img img {
    width: 70px;
    height: 70px;
}

.owl-carousel .owl-item img {
    display: initial !important;
    width: initial !important;
}

.testimonial-carousel .owl-nav .owl-prev,
.testimonial-carousel .owl-nav .owl-next {
    margin: 0 5px;
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #000;
    background: #fff;
    border-radius: 45px;
    font-size: 22px;
    transition: .5s;
}

.testimonial-carousel .owl-nav .owl-prev:hover,
.testimonial-carousel .owl-nav .owl-next:hover {
    background: #fff;
}
</style>
<div class="container-fluid py-5 about__us my-5">
    <div class="about__us__inner">
        <div class="content">
            <h1 class="display-6">Dependable. solid. Genuine and forthright.</h1>
            <h5>Utilize Xclusive Markets' innovative trading tools to gain a competitive advantage.</h5>
            <p>We have implemented an extensive array of cutting-edge trading tools to enhance the trading experience.
                You'll be able to make better deals and have an overall better experience using these tools. With our
                insights and resources, you can make well-informed decisions about buying and selling. Let us help you
                take
                the following action.</p>
            <div class="d-flex mx-auto">
                <a class="th-btn btn-style3" href="#">
                    Open Live Account</a>
            </div>
        </div>
    </div>
    <div class="left__side__image">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 justify-content-end">
                    <div class="col-lg-8 wow fadeIn" data-wow-delay="0.5s">
                        <div class="owl-carousel testimonial-carousel">
                            <div class="testimonial-item ">
                                <div class="testimonial-item-img">
                                    <img src="img/131.png" alt="">
                                </div>
                                <h3>Lots of traders' preference</h3>
                                <p class="">Over the past several years, thousands of traders from all over the world
                                    have opted to cooperate with us, and new users and partners are always signing up
                                    for our platform.</p>
                            </div>
                            <div class="testimonial-item ">
                                <div class="testimonial-item-img">
                                    <img src="img/132.png" alt="">
                                </div>
                                <h3>Quick and open implementation</h3>
                                <p class="">Transactions are completed instantly, and there is total price transparency
                                    with no commission fees and raw spreads.</p>
                            </div>
                            <div class="testimonial-item ">
                                <div class="testimonial-item-img">
                                    <img src="img/133.png" alt="">
                                </div>
                                <h3>Expansive worldwide market</h3>
                                <p class="">We provide currency transactions, CFDs, commodities, shares, and indexes,
                                    regardless of your level of experience with forex. We let our customers use a single
                                    account to access several instruments.</p>
                            </div>
                            <div class="testimonial-item ">
                                <div class="testimonial-item-img">
                                    <img src="img/133.png" alt="">
                                </div>
                                <h3>24/7 assistance for customers</h3>
                                <p class="">We support our clients with customer care seven days a week, working around
                                    the clock to deliver a 24-hour trading experience.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<style>
.about__us__box {
    position: relative;

}

.about__us__box .about__us__box__singal {
    border-radius: 20px;
    box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.1);
    position: relative;
    background: #FFFFFF;
    border: 1px solid #CAE7F5;
}

.about__us__box .content__outer {
    position: relative;
    padding-left: 50px;
    padding-right: 50px;
    padding-bottom: 38px;
}

.about__us__box .shape__img {
    position: absolute;
    width: 162px;
    height: 89px;
    position: absolute;
    top: 20px;
    right: 0px;
}

.about__us__box img {
    width: 70px;
    height: 70px;
    margin-bottom: 10px;
}

.about__us__box .content__img {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    width: 105px;
    height: 108px;
    border-radius: 50%;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    overflow: hidden;
    position: relative;
    background: linear-gradient(143.01deg, #190b3a 11.97%, #38548b 93.37%);
    margin-bottom: 20px;
}

.about__us__box .about__us__box__singal::after {
    content: '';
    position: absolute;
    top: 18px;
    left: 8px;
    right: 8px;
    bottom: -1px;
    border-radius: 20px;
    -webkit-box-shadow: 0 5px 0px #0c2139;
    box-shadow: 0 5px 0px #0c2139;
    opacity: 1;
    z-index: -1;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
}
</style>
<div class="container-fluid  about__us__box py-5">
    <div class="container py-5">
        <div class="row mb-5 justify-content-center text-center">
            <div class="col-lg-7">
                <h1 class="display-6">Establish in your trading expertise.</h1>
                <p>What you do gets the edge it deserves according to our competitive market conditions, trading
                    features, and exclusive protections.</p>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-md-4">
                <div class="about__us__box__singal">
                    <div class="shape__img" style="background-image:url(img/shape.png)
                   ">

                    </div>
                    <div class="content__outer">
                        <div class="content__img">
                            <img src="img/f12.png" alt="" srcset="">
                        </div>
                        <h5>Low and stable spreads
                        </h5>
                        <p>Trade with tight, predictable spreads on all instruments, even in times of volatility.
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about__us__box__singal">
                    <div class="shape__img" style="background-image:url(img/shape.png)
                   ">

                    </div>
                    <div class="content__outer">
                        <div class="content__img">
                            <img src="img/f12.png" alt="" srcset="">
                        </div>
                        <h5>Activate Stop Out Protection
                        </h5>
                        <p>A novel protective feature that delays or prevents stop outs will result in 30% fewer stop
                            outs.
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about__us__box__singal">
                    <div class="shape__img" style="background-image:url(img/shape.png)
                   ">

                    </div>
                    <div class="content__outer">
                        <div class="content__img">
                            <img src="img/f12.png" alt="" srcset="">
                        </div>
                        <h5>There are no overnight rates
                        </h5>
                        <p>Unlimited overnight positions can be held on all major FX pairs, the majority of minor FX
                            pairs, gold, cryptocurrency, and indexes.
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about__us__box__singal">
                    <div class="shape__img" style="background-image:url(img/shape.png)
                   ">

                    </div>
                    <div class="content__outer">
                        <div class="content__img">
                            <img src="img/f12.png" alt="" srcset="">
                        </div>
                        <h5>Very quick implementation
                        </h5>
                        <p>Trade on the proprietary Xclusive Markets Terminals and MetaTrader platforms in milliseconds.
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about__us__box__singal">
                    <div class="shape__img" style="background-image:url(img/shape.png)
                   ">

                    </div>
                    <div class="content__outer">
                        <div class="content__img">
                            <img src="img/f12.png" alt="" srcset="">
                        </div>
                        <h5>Stop out level of 0%
                        </h5>
                        <p>Maintain a 0% margin level and stay in the markets longer before stopping out of all
                            accounts.
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about__us__box__singal">
                    <div class="shape__img" style="background-image:url(img/shape.png)
                   ">

                    </div>
                    <div class="content__outer">
                        <div class="content__img">
                            <img src="img/f12.png" alt="" srcset="">
                        </div>
                        <h5>Leverage that can be modified

                        </h5>
                        <p>Use adjustable leverage up to 1:unlimited to adjust your leverage to your risk management
                            plan.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "deposite.php";
?>
<?php
include "footer.php";
?>