<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container">
        <a class="navbar-brand text-white fw-bold" href="#">MyApp</a>
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            ☰
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="{{ route('user.index') }}" class="nav-link text-white">Users</a></li>
                <li class="nav-item"><a href="{{ route('user.create') }}" class="nav-link text-white">Tambah User</a></li>
            </ul>
        </div>
    </div>
</nav>
