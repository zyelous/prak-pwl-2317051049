@extends('layouts.app')

@section('title','Daftar Pengguna')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height:80vh;">
    <div class="col-md-6 col-lg-10">
        <h3 class="text-center mb-4 text-light">Daftar Pengguna</h3>

        <div class="p-4 rounded shadow" style="background: rgba(0,0,0,0.5);">
            @if($users->count() > 0)
            <div class="table-responsive">
                <table class="table table-bordered text-white" style="border: 2px transparant; border-radius: 6px; overflow: hidden;">
                    <thead>
                        <tr style="background-color: #191970;">
                            <th>ID</th>
                            <th>Nama</th>
                            <th>NPM</th>
                            <th>Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->nama }}</td>
                            <td>{{ $user->nim }}</td>
                            <td>{{ $user->kelas->nama_kelas }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <p class="text-center text-white">Belum ada pengguna.</p>
            @endif
        </div>
    </div>
</div>
@endsection