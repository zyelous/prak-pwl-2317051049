@extends('layouts.app')

@section('title','Edit Pengguna')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height:80vh;">
    <div class="col-md-6 col-lg-6">
        <h3 class="text-center mb-4 text-light">Edit Pengguna</h3>

        <form action="{{ route('user.update', $user->id) }}" method="POST"
              class="p-4 rounded shadow position-relative"
              style="background: rgba(0,0,0,0.55); overflow: visible; z-index: auto;">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label text-light fw-bold">Nama</label>
                <input type="text" name="nama" value="{{ old('nama', $user->nama) }}" 
                       class="form-control bg-transparent text-white border-light" required>
            </div>

            <div class="mb-3">
                <label class="form-label text-light fw-bold">NIM</label>
                <input type="text" name="nim" value="{{ old('nim', $user->nim) }}" 
                       class="form-control bg-transparent text-white border-light" required>
            </div>

            <div class="mb-3" style="position: relative; z-index: 9999; overflow: visible;">
                <label class="form-label text-light fw-bold">Kelas</label>
                <select name="kelas_id"
                        class="form-select bg-dark text-white border-light"
                        required
                        style="position: relative; z-index: 1100; overflow: visible;">
                    <option value="" disabled>Pilih Kelas</option>
                    @foreach($kelas as $k)
                        <option class="text-dark" value="{{ $k->id }}" 
                            {{ $user->kelas_id == $k->id ? 'selected' : '' }}>
                            {{ $k->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn w-100"
                    style="background-color:#de1b4f; color:white; border-radius:8px;">
                Simpan Perubahan
            </button>
        </form>
    </div>
</div>

<style>
select.form-select option {
    color: black !important;
    background-color: white !important;
}

tbody tr:hover {
    background-color: rgba(255,192,203,0.25);
    transition: 0.3s ease;
}
</style>
@endsection
