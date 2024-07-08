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
.partner__box .partner__box__singal {}
</style>
<div class="container-fluid py-5 partner__box">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-4 partner__box">
                <div class="partner__box__singal">
                    <img src="img/" alt="">
                </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
        </div>
    </div>
</div>


<?php
include "deposite.php";
?>
<?php
include "footer.php";
?>