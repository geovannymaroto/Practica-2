<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Datos personales 4 (Formulario).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" title="Color">
</head>

<body>
  <h1>Datos personales 4 (Formulario)</h1>

  <form action="controles-formularios-2-04-2.php" method="GET">
    <p><label>Indique su dirección de correo: <input type="email" name="correo" size="40"></label></p>

    <p><label>Confirme su dirección de correo: <input type="email" name="correo2" size="40"></label></p>

    <p>
      Indique si quiere recibir correos nuestros:
      <select name="recibir">
        <option value="-1">...</option>
        <option value="Si">Sí</option>
        <option value="No">No</option>
      </select>
    </p>

    <p>
      <input type="submit" value="Enviar">
      <input type="reset" value="Borrar">
    </p>
  </form>

  <?php

  if ( isset($_GET ['correo'])) {

    $correo = $_GET['correo'];
    echo $correo;

  }
 
  ?>

<?php

if ( isset($_GET ['recibir'])) {

  $correo = $_GET['recibir'];
  echo $correo;

}

?>


  <footer>
    <p>Viviana Alvarez Solano</p>
  </footer>
</body>
</html>
