

(function() {
    var startingTime = new Date().getTime();
    // Load the script
    var script = document.createElement("SCRIPT");
    script.src = 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js';
    script.type = 'text/javascript';
    document.getElementsByTagName("head")[0].appendChild(script);

    // Poll for jQuery to come into existance
    var checkReady = function(callback) {
        if (window.jQuery) {
            callback(jQuery);
        }
        else {
            window.setTimeout(function() { checkReady(callback); }, 20);
        }
    };

    // Start polling...
    checkReady(function($) {
        $(function() {
            var endingTime = new Date().getTime();
            var tookTime = endingTime - startingTime;
            ini();

        });
    });
})();

function ini(){


    $('footer').append('<div style="height: 10vh;" id="infoCookies" class="alert alert-dark" role="alert">\n' +
        '  La web posee cookies, dale a aceptar para seguir navegando por la web.' + '<a href="#" id="btnNoAceptar" style="float: right;" class="btn btn-danger">No aceptar</a>' + '<a href="#" id="btnAceptar" style="float: right;" class="btn btn-success">Aceptar</a>\n' +
        '</div>');

    $('#btnAceptar').on('click', function () {
        $('#infoCookies').remove();
    })

    $('#btnNoAceptar').on('click', function () {
        window.location.href = "https://www.google.es";
    })


}

