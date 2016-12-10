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
		$blog_button_link = get_field("blog_button_link", 5);
	 ?>
	<!-- MAIN-WRAP -->
	<div id="main-wrap">
		<!-- HEADER -->
		<header id="main-header">
			<!-- HEADER-container1 -->
			<div class="container1 clearfix">
				<div class="header-menu">
					<?php
			    		if ( function_exists( 'wp_nav_menu' ) )
			        		wp_nav_menu( 
						        array( 
						        'theme_location' => 'top-menu',
						        'fallback_cb'=> 'top_menu',
						        'container1' => 'ul',
						        'menu_id' => 'top-menu',
						        'menu_class' => 'nav') 
							);
					    else custom_menu();
					?>
				</div>
				<div class="logo-box">
			      <h1 id="title"><a href="<?= site_url() ?>"><strong><?= $blog_title ?></strong></a></h1>
			      <h2></h2>
			      <?= $blog_description ?>
			      <br><br>
			      <a href="<?= $blog_button_link ?>" class="button"><?= $blog_button_text ?></a> 
			    </div>
			    <img src="http://cvetnik.beget.tech/wp-content/themes/CvetnikTheme/img/bt/big-model.png" alt="" class="alarm-clocks"/> 
			</div>
			<!-- END OF HEADER-container1 -->

			<script>
				// Инициализация карусели
				$(document).ready(function(){
					$('.carousel').carousel();
				});

				// Next slide
				$('.carousel').carousel('next');
				$('.carousel').carousel('next', 3); // Move next n times.
				// Previous slide
				$('.carousel').carousel('prev');
				$('.carousel').carousel('prev', 4); // Move prev n times.
				// Set to nth slide
				$('.carousel').carousel('set', 4);
			</script>
		</header>
		<!-- END OF HEADER -->
