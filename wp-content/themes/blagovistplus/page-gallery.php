<?php
/*
Template Name: Галерея
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

<!--Foto start-->

<?php the_field('foto') ?>


<!-- ***** Video Area Start ***** -->

<?php the_field('video') ?>


<?php get_footer(); ?>