<?php
include "header.php";
?>
<div class="container-fluid py-5 header__section"
    style="background-image:linear-gradient(to right, #010a35cc, #010a35cc),url(img/header__section6.jpeg); background-repeat: no-repeat;background-size: cover;">
    <div class="container py-5">
        <div class="row justify-content-center text-center align-items-center header__inner g-lg-4">
            <div class="col-md-6 ">
                <h1 class="display-6 mb-4">Build Collaboration the role with Xclusive Markets</h1>
                <p class="mb-4">Boasting the Xclusive Markets Partners Program, you may increase your potential company
                    earnings by joining a reputable and well-established worldwide broker that was founded by a group of
                    experts with years of experience in the field since 2005.
                </p>
                <div class="d-flex justify-content-center  mx-auto">
                    <a class="th-btn btn-style3" href="#">
                        Open Live Account</a>
                </div>
            </div>

        </div>
    </div>
</div>
<?php
include "feature.php";
?>
<style>
.partner__about {
    position: relative;
    overflow: hidden;
}

.partner__about .partner__about__left {
    position: relative;
    height: 100%;
    min-height: 600PX;

}

.partner__about__left__outer {
    position: absolute;
    top: 0;
    left: 0;
    background: #190b3a;
    height: 100%;
    width: 100%;
    border-top-right-radius: 50%;
    border-bottom-right-radius: 50%;
}

.partner__about__left::before {
    position: absolute;
    content: "";
    top: 0;
    left: -50%;
    background: #190b3a;
    height: 100%;
    min-height: 600PX;
    width: 450px;

}

.partner__about__left .shape1 {
    position: absolute;
    top: 0;
    left: -58%;
    background: #19163a;
    height: 100%;
    min-height: 700px;
    width: 100%;
    max-width: 288px;
    transform: rotate(355deg);
    z-index: 3;
}

.partner__about__left-img {
    margin-right: -65px;
}

.partner__about__right {
    padding-left: 30px;
}

.partner__about__left .shape2 {
    position: absolute;
    top: -19px;
    left: -150px;
    height: 273px;
    width: 100%;
    max-width: 160px;
    z-index: 2;
    transform: rotate(355deg);
}
</style>
<div class="container-fluid partner__about">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-md-6 partner__about__left">
                <div class="shape1"></div>
                <div class="shape2" style="background:url(img/partner5.png);
                background-repeat:no-repeat;background-size:cover;"></div>
                <div class="shape3"></div>
                <div class="partner__about__left__outer text-end d-flex align-items-center justify-content-center">
                    <img src="img/partner__about2.png" alt="" srcset="" class="img-fluid partner__about__left-img">
                </div>
            </div>
            <div class="col-md-6">
                <div class="partner__about__right">

                    <h1 class="display-6 mb-4">What is the Partner Program Introduction?</h1>
                    <p class="mb-4">Join us as an introducing broker (IB) if you find the world of investing
                        fascinating.
                        All
                        you have to do is earn more money for yourself depending on how many traders you bring to
                        Xclusive
                        Markets overall.
                    </p>
                    <div class="d-flex mx-auto">
                        <a class="th-btn btn-style3" href="#">
                            Open Live Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
.approach-section {
    position: relative;
    background-repeat: repeat;
}

.approach-section .upper-box {
    position: relative;
    text-align: center;
    padding: 100px 0px 320px;
    background-attachment: fixed;
}

.approach-section .upper-box:before {
    position: absolute;
    content: '';
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    display: block;
    background-color: rgba(0, 0, 0, 0.80);
    background-color: rgba(0, 0, 0, 0.80);
}

.approach-section .upper-box .title {
    position: relative;
    color: #009dea;
    font-size: 18px;
    letter-spacing: 1px;
    margin-bottom: 20px;
    text-transform: uppercase;
}

.approach-section .upper-box h2 {
    position: relative;
    color: #ffffff;
    font-size: 36px;
    font-weight: 700;
    line-height: 1.4em;
    margin-bottom: 20px;
}

.approach-section .upper-box .quality {
    position: relative;
    color: #ffffff;
    font-size: 24px;
    font-weight: 400;
}

.approach-section .blocks__section {
    position: relative;
    padding: 50px 50px 20px;
    background-color: #ffffff;
}

.services__block {
    position: relative;
    margin-bottom: 30px;
}

.services__block .inner__box {
    position: relative;
    padding: 35px 15px;
    text-align: center;
    border: 2px solid #efefee;
}

.services__block .inner__box .icon__box {
    position: relative;
    font-size: 60px;
    color: #009dea;
    line-height: 1em;
    margin-bottom: 20px;
}

.services__block .inner__box h3 {
    position: relative;
    color: #222222;
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 15px;
}

.services__block .inner__box h3 a {
    position: relative;
    color: #222222;
    transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
}

.services__block .inner__box h3 a:hover {
    color: #009dea;
}

.services__block .inner__box .text {
    position: relative;
    color: #888888;
    font-size: 14px;
    line-height: 1.8em;
}

.services__block .inner__box .overlay__box {
    position: absolute;
    content: '';
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    opacity: 0;
    display: block;
    text-align: center;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

    transition: all 900ms ease;
    transform: perspective(400px) rotateX(-90deg);
    transform-origin: top;
    transition: all 0.5s;
}

.services__block .inner__box:hover .overlay__box {
    opacity: 1;
    transform: perspective(400px) rotateX(0deg);
}

.services__block .inner__box .overlay__box .overlay__inner {
    position: relative;
    padding: 35px 15px;
}

.services__block .inner__box .overlay__box:before {
    position: absolute;
    content: '';
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    display: block;
    background-color: rgba(0, 0, 0, 0.80);
}

.services__block .inner__box .overlay__box .overlay__inner {
    position: relative;

}

.services__block .inner__box .overlay__box .overlay__inner h4 {
    position: relative;
    color: #ffffff;
}

.services__block .inner__box .overlay__box .overlay__inner h4 a {
    position: relative;
    color: #ffffff;
    transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
}

.services__block .inner__box .overlay__box .overlay__inner .overlay__text {
    position: relative;
    color: #888888;
    font-size: 14px;
    line-height: 1.8em;
    margin-top: 10px;
}

/*Steps Section*/

.steps-section {
    position: relative;
    padding: 90px 0px 60px;
}

.step-block {
    position: relative;
    margin-bottom: 40px;
}

.step-block .inner__box {
    position: relative;
}

.step-block .inner__box .number {
    position: relative;
    font-size: 24px;
    font-weight: 500;
    color: #009dea;
    line-height: 1.4em;
    margin-bottom: 15px;
    font-family: 'Poppins', sans-serif;
}

.step-block .inner__box .number a {
    color: #009dea;
}

.step-block .inner__box .number span {
    color: #222222;
}

.step-block .inner__box .text {
    position: relative;
    color: #888888;
    font-size: 15px;
    line-height: 1.8em;
}

.services__block img {
    width: 70px;
    height: 70px;
}
</style>
<!--Approach Section-->
<section class="approach-section container-fluid">


    <div class="container">
        <div class="blocks__section">
            <div class="row clearfix">

                <!--Services Block-->
                <div class="services__block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner__box">
                        <div class="icon__box">
                            <img src="img/83.png" alt="" srcset="" class="img-fluid ">
                        </div>
                        <h3><a href="services-single.html">Audit & Assurance</a></h3>
                        <div class="text">Then the things you’ve always been doing are no longer working</div>
                        <div class="overlay__box" style="background:url(img/home_3.jpg)">
                            <div class="overlay__inner">
                                <div class="icon__box">
                                    <img src="img/83.png" alt="" srcset="" class="img-fluid ">
                                </div>
                                <h4><a href="services-single.html">Audit & Assurance</a></h4>
                                <div class="overlay__text">Then the things you’ve always been doing are no longer
                                    working
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services__block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner__box">
                        <div class="icon__box">
                            <img src="img/83.png" alt="" srcset="">
                        </div>
                        <h3><a href="services-single.html">Investment Planning</a></h3>
                        <div class="text">Then the things you’ve always been doing are no longer working</div>
                        <div class="overlay__box" style="background:url(img/home_3.jpg)">
                            <div class="overlay__inner">
                                <div class="icon__box">
                                    <img src="img/83.png" alt="" srcset="" class="img-fluid ">
                                </div>
                                <h4><a href="services-single.html">Investment Planning</a></h4>
                                <div class="overlay__text">Bonds and commodities are much more stable than stocks sound
                                    bonds</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services__block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner__box">
                        <div class="icon__box">
                            <img src="img/83.png" alt="" srcset="">
                        </div>
                        <h3><a href="services-single.html">Marketing State</a></h3>
                        <div class="text">However the payout is a bit lower in itself. We allow our invest in the</div>
                        <div class="overlay__box" style="background:url(img/home_3.jpg)">
                            <div class="overlay__inner">
                                <div class="icon__box">
                                    <img src="img/83.png" alt="" srcset="" class="img-fluid ">
                                </div>
                                <h4><a href="services-single.html">Marketing State</a></h4>
                                <div class="overlay__text">However the payout is a bit lower in itself. We allow our
                                    invest in the</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services__block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner__box">
                        <div class="icon__box">
                            <img src="img/83.png" alt="" srcset="">
                        </div>
                        <h3><a href="services-single.html">Strategic Planning</a></h3>
                        <div class="text">Your company will be able to take more risks once it has invested</div>
                        <div class="overlay__box" style="background:url(img/home_3.jpg)">
                            <div class="overlay__inner">
                                <div class="icon__box">
                                    <img src="img/83.png" alt="" srcset="" class="img-fluid ">
                                </div>
                                <h4><a href="services-single.html">Strategic Planning</a></h4>
                                <div class="overlay__text">Your company will be able to take more risks once it has
                                    invested</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services__block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner__box">
                        <div class="icon__box">
                            <img src="img/83.png" alt="" srcset="" class="img-fluid ">
                        </div>
                        <h3><a href="services-single.html">Products Consulting</a></h3>
                        <div class="text">You can transform your business to a asset coaching programs</div>
                        <div class="overlay__box" style="background:url(img/home_3.jpg)">
                            <div class="overlay__inner">
                                <div class="icon__box">
                                    <img src="img/83.png" alt="" srcset="" class="img-fluid ">
                                </div>
                                <h4><a href="services-single.html">Products Consulting</a></h4>
                                <div class="overlay__text">You can transform your business to a asset coaching programs
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services__block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner__box">
                        <div class="icon__box">
                            <img src="img/83.png" alt="" srcset="" class="img-fluid ">
                        </div>
                        <h3><a href="services-single.html">Save Money</a></h3>
                        <div class="text">Then the things you’ve always been doing are no longer working</div>
                        <div class="overlay__box" style="background:url(img/home_3.jpg)">
                            <div class="overlay__inner">
                                <div class="icon__box">
                                    <img src="img/83.png" alt="" srcset="" class="img-fluid ">
                                </div>
                                <h4><a href="services-single.html">Save Money</a></h4>
                                <div class="overlay__text">Your company will be able to take more risks once it has
                                    invested</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



</section>
<!--End Approach Section-->


<?php
include "deposite.php";
?>
<?php
include "footer.php";
?>