<?php
/*
Template Name: Послуги
*/
?>
<?php get_header(); ?>

<!-- ***** Breadcumb Area Start ***** -->
<section class="breadcumb-area bg-img gradient-background-overlay" style="background-image: url(<?php the_field('background-overlay') ?>);"></section>
<!-- ***** Breadcumb Area End ***** -->

<!-- ***** Services Area Start ***** -->
<div class="medilife-services-area section-padding-100-20">
    <div class="container">
        <div class="row">
            <?php the_field('service-content') ?>
        </div>
    </div>
</div>
<!-- ***** Services Area End ***** -->

<?php get_footer(); ?>