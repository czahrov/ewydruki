<?php
	if(is_home())
	{
		get_footer('home');
		echo '<script src="'. get_stylesheet_directory_uri() .'/js/jquery-bypass.js"></script>';
		
	}else
	{
		get_footer('standard');
		echo '<script src="'. get_stylesheet_directory_uri() .'/js/jquery-1.12.3.min.js"></script>';
		
		
	}
	
?>


<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/gmap3.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>

<?php
	wp_footer();
?>

</body>
</html>