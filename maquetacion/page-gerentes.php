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
$title = 'Directorio y gerencia';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="menu--interior">
    <div class="menu__nav__mobile">
        <div class="menu__nav__mobile__icon">
            <svg><use xlink:href="#shape-icon-gerencia" /></svg>
        </div><!-- /.menu__nav__mobile__icon -->
        <select name="nav" id="nav" onChange="window.location.href=this.value">
            <option value="page-gerentes.php">Directorio y gerencia</option>
            <option value="page-quienes-somos.php">Quienes Somos</option>
            <option value="page-asociados.php">Asociados</option>
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
        <a href="page-asociados.php" title="Asociados">
            <span class="menu__nav__icon">
                <svg><use xlink:href="#shape-icon-asociados" /></svg>
            </span>
            Asociados
        </a>
        <a href="page-gerentes.php" title="Directorio y gerencia" class="active">
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
    <h1>Directorio y gerencia</h1>
    <div class="content">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
    </div><!-- /.content -->
</div><!-- /.headline -->
<div class="wrap">
    <div class="gerencia__content">
        <div class="content">
            <p>El Directorio de ASPROCER está compuesto por los siguientes integrantes:</p>
        </div><!-- /.content -->
        <div class="gerencia__block gerencia__first">
            <h2 class="sub-title">Directorio</h2><!-- /.sub-title -->
            <div class="gerencia__container">
                <div class="gerencia__item">
                    <h3>Presidente</h3>
                    <p>Juan Miguel Ovalle Garcés</p>
                </div><!-- /.gerencia__item -->
                <div class="gerencia__item">
                    <h3>Vicepresidente</h3>
                    <p>Carlos Seemann Santos</p>
                </div><!-- /.gerencia__item -->
                <div class="gerencia__item">
                    <h3>Secretario y Tesorero</h3>
                    <p>Ramón Covarrubias Matte</p>
                </div><!-- /.gerencia__item -->
            </div><!-- /.gerencia__container -->
            <div class="gerencia__container">
                <div class="gerencia__item">
                    <h3>Directores Titulares</h3>
                    <p>Felipe Ortíz García</p>
                    <p>Francisco Achurra Larraín</p>
                    <p>Guillermo Díaz del Río Riesco</p>
                    <p>Jaime Bascuñán Noguera</p>
                    <p>Juan Lyon Lyon</p>
                    <p>Sergio Reyne Ferrat</p>
                    <p>Cristián Kuhlenthal Becker</p>
                    <p>Francisco Bobadilla Ferrer</p>
                </div><!-- /.gerencia__item -->
                <div class="gerencia__item">
                    <h3>Directores Suplentes</h3>
                    <p>Mario Patricio Dussert Astorga</p>
                    <p>Daniel Adi García</p>
                </div><!-- /.gerencia__item -->
            </div><!-- /.gerencia__container -->
        </div><!-- /.gerencia__block -->
        <div class="gerencia__block">
            <h2 class="sub-title">Gerencia</h2><!-- /.sub-title -->
            <div class="gerencia__item">
                <h3>Presidente Ejecutivo</h3>
                <p>Juan Miguel Ovalle Garcés</p>
            </div><!-- /.gerencia__item -->
            <div class="gerencia__item">
                <h3>Gerente General</h3>
                <p>Rodrigo Castañón Garbarino</p>
            </div><!-- /.gerencia__item -->
            <div class="gerencia__item">
                <h3>Gerente de Sanidad e Inocuidad</h3>
                <p>Pedro Guerrero Cañete</p>
            </div><!-- /.gerencia__item -->
            <div class="gerencia__item">
                <h3>Contralor</h3>
                <p>María Angélica Fernández Cáceres</p>
            </div><!-- /.gerencia__item -->
        </div><!-- /.gerencia__block -->
    </div><!-- /.gerencia__content -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>