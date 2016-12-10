<?php 
get_header();
if (have_posts()):
	while(have_posts()):
		the_post();
?>
<!-- MAIN -->
<main>
	<div class="article">
		<div class="container clearfix">
			<?php the_content(); ?>
		</div>
	</div>
</main>
<!-- END OF MAIN -->
<?php 
endwhile;
endif;
get_footer(); 
?> 