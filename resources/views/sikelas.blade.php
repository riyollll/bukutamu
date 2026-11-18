@extends('layout.app3')
@section('isi3')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                Data Jurusan
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama jurusan</th>
                            <th scope="col">Singkatan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jurusan as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->nama_jurusan }}</td>
                                <td>{{ $item->singkatan }}</td>
                                <td>
                                    <a type="button" href="{{ route('jurusan.edit', $item->id) }}"
                                        class="btn btn-primary ">Ubah</a>
                                    <form action="{{ route('jurusan.destroy', $item->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger "
                                            onclick="return confirm('Hapus item ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a type="button" href="{{ route('jurusan.create') }}" class="btn btn-primary">Tambah</a>
            </div>
        </div>
    </div>
@endsection
