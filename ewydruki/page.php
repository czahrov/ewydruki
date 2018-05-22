<?php
/*
Template Name: page
*/
?>

<?php get_header(); ?>





<div class="container">
	<div class="white-box">
	


			<div class="entry">

						<h3><?php wp_title(); ?></h3>


			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php the_content('czytaj dalej'); ?>

					<?php endwhile; else: ?>

						<?php _e('Sorry, no posts matched your criteria.'); ?>
	
			<?php endif; ?>

			</div><!-- /entry -->
	

	</div><!-- /white-box -->

<br><br><br><br><br><br><br><br>

<?php putUniteGallery("wq", catid) ?> 





</div><!-- /container -->
<br><br>

<?php get_footer(); ?>