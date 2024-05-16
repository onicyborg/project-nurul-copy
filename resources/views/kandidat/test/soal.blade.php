@extends('layout.master-user')

@section('title')
    Test Overview
@endsection

@section('content')
    <div class="container mt-5">
        <div class="card p-5 text-justify">
            <h1 class="text-center">Question</h1>
            <form action="/submit-test" method="post">
                @csrf
                <div class="mb-3">
                    <h6>1. Apa tingkat pendidikan terakhir Anda? (Pendidikan)</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_1" id="pertanyaan_1_a" value="1" {{ old('pertanyaan_1') == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_1_a">
                            SMA
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_1" id="pertanyaan_1_b"
                            value="2" {{ old('pertanyaan_1') == 2 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_1_b">
                            D3
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_1" id="pertanyaan_1_c"
                            value="3" {{ old('pertanyaan_1') == 3 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_1_c">
                            S1
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_1" id="pertanyaan_1_d"
                            value="4" {{ old('pertanyaan_1') == 4 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_1_d">
                            S2
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <h6>2. Berapa tahun pengalaman kerja yang Anda miliki di bidang perkebunan kelapa sawit? (Pengalaman
                        Kerja
                        di Perkebunan Kelapa Sawit)</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_2" id="pertanyaan_2_a"
                            value="1" {{ old('pertanyaan_2') == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_2_a">
                            Kurang dari 1 tahun
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_2" id="pertanyaan_2_b"
                            value="2" {{ old('pertanyaan_2') == 2 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_2_b">
                            1-3 tahun
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_2" id="pertanyaan_2_c"
                            value="3" {{ old('pertanyaan_2') == 3 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_2_c">
                            4-6 tahun
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_2" id="pertanyaan_2_d"
                            value="4" {{ old('pertanyaan_2') == 4 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_2_d">
                            Lebih dari 6 tahun
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <h6>3. Seberapa mahir Anda dalam menggunakan alat dan mesin perkebunan kelapa sawit? (Kemampuan Teknis)
                    </h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_3" id="pertanyaan_3_a"
                            value="1" {{ old('pertanyaan_3') == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_3_a">
                            Pemula
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_3" id="pertanyaan_3_b"
                            value="2" {{ old('pertanyaan_3') == 2 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_3_b">
                            Menengah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_3" id="pertanyaan_3_c"
                            value="3" {{ old('pertanyaan_3') == 3 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_3_c">
                            Mahir
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_3" id="pertanyaan_3_d"
                            value="4" {{ old('pertanyaan_3') == 4 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_3_d">
                            Ahli
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <h6>4.Apakah Anda memiliki pengalaman dalam manajemen kebun kelapa sawit? (Manajemen Kebun)</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_4" id="pertanyaan_4_a"
                            value="1" {{ old('pertanyaan_4') == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_4_a">
                            Tidak ada pengalaman
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_4" id="pertanyaan_4_b"
                            value="2" {{ old('pertanyaan_4') == 2 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_4_b">
                            Sedikit pengalaman
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_4" id="pertanyaan_4_c"
                            value="3" {{ old('pertanyaan_4') == 3 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_4_c">
                            Cukup pengalaman
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_4" id="pertanyaan_4_d"
                            value="4" {{ old('pertanyaan_4') == 4 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_4_d">
                            Sangat berpengalaman
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <h6>5. Bagaimana Anda menilai kemampuan komunikasi Anda di lapangan? (Kemampuan Komunikasi)</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_5" id="pertanyaan_5_a"
                            value="1" {{ old('pertanyaan_5') == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_5_a">
                            Sangat buruk
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_5" id="pertanyaan_5_b"
                            value="2" {{ old('pertanyaan_5') == 2 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_5_b">
                            Buruk
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_5" id="pertanyaan_5_c"
                            value="3" {{ old('pertanyaan_5') == 3 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_5_c">
                            Baik
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_5" id="pertanyaan_5_d"
                            value="4" {{ old('pertanyaan_5') == 4 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_5_d">
                            Sangat baik
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <h6>6. Seberapa sering Anda bersedia bekerja lembur atau di luar jam kerja normal jika diperlukan?
                        (Kesediaan Bekerja Lembur)</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_6" id="pertanyaan_6_a"
                            value="1" {{ old('pertanyaan_6') == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_6_a">
                            Tidak pernah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_6" id="pertanyaan_6_b"
                            value="2" {{ old('pertanyaan_6') == 2 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_6_b">
                            Jarang
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_6" id="pertanyaan_6_c"
                            value="3" {{ old('pertanyaan_6') == 3 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_6_c">
                            Kadang-kadang
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_6" id="pertanyaan_6_d"
                            value="4" {{ old('pertanyaan_6') == 4 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_6_d">
                            Sering
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <h6>7. Apakah Anda memiliki sertifikasi atau pelatihan yang relevan dengan perkebunan kelapa sawit?
                        (Sertifikasi atau Pelatihan)</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_7" id="pertanyaan_7_a"
                            value="1" {{ old('pertanyaan_7') == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_7_a">
                            Tidak ada
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_7" id="pertanyaan_7_b"
                            value="2" {{ old('pertanyaan_7') == 2 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_7_b">
                            Ada, tetapi tidak relevan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_7" id="pertanyaan_7_c"
                            value="3" {{ old('pertanyaan_7') == 3 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_7_c">
                            Ada, sedikit relevan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_7" id="pertanyaan_7_d"
                            value="4" {{ old('pertanyaan_7') == 4 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_7_d">
                            Ada, sangat relevan
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <h6>8. Seberapa baik Anda dalam mengelola waktu dan prioritas dalam tugas lapangan? (Manajemen Waktu dan
                        Prioritas)</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_8" id="pertanyaan_8_a"
                            value="1" {{ old('pertanyaan_8') == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_8_a">
                            Sangat buruk
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_8" id="pertanyaan_8_b"
                            value="2" {{ old('pertanyaan_8') == 2 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_8_b">
                            Buruk
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_8" id="pertanyaan_8_c"
                            value="3" {{ old('pertanyaan_8') == 3 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_8_c">
                            Baik
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_8" id="pertanyaan_8_d"
                            value="4" {{ old('pertanyaan_8') == 4 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_8_d">
                            Sangat baik
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <h6>9. Bagaimana Anda menggambarkan kemampuan analitis Anda dalam memecahkan masalah di lapangan?
                        (Kemampuan
                        Analitis)</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_9" id="pertanyaan_9_a"
                            value="1" {{ old('pertanyaan_9') == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_9_a">
                            Sangat buruk
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_9" id="pertanyaan_9_b"
                            value="2" {{ old('pertanyaan_9') == 2 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_9_b">
                            Buruk
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_9" id="pertanyaan_9_c"
                            value="3" {{ old('pertanyaan_9') == 3 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_9_c">
                            Baik
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_9" id="pertanyaan_9_d"
                            value="4" {{ old('pertanyaan_9') == 4 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_9_d">
                            Sangat baik
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <h6>10. Seberapa familiar Anda dengan teknik pemupukan dan pengendalian hama pada perkebunan kelapa
                        sawit?
                        (Pengetahuan Teknik Pemupukan dan Pengendalian Hama)</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_10" id="pertanyaan_10_a"
                            value="1" {{ old('pertanyaan_10') == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_10_a">
                            Tidak familiar sama sekali
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_10" id="pertanyaan_10_b"
                            value="2" {{ old('pertanyaan_10') == 2 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_10_b">
                            Sedikit familiar
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_10" id="pertanyaan_10_c"
                            value="3" {{ old('pertanyaan_10') == 3 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_10_c">
                            Cukup familiar
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_10" id="pertanyaan_10_d"
                            value="4" {{ old('pertanyaan_10') == 4 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_10_d">
                            Sangat familiar
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <h6>11. Bagaimana Anda biasanya menangani stres dan tantangan di lapangan? (Kemampuan Mengelola Stres)
                    </h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_11" id="pertanyaan_11_a"
                            value="1" {{ old('pertanyaan_11') == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_11_a">
                            Sangat buruk
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_11" id="pertanyaan_11_b"
                            value="2" {{ old('pertanyaan_11') == 2 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_11_b">
                            Buruk
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_11" id="pertanyaan_11_c"
                            value="3" {{ old('pertanyaan_11') == 3 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_11_c">
                            Baik
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_11" id="pertanyaan_11_d"
                            value="4" {{ old('pertanyaan_11') == 4 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_11_d">
                            Sangat baik
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <h6>12. Bagaimana Anda biasanya menangani stres dan tantangan di lapangan? (Kemampuan Mengelola Stres)
                    </h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_12" id="pertanyaan_12_a"
                            value="1" {{ old('pertanyaan_12') == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_12_a">
                            Tidak pernah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_12" id="pertanyaan_12_b"
                            value="2" {{ old('pertanyaan_12') == 2 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_12_b">
                            Pernah sekali
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_12" id="pertanyaan_12_c"
                            value="3" {{ old('pertanyaan_12') == 3 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_12_c">
                            Beberapa kali
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_12" id="pertanyaan_12_d"
                            value="4" {{ old('pertanyaan_12') == 4 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_12_d">
                            Sering
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <h6>13. Seberapa baik Anda dalam beradaptasi dengan perubahan cuaca dan kondisi lapangan? (Adaptabilitas
                        dan
                        Fleksibilitas)</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_13" id="pertanyaan_13_a"
                            value="1" {{ old('pertanyaan_13') == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_13_a">
                            Sangat buruk
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_13" id="pertanyaan_13_b"
                            value="2" {{ old('pertanyaan_13') == 2 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_13_b">
                            Buruk
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_13" id="pertanyaan_13_c"
                            value="3" {{ old('pertanyaan_13') == 3 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_13_c">
                            Baik
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_13" id="pertanyaan_13_d"
                            value="4" {{ old('pertanyaan_13') == 4 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_13_d">
                            Sangat baik
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <h6>14. Seberapa penting bagi Anda untuk bekerja dalam lingkungan yang kolaboratif di lapangan?
                        (Motivasi
                        dan Tujuan Karir)</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_14" id="pertanyaan_14_a"
                            value="1" {{ old('pertanyaan_14') == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_14_a">
                            Tidak penting sama sekali
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_14" id="pertanyaan_14_b"
                            value="2" {{ old('pertanyaan_14') == 2 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_14_b">
                            Tidak terlalu penting
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_14" id="pertanyaan_14_c"
                            value="3" {{ old('pertanyaan_14') == 3 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_14_c">
                            Penting
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_14" id="pertanyaan_14_d"
                            value="4" {{ old('pertanyaan_14') == 4 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_14_d">
                            Sangat penting
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <h6>15. Seberapa sering Anda absen dari pekerjaan dalam tahun terakhir? (Kehadiran dan Etika Kerja)</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_15" id="pertanyaan_15_a"
                            value="1" {{ old('pertanyaan_15') == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_15_a">
                            Sangat sering
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_15" id="pertanyaan_15_b"
                            value="2" {{ old('pertanyaan_15') == 2 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_15_b">
                            Cukup sering
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_15" id="pertanyaan_15_c"
                            value="3" {{ old('pertanyaan_15') == 3 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_15_c">
                            Jarang
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pertanyaan_15" id="pertanyaan_15_d"
                            value="4" {{ old('pertanyaan_15') == 4 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pertanyaan_15_d">
                            Sangat jarang
                        </label>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('styles')
@endpush

@push('scripts')
    <script src="{{ asset('assets/js/swal.min.js') }}"></script>
    @if ($errors->any())
        <script>
            Swal.fire({
                title: 'Error',
                text: "Seluruh pertanyaan wajib di jawab",
                icon: 'error',
                confirmButtonText: 'Ok'
            });
        </script>
    @endif
@endpush
