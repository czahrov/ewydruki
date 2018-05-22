<?php
/*
Template Name: Single
*/
?>

<?php get_header(); ?>


<div class="baner-post">
<a class="img-post" rel="external" href="<? the_permalink()?>"><?php the_post_thumbnail(array(1920,300)); ?></a>
<div class="bread"></div>
</div>


<div class="container">
	<div class="white-box">
	


			<div class="entry">

									<div class="breadcrumb">
<?php
echo do_shortcode( '[breadcrumb]' ); 
?>
		
	</div>

						<h3><?php wp_title(); ?></h3>


			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php the_content('czytaj dalej'); ?>

					<?php endwhile; else: ?>

						<?php _e('Sorry, no posts matched your criteria.'); ?>
	
			<?php endif; ?>

			</div><!-- /entry -->
	

	</div><!-- /white-box -->






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
<br><br>

<?php get_footer(); ?>