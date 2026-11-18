
@extends('layout.app')
@section('isi')

<section class="row g-3 mt-1" aria-label="Dashboard metrics">

    <div class="col-12 col-sm-6 col-xl-3">
        <article class="metric-card metric-primary">
            <div class="metric-top">
                <span class="metric-label">Total Tamu</span>
                <span class="metric-icon">
                    <i class="bi bi-people" aria-hidden="true"></i>
                </span>
            </div>
            <div class="metric-value">12</div>
            <div class="metric-meta">
                <span>Total seluruh kunjungan</span>
            </div>
        </article>
    </div>

    <div class="col-12 col-sm-6 col-xl-3">
        <article class="metric-card metric-success">
            <div class="metric-top">
                <span class="metric-label">Tamu Hari Ini</span>
                <span class="metric-icon">
                    <i class="bi bi-calendar-check" aria-hidden="true"></i>
                </span>
            </div>
            <div class="metric-value">11</div>
            <div class="metric-meta">
                <span>Jumlah kunjungan hari ini</span>
            </div>
        </article>
    </div>

    <div class="col-12 col-sm-6 col-xl-3">
        <article class="metric-card metric-warning">
            <div class="metric-top">
                <span class="metric-label">Tamu Menunggu</span>
                <span class="metric-icon">
                    <i class="bi bi-clock-history" aria-hidden="true"></i>
                </span>
            </div>
            <div class="metric-value">1</div>
            <div class="metric-meta">
                <span>Belum melakukan kunjungan</span>
            </div>
        </article>
    </div>

    <div class="col-12 col-sm-6 col-xl-3">
        <article class="metric-card metric-danger">
            <div class="metric-top">
                <span class="metric-label">Tamu Sudah Masuk</span>
                <span class="metric-icon">
                    <i class="bi bi-person-check" aria-hidden="true"></i>
                </span>
            </div>
            <div class="metric-value">11</div>
            <div class="metric-meta">
                <span>Tamu telah melakukan kunjungan</span>
            </div>
        </article>
    </div>

</section>


<section class="row g-3 mt-3 align-items-stretch">

    {{-- KUNJUNGAN HARIAN --}}
    <div class="col-12 col-xl-6">
        <div class="panel h-100">

            <div class="panel-header">
                <div>
                    <h2 class="h5 mb-1 section-title">
                        <i class="bi bi-graph-up-arrow" aria-hidden="true"></i>
                        <span>Kunjungan Harian</span>
                    </h2>
                    <p class="text-muted mb-0">
                        Banyak tamu yang datang.
                    </p>
                </div>

                <a class="btn btn-light btn-sm" href="#">
                    Lihat Detail
                </a>
            </div>

            <div class="chart-bars" aria-label="Grafik kunjungan harian">
                <div class="chart-column bar-42">
                    <span></span>
                    <small>Jan</small>
                </div>

                <div class="chart-column bar-58">
                    <span></span>
                    <small>Feb</small>
                </div>

                <div class="chart-column bar-51">
                    <span></span>
                    <small>Mar</small>
                </div>

                <div class="chart-column bar-72">
                    <span></span>
                    <small>Apr</small>
                </div>

                <div class="chart-column bar-66">
                    <span></span>
                    <small>Mei</small>
                </div>

                <div class="chart-column bar-83">
                    <span></span>
                    <small>Jun</small>
                </div>
            </div>

        </div>
    </div>


    {{-- TAMU TERBARU --}}
    <div class="col-12 col-xl-6">
        <div class="panel h-100">

            <div class="panel-header">
                <div>
                    <h2 class="h5 mb-1 section-title">
                        <i class="bi bi-people" aria-hidden="true"></i>
                        <span>Tamu Terbaru</span>
                    </h2>
                    <p class="text-muted mb-0">
                        Daftar tamu yang terakhir berkunjung.
                    </p>
                </div>

                <a class="btn btn-outline-secondary btn-sm"
                   href="{{ route('bukutamu') }}">
                    Lihat Semua
                </a>
            </div>

            <div class="table-responsive dashboard-user-table"
                 aria-label="Daftar tamu terbaru">

                <table class="table align-middle mb-0">

                    <thead>
                        <tr>
                            <th scope="col">Nama Tamu</th>
                            <th scope="col">Instansi</th>
                            <th scope="col">Keperluan</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Jam</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>
                                <p class="fw-semibold mb-0">
                                    Ahmad Fauzi
                                </p>
                            
                            </td>
                            <td>PT Maju Jaya</td>
                            <td>Kunjungan Kerja</td>
                            <td>11 Nov 2026</td>
                            <td>08:30</td>
                        </tr>

                        <tr>
                            <td>
                                <p class="fw-semibold mb-0">
                                    Siti Rahmawati
                                </p>

                            </td>
                            <td>SMK PGRI Wlingi</td>
                            <td>Konsultasi</td>
                            <td>11 Nov 2026</td>
                            <td>09:15</td>
                        </tr>

                        <tr>
                            <td>
                                <p class="fw-semibold mb-0">
                                    Budi Santoso
                                </p>

                            </td>
                            <td>Perorangan</td>
                            <td>Pengajuan Surat</td>
                            <td>11 Nov 2026</td>
                            <td>10:00</td>
                        </tr>

                        <tr>
                            <td>
                                <p class="fw-semibold mb-0">
                                    Dewi Anggraini
                                </p>

                            </td>
                            <td>CV Sejahtera</td>
                            <td>Keperluan Administrasi</td>
                            <td>10 Nov 2026</td>
                            <td>13:20</td>
                        </tr>

                    </tbody>

                </table>

            </div>
        </div>
    </div>

</section>

@endsection
