<?php get_header()?>

	<div class="content wrapper	">
	
	
	<?php if(is_home() || is_front_page()){ ?>
		<h1>Welcome to Hild & Hild</h1>
		
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Page Services') ) : ?>  
     		<?php endif; ?> 
		<div class="clear"></div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
			 <p><?php the_content(__('(more...)')); ?></p> 
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>

		<?php } else {
			 if (have_posts()) : while (have_posts()) : the_post(); ?>
			 <h1><?php the_title(); ?></h1>
			 <p><?php the_content(__('(more...)')); ?></p> 
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
			
			
		<?php }?>
	
<?php get_footer()?>