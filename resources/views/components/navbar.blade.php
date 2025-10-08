<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            ☰
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="{{ route('user.create') }}" class="nav-link text-white">Tambah User</a></li>
                <li class="nav-item"><a href="{{ route('user.index') }}" class="nav-link text-white">Daftar User</a></li>
                <li class="nav-item"><a href="{{ route('matakuliah.create') }}" class="nav-link text-white">Tambah Mata Kuliah</a></li>
                <li class="nav-item"><a href="{{ route('matakuliah.index') }}" class="nav-link text-white">Daftar Mata Kuliah</a></li>


            </ul>
        </div>
    </div>
</nav>
