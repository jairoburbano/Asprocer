<?php
/**
 *
 *
 * @package		asprocer
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'error404';
$subpage = '';
$type = 'page';
$title = 'Error 404';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="error-page" style="background-image: url(assets/cerdo_640.jpg);">
    <div class="error__container">
        <div class="error__small">Error</div><!-- /.error__small -->
        <div class="error__big">404</div><!-- /.error__big -->
        <div class="content">
            Página no encontrada. Este problema puede ser por una URL mal escrita o que la página ya no existe. Vuelve atrás y sigue navegando en nuestro sitio.
        </div><!-- /.content -->
        <a href="index.php" title="Volver al home" class="btn btn--border btn--contrast">Volver al home</a>
    </div><!-- /.error__container -->
</div><!-- /.error-page -->
<?php include 'footer.php'; ?>