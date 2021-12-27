<?php
/* 
Template Name: درباره ما
*/
get_header();?>


            <div class="row home_bg">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="col-xs-12 single_article">
                    <div class="title"><h2><a href="<?php the_permalink() ?>"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><?php the_title(); ?></a></h2></div>
                    <div class="content">
                         <p><?php the_content(); ?></p>
                    </div>
                </article>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <?php get_footer(); ?>
     

