@extends('layout.master-admin')

@section('title')
    List Kandidat Terbaik
@endsection

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <h1>
                Leaderboard Kandidat
            </h1>
        </div>
        <div class="card p-5">
            <div class="table-responsive rounded-3">
                <table class="table table-striped" id="example">
                    <thead>
                        <tr class="text-center bg-primary text-white">
                            <th scope="col">No</th>
                            <th scope="col" class="text-center">Nama</th>
                            <th scope="col">Skor</th>
                            <th scope="col" class="text-center">Action</th>
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
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.css">
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>
    <script>
        new DataTable('#example');
    </script>
@endpush
