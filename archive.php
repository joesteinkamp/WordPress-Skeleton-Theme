<?php get_header(); ?>

<div id="content">

	<?php if ( have_posts() ) : ?>
		<h1>
		<?php if ( is_day() ) : ?>
			<?php printf( __( 'Daily Archives: <span>%s</span>' ), get_the_date() ); ?>
		<?php elseif ( is_month() ) : ?>
			<?php printf( __( 'Monthly Archives: <span>%s</span>' ), get_the_date('F Y') ); ?>
		<?php elseif ( is_year() ) : ?>
			<?php printf( __( 'Yearly Archives: <span>%s</span>' ), get_the_date('Y') ); ?>
		<?php else : ?>
			<?php _e( 'Blog Archives' ); ?>
		<?php endif; ?>
	</h1>
		
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