<?php get_header(); ?>
    <div class="content-wrapper">
        <div class="clearfix wrapper">
            <main id="main" class="clearfix">
                <div class="post-wrapper">
<?php
$paged = (int) get_query_var('paged');
$args = array(
    'posts_per_page' => 10,
    'paged' => $paged,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'publish'
);
$the_query = new WP_Query($args);
if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();
?>
<?php
$cat = get_the_category();
$catslug = $cat[0]->slug;
?>
                    <div class="post">
                        <a href="<?php the_permalink(); ?>"><?php if(has_post_thumbnail()) { echo the_post_thumbnail('medium'); } ?>
                            <div class="category-color <?php echo $catslug; ?>"><?php the_category( $slug ); ?></div>
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo mb_substr(strip_tags($post-> post_content),0,35); ?></p>
                        </a>
                    </div>
                    <?php endwhile; endif; ?>
                </div>
            </main>
        </div>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>