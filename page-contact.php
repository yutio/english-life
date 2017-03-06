<?php get_header(); ?>
<section id="page-title" class="contact-title">
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
        <h1>お問い合わせ</h1>
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
    <section id="contact-detail">
        <div class="wrapper">
            <h3 class="title center-title">お問い合わせ</h3>
            <h4 class="title-en center-title"><img src="<?php bloginfo('template_directory'); ?>/img/contact.png" height="25" alt="contact"></h4>
            <div class="line-wrap clearfix">
                <div class="line1"></div>
                <div class="line2"></div>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="13" title="お問い合わせ"]') ?>
        </div>
    </section>
<?php get_footer(); ?>