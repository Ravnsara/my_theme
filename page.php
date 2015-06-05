<?php get_header(); ?>

<div id="wrapper">

	<div id="main">

        <div id="pagetitle">
		
            <h2>THE BAND</h2>
			
        </div><!--end pagetitle-->
		
        <!--------- begin content ---------->		
        <div id="leftside">
                                         
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> <!-- start the loop -->
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> <!--get title of page or posting --> 
				<?php the_content(''); ?> <!-- get page or posting, written content -->
				<?php endwhile; endif; ?> <!-- end the loop -->
				<small>page.php</small>           

        </div><!--end leftside-->		
        <!--------- end content ---------->
		
		<?php get_sidebar(); ?>
		
    </div><!--end main-->      

</div><!--end wrapper-->

<?php get_footer(); ?>