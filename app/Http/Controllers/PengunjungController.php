<?php

namespace App\Http\Controllers;

use App\Models\Pengunjung;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PengunjungController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('pengunjung.index', [
            'pengunjung' => Pengunjung::query()->orderBy('nama')->paginate(15),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('pengunjung.form', [
            'pengunjung' => new Pengunjung,
        ]);
    }

    public function publicForm(): View
    {
        return view('pengunjung.public-form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        Pengunjung::create($request->validate($this->rules()));

        return redirect()->route('pengunjung.index');
    }

    public function storePublic(Request $request): RedirectResponse
    {
        Pengunjung::create($request->validate($this->rules()));

        return redirect()->route('tamu.create')->with('success', 'Data diri tamu berhasil dikirim.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengunjung $pengunjung): View
    {
        return view('pengunjung.form', [
            'pengunjung' => $pengunjung,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengunjung $pengunjung): RedirectResponse
    {
        $pengunjung->update($request->validate($this->rules()));

        return redirect()->route('pengunjung.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengunjung $pengunjung): RedirectResponse
    {
        $pengunjung->delete();

        return redirect()->route('pengunjung.index');
    }

    private function rules(): array
    {
        return [
            'nama' => ['required', 'string', 'max:100'],
            'jenis_kelamin' => ['required', 'in:Laki-laki,Perempuan'],
            'no_hp' => ['required', 'string', 'max:20'],
            'email' => ['required', 'email', 'max:100'],
            'alamat' => ['required', 'string'],
            'instansi' => ['required', 'string', 'max:150'],
        ];
    }
}
