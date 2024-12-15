@extends('admin.layouts.app')

@section('content-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Review</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <h5 class="card-header">Tabel Review</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Ulasan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($review as $r)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $r->user->name }}</td>
                                <td>{{ $r->ulasan }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('review-edit', $r->id) }}">
                                                <i class="bx bx-edit-alt me-1"></i>
                                                Edit
                                            </a>
                                            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                                                <i class="bx bx-trash me-1"></i>
                                                Delete
                                            </a>
                                            <form id="delete-form" action="{{ route('review-delete', $r->id) }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">Belum ada ulasan dari pelanggan</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
