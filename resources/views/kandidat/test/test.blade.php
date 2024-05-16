@extends('layout.master-user')

@section('title')
    Test Overview
@endsection

@section('content')
    <div class="container mt-5">
        <div class="card p-5 text-justify">
            <h1 class="text-center">Test Overview</h1>
            <p>Selamat datang di halaman tes pemilihan calon karyawan. Tes ini dirancang untuk menilai kecocokan Anda
                sebagaikandidat karyawan di bidang lapangan perkebunan kelapa sawit. Tes ini terdiri dari 15 soal pilihan
                ganda
                yang mencakup berbagai aspek penting seperti pendidikan, pengalaman kerja, kemampuan teknis, manajemen
                kebun, dan
                keterampilan lainnya yang relevan dengan posisi yang Anda lamar.
            </p>

            <p>
                Setiap soal akan memberikan gambaran tentang keahlian dan kesiapan Anda dalam menjalankan tugas-tugas di
                perkebunan kelapa sawit. Jawaban Anda akan dianalisis menggunakan metode profile matching untuk menentukan
                seberapa
                cocok Anda dengan kriteria yang diinginkan oleh perusahaan.
            </p>

            <p>
                Pastikan untuk menjawab setiap pertanyaan dengan jujur dan sebaik mungkin. Hasil dari tes ini akan menjadi
                bagian penting dalam proses seleksi karyawan kami. Semoga sukses dan selamat mengerjakan!
            </p>
            @if (Auth::user()->results->count() > 0)
                <div class="d-flex justify-content-center">
                    <button class="btn btn-secondary" disabled="disabled">Mulai</button>
                </div>
            @else
                <div class="d-flex justify-content-center">
                    <a href="/soal" class="btn btn-secondary">Mulai</a>
                </div>
            @endif
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .text-justify {
            text-align: justify
        }
    </style>
@endpush

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
@endpush
