@extends('layouts.app')

@section('title','Tambah Pengguna')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height:80vh;">
    <div class="col-md-6 col-lg-6">
        <h3 class="text-center mb-4 text-light">Buat Pengguna Baru</h3>

        <form action="{{ route('user.store') }}" method="POST" 
              class="p-4 rounded shadow" 
              style="background: rgba(0,0,0,0.5);">
            @csrf
            <div class="mb-3">
                <label class="form-label text-light fw-bold">Nama</label>
                <input type="text" name="nama" class="form-control bg-transparent text-white border-light" required>
            </div>
            <div class="mb-3">
                <label class="form-label text-light fw-bold">NIM</label>
                <input type="text" name="nim" class="form-control bg-transparent text-white border-light" required>
            </div>
            <div class="mb-3">
                <label class="form-label text-light fw-bold">Kelas</label>
                <select name="kelas_id" class="form-select bg-transparent text-white border-light custom-select-white" required>
                    <option value="" disabled selected hidden></option>
                    @foreach($kelas as $k)
                        <option class="text-dark" value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn w-100" 
                    style="background-color:#de1b4f; color:white; border-radius:8px;">
                Submit
            </button>
        </form>
    </div>
</div>
@endsection
<style>
    .custom-select-white option[disabled] {
        color: #aaa;
    }

    .custom-select-white {
        color: white;
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='white'%3E%3Cpath d='M3.204 5.5L8 10.293l4.796-4.793.708.707L8 11.707l-5.504-5.5z'/%3E%3C/svg%3E") !important;
        background-repeat: no-repeat;
        background-position: right 0.75rem center;
        background-size: 16px 12px;
    }
</style>
