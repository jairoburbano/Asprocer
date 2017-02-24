<?php
/**
 *
 *
 * @package		asprocer
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'industria';
$subpage = '';
$type = 'page';
$title = 'Analisis Sectorial';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="menu--interior">
    <div class="menu__nav__mobile">
        <div class="menu__nav__mobile__icon">
            <svg><use xlink:href="#shape-icon-analisis" /></svg>
        </div><!-- /.menu__nav__mobile__icon -->
        <select name="nav" id="nav" onChange="window.location.href=this.value">
            <option value="page-analisis.php">Analisis sectorial</option>
            <option value="page-carne.php">Carne de Cerdo</option>
        </select>
        <div class="icon-select">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="22px" height="12.2px" viewBox="0 0 22 12.2" enable-background="new 0 0 22 12.2" xml:space="preserve">
                <polygon id="XMLID_1_" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="21,1 11,11.2 1,1 "/>
            </svg>
        </div><!-- /.icon-select -->
    </div><!-- /.menu__nav__mobile -->
    <div class="menu__nav">
        <a href="page-analisis.php" title="Analisis Sectorial" class="active">
            <span class="menu__nav__icon">
                <svg><use xlink:href="#shape-icon-analisis" /></svg>
            </span>
            Analisis Sectorial
        </a>
        <a href="page-carne.php" title="Analisis Sectorial">
            <span class="menu__nav__icon">
                <svg><use xlink:href="#shape-icon-chancho" /></svg>
            </span>
            Carne de Cerdo
        </a>
    </div><!-- /.menu--nav -->
</div><!-- /.menu--interior -->
<div class="headline headline--menu">
    <h1>Analisis Sectorial</h1>
    <div class="content">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
    </div><!-- /.content -->
</div><!-- /.headline -->
<div class="wrap">
    <div class="block__content">
        <div class="gallery--simple">
            <ul class="slides">
                <li>
                    <div class="js-full" data-full="http://cdn01.ib.infobae.com/adjuntos/162/imagenes/014/014/0014014674.jpg">
                        <img src="assets/carne_640.jpg" alt="Titulo">
                    </div><!-- /.js-full -->
                </li>
                <li>
                    <div class="js-full" data-full="http://cdn.lopezdoriga.com/wp-content/uploads/2016/01/Kate-del-castillo-raton.jpg">
                        <img src="assets/cerdo_640.jpg" alt="Titulo">
                    </div><!-- /.js-full -->
                </li>
                <li>
                    <div class="js-full" data-full="http://img1.topimagens.com/ti/animais-fofos/animais-fofos_012.jpg">
                        <img src="assets/carne_640.jpg" alt="Titulo">
                    </div><!-- /.js-full -->
                </li>
                <li>
                    <div class="js-full" data-full="http://ichef.bbci.co.uk/news/ws/660/amz/worldservice/live/assets/images/2016/04/20/160420172938_audubon_1_976x549_bonnieblockaudubonphotographyawards_nocredit.jpg">
                        <img src="assets/cerdo_640.jpg" alt="Titulo">
                    </div><!-- /.js-full -->
                </li>
            </ul><!-- /.slides -->
        </div><!-- /.gallery--simple -->
        <div class="content">
            <p>
                En el año 2015, la producción de cerdo representó el 36% del total de carnes. 
            </p>
            <p>
                Se produjeron 523 mil toneladas vara, lo que significó un aumento de 1% respecto al año anterior. Del total producido, el 55% fue destinado a exportaciones.
            </p>
        </div><!-- /.content -->
    </div><!-- /.block__content -->
    <div class="block__content block--reverse">
        <div class="gallery--simple">
            <ul class="slides">
                <li>
                    <img src="assets/carne_640.jpg" alt="Titulo">
                </li>
                <li>
                    <img src="assets/cerdo_640.jpg" alt="Titulo">
                </li>
                <li>
                    <img src="assets/carne_640.jpg" alt="Titulo">
                </li>
                <li>
                    <img src="assets/cerdo_640.jpg" alt="Titulo">
                </li>
            </ul><!-- /.slides -->
        </div><!-- /.gallery--simple -->
        <div class="content">
            <p>
                El consumo de carne de cerdo en el año 2015, alcanzó los 16,3 kilos per cápita, 
            </p>
            <p>
                de los cuales el 19% corresponde a carne importada. Representa el 22% del consumo a nivel nacional.
            </p>
        </div><!-- /.content -->
    </div><!-- /.block__content -->
    <div class="block__content">
        <div class="image--simple">
            <img src="assets/Girl.jpg" alt="Titulo">
        </div><!-- /.image--simple -->
        <div class="content">
            <p>
                Durante este periodo se exportó el 55% del total producido. Las exportaciones durante el 2015 aumentaron 9% en volumen y disminuyeron 13% en valor, producto de la baja en los precios internacionales de la carne de cerdo observada durante este periodo.
            </p>
            <p>
                Los principales destinos fueron Corea del Sur (27%), Japón (22%), China (18%) y Rusia (17%).
            </p>
            <p>
                <strong>
                    Chile es el 6° exportador de carne de cerdo en el ranking mundial.
                </strong>
            </p>
        </div><!-- /.content -->
    </div><!-- /.block__content -->
    <div class="block__content block--reverse">
        <div class="image--simple js-full" data-full="http://cdn01.ib.infobae.com/adjuntos/162/imagenes/014/014/0014014674.jpg">
            <img src="assets/cerdo_640.jpg" alt="Titulo">
        </div><!-- /.image--simple -->
        <div class="content">
            <p>
                Las importaciones de carne de cerdo crecieron 3% en volumen y disminuyeron en 19% en valor en comparación con el año anterior. Los principales proveedores continúan siendo Estados Unidos, Canadá y Brasil.
            </p>
        </div><!-- /.content -->
    </div><!-- /.block__content -->
</div><!-- /.wrap -->
<div class="lightbox--full">
    <div class="lightbox__content">
        <div class="lightbox__close">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="24px" height="24.5px" viewBox="0 0 24 24.5" enable-background="new 0 0 24 24.5" xml:space="preserve"><g><g><path d="M12.7,12.3L23.8,1.2c0.3-0.3,0.3-0.7,0-1c-0.3-0.3-0.7-0.3-1,0L11.2,11.8c-0.3,0.3-0.3,0.7,0,1l11.6,11.6 c0.1,0.1,0.3,0.2,0.5,0.2c0.2,0,0.4-0.1,0.5-0.2c0.3-0.3,0.3-0.7,0-1L12.7,12.3z"/></g><g><path d="M11.3,12.3L0.2,23.3c-0.3,0.3-0.3,0.7,0,1s0.7,0.3,1,0l11.6-11.6c0.3-0.3,0.3-0.7,0-1L1.2,0.2 C1.1,0.1,0.9,0,0.7,0C0.5,0,0.3,0.1,0.2,0.2c-0.3,0.3-0.3,0.7,0,1L11.3,12.3z"/></g></g></svg>
        </div><!-- /.lightbox__close -->
        <div class="lightbox__media"></div><!-- /.lightbox__media -->
    </div><!-- /.lightbox__content -->
</div><!-- /.lightbox--full -->
<?php include 'footer.php'; ?>