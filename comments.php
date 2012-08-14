<?php if ( have_comments() ) : ?>
	<h2>Comments</h2>
	
	<?php wp_list_comments( array('style' => 'div') ); ?>

<?php endif; ?>

<?php comment_form(); ?>