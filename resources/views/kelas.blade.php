@extends('layout.app3')
@section('isi3')
      <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                Data Kelas
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">TIngkat</th>
                            <th scope="col">Nama Jurusan</th>
                            <th scope="col">Rombel</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>11</td>
                            <td>TEKNIK INSTALASI TENAGA LISTRIK</td>
                            <td>1</td>
                            <td>
                                <button type="button" class="btn btn-primary">Ubah</button>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>10</td>
                            <td>Rekayasa PErangkat Lunak</td>
                            <td>2</td>
                            <td>
                                <button type="button" class="btn btn-primary">Ubah</button>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>11</td>
                            <td>Teknik Komputer Dan Jaringan</td>
                            <td>5</td>
                            <td>
                                <button type="button" class="btn btn-primary">Ubah</button>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>12</td>
                            <td>Teknik Instalasi Tenaga Listrik</td>
                            <td>1</td>
                            <td>
                                <button type="button" class="btn btn-primary">Ubah</button>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>10</td>
                            <td>Teknik Pemesinan</td>
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