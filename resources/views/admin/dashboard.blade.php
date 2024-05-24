@extends('layout.master-admin')

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
                                @if ($data->isEmpty())
                                    <tr>
                                        <td colspan="4" class="text-center">Tidak ada data yang tersedia.</td>
                                    </tr>
                                @else
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
                                @endif
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
                            <h5 class="card-title mb-9 fw-semibold">Total Kandidat yang Melakukan Test</h5>
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <h4 class="fw-semibold mb-3">
                                        {{ $total }} Orang
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
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Ubah Status Recruitment
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!-- Monthly Earnings -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-start">
                                <div class="col-9">
                                    <h5 class="card-title mb-9 fw-semibold">Reset Data Recruitment</h5>
                                    <div class="d-flex align-items-center pb-1">
                                        <span
                                            class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-pencil text-danger"></i>
                                        </span>
                                        <p class="text-dark me-1 fs-3 mb-0">Fitur ini berfungsi untuk menghapus seluruh data
                                            test calon karyawan</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="d-flex justify-content-end">
                                        <div
                                            class="text-white bg-danger rounded-circle p-6 d-flex align-items-center justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-repeat">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M4 12v-3a3 3 0 0 1 3 -3h13m-3 -3l3 3l-3 3" />
                                                <path d="M20 12v3a3 3 0 0 1 -3 3h-13m3 3l-3 -3l3 -3" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mt-4 mb-3">
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#reset"
                                    {{ $status->status == 'in_progress' ? 'disabled' : '' }}>
                                    Reset Data Recruitment
                                </button>
                            </div>
                            @if ($status->status == 'in_progress')
                                <div class="d-flex justify-content-start">
                                    <p class="fw-bold"><span class="text-danger">* &nbsp;</span>Anda tidak dapat melakukan
                                        reset selama proses recruitment masih berjalan</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="/update-status-recruitment" method="POST">
                @csrf
                @method('put')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ubah Status Recruitment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="status" class="form-label">Status Recruitment</label>
                            <select class="form-select" id="status" name="status">
                                <option value="in_progress" {{ $status->status == 'in_progress' ? 'selected' : '' }}>In
                                    Progress
                                </option>
                                <option value="closed" {{ $status->status == 'closed' ? 'selected' : '' }}>Closed</option>
                            </select>
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

    <!-- Modal -->
    <div class="modal fade" id="reset" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="/reset-data" method="post">
                @csrf
                @method('delete')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Penghapusan Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="fw-2">Anda Yakin Ingin Menghapus Seluruh Data Test Recruitment?? Hal ini akan menghapus
                            seluruh data dan tidak dapat di kembalikan</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Konfirmasi</button>
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
@endpush
