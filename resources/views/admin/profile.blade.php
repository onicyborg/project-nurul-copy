@extends('layout.master-admin')

@section('title')
    Profile
@endsection

@section('content')
    {{-- @php
        // Mendapatkan tanggal lahir dari user
        $tanggal_lahir = \Carbon\Carbon::createFromFormat('Y-m-d', Auth::user()->tanggal_lahir);

        // Mendapatkan tanggal saat ini
        $sekarang = \Carbon\Carbon::now();

        // Menghitung umur
        $umur = $sekarang->diffInYears($tanggal_lahir);
    @endphp --}}
    <div class="card p-5">
        <div>
            <div class="row">
                <div class="col-md-10">
                    <button type="button" class="btn btn-link position-relative text-decoration-none">
                        <h1>Nurul Ahmad Solihin</h1>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            kandidat
                        </span>
                    </button>
                    <h6 class="ps-3">
                        Purwokerto
                    </h6>
                    <div class="d-flex ps-3">
                        <a href="" download class="btn btn-icon btn-secondary me-2" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" title="Download CV">
                            <span class="ti ti-file"></span>
                        </a>
                        <a href="" download class="btn btn-secondary me-2" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" title="Download Dokumen Pendukung">
                            <i class="ti ti-files"></i>
                        </a>
                        <a href="" download class="btn btn-secondary me-2" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" title="Download Foto">
                            <i class="ti ti-photo"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-2 d-flex justify-content-end">
                    {{-- @if (Auth::user()->file_foto != '')
                        <img src="{{ asset(Auth::user()->file_foto) }}" alt="User Profile"
                            class="img-fluid rounded-circle pe-3" style="height: 120px;">
                    @else
                        <img src="{{ asset('assets/images/profile/user-1.jpg') }}" alt="User Profile"
                            class="img-fluid rounded-circle pe-3" style="height: 120px;">
                    @endif --}}
                    <img src="{{ asset('assets/images/profile/user-1.jpg') }}" alt="User Profile"
                        class="img-fluid rounded-circle pe-3" style="height: 120px;">
                </div>

            </div>


            <hr>
            <div class="ps-3">
                <strong>Contact Info</strong>
                <p>nurul123@gmail.com - 08234xxxxxxx</p>
            </div>
            <div class="ps-3">
                <strong>General Information</strong>
                <ul class="list-unstyled">
                    <li>Tempat Lahir: Purwokerto</li>
                    <li>Tanggal Lahir: 16-05-2024</li>
                    <li>Umur: 1</li>
                    <li>Pendidikan Terakhir:
                        {{-- @if (Auth::user()->pendidikan_terakhir != '')
                            {{ Auth::user()->pendidikan_terakhir }}
                        @else
                            -
                        @endif --}}
                        S1
                    </li>
                </ul>
            </div>
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
