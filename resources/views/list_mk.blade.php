@extends('layouts.app')

@section('content')
<div class="container">
    <h1 style="text-align: center; margin-bottom: 20px;">Daftar Mata Kuliah</h1>

    <div style="text-align: center; margin-bottom: 20px;">
        <a href="{{ route('matakuliah.create') }}" style="text-decoration: none; font-weight: bold;">
            Tambah Mata Kuliah Baru
        </a>
    </div>

    <table style="
        width: 80%;
        margin: 0 auto;
        border-collapse: collapse;
        border: 1px solid black;
    ">
        <thead>
            <tr>
                <th style="border: 1px solid black; padding: 8px;">ID</th>
                <th style="border: 1px solid black; padding: 8px;">Nama Mata Kuliah</th>
                <th style="border: 1px solid black; padding: 8px;">SKS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mks as $mk)
            <tr>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">{{ $mk->id }}</td>
                <td style="border: 1px solid black; padding: 8px;">{{ $mk->nama_mk }}</td>
                <td style="border: 1px solid black; padding: 8px; text-align: center;">{{ $mk->sks }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
