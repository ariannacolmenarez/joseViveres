function validacion(tipo,titulo,texto){
    Swal.fire({
        icon: tipo,
        title: titulo,
        text: texto,
      })
}

$("#submit").on("click", function(){
    if($("#usuario").val() == null || $("#usuario").val() == ""){
        $("#usuario").focus();
        validacion("error","Error","Ingresa el nombre de usuario")  
        return false;
    }
    if($("#password").val()==null || $("#password").val()==""){
        $("#password").focus();
        validacion("error","Error","Ingresa la contraseña")   
        return false;
    }
   $('#form').submit();  
   return true;
});