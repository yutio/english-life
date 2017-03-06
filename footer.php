    <footer>
        <div class="wrapper clearfix">
            <div class="footer-logo">
                <a href="<?php echo esc_url( get_home_url() ); ?>">
                    <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" height="30" alt="ENGLISH LIFE">
                </a>
            </div>
            <div class="footer-nav">
                <nav>
                    <ul>
                        <li class="parent">
                            <a href="<?php echo esc_url( get_home_url() ); ?>/about.html">会社概要</a>
                            <ul class="child">
                                <li>
                                    <a href="<?php echo esc_url( get_home_url() ); ?>/about.html#top-message-detail">創業者の言葉</a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( get_home_url() ); ?>/about.html#company">会社概要</a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent">
                            <a href="<?php echo esc_url( get_home_url() ); ?>/abroad.html">スマホ留学</a>
                        </li>
                        <li class="parent">
                            <a href="<?php echo esc_url( get_home_url() ); ?>/instructor.html">講師紹介</a>
                        </li>
                        <li class="parent">
                            <a href="<?php echo esc_url( get_home_url() ); ?>/recruit.html">求人案内</a>
                            <ul class="child">
                                <li>
                                    <a href="<?php echo esc_url( get_home_url() ); ?>/recruit.html#support-stuff">サポートスタッフ<br>募集</a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( get_home_url() ); ?>/recruit.html#teacher">講師募集</a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent">
                            <a href="<?php echo esc_url( get_home_url() ); ?>/contact.html">お問い合わせ</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <small>© 2017 株式会社イングリッシュライフ Inc. All rights reserved.</small>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
    <?php wp_footer(); ?>
</body>

</html>