<?php
/**
 * 404 — DigitalU
 */
get_header();
?>

<main class="page-main">
    <section class="quick-cta page-404" style="padding-top: 100px;">
        <h1 style="font-size: clamp(60px, 12vw, 140px); margin: 0; color: var(--cyan);">404</h1>
        <h3>La página que buscas no existe.</h3>
        <p class="cta-note">Probablemente cambió de dirección o nunca existió. Vuelve al inicio o escríbenos.</p>
        <div class="cta-buttons">
            <a class="btn btn-pill" href="<?php echo esc_url(home_url('/')); ?>">Volver al inicio</a>
            <a class="btn btn-pill" href="<?php echo esc_url(digitalu_wa_url('Hola, llegué a un 404 en el sitio')); ?>">Avísanos por Whatsapp</a>
        </div>
    </section>
</main>

<?php get_footer();
