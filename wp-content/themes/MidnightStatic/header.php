<?php

?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:700,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>

	<script type="text/javascript">
	$(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('#color-change');
   var offset = startchange.offset();
    if (startchange.length){
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $(".main").css('background-color', '#f0f0f0');
          $("a").css('color', '#160344');
       } else {
          $('.main').css('background-color', 'transparent');
          $("a").css('color', '#fff');
       }
   });
    }
});
	</script>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body>
	<nav class="main">    
		<a href="#header">Home</a>    
      <a href="#music">Music</a>
      <a href="#about">About</a>
      <a href="#shows">Shows</a>
      <a href="#contact">Contact</a>
	</nav>
