<?php
function register_my_menus() {
  register_nav_menus(
    array(
      'new-menu' => __( 'New Menu' ),
      'another-menu' => __( 'Another Menu' ),
      'an-extra-menu' => __( 'An Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
?>

<?php
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}
?>

<?php 

//Making jQuery Google API
function modify_jquery() {
  if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js', false, '1.8.1');
    wp_enqueue_script('jquery');
  }
}
//add_action('init', 'modify_jquery');

?>



<?php 

    register_sidebar( array(
        'name' => __( 'o firmie', 'e-wydruki.pl' ),
        'id' => 'o_firmie_1',
        'description' => __( 'Za pomocą tego widżetu, edytuj podstronę " o nas - współpraca', 'e-wydruki' ),
        'before_widget' => '<aside id="%1$s">',
        'after_widget' => "</aside>",
        'before_title' => "<h3 class='header1'>",
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Aktualnosci', 'e-wydruki.pl' ),
        'id' => 'aktualnosci',
        'description' => __( 'Aktualnosci' ),
        'before_widget' => '<aside id="%1$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );

      register_sidebar( array(
        'name' => __( 'Ostatnio na blogu', 'e-wydruki.pl' ),
        'id' => 'o_firmie_blog',
        'description' => __( 'Wyświetla ostatnie wpisy z aktualności', 'e-wydruki' ),
        'before_widget' => '<aside id="%1$s">',
        'after_widget' => "</aside>",
        'before_title' => "<h3 class='header1'>",
        'after_title' => '</h3>',
    ) );

            register_sidebar( array(
        'name' => __( 'Kontakt', 'e-wydruki.pl' ),
        'id' => 'kontakt',
        'description' => __( 'Tekst w kontakcie', 'e-wydruki' ),
        'before_widget' => '<aside id="%1$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );


                    register_sidebar( array(
        'name' => __( 'Produkty', 'e-wydruki.pl' ),
        'id' => 'produkty',
        'description' => __( 'Tekst w produktach', 'e-wydruki' ),
        'before_widget' => '<aside id="%1$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );


                          register_sidebar( array(
        'name' => __( 'Kontakt - adres', 'e-wydruki.pl' ),
        'id' => 'adres',
        'description' => __( 'Zmiena adres w kontakcie', 'e-wydruki' ),
        'before_widget' => '<aside id="%1$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );




          register_sidebar( array(
        'name' => __( 'Kontakt - adres -mail', 'e-wydruki.pl' ),
        'id' => 'ae',
        'description' => __( 'zmienia adres e-mail w kontakcie', 'e-wydruki' ),
        'before_widget' => '<aside id="%1$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );

         register_sidebar( array(
        'name' => __( 'Kontakt - nr telefonu', 'e-wydruki.pl' ),
        'id' => 'nt',
        'description' => __( 'Zmiena nr telefonu w kontakcie', 'e-wydruki' ),
        'before_widget' => '<aside id="%1$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );

               register_sidebar( array(
        'name' => __( 'O Firmie - Caption1', 'e-wydruki.pl' ),
        'id' => 'pic1',
        'description' => __( 'Zmiena opis pod zdjęciem 1', 'e-wydruki' ),
        'before_widget' => '<aside id="%1$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );

                 register_sidebar( array(
        'name' => __( 'O Firmie - Caption2', 'e-wydruki.pl' ),
        'id' => 'pic2',
        'description' => __( 'Zmiena opis pod zdjęciem 2', 'e-wydruki' ),
        'before_widget' => '<aside id="%1$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );

                     register_sidebar( array(
        'name' => __( 'O Firmie - Caption3', 'e-wydruki.pl' ),
        'id' => 'pic3',
        'description' => __( 'Zmiena opis pod zdjęciem 3', 'e-wydruki' ),
        'before_widget' => '<aside id="%1$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );


                                      register_sidebar( array(
        'name' => __( 'testowy', 'e-wydruki.pl' ),
        'id' => 'test',
        'description' => __( 'testowy', 'e-wydruki' ),
        'before_widget' => '<aside id="%1$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );


	register_sidebar( array(
		'name' => __( 'stopka', 'e-wydruki.pl' ),
		'id' => 'stopka',
		'description' => __( 'tekst w stopce na stronie głównej', 'e-wydruki' ),
		'before_widget' => '<div id="stopka" class="%1$s">',
		'after_widget' => "</div>",
		'before_title' => '<div class="header1">',
		'after_title' => '</div>',
	) );
	
	register_sidebar( array(
		'name' => __( 'produkty - lewy', 'e-wydruki.pl' ),
		'id' => 'prod_left',
		'description' => __( 'Tekst do lewego zdjęcia', 'e-wydruki' ),
		'before_widget' => '<aside id="prod_left" class="%1$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h3>',
        'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'produkty - góra', 'e-wydruki.pl' ),
		'id' => 'prod_top',
		'description' => __( 'Tekst do górnego zdjęcia', 'e-wydruki' ),
		'before_widget' => '<aside id="prod_top" class="%1$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h3>',
        'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'produkty - dół', 'e-wydruki.pl' ),
		'id' => 'prod_bot',
		'description' => __( 'Tekst do dolnego zdjęcia', 'e-wydruki' ),
		'before_widget' => '<aside id="prod_bot" class="%1$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h3>',
        'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'newsletter', 'e-wydruki.pl' ),
		'id' => 'newsletter',
		'description' => __( 'newsletter', 'e-wydruki' ),
		'before_widget' => "",
        'after_widget' => "",
        'before_title' => "",
        'after_title' => "",
	) );
	
	
 ?>



<?php add_theme_support( 'post-thumbnails' ); ?>

 <?php if ( has_post_thumbnail() ) : 


 ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
<?php endif; ?>

<?php 
add_filter('nav_menu_css_class', 'add_active_class', 10, 2 );

function add_active_class($classes, $item) {

  if( $item->menu_item_parent == 0 && 
    in_array( 'current-menu-item', $classes ) ||
    in_array( 'current-menu-ancestor', $classes ) ||
    in_array( 'current-menu-parent', $classes ) ||
    in_array( 'current_page_parent', $classes ) ||
    in_array( 'current_page_ancestor', $classes )
    ) {

    $classes[] = "active";
  }

  return $classes;
}

?>


<?php

function produkty()
{
	$ret = array();
	$cat = get_category_by_slug('produkty');
	$args = array(
		'taxonomy' => 'category',
		'hide_empty' => false,
		'child_of' => $cat->cat_ID,
		
	);
	$cats = get_terms($args);
	foreach($cats as $cat)
	{
		$temp = array();
		
		$args = array(
			'numberposts' => -1,
			'category' => $cat->term_id,
		);
		$posts = get_posts($args);
		foreach($posts as $post)
		{
			if(has_post_thumbnail($post->ID))
			{
				$img = wp_get_attachment_image_url(get_post_thumbnail_id($post->ID),'full');
				
			}else
			{
				$img = '';
				
			}
			
			array_push($temp, array(
				'TITLE' => $post->post_title,
				'CONTENT' => $post->post_content,
				'IMG' => $img,
			));
			
			/*
			*/
		}
		
		$ret[$cat->name]['ID'] = $cat->term_id;
		$ret[$cat->name]['POSTS'] = $temp;
		
		
	}
	
	return $ret;
	
}

?>

<?php
	function panelBot()
	{
		$ret = array();
		$cat = get_category_by_slug('aktualnosci');
		$args = array(
			'category' => $cat->cat_ID,
			'numberposts' => -1,
		);
		$posts = get_posts($args);
		foreach($posts as $post)
		{
			$t = array(
				'TITLE' => $post->post_title,
				'URL' => get_permalink($post->ID),
				'IMG' => wp_get_attachment_image_url(get_post_thumbnail_id($post->ID),'full'),
			);
			array_push($ret,$t);
			
		}
		
		return $ret;
	}
	
	
?>

<?php
	function aktualnosci()
	{
		$ret = array(
			'Wszystkie' => array(),
		);
		$maxPerPage = 6;
		$ID = get_category_by_slug('aktualnosci')->cat_ID;
		
		
		$args = array(
			'category' => $ID,
			'numberposts' => -1,
		);
		$posts = get_posts($args);
		foreach($posts as $post)
		{
			$t = array(
				'TITLE' => $post->post_title,
			);
			
			preg_match( '/(?:\S+\s){1,50}/', $post->post_content, $match );
			
			$t['CONTENT'] = $match[0];
			$t['AUTHOR'] = get_the_author_meta('nickname', $post->post_author);
			$t['DATE'] = get_the_date('d F Y', $post->ID);
			$t['URL'] = get_the_permalink($post->ID);
			$t['IMG'] = wp_get_attachment_image_url(get_post_thumbnail_id($post->ID),'full');
			
			array_push( $ret['Wszystkie'], $t );
		}
		$ret['Wszystkie'] = array_chunk($ret['Wszystkie'], $maxPerPage);
		
		$cats = get_terms(array(
			'taxonomy' => 'category',
			'child_of' => $ID,
		));
		foreach($cats as $cat)
		{
			$ret[$cat->name] = array();
			$args = array(
				'category' => $cat->term_id,
				'numberposts' => -1,
			);
			$posts = get_posts($args);
			foreach($posts as $post)
			{
				$t = array(
					'TITLE' => $post->post_title,
				);
				
				preg_match( '/(?:\S+\s){1,50}/', $post->post_content, $match );
				
				$t['CONTENT'] = $match[0];
				$t['AUTHOR'] = get_the_author_meta('nickname', $post->post_author);
				$t['DATE'] = get_the_date('d F Y', $post->ID);
				$t['URL'] = get_the_permalink($post->ID);
				$t['IMG'] = wp_get_attachment_image_url(get_post_thumbnail_id($post->ID),'full');
				
				array_push( $ret[$cat->name], $t );
			}
			$ret[$cat->name] = array_chunk( $ret[$cat->name], $maxPerPage );
			
		}
		
		return $ret;
		
	}
	
?>