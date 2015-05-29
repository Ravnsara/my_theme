<?php get_header(); ?>

<div id="wrapper">

	<div id="main">

        <div id="pagetitle">
		
            <h2>THE BAND</h2>
			
        </div><!--end pagetitle-->
		
        <!--------- begin content ---------->		
        <div id="leftside">
                                         
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> <!-- start the loop -->
				<article class="post-excerpt">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> <!--get title of page or posting --> 
				<small> Posted on <?php the_time ('F j,Y'); ?> by <?php the_author (); ?> in <?php the_category (', '); ?></small> <!-- get the date, author and category -->
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail ('thumbnail'); ?></a>
				<?php the_excerpt(); ?> <!-- get excerpt of posting -->
				<p class="read-more"><a href="<?php the_permalink(); ?>">Read More</a></p>
				</article>
				<?php endwhile; endif; ?> <!-- end the loop -->
				<small>index.php</small>           

        </div><!--end leftside-->				
        <!--------- end content ---------->
		
		<!--------- begin sub-navigation ---------->
		<div id="sub-navigation" class="widget">
				<?php if (is_page()); ?>
                <h2 class="sub-navigation-title">
				<?php echo get_the_title($post->post_parent); ?></h2>
				<ul class="sub-navigation-items"><?php  
					if ($post->post_parent) {
						wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __('')));
					}else{
						wp_list_pages(array('child_of' => $post->ID, 'title_li' => __('')));
					}				
				?></ul>
			         
		</div>
		<!--------- end sub-navigation ---------->

    </div><!--end main-->      

</div><!--end wrapper-->

<?php get_footer(); ?>