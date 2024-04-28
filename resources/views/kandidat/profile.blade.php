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
                <img src="{{ asset('storage/profile/' . Auth::user()->file_foto) }}" alt="User Profile"
                    class="img-fluid rounded-circle" style="height: 250px;">
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
            <a href="cv.pdf" download class="btn btn-secondary">Download CV</a>
            <a href="photos.zip" download class="btn btn-secondary">Download Dokumen Pendukung</a>
            <a href="photos.zip" download class="btn btn-secondary">Download Photos</a>
            <a href="photos.zip" download class="btn btn-secondary">Update Profile</a>
        </div>
    </div>
@endsection
