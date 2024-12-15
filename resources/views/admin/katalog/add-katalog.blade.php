@extends('admin.layouts.app')

@section('content-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Produk Add</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('produk-store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="nama-produk">Nama Produk</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama-produk" name="nama" required />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="harga-produk">Harga</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="harga-produk" name="harga" required />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="deskripsi-produk">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea id="deskripsi-produk" class="form-control" rows="3" name="deskripsi" required></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="foto-produk">Foto Produk</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="foto-produk" name="foto" required />
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic with Icons -->

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const hargaInput = document.getElementById('harga-produk');

                hargaInput.addEventListener('input', function(e) {
                    let value = e.target.value.replace(/[^0-9]/g, '');
                    const formatted = new Intl.NumberFormat('id-ID', {
                        style: 'currency',
                        currency: 'IDR',
                        minimumFractionDigits: 0
                    }).format(value);
                    e.target.value = formatted.replace('Rp', '').trim();
                });
            });
        </script>
    @endpush
@endsection
