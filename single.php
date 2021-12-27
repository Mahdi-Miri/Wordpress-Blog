<?php get_header();?>
		<div class="row home_bg">
			<div class="col-md-9 col-sm-8 col-xs-12 pr0 pull-left">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article class="col-xs-12 pl0">
					<div class="col-xs-12 single_article">
						<div class="title"><h2><a href="<?php the_permalink() ?>"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><?php the_title(); ?></a></h2></div>
						<div class="info">
							<p>
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php the_author(); ?>
								<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> <a href="<?php the_permalink() ?>"><?php the_category( ',' ); ?></a>
								<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> <?php setPostViews(get_the_ID()); ?> <?php echo getPostViews(get_the_ID()); ?>
								<span class="glyphicon glyphicon-time" aria-hidden="true"></span><?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' قبل'; ?>
							</p>
						</div>
						<div class="content">
							 <p><?php the_content(); ?></p>
						</div>
					</div>
				</article>
				<?php endwhile; ?>
                <?php endif; ?>

						
				<div class="col-xs-12 pl0">
						<div class="comments" id="comment">
								
						
							<ol class="commentlist">
								<li class="comment byuser comment-author-admin even thread-even depth-1" id="comment-3">
									<div id="div-comment-3" class="comment-body">
									<div class="comment-author vcard">
								<img alt='' src='http://0.gravatar.com/avatar/67f76019a656d3bfc628c9e1d46bcd65?s=32&#038;d=mm&#038;r=g' srcset='http://0.gravatar.com/avatar/67f76019a656d3bfc628c9e1d46bcd65?s=64&amp;d=mm&amp;r=g 2x' class='avatar avatar-32 photo' height='32' width='32' />			<cite class="fn"><a href='http://afosnweb.ir' rel='external nofollow' class='url'>admin</a></cite> <span class="says">می‌گه:</span>		</div>
							
							<div class="comment-meta commentmetadata"><a href="http://localhost/wordpress/dfgdfg/#comment-3">
								فوریه 10, 2016 در 2:54 ب.ظ</a>&nbsp;&nbsp;<a class="comment-edit-link" href="http://localhost/wordpress/wp-admin/comment.php?action=editcomment&amp;c=3">(ویرایش)</a>		</div>

							<p>dfgdfgdfg</p>

							<div class="reply"><a rel='nofollow' class='comment-reply-link' href='http://localhost/wordpress/dfgdfg/?replytocom=3#respond' onclick='return addComment.moveForm( "div-comment-3", "3", "respond", "137" )' aria-label='پاسخ به admin'>پاسخ دادن</a></div>
									</div>
							</li>
							<li class="comment byuser comment-author-admin odd alt thread-odd thread-alt depth-1" id="comment-4">
									<div id="div-comment-4" class="comment-body">
									<div class="comment-author vcard">
								<img alt='' src='http://0.gravatar.com/avatar/67f76019a656d3bfc628c9e1d46bcd65?s=32&#038;d=mm&#038;r=g' srcset='http://0.gravatar.com/avatar/67f76019a656d3bfc628c9e1d46bcd65?s=64&amp;d=mm&amp;r=g 2x' class='avatar avatar-32 photo' height='32' width='32' />			<cite class="fn"><a href='http://afosnweb.ir' rel='external nofollow' class='url'>admin</a></cite> <span class="says">می‌گه:</span>		</div>
							
							<div class="comment-meta commentmetadata"><a href="http://localhost/wordpress/dfgdfg/#comment-4">
								فوریه 10, 2016 در 2:54 ب.ظ</a>&nbsp;&nbsp;<a class="comment-edit-link" href="http://localhost/wordpress/wp-admin/comment.php?action=editcomment&amp;c=4">(ویرایش)</a>		</div>

							<p>fhfghfgh fdhfgh</p>

							<div class="reply"><a rel='nofollow' class='comment-reply-link' href='http://localhost/wordpress/dfgdfg/?replytocom=4#respond' onclick='return addComment.moveForm( "div-comment-4", "4", "respond", "137" )' aria-label='پاسخ به admin'>پاسخ دادن</a></div>
									</div>
							</li>
							<li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1 parent" id="comment-5">
									<div id="div-comment-5" class="comment-body">
									<div class="comment-author vcard">
								<img alt='' src='http://0.gravatar.com/avatar/67f76019a656d3bfc628c9e1d46bcd65?s=32&#038;d=mm&#038;r=g' srcset='http://0.gravatar.com/avatar/67f76019a656d3bfc628c9e1d46bcd65?s=64&amp;d=mm&amp;r=g 2x' class='avatar avatar-32 photo' height='32' width='32' />			<cite class="fn"><a href='http://afosnweb.ir' rel='external nofollow' class='url'>admin</a></cite> <span class="says">می‌گه:</span>		</div>
							
							<div class="comment-meta commentmetadata"><a href="http://localhost/wordpress/dfgdfg/#comment-5">
								فوریه 10, 2016 در 2:54 ب.ظ</a>&nbsp;&nbsp;<a class="comment-edit-link" href="http://localhost/wordpress/wp-admin/comment.php?action=editcomment&amp;c=5">(ویرایش)</a>		</div>

							<p>dgfhgdfgh</p>

							<div class="reply"><a rel='nofollow' class='comment-reply-link' href='http://localhost/wordpress/dfgdfg/?replytocom=5#respond' onclick='return addComment.moveForm( "div-comment-5", "5", "respond", "137" )' aria-label='پاسخ به admin'>پاسخ دادن</a></div>
									</div>
								<ul class="children">
								<li class="comment byuser comment-author-admin bypostauthor odd alt depth-2" id="comment-6">
										<div id="div-comment-6" class="comment-body">
										<div class="comment-author vcard">
									<img alt='' src='http://0.gravatar.com/avatar/67f76019a656d3bfc628c9e1d46bcd65?s=32&#038;d=mm&#038;r=g' srcset='http://0.gravatar.com/avatar/67f76019a656d3bfc628c9e1d46bcd65?s=64&amp;d=mm&amp;r=g 2x' class='avatar avatar-32 photo' height='32' width='32' />			<cite class="fn"><a href='http://afosnweb.ir' rel='external nofollow' class='url'>admin</a></cite> <span class="says">می‌گه:</span>		</div>
								
								<div class="comment-meta commentmetadata"><a href="http://localhost/wordpress/dfgdfg/#comment-6">
									فوریه 10, 2016 در 2:54 ب.ظ</a>&nbsp;&nbsp;<a class="comment-edit-link" href="http://localhost/wordpress/wp-admin/comment.php?action=editcomment&amp;c=6">(ویرایش)</a>		</div>

								<p>fgh fgh fg</p>

								<div class="reply"><a rel='nofollow' class='comment-reply-link' href='http://localhost/wordpress/dfgdfg/?replytocom=6#respond' onclick='return addComment.moveForm( "div-comment-6", "6", "respond", "137" )' aria-label='پاسخ به admin'>پاسخ دادن</a></div>
										</div>
								</li>
								</ul>
							</li>
							</ol>
							<div id="respond">
								<form action="http://localhost/wordpress/wp-comments-post.php" method="post" id="commentform">
									<div class="form-group">
										<input name="author" id="author" class="author form-control" type="text" value="نام" onblur="if(this.value=='') this.value='نام';" onfocus="if(this.value=='نام') this.value='';" onkeypress="FKeyPress(this);" onkeydown="FKeyDown(this);" />
									</div>
									<div class="form-group">
										<input name="email" id="email" class="email form-control" type="text" value="ایمیل" onblur="if(this.value=='') this.value='ایمیل';" onfocus="if(this.value=='ایمیل') this.value='';" onkeypress="FKeyPress(this);" onkeydown="FKeyDown(this);" />
									</div>
									<textarea name="comment" id="comment" class="form-control" rows="10"></textarea><br>
									<input name="submit" type="submit" id="submit" class="btn btn-default" value="ثبت نظر" />
								</form>
							</div>
						</div>
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