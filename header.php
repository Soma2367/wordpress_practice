<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('/images/leaf-left.svg'));?>" type="image/svg+xml">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="site-header">
        <div class="wrapper">
            <h1 class="site-title">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="site-logo" src="<?php echo esc_url(get_theme_file_uri('/images/logo.svg')); ?>" alt="<?php bloginfo('name'); ?>">
                </a>
            </h1>
            <p class="site-description"><?php bloginfo('description'); ?></p>
        </div>
    </header>
    <nav class="primary-navigation wrapper">
        <button class="btn-menu">メニュー</button>
        <ul class="menu-wrapper">
            <li><a href="#">ホーム</a></li>
            <li><a href="#">オーガニックフード</a></li>
            <li><a href="#">インテリア</a></li>
            <li><a href="#">アウトドアグッズ</a></li>
            <li><a href="#">ヒーリング</a></li>
        </ul>
    </nav>
