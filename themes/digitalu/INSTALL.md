# Tema DigitalU — Instalación y migración

Tema independiente de WordPress que reemplaza el chrome (header, footer y landing) que actualmente arma Elementor + Hello-Elementor + Essential Addons + Sticky Header Effects. Las páginas internas siguen funcionando como bloques HTML personalizados de Gutenberg.

## Antes de instalar

1. **Haz un respaldo completo** del sitio (BD + archivos). UpdraftPlus es gratis y suficiente.
2. **Instala "WP Staging"** (gratis) y crea un staging del sitio. Vamos a probar ahí primero, **no en producción**.

## Instalación del tema

1. Descarga `digitalu.zip` del repo: `dist/digitalu.zip`.
2. En el staging, ve a **Apariencia → Temas → Añadir nuevo → Subir tema**.
3. Selecciona `digitalu.zip` → Instalar.
4. **NO actives todavía**. Primero verifica los pasos siguientes.

## Configurar antes de activar

### 1. Crear el menú principal

- **Apariencia → Menús**
- Crea un menú nuevo llamado "Principal"
- Añade los enlaces:
  - Inicio → home
  - Servicios (como elemento personalizado #) con sub-items:
    - Páginas web → /paginas-web/
    - Branding e Identidad Visual → /diseno-de-branding-e-identidad-visual-para-negocios/
    - Estrategias en Redes Sociales → /estrategias-en-redes-sociales/
    - Catálogos y Presentaciones → /diseno-de-catalogos-y-presentaciones-comerciales/
    - Software a medida → /software-a-medida/
  - Casos de éxito → /casos-de-exito/
  - Contacto → /contacto/
- En "Ajustes del menú", marca la casilla **"Menú principal"**.
- Guarda.

> Si te saltas este paso, el tema usa un menú de respaldo automático con los mismos links, así que no se rompe nada.

### 2. (Opcional) Logo

- **Apariencia → Personalizar → Identidad del sitio → Logo** → sube tu logo.
- Si no lo configuras, el tema usa el logo actual de tu Mediateca: `2026/01/DigitalU_color-300x100.webp`.

### 3. Página de inicio

- **Ajustes → Lectura → "Tu página de inicio muestra"** → asegúrate que esté en **"Una página estática"** y la página seleccionada sea la actual home (Inicio). El tema solo aplica `front-page.php` cuando hay una home estática.

## Activar el tema

1. **Apariencia → Temas → DigitalU → Activar**.
2. Abre el sitio en otra pestaña. Verifica:
   - Home (`/`) se ve igual o mejor que con Elementor.
   - Header sticky funciona (se oculta al hacer scroll abajo, aparece al subir).
   - Menú móvil abre/cierra.
   - Submenú "Servicios" desplegable.
   - Botones de WhatsApp y Calendly funcionan.
   - Flip cards giran al hover (desktop) y al tocar (mobile).
   - FAQs abren/cierran.

## Migrar las páginas internas

Tus páginas internas tienen HTML pegado en el widget HTML de Elementor. Para que se vean sin Elementor, necesitas que ese HTML viva como bloque "HTML personalizado" de Gutenberg en `post_content`.

**Para cada página existente** (Servicios, Contacto, Casos de éxito, etc.):

1. **Edítala con Elementor** (mientras Elementor sigue activo).
2. Localiza el widget HTML, **clic derecho → Copy → Copy contents** (o copia el contenido del campo HTML).
3. Pega ese HTML en un editor de texto temporal.
4. Sal del editor de Elementor sin guardar.
5. Edita la página otra vez, esta vez en **"Editor de WordPress"** (botón arriba a la derecha → "Volver al editor de WordPress").
6. Borra cualquier bloque vacío.
7. **Añadir bloque → "HTML personalizado"** → pega el HTML.
8. **Actualizar**.
9. Verifica que la página se ve correcta en frontend.

Repite para todas las páginas.

## Desactivar Elementor (último paso)

Cuando todas las páginas estén migradas y verificadas:

1. **Plugins → Elementor → Desactivar**.
2. **Plugins → Elementor Pro → Desactivar**.
3. **Plugins → Essential Addons for Elementor → Desactivar**.
4. **Plugins → Sticky Header Effects for Elementor → Desactivar**.
5. Recarga el sitio. Si todo se ve bien, **desinstala** los plugins.
6. **Apariencia → Temas → Hello Elementor → Eliminar** (ya no es padre de nadie, se puede ir).

## Probar antes de pasar a producción

En el staging, antes de tocar producción, **revisa estas páginas** y secciones específicas:

- [ ] Home (`/`)
- [ ] Páginas web (`/paginas-web/`)
- [ ] Branding (`/diseno-de-branding-e-identidad-visual-para-negocios/`)
- [ ] Redes sociales (`/estrategias-en-redes-sociales/`)
- [ ] Catálogos (`/diseno-de-catalogos-y-presentaciones-comerciales/`)
- [ ] Software a medida (`/software-a-medida/`)
- [ ] Casos de éxito (`/casos-de-exito/`)
- [ ] Contacto (`/contacto/`)
- [ ] 404 (visita una URL inventada)

Comprueba en cada una:

- [ ] Imágenes cargan (URLs `wp-content/uploads/...`)
- [ ] Header y footer aparecen
- [ ] Menú funciona (desktop y móvil)
- [ ] Botones de WhatsApp llevan al chat
- [ ] No hay errores en la consola del navegador (F12 → Consola)
- [ ] Velocidad: usa PageSpeed Insights → debes ver score arriba de 85 en mobile

## Pasar a producción

Cuando staging esté perfecto:

1. Respaldo completo de producción (otra vez).
2. Sube `digitalu.zip` a producción siguiendo los mismos pasos de instalación.
3. Activa el tema en producción.
4. Migra las páginas internas (mismos pasos).
5. Desactiva Elementor + plugins basura.
6. Mide con PageSpeed Insights y compara contra el resultado anterior.

## Mantenimiento posterior

- **Cambios de copy/contenido**: editas la página en Gutenberg desde WP Admin.
- **Cambios visuales** (colores, tipografía, márgenes): editas `assets/css/styles.css` del tema. Las variables principales están al inicio del archivo (`:root { --cyan: ...; --bg-dark: ...; }`).
- **Cambios estructurales en la home**: editas `front-page.php`.
- **Cambios en header/footer**: `header.php` y `footer.php`.

Cualquier ajuste, súbelo por FTP o regenerando el ZIP y reinstalando el tema.
