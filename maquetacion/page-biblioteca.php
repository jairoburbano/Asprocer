<?php
/**
 *
 *
 * @package		asprocer
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'biblioteca';
$subpage = '';
$type = 'page';
$title = 'Biblioteca';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="headline biblioteca--headline">
    <h1>Biblioteca</h1>
    <div class="content">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
    </div><!-- /.content -->
</div><!-- /.headline -->
<div class="filtro">
    <form action="" class="formulario form--filtro">
        <div class="select-group group">
            <select name="filtro" id="filtro">
                <option value="default">Selecciona uno</option>
                <option value="One">One</option>
                <option value="two">Two</option>
            </select>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="15.5px" height="13.6px" viewBox="0 0 15.5 13.6" enable-background="new 0 0 15.5 13.6" xml:space="preserve">
                <polygon id="XMLID_1_" fill="none" stroke="#676D6F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="14.8,0.8 7.8,12.9 0.8,0.8 "/>
            </svg>
        </div><!-- /.select-group -->
        <div class="separacion"></div><!-- /.separacion -->
        <div class="input-search">
            <div class="input-group group">
                <input type="text" placeholder="Buscar...">
            </div><!-- /.input-group group -->
            <div class="send-group">
                <svg><use xlink:href="#shape-icon-lupa" /></svg>
            </div><!-- /.send-group -->
        </div><!-- /.input-search -->
        <div class="send-group">
            <input type="submit" class="btn btn--fill" value="Buscar">
        </div><!-- /.send-group -->
    </form><!-- /.formulario form--filtro -->
</div><!-- /.filtro -->
<div class="wrap">
    <div class="listado">
        <div class="message message__search">
            <p>No se encontraron resultados para <strong>Resultado de busqueda</strong></p>
        </div><!-- /.message -->
        <div class="item__biblioteca">
            <div class="biblioteca__meta">
                <div class="biblioteca__icon">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="18.5px" height="18.2px" viewBox="0 0 18.5 18.2" enable-background="new 0 0 18.5 18.2" xml:space="preserve">
                        <defs>
                        </defs>
                        <g id="XMLID_1_">
                            <path id="XMLID_10_" d="M9.3,3.7H4.2C3.8,3.7,3.5,4,3.5,4.4c0,0.4,0.3,0.7,0.7,0.7h5.1c0.4,0,0.7-0.3,0.7-0.7C10,4,9.7,3.7,9.3,3.7 z"/>
                            <polyline id="XMLID_9_" fill="none" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points=" 13,0.8 0.8,0.8 0.8,17.5 10.6,17.5 14.5,13.6 14.5,9 	"/>
                            <g id="XMLID_2_">
                                <path id="XMLID_8_" fill="#327324" d="M8.6,11.5c-0.2-0.2-0.6-0.3-0.9-0.3c-0.1,0-0.2,0-0.2-0.1C7.5,11.1,7.5,11,7.5,11 c0.1-0.3-0.1-0.6-0.3-0.9C7.1,10,7,10,6.9,9.9l-0.8,2l0.7,0.7l2-0.8C8.8,11.7,8.7,11.6,8.6,11.5z"/>
                                <path id="XMLID_7_" fill="#F2484B" d="M18,2.3c0-0.2-0.1-0.3-0.2-0.5l-0.9-0.9c0,0,0,0-0.1-0.1c0,0,0,0,0,0c0,0,0,0,0,0 c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0-0.1,0c0,0,0,0,0,0c-0.1,0-0.2-0.1-0.3-0.1c-0.1,0-0.2,0-0.3,0.1c0,0,0,0,0,0c0,0,0,0-0.1,0 c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0-0.1,0.1l-1,1l2,2l1-1C17.9,2.8,18,2.6,18,2.5C18,2.4,18,2.4,18,2.3 C18,2.4,18,2.3,18,2.3z"/>
                                <path id="XMLID_3_" d="M18.5,2.4c0-0.3-0.1-0.6-0.4-0.9l-0.9-0.9c-0.1-0.1-0.2-0.2-0.3-0.2c-0.2-0.1-0.4-0.1-0.6-0.1 c-0.2,0-0.4,0.1-0.6,0.2c0,0-0.1,0.1-0.1,0.1c-0.1,0-0.1,0.1-0.2,0.1l-1.2,1.2l-0.9,0.9L6.6,9.4c0,0,0,0,0,0c0,0,0,0,0,0 c0,0,0,0,0,0.1l-1,2.3c0,0,0,0,0,0l-0.7,1.7c0,0.1,0,0.2,0.1,0.3c0,0,0,0,0,0c0,0,0.1,0.1,0.2,0.1c0,0,0.1,0,0.1,0l1.7-0.7l0,0 l2.3-1c0,0,0.1,0,0.1,0c0,0,0,0,0,0l0,0l6.3-6.3l0.5-0.5l2.1-2.1C18.4,3,18.5,2.7,18.5,2.4z M17.8,2.9l-1,1l-2-2l1-1 c0,0,0,0,0.1-0.1c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0.1,0c0,0,0,0,0,0c0.1,0,0.2-0.1,0.3-0.1 c0.1,0,0.2,0,0.3,0.1c0,0,0,0,0,0c0,0,0,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0.1,0.1l0.9,0.9 C17.9,2,18,2.1,18,2.3c0,0,0,0,0,0.1c0,0,0,0,0,0.1C18,2.6,17.9,2.8,17.8,2.9z M6.9,12.6l-0.7-0.7l0.8-2C7,10,7.1,10,7.2,10.1 c0.2,0.2,0.3,0.6,0.3,0.9c0,0.1,0,0.2,0.1,0.2c0.1,0.1,0.1,0.1,0.2,0.1c0.3-0.1,0.6,0.1,0.9,0.3c0.1,0.1,0.1,0.2,0.2,0.3L6.9,12.6 z"/>
                            </g>
                        </g>
                    </svg>
                </div><!-- /.biblioteca__icon -->
                <span>Memorias</span>
                <span>3/2/2016</span>
            </div><!-- /.biblioteca__meta -->
            <h2 class="biblioteca__title">Documento de ejemplo uno </h2><!-- /.biblioteca__title -->
            <div class="biblioteca--flex">
                <div class="biblioteca__content">
                    <p>
                        El secLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div><!-- /.biblioteca__content -->
                <div class="biblioteca__buttons">
                    <a href="#" title="titulo" class="btn btn--border">Ver más</a>
                    <a href="#" title="titulo" download class="btn btn--download">Descargar <svg><use xlink:href="#shape-icon-download" /></svg></a>
                </div><!-- /.biblioteca__buttons -->
            </div><!-- /.biblioteca--flex -->
        </div><!-- /.item__biblioteca -->
        <div class="item__biblioteca">
            <div class="biblioteca__meta">
                <div class="biblioteca__icon">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="18.5px" height="18.2px" viewBox="0 0 18.5 18.2" enable-background="new 0 0 18.5 18.2" xml:space="preserve">
                        <defs>
                        </defs>
                        <g id="XMLID_1_">
                            <path id="XMLID_10_" d="M9.3,3.7H4.2C3.8,3.7,3.5,4,3.5,4.4c0,0.4,0.3,0.7,0.7,0.7h5.1c0.4,0,0.7-0.3,0.7-0.7C10,4,9.7,3.7,9.3,3.7 z"/>
                            <polyline id="XMLID_9_" fill="none" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points=" 13,0.8 0.8,0.8 0.8,17.5 10.6,17.5 14.5,13.6 14.5,9 	"/>
                            <g id="XMLID_2_">
                                <path id="XMLID_8_" fill="#327324" d="M8.6,11.5c-0.2-0.2-0.6-0.3-0.9-0.3c-0.1,0-0.2,0-0.2-0.1C7.5,11.1,7.5,11,7.5,11 c0.1-0.3-0.1-0.6-0.3-0.9C7.1,10,7,10,6.9,9.9l-0.8,2l0.7,0.7l2-0.8C8.8,11.7,8.7,11.6,8.6,11.5z"/>
                                <path id="XMLID_7_" fill="#F2484B" d="M18,2.3c0-0.2-0.1-0.3-0.2-0.5l-0.9-0.9c0,0,0,0-0.1-0.1c0,0,0,0,0,0c0,0,0,0,0,0 c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0-0.1,0c0,0,0,0,0,0c-0.1,0-0.2-0.1-0.3-0.1c-0.1,0-0.2,0-0.3,0.1c0,0,0,0,0,0c0,0,0,0-0.1,0 c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0-0.1,0.1l-1,1l2,2l1-1C17.9,2.8,18,2.6,18,2.5C18,2.4,18,2.4,18,2.3 C18,2.4,18,2.3,18,2.3z"/>
                                <path id="XMLID_3_" d="M18.5,2.4c0-0.3-0.1-0.6-0.4-0.9l-0.9-0.9c-0.1-0.1-0.2-0.2-0.3-0.2c-0.2-0.1-0.4-0.1-0.6-0.1 c-0.2,0-0.4,0.1-0.6,0.2c0,0-0.1,0.1-0.1,0.1c-0.1,0-0.1,0.1-0.2,0.1l-1.2,1.2l-0.9,0.9L6.6,9.4c0,0,0,0,0,0c0,0,0,0,0,0 c0,0,0,0,0,0.1l-1,2.3c0,0,0,0,0,0l-0.7,1.7c0,0.1,0,0.2,0.1,0.3c0,0,0,0,0,0c0,0,0.1,0.1,0.2,0.1c0,0,0.1,0,0.1,0l1.7-0.7l0,0 l2.3-1c0,0,0.1,0,0.1,0c0,0,0,0,0,0l0,0l6.3-6.3l0.5-0.5l2.1-2.1C18.4,3,18.5,2.7,18.5,2.4z M17.8,2.9l-1,1l-2-2l1-1 c0,0,0,0,0.1-0.1c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0.1,0c0,0,0,0,0,0c0.1,0,0.2-0.1,0.3-0.1 c0.1,0,0.2,0,0.3,0.1c0,0,0,0,0,0c0,0,0,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0.1,0.1l0.9,0.9 C17.9,2,18,2.1,18,2.3c0,0,0,0,0,0.1c0,0,0,0,0,0.1C18,2.6,17.9,2.8,17.8,2.9z M6.9,12.6l-0.7-0.7l0.8-2C7,10,7.1,10,7.2,10.1 c0.2,0.2,0.3,0.6,0.3,0.9c0,0.1,0,0.2,0.1,0.2c0.1,0.1,0.1,0.1,0.2,0.1c0.3-0.1,0.6,0.1,0.9,0.3c0.1,0.1,0.1,0.2,0.2,0.3L6.9,12.6 z"/>
                            </g>
                        </g>
                    </svg>
                </div><!-- /.biblioteca__icon -->
                <span>Memorias</span>
                <span>3/2/2016</span>
            </div><!-- /.biblioteca__meta -->
            <h2 class="biblioteca__title">Documento de ejemplo uno </h2><!-- /.biblioteca__title -->
            <div class="biblioteca--flex">
                <div class="biblioteca__content">
                    <p>
                        El secLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div><!-- /.biblioteca__content -->
                <div class="biblioteca__buttons">
                    <a href="#" title="titulo" class="btn btn--border">Ver más</a>
                    <a href="#" title="titulo" download class="btn btn--download">Descargar <svg><use xlink:href="#shape-icon-download" /></svg></a>
                </div><!-- /.biblioteca__buttons -->
            </div><!-- /.biblioteca--flex -->
        </div><!-- /.item__biblioteca -->
        <div class="item__biblioteca">
            <div class="biblioteca__meta">
                <div class="biblioteca__icon">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="18.5px" height="18.2px" viewBox="0 0 18.5 18.2" enable-background="new 0 0 18.5 18.2" xml:space="preserve">
                        <defs>
                        </defs>
                        <g id="XMLID_1_">
                            <path id="XMLID_10_" d="M9.3,3.7H4.2C3.8,3.7,3.5,4,3.5,4.4c0,0.4,0.3,0.7,0.7,0.7h5.1c0.4,0,0.7-0.3,0.7-0.7C10,4,9.7,3.7,9.3,3.7 z"/>
                            <polyline id="XMLID_9_" fill="none" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points=" 13,0.8 0.8,0.8 0.8,17.5 10.6,17.5 14.5,13.6 14.5,9 	"/>
                            <g id="XMLID_2_">
                                <path id="XMLID_8_" fill="#327324" d="M8.6,11.5c-0.2-0.2-0.6-0.3-0.9-0.3c-0.1,0-0.2,0-0.2-0.1C7.5,11.1,7.5,11,7.5,11 c0.1-0.3-0.1-0.6-0.3-0.9C7.1,10,7,10,6.9,9.9l-0.8,2l0.7,0.7l2-0.8C8.8,11.7,8.7,11.6,8.6,11.5z"/>
                                <path id="XMLID_7_" fill="#F2484B" d="M18,2.3c0-0.2-0.1-0.3-0.2-0.5l-0.9-0.9c0,0,0,0-0.1-0.1c0,0,0,0,0,0c0,0,0,0,0,0 c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0-0.1,0c0,0,0,0,0,0c-0.1,0-0.2-0.1-0.3-0.1c-0.1,0-0.2,0-0.3,0.1c0,0,0,0,0,0c0,0,0,0-0.1,0 c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0-0.1,0.1l-1,1l2,2l1-1C17.9,2.8,18,2.6,18,2.5C18,2.4,18,2.4,18,2.3 C18,2.4,18,2.3,18,2.3z"/>
                                <path id="XMLID_3_" d="M18.5,2.4c0-0.3-0.1-0.6-0.4-0.9l-0.9-0.9c-0.1-0.1-0.2-0.2-0.3-0.2c-0.2-0.1-0.4-0.1-0.6-0.1 c-0.2,0-0.4,0.1-0.6,0.2c0,0-0.1,0.1-0.1,0.1c-0.1,0-0.1,0.1-0.2,0.1l-1.2,1.2l-0.9,0.9L6.6,9.4c0,0,0,0,0,0c0,0,0,0,0,0 c0,0,0,0,0,0.1l-1,2.3c0,0,0,0,0,0l-0.7,1.7c0,0.1,0,0.2,0.1,0.3c0,0,0,0,0,0c0,0,0.1,0.1,0.2,0.1c0,0,0.1,0,0.1,0l1.7-0.7l0,0 l2.3-1c0,0,0.1,0,0.1,0c0,0,0,0,0,0l0,0l6.3-6.3l0.5-0.5l2.1-2.1C18.4,3,18.5,2.7,18.5,2.4z M17.8,2.9l-1,1l-2-2l1-1 c0,0,0,0,0.1-0.1c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0.1,0c0,0,0,0,0,0c0.1,0,0.2-0.1,0.3-0.1 c0.1,0,0.2,0,0.3,0.1c0,0,0,0,0,0c0,0,0,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0.1,0.1l0.9,0.9 C17.9,2,18,2.1,18,2.3c0,0,0,0,0,0.1c0,0,0,0,0,0.1C18,2.6,17.9,2.8,17.8,2.9z M6.9,12.6l-0.7-0.7l0.8-2C7,10,7.1,10,7.2,10.1 c0.2,0.2,0.3,0.6,0.3,0.9c0,0.1,0,0.2,0.1,0.2c0.1,0.1,0.1,0.1,0.2,0.1c0.3-0.1,0.6,0.1,0.9,0.3c0.1,0.1,0.1,0.2,0.2,0.3L6.9,12.6 z"/>
                            </g>
                        </g>
                    </svg>
                </div><!-- /.biblioteca__icon -->
                <span>Memorias</span>
                <span>3/2/2016</span>
            </div><!-- /.biblioteca__meta -->
            <h2 class="biblioteca__title">Documento de ejemplo uno </h2><!-- /.biblioteca__title -->
            <div class="biblioteca--flex">
                <div class="biblioteca__content">
                    <p>
                        El secLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div><!-- /.biblioteca__content -->
                <div class="biblioteca__buttons">
                    <a href="#" title="titulo" class="btn btn--border">Ver más</a>
                    <a href="#" title="titulo" download class="btn btn--download">Descargar <svg><use xlink:href="#shape-icon-download" /></svg></a>
                </div><!-- /.biblioteca__buttons -->
            </div><!-- /.biblioteca--flex -->
        </div><!-- /.item__biblioteca -->
        <div class="item__biblioteca">
            <div class="biblioteca__meta">
                <div class="biblioteca__icon">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="18.5px" height="18.2px" viewBox="0 0 18.5 18.2" enable-background="new 0 0 18.5 18.2" xml:space="preserve">
                        <defs>
                        </defs>
                        <g id="XMLID_1_">
                            <path id="XMLID_10_" d="M9.3,3.7H4.2C3.8,3.7,3.5,4,3.5,4.4c0,0.4,0.3,0.7,0.7,0.7h5.1c0.4,0,0.7-0.3,0.7-0.7C10,4,9.7,3.7,9.3,3.7 z"/>
                            <polyline id="XMLID_9_" fill="none" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points=" 13,0.8 0.8,0.8 0.8,17.5 10.6,17.5 14.5,13.6 14.5,9 	"/>
                            <g id="XMLID_2_">
                                <path id="XMLID_8_" fill="#327324" d="M8.6,11.5c-0.2-0.2-0.6-0.3-0.9-0.3c-0.1,0-0.2,0-0.2-0.1C7.5,11.1,7.5,11,7.5,11 c0.1-0.3-0.1-0.6-0.3-0.9C7.1,10,7,10,6.9,9.9l-0.8,2l0.7,0.7l2-0.8C8.8,11.7,8.7,11.6,8.6,11.5z"/>
                                <path id="XMLID_7_" fill="#F2484B" d="M18,2.3c0-0.2-0.1-0.3-0.2-0.5l-0.9-0.9c0,0,0,0-0.1-0.1c0,0,0,0,0,0c0,0,0,0,0,0 c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0-0.1,0c0,0,0,0,0,0c-0.1,0-0.2-0.1-0.3-0.1c-0.1,0-0.2,0-0.3,0.1c0,0,0,0,0,0c0,0,0,0-0.1,0 c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0-0.1,0.1l-1,1l2,2l1-1C17.9,2.8,18,2.6,18,2.5C18,2.4,18,2.4,18,2.3 C18,2.4,18,2.3,18,2.3z"/>
                                <path id="XMLID_3_" d="M18.5,2.4c0-0.3-0.1-0.6-0.4-0.9l-0.9-0.9c-0.1-0.1-0.2-0.2-0.3-0.2c-0.2-0.1-0.4-0.1-0.6-0.1 c-0.2,0-0.4,0.1-0.6,0.2c0,0-0.1,0.1-0.1,0.1c-0.1,0-0.1,0.1-0.2,0.1l-1.2,1.2l-0.9,0.9L6.6,9.4c0,0,0,0,0,0c0,0,0,0,0,0 c0,0,0,0,0,0.1l-1,2.3c0,0,0,0,0,0l-0.7,1.7c0,0.1,0,0.2,0.1,0.3c0,0,0,0,0,0c0,0,0.1,0.1,0.2,0.1c0,0,0.1,0,0.1,0l1.7-0.7l0,0 l2.3-1c0,0,0.1,0,0.1,0c0,0,0,0,0,0l0,0l6.3-6.3l0.5-0.5l2.1-2.1C18.4,3,18.5,2.7,18.5,2.4z M17.8,2.9l-1,1l-2-2l1-1 c0,0,0,0,0.1-0.1c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0.1,0c0,0,0,0,0,0c0.1,0,0.2-0.1,0.3-0.1 c0.1,0,0.2,0,0.3,0.1c0,0,0,0,0,0c0,0,0,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0.1,0.1l0.9,0.9 C17.9,2,18,2.1,18,2.3c0,0,0,0,0,0.1c0,0,0,0,0,0.1C18,2.6,17.9,2.8,17.8,2.9z M6.9,12.6l-0.7-0.7l0.8-2C7,10,7.1,10,7.2,10.1 c0.2,0.2,0.3,0.6,0.3,0.9c0,0.1,0,0.2,0.1,0.2c0.1,0.1,0.1,0.1,0.2,0.1c0.3-0.1,0.6,0.1,0.9,0.3c0.1,0.1,0.1,0.2,0.2,0.3L6.9,12.6 z"/>
                            </g>
                        </g>
                    </svg>
                </div><!-- /.biblioteca__icon -->
                <span>Memorias</span>
                <span>3/2/2016</span>
            </div><!-- /.biblioteca__meta -->
            <h2 class="biblioteca__title">Documento de ejemplo uno </h2><!-- /.biblioteca__title -->
            <div class="biblioteca--flex">
                <div class="biblioteca__content">
                    <p>
                        El secLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div><!-- /.biblioteca__content -->
                <div class="biblioteca__buttons">
                    <a href="#" title="titulo" class="btn btn--border">Ver más</a>
                    <a href="#" title="titulo" download class="btn btn--download">Descargar <svg><use xlink:href="#shape-icon-download" /></svg></a>
                </div><!-- /.biblioteca__buttons -->
            </div><!-- /.biblioteca--flex -->
        </div><!-- /.item__biblioteca -->
        <div class="item__biblioteca">
            <div class="biblioteca__meta">
                <div class="biblioteca__icon">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="18.5px" height="18.2px" viewBox="0 0 18.5 18.2" enable-background="new 0 0 18.5 18.2" xml:space="preserve">
                        <defs>
                        </defs>
                        <g id="XMLID_1_">
                            <path id="XMLID_10_" d="M9.3,3.7H4.2C3.8,3.7,3.5,4,3.5,4.4c0,0.4,0.3,0.7,0.7,0.7h5.1c0.4,0,0.7-0.3,0.7-0.7C10,4,9.7,3.7,9.3,3.7 z"/>
                            <polyline id="XMLID_9_" fill="none" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points=" 13,0.8 0.8,0.8 0.8,17.5 10.6,17.5 14.5,13.6 14.5,9 	"/>
                            <g id="XMLID_2_">
                                <path id="XMLID_8_" fill="#327324" d="M8.6,11.5c-0.2-0.2-0.6-0.3-0.9-0.3c-0.1,0-0.2,0-0.2-0.1C7.5,11.1,7.5,11,7.5,11 c0.1-0.3-0.1-0.6-0.3-0.9C7.1,10,7,10,6.9,9.9l-0.8,2l0.7,0.7l2-0.8C8.8,11.7,8.7,11.6,8.6,11.5z"/>
                                <path id="XMLID_7_" fill="#F2484B" d="M18,2.3c0-0.2-0.1-0.3-0.2-0.5l-0.9-0.9c0,0,0,0-0.1-0.1c0,0,0,0,0,0c0,0,0,0,0,0 c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0-0.1,0c0,0,0,0,0,0c-0.1,0-0.2-0.1-0.3-0.1c-0.1,0-0.2,0-0.3,0.1c0,0,0,0,0,0c0,0,0,0-0.1,0 c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0-0.1,0.1l-1,1l2,2l1-1C17.9,2.8,18,2.6,18,2.5C18,2.4,18,2.4,18,2.3 C18,2.4,18,2.3,18,2.3z"/>
                                <path id="XMLID_3_" d="M18.5,2.4c0-0.3-0.1-0.6-0.4-0.9l-0.9-0.9c-0.1-0.1-0.2-0.2-0.3-0.2c-0.2-0.1-0.4-0.1-0.6-0.1 c-0.2,0-0.4,0.1-0.6,0.2c0,0-0.1,0.1-0.1,0.1c-0.1,0-0.1,0.1-0.2,0.1l-1.2,1.2l-0.9,0.9L6.6,9.4c0,0,0,0,0,0c0,0,0,0,0,0 c0,0,0,0,0,0.1l-1,2.3c0,0,0,0,0,0l-0.7,1.7c0,0.1,0,0.2,0.1,0.3c0,0,0,0,0,0c0,0,0.1,0.1,0.2,0.1c0,0,0.1,0,0.1,0l1.7-0.7l0,0 l2.3-1c0,0,0.1,0,0.1,0c0,0,0,0,0,0l0,0l6.3-6.3l0.5-0.5l2.1-2.1C18.4,3,18.5,2.7,18.5,2.4z M17.8,2.9l-1,1l-2-2l1-1 c0,0,0,0,0.1-0.1c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0.1,0c0,0,0,0,0,0c0.1,0,0.2-0.1,0.3-0.1 c0.1,0,0.2,0,0.3,0.1c0,0,0,0,0,0c0,0,0,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0.1,0.1l0.9,0.9 C17.9,2,18,2.1,18,2.3c0,0,0,0,0,0.1c0,0,0,0,0,0.1C18,2.6,17.9,2.8,17.8,2.9z M6.9,12.6l-0.7-0.7l0.8-2C7,10,7.1,10,7.2,10.1 c0.2,0.2,0.3,0.6,0.3,0.9c0,0.1,0,0.2,0.1,0.2c0.1,0.1,0.1,0.1,0.2,0.1c0.3-0.1,0.6,0.1,0.9,0.3c0.1,0.1,0.1,0.2,0.2,0.3L6.9,12.6 z"/>
                            </g>
                        </g>
                    </svg>
                </div><!-- /.biblioteca__icon -->
                <span>Memorias</span>
                <span>3/2/2016</span>
            </div><!-- /.biblioteca__meta -->
            <h2 class="biblioteca__title">Documento de ejemplo uno </h2><!-- /.biblioteca__title -->
            <div class="biblioteca--flex">
                <div class="biblioteca__content">
                    <p>
                        El secLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div><!-- /.biblioteca__content -->
                <div class="biblioteca__buttons">
                    <a href="#" title="titulo" class="btn btn--border">Ver más</a>
                    <a href="#" title="titulo" download class="btn btn--download">Descargar <svg><use xlink:href="#shape-icon-download" /></svg></a>
                </div><!-- /.biblioteca__buttons -->
            </div><!-- /.biblioteca--flex -->
        </div><!-- /.item__biblioteca -->
    </div><!-- /.listado -->
    <ul class="paginador">
        <li>
            <a href="#" title="Anterior" class="disable">
                <svg><use xlink:href="#shape-icon-prev" /></svg>
            </a>
        </li>
        <li>
            <a href="#" title="1" class="current">1</a>
        </li>
        <li>
            <a href="#" title="2">2</a>
        </li>
        <li>
            <a href="#" title="3">3</a>
        </li>
        <li>
            <a href="#" title="Siguiente" class="disable">
                <svg><use xlink:href="#shape-icon-next" /></svg>
            </a>
        </li>
    </ul><!-- /.paginador -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>