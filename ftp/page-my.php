<?php get_header();?>
<!-- MAIN -->
<main> 
	<?php 
		if (have_posts()):
			while(have_posts()):
				the_post();
	 ?>
	<!-- ARTICLE -->
	<div class="article">
		<div class="container1 clearfix">
			<div class="single-article-textbox">
				<img src="<?php the_post_thumbnail_url(); ?>">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
	<?php 
			endwhile;
		endif;
	 ?>
</main>
<!-- END OF MAIN -->
<?php get_footer(); ?>