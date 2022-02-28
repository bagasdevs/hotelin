<header id="masthead" class="site-header header-primary">
    <!-- header html start -->
    <div class="bottom-header">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="site-identity">
                <h1 class="site-title">
                    <a href="{{ route('home') }}">
                        {{-- <img src="/adminlte/assets/images/travele-logo.png" alt="logo"> --}}
                    </a>
                </h1>
            </div>
            <div class="main-navigation d-none d-lg-block">
                <nav id="navigation" class="navigation">
                    <ul>
                        <x-nav-item-tamu label="Home" :link="route('home')" />
                        <x-nav-item-tamu label="Kamar" :link="route('kamar')" />
                        {{-- <x-nav-link-tamu label="Home" :link="route('home')"> --}}
                    </ul>
                </nav>
            </div>
            <div class="header-btn">
                <a href="{{ url('admin') }}" class=" button-primary">Masuk</a>
            </div>
        </div>
    </div>
    <div class="mobile-menu-container"></div>
</header>
