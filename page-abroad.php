<?php get_header(); ?>
<section id="page-title" class="abroad">
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
        <h1>スマホ留学</h1>
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
    <section id="pv">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/gXX0Fv1g-10" frameborder="0" allowfullscreen></iframe>
    </section>
    <section id="sumaho-banner" class="wrapper">
        <h3><img src="<?php bloginfo('template_directory'); ?>/img/sumaho_abroad.jpg" width="100%" alt="Let's speak english with スマホ留学 〜世界一面白い英語の授業〜"></h3>
    </section>
    <section id="profile">
    <div class="wrapper">
        <h3 class="title">スマホ留学開発者</h3>
            <h4 class="title-en"><img src="<?php bloginfo('template_directory'); ?>/img/development.png" height="25" alt="Development"></h4>
            <div class="line1"></div>
            <p><span>塩原祥之（しおはらよしゆき）<br>
関西外国語大学　外国語学部　英米語学科卒</span><br><br>

語学に関する220冊の書籍を読むだけでなく、<br>
すべて書き写して、英語習得に必要なエッセンス<br>をギュッと凝縮した独自のノウハウを構築。<br><br>

自らが主催する英語教室やが医学の講義、<br>
企業向けにセミナーといった様々なシーンで、<br>
中学生、高校生、大学生、社会人まで<br>
幅広い年齢層に英語の授業を展開。<br><br>

コントなどを取り入れた、<br>
エンターテイメント性の高い授業が評価される。<br><br>

現在は、英語講師のかたわら、国際営業マンとして、<br>香港、マレーシア、ドバイ、インドネシアなど世界各国で活躍中。<span><img src="<?php bloginfo('template_directory'); ?>/img/shiohara.jpg" width="200"></span></p>
<span class="books"><img src="<?php bloginfo('template_directory'); ?>/img/books.jpg" width="100%"></span>
<a class="detail-btn" href="http://www.sumaho-ryugaku.com/lp/man/index.html" target="_blank">スマホ留学</a>
    </div>
    </section>
    <section id="sumaho">
        <div class="sumaho-title-wrapper">
            <h3 class="title center-title">スマホでオンラインに<br>こだわる理由</h3>
            <h4 class="title-en center-title"><img src="<?php bloginfo('template_directory'); ?>/img/service.png" height="25" alt="service"></h4>
            <div class="line-wrap clearfix">
                <div class="line1"></div>
                <div class="line2"></div>
            </div>
        </div>
        <div class="sumaho-text">
            <p>インプットとアウトプット。「効率的な学習」のためには、どちらが欠けてもいけません。<br>もし10分のインプットを行なったのなら、10分のアウトプットが必要です。<br>しかし現代人は忙しく、なかなか自由な時間が取れないものです。<br>しかし、そんな時代背景を考えると、我々が肌身離さず持っている「スマホ」を活用することで、<br>無理なく「アウトプット」を行えるのではないかと考えました。<br>そうして、大脳生理学や心理学の観点から、最も学習効率を高める語学習得法を考案し、<br>開発された「アウトプット型のオンライン英会話」がスマホ留学です。</p>
        </div>
    </section>
        <section id="news">
        <div class="wrapper">
            <h3 class="title">新着情報</h3>
            <h4 class="title-en"><img src="<?php bloginfo('template_directory'); ?>/img/what's-news.png" height="25" alt="what's news"></h4>
            <div class="line1"></div>
            <div class="news-wrap clearfix">
<?php
$paged = (int) get_query_var('paged');
$args = array(
    'posts_per_page' => 6,
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
<a href="<?php the_permalink(); ?>">
                <div class="news-block">
                    <div class="black-wrap"></div>
                        <?php the_post_thumbnail( 'thumbnail', array('class' => 'responsive-img') ); ?>
                        <div class="news-cap">
                            <h5><?php the_title(); ?></h5>
                            <p><?php echo mb_substr(strip_tags($post-> post_content),0,10); ?></p>
                        </div>
                </div>
                </a>
<?php endwhile; endif; ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>