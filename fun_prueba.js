function VerConsulta(){
    var parametros  =   {
        "funcion"   :   'MuestraConsulta',
    };
    $.ajax({
		data    :   parametros, 
		type    :   "POST", 
		url     :   "./consulta.php",
		cache   :   false,
	}).done(function(respuesta){
        $('#datos').html(respuesta);
	}).fail(function(jqXHR, textStatus, errorThrown) {
        ModalError(marcadoErroresCot(jqXHR, textStatus, errorThrown));
    });
}