@extends('layouts/tamu',['title'=>'Kamar'])

@section('content')
<main id="content" class="site-main">
    <!-- Home slider html start -->
    <x-banner />
    <x-form-pesan />
    <!-- Home special section html start -->
    <section class="special-section">
        <x-harga />

        </div>
    </section>
    <!-- special html end -->
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
