<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LaporanController extends Controller
{
    /**
     * Data contoh laporan (tanpa database, cukup array).
     */
    private function dataLaporan(): array
    {
        return [
            [
                'id'      => 1,
                'nama'    => 'Budi Santoso',
                'lokasi'  => 'Dayeuhkolot, Kab. Bandung',
                'tinggi'  => 25,
                'waktu'   => '23 Okt 2026, 06:15',
            ],
            [
                'id'      => 2,
                'nama'    => 'Siti Aminah',
                'lokasi'  => 'Baleendah, Kab. Bandung',
                'tinggi'  => 55,
                'waktu'   => '23 Okt 2026, 07:40',
            ],
            [
                'id'      => 3,
                'nama'    => 'Asep Sunandar',
                'lokasi'  => 'Bojongsoang, Kab. Bandung',
                'tinggi'  => 85,
                'waktu'   => '23 Okt 2026, 08:05',
            ],
            [
                'id'      => 4,
                'nama'    => 'Dewi Lestari',
                'lokasi'  => 'Rancaekek, Kab. Bandung',
                'tinggi'  => 30,
                'waktu'   => '23 Okt 2026, 09:20',
            ],
            [
                'id'      => 5,
                'nama'    => 'Rudi Hermawan',
                'lokasi'  => 'Majalaya, Kab. Bandung',
                'tinggi'  => 70,
                'waktu'   => '23 Okt 2026, 10:00',
            ],
        ];
    }

    /** Halaman form pelaporan. */
    public function create(): View
    {
        return view('laporan.form');
    }

    /** Menerima POST form, lalu menuju halaman konfirmasi. */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'nama'   => ['required', 'string', 'max:100'],
            'lokasi' => ['required', 'string', 'max:255'],
            'tinggi' => ['required', 'integer', 'min:1', 'max:1000'],
        ], [
            'required' => ':attribute wajib diisi.',
            'integer'  => ':attribute harus berupa angka bulat.',
            'min'      => ':attribute minimal :min.',
            'max'      => ':attribute maksimal :max.',
        ], [
            'nama'   => 'Nama pelapor',
            'lokasi' => 'Lokasi kejadian',
            'tinggi' => 'Tinggi genangan',
        ]);

        return redirect()
            ->route('laporan.konfirmasi')
            ->with('laporan', $data);
    }

    /** Halaman konfirmasi: menampilkan kembali data yang dikirim. */
    public function konfirmasi(): View|RedirectResponse
    {
        $laporan = session('laporan');

        if (! $laporan) {
            return redirect()->route('laporan.create');
        }

        return view('laporan.konfirmasi', ['laporan' => $laporan]);
    }

    /** Halaman daftar laporan. */
    public function index(): View
    {
        return view('laporan.index', ['laporanList' => $this->dataLaporan()]);
    }
}
