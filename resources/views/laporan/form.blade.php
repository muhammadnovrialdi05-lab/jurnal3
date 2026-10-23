@extends('layouts.app')

@section('title', 'Form Pelaporan')

@section('content')
    <div class="panel">
        <h2>Form Pelaporan Banjir</h2>
        <p>Laporkan kejadian banjir di wilayah Anda dengan mengisi form berikut.</p>

        <form action="{{ route('laporan.store') }}" method="POST" novalidate>
            @csrf

            <label for="nama">Nama Pelapor</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama') }}"
                   class="{{ $errors->has('nama') ? 'invalid' : '' }}">
            @error('nama') <div class="error">{{ $message }}</div> @enderror

            <label for="lokasi">Lokasi Kejadian</label>
            <input type="text" id="lokasi" name="lokasi" value="{{ old('lokasi') }}"
                   class="{{ $errors->has('lokasi') ? 'invalid' : '' }}">
            @error('lokasi') <div class="error">{{ $message }}</div> @enderror

            <label for="tinggi">Tinggi Genangan Air (cm)</label>
            <input type="number" id="tinggi" name="tinggi" min="1" value="{{ old('tinggi') }}"
                   class="{{ $errors->has('tinggi') ? 'invalid' : '' }}">
            @error('tinggi') <div class="error">{{ $message }}</div> @enderror

            <button type="submit" class="btn">Kirim Laporan</button>
        </form>
    </div>
@endsection
