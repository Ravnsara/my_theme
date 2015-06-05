<!--------- begin sub-navigation ---------->
		<div id="rightside" class="widget">
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
		<div id="rightside" class="widget">
		<!--------- begin quote -------->
		<?php if (get_post_meta($post->ID, 'Quote', true)) : ?>
		<blockquote><?php echo get_post_meta($post->ID, 'Quote', true); ?></blockquote>
		<?php endif; ?>
		<!--------- end quote ---------->
		</div>
		<div id="rightside" class="widget">
		<!--------- begin dynamic sidebar -------->
		<?php dynamic_sidebar(); ?>
		<!--------- end dynamic sidebar ---------->
		</div>