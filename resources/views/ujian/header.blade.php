<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">MyApp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('main') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('nama') }}">Deskripsi Nama</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('prodi') }}">Deskripsi Prodi</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('asal') }}">Deskripsi Daerah</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('angkatan') }}">Deskripsi Angkatan</a></li>
            </ul>
        </div>
    </div>
</nav>