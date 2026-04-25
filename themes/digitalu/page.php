<?php
/**
 * Plantilla genérica de página — DigitalU
 *
 * Renderiza el contenido pegado en Gutenberg (incluido cualquier
 * bloque "HTML personalizado") tal cual, sin chrome adicional.
 * Header y footer vienen de header.php y footer.php.
 */
get_header();
?>

<main class="page-main">
    <?php
    while (have_posts()) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('page-article'); ?>>
            <div class="page-content">
                <?php the_content(); ?>
            </div>
        </article>
        <?php
    endwhile;
    ?>
</main>

<?php get_footer();
