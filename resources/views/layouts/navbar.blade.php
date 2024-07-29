<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Bostrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo')</title>
  </head>
  <body> 

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">✠</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/contact')}}">Contado</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/register')}}">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/recover')}}">Recover</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/login')}}">Login</a>
          </li>

          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            link Controler
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('app/generate')}}">Generate</a></li>
            <li><a class="dropdown-item" href="{{url('app/remove')}}">Remove</a></li>
            <!-- <li><a class="dropdown-item" href="{{url('app/list')}}">List</a></li> -->
          </ul>
        </li>

        </ul>
      </div>
    </div>
  </nav>

    @yield('conteudo')

    
    <!-- jQuery (necessário para o JavaScript do Bootstrap) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <!-- Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  </body>

</html>