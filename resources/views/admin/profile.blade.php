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

        // Ideal values and bobots
        $idealValues = [
            1 => 4,
            2 => 4,
            3 => 4,
            4 => 4,
            5 => 4,
            6 => 4,
            7 => 4,
            8 => 4,
            9 => 4,
            10 => 4,
            11 => 4,
            12 => 4,
            13 => 4,
            14 => 4,
            15 => 4,
        ];

        $bobots = [
            1 => 10,
            2 => 15,
            3 => 10,
            4 => 10,
            5 => 5,
            6 => 5,
            7 => 5,
            8 => 5,
            9 => 5,
            10 => 5,
            11 => 5,
            12 => 5,
            13 => 5,
            14 => 5,
            15 => 5,
        ];

        $total_score = 0;
        $detailPerhitungan = [];

        for($i = 1; $i <= 15; $i++) {
            $jawaban = $data->test->{"soal_$i"};
            $idealValue = $idealValues[$i];
            $gap = $idealValue - $jawaban;

            // Convert gap to score
            if ($gap == 0) {
                $score = 5;
            } elseif (abs($gap) == 1) {
                $score = 4;
            } elseif (abs($gap) == 2) {
                $score = 3;
            } elseif (abs($gap) == 3) {
                $score = 2;
            } else {
                $score = 1;
            }

            // Multiply the score by the weight of the criteria
            $bobot = $bobots[$i];
            $weightedScore = $score * ($bobot / 100);
            $total_score += $weightedScore;

            $detailPerhitungan[] = [
                'soal' => "Soal $i",
                'jawaban' => $jawaban,
                'ideal' => $idealValue,
                'gap' => $gap,
                'score' => $score,
                'bobot' => $bobot,
                'weightedScore' => $weightedScore,
            ];
        }
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
            <div class="ps-3">
                <div class="card mt-4">
                    <div class="card-header">
                        <strong>Detail Perhitungan Skor</strong>
                    </div>
                    <div class="card-body">
                        <div>
                            <strong>Rumus Perhitungan:</strong>
                            <p>Score = 5 - (Ideal Value - Jawaban)</p>
                            <p>Weighted Score = Score * (Bobot / 100)</p>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Soal</th>
                                    <th>Jawaban</th>
                                    <th>Ideal</th>
                                    <th>Gap</th>
                                    <th>Score</th>
                                    <th>Bobot (%)</th>
                                    <th>Weighted Score</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($detailPerhitungan as $detail)
                                    <tr>
                                        <td>{{ $detail['soal'] }}</td>
                                        <td>{{ $detail['jawaban'] }}</td>
                                        <td>{{ $detail['ideal'] }}</td>
                                        <td>{{ $detail['gap'] }}</td>
                                        <td>{{ $detail['score'] }}</td>
                                        <td>{{ $detail['bobot'] }}</td>
                                        <td>{{ $detail['weightedScore'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-3">
                            <strong>Total Skor: {{ $total_score }} Point</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
