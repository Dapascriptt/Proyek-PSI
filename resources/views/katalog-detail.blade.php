@extends('layouts.app')
@section('content')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>Product detail</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}">Home</a>
                        <a href="{{ route('katalog') }}">Katalog</a>
                        <span>Product Detail</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product__details__img">
                        <div class="product__details__big__img">
                            <img class="big_img" src="{{ Storage::url($produk->foto) }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <h4>{{ $produk->nama }}</h4>
                        <h5>Rp {{ $produk->harga }}</h5>
                        <p>{{ $produk->deskripsi }}</p>
                        <!-- Button Buy Here -->
                        <div class="buy-here">
                            @auth
                                <!-- Jika sudah login, modal aktif dengan tombol Buy Here -->
                                <button type="button" class="btn btn-primary btn-buy" data-toggle="modal"
                                    data-target="#buyModal">
                                    Buy Here
                                </button>

                                <!-- Modal -->
                                <!-- Modal -->
                                <div class="modal fade" id="buyModal" tabindex="-1" aria-labelledby="buyModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h3 class="modal-title text-dark" id="buyModalLabel" style="border-bottom: none;">Konfirmasi Pembelian</h3>
                                                <button type="button" class="btn-close" data-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <!-- Modal Body -->
                                            <div class="modal-body">
                                                <!-- Payment Methods -->
                                                <h4>Metode Pembayaran</h4>
                                                <p>
                                                    <strong>Dana:</strong> 0812-8380-0498 <br>
                                                    <strong>Rekening BCA:</strong> 7810409287
                                                </p>
                                                <hr>
                                                <!-- Order Confirmation -->
                                                <h4>Konfirmasi Pemesanan Anda</h4>
                                                <p>
                                                    <a href="{{ route('buat-pesanan', $produk->id) }}" target="_blank" data-toggle="tooltip"
                                                        title="Klik untuk konfirmasi di WhatsApp">
                                                        Tekan Disini
                                                    </a>
                                                </p>
                                            </div>
                                            <!-- Modal Footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <!-- Jika belum login, tombol disabled dan diarahkan ke halaman login -->
                                <a href="{{ url('login') }}" class="btn btn-secondary disabled" aria-disabled="true">Buy
                                    Here</a>
                                <p style="font-size: 12px; font-style: italic;">*Login untuk melakukan pemesanan</p>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Details Tab -->
            <div class="product__details__tab">
            </div>
        </div>
    </section>
    <!-- Shop Details Section End -->
@endsection
