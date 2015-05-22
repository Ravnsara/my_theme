<?php get_header(); ?>

<div id="wrapper">

	<div id="main">

        <div id="mainpic">
        	<img src="<?php bloginfo('template_directory'); ?>/images/DD-In-Studio-A.jpg" alt="GG Picture">
        </div>		
	
        <!--------- end content ---------->
		
		<div id="box1">
		<div id="sectleft">
			<h3>HOME STUFF</h3>
			<br />
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?><!-- start loop one -->
			<h4 class="red"><?php the_content(''); ?></h4><!-- get the home page's content -->
			<?php endwhile; endif; ?><!-- end loop one -->
			
			<!--<h4 class="red">11/19/14</h4>
			<p>News about the band</p> 
			
            <h4 class="red">11/18/14</h4>
			<p>News about the band</p>
           
            <h4 class="red">11/17/14</h4>
			<p>News about the band</p>-->
            
		</div><!--end sectleft-->
        
        <div id="sectmiddle">
        	<h3>PROMO PICTURES</h3>
            <br />
			
        	<div class="left">
        		<img src="<?php bloginfo('template_directory'); ?>/images/DD_MusicMag.jpg" alt="GG Picture">
        	</div><!--end left-->

        	<div class="left">
        		<img src="<?php bloginfo('template_directory'); ?>/images/DD_Promo.jpg" alt="GG Picture">
        	</div><!--end left-->

        	<div class="left">
        		<img src="<?php bloginfo('template_directory'); ?>/images/DD_Mall.jpg" alt="GG Picture">
        	</div><!--end left-->

		</div><!--end sectmiddle-->
        
        <div id="sectright">
			<h3>LATEST NEWS</h3>
			<br />
			
			<?php rewind_posts(); ?><!-- stop loop one -->
			<?php query_posts('showposts=4'); ?><!-- direct to loop 2 -->
			<?php while (have_posts()) : the_post(); ?><!-- start loop 2 -->
			<h4 class="red"><?php the_date('m/d/y'); ?></h4>
			<li><a class="white" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>	
			<?php endwhile; ?><!-- end loop 2 -->
			
		
        <!--<h3>SAMPLE MUSIC</h3>
            <br />
			
			<h4><a href="" class="red">1. I like cheese</a></h4>
            <br />

            <h4><a href="" class="red">2. I like cheese</a></h4>
            <br />

            <h4><a href="" class="red">3. I like cheese</a></h4>
            <br />

            <h4><a href="" class="red">4. I like cheese</a></h4>
            <br />-->
            
		</div><!--end sectright-->
        
    </div><!--end box1-->

    </div><!--end main-->      

</div><!--end wrapper-->

<?php get_footer(); ?>