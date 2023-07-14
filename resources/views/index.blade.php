<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StartUpXcel | Start Up</title>

    {{-- STYLE CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <main>
        {{-- NAVBAR --}}
        <nav class="navbar navbar-expand-lg py-3 position-relative">
            <div class="container d-flex justify-content-between">
                <a class="navbar-brand" href="#home">
                    <img src="{{ asset('assets/img/logo/logo-brand.svg') }}" alt="Logo Brand" width="152">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-lg-flex justify-content-lg-center" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link py-2 py-lg-0 px-lg-3 active" href="">Home</a>
                        <a class="nav-link py-2 py-lg-0 px-lg-3" href="">About Us</a>
                        <a class="nav-link py-2 py-lg-0 px-lg-3" href="">Schedule</a>
                    </div>
                </div>
                <a href="#" class="button-light d-none d-lg-flex align-items-center gap-2">
                    Contact Us
                    <img src="{{ asset('assets/img/icon/arrow-icon.svg') }}" class="img-fluid" alt="Arrow Icon">
                </a>
            </div>
        </nav>
        {{-- END NAVBAR --}}

        <div class="container">
            {{-- HERO SECTION --}}
            <section class="hero d-flex align-items-center py-4 py-lg-0 pb-xl-5 pb-xxl-0" id="hero">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="headline" style="margin-bottom: 22px;">Be a Part of the <span
                                class="light">Exciting</span> <span class="primary">StartUpXcel</span> and
                            <span class="light">Experience</span> a Transformational Journey of <span
                                class="light">Empowerment</span>
                        </h1>
                        <div class="wrapper-paragraph d-flex flex-column gap-2" style="margin-bottom: 36px;">
                            <p class="paragraph">Welcome to StartUpXcel, a platform designed to ignite and empower
                                startups from around the world. We believe in the power of innovation and are committed
                                to providing a stage where aspiring entrepreneurs can showcase their ideas, connect with
                                industry leaders, and gain the recognition they deserve.</p>
                            <p class="paragraph">At StartUpXcel, we believe that great ideas have the potential to
                                change the world. Join us and embark on a transformative journey that can shape the
                                future of your startup.</p>
                        </div>
                        <div class="wrapper-button d-flex gap-2 align-items-md-center flex-column flex-md-row">
                            <a href="#" class="button-default">Schedule Competition</a>
                            <a href="#" class="button-reverse d-flex align-items-center gap-2">
                                Register Now
                                <div class="arrow-icon d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('assets/img/icon/arrow-icon.svg') }}" class="img-fluid"
                                        alt="Button Arrow Icon">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="offset-xxl-1 col-lg-6 col-xxl-5 ps-lg-5 ps-xxl-0 d-none d-lg-inline-block">
                        <img src="{{ asset('assets/img/banner/hero-banner.svg') }}" class="img-fluid w-100"
                            alt="Hero Banner">
                    </div>
                </div>
            </section>
            {{-- END HERO SECTION --}}
        </div>
    </main>


    {{-- SCRIPT JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
