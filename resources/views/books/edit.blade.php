@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
<style>
    .form-group {
        margin-bottom: 12px;
    }
    .form-control {
        width: 100%;                  /* Lebar penuh memenuhi container */
        padding: 6px 10px;            /* Padding dalam kotak */
        box-sizing: border-box;        /* Agar tidak jebol dari lebar container */
        border: 1px solid #ccc;
        border-radius: 4px;
    }
</style>

<p><a href="{{ route('books.index') }}">← Kembali ke daftar buku</a></p>

<h1>Edit Buku</h1>

<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="judul"><b>Judul</b></label><br>
        <input type="text" id="judul" name="judul" class="form-control" value="{{ old('judul', $book->judul) }}">
        @error('judul')
            <div style="color: red; font-size: 14px;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="penulis"><b>Penulis</b></label><br>
        <input type="text" id="penulis" name="penulis" class="form-control" value="{{ old('penulis', $book->penulis) }}">
        @error('penulis')
            <div style="color: red; font-size: 14px;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="penerbit"><b>Penerbit</b></label><br>
        <input type="text" id="penerbit" name="penerbit" class="form-control" value="{{ old('penerbit', $book->penerbit) }}">
        @error('penerbit')
            <div style="color: red; font-size: 14px;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="tahun_terbit"><b>Tahun Terbit</b></label><br>
        <input type="number" id="tahun_terbit" name="tahun_terbit" class="form-control" value="{{ old('tahun_terbit', $book->tahun_terbit) }}">
        @error('tahun_terbit')
            <div style="color: red; font-size: 14px;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="isbn"><b>ISBN (opsional)</b></label><br>
        <input type="text" id="isbn" name="isbn" class="form-control" value="{{ old('isbn', $book->isbn) }}">
        @error('isbn')
            <div style="color: red; font-size: 14px;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="stok"><b>Stok</b></label><br>
        <input type="number" id="stok" name="stok" class="form-control" value="{{ old('stok', $book->stok) }}">
        @error('stok')
            <div style="color: red; font-size: 14px;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="category_id"><b>Kategori</b></label><br>
        <select id="category_id" name="category_id" class="form-control">
            <option value="">-- Pilih Kategori --</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id', $book->category_id) == $category->id ? 'selected' : '' }}>
                    {{ $category->nama_kategori }}
                </option>
            @endforeach
        </select>
        @error('category_id')
            <div style="color: red; font-size: 14px;">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn" style="padding: 8px 16px; margin-top: 10px; background-color: #2563eb; color: white; border: none; border-radius: 4px; cursor: pointer;">Perbarui</button>
</form>
@endsection