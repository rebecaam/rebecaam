<?php
/**
 * Header del tema DigitalU
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<!-- SVG filters reutilizables (efecto liquid glass) -->
<svg width="0" height="0" aria-hidden="true" focusable="false" style="position:absolute">
    <defs>
        <filter id="glass-distortion" x="0%" y="0%" width="100%" height="100%">
            <feTurbulence type="fractalNoise" baseFrequency="0.008 0.008" numOctaves="2" seed="92" result="noise"/>
            <feGaussianBlur in="noise" stdDeviation="0.02" result="blur"/>
            <feDisplacementMap in="SourceGraphic" in2="blur" scale="60" xChannelSelector="R" yChannelSelector="G"/>
        </filter>
    </defs>
</svg>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Ir al contenido', 'digitalu'); ?></a>

<header class="site-header" id="siteHeader">
    <div class="header-inner">
        <div class="brand">
            <?php digitalu_logo('header'); ?>
        </div>

        <nav class="main-nav" id="mainNav" aria-label="<?php esc_attr_e('Menú principal', 'digitalu'); ?>">
            <?php
            wp_nav_menu([
                'theme_location'  => 'principal',
                'menu_id'         => 'main-menu',
                'menu_class'      => 'menu',
                'container'       => false,
                'fallback_cb'     => 'digitalu_default_menu',
                'depth'           => 2,
            ]);
            ?>
        </nav>

        <a class="btn btn-cta" href="<?php echo esc_url(digitalu_wa_url()); ?>">
            <svg viewBox="0 0 448 512" aria-hidden="true">
                <path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zM223.9 438.7c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6z"/>
            </svg>
            <span><?php esc_html_e('Solicitar por Whatsapp', 'digitalu'); ?></span>
        </a>

        <button class="menu-toggle" id="menuToggle" aria-label="<?php esc_attr_e('Abrir menú', 'digitalu'); ?>" aria-expanded="false" aria-controls="mainNav">
            <svg viewBox="0 0 1000 1000" aria-hidden="true">
                <path fill="currentColor" d="M104 333H896C929 333 958 304 958 271S929 208 896 208H104C71 208 42 237 42 271S71 333 104 333ZM104 583H896C929 583 958 554 958 521S929 458 896 458H104C71 458 42 487 42 521S71 583 104 583ZM104 833H896C929 833 958 804 958 771S929 708 896 708H104C71 708 42 737 42 771S71 833 104 833Z"/>
            </svg>
        </button>
    </div>
</header>

<div id="content">
