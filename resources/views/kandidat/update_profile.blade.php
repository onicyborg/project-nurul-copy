@extends('layout.master')

@section('content')
    <div class="container mt-5">
        <h1>Update Profile</h1>
        <form action="/update/profile" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="exampleInputtext1" class="form-label">Nama Lengkap</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                    id="exampleInputtext1" aria-describedby="textHelp" placeholder="Nama Lengkap"
                    value="{{ Auth::user()->name }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="disabledSelect" class="form-label">Jenis Kelamin</label>
                <select id="disabledSelect" class="form-select @error('gender') is-invalid @enderror" name="gender">
                    <option selected disabled>- Silahkan Pilih Gender -</option>
                    <option value="pria" @if (Auth::user()->gender == 'pria') selected @endif>Pria</option>
                    <option value="wanita" @if (Auth::user()->gender == 'wanita') selected @endif>Wanita</option>
                </select>
                @error('gender')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputtext1" class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror"
                    id="exampleInputtext1" aria-describedby="textHelp" placeholder="Tempat Lahir"
                    value="{{ Auth::user()->tempat_lahir }}">
                @error('tempat_lahir')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputtext1" class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                    id="exampleInputtext1" aria-describedby="textHelp" value="{{ Auth::user()->tanggal_lahir }}">
                @error('tanggal_lahir')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    id="email" aria-describedby="textHelp" placeholder="Email" value="{{ Auth::user()->email }}" disabled>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nomor_hp" class="form-label">Nomor Handphone</label>
                <input type="text" name="nomor_hp" class="form-control @error('nomor_hp') is-invalid @enderror"
                    id="nomor_hp" aria-describedby="textHelp" placeholder="Nomor Handphone" value="{{ Auth::user()->nomor_hp }}" disabled>
                @error('nomor_hp')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pendidikan_terakhir" class="form-label">Pendidikan Terakhir</label>
                <select name="pendidikan_terakhir" class="form-select @error('pendidikan_terakhir') is-invalid @enderror" id="pendidikan_terakhir">
                    <option value="" disabled selected>Pilih Pendidikan Terakhir</option>
                    <option value="SD" {{ Auth::user()->pendidikan_terakhir == 'SD' ? 'selected' : '' }}>SD</option>
                    <option value="SMP" {{ Auth::user()->pendidikan_terakhir == 'SMP' ? 'selected' : '' }}>SMP</option>
                    <option value="SMA/SMK" {{ Auth::user()->pendidikan_terakhir == 'SMA/SMK' ? 'selected' : '' }}>SMA/SMK</option>
                    <option value="Diploma" {{ Auth::user()->pendidikan_terakhir == 'Diploma' ? 'selected' : '' }}>Diploma</option>
                    <option value="Sarjana (S1)" {{ Auth::user()->pendidikan_terakhir == 'Sarjana (S1)' ? 'selected' : '' }}>Sarjana (S1)</option>
                    <option value="Magister (S2)" {{ Auth::user()->pendidikan_terakhir == 'Magister (S2)' ? 'selected' : '' }}>Magister (S2)</option>
                    <option value="Doktor (S3)" {{ Auth::user()->pendidikan_terakhir == 'Doktor (S3)' ? 'selected' : '' }}>Doktor (S3)</option>
                </select>
                @error('pendidikan_terakhir')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="3" placeholder="Alamat">{{ Auth::user()->alamat }}</textarea>
                @error('alamat')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="file_cv" class="form-label">Upload CV (Kosongkan jika tidak ingin mengubah CV)</label>
                <input type="file" class="form-control @error('file_cv') is-invalid @enderror" id="file_cv" name="file_cv">
                @error('file_cv')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="file_foto" class="form-label">Upload Photo (Kosongkan jika tidak ingin mengubah Photo)</label>
                <input type="file" class="form-control @error('file_foto') is-invalid @enderror" id="file_foto" name="file_foto">
                @error('file_foto')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="file_dokumen_pendukung" class="form-label">Upload Supporting Documents (Kosongkan jika tidak ingin mengubah Dokumen Pendukung)</label>
                <input type="file" class="form-control @error('file_dokumen_pendukung') is-invalid @enderror" id="file_dokumen_pendukung" name="file_dokumen_pendukung">
                @error('file_dokumen_pendukung')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Profile</button>
        </form>
    </div>
@endsection
