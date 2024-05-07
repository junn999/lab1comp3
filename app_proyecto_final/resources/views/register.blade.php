<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="register.css">
    <title>Register</title>

  </head>
  <body>
    <h1>Registro</h1>
    <form action="" name="" method="POST">
      <table border="0" align="center">

        <tr>
          <td>
            Nombre:
          </td>
          <td>
            <label for="name"></label>
            <input type="text" name="nombre" id="name" required  />
          </td>
        </tr>

        <tr>
          <td>
            Nombre de Usuario:
          </td>
          <td>
            <label for="user"></label>
            <input type="text" name="usuario" id="user" required  />
          </td>
        </tr>

        <tr>
          <td>
            Contraseña:
          </td>
          <td>
            <label for="password"></label>
            <input type="password" name="contraseña" id="password"  required />
          </td>
        </tr>

        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>

        <tr>
          <td align="center">
            <input type="submit" name="enviar" id="enviar" value="Registrarse"/>
          </td>

          <td align="center">
            <input type="reset" name="borrar" id="borrar" value="Restablecer" />
          </td>
        </tr>

      </table>
    </form>
  </body>
</html>