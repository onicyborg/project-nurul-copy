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
                    <div class="table-responsive rounded-3 table-container">
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
                                            @if ($status->status == 'in_progress')
                                                <button class="btn btn-primary text-white btn-sm" disabled>Detail</button>
                                            @else
                                                <a href="/kandidat/detail-kandidat/{{ $item->user->id }}"
                                                    class="btn btn-primary text-white btn-sm">Detail</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @if ($status->status == 'in_progress')
                        <div class="d-flex justify-content-start">
                            <p class="fw-bold"><span class="text-danger">* &nbsp;</span>Leaderboard belum bisa di lihat karena proses recruitment masih berjalan</p>
                        </div>
                    @endif
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
                                        @if ($status->status == 'in_progress')
                                            <span
                                                class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-refresh-dot">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
                                                    <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
                                                    <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                                </svg>
                                            </span>
                                            <p class="fs-3 mb-0">Proses Recruitment Masih Berjalan</p>
                                        @else
                                            <span
                                                class="me-1 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-refresh-off">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M20 11a8.1 8.1 0 0 0 -11.271 -6.305m-2.41 1.624a8.083 8.083 0 0 0 -1.819 2.681m-.5 -4v4h4" />
                                                    <path d="M4 13a8.1 8.1 0 0 0 13.671 4.691m2.329 -1.691v-1h-1" />
                                                    <path d="M3 3l18 18" />
                                                </svg>
                                            </span>
                                            <p class="fs-3 mb-0">Proses Recruitment Ditutup</p>
                                        @endif
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
                                @if ($status->status == 'in_progress')
                                    <a href="/test" class="btn btn-primary">Start Test</a>
                                @else
                                    <button class="btn btn-primary" disabled>Start Test</button>
                                @endif
                            </div>
                            @if ($status->status == 'closed')
                                <div class="d-flex justify-content-start mt-3">
                                    <p class="fw-bold"><span class="text-danger">* &nbsp;</span>Proses Recruitment Sudah
                                        Tutup</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="status" id="status" value="{{ $status->status }}">
@endsection

@push('styles')
    <style>
        /* Blur style */
        .table-container.blur {
            filter: blur(4px);
        }
    </style>
@endpush

@push('scripts')
    <script>
        var statusValue = document.getElementById('status').value;

        if (statusValue == 'in_progress') {
            document.querySelector('.table-container').classList.add('blur');
        } else {
            document.querySelector('.table-container').classList.remove('blur');
        }
    </script>
@endpush
