<?php
    require_once('functions/function.php');
    get_header();
?>
    <!-- slider-start -->
    <div class="slider-area">
        <div class="page-title">
            <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center" style="background-image: url(img/bg/others_bg.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <h1 class="white-color f-700">Advisor Details</h1>
                                <nav class="text-center" aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Advisor Details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-end -->
    <div class="adivisors-details-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-30">
                    <div class="advisor-img mb-35">
                        <img src="img/courses/advisors-img.png" alt="">
                    </div>
                    <div class="advisors-social-icon-list mb-30">
                        <span class="social-title">Social Link</span>
                        <ul>
                            <li><a href="#"><span class="ti-facebook"></span></a></li>
                            <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                            <li><a href="#"><span class="ti-dribbble"></span></a></li>
                            <li><a href="#"><span class="ti-google"></span></a></li>
                            <li><a href="#"><span class="ti-pinterest"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-8">
                    <div class="adivisor-text-2 white-bg">
                        <div class="adivisor-text-heading d-flex mb-10">
                            <div class="adivisor-text-title adivisor-text-title-2">
                                <h4>Alexzender Alex</h4>
                                <span>Math Teacher</span>
                            </div>
                        </div>
                        <div class="adivisor-para adivisor-para-2">
                            <p>On the other hand, we denounce with righteous indignation and dislike men who arbeg uiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomede</p>
                        </div>
                        <div id="skill-area" class="about-sklls-area mt-35 pr-40">
                            <div class="single-skills mb-35">
                                <div class="bar-content">
                                    <span class="skills-heading">Digital Teaching</span>
                                </div>
                                <div id="bar1" class="barfiller">
                                    <span class="tip" style="left: 461.05px; transition: left 1s ease-in-out 0s;">85%</span>
                                    <span class="fill" data-percentage="85" style="background: rgb(253, 200, 0) none repeat scroll 0% 0%; width: 487.05px; transition: width 1s ease-in-out 0s;"></span>
                                </div>
                            </div>
                            <div class="single-skills mb-35">
                                <div class="bar-content">
                                    <span class="skills-heading">Well Known Result</span>
                                </div>
                                <div id="bar2" class="barfiller">
                                    <span class="tip" style="left: 518.35px; transition: left 1s ease-in-out 0s;">95%</span>
                                    <span class="fill" data-percentage="95" style="background: rgb(253, 200, 0) none repeat scroll 0% 0%; width: 544.35px; transition: width 1s ease-in-out 0s;"></span>
                                </div>
                            </div>
                            <div class="single-skills mb-35">
                                <div class="bar-content">
                                    <span class="skills-heading">Marketing</span>
                                </div>
                                <div id="bar3" class="barfiller">
                                    <span class="tip" style="left: 489.7px; transition: left 1s ease-in-out 0s;">90%</span>
                                    <span class="fill" data-percentage="90" style="background: rgb(253, 200, 0) none repeat scroll 0% 0%; width: 515.7px; transition: width 1s ease-in-out 0s;"></span>
                                </div>
                            </div>
                        </div>
                        <div class="advisors-details-form events-details-form faq-area-form">
                            <form>
                                <div class="row">
                                    <div class="col-xl-8">
                                        <div class="advisors-form-title mb-25">
                                            <h2>Send Message</h2>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <input placeholder="Name :" type="text">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <input placeholder="Email :" type="text">
                                    </div>
                                    <div class="col-xl-12">
                                        <textarea cols="30" rows="10" placeholder="Comments :"></textarea>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="faq-form-btn events-form-btn">
                                            <button class="btn m-0">Send message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
get_footer();

?>