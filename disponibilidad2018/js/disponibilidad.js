$(document).ready(function() {
    $('#ik').change(function(){
        $('#ikx').html('<div style="text-align: center; padding-top:40px">Nc Travel Cusco Cargando ...</div>');
        var valor = ($(this).val());
        var fec   = valor.split('@');
        var anho  = fec[0];
        var mes   = fec[1];
        var params={ 'anho':anho, 'mes':mes };
        $.ajax({
            url  : 'disponibilidad2018/amf/modulo.php',
            type : 'POST',
            data : params
        }).done (function (data) {
            $('#ikx').html(data);
        });
    });
});
