<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Персональный блог Светланы Машуровой</title>
	<?php wp_head(); ?>
</head>
<body> 
	<?php 
		// getting fields
		$blog_title = get_field("blog_title", 5);
		$blog_description = get_field("blog_description", 5);
		$blog_button_text = get_field("blog_button_text", 5);
		$blog_button_link = get_field("blog_button_text", 5);
	 ?>
	<!-- MAIN-WRAP -->
	<div id="main-wrap">
		<!-- HEADER -->
		<header id="main-header">
			<!-- HEADER-CONTAINER -->
			<div class="container clearfix">
				<div class="header-menu">
					<?php
			    		if ( function_exists( 'wp_nav_menu' ) )
			        		wp_nav_menu( 
						        array( 
						        'theme_location' => 'top-menu',
						        'fallback_cb'=> 'top_menu',
						        'container' => 'ul',
						        'menu_id' => 'top-menu',
						        'menu_class' => 'nav') 
							);
					    else custom_menu();
					?>
				</div>
				<div class="logo-box">
			      <h1><a href="<?= site_url() ?>"><strong><?= $blog_title ?></strong></a></h1>
			      <h2></h2>
			      <?= $blog_description ?>
			      <br><br>
			      <a href="<?= $blog_button_link ?>" class="button"><?= $blog_button_text ?></a> 
			    </div>
			    <img src="http://cvetnik.beget.tech/wp-content/themes/CvetnikTheme/img/bt/big-model.png" alt="" class="alarm-clocks"/> 
			</div>
			<!-- END OF HEADER-CONTAINER -->
		</header>
		<!-- END OF HEADER -->
