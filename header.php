<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
		</script>		
		
<link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet">
<link href="css/media.css" type="text/css" rel="stylesheet">
	
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header>

<div id="logo">
	<a href="/wordpress/"><img src="<?php bloginfo('template_directory'); ?>/images/DD_main_logo_sm.png" alt="Logo"></a>
</div><!--end logo-->

<!--------- begin navigation ---------->
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'nav', 'container_id' => 'navigation', 'items_wrap' => '<ul>%3$s</ul>', ) ); ?>
<!--------- end navigation ---------->

</header>