@extends('layouts.app')

@section('content')
<div class="container" style="width: 60%; margin: 0 auto; margin-top: 40px;">
    <h1 style="text-align: center; margin-bottom: 20px;">Edit Mata Kuliah</h1>

    <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST" style="display: flex; flex-direction: column; gap: 10px;">
        @csrf
        @method('PUT')

        <label for="nama_mk" style="font-weight: bold;">Nama Mata Kuliah:</label>
        <input 
            type="text" 
            id="nama_mk" 
            name="nama_mk" 
            value="{{ $mk->nama_mk }}" 
            required
            style="padding: 8px; border: 1px solid black; border-radius: 4px;"
        >

        <label for="sks" style="font-weight: bold;">SKS:</label>
        <input 
            type="number" 
            id="sks" 
            name="sks" 
            value="{{ $mk->sks }}" 
            required
            style="padding: 8px; border: 1px solid black; border-radius: 4px;"
        >

        <button type="submit" style="
            margin-top: 15px;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
        ">
            Update
        </button>
    </form>
</div>
@endsection
