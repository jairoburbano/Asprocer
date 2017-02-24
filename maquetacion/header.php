<?php
include 'functions.php';
/**
 * Cabacera de la Página
 *
 * Nuestra todo el contenido hasta <body>
 *
 * @package		asprocer
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 */
$social_all = 'no';
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, height=device-height">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <meta name="msapplication-TileImage" content="/ms-icon-310x310.png">
        <link href='https://fonts.googleapis.com/css?family=Ek+Mukta:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css?v=1.0.0">
        <script src="js/vendor/modernizr.js"></script>
    </head>
    <body class="footer-small<?php if ( $page == 'error404' ) { echo ' error404'; } ?>">
        <?php include('svg-defs.svg'); ?>
        <div class="page-wrap">
            <header class="header">
                <div class="header__wrap">
                    <div class="header--top">
                        <div class="header__icon">
                            <span></span><span></span><span></span>
                        </div><!-- /.header__icon -->
                        <a href="index.php" title="Asprocer" class="header__logo">
                            <img src="img/logo.svg" alt="Logo">
                        </a><!-- /.header__logo -->
                        <div class="header__buscador">
                            <form action="page-result.php" class="formulario form-buscar">
                                <div class="group input-group">
                                    <input type="text" name="buscar" id="buscar" placeholder="Buscar...">
                                </div><!-- /.group input-group -->
                                <div class="send-group">
                                    <input type="submit" value=" ">
                                    <svg><use xlink:href="#shape-icon-lupa" /></svg>
                                </div><!-- /.send-group -->
                                <div class="buscador__close">
                                    <svg><use xlink:href="#shape-icon-close" /></svg>
                                </div><!-- /.buscador__close -->
                            </form><!-- /.formulario form-buscar -->
                        </div><!-- /.header__buscador -->
                    </div><!-- /.header--top -->
                    <div class="header--bottom">
                        <div class="header__container">
                            <nav class="menu">
                                <a href="page-quienes-somos.php" title="Asociación" class="menu-item <?php if ( $page == 'asociacion' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Asociación</a>
                                <a href="page-analisis.php" title="Industria" class="menu-item <?php if ( $page == 'industria' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Industria</a>
                                <a href="page-areas-de-trabajo.php" title="Áreas de trabajo" class="menu-item <?php if ( $page == 'areas-de-trabajo' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Áreas de trabajo</a>
                                <a href="page-actualidad.php" title="Actualidad" class="menu-item <?php if ( $page == 'actualidad' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Actualidad</a>
                                <a href="page-biblioteca.php" title="Biblioteca" class="menu-item <?php if ( $page == 'biblioteca' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Biblioteca</a>
                            </nav><!-- /.menu -->
                            <div class="submenu">
                                <div class="header__lang">
                                    <a href="#es" title="Español" class="active">Es</a>
                                    <a href="#en" title="English">En</a>
                                </div><!-- /.header__lang -->
                                <?php if ( $social_all == 'yes' ) : ?>
                                <div class="social-block js-social-block">
                                    <button title="Contacto" class="header__share js-open-share">
                                        <svg><use xlink:href="#shape-icon-share" /></svg>
                                    </button>
                                    <div class="social-media js-social-media">
                                        <div class="social-media__container">
                                            <a class="social-facebook" href="#"><svg><use xlink:href="#shape-icon-facebook" /></svg></a>
                                            <a class="social-google-plus" href="#"><svg><use xlink:href="#shape-icon-google-plus" /></svg></a>
                                            <a class="social-twitter" href="#"><svg><use xlink:href="#shape-icon-twitter" /></svg></a>
                                            <a class="social-linkedin" href="#"><svg><use xlink:href="#shape-icon-linkedin" /></svg></a>
                                            <a class="social-vimeo" href="#"><svg><use xlink:href="#shape-icon-vimeo" /></svg></a>
                                            <a class="social-youtube" href="#"><svg><use xlink:href="#shape-icon-youtube" /></svg></a>
                                            <a class="social-flickr" href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16px" height="7.6px" viewBox="0 0 16 7.6"><circle class="flickr-blue" cx="3.8" cy="3.8" r="3.8"/><circle class="flickr-red" cx="12.2" cy="3.8" r="3.8"/></svg></a>
                                        </div><!-- /.social-media__container -->
                                    </div><!-- /.social-media -->
                                </div><!--/.social-block-->
                                <?php else : ?>
                                <a href="https://www.flickr.com/photos/asprocer/" target="_blank" title="Flickr" class="header__share header__share--alone social-flickr">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16px" height="7.6px" viewBox="0 0 16 7.6"><circle class="flickr-blue" cx="3.8" cy="3.8" r="3.8"/><circle class="flickr-red" cx="12.2" cy="3.8" r="3.8"/></svg>
                                </a>
                                <?php endif; ?>
                                <a href="page-contacto.php" title="Contacto" class="header__contact">
                                    <svg><use xlink:href="#shape-icon-contact" /></svg>
                                </a>
                            </div><!-- /.submenu -->
                        </div><!-- /.header__container -->
                    </div><!-- /.header--bottom -->
                </div><!-- /.header__wrap -->
            </header><!-- /.header -->