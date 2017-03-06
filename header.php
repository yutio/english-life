<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="【情報の説明文50～100文字で書く。（英語の場合、カタカナ、読みも書く）】">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>">
    <meta property="og:description" content="【ページの説明】">
    <meta property="og:url" content="【ページのURL】">
    <meta property="og:site_name" content="イングリッシュライフ">
    <meta property="og:locale" content="ja_JP">
    <link href="<?php bloginfo('template_directory'); ?>/img/favicon.png" rel="icon" sizes="16x16">
    <link href="<?php bloginfo('template_url'); ?>/css/normalize.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <div class="header-navi-shadow"></div>