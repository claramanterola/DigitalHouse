<?php
  $errorDeArchivo = "";
  $mensajeDeExito = "";
  if ($_FILES) {
    $foto = $_FILES["foto"];
    $error = $foto["error"];
    if ($error != 0) {
      $errorDeArchivo = "Hubo un error al subir el archivo";
    } else {
      $tmpName = $foto["tmp_name"];
      move_uploaded_file($tmpName, "archivos/" . $foto["name"]);
      $mensajeDeExito = "Tu archivo se subió correctamente";
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejemplo de Archivos</title>
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
    <?php if ($errorDeArchivo): ?>
      <p class="error"><?= $errorDeArchivo ?></p>
    <?php endif; ?>
      <?php if ($mensajeDeExito): ?>
        <p class="success"><?= $mensajeDeExito ?></p>
      <?php endif; ?>
    <form action="files.php" method="POST" enctype="multipart/form-data">
      <label for="nombre">Nombre</label>
      <input id="nombre" type="text" name="nombre">
      <input type="file" name="foto">
      <input type="submit" value="Subir archivo">
    </form>
  </body>
</html>
