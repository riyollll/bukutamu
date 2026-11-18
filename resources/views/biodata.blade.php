@extends('layout.app2')
@section('isi2')

<body class="d-flex flex-column min-vh-100">

    <div class="container">
        <h1 class="mt-2 text-center fw-semibold ">BIODATA KU</h1>

        <div class="row mt-5">


            <div class="col-12 col-md-3 text-center mb-3 mb-md-0">
                <img src="{{ asset('template/assets/images/avatar/hehe.jpg') }}"
                    alt="Foto profil Firiyal"
                    class="img-fluid">
            </div>


            <div class="col-12 col-md-9">
                <div class="card rounded-4">
                    <div class="card-body">

                        <h2 class="fw-bold mb-4">Data Diri</h2>

                        <div class="table-responsive">
                            <table class="table table-bordered rounded overflow-hidden">
                                <tbody>
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td>Firiyal Anggara Putra</td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>Laki-laki</td>
                                    </tr>
                                    <tr>
                                        <td>Tempat, Tanggal Lahir</td>
                                        <td>Blitar, 29 Desember 2009</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>Cupon, Ngadirenggo</td>
                                    </tr>
                                    <tr>
                                        <td>No Telepon</td>
                                        <td>085191342027</td>
                                    </tr>
                                    <tr>
                                        <td>Hobi</td>
                                        <td>Buat orang marah</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Ibu</td>
                                        <td>wiwin apriana</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Ayah</td>
                                        <td>Heri Julianto</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

@endsection