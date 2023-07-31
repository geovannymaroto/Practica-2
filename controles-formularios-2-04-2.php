<?php
/**
 * Controles en formularios (2) 4-2 - controles-formularios-2-04-2.php
 *
 * @author Viviana Alvarez
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Datos personales 4 (Resultado).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" title="Color">
</head>

<body>
  <h1>Datos personales 4 (Resultado)</h1>


Su correo es:

<?php

echo htmlspecialchars($_GET['correo']);

?>

<p></p>

Su correo ha sido verificado

<p></p>

Recibirá correos de nosotros?:

<?php

echo htmlspecialchars($_GET['recibir']);

?>


  <p><a href="controles-formularios-2-04-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Viviana Alvarez Solano</p>
  </footer>
</body>
</html>
