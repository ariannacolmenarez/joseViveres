$(document).ready(function() {

    $("#form").validate({
        rules: {
        nombrep : {
            required: true,
            minlength: 5,
            maxlength: 50
        },
        costop: {
            required: true,
            number: true
        },
        preciop: {
            required: true,
            number: true
        },
        catprod: {
            required: true
        },
        descripcionp: {
            minlength: 5,
            maxlength: 150
        }
        },
        messages : {
        nombrep: {
            required: "El nombre es requerido",
            minlength: "El nombre debe contener mas de 5 carácteres Alfanuméricos"
        },
        catprod: {
            required: "La selección de la categoria es requerida",
        },
        costop: {
            required: "El precio costo es requerido",
            number: "El precio costo  debe tener un formato numérico"
        },
        preciop: {
            required: "El precio de venta es requerido",
            number: "El precio de venta  debe tener un formato numérico"
        },
        descripcionp: {
            minlength: "La descripción debe contener mas de 5 carácteres Alfanuméricos"
        },
        },
        errorElement : 'span'
    });
      
    $("#form2").validate({
        rules: {
        nombrep : {
            required: true,
            minlength: 5,
            maxlength: 50
        },
        costop: {
            required: true,
            number: true
        },
        preciop: {
            required: true,
            number: true
        },
        catprod: {
            required: true
        },
        descripcionp: {
            minlength: 5,
            maxlength: 150
        }
        },
        messages : {
        nombrep: {
            required: "El nombre es requerido",
            minlength: "El nombre debe contener mas de 5 carácteres Alfanuméricos"
        },
        catprod: {
            required: "La selección de la categoria es requerida",
        },
        costop: {
            required: "El precio costo es requerido",
            number: "El precio costo  debe tener un formato numérico"
        },
        preciop: {
            required: "El precio de venta es requerido",
            number: "El precio de venta  debe tener un formato numérico"
        },
        descripcionp: {
            minlength: "La descripción debe contener mas de 5 carácteres Alfanuméricos"
        },
        },
        errorElement : 'span'
    });
});


var toastMixin = Swal.mixin({
    toast: true,
    icon: 'success',
    title: 'General Title',
    animation: false,
    position: 'top-right',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});
function validacion(tipo,titulo,texto){
    Swal.fire({
        icon: tipo,
        title: titulo,
        text: texto,
      })
}

function aggProd(){
    listarcatProd();
    $('#exampleModalToggle4').modal('show');
        $("#inp-img-vid").change(function() {
            imgPreview(this,"#preview-img");
        });
}

function limpiar(){
    $('input').val("");
    $('select').val("");
    $('textarea').val("");
};

$("button[name=close]").on("click",function() {
    limpiar();
    $("#preview-img").show().attr("src", "");
    $("#preview-imgE").show().attr("src", "");
})

function listarcatProd(){
    
    $.get("productos/listarCat", {}, function (data, status) {
        $("#cat_prod").html(data);
        $("#cat_prodE").html(data);
    });
};

$("#plus").on("click",function() {
    if($("#cantidadp").val()=="" ){
        var input = 0
    }else{
        input = $("#cantidadp").val();
    }
    $("#cantidadp").val(parseFloat(input)+1);
});

$("#minus").on("click",function() {
    if($("#cantidadp").val() < 1 || $("#cantidadp").val() == "" ){
        var input = 1;
    }else{
        input = $("#cantidadp").val();
    }
    $("#cantidadp").val(parseFloat(input)-1);
})

function imgPreview(input,id) {
     var file = input.files[0];
     var mixedfile = file['type'].split("/");
     var filetype = mixedfile[0]; // (image, video)
     if(filetype == "image"){
       var reader = new FileReader();
       reader.onload = function(e){
         $(id).show().attr("src", e.target.result);
       }
       reader.readAsDataURL(input.files[0]);
     }else{
         validacion("error","Error","Invalid file type");
     }
}

function registrarProducto(){

    var formData = new FormData();
        var files = $('#inp-img-vid')[0].files[0];
        formData.append('file',files);
        formData.append('descripcion' , $("#descripcionp").val());
        formData.append('categoria' , $("#cat_prod").val());
        formData.append('precio' ,$("#preciop").val());
        formData.append('costo', $("#costop").val());
        formData.append('cantidad' , $("#cantidadp").val());
        formData.append('nombre' , $("#nombrep").val());

        if ($('#form').valid()) {
            $.ajax({

                cache: false,
                contentType: false,
                data: formData,
                enctype: 'multipart/form-data',
                processData: false,
                method: "POST",
                url: "productos/registrar",
                success: function (response) {
                    if(response !== "true"){
                        $('#exampleModalToggle4').modal('hide');
                        validacion("error","Duplicado","El nombre del producto esta duplicado");
                        limpiar();
                    }else{
                        listarInventario("");
                        $("#preview-img").show().attr("src", "");
                        $('#exampleModalToggle4').modal('hide');
                        toastMixin.fire({
                            animation: true,
                            title: 'Producto Registrado'
                        });
                        limpiar();
                    }
                },
                error: (response) => {
                    console.log(response);
                }

            })
        } else {
            validacion("error","Error","Rellena los campos correctamente");
        }
        
}

function editarProducto(id){
    listarcatProd();
    consultarProductos(id);
    $('#editarProd').modal('show');
    $("#inp-img-vidE").change(function() {
        imgPreview(this,"#preview-imgE");
    });
}

function consultarProductos(id){
    $.ajax({
        type: "POST",
        url: "productos/consultar/"+id,
        dataType: "json",
        success: function (response) {
            
            response.map( function (elem) {
                $("#idE").val(elem.id);
                $("#nombreE").val(elem.nombre);
                $("#cantidadE").val(elem.cantidad);
                $("#costoE").val(elem.costo);
                $("#precioE").val(elem.precio);
                $("#descripcionE").val(elem.descripcion);
                $("#cat_prodE").val(elem.categoria);
                $("#preview-imgE").attr("src",elem.url_img);
            });
            
        },
        error: (response) => {
            console.log(response);
        }
    });
    
}

function guardarProducto(){
    var formData = new FormData();
        var files = $('#inp-img-vidE')[0].files[0];
        if (files != undefined) {
            formData.append('file',files);
        }
        formData.append('descripcion' , $("#descripcionE").val());
        formData.append('categoria' , $("#cat_prodE").val());
        formData.append('precio' ,$("#precioE").val());
        formData.append('costo', $("#costoE").val());
        formData.append('cantidad' , $("#cantidadE").val());
        formData.append('nombre' , $("#nombreE").val());
        formData.append('id' , $("#idE").val());
        
        if ($('#form2').valid()) {
            $.ajax({

                cache: false,
                contentType: false,
                data: formData,
                enctype: 'multipart/form-data',
                processData: false,
                method: "POST",
                url: "productos/guardar",
                success: function (data) {
                    $('#editarProd').modal('hide');
                    toastMixin.fire({
                        animation: true,
                        title: 'Producto Modificado'
                    });
                    limpiar();
                    window.location.reload();
                }

            });
        } else {
            validacion("error","Error","Rellena los campos correctamente");
        }
}

$("#plusE").on("click",function() {
    if($("#cantidadE").val()=="" ){
        var input = 0
    }else{
        input = $("#cantidadE").val();
    }
    $("#cantidadE").val(parseFloat(input)+1);
});

$("#minusE").on("click",function() {
    if($("#cantidadE").val() < 1 || $("#cantidadE").val() == "" ){
        var input = 1;
    }else{
        input = $("#cantidadE").val();
    }
    $("#cantidadE").val(parseFloat(input)-1);
})

function eliminarProducto(){
    var id = $("#idE").val();
    var parametro = {"id" : id};

    Swal.fire({
        title: '¿Estas seguro que deseas Eliminar el registro?',
        ico: "warning",
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Eliminar',
        denyButtonText: `No Eliminar`,
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                data:  parametro, //datos que se envian a traves de ajax
                url:   'productos/eliminar', //archivo que recibe la peticion
                type:  'POST', //método de envio
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                    $('#editarProd').modal('hide');
                    toastMixin.fire({
                        animation: true,
                        title: 'Producto Eliminado'
                    });
                    window.location.reload();
                },
                error: (response) => {
                    console.log(response);
                }
            });
        } else if (result.isDenied) {
            Swal.fire('Los cambios no fueron guardados', '', 'info')
        }
    })
}

    

