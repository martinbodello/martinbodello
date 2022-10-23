jQuery(document).ready(function () {
    clienteoproveedor();

    $('#usuario-tipo').on('change', function () {
        clienteoproveedor();
    });

    function clienteoproveedor() {
        if ($('#usuario-tipo').val() == 'cliente') {
            $('#cliente').show();
            $('#proveedor').hide();
        }
        else if ($('#usuario-tipo').val() == 'proveedor') {
            $('#cliente').hide();
            $('#proveedor').show();
        }
        else {
            $('#cliente').hide();
            $('#proveedor').hide();
        }
    }
});