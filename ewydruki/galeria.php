<?php
/*
Template Name: Galeria
*/
?>

<?php get_header(); ?>




<div id="galeria">
	<div class="container">
		<div class="white-box">
		


				<div class="entry">

										<div class="breadcrumb">
	<?php
	echo do_shortcode( '[breadcrumb]' ); 
	?>
			
		</div>


							<h3 class='header1'><?php wp_title(); ?></h3>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php the_content('czytaj dalej'); ?>

						<?php endwhile; else: ?>

							<?php _e('Sorry, no posts matched your criteria.'); ?>
		
				<?php endif; ?>


		

				</div><!-- /entry -->
					</div><!-- /white-box -->


	<?php //putUniteGallery("wq", catid); ?>
	<?php echo do_shortcode('[supsystic-gallery id=1]'); ?>





	</div><!-- /container -->
	<br><br>
	
</div>

<?php get_footer(); ?>