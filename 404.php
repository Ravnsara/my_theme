<?php get_header(); ?>

<div id="wrapper">

	<div id="main">

        <div id="pagetitle">
		
            <h2>404: Page Not Found</h2>
			
        </div><!--end pagetitle-->
		
        <!--------- begin content ---------->		
        <div id="leftside">
           
                <img class="imageleft" src="<?php bloginfo('template_directory'); ?>/images/girls_banner.jpg" alt="GG Picture"> 
                
				<h2><?php the_title(); ?></h2> <!--get title of page or posting --> 
				<p>Try again!</p>
				<?php get_search_form(); ?> <!-- get page or posting, written content -->
				<small>404.php</small>
				
                <img class="imageright" src="<?php bloginfo('template_directory'); ?>/images/purple_shirt.jpg" alt="GG Picture">            

        </div><!--end leftside-->		
        <!--------- end content ---------->
		
    </div><!--end main-->      

</div><!--end wrapper-->

<?php get_footer(); ?>