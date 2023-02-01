<?php get_header(); ?>
<h2>サイドバーメニュー</h2>
<?php  
// $categories = get_categories(); 
$categories = array('sweets', 'flower', 'onsen');
foreach($categories as $cat){ ?>
    <section>
        <div class="<?php echo $cat; ?>">
            <?php
                /*
                    *  指定したカテゴリーの ID を取得
                    * 	$category_id = get_cat_ID( $cat );
                    * */
                // カテゴリースラッグからカテゴリー名とカテゴリーのリンクを取得
                $cat_obj = get_category_by_slug( $cat );
                // このカテゴリーの URL を取得
                $category_link = get_category_link( $cat_obj -> cat_ID );
            ?>
            <!-- このカテゴリーへのリンクを出力 -->
            <a href="<?php echo esc_url( $category_link ); ?>"><?php echo $cat_obj -> name ?></a>
        </div>
        <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            
            $args = array(
                'posts_per_page' => get_option('posts_per_page'),
                'category_name' => $cat,
                'paged' => $paged
            );
            $title_query = new WP_Query( $args );
            if($title_query -> have_posts()) :
                while($title_query -> have_posts()) : $title_query -> the_post(); ?>
                    <dl>
                        <dt><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><dt>
                    </dl>
                <?php endwhile; else: ?>
                <p>なんかいろいろ<br clear="all" /></p>
            <?php endif;
        ?>
    </section>
<?php unset($cat); } ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
