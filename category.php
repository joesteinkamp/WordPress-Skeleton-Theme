<?php get_header(); ?>


<div id="content">

	<?php if ( have_posts() ) : ?>
		<h1>Browsing Posts in <strong><?php single_cat_title(); ?></strong></h1>
		
		<?php while ( have_posts() ) : the_post(); ?>
			
			<div class="post">
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				<p class="postinfo">By <?php the_author(); ?> | Categories: <?php the_category(', '); ?> | <?php comments_popup_link(); ?></p>
				<?php the_content('Read more &#8658'); ?>
			</div>
			
		<?php endwhile; ?>
	
	<?php endif; ?>

</div><!-- End of Content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>