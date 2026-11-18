<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PegawaiController extends Controller
{
    public function index(): View
    {
        return view('pegawai.index', [
            'pegawai' => Pegawai::query()->orderBy('nama_pegawai')->paginate(15),
        ]);
    }

    public function create(): View
    {
        return view('pegawai.form', [
            'pegawai' => new Pegawai(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        Pegawai::create($request->validate($this->rules()));

        return redirect()->route('pegawai.index');
    }

    public function edit(Pegawai $pegawai): View
    {
        return view('pegawai.form', [
            'pegawai' => $pegawai,
        ]);
    }

    public function update(Request $request, Pegawai $pegawai): RedirectResponse
    {
        $pegawai->update($request->validate($this->rules()));

        return redirect()->route('pegawai.index');
    }

    public function destroy(Pegawai $pegawai): RedirectResponse
    {
        $pegawai->delete();

        return redirect()->route('pegawai.index');
    }

    private function rules(): array
    {
        return [
            'nama_pegawai' => ['required', 'string', 'max:100'],
            'jabatan' => ['required', 'string', 'max:100'],
        ];
    }
}
