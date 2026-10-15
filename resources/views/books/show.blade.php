@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
    <h1>Detail Buku</h1>

    <p style="margin-bottom: 20px;">
        <a href="{{ route('books.index') }}">← Kembali ke daftar buku</a>
    </p>

    <table style="width: 100%; border-collapse: collapse; margin-top: 10px;">
        <tr>
            <th style="width: 30%; text-align: left; padding: 10px; border: 1px solid #e5e7eb; font-weight: bold; background-color: #ffffff;">Judul</th>
            <td style="padding: 10px; border: 1px solid #e5e7eb; background-color: #ffffff;">{{ $book->judul }}</td>
        </tr>
        <tr>
            <th style="text-align: left; padding: 10px; border: 1px solid #e5e7eb; font-weight: bold; background-color: #ffffff;">Penulis</th>
            <td style="padding: 10px; border: 1px solid #e5e7eb; background-color: #ffffff;">{{ $book->penulis }}</td>
        </tr>
        <tr>
            <th style="text-align: left; padding: 10px; border: 1px solid #e5e7eb; font-weight: bold; background-color: #ffffff;">Penerbit</th>
            <td style="padding: 10px; border: 1px solid #e5e7eb; background-color: #ffffff;">{{ $book->penerbit }}</td>
        </tr>
        <tr>
            <th style="text-align: left; padding: 10px; border: 1px solid #e5e7eb; font-weight: bold; background-color: #ffffff;">Tahun Terbit</th>
            <td style="padding: 10px; border: 1px solid #e5e7eb; background-color: #ffffff;">{{ $book->tahun_terbit }}</td>
        </tr>
        <tr>
            <th style="text-align: left; padding: 10px; border: 1px solid #e5e7eb; font-weight: bold; background-color: #ffffff;">ISBN</th>
            <td style="padding: 10px; border: 1px solid #e5e7eb; background-color: #ffffff;">{{ $book->isbn ?? '-' }}</td>
        </tr>
        <tr>
            <th style="text-align: left; padding: 10px; border: 1px solid #e5e7eb; font-weight: bold; background-color: #ffffff;">Stok</th>
            <td style="padding: 10px; border: 1px solid #e5e7eb; background-color: #ffffff;">{{ $book->stok }}</td>
        </tr>
        <tr>
            <th style="text-align: left; padding: 10px; border: 1px solid #e5e7eb; font-weight: bold; background-color: #ffffff;">Kategori</th>
            <td style="padding: 10px; border: 1px solid #e5e7eb; background-color: #ffffff;">{{ $book->category->nama_kategori ?? '-' }}</td>
        </tr>
    </table>
@endsection