@extends('layout.master')

@section('title')
    Test Overview
@endsection

@section('content')
    <div class="container mt-5">
        <div class="card p-5 text-justify">
            <h1 class="text-center">Question</h1>
            <div>
                <h6>1. Apa tingkat pendidikan terakhir Anda? (Pendidikan)</h6>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_1" id="pertanyaan_1" value="option1" checked>
                    <label class="form-check-label" for="pertanyaan_1">
                        SMA
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_1" id="pertanyaan_2" value="option2">
                    <label class="form-check-label" for="pertanyaan_2">
                        D3
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_1" id="pertanyaan_3" value="option2">
                    <label class="form-check-label" for="pertanyaan_3">
                        S1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_1" id="pertanyaan_4" value="option2">
                    <label class="form-check-label" for="pertanyaan_4">
                        S2
                    </label>
                </div>
            </div>
            <div>
                <h6>2. Berapa tahun pengalaman kerja yang Anda miliki di bidang perkebunan kelapa sawit? (Pengalaman Kerja
                    di Perkebunan Kelapa Sawit)</h6>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_2" id="pertanyaan_1" value="option1"
                        checked>
                    <label class="form-check-label" for="pertanyaan_2">
                        Kurang dari 1 tahun
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_2" id="pertanyaan_2" value="option2">
                    <label class="form-check-label" for="pertanyaan_2">
                        1-3 tahun
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_2" id="pertanyaan_2" value="option3">
                    <label class="form-check-label" for="pertanyaan_2">
                        4-6 tahun
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_2" id="pertanyaan_2" value="option4">
                    <label class="form-check-label" for="pertanyaan_2">
                        Lebih dari 6 tahun
                    </label>
                </div>
            </div>
            <div>
                <h6>3. Seberapa mahir Anda dalam menggunakan alat dan mesin perkebunan kelapa sawit? (Kemampuan Teknis)</h6>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_1" value="option1"
                        checked>
                    <label class="form-check-label" for="pertanyaan_1">
                        Pemula
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_2" value="option2">
                    <label class="form-check-label" for="pertanyaan_2">
                        Menengah
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_3" value="option2">
                    <label class="form-check-label" for="pertanyaan_3">
                        Mahir
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_4" value="option2">
                    <label class="form-check-label" for="pertanyaan_4">
                        Ahli
                    </label>
                </div>
            </div>
            <div>
                <h6>4.Apakah Anda memiliki pengalaman dalam manajemen kebun kelapa sawit? (Manajemen Kebun)</h6>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_1" value="option1"
                        checked>
                    <label class="form-check-label" for="pertanyaan_1">
                        Tidak ada pengalaman
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_2"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_2">
                        Sedikit pengalaman
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_3"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_3">
                        Cukup pengalaman
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_4"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_4">
                        Sangat berpengalaman
                    </label>
                </div>
            </div>
            <div>
                <h6>5. Bagaimana Anda menilai kemampuan komunikasi Anda di lapangan? (Kemampuan Komunikasi)</h6>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_1" value="option1"
                        checked>
                    <label class="form-check-label" for="pertanyaan_1">
                        Sangat buruk
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_2"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_2">
                        Buruk
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_3"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_3">
                        Baik
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_4"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_4">
                        Sangat baik
                    </label>
                </div>
            </div>
            <div>
                <h6>6. Seberapa sering Anda bersedia bekerja lembur atau di luar jam kerja normal jika diperlukan?
                    (Kesediaan Bekerja Lembur)</h6>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_1" value="option1"
                        checked>
                    <label class="form-check-label" for="pertanyaan_1">
                        Tidak pernah
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_2"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_2">
                        Jarang
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_3"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_3">
                        Kadang-kadang
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_4"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_4">
                        Sering
                    </label>
                </div>
            </div>
            <div>
                <h6>7. Apakah Anda memiliki sertifikasi atau pelatihan yang relevan dengan perkebunan kelapa sawit?
                    (Sertifikasi atau Pelatihan)</h6>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_1" value="option1"
                        checked>
                    <label class="form-check-label" for="pertanyaan_1">
                        Tidak ada
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_2"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_2">
                        Ada, tetapi tidak relevan
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_3"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_3">
                        Ada, sedikit relevan
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_4"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_4">
                        Ada, sangat relevan
                    </label>
                </div>
            </div>
            <div>
                <h6>8. Seberapa baik Anda dalam mengelola waktu dan prioritas dalam tugas lapangan? (Manajemen Waktu dan
                    Prioritas)</h6>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_1" value="option1"
                        checked>
                    <label class="form-check-label" for="pertanyaan_1">
                        Sangat buruk
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_2"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_2">
                        Buruk
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_3"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_3">
                        Baik
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_4"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_4">
                        Sangat baik
                    </label>
                </div>
            </div>
            <div>
                <h6>9. Bagaimana Anda menggambarkan kemampuan analitis Anda dalam memecahkan masalah di lapangan? (Kemampuan
                    Analitis)</h6>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_1" value="option1"
                        checked>
                    <label class="form-check-label" for="pertanyaan_1">
                        Sangat buruk
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_2"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_2">
                        Buruk
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_3"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_3">
                        Baik
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_4"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_4">
                        Sangat baik
                    </label>
                </div>
            </div>
            <div>
                <h6>10. Seberapa familiar Anda dengan teknik pemupukan dan pengendalian hama pada perkebunan kelapa sawit?
                    (Pengetahuan Teknik Pemupukan dan Pengendalian Hama)</h6>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_1" value="option1"
                        checked>
                    <label class="form-check-label" for="pertanyaan_1">
                        Tidak familiar sama sekali
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_2"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_2">
                        Sedikit familiar
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_3"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_3">
                        Cukup familiar
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_4"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_4">
                        Sangat familiar
                    </label>
                </div>
            </div>
            <div>
                <h6>11. Bagaimana Anda biasanya menangani stres dan tantangan di lapangan? (Kemampuan Mengelola Stres)</h6>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_1" value="option1"
                        checked>
                    <label class="form-check-label" for="pertanyaan_1">
                        Sangat buruk
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_2"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_2">
                        Buruk
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_3"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_3">
                        Baik
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_4"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_4">
                        Sangat baik
                    </label>
                </div>
            </div>
            <div>
                <h6>12. Bagaimana Anda biasanya menangani stres dan tantangan di lapangan? (Kemampuan Mengelola Stres)</h6>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_1" value="option1"
                        checked>
                    <label class="form-check-label" for="pertanyaan_1">
                        Tidak pernah
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_2"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_2">
                        Pernah sekali
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_3"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_3">
                        Beberapa kali
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_4"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_4">
                        Sering
                    </label>
                </div>
            </div>
            <div>
                <h6>13. Seberapa baik Anda dalam beradaptasi dengan perubahan cuaca dan kondisi lapangan? (Adaptabilitas dan
                    Fleksibilitas)</h6>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_1" value="option1"
                        checked>
                    <label class="form-check-label" for="pertanyaan_1">
                        Sangat buruk
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_2"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_2">
                        Buruk
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_3"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_3">
                        Baik
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_4"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_4">
                        Sangat baik
                    </label>
                </div>
            </div>
            <div>
                <h6>14. Seberapa penting bagi Anda untuk bekerja dalam lingkungan yang kolaboratif di lapangan? (Motivasi
                    dan Tujuan Karir)</h6>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_1" value="option1"
                        checked>
                    <label class="form-check-label" for="pertanyaan_1">
                        Tidak penting sama sekali
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_2"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_2">
                        Tidak terlalu penting
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_3"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_3">
                        Penting
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_4"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_4">
                        Sangat penting
                    </label>
                </div>
            </div>
            <div>
                <h6>15. Seberapa sering Anda absen dari pekerjaan dalam tahun terakhir? (Kehadiran dan Etika Kerja)</h6>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_1" value="option1"
                        checked>
                    <label class="form-check-label" for="pertanyaan_1">
                        Sangat sering
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_2"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_2">
                        Cukup sering
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_3"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_3">
                        Jarang
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pertanyaan_" id="pertanyaan_4"
                        value="option2">
                    <label class="form-check-label" for="pertanyaan_4">
                        Sangat jarang
                    </label>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <a href="" class="btn btn-secondary">Mulai</a>
            </div>
        </div>
    </div>
@endsection

@push('styles')
@endpush

@push('scripts')
@endpush
