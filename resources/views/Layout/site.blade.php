<html>

<head>
  <title>shop.ly</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-dark bg-dark navbar-expand-lg mb-5">
    <div class="navbar-brand">
      <img src="logo.png" alt="" height="68px">
      <span>OnlineStore.ly</span>
    </div>

    <button class="navbar-toggler" data-toggle="collapse" data-target="#myNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="myNav" class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a href="/" class="nav-link" >Home</a>
        </li>
        <li class="nav-item">
          <a href="/" class="nav-link">Products</a>
        </li>
        @guest
        <li class="nav-item">
          <a href="{{ route('register') }}" class="nav-link">Register</a>
        </li>
  
        <li class="nav-item">
          <a href="{{ route('login') }}" class="nav-link">Login</a>
        </li>
      
        @else
  
        <li class="nav-item"><a href=""class="nav-link">{{Auth::user()->name}}</a></li>
        <li class="nav-item">
          <a href="{{ route('logout') }}" class="nav-link">Logout</a>
        </li>
        </ul>
        @endguest
        </ul>
    
    </div>
  </nav>
    @yield('content')

  <footer class="py-5 bg-dark">
    <p class="text-center text-muted">online-store.ly</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>
