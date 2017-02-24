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
$title = 'Carne de Cerdo';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="menu--interior">
    <div class="menu__nav__mobile">
        <div class="menu__nav__mobile__icon">
            <svg><use xlink:href="#shape-icon-chancho" /></svg>
        </div><!-- /.menu__nav__mobile__icon -->
        <select name="nav" id="nav" onChange="window.location.href=this.value">
            <option value="page-carne.php">Carne de Cerdo</option>
            <option value="page-analisis.php">Analisis sectorial</option>
        </select>
        <div class="icon-select">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="22px" height="12.2px" viewBox="0 0 22 12.2" enable-background="new 0 0 22 12.2" xml:space="preserve">
                <polygon id="XMLID_1_" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="21,1 11,11.2 1,1 "/>
            </svg>
        </div><!-- /.icon-select -->
    </div><!-- /.menu__nav__mobile -->
    <div class="menu__nav">
        <a href="page-analisis.php" title="Analisis Sectorial">
            <span class="menu__nav__icon">
                <svg><use xlink:href="#shape-icon-analisis" /></svg>
            </span>
            Analisis Sectorial
        </a>
        <a href="page-carne.php" title="Analisis Sectorial" class="active">
            <span class="menu__nav__icon">
                <svg><use xlink:href="#shape-icon-chancho" /></svg>
            </span>
            Carne de Cerdo
        </a>
    </div><!-- /.menu--nav -->
</div><!-- /.menu--interior -->
<div class="headline headline--menu">
    <h1>Carne de Cerdo</h1>
    <div class="content">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
    </div><!-- /.content -->
</div><!-- /.headline -->
<div class="wrap">
    <div class="small--block">
        <div class="content">
            <h2>Antecedentes nutricionales</h2>
            <p>
                La carne de cerdo ha recuperado el papel que le corresponde dentro de la dieta como fuente de proteínas, apreciada por su versatilidad, variedad de formas de preparación y su delicioso sabor.  Es un alimento que provee proteínas, vitaminas del complejo B y otros nutrientes.
            </p>
            <p>
                La composición grasa de la carne de cerdo la hace especialmente atractiva para el seguimiento de dietas equilibradas ya que, además de contener ácidos grasos monoinsaturados, éstos están formados mayoritariamente por ácido oleico, lo que ayuda a reducir los niveles de colesterol LDL.
            </p>
            <p>
                Todas estas propiedades nutritivas convierten a la carne de porcino en una posibilidad gastronómica sabrosa y sana.
            </p>
            <h2>Productos</h2>
            <p>
                Existe una gran variedad de cortes de carne de cerdo, lo que permite versatilidad y variedad de preparaciones
            </p>
        </div><!-- /.content -->
    </div><!-- /.small--block -->
</div><!-- /.wrap -->
<div class="gallery--wide">
    <div class="gallery__container">
        <h3>Algunos consejos:</h3>
        <div class="slider__gallery js-slider__gallery">
            <ul class="slides">
                <li>
                    <img src="assets/cerdo_640.jpg" alt="Tenemos la capacidad de regenerarnos y de regularnos por nosotros mismos. La salud puede alcanzarse de una forma natural, ya que el cuerpo tiene una capacidad innata de restablecerse y de auto regenerarse.La Quiropráctica es la primera profesión de salud natural en el mundo y la segunda en EE.UU. y seguro que con el tiempo, será la primera opción para la mayor parte del mundo.">
                </li>
                <li>
                    <img src="assets/carne_640.jpg" alt="texto 2">
                </li>
                <li>
                    <img src="assets/crudo_640.jpg" alt="texto 3">
                </li>
            </ul><!--.slides-->
        </div><!-- /.slider__gallery js-slider__gallery -->
        <div class="gallery__content">
            <div class="custom-controls-container">
                <div class="gallery__number">
                    <span class="current-slide"></span>/
                    <span class="total-slides"></span>
                </div>
                <div class="gallery__text">
                    <p></p>
                </div><!-- /.gallery__text -->
                <div class="custom__icons">
                </div><!-- /.custom__icons -->
            </div>
        </div><!-- /.gallery__content -->
    </div><!-- /.gallery__container -->
</div><!-- /.gallery--wide -->
<?php include 'footer.php'; ?>