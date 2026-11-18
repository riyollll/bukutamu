@extends('layout.app2')
@section('isi2')
    <div class="container mt-5">
        <div class="mt-5">

            <form action="{{ route('jurusan.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>id </label>
                    <input type="text" name="id_jurusan" class="form-control">
                </div>
                <div class="mb-3">
                    <label>nama jurusan</label>
                    <input type="text" name="nama_jurusan" class="form-control">
                </div>
                <div class="mb-3">
                    <label>singkatan</label>
                    <input type="text" name="singkatan" class="form-control">
                </div>



                <button type="submit" class="btn btn-success">
                    Tambah
                </button>
                <a href="{{ route('sikelas') }}" class="btn btn-primary">Kembali</a>
            </form>
        </div>



    </div>
@endsection
