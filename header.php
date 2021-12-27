
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png"> -->
	<?php $fav_ic = of_get_option('favicon'); if (!empty($fav_ic)){?>
        <?php echo esc_url($fav_ic);}
		else {
           ?> <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png"><?php
        }
		?>


      <!-- <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
	  <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-rtl.min.css" rel="stylesheet"> -->
	  <!-- <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet"> -->
	  <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php body_class( ); ?>>
<?php wp_body_open(); ?>
    <main class="container">
		<header class="row header">
		<?php $logo_option = of_get_option('logo'); if (!empty($logo_option)){?>
        <?php echo esc_url($logo_option);}
		else {
           ?> <img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="عنوان سایت"><?php
        }
		?>
			<!-- <img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="عنوان سایت"> -->
			<hgroup id="hgroup">
				<h1><?php bloginfo('name')?></h1>
				<h2><?php bloginfo('description')?></h2>
			</hgroup>
		</header>
		<div class="row">
			<nav class="navbar navbar-inverse" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<span class="navbar-brand hidden-lg hidden-md hidden-sm" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">منوی سایت</span>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
							<?php wp_nav_menu(array(
								'menu'              => "head_nav", 
								'menu_class'        => "nav navbar-nav", 
								'container'         => "div", 
								'container_id'      => "", 
								'fallback_cb'       => "", 
								'depth'             => "3", 
								'walker'            => new wp_bootstrap_navwalker() 
							) );?>
						
				</div>
			</nav>
		</div>
	
		<div class="row home_bg">
		