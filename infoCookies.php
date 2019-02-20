<?php

/**
 * Plugin Name: InfoCookies
 * Plugin URI: http://www.droca.es
 * Description: Plugin para mostrar que la web posee cookies.
 * Version: 1.0
 * Author: Daniel Roca
 * License: MIT
 */

$texto = "En nuestra página poseemos una galleta muy ricas, pero para poder comerlas primero debes de ACEPTAR.";


function ini_infoCookies()
{
    global $texto; //RECORDAD que con global hacemos uso de variables declaradas fuera del ámbito de la función
    if (get_option('texto')) {
        $texto = get_option('texto');
    }
}

add_action("admin_init", "ini_infoCookies");



function add_config_menu(){

    add_menu_page(
        'Modificar valores de InfoCookies', //Título de la página
        'InfoCookies', //Título del menú
        'administrator', //Rol del que puede acceder
        'anadir_soporte_settings', //Id de la página
        'form_menu_infoCookies', //Función que representa la página
        'dashicons-admin-tools'); //Icono
}

add_action("admin_menu", "add_config_menu");

function form_menu_infoCookies(){

    global $texto;

    wp_enqueue_style('estilos_admin', plugins_url('css/infoCookies.css',
        __FILE__));

    ?>

    <div id="opciones">
        <h2>Texto a modificar.</h2>
        <form method="POST" action="options.php">
            <?php
            settings_fields('text');
            do_settings_sections('text');
            ?>
            <div>
                <label>Texto para mostrar</label>
                <input type="text" name="texto" id="texto" value="<?php echo
                get_option('texto'); ?>"/>
            </div>
            <?php submit_button(); ?>
        </form>
    </div>

    <?php

}

function add_soporte_settings(){

    register_setting('text','texto');
}

add_action("admin_init", "add_soporte_settings");

include 'showModal.php';