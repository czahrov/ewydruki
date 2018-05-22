<?php
	session_start();
	
	if($_SESSION['show'] !== 1 and !isset($_GET['sprytne']))
	{
		include_once 'wbudowie.php';
		exit;
	}else
	{
		if(isset($_GET['sprytne']))
		{
			$_SESSION['show'] = 1;
		}
	}
	
	wp_head();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<meta charset="utf-8" />
	<title>E-wydruki - wydruki na szkle,</title>
	<meta name="author" content="SCEPTER" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url(bloginfo('stylesheet_directory')); ?>/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url(bloginfo('stylesheet_directory')); ?>/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url(bloginfo('stylesheet_directory')); ?>/style.css" />
	<?php
		preg_match('|trident|i',$_SERVER['HTTP_USER_AGENT'],$match);
		if(!empty($match[0])):
	?>
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url(bloginfo('stylesheet_directory')); ?>/css/trident.css" />
	<?php
		endif;
		
		preg_match('|version|i',$_SERVER['HTTP_USER_AGENT'],$match);
		if(!empty($match[0])):
	?>
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url(bloginfo('stylesheet_directory')); ?>/css/safari.css" />
	<?php
		endif;
	?>
	
	<?php wp_head(); ?>
</head>
<body>
	<?php
		if(is_home())
		{
			echo 
			"
			<div id='fb-root'></div>
				<script>
				(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = '//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.7';
					fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
				</script>
			";
		}else
		{
			// dodaj popup z newsletterem
			?>
			
				<div id='newsletter'>
					<div class='tab'>
						Zapis do newslettera
						
					</div>
					<div class='main'>
						<div class='close'>
							<span class="fa fa-close fa-fw fa-x3" aria-hidden="true"></span>
						</div>
						<div class='inner'>
							<?php
								if( is_active_sidebar( 'newsletter' ) )
								{
									dynamic_sidebar( 'newsletter' );
									
								}
								
							?>
						</div>
						
					</div>
					
				</div>
			
			<?php
		}
		
	?>
	    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container" id="menu">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active">
                    	<div clas="products-class">
                       <?php wp_nav_menu( array( 'theme_location' => 'new-menu' ) ); ?>
                   </div>
                    </li>
                   
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
