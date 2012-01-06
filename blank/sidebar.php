<div id="sidebar">
	<ul>
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
		<?php wp_list_pages(); ?>
<?php endif; ?>
	</ul>
</div>