<?php
/**
 * Front Page (Landing) — DigitalU
 */
get_header();

$wa = digitalu_wa_url();
$diag = 'https://calendly.com/digitalu-cloud/diagnostico-digitalu';
$uploads = home_url('/wp-content/uploads');
?>

<main class="home-main">

    <!-- HERO -->
    <section class="hero">
        <canvas class="hero-particles" aria-hidden="true"></canvas>
        <div class="hero-content">
            <h1>
                Presencia digital profesional
                <span class="rotator" data-words="con enfoque estratégico|con resultados medibles|con diseño consistente">con enfoque estratégico</span>
            </h1>
            <p>En <strong>DigitalU</strong> diseñamos sitios web, identidad visual y sistemas digitales pensados para generar claridad, confianza y conversión.</p>
        </div>

        <div class="hero-usps">
            <div class="usp reveal">
                <div class="usp-icon">
                    <svg viewBox="0 0 64 64" aria-hidden="true"><path fill="currentColor" d="M61 6H3a3 3 0 0 0-3 3v40a3 3 0 0 0 3 3h27v8H22a1 1 0 0 0 0 2h20a1 1 0 0 0 0-2h-8v-8h27a3 3 0 0 0 3-3V9a3 3 0 0 0-3-3zm1 43a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h58a1 1 0 0 1 1 1z"/><path fill="currentColor" d="M44 18H20a2 2 0 0 0-2 2v18a2 2 0 0 0 2 2h12v4h-4a1 1 0 0 0 0 2h8a1 1 0 0 0 0-2h-4v-4h12a2 2 0 0 0 2-2V20a2 2 0 0 0-2-2zm0 20H20V20h24z"/></svg>
                </div>
                <p>Atención 100% online<br>por videollamada</p>
            </div>
            <div class="usp reveal" data-delay="200">
                <div class="usp-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" d="M3 6h13M3 12h9M3 18h13M17 4l4 4-4 4M21 14l-4 4 4 4"/></svg>
                </div>
                <p>Ruta clara: diagnóstico → propuesta → ejecución → entrega</p>
            </div>
            <div class="usp reveal" data-delay="400">
                <div class="usp-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M20 2H7a3 3 0 0 0-3 3v11l4-4h12a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3zm-7 9-2.5-2.5L9 10l4 4 6-6-1.5-1.5z"/></svg>
                </div>
                <p>Enfoque en conversión:<br>WhatsApp, formularios y llamadas a acción</p>
            </div>
        </div>
    </section>

    <!-- QUICK CTA -->
    <section class="quick-cta">
        <h3>En <span class="highlight">20 minutos</span> definimos alcance, ruta y el paquete ideal.</h3>
        <div class="cta-buttons">
            <a class="btn btn-pill" href="<?php echo esc_url($diag); ?>">Agenda tu diagnóstico</a>
            <a class="btn btn-pill" href="<?php echo esc_url($wa); ?>">Escríbenos por Whatsapp</a>
        </div>
        <p class="cta-note"><strong>Diagnóstico breve.</strong> Te damos ruta y rango de inversión según tu objetivo.</p>
    </section>

    <!-- SERVICES STRIP -->
    <nav class="services-strip" aria-label="Servicios">
        <a href="<?php echo esc_url(home_url('/paginas-web/')); ?>">Páginas WEB</a>
        <a href="<?php echo esc_url(home_url('/diseno-de-branding-e-identidad-visual-para-negocios/')); ?>">Branding e identidad visual</a>
        <a href="<?php echo esc_url(home_url('/diseno-de-catalogos-y-presentaciones-comerciales/')); ?>">Catálogos y presentaciones</a>
        <a href="<?php echo esc_url(home_url('/estrategias-en-redes-sociales/')); ?>">Redes sociales</a>
        <a href="<?php echo esc_url(home_url('/software-a-medida/')); ?>">Sistemas a medida</a>
    </nav>

    <!-- ESTRATEGIA -->
    <section class="strategy section-light">
        <a class="floating-wa" href="<?php echo esc_url($wa); ?>" aria-label="Whatsapp">
            <svg viewBox="0 0 448 512" aria-hidden="true"><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157z"/></svg>
            <span>Whatsapp</span>
        </a>

        <h2 class="wave-text">Estrategias antes que diseño</h2>

        <div class="strategy-grid">
            <div class="strategy-text">
                <p>En <strong>DigitalU</strong> no empezamos diseñando pantallas.<br>Empezamos entendiendo el objetivo, el mercado y el posicionamiento.</p>
                <p>La presencia digital profesional no es solo estética:<br><em><strong>es estructura, mensaje y dirección.</strong></em></p>
            </div>

            <div class="strategy-icons">
                <div class="strategy-icon reveal">
                    <img src="<?php echo esc_url($uploads . '/2026/02/iconos-home-estrategia-01.svg'); ?>" alt="" width="110" height="110">
                    <p>Proyectos desarrollados con enfoque en <strong>conversión</strong> real</p>
                </div>
                <div class="strategy-icon reveal" data-delay="200">
                    <img src="<?php echo esc_url($uploads . '/2026/02/iconos-home-estrategia-02-1024x1022.webp'); ?>" alt="" width="110" height="110">
                    <p><strong>Integración</strong> de web, branding y contenidos en un mismo sistema</p>
                </div>
                <div class="strategy-icon reveal" data-delay="400">
                    <img src="<?php echo esc_url($uploads . '/2026/02/iconos-home-estrategia-03-1024x1024.webp'); ?>" alt="" width="110" height="110">
                    <p><strong>Procesos</strong> por fases con entregables definidos</p>
                </div>
                <div class="strategy-icon reveal" data-delay="600">
                    <img src="<?php echo esc_url($uploads . '/2026/02/iconos-home-estrategia-04-1024x1022.webp'); ?>" alt="" width="110" height="110">
                    <p>Trabajo <strong>personalizado</strong>, sin soluciones genéricas</p>
                </div>
            </div>
        </div>

        <h5 class="strategy-tagline">No vendemos &ldquo;páginas&rdquo;; <span class="highlight">construimos activos digitales.</span></h5>

        <h2 class="wave-text">Resultados</h2>
        <p class="lead">Lo que cambia cuando tu presencia digital está bien hecha:</p>

        <div class="results-grid">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-front">
                        <img src="<?php echo esc_url($uploads . '/2026/02/esquema-claridad-confianza-conversion_Claridad-ok.webp'); ?>" alt="" width="180" height="180">
                        <h3>CLARIDAD</h3>
                    </div>
                    <div class="flip-back">
                        <p>Tu cliente entiende qué haces en segundos (y no se va).</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-front">
                        <img src="<?php echo esc_url($uploads . '/2026/02/esquema-claridad-confianza-conversion_confianza-ok.webp'); ?>" alt="" width="180" height="180">
                        <h3>CONFIANZA</h3>
                    </div>
                    <div class="flip-back">
                        <p>Diseño consistente y profesional que eleva percepción y precio.</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-front">
                        <img src="<?php echo esc_url($uploads . '/2026/02/esquema-claridad-confianza-conversion_Conversion-ok.webp'); ?>" alt="" width="180" height="180">
                        <h3>CONVERSIÓN</h3>
                    </div>
                    <div class="flip-back">
                        <p>CTAs, WhatsApp y estructura para generar contactos reales.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- QUICK CTA repetido -->
    <section class="quick-cta">
        <h3>En <span class="highlight">20 minutos</span> definimos alcance, ruta y el paquete ideal.</h3>
        <div class="cta-buttons">
            <a class="btn btn-pill" href="<?php echo esc_url($diag); ?>">Agenda tu diagnóstico</a>
            <a class="btn btn-pill" href="<?php echo esc_url($wa); ?>">Escríbenos por Whatsapp</a>
        </div>
        <p class="cta-note"><strong>Diagnóstico breve.</strong> Te damos ruta y rango de inversión según tu objetivo.</p>
    </section>

    <!-- SOLUCIONES INTEGRADAS -->
    <section class="solutions">
        <a class="floating-wa" href="<?php echo esc_url($wa); ?>" aria-label="Whatsapp">
            <svg viewBox="0 0 448 512" aria-hidden="true"><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157z"/></svg>
            <span>Whatsapp</span>
        </a>

        <h2 class="wave-text">Soluciones integradas</h2>
        <p class="lead">Web estratégica + identidad visual + contenidos digitales + sistemas alineados a tu objetivo.</p>

        <div class="solutions-grid">
            <article class="flip-card flip-card-eael liquid-glass">
                <div class="flip-card-inner">
                    <div class="flip-front">
                        <img src="<?php echo esc_url($uploads . '/2026/02/http-oscuro.gif'); ?>" alt="" width="100" height="100">
                        <h3>Web estratégica</h3>
                        <small>Más info…</small>
                    </div>
                    <div class="flip-back">
                        <p>Sitios web profesionales enfocados en claridad y conversión.</p>
                        <ul>
                            <li>Landing o sitio completo</li>
                            <li>Estructura optimizada</li>
                            <li>Formularios y CTAs estratégicos</li>
                            <li>Diseño responsive</li>
                        </ul>
                        <p><a href="<?php echo esc_url(home_url('/paginas-web/')); ?>">Ver soluciones web →</a></p>
                    </div>
                </div>
            </article>

            <article class="flip-card flip-card-eael liquid-glass">
                <div class="flip-card-inner">
                    <div class="flip-front">
                        <img src="<?php echo esc_url($uploads . '/2026/02/sales-azul.gif'); ?>" alt="" width="100" height="100">
                        <h3>Branding</h3>
                        <small>Más info…</small>
                    </div>
                    <div class="flip-back">
                        <p>Logo e identidad visual para lograr consistencia en web, redes y materiales comerciales.</p>
                        <ul>
                            <li>Lineamientos base</li>
                            <li>Paleta y tipografías</li>
                            <li>Aplicaciones digitales</li>
                        </ul>
                    </div>
                </div>
            </article>

            <article class="flip-card flip-card-eael liquid-glass">
                <div class="flip-card-inner">
                    <div class="flip-front">
                        <img src="<?php echo esc_url($uploads . '/2026/02/content-azul.gif'); ?>" alt="" width="100" height="100">
                        <h3>Contenidos digitales</h3>
                        <small>Más info…</small>
                    </div>
                    <div class="flip-back">
                        <p>Piezas listas para publicar o enviar a clientes.</p>
                        <ul>
                            <li>Catálogos digitales</li>
                            <li>Presentaciones</li>
                            <li>Plantillas y materiales comerciales</li>
                        </ul>
                    </div>
                </div>
            </article>

            <article class="flip-card flip-card-eael liquid-glass">
                <div class="flip-card-inner">
                    <div class="flip-front">
                        <img src="<?php echo esc_url($uploads . '/2026/02/Sistemas.gif'); ?>" alt="" width="100" height="100">
                        <h3>Sistemas a medida</h3>
                        <small>Más info…</small>
                    </div>
                    <div class="flip-back">
                        <p>Apps y sistemas personalizados para ordenar tu operación, automatizar procesos y tomar mejores decisiones con datos.</p>
                        <ul>
                            <li>Apps</li>
                            <li>Dashboards y reportes (KPIs)</li>
                            <li>Automatización de flujos (ventas, inventario, operación)</li>
                        </ul>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <!-- EQUIPO -->
    <section class="team section-light">
        <h2 class="wave-text">Tu proyecto no lo hace una plantilla:<br><span class="accent">Lo hacemos nosotros</span></h2>
        <p class="lead">Diseñamos con estrategia y construimos sistemas con enfoque a negocio: <strong>claridad, confianza y ejecución real</strong> (sin soluciones genéricas).</p>

        <div class="team-grid">
            <article class="team-card liquid-glass">
                <img src="<?php echo esc_url($uploads . '/2026/02/Rebeca-01-150x150.webp'); ?>" alt="Rebeca Aguilar" width="130" height="130">
                <h5>Rebeca Aguilar</h5>
                <p class="role">Dirección creativa · Branding · Web estratégica</p>
                <ul>
                    <li>Traduzco tu oferta en mensajes claros (se entiende en segundos).</li>
                    <li>Diseño consistente para elevar percepción y confianza.</li>
                    <li>Estructuro tu web para guiar a la acción: claridad → contacto.</li>
                </ul>
                <a class="btn btn-pill" href="<?php echo esc_url($wa); ?>">Escríbeme por Whatsapp</a>
            </article>

            <article class="team-card liquid-glass">
                <img src="<?php echo esc_url($uploads . '/2026/02/Diego-150x150.webp'); ?>" alt="Diego Montaño" width="130" height="130">
                <h5>Diego Montaño</h5>
                <p class="role">Estrategia operativa · Sistemas a medida · Apps</p>
                <ul>
                    <li>Convierte procesos en sistemas: menos fricción, más control.</li>
                    <li>Apps e integraciones para administrar y escalar tu operación.</li>
                    <li>Prioriza impacto de negocio (no features por capricho).</li>
                </ul>
                <a class="btn btn-pill" href="<?php echo esc_url($wa); ?>">Escríbeme por Whatsapp</a>
            </article>
        </div>
    </section>

    <!-- FAQ -->
    <section class="faqs">
        <a class="floating-wa" href="<?php echo esc_url($wa); ?>" aria-label="Whatsapp">
            <svg viewBox="0 0 448 512" aria-hidden="true"><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157z"/></svg>
            <span>Whatsapp</span>
        </a>

        <h2 class="wave-text">Preguntas frecuentes</h2>

        <div class="faqs-grid">
            <div class="faqs-col">
                <details>
                    <summary>¿La atención es presencial?</summary>
                    <p>Atendemos 100% online por videollamada (México). Base operativa: Querétaro.</p>
                </details>
                <details>
                    <summary>¿Qué se necesita para iniciar?</summary>
                    <p>Objetivo, links (si existen) y referencias. Si falta algo, se define en el diagnóstico.</p>
                </details>
                <details>
                    <summary>¿En cuánto tiempo entregan?</summary>
                    <p>Depende del alcance. Se confirma con calendario y fases después del diagnóstico.</p>
                </details>
            </div>
            <div class="faqs-col">
                <details>
                    <summary>¿Puedo pedir un rango sin videollamada?</summary>
                    <p>Sí, pero el diagnóstico suele evitar retrabajo y acelera la cotización real.</p>
                </details>
                <details>
                    <summary>¿Cómo son los pagos?</summary>
                    <p>Se aparta fecha de inicio con anticipo, el cual puede ser por transferencia, Paypal o depósito en Oxxo.</p>
                </details>
                <details>
                    <summary>¿Si ya tengo web, pueden mejorarla?</summary>
                    <p>Sí. Optimizamos estructura, mensajes, CTAs, velocidad y conversión.</p>
                </details>
            </div>
        </div>
    </section>

    <!-- CTA FINAL -->
    <section class="quick-cta" id="contacto">
        <h3>En <span class="highlight">20 minutos</span> definimos alcance, ruta y el paquete ideal.</h3>
        <div class="cta-buttons">
            <a class="btn btn-pill" href="<?php echo esc_url($diag); ?>">Agenda tu diagnóstico</a>
            <a class="btn btn-pill" href="<?php echo esc_url($wa); ?>">Escríbenos por Whatsapp</a>
        </div>
        <p class="cta-note"><strong>Diagnóstico breve.</strong> Te damos ruta y rango de inversión según tu objetivo.</p>
    </section>

</main>

<?php get_footer();
