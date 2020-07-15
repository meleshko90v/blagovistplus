<?php
/*
Template Name: Про Нас
*/
?>
<?php get_header(); ?>

<!-- ***** Breadcumb Area Start ***** -->
<section class="breadcumb-area bg-img gradient-background-overlay" style="background-image: url(<?php the_field('background-overlay') ?>);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">

            </div>
        </div>
    </div>
</section>
<!-- ***** Breadcumb Area End ***** -->

<!-- ***** About Area Start ***** -->
<div class="medilife-features-area section-padding-100">
    <div class="container">
         <div class="breadcumb-content">
              <h3 class="breadcumb-title" style="text-align: center;"><?php the_field('breadcumb-title') ?></h3>
         </div>
         <div class="features-content">
              <h1 class="text-center p-20"><?php the_field('features-content') ?></h1>
         </div>
    </div>
</div>

<!-- ***** About Area End ***** -->


<?php get_footer(); ?>