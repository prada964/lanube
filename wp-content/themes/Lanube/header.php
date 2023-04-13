<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body>
    <div class="container-principal row">
        <header class="site-header col-12 col-sm-12 col-md-3">
            <div class="content-header">
                <div class="navigation-bar">
                    <div class="logo">
                        <a href="<?php echo esc_url(site_url('/')) ?>">
                            <?php $logo = get_field('logo', 'options'); ?>
                            <?php if (!empty($logo)): ?>
                                <img src="<?php echo esc_url($logo['url']) ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
                            <?php endif ?>
                        </a>
                    </div>
                    <?php
                    $args = array(
                        'theme_location' => 'menu-principal',
                        'container' => 'nav',
                        'container_class' => 'menu-principal'
                    );
                    wp_nav_menu($args);
                    ?>
                </div>
                <?php $icons = get_field('redes_sociales', 'options') ?>
                <div class="icon-networks-header">
                    <?php foreach ($icons as $icon): ?>
                        <a href="<?php echo $icon['url'] ?>"><?php echo $icon['icon'] ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </header>