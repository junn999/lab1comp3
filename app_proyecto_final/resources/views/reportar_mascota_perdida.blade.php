<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mascota_perdida.css">
    <title>Reporte mascota perdida</title>
</head>
<body>
    <H1>Reportar mascota perdida.</H1>

    <p>Completa el formulario con los datos de tu mascota para ayudarte a encontrarla.</p>

    <form action="" name="" method="POST">
      <table border="0" align="center">

        <tr>
          <td>
            Nombre:
          </td>
          <td>
            <label for="nombre"></label>
            <input type="text" name="nombre" id="nombre" required  />
          </td>
        </tr>

        <tr>
          <td>
            Color:
          </td>
          <td>
            <label for="color"></label>
            <input type="text" name="color" id="color" required  />
          </td>
        </tr>

        <tr>
          <td>
            Sexo:
          </td>
          <td>
            <label for="sexo"></label>
            <input type="text" name="sexo" id="sexo"  required />
          </td>
        </tr>

        <tr>
          <td>
            Raza:
          </td>
          <td>
            <label for="raza"></label>
            <input type="text" name="raza" id="raza"  required />
          </td>
        </tr>

        <tr>
          <td>
            Tipo de mascota:
          </td>
          <td>
            <label for="tipo_mascota"></label>
            <input type="text" name="tipo_mascota" id="tipo_mascota"  required />
          </td>
        </tr>

        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>

        <tr>
          <td align="center">
            <input type="submit" name="enviar" id="enviar" value="Enviar"/>
          </td>
        </tr>

      </table>
    </form>


</body>
</html>