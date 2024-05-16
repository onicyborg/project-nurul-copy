@extends('layout.master-user')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-8 d-flex align-items-strech">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                        <div class="mb-3 mb-sm-0">
                            <h5 class="card-title fw-semibold">Leaderboard Kandidat</h5>
                        </div>
                    </div>
                    <div class="table-responsive rounded-3">
                        <table class="table table-striped">
                            <thead>
                                <tr class="text-center bg-primary text-white">
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Skor</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $no => $item)
                                    <tr class="text-center">
                                        <th scope="row">{{ $no + 1 }}</th>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->hasil_akhir }}</td>
                                        <td>
                                            <a href="/hrd/detail-kandidat/{{ $item->user->id }}"
                                                class="btn btn-primary text-white btn-sm">Detail</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Yearly Breakup -->
                    <div class="card overflow-hidden">
                        <div class="card-body p-4">
                            <h5 class="card-title mb-9 fw-semibold">Score Anda</h5>
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <h4 class="fw-semibold mb-3">
                                        @if (Auth::user()->results != null)
                                            {{ Auth::user()->results->hasil_akhir }}
                                        @else
                                            -
                                        @endif
                                    </h4>
                                    <div class="d-flex align-items-center mb-3">
                                        <span
                                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-progress-alert" width="20"
                                                height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M10 20.777a8.942 8.942 0 0 1 -2.48 -.969" />
                                                <path d="M14 3.223a9.003 9.003 0 0 1 0 17.554" />
                                                <path d="M4.579 17.093a8.961 8.961 0 0 1 -1.227 -2.592" />
                                                <path d="M3.124 10.5c.16 -.95 .468 -1.85 .9 -2.675l.169 -.305" />
                                                <path d="M6.907 4.579a8.954 8.954 0 0 1 3.093 -1.356" />
                                                <path d="M12 8v4" />
                                                <path d="M12 16v.01" />
                                            </svg>
                                        </span>
                                        <p class="fs-3 mb-0">Proses Recruitment Masih Berjalan</p>
                                    </div>
                                    @if (Auth::user()->results == null)
                                        <div class="d-flex justify-content-start">
                                            <p class="fw-bold"><span class="text-danger">* &nbsp;</span>Ikuti Test Untuk
                                                Mengetahui Score Anda</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!-- Monthly Earnings -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h5 class="card-title mb-9 fw-semibold">Ikuti Test Recruitment</h5>
                                    <div class="d-flex align-items-center pb-1">
                                        <span
                                            class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-pencil text-danger"></i>
                                        </span>
                                        <p class="text-dark me-1 fs-3 mb-0">Silahkan ikuti test recruitment</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex justify-content-end">
                                        <div
                                            class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-messages fs-6"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <a href="/test" class="btn btn-primary">Start Test</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
