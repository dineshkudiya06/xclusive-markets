<?php
include "header.php";
?>



<style>
.lines__drop {
    position: relative;
    display: table;
    height: 100%;
    width: 100%;
    overflow: hidden;

}

.lines {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    height: 100%;
    margin: auto;
    width: 100%;


}

.line {
    position: absolute;
    width: 1px;
    height: 100%;
    top: 0;
    left: 76%;
    background: #41446c;
    overflow: hidden;
    z-index: 100;
}

.line::after {
    content: '';
    display: block;
    position: absolute;


    top: -10%;
    left: 0;

    width: 2px;
    height: 100px;
    background: linear-gradient(0deg, #fff, transparent);
    animation: drop 15s 0s ease-in-out infinite;
}

.line:nth-child(1) {
    margin-left: -67%;
}

.line:nth-child(1)::after {
    animation-delay: 1s;
}

.line:nth-child(2) {
    margin-left: -51%;

}

.line:nth-child(2)::after {
    animation-delay: 4s;

}

.line:nth-child(3)::after {
    animation-delay: 1.5s;
}

.line:nth-child(4) {
    margin-left: 15%;
}

.line:nth-child(4)::after {
    animation-delay: 4s;
}

@keyframes drop {
    0% {
        top: -10%;
        opacity: 1;
    }

    50% {
        top: 50%;

    }

    100% {
        top: 110%;
        opacity: 0.5;
    }
}

@keyframes drop2 {
    0% {
        bottom: 0;
        opacity: 1;
    }

    50% {
        bottom: 50%;

    }

    100% {
        bottom: 100%;
        opacity: 0.5;
    }
}

@media (max-width:1024px) {
    .lines__drop .lines {
        position: relative;
        display: table;
        height: 100%;
        width: 100%;
        overflow: hidden;
        display: none;

    }

    .homes__padding__inner {
        padding-top: 100px;
        padding-bottom: 100px;

    }


}

@media(max-width:1250px) {
    .homes__padding {
        padding-top: 100px;
        padding-bottom: 100px;
    }

    .homes__padding .display-4 {
        font-size: 40px;
    }
}
</style>


<div class="container-fluid p-0 mb-5 lines__drop">
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">

                <img class="w-100" src="img/home1.jpeg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center homes__padding">
                            <div class="col-lg-7  homes__padding__inner">
                                <h1 class="display-4 text-white mb-4 animated slideInDown">
                                    Supervised. trustworthy.
                                    Resilient.</h1>
                                <p class="fs-5 text-body mb-4 pb-2 mx-sm-5 animated slideInDown"
                                    style="z-index: 10000;">
                                    Transforming your perception of international markets. Leverage 1:5000 with
                                    ultra-low 0.0 spreads to maximize your gains. Experience trading like never before
                                    when you join us!</p>
                                <div class="d-flex justify-content-center  m-auto">
                                    <a class="th-btn btn-style3" href="#">
                                        Open Live Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/home_3.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center homes__padding" style="z-index: 10000;">
                            <div class="col-lg-7 homes__padding__inner">
                                <h1 class="display-4 text-white mb-4 animated slideInDown">Grow Your Profitability with
                                    a Compression of Up to 1:5000</h1>
                                <p class="fs-5 text-body mb-4 pb-2 mx-sm-5 animated slideInDown">Leverage adjustment
                                    online up to a maximum of 1:5000, excluding Platinum Accounts, to fully realize your
                                    potential. Now is the time to strengthen your trading!</p>
                                <div class="d-flex justify-content-center  m-auto">
                                    <a class="th-btn btn-style3" href="#">
                                        Open Live Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>



<?php
include "feature.php";
?>



<style>
.home__about {
    background: #000f39;
    position: relative;
    overflow: hidden;
}

.home__about::before {
    content: url(img/innde-left-side.png);
    position: absolute;
    bottom: -3%;
    left: 0;
    display: block;
}

.home__about::after {
    content: url(img/innde-right-side.png);
    position: absolute;
    bottom: -3%;
    right: 0;
    display: block;
}

.home__about h1,
.home__about h5 {
    color: #fff;
}

.home__about .home__about__img {
    width: 70px;
    height: 70px;
    background-image: linear-gradient(to right, #ff8748, #fe7852 13%, #fc5454 50%, #ff3c56 81%, #fb2a30);
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
    margin-bottom: 10px;
}

.home__about .home__about__img img {
    width: 50px;
    height: 50px;
    filter: brightness(0) invert(1);
}

.home__about p {
    color: rgba(255, 255, 255, .6);
}

@media (max-width:1024px) {
    .home__about::before {
        content: url(img/innde-left-side.png);
        position: absolute;
        bottom: -3%;
        left: 0;
        display: none;
    }

    .home__about::after {
        content: url(img/innde-right-side.png);
        position: absolute;
        bottom: -3%;
        right: 0;
        display: none;
    }

}
</style>
<div class="container-fluid py-5 home__about">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col">
                        <h1 class="display-6 mb-5">Reliable. trustworthy. open and honest.</h1>
                        <p class="mb-4">Utilize Xclusive Markets' cutting-edge trading tools to obtain a competitive
                            advantage.
                            We have added a number of cutting-edge trading tools to enhance the trading experience. You
                            will not only have a better experience with these tools, but you will also be able to make
                            better transactions. We offer information and resources to help you make wise decisions
                            about buying and selling. Let us help you take the next step.
                        </p>
                        <div class="d-flex   m-auto">
                            <a class="th-btn btn-style3" href="#">
                                Open Live Account</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row g-5">
                    <div class="col-md-6">
                        <div class="home__about__content">
                            <div class="home__about__img">
                                <img src="img/feather07.svg" alt="">
                            </div>
                            <div class="home__about__content__desc">
                                <h5>24/7 Client Assistance.</h5>
                                <p>We support our clients with customer care seven days a week, working around the clock
                                    to deliver a 24-hour trading experience.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="home__about__content">
                            <div class="home__about__img">
                                <img src="img/feather04.svg" alt="">
                            </div>
                            <div class="home__about__content__desc">
                                <h5>Quick and Open Implementation</h5>
                                <p>Orders are completed instantly, and there is total price transparency with no
                                    commission fees and raw spreads.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="home__about__content">
                            <div class="home__about__img">
                                <img src="img/feather05.svg" alt="">
                            </div>
                            <div class="home__about__content__desc">
                                <h5>Many of traders' first choice.</h5>
                                <p>Over the course of the last 15 years, thousands of traders from all over the world
                                    have decided to cooperate with us, and new users and partners are constantly joining
                                    our platform.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="home__about__content">
                            <div class="home__about__img">
                                <img src="img/feather06.svg" alt="">
                            </div>
                            <div class="home__about__content__desc">
                                <h5>Large Worldwide Market.</h5>
                                <p>We provide currency transactions, CFDs, commodities, shares, and indexes, catering to
                                    both novice and seasoned forex traders. Multiple instruments can be accessed by our
                                    clients from a single account.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<style>
.home__forex {
    background: #fff;
    border-radius: 10px;
    padding: 20px;
    position: relative;
    margin-bottom: 25px;
    transition: 0.4s;
    border: 3px dashed gray;
}

.home__forex__left {
    position: absolute;
    transform: rotate(-90deg) translate(-50%, 0);
    font-size: 36px;
    font-weight: 600;
    font-family: var(--title-font);
    color: transparent;
    -webkit-text-stroke: 2px red;
    transform-origin: left top;
    top: 50%;
    left: 20px;
    opacity: 0.15;
}

.home__forex__icon {
    display: inline-block;
    margin-bottom: 35px;
    position: relative;
    padding: 10px 0 0 10px;
    margin-left: -10px;
}



.home__forex__icon img {
    transition: 0.4s;
    width: 70px;
    height: 70px;


}

.home__forex__title {
    margin-top: -0.3em;
    margin-bottom: 10px;
    font-weight: 600;
    font-size: 24px;
}

.home__forex__title a {
    color: #000;
}

.home__forex:hover {
    border-image: linear-gradient(to right, #ff8748, #fe7852 13%, #fc5454 50%, #ff3c56 81%, #fb2a30) 30;
    border-width: 3px;
    border-style: solid;
}

.home__forex:hover img {
    transform: rotateY(180deg);
}

.home__forex__content__list1 {
    margin-top: -80px;
}

.home__forex__content__list2 {
    margin-top: -160px;
}

.home__forex__content__list3 {
    margin-top: -240px;
}

.home__forex1 .home__forex__card {
    position: relative;
}

.home__forex1 img {
    width: 60px;
    height: 60px;
    display: flex;
    color: #222429;
    transition: 1s cubic-bezier(0.075, 0.82, 0.165, 1);
    filter: brightness(0%);
}

.home__forex1 h5 {

    font-size: 20px;
    line-height: 1;
    font-weight: 700;
    color: #222429;
    margin-top: 20px;
    margin-bottom: 25px;
    transition: 1s cubic-bezier(0.075, 0.82, 0.165, 1);
}

.home__forex__card:hover img {
    transform: translateY(50px);
    filter: none;

}

.home__forex__card:hover h5 {
    margin-left: 80px;
}

.home__forex__wrap {
    position: relative;
}
</style>




<div class="container-fluid home__forex1 py-5">
    <div class="container py-5">
        <div class="row justify-content-center g-5">
            <div class="col-md-10 mb-4 text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-6 mb-3">Xclusive Markets: Why Do Traders Employ Us?</h1>
                <p class="mb-5">Xclusive Markets is trusted by thousands of traders worldwide for trading excellence.
                    Join the revolution!</p>
            </div>
        </div>
        <div class="row g-5 home__forex__wrap">
            <div class="col-md-4">
                <div class="home__forex__card home__forex__card__bottom">
                    <img src="img/whychoose-iconnw-1.png" alt="">
                    <h5>Unique Tools</h5>
                    <p>Examine stocks, indices, currencies, CFDs, commodities, and shares—all of which are available in
                        a single account for a flexible trading environment.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="home__forex__card home__forex__card__bottom">
                    <img src="img/whychoose-iconnw-2.png" alt="">
                    <h5>Protection of Capital</h5>
                    <p>You may transact with confidence knowing that your money is totally safe and secure thanks to
                        negative-balance protection.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="home__forex__card">
                    <img src="img/whychoose-iconnw-3.png" alt="">
                    <h5>Many of people trust us</h5>
                    <p>Our platform is the go-to option for thousands of international traders, and it continues to draw
                        new partners and users every day.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="home__forex__card">
                    <img src="img/whychoose-iconnw-4.png" alt="">
                    <h5>Completely Quick Speed</h5>
                    <p>Our prompt and transparent executions enable traders to take advantage of market opportunities
                        with accuracy and efficiency.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="home__forex__card">
                    <img src="img/whychoose-iconnw-5.png" alt="">
                    <h5>Trade that is seamless</h5>
                    <p>Take advantage of premium, affordable trading with quick execution, minimal spreads, and
                        excellent tools.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="home__forex__card">
                    <img src="img/whychoose-iconnw-6.png" alt="">
                    <h5>Quick Trades</h5>
                    <p>Receive continuous payments using the payment method of your choice. Simple and rapid withdrawals
                        and deposits.</p>
                </div>
            </div>
        </div>
    </div>
</div>











<style>
.account__type__outer {
    background: #000f39;
    position: relative;
}

.account__type__outer h1 {
    color: #fff;
}

.account__type__outer::after {
    position: absolute;
    content: "";
    inset: 1;
    background-image: url(img/overview-line.png);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;

}

.account__type {
    background-color: #fff;
    position: relative;
    overflow: hidden;
}


.account__type__left {
    width: 30%;

}

.account__type__left button {
    text-align: left;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.account__type .nav-pills .nav-link.active {
    color: #fff;
    background: #38548b !important;
}

.account__type span .greater__than {
    font-size: 14px;
    color: #d3cdcd !important;
}

.account__type .nav-link {
    color: #000;
    padding: 20px;
    border: 1px solid #80808030;
    border-left: 2px solid #000f39;
    margin-bottom: 20px;
    transition: all 0.3s ease;
}

.account__type .nav-link:hover {
    background: #38548b;
    color: #fff;
}

.exclusive__account__outer {

    width: 400px;
}

.exclusive__account__data__box {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 25px;
}

.exclusive__a_d_b {
    margin-right: 5px;
}



.account__type__row {
    width: 100%;
}

.account__type__outer .tab-content {
    width: 70%;
}

.account__type__outer .tab-content .tab-pane {}

.account__heading {
    width: 100%;
    position: relative;

}

.account__heading img {
    position: absolute;
    top: 0;
    right: 0;
    opacity: 0.2;
}

.account__heading__inner {
    width: 100%;
    max-width: 450px;

    margin-left: 100px;
    ;

}

.account__heading h3 {
    margin-bottom: 30px;
}

@media(max-width:1024px) {
    .account__type__row {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
    }

    .account__type__left {
        width: 100%;
    }

    .account__type__left .nav-link {
        width: 23%;
        color: #000;
        padding: 20px;
        border: 1px solid #80808030;
        border-bottom: 2px solid #000f39;
        margin-left: 5px;
        transition: all 0.3s ease;
    }

    .account__type__outer .tab-content {
        width: 100%;
    }

    .account__heading__inner {
        width: 100%;
        margin-left: initial;
    }

    .account__type span .greater__than {
        color: #d3cdcd !important;
        display: none;
    }

}
</style>
<div class="container-fluid py-5 account__type__outer">
    <div class="container py-5 ">
        <h1 class="display-6 mb-3">Overview of trading accounts.</h1>
        <p class="mb-5">Employ a trading environment that is flexible and offers special benefits to enter the market.
        </p>
        <div class="row  account__type">
            <div class="col ps-0">
                <div class="d-flex align-items-start p-5 account__type__row">
                    <div class="nav flex-xl-column flex-row nav-pills me-3 account__type__left" id="v-pills-tab"
                        role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                            aria-selected="true"> <span><img src="img/exclusive-account-light1.png" alt=""
                                    class="me-3"><b>Exclusive</b>
                            </span>
                            <span><i class="fa-solid fa-greater-than greater__than"></i></span></button>
                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                            aria-selected="false"><span><img src="img/standard-ligth2.png" alt=""
                                    class="me-3"><b>Standard </b>
                            </span>
                            <span><i class="fa-solid fa-greater-than greater__than"></i></span></button>
                        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                            aria-selected="false"><span><img src="img/standard-plus-light3.png" alt=""
                                    class="me-3"><b>Standard Plus</b>
                            </span>
                            <span><i class="fa-solid fa-greater-than greater__than"></i></span></button>
                        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                            aria-selected="false"><span><img src="img/cent-light4.png" alt="" class="me-3"><b>Cent </b>
                            </span>
                            <span><i class="fa-solid fa-greater-than greater__than"></i></span></button>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active exclusive__account__outer" id="v-pills-home"
                            role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="account__heading">
                                <img src="img/exclusive-account-light1.png" alt="">
                                <div class="account__heading__inner">
                                    <h3>
                                        Exclusive Account
                                    </h3>
                                    <div class="exclusive__account__data">
                                        <div class="exclusive__account__data__box">
                                            <span class="exclusive__a_d_b">
                                                Minimum Deposit :</span>
                                            <span><b>$2000</b></span>
                                        </div>
                                        <div class="exclusive__account__data__box">
                                            <span class="exclusive__a_d_b">
                                                Spread From :</span>
                                            <span><b>0 pip</b></span>
                                        </div>
                                        <div class="exclusive__account__data__box">
                                            <span class="exclusive__a_d_b">
                                                Maximum Leverage :</span>
                                            <span><b>Up to 1:2000 (dynamic) 1</b></span>
                                        </div>
                                        <div class="exclusive__account__data__box">
                                            <span class="exclusive__a_d_b">
                                                Stop Out Level :</span>
                                            <span><b>50%</b></span>
                                        </div>
                                        <div class="exclusive__account__data__box">
                                            <span class="exclusive__a_d_b">
                                                Hedge Margin :</span>
                                            <span><b>0%</b></span>
                                        </div>
                                        <div class="exclusive__account__data__box">
                                            <span class="exclusive__a_d_b">
                                                Swap Free Option :</span>
                                            <span><b>Available</b></span>
                                        </div>
                                        <div class="exclusive__account__data__box">
                                            <span class="exclusive__a_d_b">
                                                Base Currency:</span>
                                            <span><b>$, €, £ ,¥</b></span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <div class="account__heading">
                                <h3>
                                    Standard Account
                                </h3>
                                <div class="exclusive__account__data">
                                    <div class="exclusive__account__data__box">
                                        <span class="exclusive__a_d_b">
                                            Minimum Deposit :</span>
                                        <span><b>$2000</b></span>
                                    </div>
                                    <div class="exclusive__account__data__box">
                                        <span class="exclusive__a_d_b">
                                            Spread From :</span>
                                        <span><b>0 pip</b></span>
                                    </div>
                                    <div class="exclusive__account__data__box">
                                        <span class="exclusive__a_d_b">
                                            Maximum Leverage :</span>
                                        <span><b>Up to 1:2000 (dynamic) 1</b></span>
                                    </div>
                                    <div class="exclusive__account__data__box">
                                        <span class="exclusive__a_d_b">
                                            Stop Out Level :</span>
                                        <span><b>50%</b></span>
                                    </div>
                                    <div class="exclusive__account__data__box">
                                        <span class="exclusive__a_d_b">
                                            Hedge Margin :</span>
                                        <span><b>0%</b></span>
                                    </div>
                                    <div class="exclusive__account__data__box">
                                        <span class="exclusive__a_d_b">
                                            Swap Free Option :</span>
                                        <span><b>Available</b></span>
                                    </div>
                                    <div class="exclusive__account__data__box">
                                        <span class="exclusive__a_d_b">
                                            Base Currency:</span>
                                        <span><b>$, €, £ ,¥</b></span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">
                            <div class="account__heading">
                                <h3>
                                    Standard Plus Account
                                </h3>
                                <div class="exclusive__account__data">
                                    <div class="exclusive__account__data__box">
                                        <span class="exclusive__a_d_b">
                                            Minimum Deposit :</span>
                                        <span><b>$2000</b></span>
                                    </div>
                                    <div class="exclusive__account__data__box">
                                        <span class="exclusive__a_d_b">
                                            Spread From :</span>
                                        <span><b>0 pip</b></span>
                                    </div>
                                    <div class="exclusive__account__data__box">
                                        <span class="exclusive__a_d_b">
                                            Maximum Leverage :</span>
                                        <span><b>Up to 1:2000 (dynamic) 1</b></span>
                                    </div>
                                    <div class="exclusive__account__data__box">
                                        <span class="exclusive__a_d_b">
                                            Stop Out Level :</span>
                                        <span><b>50%</b></span>
                                    </div>
                                    <div class="exclusive__account__data__box">
                                        <span class="exclusive__a_d_b">
                                            Hedge Margin :</span>
                                        <span><b>0%</b></span>
                                    </div>
                                    <div class="exclusive__account__data__box">
                                        <span class="exclusive__a_d_b">
                                            Swap Free Option :</span>
                                        <span><b>Available</b></span>
                                    </div>
                                    <div class="exclusive__account__data__box">
                                        <span class="exclusive__a_d_b">
                                            Base Currency:</span>
                                        <span><b>$, €, £ ,¥</b></span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">
                            <div class="account__heading">
                                <h3>
                                    Cent Account
                                </h3>
                                <div class="exclusive__account__data">
                                    <div class="exclusive__account__data__box">
                                        <span class="exclusive__a_d_b">
                                            Minimum Deposit :</span>
                                        <span><b>$2000</b></span>
                                    </div>
                                    <div class="exclusive__account__data__box">
                                        <span class="exclusive__a_d_b">
                                            Spread From :</span>
                                        <span><b>0 pip</b></span>
                                    </div>
                                    <div class="exclusive__account__data__box">
                                        <span class="exclusive__a_d_b">
                                            Maximum Leverage :</span>
                                        <span><b>Up to 1:2000 (dynamic) 1</b></span>
                                    </div>
                                    <div class="exclusive__account__data__box">
                                        <span class="exclusive__a_d_b">
                                            Stop Out Level :</span>
                                        <span><b>50%</b></span>
                                    </div>
                                    <div class="exclusive__account__data__box">
                                        <span class="exclusive__a_d_b">
                                            Hedge Margin :</span>
                                        <span><b>0%</b></span>
                                    </div>
                                    <div class="exclusive__account__data__box">
                                        <span class="exclusive__a_d_b">
                                            Swap Free Option :</span>
                                        <span><b>Available</b></span>
                                    </div>
                                    <div class="exclusive__account__data__box">
                                        <span class="exclusive__a_d_b">
                                            Base Currency:</span>
                                        <span><b>$, €, £ ,¥</b></span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "step_trading.php";
?>


<style>
.trading__instrument {
    background: #fff;
    background: url(img/trading__instrument.jpg);
    height: 100vh;
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: 100%;

}

.trading__instrument .nav-tabs {
    border-bottom: none;
}

.trading__instrument .nav-tabs .nav-link {
    color: #495057;
    background-color: #fff;
    border-color: #fff;
}

.trading__instrument .nav-tabs .nav-link.active {
    color: #495057;
    background-color: #fff;
    border-bottom: 3px solid #000f39;
}
</style>




<?php
include "deposite.php";
?>
<?php
include "footer.php";
?>