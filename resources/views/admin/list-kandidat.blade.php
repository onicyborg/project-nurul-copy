@extends('layout.master-admin')

@section('title')
    List Kandidat Terbaik
@endsection

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <h1>
                10 List Kandidat Terbaik
            </h1>
        </div>
        <div class="card p-5">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Skor</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $no => $item)
                            <tr class="text-center">
                                <th scope="row">{{ $no+1 }}</th>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->hasil_akhir }}</td>
                                <td>
                                    <a href="/hrd/detail-kandidat/{{ $item->user->id }}" class="btn btn-secondary">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
@endpush
