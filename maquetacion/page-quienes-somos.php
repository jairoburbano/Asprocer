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
$title = 'Quienes Somos';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="menu--interior">
    <div class="menu__nav__mobile">
        <div class="menu__nav__mobile__icon">
            <svg><use xlink:href="#shape-icon-somos" /></svg>
        </div><!-- /.menu__nav__mobile__icon -->
        <select name="nav" id="nav" onChange="window.location.href=this.value">
            <option value="page-quienes-somos.php">Quienes Somos</option>
            <option value="page-asociados.php">Asociados</option>
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
        <a href="page-quienes-somos.php" title="Quienes Somos" class="active">
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
        <a href="page-comites.php" title="Comités">
            <span class="menu__nav__icon">
                <svg><use xlink:href="#shape-icon-comites" /></svg>
            </span>
            Comités
        </a>
    </div><!-- /.menu--nav -->
</div><!-- /.menu--interior -->
<div class="headline headline--menu">
    <h1>Quienes Somos</h1>
    <div class="content">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
    </div><!-- /.content -->
</div><!-- /.headline -->
<div class="banner--page">
    <img src="assets/campo21280.jpg" alt="Titulo">
</div><!-- /.banner--page -->
<div class="wrap wrap--somos">
    <div class="somos--icon">
        <h2 class="sub-title">Empresas Asociadas</h2>
        <div class="somos--flex">
            <div class="somos--icon__item">
                <div class="icon__item__media">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
                        <g>
                            <path fill="#0058A4" d="M3.6,26.4v6.8c0,0.5,0.4,0.9,0.9,0.9H24c0.5,0,0.9-0.4,0.9-0.9v-6.8c0-0.5-0.4-0.9-0.9-0.9H4.5 C4,25.5,3.6,25.9,3.6,26.4z M23.1,32.2h-6.8l5-5h1.8V32.2z M5.4,27.3h6.8l-2.5,2.5c-0.4,0.4-0.4,0.9,0,1.3c0.2,0.2,0.4,0.3,0.6,0.3 s0.5-0.1,0.6-0.3l3.8-3.8h3.8l-5,5H5.4V27.3z"/>
                            <path fill="#0058A4" d="M31.1,16.4c0.5,0,0.9-0.4,0.9-0.9l0.7-13.7h3.7l0.8,17.4c0,0.5,0.4,0.9,0.9,0.9c0,0,0,0,0,0 c0.5,0,0.9-0.4,0.9-0.9L38.2,0.9c0-0.5-0.4-0.9-0.9-0.9h-5.4C31.4,0,31,0.4,31,0.9l-0.7,14.6C30.2,15.9,30.6,16.4,31.1,16.4z"/>
                            <path fill="#0058A4" d="M39.5,21.9L20.4,11.9c-0.3-0.1-0.6-0.1-0.9,0c-0.3,0.2-0.4,0.5-0.4,0.8v3.5l-8.2-4.3 c-0.3-0.1-0.6-0.1-0.9,0c-0.3,0.2-0.4,0.5-0.4,0.8v3.5l-8.2-4.3c-0.3-0.1-0.6-0.1-0.9,0C0.2,12.1,0,12.4,0,12.7v26.4 C0,39.6,0.4,40,0.9,40h26.7h7.9h3.6c0.5,0,0.9-0.4,0.9-0.9V22.7C40,22.4,39.8,22.1,39.5,21.9z M28.5,38.2v-11h6.1v11H28.5z M38.2,38.2h-1.8V26.4c0-0.5-0.4-0.9-0.9-0.9h-7.9c-0.5,0-0.9,0.4-0.9,0.9v11.9H1.8v-24l8.2,4.3c0.3,0.1,0.6,0.1,0.9,0 c0.3-0.2,0.4-0.5,0.4-0.8v-3.5l8.2,4.3c0.3,0.1,0.6,0.1,0.9,0c0.3-0.2,0.4-0.5,0.4-0.8v-3.5l17.3,9.1V38.2z"/>
                        </g>
                    </svg>
                </div><!-- /.icon__item__media -->
                <div class="icon__content content">
                    <p>
                        Pequeñas, medianas e industriales
                    </p>
                </div><!-- /.icon__content content -->
            </div><!-- /.somos--icon__item -->
            <div class="somos--icon__item">
                <div class="icon__item__media">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="53.9px" height="42.6px" viewBox="0 0 53.9 42.6" enable-background="new 0 0 53.9 42.6" xml:space="preserve">
                        <path id="XMLID_1_" fill="#0058A4" d="M53.8,24.6c-0.6,1.1-1.5,1.7-2.5,1.7c-0.4,0-0.8-0.1-1.1-0.3c-1,3.1-2.4,5.3-4.3,6.6v1.2 c0,0.8-0.4,1.4-0.7,1.9c-0.6,0.9-1.4,2.1-1.4,6c0,0.5-0.4,1-1,1H34c-0.3,0-0.7-0.2-0.8-0.5c-0.2-0.3-0.2-0.7,0-1l1.3-2.4v-2.5 c0-0.5,0.4-1,1-1s1,0.4,1,1V39c0,0.2,0,0.3-0.1,0.5l-0.6,1.2h1.6l1-1.9v-4.9c-1,0.2-2.1,0.4-3.2,0.4c-1.9,0-3.8-0.4-5.3-1 c-0.9,0-1.8,0-2.8,0c-0.1,0.6-0.4,1.1-0.7,1.6c-0.7,1.1-1.6,2.6-1.6,6.8c0,0.5-0.4,1-1,1h-8.8c-0.3,0-0.7-0.2-0.8-0.5 c-0.2-0.3-0.2-0.7,0-1l1.3-2.4v-4.3c0-0.5,0.4-1,1-1s1,0.4,1,1V39c0,0.2,0,0.3-0.1,0.5l-0.6,1.2h1.6l1-1.9v-6.2 c-0.7-0.1-1.4-0.2-2-0.3c-1.1-0.2-3.1-0.8-4.5-2.5c-2.2-2.6-2.6-3.1-5.9-3.1c0,0,0,0,0,0H2.1c-1.2,0-2.1-1-2.1-2.2v-4 c0-1.2,1-2.2,2.1-2.2c3,0,6.9-4.2,8.8-7.1c0,0,0,0,0,0l0.4-0.6c-0.5-0.5-0.9-1.1-1-1.8c0-0.4,0-0.7,0.1-1.1c-0.4-2-0.5-4.7-0.3-5.8 c0.2-0.8,0.5-1.4,1-1.7c1-0.7,2.1-0.1,2.5,0.1c0.5,0.2,0.7,0.8,0.4,1.3c-0.2,0.5-0.8,0.7-1.3,0.4C12.6,2,12.4,2,12.3,2 c0,0.1-0.1,0.2-0.1,0.4c-0.1,0.5-0.1,1.8,0,3c0.7-0.7,1.5-1.4,2.5-2.3c2.8-2.5,4.7-3.7,6.1-2.8c0.5,0.3,0.8,0.9,1,1.7 c0.2,1.1,0.1,2.7,0,4.7c-0.1,2.1-0.2,3.6-0.5,4.6c-0.3,1.2-0.9,2-1.6,2.3c-1,0.5-2.2,0.2-3.1-0.2c-0.5-0.2-0.8-0.8-0.6-1.3 c0.2-0.5,0.8-0.8,1.3-0.6c0.8,0.3,1.3,0.4,1.6,0.3c0.2-0.1,0.4-0.5,0.6-1.1c0.2-0.9,0.4-2.2,0.5-4.2c0,0,0,0,0,0 c0.1-1.8,0.2-3.3,0-4.2c0-0.2-0.1-0.3-0.1-0.4c-0.3,0-1.2,0.4-3.7,2.6c0,0,0,0,0,0c-1.4,1.2-3,2.6-3.5,3.5c0,0-0.1,0.4-0.1,0.5 c0,0.2,0.3,0.8,1.9,1.6c0.5,0.3,0.7,0.8,0.4,1.3c-0.3,0.5-0.8,0.7-1.3,0.4c-0.1-0.1-0.3-0.1-0.4-0.2l-0.4,0.6 c-0.6,0.9-5.5,7.9-10.4,7.9c-0.1,0-0.2,0.1-0.2,0.3v4c0,0.1,0.1,0.3,0.2,0.3h4.5c1.9,0,3.1,0.2,4.1,0.6c0.8,0.2,1.9,0.3,3-0.1 c0.5-0.2,1.1,0.1,1.2,0.7s-0.1,1.1-0.7,1.2c-0.4,0.1-0.8,0.2-1.1,0.2c0.3,0.3,0.6,0.7,0.9,1.1c1,1.2,2.6,1.6,3.4,1.8 c0.8,0.1,1.7,0.3,2.7,0.4c0.5,0.1,0.9,0.5,0.9,1V39c0,0.2,0,0.3-0.1,0.5l-0.6,1.2h2.3c0.1-4.1,1.2-5.7,1.9-6.9 c0.4-0.6,0.5-0.9,0.5-1.2v-0.4c0-0.3,0.1-0.5,0.3-0.7c0.2-0.2,0.5-0.3,0.7-0.3c1.3,0,2.6,0.1,3.9,0c0.2,0,0.3,0,0.4,0.1 c1.3,0.6,2.9,0.9,4.7,0.9c1.4,0,2.7-0.2,3.9-0.6c0.3-0.1,0.6-0.1,0.9,0.1c0.3,0.2,0.4,0.5,0.4,0.8V39c0,0.2,0,0.3-0.1,0.5l-0.6,1.2 h2.3c0.1-3.7,1.1-5.1,1.7-6c0.3-0.4,0.4-0.6,0.4-0.8V32c0-0.4,0.2-0.7,0.5-0.9c3.7-2,5-8.5,5-13.5c0-7-5.3-12.7-11.8-12.7H24.4 c-0.5,0-1-0.4-1-1s0.4-1,1-1h13.2c7.6,0,13.8,6.6,13.8,14.6c0,1.4-0.1,3.7-0.6,6.3c0.2,0.2,0.4,0.4,0.6,0.4c0.3,0,0.6-0.2,0.8-0.6 c0.3-0.5,0.8-0.7,1.3-0.4C53.9,23.5,54.1,24.1,53.8,24.6z M13.6,14.3c-0.5,0-1,0.4-1,1v0.3c0,0.5,0.4,1,1,1c0.5,0,1-0.4,1-1v-0.3 C14.6,14.8,14.1,14.3,13.6,14.3z"/>
                    </svg>
                </div><!-- /.icon__item__media -->
                <div class="icon__content content">
                    <p>
                        Más de 190.000 hembras reproductoras
                    </p>
                </div><!-- /.icon__content content -->
            </div><!-- /.somos--icon__item -->
            <div class="somos--icon__item">
                <div class="icon__item__media">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="55.6px" height="22.8px" viewBox="0 0 55.6 22.8" enable-background="new 0 0 55.6 22.8" xml:space="preserve">
                        <g>
                            <path fill="#0058A4" d="M5.6,22.8c-1,0-1.9-0.1-2.6-0.3c-0.7-0.2-1.4-0.4-1.9-0.7L1.9,19c0.4,0.2,0.9,0.4,1.5,0.6 c0.5,0.2,1.2,0.2,1.9,0.2c1.5,0,2.6-0.5,3.3-1.4c0.7-0.9,1.2-2.1,1.3-3.7c-0.4,0.4-0.9,0.7-1.5,0.9C7.7,15.9,7,16,6.2,16 c-0.9,0-1.8-0.1-2.5-0.4c-0.8-0.3-1.4-0.6-2-1.1c-0.6-0.5-1-1.1-1.3-1.8C0.2,11.9,0,11.1,0,10.1c0-0.9,0.2-1.8,0.5-2.6 s0.8-1.4,1.4-2c0.6-0.6,1.3-1,2.2-1.3C5,4,5.9,3.9,7,3.9c0.9,0,1.7,0.2,2.6,0.5c0.8,0.3,1.6,0.8,2.2,1.5c0.6,0.7,1.2,1.6,1.5,2.7 c0.4,1.1,0.6,2.4,0.6,4c0,1.8-0.2,3.3-0.6,4.6c-0.4,1.3-1,2.4-1.8,3.2c-0.7,0.8-1.6,1.5-2.6,1.9C7.9,22.6,6.8,22.8,5.6,22.8z M9.8,10.5c0-0.5-0.1-1-0.2-1.4C9.5,8.6,9.3,8.2,9,7.9C8.8,7.6,8.5,7.3,8.1,7.1C7.8,6.9,7.4,6.8,6.9,6.8C6,6.8,5.3,7.1,4.8,7.6 C4.3,8.1,4,8.9,4,10c0,1.1,0.3,1.8,0.9,2.3C5.4,12.8,6.2,13,7.1,13c0.5,0,1-0.1,1.4-0.3c0.4-0.2,0.8-0.5,1-0.8 C9.7,11.6,9.8,11.1,9.8,10.5z"/>
                            <path fill="#0058A4" d="M24.2,3.9h4.6v11.5h2.8v3.1h-2.8v4.3H25v-4.3h-8.8v-2.6L24.2,3.9z M23.4,10.8l-3.1,4.6H25v-4.3l0.2-3.6 h-0.1L23.4,10.8z"/>
                            <path fill="#0058A4" d="M43.5,5.7c0,0.8-0.1,1.5-0.3,2.2c-0.2,0.7-0.6,1.3-1,1.8c-0.4,0.5-1,0.9-1.6,1.2c-0.7,0.3-1.4,0.5-2.2,0.5 c-0.8,0-1.5-0.2-2.2-0.5c-0.6-0.3-1.2-0.7-1.6-1.2c-0.4-0.5-0.8-1.1-1-1.8c-0.2-0.7-0.3-1.4-0.3-2.2s0.1-1.5,0.3-2.2 c0.2-0.7,0.6-1.3,1-1.8c0.5-0.5,1-0.9,1.6-1.2C36.8,0.2,37.5,0,38.4,0c0.8,0,1.5,0.2,2.2,0.5c0.6,0.3,1.2,0.7,1.6,1.2 c0.4,0.5,0.8,1.1,1,1.8C43.4,4.2,43.5,4.9,43.5,5.7z M40.4,5.7c0-0.4,0-0.8-0.1-1.2c-0.1-0.4-0.2-0.7-0.3-1 c-0.2-0.3-0.4-0.5-0.6-0.7s-0.6-0.3-1-0.3c-0.4,0-0.7,0.1-0.9,0.3c-0.3,0.2-0.5,0.4-0.7,0.7c-0.2,0.3-0.3,0.6-0.4,1 c-0.1,0.4-0.1,0.8-0.1,1.2c0,0.5,0,0.9,0.1,1.3s0.2,0.8,0.3,1.1c0.2,0.3,0.4,0.6,0.6,0.8c0.3,0.2,0.6,0.3,0.9,0.3 c0.7,0,1.3-0.3,1.6-1C40.2,7.5,40.4,6.7,40.4,5.7z M36.8,22.8L49.9,0h2.4L39.2,22.8H36.8z M55.6,17.1c0,0.8-0.1,1.5-0.3,2.2 s-0.5,1.3-1,1.8c-0.4,0.5-1,0.9-1.6,1.2c-0.7,0.3-1.4,0.5-2.2,0.5c-0.8,0-1.5-0.2-2.2-0.5c-0.6-0.3-1.2-0.7-1.6-1.2 c-0.4-0.5-0.8-1.1-1-1.8c-0.2-0.7-0.3-1.4-0.3-2.2c0-0.8,0.1-1.5,0.3-2.2c0.2-0.7,0.6-1.3,1-1.8c0.5-0.5,1-0.9,1.6-1.2 c0.6-0.3,1.4-0.5,2.2-0.5c0.8,0,1.5,0.2,2.1,0.5c0.6,0.3,1.2,0.7,1.6,1.2c0.4,0.5,0.8,1.1,1,1.8S55.6,16.3,55.6,17.1z M52.6,17.1 c0-0.4,0-0.9-0.1-1.3s-0.2-0.8-0.3-1.1c-0.2-0.3-0.4-0.6-0.6-0.8s-0.6-0.3-1-0.3c-0.4,0-0.7,0.1-0.9,0.3c-0.3,0.2-0.5,0.4-0.7,0.8 c-0.2,0.3-0.3,0.7-0.4,1.1c-0.1,0.4-0.1,0.9-0.1,1.3c0,0.5,0,0.9,0.1,1.3c0.1,0.4,0.2,0.8,0.4,1.1c0.2,0.3,0.4,0.6,0.6,0.8 c0.3,0.2,0.6,0.3,0.9,0.3c0.7,0,1.2-0.3,1.6-1S52.6,18.1,52.6,17.1z"/>
                        </g>
                    </svg>
                </div><!-- /.icon__item__media -->
                <div class="icon__content content">
                    <p>
                        De la producción total de cerdos del país
                    </p>
                </div><!-- /.icon__content content -->
            </div><!-- /.somos--icon__item -->
            <div class="somos--icon__item">
                <div class="icon__item__media">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="55.6px" height="22.8px" viewBox="0 0 55.6 22.8" enable-background="new 0 0 55.6 22.8" xml:space="preserve">
                        <g>
                            <path fill="#0058A4" d="M5.6,22.8c-1,0-1.9-0.1-2.6-0.3c-0.7-0.2-1.4-0.4-1.9-0.7L1.9,19c0.4,0.2,0.9,0.4,1.5,0.6 c0.5,0.2,1.2,0.2,1.9,0.2c1.5,0,2.6-0.5,3.3-1.4c0.7-0.9,1.2-2.1,1.3-3.7c-0.4,0.4-0.9,0.7-1.5,0.9C7.7,15.9,7,16,6.2,16 c-0.9,0-1.8-0.1-2.5-0.4c-0.8-0.3-1.4-0.6-2-1.1c-0.6-0.5-1-1.1-1.3-1.8C0.2,11.9,0,11.1,0,10.1c0-0.9,0.2-1.8,0.5-2.6 s0.8-1.4,1.4-2c0.6-0.6,1.3-1,2.2-1.3C5,4,5.9,3.9,7,3.9c0.9,0,1.7,0.2,2.6,0.5c0.8,0.3,1.6,0.8,2.2,1.5c0.6,0.7,1.2,1.6,1.5,2.7 c0.4,1.1,0.6,2.4,0.6,4c0,1.8-0.2,3.3-0.6,4.6c-0.4,1.3-1,2.4-1.8,3.2c-0.7,0.8-1.6,1.5-2.6,1.9C7.9,22.6,6.8,22.8,5.6,22.8z M9.8,10.5c0-0.5-0.1-1-0.2-1.4C9.5,8.6,9.3,8.2,9,7.9C8.8,7.6,8.5,7.3,8.1,7.1C7.8,6.9,7.4,6.8,6.9,6.8C6,6.8,5.3,7.1,4.8,7.6 C4.3,8.1,4,8.9,4,10c0,1.1,0.3,1.8,0.9,2.3C5.4,12.8,6.2,13,7.1,13c0.5,0,1-0.1,1.4-0.3c0.4-0.2,0.8-0.5,1-0.8 C9.7,11.6,9.8,11.1,9.8,10.5z"/>
                            <path fill="#0058A4" d="M24.2,3.9h4.6v11.5h2.8v3.1h-2.8v4.3H25v-4.3h-8.8v-2.6L24.2,3.9z M23.4,10.8l-3.1,4.6H25v-4.3l0.2-3.6 h-0.1L23.4,10.8z"/>
                            <path fill="#0058A4" d="M43.5,5.7c0,0.8-0.1,1.5-0.3,2.2c-0.2,0.7-0.6,1.3-1,1.8c-0.4,0.5-1,0.9-1.6,1.2c-0.7,0.3-1.4,0.5-2.2,0.5 c-0.8,0-1.5-0.2-2.2-0.5c-0.6-0.3-1.2-0.7-1.6-1.2c-0.4-0.5-0.8-1.1-1-1.8c-0.2-0.7-0.3-1.4-0.3-2.2s0.1-1.5,0.3-2.2 c0.2-0.7,0.6-1.3,1-1.8c0.5-0.5,1-0.9,1.6-1.2C36.8,0.2,37.5,0,38.4,0c0.8,0,1.5,0.2,2.2,0.5c0.6,0.3,1.2,0.7,1.6,1.2 c0.4,0.5,0.8,1.1,1,1.8C43.4,4.2,43.5,4.9,43.5,5.7z M40.4,5.7c0-0.4,0-0.8-0.1-1.2c-0.1-0.4-0.2-0.7-0.3-1 c-0.2-0.3-0.4-0.5-0.6-0.7s-0.6-0.3-1-0.3c-0.4,0-0.7,0.1-0.9,0.3c-0.3,0.2-0.5,0.4-0.7,0.7c-0.2,0.3-0.3,0.6-0.4,1 c-0.1,0.4-0.1,0.8-0.1,1.2c0,0.5,0,0.9,0.1,1.3s0.2,0.8,0.3,1.1c0.2,0.3,0.4,0.6,0.6,0.8c0.3,0.2,0.6,0.3,0.9,0.3 c0.7,0,1.3-0.3,1.6-1C40.2,7.5,40.4,6.7,40.4,5.7z M36.8,22.8L49.9,0h2.4L39.2,22.8H36.8z M55.6,17.1c0,0.8-0.1,1.5-0.3,2.2 s-0.5,1.3-1,1.8c-0.4,0.5-1,0.9-1.6,1.2c-0.7,0.3-1.4,0.5-2.2,0.5c-0.8,0-1.5-0.2-2.2-0.5c-0.6-0.3-1.2-0.7-1.6-1.2 c-0.4-0.5-0.8-1.1-1-1.8c-0.2-0.7-0.3-1.4-0.3-2.2c0-0.8,0.1-1.5,0.3-2.2c0.2-0.7,0.6-1.3,1-1.8c0.5-0.5,1-0.9,1.6-1.2 c0.6-0.3,1.4-0.5,2.2-0.5c0.8,0,1.5,0.2,2.1,0.5c0.6,0.3,1.2,0.7,1.6,1.2c0.4,0.5,0.8,1.1,1,1.8S55.6,16.3,55.6,17.1z M52.6,17.1 c0-0.4,0-0.9-0.1-1.3s-0.2-0.8-0.3-1.1c-0.2-0.3-0.4-0.6-0.6-0.8s-0.6-0.3-1-0.3c-0.4,0-0.7,0.1-0.9,0.3c-0.3,0.2-0.5,0.4-0.7,0.8 c-0.2,0.3-0.3,0.7-0.4,1.1c-0.1,0.4-0.1,0.9-0.1,1.3c0,0.5,0,0.9,0.1,1.3c0.1,0.4,0.2,0.8,0.4,1.1c0.2,0.3,0.4,0.6,0.6,0.8 c0.3,0.2,0.6,0.3,0.9,0.3c0.7,0,1.2-0.3,1.6-1S52.6,18.1,52.6,17.1z"/>
                        </g>
                    </svg>
                </div><!-- /.icon__item__media -->
                <div class="icon__content content">
                    <p>
                        De la producción total de cerdos del país
                    </p>
                </div><!-- /.icon__content content -->
            </div><!-- /.somos--icon__item -->
            <div class="somos--icon__item">
                <div class="icon__item__media">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="55.6px" height="22.8px" viewBox="0 0 55.6 22.8" enable-background="new 0 0 55.6 22.8" xml:space="preserve">
                        <g>
                            <path fill="#0058A4" d="M5.6,22.8c-1,0-1.9-0.1-2.6-0.3c-0.7-0.2-1.4-0.4-1.9-0.7L1.9,19c0.4,0.2,0.9,0.4,1.5,0.6 c0.5,0.2,1.2,0.2,1.9,0.2c1.5,0,2.6-0.5,3.3-1.4c0.7-0.9,1.2-2.1,1.3-3.7c-0.4,0.4-0.9,0.7-1.5,0.9C7.7,15.9,7,16,6.2,16 c-0.9,0-1.8-0.1-2.5-0.4c-0.8-0.3-1.4-0.6-2-1.1c-0.6-0.5-1-1.1-1.3-1.8C0.2,11.9,0,11.1,0,10.1c0-0.9,0.2-1.8,0.5-2.6 s0.8-1.4,1.4-2c0.6-0.6,1.3-1,2.2-1.3C5,4,5.9,3.9,7,3.9c0.9,0,1.7,0.2,2.6,0.5c0.8,0.3,1.6,0.8,2.2,1.5c0.6,0.7,1.2,1.6,1.5,2.7 c0.4,1.1,0.6,2.4,0.6,4c0,1.8-0.2,3.3-0.6,4.6c-0.4,1.3-1,2.4-1.8,3.2c-0.7,0.8-1.6,1.5-2.6,1.9C7.9,22.6,6.8,22.8,5.6,22.8z M9.8,10.5c0-0.5-0.1-1-0.2-1.4C9.5,8.6,9.3,8.2,9,7.9C8.8,7.6,8.5,7.3,8.1,7.1C7.8,6.9,7.4,6.8,6.9,6.8C6,6.8,5.3,7.1,4.8,7.6 C4.3,8.1,4,8.9,4,10c0,1.1,0.3,1.8,0.9,2.3C5.4,12.8,6.2,13,7.1,13c0.5,0,1-0.1,1.4-0.3c0.4-0.2,0.8-0.5,1-0.8 C9.7,11.6,9.8,11.1,9.8,10.5z"/>
                            <path fill="#0058A4" d="M24.2,3.9h4.6v11.5h2.8v3.1h-2.8v4.3H25v-4.3h-8.8v-2.6L24.2,3.9z M23.4,10.8l-3.1,4.6H25v-4.3l0.2-3.6 h-0.1L23.4,10.8z"/>
                            <path fill="#0058A4" d="M43.5,5.7c0,0.8-0.1,1.5-0.3,2.2c-0.2,0.7-0.6,1.3-1,1.8c-0.4,0.5-1,0.9-1.6,1.2c-0.7,0.3-1.4,0.5-2.2,0.5 c-0.8,0-1.5-0.2-2.2-0.5c-0.6-0.3-1.2-0.7-1.6-1.2c-0.4-0.5-0.8-1.1-1-1.8c-0.2-0.7-0.3-1.4-0.3-2.2s0.1-1.5,0.3-2.2 c0.2-0.7,0.6-1.3,1-1.8c0.5-0.5,1-0.9,1.6-1.2C36.8,0.2,37.5,0,38.4,0c0.8,0,1.5,0.2,2.2,0.5c0.6,0.3,1.2,0.7,1.6,1.2 c0.4,0.5,0.8,1.1,1,1.8C43.4,4.2,43.5,4.9,43.5,5.7z M40.4,5.7c0-0.4,0-0.8-0.1-1.2c-0.1-0.4-0.2-0.7-0.3-1 c-0.2-0.3-0.4-0.5-0.6-0.7s-0.6-0.3-1-0.3c-0.4,0-0.7,0.1-0.9,0.3c-0.3,0.2-0.5,0.4-0.7,0.7c-0.2,0.3-0.3,0.6-0.4,1 c-0.1,0.4-0.1,0.8-0.1,1.2c0,0.5,0,0.9,0.1,1.3s0.2,0.8,0.3,1.1c0.2,0.3,0.4,0.6,0.6,0.8c0.3,0.2,0.6,0.3,0.9,0.3 c0.7,0,1.3-0.3,1.6-1C40.2,7.5,40.4,6.7,40.4,5.7z M36.8,22.8L49.9,0h2.4L39.2,22.8H36.8z M55.6,17.1c0,0.8-0.1,1.5-0.3,2.2 s-0.5,1.3-1,1.8c-0.4,0.5-1,0.9-1.6,1.2c-0.7,0.3-1.4,0.5-2.2,0.5c-0.8,0-1.5-0.2-2.2-0.5c-0.6-0.3-1.2-0.7-1.6-1.2 c-0.4-0.5-0.8-1.1-1-1.8c-0.2-0.7-0.3-1.4-0.3-2.2c0-0.8,0.1-1.5,0.3-2.2c0.2-0.7,0.6-1.3,1-1.8c0.5-0.5,1-0.9,1.6-1.2 c0.6-0.3,1.4-0.5,2.2-0.5c0.8,0,1.5,0.2,2.1,0.5c0.6,0.3,1.2,0.7,1.6,1.2c0.4,0.5,0.8,1.1,1,1.8S55.6,16.3,55.6,17.1z M52.6,17.1 c0-0.4,0-0.9-0.1-1.3s-0.2-0.8-0.3-1.1c-0.2-0.3-0.4-0.6-0.6-0.8s-0.6-0.3-1-0.3c-0.4,0-0.7,0.1-0.9,0.3c-0.3,0.2-0.5,0.4-0.7,0.8 c-0.2,0.3-0.3,0.7-0.4,1.1c-0.1,0.4-0.1,0.9-0.1,1.3c0,0.5,0,0.9,0.1,1.3c0.1,0.4,0.2,0.8,0.4,1.1c0.2,0.3,0.4,0.6,0.6,0.8 c0.3,0.2,0.6,0.3,0.9,0.3c0.7,0,1.2-0.3,1.6-1S52.6,18.1,52.6,17.1z"/>
                        </g>
                    </svg>
                </div><!-- /.icon__item__media -->
                <div class="icon__content content">
                    <p>
                        De la producción total de cerdos del país
                    </p>
                </div><!-- /.icon__content content -->
            </div><!-- /.somos--icon__item -->
        </div><!-- /.somos--flex -->
        <a href="page-asociados.php" title="Ver las empresas asociadas" class="btn btn--border">Ver las empresas asociadas</a>
    </div><!-- /.somos--icon -->
    <div class="block--flex">
        <div class="column">
            <div class="content">
                <h2>Misión</h2>
                <ul>
                    <li>Impulsar la existencia de un sector porcino sustentable, rentable,</li>
                </ul>
            </div><!-- /.content -->
        </div><!-- /.column -->
        <div class="column">
            <div class="content">
                <h2>Visión</h2>
                <ul>
                    <li>
                        Incentivar las buenas prácticas de producción de alimentos inocuos
                    </li>
                    <li>
                        Actuar en base al conocimiento científico
                    </li>
                    <li>
                        Promover un ambiente de trabajo seguro
                    </li>
                    <li>
                        Fomentar el uso eficiente de los recursos naturales, el cuidado del medio ambiente y social.
                    </li>
                </ul>
            </div><!-- /.content -->
        </div><!-- /.column -->
    </div><!-- /.block--flex -->
    <div class="block__content">
        <h2 class="sub-title">Línea estratégica</h2>
        <div class="content">
            <p>
                La línea estratégica de Asprocer tiene por objetivo satisfacer las expectativas de sus asociados y añadir valor a la industria, apoyando y dando soporte a las empresas con un objetivo sectorial en gestión sanitaria y de inocuidad, comercio exterior, promoción internacional, asistencia Medioambiental y social y representación gremial, con énfasis en la inserción del sector porcino en el mercado global. 
            </p>
        </div><!-- /.content -->
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
    </div><!-- /.block__content -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>