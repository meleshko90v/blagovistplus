<?php
/*
Template Name: Про Нас
*/
?>
<?php get_header(); ?>

<!-- ***** Breadcumb Area Start ***** -->
<section class="breadcumb-area bg-img gradient-background-overlay margin50" style="background-image: url(<?php the_field('background-overlay') ?>);"></section>
<!-- ***** Breadcumb Area End ***** -->

<!-- ***** About Area Start ***** -->
<div class="medilife-features-area section-padding-100">
    <div class="container">
         <div class="features-content">
              <h3 class="text-center"><?php the_field('features-content') ?></h3>
         </div>
    </div>
</div>

<!-- ***** About Area End ***** -->


<?php get_footer(); ?>