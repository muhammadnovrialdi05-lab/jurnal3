@extends('layouts.app')

@section('title', 'Daftar Laporan')

@section('content')
    <h2>Daftar Laporan Banjir</h2>

    @forelse ($laporanList as $laporan)
        @if ($laporan['tinggi'] < 30)
            @include('partials.laporan-card', ['laporan' => $laporan, 'status' => 'Waspada', 'kelas' => 'waspada'])
        @elseif ($laporan['tinggi'] <= 70)
            @include('partials.laporan-card', ['laporan' => $laporan, 'status' => 'Siaga', 'kelas' => 'siaga'])
        @else
            @include('partials.laporan-card', ['laporan' => $laporan, 'status' => 'Awas', 'kelas' => 'awas'])
        @endif
    @empty
        <x-alert type="info">Belum ada laporan banjir.</x-alert>
    @endforelse
@endsection
