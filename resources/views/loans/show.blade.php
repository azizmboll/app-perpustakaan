{{-- File: resources/views/loans/show.blade.php --}}
@extends('layouts.app')

@section('title', 'Detail Peminjaman')

@section('content')
    <h1>Detail Peminjaman #{{ $loan['id'] }}</h1>

    <p><strong>Anggota:</strong> {{ $loan['member']['nama'] ?? '-' }}</p>
    <p><strong>Petugas:</strong> {{ $loan['user']['name'] ?? '-' }}</p>
    <p><strong>Tanggal Pinjam:</strong> {{ $loan['tanggal_pinjam'] }}</p>
    <p><strong>Tanggal Kembali:</strong> {{ $loan['tanggal_kembali'] }}</p>
    <p><strong>Tanggal Dikembalikan:</strong> {{ $loan['tanggal_dikembalikan'] ?? '-' }}</p>
    <p>
        <strong>Status:</strong> 
        <span class="badge-status badge-{{ $loan['status'] }}">
            {{ ucfirst($loan['status']) }}
        </span>
    </p>

    <h3>Daftar Buku yang Dipinjam:</h3>
    <ul>
        @foreach ($loan['loanItems'] as $item)
            <li>{{ $item['book']['judul'] ?? '-' }} (ISBN: {{ $item['book']['isbn'] ?? '-' }})</li>
        @endforeach
    </ul>

    <p style="margin-top: 20px;">
        <a href="{{ route('loans.index') }}" class="btn">Kembali ke Daftar</a>
    </p>
@endsection