<?php
  require_once("../conexion/conexion.php");

  $nombre = $_POST['nombreProducto'];
  $descripcion = $_POST['descripcionProducto'];
  $precio = $_POST['precioProducto'];
  $categoria = $_POST['categoriaProducto'];
  $estado = $_POST['estadoProducto'];
  $nombre_imagen = $_FILES['imagenProducto'];

  if($nombre_imagen["type"] == "image/jpg" or $nombre_imagen["type"] == "image/png" or $nombre_imagen["type"] == "image/jpeg"){
      $nombre_temporal = md5($nombre_imagen["tmp_name"]);
      $ruta = "../archivos/".$nombre_temporal.".jpg";
      move_uploaded_file($nombre_imagen["tmp_name"],$ruta);
      $sql = "INSERT INTO producto VALUES ('$nombre','$descripcion',$precio,'$categoria',$estado,'$nombre_temporal')";
      $resultado = $conexion->query($sql);

  }


?>
