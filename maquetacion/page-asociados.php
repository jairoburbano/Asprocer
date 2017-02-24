<?php
/**
 *
 *
 * @package		asprocer
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'asociacion';
$subpage = '';
$type = 'page';
$title = 'Asociados';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="loader__slide">
       <img src="img/spin.svg" alt="Loader">
   </div><!-- /.loader__slide -->
<div class="menu--interior">
    <div class="menu__nav__mobile">
        <div class="menu__nav__mobile__icon">
            <svg><use xlink:href="#shape-icon-asociados" /></svg>
        </div><!-- /.menu__nav__mobile__icon -->
        <select name="nav" id="nav" onChange="window.location.href=this.value">
            <option value="page-asociados.php">Asociados</option>
            <option value="page-quienes-somos.php">Quienes Somos</option>
            <option value="page-gerentes.php">Directorio y gerencia</option>
            <option value="page-comites.php">Comités</option>
        </select>
        <div class="icon-select">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="22px" height="12.2px" viewBox="0 0 22 12.2" enable-background="new 0 0 22 12.2" xml:space="preserve">
                <polygon id="XMLID_1_" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="21,1 11,11.2 1,1 "/>
            </svg>
        </div><!-- /.icon-select -->
    </div><!-- /.menu__nav__mobile -->
    <div class="menu__nav menu--asociacion">
        <a href="page-quienes-somos.php" title="Quienes Somos">
            <span class="menu__nav__icon">
                <svg><use xlink:href="#shape-icon-somos" /></svg>
            </span>
            Quienes Somos
        </a>
        <a href="page-asociados.php" title="Asociados" class="active">
            <span class="menu__nav__icon">
                <svg><use xlink:href="#shape-icon-asociados" /></svg>
            </span>
            Asociados
        </a>
        <a href="page-gerentes.php" title="Directorio y gerencia">
            <span class="menu__nav__icon">
                <svg><use xlink:href="#shape-icon-gerencia" /></svg>
            </span>
            Directorio y gerencia
        </a>
        <a href="page-comites.php" title="Comités">
            <span class="menu__nav__icon">
                <svg><use xlink:href="#shape-icon-comites" /></svg>
            </span>
            Comités
        </a>
    </div><!-- /.menu--nav -->
</div><!-- /.menu--interior -->
<div class="headline headline--menu">
    <h1>Asociados</h1>
    <div class="content">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
    </div><!-- /.content -->
</div><!-- /.headline -->
<div class="wrap">
    <div class="items--box">
        <div class="items__item">
            Agrícola  Mansel  Ltda.
        </div><!-- /.items__item -->
        <div class="items__item">
            Agrícola  PIC  Andina  Ltda.
        </div><!-- /.items__item -->
        <div class="items__item">
            Agrícola AASA Ltda.
        </div><!-- /.items__item -->
        <div class="items__item">
            Agrícola Chorombo S.A.
        </div><!-- /.items__item -->
        <div class="items__item">
            Agrícola El Monte S.A.
        </div><!-- /.items__item -->
        <div class="items__item">
            Agrícola Genética Porcina Ltda.
        </div><!-- /.items__item -->
        <div class="items__item">
            Agrícola Jacques y Lorenzini Ltda.
        </div><!-- /.items__item -->
        <div class="items__item">
            Agrícola Santa  Lucia  Ltda.
        </div><!-- /.items__item -->
        <div class="items__item">
            Agrícola Santa Francisca Ltda.
        </div><!-- /.items__item -->
        <div class="items__item">
            Agrícola Súper Ltda.
        </div><!-- /.items__item -->
        <div class="items__item">
            Barra Castañeda Orlando
        </div><!-- /.items__item -->
        <div class="items__item">
            Carlos Sabbagh Pisano
        </div><!-- /.items__item -->
        <div class="items__item">
            Carlos Tapia Azocar
        </div><!-- /.items__item -->
        <div class="items__item">
            Cerdos  DAG  Ltda.
        </div><!-- /.items__item -->
        <div class="items__item">
            Fernández Ferrera Emilio
        </div><!-- /.items__item -->
        <div class="items__item">
            Progranja S.A.
        </div><!-- /.items__item -->
        <div class="items__item">
            Ramón Achurra Y Cía. Ltda.
        </div><!-- /.items__item -->
        <div class="items__item">
            Ricardo  Yanine Mihad
        </div><!-- /.items__item -->
        <div class="items__item">
            Sociedad  Agrícola Los Tilos Ltda.
        </div><!-- /.items__item -->
        <div class="items__item">
            Sociedad Agrícola  Angostura Ltda.
        </div><!-- /.items__item -->
        <div class="items__item">
            Sociedad Agrícola La Islita Ltda.
        </div><!-- /.items__item -->
        <div class="items__item">
            Sociedad Agrícola Soler Cortina S.A.
        </div><!-- /.items__item -->
        <div class="items__item">
            Sociedad Agrícola Y Viejo S.A.
        </div><!-- /.items__item -->
        <div class="items__item">
            Sociedad Agrícola Y Ganadera Pehuén Ltda.
        </div><!-- /.items__item -->
        <div class="items__item">
            Sucesión  Salvador Yanine
        </div><!-- /.items__item -->
    </div><!-- /.items--box -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>