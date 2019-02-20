<?php

function scripts_lightbox()
{
    wp_register_script('lightboxJS', plugin_dir_url(__FILE__) .
        'js/lightboxsimple.js', array('jquery'), false, true);
    wp_enqueue_script('lightboxJS');
}

add_action('wp_enqueue_scripts', 'scripts_lightbox');


function showModal(){

    ?>

    <!-- Botón de apertura -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
        Abrir ventana con texto
    </button>

    <!-- Ventana Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Mi ventana Modal</h4>
                </div>
                <div class="modal-body">
                    <p>Aquí puedes poner un <strong>video de YouTube</strong>, un mapa de <strong>Google Maps</strong> o
                        cualquier texto necesario como por ejemplo, textos legales o informativos sobre productos y/o
                        servicios con sus respectivas imagenes.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <?php

}