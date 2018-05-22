<?php
/*
Template Name: Kontakt
*/
?>

<?php get_header(); ?>


<div id='kontakt'>
	<?php //echo do_shortcode("[huge_it_maps id='1']"); ?>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAfk7sQtfohvJ6UiUVnLAOCle0CZRGF2E8"></script>
	<div id="gmap" class='mid'></div>

	<div class="container">
		<div class="white-box">
		


				<div class="entry">
						<div class="breadcrumb">
	<?php
	echo do_shortcode( '[breadcrumb]' ); 
	?>
			
		</div>

							<h3 class='header1'><?php wp_title(); ?></h3>

							<p class="widget content1 center">
		<?php if ( is_active_sidebar( 'kontakt' ) ) : ?>
			<?php dynamic_sidebar( 'kontakt' ); ?>
		<?php endif; ?>
		</p>


				</div><!-- /entry -->

				<div class="entry2">
					<br><br><br>


			<?php if ( is_active_sidebar( 'adres' ) ) : ?>
			<?php dynamic_sidebar( 'adres' ); ?>
		<?php endif; ?>


			<?php if ( is_active_sidebar( 'ae' ) ) : ?>
			<?php dynamic_sidebar( 'ae' ); ?>
		<?php endif; ?>



			<?php if ( is_active_sidebar( 'nt' ) ) : ?>
			<?php dynamic_sidebar( 'nt' ); ?>
		<?php endif; ?>
		<br><br>

	</div>

					</div><!-- /white-box -->

		
			<h3 style="padding-top:14px;">Formularz kontaktowy</h3>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php the_content('czytaj dalej'); ?>

						<?php endwhile; else: ?>

							<?php _e('Sorry, no posts matched your criteria.'); ?>
		
				<?php endif; ?>

	</div><!-- /container -->
	<br><br>
</div>

<?php get_footer(); ?>