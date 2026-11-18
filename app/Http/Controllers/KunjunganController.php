<?php

namespace App\Http\Controllers;

use App\Models\Kunjungan;
use App\Models\Pegawai;
use App\Models\Pengunjung;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class KunjunganController extends Controller
{
    public function index(): View
    {
        return view('kunjungan.index', [
            'kunjungan' => Kunjungan::query()
                ->with(['pengunjung', 'pegawai'])
                ->orderByDesc('tanggal_kunjungan')
                ->paginate(15),
        ]);
    }

    public function create(): View
    {
        return view('kunjungan.form', [
            'kunjungan' => new Kunjungan(),
            'pengunjung' => Pengunjung::query()->orderBy('nama')->get(),
            'pegawai' => Pegawai::query()->orderBy('nama_pegawai')->get(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        Kunjungan::create($request->validate($this->rules()));

        return redirect()->route('kunjungan.index');
    }

    public function edit(Kunjungan $kunjungan): View
    {
        return view('kunjungan.form', [
            'kunjungan' => $kunjungan,
            'pengunjung' => Pengunjung::query()->orderBy('nama')->get(),
            'pegawai' => Pegawai::query()->orderBy('nama_pegawai')->get(),
        ]);
    }

    public function update(Request $request, Kunjungan $kunjungan): RedirectResponse
    {
        $kunjungan->update($request->validate($this->rules()));

        return redirect()->route('kunjungan.index');
    }

    public function destroy(Kunjungan $kunjungan): RedirectResponse
    {
        $kunjungan->delete();

        return redirect()->route('kunjungan.index');
    }

    private function rules(): array
    {
        return [
            'id_pengunjung' => ['required', 'integer', 'exists:pengunjung,id_pengunjung'],
            'id_pegawai' => ['required', 'integer', 'exists:pegawai,id_pegawai'],
            'tanggal_kunjungan' => ['required', 'date'],
            'jam_masuk' => ['required', 'date_format:H:i'],
            'jam_keluar' => ['nullable', 'date_format:H:i'],
            'tujuan' => ['required', 'string', 'max:150'],
            'keperluan' => ['required', 'string'],
            'status' => ['required', 'in:Menunggu,Diterima,Selesai'],
        ];
    }
}
