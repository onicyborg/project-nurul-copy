@extends('layout.master-admin')

@section('title')
    Manage Admin
@endsection

@section('content')
    <div class="container mt-5">
        <div class="card p-5">
            <!-- Title and Add Admin Button -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="fw-bold">Manajemen Kandiat</h3>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addAdminModal">Tambah Admin</button>
            </div>

            <!-- Admin Table -->
            <div class="table-responsive rounded-3">
                <table class="table table-striped" id="example">
                    <thead>
                        <tr class="text-center bg-primary text-white">
                            <th scope="col">No</th>
                            <th scope="col" class="text-center">Nama</th>
                            <th scope="col" class="text-center">Email</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $no => $item)
                            <tr class="text-center">
                                <th scope="row">{{ $no + 1 }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    <button class="btn btn-warning text-white btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#editAdminModal{{ $item->id }}">Edit</button>
                                    <button class="btn btn-danger text-white btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#deleteAdminModal{{ $item->id }}">Hapus</button>
                                </td>
                            </tr>

                            <!-- Edit Admin Modal -->
                            <div class="modal fade" id="editAdminModal{{ $item->id }}" tabindex="-1"
                                aria-labelledby="editAdminModalLabel{{ $item->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editAdminModalLabel{{ $item->id }}">Edit Admin
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/update-kandidat/{{ $item->id }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Nama</label>
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        value="{{ $item->name }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email"
                                                        value="{{ $item->email }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="password" class="form-label">Password <span
                                                            class="text-muted">(Kosongkan jika tidak ingin mengubah
                                                            password)</span></label>
                                                    <input type="password" class="form-control" id="password"
                                                        name="password" value="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Delete Admin Modal -->
                            <div class="modal fade" id="deleteAdminModal{{ $item->id }}" tabindex="-1"
                                aria-labelledby="deleteAdminModalLabel{{ $item->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteAdminModalLabel{{ $item->id }}">Hapus
                                                Admin</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apakah Anda yakin ingin menghapus admin ini?</p>
                                            <form action="/delete-kandidat/{{ $item->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Add Admin Modal -->
    <div class="modal fade" id="addAdminModal" tabindex="-1" aria-labelledby="addAdminModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAdminModalLabel">Tambah Admin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/add-kandidat" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>

                </div>
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
    @if ($errors->any())
        <script>
            Swal.fire({
                title: 'Gagal',
                html: `
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            `,
                icon: 'error',
                confirmButtonText: 'Ok'
            });
        </script>
    @endif

@endpush
