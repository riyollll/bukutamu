<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Formulir data diri untuk tamu">
    <title>Form Data Diri Tamu</title>
    <link rel="stylesheet" href="{{ asset('template/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/style.css') }}">
</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar bg-white border-bottom shadow-sm">
            <div class="container">
                <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="{{ route('tamu.create') }}">
                    <span class="text-primary"><i class="bi bi-journal-text" aria-hidden="true"></i></span>
                    <span>Buku Tamu</span>
                </a>
                <span class="text-body-secondary small">Formulir pengunjung</span>
            </div>
        </nav>
    </header>

    <main class="container flex-grow-1 py-4 py-lg-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 col-xl-7">
                <section class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-4 p-md-5">
                        <div class="mb-4">
                            <span class="badge rounded-pill bg-primary-subtle text-primary-emphasis mb-3">
                                <i class="bi bi-person-vcard me-1" aria-hidden="true"></i>
                                Data pengunjung
                            </span>
                            <h1 class="h3 fw-bold mb-2">Form Data Diri Tamu</h1>
                            <p class="text-body-secondary mb-0">
                                Silakan lengkapi data diri berikut untuk mengisi buku tamu.
                                Data bertanda <span class="text-danger">*</span> wajib diisi.
                            </p>
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success d-flex align-items-center gap-2" role="status">
                                <i class="bi bi-check-circle-fill" aria-hidden="true"></i>
                                <span>{{ session('success') }}</span>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                Mohon periksa kembali data yang Anda masukkan.
                            </div>
                        @endif

                        <form action="{{ route('tamu.store') }}" method="POST">
                            @csrf

                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="nama" class="form-label fw-semibold">
                                        Nama lengkap <span class="text-danger">*</span>
                                    </label>
                                    <input
                                        class="form-control @error('nama') is-invalid @enderror"
                                        id="nama"
                                        name="nama"
                                        type="text"
                                        value="{{ old('nama') }}"
                                        maxlength="100"
                                        autocomplete="name"
                                        required>
                                    @error('nama')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12 col-md-6">
                                    <label for="jenis_kelamin" class="form-label fw-semibold">
                                        Jenis kelamin <span class="text-danger">*</span>
                                    </label>
                                    <select
                                        class="form-select @error('jenis_kelamin') is-invalid @enderror"
                                        id="jenis_kelamin"
                                        name="jenis_kelamin"
                                        required>
                                        <option value="">Pilih jenis kelamin</option>
                                        <option value="Laki-laki" @selected(old('jenis_kelamin') === 'Laki-laki')>
                                            Laki-laki
                                        </option>
                                        <option value="Perempuan" @selected(old('jenis_kelamin') === 'Perempuan')>
                                            Perempuan
                                        </option>
                                    </select>
                                    @error('jenis_kelamin')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12 col-md-6">
                                    <label for="no_hp" class="form-label fw-semibold">
                                        Nomor HP <span class="text-danger">*</span>
                                    </label>
                                    <input
                                        class="form-control @error('no_hp') is-invalid @enderror"
                                        id="no_hp"
                                        name="no_hp"
                                        type="tel"
                                        value="{{ old('no_hp') }}"
                                        maxlength="20"
                                        autocomplete="tel"
                                        inputmode="tel"
                                        required>
                                    @error('no_hp')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="email" class="form-label fw-semibold">
                                        Email <span class="text-danger">*</span>
                                    </label>
                                    <input
                                        class="form-control @error('email') is-invalid @enderror"
                                        id="email"
                                        name="email"
                                        type="email"
                                        value="{{ old('email') }}"
                                        maxlength="100"
                                        autocomplete="email"
                                        required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="alamat" class="form-label fw-semibold">
                                        Alamat <span class="text-danger">*</span>
                                    </label>
                                    <textarea
                                        class="form-control @error('alamat') is-invalid @enderror"
                                        id="alamat"
                                        name="alamat"
                                        rows="3"
                                        autocomplete="street-address"
                                        required>{{ old('alamat') }}</textarea>
                                    @error('alamat')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="instansi" class="form-label fw-semibold">
                                        Instansi / organisasi <span class="text-danger">*</span>
                                    </label>
                                    <input
                                        class="form-control @error('instansi') is-invalid @enderror"
                                        id="instansi"
                                        name="instansi"
                                        type="text"
                                        value="{{ old('instansi') }}"
                                        maxlength="150"
                                        autocomplete="organization"
                                        aria-describedby="instansiHelp"
                                        required>
                                    <div class="form-text" id="instansiHelp">
                                        Jika datang atas nama pribadi, isi dengan “Perorangan”.
                                    </div>
                                    @error('instansi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex flex-column flex-sm-row justify-content-end gap-2 mt-4">
                                <button class="btn btn-primary px-4" type="submit">
                                    <i class="bi bi-send me-1" aria-hidden="true"></i>
                                    Kirim data
                                </button>
                            </div>
                        </form>
                    </div>
                </section>

                <p class="small text-body-secondary text-center mt-3 mb-0">
                    Data digunakan untuk keperluan pencatatan buku tamu.
                </p>
            </div>
        </div>
    </main>

    <footer class="border-top bg-white py-3 mt-auto">
        <div class="container text-center small text-body-secondary">
            Buku Tamu
        </div>
    </footer>

    <script src="{{ asset('template/assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
