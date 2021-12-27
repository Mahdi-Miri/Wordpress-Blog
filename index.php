<?php get_header();?>

		<div class="row home_bg">
			<div class="col-md-9 col-sm-8 col-xs-12 pull-left">
                <?php
                if (is_category()){single_cat_title();}

                elseif(is_search()){echo the_search_query();}

                elseif(is_tag()){ single_tag_title();}
                ?>


                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article class="blog_article">
					<div class="blog_data">
                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('cat')?></a>
					</div>
					<div class="blog_content">
						<div class="info">
                            <h2><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></h2>
							<p>
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php the_author(); ?>
								<span class="glyphicon glyphicon-comment" aria-hidden="true"></span> <?php comments_popup_link('نظر %', 'نظر1 ' , 'بدون نظر'); ?>
								<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> <?php echo getPostViews(get_the_ID()); ?>
							</p>
						</div>
                        <p><?php the_excerpt(); ?></p>
                    </div>
				</article>
                <?php endwhile; ?>
                <?php endif; ?>
				<div class="col-lg-12 pagination">
					<?php paginations(); ?>
				</div>
			</div>
			<aside class="col-md-3 col-sm-4 col-xs-12 pl0 pull-right">
				<div class="sidebar">
				    	<?php get_search_form(); ?>
					<div class="widget">
						
						<?php dynamic_sidebar('type_side'); ?>
						
					</div>
						
					<div class="main_widget">
						<ul class="nav nav-tabs nav-justified" role="tablist">
							<li role="presentation" class="active"><a href="#Newest" aria-controls="Newest" role="tab" data-toggle="tab">تازه ها</a></li>
							<li role="presentation"><a href="#Most" aria-controls="Most" role="tab" data-toggle="tab">پربازدید ها</a></li>
							<li role="presentation"><a href="#Comments" aria-controls="Comments" role="tab" data-toggle="tab">نظرات</a></li>
						</ul>
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="Newest">
							<?php query_posts(array('orderby' => 'publish_date', 'posts_per_page' => '6'));?>
								<ul>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									<li><a href="<?php the_permalink();?>"><?php the_title();?> </a></li>
									<?php endwhile; ?>
									<?php endif; ?>
								</ul>
							</div>
							<?php wp_reset_query();?>
							<div role="tabpanel" class="tab-pane" id="Most">
							<?php query_posts(array('meta_key' => 'post_views_count','orderby' => 'meta_value_num', 'posts_per_page' => '6'));?>
								<ul>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									<li><a href="<?php the_permalink();?>"><?php the_title();?> </a></li>
									<?php endwhile; ?>
									<?php endif; ?>
								</ul>
							</div>
							<div role="tabpanel" class="tab-pane" id="Comments">
							<?php query_posts(array('orderby' => 'comment_count', 'posts_per_page' => '6'));?>
								<ul>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									<li><a href="<?php the_permalink();?>"><?php the_title();?> </a></li>
									<?php endwhile; ?>
									<?php endif; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</aside>
		</div>
        <?php get_footer(); ?>
