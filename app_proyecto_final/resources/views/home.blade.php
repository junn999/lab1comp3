<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home_view.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>

    <header>
        <ul class="nav nav-underline justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/reportar_mascota_perdida') }}">Reportar mascota perdida</a>
  </li>
 <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" 
    role="button" aria-expanded="false">More</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Action</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Separated link</a></li>
    </ul>
  </li>

  <nav class="navbar">
  <div class="container-fluid">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
    </header>




    <div>
        <h1>¡Bienvenido a Patitas Felices!</h1>

        <p>Nuestra página es para ayudarte a encontrar tu mascota perdida</p>
        <div align='center'>
            <img alighn src="https://media1.tenor.com/images/d81bd3d44d6dbdff0a87862aa42bcc6b/tenor.gif?itemid=4780096" width="300" height="200">
        </div>
    </div>

    <header>
        <footer>
            <h4>Made with much ❤</h4>
            <a href="{{ url('/about') }}">Ir a About</a>
            
            <a href="{{ url('/reportar_mascota_perdida') }}">Reportar mascota perdida</a>
        </footer>
    </header>
</body>
</html>