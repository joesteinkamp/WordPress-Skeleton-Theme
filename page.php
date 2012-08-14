<?php get_header(); ?>

<div id="content">
	
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<h1><?php the_title(); ?></h1>	
		
		<?php the_content(); ?>
		
	<?php endwhile; ?>

</div><!-- End of Content -->






<?php get_sidebar(); ?>
<?php get_footer(); ?>