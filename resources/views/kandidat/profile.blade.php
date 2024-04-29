@extends('layout.master')

@section('content')
    @php
        // Mendapatkan tanggal lahir dari user
        $tanggal_lahir = \Carbon\Carbon::createFromFormat('Y-m-d', Auth::user()->tanggal_lahir);

        // Mendapatkan tanggal saat ini
        $sekarang = \Carbon\Carbon::now();

        // Menghitung umur
        $umur = $sekarang->diffInYears($tanggal_lahir);
    @endphp
    <div class="row">
        <div class="col-md-4">
            @if (Auth::user()->file_foto != '')
                <img src="{{ asset(Auth::user()->file_foto) }}" alt="User Profile" class="img-fluid rounded-circle"
                    style="height: 250px;">
            @else
                <img src="{{ asset('assets/images/profile/user-1.jpg') }}" alt="User Profile" class="img-fluid rounded-circle"
                    style="height: 250px;">
            @endif
        </div>
        <div class="col-md-8">
            <h1>{{ Auth::user()->name }}</h1>
            <p>Kandidat</p>
            <ul class="list-unstyled">
                <li><strong>Email:</strong> {{ Auth::user()->email }}</li>
                <li><strong>Nomor HP:</strong> {{ Auth::user()->nomor_hp }}</li>
                <li><strong>Tempat Lahir:</strong> {{ Auth::user()->tempat_lahir }}</li>
                <li><strong>Tanggal Lahir:</strong> {{ Auth::user()->tanggal_lahir }}</li>
                <li><strong>Umur:</strong> {{ $umur }}</li>
                <li><strong>Gender:</strong> {{ Auth::user()->gender }}</li>
                <li><strong>Pendidikan Terakhir:</strong>
                    @if (Auth::user()->pendidikan_terakhir != '')
                        {{ Auth::user()->pendidikan_terakhir }}
                    @else
                        -
                    @endif
                </li>
                <li><strong>Alamat:</strong>
                    @if (Auth::user()->alamat != '')
                        {{ Auth::user()->alamat }}
                    @else
                        -
                    @endif
                </li>
            </ul>
            <a href="{{ asset(Auth::user()->file_cv) }}" download class="btn btn-secondary">
                <i class="ti ti-download"></i> CV
            </a>
            <a href="{{ asset(Auth::user()->file_dokumen_pendukung) }}" download class="btn btn-secondary">
                <i class="ti ti-download"></i> Dokumen Pendukung
            </a>
            <a href="{{ asset(Auth::user()->file_foto) }}" download class="btn btn-secondary">
                <i class="ti ti-download"></i> Photos
            </a>

            <a href="/kandidat/update-profile" class="btn btn-secondary">Update Profile</a>
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Ubah Password
            </button>
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
