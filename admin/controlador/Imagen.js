window.onload=function(){

  var modal = document.getElementById('id01');

  window.onclick = function(event){
    if(event.target == modal){
      modal.style.display = "none";
    }
  }
//Subir Imagen
function subirImg(){
    var img = $('#imgCat').files[0];
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
}
//Fin Subir Imagen
