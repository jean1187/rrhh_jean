$(document).ready(function() {
    var botones_iconos={ "show_button" : "ui-icon-search", 
			 "add_button" : "ui-icon-plusthick",
			 "del_button":"ui-icon-closethick",
			 "edit_button":"ui-icon-pencil"};
    /*
     * Se le agregara un icono a cada boton  de jquery_ui, solo basta que en mi vista tenga la clase adecuada para el boton de acuerdo a los indices que tiene el siguiente array
     */
    $.each(botones_iconos,function(key, valor){
        $("."+key).button({
            text: false,
            icons: {
                    primary: valor
            }
        });
    });//fin each
    //para que no haya tanta separacion en los botones
    $(".toolbar a").css("margin","0 0");

   //cada vez que haga una validation ajax llamo a esta funcion y se encargara de mostrar los mensajes de error por cada campo o el de exito si todo paso bien
    function mesages_validation(data)
    {    alert("")

       
    }
    
    
});//fin $(document).ready(function() {

    //inicio mesages_validation
    jQuery.mesages_validation = function(data) {
        if(data.code)
            $.achtung({message: 'El dato fue guardado', timeout:5});
        else
        $.each(data.msg,function(key,val){
            $.achtung({message: 'Campo \"'+key+"\" : "+val, timeout:5});
        });
        return data.code;
    };
