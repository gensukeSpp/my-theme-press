<?php
	/*
	 * get_query_var()でページ数を取得してpagedに渡す
	 * */
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	
	$args = array(
		'posts_per_page' => get_option('posts_per_page'), // 1ページに含める投稿数
		'category_name' => 'flower',
		'paged' => $paged
	);
	$the_query = new WP_Query( $args );
	
?>

    <article>
		<?php $cat_obj = get_category_by_slug($args['category_name']); ?>
		<h4><?php echo $cat_obj -> cat_name; ?></h4>
		<!-- お決まりのループ開始処理 -->
		<?php if ( $the_query -> have_posts() ) : ?>
			<?php while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
				<section>
					<!-- ここに表示するタイトルやコンテンツなどを指定 -->
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				</section>
			<?php endwhile; // end of the loop. ?>
			<?php //list_paginate(); ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?><!-- 忘れずにリセットする必要がある -->
	</article>