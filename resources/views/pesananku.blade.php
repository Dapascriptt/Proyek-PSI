@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 75vh;">
        <div class="card" style="width: 60%;">
            <h5 class="card-header text-center">Status Pesanan Anda</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered table-sm align-middle">
                    <thead class="table-light text-center">
                        <tr>
                            <th style="width: 10%;">No</th>
                            <th>Nama</th>
                            <th>Produk</th>
                            <th style="width: 20%;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pesananku as $p)
                            <tr>
                                <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                <td class="text-center align-middle">{{ $p->user->name }}</td>
                                <td class="text-center align-middle">{{ $p->produk->nama }}</td>
                                <td class="text-center align-middle">
                                    <span class="badge bg-label-primary">{{ $p->status_pemesanan }}</span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">Belum ada pesanan yang dibuat</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
