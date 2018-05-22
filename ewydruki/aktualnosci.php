<?php
/*
Template Name: Aktualności	
*/
?>

<?php get_header(); ?>

<div id='aktualnosci'>
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

	<div class="col-md-12 space">
		<p class="widget">

		</p>

	</div>	

	<?php //if ( is_active_sidebar( 'aktualnosci' ) ) : ?>
	<?php //dynamic_sidebar( 'aktualnosci' ); ?>
	<?php //endif; ?>

	<div class='box'>
		<?php
			echo "<!--";
			print_r(aktualnosci());
			echo "-->";

			$arr = aktualnosci();
			echo "<div class='menu'>";
			$counter = 0;
			foreach($arr as $k => $v)
			{
				$add = $counter === 0?(" active"):("");
				echo "<div class='item{$add}' pages-id='{$counter}'>{$k}</div>";
				$counter++;
			}
			echo "</div>";
			echo "<div class='pager'>";
			$counter = 0;
			foreach($arr as $cat)
			{
				$add = $counter === 0?(" start"):("");
				echo "<div class='pages{$add}' pages-id='{$counter}'>";
				$counter2 = 0;
				foreach($cat as $pid => $page)
				{
					$add = $counter2 === 0?(" start"):("");
					echo "<div class='page{$add}' page-id='{$pid}'>";
					foreach($page as $post)
					{
						echo
						"<div class='item'>
							<a href='{$post['URL']}' class='hitbox'></a>
							<div class='img' style='background-image:url({$post['IMG']});'>
								<div class='content'>
									<div class='title'>{$post['TITLE']}</div>
									<div>
										{$post['CONTENT']} ...
									</div>
									<div class='date'>{$post['DATE']}</div>
									<div class='author'>{$post['AUTHOR']}</div>
								</div>						
							</div>
						</div>";
					}
					echo "</div>";
					$counter2++;
					
				}
				
				if($counter2 > 1)
				{
					echo "<div class='paginator'>";
					$counter3 = 1;
					foreach($cat as $pid => $page)
					{
						$add = $counter3 === 1?(" active"):("");
						echo "<div class='item{$add}' page-id='{$pid}'>{$counter3}</div>";
						$counter3++;
						
					}
					echo "</div>";
					
				}
				
				echo "</div>";
				$counter++;
				
			}
			echo "</div>";
			
			/*
			$posts = array();
			foreach($posts as $post)
			{
				echo
					"<div class='item'>
						<a href='{$post['URL']}' class='hitbox'></a>
						<div class='img' style='background-image:url({$post['IMG']});'>
							<div class='content'>
								<div class='title'>{$post['TITLE']}</div>
								<div>
									{$post['CONTENT']} ...
								</div>
								<div class='date'>{$post['DATE']}</div>
								<div class='author'>{$post['AUTHOR']}</div>
							</div>						
						</div>
					</div>";
			}
			*/

		?>
	</div>

</div><!-- /container -->
</div>

<?php get_footer(); ?>