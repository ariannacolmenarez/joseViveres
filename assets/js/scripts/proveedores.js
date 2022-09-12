$("#proveedores").on("click", function(e){
    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "proveedores",
        dataType: "json",
        success: function (response) {
            //   console.log(products);
            //   var b = JSON.parse(JSON.stringify(products));
             let json = JSON.parse(JSON.stringify(response));
             console.log(json.data);

            // $('#cod_dep').children().remove();

            // $('#cod_dep').append($('<option>', {
            //     value: json.data.codigo_dependencia,
            //     text: json.data.dependencia
            // }));
            


        },
        error: (response) => {
            console.log(response);
        }
    });
})

function guardarProveedor(){
    console.log("guardar");
    var parametros = {
        "valorCaja1" : "valorCaja1",
        "valorCaja2" : "valorCaja2"
};
    $.ajax({
        data:  parametros, //datos que se envian a traves de ajax
        url:   'proveedores/guardar', //archivo que recibe la peticion
        type:  'post', //método de envio
        beforeSend: function () {
                console.log("Procesando, espere por favor...");
        },
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                console.log(response);
        }
});
}
