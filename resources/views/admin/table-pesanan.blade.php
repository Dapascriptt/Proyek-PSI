@extends('admin.layouts.app')

@section('content-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Pesanan</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <h5 class="card-header">Tabel Pesanan</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Status Pesanan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($pesanan as $pesan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pesan->user->name }}</td>
                                <td><span class="badge bg-label-primary me-1">{{ $pesan->status_pemesanan }}</span></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item edit-btn" href="#"
                                                data-bs-toggle="modal" data-bs-target="#editModal"
                                                data-id="{{ $pesan->id }}"
                                                data-name="{{ $pesan->user->name }}"
                                                data-produk="{{ $pesan->produk->nama }}"
                                                data-status="{{ $pesan->status_pemesanan }}">
                                                <i class="bx bx-edit-alt me-1"></i> Edit
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0);"
                                                onclick="event.preventDefault(); document.getElementById('delete-form-{{ $pesan->id }}').submit();">
                                                <i class="bx bx-trash me-1"></i> Delete
                                            </a>
                                            <form id="delete-form-{{ $pesan->id }}"
                                                action="{{ route('pesanan-delete', $pesan->id) }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">Belum ada pesanan yang masuk</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->

        <!-- Edit Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Pemesanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="editForm" method="POST" action="{{ route('pesanan-update', 0) }}">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <input type="hidden" name="id" id="editId">
                            <div class="mb-3">
                                <label for="editName" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="editName" name="name" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="editProduk" class="form-label">Produk</label>
                                <input type="text" class="form-control" id="editProduk" name="Produk" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="editStatus" class="form-label">Status Pemesanan</label>
                                <select class="form-control" id="editStatus" name="status_pemesanan">
                                    <option value="Diproses">Diproses</option>
                                    <option value="Dikemas">Dikemas</option>
                                    <option value="Dalam Perjalanan">Dalam Perjalanan</option>
                                    <option value="Diterima">Diterima</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Edit Modal -->
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const editModal = document.getElementById('editModal');
            editModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const id = button.getAttribute('data-id');
                const name = button.getAttribute('data-name');
                const produk = button.getAttribute('data-produk');
                const status = button.getAttribute('data-status');
                
                const editForm = document.getElementById('editForm');
                editForm.action = '{{ route("pesanan-update", ":id") }}'.replace(':id', id);
                
                document.getElementById('editId').value = id;
                document.getElementById('editName').value = name;
                document.getElementById('editProduk').value = produk;
                document.getElementById('editStatus').value = status;
            });
        });
    </script>
    @endpush
@endsection
