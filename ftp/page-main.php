<?php 
get_header();
if (have_posts()):
	while(have_posts()):
		the_post();
?>
<!-- MAIN -->
<main>
	<?php 
		the_content();
		$footer_text = get_field("footer_text");
		$footer_link_text = get_field("footer_link_text");
		$footer_link = get_field("footer_link");
	 ?>
	
	<!-- OPPORTUNITIES -->
	<div class="opportunities">
	 	<div class="container1 clearfix">
	 		<div class="opportunities-element">
	 			<img src="<?= get_template_directory_uri()."/img/page_main/opportunity_1.png" ?>" alt="" class="opportunities-element-pic">
	 			<span class="opportunities-element-title">Вы в поисках дополнительного дохода?</span>
	 			<span class="opportunities-element-text">У Вас есть свободное время, которое вы хотели бы конвертировать в саморазвитие и дополнительный доход?</span>
	 			<a href="http://ru.siberianhealth.com/ru/business/?ref=1142096" class="opportunities-element-link">Да, хочу!</a>
	 		</div>

	 		<div class="opportunities-element">
	 			<img src="<?= get_template_directory_uri()."/img/page_main/opportunity_2.png" ?>" alt="" class="opportunities-element-pic">
	 			<span class="opportunities-element-title">Вы желаете сменить сферу деятельности?</span>
	 			<span class="opportunities-element-text">Кризис и сокращения добрались и до Вас? Очередное место работы снова закрылось или близко к закрытию?</span>
	 			<a href="http://ru.siberianhealth.com/ru/business/?ref=1142096" class="opportunities-element-link">Это так!</a>
	 		</div>

	 		<div class="opportunities-element">
	 			<img src="<?= get_template_directory_uri()."/img/page_main/opportunity_3.png" ?>" alt="" class="opportunities-element-pic">
	 			<span class="opportunities-element-title">Вы опытный сетевик со своей структурой?</span>
	 			<span class="opportunities-element-text">У Вас есть своя команда и умение стоить сети продаж? Вам интересен честный сетевой бизнес без обмана?</span>
	 			<a href="http://ru.siberianhealth.com/ru/business/?ref=1142096" class="opportunities-element-link">Мне интересно!</a>
	 		</div>
		</div>
	</div>
	<!-- END OF OPPORTUNITIES -->

	<!-- BUSINESS -->
	<?php 
		// getting ACF fields
		$business_title = get_field("business_title");
		$i = 0;
		while (have_rows("business_points")):
			the_row();
			$business_points_pic[$i] = get_sub_field("business_points_pic");
			$business_points_title[$i] = get_sub_field("business_points_title");
			$business_points_text[$i] = get_sub_field("business_points_text");
			$i++;
		endwhile;
	 ?>
	<div class="business">
		<div class="container1">
			<span class="business-title">
				<?= $business_title ?>
			</span>
			<div class="business-points clearfix">
				<?php 
					for ($i = 0; $i < count($business_points_pic); $i++):
				 ?>
				<div class="business-points-element clearfix">
					<img src="<?= $business_points_pic[$i] ?>" alt="" class="business-points-element-pic">
					<div class="business-points-element-info">
						<span class="business-points-element-info-title"><?= $business_points_title[$i] ?></span>
						<span class="business-points-element-info-text"><?= $business_points_text[$i] ?></span>
					</div>
				</div>
				<?php 
					endfor;
				 ?>
			</div>
		</div>
	</div>
	<!-- END OF BUSINESS -->

	<!-- JOINNOW -->
	<div class="joinnow">
		<div class="container1 clearfix">
			<div class="joinnow-wrap">
				<span class="joinnow-text"><?= $footer_text ?></span>
				<a href="<?= $footer_link ?>" class="joinnow-link"><?= $footer_link_text ?></a>
			</div>
		</div>
	</div>
	<!-- END OF JOINNOW -->

	<!-- CAROUSEL -->
	<div class="carousel" style="height: 300px;">
		<?php 
			$i = 0;
			while(have_rows("bottom_carousel")):
				the_row();
				$carousel_pics[$i] = get_sub_field("bottom_carousel_pic");
				$carousel_links[$i] = get_sub_field("bottom_carousel_link");
				$i++;
			endwhile;

			for ($i = 0; $i < count($carousel_pics); $i++):
		 ?>
	    	<a class="carousel-item" href="<?= $carousel_links[$i] ?>" target="_blank"><img src="<?= $carousel_pics[$i] ?>"></a>
	    <?php 
	    	endfor;
	     ?>
	</div>
	<!-- END OF CAROUSEL -->
</main>
<!-- END OF MAIN -->
<?php 
endwhile;
endif;
get_footer(); 
?> 