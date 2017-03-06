<?php get_header(); ?>
<section id="page-title" class="news-bg">
        <div class="header-nav">
            <a href="<?php echo esc_url( get_home_url() ); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" height="30" alt="ENGLISH LIFE"></a>
            <nav class="clearfix">
                    <ul>
                        <li>
                            <a href="<?php echo esc_url( get_home_url() ); ?>/about.html">会社概要</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( get_home_url() ); ?>/abroad.html">スマホ留学</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( get_home_url() ); ?>/instructor.html">講師紹介</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( get_home_url() ); ?>/recruit.html">求人案内</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( get_home_url() ); ?>/contact.html">お問い合わせ</a>
                        </li>
                    </ul>
                </nav>
        </div>
        <h1>新着情報</h1>
    </section>
    <header id="top-head">
        <div class="clearfix">
            <div id="mobile-head">
                <a href="<?php echo esc_url( get_home_url() ); ?>">
                    <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="ENGLISH LIFE" height="30">
                </a>
                <div id="nav-toggle">
                    <div>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <nav id="global-nav" class="side-navi clearfix">
                <ul>
                    <li>
                        <a href="<?php echo esc_url( get_home_url() ); ?>/about.html">会社概要</a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( get_home_url() ); ?>/abroad.html">スマホ留学</a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( get_home_url() ); ?>/instructor.html">講師紹介</a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( get_home_url() ); ?>/recruit.html">求人案内</a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( get_home_url() ); ?>/contact.html">お問い合わせ</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="main-container">
        <div class="main-container single-page">
            <section id="single-main-container">
                <div class="wrapper">
                <?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php
$category = get_the_category();
$cat_slug = $category[0]->category_nicename;
?>
                    <h2 class="news-detail-title"><?php the_title() ?></h2>
                    <p class="label-and-date clearfix"><span class="headline-date"><?php the_time('Y/n/j'); ?></span></p>
                    <div class="news-img">
                        <?php the_post_thumbnail( 'thumbnail', array('class' => 'responsive-img') ); ?>
                    </div>
                    <p class="single-content"><?php the_content(); ?></p>
                    <?php endwhile; ?>
            <?php endif; ?>
                </div>
            </section>
        </div>
    </div>
<?php get_footer(); ?>

