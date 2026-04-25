<?php
/**
 * Index fallback — DigitalU
 *
 * WordPress requiere este archivo. Lo usamos como respaldo cuando no hay
 * una plantilla más específica disponible (archivos de categoría, etiqueta,
 * búsqueda, etc.). Renderiza el contenido del query actual con header/footer.
 */
get_header();
?>

<main class="page-main">

    <?php if (have_posts()) : ?>

        <?php if (is_home() && !is_front_page()) : ?>
            <header class="page-header">
                <h1 class="page-title"><?php single_post_title(); ?></h1>
            </header>
        <?php elseif (is_archive()) : ?>
            <header class="page-header">
                <h1 class="page-title"><?php the_archive_title(); ?></h1>
                <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
            </header>
        <?php elseif (is_search()) : ?>
            <header class="page-header">
                <h1 class="page-title">
                    <?php printf(esc_html__('Resultados para: %s', 'digitalu'), '<span>' . get_search_query() . '</span>'); ?>
                </h1>
            </header>
        <?php endif; ?>

        <div class="posts-list">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
                <h2 class="post-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>" class="post-thumb">
                        <?php the_post_thumbnail('medium_large'); ?>
                    </a>
                <?php endif; ?>
                <div class="post-excerpt"><?php the_excerpt(); ?></div>
                <a class="btn btn-pill" href="<?php the_permalink(); ?>"><?php esc_html_e('Leer más', 'digitalu'); ?></a>
            </article>
        <?php endwhile; ?>
        </div>

        <?php the_posts_pagination(['mid_size' => 2]); ?>

    <?php else : ?>

        <section class="quick-cta">
            <h3><?php esc_html_e('Sin resultados', 'digitalu'); ?></h3>
            <p class="cta-note"><?php esc_html_e('No encontramos contenido. Prueba otra búsqueda o vuelve al inicio.', 'digitalu'); ?></p>
            <div class="cta-buttons">
                <a class="btn btn-pill" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Volver al inicio', 'digitalu'); ?></a>
            </div>
        </section>

    <?php endif; ?>

</main>

<?php get_footer();
