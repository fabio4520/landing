<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smart Fit</title>
</head>
<body>
  <form action="validatorForm.php" method="post">
    <select name="options">
      <option value=""></option>
      <option value="name">Nombre completo</option>
      <option value="dni">DNI/CE</option>
      <option value="mail">Correo</option>
    </select>
    <br>
    <input type="text" name="answer" id="" require>
    <br>

    <input type="checkbox" name="authorize" id="" require>Autorizo a Smart Fit para el uso de <a href="assets/pdf/Solicitud original.pdf" download>tratamiento de datos</a> y acepto los <a href="assets/pdf/Solicitud original.pdf" download>términos y condiciones</a> del beneficio.
    <br>
    
    <input type="submit" name="Enviar" value="Generar mi cupón">
  </form>
</body>
</html>