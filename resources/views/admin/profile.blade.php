@extends('layout.master-admin')

@section('title')
    Profile
@endsection

@section('content')
    @php
        // Mendapatkan tanggal lahir dari user
        $tanggal_lahir = \Carbon\Carbon::createFromFormat('Y-m-d', $data->tanggal_lahir);

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
                        <h1>{{ $data->name }}</h1>
                    </button>
                    <h6 class="ps-3">
                        {{ $data->alamat }}
                    </h6>
                    <div class="d-flex ps-3">
                        <a href="{{ asset($data->file_cv) }}" download class="btn btn-icon btn-primary me-2"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download CV">
                            <span class="ti ti-file"></span>
                        </a>
                        <a href="{{ asset($data->file_dokumen_pendukung) }}" download class="btn btn-primary me-2"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download Dokumen Pendukung">
                            <i class="ti ti-files"></i>
                        </a>
                        <a href="{{ asset($data->file_foto) }}" download class="btn btn-primary me-2"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download Foto">
                            <i class="ti ti-photo"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-2 d-flex justify-content-end">
                    @if (Auth::user()->file_foto != '')
                        <img src="{{ asset($data->file_foto) }}" alt="User Profile" class="img-fluid rounded-circle pe-3"
                            style="height: 120px;">
                    @else
                        <img src="{{ asset('assets/images/profile/user-1.jpg') }}" alt="User Profile"
                            class="img-fluid rounded-circle pe-3" style="height: 120px;">
                    @endif
                </div>
            </div>
            <hr>
            <div class="ps-3">
                <strong>Contact Info</strong>
                <p>{{ $data->email }} - {{ $data->nomor_hp }}</p>
            </div>
            <div class="ps-3 mb-3 mt-2">
                <strong>Status</strong>
                <div class="d-flex">
                    <div class="btn btn-sm btn-danger rounded-pill disabled mt-2">Kandidat</div>
                </div>
            </div>
            <div class="ps-3">
                <strong>General Information</strong>
                <ul class="list-unstyled">
                    <li>Tempat Lahir: {{ $data->tempat_lahir }}</li>
                    <li>Tanggal Lahir: {{ $data->tanggal_lahir }}</li>
                    <li>Umur: {{ $umur }} Tahun</li>
                    <li>Pendidikan Terakhir:
                        @if ($data->pendidikan_terakhir != '')
                            {{ $data->pendidikan_terakhir }}
                        @else
                            -
                        @endif
                    </li>
                </ul>
            </div>
            <div class="ps-3">
                <strong>Skor Test: {{ $data->results->hasil_akhir }} Point</strong>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
