@extends('layout.app')
@section('isi')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden"
                    style="background: var(--admin-surface); border: 1px solid var(--admin-border); box-shadow: var(--admin-shadow-lg);">
                    <div class="card-body p-0">
                        <div class="profile-hero"
                            style="background: linear-gradient(135deg, rgba(37, 99, 235, 0.10), rgba(96, 165, 250, 0.04)); border-bottom: 1px solid var(--admin-border);">
                            <div class="row align-items-center g-4 p-4 p-lg-5">
                                <div class="col-md-4 text-center">
                                    <div class="position-relative d-inline-block">
                                        <img src="{{ asset('template/assets/images/avatar/avatar.jpg') }}"
                                            alt="Foto profil Firiyal"
                                            class="img-fluid rounded-circle border border-4 border-light shadow-sm"
                                            style="width: 170px; height: 170px; object-fit: cover; background: var(--admin-surface-soft);">
                                    </div>
                                </div>

                                <div class="col-md-8 text-center text-md-start">
                                    <div class="d-flex flex-column gap-2 align-items-center align-items-md-start">
                                        <span class="badge bg-primary rounded-pill px-3 py-2 fw-semibold text-white">
                                            Siswa Aktif
                                        </span>
                                        <h2 class="fw-bold mb-0 text-body">Firiyal Anggara Putra</h2>
                                        <p class="text-body-secondary mb-0">XI RPL 1 • Rekayasa Perangkat Lunak</p>

                                        <div
                                            class="d-flex flex-wrap justify-content-center justify-content-md-start gap-2 mt-2">
                                            <span
                                                class="badge rounded-pill bg-body-tertiary border border-primary-subtle text-body px-3 py-2">
                                                NIS: 202631
                                            </span>
                                            <span
                                                class="badge rounded-pill bg-body-tertiary border border-primary-subtle text-body px-3 py-2">
                                                Kelas: XI RPL 1
                                            </span>
                                            <span
                                                class="badge rounded-pill bg-body-tertiary border border-primary-subtle text-body px-3 py-2">
                                                Jurusan: RPL
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-4 p-lg-5" style="background: var(--admin-surface-soft);">
                            <div class="row g-4">
                                <div class="col-lg-8">
                                    <div class="card border-0 rounded-4 h-100 bg-body-tertiary">
                                        <div class="card-body">
                                            <h5 class="fw-bold mb-3 text-body">Informasi Pribadi</h5>
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <div class="rounded-3 border p-3 h-100 bg-body">
                                                        <small class="text-body-secondary d-block mb-1">Nama Lengkap</small>
                                                        <strong class="text-body">Firiyal Anggara Putra</strong>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="rounded-3 border p-3 h-100 bg-body">
                                                        <small class="text-body-secondary d-block mb-1">Kelas</small>
                                                        <strong class="text-body">XI RPL 1</strong>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="rounded-3 border p-3 h-100 bg-body">
                                                        <small class="text-body-secondary d-block mb-1">Jurusan</small>
                                                        <strong class="text-body">Rekayasa Perangkat Lunak</strong>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="rounded-3 border p-3 h-100 bg-body">
                                                        <small class="text-body-secondary d-block mb-1">Status</small>
                                                        <span
                                                            class="badge bg-success-subtle text-success-emphasis rounded-pill px-3 py-2">
                                                            Pelajar
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card border-0 rounded-4 h-100"
                                        style="background: linear-gradient(180deg, rgba(37, 99, 235, 0.16), rgba(15, 23, 42, 0.04)); border: 1px solid var(--admin-border);">
                                        <div class="card-body">
                                            <h5 class="fw-bold mb-3 text-body">Status Akademik</h5>
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <span class="text-body-secondary">Presensi</span>
                                                <strong class="text-body">96%</strong>
                                            </div>
                                            <div class="progress mb-3"
                                                style="height: 10px; background: rgba(148,163,184,0.25);">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 96%"
                                                    aria-valuenow="96" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <span class="text-body-secondary">Nilai Rata-rata</span>
                                                <strong class="text-body">88.5</strong>
                                            </div>
                                            <div class="progress" style="height: 10px; background: rgba(148,163,184,0.25);">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 88%"
                                                    aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
