//Subir Imagen
function subirImg(){
    var img = $('#imgCat').prop('files')[0];
    var formData = new FormData();
    formData.append("fileToUpload", img);

    $.ajax({
      url: "uploadImg.php",
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function(response){
        console.log("Imagen subida correctamente")
      },
      error: function(jqXHR, textStatus, errorMessage){
        console.log(errorMessage);
      }
      });
  }
//Fin Subir Imagen
function btn_guardar_dato()
{

	 var nombre = $("#nombre").val();
	 var Categoria = $("#Categoria").val();
     var Imagen = $("#imgCat").val();
	 var ob = {nombre:nombre, Categoria:Categoria};
     subirImg();
	 $.ajax({
                type: "POST",
                url:"../modelo/modelo_registrar_datos.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                {

                 $("#panel_respuesta").html(data);
                 btn_listar_datos();

                 setTimeout(function(){
                  $("#panel_respuesta").html("");
                 },2000);
                 
                }
             });
     
}

function btn_listar_datos()
{
     var ob = "";

     $.ajax({
                type: "POST",
                url:"../modelo/modelo_listar_datos.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                 $("#panel_listado").html(data);

                }
             });
}

function btn_editar(Id)
{
     var ob = {Id:Id};

     $.ajax({
                type: "POST",
                url:"../vista/vista_editar_datos.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                 $("#panel_editar").html(data);

                }
             });
}

function btn_guardar_edicion()
{    
     var Id = $("#Id").val();
     var nombre = $("#New_nombre").val();
     var Categoria = $("#New_Categoria").val();
     var Imagen = $("#New_Imagen").val();

     //alert("Datos Nuevos: "+nombre+" - "+Categoria+" - "+Imagen);

     var ob = {nombre:nombre, Categoria:Categoria, Imagen:Imagen,Id:Id};

     $.ajax({
                type: "POST",
                url:"../modelo/modelo_guardar_datos.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                 $("#panel_respuesta_edicion").html(data);
                 //btn_listar_datos();

                 setTimeout(function(){
                  $("#panel_respuesta_edicion").html("");
                 },2000);

                 setTimeout(function(){
                  $("#myModal_editar").modal("hide").fadeIn("slow");
                 },2500);

                 setTimeout(function(){
                  btn_listar_datos();
                 },3000);
                

                }
             });
}


function btn_eliminar(Id)
{
     var ob = {Id:Id};

     $.ajax({
                type: "POST",
                url:"../vista/vista_eliminar_datos.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                $("#panel_eliminar").html(data);
                 //btn_listar_datos();

                 setTimeout(function(){
                  $("#panel_eliminar").html("");
                 },2000);

                 setTimeout(function(){
                  $("#myModal_eliminar").modal("hide").fadeIn("slow");
                 },2500);

                 setTimeout(function(){
                  btn_listar_datos();
                 },3000);
                

                }


             });
}


