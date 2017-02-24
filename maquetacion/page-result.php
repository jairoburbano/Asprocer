<?php
/**
 *
 *
 * @package		asprocer
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'resultado';
$subpage = '';
$type = 'page';
$title = 'Resultado de busqueda';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="headline">
    <h1>Resultado de Busqueda</h1>
</div><!-- /.headline -->
<div class="wrap">
   <div class="result__text">
       <p>Se han encontrado <strong>XX</strong> resultados para “ <strong>la busqueda aquí</strong> ”</p>
   </div><!-- /.result__text -->
    <div class="listado listado--result">
       <div class="message message__search mtop">
            <p>No se encontraron resultados para <strong>Resultado de busqueda</strong></p>
        </div><!-- /.message -->
        <div class="item__biblioteca">
            <div class="biblioteca__meta">
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
                </div><!-- /.biblioteca__buttons -->
            </div><!-- /.biblioteca--flex -->
        </div><!-- /.item__biblioteca -->
        <div class="item__biblioteca">
            <div class="biblioteca__meta">
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
                </div><!-- /.biblioteca__buttons -->
            </div><!-- /.biblioteca--flex -->
        </div><!-- /.item__biblioteca -->
        <div class="item__biblioteca">
            <div class="biblioteca__meta">
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
                </div><!-- /.biblioteca__buttons -->
            </div><!-- /.biblioteca--flex -->
        </div><!-- /.item__biblioteca -->
        <div class="item__biblioteca">
            <div class="biblioteca__meta">
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
                </div><!-- /.biblioteca__buttons -->
            </div><!-- /.biblioteca--flex -->
        </div><!-- /.item__biblioteca -->
        <div class="item__biblioteca">
            <div class="biblioteca__meta">
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