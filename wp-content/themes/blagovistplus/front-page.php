<?php
/*
Template Name: Головна
*/
?>
<?php get_header(); ?>

<!-- ***** carousel ***** -->

<?php the_field('slide') ?>

<!--about us-->

<section class="about-us">
    <div class="container" id="about">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <img src="<?php the_field('background_about') ?>" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="about-us-front-wrap">
                    <h1><?php the_field('title_about') ?></h1>
                    <p><?php the_field('text_about') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ***** Our doctors ***** -->
<section class="doctors">
<div class="container">
    <h1 class="p-20"><?php the_field('title') ?></h1>
    <div class="row">
    <?php
    $featured_posts = get_field('doctor');
     if( $featured_posts ): ?>
     <?php foreach( $featured_posts as $post ):
      setup_postdata($post); ?>
       <div class="col-12 col-sm-6 col-lg-3 p-doctors">
       <div class="card">
       <a href="<?php the_field('href') ?>"><img class="card-img-top" src="<?php the_field('background_doctor1') ?>" alt=""></a>
       <div class="card-body">
       <a href="<?php the_field('href') ?>"><h3 class="color-click"><?php the_field('name1') ?></h3></a>
       <h6 class="line-height"><?php the_field('cat1') ?></h6>
       </div>
       </div>
       </div>
       <?php endforeach; ?>
       <?php
       wp_reset_postdata(); ?>
       <?php endif; ?>
    </div>
</div>
</section>

<!--gallery-->

<div class="gallery" id="blog">
    <div class="container">
        <h1 class="text-center p-20"><?php the_field('title_gallery') ?></h1>
        <div class="row">
            <?php
            $featured_posts = get_field('gallery');
             if( $featured_posts ): ?>
             <?php foreach( $featured_posts as $post ):
              setup_postdata($post); ?>
            <div class="col-md-4 col-lg-6 col-sm-12 p-15">
                <div class="card-none">
                    <div class="card-img">
                        <?php the_field('img_gallery') ?>
                    </div>
                    <div class="card-footer">
                        <h6 class="line-height"><?php the_field('link_gallery') ?></h6>
                    </div>
                </div>
            </div>
               <?php endforeach; ?>
               <?php
               wp_reset_postdata(); ?>
               <?php endif; ?>
        </div>
        <div class="btn-center">
            <a href="gallery"><button type="button" class="btn btn-outline-warning"><?php the_field('btn') ?></button></a>
        </div>
    </div>
</div>

<?php get_footer(); ?>