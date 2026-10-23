@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')
    <x-alert type="success">
        <strong>Berhasil!</strong> Laporan banjir Anda telah berhasil dikirim. Terima kasih atas partisipasi Anda.
    </x-alert>

    <div class="panel">
        <h2>Data Laporan yang Dikirim</h2>
        <table class="data">
            <tr><td>Nama Pelapor</td><td>{{ $laporan['nama'] }}</td></tr>
            <tr><td>Lokasi Kejadian</td><td>{{ $laporan['lokasi'] }}</td></tr>
            <tr><td>Tinggi Genangan</td><td>{{ $laporan['tinggi'] }} cm</td></tr>
        </table>

        <a href="{{ route('laporan.create') }}" class="btn">Buat Laporan Baru</a>
        <a href="{{ route('laporan.index') }}" class="btn btn-secondary">Lihat Daftar Laporan</a>
    </div>
@endsection
