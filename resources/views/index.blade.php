@extends('layouts.app')
@section('content')
<body>
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <h2>Making your life sweeter with De Lifi Homemade!</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row justify-content-center"> <!-- Menambahkan justify-content-center -->
                <div class="col-lg-6 col-md-6">
                    <div class="about__text text-center"> <!-- Menambahkan text-center untuk konten di tengah -->
                        <div class="section-title">
                            <span>About De Lifi Homemade</span>
                            <h2>Cakes and bakes fresh from our home!</h2>
                        </div>
                        <p>Kami menerima pesanan berbagai jenis kue dan makanan penutup, termasuk cookies yang lezat, kue yang moist dan flavorful, puding yang lembut dan manis, dessert yang menggugah selera, serta pasta dengan cita rasa autentik. Setiap pesanan dibuat dengan bahan-bahan berkualitas dan penuh kasih sayang untuk memastikan kepuasan Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section End -->

    <!-- Categories Section Begin -->
    <div class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="categories__item">
                        <div class="categories__item__icon">
                            <span class="flaticon-034-chocolate-roll"></span>
                            <h5>Lasagna</h5>
                        </div>
                    </div>
                    <div class="categories__item">
                        <div class="categories__item__icon">
                            <span class="flaticon-005-pancake"></span>
                            <h5>Dessert Box</h5>
                        </div>
                    </div>
                    <div class="categories__item">
                        <div class="categories__item__icon">
                            <span class="flaticon-030-cupcake-2"></span>
                            <h5>Pudding</h5>
                        </div>
                    </div>
                    <div class="categories__item">
                        <div class="categories__item__icon">
                            <span class="flaticon-006-macarons"></span>
                            <h5>Cupcake</h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Categories Section End -->
    <!-- Team Section Begin -->
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7">
                    <div class="section-title">
                        <span>Our team</span>
                        <h2>Delifi Baker </h2>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5">
                    {{-- <div class="team__btn">
                        <a href="#" class="primary-btn">Join Us</a>
                    </div> --}}
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item set-bg" data-setbg="img/team/alvin.jpg">
                        <div class="team__item__text">
                            <h6>Alvin Irwandy</h6>
                            <span>Owner</span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item set-bg" data-setbg="img/team/marva.jpg">
                        <div class="team__item__text">
                            <h6>Marva Zaneta</h6>
                            <span>Karyawan</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Team Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Testimonial</span>
                        <h2>Our client say</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial__slider owl-carousel">
                        @foreach ($review as $r)
                            <div class="testimonial__item">
                                <div class="testimonial__author">
                                    <div class="testimonial__author__text">
                                        <h5>{{ $r->user->name }}</h5>
                                    </div>
                                </div>
                                <p>"{{ $r->ulasan }}"</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section End -->

    <!-- Instagram Section Begin -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 p-0">
                    <div class="instagram__text">
                        <div class="section-title">
                            <span>Follow us on instagram</span>
                            <h2>Sweet moments are saved as memories.</h2>
                        </div>
                        <h5><i class="fa fa-instagram"></i>@delifi.homemade</h5>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/kue/kue1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic middle__pic">
                                <img src="img/kue/kue2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/kue/kue3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/kue/kue4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->


<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
@endsection
<!-- Search End -->

<!-- Js Plugins -->



