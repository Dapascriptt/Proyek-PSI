@extends('layouts.app')
@section('content')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>Shop</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}">Home</a>
                        <span>Katalog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                @foreach ($produk as $p) 
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="product__item">
                            <a href="{{ route('katalog-detail', $p->id) }}">
                                <div class="product__item__pic set-bg" data-setbg="{{ Storage::url($p->foto) }}">
                                </div>
                            </a>
                            <div class="product__item__text">
                                <h6><a href="{{ route('katalog-detail', $p->id) }}">{{ $p->nama }}</a></h6>
                                <div class="product__item__price">Rp {{ $p->harga }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="shop__last__option">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="shop__pagination">
                            <a href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#"><span class="arrow_carrot-right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="shop__last__text">
                            <p>
                                Showing {{ $produk->firstItem() ?? 0 }}-{{ $produk->lastItem() ?? 0 }} of {{ $produk->total() }} results
                            </p>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->
@endsection
