<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid bg-danger">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          @guest
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Login
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
            <li><a class="dropdown-item" href="#">Contattaci</a></li>
            <li><a class="dropdown-item" href="#">FAQ</a></li>
          </ul>
          @else
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao, {{ Auth::user()->name }}!
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Il mio profilo</a></li>
            <li><a class="dropdown-item" href="{{route('cloths.create')}}">Cloth Create</a></li>
            <li><a class="dropdown-item" href="#">Contattaci</a></li>
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button class="dropdown-item" type="submit">logout</button>
            </form>
          </ul>
          @endguest
        </li>
      </ul>
    </div>
  </div>
</nav>