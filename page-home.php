<?php

/**

* Template Name: Home Page

*/



get_header(); ?>



<div class="motopress-wrapper content-holder clearfix">

	<div class="container">

		<div class="row">

			<?php do_action( 'cherry_before_home_page_content' ); ?>

			<div class="<?php echo apply_filters( 'cherry_home_layout', 'span12' ); ?>" data-motopress-wrapper-file="page-home.php" data-motopress-wrapper-type="content">
          <div class="row">
          <?php if( function_exists('bxslider') ) bxslider('test-slider'); ?>
           </div>

				<div class="row">

					<div class="<?php echo apply_filters( 'cherry_home_layout', 'span12' ); ?>" data-motopress-type="static" data-motopress-static-file="static/static-slider.php">

						<?php get_template_part("static/static-slider"); ?>

					</div>

				</div>

				

			</div>

			<?php //do_action( 'cherry_after_home_page_content' ); 
			$page_data = get_page(203);
			echo $page_data->post_content;
			?>

		</div>

	</div>

</div>



<?php get_footer(); ?>