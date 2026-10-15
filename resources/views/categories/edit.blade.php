@extends('layouts.app')

@section('title', 'Edit Kategori')

@section('content')
<style>
    .form-group {
        margin-bottom: 12px;
    }
    .form-control {
        width: 100%;                  /* Lebar penuh mengisi container */
        padding: 6px 10px;            /* Spasi di dalam kolom */
        box-sizing: border-box;        /* Menjaga border tetap rapi di dalam container */
        border: 1px solid #ccc;
        border-radius: 4px;
    }
</style>

<h1>Edit Kategori</h1>

<p style="margin-bottom: 20px;">
    <a href="{{ route('categories.index') }}">← Kembali ke daftar kategori</a>
</p>

<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nama_kategori"><b>Nama Kategori</b></label><br>
        <input type="text" id="nama_kategori" name="nama_kategori" class="form-control" value="{{ old('nama_kategori', $category->nama_kategori) }}">
        @error('nama_kategori')
            <div style="color: red; font-size: 14px;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="deskripsi"><b>Deskripsi (opsional)</b></label><br>
        <textarea id="deskripsi" name="deskripsi" class="form-control" rows="6">{{ old('deskripsi', $category->deskripsi) }}</textarea>
        @error('deskripsi')
            <div style="color: red; font-size: 14px;">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn" style="padding: 8px 16px; margin-top: 10px; background-color: #2563eb; color: white; border: none; border-radius: 4px; cursor: pointer;">Perbarui</button>
</form>
@endsection