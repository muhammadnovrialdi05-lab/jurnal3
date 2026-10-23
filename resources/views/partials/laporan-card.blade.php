{{-- Variabel: $laporan (array), $status (string), $kelas (string) --}}
<div class="card {{ $kelas }}">
    <h3>{{ $laporan['lokasi'] }}</h3>
    <p><strong>Pelapor:</strong> {{ $laporan['nama'] }}</p>
    <p><strong>Tinggi genangan:</strong> {{ $laporan['tinggi'] }} cm</p>
    @isset($laporan['waktu'])
        <p><strong>Waktu:</strong> {{ $laporan['waktu'] }}</p>
    @endisset
    <p><strong>Status:</strong> <span class="badge {{ $kelas }}">{{ $status }}</span></p>
</div>
