<?php
/**
 * Archivo principal.
 *
 * Aquí se muestra todo lo que se ve en la portada de la página
 *
 * @package		asprocer
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 */
$page = 'home';
$subpage = '';
include 'header.php'; ?>
<div class="slide--home inicio-slide">
   <div class="loader__slide">
       <img src="img/spin.svg" alt="Loader">
   </div><!-- /.loader__slide -->
    <ul class="slides">
        <li>
            <div class="item__slide">
                <div class="item__slide__media">
                    <img src="assets/cerdo_640.jpg" alt="Titulo">
                </div><!-- /.item__slide__media -->
                <div class="item__slide__text">
                    <h2 class="slide__title">España y alemania superan a dinamarca como principales exportadores de carne de cerdo de la UE</h2><!-- /.slide__title -->
                    <p>
                        Los tres países enviaron más de 300 mil toneladas fuera de la UE el 2015, lo que supone el 60% de las exportaciones de carne de cerdo de la UE
                    </p>
                    <a href="single-actualidad.php" title="Titulo" class="btn btn--border btn--contrast">Ver más</a>
                </div><!-- /.item__slide__text -->
            </div><!-- /.item__slide -->
        </li>
        <li>
            <div class="item__slide">
                <div class="item__slide__media">
                    <img src="assets/cerdo_640.jpg" alt="Titulo">
                </div><!-- /.item__slide__media -->
                <div class="item__slide__text">
                    <h2 class="slide__title">Segundo Slide</h2><!-- /.slide__title -->
                    <p>
                        Los tres países enviaron más de 300 mil toneladas fuera de la UE el 2015, lo que supone el 60% de las exportaciones de carne de cerdo de la UE
                    </p>
                    <a href="single-actualidad.php" title="Titulo" class="btn btn--border btn--contrast">Ver más</a>
                </div><!-- /.item__slide__text -->
            </div><!-- /.item__slide -->
        </li>
    </ul><!-- /.slides -->
    <div class="custom__icons"></div><!-- /.custom--icons -->
</div><!-- /.slide--home -->
<div class="wrap">
    <div class="container--flex">
        <div class="column">
            <h2 class="title__principal">Quienes somos</h2>
            <div class="item__home--wide">
                <div class="item--wide__media">
                    <img src="assets/carne_640.jpg" alt="Titulo">
                </div><!-- /.item--wide__media -->
                <div class="item--wide__text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies risus id enim scelerisque, ut tempor metus pulvinar.</p>
                    <a href="page-quienes-somos.php" title="Quienes somos" class="btn btn--border">Ver más</a>
                </div><!-- /.item--wide__text -->
            </div><!-- /.item__home--wide -->
        </div><!-- /.column -->
        <div class="column column--flex">
            <h2 class="title__principal">Actualidad</h2>
            <div class="item__home--simple">
                <div class="item--simple__meta">
                    <div class="item--simple__icon">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="20px" height="18.5px" viewBox="0 0 20 18.5" enable-background="new 0 0 20 18.5" xml:space="preserve">
                            <defs>
                            </defs>
                            <rect id="XMLID_10_" x="1.4" y="6" fill="#CCCCCC" width="17.2" height="11.1"/>
                            <g id="XMLID_2_">
                                <g id="XMLID_3_">
                                    <path id="XMLID_6_" d="M0.7,18.5h18.6c0.4,0,0.7-0.3,0.7-0.7V2c0-0.4-0.3-0.7-0.7-0.7h-3.5V0.7c0-0.4-0.3-0.7-0.7-0.7 c-0.4,0-0.7,0.3-0.7,0.7v0.6H5.7V0.7C5.7,0.3,5.4,0,5,0S4.3,0.3,4.3,0.7v0.6H0.7C0.3,1.3,0,1.6,0,2v15.8C0,18.2,0.3,18.5,0.7,18.5 z M1.4,2.7h2.9v0.4c0,0.4,0.3,0.7,0.7,0.7s0.7-0.3,0.7-0.7V2.7h8.6v0.4c0,0.4,0.3,0.7,0.7,0.7c0.4,0,0.7-0.3,0.7-0.7V2.7h2.8v1.8 H1.4L1.4,2.7z M1.4,6h17.2v11.1H1.4L1.4,6z"/>
                                    <path id="XMLID_5_" d="M15.1,9.2H4.9c-0.4,0-0.7,0.3-0.7,0.7c0,0.4,0.3,0.7,0.7,0.7h10.2c0.4,0,0.7-0.3,0.7-0.7 C15.8,9.5,15.5,9.2,15.1,9.2z"/>
                                    <path id="XMLID_4_" d="M10,12.6H4.9c-0.4,0-0.7,0.3-0.7,0.7c0,0.4,0.3,0.7,0.7,0.7H10c0.4,0,0.7-0.3,0.7-0.7 C10.7,12.9,10.4,12.6,10,12.6z"/>
                                </g>
                            </g>
                            <path id="XMLID_1_" fill="#327324" d="M1.4,2.7h2.9v0.4c0,0.4,0.3,0.7,0.7,0.7s0.7-0.3,0.7-0.7V2.7h8.6v0.4c0,0.4,0.3,0.7,0.7,0.7 c0.4,0,0.7-0.3,0.7-0.7V2.7h2.8v1.8H1.4L1.4,2.7z"/>
                        </svg>
                    </div><!-- /.item--simple__icon -->
                    <div class="item--simple__date">
                        <strong>13</strong> de <strong>Abril</strong>, <strong>2015</strong>
                    </div><!-- /.item--simple__date -->
                </div><!-- /.item--simple__meta -->
                <h3 class="item--simple__title"><a href="single-actualidad.php">Cuidado de la salud de trabajadores y aumento de la productividad</a></h3><!-- /.item--simple__title -->
            </div><!-- /.item__home--simple -->
            <div class="item__home--simple">
                <div class="item--simple__meta">
                    <div class="item--simple__icon">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="20px" height="18.5px" viewBox="0 0 20 18.5" enable-background="new 0 0 20 18.5" xml:space="preserve">
                            <defs>
                            </defs>
                            <rect id="XMLID_10_" x="1.4" y="6" fill="#CCCCCC" width="17.2" height="11.1"/>
                            <g id="XMLID_2_">
                                <g id="XMLID_3_">
                                    <path id="XMLID_6_" d="M0.7,18.5h18.6c0.4,0,0.7-0.3,0.7-0.7V2c0-0.4-0.3-0.7-0.7-0.7h-3.5V0.7c0-0.4-0.3-0.7-0.7-0.7 c-0.4,0-0.7,0.3-0.7,0.7v0.6H5.7V0.7C5.7,0.3,5.4,0,5,0S4.3,0.3,4.3,0.7v0.6H0.7C0.3,1.3,0,1.6,0,2v15.8C0,18.2,0.3,18.5,0.7,18.5 z M1.4,2.7h2.9v0.4c0,0.4,0.3,0.7,0.7,0.7s0.7-0.3,0.7-0.7V2.7h8.6v0.4c0,0.4,0.3,0.7,0.7,0.7c0.4,0,0.7-0.3,0.7-0.7V2.7h2.8v1.8 H1.4L1.4,2.7z M1.4,6h17.2v11.1H1.4L1.4,6z"/>
                                    <path id="XMLID_5_" d="M15.1,9.2H4.9c-0.4,0-0.7,0.3-0.7,0.7c0,0.4,0.3,0.7,0.7,0.7h10.2c0.4,0,0.7-0.3,0.7-0.7 C15.8,9.5,15.5,9.2,15.1,9.2z"/>
                                    <path id="XMLID_4_" d="M10,12.6H4.9c-0.4,0-0.7,0.3-0.7,0.7c0,0.4,0.3,0.7,0.7,0.7H10c0.4,0,0.7-0.3,0.7-0.7 C10.7,12.9,10.4,12.6,10,12.6z"/>
                                </g>
                            </g>
                            <path id="XMLID_1_" fill="#327324" d="M1.4,2.7h2.9v0.4c0,0.4,0.3,0.7,0.7,0.7s0.7-0.3,0.7-0.7V2.7h8.6v0.4c0,0.4,0.3,0.7,0.7,0.7 c0.4,0,0.7-0.3,0.7-0.7V2.7h2.8v1.8H1.4L1.4,2.7z"/>
                        </svg>
                    </div><!-- /.item--simple__icon -->
                    <div class="item--simple__date">
                        <strong>13</strong> de <strong>Abril</strong>, <strong>2015</strong>
                    </div><!-- /.item--simple__date -->
                </div><!-- /.item--simple__meta -->
                <h3 class="item--simple__title"><a href="single-actualidad.php">Cuidado de la salud de trabajadores y aumento de la productividad</a></h3><!-- /.item--simple__title -->
            </div><!-- /.item__home--simple -->
        </div><!-- /.column -->
    </div><!-- /.container--flex -->
    <div class="container--flex">
        <div class="column">
            <h2 class="title__principal">Chile Pork</h2>
            <div class="item__pork">
                <div class="item__pork__media">
                    <img src="assets/cerdo_640.jpg" alt="Titulo">
                </div><!-- /.item__pork__media -->
                <div class="item__pork__text">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="191.1px" height="63.9px" viewBox="0 0 191.1 63.9" enable-background="new 0 0 191.1 63.9" xml:space="preserve">
                        <defs>
                        </defs>
                        <g id="XMLID_1_">
                            <path id="XMLID_20_" fill="#FFFFFF" d="M153,24.5C153.1,23.6,152.8,23.2,153,24.5C153,24.6,153,24.6,153,24.5z"/>
                            <path id="XMLID_19_" fill="#FFFFFF" d="M146.4,3C146.4,3.1,146.4,3.1,146.4,3C146.4,3.1,146.4,3.1,146.4,3z"/>
                            <path id="XMLID_18_" fill="#FFFFFF" d="M14.5,58.8c-5,0-8.1-3-9-7.9c-0.2-0.9-0.2-1.9-0.2-3c0-6.7,3.2-11,9.2-11 c3.5,0,5.3,1.2,7.1,3.6l4.6-2.5c-2.4-3.6-6.1-5.6-11.6-5.6C5.6,32.4,0,38.7,0,47.8c0,1,0.1,2.1,0.2,3c1.1,7.4,6.4,12.4,14.3,12.4 c5.2,0,9.3-2.1,11.8-5.7L22,55.1C20.3,57.5,18.1,58.8,14.5,58.8z"/>
                            <path id="XMLID_17_" fill="#FFFFFF" d="M41.1,39.9c-2.6,0-5.2,1-6.5,2.6V31.6l-5,2.3v16.9v12h5v-12v-1.2c0-3.6,1.9-5.7,5.3-5.7 c3.3,0,5.3,1.6,5.3,6.2v0.7v12h5v-12v-0.9C50.2,43.3,47.1,39.9,41.1,39.9z"/>
                            <polygon id="XMLID_16_" fill="#FFFFFF" points="63.4,50.8 63.4,62.8 68.5,62.8 68.5,50.8 68.5,31.6 63.4,33.9 	"/>
                            <polygon id="XMLID_15_" fill="#FFFFFF" points="59.4,35.9 54.4,38.2 54.4,40.4 59.4,40.4 	"/>
                            <path id="XMLID_12_" fill="#FFFFFF" d="M82.8,39.9c-6.4,0-10.9,3.8-11.2,11c0,0.2,0,0.5,0,0.8c0,7.5,5.1,11.7,11.1,11.7 c3.9,0,6.6-1.1,8.9-3l-3-2.8c-1.7,1.1-3.4,1.8-5.6,1.8c-3.1,0-5.9-1.8-6.5-6.2h17c0.1-0.5,0.2-1.2,0.2-2c0-0.1,0-0.2,0-0.3 C93.5,44.9,90,39.9,82.8,39.9z M82.5,43.8c4.1,0,5.8,2.6,6.1,5.6H76.6C77.1,45.9,79.1,43.8,82.5,43.8z"/>
                            <polygon id="XMLID_11_" fill="#FFFFFF" points="54.4,50.8 54.4,62.8 59.4,62.8 59.4,50.8 59.4,42.1 54.4,42.1 	"/>
                            <path id="XMLID_8_" fill="#FFFFFF" d="M110.8,31.7H97.2v19.2v12.5h8.6V53.1h4.4c3.9,0,6.9-0.7,9-2.2c2.6-1.8,3.9-4.7,3.9-8.7 C123.1,35.2,119,31.7,110.8,31.7z M105.8,38.8h4.8c2.6,0,3.8,1.2,3.8,3.5c0,2.4-1.3,3.6-4,3.6h-4.6V38.8z"/>
                            <path id="XMLID_7_" fill="#FFFFFF" d="M157.7,41.3v-1.7h-8.1v11.3v12.5h8.1V50.8v-0.5c0-2.6,1.1-3.8,3.2-3.8c1.3,0,3.2,0.7,4.4,2 l1.3-8.5c-1.1-0.7-2.4-1-3.8-1C160.9,39.1,159.2,39.8,157.7,41.3z"/>
                            <path id="XMLID_6_" fill="#FFFFFF" d="M185,46.8l6-7h-9l-1.5,2c-0.2,0.3-0.5,0.7-0.9,1.2c-0.3,0.5-0.7,0.9-1,1.4 c-0.3,0.5-0.7,0.9-0.9,1.4c-0.3,0.4-0.5,0.8-0.7,1.1c0-0.4,0-0.8,0-1.4c0-0.6,0-1.2,0-1.8c0-0.6,0-1.2,0-1.9c0-0.6,0-1.1,0-1.5 v-9.4l-7.9,3.2v16.8V63h7.9v-7l2.1-2.6l3.5,9.7l7.1,0.1l-3.6-12.3L185,46.8z"/>
                            <path id="XMLID_2_" fill="#FFFFFF" d="M153.1,25.4c0-0.8,0-1.7,0-2.5c-0.1-1.4-2-1.3-3-1.2c-1.9,0-3.8,0.3-5.7,0.3 c-1.6,0-2.8-0.8-4.1-1.8c-2-1.5-4.9-4-5.8-6.6c0.9-2.1,4.5-3.5,6.2-4.3c2.3-1,4.5-1.7,5.7-4.2c0.1-0.1,0-0.6,0-1.1 c0-0.4,0-0.7,0-1.1c0,0,0,0,0,0.1c0,0,0,0,0-0.1c-3.1,0.7-6.4,1.2-9.5,0.4c-3.3-0.9-7.7-3.5-11-1.8c-3,1.6-5.5,4.8-8.9,5.5 c-0.9,0.2-1.8-0.3-2.5-0.7c-3.1-1.6-6.2-3-9.5-4C98.1,0.5,90.9,0,83.9,0C72.8,0,61.4,1.8,50.6,4.6C45,6.1,39,8.5,33.8,11 c-6.1,2.9-12,6.8-17.4,10.9c0.1-0.1,0.1-0.1,0,0c-0.2,0.1-0.1,0.1,0,0C25,15.3,35.5,11,45.8,7.8c8.7-2.7,17.8-4.2,26.9-5 c13-1.2,27.2-1.2,39.3,4.7c1.2,0.6,2.3,1.3,3.5,1.7c2.5,1,5.5-1.8,7.3-3.2c1.3-1,2.8-2.3,4.5-2.7c2.3-0.5,5.1,0.9,7.2,1.5 c2.4,0.8,4.5,1.3,7.1,1.1c0.8-0.1,1.7-0.2,2.5-0.3c-1.7,1.1-3.8,1.7-5.6,2.6c-1.5,0.8-3.2,1.9-4,3.5c-0.4,0.8-0.2,2-0.2,2.8 c0,2.8,3.5,5.6,5.4,7.2c1,0.9,2.2,1.8,3.5,2.2c1.9,0.5,4.1,0,6-0.1c1-0.1,3.1-0.4,3.7,0.7c0,0,0,0.1,0.1,0.1 c-0.1,0.8-0.3,1.5-0.6,2.2c-0.8,2.7-1.9,5.7-3.7,7.9c-0.8,1-2.5,1.2-3.7,1.4c-2.5,0.4-5,0.6-7.4,0.9c-3.5,0.4-6.8,1.2-9.1,4.1 c0,0-0.1,0.1-0.1,0.1c-0.3,0.2-0.6,0.5-0.9,0.8c-2,2.1-3.1,5-3.2,8.7c0,0.2,0,0.4,0,0.6c0,4,1.1,7.1,3.2,9.3c2,2.1,4.7,3.1,8.1,3.1 c3.4,0,6.1-1,8.1-3.1c2.1-2.2,3.2-5.3,3.2-9.3c0-0.2,0-0.4,0-0.6c-0.1-3.7-1.2-6.6-3.2-8.7c-1.5-1.5-3.4-2.5-5.7-2.9 c2.4-0.3,4.8-0.5,7-0.9c1.2-0.2,2.8-0.4,3.7-1.4c0.8-1,1.4-2.3,1.9-3.4C151.8,31.1,153.1,28.2,153.1,25.4z M153,24.5 C153,24.6,153,24.6,153,24.5C152.8,23.2,153.1,23.6,153,24.5z M138.8,50.8c0,0.2,0,0.4,0,0.6c0,3.9-1.1,5.8-3.2,5.8 c-2.1,0-3.2-1.9-3.2-5.8c0-0.2,0-0.4,0-0.6c0.1-3.4,1.2-5.2,3.2-5.2C137.6,45.7,138.7,47.4,138.8,50.8z"/>
                        </g>
                    </svg>
                    <p>
                        La carne de cerdo, es apreciada por su versatilidad, variedad de formas de preparación y su delicioso sabor.
                    </p>
                </div><!-- /.item__pork__text -->
            </div><!-- /.item__pork -->
        </div><!-- /.column -->
        <div class="column">
            <h2 class="title__principal">Carne de Cerdo</h2>
            <div class="item__home--wide">
                <div class="item--wide__media">
                    <img src="assets/carne_640.jpg" alt="Titulo">
                </div><!-- /.item--wide__media -->
                <div class="item--wide__text">
                    <h3 class="item--wide__title">Antecedentes nutricionales</h3><!-- /.item--wide__title -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies risus id enim scelerisque, ut tempor metus pulvinar.</p>
                    <a href="page-carne.php" title="Quienes somos" class="btn btn--border">Ver más</a>
                </div><!-- /.item--wide__text -->
            </div><!-- /.item__home--wide -->
        </div><!-- /.column -->
    </div><!-- /.container--flex -->
    <div class="container--flex">
        <div class="column">
            <h2 class="title__principal">Indicadores</h2>
            <div class="indicadores__home">
                <div class="item__indicador">
                    <p class="indicador__title">Precio Maíz <span>12/04/2016</span></p><!-- /.indicador__title -->
                    <p class="indicador__valor">166 USD/To <span>(FOB Bs. As)</span></p><!-- /.indicador__valor -->
                </div><!-- /.item__indicador -->
                <div class="item__indicador">
                    <p class="indicador__title">UF <span>12/04/2016</span></p><!-- /.indicador__title -->
                    <p class="indicador__valor">$25.851,70</p><!-- /.indicador__valor -->
                </div><!-- /.item__indicador -->
                <div class="item__indicador">
                    <p class="indicador__title">UTM <span>12/04/2016</span></p><!-- /.indicador__title -->
                    <p class="indicador__valor">$45.316,00</p><!-- /.indicador__valor -->
                </div><!-- /.item__indicador -->
                <div class="item__indicador">
                    <p class="indicador__title">Dolar <span>12/04/2016</span></p><!-- /.indicador__title -->
                    <p class="indicador__valor">$670,80</p><!-- /.indicador__valor -->
                </div><!-- /.item__indicador -->
                <div class="item__indicador">
                    <p class="indicador__title">Euro <span>12/04/2016</span></p><!-- /.indicador__title -->
                    <p class="indicador__valor">$756,77</p><!-- /.indicador__valor -->
                </div><!-- /.item__indicador -->
            </div><!-- /.indicadores__home -->
        </div><!-- /.column -->
        <div class="column">
            <h2 class="title__principal">Informe destacado</h2>
            <div class="item__informe">
                <div class="item__informe__meta">
                    <p>
                        Bliblioteca 
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="5.6px" height="9px" viewBox="0 0 5.6 9" enable-background="new 0 0 5.6 9" xml:space="preserve"> <defs> </defs><g id="XMLID_1_" opacity="0.5"><g id="chevron-right_1_"><polygon id="XMLID_2_" fill="#F2F2F2" points="1,0 0,1.1 3.4,4.5 0,7.9 1,9 5.6,4.5 		"/></g></g></svg>
                        Memoria
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="5.6px" height="9px" viewBox="0 0 5.6 9" enable-background="new 0 0 5.6 9" xml:space="preserve"> <defs> </defs><g id="XMLID_1_" opacity="0.5"><g id="chevron-right_1_"><polygon id="XMLID_2_" fill="#F2F2F2" points="1,0 0,1.1 3.4,4.5 0,7.9 1,9 5.6,4.5 		"/></g></g></svg>
                    </p>
                    <span></span><span></span><span></span>
                </div><!-- /.item__informe__meta -->
                <h3 class="item__informe__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h3><!-- /.item__informe__title -->
                <a href="page-biblioteca.php" title="Ver más" class="btn btn--border btn--contrast">Ver más</a>
            </div><!-- /.item__informe -->
        </div><!-- /.column -->
    </div><!-- /.container--flex -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>