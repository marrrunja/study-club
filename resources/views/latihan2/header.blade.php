<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('daftar') }}">Daftar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>