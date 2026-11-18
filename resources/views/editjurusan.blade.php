@extends('layout.app3')
@section('isi3')
    <div class="container mt-5">
        <div class="mt-5">
            <form action="{{ route('jurusan.update', $jurusan->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Nama Siswa</label>
                    <input type="text" name="id_jurusan" class="form-control" value="{{ $jurusan->id_jurusan }}">
                </div>
                <div class="mb-3">
                    <label>Kelas</label>
                    <input type="text" name="nama_jurusan" class="form-control" value="{{ $jurusan->nama_jurusan }}">
                </div>
                <div class="mb-3">
                    <label>Agama</label>
                    <input type="text" name="singkatan" class="form-control" value="{{ $jurusan->singkatan }}">
                </div>


                <button type="submit" class="btn btn-success">
                    Update
                </button>
                <a href="{{ route('sikelas') }}" class="btn btn-primary">Kembali</a>
            </form>
        </div>
    </div>
@endsection
