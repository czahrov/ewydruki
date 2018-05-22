<?php
/*
Template Name: O firmie
*/
?>

<?php get_header(); ?>

<div id="firma">
	<a class="img-post" rel="external" href="<? the_permalink()?>">

		<div class='img' style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID,'full'); ?>');"></div>
	</a>





	<div class="container">
		<div class="white-box">
		


				<div class="entry">

						<div class="breadcrumb">
	<?php
	echo do_shortcode( '[breadcrumb]' ); 
	?>
			
		</div>

	<div class="space">
							<h3 class='header1'><?php wp_title(); ?></h3>


				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php the_content('czytaj dalej'); ?>

						<?php endwhile; else: ?>

							<?php _e('Sorry, no posts matched your criteria.'); ?>
		
				<?php endif; ?>

			
		
	</div>
		</div><!-- /white-box -->

		</div><!-- /entry -->

	<div class="triple-box">

		<div class="box1" style="background-image: url('<?php echo get_post_meta($post->ID, 'pic_01', true) ?>')">
			

			<section class="caption">

				<?php if ( is_active_sidebar( 'pic1' ) ) : ?>
			<?php dynamic_sidebar( 'pic1' ); ?>
		<?php endif; ?>

			</section>


		</div>

		<div class="box2" style="background-image: url('<?php echo get_post_meta($post->ID, 'pic_02', true) ?>')">
			
			<section class="caption2">

			<?php if ( is_active_sidebar( 'pic2' ) ) : ?>
			<?php dynamic_sidebar( 'pic2' ); ?>
		<?php endif; ?>
			</section>
		</div>

		<div class="box3" style="background-image: url('<?php echo get_post_meta($post->ID, 'pic_03', true) ?>')">
			
			<section class="caption2">

			

				<?php if ( is_active_sidebar( 'pic3' ) ) : ?>
			<?php dynamic_sidebar( 'pic3' ); ?>
		<?php endif; ?>

					
			</section>
		</div>

	</div>

	<div class="col-md-12 space" id='wspolpraca'>

	<p class="widget content1 justify">
		<?php if ( is_active_sidebar( 'o_firmie_1' ) ) : ?>
			<?php dynamic_sidebar( 'o_firmie_1' ); ?>
		<?php endif; ?>
	</p>
	</div>


	<div class="col-md-12 bg-white">

	<p class="widget">
		<?php if ( is_active_sidebar( 'o_firmie_blog' ) ) : ?>
			<?php dynamic_sidebar( 'o_firmie_blog' ); ?>
		<?php endif; ?>
	</p>
	</div>

	<a href="/aktualnosci">
		<button class="button-more text-center">
			zobacz wszystkie
		</button>
	</a>


	</div><!-- /container -->
</div>

<?php get_footer(); ?>