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
$title = 'Comités';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="menu--interior">
    <div class="menu__nav__mobile">
        <div class="menu__nav__mobile__icon">
            <svg><use xlink:href="#shape-icon-comites" /></svg>
        </div><!-- /.menu__nav__mobile__icon -->
        <select name="nav" id="nav" onChange="window.location.href=this.value">
            <option value="page-comites.php">Comités</option>
            <option value="page-gerentes.php">Directorio y gerencia</option>
            <option value="page-quienes-somos.php">Quienes Somos</option>
            <option value="page-asociados.php">Asociados</option>
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
        <a href="page-gerentes.php" title="Directorio y gerencia">
            <span class="menu__nav__icon">
                <svg><use xlink:href="#shape-icon-gerencia" /></svg>
            </span>
            Directorio y gerencia
        </a>
        <a href="page-comites.php" title="Comités" class="active">
            <span class="menu__nav__icon">
                <svg><use xlink:href="#shape-icon-comites" /></svg>
            </span>
            Comités
        </a>
    </div><!-- /.menu--nav -->
</div><!-- /.menu--interior -->
<div class="headline headline--menu">
    <h1>Comités</h1>
    <div class="content">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
    </div><!-- /.content -->
</div><!-- /.headline -->
<div class="wrap">
    <div class="comites__container">
        <div class="comites__item">
            <h2>Comité Técnico Inocuidad de las Carnes</h2>
            <p>
                Está formado por jefes o gerentes de Aseguramiento de la Calidad de las plantas faenadoras de las empresas asociadas y médicos veterinarios de Asprocer. Tiene entre sus objetivos identificar agentes que puedan comprometer el desempeño productivo e inocuidad de la carne de cerdo. Además constituye un soporte técnico para el sector ante una eventualidad.
            </p>
        </div><!-- /.comites__item -->
        <div class="comites__item">
            <h2>Comité Técnico de Sustentabilidada</h2>
            <p>
                Este Comité tiene carácter asesor y consultivo del directorio de Asprocer en temas ambientales en el marco de acción técnico, jurídico, social y político. Tiene como objetivo fomentar a sustentabilidad ambiental de la producción porcina.
            </p>
        </div><!-- /.comites__item -->
        <div class="comites__item">
            <h2>Comité Técnico Porcino</h2>
            <p>
                Está integrado por representantes del Servicio Agrícola y Ganadero, SAG, de las empresas, asesores de medianos y pequeños productores y la academia. Su objetivo es abordar temas de contingencia nacional e internacional y proponer proyectos técnicos de sanidad animal.
            </p>
        </div><!-- /.comites__item -->
    </div><!-- /.comites__container -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>