<?php
/*
Template Name: Page With SideBar
*/
?>

<?php get_header();?>

<div class="content wrapper	">
	<div class="content-sidebar pull-left col-lg-8">
		 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 <h1><?php the_title(); ?></h1>
			 <p><?php the_content(__('(more...)')); ?></p> 
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
	</div>
	
	<div class="sidebar pull-left col-lg-4 col-md">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>  
      	<?php endif; ?>
	</div>
	<div class="clear"></div>
<?php get_footer();?>