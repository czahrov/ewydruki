<?php
	get_header();
?>

<body>

  <div id="slider">
 <?php putRevSlider("slider1") ?>
  </div>


  <div id="panel">

            <p class="widget">
  <?php if ( is_active_sidebar( 'kontakt' ) ) : ?>
        <?php dynamic_sidebar( 'kontakt' ); ?>
    <?php endif; ?>
    </p>
  </div>




<?php
	get_footer('');
?>



