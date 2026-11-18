@extends('layout.app')
@section('isi')

<body class=" d-flex flex-column min-vh-100">
    <div class="container">


        <section class="panel">
            <div class="panel-header">
                <div>
                    <h2 class="h5 mb-1 section-title">
                        <i class="bi bi-people" aria-hidden="true"></i>
                        <span>Data Buku Tamu</span>
                    </h2>
                    <p class="text-muted mb-0">
                        Daftar kunjungan tamu dan informasi keperluan kunjungan.
                    </p>
                </div>





                <button
                    class="btn btn-light btn-sm" type="button">
                    <i class="bi bi-pencil"></i> Tambah
                </button>
            </div>

            <div class="table-responsive">
                <table
                    class="table align-middle mb-0"
                    id="guestsTable"
                    data-searchable-table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Tamu</th>
                            <th>Instansi</th>
                            <th>Keperluan</th>
                            <th>No. HP</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th class="text-end">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td class="fw-semibold">Ahmad Fauzi</td>
                            <td>PT Maju Jaya</td>
                            <td>Kunjungan Kerja</td>
                            <td>081234567890</td>
                            <td>11 Nov 2026</td>
                            <td>08:30</td>
                            <td class="text-end">
                                <div class="d-flex justify-content-end gap-1">
                                    <button
                                        class="btn btn-light btn-sm"
                                        type="button">
                                        <i class="bi bi-eye"></i> Detail
                                    </button>

                                    <button
                                        class="btn btn-light btn-sm"
                                        type="button">
                                        <i class="bi bi-pencil"></i> Edit
                                    </button>

                                    <button
                                        class="btn btn-light btn-sm"
                                        type="button">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td class="fw-semibold">Siti Rahmawati</td>
                            <td>SMK PGRI Wlingi</td>
                            <td>Konsultasi</td>
                            <td>082345678901</td>
                            <td>11 Nov 2026</td>
                            <td>09:15</td>
                            <td class="text-end">
                                <div class="d-flex justify-content-end gap-1">
                                    <button
                                        class="btn btn-light btn-sm" type="button">
                                        <i class="bi bi-eye"></i> Detail
                                    </button>

                                    <button
                                        class="btn btn-light btn-sm"
                                        type="button">
                                        <i class="bi bi-pencil"></i> Edit
                                    </button>

                                    <button
                                        class="btn btn-light btn-sm"
                                        type="button">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td class="fw-semibold">Budi Santoso</td>
                            <td>Perorangan</td>
                            <td>Pengajuan Surat</td>
                            <td>085678901234</td>
                            <td>11 Nov 2026</td>
                            <td>10:00</td>
                            <td class="text-end">
                                <div class="d-flex justify-content-end gap-1">
                                    <button
                                        class="btn btn-light btn-sm"
                                        type="button">
                                        <i class="bi bi-eye"></i> Detail
                                    </button>

                                    <button
                                        class="btn btn-light btn-sm"
                                        type="button">
                                        <i class="bi bi-pencil"></i> Edit
                                    </button>

                                    <button
                                        class="btn btn-light btn-sm"
                                        type="button">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td class="fw-semibold">Dewi Anggraini</td>
                            <td>CV Sejahtera</td>
                            <td>Keperluan Administrasi</td>
                            <td>087890123456</td>
                            <td>10 Nov 2026</td>
                            <td>13:20</td>
                            <td class="text-end">
                                <div class="d-flex justify-content-end gap-1">
                                    <button
                                        class="btn btn-light btn-sm"
                                        type="button">
                                        <i class="bi bi-eye"></i> Detail
                                    </button>

                                    <button
                                        class="btn btn-light btn-sm"
                                        type="button">
                                        <i class="bi bi-pencil"></i> Edit
                                    </button>

                                    <button
                                        class="btn btn-light btn-sm"
                                        type="button">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>


    </div>



    @endsection
