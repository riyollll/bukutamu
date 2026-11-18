@extends('layout.app3')
@section('isi3')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                Data Guru
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Guru</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Kode Guru</th>
                            <th scope="col">Ijasah Terakhir</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Drs. SUPARNO, M.Pd.</td>
                            <td>Laki-Laki</td>
                            <td>A2</td>
                            <td>S.2 Teknologi Pembelajaran</td>
                            <td>Ngawi</td>
                            <td>
                                <button type="button" class="btn btn-primary">Ubah</button>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Dra. SRI WIDAJATI</td>
                            <td>Perempuan</td>
                            <td>A3</td>
                            <td>S.1 Matematika</td>
                            <td>Wingi</td>
                            <td>
                                <button type="button" class="btn btn-primary">Ubah</button>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Drs. EDY PURWANTO, M.Pd.</td>
                            <td>Laki-Laki</td>
                            <td>A4</td>
                            <td>S.2 Pendidikan Ilmu Pengetahuan Sosial</td>
                            <td>Wlingi</td>
                            <td>
                                <button type="button" class="btn btn-primary">Ubah</button>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>HARJITO, B.A.</td>
                            <td>Laki-Laki</td>
                            <td>A5</td>
                            <td>D.3 Matematika</td>
                            <td>Talun</td>
                            <td>
                                <button type="button" class="btn btn-primary">Ubah</button>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>ANANG SUSILO, S.Kom.</td>
                            <td>Laki-Laki</td>
                            <td>A6</td>
                            <td>S.1 Teknik Informatika</td>
                            <td>Malang</td>
                            <td>
                                <button type="button" class="btn btn-primary">Ubah</button>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
