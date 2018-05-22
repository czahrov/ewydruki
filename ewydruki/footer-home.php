<div id='footer'>
	<div id='panelBot'>
		<div class='tab'>
			<div class='circle'>
				<div class='hitbox'></div>
				<div class='up'>
					<span class="fa fa-angle-double-up fa-3x" aria-hidden="true"></span>
					
				</div>
				<div class='down'>
					<span class="fa fa-angle-double-down fa-3x" aria-hidden="true"></span>
					
				</div>
				
			</div>
			
		</div>
		<div class='wrapper'>
			<div class='prev'>
				<div class='circle'>
					<div class='wrapper'></div>
					<div class='hitbox'></div>
					<span class="fa fa-fw fa-angle-double-left fa-3x"></span>
				</div>
				
			</div>
			<div class='box'>
				<?php
					$posts = panelBot();
					foreach($posts as $post):
				?>
				<div class='item'>
					<a href="<?php echo $post['URL']; ?>">
						<div class='wrapper' style='background-image: url(<?php echo $post['IMG']; ?>);'></div>
						<div class='over'>
							<?php echo $post['TITLE']; ?>
						</div>
					</a>
					
				</div>
				<?php
					endforeach;
				?>
				
			</div>
			<div class='next'>
				<div class='circle'>
					<div class='wrapper'></div>
					<div class='hitbox'></div>
					<span class="fa fa-fw fa-angle-double-right fa-3x"></span>
				</div>
				
			</div>
			
			
		</div>
	</div>
	<div class='left'>
		<div class="fb-page" data-href="https://www.facebook.com/ewydruki" data-tabs="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
			<blockquote cite="https://www.facebook.com/ewydruki" class="fb-xfbml-parse-ignore">
				<a href="https://www.facebook.com/ewydruki">
					e-wydruki.pl
				</a>
			</blockquote>
		</div>
		
	</div>
	<div class='mid'>
		<div class='social'>
		<?php
			$arr_social = array(
				'fb' => array(
					'IMG' => 'fb_front.png',
					'HREF' => 'https://www.facebook.com/ewydruki',
				),
				'yt' => array(
					'IMG' => 'yt_front.png',
					'HREF' => '/',
				),
				'instagram' => array(
					'IMG' => 'instagram_front.png',
					'HREF' => '/',
				),
				'pinterest' => array(
					'IMG' => 'pinterest_front.png',
					'HREF' => '/',
				),
				'google' => array(
					'IMG' => 'g+_front.png',
					'HREF' => 'https://plus.google.com/114572308208808407211',
				),
				
			);
			
			foreach($arr_social as $name=>$item)
			{
				echo 
				"
				<div class='{$name}'>
					<a href='{$item['HREF']}' target='_blank'>
						<div class='wrapper bgimg' style='background-image: url(\"". get_stylesheet_directory_uri() ."/img/{$item['IMG']}\")'></div>
					</a>
				</div>
				";
				
			}
			
		?>
			
		</div>
		
	</div>
	<div class='right'>
		<div class='box'>
			<?php
				if ( is_active_sidebar( 'stopka' ) )
				{
					dynamic_sidebar( 'stopka' );
				}
			?>
		</div>
	</div>

	
</div>