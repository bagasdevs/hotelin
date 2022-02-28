@extends('layouts.tamu')

@section('content-header')
<title>Hotel Merdeka | Best Hotel 2022 </title>
@endsection

@section('content')
<main id="content" class="site-main">
    <!-- Home slider html start -->
    <section class="home-slider-section">
        <div class="home-slider">
            <div class="home-banner-items">
                <div class="banner-inner-wrap" style="background-image: url(/images/banner-2.jpg);"></div>
                <div class="banner-content-wrap">
                    <div class="container">
                        <div class="banner-content text-center">
                            <h2 class="banner-title">HOTELLIN KELILING INDONESIA</h2>
                            <p>Jika kamu mencari nuansa kamar hotel keren dan membuat nyaman ketika tidur, pastikan kamu
                                pesan kamar hotel di Indah Plaza Hotel sekarang juga.</p>
                            <a href="#" class="button-primary">LIHAT SELENGKAPNYA</a>
                        </div>
                    </div>
                </div>
                <div class="overlay"></div>
            </div>
            {{-- <div class="home-banner-items">
                <div class="banner-inner-wrap" style="background-image: url(/images/banner-1.jpg);"></div>
                <div class="banner-content-wrap">
                    <div class="container">
                        <div class="banner-content text-center">
                            <h2 class="banner-title">RASAKAN KEINDAHAN ALAM HOTEL</h2>
                            <p>Jika kamu mencari nuansa kamar hotel keren dan membuat nyaman ketika tidur, pastikan kamu
                                pesan kamar hotel di Indah Plaza Hotel sekarang juga.</p>
                            <a href="#" class="button-primary">LIHAT SELENGKAPNYA</a>
                        </div>
                    </div>
                </div>
                <div class="overlay"></div>
            </div> --}}
        </div>
    </section>

    <x-form-pesan />

    <!-- Home activity section html start -->
    <section class="activity-section">
        <div class="container">
            <div class="section-heading text-center">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h5 class="dash-style">AKTIVITAS HOTEL</h5>
                        <h2>PERJALANAN & AKTIVITAS</h2>
                        <p>Disini kami menyediakan tempat beraktivitas dan hiburan yang bervariatif sesuai dengan tujuan
                            atau keinginan anda.</p>
                    </div>
                </div>
            </div>
            <x-aktivitas />
        </div>
    </section>
    <!-- activity html end -->
    <!-- Home special section html start -->


    </div>
    </section>
    <!-- special html end -->
    <!-- Home special section html start -->
    <x-galeri />
    <!-- best html end -->
    <!-- Home client section html start -->
    <div class="client-section">
        <div class="container">
            <div class="client-wrap client-slider secondary-bg">
                <div class="client-item">
                    <figure>
                        <img src="/adminlte/assets/images/logo1.png" alt="">
                    </figure>
                </div>
                <div class="client-item">
                    <figure>
                        <img src="/adminlte/assets/images/logo2.png" alt="">
                    </figure>
                </div>
                <div class="client-item">
                    <figure>
                        <img src="/adminlte/assets/images/logo3.png" alt="">
                    </figure>
                </div>
                <div class="client-item">
                    <figure>
                        <img src="/adminlte/assets/images/logo4.png" alt="">
                    </figure>
                </div>
                <div class="client-item">
                    <figure>
                        <img src="/adminlte/assets/images/logo5.png" alt="">
                    </figure>
                </div>
                <div class="client-item">
                    <figure>
                        <img src="/adminlte/assets/images/logo2.png" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- client html end -->
    <!-- Home subscribe section html start -->
    <section class="subscribe-section" style="background-image: url(/images/banner-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
