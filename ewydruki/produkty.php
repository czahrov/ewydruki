<?php
/*
Template Name: Produkty
*/
?>

<?php get_header(); ?>


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


						<h3 class='header1'><?php wp_title(); ?></h3>

		<div class='content'>
			<?php
				if ( have_posts() )
				{
					the_post();
					the_content('czytaj dalej');
				}else
				{
					_e('Przepraszamy, brak materiału do zaprezentowania.');
				}
				
			?>
		</div>


	

			</div><!-- /entry -->
				</div><!-- /white-box -->




	<div class="triple-box">

		<div class="box1" style="background-image: url('<?php echo get_post_meta($post->ID, 'pic_04', true) ?>')">
			

			<section class="caption">

				<?php
					if ( is_active_sidebar( 'prod_left' ) )
					{
						dynamic_sidebar( 'prod_left' );
					}
				?>

			</section>


		</div>

		<div class="box2" style="background-image: url('<?php echo get_post_meta($post->ID, 'pic_05', true) ?>')">
			
			<section class="caption2">

				<?php
					if ( is_active_sidebar( 'prod_top' ) )
					{
						dynamic_sidebar( 'prod_top' );
					}
				?>
			</section>
		</div>

		<div class="box3" style="background-image: url('<?php echo get_post_meta($post->ID, 'pic_06', true) ?>')">
			
			<section class="caption2">

			

				<?php
					if ( is_active_sidebar( 'prod_bot' ) )
					{
						dynamic_sidebar( 'prod_bot' );
					}
				?>

					
			</section>
		</div>

	</div>


<div class="col-md-12 space">

<p class="widget">
	<div class='produkty'>
		<div class='menu'>
		<?php
			$temp = produkty();
			$c = 0;
			foreach($temp as $k => $v){
				if($c === 0){
					echo "<div class='item active' item-id='{$v['ID']}'>{$k}</div>";
					
				}else
				{
					echo "<div class='item' item-id='{$v['ID']}'>{$k}</div>";
					
				}
				$c++;
			
			}
			
		?>
		</div>
		<div class='pages'>
			<?php
				$c = 0;
				foreach($temp as $k => $v)
				{
					if($c === 0){
						echo "<div class='page start' page-id='{$v['ID']}'>";
						
					}else{
						echo "<div class='page' page-id='{$v['ID']}'>";
						
					}
						echo "<div class='line1'>";
							echo "<div class='hbar'></div>";
							echo "<div class='title'>{$k}</div>";
							echo "<div class='hbar'></div>";
						echo "</div>";
						foreach($v['POSTS'] as $post)
						{
							echo "<div class='left'>{$post['CONTENT']}</div>";
							//echo "<div class='right'><div class='wrapper' style='background-image: url({$post['IMG']});'></div></div>";
							
						}
					echo "</div>";
					$c++;
				}
				
			?>
			
		</div>
		
	</div>

</div><!-- /container -->
<br><br>

<?php get_footer(); ?>