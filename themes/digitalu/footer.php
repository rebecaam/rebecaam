<?php
/**
 * Footer del tema DigitalU
 */
?>
</div><!-- /#content -->

<footer class="site-footer">
    <div class="footer-inner">
        <div class="footer-logo">
            <?php digitalu_logo('footer'); ?>
        </div>

        <div class="footer-block">
            <h3>Atención <span class="highlight">100% online</span></h3>
            <p>Atendemos negocios en todo México.</p>
            <p>Base en Querétaro.</p>
        </div>

        <div class="footer-block">
            <ul class="social-icons">
                <li>
                    <a href="mailto:contacto@digitalu.cloud" aria-label="Email">
                        <svg viewBox="0 0 512 512" aria-hidden="true"><path fill="currentColor" d="M502 191c4-3 10 0 10 5v204c0 27-21 48-48 48H48c-27 0-48-21-48-48V196c0-5 6-8 10-5 22 17 52 40 154 114 21 15 57 48 92 47 35 0 72-32 92-47 102-74 132-97 154-114zM256 320c23 0 57-29 73-41 133-96 143-104 173-129 6-4 9-12 9-19v-19c0-27-22-48-48-48H48C22 64 0 86 0 112v19c0 7 3 14 9 19 31 24 41 32 174 129 16 12 50 41 73 41z"/></svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/company/digitalu-cloud/" target="_blank" rel="noopener" aria-label="LinkedIn">
                        <svg viewBox="0 0 448 512" aria-hidden="true"><path fill="currentColor" d="M416 32H32C14 32 0 47 0 64v384c0 18 14 32 32 32h384c18 0 32-15 32-32V64c0-17-14-32-32-32zM135 416H69V202h66zm-33-243a38 38 0 1 1 0-77 38 38 0 0 1 0 77zm282 243h-66V312c0-25-1-57-35-57-34 0-40 27-40 55v106h-66V202h64v29h1c9-17 31-35 63-35 67 0 80 44 80 102z"/></svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/digitalu.cloud" target="_blank" rel="noopener" aria-label="Instagram">
                        <svg viewBox="0 0 448 512" aria-hidden="true"><path fill="currentColor" d="M224 141a115 115 0 1 0 0 230 115 115 0 0 0 0-230zm0 190a75 75 0 1 1 0-150 75 75 0 0 1 0 150zm146-194a27 27 0 1 1-54 0 27 27 0 0 1 54 0zm76 27c-2-36-10-68-36-94s-58-34-94-36c-37-2-148-2-185 0-36 2-68 10-94 36s-34 58-36 94c-2 37-2 148 0 185 2 36 10 68 36 94s58 34 94 36c37 2 148 2 185 0 36-2 68-10 94-36s34-58 36-94c2-37 2-148 0-185zM399 388c-8 20-23 35-43 43-29 12-99 9-132 9s-103 3-132-9c-19-8-34-23-42-43-12-29-9-99-9-132s-3-103 9-132c8-20 23-35 42-43 29-12 99-9 132-9s103-3 132 9c20 8 35 23 43 43 12 29 9 99 9 132s3 103-9 132z"/></svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/share/1Bv83Jgy99/?mibextid=wwXIfr" target="_blank" rel="noopener" aria-label="Facebook">
                        <svg viewBox="0 0 512 512" aria-hidden="true"><path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 124 91 226 209 245V327h-63v-72h63v-54c0-62 37-97 94-97 27 0 56 5 56 5v61h-32c-30 0-40 19-40 39v46h69l-11 72h-58v174c118-19 209-122 209-245z"/></svg>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(digitalu_wa_url()); ?>" target="_blank" rel="noopener" aria-label="WhatsApp">
                        <svg viewBox="0 0 448 512" aria-hidden="true"><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zM223.9 438.7c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6z"/></svg>
                    </a>
                </li>
            </ul>
            <p>Horario de atención: L-V 9:00 a 18:00 h</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
