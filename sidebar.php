<div id="sidebar">
	
	<?php 
	if ( ! dynamic_sidebar('primary-widget-area') ) : ?>
		
		<!-- Sidebar content if no widgets
			Example:
			<div class="box">
				<h1>Pages</h1>
				<ul>
					<?php wp_list_pages(); ?>
				</ul>
			</div>
		-->
		
	<?php endif; ?>
	
</div><!-- End of Sidebar -->

