<?php get_header();?>
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<div class="item active">
					
					<?php query_posts(array('cat'=>'5', 'posts_per_page'=>'1'));?>
					<?php while ( have_posts() ) : the_post(); ?>
						<a href="<?php the_permalink();?>"><?php the_post_thumbnail('cat_slider');?></a>
					
					<?php endwhile; ?>
					<?php wp_reset_query(); ?> 
					</div>

					<div class="item">
					
					<?php query_posts(array('cat'=>'3', 'posts_per_page'=>'1'));?>
					<?php while ( have_posts() ) : the_post(); ?>
					<a href="<?php the_permalink();?>"><?php the_post_thumbnail('cat_slider');?></a>
					
					
					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
					</div>
				</div>

				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				  <span class="sr-only">Next</span>
				</a>
			</div>
			
			<!-- <header class="header_title"><h2><?php wp_title(); ?></h2></header> -->
			<div class="line">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article class="col-sm-4 col-xs-12 my_article">
					<div class="col-xs-12 article">
						<div class="img">
							<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('cat')?></a>
						</div>
						<div class="info">
							<h2><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></h2>
							<p>
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php the_author(); ?>
								<span class="glyphicon glyphicon-comment" aria-hidden="true"></span> <?php comments_popup_link('نظر %', 'نظر1 ' , 'بدون نظر'); ?>
								<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> <?php echo getPostViews(get_the_ID()); ?>
							</p>
						</div>
						<div class="content">
							<p><?php the_excerpt(); ?></p>
						</div>
					</div>
				</article>
                <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
		<?php get_footer(); ?>

		