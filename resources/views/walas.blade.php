@extends('layout.app3')
@section('isi3')
     <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                Data Walikelas
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Guru</th>
                            <th scope="col">Nama Kelas</th>
                            <th scope="col">Tahun Ajaran</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Drs. SUPARNO, M.Pd.</td>
                            <td>x titl 2</td>
                            <td>1</td>
                            <td>
                                <button type="button" class="btn btn-primary">Ubah</button>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Nurul fitrak skom </td>
                            <td>x rpl 1</td>
                            <td>2</td>
                            <td>
                                <button type="button" class="btn btn-primary">Ubah</button>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Drs. EDY PURWANTO, M.</td>
                            <td>xii tkj 4</td>
                            <td>5</td>
                            <td>
                                <button type="button" class="btn btn-primary">Ubah</button>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>HARJITO, B.A.</td>
                            <td>xi titl 1</td>
                            <td>1</td>
                            <td>
                                <button type="button" class="btn btn-primary">Ubah</button>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>ANANG SUSILO, S.Kom.</td>
                            <td>x tp 2</td>
                            <td>3</td>
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