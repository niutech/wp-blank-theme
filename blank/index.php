<?php get_header(); ?>
<?php get_sidebar(); ?>

	<div id="container">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<?php the_time(); ?>
					<?php the_author(); ?>
					<?php the_content(__('Więcej &raquo;')); ?>
					<?php wp_link_pages(array('before' => '<p><strong>'.__('Strony: ').'</strong>', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					<?php the_tags(__('Tagi: '), ', ', '<br />'); ?>  
					<?php _e('Kategorie: '); the_category(', '); ?><br />
					<?php edit_post_link(__('Edytuj'), '', '<br />'); ?>
					<?php comments_popup_link(__('Brak komentarzy &#187;'), __('1 komentarz &#187;'), __('% komentarzy &#187;')); ?>
			</div>
		<?php endwhile; ?>
        <?php next_posts_link(__('&laquo; Poprzednie')); ?>
		<?php previous_posts_link(__('Następne &raquo;')); ?>
	<?php else : ?>
		<h2><?php _e('Nie znaleziono'); ?></h2>
		<p><?php _e('Przepraszamy, nic nie znaleziono!'); ?></p>
	<?php endif; ?>
	</div>

<?php get_footer(); ?>
