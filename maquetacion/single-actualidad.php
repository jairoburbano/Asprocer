<?php
/**
 *
 *
 * @package		asprocer
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'actualidad';
$subpage = '';
$type = 'page';
$title = 'Actualidad';
$subpage_title = 'Single Actualidad';
include 'header.php';  ?>
<div class="barra--share">
    <div class="wrap">
        <a href="page-actualidad.php" class="go-back" title="Volver a Actualidad"><svg><use xlink:href="#shape-icon-prev" /></svg>Volver a Actualidad</a>
        <div class="share--mobile">
            <p>Compartir <span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="24px" height="25.5px" viewBox="0 0 24 25.5" enable-background="new 0 0 24 25.5" xml:space="preserve"> <g> <path fill="#FFFFFF" d="M19.4,16.4c-1.5,0-2.8,0.7-3.6,1.8l-7-3.9c0.2-0.5,0.3-1,0.3-1.5c0-0.5-0.1-1-0.3-1.5l7-3.9 c0.8,1.1,2.1,1.8,3.6,1.8c2.5,0,4.6-2,4.6-4.6S21.9,0,19.4,0s-4.6,2-4.6,4.6c0,0.5,0.1,1,0.3,1.5l-7,3.9C7.3,8.9,6,8.2,4.6,8.2 C2,8.2,0,10.2,0,12.7s2,4.6,4.6,4.6c1.5,0,2.8-0.7,3.6-1.8l7,3.9c-0.2,0.5-0.3,1-0.3,1.5c0,2.5,2,4.6,4.6,4.6s4.6-2,4.6-4.6 S22,16.4,19.4,16.4z M19.4,1.4c1.7,0,3.1,1.4,3.1,3.1s-1.4,3.1-3.1,3.1s-3.1-1.4-3.1-3.1S17.7,1.4,19.4,1.4z M4.6,15.8 c-1.7,0-3.1-1.4-3.1-3.1s1.4-3.1,3.1-3.1s3.1,1.4,3.1,3.1S6.3,15.8,4.6,15.8z M19.4,24c-1.7,0-3.1-1.4-3.1-3.1s1.4-3.1,3.1-3.1 s3.1,1.4,3.1,3.1S21.2,24,19.4,24z"/></g></svg></span></p>
        </div><!-- /.share--mobile -->
        <div class="share">
            <span>Compartir</span>
            <a target="_blank" class="popup" href="mailto:jairo@reactor.cl"><svg><use xlink:href="#shape-icon-mail" /></svg></a>
            <a target="_blank" class="popup" href="http://www.facebook.com/sharer.php?u={{post.permalink}}&t={{post.title}}"><svg><use xlink:href="#shape-icon-facebook" /></svg></a>
            <a target="_blank" class="popup" href="http://twitter.com/share?url={{post.permalink}}&text={{post.title}}"><svg><use xlink:href="#shape-icon-twitter" /></svg></a>
            <div class="share--close"><svg><use xlink:href="#shape-icon-close" /></svg></div><!-- /.share--close -->
        </div><!-- /.share -->
    </div><!-- /.share -->
</div><!-- /.barra--share -->
<div class="single-actualidad wrap">
    <div class="single__meta">
        <p><strong>13</strong> de <strong>Abril</strong>, <strong>2015</strong></p>
    </div><!-- /.single__meta -->
    <h1 class="single__title">Cuidado de la salud de trabajadores y aumento de la productividad</h1>
    <div class="single__content content">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.
        </p>
    </div><!-- /.content -->
    <!--NOTE: Gallery va fuera de .content -->
    <div class="gallery">
        <div class="gallery__container">
            <div class="slider__gallery js-slider__gallery">
                <ul class="slides">
                    <li>
                        <img src="assets/cerdo_640.jpg" alt="Tenemos la capacidad de regenerarnos y de regularnos por nosotros mismos. La salud puede alcanzarse de una forma natural, ya que el cuerpo tiene una capacidad innata de restablecerse y de auto regenerarse.La Quiropráctica es la primera profesión de salud natural en el mundo y la segunda en EE.UU. y seguro que con el tiempo, será la primera opción para la mayor parte del mundo.">
                    </li>
                    <li>
                        <img src="assets/crudo_640.jpg" alt="texto 2">
                    </li>
                    <li>
                        <img src="assets/carne_320.jpg" alt="texto 3">
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
                        <div class="gallery__fullscreen">
                            <svg><use xlink:href="#shape-icon-fullscreen" /></svg>
                        </div><!-- /.gallery__fullscreen -->
                    </div><!-- /.custom__icons -->
                </div>
            </div><!-- /.gallery__content -->
        </div><!-- /.gallery__container -->
    </div><!-- /.gallery -->
    <div class="single__content content">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates possimus recusandae, sequi tenetur omnis laudantium rerum nemo, ut, magnam temporibus suscipit ipsam autem in quia non. Repellendus quisquam quaerat esse quam expedita aliquid, nulla cupiditate possimus ut. Asperiores tempora ratione, quae tempore maiores laborum dicta, consequatur autem deserunt aut nemo.
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique temporibus quaerat, placeat atque nam dolore eos facilis optio distinctio cum.
        </p>
    </div><!-- /.single__content content -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>