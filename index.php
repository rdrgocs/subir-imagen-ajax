<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Subir archivo </title>
    <script src="jquery/jquery-3.5.0.min.js" type="text/javascript" ></script>
    <script src="jquery/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="jquery/jquery-ui.min.js" type="text/javascript"></script>
  </head>
  <body>
    <h1>PRUEBA PARA FORMULARIO CON ARCHIVO</h1>
    <form id="formulario-envia" name="formulario-envia" enctype="multipart/form-data" method="POST">
        <div>
            <input type="text" name="nombreProducto" id="nombreProducto" placeholder="Nombre">
        </div>
        <br>
        <div >
            <input type="text" name="descripcionProducto" id="descripcionProducto" placeholder="Descripción">
        </div>
        <br>
        <div class="">
            <input type="number" name="precioProducto" id="precioProducto" placeholder="Precio">
        </div>
        <br>
        <div >
            <input type="text" name="categoriaProducto" id="categoriaProducto" placeholder="Categoria">
        </div>
        <br>
        <div class="">
            <input type="text" name="estadoProducto" id="estadoProducto" placeholder="Estado">
        </div>
        <br>
        <div class="">
            <input type="file" name="imagenProducto" id="imagenProducto">
        </div>
        <br>
        <button type="submit" name="btn" value="Guardar" onclick="registra_producto();">Guardar</button>
    </form>


    <script src="js/funciones.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  </body>
  <script>

  function registra_producto(){

    var parametros = new FormData($("#formulario-envia")[0]);

    $.ajax({
      data: parametros,
      url: "ajax/insertar_producto.php",
      type: "POST",
      contentType: false,
      processData: false,
      success: function(data){
          alert('agregado');

      }
    });


  }

  </script>
</html>
