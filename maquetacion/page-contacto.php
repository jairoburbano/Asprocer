<?php
/**
 *
 *
 * @package		asprocer
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'contacto';
$subpage = '';
$type = 'page';
$title = 'Contacto';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="headline">
    <h1>Contacto</h1>
</div><!-- /.headline -->
<div class="wrap wrap__contact">
    <div class="bajada">
        <p>
            Si tiene alguna duda o sugerencia, no dude en escribirnos.
        </p>
    </div><!-- /.bajada -->
    <form action="" class="formulario form--contacto">
        <div class="column">
            <div class="input-group group">
                <label for="username">Nombre:</label>
                <input type="text" name="username" id="username">
            </div><!-- /.input-group group -->
            <div class="input-group group">
                <label for="email">Correo:</label>
                <input type="email" name="email" id="email">
            </div><!-- /.input-group group -->
        </div><!-- /.column -->
        <div class="column">
            <div class="textarea-group group">
                <label for="message">Mensaje:</label>
                <textarea name="message" id="message"></textarea>
            </div><!-- /.textarea-group group -->
            <div class="send-group">
                <input type="submit" class="btn btn--border" value="Enviar">
            </div><!-- /.send-group -->
            <div class="loader">
                <img src="img/spin.svg" alt="Loader">
            </div><!-- /.loader -->
        </div><!-- /.column -->
    </form><!-- /.formulario form--contacto -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>