<?php
/*
Template Name: Послуги
*/
?>
<?php get_header(); ?>

<!-- ***** Breadcumb Area Start ***** -->
<section class="breadcumb-area bg-img gradient-background-overlay" style="background-image: url(<?php the_field('background-overlay') ?>);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcumb-content">
                    <h3 class="breadcumb-title"><?php the_field('breadcumb-title') ?></h3>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Breadcumb Area End ***** -->

<!-- ***** Services Area Start ***** -->
<div class="medilife-services-area section-padding-100-20">
    <div class="container">
        <div class="row">
            <!-- Single Service Area -->
            <?php the_field('service-content') ?>
        </div>
    </div>
</div>
<!-- ***** Services Area End ***** -->

<!-- ***** Tabs Area Start ***** -->
<section class="medilife-tabs-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="medilife-tabs-content">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="institution-tab" data-toggle="tab" href="#institution" role="tab"
                               aria-controls="institution" aria-selected="false"><?php the_field('institution') ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="faq-tab" data-toggle="tab" href="#faq" role="tab"
                               aria-controls="faq" aria-selected="false"><?php the_field('faq') ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="specialities-tab" data-toggle="tab" href="#specialities"
                               role="tab" aria-controls="specialities" aria-selected="true"><?php the_field('specialities') ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="laboratory-tab" data-toggle="tab" href="#laboratory" role="tab"
                               aria-controls="laboratory" aria-selected="false"><?php the_field('laboratory') ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="emergencies-tab" data-toggle="tab" href="#emergencies" role="tab"
                               aria-controls="emergencies" aria-selected="false"><?php the_field('emergencies') ?></a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade" id="institution" role="tabpanel" aria-labelledby="institution-tab">
                            <div class="medilife-tab-content">
                                <!-- Medilife Tab Text  -->
                                <div class="medilife-tab-text">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <?php the_field('institution-tab') ?>
                                    </div>
                                </div>
                                <!-- Medilife Tab Img  -->
                                <div class="medilife-tab-img">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <img src="<?php the_field('background-tab-img') ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                            <div class="medilife-tab-content d-md-flex">
                                <!-- Medilife Tab Text  -->
                                <div class="medilife-tab-text">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <?php the_field('faq-tab') ?>
                                    </div>
                                </div>
                                <!-- Medilife Tab Img  -->
                                <div class="medilife-tab-img">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <img src="<?php the_field('background-tab-img1') ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="specialities" role="tabpanel"
                             aria-labelledby="specialities-tab">
                            <div class="medilife-tab-content d-md-flex">
                                <!-- Medilife Tab Text  -->
                                <div class="medilife-tab-text">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                       <?php the_field('specialities-tab') ?>
                                    </div>
                                </div>
                                <!-- Medilife Tab Img  -->
                                <div class="medilife-tab-img">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <img src="<?php the_field('background-tab-img2') ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="laboratory" role="tabpanel" aria-labelledby="laboratory-tab">
                            <div class="medilife-tab-content d-md-flex">
                                <!-- Medilife Tab Text  -->
                                <div class="medilife-tab-text">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <?php the_field('laboratory-tab') ?>
                                    </div>
                                </div>

                                <!-- Medilife Tab Img  -->
                                <div class="medilife-tab-img">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <img src="<?php the_field('background-tab-img3') ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="emergencies" role="tabpanel" aria-labelledby="emergencies-tab">
                            <div class="medilife-tab-content d-md-flex">
                                <!-- Medilife Tab Text  -->
                                <div class="medilife-tab-text">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <?php the_field('emergencies-tab') ?>
                                    </div>
                                </div>
                                <!-- Medilife Tab Img  -->
                                <div class="medilife-tab-img">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <img src="<?php the_field('background-tab-img4') ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Tabs Area End ***** -->

<?php get_footer(); ?>