{{-- NAVBAR --}}
<nav class="navbar navbar-dark navbar-expand-lg py-3 position-relative" data-aos-once="true" data-aos="fade-down"
    data-aos-duration="1400">
    <div class="container d-flex justify-content-between">
        <a class="navbar-brand" href="#home">
            <img src="{{ asset('assets/img/logo/logo-brand.svg') }}" alt="Logo Brand" width="152">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-lg-flex justify-content-lg-center" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link py-2 py-lg-0 px-lg-3 active" href="#home">Home</a>
                <a class="nav-link py-2 py-lg-0 px-lg-3" href="#about">About Us</a>
                <a class="nav-link py-2 py-lg-0 px-lg-3" href="#schedule">Schedule</a>
            </div>
        </div>
        <a href="https://wa.me/6281234567890" target="_blank"
            class="button-light d-none d-lg-flex align-items-center gap-2">
            Contact Us
            <img src="{{ asset('assets/img/icon/arrow-icon.svg') }}" class="img-fluid" alt="Arrow Icon">
        </a>
    </div>
</nav>
{{-- END NAVBAR --}}
