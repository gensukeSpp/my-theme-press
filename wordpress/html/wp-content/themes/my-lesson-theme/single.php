<?php get_header(); ?>
<?php if (have_posts()):
	while (have_posts()) :	the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="inside-image">
				<img src=<?php echo esc_url(get_theme_file_uri('')); ?> alt="" />
			</div>
			<dl>
				<dt><?php the_title(); ?></dt>
				<dd><?php the_content(); ?></dd>
			</dl>
		</div>

	<?php endwhile;
endif; ?>
<?php previous_post_link(); ?>
<?php next_post_link(); ?>
<?php get_footer(); ?>