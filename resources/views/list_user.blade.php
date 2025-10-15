@extends('layouts.app')

@section('title','Daftar Pengguna')

@section('content')
<div class="container mt-5 mb-5">
    <h1 class="text-center mb-4 fw-bold text-dark">Daftar Pengguna</h1>

    {{-- Notifikasi --}}
    @if (session('success'))
        <div class="alert alert-success text-center shadow-sm">{{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger text-center shadow-sm">{{ session('error') }}</div>
    @endif



    {{-- Tabel --}}
    <div class="table-responsive" style="max-width: 900px; margin: 0 auto;">
        <table class="table text-center align-middle"
               style="
                    background-color: rgba(255, 255, 255, 0.15);
                    backdrop-filter: blur(8px);
                    border: 2px solid rgba(255,105,135,0.5);
                    border-radius: 12px;
                    border-collapse: collapse;
                    color: #2b2b2b;
               ">
            <thead style="background-color: rgba(255,182,193,0.4); color: #4b000f;">
                <tr>
                    <th style="border: 1px solid rgba(255,182,193,0.4);">ID</th>
                    <th style="border: 1px solid rgba(255,182,193,0.4);">Nama</th>
                    <th style="border: 1px solid rgba(255,182,193,0.4);">NIM</th>
                    <th style="border: 1px solid rgba(255,182,193,0.4);">Kelas</th>
                    <th style="border: 1px solid rgba(255,182,193,0.4);">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td style="border: 1px solid rgba(255,182,193,0.4);">{{ $user->id }}</td>
                        <td style="border: 1px solid rgba(255,182,193,0.4);">{{ $user->nama }}</td>
                        <td style="border: 1px solid rgba(255,182,193,0.4);">{{ $user->nim }}</td>
                        <td style="border: 1px solid rgba(255,182,193,0.4);">{{ $user->kelas->nama_kelas }}</td>
                        <td style="border: 1px solid rgba(255,182,193,0.4);">
                            <a href="{{ route('user.edit', $user->id) }}" 
                               class="btn btn-sm fw-semibold me-2"
                               style="background-color: #ff80a0; border: none; color: white; border-radius: 8px;">
                                Edit
                            </a>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('Yakin ingin menghapus pengguna ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm fw-semibold"
                                        style="background-color: #ff5c7a; border: none; color: white; border-radius: 8px;">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-3">Belum ada pengguna.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<style>
tbody tr:hover {
    background-color: rgba(255,192,203,0.25);
    transition: 0.3s ease;
}
</style>
@endsection
