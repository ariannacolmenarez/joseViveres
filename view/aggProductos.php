<!-- modal venta -->

<div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel4" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-fullscreen w-100">
              <div class="modal-header text-center">
                <h5 class="modal-title fs-5 display-6 fw-bold" id="exampleModalToggleLabel4">Agregar productos </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              <div class="row ">
                <div class="display-img-vid-con">
                  <div class=" mx-auto" style="width: 8rem;">
                    <img src="" id="preview-img" class="card-img-top" >
                  </div>
                </div>
                <h5 class="mt-2">Elige una imagen</h5>
                <div class="input-group mb-3">
                  <input type="file" placeholder="Elige una imagen" class="form-control" accept="image/*" name="img-vid" id="inp-img-vid">
                </div>
                <h5 class="mt-2">Nombre del producto *</h5>
                <div class="input-group mt-1">
                  <input type="text" class="form-control" placeholder="Ej: Azucar Montalvan">
                </div>
                <h5 class="mt-3">Codigo del producto *</h5>
                <div class="input-group mt-1">
                  <input type="text" class="form-control" placeholder="Ej: 00001">
                </div>
                <h5 class="mt-3">Cantidad disponible *</h5>
                <div class="input-group mb-3">
                  <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fa-solid fa-circle-minus"></i></button>
                  <input type="text" class="form-control text-center" placeholder="0" aria-label="Example text with button addon" aria-describedby="button-addon1">
                  <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa-solid fa-circle-plus"></i></button>
                </div>
                <h5 class="mt-3">Costo Unitario del producto *</h5>
                <div class="input-group ">
                  <input type="text" class="form-control" placeholder="Ej: 1000">
                </div>
                <h5 class="mt-3">Precio del producto *</h5>
                <div class="input-group ">
                  <input type="text" class="form-control" placeholder="Ej: 2000">
                </div>
                <div class="mt-2 form-group ">
                      <h5>Busca una categoría </h5>
                      <select class="form-select  mb-3 shadow-none" aria-label=".form-select example">
                          <option selected >Sin categoría</option>
                          <option value="1">víveres</option>
                          <option value="2">charcutería</option>
                          <option value="3">Limpieza</option>
                      </select>
                  </div>
                  <h5>Descripción <small>(opcional)</small></h5>
                <div class="input-group mt-2">
                  <textarea class="form-control" placeholder="Ingresa una descripción" id="floatingTextarea2" style="height: 100px"></textarea>
                </div>
                <div class="d-grid gap-2 d-md-block w-100 mt-5">
                  <button class="btn btn-warning w-100" type="button">Agregar producto</button>
                </div>
              </div>
            </div>
          </div>
        </div>
              <!-- modal ends -->
              <script>
                $("#inp-img-vid").change(function() {
   imgPreview(this);
  });
  function imgPreview(input) {
    var file = input.files[0];
    var mixedfile = file['type'].split("/");
    var filetype = mixedfile[0]; // (image, video)
    if(filetype == "image"){
      var reader = new FileReader();
      reader.onload = function(e){
        $("#preview-img").show().attr("src", e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }else if(filetype == "video"){
      $("#preview-vid").show().attr("src", URL.createObjectURL(input.files[0]));
      $("#videoPlayer")[0].load();
    }else{
        alert("Invalid file type");
    }
  }
              </script>