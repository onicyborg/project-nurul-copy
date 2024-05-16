@extends('layout.master-user')

@section('title')
    Profile
@endsection

@section('content')
    @php
        // Mendapatkan tanggal lahir dari user
        $tanggal_lahir = \Carbon\Carbon::createFromFormat('Y-m-d', Auth::user()->tanggal_lahir);

        // Mendapatkan tanggal saat ini
        $sekarang = \Carbon\Carbon::now();

        // Menghitung umur
        $umur = $sekarang->diffInYears($tanggal_lahir);
    @endphp
    <div class="card p-5">
        <div>
            <div class="row">
                <div class="col-md-10">
                    <button type="button" class="btn btn-link position-relative text-decoration-none">
                        <h1>{{ Auth::user()->name }}</h1>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            kandidat
                        </span>
                    </button>
                    <h6 class="ps-3">
                        @if (Auth::user()->alamat != '')
                            {{ Auth::user()->alamat }}
                        @else
                            -
                        @endif
                    </h6>
                    <div class="d-flex ps-3">
                        <a href="{{ asset(Auth::user()->file_cv) }}" download class="btn btn-icon btn-secondary me-2"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download CV">
                            <span class="ti ti-file"></span>
                        </a>
                        <a href="{{ asset(Auth::user()->file_dokumen_pendukung) }}" download class="btn btn-secondary me-2"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download Dokumen Pendukung">
                            <i class="ti ti-files"></i>
                        </a>
                        <a href="{{ asset(Auth::user()->file_foto) }}" download class="btn btn-secondary me-2"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download Foto">
                            <i class="ti ti-photo"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-2 d-flex justify-content-end">
                    @if (Auth::user()->file_foto != '')
                        <img src="{{ asset(Auth::user()->file_foto) }}" alt="User Profile"
                            class="img-fluid rounded-circle pe-3" style="height: 120px;">
                    @else
                        <img src="{{ asset('assets/images/profile/user-1.jpg') }}" alt="User Profile"
                            class="img-fluid rounded-circle pe-3" style="height: 120px;">
                    @endif
                </div>

            </div>


            <hr>
            <div class="ps-3">
                <strong>Contact Info</strong>
                <p>{{ Auth::user()->email }} - {{ Auth::user()->nomor_hp }}</p>
            </div>
            <div class="ps-3">
                <strong>General Information</strong>
                <ul class="list-unstyled">
                    <li>Tempat Lahir: {{ Auth::user()->tempat_lahir }}</li>
                    <li>Tanggal Lahir: {{ Auth::user()->tanggal_lahir }}</li>
                    <li>Umur: {{ $umur }}</li>
                    <li>Pendidikan Terakhir:
                        @if (Auth::user()->pendidikan_terakhir != '')
                            {{ Auth::user()->pendidikan_terakhir }}
                        @else
                            -
                        @endif
                    </li>
                </ul>
            </div>
            <div class="ps-3">
                <a href="/kandidat/update-profile" class="btn btn-secondary ps-3">Update Profile</a>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Ubah Password
                </button>
            </div>

        </div>
    </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="/update/password" method="post">
                @csrf
                @method('put')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Perbarui Password</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="old_password" class="form-label">Password Saat Ini</label>
                            <input type="password" name="old_password"
                                class="form-control @error('old_password') is-invalid @enderror" id="old_password"
                                aria-describedby="textHelp" placeholder="Password Saat Ini">
                            @error('old_password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="new_password" class="form-label">Password Baru</label>
                            <input type="password" name="new_password"
                                class="form-control @error('new_password') is-invalid @enderror" id="new_password"
                                aria-describedby="textHelp" placeholder="Password Baru">
                            @error('new_password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="new_password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                            <input type="password" name="new_password_confirmation"
                                class="form-control @error('new_password_confirmation') is-invalid @enderror"
                                id="new_password_confirmation" aria-describedby="textHelp" placeholder="Password Baru">
                            @error('new_password_confirmation')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/swal.min.js') }}"></script>
    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Berhasil',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'Ok'
            });
        </script>
    @endif
    @if ($errors->any())
        <script>
            Swal.fire({
                title: 'Gagal',
                text: "Password Gagal Diperbarui",
                icon: 'error',
                confirmButtonText: 'Ok'
            });
        </script>
    @endif
@endpush
